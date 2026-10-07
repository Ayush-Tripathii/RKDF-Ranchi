<?php
/**
 * RKDF University Ranchi — Admission Counseling Committee
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Admission Counseling Committee | " . SITE_NAME;
$page_meta_desc = "Official statutory committee page for Admission Counseling Committee at RKDF University Ranchi, including committee objectives, member details, and grievance channels.";

$allCommittees = require dirname(__DIR__) . '/data/committees/committees_list.php';
$committee     = $allCommittees['admission-counseling-committee'] ?? null;

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('committees/') ?>" class="hover:text-white transition">Committees</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Admission Counseling Committee</span>
    </div>

    <h1 class="font-serif text-3xl sm:text-4xl md:text-6xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Admission Counseling Committee
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Constituted under statutory guidelines to ensure institutional compliance, transparent governance, and student-faculty welfare.
    </p>

    <div class="mt-8 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('user-check') ?> Statutory Body
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> Institutional Council
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> UGC &amp; State Mandated
      </span>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/committees_nav_tabs.php'; ?>

<!-- ==================== COMMITTEE DETAILS & ROSTER ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Objective Spotlight -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="lg:col-span-2 rounded-3xl bg-card border border-border p-8 sm:p-10 shadow-sm space-y-6">
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 rounded-2xl bg-brand/10 text-brand flex items-center justify-center">
            <?= lucide_icon('user-check', 'w-6 h-6') ?>
          </div>
          <div>
            <span class="text-xs uppercase font-bold tracking-widest text-gold">Statutory Mandate &amp; Role</span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-semibold">About the Committee</h2>
          </div>
        </div>

        <div class="space-y-4 text-muted-foreground text-sm sm:text-base leading-relaxed">
          <p>The Admission Counseling Committee was constituted for the Academic Year 2022-2023.</p>
          <p>To verify the documents &amp; eligibility criteria of the students.</p>
        </div>

        <!-- Quick Help Alert if applicable -->
        <div class="rounded-2xl bg-brand/5 border border-brand/20 p-5 flex items-start gap-4">
          <div class="text-brand shrink-0 mt-0.5">
            <?= lucide_icon('info', 'w-5 h-5') ?>
          </div>
          <div class="text-xs sm:text-sm text-muted-foreground space-y-1">
            <p class="font-bold text-foreground">Confidential &amp; Prompt Grievance Redressal</p>
            <p>All petitions and complaints submitted to the committee are processed with strict confidentiality and in accordance with prescribed time-bound statutory norms.</p>
          </div>
        </div>
      </div>

      <!-- Quick Action / Helpline Sidebar -->
      <div class="space-y-6">
        <div class="rounded-3xl bg-brand text-brand-foreground p-6 sm:p-8 shadow-xl border border-gold/30 space-y-6">
          <div class="space-y-2">
            <span class="text-xs uppercase font-bold tracking-widest text-gold flex items-center gap-1.5">
              <?= lucide_icon('phone-call', 'w-4 h-4') ?> Direct Assistance
            </span>
            <h3 class="font-serif text-xl font-normal text-white">University Secretariat</h3>
            <p class="text-xs text-white/80 leading-relaxed">For urgent submissions, notifications, or formal representations to this committee:</p>
          </div>

          <div class="space-y-3 text-xs">
            <div class="flex items-center gap-3 bg-white/10 p-3 rounded-xl backdrop-blur">
              <?= lucide_icon('mail', 'w-4 h-4 text-gold shrink-0') ?>
              <span class="text-white/90">info@rkdfuniversity.org</span>
            </div>
            <div class="flex items-center gap-3 bg-white/10 p-3 rounded-xl backdrop-blur">
              <?= lucide_icon('phone', 'w-4 h-4 text-gold shrink-0') ?>
              <span class="text-white/90">+91 7091168777</span>
            </div>
            <div class="flex items-center gap-3 bg-white/10 p-3 rounded-xl backdrop-blur">
              <?= lucide_icon('map-pin', 'w-4 h-4 text-gold shrink-0') ?>
              <span class="text-white/90">RKDF University, Ranchi Campus</span>
            </div>
          </div>

          <a href="<?= url('about/rti-corner.php') ?>" class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-gold text-brand py-3 text-xs font-bold uppercase tracking-wider hover:bg-white transition shadow">
            <span>RTI &amp; Statutory Compliance</span>
            <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
          </a>
        </div>

        <div class="rounded-2xl bg-card border border-border p-5 space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-muted-foreground flex items-center gap-1.5">
            <?= lucide_icon('layers', 'w-3.5 h-3.5 text-gold') ?> Quick Navigation
          </div>
          <div class="flex flex-col gap-2 text-xs">
            <a href="<?= url('committees/') ?>" class="text-foreground hover:text-brand transition flex items-center justify-between py-1">
              <span>All 18 Statutory Committees</span>
              <?= lucide_icon('chevron-right', 'w-3.5 h-3.5') ?>
            </a>
            <a href="<?= url('boards/board-of-governors.php') ?>" class="text-foreground hover:text-brand transition flex items-center justify-between py-1">
              <span>Board of Governors</span>
              <?= lucide_icon('chevron-right', 'w-3.5 h-3.5') ?>
            </a>
            <a href="<?= url('governance/deans.php') ?>" class="text-foreground hover:text-brand transition flex items-center justify-between py-1">
              <span>Deans &amp; Academic Heads</span>
              <?= lucide_icon('chevron-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
