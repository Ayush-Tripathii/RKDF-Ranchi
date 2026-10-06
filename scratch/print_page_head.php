<?php
$data = json_decode(file_get_contents(__DIR__ . '/scraped_live_data.json'), true);
$key = $argv[1] ?? 'common_courses';
$start = isset($argv[2]) ? (int)$argv[2] : 1;
$limit = isset($argv[3]) ? (int)$argv[3] : 80;

if (!isset($data[$key])) {
    echo "Key '$key' not found.\n";
    exit(1);
}

$raw = $data[$key]['raw_html'];
$raw = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $raw);
$raw = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $raw);
$raw = preg_replace('/<svg\b[^>]*>(.*?)<\/svg>/is', '', $raw);

$lines = explode("\n", strip_tags($raw));
$cleanLines = [];
foreach ($lines as $l) {
    $t = trim($l);
    if (!empty($t)) {
        $cleanLines[] = $t;
    }
}

echo "Total Clean Lines for $key: " . count($cleanLines) . "\n";
echo "--- LINES $start to " . ($start + $limit - 1) . " ---\n";
for ($i = $start - 1; $i < min($start - 1 + $limit, count($cleanLines)); $i++) {
    echo ($i + 1) . ": " . $cleanLines[$i] . "\n";
}
