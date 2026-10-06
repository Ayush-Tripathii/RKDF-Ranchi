<?php
$root = dirname(__DIR__);
$docsDir = $root . '/documents';
$imgDir = $root . '/images';

if (!is_dir($docsDir)) mkdir($docsDir, 0777, true);
if (!is_dir($imgDir)) mkdir($imgDir, 0777, true);

$sitemapUrls = json_decode(file_get_contents(__DIR__ . '/sitemap_discovered_urls.json'), true);
echo "Total sitemap URLs to crawl: " . count($sitemapUrls) . "\n";

// Multi-curl crawler for speed
function fetchUrlsBatch($urls) {
    $mh = curl_multi_init();
    $curlHandles = [];
    $results = [];

    foreach ($urls as $url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_multi_add_handle($mh, $ch);
        $curlHandles[$url] = $ch;
    }

    $running = null;
    do {
        curl_multi_exec($mh, $running);
        curl_multi_select($mh);
    } while ($running > 0);

    foreach ($curlHandles as $url => $ch) {
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpCode == 200) {
            $results[$url] = curl_multi_getcontent($ch);
        }
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);
    return $results;
}

$allPdfs = [];
$allImages = [];
$allDocs = [];
$pageMediaMap = [];

$batchSize = 25;
$chunks = array_chunk($sitemapUrls, $batchSize);

echo "Crawling in " . count($chunks) . " batches...\n";
foreach ($chunks as $index => $chunk) {
    echo "Processing batch " . ($index + 1) . "/" . count($chunks) . "... ";
    $pages = fetchUrlsBatch($chunk);
    echo "Fetched " . count($pages) . " pages.\n";

    foreach ($pages as $pageUrl => $html) {
        $pageSlug = trim(parse_url($pageUrl, PHP_URL_PATH), '/');
        if (empty($pageSlug)) $pageSlug = 'home';

        if (preg_match_all('/https?:\/\/[^\s"\'<>]+\.(pdf|docx?|xlsx?|pptx?|jpe?g|png|webp|svg|gif)/i', $html, $matches)) {
            foreach ($matches[0] as $assetUrl) {
                $assetUrl = trim($assetUrl, '.,;:()[]"\'');
                if (preg_match('/\.pdf$/i', $assetUrl)) {
                    $allPdfs[$assetUrl][] = $pageSlug;
                    $pageMediaMap[$pageSlug]['pdfs'][] = $assetUrl;
                } elseif (preg_match('/\.(docx?|xlsx?|pptx?)$/i', $assetUrl)) {
                    $allDocs[$assetUrl][] = $pageSlug;
                    $pageMediaMap[$pageSlug]['docs'][] = $assetUrl;
                } else {
                    $allImages[$assetUrl][] = $pageSlug;
                    $pageMediaMap[$pageSlug]['images'][] = $assetUrl;
                }
            }
        }
    }
}

// Deduplicate arrays
foreach ($pageMediaMap as $slug => &$item) {
    if (isset($item['pdfs'])) $item['pdfs'] = array_values(array_unique($item['pdfs']));
    if (isset($item['docs'])) $item['docs'] = array_values(array_unique($item['docs']));
    if (isset($item['images'])) $item['images'] = array_values(array_unique($item['images']));
}

echo "\nSummary of Discovered Live Assets:\n";
echo "Total Unique PDFs: " . count($allPdfs) . "\n";
echo "Total Unique Docs: " . count($allDocs) . "\n";
echo "Total Unique Images: " . count($allImages) . "\n";

file_put_contents(__DIR__ . '/crawled_all_pdfs.json', json_encode($allPdfs, JSON_PRETTY_PRINT));
file_put_contents(__DIR__ . '/crawled_all_docs.json', json_encode($allDocs, JSON_PRETTY_PRINT));
file_put_contents(__DIR__ . '/crawled_all_images.json', json_encode($allImages, JSON_PRETTY_PRINT));
file_put_contents(__DIR__ . '/crawled_page_media_map.json', json_encode($pageMediaMap, JSON_PRETTY_PRINT));
