<?php
/**
 * RKDF University — Faculty of Basic & Applied Sciences
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-basic-and-applied-sciences/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Basic & Applied Sciences — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Basic and Applied Sciences at RKDF University Ranchi. Comprehensive B.Sc (Hons) and M.Sc degrees in Physics, Chemistry, Mathematics, IT, Computer Science, Biochemistry & Environmental Science.';

$programs = [
    // --- Postgraduate Programs ---
    [
        'category'    => 'Postgraduate Degrees (M.Sc)',
        'title'       => 'M.Sc. Applied Physics',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Core Science PG',
        'icon'        => 'microscope',
        'description' => 'Rigorous advanced study in quantum mechanics, solid state physics, electrodynamics, laser optics, materials science, and computational physical modeling.',
        'branches'    => [
            ['name' => 'Quantum & Condensed Matter Physics', 'tag' => 'Nanotech & Materials'],
            ['name' => 'Optics, Lasers & Photonics', 'tag' => 'Interferometry Labs'],
            ['name' => 'Electrodynamics & Plasma Physics', 'tag' => 'Computational Modeling'],
            ['name' => 'CSIR-NET / GATE Preparation Track', 'tag' => 'Research Fellowship'],
        ],
        'eligibility' => 'Passed B.Sc. with Physics as an Honours / Major / Core subject with at least 50% aggregate marks (45% for SC/ST/OBC) from a recognized University.'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.Sc)',
        'title'       => 'M.Sc. in Chemistry',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Organic / Inorganic / Physical',
        'icon'        => 'flask-conical',
        'description' => 'In-depth research and coursework covering advanced organic synthesis, reaction mechanisms, coordination chemistry, spectroscopy, and analytical instrumentation.',
        'branches'    => [
            ['name' => 'Advanced Organic Synthesis', 'tag' => 'Pharma & Drug Design'],
            ['name' => 'Inorganic Coordination Chemistry', 'tag' => 'Catalysis & Polymers'],
            ['name' => 'Spectroscopy & Analytical Instrumentation', 'tag' => 'UV-Vis & NMR'],
            ['name' => 'Green Chemistry & Environmental Catalysis', 'tag' => 'Sustainable Tech'],
        ],
        'eligibility' => 'Passed B.Sc. with Chemistry as Major/Honours subject with at least 50% aggregate marks (45% for reserved category) from a recognized University.'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.Sc)',
        'title'       => 'M.Sc. Applied Mathematics',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Computational & Pure Math',
        'icon'        => 'calculator',
        'description' => 'Specialized curriculum in advanced real and complex analysis, differential equations, numerical algorithms, linear algebra, operations research, and scientific computing.',
        'branches'    => [
            ['name' => 'Numerical Analysis & Scientific Computing', 'tag' => 'MATLAB & Python'],
            ['name' => 'Fluid Dynamics & Mathematical Modeling', 'tag' => 'Applied Systems'],
            ['name' => 'Operations Research & Optimization', 'tag' => 'Data Analytics'],
            ['name' => 'Cryptography & Discrete Mathematics', 'tag' => 'Algorithmic Security'],
        ],
        'eligibility' => 'Passed B.Sc. with Mathematics as a Core / Honours subject with at least 50% aggregate marks (45% for reserved categories) from a recognized University.'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.Sc)',
        'title'       => 'M.Sc. in Biochemistry',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Molecular Sciences',
        'icon'        => 'dna',
        'description' => 'Integrative biological chemistry covering enzymology, metabolic pathways, molecular genetics, clinical biochemistry, and bio-analytical techniques.',
        'branches'    => [
            ['name' => 'Clinical Enzymology & Metabolism', 'tag' => 'Biochemical Pathways'],
            ['name' => 'Molecular Biology & Genetic Engineering', 'tag' => 'Recombinant DNA'],
            ['name' => 'Immunology & Clinical Diagnostics', 'tag' => 'Assay Technology'],
            ['name' => 'Bio-Analytical & Separation Techniques', 'tag' => 'Chromatography & PAGE'],
        ],
        'eligibility' => 'Passed B.Sc. in Biochemistry, Chemistry, Biotech, Zoology, Botany or allied biological sciences with at least 50% marks (45% for reserved categories).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.Sc)',
        'title'       => 'M.Sc. in Computer Science',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Computational Science',
        'icon'        => 'cpu',
        'description' => 'Advanced computing curriculum focusing on theoretical computer science, machine learning models, database theory, data structures, and distributed cloud algorithms.',
        'branches'    => [
            ['name' => 'Artificial Intelligence & Machine Learning', 'tag' => 'Deep Learning Models'],
            ['name' => 'Data Science & Big Data Architecture', 'tag' => 'Analytics & Hadoop'],
            ['name' => 'Advanced Algorithms & Complexity', 'tag' => 'Graph Theory & Systems'],
            ['name' => 'Cloud Computing & Cyber Security', 'tag' => 'Enterprise Architecture'],
        ],
        'eligibility' => 'Passed B.Sc. Computer Science / B.Sc. IT / BCA / B.Sc. with Mathematics with at least 50% marks (45% for reserved categories).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.Sc)',
        'title'       => 'M.Sc. in Environmental Science',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Sustainability & Ecology',
        'icon'        => 'leaf',
        'description' => 'Multidisciplinary study of environmental pollution monitoring, ecological conservation, GIS spatial modeling, environmental impact assessment (EIA), and waste management.',
        'branches'    => [
            ['name' => 'Environmental Impact Assessment (EIA)', 'tag' => 'Policy & Audits'],
            ['name' => 'Pollution Control & Waste Management', 'tag' => 'Remediation Tech'],
            ['name' => 'GIS, Remote Sensing & Spatial Modeling', 'tag' => 'Geospatial Tools'],
            ['name' => 'Climate Change Mitigation & Ecology', 'tag' => 'Sustainable Ecology'],
        ],
        'eligibility' => 'Passed B.Sc. in any Science discipline (Physics, Chemistry, Botany, Zoology, Geology, Agriculture) with minimum 50% marks (45% for reserved categories).'
    ],

    // --- Undergraduate Programs ---
    [
        'category'    => 'Undergraduate Degrees (B.Sc Hons)',
        'title'       => 'B.Sc. (Hons.) in Physics',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Fundamental Sciences',
        'icon'        => 'atom',
        'description' => 'Classical mechanics, electromagnetism, modern physics, optics, thermal physics, solid state electronics, and computational mathematical methods.',
        'branches'    => [
            ['name' => 'Mechanics & Electrodynamics', 'tag' => 'Classical & Modern'],
            ['name' => 'Optics & Wave Motion Experiments', 'tag' => 'Laser Lab Setup'],
            ['name' => 'Digital Electronics & Solid State Devices', 'tag' => 'Circuit Analysis'],
            ['name' => 'Statistical Mechanics & Quantum Theory', 'tag' => 'Theoretical Basics'],
        ],
        'eligibility' => 'Passed 10+2 examination with Physics, Chemistry, and Mathematics (PCM) with minimum 45% marks (40% for SC/ST/OBC).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.Sc Hons)',
        'title'       => 'B.Sc. (Hons.) in Chemistry',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Chemical Sciences',
        'icon'        => 'flask-round',
        'description' => 'Comprehensive organic, inorganic, and physical chemistry with extensive wet lab synthesis, qualitative analysis, and spectroscopic instrumentation.',
        'branches'    => [
            ['name' => 'Organic Reaction Mechanisms & Synthesis', 'tag' => 'Reagents & Polymers'],
            ['name' => 'Inorganic Coordination & Bioinorganic', 'tag' => 'Transition Metals'],
            ['name' => 'Thermodynamics, Kinetics & Electrochemistry', 'tag' => 'Physical Chemistry'],
            ['name' => 'Analytical Chemistry & Chromatography', 'tag' => 'Volumetric & Spectral'],
        ],
        'eligibility' => 'Passed 10+2 with Chemistry and Physics/Biology/Mathematics with minimum 45% aggregate marks (40% for SC/ST).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.Sc Hons)',
        'title'       => 'B.Sc. (Hons.) in Mathematics',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Pure & Applied Math',
        'icon'        => 'binary',
        'description' => 'Calculus, linear algebra, geometry, differential equations, probability theory, mathematical statistics, and programming tools (MATLAB/Python).',
        'branches'    => [
            ['name' => 'Differential Calculus & Real Analysis', 'tag' => 'Pure Mathematics'],
            ['name' => 'Linear Algebra & Matrix Theory', 'tag' => 'Vector Spaces'],
            ['name' => 'Differential Equations & Mechanics', 'tag' => 'Applied Modeling'],
            ['name' => 'Mathematical Statistics & Probability', 'tag' => 'Data Applications'],
        ],
        'eligibility' => 'Passed 10+2 with Mathematics as a mandatory core subject with minimum 45% marks (40% for SC/ST).'
    ],
    [
        'category'    => 'Applied Computing UG',
        'title'       => 'B.Sc. Information Technology (B.Sc IT)',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Applied IT & Software',
        'icon'        => 'laptop',
        'description' => 'Applied IT systems, object-oriented programming in C++/Java, web technologies, database management, and computer network architecture.',
        'branches'    => [
            ['name' => 'C++, Java & Python Programming', 'tag' => 'OOP & Data Structures'],
            ['name' => 'Database Management Systems (RDBMS)', 'tag' => 'SQL & Data Modeling'],
            ['name' => 'Web Technologies & Frontend Scripting', 'tag' => 'HTML5, CSS & JS'],
            ['name' => 'Operating Systems & Networking', 'tag' => 'Linux & IP Protocols'],
        ],
        'eligibility' => 'Passed 10+2 with Mathematics / Physics / Computer Science with minimum 45% aggregate marks (40% for reserved categories).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.Sc Hons)',
        'title'       => 'B.Sc. (Hons.) Computer Science',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Computer Science Core',
        'icon'        => 'code',
        'description' => 'Theoretical computer science, algorithm design, system architecture, operating systems, and full-stack software development.',
        'branches'    => [
            ['name' => 'Algorithms & Data Structure Design', 'tag' => 'Core Computational'],
            ['name' => 'Computer System Architecture & OS', 'tag' => 'Hardware & Kernels'],
            ['name' => 'Software Engineering & Agile Methods', 'tag' => 'SDLC & Testing'],
            ['name' => 'Artificial Intelligence Fundamentals', 'tag' => 'ML & Heuristics'],
        ],
        'eligibility' => 'Passed 10+2 with Mathematics and Science/Computer stream with minimum 45% aggregate marks (40% for SC/ST).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.Sc Hons)',
        'title'       => 'B.Sc. (Hons.) in Biochemistry',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Biochemical Sciences',
        'icon'        => 'test-tube',
        'description' => 'Biomolecules, cellular metabolism, biochemical techniques, human physiology, clinical enzymology, and introductory molecular genetics.',
        'branches'    => [
            ['name' => 'Biomolecules & Cell Biology', 'tag' => 'Proteins, Lipids & DNA'],
            ['name' => 'Enzymology & Metabolic Biochemistry', 'tag' => 'Enzyme Kinetics'],
            ['name' => 'Clinical Biochemistry & Diagnostics', 'tag' => 'Pathological Assays'],
            ['name' => 'Molecular Genetics & Microbiology', 'tag' => 'Gene Expression'],
        ],
        'eligibility' => 'Passed 10+2 with Biology and Chemistry / Physics with minimum 45% marks (40% for SC/ST).'
    ],
    [
        'category'    => 'Applied Arts & Science UG',
        'title'       => 'B.Sc. Multimedia & Animation',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Creative Technology',
        'icon'        => 'sparkles',
        'description' => 'Digital graphic design, 2D/3D animation, video compositing, VFX modeling, audio engineering, and interactive multimedia design.',
        'branches'    => [
            ['name' => '2D & 3D Character Animation', 'tag' => 'Maya & Blender'],
            ['name' => 'VFX Compositing & Video Editing', 'tag' => 'After Effects & Premiere'],
            ['name' => 'Digital Graphics & UI/UX Design', 'tag' => 'Photoshop & Illustrator'],
            ['name' => 'Game Art & Interactive Media', 'tag' => 'Unity & Unreal Engine'],
        ],
        'eligibility' => 'Passed 10+2 in any stream (Science/Arts/Commerce) from a recognized board with minimum 45% marks (40% for SC/ST).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.Sc)',
        'title'       => 'Bachelor of Science (B.Sc. General - PCM / CBZ)',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Multidisciplinary Track',
        'icon'        => 'layers',
        'description' => 'Balanced multidisciplinary science degree covering Physics, Chemistry, and Mathematics (PCM) or Chemistry, Botany, and Zoology (CBZ).',
        'branches'    => [
            ['name' => 'Physical Sciences Stream (PCM)', 'tag' => 'Physics, Chem, Math'],
            ['name' => 'Life Sciences Stream (CBZ)', 'tag' => 'Chem, Botany, Zoology'],
            ['name' => 'Applied Environmental Studies', 'tag' => 'Ecology & Pollution'],
            ['name' => 'Skill Enhancement Courses (SEC)', 'tag' => 'Instrumentation & IT'],
        ],
        'eligibility' => 'Passed 10+2 in Science stream from a recognized board with minimum 45% aggregate marks (40% for SC/ST).'
    ],
];

$labs = [
    [
        'name'        => 'Advanced Optics & Modern Physics Lab',
        'desc'        => 'Equipped with He-Ne Laser setups, Michelson interferometers, spectrometers, Hall effect apparatus, and digital oscilloscopes for precision wave optics.',
        'icon'        => 'microscope',
        'specs'       => 'Laser Interferometry, Band Gap & Magnetic Susceptibility Units, Digital Optical Benches.'
    ],
    [
        'name'        => 'Inorganic & Organic Synthesis Chemistry Lab',
        'desc'        => 'State-of-the-art laboratory equipped with modern fume hoods, UV-Visible spectrophotometers, digital melting point apparatus, and rotary evaporators.',
        'icon'        => 'flask-conical',
        'specs'       => 'UV-Vis Double Beam Spectrophotometers, Centrifuges, Digital pH & Conductivity Meters.'
    ],
    [
        'name'        => 'Computational Mathematics & Analytics Lab',
        'desc'        => 'Specialized lab configured with MATLAB, Mathematica, R Studio, and Python scientific libraries for numerical simulations, statistics, and modeling.',
        'icon'        => 'calculator',
        'specs'       => 'High-Speed Computing Terminals, MATLAB Campus License, Python 3.12 Scientific Suite.'
    ],
    [
        'name'        => 'Biochemistry & Enzymology Research Lab',
        'desc'        => 'Equipped for enzyme kinetics, protein purification, electrophoresis (PAGE/Agarose), chromatography, and clinical biochemical assays.',
        'icon'        => 'dna',
        'specs'       => 'Gel Electrophoresis Units, UV Transilluminator, Refrigerated Cooling Centrifuges.'
    ],
    [
        'name'        => 'Environmental Analysis & Water Quality Lab',
        'desc'        => 'Dedicated station for ambient air quality monitoring, water pollution parameter analysis (BOD/COD), soil nutrient testing, and GIS spatial mapping.',
        'icon'        => 'leaf',
        'specs'       => 'BOD Incubators, COD Digesters, Turbidity Meters, Flame Photometers, GIS Workstations.'
    ],
    [
        'name'        => 'Advanced Computing & Simulation Lab',
        'desc'        => 'High-throughput computer center for theoretical modeling, data science algorithms, artificial intelligence frameworks, and molecular simulations.',
        'icon'        => 'cpu',
        'specs'       => '60 High-Performance Core i7 Terminals, Gigabit LAN, Linux & Windows Scientific OS.'
    ],
];

$institutions_and_partners = [
    'CSIR Labs', 'DRDO', 'BARC', 'IISc Bangalore', 'IIT Kharagpur', 
    'CIPET', 'Biocon', 'Lupin Pharma', 'Sun Pharma', 'Patanjali Research'
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
      <span class="text-white/90">Basic &amp; Applied Sciences</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of Basic &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Applied Sciences</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Nurturing scientific rigor, critical inquiry, and applied technological innovation through world-class B.Sc (Hons) and M.Sc programs in physical, chemical, and computational sciences.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('microscope') ?> CSIR-NET &amp; GATE Mentorship
      </span>
      <span class="hero-pill">
        <?= lucide_icon('flask-conical') ?> 6+ Precision Science Labs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> B.Sc (Hons) &amp; M.Sc Degrees
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 100% Practical Laboratory Training
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
            <?= lucide_icon('microscope', 'w-4 h-4 text-gold') ?> Scientific Discovery &amp; Research Excellence
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Advancing Fundamental Principles &amp; Real-World Applications
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The School of Basic and Applied Sciences at RKDF University Ranchi is devoted to developing a deep understanding of the fundamental principles of science that enhance the human experience. The school imparts foundational scientific clarity so students can appreciate complex industrial intricacies and solve applied challenges in real-world scenarios.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            The School contributes two-fold: First, Basic Sciences provides the bedrock foundation for numerous engineering and technical professions; Second, it creates new scientific knowledge driven by intellectual curiosity. The faculty actively organizes National &amp; International Conferences, Workshops, Seminars, Expert Lectures, and Research Laboratory visits.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>Choice Based Credit System (CBCS)</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>CSIR / UGC-NET Mentorship</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Industrial &amp; R&amp;D Internships</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Science Directorate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Excellence in Scientific Inquiry</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Equipping science graduates with rigorous analytical training, advanced instrumentation expertise, and direct paths to national research fellowships.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">14+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">UG &amp; PG Degree Majors</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Lab Practical Training</div>
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
          <p class="rkdf-section-desc">Comprehensive undergraduate and postgraduate science degrees aligned with UGC and NEP model curricula.</p>
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

    <!-- ==================== SCIENCE LABORATORIES & INSTRUMENTATION ==================== -->
    <div class="section-block" id="laboratories">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Research Ecosystem</span>
          <h3 class="rkdf-section-title">Precision Science Laboratories</h3>
          <p class="rkdf-section-desc">State-of-the-art laboratories equipped with modern spectrometers, laser benches, fume hoods, computational clusters, and biological testing equipment.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('microscope', 'w-3.5 h-3.5 text-gold') ?>
          <span>UGC Standard Facilities</span>
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
                <span>Key Instrumentation &amp; Setups:</span>
              </div>
              <p class="rkdf-lab-specs-text"><?= e($lab['specs']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== RESEARCH LINKAGES & RECRUITERS ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('flask-conical', 'w-4 h-4 text-gold') ?> Research Linkages &amp; Placements
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Scientific Organizations &amp; Industrial Linkages
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Our students and research scholars collaborate with premier scientific institutes, CSIR laboratories, pharmaceutical giants, and chemical R&amp;D centers for dissertations and placements.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">CSIR</div>
              <div class="rkdf-corporate-stat-lbl">NET / GATE Guidance</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Experimental Exposure</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">25+</div>
              <div class="rkdf-corporate-stat-lbl">Annual Seminars &amp; Talks</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Research &amp; Industry Partners</span>
            <span class="text-[10px] text-white/70 uppercase">R&amp;D Labs &amp; Pharma MNCs</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($institutions_and_partners as $partner): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($partner) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
              <span>Explore Research &amp; Fellowship Opportunities</span>
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
          Advance Your Career in Pure &amp; Applied Sciences
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for B.Sc (Hons), B.Sc IT, B.Sc Multimedia, and M.Sc degree programs in Physics, Chemistry, Mathematics, Biochemistry, Computer Science &amp; Environmental Science.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Direct Online Application
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Science Faculty Counseling
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Merit Scholarship Assistance
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
