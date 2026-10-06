<?php
/**
 * RKDF University — Chief Vigilance Officer
 * Live Source: https://rkdfuniversity.org/about/chief-vigilance-officer/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Chief Vigilance Officer — Dr. B. N. Singh | " . SITE_NAME;
$page_meta_desc = "Office of the Chief Vigilance Officer at RKDF University Ranchi. Ensuring ethical governance, transparency, vigilance, and continuous reevaluation.";

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <!-- Breadcrumbs -->
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('about/') ?>" class="hover:text-white transition">About</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Chief Vigilance Officer</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Chief Vigilance <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Officer</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Promoting transparency, institutional integrity, ethical governance, and continuous vigilance across all academic operations.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('shield-check', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Vigilance &amp; Integrity Division
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('scale', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Ethical Governance
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> RKDF University Ranchi
      </span>
    </div>
  </div>
</section>

<!-- Leadership Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/leadership_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <div class="leadership-layout-grid">
      
      <!-- Left Column: Portrait & Credentials -->
      <div class="leadership-sidebar space-y-6">
        <div class="leadership-profile-card group">
          <div class="absolute top-0 left-0 right-0 h-28 bg-gradient-to-br from-brand via-slate-900 to-brand/90 -z-0"></div>
          
          <div class="leadership-img-frame z-10">
            <img 
              src="<?= img('vigilance-officer.jpg') ?>" 
              alt="Dr. B. N. Singh — Chief Vigilance Officer, RKDF University Ranchi" 
              class="transition duration-500 group-hover:scale-105"
            />
          </div>

          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Chief Vigilance Officer
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Dr. B. N. Singh
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              Chief Vigilance Officer, RKDF University Ranchi
            </p>
          </div>

          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('shield-check') ?>
              </div>
              <div class="leadership-stat-text">Institutional Oversight</div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('scale') ?>
              </div>
              <div class="leadership-stat-text">Integrity &amp; Anti-Corruption Cell</div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('mail') ?>
              </div>
              <div class="leadership-stat-text truncate">
                <a href="mailto:<?= SITE_EMAIL ?>" class="hover:text-gold transition"><?= SITE_EMAIL ?></a>
              </div>
            </div>
          </div>
        </div>

        <div class="p-6 rounded-2xl bg-brand text-brand-foreground border border-gold/20 shadow-sm space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
            <?= lucide_icon('sparkles', 'w-4 h-4') ?> Vigilance Mandate
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            Maintaining fair practices, probity, zero-tolerance towards misconduct, and fostering an environment of trust and transparency.
          </p>
        </div>
      </div>

      <!-- Right Column: Message & Charter -->
      <div class="space-y-8">
        
        <!-- Quote Banner -->
        <div class="quote-philosophy-banner">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold font-bold mb-4">
            <?= lucide_icon('quote', 'w-4 h-4 text-gold') ?> Inspiring Words
          </div>
          <blockquote>
            “Success is a journey, not a destination. It requires constant effort, vigilance and reevaluation.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — Mark Twain (Quoted by Dr. B. N. Singh, Chief Vigilance Officer)
          </div>
        </div>

        <!-- Main Verbatim Message Document -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Official Office</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Vigilance Administration &amp; Institutional Probity
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              Statutory Wing
            </span>
          </div>

          <div class="prose-rkdf space-y-5 text-slate-700 text-base sm:text-lg leading-relaxed">
            <p>
              The Vigilance Cell of RKDF University Ranchi functions as an autonomous oversight mechanism committed to upholding the highest standards of ethics, transparency, and accountability in administrative and academic processes.
            </p>
            <p>
              Vigilance is not merely punitive; its primary role is preventive and proactive — identifying systemic vulnerabilities, strengthening procedural compliance, and ensuring equal opportunities for every student, scholar, and employee.
            </p>
          </div>

          <!-- Key Vigilance Pillars -->
          <div class="grid sm:grid-cols-2 gap-4 pt-4">
            <div class="p-5 rounded-2xl bg-surface border border-border space-y-2">
              <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
                <?= lucide_icon('shield-alert', 'w-4 h-4 text-gold') ?> Preventive Vigilance
              </div>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Streamlining rules, reducing discretionary powers, and introducing computerized workflows for transparency.
              </p>
            </div>

            <div class="p-5 rounded-2xl bg-surface border border-border space-y-2">
              <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
                <?= lucide_icon('file-search', 'w-4 h-4 text-gold') ?> Redressal &amp; Inquiries
              </div>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Prompt and confidential handling of grievances regarding administrative or examination discrepancies.
              </p>
            </div>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Dr. B. N. Singh</div>
              <div class="text-sm font-semibold text-gold uppercase tracking-wider">Chief Vigilance Officer</div>
              <div class="text-xs text-muted-foreground font-semibold">RKDF University Ranchi, Jharkhand</div>
            </div>
            
            <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>Confidential Desk</span>
              <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
            </a>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
