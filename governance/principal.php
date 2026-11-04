<?php
/**
 * RKDF University — Principal (Institute of Pharmaceutical Sciences)
 * Live Source: https://rkdfuniversity.org/about/principal/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Principal — Dr. Fedelic Ashish Toppo | " . SITE_NAME;
$page_meta_desc = "Office of the Principal, Institute of Pharmaceutical Sciences at RKDF University Ranchi — Dr. Fedelic Ashish Toppo. PCI-approved pharmaceutical education and research.";

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
      <span class="text-white/90">Principal</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Principal’s <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Office</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Leading the Institute of Pharmaceutical Sciences with clinical excellence, cutting-edge drug research, and PCI-approved education.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('heart-pulse', 'w-3.5 h-3.5 text-gold shrink-0') ?> Institute of Pharmaceutical Sciences
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('building-2', 'w-3.5 h-3.5 text-gold shrink-0') ?> PCI Approved Institution
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
<style>
@media (max-width: 640px) {
  .principal-contact-cards { grid-template-columns: minmax(0, 1fr) !important; }
  .principal-contact-cards > div { min-width: 0; max-width: 100%; box-sizing: border-box; padding: 1rem !important; gap: .75rem !important; }
  .principal-contact-cards > div > .min-w-0 { flex: 1; min-width: 0; }
  .principal-contact-cards .truncate { white-space: normal !important; overflow: visible !important; overflow-wrap: anywhere; }
  .principal-contact-cards a { overflow-wrap: anywhere; }
  .principal-contact-cards p { line-height: 1.5; }
  .principal-main .leadership-layout-grid { grid-template-columns: minmax(0, 1fr) !important; }
  .principal-main .leadership-layout-grid > * { min-width: 0; max-width: 100%; }
  .principal-main .leadership-sidebar > div,
  .principal-main .quote-philosophy-banner { width: 100%; max-width: 100%; min-width: 0; box-sizing: border-box; overflow-wrap: anywhere; }
  .principal-main .leadership-sidebar > div:not(.leadership-profile-card),
  .principal-main .quote-philosophy-banner { padding: 1.5rem 1.25rem !important; }
  .principal-main .leadership-stat-text { min-width: 0; overflow-wrap: anywhere; }
  .principal-main .quote-philosophy-banner { padding: 1.75rem 1.5rem !important; display: flex; flex-direction: column; gap: 1rem; }
  .principal-main .quote-philosophy-banner > div { margin: 0 !important; }
  .principal-main .quote-philosophy-banner > div:first-child { justify-content: center; align-items: center; line-height: 1.5; letter-spacing: .06em; }
  .principal-main .quote-philosophy-banner > div:last-child { font-size: .65rem; line-height: 1.6; }
  .principal-main .quote-philosophy-banner blockquote { font-size: 1.4rem !important; line-height: 1.5 !important; text-wrap: balance; }
}
</style>
<section class="py-20 bg-surface principal-main">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <div class="leadership-layout-grid">
      
      <!-- Left Column: Portrait & Credentials -->
      <div class="leadership-sidebar space-y-6">
        <div class="leadership-profile-card group">
          <div class="absolute top-0 left-0 right-0 h-28 bg-gradient-to-br from-brand via-slate-900 to-brand/90 -z-0"></div>
          
          <div class="leadership-img-frame z-10">
            <img 
              src="<?= img('principal.jpg') ?>" 
              alt="Dr. Fedelic Ashish Toppo — Principal, Institute of Pharmaceutical Sciences" 
              class="transition duration-500 group-hover:scale-105"
            />
          </div>

          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Principal
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Dr. Fedelic Ashish Toppo
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              Principal, Institute of Pharmaceutical Sciences
            </p>
          </div>

          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('phone') ?>
              </div>
              <div class="leadership-stat-text">
                <a href="tel:7828335844" class="hover:text-gold transition font-semibold">7828335844</a>
              </div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('mail') ?>
              </div>
              <div class="leadership-stat-text truncate">
                <a href="mailto:Pharmacy@rkdfuniversity.org" class="hover:text-gold transition truncate">Pharmacy@rkdfuniversity.org</a>
              </div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('heart-pulse') ?>
              </div>
              <div class="leadership-stat-text">Pharmacy Council of India (PCI)</div>
            </div>
          </div>
        </div>

        <div class="p-6 rounded-2xl bg-brand text-brand-foreground border border-gold/20 shadow-sm space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
            <?= lucide_icon('sparkles', 'w-4 h-4') ?> Pharmaceutical Vision
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            Committed to training compassionate, highly-skilled pharmacists equipped with modern pharmacology, formulation technology, and clinical pharmacy practices.
          </p>
        </div>
      </div>

      <!-- Right Column: Details & Academic Profile -->
      <div class="space-y-8">
        
        <!-- Quote Banner -->
        <div class="quote-philosophy-banner">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold font-bold mb-4">
            <?= lucide_icon('heart-pulse', 'w-4 h-4 text-gold') ?> Healthcare &amp; Science
          </div>
          <blockquote>
            “Healing humanity through advanced pharmaceutical science, ethical research, and compassionate healthcare leadership.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — Institute of Pharmaceutical Sciences, RKDF University Ranchi
          </div>
        </div>

        <!-- Main Content Card -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Academic Leadership</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Institute of Pharmaceutical Sciences
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              PCI Approval Verified
            </span>
          </div>

          <div class="prose-rkdf space-y-4 text-slate-700 text-base sm:text-lg leading-relaxed">
            <p>
              The <strong>Institute of Pharmaceutical Sciences</strong> at RKDF University Ranchi is a premier center of pharmacy education duly approved by the <strong>Pharmacy Council of India (PCI)</strong>. Under the leadership of <strong>Dr. Fedelic Ashish Toppo</strong>, the institute offers comprehensive diploma and degree programs designed to fulfill global healthcare demands.
            </p>
          </div>

          <!-- Direct Contact Cards -->
          <div class="principal-contact-cards grid sm:grid-cols-2 gap-4 pt-2">
            <div class="p-5 sm:p-6 rounded-2xl bg-white border border-slate-200/80 shadow-xs hover:shadow-md hover:border-gold/40 transition duration-300 flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-gold border border-gold/25 flex items-center justify-center shrink-0 shadow-xs">
                <?= lucide_icon('phone-call', 'w-5 h-5 text-gold') ?>
              </div>
              <div class="space-y-1 min-w-0">
                <div class="text-[11px] font-bold uppercase tracking-wider text-gold">Direct Phone</div>
                <div class="font-sans font-bold text-lg sm:text-xl text-slate-900 tracking-tight">
                  <a href="tel:7828335844" class="hover:text-gold transition">7828335844</a>
                </div>
                <p class="text-xs text-slate-500">Office of the Principal, Pharmacy Block</p>
              </div>
            </div>

            <div class="p-5 sm:p-6 rounded-2xl bg-white border border-slate-200/80 shadow-xs hover:shadow-md hover:border-gold/40 transition duration-300 flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-gold border border-gold/25 flex items-center justify-center shrink-0 shadow-xs">
                <?= lucide_icon('mail', 'w-5 h-5 text-gold') ?>
              </div>
              <div class="space-y-1 min-w-0">
                <div class="text-[11px] font-bold uppercase tracking-wider text-gold">Departmental Email</div>
                <div class="font-sans font-bold text-base sm:text-lg text-slate-900 truncate tracking-tight">
                  <a href="mailto:Pharmacy@rkdfuniversity.org" class="hover:text-gold transition" title="Pharmacy@rkdfuniversity.org">Pharmacy@rkdfuniversity.org</a>
                </div>
                <p class="text-xs text-slate-500">Admissions, syllabus &amp; academic queries</p>
              </div>
            </div>
          </div>

          <!-- Programs Offered Under the Principal -->
          <div class="pt-8 border-t border-slate-200/80">
            <div class="flex items-center justify-between flex-wrap gap-3 mb-6">
              <div>
                <span class="text-xs font-bold uppercase tracking-wider text-gold">Pharmacy Academics</span>
                <h4 class="font-serif text-2xl sm:text-3xl text-slate-900 font-normal mt-1">Offered Pharmacy Programs</h4>
              </div>
              <span class="text-xs font-medium text-slate-600 bg-slate-100 px-3 py-1.5 rounded-full border border-slate-200">
                PCI Approved
              </span>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-top: 1.5rem;">
              <div class="group p-5 sm:p-6 rounded-xl bg-white border border-slate-200/90 shadow-xs hover:border-gold/60 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                <div>
                  <div class="flex items-center justify-between mb-4">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-[11px] font-bold uppercase tracking-wider bg-amber-500/10 text-gold border border-gold/25">
                      2 Years
                    </span>
                    <div class="w-8 h-8 rounded-lg bg-slate-50 text-slate-400 group-hover:text-gold group-hover:bg-amber-500/10 transition flex items-center justify-center">
                      <?= lucide_icon('pill', 'w-4 h-4') ?>
                    </div>
                  </div>
                  <h5 class="font-bold text-slate-900 text-base leading-snug mb-2">D. Pharm</h5>
                  <p class="text-xs text-slate-500 leading-relaxed">
                    Diploma in Pharmacy approved by PCI for licensed practicing pharmacists and clinical dispensing.
                  </p>
                </div>
              </div>

              <div class="group p-5 sm:p-6 rounded-xl bg-white border border-slate-200/90 shadow-xs hover:border-gold/60 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                <div>
                  <div class="flex items-center justify-between mb-4">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-[11px] font-bold uppercase tracking-wider bg-amber-500/10 text-gold border border-gold/25">
                      4 Years
                    </span>
                    <div class="w-8 h-8 rounded-lg bg-slate-50 text-slate-400 group-hover:text-gold group-hover:bg-amber-500/10 transition flex items-center justify-center">
                      <?= lucide_icon('flask-round', 'w-4 h-4') ?>
                    </div>
                  </div>
                  <h5 class="font-bold text-slate-900 text-base leading-snug mb-2">B. Pharm</h5>
                  <p class="text-xs text-slate-500 leading-relaxed">
                    Bachelor of Pharmacy covering clinical pharmacology, medicinal chemistry, and drug formulation.
                  </p>
                </div>
              </div>

              <div class="group p-5 sm:p-6 rounded-xl bg-white border border-slate-200/90 shadow-xs hover:border-gold/60 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                <div>
                  <div class="flex items-center justify-between mb-4">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-[11px] font-bold uppercase tracking-wider bg-amber-500/10 text-gold border border-gold/25">
                      3 Years
                    </span>
                    <div class="w-8 h-8 rounded-lg bg-slate-50 text-slate-400 group-hover:text-gold group-hover:bg-amber-500/10 transition flex items-center justify-center">
                      <?= lucide_icon('graduation-cap', 'w-4 h-4') ?>
                    </div>
                  </div>
                  <h5 class="font-bold text-slate-900 text-base leading-snug mb-2">B. Pharm (Lateral)</h5>
                  <p class="text-xs text-slate-500 leading-relaxed">
                    Direct 2nd-year bachelor entry program for D.Pharm qualified diploma graduates.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Dr. Fedelic Ashish Toppo</div>
              <div class="text-sm font-semibold text-gold uppercase tracking-wider">Principal, Institute of Pharmaceutical Sciences</div>
              <div class="text-xs text-muted-foreground font-semibold">RKDF University Ranchi, Jharkhand</div>
            </div>
            
            <a href="<?= url('departments/school-pharmacy.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>View Pharmacy School</span>
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
