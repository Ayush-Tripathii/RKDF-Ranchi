<?php
/**
 * RKDF University — Postgraduate (PG) Master Degree Programs Directory
 * Content Source: https://rkdfuniversity.org/courses/post-graduate-programs/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Postgraduate (PG) Master Programs — ' . SITE_NAME;
$page_meta_desc = 'Explore 30+ Postgraduate (PG) Master degree programs at RKDF University Ranchi. MBA (Dual, Logistics, Banking, Construction, Hotel), MCA, M.Sc (Sciences & Biotech), M.Com, M.A., LL.M, MSW, M.Lib with verified syllabus PDFs & corporate placements.';

$pg_categories = [
    [
        'category_name' => 'Management & Hospital Administration (Master Degrees)',
        'icon'          => 'briefcase',
        'programs'      => [
            [
                'title'       => 'Master of Business Administration (MBA)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'AICTE Approved · Dual Specialization',
                'desc'        => 'Flagship management master’s program offering dual specializations across Marketing, Finance, Human Resource Management, Information Technology, Operations, and Agri-Business.',
                'branches'    => ['Financial Management & FinTech', 'Marketing Management & Digital Strategy', 'Human Resource Management (HRM)', 'Production & Operations Mgmt', 'Agri-Business Management'],
                'eligibility' => 'Passed Bachelor Degree of minimum 3 years duration with at least 50% aggregate marks (45% for SC/ST/OBC category candidates) in any discipline.',
                'syllabus'    => 'documents/MBA.pdf',
                'detail_url'  => 'courses/mba.php'
            ],
            [
                'title'       => 'MBA in Sectoral Specializations (Logistics, Construction, Banking)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'High-Growth Sectoral Tracks',
                'desc'        => 'Industry-integrated sectoral MBA programs tailored for rapid career elevation in infrastructure, global supply chains, hotel chains, and banking.',
                'branches'    => ['MBA Banking & Financial Services', 'MBA Logistics & Supply Chain', 'MBA Construction Management', 'MBA Hotel Management & Tourism'],
                'eligibility' => 'Graduation in any discipline with at least 50% marks (45% for reserved categories).',
                'syllabus'    => 'documents/MBA-Logistics-Management.pdf',
                'detail_url'  => 'courses/mba.php'
            ],
            [
                'title'       => 'Master of Hospital Administration (MHA)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Healthcare Leadership',
                'desc'        => 'Comprehensive healthcare administration, clinical hospital management, biomedical waste protocols, health informatics, and NABH accreditation standards.',
                'branches'    => ['Hospital Operations & Administration', 'Healthcare Quality & NABH Compliance', 'Health Informatics & Telemedicine', 'Clinical Risk Management'],
                'eligibility' => 'Graduation in MBBS, BDS, B.Pharm, B.Sc Nursing, B.Sc Life Sciences, or any discipline with at least 50% marks.',
                'syllabus'    => 'documents/MHA-Syllabus.pdf',
                'detail_url'  => 'courses/mba.php'
            ],
            [
                'title'       => 'Master in Management Studies (MMS)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Executive Management',
                'desc'        => 'Rigorous corporate management and strategic enterprise consulting curriculum designed for budding leaders and managerial professionals.',
                'branches'    => ['Strategic Management', 'Global Business Operations', 'Financial Engineering', 'Organizational Leadership'],
                'eligibility' => 'Bachelor’s Degree in any discipline from a recognized University with minimum 50% aggregate marks.',
                'syllabus'    => 'documents/Master-in-Managment-Studies.pdf',
                'detail_url'  => 'courses/mba.php'
            ]
        ]
    ],
    [
        'category_name' => 'Computer Applications & Information Technology',
        'icon'          => 'cpu',
        'programs'      => [
            [
                'title'       => 'Master of Computer Application (MCA)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'AICTE Model Curriculum',
                'desc'        => 'Advanced software architecture, cloud virtualization (AWS/Azure), deep learning models, full-stack microservices, DevOps pipelines, and enterprise databases.',
                'branches'    => ['Full-Stack & Cloud Architecture', 'Artificial Intelligence & Machine Learning', 'Cyber Security & Forensics', 'Mobile & Distributed Systems'],
                'eligibility' => 'Passed BCA / Bachelor Degree in Computer Science Engineering or equivalent degree OR passed B.Sc. / B.Com. / B.A. with Mathematics at 10+2 level or Graduation Level with at least 50% marks (45% for reserved categories).',
                'syllabus'    => 'documents/MCA.pdf',
                'detail_url'  => 'courses/mca.php'
            ],
            [
                'title'       => 'M.Sc. in Computer Science',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Advanced Algorithms & AI',
                'desc'        => 'High-performance computing, advanced data structures, algorithmic graph theory, big data analytics, image processing, and neural network research.',
                'branches'    => ['Advanced Algorithm Design', 'Data Science & Big Data Analytics', 'Natural Language Processing', 'Network Security & Cryptography'],
                'eligibility' => 'B.Sc. in Computer Science / IT / BCA / B.Sc. with Mathematics with at least 50% aggregate marks.',
                'syllabus'    => 'documents/MSc-Computer-Science.pdf',
                'detail_url'  => 'courses/m-sc.php'
            ],
            [
                'title'       => 'Post Graduate Diploma in Computer Applications (PGDCA)',
                'duration'    => '1 Year · 2 Semesters',
                'badge'       => '1-Yr Professional Diploma',
                'desc'        => 'Accelerated postgraduate technical diploma covering programming in C++, Python, RDBMS (MySQL/Oracle), web technologies, and office automation.',
                'branches'    => ['Python Programming & Database Mgmt', 'Web Design & Frontend Development', 'Software Engineering Principles', 'Office Automation & MIS'],
                'eligibility' => 'Graduate in any stream from a recognized University with minimum 45% marks.',
                'syllabus'    => 'documents/PGDCA.pdf',
                'detail_url'  => 'courses/diploma-programs.php'
            ]
        ]
    ],
    [
        'category_name' => 'Sciences & Biosciences (M.Sc. Master Degrees)',
        'icon'          => 'microscope',
        'programs'      => [
            [
                'title'       => 'M.Sc. in Applied Physics',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Advanced Physical Sciences',
                'desc'        => 'Quantum mechanics, condensed matter physics, laser optics, nuclear physics, nanomaterials synthesis, and computational simulation.',
                'branches'    => ['Quantum Mechanics & Electrodynamics', 'Solid State Physics & Nanotechnology', 'Nuclear & Particle Physics', 'Optoelectronics & Laser Tech'],
                'eligibility' => 'B.Sc. with Physics Honours / Major with minimum 50% marks (45% for SC/ST/OBC).',
                'syllabus'    => 'documents/M.Sc_.-Physics.pdf',
                'detail_url'  => 'courses/m-sc.php'
            ],
            [
                'title'       => 'M.Sc. in Chemistry',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Synthetic & Analytical Labs',
                'desc'        => 'Advanced Organic Chemistry, Coordination Inorganic Chemistry, Thermodynamics, Spectroscopy (NMR, FTIR, UV-Vis), and Polymer Chemistry.',
                'branches'    => ['Organic Synthesis & Medicinal Chemistry', 'Inorganic & Coordination Chemistry', 'Physical Chemistry & Electrochemistry', 'Analytical Spectroscopic Methods'],
                'eligibility' => 'B.Sc. with Chemistry as Major / Honours subject with at least 50% aggregate marks.',
                'syllabus'    => 'documents/M.Sc_.-Chemistry.pdf',
                'detail_url'  => 'courses/m-sc.php'
            ],
            [
                'title'       => 'M.Sc. in Applied Mathematics',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Applied Mathematical Modeling',
                'desc'        => 'Advanced real and complex analysis, partial differential equations, mathematical statistics, operations research, topology, and MATLAB programming.',
                'branches'    => ['Differential Equations & Modeling', 'Numerical Methods & MATLAB', 'Optimization & Operations Research', 'Mathematical Statistics & Probability'],
                'eligibility' => 'B.Sc. with Mathematics Honours / Major with minimum 50% aggregate marks.',
                'syllabus'    => 'documents/M.Sc_.-Maths.pdf',
                'detail_url'  => 'courses/m-sc.php'
            ],
            [
                'title'       => 'M.Sc. in Biotechnology',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Genetic Engineering & Bioprocess',
                'desc'        => 'Recombinant DNA technology, bioprocess engineering, immunology, plant & animal tissue culture, bioinformatics, and downstream processing.',
                'branches'    => ['Genetic Engineering & CRISPR', 'Bioprocess & Fermentation Tech', 'Molecular Diagnostics & Immunology', 'Bioinformatics & Proteomics'],
                'eligibility' => 'B.Sc. in Biotechnology / Life Sciences / Microbiology / Botany / Zoology / Biochemistry with minimum 50% marks.',
                'syllabus'    => 'documents/MSc_Biotech_Syllabus_new.pdf',
                'detail_url'  => 'courses/m-sc.php'
            ],
            [
                'title'       => 'M.Sc. in Microbiology',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Clinical & Industrial Microbiology',
                'desc'        => 'Medical microbiology, virology, microbial physiology, fermentation technology, food microbiology, and environmental bioremediation.',
                'branches'    => ['Medical & Clinical Microbiology', 'Industrial Fermentation & Enzymes', 'Agricultural & Soil Microbiology', 'Virology & Antimicrobial Resistance'],
                'eligibility' => 'B.Sc. with Microbiology / Life Sciences / Biological Sciences with at least 50% aggregate marks.',
                'syllabus'    => 'documents/M.Sc-Microbiology-syllabus-2025.pdf',
                'detail_url'  => 'courses/m-sc.php'
            ],
            [
                'title'       => 'M.Sc. in Botany & Zoology',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Biodiversity & Ecological Research',
                'desc'        => 'Advanced plant systematics, developmental biology, animal physiology, entomology, conservation biology, and ecological genetics.',
                'branches'    => ['Plant Physiology & Phyto-Chemistry', 'Applied Entomology & Cytogenetics', 'Biodiversity Conservation & Ecology', 'Animal Physiology & Endocrinology'],
                'eligibility' => 'B.Sc. with Botany or Zoology as Honours / Major subject with minimum 50% aggregate marks.',
                'syllabus'    => 'documents/MSc_Botany_Syllabus.pdf',
                'detail_url'  => 'courses/m-sc.php'
            ],
            [
                'title'       => 'M.Sc. in Biochemistry & Environmental Science',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Molecular Bio-Analytics',
                'desc'        => 'Enzymology, clinical metabolism, environmental impact assessment, pollution control, toxicology, and renewable ecology.',
                'branches'    => ['Enzymology & Molecular Biochemistry', 'Clinical Diagnostics & Endocrinology', 'Environmental Impact Assessment (EIA)', 'Pollution Control & Renewable Ecology'],
                'eligibility' => 'B.Sc. in Life Sciences / Chemistry / Environmental Science / Biochemistry with at least 50% marks.',
                'syllabus'    => 'documents/MSC-Biochemistry-RKDF-UNIVERSITY-RANCHI.pdf',
                'detail_url'  => 'courses/m-sc.php'
            ]
        ]
    ],
    [
        'category_name' => 'Law, Commerce, Humanities, Social Work & Design',
        'icon'          => 'landmark',
        'programs'      => [
            [
                'title'       => 'Master of Laws (LL.M.)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'BCI Recognized Jurisprudence',
                'desc'        => 'Advanced legal research in Constitutional Law, Corporate & Commercial Laws, Criminal Jurisprudence, Intellectual Property Rights, and Cyber Regulations.',
                'branches'    => ['Constitutional & Administrative Law', 'Corporate & Commercial Law', 'Criminal Law & Criminology', 'Intellectual Property Rights'],
                'eligibility' => 'Passed LL.B. (3 Years) or Integrated 5-Year Law Degree (BA LL.B / BBA LL.B) from a recognized University with at least 50% marks (45% for SC/ST).',
                'syllabus'    => 'documents/Masters-of-Law-RKDF-UNIVERSITY-RANCHI.pdf',
                'detail_url'  => 'courses/law.php'
            ],
            [
                'title'       => 'Master of Commerce (M.Com)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Corporate Accounting & Tax',
                'desc'        => 'Advanced corporate financial reporting, GST & international taxation, security analysis, banking operations, and quantitative business research.',
                'branches'    => ['Advanced Corporate Accounting', 'Direct & Indirect Tax Laws (GST)', 'Security Analysis & Portfolio Mgmt', 'International Banking & Finance'],
                'eligibility' => 'Passed B.Com / B.Com (Hons) / BBA with minimum 50% aggregate marks (45% for reserved category).',
                'syllabus'    => 'documents/M.Com_.pdf',
                'detail_url'  => 'courses/m-com.php'
            ],
            [
                'title'       => 'Master of Arts (M.A. in Humanities)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => '8 Core Academic Disciplines',
                'desc'        => 'Comprehensive postgraduate curricula across English, Hindi, Political Science, Economics, History, Geography, Sociology, and Education.',
                'branches'    => ['M.A. English Literature', 'M.A. Political Science', 'M.A. Economics', 'M.A. History', 'M.A. Geography', 'M.A. Sociology', 'M.A. Hindi', 'M.A. Education'],
                'eligibility' => 'Graduation in respective subject or any discipline with minimum 50% aggregate marks (45% for SC/ST).',
                'syllabus'    => 'documents/MA-ECONOMICS.pdf',
                'detail_url'  => 'courses/ma.php'
            ],
            [
                'title'       => 'Master of Social Work (MSW)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'NGO & Community Development',
                'desc'        => 'Community organization, social policy, rural development, child & women welfare, psychiatric social work, and CSR program administration.',
                'branches'    => ['Community Development & Rural Action', 'Medical & Psychiatric Social Work', 'Human Resource Mgmt & CSR', 'Family & Child Welfare'],
                'eligibility' => 'Bachelor’s Degree in Social Work (BSW) or any discipline with at least 50% aggregate marks.',
                'syllabus'    => 'documents/MSW-SYLLABUS.pdf',
                'detail_url'  => 'courses/social-work.php'
            ],
            [
                'title'       => 'Master of Library & Information Science (M.Lib.I.Sc)',
                'duration'    => '1 Year · 2 Semesters',
                'badge'       => '1-Yr Fast-Track LIS',
                'desc'        => 'Digital library architecture, DSpace repositories, knowledge management, metadata standards, and automated Koha ILS operations.',
                'branches'    => ['Digital Libraries & Repositories', 'Information Retrieval & Metadata', 'Research Methodologies & Scientometrics', 'Advanced Library Automation'],
                'eligibility' => 'Passed B.Lib.I.Sc / B.Lib with at least 50% marks from a recognized University.',
                'syllabus'    => 'documents/MLib.pdf',
                'detail_url'  => 'courses/index.php'
            ],
            [
                'title'       => 'Master Degrees in Fashion & Interior Design (M.Sc / MA / MBA)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Creative Industry Leadership',
                'desc'        => 'Advanced haute couture, textile engineering, interior spatial architecture, CAD rendering, sustainable luxury design, and fashion business management.',
                'branches'    => ['M.Sc. Fashion Design', 'M.Sc. Interior Design', 'MA Fashion Design', 'MBA Fashion Business', 'MBA Interior Design'],
                'eligibility' => 'Bachelor’s Degree in Design, Fashion, Architecture, B.Sc., or any discipline with minimum 50% aggregate marks.',
                'syllabus'    => 'documents/fashion_mba.pdf',
                'detail_url'  => 'courses/fashion-designing.php'
            ]
        ]
    ]
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
      <span class="text-white/90">Postgraduate Programs (Master's)</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Postgraduate &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Master's Degrees</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Advance your qualifications with 30+ career-defining Master of Business Administration, Computer Application, Sciences, Law, Commerce, Humanities, Social Work, and Design degree tracks at RKDF University Ranchi.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('award') ?> 30+ Master's Degree Tracks
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> Corporate Placements &amp; Internships
      </span>
      <span class="hero-pill">
        <?= lucide_icon('file-text') ?> Official Syllabus PDF Downloads
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> UGC, BCI &amp; AICTE Compliant
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN PG CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <?php foreach ($pg_categories as $cat): ?>
      <div class="section-block">
        <div class="rkdf-section-header">
          <div>
            <span class="rkdf-section-tag">
              <?= lucide_icon($cat['icon'], 'w-3.5 h-3.5 text-gold') ?>
              <?= e($cat['category_name']) ?>
            </span>
            <h3 class="rkdf-section-title"><?= e($cat['category_name']) ?></h3>
          </div>
          <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
            <span>Apply for Master's</span>
            <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>

        <div class="rkdf-academic-grid">
          <?php foreach ($cat['programs'] as $prog): ?>
            <div class="rkdf-academic-card">
              <div>
                <div class="rkdf-prog-header">
                  <span class="rkdf-prog-badge">
                    <?= lucide_icon('award', 'w-3.5 h-3.5 text-amber-600 shrink-0') ?>
                    <?= e($prog['badge']) ?>
                  </span>
                  <span class="rkdf-duration-badge">
                    <?= lucide_icon('clock', 'w-3.5 h-3.5 text-gold shrink-0') ?>
                    <?= e($prog['duration']) ?>
                  </span>
                </div>

                <h4 class="rkdf-prog-title"><?= e($prog['title']) ?></h4>
                <p class="rkdf-prog-desc"><?= e($prog['desc']) ?></p>

                <!-- Specializations -->
                <div class="mb-6">
                  <div class="rkdf-spec-section-title">
                    <?= lucide_icon('layers', 'w-3.5 h-3.5 text-gold') ?>
                    <span>Curriculum Focus &amp; Specializations:</span>
                  </div>
                  <div class="flex flex-wrap gap-2 mt-2.5">
                    <?php foreach ($prog['branches'] as $b): ?>
                      <span class="px-2.5 py-1 text-[11px] font-medium text-slate-700 bg-slate-100 rounded-md border border-slate-200">
                        <?= e($b) ?>
                      </span>
                    <?php endforeach; ?>
                  </div>
                </div>

                <!-- Eligibility -->
                <div class="rkdf-eligibility-card mt-6">
                  <div class="rkdf-eligibility-header">
                    <?= lucide_icon('clipboard-check', 'w-3.5 h-3.5 text-amber-700') ?>
                    <span>Eligibility Criteria:</span>
                  </div>
                  <p class="rkdf-eligibility-text"><?= e($prog['eligibility']) ?></p>
                </div>
              </div>

              <!-- Footer with Syllabus Download & Apply Actions -->
              <div class="rkdf-prog-footer flex flex-wrap items-center justify-between gap-3 pt-4 border-t border-slate-100 mt-6">
                <?php if (!empty($prog['syllabus']) && file_exists(dirname(__DIR__) . '/' . $prog['syllabus'])): ?>
                  <a href="<?= url($prog['syllabus']) ?>" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-slate-100 text-slate-700 text-xs font-semibold hover:bg-emerald-50 hover:text-emerald-700 hover:border-emerald-200 border border-slate-200 transition">
                    <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-emerald-600') ?>
                    <span>Syllabus (PDF)</span>
                    <?= lucide_icon('download', 'w-3 h-3') ?>
                  </a>
                <?php endif; ?>

                <div class="flex items-center gap-2">
                  <?php if (!empty($prog['detail_url'])): ?>
                    <a href="<?= url($prog['detail_url']) ?>" class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-slate-100 text-brand text-xs font-semibold hover:bg-slate-200 transition">
                      <span>Details</span>
                      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
                    </a>
                  <?php endif; ?>
                  <a href="<?= url('admissions/') ?>" class="rkdf-apply-btn">
                    <span>Apply Now</span>
                    <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Admissions Open for 2026–27 Session</span>
        </div>
        <h3 class="rkdf-admission-title">
          Elevate Your Qualifications with RKDF Master Degrees
        </h3>
        <p class="rkdf-admission-desc">
          Direct applications open for graduates across India. Merit-based scholarship waivers, installment payment options, and placement mentorship available.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply Online Now</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Contact PG Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
