<?php
$page_title = "Students from Lohardaga | RKDF University Ranchi";
$page_meta_desc = "Admissions, courses, E-Kalyan scholarship, hostel, and career guidance for students from Lohardaga district at RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('map-pin', 'w-4 h-4 text-gold') ?>
      <span>Jharkhand District Outreach</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Students from Lohardaga District</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Direct connectivity to Ranchi campus, agricultural and life sciences, computer science programs.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      
      <!-- Main Details -->
      <div class="lg:col-span-2 space-y-8">
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-8 shadow-sm">
          <h2 class="text-xl font-bold text-foreground mb-4 flex items-center gap-2">
            <?= lucide_icon('graduation-cap', 'w-5 h-5 text-gold') ?>
            Higher Education Opportunities for Lohardaga Youth
          </h2>
          <p class="text-sm text-muted-foreground leading-relaxed mb-6">
            RKDF University Ranchi provides dedicated admission counseling, priority hostel seat allocation, and full documentation support for students from <strong>Lohardaga</strong> applying under Jharkhand Government E-Kalyan post-matric scholarship schemes.
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm mb-6">
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-brand mb-1">E-Kalyan Scholarship</h4>
              <p class="text-xs text-muted-foreground">Assistance for SC, ST, and OBC students with 100% tuition reimbursement support.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-brand mb-1">Hostel &amp; Transport</h4>
              <p class="text-xs text-muted-foreground">Guaranteed hostel rooms with 24x7 security, dining, and city bus connectivity.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-brand mb-1">Top Programs</h4>
              <p class="text-xs text-muted-foreground">B.Tech, B.Pharma, D.Pharma, BCA, BBA, LLB, MBA, and Polytechnic Diplomas.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-brand mb-1">Placement Guarantee</h4>
              <p class="text-xs text-muted-foreground">Campus drives with 150+ corporate recruiters offering salary packages up to ₹12 LPA.</p>
            </div>
          </div>

          <div class="flex flex-wrap items-center gap-4 pt-4 border-t border-border">
            <a href="<?= url('admissions/apply.php') ?>" class="py-2.5 px-6 rounded-xl bg-brand text-white font-semibold text-xs uppercase tracking-wider hover:bg-brand/90 transition shadow">
              Apply Online Now
            </a>
            <a href="<?= url('admissions/scholarship.php') ?>" class="py-2.5 px-6 rounded-xl bg-muted hover:bg-muted/80 text-foreground font-semibold text-xs uppercase tracking-wider transition">
              View Scholarship Schemes
            </a>
          </div>
        </div>
      </div>

      <!-- Right Sidebar -->
      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">
            All Jharkhand Districts
          </h3>
          <ul class="space-y-1.5 text-xs max-h-96 overflow-y-auto pr-1">
            <?php
            $otherDistricts = [
              'ranchi-district' => 'Ranchi',
              'dhanbad-district' => 'Dhanbad',
              'bokaro-district' => 'Bokaro',
              'hazaribagh-district' => 'Hazaribagh',
              'palamu-district' => 'Palamu',
              'chaibasa-district' => 'Chaibasa',
              'khunti-district' => 'Khunti',
              'lohardaga-district' => 'Lohardaga',
              'chatra-district' => 'Chatra',
              'gumla-district' => 'Gumla',
              'koderma-district' => 'Koderma',
              'ramgarh-district' => 'Ramgarh',
              'simdega-district' => 'Simdega'
            ];
            foreach ($otherDistricts as $s => $n):
              $isActive = ($s === 'lohardaga-district');
            ?>
            <li>
              <a href="<?= url('students-from-jharkhand/' . $s . '.php') ?>" class="flex items-center justify-between p-2 rounded-lg <?= $isActive ? 'bg-brand/10 text-brand font-bold' : 'hover:bg-muted text-muted-foreground hover:text-foreground' ?> transition">
                <span><?= $n ?> District</span>
                <?= lucide_icon('chevron-right', 'w-3.5 h-3.5') ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
