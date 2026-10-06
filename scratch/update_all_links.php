<?php
/**
 * Update internal links across all template files
 */

$root = dirname(__DIR__);

$linkMap = [
    'href="index.php"'                  => 'href="<?= url(\'/\') ?>"',
    'href="about.php"'                  => 'href="<?= url(\'about/\') ?>"',
    'href="vision-and-mission.php"'     => 'href="<?= url(\'about/vision-and-mission.php\') ?>"',
    'href="government-recognition.php"' => 'href="<?= url(\'about/government-recognition.php\') ?>"',
    'href="accreditations.php"'         => 'href="<?= url(\'about/accreditations.php\') ?>"',
    'href="annual-reports.php"'         => 'href="<?= url(\'about/annual-reports.php\') ?>"',
    'href="rti-corner.php"'             => 'href="<?= url(\'about/rti-corner.php\') ?>"',

    'href="chancellor.php"'                 => 'href="<?= url(\'governance/chancellor.php\') ?>"',
    'href="managing-director.php"'          => 'href="<?= url(\'governance/managing-director.php\') ?>"',
    'href="vice-chancellor.php"'            => 'href="<?= url(\'governance/vice-chancellor.php\') ?>"',
    'href="pro-vice-chancellor.php"'        => 'href="<?= url(\'governance/pro-vice-chancellor.php\') ?>"',
    'href="registrar.php"'                  => 'href="<?= url(\'governance/registrar.php\') ?>"',
    'href="finance-officer.php"'            => 'href="<?= url(\'governance/finance-officer.php\') ?>"',
    'href="controller-of-examination.php"'  => 'href="<?= url(\'governance/controller-of-examination.php\') ?>"',
    'href="ombudsperson.php"'               => 'href="<?= url(\'governance/ombudsperson.php\') ?>"',
    'href="chief-vigilance-officer.php"'    => 'href="<?= url(\'governance/chief-vigilance-officer.php\') ?>"',
    'href="nodal-officer-details.php"'      => 'href="<?= url(\'governance/nodal-officer-details.php\') ?>"',
    'href="deans.php"'                      => 'href="<?= url(\'governance/deans.php\') ?>"',
    'href="principal.php"'                  => 'href="<?= url(\'governance/principal.php\') ?>"',

    'href="board-of-governors.php"'         => 'href="<?= url(\'boards/board-of-governors.php\') ?>"',
    'href="board-members.php"'              => 'href="<?= url(\'boards/board-members.php\') ?>"',
    'href="academic-council-members.php"'   => 'href="<?= url(\'boards/academic-council-members.php\') ?>"',
    'href="board-of-studies.php"'           => 'href="<?= url(\'boards/board-of-studies.php\') ?>"',

    'href="schools.php"'                    => 'href="<?= url(\'departments/\') ?>"',
    'href="school-engineering.php"'         => 'href="<?= url(\'departments/school-engineering.php\') ?>"',
    'href="school-law.php"'                 => 'href="<?= url(\'departments/school-law.php\') ?>"',
    'href="school-management.php"'          => 'href="<?= url(\'departments/school-management.php\') ?>"',
    'href="school-pharmacy.php"'            => 'href="<?= url(\'departments/school-pharmacy.php\') ?>"',

    'href="admissions.php"'                 => 'href="<?= url(\'admissions/\') ?>"',
    'href="admission-procedure.php"'        => 'href="<?= url(\'admissions/admission-procedure.php\') ?>"',
    'href="anti-ragging.php"'               => 'href="<?= url(\'admissions/anti-ragging.php\') ?>"',

    'href="news.php"'                       => 'href="<?= url(\'media/news.php\') ?>"',
    'href="events.php"'                     => 'href="<?= url(\'media/events.php\') ?>"',
    'href="gallery.php"'                    => 'href="<?= url(\'media/gallery.php\') ?>"',
    'href="contact.php"'                    => 'href="<?= url(\'contact.php\') ?>"',
    'href="research.php"'                   => 'href="<?= url(\'research.php\') ?>"',
];

$scanDirs = [
    $root,
    $root . '/about',
    $root . '/governance',
    $root . '/boards',
    $root . '/departments',
    $root . '/admissions',
    $root . '/media',
    $root . '/sections',
    $root . '/sections/boards',
];

$count = 0;
foreach ($scanDirs as $dir) {
    if (!is_dir($dir)) continue;
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..' || substr($file, -4) !== '.php') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $file;
        if (is_dir($path)) continue;

        $content = file_get_contents($path);
        $orig = $content;
        foreach ($linkMap as $search => $replace) {
            $content = str_replace($search, $replace, $content);
        }

        if ($content !== $orig) {
            file_put_contents($path, $content);
            $count++;
            echo "Updated links in: " . str_replace($root . DIRECTORY_SEPARATOR, '', $path) . "\n";
        }
    }
}

echo "Total files with links updated: $count\n";
