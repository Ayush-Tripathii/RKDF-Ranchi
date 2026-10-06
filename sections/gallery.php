<?php
/**
 * RKDF University — Moments from Campus Life Gallery Section
 */
$gallery_items = [
    [
        'src'     => 'gallery_1.jpg',
        'caption' => '2nd Convocation Ceremony · December 2025',
        'span'    => 'md:col-span-2 md:row-span-2',
    ],
    [
        'src'     => 'gallery_2.jpg',
        'caption' => 'Founder\'s Address',
        'span'    => '',
    ],
    [
        'src'     => 'gallery_3.jpg',
        'caption' => 'Chhau — Cultural Heritage Showcase',
        'span'    => '',
    ],
    [
        'src'     => 'gallery_4.jpg',
        'caption' => 'Ceremonial Pipe Band',
        'span'    => '',
    ],
    [
        'src'     => 'gallery_5.jpg',
        'caption' => 'Guard of Honour March',
        'span'    => '',
    ],
    [
        'src'     => 'gallery_6.jpg',
        'caption' => 'Convocation Address',
        'span'    => '',
    ],
    [
        'src'     => 'gallery_7.jpg',
        'caption' => 'RKDF University · Ranchi Campus',
        'span'    => 'md:col-span-2',
    ],
];
?>
<section class="mx-auto max-w-7xl px-6 py-24">
  <div class="flex items-end justify-between flex-wrap gap-4">
    <div>
      <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Gallery</div>
      <h2 class="font-serif text-4xl md:text-5xl mt-3 font-normal text-foreground">
        Moments from <em class="italic-serif">campus life</em>.
      </h2>
      <p class="mt-4 text-muted-foreground max-w-xl">
        Glimpses of convocations, cultural celebrations and life on the RKDF campus.
      </p>
    </div>
    <a href="<?= url('media/gallery.php') ?>" class="text-sm font-medium text-brand inline-flex items-center gap-1 hover:gap-2 transition-all">
      View full gallery
      <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
    </a>
  </div>

  <div class="mt-10 grid grid-cols-2 md:grid-cols-4 auto-rows-[220px] gap-4">
    <?php foreach ($gallery_items as $item): ?>
      <figure class="relative overflow-hidden rounded-xl group <?= e($item['span']) ?>">
        <img src="<?= img($item['src']) ?>" alt="<?= e($item['caption']) ?>" loading="lazy" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <figcaption class="absolute bottom-0 left-0 right-0 p-4 text-white text-sm font-medium">
          <?= e($item['caption']) ?>
        </figcaption>
      </figure>
    <?php endforeach; ?>
  </div>
</section>
