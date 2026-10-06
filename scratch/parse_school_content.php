<?php
/**
 * Parse and summarize the scraped content of each school
 */

$dir = __DIR__ . '/scraped_schools';
$files = glob("$dir/*.txt");

$summary = [];

foreach ($files as $file) {
    $slug = basename($file, '.txt');
    if ($slug === 'departments') continue;

    $text = file_get_contents($file);
    $lines = explode("\n", $text);

    // Look for courses/programs, headings, etc.
    $summary[$slug] = [
        'slug' => $slug,
        'lines_count' => count($lines),
        'preview' => array_slice($lines, 0, 40),
    ];
}

file_put_contents(__DIR__ . '/schools_summary.json', json_encode($summary, JSON_PRETTY_PRINT));
echo "Generated schools_summary.json with " . count($summary) . " schools.\n";
