<?php
/**
 * RKDF University — Schools & Faculties Section
 */
$schools_list = [
    ['name' => 'Engineering & Technology',  'programs' => 22, 'icon' => 'cpu'],
    ['name' => 'Medical & Health Sciences', 'programs' => 14, 'icon' => 'heart-pulse'],
    ['name' => 'Management & Commerce',     'programs' => 18, 'icon' => 'briefcase'],
    ['name' => 'Law & Governance',          'programs' => 8,  'icon' => 'scale'],
    ['name' => 'Arts, Humanities & Design', 'programs' => 16, 'icon' => 'palette'],
    ['name' => 'Sciences & Research',       'programs' => 20, 'icon' => 'microscope'],
    ['name' => 'Architecture & Planning',   'programs' => 6,  'icon' => 'landmark'],
    ['name' => 'Education & Pedagogy',      'programs' => 10, 'icon' => 'book-open'],
];
?>
<section class="bg-surface py-24 border-y border-border">
  <div class="mx-auto max-w-7xl px-6">
    <div class="flex items-end justify-between flex-wrap gap-4">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Schools & Faculties</div>
        <h2 class="font-serif text-4xl md:text-5xl mt-3 font-normal">Eleven schools. Endless possibilities.</h2>
      </div>
      <a href="<?= url('departments/') ?>" class="text-sm font-medium text-brand inline-flex items-center gap-1 hover:gap-2 transition-all">
        View all schools
        <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
      </a>
    </div>

    <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($schools_list as $s): ?>
        <a href="<?= url('departments/') ?>" class="group rounded-2xl border border-border bg-card p-6 transition hover:-translate-y-1 hover:border-gold hover:shadow-xl">
          <span class="grid h-12 w-12 place-items-center rounded-xl bg-secondary text-brand transition group-hover:bg-brand group-hover:text-brand-foreground">
            <?= lucide_icon($s['icon'], 'w-6 h-6') ?>
          </span>
          <h3 class="mt-5 font-serif text-lg leading-tight text-foreground"><?= e($s['name']) ?></h3>
          <p class="mt-2 text-xs uppercase tracking-widest text-muted-foreground"><?= $s['programs'] ?> Programs</p>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
