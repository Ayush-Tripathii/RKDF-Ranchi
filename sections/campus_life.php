<?php
/**
 * RKDF University — Campus Life Section
 */
$campus_features = [
    [
        'title' => 'Student Hostels',
        'desc'  => 'Comfortable, secure on-campus living for 12,000+ students.',
        'icon'  => 'building',
        'href'  => 'facilities/hostel.php',
    ],
    [
        'title' => 'Central Library',
        'desc'  => '50,000+ volumes, DELNET digital archives & study commons.',
        'icon'  => 'library',
        'href'  => 'facilities/library.php',
    ],
    [
        'title' => 'Sports Complex',
        'desc'  => 'Cricket ground, football arena, badminton & fitness gym.',
        'icon'  => 'trophy',
        'href'  => 'facilities/sports.php',
    ],
    [
        'title' => 'Transport Fleet',
        'desc'  => '08 GPS-tracked university buses across Ranchi routes.',
        'icon'  => 'bus',
        'href'  => 'facilities/transport.php',
    ],
];
?>
<section class="mx-auto max-w-7xl px-6 py-24">
  <div class="flex items-end justify-between flex-wrap gap-4">
    <div>
      <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Campus Life</div>
      <h2 class="font-serif text-4xl md:text-5xl mt-3 max-w-3xl text-foreground font-normal">
        A community where ideas, art and ambition thrive.
      </h2>
    </div>
    <a href="<?= url('facilities/') ?>" class="text-sm font-medium text-brand inline-flex items-center gap-1 hover:gap-2 transition-all">
      Explore all facilities
      <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
    </a>
  </div>

  <div class="mt-12 grid lg:grid-cols-12 gap-6">
    <!-- Big Feature Card -->
    <a href="<?= url('facilities/') ?>" class="group lg:col-span-6 relative rounded-2xl overflow-hidden min-h-[420px] block">
      <img src="<?= img('students-collab.jpg') ?>" alt="Students" width="1280" height="960" loading="lazy" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500" />
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Student Life</div>
        <div class="font-serif text-3xl mt-2 max-w-md font-normal">
          120+ student clubs, 40 cultural festivals, one vibrant community.
        </div>
      </div>
    </a>

    <!-- 2x2 Feature Grid -->
    <div class="lg:col-span-6 grid sm:grid-cols-2 gap-6">
      <?php foreach ($campus_features as $feature): ?>
        <a href="<?= url($feature['href']) ?>" class="group rounded-2xl bg-surface border border-border p-6 hover:border-brand hover:shadow-md transition block">
          <span class="inline-flex w-11 h-11 rounded-lg bg-brand/10 text-brand items-center justify-center group-hover:bg-brand group-hover:text-brand-foreground transition">
            <?= lucide_icon($feature['icon'], 'w-5 h-5') ?>
          </span>
          <div class="font-serif text-xl mt-5 text-foreground font-normal group-hover:text-brand transition"><?= e($feature['title']) ?></div>
          <div class="text-sm text-muted-foreground mt-2"><?= e($feature['desc']) ?></div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
