<?php
/**
 * RKDF University — Faculty of Commerce
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-commerce/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Commerce — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Commerce at RKDF University Ranchi. Industry-aligned B.Com, B.Com Corporate & M.Com programs with dedicated Tally Prime, GST, Corporate Finance, and FinTech simulation laboratories.';


$programs = [
    [
        'category'    => 'Postgraduate Degrees (PG)',
        'title'       => 'Master of Commerce (M.Com)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Advanced Accounting & Taxation',
        'icon'        => 'receipt',
        'description' => 'Advanced postgraduate commerce curriculum focusing on corporate financial accounting, direct & indirect tax laws, corporate restructuring, forensic auditing, and capital market operations.',
        'branches'    => [
            ['name' => 'Corporate Financial Accounting',  'tag' => 'Ind AS & IFRS Standards'],
            ['name' => 'Direct & Indirect Taxation',       'tag' => 'GST & Corporate Tax'],
            ['name' => 'Banking & Financial Institutions', 'tag' => 'Risk & Credit Management'],
            ['name' => 'Corporate Governance & Auditing',  'tag' => 'Statutory Compliance'],
        ],
        'eligibility' => 'Bachelor of Commerce (B.Com / B.Com Hons) or BBA degree from a recognized University with at least 45% aggregate marks (40% for SC/ST/OBC).'
    ],
    [
        'category'    => 'Undergraduate Degrees (UG)',
        'title'       => 'Bachelor of Commerce (B.Com)',
        'duration'    => '3 / 4 Years (NEP)',
        'badge'       => 'Accounting & Finance Core',
        'icon'        => 'coins',
        'description' => 'Comprehensive undergraduate commerce education developing strong expertise in financial accounting, business economics, corporate mercantile law, and auditing.',
        'branches'    => [
            ['name' => 'Financial & Cost Accounting', 'tag' => 'Corporate Balance Sheets'],
            ['name' => 'Business Economics & Stats',   'tag' => 'Quantitative Decision Tools'],
            ['name' => 'Banking & Insurance Laws',     'tag' => 'Commercial Regulations'],
            ['name' => 'Company Law & Secretarial',    'tag' => 'Corporate Filing'],
        ],
        'eligibility' => 'Passed 10+2 / Intermediate examination with Commerce or Science/Arts with at least 45% aggregate marks (40% for reserved category).'
    ],
    [
        'category'    => 'Industry-Integrated UG',
        'title'       => 'B.Com Corporate (Industry Integrated)',
        'duration'    => '3 / 4 Years (NEP)',
        'badge'       => 'Corporate Track',
        'icon'        => 'briefcase',
        'description' => 'Co-engineered with accounting corporate firms, featuring computerized accounting on Tally Prime ERP, live GST return filing, corporate payroll simulations, and fast-track placement bootcamps.',
        'branches'    => [
            ['name' => 'Tally Prime ERP & Computerized Accounts', 'tag' => 'ERP Certification'],
            ['name' => 'GST & E-TDS Return Filing',                'tag' => 'Live Portal Simulations'],
            ['name' => 'Corporate Financial Management',           'tag' => 'Capital Budgeting & Valuation'],
            ['name' => 'Corporate Payroll & Compliance',          'tag' => 'PF, ESI & Labour Laws'],
        ],
        'eligibility' => 'Passed 10+2 with Commerce or allied subjects with minimum 50% marks (45% for SC/ST/OBC).'
    ],
    [
        'category'    => 'Doctoral Programs (Ph.D.)',
        'title'       => 'Doctor of Philosophy (Ph.D. in Commerce)',
        'duration'    => 'Min. 3 Years',
        'badge'       => 'UGC-NET / RET Track',
        'icon'        => 'microscope',
        'description' => 'Rigorous doctoral research in financial market integration, corporate taxation frameworks, banking efficiency, microfinance, and ESG corporate disclosures.',
        'branches'    => [
            ['name' => 'Ph.D. in Corporate Accounting & Finance', 'tag' => 'IFRS & Valuation'],
            ['name' => 'Ph.D. in Banking & Microfinance',         'tag' => 'Financial Inclusion'],
        ],
        'eligibility' => 'Master of Commerce (M.Com) or allied master degree with at least 55% marks (50% for SC/ST/OBC) and qualifying in University RET / UGC-NET.'
    ],
];

$labs = [
    [
        'name'        => 'Tally Prime & Computerized Accounting Lab',
        'desc'        => 'Dedicated computing suite loaded with Tally Prime Gold, multi-user ERP systems, and e-invoicing platforms for real-time ledger management, payroll processing, and audit reconciliation.',
        'icon'        => 'laptop',
        'specs'       => '60 High-End Terminals, Tally Prime Gold Multi-User Enterprise Licenses, ERP Suites.'
    ],
    [
        'name'        => 'FinTech & Stock Market Simulation Cell',
        'desc'        => 'Virtual trading floor and investment simulation environment tracking live NSE/BSE stock movements, portfolio risk analytics, and algorithmic trading models.',
        'icon'        => 'coins',
        'specs'       => 'Live Market Feeds, Virtual Trading Terminals, Technical Charting Software.'
    ],
    [
        'name'        => 'Taxation & GST Compliance Sandbox',
        'desc'        => 'Practical training module for preparing GST-1/3B filings, Income Tax return submissions (ITR-1 to 6), TDS calculations, and corporate e-assessments.',
        'icon'        => 'scale',
        'specs'       => 'Government Compliance Portal Sandbox, ITR & GST Filing Software Suites.'
    ],
    [
        'name'        => 'Corporate Financial Analytics Lab',
        'desc'        => 'Advanced business data workstation using Microsoft Excel Power Pivot, Power BI, and SPSS for econometric forecasting, budgeting, and corporate valuation.',
        'icon'        => 'layers',
        'specs'       => 'Advanced MS Excel Power BI Suites, Tableau Analytics, Econometric Packages.'
    ],
];

$banking_and_corporate_partners = [
    'HDFC Bank', 'ICICI Bank', 'Axis Bank', 'KPMG', 'Deloitte', 
    'PwC', 'EY', 'Kotak Mahindra', 'Bajaj Finance', 'TCS'
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
      <span class="text-white/90">Commerce</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Commerce</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Cultivating corporate financial acumen, advanced taxation mastery, forensic auditing, and modern FinTech analytics for leadership across global banking, Big-4 firms, and industry.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('coins') ?> Tally Prime &amp; GST Certified
      </span>
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> Banking &amp; BFSI Alliances
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> B.Com / B.Com Corporate / M.Com
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 100% Practical Financial Modeling
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
            <?= lucide_icon('landmark', 'w-4 h-4 text-gold') ?> Center of Financial Mastery &amp; Corporate Excellence
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Cultivating Financial Enterprise &amp; Strategic Acumen
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            Commerce is the lifeblood of economic enterprise. It governs the conduct of trade, financial exchange, capital allocation, and value creation across businesses and global institutions. While setting up the school, our objective was not to be just another commerce department, but to emerge as a premier centre of excellence in corporate commerce education.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Our curriculum empowers students with rigorous computational accounting, live GST filing simulations, investment portfolio analytics, and corporate governance laws—ensuring our graduates step into high-performing roles across multinational corporations, banking conglomerates, and audit firms.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>Tally Prime &amp; ERP Certified</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>CA / CS Foundation Mentorship</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Corporate Financial Modeling</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Commerce Directorate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Excellence in Commerce</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Equipping finance leaders with hands-on computerized ledger systems, tax compliance suites, and corporate treasury management skills.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">3+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Flagship Degree Tracks</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Tally &amp; GST Practical</div>
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
          <h3 class="rkdf-section-title">Academic Programs Offered</h3>
          <p class="rkdf-section-desc">Industry-integrated commerce and finance degrees engineered for modern corporate finance and banking careers.</p>
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

              <!-- Specializations List -->
              <div class="mb-5">
                <div class="rkdf-spec-section-title">
                  <?= lucide_icon('layers', 'w-3.5 h-3.5 text-gold') ?>
                  <span>Core Curriculum Modules:</span>
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

    <!-- ==================== FINANCIAL LABORATORIES & SIMULATORS ==================== -->
    <div class="section-block" id="laboratories">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Commerce Infrastructure</span>
          <h3 class="rkdf-section-title">Financial Labs &amp; Accounting Sandboxes</h3>
          <p class="rkdf-section-desc">Hands-on accounting and taxation infrastructure where students master live ledger booking, GST filing, corporate auditing, and stock market analytics.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('coins', 'w-3.5 h-3.5 text-gold') ?>
          <span>Enterprise Tally &amp; GST Labs</span>
        </span>
      </div>

      <div class="rkdf-lab-grid">
        <?php foreach ($labs as $idx => $lab): ?>
          <div class="rkdf-lab-card">
            <div>
              <div class="rkdf-lab-card-top">
                <div class="rkdf-lab-icon-box">
                  <?= lucide_icon($lab['icon'], 'w-5 h-5') ?>
                </div>
                <span class="rkdf-lab-index-tag">Lab 0<?= $idx + 1 ?></span>
              </div>
              <h4 class="rkdf-lab-title"><?= e($lab['name']) ?></h4>
              <p class="rkdf-lab-desc"><?= e($lab['desc']) ?></p>
            </div>
            <div class="rkdf-lab-specs-box">
              <div class="rkdf-lab-specs-header">
                <?= lucide_icon('sparkles', 'w-3 h-3 text-gold shrink-0') ?>
                <span>Technical Specifications:</span>
              </div>
              <p class="rkdf-lab-specs-text"><?= e($lab['specs']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== BANKING & CORPORATE RECRUITERS ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('landmark', 'w-4 h-4 text-gold') ?> Corporate Linkages &amp; BFSI Placements
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Banking, Big-4 &amp; FinTech Placements
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Our Central Placement Cell connects commerce graduates with leading private &amp; public banks, Big-4 accounting firms, taxation consultancies, and financial analytics corporations.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Placement Support</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">400+</div>
              <div class="rkdf-corporate-stat-lbl">Commerce Alumni Network</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">₹8 LPA</div>
              <div class="rkdf-corporate-stat-lbl">Highest Banking Package</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Top BFSI &amp; Audit Recruiters</span>
            <span class="text-[10px] text-white/70 uppercase">Banking &amp; Consulting Giants</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($banking_and_corporate_partners as $partner): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($partner) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
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
          Step into Leadership in Corporate Finance &amp; Banking
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for B.Com, B.Com Corporate, and M.Com programs. Merit scholarships, direct Tally Prime certification, and installment fee options available.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Direct Online Application
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Commerce Faculty Counseling
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> CA/CS Preparation Mentorship
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
