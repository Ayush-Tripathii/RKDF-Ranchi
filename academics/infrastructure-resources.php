<?php
$page_title = "Campus Infrastructure & Advanced Laboratories | RKDF University Ranchi";
$page_meta_desc = "Modern campus infrastructure, smart digital classrooms, high-tech engineering & pharmacy labs, auditorium, and green sustainable campus.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('building', 'w-4 h-4 text-gold') ?>
      <span>World-Class Infrastructure</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Campus Infrastructure &amp; Labs</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Equipped with modern engineering workshops, pharmaceutical labs, high-speed computer centers, moot court, and smart classrooms.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">Smart Classrooms</h3>
        <p class="text-sm text-muted-foreground">Acoustically treated, air-conditioned lecture halls with multimedia interactive touch displays and audio systems.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">Advanced Labs</h3>
        <p class="text-sm text-muted-foreground">AICTE &amp; PCI compliant laboratories for Robotics, CAD/CAM, Pharmaceutics, Moot Court, and Media Studios.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">Central Auditorium</h3>
        <p class="text-sm text-muted-foreground">500+ seating capacity modern auditorium for national seminars, convocations, and cultural fests.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
