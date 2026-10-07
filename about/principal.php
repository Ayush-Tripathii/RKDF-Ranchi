<?php
$page_title = "College Principals | RKDF University Ranchi";
$page_meta_desc = "Principals and Academic Directors of Constituent Institutes and Colleges at RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('award', 'w-4 h-4 text-gold') ?>
      <span>Constituent College Heads</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">College Principals &amp; Heads</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Leading pedagogical excellence and laboratory practicums across our specialized institutes.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-brand text-gold flex items-center justify-center font-bold mb-4">
          <?= lucide_icon('pill', 'w-6 h-6') ?>
        </div>
        <h3 class="font-bold text-foreground text-lg mb-1">Dr. Fedelic Ashish Topoo</h3>
        <p class="text-brand text-xs font-semibold uppercase tracking-wider mb-3">Principal</p>
        <p class="text-sm text-muted-foreground">School of Pharmaceutical Sciences, RKDF University Ranchi. PCI approved B.Pharm &amp; D.Pharm administration.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-brand text-gold flex items-center justify-center font-bold mb-4">
          <?= lucide_icon('cpu', 'w-6 h-6') ?>
        </div>
        <h3 class="font-bold text-foreground text-lg mb-1">Dr. Rajeev Ranjan</h3>
        <p class="text-brand text-xs font-semibold uppercase tracking-wider mb-3">Dean &amp; Principal</p>
        <p class="text-sm text-muted-foreground">School of Engineering &amp; Technology, RKDF University Ranchi. B.Tech, M.Tech, and Polytechnic Diploma programs.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-brand text-gold flex items-center justify-center font-bold mb-4">
          <?= lucide_icon('scale', 'w-6 h-6') ?>
        </div>
        <h3 class="font-bold text-foreground text-lg mb-1">Dr. Sheetal Topno</h3>
        <p class="text-brand text-xs font-semibold uppercase tracking-wider mb-3">Dean Academics &amp; Head</p>
        <p class="text-sm text-muted-foreground">School of Law &amp; Legal Studies, RKDF University Ranchi. Bar Council of India (BCI) recognized law programs.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
