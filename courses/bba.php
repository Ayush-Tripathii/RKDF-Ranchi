<?php
/**
 * RKDF University — Bachelor of Business Administration (BBA) Programs
 * Content Source: https://rkdfuniversity.org/courses/bba/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'BBA Programs | Faculty of Management Studies — ' . SITE_NAME;
$page_meta_desc = 'Join the 3-Year BBA program at RKDF University Ranchi. Specializations in Marketing, Finance, HR, Digital Business & Analytics with corporate internships and 100% placement assistance.';

$bba_specializations = [
    [
        'title'       => 'Marketing & Digital Strategy',
        'badge'       => '3 Years • Dual Specialization',
        'icon'        => 'target',
        'desc'        => 'Consumer behavior analysis, brand positioning, search engine marketing, omnichannel retail distribution, and viral social media campaign strategies.',
        'features'    => [
            'Digital Marketing & Google Analytics Live Projects',
            'Retail Merchandising & Product Launch Simulations',
            'Summer Internship Programs with FMCG & E-Commerce Brands'
        ],
        'duration'    => '3 Years',
        'eligibility' => '10+2 Any Stream (45%+)'
    ],
    [
        'title'       => 'Financial & Investment Analysis',
        'badge'       => '3 Years • Dual Specialization',
        'icon'        => 'trending-up',
        'desc'        => 'Corporate financial planning, security analysis, portfolio management, stock market dynamics, commercial banking operations, and FinTech tools.',
        'features'    => [
            'Financial Modeling in Excel & Advanced Spreadsheets',
            'Stock Trading Sandbox & Mutual Fund Analysis',
            'Taxation Planning & Ind AS Regulatory Compliances'
        ],
        'duration'    => '3 Years',
        'eligibility' => '10+2 Any Stream (45%+)'
    ],
    [
        'title'       => 'Human Resources & Analytics',
        'badge'       => '3 Years • Dual Specialization',
        'icon'        => 'users',
        'desc'        => 'Talent acquisition, corporate labor laws, organizational psychology, HR metrics, compensation structuring, and workplace diversity leadership.',
        'features'    => [
            'HR Analytics & People Operations Simulation Tools',
            'Industrial Relations & Labor Dispute Case Studies',
            'Corporate Recruitment Drives & Mock HR Interviews'
        ],
        'duration'    => '3 Years',
        'eligibility' => '10+2 Any Stream (45%+)'
    ],
    [
        'title'       => 'IT & Digital Business Management',
        'badge'       => '3 Years • Dual Specialization',
        'icon'        => 'laptop',
        'desc'        => 'Enterprise resource planning (ERP), business analytics, e-commerce architectures, database administration, and digital product lifecycle management.',
        'features'    => [
            'Business Intelligence Tools: Tableau & PowerBI Sandbox',
            'Cloud-Based CRM & Enterprise Resource Workflows',
            'Digital Transformation Capstone Projects'
        ],
        'duration'    => '3 Years',
        'eligibility' => '10+2 Any Stream (45%+)'
    ],
    [
        'title'       => 'Supply Chain & Logistics Management',
        'badge'       => '3 Years • Dual Specialization',
        'icon'        => 'truck',
        'desc'        => 'Global procurement, warehouse operations, inventory optimization, multimodal freight management, and export-import documentation.',
        'features'    => [
            'Logistics Hub Field Visits & Port Clearance Training',
            'Supply Chain Risk Modeling & ERP Supply Modules',
            'Industrial Internships with 3PL & Courier Conglomerates'
        ],
        'duration'    => '3 Years',
        'eligibility' => '10+2 Any Stream (45%+)'
    ],
    [
        'title'       => 'BBA in Entrepreneurship & Family Business',
        'badge'       => '3 Years • Incubation Track',
        'icon'        => 'briefcase',
        'desc'        => 'Business Model Canvas formulation, venture capital pitching, prototype validation, MSME startup incentives, and family business scaling.',
        'features'    => [
            'Seed Capital Pitching with Angel Investor Panels',
            'Mentorship from Successful Industrial Entrepreneurs',
            'University Incubation Centre Space & Legal Filing Aid'
        ],
        'duration'    => '3 Years',
        'eligibility' => '10+2 Any Stream (45%+)'
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
      <span class="text-white/90">BBA</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Bachelor of Business <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Administration (BBA)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Develop strategic leadership, analytical acumen, marketing mastery, and financial intelligence through corporate internships, case study pedagogy, and global dual specializations.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> Dual Specialization Options
      </span>
      <span class="hero-pill">
        <?= lucide_icon('trending-up') ?> 150+ Corporate Hiring Partners
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> Summer Internship Program (SIP)
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
            <?= lucide_icon('briefcase', 'w-4 h-4 text-gold') ?> Faculty of Management Studies
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Cultivating Executive Leaders &amp; Dynamic Entrepreneurs
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The BBA degree at RKDF University Ranchi delivers a robust blend of management theory and real-world corporate execution. Students gain practical acumen through business simulations, live case studies, and corporate masterclasses.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            With mandatory summer internships across banking, FMCG, retail, and tech enterprises, students build the industry network and operational skills demanded by global conglomerates.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>Case Study Methodology</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Dual Specialization Choice</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Summer Corporate Internships</span>
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
              <?= lucide_icon('briefcase', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">BBA Management</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Curriculum formulated under UGC NEP 2020 guidelines with DigiLocker Academic Bank of Credits (ABC) integration.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">3 Years</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">6 Semesters</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">45% 10+2</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Any Stream (40% Res.)</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== SPECIALIZATIONS GRID ==================== -->
    <div class="section-block" id="specializations">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Management Verticals</span>
          <h3 class="rkdf-section-title">BBA Elective Specializations</h3>
          <p class="rkdf-section-desc">Choose from high-growth corporate streams designed for high managerial employability.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for BBA 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($bba_specializations as $prog): ?>
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

    <!-- ==================== CORPORATE ADVANTAGE PILLARS ==================== -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Management Excellence</span>
          <h3 class="rkdf-section-title">The RKDF Management Advantage</h3>
          <p class="rkdf-section-desc">Why aspiring business leaders choose RKDF University Ranchi for executive education.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('target') ?>
          </div>
          <h4 class="pillar-title">100% Internship Placement</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Guaranteed 8-week corporate summer internship program (SIP) with stipends across leading financial institutions and consumer brands.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('briefcase') ?>
          </div>
          <h4 class="pillar-title">Corporate Leadership Mentorship</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Weekly executive masterclasses and CXO guest lectures delivered by senior leaders from Fortune 500 corporations and start-up founders.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('award') ?>
          </div>
          <h4 class="pillar-title">Pre-Placement Training &amp; Soft Skills</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Specialized Language Lab training, group discussion prep, psychometric testing, and resume optimization by professional HR consultants.
          </p>
        </div>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>BBA Admissions Open for 2026–27 Cycle</span>
        </div>
        <h3 class="rkdf-admission-title">
          Step into Corporate Leadership with BBA
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for BBA programs at RKDF University Ranchi. State scholarship facilities and installment fee options available.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for BBA</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Management Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
