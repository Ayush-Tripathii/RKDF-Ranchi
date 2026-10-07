<?php
/**
 * RKDF University — Notice Board & Upcoming Events Section
 */
$notice_board_items = [
    'Phase II Admissions 2026-27 — Application window now open until July 31.',
    'End-Sem Examination Schedule (UG/PG) released on the student portal.',
    'Scholarship results for Merit & Means category candidates announced.',
    'Notice regarding hostel allotment for new residents — Block C & D.',
];

$upcoming_events_list = [
    ['day' => '12', 'month' => 'Jul', 'title' => 'Convocation 2026 — 14th Annual Ceremony',          'venue' => 'Central Auditorium'],
    ['day' => '18', 'month' => 'Jul', 'title' => 'International Symposium on Sustainable Engineering', 'venue' => 'School of Engineering'],
    ['day' => '02', 'month' => 'Aug', 'title' => 'Open Day — Campus Tours & Faculty Interactions',     'venue' => 'Main Campus'],
    ['day' => '15', 'month' => 'Aug', 'title' => 'Independence Day & Founder\'s Lecture Series',      'venue' => 'Quad Lawns'],
];
?>
<section class="bg-surface py-24 border-y border-border">
  <div class="mx-auto max-w-7xl px-6 grid lg:grid-cols-2 gap-10">
    <!-- Notice Board -->
    <div class="rounded-2xl bg-card border border-border p-8">
      <h3 class="font-serif text-2xl text-foreground font-normal">Notice Board</h3>
      <ul class="mt-6 divide-y divide-border">
        <?php foreach ($notice_board_items as $notice): ?>
          <li>
            <a href="<?= url('media/news.php') ?>" class="flex items-start gap-3 py-4 group">
              <span class="mt-1 shrink-0"><?= lucide_icon('bell', 'w-4 h-4 text-gold') ?></span>
              <span class="text-sm group-hover:text-brand transition text-foreground/90"><?= e($notice) ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Upcoming Events -->
    <div>
      <div class="flex items-end justify-between mb-6">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Upcoming Events</div>
          <h3 class="font-serif text-2xl mt-2 text-foreground font-normal">Convocations, symposia &amp; campus moments.</h3>
        </div>
        <a href="<?= url('media/events.php') ?>" class="text-sm text-brand hidden md:inline-flex items-center gap-1 hover:gap-2 transition-all font-medium">
          All events
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>

      <div class="space-y-3">
        <?php foreach ($upcoming_events_list as $event): ?>
          <a href="<?= url('media/events.php') ?>" class="flex items-center gap-5 rounded-xl bg-card border border-border p-5 hover:border-brand transition">
            <div class="text-center shrink-0 w-14">
              <div class="font-serif text-3xl leading-none text-foreground"><?= $event['day'] ?></div>
              <div class="text-[10px] tracking-[0.18em] uppercase text-muted-foreground mt-1"><?= $event['month'] ?></div>
            </div>
            <div class="border-l border-border pl-5">
              <div class="font-medium text-foreground"><?= e($event['title']) ?></div>
              <div class="text-sm text-muted-foreground mt-1"><?= e($event['venue']) ?></div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
