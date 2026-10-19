<?php
/**
 * RKDF University Ranchi — Statutory Committees Sub-Navigation Tabs
 */
$committees_nav_tabs = [
    ['label' => 'All Committees',            'href' => 'committees/',                                             'icon' => 'layout-grid'],
    ['label' => 'Anti-Ragging',              'href' => 'committees/anti-ragging-committee.php',                 'icon' => 'shield-alert'],
    ['label' => 'IQAC',                      'href' => 'committees/internal-quality-assurance-cell.php',         'icon' => 'award'],
    ['label' => 'Anti-Sexual Harassment',    'href' => 'committees/anti-sexual-harassment.php',                 'icon' => 'shield-check'],
    ['label' => 'Grievance Redressal',       'href' => 'committees/grievance-redressal-committee.php',          'icon' => 'scale'],
    ['label' => 'Internal Complaint (ICC)',  'href' => 'committees/internal-complaint-committee.php',          'icon' => 'scale'],
    ['label' => 'Equal Opportunity',        'href' => 'committees/equal-opportunity-committee.php',           'icon' => 'heart-handshake'],
    ['label' => 'Finance Committee',         'href' => 'committees/finance-committee.php',                     'icon' => 'landmark'],
    ['label' => 'Women Development',        'href' => 'committees/women-development-cell.php',                 'icon' => 'users'],
    ['label' => 'Cultural Committee',        'href' => 'committees/cultural-committee.php',                    'icon' => 'music'],
    ['label' => 'Sports Committee',          'href' => 'committees/sports-committee.php',                      'icon' => 'trophy'],
    ['label' => 'Training & Placement',      'href' => 'committees/training-placement-committee.php',         'icon' => 'briefcase'],
    ['label' => 'Library Committee',         'href' => 'committees/library-committee.php',                    'icon' => 'book-open'],
    ['label' => 'Transportation Committee',  'href' => 'committees/transportation-committee.php',             'icon' => 'bus'],
    ['label' => 'Unfair Means & Discipline', 'href' => 'committees/unfair-means-discipline-committee.php',    'icon' => 'shield'],
    ['label' => 'Students Grievance',       'href' => 'committees/students-grievance-redressal-committee.php', 'icon' => 'message-square'],
    ['label' => 'ST / SC / OBC Committee',   'href' => 'committees/committee-for-st-sc-obc.php',               'icon' => 'heart-handshake'],
    ['label' => 'Admission Counseling',     'href' => 'committees/admission-counseling-committee.php',        'icon' => 'user-check'],
    ['label' => 'Environment Cell',         'href' => 'committees/environment-cell.php',                    'icon' => 'leaf'],
];

$tabs_id = 'subnav-track-committees';
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
        <?php foreach ($committees_nav_tabs as $tab): 
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

      <!-- Status Badge on wide screens -->
      <div class="hidden xl:flex items-center gap-2 text-[11px] font-semibold text-muted-foreground uppercase tracking-wider shrink-0 pl-3 border-l border-slate-200">
        <span class="inline-block w-2 h-2 rounded-full bg-emerald-500"></span>
        18 Statutory Cells
      </div>
    </div>
  </div>
</div>
