<?php
/**
 * RKDF University — Chancellor's Message
 * Live Source: https://rkdfuniversity.org/about/chancellor/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Chancellor's Message — Dr. Sadhna Kapoor | " . SITE_NAME;
$page_meta_desc = "Read the Chancellor's Message from Dr. Sadhna Kapoor at RKDF University Ranchi. Nurturing informed, innovative, and reflective builders of the nation.";

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
      <span class="text-white/90">Chancellor</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Chancellor’s <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Message</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Nurturing informed, innovative, reflective and well-renowned pioneers and builders of our nation.
    </p>

    <!-- Leadership Quick Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('award', 'w-3.5 h-3.5 text-gold shrink-0') ?> Chancellor
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('sparkles', 'w-3.5 h-3.5 text-gold shrink-0') ?> Apex Academic Leadership
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

    <!-- Executive Profile & Message Grid -->
    <div class="leadership-layout-grid">
      
      <!-- Left Column: Portrait & Credential Card -->
      <div class="leadership-sidebar space-y-6">
        <div class="leadership-profile-card group">
          <!-- Subtle Accent Background -->
          <div class="absolute top-0 left-0 right-0 h-28 bg-gradient-to-br from-brand via-slate-900 to-brand/90 -z-0"></div>
          
          <!-- Image Frame with Clean Portrait -->
          <div class="leadership-img-frame z-10">
            <img 
              src="<?= img('chancellor.jpg') ?>" 
              alt="Dr. Sadhna Kapoor — Chancellor, RKDF University Ranchi" 
              class="transition duration-500 group-hover:scale-105"
            />
          </div>

          <!-- Titles -->
          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Chancellor
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Dr. Sadhna Kapoor
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              Chancellor, RKDF University Ranchi
            </p>
          </div>

          <!-- Statutory Details List with Icon Containers & Proper Gaps -->
          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('landmark') ?>
              </div>
              <div class="leadership-stat-text">Apex Governing Authority</div>
            </div>

            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('shield-check') ?>
              </div>
              <div class="leadership-stat-text">Jharkhand Act 2018 &amp; UGC 2(f)</div>
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

        <!-- Quick Info Callout -->
        <div class="p-6 rounded-2xl bg-brand text-brand-foreground border border-gold/20 shadow-sm space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
            <?= lucide_icon('sparkles', 'w-4 h-4') ?> Chancellor’s Vision
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            Leading RKDF University with an unwavering commitment to pioneering research, inclusive access, and the social empowerment of youth.
          </p>
        </div>
      </div>

      <!-- Right Column: Formal Address & Philosophical Vision -->
      <div class="space-y-8">
        
        <!-- Philosophical Quote Banner -->
        <div class="quote-philosophy-banner">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold font-bold mb-4">
            <?= lucide_icon('quote', 'w-4 h-4 text-gold') ?> Inspiring Words
          </div>
          <blockquote>
            “The best way to predict your future is to create it.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — Dr. Sadhna Kapoor, Chancellor
          </div>
        </div>

        <!-- Main Verbatim Message Document -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Official Communiqué</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Welcome to RKDF University Ranchi
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              Academic Year 2026–2027
            </span>
          </div>

          <div class="prose-rkdf space-y-5 text-slate-700 text-base sm:text-lg leading-relaxed">
            <p>
              Hearty welcome to you all at the RKDF University, Ranchi where we strive to graduate informed, innovative, reflective and well-renowned pioneers and builders of our nation through high-quality educational programmes. As students, you will have the opportunity to develop your potential fully. We invite you to enroll at one of the leading Higher Education Institutions at RKDF University Ranchi. Entering into the arena of higher education when the future is full of opportunities and promises, you must realize that there are many challenging situations wherein you need to do your best.
            </p>

            <p>
              You are joining our institutions with your vision and dream and we assure you to help you in realizing them. We are sure this will be one of the most significant decisions you will ever make. So, let us join hands and strive as hard as possible to build up your career. This will be one of the most significant decisions you will ever make. Our youth and their education in an all-embracing sense – lies at the heart of RKDF University Ranchi. I wish you all the best for your future career and goals as students of this university.
            </p>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Dr. Sadhna Kapoor</div>
              <div class="text-sm font-semibold text-gold uppercase tracking-wider">Chancellor</div>
              <div class="text-xs text-muted-foreground">RKDF University Ranchi, Jharkhand</div>
            </div>
            
            <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>Begin Your Journey</span>
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
