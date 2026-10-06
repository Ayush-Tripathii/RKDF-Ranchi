<?php
$dataFile = __DIR__ . '/scraped_live_data.json';
$data = json_decode(file_get_contents($dataFile), true);

echo "Type: " . gettype($data) . "\n";
echo "Count: " . count($data) . "\n";

$firstKey = array_key_first($data);
echo "First key: " . $firstKey . "\n";
if (is_array($data[$firstKey])) {
    echo "First item keys: " . implode(', ', array_keys($data[$firstKey])) . "\n";
    echo "Sample data:\n";
    print_r(array_slice($data[$firstKey], 0, 5));
} else {
    echo "First item value preview: " . substr(strval($data[$firstKey]), 0, 200) . "\n";
}

// Also scan all json files in scratch/
foreach (glob(__DIR__ . '/*.json') as $jsonFile) {
    echo "\nFile: " . basename($jsonFile) . " (" . round(filesize($jsonFile)/1024, 1) . " KB)\n";
    $c = json_decode(file_get_contents($jsonFile), true);
    if (is_array($c)) {
        echo "  Keys count: " . count($c) . "\n";
        echo "  First few keys: " . implode(', ', array_slice(array_keys($c), 0, 5)) . "\n";
    }
}
