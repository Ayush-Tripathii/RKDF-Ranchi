<?php
/**
 * RKDF University — Annual Reports & Audit Reports
 * Content Source: https://rkdfuniversity.org/about/annual-reports/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Annual Reports & Audit Reports — ' . SITE_NAME;
$page_meta_desc = 'Official Annual Reports and Audit Reports of RKDF University Ranchi — Financial Disclosures & Governance.';

require_once dirname(__DIR__) . '/includes/header.php';

$audit_reports = [
    ['year' => 'Audit Report 2024-25', 'desc' => 'Financial statement & statutory audit for FY 2024-2025.', 'url' => url('documents/RKDF-Audit-Report-24-25.pdf')],
    ['year' => 'Audit Report 2023-24', 'desc' => 'Financial statement & statutory audit for FY 2023-2024.', 'url' => url('documents/Audit-Report-2023-2024.pdf')],
    ['year' => 'Audit Report 2022-23', 'desc' => 'Financial statement & statutory audit for FY 2022-2023.', 'url' => url('documents/Audit-Report-2022-2023.pdf')],
    ['year' => 'Audit Report 2021-22', 'desc' => 'Financial statement & statutory audit for FY 2021-2022.', 'url' => url('documents/Audit-Report-2021-2022.pdf')],
    ['year' => 'Audit Report 2020-21', 'desc' => 'Financial statement & statutory audit for FY 2020-2021.', 'url' => url('documents/Audit-Report-2020-2021.pdf')],
    ['year' => 'Audit Report 2019-20', 'desc' => 'Financial statement & statutory audit for FY 2019-2020.', 'url' => url('documents/Audit-Report-2019-2020.pdf')],
];

$annual_reports = [
    [
        'title' => 'Annual Reports 2024 – 2025',
        'desc'  => 'Comprehensive institutional report outlining academic achievements, admissions, research, and governance.',
        'url'   => url('documents/Annual-Report-2024-25.pdf')
    ],
];
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
      <a href="<?= url('about/') ?>" class="hover:text-white transition">About</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Annual Reports</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Annual reports &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">statutory audits</em>.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Transparent disclosure of institutional performance, academic growth, and audited financial statements.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('award', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Annual Reports 2024-25
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('briefcase', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> 6 Years Audited Statements
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Government Notified
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/about_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Statutory Authority Spotlight Banner -->
    <div class="gov-spotlight-card mb-16 section-block">
      <!-- Ambient Golden Glow -->
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-4">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('landmark', 'w-4 h-4 text-gold') ?> Statutory Disclosures &amp; Audits
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Annual &amp; Financial Disclosures
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed max-w-2xl font-normal">
            RKDF University Ranchi publishes statutory annual reports, financial balance sheets, and academic audit reviews in adherence to the Jharkhand Government Act and UGC regulatory transparency guidelines.
          </p>

          <!-- Highlights -->
          <div class="spotlight-pill-list">
            <span class="spotlight-pill">
              <?= lucide_icon('book-open') ?>
              <span>Annual Academic Audits</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('scale') ?>
              <span>Statutory Compliance</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>UGC &amp; State Notified</span>
            </span>
          </div>

        </div>

        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Govt. Notification
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Notification No. 1077</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Statutory notification enacted under the Jharkhand State Legislature Act.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs">
            <span class="text-gold font-semibold flex items-center gap-1.5">
              <?= lucide_icon('award', 'w-3.5 h-3.5 text-gold') ?> Govt. of Jharkhand
            </span>
            <span class="text-white/60 text-[11px]">Act No. 1077</span>
          </div>
        </div>
      </div>
    </div>



    <!-- Annual Reports Section -->
    <div class="mb-16 section-block space-y-8">
      <div class="flex items-center gap-3">
        <div class="recognition-icon-box" style="width: 44px !important; height: 44px !important; min-width: 44px !important; border-radius: 12px !important;">
          <?= lucide_icon('book-open', 'w-5 h-5') ?>
        </div>
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Institutional Review</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-0.5">Annual Reports</h3>
        </div>
      </div>

      <div class="gov-table-wrap">
        <div class="overflow-x-auto">
          <table class="gov-table">
            <thead>
              <tr>
                <th style="width: 35%;">Report Title</th>
                <th style="width: 45%;">Description</th>
                <th style="width: 20%; text-align: right;">Official Document</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($annual_reports as $ar): ?>
                <tr>
                  <td>
                    <div class="font-serif text-xl font-normal text-slate-900"><?= e($ar['title']) ?></div>
                  </td>
                  <td>
                    <div class="text-sm text-slate-600 leading-relaxed"><?= e($ar['desc']) ?></div>
                  </td>
                  <td style="text-align: right;">
                    <a href="<?= e($ar['url']) ?>" target="_blank" rel="noopener" class="approval-action-btn">
                      <?= lucide_icon('download', 'w-4 h-4 text-gold') ?>
                      <span>Click to view</span>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Audit Reports Section -->
    <div class="mb-16 section-block space-y-8">
      <div class="flex items-center gap-3">
        <div class="recognition-icon-box" style="width: 44px !important; height: 44px !important; min-width: 44px !important; border-radius: 12px !important;">
          <?= lucide_icon('scale', 'w-5 h-5') ?>
        </div>
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Financial Compliance</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-0.5">Audit Reports</h3>
        </div>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($audit_reports as $aur): ?>
          <div class="recognition-card">
            <div class="space-y-4">
              <div class="flex items-center justify-between">
                <div class="recognition-icon-box">
                  <?= lucide_icon('file-text', 'w-6 h-6') ?>
                </div>
                <span class="recognition-tag">
                  Audited Copy
                </span>
              </div>
              <div>
                <h4 class="recognition-title"><?= e($aur['year']) ?></h4>
                <p class="recognition-desc"><?= e($aur['desc']) ?></p>
              </div>
            </div>

            <div class="recognition-footer">
              <span class="text-xs text-slate-400 font-medium">Certified Audit</span>
              <a href="<?= e($aur['url']) ?>" target="_blank" rel="noopener" class="recognition-btn group">
                <span>Click to view</span>
                <span class="group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"><?= lucide_icon('arrow-up-right', 'w-4 h-4 text-gold') ?></span>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
