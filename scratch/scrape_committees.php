<?php
$committeeUrls = [
    'admission-counseling-committee' => 'https://rkdfuniversity.org/committees/admission-counseling-committee/',
    'anti-sexual-harassment'         => 'https://rkdfuniversity.org/committees/anti-sexual-harassment/',
    'anti-ragging-committee'         => 'https://rkdfuniversity.org/committees/anti-ragging-committee/',
    'committee-for-st-sc-obc'        => 'https://rkdfuniversity.org/committees/committee-for-st-sc-obc/',
    'cultural-committee'             => 'https://rkdfuniversity.org/committees/cultural-committee/',
    'environment-cell'               => 'https://rkdfuniversity.org/committees/environment-cell/',
    'equal-opportunity-committee'    => 'https://rkdfuniversity.org/committees/equal-opportunity-committee/',
    'finance-committee'              => 'https://rkdfuniversity.org/committees/finance-committee/',
    'grievance-redressal-committee'  => 'https://rkdfuniversity.org/committees/grievance-redressal-committee/',
    'internal-complaint-committee'   => 'https://rkdfuniversity.org/committees/internal-complaint-committee/',
    'internal-quality-assurance-cell'=> 'https://rkdfuniversity.org/committees/internal-quality-assurance-cell/',
    'library-committee'              => 'https://rkdfuniversity.org/committees/library-committee/',
    'sports-committee'               => 'https://rkdfuniversity.org/committees/sports-committee/',
    'students-grievance-redressal-committee' => 'https://rkdfuniversity.org/committees/students-grievance-redressal-committee/',
    'training-placement-committee'   => 'https://rkdfuniversity.org/committees/training-placement-committee/',
    'transportation-committee'       => 'https://rkdfuniversity.org/committees/transportation-committee/',
    'unfair-means-discipline-committee' => 'https://rkdfuniversity.org/committees/unfair-means-discipline-committee/',
    'women-development-cell'         => 'https://rkdfuniversity.org/committees/women-development-cell/'
];

function fetchPage($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $data = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return ($code === 200) ? $data : false;
}

$extractedCommittees = [];

foreach ($committeeUrls as $slug => $url) {
    echo "Fetching committee: $slug ... ";
    $html = fetchPage($url);
    if ($html) {
        // Extract title
        preg_match('/<h1[^>]*>(.*?)<\/h1>/is', $html, $tm);
        $title = !empty($tm[1]) ? trim(strip_tags($tm[1])) : ucwords(str_replace('-', ' ', $slug));

        // Extract tables if any
        $tables = [];
        if (preg_match_all('/<table[^>]*>(.*?)<\/table>/is', $html, $tbMatches)) {
            foreach ($tbMatches[0] as $tbl) {
                $tables[] = $tbl;
            }
        }

        // Extract paragraphs / text
        preg_match_all('/<p[^>]*>(.*?)<\/p>/is', $html, $pMatches);
        $paragraphs = array_filter(array_map('strip_tags', $pMatches[1] ?? []));

        $extractedCommittees[$slug] = [
            'url' => $url,
            'title' => $title,
            'tables_count' => count($tables),
            'tables' => $tables,
            'paragraphs' => array_values($paragraphs)
        ];
        echo "✓ (Title: $title, Tables: " . count($tables) . ")\n";
    } else {
        echo "✗ Failed\n";
    }
}

file_put_contents(__DIR__ . '/extracted_committees_data.json', json_encode($extractedCommittees, JSON_PRETTY_PRINT));
