<?php
$page_title = "Common Value-Added & Skill Courses | RKDF University Ranchi";
$page_meta_desc = "Common multidisciplinary foundation courses in Environmental Science, Digital Literacy, Communication Skills, and Ethics across all undergraduate programs.";
require_once __DIR__ . '/includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('layers', 'w-4 h-4 text-gold') ?>
      <span>NEP 2020 Multidisciplinary Basket</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Common Courses for All</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Value-added, ability enhancement, and skill development courses mandatory for all undergraduate students.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-base mb-1">Ability Enhancement Courses (AEC)</h3>
        <p class="text-sm text-muted-foreground">English Communication, Professional Writing, and Modern Indian Languages.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-base mb-1">Skill Enhancement Courses (SEC)</h3>
        <p class="text-sm text-muted-foreground">Digital Fluency, Python for Problem Solving, Financial Literacy, and Entrepreneurship.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-base mb-1">Value-Added Courses (VAC)</h3>
        <p class="text-sm text-muted-foreground">Environmental Studies, Indian Constitution, Universal Human Values, and Yoga &amp; Wellness.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-base mb-1">Multidisciplinary Electives (MDC)</h3>
        <p class="text-sm text-muted-foreground">Open elective courses enabling cross-disciplinary learning across Science, Commerce, and Humanities.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
