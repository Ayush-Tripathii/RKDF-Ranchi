<?php
/**
 * RKDF University — Campus Life Section
 */
$campus_features = [
    [
        'title' => 'Modern Hostels',
        'desc'  => 'Comfortable, secure on-campus living for 12,000+ students.',
        'icon'  => 'building',
    ],
    [
        'title' => 'Central Library',
        'desc'  => '650,000 volumes, digital archives, 24/7 study commons.',
        'icon'  => 'library',
    ],
    [
        'title' => 'Sports Complex',
        'desc'  => 'Olympic-spec facilities, 30+ sports, varsity teams.',
        'icon'  => 'dumbbell',
    ],
    [
        'title' => 'Global Exchange',
        'desc'  => 'Semester abroad programs at 60+ partner universities.',
        'icon'  => 'globe',
    ],
];
?>
<section class="mx-auto max-w-7xl px-6 py-24">
  <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Campus Life</div>
  <h2 class="font-serif text-4xl md:text-5xl mt-3 max-w-3xl text-foreground font-normal">
    A community where ideas, art and ambition thrive.
  </h2>

  <div class="mt-12 grid lg:grid-cols-12 gap-6">
    <!-- Big Feature Card -->
    <div class="lg:col-span-6 relative rounded-2xl overflow-hidden min-h-[420px]">
      <img src="<?= img('students-collab.jpg') ?>" alt="Students" width="1280" height="960" loading="lazy" class="absolute inset-0 w-full h-full object-cover" />
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="text-xs tracking-[0.2em] uppercase text-gold">Student Life</div>
        <div class="font-serif text-3xl mt-2 max-w-md font-normal">
          120+ student clubs, 40 cultural festivals, one vibrant community.
        </div>
      </div>
    </div>

    <!-- 2x2 Feature Grid -->
    <div class="lg:col-span-6 grid sm:grid-cols-2 gap-6">
      <?php foreach ($campus_features as $feature): ?>
        <div class="group rounded-2xl bg-surface border border-border p-6 hover:border-brand hover:shadow-md transition">
          <span class="inline-flex w-11 h-11 rounded-lg bg-brand/10 text-brand items-center justify-center group-hover:bg-brand group-hover:text-brand-foreground transition">
            <?= lucide_icon($feature['icon'], 'w-5 h-5') ?>
          </span>
          <div class="font-serif text-xl mt-5 text-foreground font-normal"><?= e($feature['title']) ?></div>
          <div class="text-sm text-muted-foreground mt-2"><?= e($feature['desc']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
