<?php
/**
 * RKDF University Ranchi — Site Configuration
 * Central config file for all site settings and data
 */

// Site Info
define('SITE_NAME',            'RKDF University');
define('SITE_TAGLINE',         'Education Glorifies Nation');
define('SITE_URL',             'http://localhost/RKDF Ranchi');
define('SITE_YEAR',            '2026');
define('SITE_EMAIL',           'info@rkdfuniversity.org');
define('SITE_ADMISSION_EMAIL', 'admission@rkdfuniversity.org');
define('SITE_PHONE',           '+91 7091168777');
define('SITE_WHATSAPP',        '+91 7091168777');
define('SITE_TOLLFREE',        '1800-180-5522');
define('SITE_ADDRESS',         'RKDF University, Argora Bypass Road, Near Kathal More, Ranchi, Jharkhand - 834004');
define('SOCIAL_FACEBOOK',      'https://www.facebook.com/rkdfuniversityranchi/');
define('SOCIAL_INSTAGRAM',     'https://www.instagram.com/rkdfuniversityranchi/');
define('SOCIAL_YOUTUBE',       'https://www.youtube.com/@rkdfuniversityranchi');
define('SOCIAL_LINKEDIN',      'https://www.linkedin.com/school/rkdfuniversityranchi/');
define('SOCIAL_WHATSAPP',      'https://wa.me/917091168777');

// Meta defaults (can be overridden per page)
define('DEFAULT_META_DESC',
    'RKDF University Ranchi — a multidisciplinary university shaping the next generation of scientists, physicians, engineers, entrepreneurs and artists.');

// Base path for assets
define('BASE_PATH', '/RKDF Ranchi/');
define('ASSETS_PATH', BASE_PATH);
$base_url = rtrim(SITE_URL, '/') . '/';

// Navigation links — main nav
$NAV_LINKS = [
    ['label' => 'About',        'href' => 'about/',                 'id' => 'nav-about'],
    ['label' => 'Academics',    'href' => 'departments/',           'id' => 'nav-academics',
        'dropdown' => [
            ['label' => 'Schools & Faculties',  'href' => 'departments/'],
            ['label' => 'Programs',              'href' => 'departments/#programs'],
            ['label' => 'Faculty',               'href' => 'about/#faculty'],
            ['label' => 'Academic Calendar',     'href' => '#'],
        ]
    ],
    ['label' => 'Admissions',   'href' => 'admissions/',            'id' => 'nav-admissions'],
    ['label' => 'Research',     'href' => 'research.php',           'id' => 'nav-research'],
    ['label' => 'Campus',       'href' => 'media/gallery.php',      'id' => 'nav-campus'],
    ['label' => 'More',         'href' => '#',                      'id' => 'nav-more',
        'dropdown' => [
            ['label' => 'News & Events',    'href' => 'media/news.php'],
            ['label' => 'Placements',       'href' => 'admissions/#placements'],
            ['label' => 'Alumni',           'href' => 'about/#alumni'],
            ['label' => 'Gallery',          'href' => 'media/gallery.php'],
            ['label' => 'Contact',          'href' => 'contact.php'],
        ]
    ],
];

// Utility bar links
$UTILITY_LINKS = [
    ['label' => 'Student Portal',  'href' => '#', 'id' => 'link-student-portal'],
    ['label' => 'Faculty Portal',  'href' => '#', 'id' => 'link-faculty-portal'],
    ['label' => 'Results',         'href' => '#', 'id' => 'link-results'],
    ['label' => 'Examinations',    'href' => '#', 'id' => 'link-examinations'],
];

// Schools data
$SCHOOLS = [
    ['name' => 'Engineering & Technology',  'programs' => 22, 'icon' => 'fa-microchip',          'id' => 'school-engineering'],
    ['name' => 'Medical & Health Sciences', 'programs' => 14, 'icon' => 'fa-stethoscope',         'id' => 'school-medical'],
    ['name' => 'Management & Commerce',     'programs' => 18, 'icon' => 'fa-chart-line',           'id' => 'school-management'],
    ['name' => 'Law & Governance',          'programs' => 8,  'icon' => 'fa-scale-balanced',       'id' => 'school-law'],
    ['name' => 'Arts, Humanities & Design', 'programs' => 16, 'icon' => 'fa-palette',              'id' => 'school-arts'],
    ['name' => 'Sciences & Research',       'programs' => 20, 'icon' => 'fa-flask',                'id' => 'school-sciences'],
    ['name' => 'Architecture & Planning',   'programs' => 6,  'icon' => 'fa-building-columns',     'id' => 'school-architecture'],
    ['name' => 'Education & Pedagogy',      'programs' => 10, 'icon' => 'fa-graduation-cap',       'id' => 'school-education'],
];

// Research stats
$RESEARCH_STATS = [
    ['num' => '&#8377;120Cr+', 'label' => 'Active Research Funding'],
    ['num' => '18',            'label' => 'Centres of Excellence'],
    ['num' => '1,400+',        'label' => 'Indexed Publications'],
    ['num' => '85',            'label' => 'Patents Filed'],
];

// Placement stats
$PLACEMENT_STATS = [
    ['num' => '412',        'label' => 'International Offers'],
    ['num' => '&#8377;24 LPA', 'label' => 'Avg. Package'],
    ['num' => '98%',        'label' => 'Placement Rate'],
    ['num' => '500+',       'label' => 'Recruiting Companies'],
];

// Companies
$COMPANIES = ['TCS', 'Infosys', 'Wipro', 'AIIMS', 'McKinsey', 'Deloitte', 'Google', 'Microsoft', 'Amazon', 'HDFC Bank'];

// News
$NEWS = [
    [
        'id'      => 'news-solar',
        'tag'     => 'Research',
        'date'    => 'Jun 28, 2026',
        'title'   => 'RKDF researchers publish breakthrough on perovskite solar cells in Nature Energy.',
        'excerpt' => 'A team from the School of Sciences has published a landmark paper in one of the world\'s most prestigious journals.',
        'image'   => 'solar_research.jpg',
        'href'    => 'news.php#solar',
    ],
    [
        'id'      => 'news-ai',
        'tag'     => 'Campus',
        'date'    => 'Jun 24, 2026',
        'title'   => 'New Centre for AI &amp; Cognitive Sciences inaugurated by the Hon\'ble Governor.',
        'excerpt' => '',
        'image'   => '',
        'href'    => 'news.php#ai',
    ],
    [
        'id'      => 'news-placement',
        'tag'     => 'Placement',
        'date'    => 'Jun 20, 2026',
        'title'   => 'Record placement season concludes with 412 international offers.',
        'excerpt' => '',
        'image'   => '',
        'href'    => 'news.php#placement',
    ],
];

// Notices
$NOTICES = [
    ['id' => 'notice-1', 'text' => 'Phase II Admissions 2026-27 &mdash; Application window now open until July 31.', 'meta' => 'Admissions &middot; Jul 1, 2026'],
    ['id' => 'notice-2', 'text' => 'End-Sem Examination Schedule (UG/PG) released on the student portal.',             'meta' => 'Examinations &middot; Jun 30, 2026'],
    ['id' => 'notice-3', 'text' => 'Scholarship results for Merit &amp; Means category candidates announced.',          'meta' => 'Scholarships &middot; Jun 28, 2026'],
    ['id' => 'notice-4', 'text' => 'Notice regarding hostel allotment for new residents &mdash; Block C &amp; D.',     'meta' => 'Hostel &middot; Jun 25, 2026'],
];

// Events
$EVENTS = [
    ['id' => 'event-convocation', 'day' => '12', 'month' => 'Jul', 'title' => 'Convocation 2026 &mdash; 14th Annual Ceremony',          'location' => 'Central Auditorium'],
    ['id' => 'event-symposium',   'day' => '18', 'month' => 'Jul', 'title' => 'International Symposium on Sustainable Engineering',       'location' => 'School of Engineering'],
    ['id' => 'event-openday',     'day' => '02', 'month' => 'Aug', 'title' => 'Open Day &mdash; Campus Tours &amp; Faculty Interactions', 'location' => 'Main Campus'],
    ['id' => 'event-independence','day' => '15', 'month' => 'Aug', 'title' => 'Independence Day &amp; Founder\'s Lecture Series',         'location' => 'Quad Lawns'],
];

// Alumni / Testimonials
$ALUMNI = [
    [
        'id'      => 'alumni-aanya',
        'initials'=> 'AV',
        'class'   => '',
        'name'    => 'Aanya Verma',
        'role'    => 'B.Tech CSE, 2023 &middot; PhD Candidate, Stanford',
        'quote'   => '"The research opportunities and mentorship at RKDF gave me the foundation to pursue a PhD at Stanford. The faculty here genuinely invest in your growth."',
    ],
    [
        'id'      => 'alumni-rohan',
        'initials'=> 'RM',
        'class'   => 'rm',
        'name'    => 'Dr. Rohan Mehta',
        'role'    => 'MBBS, 2022 &middot; Resident, AIIMS Delhi',
        'quote'   => '"The medical program at RKDF set the highest clinical standards. I credit my placement at AIIMS entirely to the rigorous training I received here."',
    ],
    [
        'id'      => 'alumni-ishita',
        'initials'=> 'IK',
        'class'   => 'ik',
        'name'    => 'Ishita Kapoor',
        'role'    => 'MBA, 2024 &middot; Consultant, McKinsey &amp; Co.',
        'quote'   => '"RKDF\'s MBA program was transformative. The industry connections, case study approach, and leadership programs directly translated to my career at McKinsey."',
    ],
];

// Gallery images
$GALLERY = [
    ['id' => 'gallery-1', 'file' => 'convocation.jpg',      'caption' => 'Convocation 2026',       'class' => 'gi-large'],
    ['id' => 'gallery-2', 'file' => 'campus_building.jpg',  'caption' => 'Academic Block',          'class' => ''],
    ['id' => 'gallery-3', 'file' => 'research_lab.jpg',     'caption' => 'Research Laboratories',   'class' => ''],
    ['id' => 'gallery-4', 'file' => 'campus_students.jpg',  'caption' => 'Campus Life',             'class' => 'gi-wide'],
    ['id' => 'gallery-5', 'file' => 'library.jpg',          'caption' => 'Central Library',         'class' => ''],
];

// Footer social links
$SOCIAL_LINKS = [
    ['id' => 'social-facebook',  'icon' => 'fa-brands fa-facebook-f',   'label' => 'Facebook',  'href' => '#'],
    ['id' => 'social-twitter',   'icon' => 'fa-brands fa-x-twitter',    'label' => 'Twitter',   'href' => '#'],
    ['id' => 'social-instagram', 'icon' => 'fa-brands fa-instagram',    'label' => 'Instagram', 'href' => '#'],
    ['id' => 'social-linkedin',  'icon' => 'fa-brands fa-linkedin-in',  'label' => 'LinkedIn',  'href' => '#'],
    ['id' => 'social-youtube',   'icon' => 'fa-brands fa-youtube',      'label' => 'YouTube',   'href' => '#'],
];

// Footer columns
$FOOTER_COLS = [
    'Academics' => [
        ['label' => 'Schools',   'href' => 'departments/',              'id' => 'footer-schools'],
        ['label' => 'Programs',  'href' => 'departments/#programs',     'id' => 'footer-programs'],
        ['label' => 'Faculty',   'href' => 'about/#faculty',             'id' => 'footer-faculty'],
        ['label' => 'Calendar',  'href' => '#',                          'id' => 'footer-calendar'],
    ],
    'Admissions' => [
        ['label' => 'Apply Now',     'href' => 'admissions/',            'id' => 'footer-apply'],
        ['label' => 'Scholarships',  'href' => 'admissions/#scholarships', 'id' => 'footer-scholarships'],
        ['label' => 'Fee Structure', 'href' => 'admissions/#fee',        'id' => 'footer-fee'],
        ['label' => 'FAQ',           'href' => 'admissions/#faq',        'id' => 'footer-faq'],
    ],
    'Campus' => [
        ['label' => 'Library', 'href' => 'media/gallery.php',            'id' => 'footer-library'],
        ['label' => 'Hostels', 'href' => 'about/#campus',                'id' => 'footer-hostels'],
        ['label' => 'Sports',  'href' => 'media/gallery.php',            'id' => 'footer-sports'],
        ['label' => 'Gallery', 'href' => 'media/gallery.php',            'id' => 'footer-gallery'],
    ],
    'Quick Links' => [
        ['label' => 'Results',       'href' => 'media/news.php',         'id' => 'footer-results'],
        ['label' => 'Notices',       'href' => 'media/news.php#notices', 'id' => 'footer-notices'],
        ['label' => 'Careers',       'href' => 'contact.php',            'id' => 'footer-careers'],
        ['label' => 'Anti-Ragging',  'href' => 'admissions/anti-ragging.php', 'id' => 'footer-anti-ragging'],
        ['label' => 'Grievance Cell','href' => 'contact.php',            'id' => 'footer-grievance'],
        ['label' => 'RTI',           'href' => 'about/rti-corner.php',   'id' => 'footer-rti'],
    ],
];
