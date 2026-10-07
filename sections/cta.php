<?php
/**
 * RKDF University — Call to Action Section
 */
?>
<section class="relative overflow-hidden bg-brand text-brand-foreground py-24">
  <div class="absolute inset-0 opacity-20">
    <video src="<?= img('hero-video.mp4') ?>" autoplay muted loop playsinline class="w-full h-full object-cover"></video>
  </div>
  <div class="relative mx-auto max-w-4xl px-6 text-center">
    <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Admissions 2026-27</div>
    <h2 class="font-serif text-4xl md:text-6xl mt-4 leading-tight font-normal">
      Your journey to <em class="italic-serif">extraordinary</em> begins here.
    </h2>
    <p class="mt-5 text-white/80 max-w-xl mx-auto">
      Applications close on July 31, 2026. Scholarships available for merit and means-based candidates.
    </p>
    <div class="mt-8 flex flex-wrap gap-3 justify-center">
      <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 rounded-full bg-gold text-brand px-6 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white transition shadow-md">
        Apply Now
        <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
      </a>
      <a href="<?= url('documents/RKDF-PROSPECTUS.pdf') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/10 px-6 py-3 text-sm font-medium hover:bg-white/20 transition text-white">
        <?= lucide_icon('download', 'w-4 h-4') ?>
        Download Prospectus
      </a>
    </div>
  </div>
</section>
