<?php
/**
 * Find all image URLs and document URLs in scraped HTML files
 */

$dir = __DIR__ . '/scraped_schools';
$files = glob("$dir/*.html");

$allMedia = [];

foreach ($files as $file) {
    $slug = basename($file, '.html');
    $html = file_get_contents($file);

    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    // Images
    foreach ($xpath->query('//img') as $img) {
        $src = $img->getAttribute('src');
        if ($src && (strpos($src, 'wp-content/uploads') !== false || strpos($src, 'rkdf') !== false)) {
            $allMedia[$src][] = "img:$slug";
        }
        $dataSrc = $img->getAttribute('data-src');
        if ($dataSrc && (strpos($dataSrc, 'wp-content/uploads') !== false || strpos($dataSrc, 'rkdf') !== false)) {
            $allMedia[$dataSrc][] = "img:$slug";
        }
    }

    // Links to PDFs and documents
    foreach ($xpath->query('//a') as $a) {
        $href = $a->getAttribute('href');
        if ($href && preg_match('/\.(pdf|docx?|xlsx?)$/i', $href)) {
            $allMedia[$href][] = "doc:$slug";
        }
    }
}

file_put_contents(__DIR__ . '/scraped_all_media.json', json_encode($allMedia, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

echo "Found " . count($allMedia) . " media assets in scraped pages:\n";
foreach ($allMedia as $url => $contexts) {
    echo "- $url (" . implode(', ', array_unique($contexts)) . ")\n";
}
