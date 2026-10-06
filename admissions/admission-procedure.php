<?php
/**
 * RKDF University — Admission Procedure 2026-27
 * Content Source: https://rkdfuniversity.org/academics/admission-procedure/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Admission Procedure 2026-27 — ' . SITE_NAME;
$page_meta_desc = 'Official Admission Procedure 2026-27 for RKDF University Ranchi. Documents required, application process, and guidelines.';

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <!-- Breadcrumb Badge -->
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('admissions/') ?>" class="hover:text-white transition">Admissions</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Admission Procedure</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Admission procedure <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">2026–27</em>.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      A transparent, student-centric application process for diploma, undergraduate, postgraduate, and doctoral degrees.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-gold shrink-0') ?> Online &amp; Offline Modes
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('clipboard-check', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Verified Checklist
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Merit Scholarships Available
      </span>
    </div>
  </div>
</section>

<!-- Content Area -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-5xl px-6 space-y-12">

    <!-- Procedure Steps Card -->
    <div class="rounded-3xl border border-border bg-card p-8 md:p-12 shadow-sm space-y-6">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-semibold">Guidelines</div>
        <h2 class="font-serif text-3xl sm:text-4xl font-normal text-foreground mt-1">Admission Process</h2>
      </div>

      <div class="space-y-4 text-foreground/85 leading-relaxed text-base">
        <p>
          To apply for admission in RKDF University, Ranchi, the candidates should contact the admission office or can fill the online application form on the website.
        </p>
        <p>
          Candidates are requested to fulfill the minimum eligibility criteria as prescribed for the course they are willing to take admission in before submitting the application form and fee.
        </p>
      </div>

      <div class="rounded-2xl bg-surface border-l-4 border-gold p-6 text-sm text-foreground/90 shadow-inner">
        <div class="font-semibold text-foreground mb-1 text-base font-serif">Important Note:</div>
        <p>
          Photocopy and Original both are required at the time of Admission. Photocopy of all required certificates should be submitted along with the application form.
        </p>
      </div>
    </div>

    <!-- Required Documents Checklist -->
    <div class="rounded-3xl border border-border bg-card p-8 md:p-12 shadow-sm space-y-6">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-semibold">Checklist</div>
        <h2 class="font-serif text-3xl sm:text-4xl font-normal text-foreground mt-1">Required Documents at Time of Admission</h2>
      </div>

      <div class="grid sm:grid-cols-2 gap-4">
        <div class="flex items-start gap-3 p-5 rounded-2xl border border-border bg-surface hover:border-gold/50 transition">
          <span class="grid h-10 w-10 place-items-center rounded-xl bg-secondary text-brand shrink-0 mt-0.5">
            <?= lucide_icon('graduation-cap', 'w-5 h-5') ?>
          </span>
          <div>
            <div class="font-semibold text-sm text-foreground">10th Marksheet &amp; Certificate</div>
            <div class="text-xs text-muted-foreground mt-0.5">Original + 3 Self-attested copies</div>
          </div>
        </div>

        <div class="flex items-start gap-3 p-5 rounded-2xl border border-border bg-surface hover:border-gold/50 transition">
          <span class="grid h-10 w-10 place-items-center rounded-xl bg-secondary text-brand shrink-0 mt-0.5">
            <?= lucide_icon('graduation-cap', 'w-5 h-5') ?>
          </span>
          <div>
            <div class="font-semibold text-sm text-foreground">12th / Intermediate Marksheet</div>
            <div class="text-xs text-muted-foreground mt-0.5">Original + 3 Self-attested copies</div>
          </div>
        </div>

        <div class="flex items-start gap-3 p-5 rounded-2xl border border-border bg-surface hover:border-gold/50 transition">
          <span class="grid h-10 w-10 place-items-center rounded-xl bg-secondary text-brand shrink-0 mt-0.5">
            <?= lucide_icon('graduation-cap', 'w-5 h-5') ?>
          </span>
          <div>
            <div class="font-semibold text-sm text-foreground">Graduation Marksheets (For PG)</div>
            <div class="text-xs text-muted-foreground mt-0.5">All semester marksheets + Degree / Provisional</div>
          </div>
        </div>

        <div class="flex items-start gap-3 p-5 rounded-2xl border border-border bg-surface hover:border-gold/50 transition">
          <span class="grid h-10 w-10 place-items-center rounded-xl bg-secondary text-brand shrink-0 mt-0.5">
            <?= lucide_icon('briefcase', 'w-5 h-5') ?>
          </span>
          <div>
            <div class="font-semibold text-sm text-foreground">Transfer &amp; Migration Certificate</div>
            <div class="text-xs text-muted-foreground mt-0.5">Original TC and Migration from last attended institution</div>
          </div>
        </div>

        <div class="flex items-start gap-3 p-5 rounded-2xl border border-border bg-surface hover:border-gold/50 transition">
          <span class="grid h-10 w-10 place-items-center rounded-xl bg-secondary text-brand shrink-0 mt-0.5">
            <?= lucide_icon('users', 'w-5 h-5') ?>
          </span>
          <div>
            <div class="font-semibold text-sm text-foreground">Caste / Category Certificate</div>
            <div class="text-xs text-muted-foreground mt-0.5">For SC/ST/OBC/EWS candidates (if applicable)</div>
          </div>
        </div>

        <div class="flex items-start gap-3 p-5 rounded-2xl border border-border bg-surface hover:border-gold/50 transition">
          <span class="grid h-10 w-10 place-items-center rounded-xl bg-secondary text-brand shrink-0 mt-0.5">
            <?= lucide_icon('camera', 'w-5 h-5') ?>
          </span>
          <div>
            <div class="font-semibold text-sm text-foreground">Passport Size Photographs</div>
            <div class="text-xs text-muted-foreground mt-0.5">6 recent colored passport size photos + ID Proof</div>
          </div>
        </div>
      </div>

      <div class="mt-8 pt-6 border-t border-border flex flex-wrap items-center justify-between gap-4">
        <div>
          <p class="text-sm font-medium text-foreground">Need assistance with your admission?</p>
          <p class="text-xs text-muted-foreground">Contact Admission Helpline: +91 7091168777 / admission@rkdfuniversity.org</p>
        </div>
        <a href="admissions.php#apply-form" class="inline-flex items-center gap-2 rounded-full bg-gold text-primary-foreground px-6 py-2.5 text-sm font-medium hover:opacity-90 transition shadow-sm">
          Fill Online Application
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
