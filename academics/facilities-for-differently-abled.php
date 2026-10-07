<?php
$page_title = "Facilities for Differently Abled (Divyangjan) | RKDF University Ranchi";
$page_meta_desc = "Barrier-free accessible campus, ramps, lifts, tactile paths, disabled-friendly washrooms, and assistive technologies at RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('accessibility', 'w-4 h-4 text-gold') ?>
      <span>Inclusive &amp; Barrier-Free Campus</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Facilities for Divyangjan</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Committed to ensuring an inclusive, empowering, and accessible learning environment for all differently-abled students and staff.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2 flex items-center gap-2">
          <?= lucide_icon('check-circle-2', 'w-5 h-5 text-emerald-500') ?>
          Barrier-Free Architectural Access
        </h3>
        <p class="text-sm text-muted-foreground leading-relaxed">
          All academic blocks, libraries, administrative offices, and hostel buildings are equipped with gently graded wheelchair ramps with handrails and wide entrance doors.
        </p>
      </div>

      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2 flex items-center gap-2">
          <?= lucide_icon('check-circle-2', 'w-5 h-5 text-emerald-500') ?>
          Specialized Restrooms &amp; Elevators
        </h3>
        <p class="text-sm text-muted-foreground leading-relaxed">
          Dedicated disabled-friendly washrooms with support grab bars and spacious layouts are situated on every floor alongside elevator access.
        </p>
      </div>

      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2 flex items-center gap-2">
          <?= lucide_icon('check-circle-2', 'w-5 h-5 text-emerald-500') ?>
          Assistive Digital Technologies
        </h3>
        <p class="text-sm text-muted-foreground leading-relaxed">
          Screen reading software, digital audio resources, and specialized examination support including scribes and extra time allowances as per UGC guidelines.
        </p>
      </div>

      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2 flex items-center gap-2">
          <?= lucide_icon('check-circle-2', 'w-5 h-5 text-emerald-500') ?>
          Dedicated Grievance &amp; Equal Opportunity Cell
        </h3>
        <p class="text-sm text-muted-foreground leading-relaxed">
          The Equal Opportunity Cell actively monitors accessibility needs and resolves student queries on priority.
        </p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
