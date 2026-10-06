<?php
$data = json_decode(file_get_contents(__DIR__ . '/school_extracted_courses.json'), true);

$targets = [
    'school-of-arts-and-humanities',
    'school-of-basic-and-applied-sciences',
    'school-of-commerce',
];

foreach ($targets as $slug) {
    echo "=================================================================\n";
    echo "PAGE: $slug\n";
    echo "-----------------------------------------------------------------\n";
    echo $data[$slug]['full_text'] . "\n\n";
}
