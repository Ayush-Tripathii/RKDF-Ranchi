<?php
$data = json_decode(file_get_contents(__DIR__ . '/scraped_live_data.json'), true);
$media = [];

foreach ($data as $k => $v) {
    preg_match_all('/(https?:\/\/[^\s"\'<>]+?\.(?:png|jpg|jpeg|webp|pdf|docx?|xlsx?))/i', $v['raw_html'], $m);
    foreach ($m[1] as $url) {
        $media[] = $url;
    }
}
$media = array_unique($media);
echo "Total Media Assets Found across 20 pages: " . count($media) . "\n";

$context = stream_context_create([
    'http' => ['timeout' => 15, 'user_agent' => 'Mozilla/5.0'],
    'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]
]);

$downloadMap = [];

foreach ($media as $url) {
    $parsed = parse_url($url);
    $path = $parsed['path'];
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $filename = basename($path);
    
    if (in_array($ext, ['pdf', 'doc', 'docx', 'xls', 'xlsx'])) {
        $targetDir = dirname(__DIR__) . '/documents';
        $relPath = 'documents/' . $filename;
    } else {
        $targetDir = dirname(__DIR__) . '/images';
        $relPath = 'images/' . $filename;
    }
    
    if (!is_dir($targetDir)) {
        @mkdir($targetDir, 0777, true);
    }
    
    $targetFile = $targetDir . '/' . $filename;
    if (!file_exists($targetFile)) {
        echo "Downloading: $filename from $url ... ";
        $content = @file_get_contents($url, false, $context);
        if ($content && strlen($content) > 100) {
            file_put_contents($targetFile, $content);
            echo "OK (" . round(strlen($content) / 1024, 1) . " KB)\n";
        } else {
            echo "FAILED\n";
        }
    } else {
        echo "Already exists: $filename\n";
    }
    
    $downloadMap[$url] = $relPath;
}

file_put_contents(__DIR__ . '/download_map.json', json_encode($downloadMap, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
echo "Asset map saved to scratch/download_map.json\n";
