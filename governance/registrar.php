<?php
/**
 * RKDF University — Registrar Message
 * Live Source: https://rkdfuniversity.org/about/registrar/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Registrar's Message — Dr. Nibha Rani | " . SITE_NAME;
$page_meta_desc = "Message from Dr. Nibha Rani, Registrar In-charge at RKDF University Ranchi. Committed to transparency, efficiency, accountability, and student-centric administration.";

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
      <span class="text-white/90">Registrar</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Registrar’s <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Message</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Championing transparency, efficiency, accountability, and student-centric university governance.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Office of the Registrar
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('scale', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Statutory &amp; Academic Administration
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('heart-handshake', 'w-3.5 h-3.5 text-gold shrink-0') ?> Student-Centric Governance
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
              src="<?= img('registrar.jpg') ?>" 
              alt="Dr. Nibha Rani — Registrar In-charge, RKDF University Ranchi" 
              class="transition duration-500 group-hover:scale-105"
            />
          </div>

          <div class="relative z-10 mt-3 space-y-1">
            <span class="leadership-badge-pill">
              Registrar In-charge
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-normal tracking-tight mt-2">
              Dr. Nibha Rani
            </h2>
            <p class="text-xs text-muted-foreground font-medium">
              Registrar In-charge, RKDF University Ranchi
            </p>
          </div>

          <div class="relative z-10 leadership-stat-list">
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('file-text') ?>
              </div>
              <div class="leadership-stat-text">Chief Administrative Officer</div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('shield-check') ?>
              </div>
              <div class="leadership-stat-text">Statutory Compliance &amp; Records</div>
            </div>
            <div class="leadership-stat-item">
              <div class="leadership-stat-icon">
                <?= lucide_icon('mail') ?>
              </div>
              <div class="leadership-stat-text truncate">
                <a href="mailto:registrar@rkdfuniversity.org" class="hover:text-gold transition">registrar@rkdfuniversity.org</a>
              </div>
            </div>
          </div>
        </div>

        <div class="p-6 rounded-2xl bg-brand text-brand-foreground border border-gold/20 shadow-sm space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-gold flex items-center gap-2">
            <?= lucide_icon('sparkles', 'w-4 h-4') ?> Governance Pillars
          </div>
          <p class="text-xs text-white/85 leading-relaxed">
            Foremost priorities: Transparency, Efficiency, Accountability, Academic Excellence, and Student-Centric Administration.
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
            “Your education is the foundation of your future; we are here to ensure every stone is placed with precision, integrity, and support. Welcome to your next chapter.”
          </blockquote>
          <div class="mt-4 text-xs tracking-wider uppercase text-white/75 font-medium">
            — Dr. Nibha Rani, Registrar In-charge
          </div>
        </div>

        <!-- Main Verbatim Message Document -->
        <div class="leadership-content-card space-y-6">
          <div class="border-b border-border pb-6 flex items-center justify-between flex-wrap gap-4">
            <div>
              <div class="text-xs font-bold uppercase tracking-wider text-gold">Official Communiqué</div>
              <h3 class="font-serif text-3xl sm:text-4xl text-foreground font-normal mt-1">
                Translating Institutional Vision into Effective Governance
              </h3>
            </div>
            <span class="text-xs font-medium text-muted-foreground bg-surface px-3 py-1.5 rounded-full border border-border">
              Office of the Registrar
            </span>
          </div>

          <div class="prose-rkdf space-y-5 text-slate-700 text-base sm:text-lg leading-relaxed">
            <p>
              Great honour and privilege for me to join RKDF University Ranchi as the Registrar. I sincerely express my gratitude to the Hon’ble Chancellor, Vice-Chancellor, Pro Vice Chancellor ,Management, members of the statutory bodies, faculty members, officers, staff and all stakeholders of the University for entrusting me with this important responsibility.
            </p>

            <p>
              RKDF University Ranchi has been established with a vision of providing quality higher education, promoting knowledge, research, innovation and creating opportunities for the academic and professional development of students. I firmly believe that the Registrar’s Office has a pivotal role in translating this vision into effective institutional governance and sustainable growth.As I take charge of this responsibility, my foremost priorities will be transparency, efficiency, accountability, academic excellence and student-centric administration. I believe that a university can progress meaningfully only when its academic and administrative systems work together with a shared vision and a strong sense of institutional commitment.
            </p>

            <p>
              I strongly believe that every member of the University is an important stakeholder in its growth.Our students are at the heart of everything we do. We must ensure that they receive not only quality education but also the right academic environment, guidance, opportunities and values required to become responsible professionals and citizens.
            </p>

            <p>
              I assure the University community of my commitment to fairness, accessibility, responsive administration and continuous improvement. My endeavour will be to contribute meaningfully towards strengthening RKDF University Ranchi as a centre of quality education, research, innovation and social responsibility.
            </p>

            <p>
              I look forward to beginning this journey with the entire RKDF family.Together, with commitment, integrity and teamwork, we can take RKDF University Ranchi to greater heights..
            </p>
          </div>

          <!-- Formal Sign-Off Block -->
          <div class="pt-8 border-t border-border flex items-center justify-between flex-wrap gap-6">
            <div class="space-y-1">
              <div class="font-serif text-2xl text-foreground font-normal">Dr. Nibha Rani</div>
              <div class="text-sm font-semibold text-gold uppercase tracking-wider">Registrar In-charge</div>
              <div class="text-xs text-muted-foreground font-semibold">RKDF University Ranchi, Jharkhand</div>
            </div>
            
            <a href="<?= url('about/rti-corner.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-brand text-white px-6 py-3 text-xs font-bold tracking-wider uppercase hover:bg-gold transition shadow-md">
              <span>Statutory Disclosures</span>
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
