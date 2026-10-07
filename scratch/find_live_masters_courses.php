<?php
// Scan live sitemaps and scraped data for all Master's / PG programs
$urls = json_decode(file_get_contents(__DIR__ . '/sitemap_discovered_urls.json'), true);

echo "Total sitemap URLs: " . count($urls) . "\n";

$masterUrls = [];
foreach ($urls as $u) {
    if (preg_match('/(master|m-sc|msc|m-com|mcom|mba|mca|m-tech|mtech|llm|m-lib|mlib|msw|mha|ma-|pgdca|post-graduate)/i', $u)) {
        $masterUrls[] = $u;
    }
}

echo "Master's / PG URLs discovered on live site: " . count($masterUrls) . "\n";
foreach ($masterUrls as $mu) {
    echo "  - $mu\n";
}
