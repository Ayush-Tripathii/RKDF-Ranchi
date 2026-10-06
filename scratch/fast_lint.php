<?php
/**
 * Fast PHP syntax validator
 */

$root = dirname(__DIR__);

function getFiles($dir) {
    $out = [];
    foreach (scandir($dir) as $item) {
        if ($item === '.' || $item === '..' || $item === '.git') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            $out = array_merge($out, getFiles($path));
        } elseif (substr($item, -4) === '.php') {
            $out[] = $path;
        }
    }
    return $out;
}

$files = getFiles($root);
$errors = [];

foreach ($files as $file) {
    $code = file_get_contents($file);
    try {
        // PHP 8+ supports token_get_all with TOKEN_PARSE flag to catch syntax errors instantly in-memory without spawning child processes!
        token_get_all($code, TOKEN_PARSE);
    } catch (\ParseError $e) {
        $errors[] = str_replace($root . DIRECTORY_SEPARATOR, '', $file) . ": " . $e->getMessage() . " on line " . $e->getLine();
    }
}

echo "Checked " . count($files) . " PHP files.\n";
if (empty($errors)) {
    echo "SUCCESS: 0 syntax errors detected across the entire codebase!\n";
} else {
    echo "ERRORS:\n" . implode("\n", $errors) . "\n";
}
