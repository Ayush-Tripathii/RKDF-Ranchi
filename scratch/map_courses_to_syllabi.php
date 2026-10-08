<?php
$index_content = file_get_contents(__DIR__ . '/../courses/index.php');
preg_match('/\$courses_json\s*=\s*<<<[\'"]?JSON[\'"]?\s*(.*?)\s*JSON;/s', $index_content, $m);
$courses_catalog = json_decode($m[1], true);

$doc_files = scandir(__DIR__ . '/../documents');
$pdfs = [];
foreach ($doc_files as $f) {
    if (preg_match('/\.pdf$/i', $f)) {
        $pdfs[] = $f;
    }
}

$crawled_pdfs_map = [];
if (file_exists(__DIR__ . '/crawled_all_pdfs.json')) {
    $crawled = json_decode(file_get_contents(__DIR__ . '/crawled_all_pdfs.json'), true);
    foreach ($crawled as $url => $pages) {
        $fn = basename(urldecode(preg_replace('/\?.*$/', '', $url)));
        if (in_array($fn, $pdfs)) {
            foreach ($pages as $p) {
                $crawled_pdfs_map[$p] = $fn;
            }
        }
    }
}

if (file_exists(__DIR__ . '/crawled_page_media_map.json')) {
    $media = json_decode(file_get_contents(__DIR__ . '/crawled_page_media_map.json'), true);
    foreach ($media as $page => $data) {
        if (!empty($data['pdfs'])) {
            foreach ($data['pdfs'] as $url) {
                $fn = basename(urldecode(preg_replace('/\?.*$/', '', $url)));
                if (in_array($fn, $pdfs)) {
                    // avoid generic university files
                    if (!preg_match('/(calendar|anti-ragging|audit|report|institutional-development|application-form)/i', $fn)) {
                        $crawled_pdfs_map[$page] = $fn;
                    }
                }
            }
        }
    }
}

$matched = [];
$unmatched = [];

foreach ($courses_catalog as $c) {
    $href = $c['href'];
    $name = $c['name'];
    $rel_key = str_replace('.php', '', $href);
    $rel_key_alt = preg_replace('/^courses\//', '', $rel_key);
    $slug = strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '-', $name), '-'));

    $assigned_pdf = null;

    // 1. Direct match from live crawl mapping
    if (isset($crawled_pdfs_map[$rel_key])) {
        $assigned_pdf = $crawled_pdfs_map[$rel_key];
    } elseif (isset($crawled_pdfs_map['courses/' . $rel_key_alt])) {
        $assigned_pdf = $crawled_pdfs_map['courses/' . $rel_key_alt];
    }

    // 2. Intelligent fuzzy mapping based on name / slug / level
    if (!$assigned_pdf) {
        foreach ($pdfs as $p) {
            $p_lower = strtolower($p);
            // Ignore non-syllabus administrative documents
            if (preg_match('/(calendar|anti-ragging|audit|report|provisional|certificate|grievance|ordinance)/i', $p)) {
                continue;
            }

            // Keyword matchers
            if (stripos($slug, 'bengali') !== false && stripos($p_lower, 'bengali') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'economics') !== false && stripos($p_lower, 'economics') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'education') !== false && stripos($p_lower, 'education') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'english') !== false && stripos($p_lower, 'english') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'geography') !== false && stripos($p_lower, 'geography') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'hindi') !== false && stripos($p_lower, 'hindi') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'history') !== false && stripos($p_lower, 'history') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'political') !== false && stripos($p_lower, 'political') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'sociology') !== false && stripos($p_lower, 'sociology') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'sanskrit') !== false && stripos($p_lower, 'sanskrit') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'journalism') !== false && (stripos($p_lower, 'jmc') !== false || stripos($p_lower, 'mass-com') !== false)) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'video-production') !== false && stripos($p_lower, 'video-production') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'bba-llb') !== false && stripos($p_lower, 'bba-llb') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'ba-llb') !== false && (stripos($p_lower, 'ba.llb') !== false || stripos($p_lower, 'ba-llb') !== false)) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'bachelor-of-laws') !== false && stripos($p_lower, 'llb') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'master-of-laws') !== false && stripos($p_lower, 'law') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'computer-science-engineering') !== false && stripos($p_lower, 'cse') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'civil-engineering') !== false && stripos($p_lower, 'civil') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'electrical') !== false && (stripos($p_lower, 'eee') !== false || stripos($p_lower, 'electrical') !== false)) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'mechanical') !== false && stripos($p_lower, 'mechanical') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'mining') !== false && stripos($p_lower, 'mining') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'bca') !== false && stripos($p_lower, 'bca') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'mca') !== false && stripos($p_lower, 'mca') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'b-com') !== false && stripos($p_lower, 'bcom') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'm-com') !== false && stripos($p_lower, 'm.com') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'b-pharma') !== false && stripos($p_lower, 'b-pharma') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'd-pharma') !== false && stripos($p_lower, 'd-pharma') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'bba') !== false && stripos($p_lower, 'bba') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'mba') !== false && stripos($p_lower, 'mba') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'mha') !== false && stripos($p_lower, 'mha') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'msw') !== false && stripos($p_lower, 'msw') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'social-work') !== false && stripos($p_lower, 'msw') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'pgdca') !== false && stripos($p_lower, 'pgdca') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'dca') !== false && stripos($p_lower, 'dca') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'biotechnology') !== false && stripos($p_lower, 'biotechnology') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'botany') !== false && stripos($p_lower, 'botany') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'chemistry') !== false && stripos($p_lower, 'chemistry') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'mathematics') !== false && stripos($p_lower, 'mathematics') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'physics') !== false && stripos($p_lower, 'physics') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'zoology') !== false && stripos($p_lower, 'zoology') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'microbiology') !== false && stripos($p_lower, 'microbiology') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'biochemistry') !== false && stripos($p_lower, 'biochemistry') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'environmental-science') !== false && stripos($p_lower, 'evs') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'fashion-design') !== false && stripos($p_lower, 'fashion') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'interior-design') !== false && stripos($p_lower, 'interior') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'multimedia') !== false && stripos($p_lower, 'multimedia') !== false) { $assigned_pdf = $p; break; }
            if (stripos($slug, 'library-science') !== false && (stripos($p_lower, 'blib') !== false || stripos($p_lower, 'mlib') !== false)) { $assigned_pdf = $p; break; }
        }
    }

    if ($assigned_pdf) {
        $matched[$href] = [
            'name' => $name,
            'pdf'  => $assigned_pdf
        ];
    } else {
        $unmatched[$href] = $name;
    }
}

echo "Matched Courses: " . count($matched) . " / " . count($courses_catalog) . "\n";
echo "Unmatched Courses: " . count($unmatched) . "\n\n";

if (!empty($unmatched)) {
    echo "Unmatched List:\n";
    foreach ($unmatched as $href => $name) {
        echo " - [$name] ($href)\n";
    }
}

file_put_contents(__DIR__ . '/final_course_syllabus_map.json', json_encode($matched, JSON_PRETTY_PRINT));
