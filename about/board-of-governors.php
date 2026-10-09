<?php
/**
 * RKDF University — Board of Governors
 * Pattern: Modular MVC (Controller / View / Data Separation)
 * Live Source: https://rkdfuniversity.org/about/board-of-governors/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Board of Governors | " . SITE_NAME;
$page_meta_desc = "The Board of Governors of RKDF University Ranchi — the apex statutory body responsible for strategic vision, policy formulation, and institutional oversight.";

// Load Data
$governors = require dirname(__DIR__) . '/data/boards/board_of_governors.php';

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
      <a href="<?= url('about/') ?>" class="hover:text-white transition">About</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Board of Governors</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Board of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Governors</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      The apex statutory governing body steering strategic direction, institutional policy, financial governance, and educational distinction at RKDF University Ranchi.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> Apex Governing Authority
      </span>
      <span class="hero-pill">
        <?= lucide_icon('scale') ?> Jharkhand Act No. 1077
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> Statutory Council
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/about_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Statutory Authority Spotlight Banner Component -->
    <?php
    $spotlight_badge = 'Apex Statutory Mandate';
    $spotlight_title = 'Institutional Board of Governors';
    $spotlight_desc  = 'Constituted under the provisions of the Jharkhand State Legislature Act, the Board of Governors is the supreme statutory authority responsible for the university’s governance, expansion, academic policies, and state statutory compliance.';
    $spotlight_pills = [
        ['icon' => 'scale',    'text' => 'Jharkhand Act No. 1077'],
        ['icon' => 'landmark', 'text' => 'State Govt. Representation'],
        ['icon' => 'award',    'text' => 'Statutory Policy Head'],
    ];
    $seal_header     = 'Apex Secretariat';
    $seal_title      = 'Governance Council';
    $seal_desc       = 'Presided by the Hon’ble Chancellor with Government of Jharkhand and academic leadership representation.';
    $seal_footer_tag = 'Statutory Body';
    $seal_count      = count($governors) . ' Governors';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Board of Governors Directory Table Component -->
    <?php
    $registry_badge = 'Official Statutory Registry';
    $registry_title = 'Distinguished Members of the Board';
    $registry_tag   = 'Act No. 1077 Mandate';
    $registry_items = $governors;
    require dirname(__DIR__) . '/sections/boards/table_registry.php';
    ?>

    <!-- Governance Callout Notice -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('shield-check', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Statutory Governance</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Academic Governance &amp; Administration
        </h3>
        <p class="text-white/80 text-sm max-w-2xl text-left">
          Explore the apex Academic Council responsible for educational standards, curriculum formulation, and examinations.
        </p>
      </div>
      <div class="shrink-0 flex items-center gap-3">
        <a href="<?= url('about/academic-council-members.php') ?>" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-gold/90 transition shadow-lg">
          <span>View Academic Council</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
