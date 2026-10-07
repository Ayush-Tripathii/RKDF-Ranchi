<?php
/**
 * RKDF University — Newsroom Section
 */
$news_items = [
    [
        'tag'   => 'Research',
        'date'  => 'Jun 28, 2026',
        'image' => 'research-lab.jpg',
        'title' => 'RKDF researchers publish breakthrough on perovskite solar cells in Nature Energy.',
        'href'  => 'news.php',
    ],
    [
        'tag'   => 'Campus',
        'date'  => 'Jun 24, 2026',
        'image' => 'students-collab.jpg',
        'title' => 'New Centre for AI & Cognitive Sciences inaugurated by the Hon\'ble Governor.',
        'href'  => 'news.php',
    ],
    [
        'tag'   => 'Placement',
        'date'  => 'Jun 20, 2026',
        'image' => 'campus-library.jpg',
        'title' => 'Record placement season concludes with 412 international offers.',
        'href'  => 'news.php',
    ],
];
?>
<section class="mx-auto max-w-7xl px-6 py-24">
  <div class="flex items-end justify-between flex-wrap gap-4">
    <div>
      <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Newsroom</div>
      <h2 class="font-serif text-4xl md:text-5xl mt-3 font-normal">Latest from RKDF</h2>
    </div>
    <a href="<?= url('media/news.php') ?>" class="text-sm font-medium text-brand inline-flex items-center gap-1 hover:gap-2 transition-all">
      All news
      <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
    </a>
  </div>

  <div class="mt-10 grid md:grid-cols-3 gap-6">
    <?php foreach ($news_items as $item): ?>
      <a href="<?= url('media/news.php') ?>" class="group">
        <div class="overflow-hidden rounded-xl">
          <img src="<?= img($item['image']) ?>" alt="<?= e($item['title']) ?>" width="1280" height="960" loading="lazy" class="w-full h-64 object-cover group-hover:scale-105 transition duration-500" />
        </div>
        <div class="mt-4 flex items-center gap-3 text-xs text-muted-foreground">
          <span class="text-brand font-medium"><?= e($item['tag']) ?></span>
          <span>·</span>
          <span><?= e($item['date']) ?></span>
        </div>
        <h3 class="font-serif text-xl mt-2 leading-snug group-hover:text-brand transition text-foreground font-normal">
          <?= e($item['title']) ?>
        </h3>
      </a>
    <?php endforeach; ?>
  </div>
</section>
