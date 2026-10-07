<?php
require_once __DIR__ . '/../includes/functions.php';

// Get defined icons in functions.php
$functionsCode = file_get_contents(__DIR__ . '/../includes/functions.php');
preg_match_all("/'([a-z0-9\-]+)'\s*=>\s*'(<path|<svg|<circle|<rect|<line|<polyline|<polygon)/i", $functionsCode, $m);
$definedIcons = array_unique($m[1]);
echo "Defined icons count: " . count($definedIcons) . "\n";

// Scan all PHP files
$allFiles = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(dirname(__DIR__)));
$usedIcons = [];
$missingMap = [];

foreach ($allFiles as $file) {
    if ($file->isFile() && $file->getExtension() === 'php' && strpos($file->getPathname(), 'scratch') === false) {
        $content = file_get_contents($file->getPathname());
        if (preg_match_all("/lucide_icon\(\s*['\"]([a-z0-9\-]+)['\"]/i", $content, $matches)) {
            foreach ($matches[1] as $icon) {
                $usedIcons[$icon] = true;
                $svg = lucide_icon($icon);
                if (empty($svg)) {
                    $missingMap[$icon][] = str_replace(dirname(__DIR__) . DIRECTORY_SEPARATOR, '', $file->getPathname());
                }
            }
        }
    }
}

echo "Total used icons: " . count($usedIcons) . "\n";
echo "Missing icons count: " . count($missingMap) . "\n";

foreach ($missingMap as $icon => $files) {
    $files = array_unique($files);
    echo "Missing: '{$icon}' in " . implode(', ', array_slice($files, 0, 3)) . "\n";
}
