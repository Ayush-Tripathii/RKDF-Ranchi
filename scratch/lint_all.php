<?php
/**
 * Lint all PHP files in the project recursively
 */

$root = dirname(__DIR__);
$phpCli = 'd:\\xampp\\php\\php.exe';

function getPhpFiles($dir) {
    $results = [];
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            if ($item === '.git') continue;
            $results = array_merge($results, getPhpFiles($path));
        } elseif (substr($item, -4) === '.php') {
            $results[] = $path;
        }
    }
    return $results;
}

$files = getPhpFiles($root);
$errors = 0;
$passed = 0;

echo "Linting " . count($files) . " PHP files...\n\n";

foreach ($files as $file) {
    $cmd = escapeshellarg($phpCli) . " -l " . escapeshellarg($file) . " 2>&1";
    $output = [];
    $ret = 0;
    exec($cmd, $output, $ret);
    $outStr = implode("\n", $output);
    if ($ret !== 0 || strpos($outStr, 'No syntax errors detected') === false) {
        echo "[ERROR] in " . str_replace($root . DIRECTORY_SEPARATOR, '', $file) . ":\n$outStr\n\n";
        $errors++;
    } else {
        $passed++;
    }
}

echo "====================================\n";
echo "Total files: " . count($files) . "\n";
echo "Passed: $passed\n";
echo "Errors: $errors\n";
echo "====================================\n";
