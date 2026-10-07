<?php
$root = dirname(__DIR__);

// List of all pages shown in user screenshot
$sections = [
    'ABOUT' => [
        'About RKDF University'             => ['about/index.php', 'about/university.php'],
        'Vision and Mission'                => ['about/vision-mission.php'],
        'Board of Management'               => ['boards/board-of-management.php', 'about/board-of-management.php'],
        'Board of Governors'                => ['boards/board-of-governors.php', 'about/board-of-governors.php'],
        'Academic Council Members'          => ['boards/academic-council-members.php', 'about/academic-council.php'],
        'Board of Studies'                  => ['boards/board-of-studies.php', 'about/board-of-studies.php'],
        'Institutional Development Plan'    => ['about/institutional-development-plan.php', 'governance/institutional-development-plan.php'],
        'Annual Reports'                    => ['about/annual-reports.php'],
    ],
    'MANAGEMENT' => [
        'Managing Director Message'         => ['governance/managing-director.php', 'about/managing-director.php'],
        'Chancellor Message'                => ['governance/chancellor.php', 'about/chancellor.php'],
        'Vice Chancellor\'s Message'        => ['governance/vice-chancellor.php', 'about/vice-chancellor.php'],
        'Pro Vice Chancellor'               => ['governance/pro-vice-chancellor.php', 'about/pro-vice-chancellor.php'],
        'Registrar Message'                 => ['governance/registrar.php', 'about/registrar.php'],
        'Controller of Examination'         => ['governance/controller-of-examination.php', 'about/controller-of-examination.php'],
        'Chief Vigilance Officer'           => ['governance/chief-vigilance-officer.php', 'about/chief-vigilance-officer.php'],
        'Finance Officer'                   => ['governance/finance-officer.php', 'about/finance-officer.php'],
        'Ombudsperson'                      => ['governance/ombudsperson.php', 'about/ombudsperson.php'],
        'Principal'                         => ['governance/principal.php', 'about/principal.php'],
    ],
    'COMMITTEES' => [
        'Admission Counseling Committee'    => ['governance/admission-counseling-committee.php', 'boards/admission-counseling-committee.php'],
        'Anti Sexual Harassment/ Women Cell'=> ['governance/anti-sexual-harassment-cell.php', 'boards/anti-sexual-harassment.php', 'governance/internal-complaint-committee.php'],
        'Anti-Ragging Committee'            => ['admissions/anti-ragging.php', 'governance/anti-ragging-committee.php'],
        'Committee for ST/ SC/ OBC'         => ['governance/committee-for-sc-st-obc.php', 'boards/committee-for-sc-st-obc.php'],
        'Cultural Committee'                => ['governance/cultural-committee.php', 'boards/cultural-committee.php'],
        'Environment Cell'                  => ['governance/environment-cell.php', 'boards/environment-cell.php'],
        'Equal Opportunity Committee'       => ['governance/equal-opportunity-committee.php', 'boards/equal-opportunity-committee.php'],
        'Finance Committee'                 => ['governance/finance-committee.php', 'boards/finance-committee.php'],
        'Grievance Redressal Committee'     => ['governance/grievance-redressal-committee.php', 'boards/grievance-redressal.php'],
        'Internal Complaint Committee'      => ['governance/internal-complaint-committee.php', 'boards/internal-complaint.php'],
        'Internal Quality Assurance Cell'   => ['governance/iqac.php', 'about/iqac.php', 'governance/internal-quality-assurance-cell.php'],
        'Library Committee'                 => ['governance/library-committee.php', 'boards/library-committee.php'],
        'Sports Committee'                  => ['governance/sports-committee.php', 'boards/sports-committee.php'],
        'Students Grievance Redressal Committee' => ['governance/students-grievance-redressal-committee.php', 'boards/students-grievance.php'],
        'Training & Placement Committee'    => ['governance/training-and-placement-committee.php', 'boards/training-placement-committee.php'],
        'Transportation Committee'          => ['governance/transportation-committee.php', 'boards/transportation-committee.php'],
        'Unfair Means & Discipline Committee' => ['governance/unfair-means-discipline-committee.php', 'boards/discipline-committee.php'],
        'Women Development Cell'            => ['governance/women-development-cell.php', 'boards/women-development-cell.php'],
    ],
    'Recognitions / Accreditation' => [
        'Government Recognitions'           => ['about/government-recognition.php', 'about/government-recognitions.php'],
        'Accreditations'                    => ['about/accreditations.php'],
        'Statutes of RKDF'                  => ['governance/statutes.php', 'about/statutes.php'],
        'Jharkhand Government Act, 2019'    => ['governance/acts-and-statutes.php', 'about/jharkhand-act.php'],
    ],
    'Academic Leadership' => [
        'Deans & HoD'                       => ['governance/deans-and-hods.php', 'about/deans-and-hod.php', 'governance/deans-and-hod.php'],
    ],
    'Mandatory Disclosure' => [
        'Public Self Disclosure'            => ['about/public-self-disclosure.php', 'governance/public-self-disclosure.php'],
        'UGC Proforma Appendix'             => ['about/ugc-proforma-appendix.php', 'governance/ugc-proforma-appendix.php'],
        'UGC 2f Proforma'                   => ['about/ugc-2f-proforma.php', 'governance/ugc-2f-proforma.php'],
        'UGC Proforma Annexure'             => ['about/ugc-proforma-annexure.php', 'governance/ugc-proforma-annexure.php'],
    ]
];

$auditResults = [];

foreach ($sections as $sectionName => $items) {
    foreach ($items as $label => $candidatePaths) {
        $foundPath = null;
        $fileSize = 0;
        $status = 'MISSING';
        
        foreach ($candidatePaths as $rel) {
            $full = $root . '/' . $rel;
            if (file_exists($full)) {
                $foundPath = $rel;
                $fileSize = filesize($full);
                // Check if it's a bridge file or full content
                $content = file_get_contents($full);
                if (strlen($content) > 1000) {
                    $status = 'COMPLETED (Full Page)';
                } else {
                    $status = 'BRIDGE / REDIRECT';
                }
                break;
            }
        }

        $auditResults[$sectionName][] = [
            'label'  => $label,
            'path'   => $foundPath,
            'size'   => $fileSize,
            'status' => $status
        ];
    }
}

echo json_encode($auditResults, JSON_PRETTY_PRINT);
