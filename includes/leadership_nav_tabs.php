<?php
/**
 * RKDF University — Management & Leadership Sub-Navigation Tabs
 */
$leadership_tabs = [
    ['label' => "Chancellor's Message",     'href' => 'governance/chancellor.php',                 'icon' => 'award'],
    ['label' => "Managing Director",         'href' => 'governance/managing-director.php',         'icon' => 'briefcase'],
    ['label' => "Vice Chancellor",           'href' => 'governance/vice-chancellor.php',           'icon' => 'graduation-cap'],
    ['label' => "Pro Vice Chancellor",       'href' => 'governance/pro-vice-chancellor.php',       'icon' => 'user-check'],
    ['label' => "Registrar",                 'href' => 'governance/registrar.php',                 'icon' => 'file-text'],
    ['label' => "Controller of Examination", 'href' => 'governance/controller-of-examination.php', 'icon' => 'clipboard-check'],
    ['label' => "Finance Officer",           'href' => 'governance/finance-officer.php',           'icon' => 'coins'],
    ['label' => "Chief Vigilance Officer",   'href' => 'governance/chief-vigilance-officer.php',   'icon' => 'shield-check'],
    ['label' => "Ombudsperson",              'href' => 'governance/ombudsperson.php',              'icon' => 'scale'],
    ['label' => "Nodal Officer Details",     'href' => 'governance/nodal-officer-details.php',     'icon' => 'user'],
    ['label' => "Principal",                 'href' => 'governance/principal.php',                 'icon' => 'building'],
    ['label' => "Deans & HoD",               'href' => 'governance/deans.php',                     'icon' => 'users'],
];

$tabs_id = 'subnav-track-leadership';
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
        <?php foreach ($leadership_tabs as $tab): 
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
        <span class="inline-block w-2 h-2 rounded-full bg-gold"></span>
        Executive Governance
      </div>
    </div>
  </div>
</div>

