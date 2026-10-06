<?php
/**
 * RKDF University — Research & Innovation Section
 */
$research_points = [
    '₹120 Cr+ in active research funding',
    '18 Centres of Excellence',
    '1,400+ publications in indexed journals',
    '85 patents filed across disciplines',
];
?>
<section class="mx-auto max-w-7xl px-6 py-24 grid lg:grid-cols-12 gap-12 items-center">
  <div class="lg:col-span-6 order-2 lg:order-1">
    <img src="<?= img('research-lab.jpg') ?>" alt="Research lab" width="1280" height="960" loading="lazy" class="rounded-2xl w-full h-[500px] object-cover shadow-xl" />
  </div>
  <div class="lg:col-span-6 order-1 lg:order-2">
    <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Research & Innovation</div>
    <h2 class="font-serif text-4xl md:text-5xl mt-3 leading-tight font-normal">
      Research that <em class="italic-serif">moves the world</em> forward.
    </h2>
    <p class="mt-5 text-muted-foreground text-lg">
      From precision medicine to sustainable engineering, our researchers tackle the questions that matter — supported by world-class labs and a thriving culture of inquiry.
    </p>
    <ul class="mt-8 space-y-3">
      <?php foreach ($research_points as $point): ?>
        <li class="flex items-start gap-3">
          <span class="w-1.5 h-1.5 rounded-full bg-gold mt-2.5 shrink-0"></span>
          <span class="text-foreground"><?= e($point) ?></span>
        </li>
      <?php endforeach; ?>
    </ul>
    <a href="<?= url('research.php') ?>" class="inline-flex items-center gap-1 mt-8 text-sm font-medium text-brand hover:gap-2 transition-all">
      Explore Research
      <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
    </a>
  </div>
</section>
