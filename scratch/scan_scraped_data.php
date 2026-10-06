<?php
$dataFile = __DIR__ . '/scraped_live_data.json';
$data = json_decode(file_get_contents($dataFile), true);

echo "All 20 keys in scraped_live_data.json:\n";
foreach (array_keys($data) as $k) {
    echo "- " . $k . " (type: " . gettype($data[$k]) . ", size: " . strlen(json_encode($data[$k])) . ")\n";
}

$images = [];
$pdfs = [];
$docs = [];

function findUrls($val, &$images, &$pdfs, &$docs) {
    if (is_string($val)) {
        if (preg_match_all('/https?:\/\/[^\s"\'<>]+\.(pdf|docx?|xlsx?|pptx?|jpe?g|png|webp|svg|gif|avif)/i', $val, $matches)) {
            foreach ($matches[0] as $url) {
                $url = trim($url, '.,;:()[]"\'');
                if (preg_match('/\.pdf$/i', $url)) {
                    $pdfs[$url] = ($pdfs[$url] ?? 0) + 1;
                } elseif (preg_match('/\.(docx?|xlsx?|pptx?)$/i', $url)) {
                    $docs[$url] = ($docs[$url] ?? 0) + 1;
                } else {
                    $images[$url] = ($images[$url] ?? 0) + 1;
                }
            }
        }
    } elseif (is_array($val)) {
        foreach ($val as $sub) {
            findUrls($sub, $images, $pdfs, $docs);
        }
    }
}

findUrls($data, $images, $pdfs, $docs);

echo "\n--- Assets found in scraped_live_data.json ---\n";
echo "Total Unique PDFs: " . count($pdfs) . "\n";
echo "Total Unique Docs: " . count($docs) . "\n";
echo "Total Unique Images: " . count($images) . "\n";

echo "\nPDFs found:\n";
foreach (array_keys($pdfs) as $p) echo "  " . $p . "\n";

echo "\nSample 15 Images found:\n";
foreach (array_slice(array_keys($images), 0, 15) as $img) echo "  " . $img . "\n";

file_put_contents(__DIR__ . '/extracted_live_pdfs.json', json_encode($pdfs, JSON_PRETTY_PRINT));
file_put_contents(__DIR__ . '/extracted_live_images.json', json_encode($images, JSON_PRETTY_PRINT));
