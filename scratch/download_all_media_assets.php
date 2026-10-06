<?php
$root = dirname(__DIR__);
$docsDir = $root . '/documents';
$imgDir = $root . '/images';

if (!is_dir($docsDir)) mkdir($docsDir, 0777, true);
if (!is_dir($imgDir)) mkdir($imgDir, 0777, true);

$allPdfs = json_decode(file_get_contents(__DIR__ . '/crawled_all_pdfs.json'), true);
$allImages = json_decode(file_get_contents(__DIR__ . '/crawled_all_images.json'), true);
$pageMediaMap = json_decode(file_get_contents(__DIR__ . '/crawled_page_media_map.json'), true);

echo "Total PDFs to process: " . count($allPdfs) . "\n";
echo "Total Images to process: " . count($allImages) . "\n";

// Helper for clean filename
function sanitizeFilename($url, $defaultExt = 'jpg') {
    $path = parse_url($url, PHP_URL_PATH);
    $filename = basename($path);
    // Remove query params or URL encoding
    $filename = urldecode($filename);
    $filename = preg_replace('/[^a-zA-Z0-9_\-\.]/', '_', $filename);
    if (empty($filename) || $filename === '.') {
        $filename = md5($url) . '.' . $defaultExt;
    }
    return $filename;
}

// Download batch helper
function downloadBatch($urlMap, $destDir) {
    $mh = curl_multi_init();
    $curlHandles = [];
    $fileHandles = [];

    foreach ($urlMap as $url => $localPath) {
        if (file_exists($localPath) && filesize($localPath) > 500) {
            continue; // Already downloaded
        }
        $fp = fopen($localPath, 'w+');
        if (!$fp) continue;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_multi_add_handle($mh, $ch);
        $curlHandles[$url] = $ch;
        $fileHandles[$url] = $fp;
    }

    if (empty($curlHandles)) {
        curl_multi_close($mh);
        return 0;
    }

    $running = null;
    do {
        curl_multi_exec($mh, $running);
        curl_multi_select($mh);
    } while ($running > 0);

    $successCount = 0;
    foreach ($curlHandles as $url => $ch) {
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $localPath = $urlMap[$url];
        fclose($fileHandles[$url]);
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);

        if ($httpCode == 200 && file_exists($localPath) && filesize($localPath) > 500) {
            $successCount++;
        } else {
            // Delete failed or empty file
            if (file_exists($localPath)) @unlink($localPath);
        }
    }
    curl_multi_close($mh);
    return $successCount;
}

// 1. Download PDFs
echo "\n--- Downloading PDFs to documents/ ---\n";
$pdfMap = [];
$pdfNameToUrl = [];
foreach (array_keys($allPdfs) as $url) {
    $name = sanitizeFilename($url, 'pdf');
    $pdfMap[$url] = $docsDir . '/' . $name;
    $pdfNameToUrl[$name] = $url;
}

$pdfChunks = array_chunk($pdfMap, 15, true);
$totalPdfsDownloaded = 0;
foreach ($pdfChunks as $idx => $chunk) {
    $count = downloadBatch($chunk, $docsDir);
    $totalPdfsDownloaded += $count;
    echo "PDF Batch " . ($idx + 1) . "/" . count($pdfChunks) . " done. Downloaded: $count\n";
}

// 2. Download Images
echo "\n--- Downloading Images to images/ ---\n";
$imgMap = [];
$imgNameToUrl = [];
foreach (array_keys($allImages) as $url) {
    // Filter out generic external CDN tracking pixels or small external badges if not needed
    if (strpos($url, 'rkdfuniversity.org') === false && strpos($url, 'wp-content') === false) {
        continue;
    }
    $name = sanitizeFilename($url, 'jpg');
    $imgMap[$url] = $imgDir . '/' . $name;
    $imgNameToUrl[$name] = $url;
}

$imgChunks = array_chunk($imgMap, 30, true);
$totalImagesDownloaded = 0;
foreach ($imgChunks as $idx => $chunk) {
    $count = downloadBatch($chunk, $imgDir);
    $totalImagesDownloaded += $count;
    echo "Image Batch " . ($idx + 1) . "/" . count($imgChunks) . " done. Downloaded: $count\n";
}

echo "\nCompleted all downloads!\n";
echo "Total PDFs in documents/: " . count(glob($docsDir . '/*.pdf')) . "\n";
echo "Total Images in images/: " . count(glob($imgDir . '/*.*')) . "\n";

file_put_contents(__DIR__ . '/local_pdf_registry.json', json_encode($pdfMap, JSON_PRETTY_PRINT));
file_put_contents(__DIR__ . '/local_image_registry.json', json_encode($imgMap, JSON_PRETTY_PRINT));
