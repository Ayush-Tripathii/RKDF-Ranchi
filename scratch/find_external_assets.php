<?php
/**
 * Scan all PHP files for external image / document / PDF URLs
 */

$root = dirname(__DIR__);

function getPhpFiles($dir) {
    $results = [];
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..' || $item === '.git' || $item === 'scratch') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            $results = array_merge($results, getPhpFiles($path));
        } elseif (substr($item, -4) === '.php' || substr($item, -4) === '.css' || substr($item, -3) === '.js') {
            $results[] = $path;
        }
    }
    return $results;
}

$files = getPhpFiles($root);
$foundUrls = [];

$extensions = ['png', 'jpg', 'jpeg', 'gif', 'webp', 'svg', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'mp4'];

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Regex to match URLs ending in media / document extensions or from rkdfuniversity.org/wp-content
    preg_match_all('/https?:\/\/[^\s"\'\<\>\)]+?\.(?:' . implode('|', $extensions) . ')/i', $content, $matches);
    if (!empty($matches[0])) {
        foreach ($matches[0] as $url) {
            $foundUrls[$url][] = str_replace($root . DIRECTORY_SEPARATOR, '', $file);
        }
    }

    // Also look for wp-content/uploads URLs without standard extensions
    preg_match_all('/https?:\/\/rkdfuniversity\.org\/wp-content\/uploads\/[^\s"\'\<\>\)]+/i', $content, $wpMatches);
    if (!empty($wpMatches[0])) {
        foreach ($wpMatches[0] as $url) {
            $foundUrls[$url][] = str_replace($root . DIRECTORY_SEPARATOR, '', $file);
        }
    }
}

file_put_contents(__DIR__ . '/external_assets_found.json', json_encode($foundUrls, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

echo "Found " . count($foundUrls) . " unique external asset URLs across " . count($files) . " files.\n";
foreach ($foundUrls as $url => $usedIn) {
    echo "URL: $url\n";
    echo "  Used in: " . implode(', ', array_unique($usedIn)) . "\n\n";
}
