<?php
$liveUrls = json_decode(file_get_contents(__DIR__ . '/sitemap_discovered_urls.json'), true);
$scraped = json_decode(file_get_contents(__DIR__ . '/scraped_live_data.json'), true);

$targets = [
    // Committees
    'admission-counseling' => 'Admission Counseling Committee',
    'anti-sexual' => 'Anti Sexual Harassment/ Women Cell',
    'anti-ragging' => 'Anti-Ragging Committee',
    'st-sc-obc' => 'Committee for ST/ SC/ OBC',
    'sc-st-obc' => 'Committee for ST/ SC/ OBC',
    'cultural-committee' => 'Cultural Committee',
    'environment-cell' => 'Environment Cell',
    'equal-opportunity' => 'Equal Opportunity Committee',
    'finance-committee' => 'Finance Committee',
    'grievance-redressal' => 'Grievance Redressal Committee',
    'internal-complaint' => 'Internal Complaint Committee',
    'internal-quality' => 'Internal Quality Assurance Cell (IQAC)',
    'iqac' => 'IQAC',
    'library-committee' => 'Library Committee',
    'sports-committee' => 'Sports Committee',
    'students-grievance' => 'Students Grievance Redressal Committee',
    'training-placement' => 'Training & Placement Committee',
    'transportation-committee' => 'Transportation Committee',
    'transport-committee' => 'Transportation Committee',
    'unfair-means' => 'Unfair Means & Discipline Committee',
    'women-development' => 'Women Development Cell',
    
    // Statutory & Disclosures
    'statutes' => 'Statutes of RKDF',
    'jharkhand-government-act' => 'Jharkhand Government Act, 2019',
    'jharkhand-act' => 'Jharkhand Government Act, 2019',
    'public-self-disclosure' => 'Public Self Disclosure',
    'ugc-proforma-appendix' => 'UGC Proforma Appendix',
    'ugc-2f-proforma' => 'UGC 2f Proforma',
    'ugc-proforma-annexure' => 'UGC Proforma Annexure',
    'institutional-development-plan' => 'Institutional Development Plan'
];

echo "=== SEARCHING IN LIVE SITEMAP URLS ===\n";
foreach ($targets as $key => $title) {
    $matches = [];
    foreach ($liveUrls as $u) {
        if (stripos($u, $key) !== false) {
            $matches[] = $u;
        }
    }
    if (!empty($matches)) {
        echo "[$title] ($key):\n";
        foreach (array_unique($matches) as $m) echo "   -> $m\n";
    } else {
        echo "[$title] ($key): No direct URL in sitemap\n";
    }
}
