<?php
$page_title = "Finance Officer | RKDF University Ranchi";
$page_meta_desc = "Office of the Finance Officer of RKDF University Ranchi, managing university budgetary allocations, financial auditing, student fees, and institutional accounts.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('calculator', 'w-4 h-4 text-gold') ?>
      <span>Financial Management</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Finance Officer</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      “Do not save what is left after spending; instead spend what is left after saving.”
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      
      <div class="lg:col-span-3 space-y-8">
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-10 shadow-sm">
          <div class="flex items-center gap-4 mb-6 pb-4 border-b border-border">
            <div class="w-12 h-12 rounded-xl bg-brand text-gold flex items-center justify-center font-bold text-xl shrink-0">
              FO
            </div>
            <div>
              <h2 class="text-xl font-bold text-foreground">Finance &amp; Accounts Division</h2>
              <p class="text-xs text-muted-foreground">Responsible for financial stewardship and budget planning</p>
            </div>
          </div>
          <div class="prose prose-slate max-w-none text-muted-foreground leading-relaxed space-y-4 text-sm sm:text-base">
            <p>
              The Finance Officer is the principal custodian of University funds, investments, and accounting operations. The department oversees the preparation of annual financial estimates, statutory auditing, fee collection systems, research project grants, and disbursement of faculty &amp; staff emoluments.
            </p>
          </div>
        </div>
      </div>

      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">Officers</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="<?= url('about/registrar.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Registrar</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/finance-officer.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold"><span>Finance Officer</span><?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?></a></li>
            <li><a href="<?= url('about/ombudsperson.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Ombudsperson</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
