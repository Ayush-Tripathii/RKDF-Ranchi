<?php
$page_title = "Ombudsperson | Student Grievance Redressal — RKDF University Ranchi";
$page_meta_desc = "Office of the Ombudsperson at RKDF University Ranchi appointed under UGC (Redressal of Grievances of Students) Regulations for independent hearing and resolution.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('scale', 'w-4 h-4 text-gold') ?>
      <span>Independent Statutory Grievance Authority</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Ombudsperson</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Appointed as per UGC Student Grievance Regulations to ensure an impartial, independent, and prompt appeal mechanism.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      
      <div class="lg:col-span-3 space-y-8">
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-10 shadow-sm">
          <h2 class="text-xl font-bold text-foreground mb-4 flex items-center gap-2">
            <?= lucide_icon('shield-alert', 'w-5 h-5 text-gold') ?>
            Independent Student Grievance Redressal
          </h2>
          <p class="text-sm text-muted-foreground leading-relaxed mb-6">
            Any student aggrieved by the decision of the Students Grievance Redressal Committee (SGRC) may submit an appeal to the Ombudsperson within fifteen days. The Ombudsperson functions as an independent authority and delivers fair recommendations in accordance with natural justice.
          </p>

          <div class="p-6 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border space-y-3">
            <h3 class="font-bold text-foreground text-sm uppercase tracking-wider">Direct Contact &amp; Registry</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-muted-foreground">
              <div>
                <span class="block text-xs font-semibold text-foreground">Helpline:</span>
                <span>+91 9431105185 / +91 7091168777</span>
              </div>
              <div>
                <span class="block text-xs font-semibold text-foreground">Official Email:</span>
                <span>sgrc@rkdfuniversity.org</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">Officers &amp; Cells</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="<?= url('about/ombudsperson.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold"><span>Ombudsperson</span><?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?></a></li>
            <li><a href="<?= url('about/chief-vigilance-officer.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Chief Vigilance Officer</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/nodal-officer-details.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Nodal Officer Details</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
