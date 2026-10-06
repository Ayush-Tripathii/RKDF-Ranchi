<?php
/**
 * RKDF University — About Us Sub-Navigation Tabs
 */
$about_tabs = [
    ['label' => 'Overview',                'href' => 'about/',                             'icon' => 'landmark'],
    ['label' => 'Vision & Mission',         'href' => 'about/vision-and-mission.php',        'icon' => 'globe'],
    ['label' => 'Government Recognitions', 'href' => 'about/government-recognition.php',    'icon' => 'scale'],
    ['label' => 'Accreditations',           'href' => 'about/accreditations.php',            'icon' => 'trophy'],
    ['label' => 'Annual Reports',           'href' => 'about/annual-reports.php',            'icon' => 'book-open'],
    ['label' => 'RTI Corner',               'href' => 'about/rti-corner.php',                'icon' => 'scale'],
];

$tabs_id = 'subnav-track-about';
?>
<div class="about-subnav-bar">
  <div class="mx-auto max-w-7xl px-3 sm:px-6">
    <div class="subnav-wrapper flex items-center gap-2">
      <!-- Left Scroll Arrow -->
      <button type="button" class="subnav-arrow-btn" aria-label="Scroll left" onclick="scrollSubNav('<?= $tabs_id ?>', -240)">
        <?= lucide_icon('chevron-left', 'w-4 h-4') ?>
      </button>

      <!-- Scrollable Track -->
      <div id="<?= $tabs_id ?>" class="subnav-scroll-track flex items-center gap-2 overflow-x-auto no-scrollbar py-1">
        <?php foreach ($about_tabs as $tab): 
          $isActive = is_active($tab['href']);
        ?>
          <a href="<?= url($tab['href']) ?>" class="about-subnav-pill <?= $isActive ? 'active' : 'inactive' ?>" <?= $isActive ? 'data-active="true"' : '' ?>>
            <?= lucide_icon($tab['icon'], 'w-3.5 h-3.5 ' . ($isActive ? 'text-gold' : 'text-slate-500')) ?>
            <span><?= e($tab['label']) ?></span>
          </a>
        <?php endforeach; ?>
      </div>

      <!-- Right Scroll Arrow -->
      <button type="button" class="subnav-arrow-btn" aria-label="Scroll right" onclick="scrollSubNav('<?= $tabs_id ?>', 240)">
        <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
      </button>

      <!-- Status Badge -->
      <div class="hidden lg:flex items-center gap-2 text-[11px] font-semibold text-muted-foreground uppercase tracking-wider shrink-0 pl-3 border-l border-slate-200">
        <span class="inline-block w-2 h-2 rounded-full bg-emerald-500"></span>
        UGC 2(f) Recognized
      </div>
    </div>
  </div>
</div>

