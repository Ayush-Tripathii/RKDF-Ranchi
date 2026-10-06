<?php
/**
 * RKDF University — Pharmacy Programs (B.Pharm, D.Pharm & Lateral Entry)
 * Content Source: https://rkdfuniversity.org/courses/pharmacy/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Pharmacy Programs | PCI Approved B.Pharm & D.Pharm — ' . SITE_NAME;
$page_meta_desc = 'Explore PCI Approved Pharmacy courses at RKDF University Ranchi: 4-Year B.Pharm, 2-Year D.Pharm & B.Pharm Lateral Entry with GLP-compliant pharmaceutical laboratories.';

$pharmacy_programs = [
    [
        'title'       => 'Bachelor of Pharmacy (B.Pharm)',
        'badge'       => '4 Years • PCI Approved',
        'icon'        => 'flask-round',
        'desc'        => 'Comprehensive pharmaceutical education spanning medicinal chemistry, novel drug delivery systems (NDDS), pharmacology, pharmacognosy, and clinical toxicology.',
        'features'    => [
            'GLP-Compliant Formulations & Quality Assurance Testing Labs',
            'Compulsory 150-Hour Industrial & Clinical Hospital Internship',
            'Eligible for State Pharmacy Council Registered Pharmacist Licensure'
        ],
        'duration'    => '4 Years (8 Sems)',
        'eligibility' => '10+2 PCB / PCM (45%+)'
    ],
    [
        'title'       => 'Diploma in Pharmacy (D.Pharm)',
        'badge'       => '2 Years • Annual Pattern',
        'icon'        => 'activity',
        'desc'        => 'Professional diploma preparing students for retail and hospital pharmacy operations, prescription dispensing, drug storage logistics, and community healthcare.',
        'features'    => [
            '500 Hours of Structured Practical Hospital Training',
            'Pharmaceutics, Pharmacology & Hospital Dispensing Practicals',
            'Direct Licensure as Registered Pharmacist (Chemist / Druggist)'
        ],
        'duration'    => '2 Years (Annual)',
        'eligibility' => '10+2 PCB / PCM (Pass)'
    ],
    [
        'title'       => 'B.Pharm (Lateral Entry to 2nd Year)',
        'badge'       => '3 Years • 6 Semesters',
        'icon'        => 'sparkles',
        'desc'        => 'Direct admission into the 3rd semester (2nd Year) of the 4-year B.Pharm degree program for candidates who have passed D.Pharm from a PCI-approved institution.',
        'features'    => [
            'Accelerated Degree Pathway for Registered Diploma Holders',
            'Seamless Transition into Industrial R&D and Clinical Pharmacy',
            'Full Eligibility for GPAT Examination & Post-Graduate M.Pharm'
        ],
        'duration'    => '3 Years (6 Sems)',
        'eligibility' => 'D.Pharm (PCI Approved)'
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
      <span class="text-white/90">Pharmacy Programs</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Pharmaceutical Sciences &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Healthcare</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      PCI-approved pharmaceutical education combining modern drug formulation, pharmacology, clinical toxicology, and industrial manufacturing in GLP-certified laboratories.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> Pharmacy Council of India (PCI) Approved
      </span>
      <span class="hero-pill">
        <?= lucide_icon('flask-round') ?> GLP Compliant Formulations Lab
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> Registered Pharmacist Licensure
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
            <?= lucide_icon('shield-check', 'w-4 h-4 text-gold') ?> Faculty of Pharmaceutical Sciences
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Advancing Healthcare Through Pharmaceutical Mastery
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The School of Pharmacy at RKDF University Ranchi delivers high-caliber training approved by the Pharmacy Council of India (PCI). Our curriculum balances medicinal chemistry, drug formulation, regulatory affairs, and hospital clinical practice.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Equipped with tablet compression machines, dissolution test apparatus, UV-Vis spectrophotometers, and an aseptic sterile preparation room, our pharmacy scholars graduate ready for industrial pharma, clinical trials, and healthcare administration.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>PCI Statutory Approval</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Hospital Clinical Postings</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Pharma Manufacturing Ties</span>
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
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Pharmacy Suite</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Approved programs qualifying candidates for retail chemist licensing, hospital drug distribution, and industrial pharma roles.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">PCI</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Approved Reg.</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Lab Practical Immersion</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== PROGRAMS GRID ==================== -->
    <div class="section-block" id="programs">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Pharmacy Courses</span>
          <h3 class="rkdf-section-title">Available Pharmacy Programs</h3>
          <p class="rkdf-section-desc">Choose from degree and diploma courses approved by the Pharmacy Council of India.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for Pharmacy 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($pharmacy_programs as $prog): ?>
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

    <!-- ==================== PHARMACY ADVANTAGE PILLARS ==================== -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Clinical Excellence</span>
          <h3 class="rkdf-section-title">The Pharmacy Edge at RKDF</h3>
          <p class="rkdf-section-desc">State-of-the-art pharmaceutical education designed for healthcare leadership.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('shield-check') ?>
          </div>
          <h4 class="pillar-title">PCI Registered Licensure</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Graduates are directly qualified to register with the State Pharmacy Council as Registered Pharmacists to operate chemist facilities or manage hospital dispensaries.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('flask-round') ?>
          </div>
          <h4 class="pillar-title">GLP Formulation Facilities</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            High-tech formulation equipment including dissolution testers, tablet coating units, rotary evaporators, and microbiology sterility incubators.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('briefcase') ?>
          </div>
          <h4 class="pillar-title">Pharma MNC Placements</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Direct recruitment pipelines with prominent national pharmaceutical manufacturers including Sun Pharma, Cipla, Lupin, Dr. Reddy's, and Alkem Laboratories.
          </p>
        </div>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Pharmacy Admissions Open for 2026–27 Cycle</span>
        </div>
        <h3 class="rkdf-admission-title">
          Become a Registered Healthcare Professional
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for B.Pharm and D.Pharm programs at RKDF University Ranchi. Limited seats under PCI approved annual intake.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for Pharmacy</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Pharmacy Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
