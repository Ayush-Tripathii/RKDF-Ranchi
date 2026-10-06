<?php
/**
 * RKDF University — Faculty of Information & Technology
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-information-technology/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Information & Technology — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Information & Technology at RKDF University Ranchi. Industry-aligned MCA, BCA, BCA Corporate & PGDCA programs with advanced cloud, AI, and software engineering labs.';

$programs = [
    [
        'category'    => 'Postgraduate Degrees (PG)',
        'title'       => 'Master of Computer Application (MCA)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'AICTE Model Curriculum',
        'icon'        => 'laptop',
        'description' => 'Advanced postgraduate computing curriculum designed for modern enterprise software architecture, full-stack cloud computing, AI/ML models, scalable database structures, and dependable software systems.',
        'branches'    => [
            ['name' => 'Full-Stack & Cloud Architecture', 'tag' => 'AWS & Azure Ready'],
            ['name' => 'Artificial Intelligence & Data Science', 'tag' => 'Python & PyTorch'],
            ['name' => 'Cyber Security & Forensics', 'tag' => 'Ethical Hacking'],
            ['name' => 'Mobile & Distributed Systems', 'tag' => 'Flutter & React Native'],
        ],
        'eligibility' => 'Passed BCA / Bachelor Degree in Computer Science Engineering or equivalent degree, OR passed B.Sc. / B.Com. / B.A. with Mathematics at 10+2 level or at Graduation Level (with additional bridge courses as per university norms) with at least 50% marks (45% for reserved categories).'
    ],
    [
        'category'    => 'Undergraduate Degrees (UG)',
        'title'       => 'Bachelor of Computer Application (BCA)',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Flagship Computing Program',
        'icon'        => 'cpu',
        'description' => 'Comprehensive foundational degree covering algorithm design, object-oriented programming (C++, Java, Python), database systems (SQL/NoSQL), web engineering, computer networks, and modern UI/UX design.',
        'branches'    => [
            ['name' => 'Core Software Engineering', 'tag' => 'Java, C++ & Python'],
            ['name' => 'Database & Backend Engineering', 'tag' => 'MySQL, MongoDB & Node'],
            ['name' => 'Web Application Development', 'tag' => 'HTML5, CSS3 & JavaScript'],
            ['name' => 'Computer Networks & Security', 'tag' => 'TCP/IP & Firewalls'],
        ],
        'eligibility' => 'Passed 10+2 or equivalent examination from a recognized Board with Mathematics / Computer Science / IT / Information Practices as one of the subjects with at least 45% marks (40% for reserved categories).'
    ],
    [
        'category'    => 'Industry-Integrated UG',
        'title'       => 'BCA Corporate (Industry Integrated)',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Corporate Track',
        'icon'        => 'briefcase',
        'description' => 'Specialized corporate track co-engineered with leading IT partners featuring mandatory live sprint projects, full-stack bootcamp certifications, DevOps pipelines, agile methodologies, and fast-track placement interviews.',
        'branches'    => [
            ['name' => 'DevOps & CI/CD Pipelines', 'tag' => 'Docker & GitHub Actions'],
            ['name' => 'Full-Stack MERN Specialization', 'tag' => 'React & Node.js'],
            ['name' => 'Agile Sprint Simulation', 'tag' => 'Scrum & Jira Workflows'],
            ['name' => 'Corporate Readiness Bootcamp', 'tag' => 'Soft Skills & Mentorship'],
        ],
        'eligibility' => 'Passed 10+2 from a recognized board with minimum 50% marks (45% for SC/ST/OBC) with Mathematics/Computer Science/IT.'
    ],
    [
        'category'    => 'Postgraduate Diplomas',
        'title'       => 'Post Graduate Diploma in Computer Applications (PGDCA)',
        'duration'    => '1 Year · 2 Semesters',
        'badge'       => 'Skill Certification',
        'icon'        => 'award',
        'description' => 'Intensive 1-year postgraduate diploma designed for graduates seeking professional computer proficiency, database management, automated office applications, and entry-level IT operations expertise.',
        'branches'    => [
            ['name' => 'Office Automation & Advanced Excel', 'tag' => 'MIS & Analytics'],
            ['name' => 'Programming in Python & C++', 'tag' => 'Scripting & Logic'],
            ['name' => 'Web Design & Scripting', 'tag' => 'Frontend Tech'],
            ['name' => 'IT Systems & Hardware Basics', 'tag' => 'OS & Networking'],
        ],
        'eligibility' => 'Graduation in any discipline from a recognized University with minimum 45% aggregate marks (40% for reserved category).'
    ],
];

$labs = [
    [
        'name'        => 'Cloud & High-Performance Computing Lab',
        'desc'        => 'Dedicated computing cluster configured with AWS, Microsoft Azure, and containerization virtualization environments (Docker & Kubernetes) for distributed systems engineering.',
        'icon'        => 'cpu',
        'specs'       => '60 High-End Core i7 Terminals, 32GB RAM, 1Gbps Dedicated Leased Line.'
    ],
    [
        'name'        => 'AI, Data Science & Machine Learning Hub',
        'desc'        => 'Workstation suite equipped with high-performance GPU accelerators supporting deep learning frameworks (TensorFlow, PyTorch, Scikit-learn) and Big Data Hadoop architectures.',
        'icon'        => 'layers',
        'specs'       => 'NVIDIA RTX Workstations, CUDA Parallel Cores, Python 3.12 ML Environments.'
    ],
    [
        'name'        => 'Full-Stack Software Development Lab',
        'desc'        => 'Contemporary software development laboratory structured for MERN/MEAN stack engineering, microservices development, Postman API testing, and version-controlled GitHub repositories.',
        'icon'        => 'laptop',
        'specs'       => 'VS Code, IntelliJ IDEA, Git Enterprise, MongoDB Compass, NodeJS Suites.'
    ],
    [
        'name'        => 'Cyber Security & Network Forensics Cell',
        'desc'        => 'Sandboxed isolation laboratory dedicated to network penetration testing, Wireshark packet analytics, cryptography simulation, ethical hacking, and cyber forensics investigation.',
        'icon'        => 'shield-check',
        'specs'       => 'Cisco Managed Routers, Kali Linux Sandbox, Snort IDS, Packet Tracers.'
    ],
];

$recruiters = [
    'TCS', 'Infosys', 'Wipro', 'Cognizant', 'Tech Mahindra', 
    'Capgemini', 'IBM', 'Accenture', 'HCL Technologies', 'Amazon'
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
      <span class="text-white/90">Information &amp; Technology</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of Information &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Technology</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Nurturing world-class software engineers, data scientists, and cloud architects through industry-backed computing curricula and experiential coding labs.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('laptop') ?> AICTE Model Curriculum
      </span>
      <span class="hero-pill">
        <?= lucide_icon('cpu') ?> Cloud &amp; AI Labs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> BCA / MCA / PGDCA
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 100% Industry Projects
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
            <?= lucide_icon('laptop', 'w-4 h-4 text-gold') ?> Digital Innovation &amp; Computing Mastery
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Pioneering Dependable Computing &amp; Next-Gen Software
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            Information Technology is the driving force of the global digital economy. The Faculty of Information &amp; Technology at RKDF University Ranchi is dedicated to promoting knowledge creation and technology transfer across cutting-edge computer science domains, modern software engineering, AI systems, and cybersecurity.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Our curriculum fosters deep algorithmic understanding combined with pragmatic full-stack development skills, ensuring our graduates excel in top global technology enterprises, research institutions, and digital startups.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>Full-Stack Development</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>AI &amp; Cloud Certified</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Industry Capstone Projects</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Computing Directorate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Excellence in IT Education</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Equipping students with industry-standard development frameworks, continuous coding hackathons, and high-impact corporate internships.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">4+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Flagship Degree Tracks</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Hands-on Lab Coding</div>
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
          <p class="rkdf-section-desc">Industry-aligned degree and diploma programs engineered for the modern software industry.</p>
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
                  <span>Core Curriculum Modules:</span>
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

    <!-- ==================== HIGH-TECH COMPUTING LABORATORIES ==================== -->
    <div class="section-block" id="laboratories">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Computing Infrastructure</span>
          <h3 class="rkdf-section-title">Specialized IT Laboratories</h3>
          <p class="rkdf-section-desc">Enterprise-grade computing facilities equipped with dedicated cloud servers, AI acceleration workstations, and cybersecurity testbeds.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('laptop', 'w-3.5 h-3.5 text-gold') ?>
          <span>Gigabit Connected Labs</span>
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

    <!-- ==================== PLACEMENTS & CORPORATE RECRUITERS ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('briefcase', 'w-4 h-4 text-gold') ?> Career Trajectory &amp; IT Placements
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Corporate Linkages &amp; Software Placements
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Our Central Placement Cell connects students directly with Tier-1 IT companies, tech MNCs, and product enterprises through full-time hiring drives, pre-placement talks, and industrial internships.
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
              <div class="rkdf-corporate-stat-num">₹10 LPA</div>
              <div class="rkdf-corporate-stat-lbl">Highest IT Package</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Top Tech Recruiters</span>
            <span class="text-[10px] text-white/70 uppercase">MNCs &amp; Product Giants</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($recruiters as $rec): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($rec) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
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
          Launch Your High-Growth Tech Career at RKDF
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for MCA, BCA, BCA Corporate, and PGDCA programs. Merit-based scholarships, direct coding bootcamps, and installment fee plans available for prospective students.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Direct Online Application
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> IT Faculty Counseling
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
