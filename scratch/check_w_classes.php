<?php
$css = file_get_contents('style.css');
preg_match_all('/\.w-([0-9\.]+)\b/', $css, $m);
$unique = array_unique($m[1]);
sort($unique);
echo "w classes: " . implode(', ', $unique) . "\n";
