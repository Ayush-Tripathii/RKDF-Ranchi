<?php
/**
 * RKDF University — Nodal Officer Details
 * Live Source: https://rkdfuniversity.org/about/nodal-officer-details/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Nodal Officer Details — Dr. Koomkoom Khawas | " . SITE_NAME;
$page_meta_desc = "Nodal Officer Details at RKDF University Ranchi — Dr. Koomkoom Khawas. Official institutional liaison for regulatory, examination, and statutory compliance.";

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
      <span class="text-white/90">Nodal Officer Details</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Nodal Officer <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Details</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Official institutional coordinator for regulatory compliance, government reporting, AISHE, and academic coordination.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Institutional Nodal Desk
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('award', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> AISHE &amp; Government Liaison
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('scale', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> UGC Regulatory Compliance
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
      
      <!-- Left Column: Nodal Officer Card -->
      <div class="leadership-sidebar space-y-6">
        <div class="leadership-profile-card group">
          <div class="absolute top-0 left-0 right-0 h-28 bg-gradient-to-br from-brand via-slate-900 to-brand/90 -z-0"></div>
          
          <div class="leadership-img-frame z-10 flex items-center justify-center">
            <div class="w-full h-full bg-gradient-to-br from-brand to-slate-800 flex flex-col items-center justify-center text-white p-4">
              <div class="w-16 h-16 rounded-2xl bg-gold/20 text-gold flex items-center justify-center mb-2 border border-gold/40">
                <?= lucide_icon('user-check', 'w-8 h-8 text-gold') ?>
              </div>
              <span class="text-xs font-serif uppercase tracking-widest text-gold font-semibold">Nodal Desk</span>
            </div>
          </div>

          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Designated Nodal Officer
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Dr. Koomkoom Khawas
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              Controller of Examinations &amp; Nodal Officer
            </p>
          </div>

          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('mail') ?>
              </div>
              <div class="leadership-stat-text truncate">
                <a href="mailto:hod.che@rkdfuniversity.org" class="hover:text-gold transition truncate">hod.che@rkdfuniversity.org</a>
              </div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('mail') ?>
              </div>
              <div class="leadership-stat-text truncate">
                <a href="mailto:exam@rkdfuniversity.org" class="hover:text-gold transition truncate">exam@rkdfuniversity.org</a>
              </div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('building-2') ?>
              </div>
              <div class="leadership-stat-text">Administrative Block, RKDF Ranchi</div>
            </div>
          </div>
        </div>

        <div class="p-6 rounded-2xl bg-brand text-brand-foreground border border-gold/20 shadow-sm space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
            <?= lucide_icon('sparkles', 'w-4 h-4') ?> Statutory Functions
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            The Nodal Officer acts as the central single point of contact (SPOC) for government portals, national scholarship validation, and higher education regulatory submissions.
          </p>
        </div>
      </div>

      <!-- Right Column: Official Details -->
      <div class="space-y-8">
        
        <!-- Official Banner -->
        <div class="quote-philosophy-banner">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold font-bold mb-4">
            <?= lucide_icon('landmark', 'w-4 h-4 text-gold') ?> Statutory Liaison Desk
          </div>
          <blockquote>
            “Facilitating seamless coordination between the University, regulatory councils, and government bodies.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — RKDF University Ranchi Institutional Governance
          </div>
        </div>

        <!-- Official Profile Document -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Official Appointment</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Institutional Nodal Officer
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              Regulatory Affairs
            </span>
          </div>

          <div class="prose-rkdf space-y-4 text-slate-700 text-base sm:text-lg leading-relaxed">
            <div class="p-6 rounded-2xl bg-surface border border-border space-y-3">
              <div class="flex items-center justify-between border-b border-border pb-3">
                <span class="text-xs uppercase font-bold text-muted-foreground tracking-wider">Nodal Officer Name</span>
                <span class="font-serif text-xl text-foreground font-semibold">Dr. Koomkoom Khawas</span>
              </div>
              <div class="flex items-center justify-between border-b border-border pb-3">
                <span class="text-xs uppercase font-bold text-muted-foreground tracking-wider">Designation</span>
                <span class="text-sm font-semibold text-gold">Controller of Examinations</span>
              </div>
              <div class="flex items-center justify-between border-b border-border pb-3">
                <span class="text-xs uppercase font-bold text-muted-foreground tracking-wider">Institution</span>
                <span class="text-sm font-medium text-foreground">RKDF University Ranchi, Jharkhand</span>
              </div>
              <div class="flex items-start justify-between pt-1">
                <span class="text-xs uppercase font-bold text-muted-foreground tracking-wider">Official Email(s)</span>
                <div class="text-right space-y-1">
                  <div><a href="mailto:hod.che@rkdfuniversity.org" class="text-sm font-semibold text-brand hover:text-gold transition">hod.che@rkdfuniversity.org</a></div>
                  <div><a href="mailto:exam@rkdfuniversity.org" class="text-sm font-semibold text-brand hover:text-gold transition">exam@rkdfuniversity.org</a></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Nodal Responsibilities -->
          <div class="pt-6 border-t border-border space-y-4">
            <h4 class="font-serif text-2xl text-foreground font-normal">Scope &amp; Responsibilities</h4>
            <div class="grid sm:grid-cols-2 gap-3 text-xs sm:text-sm text-slate-700">
              <div class="flex items-center gap-2.5 p-3.5 rounded-xl bg-surface border border-border">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                <span>AISHE Annual Data Uploads &amp; Certification</span>
              </div>
              <div class="flex items-center gap-2.5 p-3.5 rounded-xl bg-surface border border-border">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                <span>National Scholarship Portal (NSP) Verification</span>
              </div>
              <div class="flex items-center gap-2.5 p-3.5 rounded-xl bg-surface border border-border">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                <span>Jharkhand E-Kalyan State Portal Verification</span>
              </div>
              <div class="flex items-center gap-2.5 p-3.5 rounded-xl bg-surface border border-border">
                <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                <span>UGC &amp; Regulatory Council Submissions</span>
              </div>
            </div>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Dr. Koomkoom Khawas</div>
              <div class="text-sm font-semibold text-gold uppercase tracking-wider">Controller of Examinations &amp; Nodal Officer</div>
              <div class="text-xs text-muted-foreground font-semibold">RKDF University Ranchi, Jharkhand</div>
            </div>
            
            <a href="mailto:exam@rkdfuniversity.org" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>Contact Nodal Office</span>
              <?= lucide_icon('mail', 'w-4 h-4') ?>
            </a>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
