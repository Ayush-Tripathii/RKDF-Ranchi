<?php
$page_title = "Nodal Officer Details | RKDF University Ranchi";
$page_meta_desc = "Nodal Officer Details for UGC, AISHE, National Academic Depository, and Government Scholarships at RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('id-card', 'w-4 h-4 text-gold') ?>
      <span>Statutory Nodal Authority</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Nodal Officer Details</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Official liaisons for UGC, AISHE, DigiLocker/ABC, and State Scholarship Portals.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      <div class="lg:col-span-3 space-y-8">
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-10 shadow-sm">
          <div class="overflow-x-auto">
            <table class="w-full text-left text-sm border-collapse">
              <thead>
                <tr class="bg-slate-50 dark:bg-slate-900/50 border-b border-border text-xs uppercase tracking-wider text-muted-foreground font-semibold">
                  <th class="py-3 px-4">Portals / Scheme</th>
                  <th class="py-3 px-4">Nodal Officer</th>
                  <th class="py-3 px-4">Designation</th>
                  <th class="py-3 px-4">Contact / Email</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-border">
                <tr class="hover:bg-muted/40 transition">
                  <td class="py-3.5 px-4 font-semibold text-foreground">National Academic Depository (NAD / ABC)</td>
                  <td class="py-3.5 px-4">Dr. Koomkoom Khawas</td>
                  <td class="py-3.5 px-4 text-brand">Controller of Examinations</td>
                  <td class="py-3.5 px-4 text-muted-foreground">info@rkdfuniversity.org</td>
                </tr>
                <tr class="hover:bg-muted/40 transition">
                  <td class="py-3.5 px-4 font-semibold text-foreground">AISHE / MHRD Portal</td>
                  <td class="py-3.5 px-4">Dr. Amit Kumar Pandey</td>
                  <td class="py-3.5 px-4 text-brand">Registrar</td>
                  <td class="py-3.5 px-4 text-muted-foreground">registrar@rkdfuniversity.org</td>
                </tr>
                <tr class="hover:bg-muted/40 transition">
                  <td class="py-3.5 px-4 font-semibold text-foreground">E-Kalyan Jharkhand Scholarships</td>
                  <td class="py-3.5 px-4">Dr. Anita Kumari</td>
                  <td class="py-3.5 px-4 text-brand">Dean Student's Welfare (DSW)</td>
                  <td class="py-3.5 px-4 text-muted-foreground">+91 7091168777</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">Officers</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="<?= url('about/ombudsperson.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Ombudsperson</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/chief-vigilance-officer.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Chief Vigilance Officer</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/nodal-officer-details.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold"><span>Nodal Officer Details</span><?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
