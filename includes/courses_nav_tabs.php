<?php
/**
 * RKDF University — Courses Sub-Navigation Tabs Bar
 */
$courses_tabs = [
    ['label' => 'All Programs Directory', 'href' => 'courses/',                            'icon' => 'layers'],
    ['label' => 'Undergraduate (UG)',     'href' => 'courses/under-graduate-programs.php',  'icon' => 'graduation-cap'],
    ['label' => 'Postgraduate (PG)',      'href' => 'courses/post-graduate-programs.php',   'icon' => 'award'],
    ['label' => 'Diploma & Polytechnic',  'href' => 'courses/diploma-programs.php',         'icon' => 'wrench'],
    ['label' => 'Doctoral (Ph.D.)',       'href' => 'courses/doctoral-programs.php',        'icon' => 'microscope'],
    ['label' => 'Common NEP Courses',     'href' => 'courses/common-courses-for-all.php',   'icon' => 'book-open'],
];

$tabs_id = 'subnav-track-courses';
?>
<div class="about-subnav-bar">
  <div class="mx-auto max-w-7xl px-3 sm:px-6">
    <div class="subnav-wrapper flex items-center gap-2">
      <!-- Left Scroll Arrow -->
      <button type="button" class="subnav-arrow-btn" aria-label="Scroll left" onclick="scrollSubNav('<?= $tabs_id ?>', -260)">
        <?= lucide_icon('chevron-left', 'w-4 h-4') ?>
      </button>

      <!-- Scrollable Track -->
      <div id="<?= $tabs_id ?>" class="subnav-scroll-track flex items-center gap-2 overflow-x-auto no-scrollbar py-1">
        <?php foreach ($courses_tabs as $tab): 
          $isActive = is_active($tab['href']);
        ?>
          <a href="<?= url($tab['href']) ?>" class="about-subnav-pill <?= $isActive ? 'active' : 'inactive' ?>" <?= $isActive ? 'data-active="true"' : '' ?>>
            <?= lucide_icon($tab['icon'], 'w-3.5 h-3.5 ' . ($isActive ? 'text-gold' : 'text-slate-500')) ?>
            <span><?= e($tab['label']) ?></span>
          </a>
        <?php endforeach; ?>
      </div>

      <!-- Right Scroll Arrow -->
      <button type="button" class="subnav-arrow-btn" aria-label="Scroll right" onclick="scrollSubNav('<?= $tabs_id ?>', 260)">
        <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
      </button>
    </div>
  </div>
</div>
