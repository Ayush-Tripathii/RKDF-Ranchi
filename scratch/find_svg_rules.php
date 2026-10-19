<?php
$content = file_get_contents('includes/header.php');
preg_match_all('/([^{};]+svg[^{};]*)\{([^}]+)\}/i', $content, $m);
for ($i = 0; $i < count($m[0]); $i++) {
    echo trim($m[1][$i]) . " => " . trim($m[2][$i]) . "\n---\n";
}
