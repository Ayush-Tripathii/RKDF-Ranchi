<?php
$data = require 'data/committees/committees_list.php';
$slugs = [
    'training-placement-committee',
    'library-committee',
    'transportation-committee',
    'unfair-means-discipline-committee',
    'students-grievance-redressal-committee',
    'committee-for-st-sc-obc',
    'admission-counseling-committee',
    'environment-cell',
];

foreach ($slugs as $s) {
    $c = $data[$s] ?? null;
    $count = count($c['members'] ?? []);
    echo "=== {$s} (Count: {$count}) ===\n";
    if (!empty($c['content'])) {
        echo "CONTENT:\n";
        foreach ($c['content'] as $line) {
            echo "  - " . trim($line) . "\n";
        }
    }
    echo "MEMBERS:\n";
    foreach (($c['members'] ?? []) as $m) {
        echo "  - " . ($m['name'] ?? '') . " | " . ($m['role'] ?? '') . " | " . ($m['designation'] ?? '') . "\n";
    }
    echo "\n";
}
