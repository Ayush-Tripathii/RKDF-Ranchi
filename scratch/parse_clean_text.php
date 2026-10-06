<?php
$data = json_decode(file_get_contents(__DIR__ . '/scraped_live_data.json'), true);
$key = $argv[1] ?? 'common_courses';

if (!isset($data[$key])) {
    echo "Key '$key' not found.\n";
    exit(1);
}

$raw = $data[$key]['raw_html'];
// Remove scripts, styles, svg
$raw = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $raw);
$raw = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $raw);
$raw = preg_replace('/<svg\b[^>]*>(.*?)<\/svg>/is', '', $raw);
$raw = preg_replace('/<nav\b[^>]*>(.*?)<\/nav>/is', '', $raw);
$raw = preg_replace('/<header\b[^>]*>(.*?)<\/header>/is', '', $raw);
$raw = preg_replace('/<footer\b[^>]*>(.*?)<\/footer>/is', '', $raw);

$text = strip_tags($raw, '<p><h1><h2><h3><h4><h5><h6><table><tr><td><th><ul><ol><li><a><img><blockquote>');
$text = preg_replace("/\n\s+\n/", "\n\n", $text);

echo "=== Clean Content for $key ===\n";
echo $text . "\n";
