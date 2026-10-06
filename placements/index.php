<?php
/**
 * RKDF University — Training & Placement Cell
 * Content Source: https://rkdfuniversity.org/placements/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Training & Placement Cell | Corporate Relations & Placements | ' . SITE_NAME;
$page_meta_desc = 'Explore the Training & Placement Cell at RKDF University Ranchi: 150+ corporate recruiters, summer internships, soft-skill bootcamps, and top-tier student placements across all faculties.';

$placement_pillars = [
    [
        'title'       => 'Corporate Campus Placement Drives',
        'badge'       => 'Direct Campus Recruitment',
        'icon'        => 'briefcase',
        'desc'        => 'Dedicated recruitment drives hosting premier IT giants, core engineering firms, BFSI corporations, pharmaceutical conglomerates, and legal institutions.',
        'features'    => [
            '150+ Top Multinational & National Corporate Recruiters',
            'On-Campus, Virtual & Pooled Multi-University Drives',
            'Pre-Placement Talks (PPT) & Corporate Technical Briefings',
            'Highest Package Reaching 8+ LPA with High Average Median'
        ],
        'stats'       => [
            ['lbl' => 'Corporate Network', 'val' => '150+ Recruiters'],
            ['lbl' => 'Top Package', 'val' => '8+ LPA CTC']
        ],
        'btn_label'   => 'View Recruitment Report',
        'btn_url'     => url('about/achievements.php')
    ],
    [
        'title'       => 'Summer Internships & Live Projects',
        'badge'       => 'Practical Industry Immersion',
        'icon'        => 'laptop',
        'desc'        => 'Mandatory structured 6 to 8-week corporate internships ensuring students gain real-world industrial exposure and stipend opportunities prior to graduation.',
        'features'    => [
            '100% Internship Facilitation Across UG & PG Streams',
            'Industry-Sponsored Capstone & Research Projects',
            'Corporate Mentor Allocation & Weekly Project Reviews',
            'High Pre-Placement Offer (PPO) Conversion Rates'
        ],
        'stats'       => [
            ['lbl' => 'Internship Support', 'val' => '100% Facilitation'],
            ['lbl' => 'Duration', 'val' => '6–8 Weeks Mandatory']
        ],
        'btn_label'   => 'Explore Internships',
        'btn_url'     => url('admissions/academic-collaborations.php')
    ],
    [
        'title'       => 'Soft Skills & Quantitative Aptitude',
        'badge'       => 'Employability Enhancement',
        'icon'        => 'award',
        'desc'        => 'Rigorous semester-long training modules covering mathematical aptitude, analytical reasoning, professional English verbal fluency, and executive etiquette.',
        'features'    => [
            'Quantitative Aptitude & Logical Reasoning Drills',
            'Corporate Communication & Business Email Etiquette',
            'Personality Development & Executive Body Language',
            'Industry-Recognized Certification Programs'
        ],
        'stats'       => [
            ['lbl' => 'Training Scope', 'val' => 'Semester-Long Modules'],
            ['lbl' => 'Focus Areas', 'val' => 'Aptitude & Soft Skills']
        ],
        'btn_label'   => 'Training Curriculum',
        'btn_url'     => url('courses/common-courses-for-all.php')
    ],
    [
        'title'       => 'Mock Interviews & GD Simulations',
        'badge'       => 'Selection Readiness',
        'icon'        => 'users',
        'desc'        => 'Simulated technical HR rounds, group discussions, video resume coaching, and ATS-optimized resume formatting overseen by corporate experts.',
        'features'    => [
            '1-on-1 Simulated Technical & Behavioral HR Interviews',
            'Moderated Group Discussion (GD) Assessment Sessions',
            'ATS-Compliant Resume Writing & Portfolio Building',
            'Personalized Video Interview Practice with Video Feedback'
        ],
        'stats'       => [
            ['lbl' => 'Simulation', 'val' => '1-on-1 Mock Panels'],
            ['lbl' => 'Resume Audit', 'val' => 'ATS Optimized']
        ],
        'btn_label'   => 'Mock Interview Desk',
        'btn_url'     => url('contact.php')
    ],
    [
        'title'       => 'CXO Masterclasses & Conclaves',
        'badge'       => 'Corporate Leadership',
        'icon'        => 'globe',
        'desc'        => 'Regular leadership conclaves, industry seminars, technical masterclasses, and interactive panel sessions with C-suite executives and entrepreneurs.',
        'features'    => [
            'Keynotes by Fortune 500 Industry Leaders & Technocrats',
            'Sectoral Innovation & Industrial Tech Masterclasses',
            'Corporate Mentorship Circles for Graduating Batches',
            'MoUs with Premier Corporate & Industry Associations'
        ],
        'stats'       => [
            ['lbl' => 'Conclaves', 'val' => 'Regular CXO Summits'],
            ['lbl' => 'MoUs', 'val' => '50+ Corporate MoUs']
        ],
        'btn_label'   => 'Corporate MoUs',
        'btn_url'     => url('admissions/academic-collaborations.php')
    ],
    [
        'title'       => 'Career Counseling & E-Cell Incubation',
        'badge'       => 'Entrepreneurship & Guidance',
        'icon'        => 'sparkles',
        'desc'        => 'Individual career mapping, civil services coaching support, higher studies advisory, and startup incubation mentoring through the university E-Cell.',
        'features'    => [
            '1-on-1 Career Trajectory Consultation with Senior Mentors',
            'Startup Incubation Support, Mentoring & Seed Guidance',
            'Advisory for GATE, CAT, NET, Judicial & Defense Services',
            'Global Higher Studies & Overseas University Guidance'
        ],
        'stats'       => [
            ['lbl' => 'Mentorship', 'val' => '1-on-1 Trajectory Mapping'],
            ['lbl' => 'Incubation', 'val' => 'Active Campus E-Cell']
        ],
        'btn_label'   => 'Contact Career Desk',
        'btn_url'     => url('contact.php')
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
      <span class="text-white/90">Training &amp; Placements</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Training &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Placement Cell</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Bridging academic excellence with corporate leadership through 150+ recruitment partners, structured summer internships, rigorous soft-skill bootcamps, and top CTC packages.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> 150+ Corporate Recruiters
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> 8+ LPA Top CTC Package
      </span>
      <span class="hero-pill">
        <?= lucide_icon('laptop') ?> 100% Internship Assistance
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> 360° Soft-Skill &amp; GD/PI Bootcamps
      </span>
    </div>
  </div>
</section>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Key Metrics Banner -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">150+</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Corporate Recruiters</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">100%</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Internship Facilitation</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">8+ LPA</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Top CTC Package</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">360°</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Employability Training</span>
      </div>
    </div>

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('briefcase', 'w-4 h-4 text-gold') ?> Directorate of Corporate Relations &amp; Placements
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Empowering Student Employability &amp; Corporate Leadership
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The Training &amp; Placement Cell at RKDF University Ranchi acts as a dynamic catalyst between academia and global industry. We train scholars with domain-specific certifications, high-caliber verbal communication, and problem-solving agility to ensure exceptional career trajectories.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check') ?>
              <span>Pre-Placement Training Bootcamps</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Industry-Validated Certifications</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('shield-check') ?>
              <span>150+ Corporate Recruitment Partners</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Placement Desk
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Campus Career Cell</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Dedicated placement directorate with full-time corporate liaisons, interview suites, and seminar halls.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">150+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Recruiters</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">8+ LPA</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Top Tier CTC</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== PLACEMENT INITIATIVES DIRECTORY ==================== -->
    <div class="section-block" id="placement-initiatives">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Career Acceleration Framework
          </span>
          <h3 class="rkdf-section-title">Training &amp; Placement Verticals</h3>
          <p class="rkdf-section-desc">Structured recruitment drives, internships, technical masterclasses, and soft-skill bootcamps preparing scholars for corporate success.</p>
        </div>
        <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Corporate Recruiter Desk</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($placement_pillars as $pillar): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($pillar['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($pillar['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($pillar['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($pillar['desc']) ?></p>

                <!-- Feature List -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($pillar['features'] as $feat): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
                      <span><?= e($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & CTA -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <?php foreach ($pillar['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <a href="<?= e($pillar['btn_url']) ?>" class="prog-spec-btn">
                  <span><?= e($pillar['btn_label']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== CORPORATE RECRUITERS SHOWCASE ==================== -->
    <div class="section-block" id="recruiters">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('building-2', 'w-3.5 h-3.5') ?> Corporate Ecosystem
          </span>
          <h3 class="rkdf-section-title">Our Esteemed Corporate Recruiters</h3>
          <p class="rkdf-section-desc">Leading multinational technology giants, pharmaceutical corporations, BFSI conglomerates, and hospitality brands hiring from RKDF University.</p>
        </div>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 sm:gap-6 items-center">
        <?php
        $recruiters = [
            ['name' => 'Infosys', 'logo' => 'infosys.jpg'],
            ['name' => 'Cipla', 'logo' => 'cipla.jpg'],
            ['name' => 'Lupin Pharma', 'logo' => 'lupin.jpg'],
            ['name' => 'Reliance', 'logo' => 'reliance.jpg'],
            ['name' => 'ICICI Bank', 'logo' => 'icici-150x43.jpg'],
            ['name' => 'Axis Bank', 'logo' => 'axis-150x39.jpg'],
            ['name' => 'Bharti Airtel', 'logo' => 'airtel-150x64.jpg'],
            ['name' => 'Voltas', 'logo' => 'voltas-150x55.jpg'],
            ['name' => 'Domino\'s', 'logo' => 'dominos-150x64.jpg'],
            ['name' => 'IndiGo Airlines', 'logo' => 'indigo-150x59.jpg'],
            ['name' => 'Taj Hotels', 'logo' => 'taj.jpg'],
            ['name' => 'Oberoi Group', 'logo' => 'oberoi.jpg'],
            ['name' => 'Hyatt Regency', 'logo' => 'hyatt-150x55.jpg'],
            ['name' => 'Marriott International', 'logo' => 'mariott-150x50.jpg'],
            ['name' => 'Hilton Hotels', 'logo' => 'hilton-150x84.jpg'],
            ['name' => 'Trident Hotels', 'logo' => 'trident.jpg'],
            ['name' => 'BYJU\'S', 'logo' => 'byjus-150x48.jpg'],
            ['name' => 'Nagarro', 'logo' => 'nagarro-150x39.jpg'],
        ];
        foreach ($recruiters as $rec):
        ?>
          <div class="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-xs flex items-center justify-center h-24 hover:border-gold/50 hover:shadow-md transition-all group">
            <img 
              src="<?= url('images/' . $rec['logo']) ?>" 
              alt="<?= e($rec['name']) ?>" 
              class="max-h-12 max-w-full object-contain filter grayscale group-hover:grayscale-0 transition duration-300"
              loading="lazy"
            >
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== OFFICIAL PLACEMENT REPORTS ==================== -->
    <div class="section-block" id="placement-reports">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('file-text', 'w-3.5 h-3.5') ?> Verified Corporate Audits
          </span>
          <h3 class="rkdf-section-title">Official Campus Placement Reports &amp; Records</h3>
          <p class="rkdf-section-desc">Download annual campus placement brochures, batch recruitment statistics, and corporate selection summaries.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="prog-spec-card">
          <div class="prog-spec-header">
            <div>
              <span class="prog-spec-badge">
                <?= lucide_icon('award', 'w-3 h-3') ?>
                <span>Placement Audit • PDF</span>
              </span>
              <h4 class="prog-spec-title">Placement Report 2023–24</h4>
            </div>
            <div class="prog-spec-iconbox">
              <?= lucide_icon('file-text', 'w-6 h-6') ?>
            </div>
          </div>
          <div class="prog-spec-body">
            <p class="prog-spec-desc">Detailed company-wise selection list, highest CTC allocations, and multidisciplinary recruiter audits for 2023–24.</p>
            <div class="pt-2 flex flex-col gap-2">
              <a href="<?= url('documents/PLACEMENT-2023-1.pdf') ?>" target="_blank" class="prog-spec-btn">
                <?= lucide_icon('download', 'w-4 h-4') ?>
                <span>Download Report Part 1 (PDF)</span>
              </a>
              <a href="<?= url('documents/PLACEMENT-2023-2.pdf') ?>" target="_blank" class="prog-spec-btn">
                <?= lucide_icon('download', 'w-4 h-4') ?>
                <span>Download Report Part 2 (PDF)</span>
              </a>
            </div>
          </div>
        </div>

        <div class="prog-spec-card">
          <div class="prog-spec-header">
            <div>
              <span class="prog-spec-badge">
                <?= lucide_icon('award', 'w-3 h-3') ?>
                <span>Placement Audit • PDF</span>
              </span>
              <h4 class="prog-spec-title">Placement Report 2022–23</h4>
            </div>
            <div class="prog-spec-iconbox">
              <?= lucide_icon('file-text', 'w-6 h-6') ?>
            </div>
          </div>
          <div class="prog-spec-body">
            <p class="prog-spec-desc">Verified placement logs, student company allotments, corporate drive records, and sector-wise recruitment split.</p>
            <div class="pt-2 flex flex-col gap-2">
              <a href="<?= url('documents/PLACEMENT-2022-1.pdf') ?>" target="_blank" class="prog-spec-btn">
                <?= lucide_icon('download', 'w-4 h-4') ?>
                <span>Download Report Part 1 (PDF)</span>
              </a>
              <a href="<?= url('documents/PLACEMENT-2023-3.pdf') ?>" target="_blank" class="prog-spec-btn">
                <?= lucide_icon('download', 'w-4 h-4') ?>
                <span>Download Report Part 3 (PDF)</span>
              </a>
            </div>
          </div>
        </div>

        <div class="prog-spec-card">
          <div class="prog-spec-header">
            <div>
              <span class="prog-spec-badge">
                <?= lucide_icon('briefcase', 'w-3 h-3') ?>
                <span>Career Brochure • PDF</span>
              </span>
              <h4 class="prog-spec-title">Placement Brochure 2025–26</h4>
            </div>
            <div class="prog-spec-iconbox">
              <?= lucide_icon('file-check', 'w-6 h-6') ?>
            </div>
          </div>
          <div class="prog-spec-body">
            <p class="prog-spec-desc">Recruiter guide detailing student demographics, laboratory infrastructure, academic curriculum, and hiring procedures.</p>
            <div class="pt-2">
              <a href="<?= url('documents/RKDF-PROSPECTUS.pdf') ?>" target="_blank" class="prog-spec-btn">
                <?= lucide_icon('download', 'w-4 h-4') ?>
                <span>Download Corporate Brochure (PDF)</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Corporate Recruiter Invitation 2026–27</span>
        </div>
        <h3 class="rkdf-admission-title">
          Hire Top-Tier Multidisciplinary Talent from RKDF University
        </h3>
        <p class="rkdf-admission-desc">
          Partner with our Placement Directorate for on-campus recruitment, technical hackathons, and corporate internships across Engineering, Management, Law, Pharmacy, Sciences &amp; Agriculture.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-primary-btn">
          <span>Invite Placement Drive</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-secondary-btn">
          <span>Admissions 2026–27</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
