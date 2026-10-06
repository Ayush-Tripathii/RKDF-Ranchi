<?php
$root = dirname(__DIR__);

$filesToDelete = [
    'about.php',
    'academic-council-members.php',
    'accreditations.php',
    'admission-procedure.php',
    'admissions.php',
    'annual-reports.php',
    'anti-ragging.php',
    'board-members.php',
    'board-of-governors.php',
    'board-of-studies.php',
    'chancellor.php',
    'chief-vigilance-officer.php',
    'controller-of-examination.php',
    'deans.php',
    'events.php',
    'finance-officer.php',
    'gallery.php',
    'government-recognition.php',
    'managing-director.php',
    'news.php',
    'nodal-officer-details.php',
    'ombudsperson.php',
    'principal.php',
    'pro-vice-chancellor.php',
    'registrar.php',
    'rti-corner.php',
    'school-engineering.php',
    'school-law.php',
    'school-management.php',
    'school-pharmacy.php',
    'schools.php',
    'vice-chancellor.php',
    'vision-and-mission.php',
];

foreach ($filesToDelete as $f) {
    $p = $root . DIRECTORY_SEPARATOR . $f;
    if (file_exists($p)) {
        unlink($p);
        echo "Deleted: $f\n";
    }
}

echo "Root directory cleaned successfully.\n";
