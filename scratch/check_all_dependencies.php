<?php
$root = dirname(__DIR__);
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root));

$rkdfRemoteMatches = [];
$externalUrls = [];

foreach ($it as $file) {
    if ($file->isDir()) continue;
    $path = $file->getPathname();
    if (strpos($path, 'scratch') !== false) continue;
    if (strpos($path, '.git') !== false) continue;
    
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    if (!in_array($ext, ['php', 'html', 'css', 'js', 'json'])) continue;

    $content = file_get_contents($path);
    $rel = str_replace($root . DIRECTORY_SEPARATOR, '', $path);

    // Check for rkdfuniversity.org dependencies
    if (preg_match_all('/https?:\/\/(?:[a-zA-Z0-9\-\.]+\.)?rkdfuniversity\.org[^\s"\'\)\<\>]*/i', $content, $m)) {
        foreach ($m[0] as $url) {
            $rkdfRemoteMatches[$rel][] = $url;
        }
    }

    // Check for any external assets (fonts, scripts, images)
    if (preg_match_all('/https?:\/\/[^\s"\'\)\<\>]+/i', $content, $m2)) {
        foreach ($m2[0] as $url) {
            // filter out schema.org, w3.org xml namespaces, standard social links
            if (strpos($url, 'schema.org') !== false || strpos($url, 'w3.org') !== false) continue;
            $externalUrls[$url][] = $rel;
        }
    }
}

echo "=== RKDF LIVE WEBSITE DEPENDENCIES ===\n";
if (empty($rkdfRemoteMatches)) {
    echo "✓ ZERO dependencies on rkdfuniversity.org! Everything is 100% localized.\n";
} else {
    echo "Found dependencies in " . count($rkdfRemoteMatches) . " files:\n";
    print_r($rkdfRemoteMatches);
}

echo "\n=== ALL EXTERNAL URLs IN CODEBASE ===\n";
foreach ($externalUrls as $url => $files) {
    echo "- $url (in " . count($files) . " files: " . implode(', ', array_slice(array_unique($files), 0, 3)) . ")\n";
}
