<?php
$root = dirname(__DIR__);
$docsDir = $root . '/documents';
$imgDir = $root . '/images';

$pageMediaMap = json_decode(file_get_contents(__DIR__ . '/crawled_page_media_map.json'), true);
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

// 1. Build master URL replacement map for any external rkdf URLs found in PHP code
$replacements = [];

foreach (array_keys($allPdfs) as $url) {
    $fn = sanitizeFilename($url, 'pdf');
    if (file_exists($docsDir . '/' . $fn)) {
        $replacements[$url] = "<?= url('documents/" . $fn . "') ?>";
        $replacements_raw[$url] = "documents/" . $fn;
    }
}

foreach (array_keys($allImages) as $url) {
    $fn = sanitizeFilename($url, 'jpg');
    if (file_exists($imgDir . '/' . $fn)) {
        $replacements[$url] = "<?= url('images/" . $fn . "') ?>";
        $replacements_raw[$url] = "images/" . $fn;
    }
}

// 2. Scan all PHP files in project and replace external URLs with local url() calls
$allPhpFiles = [];
$iter = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root));
foreach ($iter as $file) {
    if ($file->isDir()) continue;
    $p = $file->getPathname();
    if (strpos($p, 'scratch') !== false || strpos($p, '.git') !== false) continue;
    if (substr($p, -4) === '.php') {
        $allPhpFiles[] = $p;
    }
}

echo "Total PHP files in project to audit: " . count($allPhpFiles) . "\n";

$updatedFiles = 0;
foreach ($allPhpFiles as $phpFile) {
    $content = file_get_contents($phpFile);
    $orig = $content;

    // Direct url replacements
    foreach ($replacements_raw as $extUrl => $localRel) {
        // match inside quotes
        if (strpos($content, $extUrl) !== false) {
            // Check if inside url('...') or direct string
            $content = str_replace($extUrl, urlPrefix($localRel, $phpFile), $content);
        }
    }

    if ($content !== $orig) {
        file_put_contents($phpFile, $content);
        $updatedFiles++;
        echo "Updated external URLs in: " . str_replace($root . DIRECTORY_SEPARATOR, '', $phpFile) . "\n";
    }
}

function urlPrefix($localRel, $filePath) {
    // If inside PHP array or echo
    return "url('" . $localRel . "')";
}

echo "Replacements complete. Files updated: $updatedFiles\n";

// 3. Print media summary per category to see which pages have rich assets available
echo "\n--- Available Media By Page Group ---\n";
$summary = [];
foreach ($pageMediaMap as $slug => $data) {
    $pdfCount = count($data['pdfs'] ?? []);
    $imgCount = count($data['images'] ?? []);
    if ($pdfCount > 0 || $imgCount > 0) {
        $summary[$slug] = ['pdfs' => $pdfCount, 'images' => $imgCount];
    }
}

echo "Pages with media assets: " . count($summary) . "\n";
foreach (array_slice($summary, 0, 30, true) as $slug => $counts) {
    echo sprintf("  %-40s : %2d PDFs, %3d Images\n", $slug, $counts['pdfs'], $counts['images']);
}

file_put_contents(__DIR__ . '/page_media_summary.json', json_encode($summary, JSON_PRETTY_PRINT));
