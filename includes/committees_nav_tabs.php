<?php
/**
 * Statutory Committees Sub-Navigation Tabs
 */
$current_page = basename($_SERVER['PHP_SELF']);
$active_slug = str_replace('.php', '', $current_page);
$tabs_id = 'subnav-track-committees';
?>
<style>
  #subnav-track-committees > a {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    flex: 0 0 auto;
    min-height: 2.6rem;
    padding: .6rem 1rem;
    border: 1px solid #e2e8f0;
    border-radius: 9999px;
    background: #f8fafc;
    color: #334155;
    text-decoration: none;
  }
  #subnav-track-committees > a:hover { background: #f1f5f9; color: #071322; }
  #subnav-track-committees > a.bg-brand { background: #071322 !important; color: #fff !important; border-color: rgba(229, 133, 37, .6) !important; }
</style>
<div class="about-subnav-bar">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="subnav-wrapper flex items-center gap-2">
      <button type="button" class="subnav-arrow-btn" aria-label="Scroll committees left" onclick="scrollSubNav('<?= $tabs_id ?>', -240)">
        <?= lucide_icon('chevron-left', 'w-4 h-4') ?>
      </button>
      <div id="<?= $tabs_id ?>" class="subnav-scroll-track flex items-center gap-2 overflow-x-auto no-scrollbar py-1 text-xs font-medium uppercase tracking-wider">
      <a href="<?= url('committees/') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'index' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        All Committees
      </a>
      <a href="<?= url('committees/admission-counseling-committee.php') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'admission-counseling-committee' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        Admission Counselling
      </a>
      <a href="<?= url('committees/anti-ragging-committee.php') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'anti-ragging-committee' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        Anti-Ragging
      </a>
      <a href="<?= url('committees/internal-quality-assurance-cell.php') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'internal-quality-assurance-cell' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        IQAC
      </a>
      <a href="<?= url('committees/anti-sexual-harassment.php') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'anti-sexual-harassment' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        Anti-Sexual Harassment
      </a>
      <a href="<?= url('committees/grievance-redressal-committee.php') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'grievance-redressal-committee' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        Grievance Redressal
      </a>
      <a href="<?= url('committees/internal-complaint-committee.php') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'internal-complaint-committee' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        ICC
      </a>
      <a href="<?= url('committees/equal-opportunity-committee.php') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'equal-opportunity-committee' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        Equal Opportunity
      </a>
      <a href="<?= url('committees/finance-committee.php') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'finance-committee' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        Finance
      </a>
      <a href="<?= url('committees/women-development-cell.php') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'women-development-cell' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        Women Development
      </a>
      <a href="<?= url('committees/cultural-committee.php') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'cultural-committee' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        Cultural
      </a>
      </div>
      <button type="button" class="subnav-arrow-btn" aria-label="Scroll committees right" onclick="scrollSubNav('<?= $tabs_id ?>', 240)">
        <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
      </button>
    </div>
  </div>
</div>
