<?php
/**
 * RKDF University — Faculty of Management Studies & Commerce
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-management/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Management Studies & Commerce — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Management Studies & Commerce at RKDF University Ranchi. UGC recognized MBA (Dual Specialization), BBA, B.Com, and Executive Leadership Programs.';

$programs = [
    [
        'category'    => 'Postgraduate Management',
        'title'       => 'Master of Business Administration (MBA)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Dual Specialization',
        'icon'        => 'briefcase',
        'description' => 'Flagship postgraduate program designed for future C-suite executives, combining strategic consulting, financial modelling, and case-study pedagogy.',
        'branches'    => [
            ['name' => 'Marketing Management',                'tag' => 'Brand & Digital Growth'],
            ['name' => 'Financial Management',                'tag' => 'FinTech & Corporate Finance'],
            ['name' => 'Human Resource Management (HRM)',     'tag' => 'Talent Analytics & OD'],
            ['name' => 'Information Technology (IT)',         'tag' => 'Data-Driven Management'],
            ['name' => 'Operations & Supply Chain Management', 'tag' => 'Logistics & Lean Systems'],
        ],
        'eligibility' => 'Bachelor’s degree in any discipline from a recognized University with min 50% marks (45% for reserved categories) or valid CAT/MAT/CMAT/University Entrance score.'
    ],
    [
        'category'    => 'Undergraduate Management',
        'title'       => 'Bachelor of Business Administration (BBA)',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Industry Immersion',
        'icon'        => 'trending-up',
        'description' => 'Foundational business degree imparting entrepreneurial acumen, digital marketing, corporate finance, and business communication.',
        'branches'    => [
            ['name' => 'General Business Management',        'tag' => 'Core Leadership'],
            ['name' => 'BBA in Banking & Insurance',         'tag' => 'Financial Services'],
            ['name' => 'BBA in Digital Marketing & Analytics', 'tag' => 'Growth Hacking'],
            ['name' => 'BBA in Retail & E-Commerce',         'tag' => 'Supply & Merchandising'],
        ],
        'eligibility' => '10+2 / Intermediate in any stream (Science, Commerce, Arts) with min 45% aggregate marks (40% for reserved categories).'
    ],
    [
        'category'    => 'Commerce & Accounting',
        'title'       => 'Bachelor & Master of Commerce (B.Com / M.Com)',
        'duration'    => '3 Years (UG) / 2 Years (PG)',
        'badge'       => 'CA / CS / CFA Aligned',
        'icon'        => 'file-spreadsheet',
        'description' => 'Advanced financial accounting, taxation, corporate laws, auditing, and corporate governance for high-growth financial sectors.',
        'branches'    => [
            ['name' => 'B.Com (Honours) in Accounting & Finance', 'tag' => 'Corporate Taxation'],
            ['name' => 'B.Com (Honours) in Banking & Insurance',  'tag' => 'FinTech & Compliance'],
            ['name' => 'Master of Commerce (M.Com)',              'tag' => 'Advanced Accounting & Research'],
        ],
        'eligibility' => '10+2 with Commerce/Mathematics for B.Com; B.Com / BBA from recognized University for M.Com.'
    ],
];

$facilities = [
    [
        'name'        => 'Business Analytics & FinTech Lab',
        'desc'        => 'Equipped with statistical analytics software, Tableau, PowerBI, SPSS, and Python financial modelling tools.',
        'icon'        => 'bar-chart-3',
        'specs'       => 'High-speed gigabit terminals, live stock market ticker simulator, Bloomberg access.'
    ],
    [
        'name'        => 'Executive Boardroom & Simulation Suite',
        'desc'        => 'A corporate boardroom setup for case-study presentations, debate rounds, mock corporate negotiations, and press briefings.',
        'icon'        => 'users-2',
        'specs'       => 'Acoustically treated room, multi-camera AV recording, hybrid video conference hub.'
    ],
    [
        'name'        => 'Entrepreneurship & Incubation Center',
        'desc'        => 'Dedicated startup incubator supporting student ventures with seed mentoring, legal guidance, and angel investor pitch meets.',
        'icon'        => 'lightbulb',
        'specs'       => 'Co-working workstations, patent filing support, venture mentorship network.'
    ],
    [
        'name'        => 'Management Resource & Case Library',
        'desc'        => 'Comprehensive repository of Harvard Business School case studies, national business journals, EBSCOhost, and PROQUEST databases.',
        'icon'        => 'book-open',
        'specs'       => '15,000+ volumes, 100+ national & international journals, digital kiosk network.'
    ],
];

$recruiters = [
    'Deloitte', 'HDFC Bank', 'ICICI Bank', 'KPMG', 'Reliance Retail', 
    'Axis Bank', 'Tata Motors', 'EY Global', 'Bandhan Bank', 'Aditya Birla Group'
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
      <span class="text-white/90">Management Studies</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of Management Studies &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Commerce</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Shaping corporate executives, venture entrepreneurs, and financial leaders through Harvard case pedagogy, boardroom simulations, and live corporate immersion.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> MBA Dual Specialization
      </span>
      <span class="hero-pill">
        <?= lucide_icon('trending-up') ?> BBA &amp; B.Com (Hons)
      </span>
      <span class="hero-pill">
        <?= lucide_icon('bar-chart-3') ?> FinTech &amp; Analytics Lab
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> 100% Placement Linkages
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
            <?= lucide_icon('briefcase', 'w-4 h-4 text-gold') ?> Strategic Leadership &amp; Entrepreneurship
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Cultivating Future C-Suite Leaders &amp; Business Innovators
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The School of Management Studies at RKDF University Ranchi provides dynamic developmental pathways for aspiring business leaders and entrepreneurs. Our pedagogy combines theoretical rigour with experiential case analyses, leadership conclaves, and live corporate mentorship.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            We empower students to master complex business environments across finance, marketing, human resources, supply chain, and data-driven business intelligence.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>Case-Study Pedagogy</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Dual Specialization Advantage</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Executive Mentorship</span>
            </span>
          </div>
        </div>

        <!-- Official Faculty Seal Card -->
        <div class="gazette-seal-inner">
          <div>
            <div class="flex items-center justify-between pb-3 border-b border-white/15">
              <span class="text-xs uppercase tracking-wider text-gold font-bold">Academic Authority</span>
              <span class="text-[10px] uppercase tracking-wider text-white/70">UGC &amp; AIU Listed</span>
            </div>
            <div class="mt-4 space-y-2.5">
              <div class="flex items-start gap-2.5 text-xs text-white/90">
                <?= lucide_icon('check-circle', 'w-4 h-4 text-gold shrink-0 mt-0.5') ?>
                <span>Recognized by UGC under Section 2(f) of 1956</span>
              </div>
              <div class="flex items-start gap-2.5 text-xs text-white/90">
                <?= lucide_icon('check-circle', 'w-4 h-4 text-gold shrink-0 mt-0.5') ?>
                <span>Integrated Industry Internships (60+ Days)</span>
              </div>
              <div class="flex items-start gap-2.5 text-xs text-white/90">
                <?= lucide_icon('check-circle', 'w-4 h-4 text-gold shrink-0 mt-0.5') ?>
                <span>Active MoUs with Top Corporate Chambers</span>
              </div>
            </div>
          </div>

          <div class="mt-6 pt-4 border-t border-white/15">
            <a href="<?= url('admissions/') ?>" class="w-full inline-flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-gold/90 transition shadow-lg">
              Apply For Management 2026 <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
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
          <p class="rkdf-section-desc">Industry-aligned management and commerce curricula with choice-based credit system (CBCS).</p>
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
                  <span>Specializations Offered:</span>
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
          <span class="rkdf-section-tag">Business &amp; Analytics Suites</span>
          <h3 class="rkdf-section-title">Specialized Management Facilities</h3>
          <p class="rkdf-section-desc">World-class experiential facilities for data analytics, fintech simulations, and corporate boardroom leadership.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('bar-chart-3', 'w-3.5 h-3.5 text-gold') ?>
          <span>Analytics &amp; Incubation</span>
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
                <span class="rkdf-lab-index-tag">Suite 0<?= $idx + 1 ?></span>
              </div>
              <h4 class="rkdf-lab-title"><?= e($fac['name']) ?></h4>
              <p class="rkdf-lab-desc"><?= e($fac['desc']) ?></p>
            </div>
            <div class="rkdf-lab-specs-box">
              <div class="rkdf-lab-specs-header">
                <?= lucide_icon('sparkles', 'w-3 h-3 text-gold shrink-0') ?>
                <span>Key Specifications:</span>
              </div>
              <p class="rkdf-lab-specs-text"><?= e($fac['specs']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== CORPORATE PLACEMENT LINKAGES ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('briefcase', 'w-4 h-4 text-gold') ?> Corporate Alliances &amp; Placements
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Top Corporate Recruiters &amp; Industry Partners
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Our management graduates are actively recruited across premier banking institutions, strategy consulting firms, FMCG conglomerates, and emerging FinTech enterprises.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Placement Support</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">450+</div>
              <div class="rkdf-corporate-stat-lbl">Corporate Recruiters</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">₹10 LPA</div>
              <div class="rkdf-corporate-stat-lbl">Top MBA CTC</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Top Recruiting Partners</span>
            <span class="text-[10px] text-white/70 uppercase">Banking &amp; Consulting</span>
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
              <span>Explore Full Placement Record</span>
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
          Ready to Lead in Business &amp; Finance?
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for MBA Dual Specialization, BBA, and B.Com (Hons) programs. Merit scholarships and corporate mentorship tracks available for ambitious candidates.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Dual MBA Specialization
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Case Study Mentorship
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> 100% Placement Guidance
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
