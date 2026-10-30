<?php
/**
 * RKDF University — Institute of Pharmaceutical Sciences
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-pharmacy/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Institute of Pharmaceutical Sciences — ' . SITE_NAME;
$page_meta_desc = 'Institute of Pharmaceutical Sciences at RKDF University Ranchi. PCI approved D.Pharm, B.Pharm, and M.Pharm programs with advanced pharmacology labs and clinical rotations.';


$programs = [
    [
        'category'    => 'Undergraduate Pharmacy (UG)',
        'title'       => 'Bachelor of Pharmacy (B.Pharm)',
        'duration'    => '4 Years · 8 Semesters',
        'badge'       => 'PCI Approved',
        'icon'        => 'pill',
        'description' => 'Comprehensive pharmaceutical education covering medicinal chemistry, pharmacology, formulation development, pharmacognosy, and pharmaceutical industrial quality assurance.',
        'branches'    => [
            ['name' => 'Pharmaceutics & Formulation Development', 'tag' => 'Solid & Liquid Dosage'],
            ['name' => 'Pharmacology & Toxicology',              'tag' => 'Drug Action & Animal Models'],
            ['name' => 'Pharmaceutical Chemistry',               'tag' => 'Drug Synthesis & Analysis'],
            ['name' => 'Pharmacognosy & Phytochemistry',          'tag' => 'Herbal Therapeutics'],
        ],
        'eligibility' => '10+2 with Physics and Chemistry as compulsory subjects along with Mathematics or Biology, securing minimum 45% marks (40% for SC/ST/OBC).'
    ],
    [
        'category'    => 'Diploma in Pharmacy',
        'title'       => 'Diploma in Pharmacy (D.Pharm)',
        'duration'    => '2 Years · Annual Pattern',
        'badge'       => 'PCI Approved · Registered Pharmacist Track',
        'icon'        => 'heart-pulse',
        'description' => 'Clinical and community pharmacy program qualifying graduates for immediate state pharmacy council registration, hospital dispensing, and community drug store operations.',
        'branches'    => [
            ['name' => 'Hospital & Clinical Pharmacy',    'tag' => 'Prescription & Dispensing'],
            ['name' => 'Pharmaceutics & Drug Chemistry',  'tag' => 'Formulations'],
            ['name' => 'Pharmacology & Community Care',   'tag' => 'Patient Counseling'],
        ],
        'eligibility' => '10+2 pass with Physics, Chemistry, and Biology/Mathematics from a recognized Board.'
    ],
    [
        'category'    => 'Postgraduate Healthcare (PG)',
        'title'       => 'Master of Hospital Administration (MHA)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Healthcare Leadership',
        'icon'        => 'stethoscope',
        'description' => 'Advanced hospital administration, NABH healthcare quality standards, clinical risk management, health insurance protocols, and telemedicine operations.',
        'branches'    => [
            ['name' => 'Hospital Operations & Administration', 'tag' => 'Clinical Ward & ICU Mgmt'],
            ['name' => 'Healthcare Quality & NABH Compliance',  'tag' => 'Accreditation Standards'],
            ['name' => 'Health Informatics & Telemedicine',     'tag' => 'Electronic Health Records'],
        ],
        'eligibility' => 'Bachelor’s Degree in MBBS, BDS, B.Pharm, B.Sc Nursing, B.Sc Life Sciences, or any graduate degree with minimum 50% marks (45% for reserved category).'
    ],
    [
        'category'    => 'Doctoral Programs (Ph.D.)',
        'title'       => 'Doctor of Philosophy (Ph.D. in Pharmaceutical Sciences)',
        'duration'    => 'Min. 3 Years',
        'badge'       => 'PCI / UGC Recognized',
        'icon'        => 'microscope',
        'description' => 'Advanced pharmaceutical research in novel drug delivery systems (NDDS), natural product chemistry, synthetic medicinal molecules, and translational clinical pharmacology.',
        'branches'    => [
            ['name' => 'Ph.D. in Pharmaceutics & Drug Delivery', 'tag' => 'Nanomedicine & Liposomes'],
            ['name' => 'Ph.D. in Pharmacology & Therapeutics',  'tag' => 'Preclinical Drug Screening'],
            ['name' => 'Ph.D. in Pharmaceutical Chemistry',      'tag' => 'Molecular Modeling & QSAR'],
        ],
        'eligibility' => 'Master of Pharmacy (M.Pharm) or Master of Science in relevant field with minimum 55% marks (50% for SC/ST/OBC) and qualifying in University RET / GPAT / UGC-NET.'
    ],
];

$facilities = [
    [
        'name'        => 'Central Analytical Instrumentation Lab',
        'desc'        => 'Equipped with UV-Visible spectrophotometers, FTIR, HPLC chromatography systems, and dissolution test apparatus.',
        'icon'        => 'microscope',
        'specs'       => 'Double beam UV-Vis, automated 8-station dissolution tester, digital refractometers.'
    ],
    [
        'name'        => 'Industrial Machine Room & Formulation Plant',
        'desc'        => 'Pilot plant simulation facility equipped with rotary tablet punching machines, capsule fillers, ampoule sealers, and coating pans.',
        'icon'        => 'cpu',
        'specs'       => 'GMP-compliant layout, 8-station rotary tablet machine, fluid bed dryers.'
    ],
    [
        'name'        => 'Pharmacology & Clinical Simulation Lab',
        'desc'        => 'State-of-the-art computational simulation software for physiological experiments, organ bath setups, and isolated tissue systems.',
        'icon'        => 'heart-pulse',
        'specs'       => 'Ex-Pharm digital simulation suite, Dale organ baths, student physiograph systems.'
    ],
    [
        'name'        => 'Medicinal Botanical Garden & Herbal Lab',
        'desc'        => 'On-campus botanical garden cultivating 100+ species of indigenous and rare medicinal plants for pharmacognostic extraction and research.',
        'icon'        => 'leaf',
        'specs'       => 'Extraction Soxhlet batteries, rotary evaporators, phytochemical herbarium.'
    ],
];

$recruiters = [
    'Sun Pharma', 'Cipla', 'Dr. Reddy’s', 'Lupin', 'Mankind Pharma', 
    'Abbott India', 'Torrent Pharma', 'Apollo Pharmacy', 'Alkem Laboratories', 'Fortis Healthcare'
];

require_once dirname(__DIR__) . '/includes/header.php';
?>

<style>
  @media (max-width: 640px) {
    .pharmacy-hero h1 { font-size: 2.25rem !important; line-height: 1.25 !important; text-wrap: balance; margin-bottom: 1.25rem !important; }
    .pharmacy-hero h1 em { display: inline-block; }
    .pharmacy-hero h1 + p { margin-top: 1.25rem !important; }
    .pharmacy-spotlight-intro {
      display: flex !important;
      flex-direction: column !important;
      gap: 1rem !important;
      min-width: 0 !important;
    }
    .pharmacy-spotlight-intro > * { margin: 0 !important; }
    .pharmacy-spotlight-intro > div:first-child {
      align-items: flex-start !important;
      line-height: 1.5 !important;
      letter-spacing: 0.08em !important;
    }
    .pharmacy-spotlight-intro > div:first-child svg { flex-shrink: 0 !important; margin-top: 0.15rem !important; }
    .pharmacy-spotlight-intro h2 { font-size: 1.75rem !important; line-height: 1.3 !important; }
    .pharmacy-spotlight-intro p { line-height: 1.7 !important; }
    section.pharmacy-school-main { padding-top: 2rem !important; padding-bottom: 2rem !important; }
    .pharmacy-school-main > div > .rkdf-admission-banner:last-child { margin-bottom: 0 !important; }
    .pharmacy-school-main .rkdf-admission-banner {
      padding: 1.5rem 1.25rem !important;
      gap: 1.25rem !important;
    }
    .pharmacy-school-main .rkdf-admission-content { min-width: 0 !important; }
    .pharmacy-school-main .rkdf-admission-tag {
      align-items: flex-start !important;
      font-size: 0.68rem !important;
      letter-spacing: 0.06em !important;
      line-height: 1.5 !important;
      margin-bottom: 0.75rem !important;
    }
    .pharmacy-school-main .rkdf-admission-tag svg { flex-shrink: 0 !important; margin-top: 0.15rem !important; }
    .pharmacy-school-main .rkdf-admission-title {
      font-size: 1.85rem !important;
      line-height: 1.2 !important;
      margin-bottom: 0.85rem !important;
      overflow-wrap: anywhere !important;
    }
    .pharmacy-school-main .rkdf-prog-footer {
      flex-direction: column !important;
      align-items: stretch !important;
      gap: 0.85rem !important;
    }
    .pharmacy-school-main .rkdf-prog-footer .rkdf-apply-btn {
      justify-content: center !important;
      min-height: 44px !important;
      width: 100% !important;
      box-sizing: border-box !important;
    }
    .pharmacy-school-main .rkdf-spec-item {
      flex-direction: column !important;
      align-items: flex-start !important;
      gap: 0.6rem !important;
    }
    .pharmacy-school-main .rkdf-spec-name,
    .pharmacy-school-main .rkdf-spec-tag {
      flex: 0 1 auto !important;
      max-width: 100% !important;
      overflow-wrap: anywhere !important;
    }
    .pharmacy-school-main .rkdf-spec-tag {
      box-sizing: border-box !important;
      white-space: normal !important;
      text-align: left !important;
    }
    .pharmacy-breadcrumb {
      display: flex !important;
      flex-wrap: wrap !important;
      justify-content: center !important;
      gap: 0.4rem !important;
      padding: 0.65rem 0.75rem !important;
      border-radius: 16px !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
    }
    .pharmacy-breadcrumb > a,
    .pharmacy-breadcrumb > svg { flex-shrink: 0 !important; }
    .pharmacy-breadcrumb > span:last-child {
      flex-basis: 100% !important;
      line-height: 1.4 !important;
    }
  }
</style>
<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero pharmacy-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <!-- Breadcrumb Badge -->
    <div class="pharmacy-breadcrumb inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('departments/') ?>" class="hover:text-white transition">Faculties</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Pharmaceutical Sciences</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Institute of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Pharmaceutical Sciences</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Pharmacy Council of India (PCI) approved education combining advanced drug formulation laboratories, pharmacological research, and hospital clinical rotations.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('heart-pulse') ?> PCI Approved Institute
      </span>
      <span class="hero-pill">
        <?= lucide_icon('pill') ?> B.Pharm &amp; D.Pharm
      </span>
      <span class="hero-pill">
        <?= lucide_icon('microscope') ?> Central Instrument Room
      </span>
      <span class="hero-pill">
        <?= lucide_icon('leaf') ?> Herbal Botanical Garden
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Schools -->
<?php require_once dirname(__DIR__) . '/includes/schools_nav_tabs.php'; ?>

<!-- ==================== FACULTY SPOTLIGHT OVERVIEW ==================== -->
<section class="py-20 bg-surface pharmacy-school-main">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Executive Faculty Vision Spotlight -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5 pharmacy-spotlight-intro">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('heart-pulse', 'w-4 h-4 text-gold') ?> Healthcare Innovation &amp; Drug Discovery
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Advancing Healthcare Through Pharmaceutical Science
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The Institute of Pharmaceutical Sciences at RKDF University Ranchi is a center of excellence recognized by the Pharmacy Council of India (PCI). We integrate clinical chemistry, pharmacological testing, pharmaceutics, and phytomedicine to prepare compassionate, highly skilled healthcare professionals.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Our students gain deep experiential exposure in advanced instrumentation labs, sterile compounding units, and clinical hospital attachments across Jharkhand and nationwide healthcare networks.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>PCI Statutory Compliance</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>GMP Pilot Formulation Plant</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Hospital Clinical Rotations</span>
            </span>
          </div>
        </div>

        <!-- Official Faculty Seal Card -->
        <div class="gazette-seal-inner">
          <div>
            <div class="flex items-center justify-between pb-3 border-b border-white/15">
              <span class="text-xs uppercase tracking-wider text-gold font-bold">Statutory Approvals</span>
              <span class="text-[10px] uppercase tracking-wider text-white/70">PCI &amp; UGC Listed</span>
            </div>
            <div class="mt-4 space-y-2.5">
              <div class="flex items-start gap-4 text-xs text-white/90">
                <?= lucide_icon('check-circle', 'w-4 h-4 text-gold shrink-0 mt-0.5') ?>
                <span>Approved by Pharmacy Council of India (PCI)</span>
              </div>
              <div class="flex items-start gap-4 text-xs text-white/90">
                <?= lucide_icon('check-circle', 'w-4 h-4 text-gold shrink-0 mt-0.5') ?>
                <span>State Pharmacy Council Registration Eligibility</span>
              </div>
              <div class="flex items-start gap-4 text-xs text-white/90">
                <?= lucide_icon('check-circle', 'w-4 h-4 text-gold shrink-0 mt-0.5') ?>
                <span>Advanced Central Instrumentation Facility</span>
              </div>
            </div>
          </div>

          <div class="mt-6 pt-4 border-t border-white/15">
            <a href="<?= url('admissions/') ?>" class="w-full inline-flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-gold/90 transition shadow-lg">
              Apply For Pharmacy 2026 <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== ACADEMIC PROGRAMS OFFERED ==================== -->
    <div class="section-block" id="programs">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Curriculum Framework</span>
          <h3 class="rkdf-section-title">Academic Programs Offered</h3>
          <p class="rkdf-section-desc">PCI-standard curriculum with extensive laboratory practice and hospital internships.</p>
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

              <!-- Specializations / Disciplines -->
              <div class="mb-5">
                <div class="rkdf-spec-section-title">
                  <?= lucide_icon('layers', 'w-3.5 h-3.5 text-gold') ?>
                  <span>Core Disciplines &amp; Focus:</span>
                </div>
                <div class="rkdf-spec-grid">
                  <?php foreach ($prog['branches'] as $branch): ?>
                    <div class="rkdf-spec-item">
                      <span class="rkdf-spec-name">
                        <span class="rkdf-spec-dot"></span>
                        <?= e($branch['name']) ?>
                      </span>
                      <span class="rkdf-spec-tag">
                        <?= e($branch['tag']) ?>
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

    <!-- ==================== SPECIALIZED INFRASTRUCTURE & LABS ==================== -->
    <div class="section-block" id="facilities">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">PCI Standardized Facilities</span>
          <h3 class="rkdf-section-title">Specialized Pharmaceutical Laboratories</h3>
          <p class="rkdf-section-desc">Precision instrumentation, sterile pilot plant simulation, and botanical research facilities conforming to PCI &amp; GMP laboratory guidelines.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('heart-pulse', 'w-3.5 h-3.5 text-gold') ?>
          <span>PCI &amp; GMP Approved</span>
        </span>
      </div>

      <div class="rkdf-lab-grid">
        <?php foreach ($facilities as $idx => $fac): ?>
          <div class="rkdf-lab-card">
            <div>
              <div class="rkdf-lab-card-top">
                <div class="rkdf-lab-icon-box">
                  <?= lucide_icon($fac['icon'], 'w-5 h-5') ?>
                </div>
                <span class="rkdf-lab-index-tag">Lab 0<?= $idx + 1 ?></span>
              </div>
              <h4 class="rkdf-lab-title"><?= e($fac['name']) ?></h4>
              <p class="rkdf-lab-desc"><?= e($fac['desc']) ?></p>
            </div>
            <div class="rkdf-lab-specs-box">
              <div class="rkdf-lab-specs-header">
                <?= lucide_icon('sparkles', 'w-3 h-3 text-gold shrink-0') ?>
                <span>Technical Specifications:</span>
              </div>
              <p class="rkdf-lab-specs-text"><?= e($fac['specs']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== PHARMACEUTICAL RECRUITERS & PLACEMENTS ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('heart-pulse', 'w-4 h-4 text-gold') ?> Healthcare Alliances &amp; Placements
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Pharma &amp; Healthcare Placement Partners
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Graduates from our Institute of Pharmaceutical Sciences are recruited across premier multinational pharmaceutical manufacturers, clinical research organizations (CROs), and super-specialty hospital chains.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">PCI Compliant</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">300+</div>
              <div class="rkdf-corporate-stat-lbl">Hospital Attachments</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Registered Pharmacists</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Top Healthcare Partners</span>
            <span class="text-[10px] text-white/70 uppercase">MNCs &amp; Hospitals</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($recruiters as $rec): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($rec) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="placements.php" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
              <span>Explore Complete Placement Record</span>
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
          Ready to Start Your Pharmacy Career?
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for PCI-approved B.Pharm, D.Pharm, and M.Pharm programs. State-of-the-art pharmacology laboratories, medicinal botanical garden, and hospital internships.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> PCI Statutory Registration
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Hospital Clinical Training
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Merit Scholarship Support
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
