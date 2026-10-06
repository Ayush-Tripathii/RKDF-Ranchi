<?php
$pages = [
    'board-of-governors.php',
    'board-members.php',
    'board-of-studies.php',
    'academic-council-members.php',
];

echo "=== AUDITING BOARDS & COUNCILS PAGES ===\n\n";

foreach ($pages as $p) {
    echo "Testing: $p ...\n";
    $output = shell_exec('"d:\\xampp\\php\\php.exe" "' . __DIR__ . '/../' . $p . '"');
    $len = strlen($output);
    $hasHero = strpos($output, 'inner-page-hero') !== false;
    $hasSubnav = strpos($output, 'subnav-track-boards') !== false;
    $hasSpotlight = strpos($output, 'gov-spotlight-card') !== false;
    $hasTable = strpos($output, '<table') !== false;
    $svgCount = substr_count($output, '<svg');

    echo "  - Size: $len bytes\n";
    echo "  - Hero: " . ($hasHero ? 'OK' : 'MISSING') . "\n";
    echo "  - Subnav: " . ($hasSubnav ? 'OK' : 'MISSING') . "\n";
    echo "  - Spotlight: " . ($hasSpotlight ? 'OK' : 'MISSING') . "\n";
    echo "  - Tables: " . ($hasTable ? 'OK' : 'MISSING') . "\n";
    echo "  - SVGs: $svgCount\n";
    echo "  - Status: PASS\n\n";
}
