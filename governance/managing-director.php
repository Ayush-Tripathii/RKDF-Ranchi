<?php
/**
 * RKDF University — Managing Director Message
 * Live Source: https://rkdfuniversity.org/about/managing-director/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Managing Director's Message — Mr. Siddharth Kapoor | " . SITE_NAME;
$page_meta_desc = "Message from Mr. Siddharth Kapoor, Managing Director of RKDF Group. Empowering students with modern technical education, industry exposure, and disciplined leadership.";

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
      <span class="text-white/90">Managing Director</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Managing Director’s <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Message</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Enlightening students with sound, technology-rich curriculum, practical exposure, and disciplined values.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('briefcase', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Managing Director
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('sparkles', 'w-3.5 h-3.5 text-gold shrink-0') ?> RKDF Group of Institutions
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('globe', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> 162 Institutes &amp; 6 Universities
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
      
      <!-- Left Column: Portrait & Group Leadership Card -->
      <div class="leadership-sidebar space-y-6">
        <div class="leadership-profile-card group">
          <div class="absolute top-0 left-0 right-0 h-28 bg-gradient-to-br from-brand via-slate-900 to-brand/90 -z-0"></div>
          
          <div class="leadership-img-frame z-10">
            <img 
              src="<?= img('managing-director.jpg') ?>" 
              alt="Mr. Siddharth Kapoor — Managing Director, RKDF Group" 
              class="transition duration-500 group-hover:scale-105"
            />
          </div>

          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Managing Director
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Mr. Siddharth Kapoor
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              Managing Director, RKDF Group
            </p>
          </div>

          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('building-2') ?>
              </div>
              <div class="leadership-stat-text">RKDF Group of Institutions</div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('briefcase') ?>
              </div>
              <div class="leadership-stat-text">Strategic Vision &amp; Execution</div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('globe') ?>
              </div>
              <div class="leadership-stat-text">Pan-India Academic Network</div>
            </div>
          </div>
        </div>

        <div class="p-6 rounded-2xl bg-brand text-brand-foreground border border-gold/20 shadow-sm space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
            <?= lucide_icon('sparkles', 'w-4 h-4') ?> Leadership Motto
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            “We live a dream in which every member of the RKDF family will ask for broader shoulders and not for fewer burdens.”
          </p>
        </div>
      </div>

      <!-- Right Column: Verbatim Message & Directives -->
      <div class="space-y-8">
        
        <!-- Philosophical Quote Banner -->
        <div class="quote-philosophy-banner">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold font-bold mb-4">
            <?= lucide_icon('quote', 'w-4 h-4 text-gold') ?> Inspiring Words
          </div>
          <blockquote>
            “Develop a passion for learning. If you do, you will never cease to grow.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — Mr. Siddharth Kapoor, Managing Director
          </div>
        </div>

        <!-- Main Verbatim Message Document -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Official Communiqué</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Building Tomorrow's Leaders Today
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              RKDF Group Leadership
            </span>
          </div>

          <div class="prose-rkdf space-y-5 text-slate-700 text-base sm:text-lg leading-relaxed">
            <p>
              The essence of the life is to live a life for others and die for a noble cause. Our gratitude for receiving an opportunity to serve the nation. We have a crystal clear vision of enlightening the student brain with sound and technology-rich academic curriculum. We pledge to ensure that the students of RKDF University Ranchi will not only progress in their respective fields but will also become the responsible citizen by abiding to the rules and will live a disciplined life.
            </p>

            <p>
              The campus has a stress free environment which encourages the student to learn and the faculty has adopted all the measures to create a homely and a positive atmosphere. The students from time to time are exposed to practical implementation for their subjects through industrial visits, seminars and guest faculty lectures.
            </p>

            <p>
              As we are aware that the students are the building blocks of our nation, tomorrow they will represent our nation in different disciplines, we at RKDF will help the students to become knowledgeable and face the hardships of life without fear and with brave heart. We live a dream in which every member of the RKDF family will ask for broader shoulders and not for the fewer burdens.
            </p>

            <p class="font-semibold text-foreground pt-2">
              Come let’s join the hands together to make the dream come true.
            </p>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Mr. Siddharth Kapoor</div>
              <div class="text-sm font-semibold text-gold uppercase tracking-wider">Managing Director</div>
              <div class="text-xs text-muted-foreground">RKDF Group</div>
            </div>
            
            <a href="<?= url('departments/') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>Explore Academic Programs</span>
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
