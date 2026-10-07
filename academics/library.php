<?php
$page_title = "Central Library & Digital Knowledge Center | RKDF University Ranchi";
$page_meta_desc = "Over 45,000+ volumes, 120+ national and international journals, e-books, DELNET, IEEE, and NDLI digital library access at RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('book-open', 'w-4 h-4 text-gold') ?>
      <span>Knowledge Repository</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Central Library &amp; E-Resources</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      A modern, automated knowledge hub equipped with rich physical collections, digital databases, and quiet reading zones.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
      <div class="p-6 rounded-2xl bg-card border border-border text-center">
        <div class="text-3xl font-serif font-bold text-brand mb-1">45,000+</div>
        <div class="text-xs text-muted-foreground">Print Books &amp; Volumes</div>
      </div>
      <div class="p-6 rounded-2xl bg-card border border-border text-center">
        <div class="text-3xl font-serif font-bold text-brand mb-1">12,000+</div>
        <div class="text-xs text-muted-foreground">E-Journals &amp; Databases</div>
      </div>
      <div class="p-6 rounded-2xl bg-card border border-border text-center">
        <div class="text-3xl font-serif font-bold text-brand mb-1">DELNET &amp; NDLI</div>
        <div class="text-xs text-muted-foreground">Consortium Access</div>
      </div>
      <div class="p-6 rounded-2xl bg-card border border-border text-center">
        <div class="text-3xl font-serif font-bold text-brand mb-1">200+</div>
        <div class="text-xs text-muted-foreground">Reading Capacity</div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
