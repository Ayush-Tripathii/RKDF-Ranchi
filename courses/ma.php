<?php
/**
 * RKDF University — Master of Arts (M.A. Programs)
 * Content Source: https://rkdfuniversity.org/courses/master-of-arts/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Master of Arts (M.A.) Programs | ' . SITE_NAME;
$page_meta_desc = 'Apply for 2-Year Master of Arts (M.A.) programs at RKDF University Ranchi. English, Hindi, Political Science, Economics, History, Geography, Sociology, and Journalism with UGC-NET & Civil Services mentoring.';

$ma_disciplines = [
    [
        'title'    => 'M.A. in English Literature',
        'badge'    => 'Literary Criticism & Linguistics',
        'icon'     => 'book-open',
        'desc'     => 'British literature, post-colonial discourse, world literature in translation, literary theory, cultural studies, and professional linguistics.',
        'features' => ['Classical & Contemporary World Literature', 'Post-Colonial Discourse & Gender Studies', 'Literary Criticism & Deconstruction Theory', 'Linguistics & Advanced Phonetics'],
        'syllabus' => 'documents/MA-ECONOMICS.pdf'
    ],
    [
        'title'    => 'M.A. in Political Science & International Relations',
        'badge'    => 'Governance & Diplomacy',
        'icon'     => 'landmark',
        'desc'     => 'Comparative political analysis, Western & Indian political thought, international diplomatic relations, public policy, and constitutional development.',
        'features' => ['Indian Political System & Constitutional Law', 'International Relations & Strategic Studies', 'Public Administration & Policy Formulation', 'Comparative Politics & Global Governance'],
        'syllabus' => 'documents/MA-Political-Science.pdf'
    ],
    [
        'title'    => 'M.A. in Economics & Policy Analytics',
        'badge'    => 'Econometrics & Policy',
        'icon'     => 'trending-up',
        'desc'     => 'Micro and macroeconomic theory, development economics, econometrics modeling, public finance, environmental economics, and monetary policy.',
        'features' => ['Advanced Econometrics & Statistical Software', 'Development Economics & Rural Planning', 'Monetary Economics & Central Banking', 'International Trade & Fiscal Policy'],
        'syllabus' => 'documents/MA-ECONOMICS.pdf'
    ],
    [
        'title'    => 'M.A. in History & Archival Studies',
        'badge'    => 'Historiography & Heritage',
        'icon'     => 'landmark',
        'desc'     => 'Ancient, medieval, and modern Indian history, world history, historiography methods, archaeological heritage management, and archival research.',
        'features' => ['Ancient Indian Civilization & Epigraphy', 'Medieval Polity, Society & Architecture', 'Modern Indian National Movement & Archives', 'Historiography & Historical Methodology'],
        'syllabus' => 'documents/MA-HISTORY.pdf'
    ],
    [
        'title'    => 'M.A. in Geography & Spatial GIS',
        'badge'    => 'Geomorphology & GIS Mapping',
        'icon'     => 'globe',
        'desc'     => 'Geomorphology, climatology, human geography, urban settlement planning, remote sensing technology, and Geographic Information Systems (GIS).',
        'features' => ['Geographical Information Systems (GIS) Labs', 'Remote Sensing & Digital Cartography', 'Environmental Geography & Disaster Mgmt', 'Urban & Regional Spatial Planning'],
        'syllabus' => 'documents/MA-Geography.pdf'
    ],
    [
        'title'    => 'M.A. in Sociology & Development Studies',
        'badge'    => 'Social Systems & CSR',
        'icon'     => 'users',
        'desc'     => 'Sociological theories, research methodologies, rural sociology, tribal studies, sociology of development, gender empowerment, and CSR governance.',
        'features' => ['Classical & Contemporary Sociological Thought', 'Quantitative & Qualitative Research Methods', 'Tribal & Rural Development in India', 'Sociology of Health, Gender & Environment'],
        'syllabus' => 'documents/MA-Sociology.pdf'
    ]
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
      <a href="<?= url('courses/') ?>" class="hover:text-white transition">Courses</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('courses/post-graduate-programs.php') ?>" class="hover:text-white transition">Postgraduate</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">M.A. Humanities</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Master of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Arts (M.A.)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      High-impact 2-year postgraduate degrees in Humanities and Social Sciences with Civil Services mentoring, UGC-NET guidance, and empirical research thesis.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('book-open') ?> 8 Core Disciplines
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> UGC-NET &amp; JRF Mentorship
      </span>
      <span class="hero-pill">
        <?= lucide_icon('file-text') ?> Official Syllabus PDF Downloads
      </span>
      <span class="hero-pill">
        <?= lucide_icon('globe') ?> Civil Services Oriented
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN M.A. CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Key Metrics Banner -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">2 Years</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">4 Semester Master</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">UGC-NET</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Lectureship Guidance</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">Civil Prep</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">UPSC / JPSC Optional</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">Thesis</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Fieldwork &amp; Research</span>
      </div>
    </div>

    <!-- Specializations Grid -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Humanities Disciplines
          </span>
          <h3 class="rkdf-section-title">M.A. Degree Concentrations</h3>
          <p class="rkdf-section-desc">Select your desired specialization across literature, political analysis, economics, history, geography, and sociology.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($ma_disciplines as $disc): ?>
          <div class="prog-spec-card">
            <!-- Header -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('book-open', 'w-3 h-3') ?>
                  <span><?= e($disc['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($disc['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($disc['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($disc['desc']) ?></p>

                <!-- Features -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($disc['features'] as $feat): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
                      <span><?= e($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Action & Download -->
              <div class="space-y-3 pt-4 border-t border-slate-100">
                <?php if (!empty($disc['syllabus']) && file_exists(dirname(__DIR__) . '/' . $disc['syllabus'])): ?>
                  <a href="<?= url($disc['syllabus']) ?>" target="_blank" class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-xl bg-emerald-50 text-emerald-800 text-xs font-bold border border-emerald-200 hover:bg-emerald-100 transition">
                    <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-emerald-700') ?>
                    <span>Download Syllabus (PDF)</span>
                    <?= lucide_icon('download', 'w-3 h-3') ?>
                  </a>
                <?php endif; ?>

                <a href="<?= url('admissions/') ?>" class="prog-spec-btn">
                  <span>Apply for M.A. 2026–27</span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>M.A. Admissions 2026–27 Open</span>
        </div>
        <h3 class="rkdf-admission-title">
          Pursue Excellence in Arts, Governance &amp; Social Thought
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for M.A. degree programs at RKDF University Ranchi. Merit scholarships, hostel seats, and research library access available.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for M.A.</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('departments/school-of-arts-and-humanities.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Faculty of Arts</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
