<?php
require_once __DIR__ . '/../includes/functions.php';

$allPhpFiles = [];
$dirs = ['.', 'about', 'governance', 'boards', 'departments', 'admissions', 'media', 'sections', 'includes'];
foreach ($dirs as $d) {
    $dirPath = dirname(__DIR__) . '/' . trim($d, './');
    if (is_dir($dirPath)) {
        foreach (glob($dirPath . '/*.php') as $f) {
            $allPhpFiles[] = $f;
        }
    }
}

$missing = [];
foreach ($allPhpFiles as $f) {
    $content = file_get_contents($f);
    if (preg_match_all("/lucide_icon\(\s*'([^']+)'/", $content, $m)) {
        foreach ($m[1] as $ic) {
            if (lucide_icon($ic) === '') {
                $missing[$ic][] = basename($f);
            }
        }
    }
    if (preg_match_all("/'icon'\s*=>\s*'([^']+)'/", $content, $m2)) {
        foreach ($m2[1] as $ic) {
            if (lucide_icon($ic) === '') {
                $missing[$ic][] = basename($f);
            }
        }
    }
}

echo "TOTAL MISSING ICONS: " . count($missing) . "\n";
foreach ($missing as $icon => $fileList) {
    echo "- $icon (in: " . implode(', ', array_unique($fileList)) . ")\n";
}
