<?php
$page_title = "Board of Studies | Academic Governance — RKDF University Ranchi";
$page_meta_desc = "Board of Studies of RKDF University Ranchi across all 12 Schools & Faculties responsible for curriculum structure, syllabus design, and textbook recommendations.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('book-check', 'w-4 h-4 text-gold') ?>
      <span>Curriculum &amp; Syllabus Authority</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Board of Studies</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      The statutory academic committee for each school, formulating NEP 2020 aligned course curriculum, learning outcomes, and pedagogy standards.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      
      <div class="lg:col-span-3 space-y-8">
        
        <!-- Departmental Boards Overview -->
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-8 shadow-sm">
          <h2 class="text-xl font-bold text-foreground mb-3 flex items-center gap-2">
            <?= lucide_icon('layers', 'w-5 h-5 text-gold') ?>
            Overview of Board of Studies (BOS)
          </h2>
          <p class="text-sm text-muted-foreground leading-relaxed mb-6">
            The Board of Studies is constituted for each discipline/school and comprises the Dean of Faculty, Heads of Departments, senior professors, subject experts from leading institutions (IITs/IIMs/Central Universities), and industry veterans.
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-foreground flex items-center gap-2 mb-1.5">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500') ?>
                School of Engineering &amp; Technology
              </h4>
              <p class="text-xs text-muted-foreground">Curriculum design for B.Tech, Diploma, and M.Tech programs with AICTE outcome-based framework.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-foreground flex items-center gap-2 mb-1.5">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500') ?>
                School of Management &amp; Commerce
              </h4>
              <p class="text-xs text-muted-foreground">BBA, MBA, B.Com, and specialized programs integrated with industry certifications and internships.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-foreground flex items-center gap-2 mb-1.5">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500') ?>
                School of Pharmacy
              </h4>
              <p class="text-xs text-muted-foreground">PCI-compliant syllabus for B.Pharm and D.Pharm with advanced pharmaceutical lab practicums.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-foreground flex items-center gap-2 mb-1.5">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500') ?>
                School of Law
              </h4>
              <p class="text-xs text-muted-foreground">BCI-approved curricula for LL.B., BA LL.B., and BBA LL.B. with moot court clinical legal training.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-foreground flex items-center gap-2 mb-1.5">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500') ?>
                School of Information Technology
              </h4>
              <p class="text-xs text-muted-foreground">BCA, MCA, and Data Science courses updated with cloud computing, full-stack dev &amp; cybersecurity.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <h4 class="font-bold text-foreground flex items-center gap-2 mb-1.5">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500') ?>
                School of Basic &amp; Applied Sciences
              </h4>
              <p class="text-xs text-muted-foreground">NEP 2020 4-year undergraduate honors &amp; M.Sc. in Physics, Chemistry, Mathematics &amp; Life Sciences.</p>
            </div>
          </div>
        </div>

        <!-- Functions & Responsibilities -->
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-8 shadow-sm">
          <h3 class="text-lg font-bold text-foreground mb-4 flex items-center gap-2">
            <?= lucide_icon('sparkles', 'w-5 h-5 text-gold') ?>
            Key Functions of Board of Studies
          </h3>
          <ul class="space-y-3 text-sm text-muted-foreground">
            <li class="flex items-start gap-3">
              <?= lucide_icon('arrow-right', 'w-4 h-4 text-brand shrink-0 mt-0.5') ?>
              <span>To frame, evaluate, and recommend schemes of study, syllabi, and reading lists for all courses under the faculty.</span>
            </li>
            <li class="flex items-start gap-3">
              <?= lucide_icon('arrow-right', 'w-4 h-4 text-brand shrink-0 mt-0.5') ?>
              <span>To recommend panels of external paper-setters, evaluators, and viva-voce examiners for semester examinations.</span>
            </li>
            <li class="flex items-start gap-3">
              <?= lucide_icon('arrow-right', 'w-4 h-4 text-brand shrink-0 mt-0.5') ?>
              <span>To review feedback from students, alumni, and employers for continuous quality enhancement of teaching pedagogy.</span>
            </li>
          </ul>
        </div>

      </div>

      <!-- Right Sidebar -->
      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">
            Governance Bodies
          </h3>
          <ul class="space-y-2 text-sm">
            <li>
              <a href="<?= url('about/academic-council-members.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition">
                <span>Academic Council</span>
                <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
              </a>
            </li>
            <li>
              <a href="<?= url('about/board-of-governors.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition">
                <span>Board of Governors</span>
                <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
              </a>
            </li>
            <li>
              <a href="<?= url('about/board-members.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition">
                <span>Board of Management</span>
                <?= lucide_icon('chevron-right', 'w-4 h-4') ?>
              </a>
            </li>
            <li>
              <a href="<?= url('about/board-of-studies.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold">
                <span>Board of Studies</span>
                <?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
