<?php
$pages = [
    'about/career.php',
    'about/alumni-committee.php',
    'about/digilocker.php',
    'about/rti.php',
    'about/privacy-policy.php',
    'about/terms-conditions.php',
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
    'courses/index.php',
    'courses/under-graduate-programs.php',
    'courses/post-graduate-programs.php',
    'courses/diploma-programs.php',
    'courses/doctoral-programs.php',
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
    'media/sushrut-magazine.php',
    'index.php',
    'contact.php',
    'research.php',
];

$errors = 0;
foreach ($pages as $page) {
    $fullPath = realpath(__DIR__ . '/../' . $page);
    if (!$fullPath || !file_exists($fullPath)) {
        echo "MISSING FILE: $page\n";
        $errors++;
        continue;
    }
    // Execute a separate PHP process to render the page in isolation
    $cmd = '"d:\xampp\php\php.exe" "' . $fullPath . '" 2>&1';
    $out = shell_exec($cmd);
    if (str_contains($out, 'PHP Fatal error:') || str_contains($out, 'PHP Parse error:')) {
        echo "RENDER ERROR in $page:\n" . substr($out, 0, 300) . "\n\n";
        $errors++;
    }
}

if ($errors === 0) {
    echo "SUCCESS: All " . count($pages) . " pages rendered completely with 0 errors!\n";
} else {
    echo "TOTAL ERRORS: $errors\n";
}
