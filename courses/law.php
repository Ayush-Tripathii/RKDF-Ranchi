<?php
/**
 * RKDF University — Law Programs (LL.B, B.A. LL.B & BBA LL.B)
 * Content Source: https://rkdfuniversity.org/courses/law/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Law Programs | BCI Approved LL.B, B.A. LL.B & BBA LL.B — ' . SITE_NAME;
$page_meta_desc = 'Explore Bar Council of India (BCI) approved Law programs at RKDF University Ranchi: 3-Year LL.B, 5-Year Integrated B.A. LL.B & BBA LL.B with high-tech Moot Court advocacy.';

$law_programs = [
    [
        'title'       => 'B.A. LL.B (Honours)',
        'badge'       => '5 Years • Integrated Law',
        'icon'        => 'scale',
        'desc'        => 'Integrates liberal arts disciplines (Political Science, Sociology, History) with Constitutional Law, Criminal Jurisprudence, Cyber Law, and International Human Rights.',
        'features'    => [
            'Regular Moot Court Debates & High Court Trial Simulations',
            'Compulsory High Court & Supreme Court Senior Advocate Clerkships',
            'Participation in District Legal Aid Camps & Lok Adalat Hearings'
        ],
        'duration'    => '5 Years (10 Sems)',
        'eligibility' => '10+2 Any Stream (45%+)'
    ],
    [
        'title'       => 'BBA LL.B (Honours)',
        'badge'       => '5 Years • Corporate Law',
        'icon'        => 'briefcase',
        'desc'        => 'Tailored for corporate legal counsels, merging corporate management principles, financial accounting, and Mergers & Acquisitions with Company Law and Intellectual Property Rights (IPR).',
        'features'    => [
            'Corporate Contract Drafting, IPR Filings & Tax Litigation',
            'Internships with Tier-1 Corporate Law Firms & MNC Legal Cells',
            'Arbitration, Conciliation & ADR Alternative Dispute Resolution'
        ],
        'duration'    => '5 Years (10 Sems)',
        'eligibility' => '10+2 Any Stream (45%+)'
    ],
    [
        'title'       => 'Bachelor of Laws (LL.B)',
        'badge'       => '3 Years • Graduate Entry',
        'icon'        => 'book-open',
        'desc'        => 'Three-year professional degree for university graduates seeking Bar Council advocate licensure, focusing on Civil Procedure Code (CPC), CrPC, Evidence Act, and Drafting.',
        'features'    => [
            'Direct Eligibility for State Bar Council Licensure Examination',
            'Intensive Civil & Criminal Pleadings and Conveyancing Practicals',
            'Moot Court Clinical Advocacy & Judicial Services (JSE) Guidance'
        ],
        'duration'    => '3 Years (6 Sems)',
        'eligibility' => 'Graduation in Any Stream (45%+)'
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
      <span class="text-white/90">Law Programs</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Legal Studies &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Advocacy Programs</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Cultivating visionary legal practitioners, corporate legal counsels, and judicial officers through rigorous jurisprudence, high-court moot court simulations, and free legal aid clinics.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('scale') ?> Bar Council of India (BCI) Approved
      </span>
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> Air-Conditioned High-Tech Moot Court
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> Bar Council Advocate Licensure
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
            <?= lucide_icon('scale', 'w-4 h-4 text-gold') ?> Faculty of Legal Studies
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Upholding Justice Through Rigorous Legal Education
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The School of Law at RKDF University Ranchi delivers BCI-approved programs formulating future judges, corporate counsels, and constitutional advocates. The curriculum blends deep theoretical jurisprudence with procedural mastery.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            With regular moot court competitions, legal drafting workshops, mandatory court internships, and a dedicated Legal Aid Clinic serving marginalized communities, our law scholars develop real trial acumen.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>BCI Statutory Recognition</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Judicial Services Coaching</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>High Court Advocate Internships</span>
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
              <?= lucide_icon('scale', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Law Degrees</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Approved 5-Year Integrated & 3-Year LL.B pathways qualifying graduates for Bar registration and judicial civil services.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">BCI</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Approved Reg.</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">5 &amp; 3 Yrs</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Flexible Entry</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== PROGRAMS GRID ==================== -->
    <div class="section-block" id="programs">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Law Courses</span>
          <h3 class="rkdf-section-title">Available Legal Programs</h3>
          <p class="rkdf-section-desc">Choose from Bar Council of India approved integrated and graduate law programs.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for Law 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($law_programs as $prog): ?>
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

    <!-- ==================== LEGAL ADVANTAGE PILLARS ==================== -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Advocacy Excellence</span>
          <h3 class="rkdf-section-title">The Legal Edge at RKDF</h3>
          <p class="rkdf-section-desc">Why aspiring advocates and judges choose RKDF University Ranchi for legal education.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('landmark') ?>
          </div>
          <h4 class="pillar-title">High-Tech Moot Court Room</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Fully air-conditioned replica courtroom with judge's bench, witness stand, and acoustic audio systems for realistic trial advocacy training.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('scale') ?>
          </div>
          <h4 class="pillar-title">Legal Aid &amp; Lok Adalat Clinic</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Free legal aid cell providing real pro-bono consultation, legal literacy drives, and ADR dispute resolutions across rural Jharkhand.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('award') ?>
          </div>
          <h4 class="pillar-title">Judicial Services (PCS-J) Guidance</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Dedicated weekend preparation classes led by retired judicial officers covering Preliminary &amp; Main examination answer writing techniques.
          </p>
        </div>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Law Admissions Open for 2026–27 Cycle</span>
        </div>
        <h3 class="rkdf-admission-title">
          Begin Your Journey in Justice &amp; Legal Advocacy
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for BCI approved law degrees at RKDF University Ranchi. State scholarship facilities applicable.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for Law</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Law Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
