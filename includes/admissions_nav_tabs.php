<?php
/**
 * RKDF University — Admissions Sub-Navigation Tabs Bar
 */
$admissions_tabs = [
    ['label' => 'Admissions Overview',       'href' => 'admissions/',                                'icon' => 'graduation-cap'],
    ['label' => 'Admission Procedure',       'href' => 'admissions/admission-procedure.php',         'icon' => 'compass'],
    ['label' => 'Scholarships & Aid',        'href' => 'admissions/scholarship.php',                 'icon' => 'award'],
    ['label' => 'Examination Forms',         'href' => 'admissions/examination-forms.php',          'icon' => 'file-text'],
    ['label' => 'Academic Collaborations',   'href' => 'admissions/academic-collaborations.php',    'icon' => 'building'],
    ['label' => 'Study in India',            'href' => 'admissions/study-in-india.php',             'icon' => 'globe'],
    ['label' => 'International Students',    'href' => 'admissions/international-students.php',     'icon' => 'users'],
    ['label' => 'Anti-Ragging Committee',    'href' => 'admissions/anti-ragging.php',                'icon' => 'shield-alert'],
];

$tabs_id = 'subnav-track-admissions';
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
        <?php foreach ($admissions_tabs as $tab): 
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
