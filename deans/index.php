<?php
/**
 * RKDF University Ranchi — Deans of Schools & Academic Leadership
 * Standardized to University Apex Governance Layout
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Deans of Schools & Academic Leadership | " . SITE_NAME;
$page_meta_desc = "Directory of Academic Deans, Directors, and Faculty Leadership driving pedagogical excellence, research innovation, and NEP 2020 implementation across all schools at RKDF University Ranchi.";

$deans = [
    [
        'name'          => 'Dr. Rajeev Ranjan',
        'initials'      => 'RR',
        'icon'          => 'cpu',
        'role'          => 'Dean, Faculty of Engineering & Technology',
        'school'        => 'School of Engineering & Technology',
        'badge'         => 'Engineering & Technology',
        'desc'          => 'Directing Computer Science, Mining, Civil, Mechanical, and Electrical engineering research initiatives, modern AICTE-compliant laboratories, and industry partnerships.',
        'specialization'=> 'Engineering Sciences & Tech Innovation',
        'capacity'      => 'Dean & Member, Academic Council',
        'email'         => 'engineering@rkdfuniversity.org',
        'link'          => url('departments/school-engineering.php'),
    ],
    [
        'name'          => 'Dr. Sneha Pandey',
        'initials'      => 'SP',
        'icon'          => 'dna',
        'role'          => 'Dean, Faculty of Life Sciences',
        'school'        => 'School of Life Sciences',
        'badge'         => 'Life Sciences & Biotech',
        'desc'          => 'Spearheading advanced research in Biotechnology, Microbiology, Biochemistry, Botany, and Zoology with a focus on bio-diversity conservation and state-of-the-art life sciences laboratories.',
        'specialization'=> 'Biotechnology & Bio-Conservation',
        'capacity'      => 'Dean & Member, Academic Council',
        'email'         => 'lifesciences@rkdfuniversity.org',
        'link'          => url('departments/school-of-life-sciences.php'),
    ],
    [
        'name'          => 'Dr. Sheetal Topno',
        'initials'      => 'ST',
        'icon'          => 'book-open',
        'role'          => 'Dean Academics & Head of Law',
        'school'        => 'Academic Affairs & School of Law',
        'badge'         => 'Academic Affairs & Law',
        'desc'          => 'Leading university-wide NEP 2020 curriculum harmonization, academic calendar execution, interdisciplinary credit frameworks, and Bar Council of India compliant legal studies.',
        'specialization'=> 'Curriculum Governance & Jurisprudence',
        'capacity'      => 'Dean of Academics',
        'email'         => 'deanacademics@rkdfuniversity.org',
        'link'          => url('departments/school-law.php'),
    ],
    [
        'name'          => 'Dr. Anita Kumari',
        'initials'      => 'AK',
        'icon'          => 'users',
        'role'          => "Dean Student's Welfare (DSW)",
        'school'        => 'Directorate of Student Welfare',
        'badge'         => 'Student Welfare & IQAC',
        'desc'          => 'Managing university student welfare initiatives, clubs, scholarships, youth festivals, hostel coordination, cultural affairs, and holistic student support ecosystems.',
        'specialization'=> 'Student Welfare & Quality Assurance',
        'capacity'      => 'Dean Student Welfare & Director IQAC',
        'email'         => 'dsw@rkdfuniversity.org',
        'link'          => url('committees/students-grievance-redressal-committee.php'),
    ],
    [
        'name'          => 'Dr. Santanu Biswas',
        'initials'      => 'SB',
        'icon'          => 'microscope',
        'role'          => 'Director, Research & Innovation',
        'school'        => 'Research & Development Directorate',
        'badge'         => 'Research & Innovation',
        'desc'          => 'Driving funded research initiatives, patents, interdisciplinary research labs, high-impact journal publications, and intellectual property development across university faculties.',
        'specialization'=> 'Sponsored Research & IPR Cell',
        'capacity'      => 'Director Research & Innovation',
        'email'         => 'research@rkdfuniversity.org',
        'link'          => url('research.php'),
    ],
    [
        'name'          => 'Dr. Fedelic Ashish Topoo',
        'initials'      => 'FT',
        'icon'          => 'heart-pulse',
        'role'          => 'Principal, School of Pharmacy',
        'school'        => 'Institute of Pharmaceutical Sciences',
        'badge'         => 'Pharmaceutical Sciences',
        'desc'          => 'Overseeing Pharmacy Council of India (PCI) compliant pharmaceutical education, advanced machine rooms, pharmacology laboratories, and drug discovery research wings.',
        'specialization'=> 'Pharmacology & Formulation Studies',
        'capacity'      => 'Principal & Member, Academic Council',
        'email'         => 'pharmacy@rkdfuniversity.org',
        'link'          => url('departments/school-pharmacy.php'),
    ],
    [
        'name'          => 'Dr. Archana Atish',
        'initials'      => 'AA',
        'icon'          => 'briefcase',
        'role'          => 'Dean, Faculty of Management',
        'school'        => 'School of Management Studies',
        'badge'         => 'Management & Business',
        'desc'          => 'Leading corporate-aligned MBA, BBA, and Commerce curricula, executive management development programs, case-study pedagogy, and corporate industry tie-ups.',
        'specialization'=> 'Strategic Management & Corporate Alliances',
        'capacity'      => 'Dean & Member, Academic Council',
        'email'         => 'management@rkdfuniversity.org',
        'link'          => url('departments/school-management.php'),
    ],
    [
        'name'          => 'Dr. Arun Modak',
        'initials'      => 'AM',
        'icon'          => 'library',
        'role'          => 'Dean, Faculty of Education & Library Science',
        'school'        => 'School of Library & Information Science',
        'badge'         => 'Library & Info Science',
        'desc'          => 'Overseeing digital cataloguing hubs, modern library information science programs (B.Lib.I.Sc, M.Lib.I.Sc), archival management, and open-access research repositories.',
        'specialization'=> 'Information Science & Digital Repositories',
        'capacity'      => 'Dean & Member, Academic Council',
        'email'         => 'library@rkdfuniversity.org',
        'link'          => url('departments/school-of-library-science.php'),
    ],
    [
        'name'          => 'Dr. Koomkoom Khawas',
        'initials'      => 'KK',
        'icon'          => 'clipboard-check',
        'role'          => 'Controller of Examinations',
        'school'        => 'Examination Confidential Directorate',
        'badge'         => 'Examination Directorate',
        'desc'          => 'Directing confidential examination execution, automated question paper generation, grading schedules, degree convocation protocols, and continuous evaluation compliance.',
        'specialization'=> 'Evaluation Systems & Assessment Analytics',
        'capacity'      => 'Controller of Examinations',
        'email'         => 'coe@rkdfuniversity.org',
        'link'          => url('governance/controller-of-examination.php'),
    ],
];

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <!-- Breadcrumb Badge -->
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('about/') ?>" class="hover:text-white transition">About</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Deans &amp; Academic Leadership</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Deans &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Academic Leadership</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Distinguished academic deans, directors, and institutional leaders steering multidisciplinary curriculum design, research output, laboratory infrastructure, and NEP 2020 initiatives across RKDF University Ranchi.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('users') ?> Council of Academic Deans
      </span>
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> 12 Multidisciplinary Faculties
      </span>
      <span class="hero-pill">
        <?= lucide_icon('graduation-cap') ?> NEP 2020 Pedagogical Framework
      </span>
      <span class="hero-pill">
        <?= lucide_icon('flask-conical') ?> Research &amp; Innovation Directorate
      </span>
    </div>
  </div>
</section>

<!-- Leadership Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/leadership_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Statutory Authority Spotlight Banner Component -->
    <?php
    $spotlight_badge = 'Apex Academic Leadership';
    $spotlight_title = 'Council of Academic Deans & Directors';
    $spotlight_desc  = 'The Council of Academic Deans serves as the premier academic executive collective at RKDF University Ranchi, orchestrating the vision and pedagogical standards set forth by the Academic Council and Board of Management. Operating at the forefront of teaching, research, and student mentorship, each dean provides strategic stewardship over curriculum modernization, industry collaborations, laboratory infrastructure, and holistic learner outcomes in alignment with UGC and statutory regulatory bodies.';
    $spotlight_pills = [
        ['icon' => 'graduation-cap', 'text' => 'Curriculum Design & NEP 2020 Standards'],
        ['icon' => 'microscope',     'text' => 'Research Promotion & Labs Stewardship'],
        ['icon' => 'user-check',     'text' => 'Student Mentorship & Quality Assurance'],
    ];
    $seal_header     = 'Academic Directorate';
    $seal_title      = 'Deans Council';
    $seal_desc       = 'Chaired by the Vice Chancellor with Deans of Engineering, Life Sciences, Management, Law, Pharmacy, and Student Affairs.';
    $seal_footer_tag = 'Statutory Leadership';
    $seal_count      = count($deans) . ' Academic Leaders';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Strategic Focus Header & Deans Directory Grid -->
    <div class="space-y-8">
      <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Institutional Academic Leadership</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">
            University Deans &amp; Executive Directors
          </h3>
          <p class="text-sm text-muted-foreground mt-1 max-w-2xl">
            Distinguished scholars and departmental heads responsible for faculty management, academic rigor, research mentorship, and student development.
          </p>
        </div>
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-bold uppercase tracking-wider shadow-sm">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Active Academic Council</span>
        </div>
      </div>

      <!-- 9 Deans & Directors Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($deans as $dean): ?>
          <div class="faculty-card group">
            <div>
              <!-- Header with Avatar/Icon Box & Badge -->
              <div class="flex items-start justify-between gap-3">
                <div class="faculty-icon-box">
                  <?= lucide_icon($dean['icon']) ?>
                </div>
                <span class="faculty-badge">
                  <?= e($dean['badge']) ?>
                </span>
              </div>

              <!-- Titles & Role Chip -->
              <div class="mt-4">
                <h3 class="faculty-title">
                  <?= e($dean['name']) ?>
                </h3>
                <div>
                  <span class="faculty-role-chip">
                    <?= lucide_icon('user') ?>
                    <span><?= e($dean['role']) ?></span>
                  </span>
                </div>
              </div>

              <!-- Description -->
              <p class="faculty-desc">
                <?= e($dean['desc']) ?>
              </p>
            </div>

            <!-- Footer Actions & Email -->
            <div class="faculty-footer">
              <a href="mailto:<?= e($dean['email']) ?>" class="faculty-mail-btn" title="<?= e($dean['email']) ?>">
                <?= lucide_icon('mail') ?>
                <span><?= e($dean['email']) ?></span>
              </a>

              <a href="<?= e($dean['link']) ?>" class="faculty-explore-btn">
                <span>View Desk</span>
                <?= lucide_icon('chevron-right') ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== EXECUTIVE STATUTORY REGISTRY (COMPLETE REDESIGN) ==================== -->
    <div class="pt-4" id="statutory-registry">
      <div class="bg-white rounded-3xl border border-slate-200/90 shadow-xl overflow-hidden">
        
        <!-- Executive Institutional Header Banner -->
        <div class="registry-header-banner">
          <!-- Subtle Ambient Glow -->
          <div class="absolute -right-16 -top-16 w-72 h-72 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
          <div class="absolute -left-16 -bottom-16 w-60 h-60 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

          <!-- Header Left: Title & Legal Mandate -->
          <div class="registry-header-left">
            <div class="registry-eyebrow">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5 text-amber-400 shrink-0') ?>
              <span>Official Statutory Roll &middot; Academic Council</span>
            </div>
            <h2 class="registry-title">
              Academic Deans &amp; Governance Registry
            </h2>
            <p class="registry-desc">
              Official gazetted portfolio of appointed Faculty Deans, Executive Directors, and Officers of the University constituted under Jharkhand Act No. 15 of 2018 and UGC statutory regulations.
            </p>
          </div>

          <!-- Header Right: Quick Institutional Stats -->
          <div class="registry-header-right">
            <div class="registry-badge-item">
              <span class="registry-pulse-dot"></span>
              <span>Session <?= date('Y') ?>–<?= (int)date('Y') + 1 ?></span>
            </div>
            <div class="registry-badge-item text-amber-300">
              <?= lucide_icon('users', 'w-3.5 h-3.5 text-amber-400 shrink-0') ?>
              <span><?= count($deans) ?> Appointed Leaders</span>
            </div>
            <div class="registry-badge-item text-slate-300">
              <?= lucide_icon('scale', 'w-3.5 h-3.5 text-slate-400 shrink-0') ?>
              <span>UGC 2(f) Statutory</span>
            </div>
          </div>
        </div>

        <!-- Interactive Toolbar: Live Search & Category Filter Pills -->
        <div class="registry-toolbar">
          <!-- Live Search Bar with Proper Fixed Inset Padding -->
          <div class="registry-search-wrap">
            <span class="registry-search-icon">
              <?= lucide_icon('search', 'w-4 h-4 text-slate-400') ?>
            </span>
            <input type="text"
                   id="deanRegistrySearch"
                   placeholder="Search leader, school, or specialization..."
                   class="registry-search-input" />
          </div>

          <!-- Category Filter Pills -->
          <div class="registry-filter-group" id="deanCategoryButtons">
            <button type="button" class="dean-pill-btn active" data-filter="all">All Leaders (<?= count($deans) ?>)</button>
            <button type="button" class="dean-pill-btn" data-filter="faculties">Faculty Deans (5)</button>
            <button type="button" class="dean-pill-btn" data-filter="governance">Academic &amp; Student Affairs (3)</button>
            <button type="button" class="dean-pill-btn" data-filter="research">Research Directorate (1)</button>
          </div>
        </div>

        <!-- Custom Scoped Styling for Registry -->
        <style>
          .registry-header-banner {
            position: relative;
            background: linear-gradient(135deg, #091321 0%, #0f1f35 55%, #162b48 100%);
            padding: 30px 32px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            overflow: hidden;
          }
          .registry-header-left {
            max-width: 620px;
            flex: 1 1 360px;
            position: relative;
            z-index: 10;
          }
          .registry-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 12px;
            border-radius: 9999px;
            background: rgba(245, 158, 11, 0.15);
            border: 1px solid rgba(245, 158, 11, 0.35);
            color: #fcd34d;
            font-size: 10.5px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 10px;
          }
          .registry-title {
            font-family: 'Instrument Serif', Georgia, serif;
            font-size: 32px;
            line-height: 1.15;
            font-weight: 400;
            color: #ffffff;
            margin: 0 0 8px 0;
            letter-spacing: -0.01em;
          }
          @media (min-width: 768px) {
            .registry-title { font-size: 38px; }
          }
          .registry-desc {
            font-size: 13px;
            line-height: 1.55;
            color: #cbd5e1;
            margin: 0;
            max-width: 580px;
          }
          .registry-header-right {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px;
            position: relative;
            z-index: 10;
          }
          .registry-badge-item {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 14px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(8px);
            color: #ffffff;
            font-size: 12px;
            font-weight: 600;
            white-space: nowrap;
          }
          .registry-pulse-dot {
            width: 8px;
            height: 8px;
            border-radius: 9999px;
            background: #10b981;
            box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.3);
          }
          .registry-toolbar {
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            padding: 14px 24px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
          }
          .registry-search-wrap {
            position: relative;
            width: 100%;
            max-width: 330px;
            min-width: 240px;
            flex: 1 1 240px;
          }
          .registry-search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
            width: 16px;
            height: 16px;
            color: #94a3b8;
            z-index: 2;
          }
          .registry-search-input {
            width: 100% !important;
            height: 38px !important;
            padding-left: 38px !important;
            padding-right: 14px !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            font-size: 12.5px !important;
            color: #0f172a !important;
            background: #ffffff !important;
            border: 1px solid #cbd5e1 !important;
            border-radius: 10px !important;
            outline: none !important;
            box-sizing: border-box !important;
            transition: all 0.15s ease !important;
          }
          .registry-search-input:focus {
            border-color: #e58525 !important;
            box-shadow: 0 0 0 3px rgba(229, 133, 37, 0.15) !important;
          }
          .registry-search-input::placeholder {
            color: #94a3b8 !important;
            font-size: 12.5px !important;
          }
          .registry-filter-group {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
          }
          .dean-pill-btn {
            height: 34px;
            padding: 0 14px;
            font-size: 11.5px;
            font-weight: 600;
            border-radius: 9999px;
            border: 1px solid #e2e8f0;
            background: #ffffff;
            color: #475569;
            cursor: pointer;
            white-space: nowrap;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.15s ease;
          }
          .dean-pill-btn:hover {
            background: #f1f5f9;
            color: #0f172a;
            border-color: #cbd5e1;
          }
          .dean-pill-btn.active {
            background: #0f1b2d !important;
            color: #ffffff !important;
            border-color: #0f1b2d !important;
            box-shadow: 0 2px 6px rgba(15, 27, 45, 0.18);
          }
          .deans-registry-table {
            width: 100%;
            border-collapse: separate !important;
            border-spacing: 0 !important;
            min-width: 1280px !important;
          }
          .deans-registry-table th {
            padding: 16px 24px !important;
            font-size: 11px !important;
            font-weight: 700 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.08em !important;
            color: #475569 !important;
            background: #f1f5f9 !important;
            border-bottom: 2px solid #e2e8f0 !important;
            vertical-align: middle !important;
          }
          .deans-registry-row td {
            padding: 20px 24px !important;
            vertical-align: middle !important;
            border-bottom: 1px solid #f1f5f9 !important;
          }
          .deans-registry-table th:last-child,
          .deans-registry-row td:last-child {
            min-width: 360px !important;
            padding-right: 48px !important;
          }
          .deans-email-link {
            display: inline-flex !important;
            align-items: center !important;
            gap: 8px !important;
            white-space: nowrap !important;
            font-size: 12.5px !important;
            color: #334155 !important;
            text-decoration: none !important;
            line-height: 1.5 !important;
            transition: color 0.15s ease !important;
          }
          .deans-email-link:hover {
            color: #d97706 !important;
            text-decoration: underline !important;
          }
          .deans-registry-row {
            transition: background-color 0.15s ease;
          }
          .deans-registry-row:hover td {
            background-color: #f8fafc !important;
          }
        </style>

        <!-- Responsive Table Wrapper with Generous Space -->
        <div class="overflow-x-auto">
          <table class="deans-registry-table text-left border-collapse" id="deansRegistryTable">
            <thead>
              <tr>
                <th style="width: 50px; text-align: center;">#</th>
                <th style="min-width: 250px;">Academic Leader &amp; Designation</th>
                <th style="min-width: 230px;">Faculty &amp; School</th>
                <th style="min-width: 210px;">Statutory Capacity</th>
                <th style="min-width: 230px;">Academic Specialization</th>
                <th style="min-width: 360px; padding-right: 48px;">Official Desk / Email</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-xs">
              <?php foreach ($deans as $idx => $member):
                // Category mapping
                $category = 'faculties';
                if (stripos($member['role'], 'Research') !== false) {
                    $category = 'research';
                } elseif (stripos($member['role'], 'Student') !== false || stripos($member['role'], 'Examinations') !== false || stripos($member['role'], 'Academics') !== false) {
                    $category = 'governance';
                }

                $searchCorpus = strtolower($member['name'] . ' ' . $member['role'] . ' ' . $member['school'] . ' ' . $member['specialization'] . ' ' . $member['email'] . ' ' . $member['capacity']);
                $bgClass = ($idx % 2 === 0) ? 'bg-white' : 'bg-slate-50/40';
              ?>
                <tr class="deans-registry-row <?= $bgClass ?>"
                    data-category="<?= $category ?>"
                    data-search="<?= htmlspecialchars($searchCorpus, ENT_QUOTES, 'UTF-8') ?>">
                  
                  <!-- Serial Number - Normal Clean Text with Proper Spacing -->
                  <td style="text-align: center;">
                    <span class="text-xs font-bold text-slate-400">
                      <?= str_pad((string)($idx + 1), 2, '0', STR_PAD_LEFT) ?>
                    </span>
                  </td>

                  <!-- Leader Name & Designation - Generous Breathing Room -->
                  <td>
                    <div class="font-bold text-slate-900 text-sm leading-snug">
                      <?= e($member['name']) ?>
                    </div>
                    <div class="text-xs text-slate-500 font-normal mt-1 leading-relaxed">
                      <?= e($member['role']) ?>
                    </div>
                  </td>

                  <!-- Faculty & School -->
                  <td>
                    <div class="font-semibold text-slate-800 text-[13px] leading-relaxed">
                      <?= e($member['school']) ?>
                    </div>
                  </td>

                  <!-- Statutory Capacity -->
                  <td>
                    <div class="text-[12.5px] text-slate-700 font-medium leading-relaxed">
                      <?= e($member['capacity']) ?>
                    </div>
                  </td>

                  <!-- Specialization -->
                  <td>
                    <div class="text-xs text-slate-600 leading-relaxed">
                      <?= e($member['specialization']) ?>
                    </div>
                  </td>

                  <!-- Official Desk / Email - Full Uncut Link with Explicit Width & Right Padding -->
                  <td style="min-width: 360px; padding-right: 48px !important;">
                    <a href="mailto:<?= e($member['email']) ?>"
                       class="deans-email-link"
                       title="<?= e($member['email']) ?>">
                      <?= lucide_icon('mail', 'w-4 h-4 text-amber-600 shrink-0') ?>
                      <span style="white-space: nowrap !important; word-break: keep-all !important;"><?= e($member['email']) ?></span>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>

              <!-- No Results Row -->
              <tr id="deanNoResultsRow" style="display:none;">
                <td colspan="6" class="py-14 px-6 text-center">
                  <div class="max-w-xs mx-auto text-center space-y-2">
                    <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-400 mx-auto flex items-center justify-center">
                      <?= lucide_icon('search-x', 'w-5 h-5') ?>
                    </div>
                    <div class="font-bold text-slate-700 text-sm">No Leaders Found</div>
                    <p class="text-xs text-slate-500">No leadership records matched your search query. Try adjusting your keywords.</p>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Fixed Card Footer (Always full width of card, generous side padding away from rounded corners) -->
        <div class="bg-slate-50/90 border-t border-slate-200 px-6 sm:px-8 py-4 flex flex-wrap items-center justify-between gap-4 text-xs text-slate-500">
          <div class="flex items-center gap-2 text-slate-600">
            <?= lucide_icon('shield-check', 'w-4 h-4 text-emerald-600 shrink-0') ?>
            <span>Constituted under UGC Statutory Framework &middot; Jharkhand State Act No. 15, 2018</span>
          </div>
          <div class="font-bold text-slate-700 pr-4" id="deanSummaryCount">
            Showing <?= count($deans) ?> of <?= count($deans) ?> Registered Leaders
          </div>
        </div>

      </div>
    </div>

    <!-- Live Client-Side Filtering Script -->
    <script>
      (function() {
        const searchInput = document.getElementById('deanRegistrySearch');
        const filterBtns = document.querySelectorAll('.dean-pill-btn');
        const rows = document.querySelectorAll('.deans-registry-row');
        const noResults = document.getElementById('deanNoResultsRow');
        const summaryCount = document.getElementById('deanSummaryCount');
        const total = <?= count($deans) ?>;

        let activeCategory = 'all';
        let query = '';

        function updateFilter() {
          let visible = 0;
          rows.forEach(function(row) {
            const cat = row.getAttribute('data-category') || '';
            const searchCorpus = row.getAttribute('data-search') || '';

            const matchesCategory = (activeCategory === 'all' || cat === activeCategory);
            const matchesQuery = (!query || searchCorpus.indexOf(query) !== -1);

            if (matchesCategory && matchesQuery) {
              row.style.display = '';
              visible++;
            } else {
              row.style.display = 'none';
            }
          });

          if (noResults) {
            noResults.style.display = (visible === 0) ? '' : 'none';
          }
          if (summaryCount) {
            summaryCount.textContent = 'Showing ' + visible + ' of ' + total + ' Registered Leaders';
          }
        }

        if (searchInput) {
          searchInput.addEventListener('input', function(e) {
            query = (e.target.value || '').toLowerCase().trim();
            updateFilter();
          });
        }

        filterBtns.forEach(function(btn) {
          btn.addEventListener('click', function() {
            filterBtns.forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            activeCategory = this.getAttribute('data-filter') || 'all';
            updateFilter();
          });
        });
      })();
    </script>

    <!-- Core Academic Governance & NEP 2020 Mandates -->
    <div class="space-y-6 pt-4">
      <div class="border-b border-slate-200/80 pb-4">
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Strategic Pillars</div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-slate-900 mt-1">
          Academic Governance &amp; NEP 2020 Mandates
        </h3>
        <p class="text-xs sm:text-sm text-slate-500 mt-1">
          Core operational frameworks executed by faculty deans to ensure continuous academic excellence across all disciplines.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Pillar 1 -->
        <div class="p-6 rounded-2xl bg-white border border-slate-200/80 shadow-sm flex items-start gap-4">
          <div class="w-12 h-12 rounded-xl bg-slate-900 text-gold flex items-center justify-center shrink-0 shadow-sm">
            <?= lucide_icon('graduation-cap', 'w-6 h-6') ?>
          </div>
          <div class="space-y-1.5">
            <h4 class="font-bold text-slate-900 text-base">Curriculum Harmonization &amp; CBCS Framework</h4>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              Ensuring all undergraduate and postgraduate curricula conform to the Choice Based Credit System (CBCS), National Education Policy (NEP 2020), and industry skill frameworks.
            </p>
            <div class="pt-2 flex items-center gap-2 text-xs text-emerald-700 font-semibold">
              <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600') ?>
              <span>Annual Board of Studies Revision</span>
            </div>
          </div>
        </div>

        <!-- Pillar 2 -->
        <div class="p-6 rounded-2xl bg-white border border-slate-200/80 shadow-sm flex items-start gap-4">
          <div class="w-12 h-12 rounded-xl bg-slate-900 text-gold flex items-center justify-center shrink-0 shadow-sm">
            <?= lucide_icon('microscope', 'w-6 h-6') ?>
          </div>
          <div class="space-y-1.5">
            <h4 class="font-bold text-slate-900 text-base">Sponsored Research &amp; IPR Incubation</h4>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              Directing faculty-led sponsored research initiatives, patent filings, doctoral dissertations, and research publication in peer-reviewed Scopus and Web of Science indexed journals.
            </p>
            <div class="pt-2 flex items-center gap-2 text-xs text-emerald-700 font-semibold">
              <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600') ?>
              <span>Active Research &amp; Innovation Cell</span>
            </div>
          </div>
        </div>

        <!-- Pillar 3 -->
        <div class="p-6 rounded-2xl bg-white border border-slate-200/80 shadow-sm flex items-start gap-4">
          <div class="w-12 h-12 rounded-xl bg-slate-900 text-gold flex items-center justify-center shrink-0 shadow-sm">
            <?= lucide_icon('award', 'w-6 h-6') ?>
          </div>
          <div class="space-y-1.5">
            <h4 class="font-bold text-slate-900 text-base">Outcome-Based Education (OBE) &amp; Labs</h4>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              Supervising state-of-the-art engineering workshops, biotech laboratories, legal moot courts, and pharmacy machine rooms aligned with AICTE, PCI, and BCI norms.
            </p>
            <div class="pt-2 flex items-center gap-2 text-xs text-emerald-700 font-semibold">
              <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600') ?>
              <span>Continuous Laboratory Modernization</span>
            </div>
          </div>
        </div>

        <!-- Pillar 4 -->
        <div class="p-6 rounded-2xl bg-white border border-slate-200/80 shadow-sm flex items-start gap-4">
          <div class="w-12 h-12 rounded-xl bg-slate-900 text-gold flex items-center justify-center shrink-0 shadow-sm">
            <?= lucide_icon('heart-handshake', 'w-6 h-6') ?>
          </div>
          <div class="space-y-1.5">
            <h4 class="font-bold text-slate-900 text-base">Holistic Student Mentorship &amp; Placement Support</h4>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              Fostering proactive faculty-student mentorship, student welfare programs, campus cultural committees, internship placements, and career development initiatives.
            </p>
            <div class="pt-2 flex items-center gap-2 text-xs text-emerald-700 font-semibold">
              <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600') ?>
              <span>Dedicated Mentor-Mentee Allocation</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Academic Council Notice Callout Banner -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('award', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Statutory Governance</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Academic Council &amp; Faculty Boards of Studies
        </h3>
        <p class="text-xs sm:text-sm text-white/80 max-w-2xl text-left leading-relaxed">
          All degree syllabi, examination regulations, and pedagogical policies are formulated by faculty Boards of Studies and formally approved by the University Academic Council under UGC guidelines.
        </p>
      </div>

      <div class="flex flex-wrap items-center justify-center gap-3 shrink-0 self-center my-auto">
        <a href="<?= url('committees/university-academic-council.php') ?>" class="gov-callout-btn">
          <span>Academic Council</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('departments/') ?>" class="gov-callout-btn-white">
          <span>All 12 Faculties</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
