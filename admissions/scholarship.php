<?php
/**
 * RKDF University — Scholarships & Financial Aid
 * Content Source: https://rkdfuniversity.org/admissions/scholarship/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Scholarships & Financial Aid 2026–27 | ' . SITE_NAME;
$page_meta_desc = 'Explore scholarships at RKDF University Ranchi: 100%, 50%, 25% Merit Waivers, E-Kalyan Jharkhand, National Scholarship Portal (NSP) & SC/ST/OBC/Female student concessions.';

$scholarship_slabs = [
    [
        'title'       => '100% Tuition Fee Waiver',
        'badge'       => 'Merit Excellence Award',
        'icon'        => 'award',
        'criteria'    => '90%+ Aggregate Marks in 10+2 / Graduation',
        'desc'        => 'Conferred to state board, CBSE, and ICSE rankers scoring 90% and above in qualifying examinations across all academic departments.',
        'benefited'   => '20+ Students Benefited',
        'applicable'  => 'All UG & PG Programs'
    ],
    [
        'title'       => '50% Tuition Fee Waiver',
        'badge'       => 'Merit Distinction Award',
        'icon'        => 'sparkles',
        'criteria'    => '80% – 89.9% in Qualifying Examinations',
        'desc'        => 'Awarded to candidates demonstrating high academic consistency scoring between 80% and 89.9% in their board or degree examinations.',
        'benefited'   => '39+ Students Benefited',
        'applicable'  => 'All UG & PG Programs'
    ],
    [
        'title'       => '25% Tuition Fee Waiver',
        'badge'       => 'Merit Achievement Award',
        'icon'        => 'calculator',
        'criteria'    => '70% – 79.9% in Qualifying Examinations',
        'desc'        => 'Awarded to candidates scoring between 70% and 79.9% in qualifying examinations to support continuous higher education pursuit.',
        'benefited'   => '82+ Students Benefited',
        'applicable'  => 'All UG & PG Programs'
    ],
];

$govt_portals = [
    [
        'title'       => 'E-Kalyan Jharkhand Portal',
        'authority'   => 'Welfare Dept., Govt. of Jharkhand',
        'badge'       => 'State Welfare DBT Portal',
        'icon'        => 'landmark',
        'url'         => 'https://ekalyan-cgg-gov-in.translate.goog/?_x_tr_sl=en&_x_tr_tl=hi&_x_tr_hl=hi&_x_tr_pto=tc',
        'btn_label'   => 'Access E-Kalyan Portal',
        'desc'        => 'Official post-matric fee reimbursement and maintenance allowance portal for domicile students of Jharkhand State pursuing higher professional degrees.',
        'features'    => [
            '100% Tuition Fee & Maintenance Allowance Assistance',
            'SC, ST, and OBC Domicile Category Eligibility',
            'Direct University Nodal Officer Verification Desk',
            'Direct Benefit Transfer (DBT) into Student Bank A/C'
        ],
        'stats'       => [
            ['lbl' => 'Beneficiary Scope', 'val' => 'SC / ST / OBC Jharkhand Domicile'],
            ['lbl' => 'Income Ceiling', 'val' => 'Up to ₹2.50 Lakhs / Annum']
        ]
    ],
    [
        'title'       => 'National Scholarship Portal (NSP 2.0)',
        'authority'   => 'Ministry of Education & MeitY, Govt. of India',
        'badge'       => 'Central Govt. DBT Portal',
        'icon'        => 'globe',
        'url'         => 'https://scholarships.gov.in/',
        'btn_label'   => 'Access National Portal (NSP)',
        'desc'        => 'Central single-window portal hosting Central Sector Schemes, Ministry of Minority Affairs Scholarships, and AICTE Pragati / Saksham special technical grants.',
        'features'    => [
            'Central Sector Scheme for University Merit Scholars',
            'Minority Affairs & AICTE Pragati / Saksham Grants',
            'Aadhaar-Linked Biometric Authentication Support',
            'Pan-India Common Online Application Platform'
        ],
        'stats'       => [
            ['lbl' => 'Disbursal Mode', 'val' => 'Direct PFMS / Aadhaar DBT Transfer'],
            ['lbl' => 'Facilitation', 'val' => 'Single-Window University Nodal Desk']
        ]
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
      <a href="<?= url('admissions/') ?>" class="hover:text-white transition">Admissions</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Scholarships &amp; Aid</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Scholarships &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Financial Aid</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Ensuring financial constraints never hinder deserving minds from pursuing higher education through merit awards, state government welfare schemes, and female student concessions.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('award') ?> Up to 100% Merit Tuition Waivers
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> E-Kalyan Jharkhand DBT Portal
      </span>
      <span class="hero-pill">
        <?= lucide_icon('sparkles') ?> SC/ST/OBC &amp; Female Student Quotas
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Admissions -->
<?php require_once dirname(__DIR__) . '/includes/admissions_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Key Metrics Banner -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">20+</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">100% Tuition Waivers</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">39+</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">50% Tuition Waivers</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">82+</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">25% Tuition Waivers</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">+5%</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Semester Topper Bonus</span>
      </div>
    </div>

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('award', 'w-4 h-4 text-gold') ?> Financial Inclusion Directorate
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Empowering Merit, Eliminating Financial Barriers
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            RKDF University Ranchi is committed to making quality higher education accessible to every deserving student. Our comprehensive scholarship framework encompasses institutional merit waivers, government welfare scholarships, and special female student stipends.
          </p>
          <!-- Statutory Quota & Concession Notice Card -->
          <div class="statutory-quota-card">
            <div class="statutory-quota-icon">
              <?= lucide_icon('shield-check', 'w-5 h-5') ?>
            </div>
            <div class="statutory-quota-content">
              <div class="statutory-quota-header">
                <span>कल्याणकारी शुल्क छूट</span>
                <span style="opacity: 0.4;">•</span>
                <span style="color: rgba(255, 255, 255, 0.75); font-weight: 400; text-transform: none;">Statutory Concession Policy</span>
              </div>
              <p class="statutory-quota-body">
                अनुसूचित जाति (SC), अनुसूचित जनजाति (ST), अन्य पिछड़ा वर्ग (OBC) एवं अल्पसंख्यक कोटे के अन्तर्गत छात्र-छात्राओं के प्रवेश में नियमानुसार विशेष शुल्क छूट प्रदान की जाती है।
              </p>
            </div>
          </div>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>Direct Bank Transfer (DBT)</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Academic Excellence Bonus</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Single-Window Facilitation Cell</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Approved Portals
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Govt. Welfare Integration</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Fully verified integration with Central and State Government post-matric scholarship portals.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">E-Kalyan</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Jharkhand Portal</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">NSP Portal</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Govt. of India</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== MERIT SCHOLARSHIP SLABS ==================== -->
    <div class="section-block" id="scholarship-slabs">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Institutional Awards</span>
          <h3 class="rkdf-section-title">Merit-Based Scholarship Slabs</h3>
          <p class="rkdf-section-desc">Awarded on the basis of qualifying 10+2 / Graduation percentages at the time of admission.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for Scholarship 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($scholarship_slabs as $slab): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($slab['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($slab['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($slab['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 text-xs font-semibold text-slate-700">
                  <span class="text-gold font-bold block mb-0.5">Eligibility Benchmark:</span>
                  <?= e($slab['criteria']) ?>
                </div>
                <p class="prog-spec-desc"><?= e($slab['desc']) ?></p>
              </div>

              <!-- Stats & CTA -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Record</span>
                    <span class="prog-spec-stat-val text-emerald-700"><?= e($slab['benefited']) ?></span>
                  </div>
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Coverage</span>
                    <span class="prog-spec-stat-val"><?= e($slab['applicable']) ?></span>
                  </div>
                </div>

                <a href="<?= url('admissions/') ?>" class="prog-spec-btn">
                  <span>Claim <?= e($slab['title']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== GOVERNMENT SCHOLARSHIP PORTALS ==================== -->
    <div class="section-block" id="government-portals">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('landmark', 'w-3.5 h-3.5') ?> Direct Benefit Transfer
          </span>
          <h3 class="rkdf-section-title">Government Scholarship Portals</h3>
          <p class="rkdf-section-desc">Statutory central and state government portals integrated with RKDF University Ranchi for direct scholarship disbursement.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($govt_portals as $portal): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('shield-check', 'w-3 h-3') ?>
                  <span><?= e($portal['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($portal['title']) ?></h4>
                <span class="text-xs text-white/70 block mt-1"><?= e($portal['authority']) ?></span>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($portal['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($portal['desc']) ?></p>

                <!-- Feature List -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($portal['features'] as $feat): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
                      <span><?= e($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & CTA -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <?php foreach ($portal['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <a href="<?= e($portal['url']) ?>" target="_blank" rel="noopener noreferrer" class="prog-spec-btn">
                  <span><?= e($portal['btn_label']) ?></span>
                  <?= lucide_icon('arrow-up-right', 'w-3.5 h-3.5') ?>
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
          <span>Scholarship Cell Support 2026–27</span>
        </div>
        <h3 class="rkdf-admission-title">
          Apply for Admission &amp; Claim Your Scholarship
        </h3>
        <p class="rkdf-admission-desc">
          Submit your qualifying marksheet copies and category certificates during online application to claim eligible concessions immediately.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply Online Now</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Scholarship Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
