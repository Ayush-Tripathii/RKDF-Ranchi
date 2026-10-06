<?php
$root = dirname(__DIR__);
$docsDir = $root . '/documents';
$imgDir = $root . '/images';

if (!is_dir($docsDir)) mkdir($docsDir, 0777, true);
if (!is_dir($imgDir)) mkdir($imgDir, 0777, true);

$allPdfs = json_decode(file_get_contents(__DIR__ . '/crawled_all_pdfs.json'), true);
$allImages = json_decode(file_get_contents(__DIR__ . '/crawled_all_images.json'), true);

function sanitizeFilename($url, $defaultExt = 'jpg') {
    $path = parse_url($url, PHP_URL_PATH);
    $filename = basename($path);
    $filename = urldecode($filename);
    $filename = preg_replace('/[^a-zA-Z0-9_\-\.]/', '_', $filename);
    if (empty($filename) || $filename === '.') {
        $filename = md5($url) . '.' . $defaultExt;
    }
    return $filename;
}

function parallelDownload($items, $concurrency = 30, $timeout = 10) {
    $mh = curl_multi_init();
    $activeHandles = [];
    $total = count($items);
    $completed = 0;
    $success = 0;

    $queue = array_values($items);
    $queueIdx = 0;

    // Helper to start handle
    $startHandle = function($item) use ($mh, &$activeHandles, $timeout) {
        $url = $item['url'];
        $dest = $item['dest'];
        
        $fp = fopen($dest . '.tmp', 'wb');
        if (!$fp) return;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_multi_add_handle($mh, $ch);

        $activeHandles[(int)$ch] = [
            'ch' => $ch,
            'fp' => $fp,
            'url' => $url,
            'dest' => $dest,
            'tmp' => $dest . '.tmp'
        ];
    };

    // Fill initial pool
    while ($queueIdx < $total && count($activeHandles) < $concurrency) {
        $startHandle($queue[$queueIdx++]);
    }

    do {
        while (($status = curl_multi_exec($mh, $running)) === CURLM_CALL_MULTI_PERFORM);
        if ($status !== CURLM_OK) break;

        while ($info = curl_multi_info_read($mh)) {
            $ch = $info['handle'];
            $handleId = (int)$ch;
            $meta = $activeHandles[$handleId];

            fclose($meta['fp']);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $tmpPath = $meta['tmp'];
            $destPath = $meta['dest'];

            curl_multi_remove_handle($mh, $ch);
            curl_close($ch);
            unset($activeHandles[$handleId]);

            $completed++;

            if ($httpCode == 200 && file_exists($tmpPath) && filesize($tmpPath) > 500) {
                rename($tmpPath, $destPath);
                $success++;
            } else {
                if (file_exists($tmpPath)) @unlink($tmpPath);
            }

            if ($completed % 25 == 0 || $completed == $total) {
                echo "Progress: $completed / $total (Success: $success)\n";
            }

            // Refill pool
            while ($queueIdx < $total && count($activeHandles) < $concurrency) {
                $startHandle($queue[$queueIdx++]);
            }
        }

        if ($running > 0) {
            curl_multi_select($mh, 0.05);
        }
    } while ($running > 0 || !empty($activeHandles));

    curl_multi_close($mh);
    return $success;
}

// 1. Prepare PDF items
$pdfItems = [];
foreach (array_keys($allPdfs) as $url) {
    $filename = sanitizeFilename($url, 'pdf');
    $dest = $docsDir . '/' . $filename;
    if (!file_exists($dest) || filesize($dest) < 500) {
        $pdfItems[] = ['url' => $url, 'dest' => $dest];
    }
}
echo "Pending PDFs to download: " . count($pdfItems) . " (Already exist: " . (count($allPdfs) - count($pdfItems)) . ")\n";
if (!empty($pdfItems)) {
    echo "Downloading PDFs with 20 parallel connections...\n";
    parallelDownload($pdfItems, 20, 15);
}

// 2. Prepare Image items
$imgItems = [];
foreach (array_keys($allImages) as $url) {
    if (strpos($url, 'rkdfuniversity.org') === false && strpos($url, 'wp-content') === false) {
        continue;
    }
    $filename = sanitizeFilename($url, 'jpg');
    $dest = $imgDir . '/' . $filename;
    if (!file_exists($dest) || filesize($dest) < 500) {
        $imgItems[] = ['url' => $url, 'dest' => $dest];
    }
}
echo "\nPending Images to download: " . count($imgItems) . " (Already exist: " . (count($allImages) - count($imgItems)) . ")\n";
if (!empty($imgItems)) {
    echo "Downloading Images with 35 parallel connections...\n";
    parallelDownload($imgItems, 35, 10);
}

echo "\n--- Summary ---\n";
echo "Total PDFs in documents/: " . count(glob($docsDir . '/*.pdf')) . "\n";
echo "Total Images in images/: " . count(glob($imgDir . '/*.*')) . "\n";
