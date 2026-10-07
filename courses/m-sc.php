<?php
/**
 * RKDF University — Master of Science (M.Sc.) Programs
 * Content Source: https://rkdfuniversity.org/courses/master-of-science-msc/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Master of Science (M.Sc.) Programs | ' . SITE_NAME;
$page_meta_desc = 'Apply for 2-Year M.Sc. programs at RKDF University Ranchi. Physics, Chemistry, Mathematics, Biotechnology, Microbiology, Botany, Zoology & Biochemistry with modern research laboratories & dissertation support.';

$msc_streams = [
    [
        'title'    => 'M.Sc. in Applied Physics',
        'badge'    => 'Physical Sciences • Research Track',
        'icon'     => 'atom',
        'desc'     => 'Quantum mechanics, condensed matter physics, nuclear electrodynamics, laser optics, and computational nanotechnology simulation.',
        'features' => ['Quantum Mechanics & Advanced Electrodynamics', 'Solid State Physics & Nanomaterials Synthesis', 'Laser Spectroscopy & Optoelectronics', 'Computational Physics with Python & MATLAB'],
        'syllabus' => 'documents/M.Sc_.-Physics.pdf'
    ],
    [
        'title'    => 'M.Sc. in Chemistry',
        'badge'    => 'Synthetic & Analytical Labs',
        'icon'     => 'flask-conical',
        'desc'     => 'Advanced organic synthesis, coordination inorganic chemistry, spectroscopic analysis (NMR, FTIR, UV-Vis), and polymer characterization.',
        'features' => ['Organic Reaction Mechanisms & Stereochemistry', 'Inorganic Polymers & Bio-Inorganic Chemistry', 'Instrumental Analysis & Chromatography', 'Medicinal Formulation & Drug Synthesis'],
        'syllabus' => 'documents/M.Sc_.-Chemistry.pdf'
    ],
    [
        'title'    => 'M.Sc. in Applied Mathematics',
        'badge'    => 'Mathematical Modeling',
        'icon'     => 'calculator',
        'desc'     => 'Complex analysis, partial differential equations, mathematical statistics, operations research, optimization theory, and MATLAB modeling.',
        'features' => ['Advanced Numerical Methods & Differential Equations', 'Operations Research & Linear Programming', 'Statistical Modeling & Probability Theory', 'Topology & Functional Analysis'],
        'syllabus' => 'documents/M.Sc_.-Maths.pdf'
    ],
    [
        'title'    => 'M.Sc. in Biotechnology',
        'badge'    => 'Genetic Engineering & Bioprocess',
        'icon'     => 'dna',
        'desc'     => 'Recombinant DNA technology, bioprocess engineering, bioinformatics, plant & animal tissue culture, immunology, and gene therapy.',
        'features' => ['Genetic Engineering, Vectors & CRISPR', 'Bioprocess Optimization & Fermentation', 'Bioinformatics & Molecular Docking', 'Cell Biology & Recombinant Vaccines'],
        'syllabus' => 'documents/MSc_Biotech_Syllabus_new.pdf'
    ],
    [
        'title'    => 'M.Sc. in Microbiology',
        'badge'    => 'Clinical & Industrial Microbiology',
        'icon'     => 'microscope',
        'desc'     => 'Medical microbiology, virology, immunology, microbial physiology, fermentation technology, and environmental microbial ecology.',
        'features' => ['Clinical Virology & Medical Bacteriology', 'Industrial Enzyme & Antibiotic Production', 'Immunology, Serology & Molecular Diagnostics', 'Food Microbiology & Quality Control'],
        'syllabus' => 'documents/M.Sc-Microbiology-syllabus-2025.pdf'
    ],
    [
        'title'    => 'M.Sc. in Botany & Zoology',
        'badge'    => 'Biodiversity & Life Sciences',
        'icon'     => 'leaf',
        'desc'     => 'Advanced plant biosystematics, developmental physiology, applied entomology, endocrinology, biodiversity conservation, and genetics.',
        'features' => ['Plant Pathology & Phyto-Biochemistry', 'Animal Physiology & Endocrinology', 'Cytogenetics & Developmental Biology', 'Biodiversity Conservation & Taxonomy'],
        'syllabus' => 'documents/MSc_Botany_Syllabus.pdf'
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
      <span class="text-white/90">M.Sc. Sciences</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Master of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Science (M.Sc.)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      High-impact 2-year postgraduate scientific research degrees with high-precision laboratory infrastructure, dissertation publications, and CSIR-NET / GATE mentoring.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('atom') ?> 7 Scientific Disciplines
      </span>
      <span class="hero-pill">
        <?= lucide_icon('flask-conical') ?> Advanced Instrumentation Labs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('file-text') ?> Mandatory Research Thesis
      </span>
      <span class="hero-pill">
        <?= lucide_icon('download') ?> Verified Syllabus Downloads
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN M.SC. CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Key Metrics Banner -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">2 Years</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">4 Semester Master</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">Thesis</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Research Dissertation</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">CSIR-NET</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">National Exam Focus</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">100%</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Lab &amp; Wet Experiments</span>
      </div>
    </div>

    <!-- Specializations Grid -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Scientific Disciplines
          </span>
          <h3 class="rkdf-section-title">M.Sc. Program Concentrations</h3>
          <p class="rkdf-section-desc">Select from pure, applied, and biological science disciplines equipped with dedicated laboratories.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($msc_streams as $stream): ?>
          <div class="prog-spec-card">
            <!-- Header -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('microscope', 'w-3 h-3') ?>
                  <span><?= e($stream['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($stream['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($stream['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($stream['desc']) ?></p>

                <!-- Features -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($stream['features'] as $feat): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
                      <span><?= e($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Action & Download -->
              <div class="space-y-3 pt-4 border-t border-slate-100">
                <?php if (!empty($stream['syllabus']) && file_exists(dirname(__DIR__) . '/' . $stream['syllabus'])): ?>
                  <a href="<?= url($stream['syllabus']) ?>" target="_blank" class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-xl bg-emerald-50 text-emerald-800 text-xs font-bold border border-emerald-200 hover:bg-emerald-100 transition">
                    <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-emerald-700') ?>
                    <span>Download Syllabus (PDF)</span>
                    <?= lucide_icon('download', 'w-3 h-3') ?>
                  </a>
                <?php endif; ?>

                <a href="<?= url('admissions/') ?>" class="prog-spec-btn">
                  <span>Apply for M.Sc. 2026–27</span>
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
          <span>M.Sc. Admissions 2026–27 Open</span>
        </div>
        <h3 class="rkdf-admission-title">
          Advance Your Scientific &amp; Research Career
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for M.Sc. degree programs at RKDF University Ranchi. Merit scholarships, state freeships, and hostel accommodations available.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for M.Sc.</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('departments/school-of-basic-and-applied-sciences.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Faculty of Sciences</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
