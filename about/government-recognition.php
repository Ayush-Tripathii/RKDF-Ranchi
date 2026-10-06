<?php
/**
 * RKDF University — Government Recognitions
 * Content Source: https://rkdfuniversity.org/about/government-recognition/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Government Recognitions — ' . SITE_NAME;
$page_meta_desc = 'Government Recognitions and Statutory Approvals of RKDF University Ranchi — UGC, AIU, AISHE, PCI, BCI.';

require_once dirname(__DIR__) . '/includes/header.php';

$gov_recognitions = [
    [
        'name' => 'UGC Approved',
        'desc' => 'University Grants Commission recognition under Section 2(f) of the UGC Act, 1956.',
        'url'  => 'https://www.ugc.gov.in/',
        'badge' => 'Apex Statutory Body',
        'icon'  => 'landmark'
    ],
    [
        'name' => 'AIU Membership',
        'desc' => 'Association of Indian Universities official membership certificate.',
        'url'  => url('documents/RKDF-AIU-Membership.pdf'),
        'badge' => 'National Equivalence',
        'icon'  => 'globe'
    ],
    [
        'name' => 'AISHE',
        'desc' => 'All India Survey on Higher Education, Ministry of Education, Government of India.',
        'url'  => 'https://aishe.gov.in/',
        'badge' => 'Ministry of Education',
        'icon'  => 'trophy'
    ],
    [
        'name' => 'Jharkhand Government Act, 2019',
        'desc' => 'Official Gazette Notification No. 1077 under Jharkhand State Legislature.',
        'url'  => url('documents/RKDF-Jharkhand-Gazette.pdf'),
        'badge' => 'State Legislature Act',
        'icon'  => 'scale'
    ],
];

$statutory_approvals = [
    [
        'council' => 'Pharmacy Council of India',
        'year'    => '2026-2027',
        'desc'    => 'Approval for conducting Pharmacy degree & diploma courses (D.Pharm, B.Pharm).',
        'url'     => url('documents/PCI-Approval-2026-2027.pdf'),
        'icon'    => 'heart-pulse'
    ],
    [
        'council' => 'Bar Council of India',
        'year'    => '2026-2027',
        'desc'    => 'Approval for professional legal education courses (BA LL.B, BBA LL.B, LL.B).',
        'url'     => url('documents/BCI-Approval-2026-2027.pdf'),
        'icon'    => 'scale'
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
      <span class="text-white/90">Government Recognitions</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Statutory approvals &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">recognitions</em>.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Established under the Jharkhand Government Act &amp; recognized by apex national regulatory bodies.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Notification No. 1077
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> UGC Section 2(f)
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('globe', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> AIU Member
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('scale', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> PCI &amp; BCI Approved
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
            <?= lucide_icon('shield-check', 'w-4 h-4 text-gold') ?> Statutory Legislative Authority
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Government Recognitions &amp; Approvals
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed max-w-2xl font-normal">
            RKDF University Ranchi is a prestigious state-notified university established under the Jharkhand Government Act &amp; approved by the State Government. Recognized under Section 2(f) of UGC Act 1956 and an active member of AIU.
          </p>

          <!-- Authority Highlights -->
          <div class="spotlight-pill-list">
            <span class="spotlight-pill">
              <?= lucide_icon('scale') ?>
              <span>Act No. 1077 · Est. 2018</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('landmark') ?>
              <span>UGC Section 2(f)</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('globe') ?>
              <span>AIU Member University</span>
            </span>
          </div>

        </div>

        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Official Gazette
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
            <span class="text-white/60 text-[11px]">Enacted 2018</span>
          </div>
        </div>
      </div>
    </div>



    <!-- Government Recognitions Grid -->
    <div class="mb-16 section-block space-y-8">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Apex Bodies &amp; Statutory Approvals</div>
        <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">Recognitions Portfolio</h3>
      </div>

      <div class="recognition-grid">
        <?php foreach ($gov_recognitions as $gr): ?>
          <div class="recognition-card">
            <div class="space-y-4">
              <div class="flex items-center justify-between gap-4">
                <div class="recognition-icon-box">
                  <?= lucide_icon($gr['icon'], 'w-6 h-6') ?>
                </div>
                <span class="recognition-tag">
                  <?= e($gr['badge']) ?>
                </span>
              </div>

              <div>
                <h4 class="recognition-title"><?= e($gr['name']) ?></h4>
                <p class="recognition-desc"><?= e($gr['desc']) ?></p>
              </div>
            </div>

            <div class="recognition-footer">
              <span class="text-xs text-slate-400 font-medium">Official Gazette / Verification</span>
              <a href="<?= e($gr['url']) ?>" target="_blank" rel="noopener" class="recognition-btn group">
                <span>Click to view</span>
                <span class="group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"><?= lucide_icon('arrow-up-right', 'w-4 h-4 text-gold') ?></span>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Statutory Approvals Section -->
    <div class="mb-16 section-block space-y-8">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Professional Councils</div>
        <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">Statutory Approvals</h3>
      </div>

      <div class="gov-table-wrap">
        <div class="overflow-x-auto">
          <table class="gov-table">
            <thead>
              <tr>
                <th style="width: 55%;">Council</th>
                <th style="width: 20%;">Academic Year</th>
                <th style="width: 25%; text-align: right;">Approval Letter</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($statutory_approvals as $sa): ?>
                <tr>
                  <td>
                    <div class="approval-flex">
                      <div class="approval-icon-box">
                        <?= lucide_icon($sa['icon'], 'w-5 h-5') ?>
                      </div>
                      <div>
                        <div class="approval-title"><?= e($sa['council']) ?></div>
                        <div class="approval-desc"><?= e($sa['desc']) ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="approval-year-badge">
                      <?= e($sa['year']) ?>
                    </span>
                  </td>
                  <td style="text-align: right;">
                    <a href="<?= e($sa['url']) ?>" target="_blank" rel="noopener" class="approval-action-btn">
                      <?= lucide_icon('file-text', 'w-4 h-4 text-gold') ?>
                      <span>Click to View</span>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
