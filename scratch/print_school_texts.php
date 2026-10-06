<?php
$data = json_decode(file_get_contents(__DIR__ . '/school_extracted_courses.json'), true);

foreach ($data as $slug => $item) {
    echo "=================================================================\n";
    echo "PAGE: $slug\n";
    echo "-----------------------------------------------------------------\n";
    echo $item['full_text'] . "\n\n";
}
