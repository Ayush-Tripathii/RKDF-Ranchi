<?php
$context = stream_context_create([
    'http' => [
        'timeout' => 15,
        'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
    ],
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false
    ]
]);

$html = @file_get_contents('https://rkdfuniversity.org/', false, $context);
if (!$html) {
    echo "Failed to fetch live homepage.\n";
    exit(1);
}

preg_match_all('/<a[^>]+href=["\']([^"\']+)["\'][^>]*>(.*?)<\/a>/is', $html, $matches, PREG_SET_ORDER);

$links = [];
foreach ($matches as $m) {
    $url = trim($m[1]);
    $text = trim(strip_tags($m[2]));
    $text = preg_replace('/\s+/', ' ', $text);
    if (empty($url) || $url === '#' || str_starts_with($url, 'javascript:') || str_starts_with($url, 'tel:') || str_starts_with($url, 'mailto:')) {
        continue;
    }
    $links[$url] = $text;
}

echo "Total Navigation Links Found on Live Site: " . count($links) . "\n\n";
foreach ($links as $u => $t) {
    echo str_pad($t, 40) . " => " . $u . "\n";
}
