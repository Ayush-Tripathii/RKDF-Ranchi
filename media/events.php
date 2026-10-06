<?php
/**
 * RKDF University — Events Page
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Events &amp; Happenings — ' . SITE_NAME;
$page_meta_desc = 'Upcoming events at RKDF University — convocations, symposia, open days, and campus celebrations.';

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
      <span class="text-white/90">Events</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Events &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">happenings</em>.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Convocations, national conferences, cultural festivals, open days, and campus celebrations.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Convocations
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('microscope', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Research Symposia
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('sparkles', 'w-3.5 h-3.5 text-gold shrink-0') ?> Annual Cultural Fest
      </span>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/events.php'; ?>
<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
