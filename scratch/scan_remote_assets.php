<?php
$root = dirname(__DIR__);
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root));
$remoteAssets = [];

foreach ($it as $file) {
    if ($file->isDir()) continue;
    $path = $file->getPathname();
    if (strpos($path, 'scratch') !== false) continue;
    if (strpos($path, '.git') !== false) continue;
    if (pathinfo($path, PATHINFO_EXTENSION) !== 'php') continue;

    $content = file_get_contents($path);
    if (preg_match_all('/https?:\/\/[^\s"\'\)\<\>]+?\.(pdf|docx?|xlsx?|pptx?|jpe?g|png|webp|gif|zip)/i', $content, $matches)) {
        foreach ($matches[0] as $url) {
            $relPath = str_replace($root . DIRECTORY_SEPARATOR, '', $path);
            $remoteAssets[$url][] = $relPath;
        }
    }
}

echo "Found " . count($remoteAssets) . " distinct remote media/doc URLs:\n";
foreach ($remoteAssets as $url => $files) {
    echo "\nURL: $url\nUsed in:\n";
    foreach (array_unique($files) as $f) {
        echo "  - $f\n";
    }
}
