<?php
$localPages = [];
$dirs = ['.', 'about', 'governance', 'boards', 'departments', 'admissions', 'media'];

foreach ($dirs as $d) {
    $dirPath = dirname(__DIR__) . ($d === '.' ? '' : '/' . $d);
    if (is_dir($dirPath)) {
        foreach (glob($dirPath . '/*.php') as $f) {
            $rel = str_replace(dirname(__DIR__) . '/', '', str_replace('\\', '/', $f));
            if (!str_contains($rel, 'header') && !str_contains($rel, 'footer') && !str_contains($rel, 'nav')) {
                $localPages[] = $rel;
            }
        }
    }
}
sort($localPages);

echo "Total Local Pages: " . count($localPages) . "\n";
foreach ($localPages as $p) {
    echo "- $p\n";
}
