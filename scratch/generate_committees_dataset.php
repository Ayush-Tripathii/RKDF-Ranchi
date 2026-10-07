<?php
/**
 * Script to generate all committee data and pages
 */

$jsonPath = __DIR__ . '/extracted_committees_data.json';
$raw = json_decode(file_get_contents($jsonPath), true);

$committeesDataDir = dirname(__DIR__) . '/data/committees';
if (!is_dir($committeesDataDir)) {
    mkdir($committeesDataDir, 0777, true);
}

$committeesWebDir = dirname(__DIR__) . '/committees';
if (!is_dir($committeesWebDir)) {
    mkdir($committeesWebDir, 0777, true);
}

$cleanCommittees = [];

foreach ($raw as $slug => $item) {
    $title = html_entity_decode($item['title'], ENT_QUOTES, 'UTF-8');
    
    // Parse members
    $members = [];
    foreach ($item['tables'] as $tableHtml) {
        $dom = new DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $tableHtml);
        $rows = $dom->getElementsByTagName('tr');
        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            if ($cols->length >= 2) {
                $nameRaw = trim(preg_replace('/\s+/', ' ', $cols->item(0)->textContent));
                $roleRaw = trim(preg_replace('/\s+/', ' ', $cols->item(1)->textContent));
                $deptRaw = $cols->length >= 3 ? trim(preg_replace('/\s+/', ' ', $cols->item(2)->textContent)) : '';
                
                if (stripos($nameRaw, 'Name') === false && stripos($nameRaw, 'Sl') === false && !empty($nameRaw)) {
                    // Extract designation / dept if in parentheses
                    $name = $nameRaw;
                    $desig = '';
                    if (preg_match('/^(.*?)\((.*?)\)$/u', $nameRaw, $m)) {
                        $name = trim($m[1]);
                        $desig = trim($m[2]);
                    } elseif (preg_match('/^(.*?)\s+(Dean|Principal|Controller|Assistant Professor|Asst\.|Head|Prof\.)/ui', $nameRaw, $m)) {
                        $name = trim($m[1]);
                        $desig = trim(substr($nameRaw, strlen($m[1])));
                    }
                    
                    $members[] = [
                        'name' => $name,
                        'role' => $roleRaw,
                        'designation' => $desig ?: ($deptRaw ?: 'Member / Academician'),
                    ];
                }
            }
        }
    }
    
    // Parse meaningful paragraphs
    $paragraphs = [];
    foreach ($item['paragraphs'] as $p) {
        $p = trim(html_entity_decode($p, ENT_QUOTES, 'UTF-8'));
        if (strlen($p) > 25 
            && stripos($p, 'Moving towards') === false 
            && stripos($p, '7091168777') === false 
            && stripos($p, 'Unique Visitors') === false 
            && stripos($p, 'AdmissionENQUIRE') === false
            && stripos($p, 'Recognitions / Accreditation') === false
            && stripos($p, 'Search for your course') === false
            && stripos($p, 'info@rkdfuniversity') === false
        ) {
            $paragraphs[] = $p;
        }
    }
    
    // Choose an icon
    $icon = 'users';
    if (stripos($slug, 'ragging') !== false) $icon = 'shield-alert';
    elseif (stripos($slug, 'women') !== false || stripos($slug, 'harassment') !== false) $icon = 'shield-check';
    elseif (stripos($slug, 'cultural') !== false) $icon = 'music';
    elseif (stripos($slug, 'environment') !== false) $icon = 'leaf';
    elseif (stripos($slug, 'finance') !== false) $icon = 'landmark';
    elseif (stripos($slug, 'grievance') !== false || stripos($slug, 'complaint') !== false) $icon = 'scale';
    elseif (stripos($slug, 'quality') !== false || stripos($slug, 'iqac') !== false) $icon = 'award';
    elseif (stripos($slug, 'library') !== false) $icon = 'book-open';
    elseif (stripos($slug, 'sports') !== false) $icon = 'trophy';
    elseif (stripos($slug, 'placement') !== false) $icon = 'briefcase';
    elseif (stripos($slug, 'transport') !== false) $icon = 'bus';
    elseif (stripos($slug, 'counseling') !== false) $icon = 'user-check';
    elseif (stripos($slug, 'equal') !== false || stripos($slug, 'st-sc') !== false) $icon = 'heart-handshake';
    elseif (stripos($slug, 'discipline') !== false) $icon = 'shield';
    
    $cleanCommittees[$slug] = [
        'slug' => $slug,
        'title' => $title,
        'icon' => $icon,
        'url' => 'committees/' . $slug . '.php',
        'members_count' => count($members),
        'members' => $members,
        'content' => $paragraphs,
    ];
}

// Export data file
$exportContent = "<?php\n/**\n * RKDF University Ranchi — Statutory Committees Master Data\n */\n\nreturn " . var_export($cleanCommittees, true) . ";\n";
file_put_contents($committeesDataDir . '/committees_list.php', $exportContent);

echo "Exported " . count($cleanCommittees) . " committees to data/committees/committees_list.php\n";
