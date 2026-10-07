<?php
$page_title = "Sports & Fitness Facilities | RKDF University Ranchi";
$page_meta_desc = "State-of-the-art sports grounds, indoor badminton, table tennis, cricket pitch, basketball court, and gymnasium at RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('trophy', 'w-4 h-4 text-gold') ?>
      <span>Athletics &amp; Physical Fitness</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Sports Facilities &amp; Complexes</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Fostering teamwork, sportsmanship, and physical wellness through world-class outdoor and indoor sports infrastructure.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-brand text-gold flex items-center justify-center mb-4"><?= lucide_icon('shield', 'w-6 h-6') ?></div>
        <h3 class="font-bold text-foreground text-base mb-1">Cricket Ground</h3>
        <p class="text-xs text-muted-foreground">Full-size cricket ground with turf wickets for inter-college tournaments and annual sports meets.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-brand text-gold flex items-center justify-center mb-4"><?= lucide_icon('circle-dot', 'w-6 h-6') ?></div>
        <h3 class="font-bold text-foreground text-base mb-1">Football Field</h3>
        <p class="text-xs text-muted-foreground">Standard size lush green football pitch with professional goalposts and athletic track.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-brand text-gold flex items-center justify-center mb-4"><?= lucide_icon('layout-grid', 'w-6 h-6') ?></div>
        <h3 class="font-bold text-foreground text-base mb-1">Basketball &amp; Volleyball</h3>
        <p class="text-xs text-muted-foreground">Floodlit concrete basketball court and international-dimension volleyball court.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-brand text-gold flex items-center justify-center mb-4"><?= lucide_icon('dumbbell', 'w-6 h-6') ?></div>
        <h3 class="font-bold text-foreground text-base mb-1">Fitness Gymnasium</h3>
        <p class="text-xs text-muted-foreground">Modern fitness center equipped with cardio stations, free weights, and fitness instructors.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
