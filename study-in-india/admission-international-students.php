<?php
$page_title = "International Student Admission Guidelines | RKDF University Ranchi";
$page_meta_desc = "Eligibility, VISA process, document verification, and admission guidelines for international students applying to RKDF University Ranchi.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('passport', 'w-4 h-4 text-gold') ?>
      <span>International Admissions Desk</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">International Admission Procedure</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Simple, transparent 4-step admission process for international applicants.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="max-w-4xl mx-auto bg-card border border-border rounded-2xl p-6 sm:p-10 shadow-sm space-y-8">
      <div>
        <h2 class="text-xl font-bold text-foreground mb-4">Step-by-Step International Admission Flow</h2>
        <div class="space-y-4 text-sm text-muted-foreground">
          <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border flex items-start gap-3">
            <span class="w-6 h-6 rounded-full bg-brand text-gold flex items-center justify-center font-bold text-xs shrink-0">1</span>
            <div>
              <strong class="text-foreground block">Application Submission</strong>
              <span>Submit academic credentials, passport copy, and program preference online at <a href="mailto:admission@rkdfuniversity.org" class="text-brand">admission@rkdfuniversity.org</a>.</span>
            </div>
          </div>
          <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border flex items-start gap-3">
            <span class="w-6 h-6 rounded-full bg-brand text-gold flex items-center justify-center font-bold text-xs shrink-0">2</span>
            <div>
              <strong class="text-foreground block">Provisional Admission Letter</strong>
              <span>Upon credential equivalence evaluation, the university issues a Provisional Admission Letter.</span>
            </div>
          </div>
          <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border flex items-start gap-3">
            <span class="w-6 h-6 rounded-full bg-brand text-gold flex items-center justify-center font-bold text-xs shrink-0">3</span>
            <div>
              <strong class="text-foreground block">Student VISA Application</strong>
              <span>Apply for an Indian Student VISA at the nearest Indian Embassy / High Commission with the university letter.</span>
            </div>
          </div>
          <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border flex items-start gap-3">
            <span class="w-6 h-6 rounded-full bg-brand text-gold flex items-center justify-center font-bold text-xs shrink-0">4</span>
            <div>
              <strong class="text-foreground block">Campus Arrival &amp; FRRO Registration</strong>
              <span>Airport pick-up assistance, hostel check-in, and local FRRO registration support.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
