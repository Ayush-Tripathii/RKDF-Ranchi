<?php
/**
 * RKDF University — 404 Not Found Page
 */
http_response_code(404);
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_title     = 'Page Not Found (404) — ' . SITE_NAME;
$page_meta_desc = 'The requested page could not be found on RKDF University Ranchi website.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- ==================== 404 ERROR HERO ==================== -->
<section class="inner-page-hero py-20 lg:py-28 text-center relative overflow-hidden">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-4xl px-6">
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      Error 404
    </div>

    <h1 class="font-serif text-6xl sm:text-7xl md:text-8xl font-normal leading-tight text-white mb-4">
      Page Not Found
    </h1>

    <p class="mt-4 text-white/85 max-w-xl mx-auto text-base sm:text-lg leading-relaxed">
      The page you are looking for might have been moved, renamed, or is temporarily unavailable.
    </p>

    <!-- Quick Action Links -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
      <a href="<?= url('/') ?>" class="inline-flex items-center gap-2 rounded-full bg-gold text-slate-950 px-6 py-3 text-sm font-bold uppercase tracking-wider hover:opacity-90 transition shadow-lg">
        <?= lucide_icon('home', 'w-4 h-4') ?>
        <span>Return to Homepage</span>
      </a>
      <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/10 text-white px-6 py-3 text-sm font-semibold hover:bg-white/20 transition">
        <?= lucide_icon('graduation-cap', 'w-4 h-4 text-gold') ?>
        <span>Admissions 2026–27</span>
      </a>
      <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/10 text-white px-6 py-3 text-sm font-semibold hover:bg-white/20 transition">
        <?= lucide_icon('phone', 'w-4 h-4 text-gold') ?>
        <span>Contact Us</span>
      </a>
    </div>

    <!-- Helpful Links Grid -->
    <div class="mt-16 pt-12 border-t border-white/10 grid grid-cols-2 sm:grid-cols-4 gap-4 text-left max-w-3xl mx-auto">
      <a href="<?= url('departments/') ?>" class="p-4 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 transition block group">
        <div class="text-gold font-semibold text-sm group-hover:underline">Faculties &rarr;</div>
        <div class="text-xs text-white/70 mt-1">Explore all 12 academic schools</div>
      </a>
      <a href="<?= url('courses/') ?>" class="p-4 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 transition block group">
        <div class="text-gold font-semibold text-sm group-hover:underline">All Courses &rarr;</div>
        <div class="text-xs text-white/70 mt-1">UG, PG & Diploma programs</div>
      </a>
      <a href="<?= url('placements/') ?>" class="p-4 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 transition block group">
        <div class="text-gold font-semibold text-sm group-hover:underline">Placements &rarr;</div>
        <div class="text-xs text-white/70 mt-1">Top recruiters & packages</div>
      </a>
      <a href="<?= url('about/') ?>" class="p-4 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 transition block group">
        <div class="text-gold font-semibold text-sm group-hover:underline">About Us &rarr;</div>
        <div class="text-xs text-white/70 mt-1">Vision, approvals & leadership</div>
      </a>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

