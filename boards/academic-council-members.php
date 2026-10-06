<?php
/**
 * RKDF University — Academic Council Members
 * Pattern: Modular MVC (Controller / View / Data Separation)
 * Content Source: https://rkdfuniversity.org/about/academic-council-members/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Academic Council Members | " . SITE_NAME;
$page_meta_desc = "The Academic Council members of RKDF University Ranchi — the apex statutory academic body responsible for academic policies, curriculum approval, research standards, and pedagogical quality.";

// Load Data
$council_members = require dirname(__DIR__) . '/data/boards/academic_council.php';

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
      <span class="text-white/90">Academic Council</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Academic <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Council</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      The principal academic statutory authority of RKDF University Ranchi responsible for the maintenance of academic standards, research policy, and examination regulations.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('award') ?> Apex Academic Authority
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> 13 Distinguished Council Members
      </span>
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> National Academic Representation
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/boards_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Statutory Authority Spotlight Banner Component -->
    <?php
    $spotlight_badge = 'Apex Academic Governance';
    $spotlight_title = 'Statutory Academic Council';
    $spotlight_desc  = 'The Academic Council exercises statutory control over admissions, courses of study, examination conduct, degree awards, research programs, and inter-institutional academic linkages with renowned institutions like IIM Ranchi and Central University of Jharkhand.';
    $spotlight_pills = [
        ['icon' => 'graduation-cap', 'text' => 'Chaired by Vice Chancellor'],
        ['icon' => 'landmark',       'text' => 'IIM & CUJ Representation'],
        ['icon' => 'file-text',      'text' => 'Academic Policy Formulation'],
    ];
    $seal_header     = 'Academic Senate';
    $seal_title      = 'Academic Council';
    $seal_desc       = 'Formulating academic policies, research paradigms, and quality assurance frameworks across faculties.';
    $seal_footer_tag = 'Statutory Authority';
    $seal_count      = count($council_members) . ' Members';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Academic Council Directory Table Component -->
    <?php
    $registry_badge = 'Official Statutory Registry';
    $registry_title = 'Distinguished Members of the Council';
    $registry_tag   = 'Apex Academic Senate';
    $registry_items = $council_members;
    require dirname(__DIR__) . '/sections/boards/table_registry.php';
    ?>

    <!-- Council Governance Callout Notice -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('shield-check', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Statutory Authority</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Board of Governors
        </h3>
        <p class="text-xs sm:text-sm text-white/80 max-w-2xl text-left leading-relaxed">
          The apex governing authority responsible for university policy formulation, charter oversight, and strategic development.
        </p>
      </div>

      <div class="flex items-center justify-center shrink-0 self-center my-auto gap-3">
        <a href="<?= url('boards/board-of-governors.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-gold text-brand px-6 py-3 text-xs font-bold uppercase tracking-wider hover:bg-white transition shadow-lg">
          <span>Board of Governors</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
