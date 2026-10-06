<?php
/**
 * RKDF University — Controller of Examination
 * Live Source: https://rkdfuniversity.org/about/controller-of-examination/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Controller of Examination — Dr. Anita Kumari | " . SITE_NAME;
$page_meta_desc = "Message from Dr. Anita Kumari, Controller of Examination at RKDF University Ranchi. Ensuring integrity, confidential evaluation, and academic rigor.";

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
      <span class="text-white/90">Controller of Examination</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Controller of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Examination</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Maintaining examination integrity, standardized evaluation, and fostering thoughtful minds in harmony with existence.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('clipboard-check', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Examination Division
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('shield-check', 'w-3.5 h-3.5 text-gold shrink-0') ?> Confidential Evaluation
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
              src="<?= img('controller-examination.jpg') ?>" 
              alt="Dr. Anita Kumari — Controller of Examination, RKDF University Ranchi" 
              class="transition duration-500 group-hover:scale-105"
            />
          </div>

          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Controller of Examination
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Dr. Anita Kumari
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              Controller of Examination, RKDF University Ranchi
            </p>
          </div>

          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('clipboard-check') ?>
              </div>
              <div class="leadership-stat-text">Evaluation &amp; Certification Wing</div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('shield-check') ?>
              </div>
              <div class="leadership-stat-text">Examination Integrity &amp; Standards</div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('mail') ?>
              </div>
              <div class="leadership-stat-text truncate">
                <a href="mailto:exam@rkdfuniversity.org" class="hover:text-gold transition">exam@rkdfuniversity.org</a>
              </div>
            </div>
          </div>
        </div>

        <div class="p-6 rounded-2xl bg-brand text-brand-foreground border border-gold/20 shadow-sm space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
            <?= lucide_icon('sparkles', 'w-4 h-4') ?> Purpose of Education
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            Education is a process that brings about a positive change and refines the mind with an ability to think and act in a sophisticated manner.
          </p>
        </div>
      </div>

      <!-- Right Column: Address & Objectives -->
      <div class="space-y-8">
        
        <!-- Quote Banner -->
        <div class="quote-philosophy-banner">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold font-bold mb-4">
            <?= lucide_icon('quote', 'w-4 h-4 text-gold') ?> Inspiring Words
          </div>
          <blockquote>
            “The highest education is that which does not merely give us information but makes our life in harmony with all existence.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — Rabindranath Tagore (Quoted by Dr. Anita Kumari)
          </div>
        </div>

        <!-- Main Verbatim Message Document -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Official Communiqué</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Empowering Youth &amp; Widening Horizons
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              Examination Division
            </span>
          </div>

          <div class="prose-rkdf space-y-5 text-slate-700 text-base sm:text-lg leading-relaxed">
            <p>
              On a nutshell Education is a process that brings about a positive change and refines the mind with an ability to think and act in a sophisticated manner.
            </p>

            <p>
              It is also a purposeful activity directed at achieving certain aims, such as transmitting knowledge or fostering skills and character traits. These aims may include the development of understanding, rationality, kindness, and honesty.
            </p>

            <p>
              Our University is a place for empowerment of the youth; for the fusion and refinement of ideas coming from different directions as also those emanating from interactive minds. The university offers an opportunity to invent and reinvent the thoughtful minds, for widening the horizon much beyond their immediate confines. RKDF University, Ranchi is a place to help disseminate the wisdom, ancient and modern, as also the art of critiquing them, among generations of student and teacher for betterment of the human social existence, both local and global.
            </p>

            <p>
              Away from hubbubs of the metropolis, the RKDF University, Ranchi and the ambience of its campus, a Bio-diversity Heritage Site, is committed to the pursuit of following objectives:
            </p>
          </div>

          <!-- 6 Objectives Cards -->
          <div class="grid sm:grid-cols-2 gap-4 pt-4">
            <div class="p-4 rounded-2xl bg-surface border border-border flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-brand text-gold font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">1</span>
              <p class="text-xs sm:text-sm text-foreground font-medium">Creating the most vibrant knowledge pool</p>
            </div>
            <div class="p-4 rounded-2xl bg-surface border border-border flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-brand text-gold font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">2</span>
              <p class="text-xs sm:text-sm text-foreground font-medium">Providing comparable and competitive facilities</p>
            </div>
            <div class="p-4 rounded-2xl bg-surface border border-border flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-brand text-gold font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">3</span>
              <p class="text-xs sm:text-sm text-foreground font-medium">Trying to achieve excellence in all fields of the university activity</p>
            </div>
            <div class="p-4 rounded-2xl bg-surface border border-border flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-brand text-gold font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">4</span>
              <p class="text-xs sm:text-sm text-foreground font-medium">Empowering the backward social clusters of its hinterland through teaching-learning process beyond class room</p>
            </div>
            <div class="p-4 rounded-2xl bg-surface border border-border flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-brand text-gold font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">5</span>
              <p class="text-xs sm:text-sm text-foreground font-medium">Promoting the ethnic, social, religious and cultural diversity in unity</p>
            </div>
            <div class="p-4 rounded-2xl bg-surface border border-border flex items-start gap-3">
              <span class="w-7 h-7 rounded-lg bg-brand text-gold font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">6</span>
              <p class="text-xs sm:text-sm text-foreground font-medium">Reinvigorating our composite heritage in consonance with the global India</p>
            </div>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Dr. Anita Kumari</div>
              <div class="text-sm font-semibold text-gold uppercase tracking-wider">Controller of Examination</div>
              <div class="text-xs text-muted-foreground font-semibold">RKDF University Ranchi, Jharkhand</div>
            </div>
            
            <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>Examination Inquiries</span>
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
