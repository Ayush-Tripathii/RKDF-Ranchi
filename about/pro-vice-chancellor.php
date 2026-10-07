<?php
$page_title = "Pro Vice Chancellor | Academic Administration — RKDF University Ranchi";
$page_meta_desc = "Office of the Pro Vice Chancellor of RKDF University Ranchi, coordinating academic curriculum frameworks, faculty development, and international accreditations.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('user-check', 'w-4 h-4 text-gold') ?>
      <span>Academic Administration</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Pro Vice Chancellor</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Assisting in academic policy implementation, inter-school coordination, and institutional quality benchmarks.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      
      <div class="lg:col-span-3 space-y-8">
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-10 shadow-sm">
          <h2 class="text-2xl font-bold text-foreground mb-4">Academic &amp; Research Coordination</h2>
          <p class="text-muted-foreground leading-relaxed text-sm sm:text-base mb-6">
            The Office of the Pro Vice Chancellor works in close collaboration with the Vice Chancellor, Deans of Faculties, and Heads of Departments to ensure that teaching-learning standards, NEP 2020 curricular reforms, multidisciplinary credit frameworks, and university research initiatives are seamlessly executed.
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-foreground mb-1">Curricular Oversight</h4>
              <p class="text-xs text-muted-foreground">Continuous monitoring of outcome-based education (OBE) and credit transfers.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-foreground mb-1">Faculty Development</h4>
              <p class="text-xs text-muted-foreground">Workshops, research seminars, and pedagogical refresher programs for faculty.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">Officers</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="<?= url('about/vice-chancellor.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Vice Chancellor</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/pro-vice-chancellor.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold"><span>Pro Vice Chancellor</span><?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?></a></li>
            <li><a href="<?= url('about/registrar.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Registrar</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
