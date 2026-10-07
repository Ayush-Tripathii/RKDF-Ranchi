<?php
/**
 * RKDF University — Master of Business Administration (MBA)
 * Content Source: https://rkdfuniversity.org/courses/master-of-business-administration-mba/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Master of Business Administration (MBA) | ' . SITE_NAME;
$page_meta_desc = 'Apply for 2-Year Full-Time MBA at RKDF University Ranchi. Dual Specializations in Marketing, Finance, HR, IT, Logistics, Banking, Construction & Hotel Management with corporate CXO masterclasses.';

$mba_specializations = [
    [
        'title'    => 'MBA in Financial Management & FinTech',
        'badge'    => 'BFSI & Corporate Finance',
        'icon'     => 'trending-up',
        'desc'     => 'Corporate valuation, derivatives trading, wealth management, mergers & acquisitions, international taxation, and algorithmic FinTech models.',
        'features' => ['Investment Banking & Portfolio Theory', 'Financial Risk Modeling & Derivatives', 'GST, Corporate Tax & Auditing', 'FinTech, Blockchain & Digital Banking'],
        'syllabus' => 'documents/MBA-FINANCE.pdf'
    ],
    [
        'title'    => 'MBA in Marketing & Digital Strategy',
        'badge'    => 'Brand & Growth Strategy',
        'icon'     => 'target',
        'desc'     => 'Brand management, neuromarketing, omnichannel retail strategy, consumer behavior analytics, digital growth hacking, and B2B industrial marketing.',
        'features' => ['Digital Marketing & Social Analytics', 'Strategic Brand Management & Positioning', 'Consumer Insights & Market Research', 'Supply Chain Distribution & Retail Strategy'],
        'syllabus' => 'documents/MBA.pdf'
    ],
    [
        'title'    => 'MBA in Human Resource Management (HRM)',
        'badge'    => 'Talent & Organizational Leadership',
        'icon'     => 'users',
        'desc'     => 'Strategic human resource management, executive talent acquisition, labor law jurisprudence, HR analytics, and organizational behavior change.',
        'features' => ['HR Analytics & Workforce Metrics', 'Strategic Talent Acquisition & Retention', 'Industrial Dispute Resolution & Labor Laws', 'Executive Coaching & Leadership Development'],
        'syllabus' => 'documents/MBA.pdf'
    ],
    [
        'title'    => 'MBA in Logistics & Supply Chain Management',
        'badge'    => 'Global Operations',
        'icon'     => 'truck',
        'desc'     => 'International freight transit, maritime logistics, warehouse automation, procurement optimization, and supply chain risk engineering.',
        'features' => ['Global Freight Forwarding & Customs', 'Warehouse Automation & Inventory Tech', 'Lean Six Sigma & Total Quality Mgmt', 'ERP Supply Chain Architecture'],
        'syllabus' => 'documents/MBA-Logistics-Management.pdf'
    ],
    [
        'title'    => 'MBA in Construction & Project Management',
        'badge'    => 'Infrastructure & Real Estate',
        'icon'     => 'building',
        'desc'     => 'Large-scale infrastructure project execution, contract law (FIDIC), Primavera & MS Project scheduling, and real estate finance.',
        'features' => ['Project Cost Estimation & BOQ Management', 'Primavera & BIM Project Scheduling', 'FIDIC Contracts & Real Estate Law', 'Safety Audits & Environmental Compliance'],
        'syllabus' => 'documents/MBA-Construction-Management.pdf'
    ],
    [
        'title'    => 'MBA in Hotel Management & Tourism',
        'badge'    => 'Hospitality & Resort Management',
        'icon'     => 'utensils',
        'desc'     => 'Luxury hospitality administration, international resort operations, revenue management, MICE event planning, and culinary enterprise leadership.',
        'features' => ['Luxury Resort & Hospitality Operations', 'Hospitality Revenue Optimization', 'MICE Event Management & Tourism Law', 'F&B Enterprise & Banquet Administration'],
        'syllabus' => 'documents/MBA-Hotel-Management.pdf'
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
      <span class="text-white/90">MBA Programs</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Master of Business <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Administration (MBA)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      A flagship 2-year postgraduate management curriculum offering dual majors, Harvard case-study pedagogy, 8-week corporate summer internships, and C-Suite mentorship.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('award') ?> AICTE Approved Model Curriculum
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> Dual Specialization Flexibility
      </span>
      <span class="hero-pill">
        <?= lucide_icon('building-2') ?> 150+ Corporate Recruiters
      </span>
      <span class="hero-pill">
        <?= lucide_icon('file-text') ?> Official Syllabus PDF Downloads
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN MBA CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Key Metrics Banner -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">2 Years</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">4 Semester Full-Time</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">Dual Major</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Flexible Specializations</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">8-Week SIP</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Corporate Internship</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">8+ LPA</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Top Placement CTC</span>
      </div>
    </div>

    <!-- Specializations Grid -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Management Specializations
          </span>
          <h3 class="rkdf-section-title">MBA Concentrations &amp; Specializations</h3>
          <p class="rkdf-section-desc">Choose dual majors across high-demand functional domains and sectoral management tracks.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($mba_specializations as $spec): ?>
          <div class="prog-spec-card">
            <!-- Header -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('briefcase', 'w-3 h-3') ?>
                  <span><?= e($spec['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($spec['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($spec['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($spec['desc']) ?></p>

                <!-- Features -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($spec['features'] as $feat): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
                      <span><?= e($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Action & Download -->
              <div class="space-y-3 pt-4 border-t border-slate-100">
                <?php if (!empty($spec['syllabus']) && file_exists(dirname(__DIR__) . '/' . $spec['syllabus'])): ?>
                  <a href="<?= url($spec['syllabus']) ?>" target="_blank" class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-xl bg-emerald-50 text-emerald-800 text-xs font-bold border border-emerald-200 hover:bg-emerald-100 transition">
                    <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-emerald-700') ?>
                    <span>Download Syllabus (PDF)</span>
                    <?= lucide_icon('download', 'w-3 h-3') ?>
                  </a>
                <?php endif; ?>

                <a href="<?= url('admissions/') ?>" class="prog-spec-btn">
                  <span>Apply for MBA 2026–27</span>
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
          <span>MBA Admissions 2026–27 Open</span>
        </div>
        <h3 class="rkdf-admission-title">
          Accelerate into Global Business Leadership
        </h3>
        <p class="rkdf-admission-desc">
          Enroll in RKDF University MBA program. Corporate scholarships, installment plans, and placement mentorship available.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for MBA</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('departments/school-management.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Faculty of Management</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
