<?php
$data = json_decode(file_get_contents(__DIR__ . '/scraped_live_data.json'), true);
$key = $argv[1] ?? 'common_courses';

if (!isset($data[$key])) {
    echo "Key '$key' not found. Available keys:\n" . implode(', ', array_keys($data)) . "\n";
    exit(1);
}

echo "=== KEY: $key ===\n";
echo "URL: " . $data[$key]['url'] . "\n\n";
echo strip_tags($data[$key]['clean_html']) . "\n";
