<?php
/**
 * RKDF University — Board Members (Board of Management)
 * Pattern: Modular MVC (Controller / View / Data Separation)
 * Live Source: https://rkdfuniversity.org/about/board-members/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Board Members | " . SITE_NAME;
$page_meta_desc = "The Board of Management members of RKDF University Ranchi — responsible for operational governance, academic planning, and institutional administration.";

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
      <span class="text-white/90">Board Members</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Board <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Members</em>
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
        <?= lucide_icon('users') ?> 12 Distinguished Members
      </span>
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> Statutory Management Council
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
    $spotlight_badge = 'Principal Executive Council';
    $spotlight_title = 'Board of Management';
    $spotlight_desc  = 'The Board of Management is the principal executive authority of RKDF University Ranchi. It is vested with the powers to administer the university’s properties, monitor educational programs, manage revenue, and formulate administrative ordinances under the University Act.';
    $spotlight_pills = [
        ['icon' => 'briefcase', 'text' => 'Executive Governance'],
        ['icon' => 'landmark',  'text' => 'Jharkhand Govt. Representation'],
        ['icon' => 'shield',    'text' => 'Statutory Administrative Head'],
    ];
    $seal_header     = 'Executive Secretariat';
    $seal_title      = 'Board of Management';
    $seal_desc       = 'Executing administrative functions, university revenues, infrastructure expansion, and statutory ordinances.';
    $seal_footer_tag = 'Executive Authority';
    $seal_count      = count($board_members) . ' Members';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Board Members Directory Table Component -->
    <?php
    $registry_badge = 'Official Statutory Registry';
    $registry_title = 'Distinguished Members of the Board of Management';
    $registry_tag   = 'Statutory Management Registry';
    $registry_items = $board_members;
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
          Apex Governing Authority
        </h3>
        <p class="text-white/80 text-sm max-w-2xl text-left">
          Review the Board of Governors presiding over the strategic policy decisions and institutional leadership.
        </p>
      </div>
      <div class="shrink-0 flex items-center gap-3">
        <a href="<?= url('about/board-of-governors.php') ?>" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-gold/90 transition shadow-lg">
          <span>View Board of Governors</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
