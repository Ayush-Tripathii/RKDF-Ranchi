<?php
/**
 * Test rendering pages to verify runtime execution across all suites
 */

$root = dirname(__DIR__);

$pagesToTest = [
    // root
    'index.php',
    'contact.php',
    'research.php',

    // about
    'about/index.php',
    'about/vision-and-mission.php',
    'about/government-recognition.php',
    'about/accreditations.php',
    'about/annual-reports.php',
    'about/rti-corner.php',
    'about/rti.php',
    'about/career.php',
    'about/alumni-committee.php',
    'about/digilocker.php',
    'about/privacy-policy.php',
    'about/terms-conditions.php',

    // governance
    'governance/chancellor.php',
    'governance/managing-director.php',
    'governance/vice-chancellor.php',
    'governance/pro-vice-chancellor.php',
    'governance/registrar.php',
    'governance/finance-officer.php',
    'governance/controller-of-examination.php',
    'governance/ombudsperson.php',
    'governance/chief-vigilance-officer.php',
    'governance/nodal-officer-details.php',
    'governance/deans.php',
    'governance/principal.php',

    // boards
    'boards/board-of-governors.php',
    'boards/board-members.php',
    'boards/academic-council-members.php',
    'boards/board-of-studies.php',

    // departments
    'departments/index.php',
    'departments/school-engineering.php',
    'departments/school-law.php',
    'departments/school-management.php',
    'departments/school-pharmacy.php',
    'departments/school-of-information-technology.php',
    'departments/school-of-basic-and-applied-sciences.php',
    'departments/school-of-life-sciences.php',
    'departments/school-of-commerce.php',
    'departments/school-of-arts-and-humanities.php',
    'departments/school-of-journalism-and-mass-communication.php',
    'departments/school-of-fashion-and-interior-designing.php',
    'departments/school-of-library-science.php',

    // courses suite
    'courses/index.php',
    'courses/under-graduate-programs.php',
    'courses/post-graduate-programs.php',
    'courses/diploma-programs.php',
    'courses/doctoral-programs.php',
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

    // placements suite
    'placements/index.php',

    // facilities suite
    'facilities/index.php',
    'facilities/library.php',
    'facilities/hostel.php',
    'facilities/sports.php',
    'facilities/health.php',
    'facilities/transport.php',
    'facilities/differently-abled.php',

    // admissions suite
    'admissions/index.php',
    'admissions/procedure.php',
    'admissions/fees.php',
    'admissions/scholarships.php',
    'admissions/scholarship.php',
    'admissions/academic-collaborations.php',
    'admissions/examination-forms.php',
    'admissions/study-in-india.php',
    'admissions/international-students.php',

    // media suite
    'media/events.php',
    'media/news.php',
    'media/gallery.php',
    'media/sushrut-magazine.php',
];

$errors = [];
$successCount = 0;

foreach ($pagesToTest as $relPath) {
    $fullPath = $root . '/' . $relPath;
    if (!file_exists($fullPath)) {
        $errors[] = "FILE NOT FOUND: $relPath";
        continue;
    }

    $cmd = "d:\\xampp\\php\\php.exe \"$fullPath\"";
    $output = [];
    $returnVar = 0;
    exec($cmd . ' 2>&1', $output, $returnVar);
    $outStr = implode("\n", $output);

    if ($returnVar !== 0 || str_contains($outStr, 'Fatal error') || str_contains($outStr, 'Parse error')) {
        $errors[] = "RENDER ERROR in $relPath:\n" . substr($outStr, 0, 400);
    } else {
        $successCount++;
    }
}

echo "=== RENDER TEST RESULTS ===\n";
echo "Total Pages Tested: " . count($pagesToTest) . "\n";
echo "Successfully Rendered: $successCount\n";

if (!empty($errors)) {
    echo "\nERRORS DETECTED:\n";
    foreach ($errors as $e) {
        echo "- $e\n";
    }
    exit(1);
} else {
    echo "\nPERFECT! All " . count($pagesToTest) . " pages rendered without any fatal or runtime errors!\n";
    exit(0);
}
