<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/render_course_template.php';

$index_content = file_get_contents(__DIR__ . '/../courses/index.php');
preg_match('/\$courses_json\s*=\s*<<<[\'"]?JSON[\'"]?\s*(.*?)\s*JSON;/s', $index_content, $m);
$courses_catalog = json_decode($m[1], true);

echo "Starting clean regeneration of all " . count($courses_catalog) . " courses...\n";

foreach ($courses_catalog as $c) {
    $rel = preg_replace('/^courses\//', '', $c['href']);
    $file_path = __DIR__ . '/../courses/' . $rel;
    $depth = substr_count($rel, '/') + 1;
    
    $name = $c['name'];
    $school = $c['school'];
    $level = $c['level'];
    $stream = $c['stream'];
    $duration = $c['duration'];
    
    // Determine smart eligibility criteria
    if (stripos($level, 'pg') !== false || stripos($name, 'M.') === 0 || stripos($name, 'Master') === 0 || stripos($name, 'MBA') !== false || stripos($name, 'MCA') !== false || stripos($name, 'LL.M') !== false) {
        $prereq = "Graduation in relevant discipline from recognized university (Min 50% for Gen, 45% for SC/ST/OBC).";
        $lateral = "Available for applicable degree tracks as per UGC / AICTE norms.";
        $recog = "UGC · AICTE · State Govt";
    } elseif (stripos($level, 'diploma') !== false || stripos($name, 'Diploma') !== false || stripos($name, 'Polytechnic') !== false) {
        $prereq = "10th / Matriculation passed with Science & Mathematics (Min 35% marks).";
        $lateral = "Direct 2nd Year entry for 10+2 (Science / Vocational / ITI passed).";
        $recog = "AICTE · State Board · UGC";
    } else {
        $prereq = "10+2 / Higher Secondary from CBSE / ICSE / JAC or recognized state board.";
        $lateral = "Lateral Entry available into 2nd Year as per UGC CBCS guidelines.";
        $recog = "UGC · AIU · State Govt";
    }
    
    // Fee defaults
    if (stripos($name, 'B.Tech') !== false) {
        $tuition = "Rs. 35,000/- Per Semester";
    } elseif (stripos($name, 'MBA') !== false) {
        $tuition = "Rs. 40,000/- Per Semester";
    } elseif (stripos($name, 'MCA') !== false) {
        $tuition = "Rs. 30,000/- Per Semester";
    } elseif (stripos($name, 'B.Pharm') !== false || stripos($name, 'Pharmacy') !== false) {
        $tuition = "Rs. 45,000/- Per Semester";
    } elseif (stripos($name, 'B.Sc') !== false || stripos($name, 'BCA') !== false || stripos($name, 'BBA') !== false) {
        $tuition = "Rs. 20,000/- Per Semester";
    } elseif (stripos($name, 'Diploma') !== false) {
        $tuition = "Rs. 18,000/- Per Semester";
    } elseif (stripos($name, 'LL.B') !== false || stripos($name, 'Law') !== false) {
        $tuition = "Rs. 25,000/- Per Semester";
    } else {
        $tuition = "Rs. 12,000/- Per Semester";
    }

    $about_html = '<p><strong>' . htmlspecialchars($name) . '</strong> at RKDF University Ranchi provides an advanced, industry-aligned curriculum combining strong theoretical foundations with intensive practical laboratories, live projects, and experienced faculty mentorship.</p><p>Designed strictly adhering to the <strong>National Education Policy (NEP 2020)</strong> framework, the course emphasizes Choice Based Credit System (CBCS), interdisciplinary electives, research methodologies, skill enhancements, and mandatory corporate internships.</p>';

    $eligibility_html = '
      <div class="course-eligibility-card">
        <strong class="text-foreground block mb-1 text-sm font-bold">Academic Qualification:</strong>
        <span class="text-sm text-muted-foreground">' . htmlspecialchars($prereq) . '</span>
      </div>
      <div class="course-eligibility-card">
        <strong class="text-foreground block mb-1 text-sm font-bold">Entrance &amp; Merit Criteria:</strong>
        <span class="text-sm text-muted-foreground">Direct admission based on qualifying examination merit. Valid CUET scores are recognized. 5% marks relaxation for reserved categories (SC/ST/OBC candidates of Jharkhand).</span>
      </div>';

    $fees_table_html = '
      <thead>
        <tr>
          <th>Fee Component</th>
          <th>Amount / Frequency</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="fee-component">Tuition Fee</td>
          <td class="fee-amount">' . htmlspecialchars($tuition) . '</td>
        </tr>
        <tr>
          <td class="fee-component">Admission Fee (One-time, Non-refundable)</td>
          <td>Rs. 10,000/-</td>
        </tr>
        <tr>
          <td class="fee-component">Caution Deposit (Refundable)</td>
          <td>Rs. 5,000/-</td>
        </tr>
        <tr>
          <td class="fee-component">Hostel &amp; Mess Facility (Optional)</td>
          <td>Rs. 18,000/- Per Semester (Lodging Only)</td>
        </tr>
      </tbody>';

    // Syllabus PDF Mapping from exact verified map
    $final_map = file_exists(__DIR__ . '/final_course_syllabus_map.json') 
        ? json_decode(file_get_contents(__DIR__ . '/final_course_syllabus_map.json'), true) 
        : [];

    $syllabus_pdf = '';
    if (isset($final_map[$c['href']]['pdf'])) {
        $candidate_pdf = $final_map[$c['href']]['pdf'];
        if (file_exists(__DIR__ . '/../documents/' . $candidate_pdf)) {
            $syllabus_pdf = $candidate_pdf;
        }
    }

    $data = [
        'catalog_name' => $name,
        'catalog_level' => $level,
        'catalog_stream' => $stream,
        'title' => $name,
        'page_title' => "$name Admission, Fees, Eligibility — RKDF University Ranchi",
        'meta_desc' => "$name at RKDF University Ranchi. Duration: $duration, Eligibility: $prereq. UGC Recognized with scholarships, modern labs, hostel, and 100% placement support.",
        'school' => $school,
        'hero_desc' => 'Industry-aligned curriculum with cutting-edge laboratories, distinguished faculty, and comprehensive career placement support.',
        'duration' => $duration,
        'prerequisites' => $prereq,
        'lateral_entry' => $lateral,
        'recognitions' => $recog,
        'about_html' => $about_html,
        'eligibility_html' => $eligibility_html,
        'fees_table_html' => $fees_table_html,
        'syllabus_pdf' => $syllabus_pdf,
    ];

    $php_code = renderCourseDetailFile($data, $depth);
    
    $dir = dirname($file_path);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    file_put_contents($file_path, $php_code);
}

echo "Successfully regenerated all " . count($courses_catalog) . " course pages with clean decoupled data!\n";
