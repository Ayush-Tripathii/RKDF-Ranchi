<?php
$page_title = "Chancellor's Message | Leadership — RKDF University Ranchi";
$page_meta_desc = "Message from the Hon'ble Chancellor Dr. Sadhna Kapoor, inspiring academic excellence, student empowerment, and global holistic education at RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('crown', 'w-4 h-4 text-gold') ?>
      <span>University Leadership</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Chancellor's Message</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      “Education is the greatest catalyst for societal transformation, nation-building, and human enlightenment.”
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      
      <div class="lg:col-span-3 space-y-8">
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-10 shadow-sm">
          
          <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 mb-8 pb-6 border-b border-border">
            <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-brand to-slate-900 text-gold flex items-center justify-center font-serif text-4xl font-bold shadow-md shrink-0">
              SK
            </div>
            <div class="text-center sm:text-left">
              <span class="inline-block px-3 py-1 rounded-full bg-gold/15 text-gold text-xs font-semibold uppercase tracking-wider mb-2">Hon'ble Chancellor</span>
              <h2 class="text-2xl font-bold text-foreground">Dr. Sadhna Kapoor</h2>
              <p class="text-sm text-muted-foreground mt-1">Chancellor, RKDF University Ranchi</p>
            </div>
          </div>

          <div class="prose prose-slate max-w-none text-muted-foreground leading-relaxed space-y-4 text-sm sm:text-base">
            <p class="text-foreground font-medium italic text-base border-l-4 border-gold pl-4 py-1 bg-muted/30 rounded-r-lg">
              "Moving towards a better tomorrow through affordable, value-based, and technologically advanced higher education."
            </p>
            <p>
              It gives me immense pride and joy to welcome you to RKDF University, Ranchi. In an era defined by rapid technological disruptions and interconnected global economies, higher education must transcend traditional textbook teaching and nurture critical thinking, ethical grounding, and innovative problem-solving abilities.
            </p>
            <p>
              At RKDF University Ranchi, our endeavor is to provide students with state-of-the-art academic infrastructure, experienced faculty mentorship, industry-aligned curricula, and hands-on practical exposure across 12 diverse academic schools ranging from Engineering, Health &amp; Pharmaceutical Sciences, Management, Law, and Sciences.
            </p>
            <p>
              We firmly believe that financial limitations should never hinder a meritorious student's aspiration. Through our extensive Jharkhand State scholarships, merit fee waivers, and inclusive pedagogy, we are committed to empowering youth across all districts of Jharkhand and neighboring regions.
            </p>
            <p>
              I extend my heartfelt best wishes to all students, researchers, and faculty members. May your journey at RKDF University Ranchi be filled with curiosity, achievements, and meaningful contributions to our society and nation.
            </p>
          </div>

        </div>
      </div>

      <!-- Right Sidebar -->
      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">
            University Officers
          </h3>
          <ul class="space-y-2 text-sm">
            <li>
              <a href="<?= url('about/chancellor.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold">
                <span>Chancellor's Message</span>
                <?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?>
              </a>
            </li>
            <li>
              <a href="<?= url('about/managing-director.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition">
                <span>Managing Director</span>
                <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
              </a>
            </li>
            <li>
              <a href="<?= url('about/vice-chancellor.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition">
                <span>Vice Chancellor</span>
                <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
              </a>
            </li>
            <li>
              <a href="<?= url('about/registrar.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition">
                <span>Registrar</span>
                <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
              </a>
            </li>
            <li>
              <a href="<?= url('about/controller-of-examination.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition">
                <span>Controller of Examination</span>
                <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
