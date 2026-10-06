<?php
/**
 * RKDF University — Pro Vice Chancellor
 * Live Source: https://rkdfuniversity.org/about/pro-vice-chancellor/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Pro Vice Chancellor — Dr. Amit Kumar Pandey | " . SITE_NAME;
$page_meta_desc = "Message from Dr. Amit Kumar Pandey (M.Sc Microbiology, Ph.D), Pro Vice Chancellor at RKDF University Ranchi. Blending theory, practical skills, and eternal values.";

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
      <span class="text-white/90">Pro Vice Chancellor</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Pro Vice Chancellor’s <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Message</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Expanding the frontiers of knowledge, academic excellence, eternal human values and social commitment.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('award', 'w-3.5 h-3.5 text-gold shrink-0') ?> ️ Pro Vice Chancellor
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('flask-conical', 'w-3.5 h-3.5 text-gold shrink-0') ?> M.Sc (Microbiology), Ph.D
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
              src="<?= img('pro-vice-chancellor.jpg') ?>" 
              alt="Dr. Amit Kumar Pandey — Pro Vice Chancellor, RKDF University Ranchi" 
              class="transition duration-500 group-hover:scale-105"
            />
          </div>

          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Pro Vice Chancellor
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Dr. Amit Kumar Pandey
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              M.Sc (Microbiology), Ph.D
            </p>
          </div>

          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('user-check') ?>
              </div>
              <div class="leadership-stat-text">Executive Academic Leadership</div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('flask-conical') ?>
              </div>
              <div class="leadership-stat-text">Life Sciences &amp; Research</div>
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
            <?= lucide_icon('sparkles', 'w-4 h-4') ?> The Academic Trinity
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            Fostering the three pillars of RKDF University: Academic Excellence, Eternal Human Values, and Deep Social Concern.
          </p>
        </div>
      </div>

      <!-- Right Column: Address -->
      <div class="space-y-8">
        
        <!-- Quote Banner -->
        <div class="quote-philosophy-banner">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold font-bold mb-4">
            <?= lucide_icon('quote', 'w-4 h-4 text-gold') ?> Inspiring Words
          </div>
          <blockquote>
            “The whole purpose of education is to turn mirrors into windows.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — Dr. Amit Kumar Pandey, Pro Vice Chancellor
          </div>
        </div>

        <!-- Main Verbatim Message Document -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Official Address</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Transforming Potential into Purpose
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              Pro Vice Chancellor’s Office
            </span>
          </div>

          <div class="prose-rkdf space-y-5 text-slate-700 text-base sm:text-lg leading-relaxed">
            <p>
              It is indeed an honor to be a part of RKDF University, Ranchi which have traversed a long distance in a short span of time by setting up new bench marks in the field of technical as well as professional education. Higher Education in general and technical education in particular holds greater promises for individuals as well to national economy. Besides it produces the sense of self-esteem and dignity. In the present era of globalization, quality has become a dominant factor of success in every sector of the economy and this includes quality in the provision of education. RKDF University with its vision of expanding the frontiers of knowledge and human base is committed to focusing trinity namely the academic excellence, eternal human values and social concern with a view to enabling the young minds to realize their fullest potential.
            </p>

            <p>
              All of us at the RKDF University aim at preparing talented work force needed by the modern world. Our highly committed 82 dedicated faculties are conscious of the fact that they have to prepare the leaders for tomorrow’s world and which is why they do ensure blending of both theory and practical. It hardly needs any mention that in such an academic ambience which the teachers have the responsibility to create the most inspiring teaching and learning environment, the students are obliged to make the most out of it.
            </p>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Dr. Amit Kumar Pandey</div>
              <div class="text-sm font-semibold text-gold">M.Sc (Microbiology), Ph.D</div>
              <div class="text-xs text-muted-foreground font-semibold uppercase tracking-wider">Pro Vice Chancellor, RKDF University Ranchi</div>
            </div>
            
            <a href="<?= url('about/') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>University Overview</span>
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
