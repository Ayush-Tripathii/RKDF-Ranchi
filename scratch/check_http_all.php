<?php
$pages = [
    'about.php',
    'chancellor.php',
    'managing-director.php',
    'vice-chancellor.php',
    'pro-vice-chancellor.php',
    'registrar.php',
    'controller-of-examination.php',
    'finance-officer.php',
    'chief-vigilance-officer.php',
    'ombudsperson.php',
    'nodal-officer-details.php',
    'principal.php',
    'deans.php',
    'vision-and-mission.php',
    'government-recognition.php',
    'accreditations.php',
    'annual-reports.php',
    'rti-corner.php'
];

foreach ($pages as $p) {
    $url = "http://localhost/RKDF%20Ranchi/" . $p;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $res = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    $svgCount = substr_count($res, '<svg');
    echo sprintf("%-32s -> HTTP %d | Length: %-6d | SVG Icons Rendered: %d\n", $p, $httpCode, strlen($res), $svgCount);
}
