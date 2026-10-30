<?php
/**
 * RKDF University — Mandatory Statutory & UGC Disclosures
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Mandatory Disclosure | " . SITE_NAME;
$page_meta_desc = "Mandatory Public Disclosures, UGC 2(f) Proformas, Institutional Development Plan, and Statutory Acts for RKDF University Ranchi.";

$disclosures = [
    [
        'title'       => 'Public Self Disclosure',
        'category'    => 'Institutional Disclosure',
        'desc'        => 'Comprehensive public self-disclosure documenting statutory compliance, physical facilities, and university governance.',
        'file'        => 'documents/Public-Self-Disclosure.pdf',
        'badge'       => 'Public Mandate',
        'icon'        => 'file-text',
    ],
    [
        'title'       => 'UGC 2(f) Proforma',
        'category'    => 'UGC Compliance',
        'desc'        => 'Official University Grants Commission (UGC) recognition proforma under Section 2(f) of the UGC Act 1956.',
        'file'        => 'documents/UGC-2F-Proforma.pdf',
        'badge'       => 'UGC 2(f) Verified',
        'icon'        => 'award',
    ],
    [
        'title'       => 'UGC Proforma Appendix',
        'category'    => 'UGC Compliance',
        'desc'        => 'Detailed appendices submitted to the UGC Expert Committee containing academic, faculty, and infrastructural records.',
        'file'        => 'documents/UGC-Appendix.pdf',
        'badge'       => 'UGC Appendix',
        'icon'        => 'book-open',
    ],
    [
        'title'       => 'UGC Proforma Annexure',
        'category'    => 'UGC Compliance',
        'desc'        => 'Comprehensive statutory annexures, departmental clearances, and university approvals supporting the 2(f) inspection.',
        'file'        => 'documents/UGC-Annexure.pdf',
        'badge'       => 'Statutory Annexure',
        'icon'        => 'files',
    ],
    [
        'title'       => 'Statutes of RKDF University',
        'category'    => 'University Statutes',
        'desc'        => 'The official first statutes governing administrative constitution, academic boards, and officers of the university.',
        'file'        => 'documents/Statutes-of-RKDF.pdf',
        'badge'       => 'Gazetted Statutes',
        'icon'        => 'landmark',
    ],
    [
        'title'       => 'Jharkhand Government Gazette Act, 2019',
        'category'    => 'State Enactment',
        'desc'        => 'The Jharkhand State Legislature Act establishing and incorporating RKDF University Ranchi as a State Private University.',
        'file'        => 'documents/RKDF-Jharkhand-Gazette.pdf',
        'badge'       => 'State Gazette Act',
        'icon'        => 'scale',
    ],
    [
        'title'       => 'Institutional Development Plan (IDP)',
        'category'    => 'Strategic Vision',
        'desc'        => 'Long-term strategic roadmap and institutional growth plan formulated in alignment with NEP 2020 guidelines.',
        'file'        => 'documents/Institutional-Development-Plan.pdf',
        'badge'       => 'NEP 2020 Aligned',
        'icon'        => 'trending-up',
    ],
    [
        'title'       => 'Annual Financial Audit Report',
        'category'    => 'Financial Accountability',
        'desc'        => 'Audited financial statements and statutory balance sheets certifying fiscal transparency and governance integrity.',
        'file'        => 'documents/RKDF-Audit-Report-24-25.pdf',
        'badge'       => 'Audited Statement',
        'icon'        => 'pie-chart',
    ],
];

require_once dirname(__DIR__) . '/includes/header.php';
?>

<style>
  .mandatory-disclosure-main { padding-bottom: 3rem !important; }
  .mandatory-disclosure-documents { margin-bottom: 0 !important; }
</style>

<!-- ==================== INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('about/') ?>" class="hover:text-white transition">About</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Mandatory Disclosure</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Mandatory <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Disclosures</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Official public disclosures, UGC proformas, State Gazette Acts, and statutory documents published in compliance with national transparency norms.
    </p>

    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> UGC 2(f) Verified
      </span>
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> Jharkhand Act No. 1077
      </span>
      <span class="hero-pill">
        <?= lucide_icon('eye') ?> 100% Public Transparency
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/about_nav_tabs.php'; ?>

<!-- ==================== MAIN DISCLOSURES SECTION ==================== -->
<section class="mandatory-disclosure-main py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Statutory Authority Spotlight Banner -->
    <div class="gov-spotlight-card mb-16 section-block">
      <!-- Ambient Golden Glow -->
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-4">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('scale', 'w-4 h-4 text-gold') ?> Statutory Public Repository
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Commitment to Regulatory Transparency &amp; Compliance
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed max-w-2xl font-normal">
            In adherence to the directives of the University Grants Commission (UGC), the Ministry of Education (Govt. of India), and the Government of Jharkhand, RKDF University maintains an open repository of institutional accreditations, gazetted statutes, and audited reports.
          </p>

          <!-- Authority Highlights -->
          <div class="spotlight-pill-list">
            <span class="spotlight-pill">
              <?= lucide_icon('shield-check') ?>
              <span>UGC 2(f) Verified</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('landmark') ?>
              <span>Jharkhand Act No. 1077</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('file-text') ?>
              <span>Audited IDP &amp; Statutes</span>
            </span>
          </div>
        </div>

        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5 text-gold') ?> Statutory Public Seal
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Public Disclosures</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Official repository of UGC submissions, statutory proformas, state acts, and institutional audited reports.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs">
            <span class="text-gold font-semibold flex items-center gap-1.5">
              <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-400') ?> Verified Public Domain
            </span>
            <a href="<?= url('about/government-recognition.php') ?>" class="inline-flex items-center gap-1 text-white hover:text-gold transition font-semibold text-[11px] uppercase tracking-wider">
              <span>Recognitions</span>
              <?= lucide_icon('arrow-right', 'w-3 h-3') ?>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Documents Grid -->
    <div class="mandatory-disclosure-documents mb-16 section-block space-y-8">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Public Regulatory Compliance</div>
        <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">Official Mandatory Disclosures</h3>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($disclosures as $d): ?>
          <div class="recognition-card">
            <div class="space-y-4">
              <div class="flex items-center justify-between gap-4">
                <div class="recognition-icon-box">
                  <?= lucide_icon($d['icon'], 'w-6 h-6') ?>
                </div>
                <span class="recognition-tag">
                  <?= e($d['badge']) ?>
                </span>
              </div>

              <div>
                <h3 class="recognition-title">
                  <?= e($d['title']) ?>
                </h3>
                <p class="recognition-desc">
                  <?= e($d['desc']) ?>
                </p>
              </div>
            </div>

            <div class="recognition-footer">
              <span class="text-xs text-slate-400 font-medium">Statutory PDF</span>
              <a href="<?= url($d['file']) ?>" target="_blank" rel="noopener noreferrer" class="recognition-btn group">
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
