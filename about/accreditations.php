<?php
/**
 * RKDF University — Accreditations & Recognitions
 * Content Source: https://rkdfuniversity.org/about/accreditations/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Accreditations — ' . SITE_NAME;
$page_meta_desc = 'Accreditations, Affiliations, and Statutory Recognitions of RKDF University Ranchi — UGC, AIU, PCI, BCI, AISHE.';

require_once dirname(__DIR__) . '/includes/header.php';

$accreditation_cards = [
    [
        'title' => 'University Grants Commission (UGC)',
        'tag'   => 'Statutory Recognition',
        'desc'  => 'RKDF University, Ranchi is established by an Act of State Legislature of Jharkhand and recognized under Section 2(f) of the UGC Act, 1956.',
        'icon'  => 'landmark',
        'link'  => 'https://www.ugc.gov.in/'
    ],
    [
        'title' => 'Association of Indian Universities (AIU)',
        'tag'   => 'Institutional Membership',
        'desc'  => 'RKDF University Ranchi is a recognized member of AIU, ensuring equivalence of degrees awarded by the university across India and abroad.',
        'icon'  => 'globe',
        'link'  => url('documents/RKDF-AIU-Membership.pdf')
    ],
    [
        'title' => 'Pharmacy Council of India (PCI)',
        'tag'   => 'Professional Approval',
        'desc'  => 'Approved by Pharmacy Council of India (PCI), New Delhi for conducting Diploma in Pharmacy (D.Pharm) and Bachelor of Pharmacy (B.Pharm) programs.',
        'icon'  => 'heart-pulse',
        'link'  => url('documents/PCI-Approval-2026-2027.pdf')
    ],
    [
        'title' => 'Bar Council of India (BCI)',
        'tag'   => 'Professional Approval',
        'desc'  => 'Recognized and approved by Bar Council of India (BCI) for 5-Year Integrated Law (BA LL.B, BBA LL.B) and 3-Year LL.B degree programs.',
        'icon'  => 'scale',
        'link'  => url('documents/BCI-Approval-2026-2027.pdf')
    ],
    [
        'title' => 'All India Survey on Higher Education (AISHE)',
        'tag'   => 'Ministry of Education',
        'desc'  => 'Registered under All India Survey on Higher Education (AISHE), Ministry of Education, Government of India.',
        'icon'  => 'trophy',
        'link'  => 'https://aishe.gov.in/'
    ],
    [
        'title' => 'Jharkhand State Legislature Act',
        'tag'   => 'State Government Act',
        'desc'  => 'Established under Jharkhand Government Act No. 1077 and recognized by the Department of Higher and Technical Education, Govt. of Jharkhand.',
        'icon'  => 'building',
        'link'  => url('documents/RKDF-Jharkhand-Gazette.pdf')
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
      <span class="text-white/90">Accreditations</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Accreditations &amp; apex <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">affiliations</em>.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Adhering to the highest benchmarks of academic integrity, curriculum rigor, and national statutory standards.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> UGC 2(f) Recognized
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('globe', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> AIU Member
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('heart-pulse', 'w-3.5 h-3.5 text-gold shrink-0') ?> PCI Approved
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('scale', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> BCI Approved
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
            <?= lucide_icon('trophy', 'w-4 h-4 text-gold') ?> Quality &amp; Compliance Mandate
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Institutional Accreditations &amp; Affiliations
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed max-w-2xl font-normal">
            RKDF University Ranchi adheres to the highest benchmarks of academic integrity, regulatory compliance, and curriculum standards set forth by the apex statutory councils and regulatory bodies of India.
          </p>

          <!-- Highlights -->
          <div class="spotlight-pill-list">
            <span class="spotlight-pill">
              <?= lucide_icon('landmark') ?>
              <span>UGC 2(f) Recognized</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('heart-pulse') ?>
              <span>PCI Approved (Pharmacy)</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('scale') ?>
              <span>BCI Approved (Law)</span>
            </span>
          </div>

        </div>

        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5 text-gold') ?> Statutory Approvals
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Apex Compliance</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Curricula &amp; degrees audited and validated in full accordance with national council norms.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs">
            <span class="text-gold font-semibold flex items-center gap-1.5">
              <?= lucide_icon('globe', 'w-3.5 h-3.5 text-gold') ?> AIU Member
            </span>
            <span class="text-white/60 text-[11px]">UGC Listed</span>
          </div>
        </div>
      </div>
    </div>


    <!-- Accreditations Grid -->
    <div class="mb-16 section-block space-y-8">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Regulatory Framework</div>
        <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">Apex Accreditations</h3>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($accreditation_cards as $ac): ?>
          <div class="recognition-card">
            <div class="space-y-4">
              <div class="flex items-center justify-between gap-4">
                <div class="recognition-icon-box">
                  <?= lucide_icon($ac['icon'], 'w-6 h-6') ?>
                </div>
                <span class="recognition-tag">
                  <?= e($ac['tag']) ?>
                </span>
              </div>

              <div>
                <h3 class="recognition-title"><?= e($ac['title']) ?></h3>
                <p class="recognition-desc"><?= e($ac['desc']) ?></p>
              </div>
            </div>

            <div class="recognition-footer">
              <span class="text-xs text-slate-400 font-medium">Apex Portal / PDF</span>
              <a href="<?= e($ac['link']) ?>" target="_blank" rel="noopener" class="recognition-btn group">
                <span>View Document</span>
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
