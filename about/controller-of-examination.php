<?php
$page_title = "Controller of Examinations (COE) | RKDF University Ranchi";
$page_meta_desc = "Office of the Controller of Examinations, responsible for fair, rigorous semester exams, evaluation, result declaration, degree certificates, and National Academic Depository (NAD / DigiLocker) integration.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('file-check', 'w-4 h-4 text-gold') ?>
      <span>Examination Authority</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Controller of Examinations</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      “The highest education is that which does not merely give us information but makes our life in harmony with all existence.”
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      
      <div class="lg:col-span-3 space-y-8">
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-10 shadow-sm">
          
          <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 mb-8 pb-6 border-b border-border">
            <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-brand to-slate-900 text-gold flex items-center justify-center font-serif text-4xl font-bold shadow-md shrink-0">
              COE
            </div>
            <div class="text-center sm:text-left">
              <span class="inline-block px-3 py-1 rounded-full bg-gold/15 text-gold text-xs font-semibold uppercase tracking-wider mb-2">Examination Cell</span>
              <h2 class="text-2xl font-bold text-foreground">Dr. Anita Kumari / Dr. Koomkoom Khawas</h2>
              <p class="text-sm text-brand font-medium">Controller of Examinations</p>
              <p class="text-xs text-muted-foreground mt-1">RKDF University Ranchi</p>
            </div>
          </div>

          <div class="prose prose-slate max-w-none text-muted-foreground leading-relaxed space-y-4 text-sm sm:text-base">
            <p>
              The Examination Division is the custodian of academic integrity, rigorous evaluation, and credential verification at RKDF University Ranchi. Our examination system functions with complete confidentiality, transparency, and digitised security.
            </p>
            <p>
              We ensure timely scheduling of Mid-Term and End-Semester Examinations, transparent evaluation systems, prompt publication of results, and seamless integration with the <strong>National Academic Depository (NAD) / DigiLocker / ABC Portal</strong>.
            </p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8 pt-6 border-t border-border">
            <a href="<?= url('admissions/examination-forms.php') ?>" class="p-4 rounded-xl bg-muted/40 hover:bg-muted text-center border border-border transition">
              <span class="block font-bold text-foreground text-sm">Exam Forms</span>
              <span class="text-xs text-muted-foreground">Download / Submit Form</span>
            </a>
            <a href="<?= url('about/digilocker.php') ?>" class="p-4 rounded-xl bg-muted/40 hover:bg-muted text-center border border-border transition">
              <span class="block font-bold text-foreground text-sm">DigiLocker / NAD</span>
              <span class="text-xs text-muted-foreground">Digital Marksheet Access</span>
            </a>
            <a href="<?= url('media/news.php') ?>" class="p-4 rounded-xl bg-muted/40 hover:bg-muted text-center border border-border transition">
              <span class="block font-bold text-foreground text-sm">Exam Notifications</span>
              <span class="text-xs text-muted-foreground">Timetable &amp; Schedules</span>
            </a>
          </div>

        </div>
      </div>

      <!-- Right Sidebar -->
      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">Officers</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="<?= url('about/registrar.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Registrar</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/controller-of-examination.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold"><span>Controller of Examination</span><?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?></a></li>
            <li><a href="<?= url('about/finance-officer.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Finance Officer</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
