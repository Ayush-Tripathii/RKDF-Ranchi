<?php
/**
 * RKDF University — Ombudsperson
 * Live Source: https://rkdfuniversity.org/about/ombudsperson/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Ombudsperson — Prof. (Dr.) Taposh Ghoshal | " . SITE_NAME;
$page_meta_desc = "Office of the Ombudsperson at RKDF University Ranchi — Prof. (Dr.) Taposh Ghoshal. Independent grievance redressal under UGC Regulations.";

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
      <span class="text-white/90">Ombudsperson</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      University <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Ombudsperson</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Independent, neutral, and confidential dispute resolution for student grievances in compliance with UGC Regulations.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('scale', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> UGC Student Grievance Redressal
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('shield-check', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Independent Redressal Forum
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
              src="<?= img('ombudsperson.jpg') ?>" 
              alt="Prof. (Dr.) Taposh Ghoshal — Ombudsperson, RKDF University Ranchi" 
              class="transition duration-500 group-hover:scale-105"
            />
          </div>

          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Ombudsperson
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Prof. (Dr.) Taposh Ghoshal
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              Principal Mentor, Astra Knowledge Foundation
            </p>
          </div>

          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('phone') ?>
              </div>
              <div class="leadership-stat-text">
                <a href="tel:9431105185" class="hover:text-gold transition font-semibold">9431105185</a>
              </div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('mail') ?>
              </div>
              <div class="leadership-stat-text truncate">
                <a href="mailto:sgrc@rkdfuniversity.org" class="hover:text-gold transition truncate">sgrc@rkdfuniversity.org</a>
              </div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('scale') ?>
              </div>
              <div class="leadership-stat-text">Student Grievance Cell (SGRC)</div>
            </div>
          </div>
        </div>

        <div class="p-6 rounded-2xl bg-brand text-brand-foreground border border-gold/20 shadow-sm space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
            <?= lucide_icon('shield-check', 'w-4 h-4') ?> Impartial Protection
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            The Ombudsperson provides an independent, accessible, and informal forum for students to seek fair resolution for any grievance.
          </p>
        </div>
      </div>

      <!-- Right Column: Details & Grievance Guidelines -->
      <div class="space-y-8">
        
        <!-- Official Appointment Banner -->
        <div class="quote-philosophy-banner">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold font-bold mb-4">
            <?= lucide_icon('scale', 'w-4 h-4 text-gold') ?> Statutory Appointment
          </div>
          <blockquote>
            “Fairness, equity, and timely redressal form the cornerstone of our academic community.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — UGC (Redressal of Grievances of Students) Regulations
          </div>
        </div>

        <!-- Main Content Card -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Statutory Office</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Office of the University Ombudsperson
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              Student Grievance Wing
            </span>
          </div>

          <div class="prose-rkdf space-y-4 text-slate-700 text-base sm:text-lg leading-relaxed">
            <p>
              In accordance with the University Grants Commission (Redressal of Grievances of Students) Regulations, RKDF University Ranchi has appointed <strong>Prof. (Dr.) Taposh Ghoshal</strong> as the Ombudsperson for hearing and deciding appeals against the decisions of the Students Grievance Redressal Committee (SGRC).
            </p>
          </div>

          <!-- Contact Details Card -->
          <div class="grid sm:grid-cols-2 gap-4 pt-2">
            <div class="p-6 rounded-2xl bg-surface border border-border space-y-2">
              <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
                <?= lucide_icon('phone-call', 'w-4 h-4 text-gold') ?> Contact Number
              </div>
              <div class="font-serif text-2xl text-foreground font-normal">
                <a href="tel:9431105185" class="hover:text-gold transition">9431105185</a>
              </div>
              <p class="text-xs text-muted-foreground">Direct helpline for student redressal</p>
            </div>

            <div class="p-6 rounded-2xl bg-surface border border-border space-y-2">
              <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
                <?= lucide_icon('mail', 'w-4 h-4 text-gold') ?> Grievance Email
              </div>
              <div class="font-serif text-xl sm:text-2xl text-foreground font-normal truncate">
                <a href="mailto:sgrc@rkdfuniversity.org" class="hover:text-gold transition">sgrc@rkdfuniversity.org</a>
              </div>
              <p class="text-xs text-muted-foreground">Submit appeals and documented grievances</p>
            </div>
          </div>

          <!-- Redressal Steps -->
          <div class="pt-6 border-t border-border space-y-4">
            <h4 class="font-serif text-2xl text-foreground font-normal">Grievance Submission Procedure</h4>
            <div class="grid sm:grid-cols-3 gap-3 text-xs text-slate-700">
              <div class="p-4 rounded-xl bg-surface border border-border space-y-1">
                <span class="text-gold font-bold uppercase tracking-wider">Step 1</span>
                <p class="font-semibold text-foreground">Department / SGRC</p>
                <p class="text-muted-foreground">Submit your grievance first to the Departmental Grievance Redressal Cell.</p>
              </div>
              <div class="p-4 rounded-xl bg-surface border border-border space-y-1">
                <span class="text-gold font-bold uppercase tracking-wider">Step 2</span>
                <p class="font-semibold text-foreground">Appeal to Ombudsperson</p>
                <p class="text-muted-foreground">If unaddressed within 15 days, appeal to the Ombudsperson via email.</p>
              </div>
              <div class="p-4 rounded-xl bg-surface border border-border space-y-1">
                <span class="text-gold font-bold uppercase tracking-wider">Step 3</span>
                <p class="font-semibold text-foreground">Impartial Hearing</p>
                <p class="text-muted-foreground">The Ombudsperson shall hear both parties and issue a binding resolution.</p>
              </div>
            </div>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Prof. (Dr.) Taposh Ghoshal</div>
              <div class="text-sm font-semibold text-gold uppercase tracking-wider">University Ombudsperson</div>
              <div class="text-xs text-muted-foreground font-semibold">RKDF University Ranchi, Jharkhand</div>
            </div>
            
            <a href="mailto:sgrc@rkdfuniversity.org" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>Email Grievance Cell</span>
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
