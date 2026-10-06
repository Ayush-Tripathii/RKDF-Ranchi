<?php
/**
 * RKDF University — Vision & Mission
 * Content Source: https://rkdfuniversity.org/about/vision-and-mission/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Vision & Mission — ' . SITE_NAME;
$page_meta_desc = 'Discover the Vision and Mission of RKDF University Ranchi — empowering excellence for a better Jharkhand through quality higher education.';

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <!-- Breadcrumb Badge -->
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('about/') ?>" class="hover:text-white transition">About</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Vision &amp; Mission</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Our guiding <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">vision</em> &amp; institutional mission.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Empowering excellence for a better Jharkhand through pioneering scholarship, knowledge, research, and societal development.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('sparkles', 'w-3.5 h-3.5 text-gold shrink-0') ?> University of Excellence
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('microscope', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Research &amp; Teaching
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('lightbulb', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Youth Entrepreneurship
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('sparkles', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Sustainable Development
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/about_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Quote Banner -->
    <div class="quote-philosophy-banner mb-16 section-block">
      <div class="max-w-4xl mx-auto text-center space-y-5">
        <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-gold/15 text-gold border border-gold/30 shadow-inner mx-auto">
          <?= lucide_icon('quote', 'w-6 h-6') ?>
        </div>
        <div>
          <div class="text-xs uppercase tracking-[0.25em] text-gold font-bold">Guiding Philosophy</div>
          <blockquote class="mt-3">
            “Your vision will become clear only when you look into your heart. Who looks outside, dreams. Who looks inside awakens.”
          </blockquote>
        </div>
        <div class="pt-1 text-xs uppercase tracking-widest text-gold/90 font-semibold">— Institutional Motto of RKDF University</div>
      </div>
    </div>

    <!-- Vision & Mission Dual Presentation -->
    <div class="about-vision-grid mb-16 section-block">

      <!-- Vision Card -->
      <div class="vm-card">
        <div class="space-y-6">
          <div class="flex items-center gap-4">
            <div class="vm-icon-box">
              <?= lucide_icon('globe', 'w-6 h-6') ?>
            </div>
            <div>
              <div class="text-xs tracking-[0.2em] uppercase text-gold font-semibold">Future Outlook</div>
              <h2 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-0.5">Vision</h2>
            </div>
          </div>

          <p class="text-muted-foreground text-sm">
            Our vision articulates the overarching aspirations and societal impact of the institution:
          </p>

          <div class="space-y-3 pt-1">
            <div class="vm-item">
              <span class="vm-badge">1</span>
              <p class="vm-text">
                To establish a University of excellence to impart Higher Education through Knowledge, Pioneering Scholarship, Research and Teaching.
              </p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">2</span>
              <p class="vm-text">
                To improve the lives of many students through growth, prosperity and sustainable physical environment through education in the country.
              </p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">3</span>
              <p class="vm-text">
                To Fulfil Commitment of providing Quality Education and empowering Excellence for Better Jharkhand.
              </p>
            </div>
          </div>
        </div>

        <div class="mt-8 pt-5 border-t border-slate-200/80 flex items-center justify-between text-xs text-muted-foreground">
          <span>RKDF University Ranchi</span>
          <span class="text-gold font-medium">Empowering Excellence</span>
        </div>
      </div>

      <!-- Mission Card -->
      <div class="vm-card">
        <div class="space-y-6">
          <div class="flex items-center gap-4">
            <div class="vm-icon-box">
              <?= lucide_icon('trophy', 'w-6 h-6') ?>
            </div>
            <div>
              <div class="text-xs tracking-[0.2em] uppercase text-gold font-semibold">Core Purpose</div>
              <h2 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-0.5">Mission</h2>
            </div>
          </div>

          <p class="text-muted-foreground text-sm">
            The mission defines our day-to-day commitment to students, researchers, and society across Jharkhand and India:
          </p>

          <div class="space-y-3 pt-1">
            <div class="vm-item">
              <span class="vm-badge">1</span>
              <p class="vm-text">
                Harmonize Higher Education with excellence in Science and Technological output and contribute to livelihood, security and sustainable societal development.
              </p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">2</span>
              <p class="vm-text">
                To be recognized as a premium National University providing dedicated service for the Socio-Economic Development of the Nation.
              </p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">3</span>
              <p class="vm-text">
                To promote Entrepreneurship in Youth by imparting professional and life skills.
              </p>
            </div>
          </div>
        </div>

        <div class="mt-8 pt-5 border-t border-slate-200/80 flex items-center justify-between text-xs text-muted-foreground">
          <span>RKDF University Ranchi</span>
          <span class="text-gold font-medium">Socio-Economic Development</span>
        </div>
      </div>

    </div>

    <!-- 4 Core Pillars of Excellence -->
    <div class="pillars-container mb-16 section-block">
      <div class="pillars-header">
        <span class="pillars-header-tag">Institutional Values</span>
        <h3 class="pillars-header-title">Pillars of RKDF University</h3>
      </div>

      <div class="pillars-grid">
        <!-- Pillar 1 -->
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('book-open', 'w-6 h-6') ?>
          </div>
          <h4 class="pillar-title">Knowledge</h4>
          <p class="pillar-desc">
            Rigorous academic foundation across multidisciplinary programs.
          </p>
        </div>

        <!-- Pillar 2 -->
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('microscope', 'w-6 h-6') ?>
          </div>
          <h4 class="pillar-title">Research</h4>
          <p class="pillar-desc">
            Pioneering scientific output, technological innovation, and MoUs.
          </p>
        </div>

        <!-- Pillar 3 -->
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('lightbulb', 'w-6 h-6') ?>
          </div>
          <h4 class="pillar-title">Entrepreneurship</h4>
          <p class="pillar-desc">
            Imparting professional skills and fostering youth enterprise.
          </p>
        </div>

        <!-- Pillar 4 -->
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('heart-handshake', 'w-6 h-6') ?>
          </div>
          <h4 class="pillar-title">Social Service</h4>
          <p class="pillar-desc">
            Serving community growth, tree ambulance, and sustainability.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
