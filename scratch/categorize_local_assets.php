<?php
$root = dirname(__DIR__);
$docsDir = $root . '/documents';
$imgDir = $root . '/images';

$allDocs = glob($docsDir . '/*.pdf');
$allImages = glob($imgDir . '/*.*');

echo "=== LOCAL DOCUMENTS (PDFs: " . count($allDocs) . ") ===\n";
foreach ($allDocs as $doc) {
    $fn = basename($doc);
    $sz = round(filesize($doc) / 1024, 1);
    echo sprintf("  %-50s (%7.1f KB)\n", $fn, $sz);
}

echo "\n=== SAMPLE LOCAL IMAGES (Total: " . count($allImages) . ") ===\n";
$cat = [];
foreach ($allImages as $img) {
    $fn = basename($img);
    $ext = pathinfo($fn, PATHINFO_EXTENSION);
    if (!in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'webp', 'svg', 'gif'])) continue;
    
    if (preg_match('/(sports|cricket|football)/i', $fn)) $cat['sports'][] = $fn;
    elseif (preg_match('/(health|medical|doctor|dispensary)/i', $fn)) $cat['health'][] = $fn;
    elseif (preg_match('/(hostel|room|mess)/i', $fn)) $cat['hostel'][] = $fn;
    elseif (preg_match('/(library|book)/i', $fn)) $cat['library'][] = $fn;
    elseif (preg_match('/(campus|building|aerial|lush)/i', $fn)) $cat['campus'][] = $fn;
    elseif (preg_match('/(gallery|event|convocation)/i', $fn)) $cat['events'][] = $fn;
    elseif (preg_match('/(placement|recruiter|tcs|infosys|cipla|lupin|icici|axis|dominos|voltas|airtel|oberoi|taj|hyatt|mariott|trident)/i', $fn)) $cat['recruiters'][] = $fn;
    elseif (preg_match('/(lab|practical|classroom|computer|class)/i', $fn)) $cat['labs'][] = $fn;
    elseif (preg_match('/(chancellor|registrar|principal|officer|director|dean|vice)/i', $fn)) $cat['leadership'][] = $fn;
    elseif (preg_match('/(ugc|pci|bci|iso|mhrd|jharkhand|cuet|aishe)/i', $fn)) $cat['approvals'][] = $fn;
    else $cat['general'][] = $fn;
}

foreach ($cat as $k => $files) {
    echo "Category '$k': " . count($files) . " images (Sample: " . implode(', ', array_slice($files, 0, 4)) . ")\n";
}

file_put_contents(__DIR__ . '/local_assets_categorized.json', json_encode([
    'documents' => array_map('basename', $allDocs),
    'images_by_category' => $cat
], JSON_PRETTY_PRINT));
