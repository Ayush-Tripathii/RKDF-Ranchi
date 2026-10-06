<?php
$context = stream_context_create([
    'http' => [
        'timeout' => 20,
        'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
    ],
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false
    ]
]);

function fetch_page_content($url) {
    global $context;
    $html = @file_get_contents($url, false, $context);
    if (!$html) return null;
    
    // Extract main content area (usually elementor, article, or entry-content)
    if (preg_match('/<article[^>]*>(.*?)<\/article>/is', $html, $m)) {
        return $m[1];
    } elseif (preg_match('/<main[^>]*>(.*?)<\/main>/is', $html, $m)) {
        return $m[1];
    } elseif (preg_match('/<div[^>]+class=["\'][^"\']*entry-content[^"\']*["\'][^>]*>(.*?)<\/div>/is', $html, $m)) {
        return $m[1];
    }
    return $html;
}

$urls = [
    'common_courses' => 'https://rkdfuniversity.org/common-courses-for-all/',
    'training_placement' => 'https://rkdfuniversity.org/academics/training-and-placement-cell/',
    'infrastructure' => 'https://rkdfuniversity.org/academics/infrastructure-resources/',
    'sports' => 'https://rkdfuniversity.org/academics/sports-facilities/',
    'hostel' => 'https://rkdfuniversity.org/academics/hostel/',
    'library' => 'https://rkdfuniversity.org/academics/library/',
    'health' => 'https://rkdfuniversity.org/academics/health-facilities/',
    'transport' => 'https://rkdfuniversity.org/academics/transport/',
    'scholarship' => 'https://rkdfuniversity.org/academics/scholarship/',
    'differently_abled' => 'https://rkdfuniversity.org/academics/facilities-for-differently-abled/',
    'academic_collaborations' => 'https://rkdfuniversity.org/academic-collaborations/',
    'examination_forms' => 'https://rkdfuniversity.org/examination-forms/',
    'career' => 'https://rkdfuniversity.org/career/',
    'alumni_committee' => 'https://rkdfuniversity.org/alumni-committee/',
    'rti' => 'https://rkdfuniversity.org/rti-corner/',
    'privacy_policy' => 'https://rkdfuniversity.org/privacy-policy/',
    'terms_conditions' => 'https://rkdfuniversity.org/terms-conditions/',
    'study_in_india' => 'https://rkdfuniversity.org/study-in-india/',
    'international_students' => 'https://rkdfuniversity.org/study-in-india/admission-international-students/',
    'digilocker' => 'https://rkdfuniversity.org/digilocker/'
];

$output = [];
foreach ($urls as $key => $url) {
    echo "Fetching $key ($url)...\n";
    $content = fetch_page_content($url);
    if ($content) {
        // Extract text and tables
        $text = strip_tags($content, '<p><h1><h2><h3><h4><h5><h6><table><tr><td><th><ul><ol><li><a><img>');
        $output[$key] = [
            'url' => $url,
            'raw_html' => $content,
            'clean_html' => $text
        ];
    } else {
        echo "Failed to fetch $url\n";
    }
}

file_put_contents(__DIR__ . '/scraped_live_data.json', json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
echo "Done! Scraped " . count($output) . " pages to scratch/scraped_live_data.json\n";
