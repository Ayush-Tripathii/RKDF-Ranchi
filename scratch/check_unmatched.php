<?php
$map = json_decode(file_get_contents(__DIR__ . '/final_course_syllabus_map.json'), true);
$unmatched = [];
foreach ($map as $href => $data) {
    if (empty($data['pdf'])) {
        $unmatched[$href] = $data['name'];
    }
}

echo "Remaining unmatched courses: " . count($unmatched) . "\n\n";
foreach ($unmatched as $href => $name) {
    echo " - [$name] ($href)\n";
}
