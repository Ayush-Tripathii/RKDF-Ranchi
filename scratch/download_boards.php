<?php
$urls = [
    'board_of_governors'        => 'https://rkdfuniversity.org/about/board-of-governors/',
    'board_members'             => 'https://rkdfuniversity.org/about/board-members/',
    'board_of_studies'          => 'https://rkdfuniversity.org/about/board-of-studies/',
    'academic_council_members'  => 'https://rkdfuniversity.org/about/academic-council-members/',
];

$output_dir = __DIR__ . '/boards_raw/';
if (!is_dir($output_dir)) {
    mkdir($output_dir, 0777, true);
}

foreach ($urls as $key => $url) {
    echo "Fetching: $url\n";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $html = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    echo " -> HTTP $code | Length: " . strlen($html) . " bytes\n";
    file_put_contents($output_dir . $key . '.html', $html);
}

echo "All 4 pages downloaded successfully.\n";
