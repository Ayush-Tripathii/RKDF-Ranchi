<?php
require_once __DIR__ . '/../includes/functions.php';

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__ . '/..'));
$missing = [];
$checked = 0;

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        if (preg_match_all("/lucide_icon\(\s*['\"]([^'\"]+)['\"]/", $content, $matches)) {
            foreach ($matches[1] as $iconName) {
                $checked++;
                $svg = lucide_icon($iconName);
                if (empty($svg)) {
                    $missing[$iconName][] = str_replace(dirname(__DIR__) . DIRECTORY_SEPARATOR, '', $file->getPathname());
                }
            }
        }
    }
}

echo "Total icon calls checked: " . $checked . PHP_EOL;
if (empty($missing)) {
    echo "SUCCESS: All icons exist in includes/functions.php!" . PHP_EOL;
} else {
    echo "Missing icons found:" . PHP_EOL;
    foreach ($missing as $icon => $files) {
        echo " - '{$icon}' used in: " . implode(', ', array_unique($files)) . PHP_EOL;
    }
}
