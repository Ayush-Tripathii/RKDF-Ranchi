<?php
$files = [
    'board_of_governors'        => __DIR__ . '/boards_raw/board_of_governors.html',
    'board_members'             => __DIR__ . '/boards_raw/board_members.html',
    'board_of_studies'          => __DIR__ . '/boards_raw/board_of_studies.html',
    'academic_council_members'  => __DIR__ . '/boards_raw/academic_council_members.html',
];

$extracted = [];

foreach ($files as $key => $file) {
    if (!file_exists($file)) continue;
    $html = file_get_contents($file);
    
    $doc = new DOMDocument();
    @$doc->loadHTML('<?xml encoding="utf-8" ?>' . $html);
    $xpath = new DOMXPath($doc);
    
    // Find entry-content or elementor-widget-container or main content
    $tables = $xpath->query('//table');
    $tableData = [];
    foreach ($tables as $tIndex => $table) {
        $rows = $xpath->query('.//tr', $table);
        $tRows = [];
        foreach ($rows as $row) {
            $cols = $xpath->query('.//th | .//td', $row);
            $rCols = [];
            foreach ($cols as $col) {
                $rCols[] = trim(preg_replace('/\s+/', ' ', $col->textContent));
            }
            if (!empty($rCols)) {
                $tRows[] = $rCols;
            }
        }
        $tableData[] = $tRows;
    }
    
    // Extract headings and paragraphs
    $headings = [];
    foreach ($xpath->query('//h1 | //h2 | //h3 | //h4 | //p') as $node) {
        $text = trim(preg_replace('/\s+/', ' ', $node->textContent));
        if (strlen($text) > 5 && !strpos($text, 'RKDF University') === 0 && !strpos($text, 'Copyright') === 0) {
            $headings[] = [
                'tag' => $node->nodeName,
                'text' => $text
            ];
        }
    }
    
    $extracted[$key] = [
        'tables' => $tableData,
        'headings' => $headings
    ];
}

file_put_contents(__DIR__ . '/boards_extracted.json', json_encode($extracted, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo "Extraction completed. Check boards_extracted.json\n";
