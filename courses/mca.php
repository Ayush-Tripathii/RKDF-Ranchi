<?php
/**
 * RKDF University — Master of Computer Applications (MCA) & PG IT Programs
 * Content Source: https://rkdfuniversity.org/courses/master-of-computer-application/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Master of Computer Applications (MCA) & PG IT Programs | ' . SITE_NAME;
$page_meta_desc = 'Apply for 2-Year Master of Computer Applications (MCA) and M.Sc Computer Science at RKDF University Ranchi. AICTE approved curriculum, cloud computing, AI/ML laboratories, live capstones & 100% placement support.';

$mca_tracks = [
    [
        'title'       => 'Master of Computer Applications (MCA)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'AICTE Approved · NEP Model',
        'desc'        => 'Advanced full-stack software architecture, cloud platforms (AWS, Azure), machine learning pipelines, microservices, cyber defense, and enterprise software engineering.',
        'features'    => [
            'Advanced Data Structures, Algorithms & Design Patterns',
            'Full-Stack Web Development (React, Node.js, Spring Boot)',
            'Artificial Intelligence, Deep Learning & Computer Vision',
            'Cloud Architecture, Containerization (Docker, K8s) & DevOps'
        ],
        'stats'       => [
            ['lbl' => 'Curriculum', 'val' => 'AICTE Aligned'],
            ['lbl' => 'Internship', 'val' => '6-Month Capstone']
        ],
        'syllabus'    => 'documents/MCA.pdf'
    ],
    [
        'title'       => 'M.Sc. in Computer Science',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Research & Algorithms Track',
        'desc'        => 'Rigorous algorithmic computing, big data systems, natural language processing, cryptographic network security, and advanced theoretical computer science.',
        'features'    => [
            'Theoretical Computing, Automata & Graph Theory',
            'Big Data Analytics (Apache Spark, Hadoop, Kafka)',
            'Natural Language Processing & Neural Networks',
            'Cryptographic Protocols & Advanced Network Security'
        ],
        'stats'       => [
            ['lbl' => 'Research', 'val' => 'Thesis / Dissertation'],
            ['lbl' => 'Labs', 'val' => 'High-Performance Grid']
        ],
        'syllabus'    => 'documents/MSc-Computer-Science.pdf'
    ],
    [
        'title'       => 'PGDCA (Post Graduate Diploma in Computer Applications)',
        'duration'    => '1 Year · 2 Semesters',
        'badge'       => '1-Yr Professional Diploma',
        'desc'        => 'Career-accelerating technical diploma offering hands-on training in Python programming, relational database systems (SQL), web page design, and MIS automation.',
        'features'    => [
            'Object-Oriented Programming with Python & C++',
            'Relational Database Management (MySQL & Oracle)',
            'Web Technologies, HTML5, CSS3 & JavaScript',
            'Office Automation, IT Hardware & Linux Administration'
        ],
        'stats'       => [
            ['lbl' => 'Duration', 'val' => '1 Year (Fast Track)'],
            ['lbl' => 'Focus', 'val' => 'Applied IT & Software']
        ],
        'syllabus'    => 'documents/PGDCA.pdf'
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
      <span class="text-white/90">MCA &amp; Master IT</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Master of Computer <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Applications (MCA)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      High-impact 2-year postgraduate computing curriculum preparing software architects, cloud engineers, data scientists, and full-stack developers for top multinational technology enterprises.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('cpu') ?> 2-Year Advanced MCA
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> 150+ Corporate Recruiters
      </span>
      <span class="hero-pill">
        <?= lucide_icon('laptop') ?> High-End Cloud &amp; AI Labs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('file-text') ?> Official Syllabus PDF Download
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Key Metrics Banner -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">2 Years</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">4 Semester Full-Time</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">100%</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Lab &amp; Project Driven</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">8+ LPA</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Top Placement CTC</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">AICTE</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Model NEP Framework</span>
      </div>
    </div>

    <!-- Programs Grid -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Postgraduate IT Portfolio
          </span>
          <h3 class="rkdf-section-title">MCA &amp; Master IT Programs</h3>
          <p class="rkdf-section-desc">Choose from specialized 2-year master's degrees and 1-year postgraduate diplomas in software development and data science.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($mca_tracks as $track): ?>
          <div class="prog-spec-card">
            <!-- Header -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('cpu', 'w-3 h-3') ?>
                  <span><?= e($track['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($track['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon('laptop', 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($track['desc']) ?></p>

                <!-- Features -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($track['features'] as $feat): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
                      <span><?= e($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & Actions -->
              <div class="space-y-4 pt-2">
                <div class="prog-spec-stats-grid">
                  <?php foreach ($track['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <div class="flex flex-col gap-2">
                  <?php if (!empty($track['syllabus']) && file_exists(dirname(__DIR__) . '/' . $track['syllabus'])): ?>
                    <a href="<?= url($track['syllabus']) ?>" target="_blank" class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-xl bg-emerald-50 text-emerald-800 text-xs font-bold border border-emerald-200 hover:bg-emerald-100 transition">
                      <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-emerald-700') ?>
                      <span>Download Syllabus (PDF)</span>
                      <?= lucide_icon('download', 'w-3 h-3') ?>
                    </a>
                  <?php endif; ?>

                  <a href="<?= url('admissions/') ?>" class="prog-spec-btn">
                    <span>Apply for <?= e($track['title']) ?></span>
                    <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                  </a>
                </div>
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
          <span>MCA Admissions 2026–27 Open</span>
        </div>
        <h3 class="rkdf-admission-title">
          Build Your Future in Cloud, Full-Stack &amp; AI Technology
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for MCA 2026–27. Scholarships available for BCA, B.Sc Computer Science, and graduate merit holders.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for MCA</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>IT Faculty Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
