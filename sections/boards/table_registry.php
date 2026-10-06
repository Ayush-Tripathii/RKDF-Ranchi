<?php
/**
 * Modular Section: Statutory Directory Table Component
 * Accepts:
 *   $registry_badge - e.g. 'Official Statutory Registry'
 *   $registry_title - e.g. 'Distinguished Members of the Board'
 *   $registry_tag   - e.g. 'Act No. 1077 Mandate'
 *   $registry_items - array of members
 */
?>
<div class="mb-16 section-block space-y-8">
  <div class="flex items-center justify-between flex-wrap gap-4">
    <div>
      <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold"><?= e($registry_badge ?? 'Official Registry') ?></div>
      <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1"><?= e($registry_title ?? 'Members Directory') ?></h3>
    </div>
    <?php if (!empty($registry_tag)): ?>
      <div class="text-xs text-muted-foreground font-semibold uppercase tracking-wider bg-white px-4 py-2 rounded-full border border-border shadow-sm">
        <?= e($registry_tag) ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="gov-table-wrap">
    <table class="gov-table">
      <thead>
        <tr>
          <th style="width: 70px;">#</th>
          <th>Member Name</th>
          <th>Designation / Office</th>
          <th>Institution / Organization</th>
          <th style="text-align: right;">Capacity</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach (($registry_items ?? []) as $idx => $item): ?>
          <tr>
            <td style="font-weight: 700; color: #94a3b8;"><?= sprintf('%02d', $idx + 1) ?></td>
            <td>
              <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-slate-100 border border-slate-200 text-brand flex items-center justify-center shrink-0">
                  <?= lucide_icon($item['icon'] ?? 'user', 'w-4 h-4 text-gold') ?>
                </div>
                <div>
                  <div class="font-semibold text-slate-900 text-sm sm:text-base"><?= e($item['name']) ?></div>
                </div>
              </div>
            </td>
            <td>
              <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-brand text-white">
                <?= e($item['role']) ?>
              </span>
            </td>
            <td style="color: #475569; font-size: 0.875rem;">
              <?= e($item['organization']) ?>
            </td>
            <td style="text-align: right;">
              <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[11px] font-medium bg-slate-100 text-slate-700 border border-slate-200/80">
                <?= e($item['capacity'] ?? $item['category'] ?? 'Member') ?>
              </span>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
