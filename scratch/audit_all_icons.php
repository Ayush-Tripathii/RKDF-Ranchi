<?php
require_once __DIR__ . '/../includes/functions.php';

$dir = realpath(__DIR__ . '/../');
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

$all_icons_used = [];
$missing_by_file = [];

foreach ($files as $file) {
    if ($file->isDir()) continue;
    if ($file->getExtension() !== 'php') continue;
    
    // Skip scratch folder
    if (strpos($file->getPathname(), 'scratch') !== false) continue;

    $content = file_get_contents($file->getPathname());
    
    // Match lucide_icon('name' or lucide_icon("name"
    if (preg_match_all('/lucide_icon\s*\(\s*[\'"]([^\'"]+)[\'"]/', $content, $matches)) {
        foreach ($matches[1] as $iconName) {
            $all_icons_used[$iconName] = true;
            $res = lucide_icon($iconName);
            if (empty($res)) {
                $missing_by_file[$file->getFilename()][] = $iconName;
            }
        }
    }
}

echo "=== ICON AUDIT REPORT ===\n";
echo "Total Unique Icons Called Across Project: " . count($all_icons_used) . "\n";
echo "Icons List:\n" . implode(', ', array_keys($all_icons_used)) . "\n\n";

if (empty($missing_by_file)) {
    echo "SUCCESS: ALL icons across ALL project PHP files are properly defined and rendering SVGs!\n";
} else {
    echo "WARNING: Missing icons found in the following files:\n";
    print_r($missing_by_file);
}
