<?php
/**
 * Deep extraction of course tables, paragraphs, and lists from scraped HTML files
 */

$dir = __DIR__ . '/scraped_schools';
$files = glob("$dir/*.html");

$data = [];

foreach ($files as $file) {
    $slug = basename($file, '.html');
    $html = file_get_contents($file);

    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    // Extract title / headings
    $h1 = $xpath->query('//h1');
    $h1Text = $h1->length ? trim($h1->item(0)->textContent) : '';

    $h2s = [];
    foreach ($xpath->query('//h2|//h3') as $h) {
        $t = trim($h->textContent);
        if ($t && strlen($t) < 100) $h2s[] = $t;
    }

    // Extract all tables
    $tables = [];
    foreach ($xpath->query('//table') as $table) {
        $rows = [];
        foreach ($xpath->query('.//tr', $table) as $tr) {
            $cols = [];
            foreach ($xpath->query('.//th|.//td', $tr) as $td) {
                $cols[] = trim(preg_replace('/\s+/', ' ', $td->textContent));
            }
            if (!empty($cols)) $rows[] = $cols;
        }
        if (!empty($rows)) $tables[] = $rows;
    }

    // Extract all paragraphs in content area
    $paragraphs = [];
    foreach ($xpath->query('//p') as $p) {
        $t = trim(preg_replace('/\s+/', ' ', $p->textContent));
        if (strlen($t) > 30) {
            $paragraphs[] = $t;
        }
    }

    $data[$slug] = [
        'title' => $h1Text,
        'headings' => array_unique($h2s),
        'tables' => $tables,
        'paragraphs' => array_slice($paragraphs, 0, 15),
    ];
}

file_put_contents(__DIR__ . '/extracted_school_details.json', json_encode($data, JSON_PRETTY_PRINT));
echo "Extracted structured details for " . count($data) . " files.\n";
