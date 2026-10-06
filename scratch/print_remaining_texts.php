<?php
$data = json_decode(file_get_contents(__DIR__ . '/school_extracted_courses.json'), true);

$targets = [
    'departments',
    'school-of-arts-and-humanities',
    'school-of-basic-and-applied-sciences',
    'school-of-commerce',
    'school-of-engineering-technology',
    'school-of-fashion-and-interior-designing',
    'school-of-information-technology',
    'school-of-journalism-and-mass-communication',
];

foreach ($targets as $slug) {
    if (!isset($data[$slug])) continue;
    echo "=================================================================\n";
    echo "PAGE: $slug\n";
    echo "-----------------------------------------------------------------\n";
    echo $data[$slug]['full_text'] . "\n\n";
}
