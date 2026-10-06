<?php
$root = dirname(__DIR__);
$docsDir = $root . '/documents';
$imgDir = $root . '/images';

if (!is_dir($docsDir)) mkdir($docsDir, 0777, true);
if (!is_dir($imgDir)) mkdir($imgDir, 0777, true);

// 1. Download Anti-Ragging-Annexure.pdf if not exists
$targetAntiRagging = $docsDir . '/Anti-Ragging-Annexure.pdf';
if (!file_exists($targetAntiRagging) || filesize($targetAntiRagging) < 1000) {
    echo "Downloading Anti-Ragging Annexure PDF...\n";
    $ch = curl_init('https://www.antiragging.in/assets/pdf/annexure/Annexure-I.pdf');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $data = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($data && $code === 200 && strlen($data) > 1000) {
        file_put_contents($targetAntiRagging, $data);
        echo "✓ Anti-Ragging-Annexure.pdf downloaded (" . number_format(strlen($data) / 1024, 1) . " KB)\n";
    } else {
        echo "✗ Failed to download Anti-Ragging (HTTP $code)\n";
    }
} else {
    echo "✓ Anti-Ragging-Annexure.pdf already exists (" . number_format(filesize($targetAntiRagging) / 1024, 1) . " KB)\n";
}

// 2. Direct replacements in the 4 identified files:
// - about/annual-reports.php
// - about/government-recognition.php
// - about/accreditations.php
// - admissions/anti-ragging.php

echo "\n--- Updating about/annual-reports.php ---\n";
$annualReportsPath = $root . '/about/annual-reports.php';
$content = file_get_contents($annualReportsPath);
$content = str_replace(
    "'url' => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/RKDF-Audit-Report-24-25.pdf'",
    "'url' => url('documents/RKDF-Audit-Report-24-25.pdf')",
    $content
);
$content = str_replace(
    "'url' => 'https://rkdfuniversity.org/wp-content/uploads/2025/07/Audit-Report.pdf'",
    "'url' => url('documents/Audit-Report-2023-2024.pdf')",
    $content
);
$content = str_replace(
    "'url' => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/Audit-Report-2022-2023.pdf'",
    "'url' => url('documents/Audit-Report-2022-2023.pdf')",
    $content
);
$content = str_replace(
    "'url' => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/Audit-Report-2021-2022.pdf'",
    "'url' => url('documents/Audit-Report-2021-2022.pdf')",
    $content
);
$content = str_replace(
    "'url' => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/Audit-Report-20-21.pdf'",
    "'url' => url('documents/Audit-Report-2020-2021.pdf')",
    $content
);
$content = str_replace(
    "'url' => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/Audit-Report-19-20.pdf'",
    "'url' => url('documents/Audit-Report-2019-2020.pdf')",
    $content
);
$content = str_replace(
    "'url'   => 'https://rkdfuniversity.org/wp-content/uploads/2025/07/Annual-Report-2024-25.pdf'",
    "'url'   => url('documents/Annual-Report-2024-25.pdf')",
    $content
);
file_put_contents($annualReportsPath, $content);
echo "✓ about/annual-reports.php updated\n";

echo "\n--- Updating about/government-recognition.php ---\n";
$govRecPath = $root . '/about/government-recognition.php';
$content = file_get_contents($govRecPath);
$content = str_replace(
    "'url'  => 'https://rkdfuniversity.org/wp-content/uploads/2024/11/RKDF-AIU-Membership.pdf'",
    "'url'  => url('documents/RKDF-AIU-Membership.pdf')",
    $content
);
$content = str_replace(
    "'url'  => 'https://rkdfuniversity.org/wp-content/uploads/2024/11/RKDF-Jharkhand-Gazette.pdf'",
    "'url'  => url('documents/RKDF-Jharkhand-Gazette.pdf')",
    $content
);
$content = str_replace(
    "'url'     => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/PCI-Approval-2026-2027.pdf'",
    "'url'     => url('documents/PCI-Approval-2026-2027.pdf')",
    $content
);
$content = str_replace(
    "'url'     => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/BCI-Approval-2026-2027.pdf'",
    "'url'     => url('documents/BCI-Approval-2026-2027.pdf')",
    $content
);
file_put_contents($govRecPath, $content);
echo "✓ about/government-recognition.php updated\n";

echo "\n--- Updating about/accreditations.php ---\n";
$accredPath = $root . '/about/accreditations.php';
$content = file_get_contents($accredPath);
$content = str_replace(
    "'link'  => 'https://rkdfuniversity.org/wp-content/uploads/2024/11/RKDF-AIU-Membership.pdf'",
    "'link'  => url('documents/RKDF-AIU-Membership.pdf')",
    $content
);
$content = str_replace(
    "'link'  => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/PCI-Approval-2026-2027.pdf'",
    "'link'  => url('documents/PCI-Approval-2026-2027.pdf')",
    $content
);
$content = str_replace(
    "'link'  => 'https://rkdfuniversity.org/wp-content/uploads/2026/07/BCI-Approval-2026-2027.pdf'",
    "'link'  => url('documents/BCI-Approval-2026-2027.pdf')",
    $content
);
$content = str_replace(
    "'link'  => 'https://rkdfuniversity.org/wp-content/uploads/2024/11/RKDF-Jharkhand-Gazette.pdf'",
    "'link'  => url('documents/RKDF-Jharkhand-Gazette.pdf')",
    $content
);
file_put_contents($accredPath, $content);
echo "✓ about/accreditations.php updated\n";

echo "\n--- Updating admissions/anti-ragging.php ---\n";
$antiRaggingPath = $root . '/admissions/anti-ragging.php';
$content = file_get_contents($antiRaggingPath);
$content = str_replace(
    'href="https://www.antiragging.in/assets/pdf/annexure/Annexure-I.pdf"',
    'href="<?= url(\'documents/Anti-Ragging-Annexure.pdf\') ?>"',
    $content
);
file_put_contents($antiRaggingPath, $content);
echo "✓ admissions/anti-ragging.php updated\n";

echo "\nAll files successfully localized!\n";
