<?php
/**
 * RKDF University — Faculty of Arts & Humanities
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-arts-and-humanities/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Arts & Humanities — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Arts & Humanities at RKDF University Ranchi. Comprehensive B.A. (Hons) and M.A. programs in English, Hindi, Sanskrit, Economics, History, Political Science, Geography, Sociology & Education with dedicated Civil Services mentorship.';

$programs = [
    // --- Postgraduate Programs ---
    [
        'category'    => 'Postgraduate Degrees (M.A.)',
        'title'       => 'M.A. in English Literature',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Literary Studies',
        'icon'        => 'book-open',
        'description' => 'British literature, American poetry, post-colonial discourse, literary criticism, world classics in translation, linguistics, and cultural studies.',
        'branches'    => [
            ['name' => 'British & European Literature', 'tag' => 'Classical to Modern'],
            ['name' => 'Post-Colonial & Indian Writing in English', 'tag' => 'Contemporary Discourse'],
            ['name' => 'Literary Theory & Criticism', 'tag' => 'Structuralism & Cultural'],
            ['name' => 'Linguistics & Digital Phonetics', 'tag' => 'Applied Language Skills'],
        ],
        'eligibility' => 'Passed Bachelor Degree (B.A. English Hons / Major or any Graduation with English) with at least 50% marks (45% for reserved category).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.A.)',
        'title'       => 'M.A. in Political Science',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Governance & Policy',
        'icon'        => 'landmark',
        'description' => 'Western and Indian political thought, international relations, comparative political systems, public administration, and constitutional governance.',
        'branches'    => [
            ['name' => 'Indian Political System & Constitution', 'tag' => 'UPSC Alignment'],
            ['name' => 'International Relations & Global Geopolitics', 'tag' => 'Diplomacy & Trade'],
            ['name' => 'Public Administration & Public Policy', 'tag' => 'Governance Reform'],
            ['name' => 'Comparative Politics & Political Philosophy', 'tag' => 'Ideological Models'],
        ],
        'eligibility' => 'Passed B.A. with Political Science as Honours/Core or Graduation in any discipline with at least 50% marks (45% for reserved category).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.A.)',
        'title'       => 'M.A. in Economics',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Applied Economics',
        'icon'        => 'trending-up',
        'description' => 'Advanced microeconomics, macroeconomics, econometrics, public finance, developmental economics, and Indian economic policy formulation.',
        'branches'    => [
            ['name' => 'Advanced Micro & Macro Analysis', 'tag' => 'Equilibrium Models'],
            ['name' => 'Econometric Methods & Statistics', 'tag' => 'STATA & SPSS Tools'],
            ['name' => 'Public Finance & Monetary Economics', 'tag' => 'Fiscal Policy'],
            ['name' => 'Development Economics & Indian Policy', 'tag' => 'Growth Strategies'],
        ],
        'eligibility' => 'Passed B.A. / B.Sc. with Economics / Mathematics / Statistics with at least 50% marks (45% for SC/ST/OBC category).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.A.)',
        'title'       => 'M.A. in History',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Historical Research',
        'icon'        => 'library',
        'description' => 'Ancient, medieval, and modern Indian history, world civilizations, historiography, regional Jharkhand tribal history, archaeology, and archival preservation.',
        'branches'    => [
            ['name' => 'Ancient & Medieval Indian History', 'tag' => 'Epigraphy & Culture'],
            ['name' => 'Modern Indian National Movement', 'tag' => 'Archival Documentation'],
            ['name' => 'World Civilizations & Historiography', 'tag' => 'Historical Theory'],
            ['name' => 'Jharkhand Tribal History & Heritage', 'tag' => 'Regional Ethnography'],
        ],
        'eligibility' => 'Passed B.A. with History as Honours / Core subject or Graduation in any stream with minimum 50% aggregate marks (45% for SC/ST).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.A.)',
        'title'       => 'M.A. in Geography',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Spatial Science',
        'icon'        => 'globe',
        'description' => 'Geomorphology, climatology, GIS spatial analytics, human geography, urban planning, environmental resources, and remote sensing cartography.',
        'branches'    => [
            ['name' => 'Physical Geography & Geomorphology', 'tag' => 'Earth Dynamics'],
            ['name' => 'GIS, Remote Sensing & Digital Cartography', 'tag' => 'QGIS & Spatial Maps'],
            ['name' => 'Urban & Regional Spatial Planning', 'tag' => 'Town Development'],
            ['name' => 'Environmental Resource Management', 'tag' => 'Sustainability'],
        ],
        'eligibility' => 'Passed B.A. / B.Sc. with Geography as a core subject with minimum 50% marks (45% for reserved category).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.A.)',
        'title'       => 'M.A. in Sociology',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Social Dynamics',
        'icon'        => 'users',
        'description' => 'Sociological theories, rural and urban sociology, social stratification, gender studies, qualitative research methodology, and contemporary Indian society.',
        'branches'    => [
            ['name' => 'Classical & Modern Sociological Thinkers', 'tag' => 'Theoretical Models'],
            ['name' => 'Rural & Urban Sociology in India', 'tag' => 'Community Dynamics'],
            ['name' => 'Gender Studies & Social Stratification', 'tag' => 'Social Equity'],
            ['name' => 'Social Research Methodology & Fieldwork', 'tag' => 'Qualitative Analysis'],
        ],
        'eligibility' => 'Graduation in any discipline from a recognized University with at least 50% marks (45% for reserved category).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.A.)',
        'title'       => 'M.A. in Hindi / Sanskrit / Bengali',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Classical Languages',
        'icon'        => 'feather',
        'description' => 'Classical and modern poetry, prose, Natak, Sahitya ka Itihas, linguistics, Veda, Upanishads, translation studies, and comparative regional aesthetics.',
        'branches'    => [
            ['name' => 'Classical Poetry & Epic Traditions', 'tag' => 'Sahitya Itihas'],
            ['name' => 'Modern Prose, Drama & Fiction', 'tag' => 'Criticism & Natak'],
            ['name' => 'Linguistics, Grammar & Bhasha Vigyan', 'tag' => 'Vyakaran & Phonetics'],
            ['name' => 'Translation & Comparative Literature', 'tag' => 'Inter-Lingual Studies'],
        ],
        'eligibility' => 'Passed B.A. with respective language as Major/Honours or Graduation with at least 50% marks (45% for SC/ST/OBC).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.A.)',
        'title'       => 'M.A. in Education',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Pedagogy & Leadership',
        'icon'        => 'award',
        'description' => 'Philosophical and sociological foundations of education, curriculum design, educational psychology, modern instructional technology, and psychometrics.',
        'branches'    => [
            ['name' => 'Foundations of Educational Philosophy', 'tag' => 'Pedagogical Thought'],
            ['name' => 'Educational Psychology & Learning Theories', 'tag' => 'Cognitive Research'],
            ['name' => 'Curriculum Design & Evaluation', 'tag' => 'Instructional Systems'],
            ['name' => 'Educational Technology & Leadership', 'tag' => 'Institutional Mgmt'],
        ],
        'eligibility' => 'Passed B.Ed. / B.A. (Education) / Graduation in any discipline with at least 50% marks (45% for reserved category).'
    ],

    // --- Undergraduate Programs ---
    [
        'category'    => 'Undergraduate Degrees (B.A. Hons)',
        'title'       => 'B.A. (Hons.) in English',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Literature Core',
        'icon'        => 'book-open',
        'description' => 'English literature, British poetry, Indian English fiction, world classics, creative writing, drama, phonetics, and communication skills.',
        'branches'    => [
            ['name' => 'History of English Literature & Poetry', 'tag' => 'Chaucer to Modern'],
            ['name' => 'Drama, Fiction & World Classics', 'tag' => 'Shakespeare & Beyond'],
            ['name' => 'Phonetics & English Language Teaching', 'tag' => 'Language Lab'],
            ['name' => 'Creative & Academic Writing Skills', 'tag' => 'Publishing Basics'],
        ],
        'eligibility' => 'Passed 10+2 from a recognized board with English as a subject and minimum 45% aggregate marks (40% for SC/ST).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.A. Hons)',
        'title'       => 'B.A. (Hons.) in Political Science',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Civil Services Track',
        'icon'        => 'landmark',
        'description' => 'Political theory, Indian governance and constitutional framework, international relations, public administration, and human rights.',
        'branches'    => [
            ['name' => 'Political Theory & Ideologies', 'tag' => 'Concepts & Statecraft'],
            ['name' => 'Indian Constitution & Public Policy', 'tag' => 'Governance Norms'],
            ['name' => 'International Relations & Global Bodies', 'tag' => 'UN & Geopolitics'],
            ['name' => 'Public Administration & Local Bodies', 'tag' => 'Panchayati Raj'],
        ],
        'eligibility' => 'Passed 10+2 in Arts / Science / Commerce from a recognized board with minimum 45% marks (40% for SC/ST).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.A. Hons)',
        'title'       => 'B.A. (Hons.) in Economics',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Economic Analytics',
        'icon'        => 'trending-up',
        'description' => 'Microeconomics, macroeconomics, mathematical methods in economics, economic statistics, Indian economy, and monetary institutions.',
        'branches'    => [
            ['name' => 'Micro & Macro Economic Foundations', 'tag' => 'Market Structures'],
            ['name' => 'Statistical & Mathematical Economics', 'tag' => 'Quantitative Tools'],
            ['name' => 'Indian Economy: Policy & Challenges', 'tag' => 'National Planning'],
            ['name' => 'Money, Banking & Financial Markets', 'tag' => 'RBI & Fiscal Norms'],
        ],
        'eligibility' => 'Passed 10+2 with Mathematics / Economics / Commerce / Arts with minimum 45% marks (40% for SC/ST).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.A. Hons)',
        'title'       => 'B.A. (Hons.) in History / Geography / Sociology',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Social Sciences',
        'icon'        => 'globe',
        'description' => 'Specialized discipline options covering ancient/medieval/modern history, physical & human geography, GIS mapping, and sociological institutions.',
        'branches'    => [
            ['name' => 'History Major Specialization', 'tag' => 'Heritage & Archives'],
            ['name' => 'Geography Major with Cartography', 'tag' => 'GIS Lab Training'],
            ['name' => 'Sociology Major & Social Research', 'tag' => 'Community Fieldwork'],
            ['name' => 'Civil Services General Studies Prep', 'tag' => 'Integrated Module'],
        ],
        'eligibility' => 'Passed 10+2 examination in any stream from a recognized board with at least 45% aggregate marks.'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.A.)',
        'title'       => 'Bachelor of Arts (B.A. General)',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Multidisciplinary Humanities',
        'icon'        => 'layers',
        'description' => 'Flexible multidisciplinary degree combining three subjects spanning literature, social sciences, history, political science, and philosophy.',
        'branches'    => [
            ['name' => 'Language & Literature Elective', 'tag' => 'English / Hindi / Sanskrit'],
            ['name' => 'Social Science Elective Option 1', 'tag' => 'Pol Science / History'],
            ['name' => 'Social Science Elective Option 2', 'tag' => 'Economics / Geography / Soc'],
            ['name' => 'Ability & Skill Enhancement (AEC/SEC)', 'tag' => 'Digital & Soft Skills'],
        ],
        'eligibility' => 'Passed 10+2 from a recognized board in any stream with minimum 45% aggregate marks (40% for SC/ST).'
    ],

    [
        'category'    => 'Doctoral Programs (Ph.D.)',
        'title'       => 'Doctor of Philosophy (Ph.D. in Humanities & Social Sciences)',
        'duration'    => 'Min. 3 Years',
        'badge'       => 'UGC-NET / RET Track',
        'icon'        => 'microscope',
        'description' => 'Original doctoral research across English, Hindi, Sanskrit, History, Political Science, Economics, Sociology, Geography, and Social Work.',
        'branches'    => [
            ['name' => 'Ph.D. in English & Comparative Literature', 'tag' => 'Postcolonial Studies'],
            ['name' => 'Ph.D. in Political Science & Governance',   'tag' => 'Public Policy & Electoral'],
            ['name' => 'Ph.D. in Economics & Development Policy',   'tag' => 'Econometric Modeling'],
            ['name' => 'Ph.D. in History, Sociology & Social Work', 'tag' => 'Cultural & Tribal Studies'],
        ],
        'eligibility' => 'Master of Arts (M.A. / MSW) in relevant discipline with minimum 55% marks (50% for SC/ST/OBC) and qualifying in University RET / UGC-NET.'
    ],
];

$labs = [
    [
        'name'        => 'Language & Digital Phonetics Lab',
        'desc'        => 'Equipped with digital audio headsets and interactive language learning software (English, Hindi, Sanskrit) for accent training, public speaking, and translation mastery.',
        'icon'        => 'book-open',
        'specs'       => 'Sanako Language Learning Suites, Acoustic Audio Consoles, Audio Recording Units.'
    ],
    [
        'name'        => 'GIS, Cartography & Spatial Geography Lab',
        'desc'        => 'Specialized lab equipped with QGIS workstations, surveying instruments (Theodolite, Prismatic Compass), relief contour models, and aerial photography maps.',
        'icon'        => 'globe',
        'specs'       => 'QGIS & ArcGIS Spatial Workstations, Total Stations, Digital Planimeters, Toposheets.'
    ],
    [
        'name'        => 'Civil Services & UPSC Mentorship Cell',
        'desc'        => 'Dedicated study library with comprehensive national archives, current affairs journals, mock interview panels, and daily editorial analysis for UPSC & JPSC.',
        'icon'        => 'landmark',
        'specs'       => 'UPSC & JPSC Reference Stacks, Monthly Civil Service Gazettes, Digital Archive Terminals.'
    ],
    [
        'name'        => 'Historical & Cultural Research Archive',
        'desc'        => 'Repository of regional Jharkhand tribal history, colonial documentation, archaeological replicas, and digitised historical manuscripts.',
        'icon'        => 'library',
        'specs'       => 'Tribal Cultural Repository, Document Digitizers, Regional Historical Manuscripts.'
    ],
];

$partners = [
    'Civil Services Study Forum', 'National Book Trust', 'Sahitya Akademi', 'ICSSR Research Node',
    'Jharkhand State Archives', 'Oxford University Press', 'Orient BlackSwan', 'Teach For India', 'PRADAN', 'Goonj NGO'
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
      <a href="<?= url('departments/') ?>" class="hover:text-white transition">Faculties</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Arts &amp; Humanities</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of Arts &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Humanities</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Examining human culture, history, language, philosophy, and societal progress. Delivering rigorous B.A. (Hons) and M.A. degrees across 10+ disciplines with integrated Civil Services guidance.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> UPSC / JPSC Mentorship Cell
      </span>
      <span class="hero-pill">
        <?= lucide_icon('book-open') ?> Digital Phonetics Lab
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> 10+ Degree Majors
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> NEP Choice Based Credit System
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Schools -->
<?php require_once dirname(__DIR__) . '/includes/schools_nav_tabs.php'; ?>

<!-- ==================== FACULTY SPOTLIGHT OVERVIEW ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Executive Faculty Vision Spotlight -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('book-open', 'w-4 h-4 text-gold') ?> Liberal Arts, Languages &amp; Social Inquiry
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Nurturing Critical Thought, Cultural Heritage &amp; Civic Leadership
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The Faculty of Arts &amp; Humanities at RKDF University Ranchi provides an expansive intellectual ecosystem that engages with critical societal questions, classical and contemporary literatures, public governance, economic paradigms, and historical traditions.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Our pedagogical approach balances deep domain scholarship with practical communication and analytical skills. Students benefit from dedicated Civil Services mentorship, regional tribal ethnographic archives, digital GIS mapping, and interdisciplinary choice-based credit pathways.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>Choice Based Credit System (CBCS)</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>UPSC &amp; JPSC Foundation Cell</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Policy, Research &amp; Publishing</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Humanities Directorate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Excellence in Liberal Arts</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Equipping scholars with critical analytical depth, linguistic mastery, and structured guidance for national competitive examinations.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">20+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Degree Programs</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">10+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Subject Majors</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== ACADEMIC PROGRAMS & COURSES ==================== -->
    <div class="section-block" id="programs">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Curriculum Framework</span>
          <h3 class="rkdf-section-title">Academic Programs Offered</h3>
          <p class="rkdf-section-desc">Comprehensive undergraduate and postgraduate degrees aligned with NEP and UGC model curricula.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="rkdf-academic-grid">
        <?php foreach ($programs as $prog): ?>
          <div class="rkdf-academic-card">
            <div>
              <!-- Card Header -->
              <div class="rkdf-prog-header">
                <span class="rkdf-prog-badge">
                  <?= lucide_icon($prog['icon'], 'w-3.5 h-3.5 text-amber-600 shrink-0') ?>
                  <?= e($prog['category']) ?>
                </span>
                <span class="rkdf-duration-badge">
                  <?= lucide_icon('clock', 'w-3.5 h-3.5 text-gold shrink-0') ?>
                  <?= e($prog['duration']) ?>
                </span>
              </div>

              <h4 class="rkdf-prog-title">
                <?= e($prog['title']) ?>
              </h4>

              <p class="rkdf-prog-desc">
                <?= e($prog['description']) ?>
              </p>

              <!-- Specializations List -->
              <div class="mb-5">
                <div class="rkdf-spec-section-title">
                  <?= lucide_icon('layers', 'w-3.5 h-3.5 text-gold') ?>
                  <span>Core Curriculum Modules:</span>
                </div>
                <div class="rkdf-spec-grid">
                  <?php foreach ($prog['branches'] as $b): ?>
                    <div class="rkdf-spec-item">
                      <span class="rkdf-spec-name">
                        <span class="rkdf-spec-dot"></span>
                        <?= e($b['name']) ?>
                      </span>
                      <span class="rkdf-spec-tag">
                        <?= e($b['tag']) ?>
                      </span>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>

              <!-- Eligibility Box -->
              <div class="rkdf-eligibility-card">
                <div class="rkdf-eligibility-header">
                  <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-amber-700') ?>
                  <span>Eligibility &amp; Admission:</span>
                </div>
                <p class="rkdf-eligibility-text"><?= e($prog['eligibility']) ?></p>
              </div>
            </div>

            <!-- Card Action Footer -->
            <div class="rkdf-prog-footer">
              <span class="rkdf-accred-badge">
                <?= lucide_icon('shield-check', 'w-4 h-4 text-emerald-600') ?>
                <?= e($prog['badge']) ?>
              </span>
              <a href="<?= url('admissions/') ?>" class="rkdf-apply-btn">
                <span>Apply Now</span>
                <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== RESEARCH CENTERS & LABORATORIES ==================== -->
    <div class="section-block" id="laboratories">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Humanities Infrastructure</span>
          <h3 class="rkdf-section-title">Specialized Research Cells &amp; Language Labs</h3>
          <p class="rkdf-section-desc">Interactive phonetics studios, GIS spatial cartography suites, regional tribal archives, and civil services reading halls.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('book-open', 'w-3.5 h-3.5 text-gold') ?>
          <span>Digital Learning Centers</span>
        </span>
      </div>

      <div class="rkdf-lab-grid">
        <?php foreach ($labs as $idx => $lab): ?>
          <div class="rkdf-lab-card">
            <div>
              <div class="rkdf-lab-card-top">
                <div class="rkdf-lab-icon-box">
                  <?= lucide_icon($lab['icon'], 'w-5 h-5') ?>
                </div>
                <span class="rkdf-lab-index-tag">Lab 0<?= $idx + 1 ?></span>
              </div>
              <h4 class="rkdf-lab-title"><?= e($lab['name']) ?></h4>
              <p class="rkdf-lab-desc"><?= e($lab['desc']) ?></p>
            </div>
            <div class="rkdf-lab-specs-box">
              <div class="rkdf-lab-specs-header">
                <?= lucide_icon('sparkles', 'w-3 h-3 text-gold shrink-0') ?>
                <span>Technical Facilities:</span>
              </div>
              <p class="rkdf-lab-specs-text"><?= e($lab['specs']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== ACADEMIC & PUBLIC SECTOR LINKAGES ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('library', 'w-4 h-4 text-gold') ?> Academic Outreach &amp; Career Pathways
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Research Alliances &amp; Civil Services Cell
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Collaborating with leading research councils, publishing houses, cultural archives, and civil society think tanks to support field dissertations, translation projects, and administrative career development.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">UPSC</div>
              <div class="rkdf-corporate-stat-lbl">Civil Services Guidance</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Seminar &amp; Workshop Access</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">50+</div>
              <div class="rkdf-corporate-stat-lbl">Research Dissertations</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Institutions &amp; Partners</span>
            <span class="text-[10px] text-white/70 uppercase">Publishers &amp; Think Tanks</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($partners as $partner): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($partner) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
              <span>Explore Research &amp; Fellowship Details</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== FINAL ADMISSION CALLOUT BANNER ==================== -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Admissions Open for 2026–27 Academic Session</span>
        </div>
        <h3 class="rkdf-admission-title">
          Shape Your Career in Literature, Governance &amp; Social Sciences
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for B.A. (Hons) and M.A. degrees across English, Hindi, Political Science, Economics, History, Geography, Sociology, and Education.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Direct Online Application
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Humanities Faculty Counseling
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Merit Scholarship Assistance
          </span>
        </div>
      </div>

      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply Online Now</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Campus Visit</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
