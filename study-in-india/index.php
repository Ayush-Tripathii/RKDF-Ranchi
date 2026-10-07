<?php
$page_title = "Study in India | International Student Admissions — RKDF University Ranchi";
$page_meta_desc = "International admissions at RKDF University Ranchi for foreign students, offering UGC recognized undergraduate, postgraduate, and doctoral degrees with global mentorship.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('globe', 'w-4 h-4 text-gold') ?>
      <span>International Admissions</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Study in India @ RKDF Ranchi</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Welcoming international students from SAARC, Africa, Southeast Asia, and across the globe with dedicated international support.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">Global Recognitions</h3>
        <p class="text-sm text-muted-foreground">UGC recognized, AIU listed, PCI, BCI approved degrees recognized by international evaluation bodies globally.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">International Cell</h3>
        <p class="text-sm text-muted-foreground">Dedicated single-window assistance for student VISA facilitation, FRRO registration, and hostel settlement.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">Affordable Fee Structure</h3>
        <p class="text-sm text-muted-foreground">Highly competitive tuition fees, comfortable residential hostels, and safe green campus environment.</p>
      </div>
    </div>
    <div class="text-center">
      <a href="<?= url('study-in-india/admission-international-students.php') ?>" class="inline-flex items-center gap-2 py-3 px-6 rounded-xl bg-brand text-white font-semibold text-sm hover:bg-brand/90 transition shadow">
        <span>International Admission Guidelines &amp; Process</span>
        <?= lucide_icon('arrow-right', 'w-4 h-4 text-gold') ?>
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
