<?php
/**
 * Modular Section: Statutory Spotlight Banner Component
 * Accepts:
 *   $spotlight_badge  - e.g. 'Apex Statutory Mandate'
 *   $spotlight_title  - e.g. 'Institutional Board of Governors'
 *   $spotlight_desc   - description paragraph
 *   $spotlight_pills  - array of ['icon' => '...', 'text' => '...']
 *   $seal_header      - e.g. 'Apex Secretariat'
 *   $seal_title       - e.g. 'Governance Council'
 *   $seal_desc        - seal description
 *   $seal_footer_tag  - e.g. 'Statutory Body'
 *   $seal_count       - e.g. '11 Members'
 */
?>
<div class="gov-spotlight-card mb-16 section-block">
  <!-- Ambient Golden Glow -->
  <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

  <div class="gov-spotlight-grid">
    <div class="space-y-4">
      <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
        <?= lucide_icon('shield-check', 'w-4 h-4 text-gold') ?>
        <span><?= e($spotlight_badge ?? 'Apex Statutory Mandate') ?></span>
      </div>
      <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
        <?= e($spotlight_title ?? '') ?>
      </h2>
      <p class="text-white/85 text-sm sm:text-base leading-relaxed max-w-2xl font-normal">
        <?= e($spotlight_desc ?? '') ?>
      </p>

      <?php if (!empty($spotlight_pills)): ?>
        <div class="spotlight-pill-list">
          <?php foreach ($spotlight_pills as $pill): ?>
            <span class="spotlight-pill">
              <?= lucide_icon($pill['icon'] ?? 'shield-check') ?>
              <span><?= e($pill['text']) ?></span>
            </span>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="gazette-seal-inner space-y-4">
      <div class="flex items-center justify-between">
        <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
          <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?>
          <?= e($seal_header ?? 'Statutory Secretariat') ?>
        </span>
        <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
          <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
        </span>
      </div>
      <div>
        <div class="font-serif text-2xl text-white font-normal"><?= e($seal_title ?? 'Governance Council') ?></div>
        <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
          <?= e($seal_desc ?? '') ?>
        </p>
      </div>
      <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs">
        <span class="text-gold font-semibold flex items-center gap-1.5">
          <?= lucide_icon('award', 'w-3.5 h-3.5 text-gold') ?>
          <?= e($seal_footer_tag ?? 'Statutory Body') ?>
        </span>
        <span class="text-white/60 text-[11px]"><?= e($seal_count ?? '') ?></span>
      </div>
    </div>
  </div>
</div>
