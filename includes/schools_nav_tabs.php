<?php
/**
 * RKDF University — Schools & Faculties Sub-Navigation Tabs
 */
$schools_tabs = [
    ['label' => 'All Faculties',              'href' => 'departments/',                                               'icon' => 'landmark'],
    ['label' => 'Engineering & Technology',  'href' => 'departments/school-of-engineering-technology.php',         'icon' => 'cpu'],
    ['label' => 'Law & Legal Studies',        'href' => 'departments/school-of-law.php',                             'icon' => 'scale'],
    ['label' => 'Management Studies',        'href' => 'departments/school-of-management.php',                      'icon' => 'briefcase'],
    ['label' => 'Information Technology',    'href' => 'departments/school-of-information-technology.php',         'icon' => 'laptop'],
    ['label' => 'Pharmaceutical Sciences',   'href' => 'departments/school-of-pharmacy.php',                        'icon' => 'heart-pulse'],
    ['label' => 'Basic & Applied Sciences',  'href' => 'departments/school-of-basic-and-applied-sciences.php',      'icon' => 'microscope'],
    ['label' => 'Life Sciences',              'href' => 'departments/school-of-life-sciences.php',                  'icon' => 'leaf'],
    ['label' => 'Commerce & Accountancy',    'href' => 'departments/school-of-commerce.php',                       'icon' => 'coins'],
    ['label' => 'Arts & Humanities',         'href' => 'departments/school-of-arts-and-humanities.php',            'icon' => 'book-open'],
    ['label' => 'Journalism & Mass Comm',    'href' => 'departments/school-of-journalism-and-mass-communication.php','icon' => 'radio'],
    ['label' => 'Fashion & Interior Design', 'href' => 'departments/school-of-fashion-and-interior-designing.php',  'icon' => 'palette'],
    ['label' => 'Library Science',           'href' => 'departments/school-of-library-science.php',                 'icon' => 'library'],
];

$tabs_id = 'subnav-track-schools';
?>
<div class="about-subnav-bar">
  <div class="mx-auto max-w-7xl px-3 sm:px-6">
    <div class="subnav-wrapper flex items-center gap-2">
      <!-- Left Scroll Arrow -->
      <button type="button" class="subnav-arrow-btn" aria-label="Scroll left" onclick="scrollSubNav('<?= $tabs_id ?>', -280)">
        <?= lucide_icon('chevron-left', 'w-4 h-4') ?>
      </button>

      <!-- Scrollable Track -->
      <div id="<?= $tabs_id ?>" class="subnav-scroll-track flex items-center gap-2 overflow-x-auto no-scrollbar py-1">
        <?php foreach ($schools_tabs as $tab): 
          $isActive = is_active($tab['href']);
        ?>
          <a href="<?= url($tab['href']) ?>" class="about-subnav-pill <?= $isActive ? 'active' : 'inactive' ?>" <?= $isActive ? 'data-active="true"' : '' ?>>
            <?= lucide_icon($tab['icon'], 'w-3.5 h-3.5 ' . ($isActive ? 'text-gold' : 'text-slate-500')) ?>
            <span><?= e($tab['label']) ?></span>
          </a>
        <?php endforeach; ?>
      </div>

      <!-- Right Scroll Arrow -->
      <button type="button" class="subnav-arrow-btn" aria-label="Scroll right" onclick="scrollSubNav('<?= $tabs_id ?>', 280)">
        <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
      </button>

      <!-- Badge on wide screens -->
      <div class="hidden 2xl:flex items-center gap-2 text-[11px] font-semibold text-muted-foreground uppercase tracking-wider shrink-0 pl-3 border-l border-slate-200">
        <span class="inline-block w-2 h-2 rounded-full bg-emerald-500"></span>
        12 Academic Faculties
      </div>
    </div>
  </div>
</div>
