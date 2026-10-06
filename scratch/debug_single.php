<?php
$cmd = '"d:\xampp\php\php.exe" "' . realpath(__DIR__ . '/../about/career.php') . '" 2>&1';
$out = shell_exec($cmd);
echo "OUTPUT LENGTH: " . strlen($out) . "\n";
echo "LAST 400 CHARS:\n" . substr($out, -400) . "\n";
if (preg_match('/(Fatal error|Parse error|Warning|Notice):.*/i', $out, $matches)) {
    echo "MATCHED ERROR: " . $matches[0] . "\n";
} else {
    echo "NO PHP ERRORS FOUND!\n";
}
