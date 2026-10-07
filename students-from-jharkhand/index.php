<?php
$page_title = "Students from Jharkhand | District Outreach & Scholarships — RKDF University Ranchi";
$page_meta_desc = "Dedicated admissions, E-Kalyan Jharkhand scholarships, transport, and hostel facilities for students from all 24 districts of Jharkhand at RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('map-pin', 'w-4 h-4 text-gold') ?>
      <span>Jharkhand State Student Support</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Students from Jharkhand</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Empowering local youth from every district with world-class education, 100% E-Kalyan scholarship guidance, and residential facilities.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <h2 class="text-2xl sm:text-3xl font-bold text-foreground mb-3 font-serif">District Outreach &amp; Support Desks</h2>
      <p class="text-sm text-muted-foreground">Select your home district to explore tailored scholarship benefits, transport connectivity, and admission counseling.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $districts = [
        ['slug' => 'ranchi-district',     'name' => 'Ranchi District',     'icon' => 'building-2', 'badge' => 'Campus City'],
        ['slug' => 'dhanbad-district',    'name' => 'Dhanbad District',    'icon' => 'pickaxe',    'badge' => 'Mining Hub'],
        ['slug' => 'bokaro-district',     'name' => 'Bokaro District',     'icon' => 'factory',    'badge' => 'Steel City'],
        ['slug' => 'hazaribagh-district', 'name' => 'Hazaribagh District', 'icon' => 'trees',      'badge' => 'Education Hub'],
        ['slug' => 'palamu-district',     'name' => 'Palamu District',     'icon' => 'sun',        'badge' => 'Palamu Division'],
        ['slug' => 'chaibasa-district',   'name' => 'Chaibasa District',   'icon' => 'mountain',   'badge' => 'Kolhan Division'],
        ['slug' => 'khunti-district',     'name' => 'Khunti District',     'icon' => 'shield',     'badge' => 'Direct Commute'],
        ['slug' => 'lohardaga-district',  'name' => 'Lohardaga District',  'icon' => 'route',      'badge' => 'Direct Bus'],
        ['slug' => 'chatra-district',     'name' => 'Chatra District',     'icon' => 'compass',    'badge' => 'Hostel Focus'],
        ['slug' => 'gumla-district',      'name' => 'Gumla District',      'icon' => 'heart',      'badge' => 'Tribal Welfare'],
        ['slug' => 'koderma-district',    'name' => 'Koderma District',    'icon' => 'sparkles',   'badge' => 'Mica Belt'],
        ['slug' => 'ramgarh-district',    'name' => 'Ramgarh District',    'icon' => 'activity',   'badge' => 'Daily Bus'],
        ['slug' => 'simdega-district',    'name' => 'Simdega District',    'icon' => 'trophy',     'badge' => 'Sports Quota'],
      ];
      foreach ($districts as $d):
      ?>
      <a href="<?= url('students-from-jharkhand/' . $d['slug'] . '.php') ?>" class="group bg-card border border-border rounded-2xl p-6 shadow-sm hover:border-gold hover:shadow-md transition">
        <div class="flex items-center justify-between mb-4">
          <div class="w-12 h-12 rounded-xl bg-brand/10 text-brand group-hover:bg-brand group-hover:text-gold flex items-center justify-center transition">
            <?= lucide_icon($d['icon'], 'w-6 h-6') ?>
          </div>
          <span class="text-[11px] font-semibold px-2.5 py-1 rounded-full bg-muted text-muted-foreground"><?= $d['badge'] ?></span>
        </div>
        <h3 class="font-bold text-foreground text-lg mb-1 group-hover:text-brand transition"><?= $d['name'] ?></h3>
        <p class="text-xs text-muted-foreground mb-4">Admissions, counseling, scholarship assistance, and hostel facilities.</p>
        <div class="inline-flex items-center gap-1 text-xs font-semibold text-brand group-hover:text-gold transition">
          <span>Explore District Portal</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
