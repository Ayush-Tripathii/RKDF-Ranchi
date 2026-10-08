<?php
$json_files = ['scratch/crawled_all_pdfs.json', 'scratch/crawled_page_media_map.json'];
$pdf_urls = [];

if (file_exists('scratch/crawled_all_pdfs.json')) {
    $crawled_pdfs = json_decode(file_get_contents('scratch/crawled_all_pdfs.json'), true);
    if (is_array($crawled_pdfs)) {
        foreach ($crawled_pdfs as $url => $pages) {
            if (preg_match('/\.pdf(\?.*)?$/i', $url)) {
                $pdf_urls[$url] = $pages;
            }
        }
    }
}

if (file_exists('scratch/crawled_page_media_map.json')) {
    $media_map = json_decode(file_get_contents('scratch/crawled_page_media_map.json'), true);
    if (is_array($media_map)) {
        foreach ($media_map as $page => $media) {
            if (isset($media['pdfs']) && is_array($media['pdfs'])) {
                foreach ($media['pdfs'] as $url) {
                    if (!isset($pdf_urls[$url])) {
                        $pdf_urls[$url] = [];
                    }
                    $pdf_urls[$url][] = $page;
                }
            }
        }
    }
}

echo "Total unique PDF URLs found: " . count($pdf_urls) . "\n\n";

$download_dir = __DIR__ . '/../documents/';
if (!is_dir($download_dir)) {
    mkdir($download_dir, 0777, true);
}

$downloaded = 0;
$skipped = 0;
$failed = 0;

$url_to_local = [];

foreach ($pdf_urls as $url => $pages) {
    $clean_url = preg_replace('/\?.*$/', '', $url);
    $filename = basename(urldecode($clean_url));
    
    // Ignore institutional general files like development plans if we only want syllabi, or download all
    $local_path = $download_dir . $filename;
    $url_to_local[$url] = $filename;

    if (file_exists($local_path) && filesize($local_path) > 1000) {
        $skipped++;
        // echo "[EXISTS] $filename\n";
        continue;
    }

    echo "Downloading: $filename from $url ...\n";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');
    $content = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code === 200 && strlen($content) > 1000) {
        file_put_contents($local_path, $content);
        $downloaded++;
        echo "  -> Saved (" . round(strlen($content)/1024, 1) . " KB)\n";
    } else {
        $failed++;
        echo "  -> Failed (HTTP $http_code)\n";
    }
}

echo "\nDownload Summary:\n";
echo "Downloaded: $downloaded\n";
echo "Already Exists: $skipped\n";
echo "Failed: $failed\n";

file_put_contents(__DIR__ . '/pdf_url_mapping.json', json_encode($url_to_local, JSON_PRETTY_PRINT));
