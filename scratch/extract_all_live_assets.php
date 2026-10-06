<?php
$dataFile = __DIR__ . '/scraped_live_data.json';
if (!file_exists($dataFile)) {
    die("scraped_live_data.json not found\n");
}

$data = json_decode(file_get_contents($dataFile), true);
echo "Total pages in scraped data: " . count($data) . "\n";

$images = [];
$pdfs = [];
$docs = [];

foreach ($data as $url => $page) {
    // Check direct images array
    if (isset($page['images']) && is_array($page['images'])) {
        foreach ($page['images'] as $img) {
            $images[$img][] = $url;
        }
    }
    // Check direct links array
    if (isset($page['links']) && is_array($page['links'])) {
        foreach ($page['links'] as $link) {
            if (preg_match('/\.pdf(\?.*)?$/i', $link)) {
                $pdfs[$link][] = $url;
            } elseif (preg_match('/\.(docx?|xlsx?|pptx?)(\?.*)?$/i', $link)) {
                $docs[$link][] = $url;
            }
        }
    }
    // Regex scan inside html content
    if (isset($page['html'])) {
        if (preg_match_all('/https?:\/\/[^\s"\'<>]+\.(pdf|docx?|xlsx?|pptx?|jpe?g|png|webp|svg)/i', $page['html'], $matches)) {
            foreach ($matches[0] as $match) {
                if (preg_match('/\.pdf$/i', $match)) {
                    $pdfs[$match][] = $url;
                } elseif (preg_match('/\.(docx?|xlsx?|pptx?)$/i', $match)) {
                    $docs[$match][] = $url;
                } else {
                    $images[$match][] = $url;
                }
            }
        }
    }
}

echo "Unique PDFs found: " . count($pdfs) . "\n";
echo "Unique Docs found: " . count($docs) . "\n";
echo "Unique Images found: " . count($images) . "\n";

file_put_contents(__DIR__ . '/all_live_pdfs.json', json_encode($pdfs, JSON_PRETTY_PRINT));
file_put_contents(__DIR__ . '/all_live_docs.json', json_encode($docs, JSON_PRETTY_PRINT));
file_put_contents(__DIR__ . '/all_live_images.json', json_encode($images, JSON_PRETTY_PRINT));
