<?php
/**
 * RKDF University — Master of Commerce (M.Com.)
 * Content Source: https://rkdfuniversity.org/courses/master-of-commerce-m-com/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Master of Commerce (M.Com.) | ' . SITE_NAME;
$page_meta_desc = 'Apply for 2-Year Master of Commerce (M.Com.) at RKDF University Ranchi. Corporate Accounting, IFRS, GST Taxation, Security Analysis, Banking Operations, and Financial Analytics with top placement support.';

$mcom_tracks = [
    [
        'title'    => 'Corporate Financial Accounting & Auditing',
        'badge'    => 'Corporate Compliance',
        'icon'     => 'calculator',
        'desc'     => 'Advanced corporate financial reporting, Indian Accounting Standards (Ind AS / IFRS), forensic auditing, internal controls, and enterprise consolidation.',
        'features' => ['Ind AS & Global Financial Reporting (IFRS)', 'Forensic Auditing & Fraud Investigation', 'Advanced Corporate Accounting & Consolidation', 'Corporate Governance & Statutory Filings'],
        'syllabus' => 'documents/M.Com_.pdf'
    ],
    [
        'title'    => 'Direct & Indirect Taxation (GST & Customs)',
        'badge'    => 'Fiscal & Tax Law',
        'icon'     => 'receipt',
        'desc'     => 'Comprehensive fiscal law, corporate income taxation, GST input tax credit systems, customs tariffs, cross-border transfer pricing, and tax litigation.',
        'features' => ['Corporate Income Tax Assessment & Planning', 'GST Law, Electronic Invoicing & Audit', 'International Taxation & Transfer Pricing', 'Customs Law & Exim Trade Compliance'],
        'syllabus' => 'documents/M.Com_.pdf'
    ],
    [
        'title'    => 'Investment Banking & Portfolio Management',
        'badge'    => 'Capital Markets',
        'icon'     => 'trending-up',
        'desc'     => 'Stock valuation models, fixed income securities, mutual fund mechanics, risk hedge derivatives, algorithmic trading, and quantitative wealth advisory.',
        'features' => ['Security Analysis & Quantitative Valuation', 'Mutual Funds & Wealth Portfolio Advisory', 'Financial Derivatives & Risk Hedging', 'Mergers, Acquisitions & Corporate Restructuring'],
        'syllabus' => 'documents/M.Com_.pdf'
    ],
    [
        'title'    => 'Banking Operations & Financial Technologies',
        'badge'    => 'BFSI Sector',
        'icon'     => 'landmark',
        'desc'     => 'Commercial bank management, RBI prudential norms, Basel III capital adequacy frameworks, digital payment gateways, and micro-lending operations.',
        'features' => ['Commercial Bank Lending & Credit Appraisal', 'RBI Regulations & Basel III Norms', 'Digital Banking, UPI & FinTech Protocols', 'Micro-Finance & Financial Inclusion'],
        'syllabus' => 'documents/M.Com_.pdf'
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
      <span class="text-white/90">M.Com. Commerce</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Master of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Commerce (M.Com.)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Rigorous 2-year postgraduate financial and commercial degree covering advanced corporate accounting, GST taxation, capital markets, and banking operations.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('calculator') ?> 2-Year Advanced M.Com
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> Corporate Banking &amp; BFSI Placements
      </span>
      <span class="hero-pill">
        <?= lucide_icon('file-text') ?> Official Syllabus PDF Download
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> UGC &amp; NEP Aligned
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN M.COM. CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Key Metrics Banner -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">2 Years</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">4 Semester Master</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">IFRS &amp; GST</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Practical Taxation Labs</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">UGC-NET</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Lectureship Mentorship</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">100%</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Placement Assistance</span>
      </div>
    </div>

    <!-- Specializations Grid -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Commerce Specializations
          </span>
          <h3 class="rkdf-section-title">M.Com. Curriculum Tracks</h3>
          <p class="rkdf-section-desc">Specialized electives designed for corporate financial analysts, tax consultants, and banking officers.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($mcom_tracks as $trk): ?>
          <div class="prog-spec-card">
            <!-- Header -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('receipt', 'w-3 h-3') ?>
                  <span><?= e($trk['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($trk['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($trk['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($trk['desc']) ?></p>

                <!-- Features -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($trk['features'] as $feat): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
                      <span><?= e($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Action & Download -->
              <div class="space-y-3 pt-4 border-t border-slate-100">
                <?php if (!empty($trk['syllabus']) && file_exists(dirname(__DIR__) . '/' . $trk['syllabus'])): ?>
                  <a href="<?= url($trk['syllabus']) ?>" target="_blank" class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-xl bg-emerald-50 text-emerald-800 text-xs font-bold border border-emerald-200 hover:bg-emerald-100 transition">
                    <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-emerald-700') ?>
                    <span>Download M.Com Syllabus (PDF)</span>
                    <?= lucide_icon('download', 'w-3 h-3') ?>
                  </a>
                <?php endif; ?>

                <a href="<?= url('admissions/') ?>" class="prog-spec-btn">
                  <span>Apply for M.Com. 2026–27</span>
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
          <span>M.Com. Admissions 2026–27 Open</span>
        </div>
        <h3 class="rkdf-admission-title">
          Build a Rewarding Career in Corporate Finance &amp; Taxation
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for M.Com. degree program at RKDF University Ranchi. Merit scholarships, corporate placement drives, and bank loan support available.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for M.Com.</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('departments/school-of-commerce.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Faculty of Commerce</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
