<?php
$data = json_decode(file_get_contents(__DIR__ . '/extracted_school_details.json'), true);

foreach ($data as $slug => $info) {
    echo "========================================================\n";
    echo "SLUG: $slug\n";
    echo "TITLE: " . ($info['title'] ?: 'No H1') . "\n";
    echo "HEADINGS: " . implode(' | ', array_slice($info['headings'], 0, 8)) . "\n";
    echo "TABLES COUNT: " . count($info['tables']) . "\n";
    if (!empty($info['tables'])) {
        foreach ($info['tables'] as $i => $tbl) {
            echo "  Table #" . ($i+1) . " (" . count($tbl) . " rows):\n";
            foreach (array_slice($tbl, 0, 5) as $r) {
                echo "    - " . implode(' | ', $r) . "\n";
            }
        }
    }
    echo "PARAGRAPHS (" . count($info['paragraphs']) . "):\n";
    foreach (array_slice($info['paragraphs'], 0, 3) as $p) {
        echo "  * " . substr($p, 0, 150) . "...\n";
    }
    echo "\n";
}
