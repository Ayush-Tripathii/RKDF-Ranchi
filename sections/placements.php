<?php
/**
 * RKDF University — Placements Section
 */
$placement_stats_list = [
    ['num' => '92%',  'label' => 'Placement rate'],
    ['num' => '₹48L', 'label' => 'Highest CTC'],
    ['num' => '412',  'label' => 'Recruiters'],
];

$top_companies = [
    'Google', 'Microsoft', 'Amazon', 'Goldman Sachs',
    'Deloitte', 'Infosys', 'TCS', 'JP Morgan',
    'Accenture', 'Wipro', 'IBM', 'Cognizant'
];
?>
<section class="bg-brand text-brand-foreground py-24">
  <div class="mx-auto max-w-7xl px-6">
    <div class="grid lg:grid-cols-12 gap-10">
      <div class="lg:col-span-5">
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Placements</div>
        <h2 class="font-serif text-4xl md:text-5xl mt-3 leading-tight font-normal">
          Careers launched at the world's best companies.
        </h2>
        <p class="mt-5 text-white/75 text-lg">
          Our graduates join leading organizations across technology, healthcare, finance, consulting, design and research worldwide.
        </p>
      </div>

      <div class="lg:col-span-7">
        <!-- Placement Metrics -->
        <div class="grid grid-cols-3 gap-6">
          <?php foreach ($placement_stats_list as $stat): ?>
            <div class="border-l-2 border-gold pl-4">
              <div class="font-serif text-4xl md:text-5xl"><?= $stat['num'] ?></div>
              <div class="text-xs tracking-[0.16em] uppercase text-white/70 mt-2"><?= $stat['label'] ?></div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Recruiters Grid -->
        <div class="mt-10 grid grid-cols-3 md:grid-cols-4 gap-3">
          <?php foreach ($top_companies as $company): ?>
            <div class="rounded-lg border border-white/15 bg-white/5 py-3 text-center text-sm text-white/90 font-medium">
              <?= e($company) ?>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="mt-8 flex justify-start">
          <a href="<?= url('placements/') ?>" class="inline-flex items-center gap-2 rounded-full bg-gold text-brand px-6 py-3 text-xs font-bold uppercase tracking-wider hover:bg-white transition shadow-lg">
            <span>View Full Placement Report &amp; Recruiters</span>
            <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
