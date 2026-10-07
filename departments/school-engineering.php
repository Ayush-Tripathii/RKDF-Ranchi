<?php
/**
 * RKDF University — Faculty of Engineering & Technology
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-engineering-technology/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Engineering & Technology — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Engineering & Technology at RKDF University Ranchi. Industry 4.0 aligned B.Tech, M.Tech, Polytechnic Diploma, and Ph.D. programs with advanced high-tech laboratories.';

$programs = [
    [
        'category'    => 'Undergraduate Programs (UG)',
        'title'       => 'Bachelor of Technology (B.Tech)',
        'duration'    => '4 Years · 8 Semesters',
        'badge'       => 'AICTE Model Curriculum',
        'icon'        => 'cpu',
        'description' => 'Comprehensive 4-year engineering degrees combining strong mathematical foundations, modern laboratory experimentation, AI/CAD tools, and mandatory corporate internships.',
        'branches'    => [
            ['name' => 'Computer Science & Engineering (CSE)', 'tag' => 'AI, ML & Cloud Ready'],
            ['name' => 'Mining Engineering',                   'tag' => 'Mineral Exploration & Blasting'],
            ['name' => 'Civil Engineering (CE)',               'tag' => 'Smart Structural Systems'],
            ['name' => 'Mechanical Engineering (ME)',          'tag' => 'Robotics & Automation'],
            ['name' => 'Electrical & Electronics (EEE)',        'tag' => 'Power Grids & EV Systems'],
        ],
        'eligibility' => '10+2 with Physics, Mathematics & Chemistry/CS with min 45% marks (40% for reserved categories) or valid JEE Main / University Entrance score.'
    ],
    [
        'category'    => 'Postgraduate Programs (PG)',
        'title'       => 'Master of Technology (M.Tech)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Advanced R&D & Industry Specialization',
        'icon'        => 'award',
        'description' => 'Specialized 2-year master of technology curricula emphasizing advanced engineering design, simulation modeling, applied research publications, and industrial R&D.',
        'branches'    => [
            ['name' => 'M.Tech in Computer Science & Engineering', 'tag' => 'AI, Cloud & Big Data'],
            ['name' => 'M.Tech in Mining Engineering',             'tag' => 'Geomechanics & Mine Planning'],
            ['name' => 'M.Tech in Structural Engineering (Civil)', 'tag' => 'Earthquake & FEM Analysis'],
            ['name' => 'M.Tech in Thermal & Fluid Engineering',    'tag' => 'CFD & Energy Systems'],
            ['name' => 'M.Tech in Power Systems (EEE)',            'tag' => 'Smart Grids & Renewable Integration'],
        ],
        'eligibility' => 'B.E. / B.Tech or equivalent degree in relevant engineering branch with at least 50% aggregate marks (45% for SC/ST/OBC category candidates).'
    ],
    [
        'category'    => 'Polytechnic Diploma Programs',
        'title'       => 'Diploma in Engineering (Polytechnic)',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Hands-on Technical Rigor',
        'icon'        => 'wrench',
        'description' => 'Industry-oriented practical technical education designed for immediate employment in core manufacturing, infrastructure development, mining sites, and maintenance services.',
        'branches'    => [
            ['name' => 'Diploma in Mining Engineering',       'tag' => 'Surface & Underground Mines'],
            ['name' => 'Diploma in Computer Science & Engg.', 'tag' => 'Software & Network Admin'],
            ['name' => 'Diploma in Civil Engineering',        'tag' => 'Total Station Survey & CAD'],
            ['name' => 'Diploma in Mechanical Engineering',   'tag' => 'CNC Machining & Tooling'],
            ['name' => 'Diploma in Electrical & Electronics',  'tag' => 'Switchgear & Industrial Wiring'],
        ],
        'eligibility' => 'Class 10th pass from recognized board with Science & Mathematics, or Lateral Entry (2nd year) for 10+2 Science / ITI certificate holders.'
    ],
    [
        'category'    => 'Doctoral Programs (Ph.D.)',
        'title'       => 'Doctor of Philosophy (Ph.D. in Engineering)',
        'duration'    => 'Min. 3 Years',
        'badge'       => 'UGC-NET / University RET Track',
        'icon'        => 'microscope',
        'description' => 'Original doctoral research under doctoral advisors in computing algorithms, sustainable materials, geotechnical systems, renewable energy, and mineral exploitation.',
        'branches'    => [
            ['name' => 'Ph.D. in Computer Science & Engineering', 'tag' => 'Deep Learning & Cyber Security'],
            ['name' => 'Ph.D. in Mining Engineering',             'tag' => 'Sustainable Mineral Extraction'],
            ['name' => 'Ph.D. in Civil & Structural Engineering', 'tag' => 'Green Concrete & GIS'],
            ['name' => 'Ph.D. in Mechanical Engineering',         'tag' => 'Robotics & Advanced Materials'],
            ['name' => 'Ph.D. in Electrical Engineering',         'tag' => 'EV Power & Microgrids'],
        ],
        'eligibility' => 'Master’s Degree (M.E. / M.Tech / M.Sc. Engg) in relevant discipline with at least 55% marks (50% for SC/ST/OBC) and qualifying in University RET / UGC-NET / GATE.'
    ],
];

$labs = [
    [
        'name'        => 'Advanced Computing & AI Lab',
        'desc'        => 'Equipped with high-performance workstations, cloud environments, GPU accelerators, and full-stack development suites.',
        'icon'        => 'laptop',
        'specs'       => 'High-speed gigabit LAN, Python/TensorFlow suites, Linux kernel labs.'
    ],
    [
        'name'        => 'CAD / CAM & Simulation Center',
        'desc'        => 'Dedicated modeling facility with industry-standard parametric software for 3D modeling, stress analysis, and CNC tool paths.',
        'icon'        => 'cpu',
        'specs'       => 'AutoCAD, SolidWorks, ANSYS finite element analysis, CNC simulation.'
    ],
    [
        'name'        => 'Fluid Mechanics & Thermal Engineering Lab',
        'desc'        => 'State-of-the-art turbines, wind tunnels, refrigeration test rigs, and multi-cylinder internal combustion engine test beds.',
        'icon'        => 'gauge',
        'specs'       => 'Digital flowmeters, Pelton turbine rigs, variable compression engine test setup.'
    ],
    [
        'name'        => 'Structural & Geotechnical Testing Lab',
        'desc'        => 'Heavy structural testing machines, universal testing machines (UTM), soil mechanics triaxial apparatus, and surveying instruments.',
        'icon'        => 'building',
        'specs'       => '1000 kN Digital UTM, Total Station, direct shear & consolidation test beds.'
    ],
];

$recruiters = [
    'Tata Steel', 'Larsen & Toubro', 'TCS', 'Wipro', 'Infosys', 
    'Tech Mahindra', 'HCL Technologies', 'Jindal Steel & Power', 'Adani Power'
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
      <a href="<?= url('departments/') ?>" class="hover:text-white transition">Faculties</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Engineering &amp; Technology</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of Engineering &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Technology</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Shaping forward-thinking engineers through outcome-based pedagogy, advanced research laboratories, M.Tech specializations, and seamless industry integration.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('cpu', 'w-4 h-4 text-gold') ?> AICTE Model Curriculum
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award', 'w-4 h-4 text-gold') ?> B.Tech, M.Tech &amp; Polytechnic
      </span>
      <span class="hero-pill">
        <?= lucide_icon('microscope', 'w-4 h-4 text-gold') ?> Ph.D. &amp; Advanced Research Labs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase', 'w-4 h-4 text-gold') ?> 100% Placement Support
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Schools -->
<?php require_once dirname(__DIR__) . '/includes/schools_nav_tabs.php'; ?>

<!-- ==================== FACULTY SPOTLIGHT OVERVIEW ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Executive Faculty Vision Spotlight -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('cpu', 'w-4 h-4 text-gold') ?> Academic Leadership &amp; Innovation
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Building the Next Generation of Engineers
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The changing landscape of India in engineering and technology demands unprecedented innovation, creativity, and pedagogical reform. The School of Engineering &amp; Technology at RKDF University Ranchi is committed to nurturing future-ready engineers who drive industrial modernization and lead national technological transformation.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            We educate engineers to facilitate the crucial transition from concept blueprint to tangible product and automated process—spanning software, hardware, civil, mechanical, electrical, and mining engineering domains.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>Design-to-Product Mindset</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Rigorous Academic Discipline</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Industry 4.0 Ready</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Engineering Directorate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Excellence in Engineering</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Empowering engineers through hands-on laboratory exploration, industry internships, and multi-disciplinary research projects.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">5+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Engineering Disciplines</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Lab-Oriented Courses</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== ACADEMIC PROGRAMS & COURSES ==================== -->
    <div class="section-block" id="programs">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Curriculum Framework</span>
          <h3 class="rkdf-section-title">Academic Programs Offered</h3>
          <p class="rkdf-section-desc">Outcome-based engineering curricula aligned with AICTE model syllabus and industrial standards.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="rkdf-academic-grid">
        <?php foreach ($programs as $prog): ?>
          <div class="rkdf-academic-card">
            <div>
              <!-- Card Header -->
              <div class="rkdf-prog-header">
                <span class="rkdf-prog-badge">
                  <?= lucide_icon($prog['icon'], 'w-3.5 h-3.5 text-amber-600 shrink-0') ?>
                  <?= e($prog['category']) ?>
                </span>
                <span class="rkdf-duration-badge">
                  <?= lucide_icon('clock', 'w-3.5 h-3.5 text-gold shrink-0') ?>
                  <?= e($prog['duration']) ?>
                </span>
              </div>

              <h4 class="rkdf-prog-title">
                <?= e($prog['title']) ?>
              </h4>

              <p class="rkdf-prog-desc">
                <?= e($prog['description']) ?>
              </p>

              <!-- Specializations List -->
              <div class="mb-5">
                <div class="rkdf-spec-section-title">
                  <?= lucide_icon('layers', 'w-3.5 h-3.5 text-gold') ?>
                  <span>Available Specializations:</span>
                </div>
                <div class="rkdf-spec-grid">
                  <?php foreach ($prog['branches'] as $b): ?>
                    <div class="rkdf-spec-item">
                      <span class="rkdf-spec-name">
                        <span class="rkdf-spec-dot"></span>
                        <?= e($b['name']) ?>
                      </span>
                      <span class="rkdf-spec-tag">
                        <?= e($b['tag']) ?>
                      </span>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>

              <!-- Eligibility Box -->
              <div class="rkdf-eligibility-card">
                <div class="rkdf-eligibility-header">
                  <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-amber-700') ?>
                  <span>Eligibility &amp; Admission:</span>
                </div>
                <p class="rkdf-eligibility-text"><?= e($prog['eligibility']) ?></p>
              </div>
            </div>

            <!-- Card Action Footer -->
            <div class="rkdf-prog-footer">
              <span class="rkdf-accred-badge">
                <?= lucide_icon('shield-check', 'w-4 h-4 text-emerald-600') ?>
                <?= e($prog['badge']) ?>
              </span>
              <a href="<?= url('admissions/') ?>" class="rkdf-apply-btn">
                <span>Apply Now</span>
                <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== HIGH-TECH LABORATORIES & RESEARCH ==================== -->
    <div class="section-block" id="laboratories">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Cutting-Edge Infrastructure</span>
          <h3 class="rkdf-section-title">Specialized Engineering Labs</h3>
          <p class="rkdf-section-desc">High-tech experiential research suites equipped with precision analytical apparatus, simulation servers, and industry-grade test rigs.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('cpu', 'w-3.5 h-3.5 text-gold') ?>
          <span>Industry 4.0 Equipment</span>
        </span>
      </div>

      <div class="rkdf-lab-grid">
        <?php foreach ($labs as $idx => $lab): ?>
          <div class="rkdf-lab-card">
            <div>
              <div class="rkdf-lab-card-top">
                <div class="rkdf-lab-icon-box">
                  <?= lucide_icon($lab['icon'], 'w-5 h-5') ?>
                </div>
                <span class="rkdf-lab-index-tag">Lab 0<?= $idx + 1 ?></span>
              </div>
              <h4 class="rkdf-lab-title"><?= e($lab['name']) ?></h4>
              <p class="rkdf-lab-desc"><?= e($lab['desc']) ?></p>
            </div>
            <div class="rkdf-lab-specs-box">
              <div class="rkdf-lab-specs-header">
                <?= lucide_icon('sparkles', 'w-3 h-3 text-gold shrink-0') ?>
                <span>Technical Specifications:</span>
              </div>
              <p class="rkdf-lab-specs-text"><?= e($lab['specs']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== PLACEMENTS & CORPORATE LINKAGES ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('briefcase', 'w-4 h-4 text-gold') ?> Career Trajectory &amp; Placements
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Corporate Linkages &amp; Industry Partnerships
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Our active Training &amp; Placement Cell maintains dedicated MoUs with leading industrial giants, offering mandatory 60+ days internships, live project simulations, and robust on-campus recruitment drives.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Placement Support</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">500+</div>
              <div class="rkdf-corporate-stat-lbl">Hiring Partners</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">₹12 LPA</div>
              <div class="rkdf-corporate-stat-lbl">Highest Package</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Top Recruiting Partners</span>
            <span class="text-[10px] text-white/70 uppercase">Core &amp; IT Giants</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($recruiters as $rec): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($rec) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="placements.php" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
              <span>Explore Complete Placement Record</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== FINAL ADMISSION CALLOUT BANNER ==================== -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Admissions Open for 2026–27 Academic Session</span>
        </div>
        <h3 class="rkdf-admission-title">
          Ready to Start Your Engineering Journey?
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for B.Tech and Polytechnic Diploma programs. Merit-based scholarships, tribal youth concessions, and easy fee installment plans available for eligible candidates.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Instant Online Registration
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Direct Campus Counseling
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Scholarship Assistance
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
