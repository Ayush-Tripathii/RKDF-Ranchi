<?php
/**
 * Extract course names and descriptions from each school's HTML
 */

$dir = __DIR__ . '/scraped_schools';
$files = glob("$dir/*.html");

$schoolCourses = [];

foreach ($files as $file) {
    $slug = basename($file, '.html');
    if ($slug === 'departments') continue;

    $html = file_get_contents($file);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    // Look for course items, headings under courses, or accordions/toggles/lists
    $courses = [];
    
    // Check all headings, list items, or toggle titles
    foreach ($xpath->query('//div[contains(@class, "elementor-toggle-item")]|//div[contains(@class, "elementor-accordion-item")]|//div[contains(@class, "elementor-widget-toggle")]|//ul/li') as $node) {
        $t = trim(preg_replace('/\s+/', ' ', $node->textContent));
        if (strlen($t) > 3 && strlen($t) < 300) {
            $courses[] = $t;
        }
    }

    // Also look for specific course texts
    $allText = $dom->textContent;
    
    $schoolCourses[$slug] = [
        'courses_found' => array_slice($courses, 0, 30),
        'full_text' => file_get_contents("$dir/$slug.txt"),
    ];
}

file_put_contents(__DIR__ . '/school_extracted_courses.json', json_encode($schoolCourses, JSON_PRETTY_PRINT));
echo "Saved course extraction details.\n";
