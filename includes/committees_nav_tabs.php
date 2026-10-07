<?php
/**
 * Statutory Committees Sub-Navigation Tabs
 */
$current_page = basename($_SERVER['PHP_SELF']);
$active_slug = str_replace('.php', '', $current_page);
?>
<div class="sticky top-16 z-30 bg-surface/95 backdrop-blur-md border-b border-border shadow-sm">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="flex items-center gap-2 overflow-x-auto py-3 no-scrollbar text-xs font-medium uppercase tracking-wider">
      <a href="<?= url('committees/') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === 'index' ? 'bg-brand text-brand-foreground font-bold shadow' : 'text-muted-foreground hover:text-foreground hover:bg-muted' ?>">
        All Committees
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
  </div>
</div>
