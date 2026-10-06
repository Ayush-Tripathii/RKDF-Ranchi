<?php
/**
 * RKDF University — About Section
 */
$about_highlights = [
    ['title' => 'NAAC A+ Accredited',  'desc' => 'Recognized for academic excellence and institutional integrity.'],
    ['title' => 'Research Intensive',   'desc' => 'Over 300 funded projects across science, technology and medicine.'],
    ['title' => 'Global Partnerships',  'desc' => 'Exchange programs with 60+ leading universities worldwide.'],
    ['title' => 'Industry Aligned',     'desc' => 'Curriculum co-designed with Fortune 500 industry partners.'],
];
?>
<section class="mx-auto max-w-7xl px-6 py-24 grid lg:grid-cols-12 gap-12 items-center">
  <div class="lg:col-span-6">
    <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">About RKDF</div>
    <h2 class="font-serif text-4xl md:text-5xl mt-3 leading-tight font-normal">
      Two decades of academic <em class="italic-serif">distinction</em> and discovery.
    </h2>
    <p class="mt-5 text-muted-foreground text-lg">
      Established to advance knowledge through teaching, research, and community service, RKDF University brings together 11 schools, 35,000 students, and a faculty drawn from the world's leading institutions.
    </p>

    <div class="mt-8 grid sm:grid-cols-2 gap-5">
      <?php foreach ($about_highlights as $h): ?>
        <div class="border-l-2 border-gold pl-4">
          <div class="font-serif text-lg text-foreground"><?= e($h['title']) ?></div>
          <div class="text-sm text-muted-foreground mt-1"><?= e($h['desc']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>

    <a href="<?= url('about/') ?>" class="inline-flex items-center gap-1 mt-8 text-sm font-medium text-brand hover:gap-2 transition-all">
      Learn more about our story
      <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
    </a>
  </div>

  <div class="lg:col-span-6 relative">
    <img src="<?= img('campus-library.jpg') ?>" alt="RKDF library" width="1280" height="960" loading="lazy" class="rounded-2xl w-full h-[520px] object-cover shadow-xl" />
    <div class="absolute -bottom-6 -left-6 bg-brand text-brand-foreground rounded-xl p-5 shadow-xl">
      <div class="font-serif text-4xl">#42</div>
      <div class="text-[11px] tracking-[0.16em] uppercase text-gold mt-1">NIRF Ranked 2025</div>
    </div>
  </div>
</section>
