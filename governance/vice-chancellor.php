<?php
/**
 * RKDF University — Vice Chancellor's Message
 * Live Source: https://rkdfuniversity.org/about/vice-chancellor/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Vice Chancellor's Message — Prof. (Dr.) Shuchitangshu Chatterjee | " . SITE_NAME;
$page_meta_desc = "Message from Prof. (Dr.) Shuchitangshu Chatterjee (Ph.D, IIT Kharagpur), Vice Chancellor at RKDF University Ranchi. Advancing research, innovation, and global excellence.";

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
      <span class="text-white/90">Vice Chancellor</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Vice Chancellor’s <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Message</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Dedicated to the cause of excellence in higher education through knowledge, empirical research and pioneering scholarship.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Vice Chancellor
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('microscope', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Ph.D, IIT Kharagpur
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('globe', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Global Benchmarks
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
              src="<?= img('vice-chancellor.jpg') ?>" 
              alt="Prof. (Dr.) Shuchitangshu Chatterjee — Vice Chancellor, RKDF University Ranchi" 
              class="transition duration-500 group-hover:scale-105"
            />
          </div>

          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Vice Chancellor
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Prof. (Dr.) Shuchitangshu Chatterjee
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              Ph.D in Physics from IIT Kharagpur, WB, India
            </p>
          </div>

          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('graduation-cap') ?>
              </div>
              <div class="leadership-stat-text">Principal Academic Officer</div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('flask-conical') ?>
              </div>
              <div class="leadership-stat-text">Empirical Research &amp; Innovation</div>
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
            <?= lucide_icon('sparkles', 'w-4 h-4') ?> Academic Excellence
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            RKDF University Ranchi believes in “Contain Multitudes” with diverse world views, cultures, and innovative solutions for emerging societal needs.
          </p>
        </div>
      </div>

      <!-- Right Column: Address -->
      <div class="space-y-8">
        
        <!-- Quote Banner -->
        <div class="quote-philosophy-banner">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold font-bold mb-4">
            <?= lucide_icon('quote', 'w-4 h-4 text-gold') ?> Guiding Philosophy
          </div>
          <blockquote>
            “The foundation of every state is the education of its youth.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — Prof. (Dr.) Shuchitangshu Chatterjee, Vice Chancellor
          </div>
        </div>

        <!-- Main Verbatim Message Document -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Official Communiqué</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Fostering Research, Teaching &amp; Distinction
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              Executive Address
            </span>
          </div>

          <div class="prose-rkdf space-y-5 text-slate-700 text-base sm:text-lg leading-relaxed">
            <p>
              It is my pleasure to welcome you all to our vibrant RKDF University, Ranchi. RKDF University, Ranchi, has made significant strides in imparting quality higher education to the students of all over India &amp; aboard and developing them to be globally competitive and socially responsible citizens with intrinsic values.
            </p>

            <p>
              We take pride in saying that our University is dedicated to the cause of excellence in Higher Education through Knowledge, Research and Teaching and gives great thrust to empirical research and extension activities with emphasis on application and innovation that caters to the emerging societal needs through all-round development of students of all sections.
            </p>

            <p>
              At RKDF University, Ranchi, we offer contemporary courses in engineering, management, computer Sciences, Basic Sciences, Applied Sciences, Arts, Commerce and Hotel Management of high quality and strive to pursue distinction in all academics pursuits so as to match global benchmarks.
            </p>

            <p>
              RKDF University, Ranchi believes in “Contain Multitudes” with different world views, cultures and innovative ways of giving solutions to any problem. We welcome students, faculties, staffs and all irrespective of caste, creed, color, race , religion , language or borders . I wish you all the best for your bright career and promising future portraying an icon of this university.
            </p>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Prof. (Dr.) Shuchitangshu Chatterjee</div>
              <div class="text-sm font-semibold text-gold">Ph.D in Physics from IIT Kharagpur, WB, India</div>
              <div class="text-xs text-muted-foreground font-semibold uppercase tracking-wider">Vice Chancellor, RKDF University, Ranchi</div>
            </div>
            
            <a href="<?= url('research.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>Research &amp; Innovation</span>
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
