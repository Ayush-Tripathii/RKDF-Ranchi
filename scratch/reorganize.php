<?php
/**
 * RKDF University Reorganization Script
 */

$root = dirname(__DIR__);

$fileMap = [
    // about/
    'about.php'                  => 'about/index.php',
    'vision-and-mission.php'     => 'about/vision-and-mission.php',
    'government-recognition.php' => 'about/government-recognition.php',
    'accreditations.php'         => 'about/accreditations.php',
    'annual-reports.php'         => 'about/annual-reports.php',
    'rti-corner.php'             => 'about/rti-corner.php',

    // governance/
    'chancellor.php'                 => 'governance/chancellor.php',
    'managing-director.php'          => 'governance/managing-director.php',
    'vice-chancellor.php'            => 'governance/vice-chancellor.php',
    'pro-vice-chancellor.php'        => 'governance/pro-vice-chancellor.php',
    'registrar.php'                  => 'governance/registrar.php',
    'finance-officer.php'            => 'governance/finance-officer.php',
    'controller-of-examination.php'  => 'governance/controller-of-examination.php',
    'ombudsperson.php'               => 'governance/ombudsperson.php',
    'chief-vigilance-officer.php'    => 'governance/chief-vigilance-officer.php',
    'nodal-officer-details.php'      => 'governance/nodal-officer-details.php',
    'deans.php'                      => 'governance/deans.php',
    'principal.php'                  => 'governance/principal.php',

    // boards/
    'board-of-governors.php'         => 'boards/board-of-governors.php',
    'board-members.php'              => 'boards/board-members.php',
    'academic-council-members.php'   => 'boards/academic-council-members.php',
    'board-of-studies.php'           => 'boards/board-of-studies.php',

    // departments/
    'schools.php'                    => 'departments/index.php',
    'school-engineering.php'         => 'departments/school-engineering.php',
    'school-law.php'                 => 'departments/school-law.php',
    'school-management.php'          => 'departments/school-management.php',
    'school-pharmacy.php'            => 'departments/school-pharmacy.php',

    // admissions/
    'admissions.php'                 => 'admissions/index.php',
    'admission-procedure.php'        => 'admissions/admission-procedure.php',
    'anti-ragging.php'               => 'admissions/anti-ragging.php',

    // media/
    'news.php'                       => 'media/news.php',
    'events.php'                     => 'media/events.php',
    'gallery.php'                    => 'media/gallery.php',
];

// 1. Ensure target directories exist
$directories = ['about', 'governance', 'boards', 'departments', 'admissions', 'media'];
foreach ($directories as $dir) {
    $dirPath = $root . DIRECTORY_SEPARATOR . $dir;
    if (!is_dir($dirPath)) {
        mkdir($dirPath, 0777, true);
        echo "Created directory: $dir\n";
    }
}

// 2. Process each file
foreach ($fileMap as $sourceRel => $targetRel) {
    $sourcePath = $root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $sourceRel);
    $targetPath = $root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $targetRel);

    if (!file_exists($sourcePath)) {
        echo "Source file not found: $sourceRel\n";
        continue;
    }

    $content = file_get_contents($sourcePath);

    // Update require paths from __DIR__ . '/...' to dirname(__DIR__) . '/...'
    $content = str_replace("__DIR__ . '/config/", "dirname(__DIR__) . '/config/", $content);
    $content = str_replace("__DIR__ . '/includes/", "dirname(__DIR__) . '/includes/", $content);
    $content = str_replace("__DIR__ . '/sections/", "dirname(__DIR__) . '/sections/", $content);
    $content = str_replace("__DIR__ . '/data/", "dirname(__DIR__) . '/data/", $content);

    // Save target file
    file_put_contents($targetPath, $content);
    echo "Copied & updated: $sourceRel -> $targetRel\n";
}

echo "\nMigration script completed.\n";
