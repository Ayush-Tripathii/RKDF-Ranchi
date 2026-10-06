<?php
$_SERVER['REQUEST_URI'] = '/RKDF%20Ranchi/';
$_SERVER['PHP_SELF'] = '/RKDF Ranchi/index.php';
$_SERVER['HTTP_HOST'] = 'localhost';

$root = dirname(__DIR__);

$newPages = [
    'courses/common-courses-for-all.php',
    'courses/b-tech.php',
    'courses/bba.php',
    'courses/ba.php',
    'courses/b-com.php',
    'courses/b-sc.php',
    'courses/mba.php',
    'courses/m-sc.php',
    'courses/ma.php',
    'courses/m-com.php',
    'courses/law.php',
    'courses/pharmacy.php',
    'courses/fashion-designing.php',
    'courses/social-work.php',
    'placements/index.php',
    'facilities/index.php',
    'facilities/library.php',
    'facilities/hostel.php',
    'facilities/sports.php',
    'facilities/health.php',
    'facilities/transport.php',
    'facilities/differently-abled.php',
    'admissions/scholarship.php',
    'admissions/academic-collaborations.php',
    'admissions/examination-forms.php',
    'admissions/study-in-india.php',
    'admissions/international-students.php',
    'about/career.php',
    'about/alumni-committee.php',
    'about/rti.php',
    'about/digilocker.php',
    'about/privacy-policy.php',
    'about/terms-conditions.php',
    'media/sushrut-magazine.php',
];

$passed = 0;
$failed = 0;

foreach ($newPages as $page) {
    $path = $root . '/' . $page;
    if (!file_exists($path)) {
        echo "[MISSING] $page\n";
        $failed++;
        continue;
    }
    
    // Test PHP lint first
    $lint = shell_exec("d:\\xampp\\php\\php.exe -l \"$path\" 2>&1");
    if (!str_contains($lint, 'No syntax errors detected')) {
        echo "[LINT FAIL] $page: $lint\n";
        $failed++;
    } else {
        echo "[PASS] $page\n";
        $passed++;
    }
}

echo "\nSummary: $passed Passed, $failed Failed out of " . count($newPages) . " pages tested.\n";
