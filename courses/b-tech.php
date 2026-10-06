<?php
/**
 * RKDF University — Bachelor of Technology (B.Tech) Programs
 * Content Source: https://rkdfuniversity.org/courses/b-tech/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'B.Tech Programs | Faculty of Engineering & Technology — ' . SITE_NAME;
$page_meta_desc = 'Explore 4-Year B.Tech engineering degrees in Computer Science, Mining, Civil, Mechanical, and Electrical at RKDF University Ranchi. AICTE aligned curriculum, state-of-the-art labs, and high-tier placements.';

$btech_programs = [
    [
        'title'       => 'Computer Science & Engineering',
        'badge'       => '4 Years • 8 Semesters',
        'icon'        => 'cpu',
        'desc'        => 'Full-stack software engineering, artificial intelligence, cloud architectures, cybersecurity, database management systems, and DevOps pipelines.',
        'features'    => [
            'High-Performance GPU Computing & AI Sandbox',
            'Industry Certifications: AWS, Java, Python & Linux',
            'Full-Stack Capstone Projects with Tech Mentors'
        ],
        'duration'    => '4 Years',
        'eligibility' => '10+2 PCM (45%+)'
    ],
    [
        'title'       => 'Mining Engineering',
        'badge'       => '4 Years • Flagship Program',
        'icon'        => 'compass',
        'desc'        => 'Surface and underground mineral extraction, mine ventilation, geo-mechanics, rock blasting technology, environmental reclamation, and DGMS compliance.',
        'features'    => [
            'Practical Coal & Mineral Field Postings in Jharkhand',
            'Full Accidental & Life Insurance for Trainees',
            'Direct Campus Recruitment by Mining Conglomerates'
        ],
        'duration'    => '4 Years',
        'eligibility' => '10+2 PCM (45%+)'
    ],
    [
        'title'       => 'Civil & Structural Engineering',
        'badge'       => '4 Years • 8 Semesters',
        'icon'        => 'building',
        'desc'        => 'Structural analysis, advanced concrete technology, geotechnical mechanics, environmental hydrology, smart highway design, and BIM 3D modeling.',
        'features'    => [
            'NABL-Standard Concrete & Soil Mechanics Testing Labs',
            'Hands-on Training in AutoCAD, STAAD.Pro & GIS',
            'Infrastructure Site Visits & Smart City Projects'
        ],
        'duration'    => '4 Years',
        'eligibility' => '10+2 PCM (45%+)'
    ],
    [
        'title'       => 'Mechanical & Thermal Engineering',
        'badge'       => '4 Years • 8 Semesters',
        'icon'        => 'settings',
        'desc'        => 'Thermodynamics, IC engines, CAD/CAM manufacturing, robotics automation, fluid dynamics, renewable energy systems, and automotive design.',
        'features'    => [
            'Advanced CNC Machine Tools & Heavy Machine Shop',
            'Thermal Engineering & Heat Transfer Research Unit',
            'Robotics & Industrial Automation Sandbox'
        ],
        'duration'    => '4 Years',
        'eligibility' => '10+2 PCM (45%+)'
    ],
    [
        'title'       => 'Electrical & Power Systems',
        'badge'       => '4 Years • 8 Semesters',
        'icon'        => 'zap',
        'desc'        => 'Power transmission, renewable grid integration, microcontrollers, control systems, electrical drives, and EV powertrain fundamentals.',
        'features'    => [
            'High-Voltage Electrical Machines & Protection Lab',
            'Solar & Renewable Energy Integration Setups',
            'MATLAB / Simulink Circuit Simulation Workstations'
        ],
        'duration'    => '4 Years',
        'eligibility' => '10+2 PCM (45%+)'
    ],
    [
        'title'       => 'B.Tech (Lateral Entry to 2nd Year)',
        'badge'       => '3 Years • 6 Semesters',
        'icon'        => 'sparkles',
        'desc'        => 'Direct admission into the 3rd semester of B.Tech across CSE, Mining, Civil, Mechanical, and Electrical for recognized polytechnic diploma holders.',
        'features'    => [
            'Direct Entry to 2nd Year Engineering Degree',
            'Bridge Course in Advanced Engineering Mathematics',
            'Full Access to Campus Placements & Internships'
        ],
        'duration'    => '3 Years',
        'eligibility' => '3-Yr Engg Diploma (45%+)'
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
      <a href="<?= url('courses/under-graduate-programs.php') ?>" class="hover:text-white transition">Undergraduate</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">B.Tech</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Bachelor of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Technology (B.Tech)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Future-ready engineering programs blending fundamental analytical rigor with industry immersion in Computer Science, Mining, Civil, Mechanical, and Electrical domains.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('cpu') ?> AICTE &amp; UGC Aligned
      </span>
      <span class="hero-pill">
        <?= lucide_icon('compass') ?> Flagship Mining Engineering
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> 100% Practical Industry Immersion
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
            <?= lucide_icon('cpu', 'w-4 h-4 text-gold') ?> Faculty of Engineering &amp; Technology
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Engineered for Innovation, Built for Industrial Impact
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The B.Tech program at RKDF University Ranchi is formulated to build technical mastery through experiential laboratory learning, multi-disciplinary innovation challenges, and extensive industrial internships.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            With dedicated mining field attachments in Jharkhand's mineral belt, high-performance GPU computer labs, and fully equipped fabrication shops, our graduates are prepared for high-impact technical careers.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>Hands-on Lab Practicals</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Mining Trainee Insurance</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Campus Placement Support</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Quick Specs
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('cpu', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">B.Tech Engineering</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Approved degree structure aligned with national engineering curricula and NEP 2020 credit frameworks.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">4 Years</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">8 Semesters</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">45% PCM</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Eligibility (40% Res.)</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== SPECIALIZATIONS GRID ==================== -->
    <div class="section-block" id="specializations">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Engineering Disciplines</span>
          <h3 class="rkdf-section-title">Available B.Tech Specializations</h3>
          <p class="rkdf-section-desc">Choose from regionally vital and globally demanded engineering streams.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for B.Tech 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($btech_programs as $prog): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($prog['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($prog['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($prog['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($prog['desc']) ?></p>
                
                <ul class="prog-spec-feature-list">
                  <?php foreach ($prog['features'] as $ft): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                      <span><?= e($ft) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & CTA -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Duration</span>
                    <span class="prog-spec-stat-val"><?= e($prog['duration']) ?></span>
                  </div>
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Eligibility</span>
                    <span class="prog-spec-stat-val"><?= e($prog['eligibility']) ?></span>
                  </div>
                </div>

                <a href="<?= url('admissions/') ?>" class="prog-spec-btn">
                  <span>Apply for <?= e($prog['title']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== INFRASTRUCTURE & PILLARS ==================== -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Engineering Advantage</span>
          <h3 class="rkdf-section-title">World-Class Infrastructure &amp; Industry Links</h3>
          <p class="rkdf-section-desc">Comprehensive laboratory assets and recruitment networks ensuring graduate success.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('compass') ?>
          </div>
          <h4 class="pillar-title">Mining Hub of Eastern India</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Direct operational field training across coal and mineral extraction sites with full insurance coverage and DGMS certified guide supervision.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('cpu') ?>
          </div>
          <h4 class="pillar-title">Modern Computing &amp; CNC Labs</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            High-speed GPU computing nodes, licensed CAD/CAM software suites, concrete testing setups, and advanced electronics workshops.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('briefcase') ?>
          </div>
          <h4 class="pillar-title">150+ Corporate Hiring Partners</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Active campus recruitment partnerships with leading IT corporations, infrastructure developers, and industrial manufacturing firms.
          </p>
        </div>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>B.Tech Admissions Open for 2026–27 Cycle</span>
        </div>
        <h3 class="rkdf-admission-title">
          Build Your Career in Next-Generation Engineering
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for B.Tech programs at RKDF University Ranchi. State scholarship assistance available for eligible candidates.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for B.Tech</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Engineering Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
