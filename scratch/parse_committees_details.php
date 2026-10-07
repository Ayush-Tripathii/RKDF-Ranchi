<?php
$data = json_decode(file_get_contents(__DIR__ . '/extracted_committees_data.json'), true);

foreach ($data as $slug => $info) {
    echo "=== SLUG: {$slug} ===\n";
    echo "Title: " . $info['title'] . "\n";
    echo "Tables Count: " . $info['tables_count'] . "\n";
    
    // Parse table if exists
    $members = [];
    foreach ($info['tables'] as $tableHtml) {
        $dom = new DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $tableHtml);
        $rows = $dom->getElementsByTagName('tr');
        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            if ($cols->length >= 2) {
                $c0 = trim(preg_replace('/\s+/', ' ', $cols->item(0)->textContent));
                $c1 = trim(preg_replace('/\s+/', ' ', $cols->item(1)->textContent));
                $c2 = $cols->length >= 3 ? trim(preg_replace('/\s+/', ' ', $cols->item(2)->textContent)) : '';
                if (stripos($c0, 'Name') === false && stripos($c0, 'Sl') === false && !empty($c0)) {
                    $members[] = [
                        'col1' => $c0,
                        'col2' => $c1,
                        'col3' => $c2
                    ];
                }
            }
        }
    }
    
    echo "Parsed Members Count: " . count($members) . "\n";
    if (count($members) > 0) {
        echo "  First member: " . json_encode($members[0]) . "\n";
    }
    
    // Check paragraphs
    $meaningfulParagraphs = [];
    foreach ($info['paragraphs'] as $p) {
        $p = trim($p);
        if (strlen($p) > 20 && stripos($p, 'Moving towards') === false && stripos($p, '7091168777') === false && stripos($p, 'Unique Visitors') === false && stripos($p, 'AdmissionENQUIRE') === false) {
            $meaningfulParagraphs[] = $p;
        }
    }
    echo "Meaningful Paragraphs: " . count($meaningfulParagraphs) . "\n";
    foreach ($meaningfulParagraphs as $mp) {
        echo "  - " . substr($mp, 0, 100) . "...\n";
    }
    echo "\n";
}
