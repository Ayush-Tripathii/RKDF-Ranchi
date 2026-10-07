<?php
/**
 * RKDF University — Alumni Voices Section
 */
$alumni_voices = [
    [
        'quote' => 'RKDF gave me the platform to pursue independent research as an undergraduate. I\'m now at Stanford for my PhD.',
        'name'  => 'Aanya Verma',
        'role'  => 'B.Tech CSE, 2023 · PhD Candidate, Stanford',
    ],
    [
        'quote' => 'The mentorship I received from faculty here transformed how I think about medicine and patient care.',
        'name'  => 'Dr. Rohan Mehta',
        'role'  => 'MBBS, 2022 · Resident, AIIMS',
    ],
    [
        'quote' => 'From clubs to capstone projects, every year at RKDF expanded what I thought was possible.',
        'name'  => 'Ishita Kapoor',
        'role'  => 'MBA, 2024 · Consultant, McKinsey & Co.',
    ],
];
?>
<section class="bg-surface border-y border-border py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6">
    <div class="mb-12 max-w-2xl">
      <p class="text-xs font-semibold uppercase tracking-[0.25em] text-gold">Alumni Voices</p>
      <h2 class="mt-4 font-serif text-4xl sm:text-5xl text-foreground font-normal">
        Stories from the RKDF community.
      </h2>
    </div>

    <div class="grid gap-6 lg:grid-cols-3">
      <?php foreach ($alumni_voices as $alumnus): ?>
        <figure class="flex flex-col rounded-2xl border border-border bg-card p-8 shadow-sm">
          <?= lucide_icon('quote', 'h-7 w-7 text-gold') ?>
          <blockquote class="mt-5 flex-1 font-serif text-lg leading-snug text-foreground font-normal">
            “<?= e($alumnus['quote']) ?>”
          </blockquote>
          <figcaption class="mt-6 border-t border-border pt-4">
            <p class="font-semibold text-foreground text-sm"><?= e($alumnus['name']) ?></p>
            <p class="mt-0.5 text-xs text-muted-foreground"><?= e($alumnus['role']) ?></p>
          </figcaption>
        </figure>
      <?php endforeach; ?>
    </div>

    <div class="mt-12 text-center">
      <a href="<?= url('about/alumni-committee.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-brand-foreground px-7 py-3.5 text-xs font-bold uppercase tracking-wider hover:bg-gold hover:text-brand transition shadow-lg">
        <span>Join Alumni Network &amp; Committee</span>
        <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
      </a>
    </div>
  </div>
</section>
