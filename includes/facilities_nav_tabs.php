<?php
/**
 * Facilities & Infrastructure Navigation Sub-header
 * Provides unified tab navigation across all campus infrastructure pages
 */
$facilities_tabs = [
    ['label' => 'Facilities Overview',       'href' => 'facilities/',                  'icon' => 'building'],
    ['label' => 'Central Library',            'href' => 'facilities/library.php',       'icon' => 'book-open'],
    ['label' => 'Hostels & Dining',           'href' => 'facilities/hostel.php',        'icon' => 'home'],
    ['label' => 'Sports & Athletics',         'href' => 'facilities/sports.php',        'icon' => 'trophy'],
    ['label' => 'Healthcare & Medical',       'href' => 'facilities/health.php',        'icon' => 'heart-pulse'],
    ['label' => 'Bus Transit Fleet',          'href' => 'facilities/transport.php',     'icon' => 'bus'],
    ['label' => 'Differently-Abled Support',  'href' => 'facilities/differently-abled.php', 'icon' => 'heart-handshake'],
];

$tabs_id = 'subnav-track-facilities';
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
        <?php foreach ($facilities_tabs as $tab): 
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
