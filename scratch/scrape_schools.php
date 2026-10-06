<?php
/**
 * Scraper for RKDF University Schools / Departments
 */

$urls = [
    'departments' => 'https://rkdfuniversity.org/departments/',
    'school-of-engineering-technology' => 'https://rkdfuniversity.org/departments/school-of-engineering-technology/',
    'school-of-law' => 'https://rkdfuniversity.org/departments/school-of-law/',
    'school-of-management' => 'https://rkdfuniversity.org/departments/school-of-management/',
    'school-of-information-technology' => 'https://rkdfuniversity.org/departments/school-of-information-technology/',
    'school-of-pharmacy' => 'https://rkdfuniversity.org/departments/school-of-pharmacy/',
    'school-of-basic-and-applied-sciences' => 'https://rkdfuniversity.org/departments/school-of-basic-and-applied-sciences/',
    'school-of-life-sciences' => 'https://rkdfuniversity.org/departments/school-of-life-sciences/',
    'school-of-commerce' => 'https://rkdfuniversity.org/departments/school-of-commerce/',
    'school-of-arts-and-humanities' => 'https://rkdfuniversity.org/departments/school-of-arts-and-humanities/',
    'school-of-journalism-and-mass-communication' => 'https://rkdfuniversity.org/departments/school-of-journalism-and-mass-communication/',
    'school-of-fashion-and-interior-designing' => 'https://rkdfuniversity.org/departments/school-of-fashion-and-interior-designing/',
    'school-of-library-science' => 'https://rkdfuniversity.org/departments/school-of-library-science/',
];

$outDir = __DIR__ . '/scraped_schools';
if (!is_dir($outDir)) {
    mkdir($outDir, 0777, true);
}

foreach ($urls as $slug => $url) {
    echo "Fetching: $slug ...\n";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $html = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($html && $httpCode === 200) {
        file_put_contents("$outDir/$slug.html", $html);
        
        // Extract readable text from Elementor / Main content
        $dom = new DOMDocument();
        @$dom->loadHTML($html);
        $xpath = new DOMXPath($dom);
        
        // Remove script, style, nav, footer
        $nodesToRemove = $xpath->query('//script|//style|//nav|//header|//footer|//noscript');
        foreach ($nodesToRemove as $node) {
            $node->parentNode->removeChild($node);
        }
        
        $bodyText = $dom->textContent;
        // Clean whitespace
        $lines = array_filter(array_map('trim', explode("\n", $bodyText)));
        $cleanText = implode("\n", $lines);
        
        file_put_contents("$outDir/$slug.txt", $cleanText);
        echo "✓ Saved $slug ($httpCode, " . strlen($html) . " bytes)\n";
    } else {
        echo "✗ Failed to fetch $slug (HTTP $httpCode)\n";
    }
}

echo "\nAll schools fetched successfully.\n";
