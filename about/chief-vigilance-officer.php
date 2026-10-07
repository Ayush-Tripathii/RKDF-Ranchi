<?php
$page_title = "Chief Vigilance Officer (CVO) | RKDF University Ranchi";
$page_meta_desc = "Chief Vigilance Officer details at RKDF University Ranchi, maintaining administrative integrity, anti-corruption safeguards, and vigilance oversight.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('shield-alert', 'w-4 h-4 text-gold') ?>
      <span>Institutional Integrity</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Chief Vigilance Officer</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      “Success is a journey, not a destination. It requires constant effort, vigilance, and reevaluation.”
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      <div class="lg:col-span-3 space-y-8">
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-10 shadow-sm">
          <h2 class="text-xl font-bold text-foreground mb-4">Vigilance &amp; Compliance Cell</h2>
          <p class="text-sm text-muted-foreground leading-relaxed mb-6">
            The Chief Vigilance Officer (CVO) acts as the principal advisor to the Vice Chancellor in all matters pertaining to vigilance, administrative transparency, adherence to ethical codes, and prevention of malpractice.
          </p>
          <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border text-sm text-muted-foreground">
            <strong>Contact:</strong> Office of the Chief Vigilance Officer, RKDF University, Argora Bypass Road, Ranchi, Jharkhand - 834004. Email: <a href="mailto:info@rkdfuniversity.org" class="text-brand font-medium">info@rkdfuniversity.org</a>
          </div>
        </div>
      </div>
      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">Officers</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="<?= url('about/ombudsperson.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Ombudsperson</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/chief-vigilance-officer.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold"><span>Chief Vigilance Officer</span><?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?></a></li>
            <li><a href="<?= url('about/nodal-officer-details.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Nodal Officer Details</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
