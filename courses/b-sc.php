<?php
/**
 * RKDF University — Bachelor of Science (B.Sc. Honours) Programs
 * Content Source: https://rkdfuniversity.org/courses/b-sc/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'B.Sc. (Hons) Programs | Faculty of Basic, Applied & Life Sciences — ' . SITE_NAME;
$page_meta_desc = 'Explore 3-Year B.Sc. Honours programs in Physics, Chemistry, Mathematics, Zoology, Botany & Biotechnology at RKDF University Ranchi with 12 modern research laboratories.';

$bsc_specializations = [
    [
        'title'       => 'B.Sc. (Hons) Physics',
        'badge'       => '3 Years • NEP 4-Yr Option',
        'icon'        => 'atom',
        'desc'        => 'Classical mechanics, quantum physics, electromagnetism, solid-state electronics, optical spectrometry, thermodynamics, and computational astrophysics.',
        'features'    => [
            'Darkroom Optics, Laser Interferometry & Spectrometry Labs',
            'MATLAB & Python Computational Physics Simulations',
            'Solid-State Crystal Lattice & Nanomaterials Research'
        ],
        'duration'    => '3 Years (6 Sems)',
        'eligibility' => '10+2 PCM (45%+)'
    ],
    [
        'title'       => 'B.Sc. (Hons) Chemistry',
        'badge'       => '3 Years • NEP 4-Yr Option',
        'icon'        => 'flask-round',
        'desc'        => 'Organic synthesis reaction mechanisms, coordination inorganic complexes, chemical kinetics, green chemistry, and chromatography analytical methods.',
        'features'    => [
            'Fume-Hood Wet Synthesis & Rotary Evaporation Setup',
            'UV-Vis Spectrophotometry & Chromatography Workbenches',
            'Environmental Water & Soil Chemical Testing Units'
        ],
        'duration'    => '3 Years (6 Sems)',
        'eligibility' => '10+2 PCM / PCB (45%+)'
    ],
    [
        'title'       => 'B.Sc. (Hons) Mathematics',
        'badge'       => '3 Years • NEP 4-Yr Option',
        'icon'        => 'calculator',
        'desc'        => 'Real and complex analysis, abstract algebra, partial differential equations, topology, probability models, numerical analysis, and cryptography.',
        'features'    => [
            'Mathematica, R & Python Statistical Modeling Labs',
            'Cryptography & Data Encryption Algorithmic Training',
            'Financial Mathematics & Actuarial Science Modules'
        ],
        'duration'    => '3 Years (6 Sems)',
        'eligibility' => '10+2 PCM (45%+)'
    ],
    [
        'title'       => 'B.Sc. (Hons) Biotechnology',
        'badge'       => '3 Years • NEP 4-Yr Option',
        'icon'        => 'dna',
        'desc'        => 'Recombinant DNA technology, microbial fermentation, plant and animal tissue culture, bioinformatics, genetic engineering, and bioprocess technology.',
        'features'    => [
            'Thermal Cycler PCR & Gel Electrophoresis Bio-imaging',
            'Laminar Air Flow Sterile Plant Tissue Culture Unit',
            'Bioprocess Fermentor & Industrial Enzyme Extraction'
        ],
        'duration'    => '3 Years (6 Sems)',
        'eligibility' => '10+2 PCB / PCM (45%+)'
    ],
    [
        'title'       => 'B.Sc. (Hons) Zoology',
        'badge'       => '3 Years • NEP 4-Yr Option',
        'icon'        => 'feather',
        'desc'        => 'Comparative invertebrate and vertebrate anatomy, cellular immunology, developmental embryology, wildlife ecology, entomology, and evolutionary genetics.',
        'features'    => [
            'High-Resolution Binocular Compound Microscopy Lab',
            'Regional Wildlife Ecology & Forest Reserve Field Studies',
            'Histology Tissue Microtome & Staining Workstations'
        ],
        'duration'    => '3 Years (6 Sems)',
        'eligibility' => '10+2 PCB (45%+)'
    ],
    [
        'title'       => 'B.Sc. (Hons) Botany',
        'badge'       => '3 Years • NEP 4-Yr Option',
        'icon'        => 'sprout',
        'desc'        => 'Plant physiology, economic angiosperm taxonomy, phytochemistry, plant pathology, molecular cytogenetics, herbal pharmacognosy, and ecology.',
        'features'    => [
            'On-Campus Medicinal Botanical Garden & Herbarium Node',
            'Plant Tissue Culture & Poly-house Horticultural Unit',
            'Plant Pathology & Bio-fertilizer Research Projects'
        ],
        'duration'    => '3 Years (6 Sems)',
        'eligibility' => '10+2 PCB (45%+)'
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
      <a href="<?= url('courses/') ?>" class="hover:text-white transition">Courses</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('courses/under-graduate-programs.php') ?>" class="hover:text-white transition">Undergraduate</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">B.Sc. Honours</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Bachelor of Science <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">(B.Sc. Honours)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Rigorous experimental and theoretical scientific education across Physical, Chemical, Mathematical, and Biological disciplines backed by 12 state-of-the-art research laboratories.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('atom') ?> 12 Precision Science Labs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('dna') ?> NEP 2020 4-Year Research Track
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> CSIR-NET &amp; GATE Preparation
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('microscope', 'w-4 h-4 text-gold') ?> Faculty of Basic, Applied &amp; Life Sciences
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Scientific Discovery Powered by Practical Inquiry
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The B.Sc. Honours program at RKDF University Ranchi fosters deep empirical investigation, quantitative reasoning, and scientific methodology. Under the mentorship of research faculty, students engage in hands-on experimentation from semester one.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            With access to PCR bio-imaging setups, spectroscopy nodes, botanical gardens, and computational clusters, graduates are primed for prestigious master's tracks, national R&amp;D laboratories, and high-tech industrial careers.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>12 Dedicated Research Labs</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>DigiLocker ABC Credits</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Biotech &amp; Chemical Industry Ties</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Quick Specs
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('flask-round', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">B.Sc. Honours Degree</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Curriculum formulated under UGC NEP 2020 guidelines with 3-Year Degree and 4-Year Honours with Research exit options.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">3/4 Yrs</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">6/8 Semesters</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">45% 10+2</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">PCM / PCB (40% Res.)</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== SPECIALIZATIONS GRID ==================== -->
    <div class="section-block" id="specializations">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Scientific Disciplines</span>
          <h3 class="rkdf-section-title">Available B.Sc. Honours Majors</h3>
          <p class="rkdf-section-desc">Choose your foundational specialization backed by intensive laboratory hours and field work.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for B.Sc. 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($bsc_specializations as $prog): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($prog['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($prog['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($prog['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($prog['desc']) ?></p>
                
                <ul class="prog-spec-feature-list">
                  <?php foreach ($prog['features'] as $ft): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                      <span><?= e($ft) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & CTA -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Duration</span>
                    <span class="prog-spec-stat-val"><?= e($prog['duration']) ?></span>
                  </div>
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Eligibility</span>
                    <span class="prog-spec-stat-val"><?= e($prog['eligibility']) ?></span>
                  </div>
                </div>

                <a href="<?= url('admissions/') ?>" class="prog-spec-btn">
                  <span>Apply for <?= e($prog['title']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== SCIENTIFIC ADVANTAGE PILLARS ==================== -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Research Infrastructure</span>
          <h3 class="rkdf-section-title">The Scientific Edge at RKDF</h3>
          <p class="rkdf-section-desc">Why undergraduate science students choose RKDF University Ranchi for research careers.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('microscope') ?>
          </div>
          <h4 class="pillar-title">12 NABL-Standard Laboratories</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Equipped with UV-Vis spectrophotometers, high-speed centrifuges, PCR thermal cyclers, laminar airflow hoods, and research microscopes.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('book-open') ?>
          </div>
          <h4 class="pillar-title">Undergraduate Research Grants</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Opportunity to publish original research in the university's indexed international journal (IJHESM) with faculty co-authorship.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('award') ?>
          </div>
          <h4 class="pillar-title">CSIR-NET &amp; IIT-JAM Guidance</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Integrated competitive examination coaching embedded into the final semesters for seamless admission to premier national research institutes.
          </p>
        </div>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Science Admissions Open for 2026–27 Cycle</span>
        </div>
        <h3 class="rkdf-admission-title">
          Begin Your Scientific Research Journey Today
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for B.Sc. Honours programs at RKDF University Ranchi. Jharkhand state scholarships applicable for eligible candidates.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for B.Sc.</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Sciences Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
