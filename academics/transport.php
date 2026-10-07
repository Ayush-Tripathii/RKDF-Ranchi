<?php
$page_title = "Campus Transport & Bus Routes | RKDF University Ranchi";
$page_meta_desc = "University bus fleet connecting all major points across Ranchi, Kathal More, Argora, Ratu Road, Doranda, Lalpur, and Dhurwa.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('bus', 'w-4 h-4 text-gold') ?>
      <span>Campus Commute</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">University Transport System</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Convenient, safe, and punctual bus service connecting students and faculty from all major nodes of Ranchi city.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="bg-card border border-border rounded-2xl p-6 sm:p-8 shadow-sm">
      <h2 class="text-xl font-bold text-foreground mb-4">Key Bus Routes Covering Ranchi City</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
        <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
          <h4 class="font-bold text-brand mb-1">Route 1: Ratu Road - Kathal More</h4>
          <p class="text-xs text-muted-foreground">Piska More &rarr; Ratu Road &rarr; Harmu &rarr; Argora Chowk &rarr; Kathal More &rarr; Campus</p>
        </div>
        <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
          <h4 class="font-bold text-brand mb-1">Route 2: Lalpur - Kantatoli - Doranda</h4>
          <p class="text-xs text-muted-foreground">Lalpur Chowk &rarr; Kantatoli &rarr; Sujata Chowk &rarr; Doranda &rarr; Birsa Chowk &rarr; Campus</p>
        </div>
        <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
          <h4 class="font-bold text-brand mb-1">Route 3: Dhurwa - HEC Sector</h4>
          <p class="text-xs text-muted-foreground">Dhurwa Bus Stand &rarr; HEC Sector 2 &rarr; Birsa Chowk &rarr; Kathal More &rarr; Campus</p>
        </div>
        <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
          <h4 class="font-bold text-brand mb-1">Route 4: Booty More - Morabadi</h4>
          <p class="text-xs text-muted-foreground">Booty More &rarr; Morabadi Ground &rarr; Kanke Road &rarr; Pundag &rarr; Campus</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
