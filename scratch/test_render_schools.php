<?php
/**
 * Test rendering all 13 department and school pages
 */

$root = dirname(__DIR__);

$schoolPages = [
    'departments/index.php',
    'departments/school-of-engineering-technology.php',
    'departments/school-of-law.php',
    'departments/school-of-management.php',
    'departments/school-of-information-technology.php',
    'departments/school-of-pharmacy.php',
    'departments/school-of-basic-and-applied-sciences.php',
    'departments/school-of-life-sciences.php',
    'departments/school-of-commerce.php',
    'departments/school-of-arts-and-humanities.php',
    'departments/school-of-journalism-and-mass-communication.php',
    'departments/school-of-fashion-and-interior-designing.php',
    'departments/school-of-library-science.php',
];

$errors = [];
$success = 0;

foreach ($schoolPages as $page) {
    $filePath = $root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $page);
    $cmd = 'd:\\xampp\\php\\php.exe ' . escapeshellarg($filePath) . ' 2>&1';
    $output = [];
    $ret = 0;
    exec($cmd, $output, $ret);
    $outStr = implode("\n", $output);

    if ($ret !== 0 || strpos($outStr, 'Fatal error') !== false || strpos($outStr, 'Parse error') !== false) {
        $errors[] = "[FAILED] {$page}:\n" . substr($outStr, 0, 500);
    } else {
        $success++;
        echo "✓ Successfully rendered {$page} (" . strlen($outStr) . " bytes)\n";
    }
}

echo "\n=========================================\n";
echo "Rendered successfully: {$success}/" . count($schoolPages) . " school pages\n";
if (!empty($errors)) {
    echo "ERRORS:\n" . implode("\n\n", $errors) . "\n";
} else {
    echo "ALL 13 DEPARTMENT PAGES RENDERED FLAWLESSLY!\n";
}
echo "=========================================\n";
