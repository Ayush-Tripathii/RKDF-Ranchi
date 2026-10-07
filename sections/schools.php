<?php
/**
 * RKDF University — Schools & Faculties Section
 */
$schools_list = [
    ['name' => 'Engineering & Technology',  'programs' => 22, 'icon' => 'cpu',         'href' => 'departments/school-engineering.php'],
    ['name' => 'Institute of Pharmacy',     'programs' => 14, 'icon' => 'heart-pulse', 'href' => 'departments/school-pharmacy.php'],
    ['name' => 'Management & Commerce',     'programs' => 18, 'icon' => 'briefcase',   'href' => 'departments/school-management.php'],
    ['name' => 'Faculty of Law',            'programs' => 8,  'icon' => 'scale',       'href' => 'departments/school-law.php'],
    ['name' => 'Arts & Humanities',         'programs' => 16, 'icon' => 'palette',     'href' => 'departments/school-of-arts-and-humanities.php'],
    ['name' => 'Basic & Applied Sciences',  'programs' => 20, 'icon' => 'microscope',  'href' => 'departments/school-of-basic-and-applied-sciences.php'],
    ['name' => 'Life Sciences & Biotech',   'programs' => 12, 'icon' => 'leaf',        'href' => 'departments/school-of-life-sciences.php'],
    ['name' => 'Information Technology',    'programs' => 10, 'icon' => 'laptop',      'href' => 'departments/school-of-information-technology.php'],
];
?>
<section class="bg-surface py-24 border-y border-border">
  <div class="mx-auto max-w-7xl px-6">
    <div class="flex items-end justify-between flex-wrap gap-4">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Schools & Faculties</div>
        <h2 class="font-serif text-4xl md:text-5xl mt-3 font-normal">Twelve faculties. Endless possibilities.</h2>
      </div>
      <a href="<?= url('departments/') ?>" class="text-sm font-medium text-brand inline-flex items-center gap-1 hover:gap-2 transition-all">
        View all faculties
        <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
      </a>
    </div>

    <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($schools_list as $s): ?>
        <a href="<?= url($s['href']) ?>" class="group rounded-2xl border border-border bg-card p-6 transition hover:-translate-y-1 hover:border-gold hover:shadow-xl">
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
