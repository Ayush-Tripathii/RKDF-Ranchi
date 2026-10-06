<?php
$doc = new DOMDocument();
@$doc->loadHTMLFile(__DIR__ . '/board-of-studies.html');
$xpath = new DOMXPath($doc);
$tables = $xpath->query('//table');
echo "Found " . $tables->length . " tables\n";
foreach ($tables as $i => $tbl) {
    echo "--- Table $i ---\n";
    // find preceding heading or paragraph
    $prev = $tbl->previousSibling;
    while ($prev) {
        $text = trim($prev->textContent);
        if ($text) {
            echo "Preceding text: $text\n";
            break;
        }
        $prev = $prev->previousSibling;
    }
}
