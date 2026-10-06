<?php
$html = file_get_contents(__DIR__ . '/boards_raw/board_of_studies.html');
$doc = new DOMDocument();
@$doc->loadHTML('<?xml encoding="utf-8" ?>' . $html);
$xpath = new DOMXPath($doc);

// Search for all accordion titles or toggle titles or tabs or headings
$titles = $xpath->query('//*[contains(@class, "elementor-tab-title") or contains(@class, "elementor-toggle-title") or contains(@class, "elementor-accordion-title") or contains(@class, "elementor-heading-title") or self::h2 or self::h3 or self::h4 or self::h5]');

foreach ($titles as $t) {
    $class = $t->getAttribute('class');
    $text = trim($t->textContent);
    if (!empty($text)) {
        echo "[$class] $text\n";
    }
}
