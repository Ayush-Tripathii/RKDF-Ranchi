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
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Spotlight Banner -->
    <div class="rounded-3xl bg-card border border-border p-8 md:p-10 shadow-sm flex flex-col md:flex-row items-center justify-between gap-8">
      <div class="space-y-3 flex-1 text-left">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-gold/15 text-gold border border-gold/30">
          <?= lucide_icon('scale', 'w-3.5 h-3.5') ?> Statutory Public Repository
        </span>
        <h2 class="font-serif text-2xl sm:text-3xl text-foreground">
          Commitment to Regulatory Transparency &amp; Compliance
        </h2>
        <p class="text-muted-foreground text-sm leading-relaxed max-w-3xl">
          In adherence to the directives of the University Grants Commission (UGC), the Ministry of Education (Govt. of India), and the Government of Jharkhand, RKDF University maintains an open repository of institutional accreditations, gazetted statutes, and audited reports.
        </p>
      </div>

      <div class="shrink-0 flex flex-wrap gap-3">
        <a href="<?= url('about/government-recognition.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-brand-foreground px-6 py-3 text-xs font-bold uppercase tracking-wider hover:bg-brand-dark transition shadow">
          <?= lucide_icon('award', 'w-4 h-4') ?> Recognitions
        </a>
      </div>
    </div>

    <!-- Documents Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($disclosures as $d): ?>
        <div class="group relative rounded-2xl bg-card border border-border p-6 shadow-sm hover:shadow-md hover:border-gold/50 transition duration-300 flex flex-col justify-between">
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <div class="w-12 h-12 rounded-xl bg-brand/10 text-brand flex items-center justify-center group-hover:bg-brand group-hover:text-gold transition">
                <?= lucide_icon($d['icon'], 'w-6 h-6') ?>
              </div>
              <span class="text-xs px-2.5 py-1 rounded-full bg-gold/15 text-gold border border-gold/30 font-semibold">
                <?= htmlspecialchars($d['badge']) ?>
              </span>
            </div>

            <div>
              <span class="text-xs uppercase font-semibold text-muted-foreground tracking-wider block mb-1">
                <?= htmlspecialchars($d['category']) ?>
              </span>
              <h3 class="font-serif text-xl text-foreground font-semibold group-hover:text-brand transition">
                <?= htmlspecialchars($d['title']) ?>
              </h3>
            </div>

            <p class="text-xs text-muted-foreground leading-relaxed">
              <?= htmlspecialchars($d['desc']) ?>
            </p>
          </div>

          <div class="mt-6 pt-4 border-t border-border flex items-center justify-between">
            <a href="<?= url($d['file']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-bold text-brand hover:text-gold transition">
              <?= lucide_icon('file-text', 'w-4 h-4') ?>
              <span>Download Official PDF</span>
            </a>
            <a href="<?= url($d['file']) ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-muted flex items-center justify-center text-foreground group-hover:bg-gold group-hover:text-brand transition" aria-label="Open PDF">
              <?= lucide_icon('download', 'w-4 h-4') ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
