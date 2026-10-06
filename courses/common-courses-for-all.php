<?php
/**
 * RKDF University — Common Courses for All Disciplines (NEP 2020 Suite)
 * Content Source: https://rkdfuniversity.org/courses/common-courses-for-all/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title       = "Common Courses for All Disciplines | NEP 2020 Suite — " . SITE_NAME;
$page_meta_desc   = "Discover the foundational, skill enhancement, and value-added common courses mandatory across all undergraduate and postgraduate faculties under NEP 2020 at RKDF University Ranchi.";

$common_courses = [
    [
        'category'    => 'VAC • 2–4 Credits',
        'is_gold'     => true,
        'icon'        => 'globe',
        'title'       => 'Environmental Studies & Sustainability',
        'desc'        => 'Ecosystem dynamics, climate change mitigation, renewable energy systems, e-waste management, and local biodiversity conservation field visits in Jharkhand.',
        'applicable'  => 'All UG/PG Programs',
        'mode'        => 'Theory + Field Study'
    ],
    [
        'category'    => 'VAC • 2 Credits',
        'is_gold'     => false,
        'icon'        => 'heart',
        'title'       => 'Universal Human Values & Professional Ethics',
        'desc'        => 'Self-exploration, harmony in interpersonal relationships, social responsibility, integrity in professional practices, and ethical conflict resolution.',
        'applicable'  => 'All Semesters 1–2',
        'mode'        => 'Interactive Workshops'
    ],
    [
        'category'    => 'AECC • 3 Credits',
        'is_gold'     => true,
        'icon'        => 'message-square',
        'title'       => 'English Communication & Soft Skills',
        'desc'        => 'Professional writing, corporate presentations, conversational fluency, active listening, mock group discussions, and Language Lab voice & accent modules.',
        'applicable'  => 'All University Streams',
        'mode'        => 'Digital Lab Practicals'
    ],
    [
        'category'    => 'SEC • 2 Credits',
        'is_gold'     => false,
        'icon'        => 'cpu',
        'title'       => 'Digital Literacy & Cyber Security Basics',
        'desc'        => 'Cloud tools, advanced spreadsheets, AI productivity tools, cyber hygiene, phishing prevention, digital identity protection, and IT compliance.',
        'applicable'  => 'All Disciplines',
        'mode'        => 'Hands-on Sandbox'
    ],
    [
        'category'    => 'VAC • 2 Credits',
        'is_gold'     => true,
        'icon'        => 'scale',
        'title'       => 'Indian Constitution & Democratic Values',
        'desc'        => 'Fundamental rights, directive principles, structure of governance, legal awareness, civic duties, RTI fundamentals, and social justice paradigms.',
        'applicable'  => 'All UG Semesters',
        'mode'        => 'Case Studies & Debates'
    ],
    [
        'category'    => 'VAC • 2 Credits',
        'is_gold'     => false,
        'icon'        => 'activity',
        'title'       => 'Yoga, Holistic Health & Wellness',
        'desc'        => 'Pranayama, mindfulness, ergonomic physical posture, nutritional science, stress reduction techniques, and mental health awareness sessions.',
        'applicable'  => 'All First Year',
        'mode'        => 'Daily Practical Drill'
    ],
    [
        'category'    => 'SEC • 3 Credits',
        'is_gold'     => true,
        'icon'        => 'briefcase',
        'title'       => 'Entrepreneurship & Innovation',
        'desc'        => 'Ideation frameworks, Business Model Canvas (BMC), prototype validation, seed pitch preparation, MSME schemes, and IP registration basics.',
        'applicable'  => 'All Pre-Final Year',
        'mode'        => 'Incubation Cell Projects'
    ],
    [
        'category'    => 'VAC / NSS • 2 Credits',
        'is_gold'     => false,
        'icon'        => 'users',
        'title'       => 'Community Engagement & Social Immersion',
        'desc'        => 'Rural outreach camps, village adoption initiatives, blood donation drives, literacy campaigns, and public health awareness drives in Ranchi district.',
        'applicable'  => 'All Semesters',
        'mode'        => 'Field Immersion'
    ],
];

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
      <a href="<?= url('courses/') ?>" class="hover:text-white transition">Courses</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Common Courses for All</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Common Courses for <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">All Disciplines</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Universal foundation, ability enhancement, value education, and multi-disciplinary modules designed to impart holistic 21st-century competence to every student under NEP 2020.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('layers') ?> NEP 2020 Multi-Disciplinary Suite
      </span>
      <span class="hero-pill">
        <?= lucide_icon('sparkles') ?> 21st Century Skills &amp; Ethics
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> ABC (Academic Bank of Credits) Synced
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?> National Education Policy (NEP 2020) Mandate
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Cultivating Well-Rounded, Future-Ready Leaders
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            In alignment with the National Education Policy (NEP 2020) and UGC guidelines, RKDF University Ranchi embeds a standardized core of cross-cutting foundation modules across all faculties — Engineering, Pharmacy, Management, Sciences, Arts, and Law.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            These courses transcend disciplinary boundaries to instill critical thinking, environmental mindfulness, constitutional citizenship, ethical leadership, digital proficiency, and emotional resilience.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>Universal Foundational Core</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Continuous Internal Assessment (60%)</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Practical Field Immersion</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Core Pillars
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('layers', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">NEP Curriculum Suite</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Seamlessly credit-transferred and recognized across all state and central universities via DigiLocker ABC ID.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">8 Core</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Universal Modules</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">UGC Aligned</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== COMMON COURSES GRID ==================== -->
    <div class="section-block" id="courses-grid">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Universal Curriculum</span>
          <h3 class="rkdf-section-title">Mandatory Common Core Courses</h3>
          <p class="rkdf-section-desc">Delivered by specialized university cells with practical assessments, workshops, and immersive community field projects.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for Admissions 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach ($common_courses as $crs): ?>
          <div class="nep-course-card">
            <div>
              <div class="nep-card-icon-wrap">
                <?= lucide_icon($crs['icon'], 'w-6 h-6') ?>
              </div>
              <span class="nep-badge <?= $crs['is_gold'] ? 'nep-badge-gold' : '' ?>">
                <?= e($crs['category']) ?>
              </span>
              <h4 class="nep-course-title"><?= e($crs['title']) ?></h4>
              <p class="nep-course-desc"><?= e($crs['desc']) ?></p>
            </div>

            <div class="nep-card-footer">
              <span><?= e($crs['applicable']) ?></span>
              <span class="nep-card-footer-pill"><?= e($crs['mode']) ?></span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== ACADEMIC ADVANTAGES ==================== -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Student Empowerment</span>
          <h3 class="rkdf-section-title">Academic &amp; Career Advantages</h3>
          <p class="rkdf-section-desc">How NEP 2020 foundation modules empower students beyond traditional syllabus confines.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('award') ?>
          </div>
          <h4 class="pillar-title">Academic Bank of Credits (ABC)</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            All credits earned in common courses are automatically digitized and synced to your DigiLocker National Academic Depository (NAD) account for lifetime portability.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('compass') ?>
          </div>
          <h4 class="pillar-title">Multiple Entry &amp; Exit Support</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Completion of required common course modules certifies student eligibility for Certificate, Diploma, or Degree exit stages under standard UGC NEP regulations.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('sparkles') ?>
          </div>
          <h4 class="pillar-title">Experiential Learning Focus</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Evaluated 60% through continuous internal assessments, practical simulations, community field logs, and case study defense instead of pure rote memorization.
          </p>
        </div>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Admissions Open for 2026–27 Cycle</span>
        </div>
        <h3 class="rkdf-admission-title">
          Ready to Begin Your Academic Journey?
        </h3>
        <p class="rkdf-admission-desc">
          Explore undergraduate, postgraduate, and diploma degrees powered by NEP 2020 at RKDF University Ranchi.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply Online Now</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Contact Advisory Cell</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
