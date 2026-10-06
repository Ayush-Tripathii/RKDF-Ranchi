<?php
/**
 * RKDF University — Finance Officer
 * Live Source: https://rkdfuniversity.org/about/finance-officer/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Finance Officer — Mr. Rajat Raj | " . SITE_NAME;
$page_meta_desc = "Office of the Finance Officer at RKDF University Ranchi. Managing statutory finances, fee administration, budgeting, and institutional accounts.";

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
      <span class="text-white/90">Finance Officer</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Finance <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Officer</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Ensuring fiscal discipline, prudent budget allocation, and seamless financial operations for university growth.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('coins', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Finance &amp; Accounts Wing
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('award', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Statutory Budgeting &amp; Audits
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
              src="<?= img('finance-officer.jpg') ?>" 
              alt="Mr. Rajat Raj — Finance Officer, RKDF University Ranchi" 
              class="transition duration-500 group-hover:scale-105"
            />
          </div>

          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Finance Officer
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Rajat Raj
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              Finance Officer, RKDF University Ranchi
            </p>
          </div>

          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('phone') ?>
              </div>
              <div class="leadership-stat-text">
                <a href="tel:7260801432" class="hover:text-gold transition font-semibold">7260801432</a>
              </div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('mail') ?>
              </div>
              <div class="leadership-stat-text truncate">
                <a href="mailto:accounts@rkdfuniversity.org" class="hover:text-gold transition truncate">accounts@rkdfuniversity.org</a>
              </div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('building-2') ?>
              </div>
              <div class="leadership-stat-text">Accounts &amp; Fee Section</div>
            </div>
          </div>
        </div>

        <div class="p-6 rounded-2xl bg-brand text-brand-foreground border border-gold/20 shadow-sm space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
            <?= lucide_icon('sparkles', 'w-4 h-4') ?> Direct Support
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            For student fee deposits, challans, online payment verifications, and scholarship disbursements, reach out to the Finance Office.
          </p>
        </div>
      </div>

      <!-- Right Column: Address & Responsibilities -->
      <div class="space-y-8">
        
        <!-- Quote Banner -->
        <div class="quote-philosophy-banner">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold font-bold mb-4">
            <?= lucide_icon('quote', 'w-4 h-4 text-gold') ?> Inspiring Words
          </div>
          <blockquote>
            “Do not save what is left after spending; instead spend what is left after saving.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — Warren Buffett (Quoted by Rajat Raj, Finance Officer)
          </div>
        </div>

        <!-- Official Department Details -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Statutory Office</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Department of Finance &amp; Accounts
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              Administrative Block
            </span>
          </div>

          <div class="prose-rkdf space-y-4 text-slate-700 text-base sm:text-lg leading-relaxed">
            <p>
              The Finance Department at RKDF University Ranchi manages all institutional accounting, annual financial planning, budget implementation, external statutory audits, and student fee administration in accordance with statutory guidelines and university regulations.
            </p>
          </div>

          <!-- Official Contact Cards -->
          <div class="grid sm:grid-cols-2 gap-4 pt-2">
            <div class="p-6 rounded-2xl bg-surface border border-border space-y-2">
              <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
                <?= lucide_icon('phone-call', 'w-4 h-4 text-gold') ?> Direct Phone
              </div>
              <div class="font-serif text-2xl text-foreground font-normal">
                <a href="tel:7260801432" class="hover:text-gold transition">7260801432</a>
              </div>
              <p class="text-xs text-muted-foreground">Office hours: Monday to Saturday (9:30 AM – 5:00 PM)</p>
            </div>

            <div class="p-6 rounded-2xl bg-surface border border-border space-y-2">
              <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
                <?= lucide_icon('mail', 'w-4 h-4 text-gold') ?> Official Email
              </div>
              <div class="font-serif text-xl sm:text-2xl text-foreground font-normal truncate">
                <a href="mailto:accounts@rkdfuniversity.org" class="hover:text-gold transition">accounts@rkdfuniversity.org</a>
              </div>
              <p class="text-xs text-muted-foreground">Accounts, fee receipts &amp; financial queries</p>
            </div>
          </div>

          <!-- Scope of Finance Office -->
          <div class="pt-6 border-t border-border space-y-4">
            <h4 class="font-serif text-2xl text-foreground font-normal">Core Office Functions</h4>
            <div class="grid sm:grid-cols-2 gap-3 text-xs sm:text-sm text-slate-700">
              <div class="flex items-center gap-2.5 p-3 rounded-xl bg-surface border border-border">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                <span>Student Fee Management &amp; E-Receipts</span>
              </div>
              <div class="flex items-center gap-2.5 p-3 rounded-xl bg-surface border border-border">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                <span>E-Kalyan &amp; NSP Scholarship Audits</span>
              </div>
              <div class="flex items-center gap-2.5 p-3 rounded-xl bg-surface border border-border">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                <span>Annual Budget Formulation &amp; Control</span>
              </div>
              <div class="flex items-center gap-2.5 p-3 rounded-xl bg-surface border border-border">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                <span>Statutory Audit &amp; UGC Financial Returns</span>
              </div>
            </div>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Rajat Raj</div>
              <div class="text-sm font-semibold text-gold uppercase tracking-wider">Finance Officer</div>
              <div class="text-xs text-muted-foreground font-semibold">RKDF University Ranchi, Jharkhand</div>
            </div>
            
            <a href="<?= url('about/annual-reports.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>View Annual Audit Reports</span>
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
