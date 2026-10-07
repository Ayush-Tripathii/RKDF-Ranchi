<?php
$page_title = "Hostels & Residential Life | RKDF University Ranchi";
$page_meta_desc = "Safe, comfortable, Wi-Fi enabled residential hostels for boys and girls with 24x7 security, dining mess, and recreation facilities at RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('home', 'w-4 h-4 text-gold') ?>
      <span>Residential Campus Living</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Hostels &amp; Accommodations</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      A home away from home with round-the-clock security, nutritious dining, high-speed Wi-Fi, and vibrant student community spaces.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">Separate Hostels</h3>
        <p class="text-sm text-muted-foreground">Dedicated secure hostel complexes for boys and girls with resident wardens and strict biometric access.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">Hygienic Dining Mess</h3>
        <p class="text-sm text-muted-foreground">Nutritious, multi-cuisine meals prepared in steam kitchens inspected regularly by the food safety committee.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">24x7 Power &amp; Wi-Fi</h3>
        <p class="text-sm text-muted-foreground">Full power backup, solar water heaters, study lounges, laundry facilities, and high-speed internet.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
