<?php
// Script to crawl live sitemaps and find all pages, images, and pdfs on rkdfuniversity.org
$sitemaps = [
    'https://rkdfuniversity.org/sitemap.xml',
    'https://rkdfuniversity.org/wp-sitemap.xml',
    'https://rkdfuniversity.org/page-sitemap.xml',
    'https://rkdfuniversity.org/post-sitemap.xml',
    'https://rkdfuniversity.org/attachment-sitemap.xml',
    'https://rkdfuniversity.org/sitemap_index.xml'
];

function getUrl($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $data = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return ($code == 200) ? $data : false;
}

$pageUrls = [];

foreach ($sitemaps as $sm) {
    echo "Checking sitemap: $sm ... ";
    $content = getUrl($sm);
    if ($content) {
        echo "Found! (" . strlen($content) . " bytes)\n";
        if (preg_match_all('/<loc>(https?:\/\/[^<]+)<\/loc>/i', $content, $m)) {
            foreach ($m[1] as $loc) {
                if (preg_match('/sitemap.*\.xml/i', $loc)) {
                    // Sub-sitemap
                    $sub = getUrl($loc);
                    if ($sub && preg_match_all('/<loc>(https?:\/\/[^<]+)<\/loc>/i', $sub, $m2)) {
                        foreach ($m2[1] as $subLoc) {
                            $pageUrls[$subLoc] = true;
                        }
                    }
                } else {
                    $pageUrls[$loc] = true;
                }
            }
        }
    } else {
        echo "Not found\n";
    }
}

echo "Total unique page/resource URLs discovered from sitemaps: " . count($pageUrls) . "\n";
file_put_contents(__DIR__ . '/sitemap_discovered_urls.json', json_encode(array_keys($pageUrls), JSON_PRETTY_PRINT));
