<?php
/**
 * Download all live images, PDFs, and documents and update all templates
 */

$root = dirname(__DIR__);
$docsDir = $root . '/documents';
$imgDir = $root . '/images';

if (!is_dir($docsDir)) mkdir($docsDir, 0777, true);
if (!is_dir($imgDir)) mkdir($imgDir, 0777, true);

// 1. Collect all URLs to download
$documentsToDownload = [
    // Statutory Accreditations & Recognitions
    'RKDF-AIU-Membership.pdf'       => 'https://rkdfuniversity.org/wp-content/uploads/2024/11/RKDF-AIU-Membership.pdf',
    'PCI-Approval-2026-2027.pdf'     => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/PCI-Approval-2026-2027.pdf',
    'BCI-Approval-2026-2027.pdf'     => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/BCI-Approval-2026-2027.pdf',
    'RKDF-Jharkhand-Gazette.pdf'     => 'https://rkdfuniversity.org/wp-content/uploads/2024/11/RKDF-Jharkhand-Gazette.pdf',
    
    // Annual & Audit Reports
    'RKDF-Audit-Report-24-25.pdf'    => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/RKDF-Audit-Report-24-25.pdf',
    'Audit-Report-2023-2024.pdf'     => 'https://rkdfuniversity.org/wp-content/uploads/2025/07/Audit-Report.pdf',
    'Audit-Report-2022-2023.pdf'     => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/Audit-Report-2022-2023.pdf',
    'Audit-Report-2021-2022.pdf'     => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/Audit-Report-2021-2022.pdf',
    'Audit-Report-2020-2021.pdf'     => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/Audit-Report-20-21.pdf',
    'Audit-Report-2019-2020.pdf'     => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/Audit-Report-19-20.pdf',
    'Annual-Report-2024-25.pdf'      => 'https://rkdfuniversity.org/wp-content/uploads/2025/07/Annual-Report-2024-25.pdf',
    
    // Disclosures, UGC & Governance
    'Public-Self-Disclosure.pdf'     => 'https://rkdfuniversity.org/wp-content/uploads/2025/08/Public-Self-Disclosure.pdf',
    'UGC-Appendix.pdf'               => 'https://rkdfuniversity.org/wp-content/uploads/2026/01/UGC-Appendix.pdf',
    'UGC-2F-Proforma.pdf'            => 'https://rkdfuniversity.org/wp-content/uploads/2026/01/UGC-2F-Proforma.pdf',
    'UGC-Annexure.pdf'               => 'https://rkdfuniversity.org/wp-content/uploads/2026/01/UGC-Annexure.pdf',
    'RKDF-PROSPECTUS.pdf'            => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/RKDF-PROSPECTUS.pdf',
    'Academic-Calendar-2026-27.pdf'  => 'https://rkdfuniversity.org/wp-content/uploads/2026/06/Academic-Calendar-2026-27.pdf',
    'Exam-Rules-Regulations.pdf'     => 'https://rkdfuniversity.org/wp-content/uploads/2025/07/Exam-Rules-Regulations.pdf',
    'Anti-Ragging-Annexure.pdf'      => 'https://www.antiragging.in/assets/pdf/annexure/Annexure-I.pdf',
];

$imagesToDownload = [
    'RKDF-LOGO.jpg'                  => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/RKDF-LOGO.jpg',
    'B-Sc-Biochemistry.jpeg'         => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-Biochemistry-480x270.jpeg',
    'B-Sc-Computer-Science.jpeg'      => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-Computer-Science-480x270.jpeg',
    'B-Sc-Mathematics.jpeg'           => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-Mathematics-480x270.jpeg',
    'B-Sc-Physics.jpeg'               => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-Physics-480x270.jpeg',
    'B-Sc-Chemistry.jpeg'             => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-Chemistry-480x270.jpeg',
    'B-Sc-Honors.jpeg'                => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-Honors-480x270.jpeg',
    'B-Sc-General.jpeg'               => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-480x270.jpeg',
    'MBA-Interior-Design.jpeg'        => 'https://rkdfuniversity.org/wp-content/uploads/2024/11/MBA-Interior-Design-480x270.jpeg',
    'MBA-Fashion-Design.jpeg'         => 'https://rkdfuniversity.org/wp-content/uploads/2024/11/MBA-Fashion-Design-480x270.jpeg',
    'B-Sc-Interior-Design.jpeg'       => 'https://rkdfuniversity.org/wp-content/uploads/2024/11/B-Sc-Interior-Design-480x270.jpeg',
    'B-Sc-Biotechnology.jpeg'         => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-Biotechnology-480x270.jpeg',
    'B-Sc-Microbiology.jpg'           => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-Microbiology-480x270.jpg',
    'B-Sc-Botany.jpeg'                => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-Botany-480x270.jpeg',
    'B-Sc-Zoology.jpeg'               => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/B-Sc-Zoology-480x270.jpeg',
    'MBA-Management-Studies.jpeg'     => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/MBA-Management-Studies-480x270.jpeg',
    'MBA-Hotel-Management.jpeg'       => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/MBA-Hotel-Management-480x270.jpeg',
    'MBA-Construction-Management.jpeg'=> 'https://rkdfuniversity.org/wp-content/uploads/2024/10/MBA-Construction-Management-480x270.jpeg',
    'MBA-Logistics.jpeg'              => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/MBA-Logistics-480x270.jpeg',
    'MBA-Banking-Finance.jpeg'        => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/MBA-Banking-Finance-480x320.jpeg',
    'MBA-General.jpeg'                => 'https://rkdfuniversity.org/wp-content/uploads/2024/10/MBA-480x270.jpeg',
];

// Helper to download
function downloadFile($url, $savePath) {
    echo "Downloading: " . basename($savePath) . " from $url ... ";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    $data = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($data && $code === 200 && strlen($data) > 200) {
        file_put_contents($savePath, $data);
        echo "✓ (" . number_format(strlen($data) / 1024, 1) . " KB)\n";
        return true;
    } else {
        echo "✗ FAILED (HTTP $code)\n";
        return false;
    }
}

echo "=== DOWNLOADING DOCUMENTS & PDFS ===\n";
$docUrlMap = [];
foreach ($documentsToDownload as $filename => $url) {
    $target = $docsDir . '/' . $filename;
    downloadFile($url, $target);
    $docUrlMap[$url] = "documents/$filename";
}

echo "\n=== DOWNLOADING IMAGES & GRAPHICS ===\n";
$imgUrlMap = [];
foreach ($imagesToDownload as $filename => $url) {
    $target = $imgDir . '/' . $filename;
    downloadFile($url, $target);
    $imgUrlMap[$url] = "images/$filename";
}

// 2. Now replace URLs across all project files
echo "\n=== REPLACING REMOTE URLS WITH LOCAL URLS ACROSS ALL FILES ===\n";

function getAllPhp($dir) {
    $out = [];
    foreach (scandir($dir) as $item) {
        if ($item === '.' || $item === '..' || $item === '.git' || $item === 'scratch') continue;
        $p = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($p)) {
            $out = array_merge($out, getAllPhp($p));
        } elseif (substr($item, -4) === '.php') {
            $out[] = $p;
        }
    }
    return $out;
}

$allPhp = getAllPhp($root);
$allReplacements = array_merge($docUrlMap, $imgUrlMap);

// Also add variants like Audit-Report.pdf
$allReplacements['https://rkdfuniversity.org/wp-content/uploads/2025/07/Audit-Report.pdf'] = 'documents/Audit-Report-2023-2024.pdf';
$allReplacements['https://rkdfuniversity.org/wp-content/uploads/2026/07/Audit-Report-20-21.pdf'] = 'documents/Audit-Report-2020-2021.pdf';
$allReplacements['https://rkdfuniversity.org/wp-content/uploads/2026/07/Audit-Report-19-20.pdf'] = 'documents/Audit-Report-2019-2020.pdf';
$allReplacements['https://www.antiragging.in/assets/pdf/annexure/Annexure-I.pdf'] = 'documents/Anti-Ragging-Annexure.pdf';

$replacedCount = 0;
foreach ($allPhp as $file) {
    $content = file_get_contents($file);
    $orig = $content;

    foreach ($allReplacements as $remoteUrl => $localPath) {
        if (strpos($content, $remoteUrl) !== false) {
            $content = str_replace($remoteUrl, "<?= url('" . $localPath . "') ?>", $content);
        }
    }

    if ($content !== $orig) {
        file_put_contents($file, $content);
        $replacedCount++;
        echo "Updated local asset paths in: " . str_replace($root . DIRECTORY_SEPARATOR, '', $file) . "\n";
    }
}

echo "\nCompleted! Replaced asset paths in $replacedCount files.\n";
