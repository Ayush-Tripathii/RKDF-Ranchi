<?php
/**
 * RKDF University — Board of Management
 * Pattern: Modular MVC (Controller / View / Data Separation)
 * Content Source: https://rkdfuniversity.org/about/board-members/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Board of Management | " . SITE_NAME;
$page_meta_desc = "The Board of Management of RKDF University Ranchi — the principal executive authority responsible for operational governance, academic planning, and institutional administration.";

// Load Data
$board_members = require dirname(__DIR__) . '/data/boards/board_members.php';

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
      <span class="text-white/90">Board of Management</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Board of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Management</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      The Board of Management is the principal executive authority of RKDF University Ranchi, executing academic policy and operational management.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> Principal Executive Authority
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> <?= count($board_members) ?> Distinguished Members
      </span>
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> Statutory Management Council
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
    $spotlight_badge = 'Executive Administration';
    $spotlight_title = 'Board of Management';
    $spotlight_desc  = 'Constituted under university statutory statutes, the Board of Management supervises general operations, ensures academic delivery standards, manages infrastructure development, and formulates administrative procedures.';
    $spotlight_pills = [
        ['icon' => 'graduation-cap', 'text' => 'Chaired by Vice Chancellor'],
        ['icon' => 'landmark',       'text' => 'Govt. of Jharkhand Liaison'],
        ['icon' => 'file-text',      'text' => 'Registrar as Member Secretary'],
    ];
    $seal_header     = 'Executive Council';
    $seal_title      = 'Executive Board';
    $seal_desc       = 'Supervising academic standards, financial administration, and day-to-day statutory governance.';
    $seal_footer_tag = 'Statutory Body';
    $seal_count      = count($board_members) . ' Members';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Board Members Directory Table Component -->
    <?php
    $registry_badge = 'Official Registry';
    $registry_title = 'Board of Management Members';
    $registry_tag   = 'Statutory Body';
    $registry_items = $board_members;
    require dirname(__DIR__) . '/sections/boards/table_registry.php';
    ?>

    <!-- Governance Callout Notice -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('shield-check', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Academic &amp; Curriculum Councils</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Departmental Boards of Studies
        </h3>
        <p class="text-xs sm:text-sm text-white/80 max-w-2xl text-left leading-relaxed">
          Curriculum design, course syllabi, examination standards, and pedagogical updates are governed by specialized Departmental Boards of Studies across 9 faculties.
        </p>
      </div>

      <div class="flex items-center justify-center shrink-0 self-center my-auto gap-3">
        <a href="<?= url('boards/board-of-studies.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-gold text-brand px-6 py-3 text-xs font-bold uppercase tracking-wider hover:bg-white transition shadow-lg">
          <span>Board of Studies</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
