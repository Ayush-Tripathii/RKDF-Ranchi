<?php
/**
 * RKDF University — Academic Courses & Programs Directory
 * Content Source: https://rkdfuniversity.org/courses/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Courses & Academic Programs — ' . SITE_NAME;
$page_meta_desc = 'Explore 90+ industry-aligned degree and diploma programs at RKDF University Ranchi. Undergraduate (B.Tech, BBA, BCA, B.Pharm, LLB), Postgraduate (MBA, MCA, M.Tech, M.Sc), Diploma & Ph.D. degrees.';

$course_categories = [
    [
        'title'       => 'Undergraduate Degrees (UG)',
        'href'        => 'courses/under-graduate-programs.php',
        'icon'        => 'graduation-cap',
        'badge'       => 'B.Tech · BBA · BCA · B.Pharm · LLB',
        'desc'        => 'Foundational 3, 4, and 5-year bachelor degree programs designed to develop core professional competencies, analytical thinking, and industry-ready skills.',
        'programs'    => ['B.Tech (CSE, Mining, Civil, ME, EEE)', 'BCA & BCA Corporate', 'BBA & BBA Logistics', 'B.Pharm (PCI Approved)', 'BA LL.B & BBA LL.B (5-Yr Integrated)', 'B.Sc (Hons) in Pure & Applied Sciences', 'B.Com & B.Com Corporate', 'B.A. (Hons) in Humanities'],
        'duration'    => '3 to 5 Years',
        'color'       => 'from-blue-900 to-indigo-950',
    ],
    [
        'title'       => 'Postgraduate & Master\'s Degrees (PG)',
        'href'        => 'courses/post-graduate-programs.php',
        'icon'        => 'award',
        'badge'       => 'MBA · MCA · M.Sc · LLM · M.Com · MA · MSW · M.Lib',
        'desc'        => 'Advanced 2-year master’s degree curricula emphasizing leadership, specialized technical domains, corporate strategy, laboratory research, and executive management.',
        'programs'    => [
            'MBA (Dual Major, Banking, Logistics, Construction, Hotel)',
            'MCA (2-Yr Advanced Full-Stack, Cloud & AI)',
            'M.Sc. in Physics, Chemistry & Applied Mathematics',
            'M.Sc. in Biotechnology, Microbiology, Botany & Zoology',
            'M.Sc. in Biochemistry & Environmental Science',
            'Master of Laws (LL.M. — Constitutional & Corporate Law)',
            'Master of Commerce (M.Com. — Accounting & Taxation)',
            'Master of Arts (M.A. in 8 Core Humanities & MA-JMC)',
            'Master of Social Work (MSW) & M.Lib.I.Sc (1-Yr)',
            'M.Sc. / MA / MBA in Fashion & Interior Design'
        ],
        'duration'    => '2 Years · 4 Semesters',
        'color'       => 'from-emerald-900 to-slate-950',
    ],
    [
        'title'       => 'Diploma & Polytechnic Programs',
        'href'        => 'courses/diploma-programs.php',
        'icon'        => 'wrench',
        'badge'       => 'Polytechnic · D.Pharm · PGDCA',
        'icon_color'  => 'text-amber-500',
        'desc'        => 'Skill-focused diploma and post-graduate diploma tracks engineered for immediate technical employment, industrial operations, and clinical certifications.',
        'programs'    => ['Diploma in Mining Engineering', 'Diploma in Civil Engineering', 'Diploma in Mechanical Engineering', 'Diploma in Electrical Engineering', 'D.Pharm (Diploma in Pharmacy - 2 Yrs)', 'PGDCA (Computer Applications - 1 Yr)', 'PG Diploma in Fashion & Interior Design'],
        'duration'    => '1 to 3 Years',
        'color'       => 'from-amber-900 to-slate-950',
    ],
    [
        'title'       => 'Doctoral Programs (Ph.D.)',
        'href'        => 'courses/doctoral-programs.php',
        'icon'        => 'microscope',
        'badge'       => 'UGC-NET / RET Entrance Track',
        'desc'        => 'Rigorous doctoral research degrees designed for university faculty, scientific researchers, industrial innovators, and policy experts across all major academic faculties.',
        'programs'    => ['Ph.D. in Engineering & Technology', 'Ph.D. in Management & Business Studies', 'Ph.D. in Pure & Applied Sciences', 'Ph.D. in Life Sciences & Biotechnology', 'Ph.D. in Law & Legal Studies', 'Ph.D. in Arts & Humanities', 'Ph.D. in Commerce'],
        'duration'    => 'Min. 3 Years',
        'color'       => 'from-purple-900 to-slate-950',
    ],
];

$academic_highlights = [
    ['num' => '90+',   'label' => 'Degree Programs', 'desc' => 'Diploma, UG, PG & Ph.D.'],
    ['num' => '12',    'label' => 'Academic Schools', 'desc' => 'Multi-Disciplinary University'],
    ['num' => '100%',  'label' => 'NEP / CBCS Aligned', 'desc' => 'Choice-Based Credit Structure'],
    ['num' => 'AICTE', 'label' => 'Statutory Approvals', 'desc' => 'BCI, PCI & UGC Recognized'],
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
      <span class="text-white/90">Courses &amp; Academic Programs</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Academic Courses &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Programs</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Explore 90+ career-defining undergraduate, postgraduate, diploma, and doctoral degree tracks engineered to prepare future leaders across engineering, healthcare, management, law, and sciences.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('layers') ?> 90+ Degree Tracks
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> NEP 2020 Model Curriculum
      </span>
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> UGC 2(f) Recognized
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> Industry-Aligned Syllabi
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Overview Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('layers', 'w-4 h-4 text-gold') ?> Comprehensive Academic Structure
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Interdisciplinary Learning Designed for Tomorrow's Industry
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            At RKDF University Ranchi, our academic programs are thoughtfully structured to bridge the divide between theoretical excellence and industry demands. Following the National Education Policy (NEP 2020) and Choice Based Credit System (CBCS), students enjoy multidisciplinary elective options, hands-on laboratory immersion, and mandatory corporate internships.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Whether pursuing a technical diploma, a flagship professional bachelor’s degree, a specialized master’s, or pioneering doctoral research, our scholars benefit from state-of-the-art laboratory infrastructure, industry-certified faculty, and dedicated career placement support.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('graduation-cap') ?>
              <span>Undergraduate (UG)</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Postgraduate (PG)</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('wrench') ?>
              <span>Polytechnic &amp; Diploma</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('microscope') ?>
              <span>Doctoral (Ph.D.)</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Academic Registry
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Quality in Higher Education</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Offering rigorous degree certifications backed by statutory national regulatory councils and government recognition.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">90+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Degree Options</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">CBCS &amp; NEP Aligned</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== COURSE CATEGORIES GRID ==================== -->
    <div class="section-block" id="categories">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Programs by Level</span>
          <h3 class="rkdf-section-title">Academic Degree Levels</h3>
          <p class="rkdf-section-desc">Select your desired level of higher education to explore detailed courses, eligibility, and syllabi.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">
        <?php foreach ($course_categories as $cat): ?>
          <div class="course-category-card">
            <!-- Card Header: Midnight Navy with Gold Accents -->
            <div class="course-cat-header">
              <div>
                <span class="course-cat-badge">
                  <?= e($cat['badge']) ?>
                </span>
                <h3 class="course-cat-title">
                  <?= e($cat['title']) ?>
                </h3>
                <div class="course-cat-duration">
                  <?= lucide_icon('clock', 'w-3.5 h-3.5') ?>
                  <span><strong>Duration:</strong> <?= e($cat['duration']) ?></span>
                </div>
              </div>
              <div class="course-cat-iconbox">
                <?= lucide_icon($cat['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Card Body: Clean Modern Spacing & Interactive Degree Chips -->
            <div class="course-cat-body">
              <p class="course-cat-desc">
                <?= e($cat['desc']) ?>
              </p>

              <!-- Featured Degree Tracks Chips -->
              <div>
                <div class="course-cat-tracks-label">
                  <span class="flex items-center gap-1.5">
                    <?= lucide_icon('layers', 'w-3.5 h-3.5 text-gold') ?>
                    <span>Featured Degree Tracks</span>
                  </span>
                  <span class="text-[11px] font-semibold text-slate-400">
                    <?= count($cat['programs']) ?> Specializations
                  </span>
                </div>

                <div class="course-cat-tracks-grid">
                  <?php foreach ($cat['programs'] as $prg): ?>
                    <div class="course-cat-chip">
                      <span class="course-cat-chip-dot"></span>
                      <span class="truncate"><?= e($prg) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>

              <!-- Action Button -->
              <div class="pt-2">
                <a href="<?= url($cat['href']) ?>" class="course-cat-action-btn">
                  <span>Explore All <?= e($cat['title']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== ADMISSION CALLOUT BANNER ==================== -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Admissions Open for 2026–27 Session</span>
        </div>
        <h3 class="rkdf-admission-title">
          Begin Your Academic Journey at RKDF University
        </h3>
        <p class="rkdf-admission-desc">
          Apply online across 90+ undergraduate, postgraduate, diploma, and doctoral programs. Direct application, counseling support, and merit scholarship assistance available.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Direct Online Application
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Academic Counseling
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> State Merit Scholarships
          </span>
        </div>
      </div>

      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply Online Now</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Campus Visit</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
