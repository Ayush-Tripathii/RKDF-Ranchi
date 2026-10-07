<?php
$page_title = "Academic Collaborations & Global MoUs | RKDF University Ranchi";
$page_meta_desc = "National and international academic collaborations, industry tie-ups, student exchange programs, and research MoUs at RKDF University Ranchi.";
require_once __DIR__ . '/includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('globe-2', 'w-4 h-4 text-gold') ?>
      <span>Institutional Partnerships</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Academic Collaborations &amp; MoUs</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Partnering with leading industries, research institutes, and universities worldwide for global learning and joint research.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">Industry Certification Partnerships</h3>
        <p class="text-sm text-muted-foreground">Collaborations with leading tech leaders and corporate firms for embedded certifications in AI, Cloud, and Data Science.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">Healthcare &amp; Hospital MoUs</h3>
        <p class="text-sm text-muted-foreground">Tie-ups with premier multi-specialty hospitals and clinical research centers for pharmacy and nursing internships.</p>
      </div>
      <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
        <h3 class="font-bold text-foreground text-lg mb-2">Research &amp; Patent Development</h3>
        <p class="text-sm text-muted-foreground">Joint collaborative research projects with national laboratories and funding agencies under DST, CSIR, and UGC.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
