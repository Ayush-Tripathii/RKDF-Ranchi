<?php
/**
 * RKDF University — Master Navigation Header
 * Items: Home, About Us, Faculty, Courses, Academics, Alumni, Gallery, Contact Us
 */

// ==========================================
// 1. ABOUT US (6 Categories with Flyouts)
// ==========================================
$about_menu_categories = [
    [
        'title' => 'About',
        'icon'  => 'landmark',
        'desc'  => 'Overview, mission & statutory boards',
        'href'  => 'about/',
        'items' => [
            ['label' => 'About RKDF University',           'href' => 'about/'],
            ['label' => 'Vision, Mission & Goals',         'href' => 'about/vision-and-mission.php'],
            ['label' => 'University Emblem & Flag',        'href' => 'about/'],
            ['label' => '162+ Group Institutions',         'href' => 'about/'],
            ['label' => 'Board of Management',             'href' => 'boards/board-of-management.php'],
        ]
    ],
    [
        'title' => 'Management',
        'icon'  => 'users',
        'desc'  => 'Chancellor, MD & executive leadership',
        'href'  => 'governance/chancellor.php',
        'items' => [
            ['label' => "Chancellor's Profile",            'href' => 'governance/chancellor.php'],
            ['label' => 'Managing Director',               'href' => 'governance/managing-director.php'],
            ['label' => 'Vice Chancellor Desk',            'href' => 'governance/vice-chancellor.php'],
            ['label' => 'Academic Deans Directory',        'href' => 'deans/'],
            ['label' => 'Officers of the University',      'href' => 'governance/officers.php'],
        ]
    ],
    [
        'title' => 'Committees',
        'icon'  => 'shield-check',
        'desc'  => '18 Cells & regulatory committees',
        'href'  => 'committees/',
        'is_two_column' => true,
        'items' => [
            ['label' => 'Admission Counseling Committee',          'href' => 'committees/admission-counseling-committee.php'],
            ['label' => 'Anti-Ragging Committee & Squad',         'href' => 'admissions/anti-ragging.php'],
            ['label' => 'Cultural Committee',                      'href' => 'committees/cultural-committee.php'],
            ['label' => 'Disciplinary Committee',                  'href' => 'committees/disciplinary-committee.php'],
            ['label' => 'Equal Opportunity Committee',             'href' => 'committees/equal-opportunity-committee.php'],
            ['label' => 'Finance Committee',                       'href' => 'committees/finance-committee.php'],
            ['label' => 'Internal Complaint Committee (ICC)',      'href' => 'committees/internal-complaint-committee.php'],
            ['label' => 'Internal Quality Assurance Cell (IQAC)', 'href' => 'committees/internal-quality-assurance-cell.php'],
            ['label' => 'National Service Scheme (NSS)',          'href' => 'committees/national-service-scheme.php'],
            ['label' => 'Planning & Monitoring Board',             'href' => 'committees/planning-monitoring-board.php'],
            ['label' => 'Public Relation Committee',               'href' => 'committees/public-relation-committee.php'],
            ['label' => 'Research & Innovation Cell',              'href' => 'research.php'],
            ['label' => 'Sports Committee',                        'href' => 'committees/sports-committee.php'],
            ['label' => 'Staff Grievance Redressal Cell',          'href' => 'committees/staff-grievance-redressal-committee.php'],
            ['label' => 'Students Grievance Redressal (SGRC)',     'href' => 'committees/students-grievance-redressal-committee.php'],
            ['label' => 'Training & Placement Cell',               'href' => 'placements/'],
            ['label' => 'University Academic Council',             'href' => 'committees/university-academic-council.php'],
            ['label' => 'Women Cell & Empowerment',                'href' => 'committees/women-cell.php'],
        ]
    ],
    [
        'title' => 'Academic Leadership',
        'icon'  => 'graduation-cap',
        'desc'  => 'Deans, statutory bodies & faculties',
        'href'  => 'deans/',
        'items' => [
            ['label' => 'Academic Deans Directory',        'href' => 'deans/'],
            ['label' => 'University Academic Council',     'href' => 'committees/university-academic-council.php'],
            ['label' => 'Board of Management',             'href' => 'boards/board-of-management.php'],
            ['label' => 'Officers of the University',      'href' => 'governance/officers.php'],
            ['label' => 'Faculty & Department Heads',      'href' => 'departments/'],
        ]
    ],
    [
        'title' => 'Recognitions',
        'icon'  => 'scale',
        'desc'  => 'UGC, AIU, Govt Gazette & approvals',
        'href'  => 'about/government-recognition.php',
        'items' => [
            ['label' => 'Government Recognition & Act',    'href' => 'about/government-recognition.php'],
            ['label' => 'Statutory Approvals (PCI / BCI)',  'href' => 'about/accreditations.php'],
            ['label' => 'Annual Audit Reports (2019–25)',  'href' => 'about/annual-reports.php'],
            ['label' => 'Right to Information (RTI)',      'href' => 'about/rti.php'],
        ]
    ],
    [
        'title' => 'Mandatory Disclosures',
        'icon'  => 'file-text',
        'desc'  => 'Statutory compliances & disclosures',
        'href'  => 'about/annual-reports.php',
        'items' => [
            ['label' => 'Annual Audit Reports',            'href' => 'about/annual-reports.php'],
            ['label' => 'Right to Information (RTI)',      'href' => 'about/rti.php'],
            ['label' => 'Academic Bank of Credits (ABC)',  'href' => 'about/digilocker.php'],
            ['label' => 'Equal Opportunity Policy',        'href' => 'committees/equal-opportunity-committee.php'],
        ]
    ],
];

// ==========================================
// 2. FACULTIES DIRECTORY (13 Academic Faculties & Schools)
// ==========================================
$faculty_menu_items = [
    ['title' => 'All Faculties Directory',       'icon' => 'landmark',    'desc' => '12 academic faculties & 90+ programs',          'href' => 'departments/'],
    ['title' => 'Faculty of Engineering',        'icon' => 'cpu',         'desc' => 'B.Tech Mining, CSE, Civil, ME & Polytechnic',    'href' => 'departments/school-engineering.php'],
    ['title' => 'Faculty of IT & Computing',     'icon' => 'laptop',      'desc' => 'BCA, MCA & PGDCA Computing',                    'href' => 'departments/school-of-information-technology.php'],
    ['title' => 'Faculty of Management',         'icon' => 'briefcase',   'desc' => 'BBA, MBA Dual Spec & MMS',                      'href' => 'departments/school-management.php'],
    ['title' => 'Institute of Pharmacy',         'icon' => 'heart-pulse', 'desc' => 'PCI-approved B.Pharm & D.Pharm',                'href' => 'departments/school-pharmacy.php'],
    ['title' => 'Faculty of Law',                'icon' => 'scale',       'desc' => 'BA LL.B, BBA LL.B, LL.B & LL.M',                'href' => 'departments/school-law.php'],
    ['title' => 'Basic & Applied Sciences',      'icon' => 'microscope',  'desc' => 'B.Sc (Hons), B.Sc IT, M.Sc Physics/Chem/Math',  'href' => 'departments/school-of-basic-and-applied-sciences.php'],
    ['title' => 'Faculty of Life Sciences',      'icon' => 'leaf',        'desc' => 'Biotech, Microbiology, Botany & Zoology',       'href' => 'departments/school-of-life-sciences.php'],
    ['title' => 'Faculty of Commerce',           'icon' => 'coins',       'desc' => 'B.Com, B.Com Corporate & M.Com',                'href' => 'departments/school-of-commerce.php'],
    ['title' => 'Arts & Humanities',             'icon' => 'book-open',   'desc' => 'BA (Hons), MA in English, Hindi, Eco, Pol Sci', 'href' => 'departments/school-of-arts-and-humanities.php'],
    ['title' => 'Mass Communication',            'icon' => 'radio',       'desc' => 'BA, MA in Mass Comm & Journalism',              'href' => 'departments/school-of-journalism-and-mass-communication.php'],
    ['title' => 'Fashion & Interior Design',     'icon' => 'palette',     'desc' => 'B.Sc, M.Sc & PG Diploma in Design',             'href' => 'departments/school-of-fashion-and-interior-designing.php'],
    ['title' => 'Faculty of Library Science',    'icon' => 'library',     'desc' => 'B.Lib & M.Lib Information Science',             'href' => 'departments/school-of-library-science.php'],
];

// ==========================================
// 3. COURSES (6 Categories with Flyouts)
// ==========================================
$courses_menu_categories = [
    [
        'title' => 'Under Graduate Programs',
        'icon'  => 'graduation-cap',
        'desc'  => 'B.Tech, BBA, B.Sc, B.A, B.Com & Professional',
        'href'  => 'courses/under-graduate-programs.php',
        'items' => [
            ['label' => 'Under Graduate Programs Overview', 'href' => 'courses/under-graduate-programs.php'],
            ['label' => 'B. Tech. Engineering',             'href' => 'courses/b-tech.php'],
            ['label' => 'BBA (Business Administration)',    'href' => 'courses/bba.php'],
            ['label' => 'B. A. (Arts & Humanities)',        'href' => 'courses/ba-bachelor-of-arts.php'],
            ['label' => 'B. Com. (Commerce)',               'href' => 'courses/under-graduate-programs/b-com/b-com.php'],
            ['label' => 'B. Sc. (Pure & Applied Sciences)', 'href' => 'courses/b-sc.php'],
            ['label' => 'Professional Degrees (BCA/BMS/BLib)','href' => 'courses/under-graduate-programs/professional.php'],
        ]
    ],
    [
        'title' => 'Post Graduate Programs',
        'icon'  => 'book-open',
        'desc'  => 'MBA, M.Sc, M.A, M.Com & Professional',
        'href'  => 'courses/post-graduate-programs.php',
        'items' => [
            ['label' => 'Post Graduate Programs Overview',  'href' => 'courses/post-graduate-programs.php'],
            ['label' => 'MBA (Dual Specialization)',        'href' => 'courses/post-graduate-programs/mba.php'],
            ['label' => 'M. Sc. (Science Programs)',        'href' => 'courses/post-graduate-programs/m-sc.php'],
            ['label' => 'M. A. (Master of Arts)',           'href' => 'courses/post-graduate-programs/ma.php'],
            ['label' => 'M. Com. (Master of Commerce)',     'href' => 'courses/post-graduate-programs/m-com.php'],
            ['label' => 'Professional Degrees (MCA/MHA/MLib)','href' => 'courses/post-graduate-programs/professional-post-graduate-programs.php'],
        ]
    ],
    [
        'title' => 'Diploma Programs',
        'icon'  => 'layers',
        'desc'  => 'Polytechnic Engineering, D.Pharm & PGDCA',
        'href'  => 'courses/diploma-programs.php',
        'items' => [
            ['label' => 'Diploma Programs Overview',        'href' => 'courses/diploma-programs.php'],
            ['label' => 'Diploma in Mining Engineering',    'href' => 'courses/diploma-in-mining.php'],
            ['label' => 'Diploma in Civil Engineering',     'href' => 'courses/diploma-in-ce-civil-engineering.php'],
            ['label' => 'Diploma in Mechanical Engineering','href' => 'courses/diploma-in-me-mechanical-engineering.php'],
            ['label' => 'Diploma in Computer Science & Engg','href' => 'courses/diploma-in-cse-computer-science-engineering.php'],
            ['label' => 'Diploma in Pharmacy (D.Pharm)',    'href' => 'courses/diploma-in-pharmacy-d-pharma.php'],
            ['label' => 'PGDCA (Computer Applications)',    'href' => 'courses/pgdca.php'],
        ]
    ],
    [
        'title' => 'Professional Programs',
        'icon'  => 'scale',
        'desc'  => 'Law, Pharmacy, Fashion & Social Work',
        'href'  => 'courses/index.php?stream=Professional',
        'items' => [
            ['label' => 'Law Programs (BA LL.B / LL.B / LL.M)', 'href' => 'courses/law.php'],
            ['label' => 'Pharmacy Programs (B.Pharm & D.Pharm)','href' => 'courses/pharmacy.php'],
            ['label' => 'Fashion Designing Programs',           'href' => 'courses/ba-fashion-design.php'],
            ['label' => 'Social Work Programs (BSW & MSW)',     'href' => 'courses/social-work.php'],
        ]
    ],
    [
        'title' => 'Doctoral Programs (Ph. D)',
        'icon'  => 'sparkles',
        'desc'  => 'UGC-aligned research fellowships',
        'href'  => 'courses/doctoral-programs.php',
        'items' => [
            ['label' => 'Doctoral Programs Overview',       'href' => 'courses/doctoral-programs.php'],
            ['label' => 'Ph.D. in Engineering & Tech',      'href' => 'courses/doctoral-programs.php'],
            ['label' => 'Ph.D. in Management & Commerce',   'href' => 'courses/doctoral-programs.php'],
            ['label' => 'Ph.D. in Sciences & Life Science', 'href' => 'courses/doctoral-programs.php'],
            ['label' => 'Ph.D. in Arts & Humanities',       'href' => 'courses/doctoral-programs.php'],
        ]
    ],
    [
        'title' => 'Common Courses for All',
        'icon'  => 'award',
        'desc'  => 'NEP 2020 foundation & skill courses',
        'href'  => 'courses/common-courses-for-all.php',
        'items' => [
            ['label' => 'Common Courses Overview',          'href' => 'courses/common-courses-for-all.php'],
            ['label' => 'NEP Multi-Disciplinary Courses',   'href' => 'courses/common-courses-for-all.php'],
            ['label' => 'Skill & Ability Enhancement',      'href' => 'courses/common-courses-for-all.php'],
            ['label' => 'Value Added & Ethics Courses',     'href' => 'courses/common-courses-for-all.php'],
        ]
    ],
];

// ==========================================
// 4. ACADEMICS (6 Categories with Flyouts)
// ==========================================
$academics_menu_categories = [
    [
        'title' => 'Admission',
        'icon'  => 'file-edit',
        'desc'  => 'Prospectus, forms, fees & financial aid',
        'href'  => 'admissions/',
        'items' => [
            ['label' => 'RKDF Ranchi Prospectus (PDF)',     'href' => 'documents/RKDF-Prospectus.pdf', 'target' => '_blank'],
            ['label' => 'Admission Procedure 2026–27',      'href' => 'admissions/'],
            ['label' => 'Download Admission Form (PDF)',    'href' => 'documents/ADMISSION-FORM.pdf', 'target' => '_blank'],
            ['label' => 'Fee Structure & Eligibility 2026–27 (PDF)','href' => 'documents/FEES-STRUCTURE-ELIGIBILITY-2026-27.pdf', 'target' => '_blank'],
            ['label' => 'Financial Aid & Loan Facility',    'href' => 'admissions/scholarship.php'],
            ['label' => 'Payment Terms & Conditions',       'href' => 'admissions/'],
        ]
    ],
    [
        'title' => 'Academic',
        'icon'  => 'calendar',
        'desc'  => 'Academic calendar, exams & faculties',
        'href'  => 'departments/',
        'items' => [
            ['label' => 'Academic Calendar 2026–27 (PDF)',  'href' => 'documents/academic-calendar.pdf', 'target' => '_blank'],
            ['label' => 'Exam (Rules & Regulations) (PDF)', 'href' => 'documents/EXAMINATION-RULES.pdf', 'target' => '_blank'],
            ['label' => 'Faculties Directory',              'href' => 'departments/'],
            ['label' => 'Academic Collaborations',          'href' => 'admissions/academic-collaborations.php'],
            ['label' => 'Download Examination Forms',       'href' => 'admissions/examination-forms.php'],
        ]
    ],
    [
        'title' => 'Student Life & Facilities',
        'icon'  => 'landmark',
        'desc'  => 'Hostels, sports, transport & labs',
        'href'  => 'facilities/',
        'is_two_column' => false,
        'items' => [
            ['label' => 'Infrastructure & Resources',       'href' => 'facilities/'],
            ['label' => 'Sports Facilities',                'href' => 'facilities/sports.php'],
            ['label' => 'Hostel Facility',                  'href' => 'facilities/hostel.php'],
            ['label' => 'Library Facility',                 'href' => 'facilities/library.php'],
            ['label' => 'Training & Placement',             'href' => 'placements/'],
            ['label' => 'Health Facilities',                'href' => 'facilities/health.php'],
            ['label' => 'Transport Facility',               'href' => 'facilities/transport.php'],
            ['label' => 'Scholarships at RKDF Ranchi',      'href' => 'admissions/scholarship.php'],
            ['label' => 'Facilities for Differently-Abled', 'href' => 'facilities/differently-abled.php'],
        ]
    ],
    [
        'title' => 'Research & Innovation',
        'icon'  => 'microscope',
        'desc'  => 'Conferences, symposia & journals',
        'href'  => 'research.php',
        'items' => [
            ['label' => 'Research & Innovation Cell',      'href' => 'research.php'],
            ['label' => 'University Journals',             'href' => 'media/sushrut-magazine.php'],
            ['label' => 'National Conference on EAIMCP-2024 (PDF)', 'href' => 'documents/National-Conference-Brochure-EAIMCP-2024.pdf', 'target' => '_blank'],
            ['label' => 'Symbiosphere 2025 (PDF)',         'href' => 'documents/SYMBIOSPHERE-2025.pdf', 'target' => '_blank'],
            ['label' => 'Register for Symbiosphere',       'href' => 'research.php'],
        ]
    ],
    [
        'title' => 'Student Support & Cells (Info)',
        'icon'  => 'shield-alert',
        'desc'  => 'IQAC, grievance & statutory cells',
        'href'  => 'committees/',
        'items' => [
            ['label' => 'Internal Quality Assurance Cell (IQAC)', 'href' => 'committees/internal-quality-assurance-cell.php'],
            ['label' => 'Internal Complaint Committee',    'href' => 'committees/internal-complaint-committee.php'],
            ['label' => 'Students Grievance Redressal',    'href' => 'committees/students-grievance-redressal-committee.php'],
            ['label' => 'Anti-Ragging Committee',          'href' => 'admissions/anti-ragging.php'],
            ['label' => 'Equal Opportunity Committee',     'href' => 'committees/equal-opportunity-committee.php'],
        ]
    ],
    [
        'title' => 'Magazine & Publications',
        'icon'  => 'book-marked',
        'desc'  => 'Sushrut journal, blogs & media',
        'href'  => 'media/sushrut-magazine.php',
        'items' => [
            ['label' => 'Sushrut Magazine',                'href' => 'media/sushrut-magazine.php'],
            ['label' => 'Blogs & Articles',                'href' => 'media/news.php'],
            ['label' => 'University News & Notices',        'href' => 'media/news.php'],
            ['label' => 'Photo & Video Gallery',           'href' => 'media/gallery.php'],
        ]
    ],
];

// ==========================================
// 5. ALUMNI (2 Sub-Options)
// ==========================================
$alumni_menu_items = [
    [
        'title' => 'Alumni Corner',
        'icon'  => 'graduation-cap',
        'desc'  => 'Network, testimonials & alumni registration',
        'href'  => 'about/alumni-corner.php',
    ],
    [
        'title' => 'Alumni Committee',
        'icon'  => 'users',
        'desc'  => 'Executive committee & members directory',
        'href'  => 'about/alumni-committee.php',
    ],
];
?>

<!-- ==================== STICKY DESKTOP & MOBILE HEADER ==================== -->
<header class="sticky top-0 z-50 bg-background/95 backdrop-blur-md border-b border-border shadow-sm">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 h-20 flex items-center justify-between gap-4">
    
    <!-- Brand Logo -->
    <a href="<?= url('/') ?>" class="flex items-center gap-3 group shrink-0">
      <img src="<?= img('logo.png') ?>" alt="RKDF University" class="h-11 w-auto object-contain transition group-hover:scale-105" />
      <div class="leading-tight">
        <div class="font-serif text-xl text-foreground font-normal tracking-tight">RKDF University</div>
        <div class="text-[10px] tracking-[0.18em] text-muted-foreground uppercase">Education Glorifies Nation</div>
      </div>
    </a>

    <!-- Desktop Navigation Menu (Hidden on Mobile/Tablet) -->
    <nav class="hidden lg:flex items-center gap-1 xl:gap-2.5 text-sm font-medium">
      
      <!-- 1. HOME LINK -->
      <a href="<?= url('/') ?>" class="nav-top-link<?= nav_class('/') ?>">
        <span>Home</span>
      </a>

      <!-- 2. ABOUT US NESTED FLYOUT MENU -->
      <div class="nav-nested-parent-wrapper">
        <a href="<?= url('about/') ?>" class="nav-top-link<?= nav_class('about/') ?>">
          <span>About Us</span>
          <span class="nav-top-chevron"><?= lucide_icon('chevron-down', 'w-3.5 h-3.5') ?></span>
        </a>

        <!-- Parent Dropdown Menu (330px width) -->
        <div class="nav-nested-parent-menu">
          <?php foreach ($about_menu_categories as $cat): ?>
            <div class="nav-nested-item-group">
              <a href="<?= url($cat['href']) ?>" class="nav-nested-item">
                <span class="nav-nested-icon">
                  <?= lucide_icon($cat['icon'] ?? 'landmark', 'w-4 h-4') ?>
                </span>
                <div class="nav-nested-info">
                  <div class="nav-nested-title"><?= e($cat['title']) ?></div>
                  <div class="nav-nested-desc"><?= e($cat['desc']) ?></div>
                </div>
                <span class="nav-nested-arrow">
                  <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
                </span>
              </a>

              <!-- Nested Flyout Submenu -->
              <div class="nav-nested-flyout <?= !empty($cat['is_two_column']) ? 'two-col-grid' : '' ?>">
                <div class="nav-flyout-header">
                  <span class="nav-flyout-header-title"><?= e($cat['title']) ?></span>
                </div>
                <div class="nav-submenu-grid <?= !empty($cat['is_two_column']) ? 'two-columns' : 'single-column' ?>">
                  <?php foreach ($cat['items'] as $subItem): ?>
                    <a href="<?= (str_starts_with($subItem['href'], 'http') || str_starts_with($subItem['href'], 'documents/')) ? url($subItem['href']) : url($subItem['href']) ?>" 
                       <?= !empty($subItem['target']) ? 'target="' . $subItem['target'] . '"' : '' ?>
                       class="nav-sublink-item">
                      <span class="nav-sublink-bullet"></span>
                      <span class="nav-sublink-text"><?= e($subItem['label']) ?></span>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- 3. FACULTY 2-COLUMN MEGA DROPDOWN -->
      <div class="nav-nested-parent-wrapper">
        <a href="<?= url('departments/') ?>" class="nav-top-link<?= nav_class('departments/') ?>">
          <span>Faculty</span>
          <span class="nav-top-chevron"><?= lucide_icon('chevron-down', 'w-3.5 h-3.5') ?></span>
        </a>

        <!-- 2-Column Mega Dropdown Menu for Faculty (640px width, zero overflow) -->
        <div class="nav-faculty-menu">
          <div class="p-3 pb-3 mb-2 border-b border-slate-100 flex items-center justify-between">
            <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Academic Faculties &amp; Schools</span>
            <a href="<?= url('departments/') ?>" class="text-xs font-semibold text-amber-600 hover:text-amber-700 transition">View All Faculties &rarr;</a>
          </div>
          <div class="nav-faculty-grid">
            <?php foreach ($faculty_menu_items as $fItem): ?>
              <a href="<?= url($fItem['href']) ?>" class="nav-faculty-card">
                <span class="nav-faculty-icon">
                  <?= lucide_icon($fItem['icon'] ?? 'landmark', 'w-4 h-4') ?>
                </span>
                <div class="nav-faculty-info">
                  <div class="nav-faculty-title"><?= e($fItem['title']) ?></div>
                  <div class="nav-faculty-desc"><?= e($fItem['desc']) ?></div>
                </div>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- 4. COURSES NESTED FLYOUT MENU -->
      <div class="nav-nested-parent-wrapper">
        <a href="<?= url('courses/') ?>" class="nav-top-link<?= nav_class('courses/') ?>">
          <span>Courses</span>
          <span class="nav-top-chevron"><?= lucide_icon('chevron-down', 'w-3.5 h-3.5') ?></span>
        </a>

        <!-- Parent Dropdown Menu (330px width) -->
        <div class="nav-nested-parent-menu">
          <?php foreach ($courses_menu_categories as $cat): ?>
            <div class="nav-nested-item-group">
              <a href="<?= url($cat['href']) ?>" class="nav-nested-item">
                <span class="nav-nested-icon">
                  <?= lucide_icon($cat['icon'] ?? 'graduation-cap', 'w-4 h-4') ?>
                </span>
                <div class="nav-nested-info">
                  <div class="nav-nested-title"><?= e($cat['title']) ?></div>
                  <div class="nav-nested-desc"><?= e($cat['desc']) ?></div>
                </div>
                <span class="nav-nested-arrow">
                  <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
                </span>
              </a>

              <!-- Nested Flyout Submenu -->
              <div class="nav-nested-flyout">
                <div class="nav-flyout-header">
                  <span class="nav-flyout-header-title"><?= e($cat['title']) ?></span>
                </div>
                <div class="nav-submenu-grid single-column">
                  <?php foreach ($cat['items'] as $subItem): ?>
                    <a href="<?= url($subItem['href']) ?>" class="nav-sublink-item">
                      <span class="nav-sublink-bullet"></span>
                      <span class="nav-sublink-text"><?= e($subItem['label']) ?></span>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- 5. ACADEMICS NESTED FLYOUT MENU -->
      <div class="nav-nested-parent-wrapper">
        <a href="<?= url('departments/') ?>" class="nav-top-link<?= nav_class('departments/') ?>">
          <span>Academics</span>
          <span class="nav-top-chevron"><?= lucide_icon('chevron-down', 'w-3.5 h-3.5') ?></span>
        </a>

        <!-- Parent Dropdown Menu (330px width) -->
        <div class="nav-nested-parent-menu">
          <?php foreach ($academics_menu_categories as $cat): ?>
            <div class="nav-nested-item-group">
              <a href="<?= url($cat['href']) ?>" class="nav-nested-item">
                <span class="nav-nested-icon">
                  <?= lucide_icon($cat['icon'] ?? 'calendar', 'w-4 h-4') ?>
                </span>
                <div class="nav-nested-info">
                  <div class="nav-nested-title"><?= e($cat['title']) ?></div>
                  <div class="nav-nested-desc"><?= e($cat['desc']) ?></div>
                </div>
                <span class="nav-nested-arrow">
                  <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
                </span>
              </a>

              <!-- Nested Flyout Submenu -->
              <div class="nav-nested-flyout <?= !empty($cat['is_two_column']) ? 'two-col-grid' : '' ?>">
                <div class="nav-flyout-header">
                  <span class="nav-flyout-header-title"><?= e($cat['title']) ?></span>
                </div>
                <div class="nav-submenu-grid <?= !empty($cat['is_two_column']) ? 'two-columns' : 'single-column' ?>">
                  <?php foreach ($cat['items'] as $subItem): ?>
                    <a href="<?= (str_starts_with($subItem['href'], 'http') || str_starts_with($subItem['href'], 'documents/')) ? url($subItem['href']) : url($subItem['href']) ?>" 
                       <?= !empty($subItem['target']) ? 'target="' . $subItem['target'] . '"' : '' ?>
                       class="nav-sublink-item">
                      <span class="nav-sublink-bullet"></span>
                      <span class="nav-sublink-text"><?= e($subItem['label']) ?></span>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- 6. ALUMNI DROPDOWN (Directly after Academics) -->
      <div class="nav-nested-parent-wrapper">
        <a href="<?= url('about/alumni-corner.php') ?>" class="nav-top-link<?= nav_class('about/alumni') ?>">
          <span>Alumni</span>
          <span class="nav-top-chevron"><?= lucide_icon('chevron-down', 'w-3.5 h-3.5') ?></span>
        </a>

        <!-- Alumni Dropdown Menu (280px width) -->
        <div class="nav-simple-dropdown">
          <div class="p-2 pb-2.5 mb-1.5 border-b border-slate-100">
            <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Alumni Network</span>
          </div>
          <div class="flex flex-col gap-1">
            <?php foreach ($alumni_menu_items as $aItem): ?>
              <a href="<?= url($aItem['href']) ?>" class="nav-faculty-card">
                <span class="nav-faculty-icon">
                  <?= lucide_icon($aItem['icon'] ?? 'graduation-cap', 'w-4 h-4') ?>
                </span>
                <div class="nav-faculty-info">
                  <div class="nav-faculty-title"><?= e($aItem['title']) ?></div>
                  <div class="nav-faculty-desc"><?= e($aItem['desc']) ?></div>
                </div>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- 7. NEWS & NOTICES LINK -->
      <a href="<?= url('media/news.php') ?>" class="nav-top-link<?= nav_class('media/news.php') ?>">
        <span>News &amp; Notices</span>
      </a>

      <!-- 8. GALLERY LINK -->
      <a href="<?= url('media/gallery.php') ?>" class="nav-top-link<?= nav_class('media/gallery.php') ?>">
        <span>Gallery</span>
      </a>

    </nav>

    <!-- Header Actions (Right End: Contact Us Button, Apply CTA & Mobile Hamburger) -->
    <div class="flex items-center gap-2.5 sm:gap-3 shrink-0">
      <a href="<?= url('contact.php') ?>" class="header-contact-btn">
        <?= lucide_icon('phone', 'w-3.5 h-3.5') ?>
        <span>Contact Us</span>
      </a>
      <a href="<?= url('admissions/') ?>" class="hidden sm:inline-flex items-center rounded-full bg-gold text-primary-foreground px-4 lg:px-5 py-2 lg:py-2.5 text-xs lg:text-sm font-semibold hover:opacity-90 transition shadow-sm">
        Apply Online 2026
      </a>
      
      <!-- Mobile Hamburger Button -->
      <button
        type="button"
        id="mobile-menu-btn"
        aria-label="Toggle Navigation Menu"
        class="lg:hidden inline-flex items-center justify-center p-2 rounded-xl text-foreground hover:bg-muted transition"
      >
        <?= lucide_icon('menu', 'w-6 h-6') ?>
      </button>
    </div>

  </div>
</header>

<!-- ==================== MOBILE NAVIGATION DRAWER ==================== -->
<div id="mobile-drawer" class="fixed inset-0 z-50 pointer-events-none opacity-0 transition-opacity duration-300 overflow-hidden lg:hidden">
  <!-- Overlay Backdrop -->
  <div id="mobile-drawer-backdrop" class="absolute inset-0 bg-slate-950/60 backdrop-blur-sm"></div>

  <!-- Slide-Over Drawer Content -->
  <div class="absolute inset-y-0 right-0 w-full max-w-sm bg-white shadow-2xl flex flex-col h-full transform translate-x-full transition-transform duration-300 ease-out" id="mobile-drawer-panel">
    
    <!-- Drawer Header -->
    <div class="p-5 border-b border-slate-200 flex items-center justify-between bg-slate-50">
      <a href="<?= url('/') ?>" class="flex items-center gap-2.5">
        <img src="<?= img('logo.png') ?>" alt="RKDF University" class="h-9 w-auto object-contain" />
        <div>
          <div class="font-serif text-lg font-bold text-slate-900 leading-none">RKDF University</div>
          <div class="text-[9px] tracking-wider text-slate-500 uppercase mt-0.5">Ranchi, Jharkhand</div>
        </div>
      </a>
      <button
        type="button"
        id="mobile-drawer-close"
        aria-label="Close Navigation Menu"
        class="p-2 rounded-full text-slate-500 hover:text-slate-900 hover:bg-slate-200 transition"
      >
        <?= lucide_icon('x', 'w-5 h-5') ?>
      </button>
    </div>

    <!-- Quick CTA Header in Drawer -->
    <div class="p-4 bg-gradient-to-r from-slate-900 to-slate-800 text-white flex items-center gap-3">
      <a href="<?= url('admissions/') ?>" class="flex-1 text-center py-2.5 px-4 rounded-xl bg-gold text-slate-950 text-xs font-bold uppercase tracking-wider hover:opacity-90 transition shadow-sm">
        Apply Online 2026–27
      </a>
      <a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>" class="p-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white transition flex items-center justify-center">
        <?= lucide_icon('phone', 'w-4 h-4 text-gold') ?>
      </a>
    </div>

    <!-- Drawer Navigation Links (Accordion) -->
    <div class="flex-1 overflow-y-auto p-4 space-y-2 divide-y divide-slate-100">
      
      <!-- 1. Home Link -->
      <div class="py-2">
        <a href="<?= url('/') ?>" class="flex items-center gap-2.5 py-1.5 text-sm font-semibold text-slate-900 hover:text-amber-600 transition">
          <?= lucide_icon('home', 'w-4 h-4 text-amber-600') ?>
          <span>Home</span>
        </a>
      </div>

      <!-- 2. About Us Accordion -->
      <div class="py-2">
        <details class="group">
          <summary class="flex items-center justify-between py-2 text-sm font-semibold text-slate-900 cursor-pointer list-none select-none hover:text-amber-600 transition">
            <span class="flex items-center gap-2.5">
              <?= lucide_icon('landmark', 'w-4 h-4 text-amber-600') ?>
              <span>About Us</span>
            </span>
            <span class="transform transition-transform duration-200 group-open:rotate-180 text-slate-400">
              <?= lucide_icon('chevron-down', 'w-4 h-4') ?>
            </span>
          </summary>
          <div class="mt-2 pl-3 space-y-2 border-l-2 border-slate-200 ml-2">
            <?php foreach ($about_menu_categories as $cat): ?>
              <details class="group/sub">
                <summary class="flex items-center justify-between py-1.5 text-xs font-semibold text-slate-700 cursor-pointer list-none hover:text-amber-600">
                  <span><?= e($cat['title']) ?></span>
                  <span class="transform transition-transform duration-200 group-open/sub:rotate-180 text-slate-400">
                    <?= lucide_icon('chevron-down', 'w-3 h-3') ?>
                  </span>
                </summary>
                <div class="mt-1 pl-2 space-y-1">
                  <?php foreach ($cat['items'] as $sub): ?>
                    <a href="<?= url($sub['href']) ?>" class="block py-1 text-[11px] text-slate-600 hover:text-amber-600">
                      • <?= e($sub['label']) ?>
                    </a>
                  <?php endforeach; ?>
                </div>
              </details>
            <?php endforeach; ?>
          </div>
        </details>
      </div>

      <!-- 3. Faculty Accordion -->
      <div class="py-2">
        <details class="group">
          <summary class="flex items-center justify-between py-2 text-sm font-semibold text-slate-900 cursor-pointer list-none select-none hover:text-amber-600 transition">
            <span class="flex items-center gap-2.5">
              <?= lucide_icon('users', 'w-4 h-4 text-amber-600') ?>
              <span>Faculty &amp; Schools</span>
            </span>
            <span class="transform transition-transform duration-200 group-open:rotate-180 text-slate-400">
              <?= lucide_icon('chevron-down', 'w-4 h-4') ?>
            </span>
          </summary>
          <div class="mt-2 pl-3 space-y-1 border-l-2 border-slate-200 ml-2">
            <?php foreach ($faculty_menu_items as $fItem): ?>
              <a href="<?= url($fItem['href']) ?>" class="block py-1.5 text-xs text-slate-700 hover:text-amber-600">
                • <?= e($fItem['title']) ?>
              </a>
            <?php endforeach; ?>
          </div>
        </details>
      </div>

      <!-- 4. Courses Accordion -->
      <div class="py-2">
        <details class="group">
          <summary class="flex items-center justify-between py-2 text-sm font-semibold text-slate-900 cursor-pointer list-none select-none hover:text-amber-600 transition">
            <span class="flex items-center gap-2.5">
              <?= lucide_icon('graduation-cap', 'w-4 h-4 text-amber-600') ?>
              <span>Courses</span>
            </span>
            <span class="transform transition-transform duration-200 group-open:rotate-180 text-slate-400">
              <?= lucide_icon('chevron-down', 'w-4 h-4') ?>
            </span>
          </summary>
          <div class="mt-2 pl-3 space-y-2 border-l-2 border-slate-200 ml-2">
            <?php foreach ($courses_menu_categories as $cat): ?>
              <details class="group/sub">
                <summary class="flex items-center justify-between py-1.5 text-xs font-semibold text-slate-700 cursor-pointer list-none hover:text-amber-600">
                  <span><?= e($cat['title']) ?></span>
                  <span class="transform transition-transform duration-200 group-open/sub:rotate-180 text-slate-400">
                    <?= lucide_icon('chevron-down', 'w-3 h-3') ?>
                  </span>
                </summary>
                <div class="mt-1 pl-2 space-y-1">
                  <?php foreach ($cat['items'] as $sub): ?>
                    <a href="<?= url($sub['href']) ?>" class="block py-1 text-[11px] text-slate-600 hover:text-amber-600">
                      • <?= e($sub['label']) ?>
                    </a>
                  <?php endforeach; ?>
                </div>
              </details>
            <?php endforeach; ?>
          </div>
        </details>
      </div>

      <!-- 5. Academics Accordion -->
      <div class="py-2">
        <details class="group">
          <summary class="flex items-center justify-between py-2 text-sm font-semibold text-slate-900 cursor-pointer list-none select-none hover:text-amber-600 transition">
            <span class="flex items-center gap-2.5">
              <?= lucide_icon('book-open', 'w-4 h-4 text-amber-600') ?>
              <span>Academics</span>
            </span>
            <span class="transform transition-transform duration-200 group-open:rotate-180 text-slate-400">
              <?= lucide_icon('chevron-down', 'w-4 h-4') ?>
            </span>
          </summary>
          <div class="mt-2 pl-3 space-y-2 border-l-2 border-slate-200 ml-2">
            <?php foreach ($academics_menu_categories as $cat): ?>
              <details class="group/sub">
                <summary class="flex items-center justify-between py-1.5 text-xs font-semibold text-slate-700 cursor-pointer list-none hover:text-amber-600">
                  <span><?= e($cat['title']) ?></span>
                  <span class="transform transition-transform duration-200 group-open/sub:rotate-180 text-slate-400">
                    <?= lucide_icon('chevron-down', 'w-3 h-3') ?>
                  </span>
                </summary>
                <div class="mt-1 pl-2 space-y-1">
                  <?php foreach ($cat['items'] as $sub): ?>
                    <a href="<?= url($sub['href']) ?>" class="block py-1 text-[11px] text-slate-600 hover:text-amber-600">
                      • <?= e($sub['label']) ?>
                    </a>
                  <?php endforeach; ?>
                </div>
              </details>
            <?php endforeach; ?>
          </div>
        </details>
      </div>

      <!-- 6. Alumni Accordion -->
      <div class="py-2">
        <details class="group">
          <summary class="flex items-center justify-between py-2 text-sm font-semibold text-slate-900 cursor-pointer list-none select-none hover:text-amber-600 transition">
            <span class="flex items-center gap-2.5">
              <?= lucide_icon('award', 'w-4 h-4 text-amber-600') ?>
              <span>Alumni</span>
            </span>
            <span class="transform transition-transform duration-200 group-open:rotate-180 text-slate-400">
              <?= lucide_icon('chevron-down', 'w-4 h-4') ?>
            </span>
          </summary>
          <div class="mt-2 pl-3 space-y-1 border-l-2 border-slate-200 ml-2">
            <?php foreach ($alumni_menu_items as $aItem): ?>
              <a href="<?= url($aItem['href']) ?>" class="block py-1.5 text-xs text-slate-700 hover:text-amber-600">
                • <?= e($aItem['title']) ?>
              </a>
            <?php endforeach; ?>
          </div>
        </details>
      </div>

      <!-- 7. News & Notices Link -->
      <div class="py-2">
        <a href="<?= url('media/news.php') ?>" class="flex items-center gap-2.5 py-1.5 text-sm font-semibold text-slate-900 hover:text-amber-600 transition">
          <?= lucide_icon('newspaper', 'w-4 h-4 text-amber-600') ?>
          <span>News &amp; Notices</span>
        </a>
      </div>

      <!-- 8. Gallery Link -->
      <div class="py-2">
        <a href="<?= url('media/gallery.php') ?>" class="flex items-center gap-2.5 py-1.5 text-sm font-semibold text-slate-900 hover:text-amber-600 transition">
          <?= lucide_icon('camera', 'w-4 h-4 text-amber-600') ?>
          <span>Gallery</span>
        </a>
      </div>

      <!-- 8. Contact Us Link -->
      <div class="py-2">
        <a href="<?= url('contact.php') ?>" class="flex items-center gap-2.5 py-1.5 text-sm font-semibold text-slate-900 hover:text-amber-600 transition">
          <?= lucide_icon('phone', 'w-4 h-4 text-amber-600') ?>
          <span>Contact Us</span>
        </a>
      </div>

    </div>

    <!-- Drawer Footer Links -->
    <div class="p-4 border-t border-slate-200 bg-slate-50 text-xs text-slate-600 space-y-2">
      <div class="flex items-center justify-between text-slate-500">
        <a href="<?= url('about/digilocker.php') ?>" class="hover:text-amber-600 transition">DigiLocker / ABC</a>
        <span>·</span>
        <a href="<?= url('admissions/scholarship.php') ?>" class="hover:text-amber-600 transition">Scholarships</a>
        <span>·</span>
        <a href="<?= url('about/career.php') ?>" class="hover:text-amber-600 transition">Careers</a>
      </div>
      <div class="text-center text-[11px] text-slate-400 pt-1">
        Toll Free: <?= SITE_PHONE ?>
      </div>
    </div>

  </div>
</div>
