<?php
/**
 * RKDF University — Faculty of Law & Legal Studies
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-law/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Law & Legal Studies — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Law at RKDF University Ranchi. BCI-approved BA LL.B (5-Year), BBA LL.B (5-Year), LL.B (3-Year), and LL.M programs with Moot Court and Legal Aid clinic.';

$programs = [
    [
        'category'    => 'Integrated 5-Year Law Degrees',
        'title'       => 'Integrated BA LL.B / BBA LL.B (Hons)',
        'duration'    => '5 Years · 10 Semesters',
        'badge'       => 'BCI Approved & Recognized',
        'icon'        => 'scale',
        'description' => 'Comprehensive dual-degree programs fusing humanities/business management with deep constitutional, criminal, corporate, and civil jurisprudence.',
        'branches'    => [
            ['name' => 'BA LL.B (5-Year Integrated Degree)',   'tag' => 'Constitutional & Criminal'],
            ['name' => 'BBA LL.B (5-Year Integrated Degree)',  'tag' => 'Corporate & Commercial'],
        ],
        'eligibility' => '10+2 in any stream from a recognized board with minimum 45% marks (40% for SC/ST categories) or valid CLAT / LSAT / University test score.'
    ],
    [
        'category'    => 'Graduate & Postgraduate Law',
        'title'       => 'LL.B (3-Year) & Master of Laws (LL.M)',
        'duration'    => '3 Years / 2 Years',
        'badge'       => 'Professional Advocacy',
        'icon'        => 'landmark',
        'description' => 'Rigorous legal studies for graduates aiming for courtroom advocacy, corporate counsel roles, judicial services examinations, and legal research.',
        'branches'    => [
            ['name' => 'Bachelor of Laws (LL.B 3-Year Degree)', 'tag' => 'Courtroom Practice'],
            ['name' => 'Master of Laws (LL.M Postgraduate)',    'tag' => 'Advanced Specialization'],
        ],
        'eligibility' => 'For LL.B: Graduation in any discipline with min 45% marks. For LL.M: Valid LL.B degree from a BCI-recognized university.'
    ],
];

$facilities = [
    [
        'name'        => 'State-of-the-Art Moot Court Hall',
        'desc'        => 'Full-scale simulated courtroom complete with judges’ bench, witness box, and acoustic audio systems for national moot court competitions.',
        'icon'        => 'landmark',
        'specs'       => 'Judicial simulation, appellate advocacy training, mock trials.'
    ],
    [
        'name'        => 'Free Legal Aid & Counseling Clinic',
        'desc'        => 'Community-focused clinic enabling law students to handle real pro-bono cases, public interest matters, and rural legal literacy programs.',
        'icon'        => 'heart-handshake',
        'specs'       => 'Pro-bono client counseling, ADR mediation, Lok Adalat participation.'
    ],
    [
        'name'        => 'Comprehensive Law Library & Databases',
        'desc'        => 'Rich collection of supreme court reports, international journals, Bare Acts, and 24/7 digital subscriptions to SCC Online and Manupatra.',
        'icon'        => 'book-open',
        'specs'       => 'SCC Online, AIR, LexisNexis, Manupatra digital terminals.'
    ],
    [
        'name'        => 'Judicial Services & Bar Mentorship Cell',
        'desc'        => 'Specialized preparatory guidance for State Judicial Services exams, Civil Judge exams, and All India Bar Examination (AIBE).',
        'icon'        => 'award',
        'specs'       => 'Retired judges guest lectures, high court internship placements.'
    ],
];

$law_partners = [
    'Amarchand Mangaldas', 'AZB & Partners', 'Trilegal', 'Khaitan & Co', 
    'Luthra & Luthra', 'J. Sagar Associates', 'Bar Council of India', 'High Court of Jharkhand', 'Legal Aid Authority'
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
      <span class="text-white/90">Law &amp; Legal Studies</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of Law &amp; Legal <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Studies</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Transforming legal education into justice education with clinical advocacy, Moot Court trials, and Bar Council of India accredited degree programs.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('scale') ?> Bar Council of India Approved
      </span>
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> Dedicated Moot Court
      </span>
      <span class="hero-pill">
        <?= lucide_icon('book-open') ?> BA LL.B / BBA LL.B / LL.M
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> Free Legal Aid Clinic
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
            <?= lucide_icon('scale', 'w-4 h-4 text-gold') ?> Constitutional Integrity &amp; Justice
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Advancing Justice, Advocacy &amp; Legal Excellence
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            Law is the vital pillar of social order, constitutional democracy, and human rights. The School of Law at RKDF University works toward the deep dissemination of legal knowledge and its role in national development, ensuring students develop sharp analytical skills to solve real-world problems from a legal perspective.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Our mission is to shape legal education as genuine justice education—functioning as an instrument of social, economic, and constitutional change through clinical advocacy, mooting competitions, and judicial internships.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('scale') ?>
              <span>Clinical Legal Education</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('landmark') ?>
              <span>Courtroom Trial Rigor</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Bar Council of India Approved</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Legal Secretariat
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Excellence in Law</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Empowering advocates, judges, and corporate legal counsels through experiential mooting and judicial internships.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">BCI</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Statutory Approval</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Moot Court Rigor</div>
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
          <h3 class="rkdf-section-title">Law Programs Offered</h3>
          <p class="rkdf-section-desc">Bar Council of India (BCI) recognized legal programs with intensive moot court training.</p>
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

              <!-- Programs / Branches List -->
              <div class="mb-5">
                <div class="rkdf-spec-section-title">
                  <?= lucide_icon('layers', 'w-3.5 h-3.5 text-gold') ?>
                  <span>Available Programs:</span>
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

    <!-- ==================== CLINICAL INFRASTRUCTURE ==================== -->
    <div class="section-block" id="facilities">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Clinical Learning Infrastructure</span>
          <h3 class="rkdf-section-title">Specialized Legal Facilities</h3>
          <p class="rkdf-section-desc">Moot court chambers, clinical legal aid clinic, and extensive digital law library supporting experiential advocacy.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('scale', 'w-3.5 h-3.5 text-gold') ?>
          <span>Moot Courts &amp; Legal Aid</span>
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
                <span class="rkdf-lab-index-tag">Facility 0<?= $idx + 1 ?></span>
              </div>
              <h4 class="rkdf-lab-title"><?= e($fac['name']) ?></h4>
              <p class="rkdf-lab-desc"><?= e($fac['desc']) ?></p>
            </div>
            <div class="rkdf-lab-specs-box">
              <div class="rkdf-lab-specs-header">
                <?= lucide_icon('sparkles', 'w-3 h-3 text-gold shrink-0') ?>
                <span>Key Highlights:</span>
              </div>
              <p class="rkdf-lab-specs-text"><?= e($fac['specs']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== LEGAL ALLIANCES & JUDICIAL INTERNSHIPS ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('scale', 'w-4 h-4 text-gold') ?> Judicial Internships &amp; Placements
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Legal Alliances &amp; Judicial Clerkships
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Our Faculty of Law coordinates dedicated internships under senior High Court advocates, national law firms, corporate legal secretariats, and State Legal Services Authorities.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">BCI Approved</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">150+</div>
              <div class="rkdf-corporate-stat-lbl">Judicial Internships</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Moot Court Trials</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Top Law Firms &amp; Chambers</span>
            <span class="text-[10px] text-white/70 uppercase">Courts &amp; Firms</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($law_partners as $firm): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($firm) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="placements.php" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
              <span>Explore Legal Placement Records</span>
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
          Begin Your Legal Career at RKDF University
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for BCI-approved BA LL.B, BBA LL.B, LL.B, and LL.M programs. Complete legal aid clinical exposure and judicial clerkship guidance.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Bar Council Compliance
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Moot Court Advocacy
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Judicial Mentorship
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
