<?php
$urls = [
    'https://rkdfuniversity.org/',
    'https://rkdfuniversity.org/contact-us/',
    'https://rkdfuniversity.org/about/'
];

$allSocials = [];
$allEmails = [];
$allPhones = [];
$allAddresses = [];

foreach ($urls as $u) {
    $ctx = stream_context_create(['http' => ['timeout' => 10, 'user_agent' => 'Mozilla/5.0']]);
    $html = @file_get_contents($u, false, $ctx);
    if ($html) {
        // Socials
        if (preg_match_all('/href=[\'"](https?:\/\/[^\'"]*(?:facebook|twitter|x\.com|instagram|linkedin|youtube|wa\.me|whatsapp)[^\'"]*)[\'"]/i', $html, $m)) {
            foreach ($m[1] as $s) $allSocials[] = $s;
        }
        // Emails
        if (preg_match_all('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', $html, $m)) {
            foreach ($m[0] as $e) $allEmails[] = strtolower($e);
        }
        // Phone numbers
        if (preg_match_all('/(?:\+91[\-\s]?)?[6-9]\d{9}/', $html, $m)) {
            foreach ($m[0] as $p) $allPhones[] = $p;
        }
        // Address patterns
        if (preg_match_all('/(?:Argora|Dhurwa|Ranchi|Tupudana|Jharkhand)[^<>\n]+/i', $html, $m)) {
            foreach ($m[0] as $a) $allAddresses[] = trim(strip_tags($a));
        }
    }
}

echo "=== SOCIAL LINKS ===\n";
print_r(array_values(array_unique($allSocials)));

echo "\n=== EMAILS ===\n";
print_r(array_values(array_unique($allEmails)));

echo "\n=== PHONES ===\n";
print_r(array_values(array_unique($allPhones)));

echo "\n=== ADDRESS SAMPLES ===\n";
print_r(array_slice(array_unique($allAddresses), 0, 5));
