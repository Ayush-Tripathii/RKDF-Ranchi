<?php
$page_title = "Campus Health Facilities & Medical Center | RKDF University Ranchi";
$page_meta_desc = "On-campus health center, 24x7 emergency medical assistance, doctor-on-call, first aid, and ambulance services for students and faculty at RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('heart-pulse', 'w-4 h-4 text-gold') ?>
      <span>Student Wellness &amp; Healthcare</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Campus Health Facilities</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Comprehensive medical support, regular health checkups, emergency care, and round-the-clock ambulance services on campus.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-500 flex items-center justify-center mb-4">
          <?= lucide_icon('stethoscope', 'w-6 h-6') ?>
        </div>
        <h3 class="font-bold text-foreground text-lg mb-2">Resident Medical Officers</h3>
        <p class="text-sm text-muted-foreground">Qualified doctors and trained nursing staff available during campus hours for primary consultations and treatments.</p>
      </div>

      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-rose-500/10 text-rose-500 flex items-center justify-center mb-4">
          <?= lucide_icon('truck', 'w-6 h-6') ?>
        </div>
        <h3 class="font-bold text-foreground text-lg mb-2">24x7 Ambulance Service</h3>
        <p class="text-sm text-muted-foreground">Dedicated emergency ambulance stationed on campus with tie-ups with leading super-specialty hospitals in Ranchi.</p>
      </div>

      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-500 flex items-center justify-center mb-4">
          <?= lucide_icon('activity', 'w-6 h-6') ?>
        </div>
        <h3 class="font-bold text-foreground text-lg mb-2">First Aid &amp; Dispensary</h3>
        <p class="text-sm text-muted-foreground">Well-stocked pharmacy providing essential medicines, first-aid kits, oxygen cylinders, and basic diagnostic equipment.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
