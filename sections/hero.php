<?php
/**
 * RKDF University — Hero Section
 */
$hero_stats = [
    ['num' => '35K+',   'label' => 'Students'],
    ['num' => '1,200+', 'label' => 'Faculty'],
    ['num' => '150+',   'label' => 'Programs'],
    ['num' => '92%',    'label' => 'Placement'],
];

$quick_links = [
    ['icon' => 'graduation-cap', 'label' => 'Admissions', 'href' => 'admissions/'],
    ['icon' => 'book-open',      'label' => 'Programs',   'href' => 'courses/'],
    ['icon' => 'trophy',         'label' => 'Results',    'href' => 'admissions/examination-forms.php'],
    ['icon' => 'bell',           'label' => 'Notices',    'href' => 'media/news.php'],
    ['icon' => 'briefcase',      'label' => 'Placements', 'href' => 'placements/'],
    ['icon' => 'users',          'label' => 'Faculty',    'href' => 'departments/'],
];
?>
<section class="relative overflow-hidden">
  <!-- Video / Image Background -->
  <div class="absolute inset-0">
    <video src="<?= img('hero-video.mp4') ?>" autoplay muted loop playsinline class="w-full h-full object-cover"></video>
    <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/55 to-black/30"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
  </div>

  <!-- Hero Content Grid -->
  <div class="relative mx-auto max-w-7xl px-6 pt-20 pb-24 md:pt-28 md:pb-32 grid lg:grid-cols-12 gap-10 items-center">
    <!-- Left Column: Hero Text & Stats -->
    <div class="lg:col-span-7 text-white">
      <span class="inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wide">
        <span class="w-1.5 h-1.5 rounded-full bg-gold"></span>
        ADMISSIONS 2026 — NOW OPEN
      </span>

      <h1 class="font-serif mt-6 text-5xl md:text-7xl leading-[1.02] font-normal">
        Where curious minds <br />
        become <em class="italic-serif underline decoration-gold/70 decoration-2 underline-offset-8">extraordinary</em> leaders.
      </h1>

      <p class="mt-6 max-w-xl text-lg text-white/80">
        A multidisciplinary university shaping the next generation of scientists, physicians, engineers, entrepreneurs and artists.
      </p>

      <div class="mt-8 flex flex-wrap gap-3">
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 rounded-full bg-background text-foreground px-6 py-3 text-sm font-medium hover:bg-white transition shadow-md">
          Apply for 2026
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('departments/') ?>" class="inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/5 backdrop-blur text-white px-6 py-3 text-sm font-medium hover:bg-white/10 transition">
          <?= lucide_icon('play', 'w-4 h-4') ?>
          Explore Programs
        </a>
      </div>

      <!-- Hero Stats -->
      <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6 max-w-2xl border-t border-white/15 pt-8">
        <?php foreach ($hero_stats as $stat): ?>
          <div>
            <div class="font-serif text-3xl md:text-4xl"><?= $stat['num'] ?></div>
            <div class="text-[11px] tracking-[0.16em] uppercase text-white/70 mt-1"><?= $stat['label'] ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Right Column: Quick Access Card -->
    <div class="lg:col-span-5 lg:pt-4">
      <div class="rounded-2xl bg-background/95 backdrop-blur border border-white/20 shadow-2xl p-6 md:p-7 text-foreground">
        <div class="text-xs tracking-[0.18em] uppercase text-muted-foreground font-medium">Quick Access</div>
        <div class="font-serif text-2xl mt-1">Where would you like to go?</div>

        <div class="grid grid-cols-2 gap-3 mt-5">
          <?php foreach ($quick_links as $ql): ?>
            <a href="<?= url($ql['href']) ?>" class="group relative flex items-center justify-between rounded-xl border border-border bg-card px-4 py-3 overflow-hidden transition-all duration-300 hover:border-brand hover:shadow-lg hover:-translate-y-0.5">
              <span class="absolute inset-0 bg-gradient-to-br from-brand/0 to-brand/0 group-hover:from-brand/5 group-hover:to-brand/10 transition-all duration-300"></span>
              <span class="relative flex items-center gap-3">
                <span class="w-9 h-9 rounded-full bg-muted flex items-center justify-center transition-all duration-300 group-hover:bg-brand group-hover:scale-110 shrink-0">
                  <?= lucide_icon($ql['icon'], 'w-4 h-4 text-brand transition-colors duration-300 group-hover:text-brand-foreground') ?>
                </span>
                <span class="text-sm font-medium transition-colors group-hover:text-brand"><?= e($ql['label']) ?></span>
              </span>
              <?= lucide_icon('chevron-right', 'relative w-4 h-4 text-muted-foreground transition-all duration-300 group-hover:text-brand group-hover:translate-x-1 shrink-0') ?>
            </a>
          <?php endforeach; ?>
        </div>

        <!-- Latest Result Notice Box -->
        <div class="mt-5 rounded-xl bg-brand text-brand-foreground p-4">
          <div class="text-[10px] tracking-[0.18em] uppercase text-gold font-medium">Latest Result</div>
          <div class="mt-1 font-medium text-sm">B.Tech Semester VI results published</div>
          <a href="<?= url('admissions/examination-forms.php') ?>" class="mt-2 inline-flex items-center gap-1 text-sm text-white/90 hover:text-white transition">
            View results
            <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
