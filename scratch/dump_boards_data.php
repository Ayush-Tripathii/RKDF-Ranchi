<?php
$data = json_decode(file_get_contents(__DIR__ . '/boards_extracted.json'), true);

foreach ($data as $page => $content) {
    echo "========================================================\n";
    echo "PAGE: $page\n";
    echo "========================================================\n";
    echo "TABLES COUNT: " . count($content['tables']) . "\n\n";
    
    foreach ($content['tables'] as $tIndex => $t) {
        echo "--- TABLE $tIndex ---\n";
        foreach ($t as $rIndex => $row) {
            echo implode(' | ', $row) . "\n";
        }
        echo "\n";
    }
    
    echo "HEADINGS & TEXT SAMPLES:\n";
    foreach (array_slice($content['headings'], 0, 20) as $h) {
        echo "[{$h['tag']}] {$h['text']}\n";
    }
    echo "\n\n";
}
