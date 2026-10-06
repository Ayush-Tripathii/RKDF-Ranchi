<?php
/**
 * Create bridge redirect files at root for backwards-compatibility
 */

$root = dirname(__DIR__);

$redirects = [
    'about.php'                  => 'about/',
    'vision-and-mission.php'     => 'about/vision-and-mission.php',
    'government-recognition.php' => 'about/government-recognition.php',
    'accreditations.php'         => 'about/accreditations.php',
    'annual-reports.php'         => 'about/annual-reports.php',
    'rti-corner.php'             => 'about/rti-corner.php',

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

    'board-of-governors.php'         => 'boards/board-of-governors.php',
    'board-members.php'              => 'boards/board-members.php',
    'academic-council-members.php'   => 'boards/academic-council-members.php',
    'board-of-studies.php'           => 'boards/board-of-studies.php',

    'schools.php'                    => 'departments/',
    'school-engineering.php'         => 'departments/school-engineering.php',
    'school-law.php'                 => 'departments/school-law.php',
    'school-management.php'          => 'departments/school-management.php',
    'school-pharmacy.php'            => 'departments/school-pharmacy.php',

    'admissions.php'                 => 'admissions/',
    'admission-procedure.php'        => 'admissions/admission-procedure.php',
    'anti-ragging.php'               => 'admissions/anti-ragging.php',

    'news.php'                       => 'media/news.php',
    'events.php'                     => 'media/events.php',
    'gallery.php'                    => 'media/gallery.php',
];

foreach ($redirects as $legacyFile => $targetPath) {
    $filePath = $root . DIRECTORY_SEPARATOR . $legacyFile;
    $targetPhpFile = $targetPath;
    if (str_ends_with($targetPhpFile, '/')) {
        $targetPhpFile .= 'index.php';
    }

    $code = "<?php\n"
          . "/**\n"
          . " * Legacy Bridge File — Redirects / Delegates to {$targetPath}\n"
          . " */\n"
          . "require_once __DIR__ . '/config/config.php';\n"
          . "require_once __DIR__ . '/includes/functions.php';\n"
          . "\n"
          . "// Redirect permanently to canonical structured URL\n"
          . "header('Location: ' . url('{$targetPath}'), true, 301);\n"
          . "exit;\n";

    file_put_contents($filePath, $code);
    echo "Created legacy redirect bridge for: {$legacyFile} -> {$targetPath}\n";
}

echo "\nAll bridge files created successfully.\n";
