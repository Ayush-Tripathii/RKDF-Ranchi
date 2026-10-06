<?php
/**
 * RKDF University — Postgraduate (PG) Academic Programs
 * Content Source: https://rkdfuniversity.org/courses/post-graduate-programs/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Postgraduate (PG) Programs — ' . SITE_NAME;
$page_meta_desc = 'Explore Postgraduate (PG) Master degree programs at RKDF University Ranchi. MBA, MCA, M.Tech, M.Sc, M.Com, M.A., LL.M degrees with high-impact research, corporate internships & corporate placements.';

$pg_categories = [
    [
        'category_name' => 'Management & Computing Master Degrees',
        'icon'          => 'briefcase',
        'programs'      => [
            [
                'title'       => 'Master of Business Administration (MBA)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'AICTE Approved · Dual Specialization',
                'desc'        => 'Flagship management master’s program offering dual specializations across Marketing, Finance, Human Resource Management, Information Technology, Production & Operations, and Agri-Business.',
                'branches'    => ['Financial Management & FinTech', 'Marketing Management & Digital Strategy', 'Human Resource Management (HRM)', 'Production & Operations Mgmt', 'Agri-Business Management'],
                'eligibility' => 'Passed Bachelor Degree of minimum 3 years duration with at least 50% aggregate marks (45% for SC/ST/OBC category candidates) in any discipline.'
            ],
            [
                'title'       => 'Master of Computer Application (MCA)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'AICTE Model Curriculum',
                'desc'        => 'Advanced software architecture, cloud virtualization (AWS/Azure), deep learning models, full-stack microservices, and enterprise database systems.',
                'branches'    => ['Full-Stack & Cloud Architecture', 'Artificial Intelligence & Machine Learning', 'Cyber Security & Forensics', 'Mobile & Distributed Systems'],
                'eligibility' => 'Passed BCA / Bachelor Degree in Computer Science Engineering or equivalent degree OR passed B.Sc. / B.Com. / B.A. with Mathematics at 10+2 level or Graduation Level with at least 50% marks (45% for reserved categories).'
            ],
            [
                'title'       => 'Master of Technology (M.Tech)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Advanced Engineering',
                'desc'        => 'Advanced master of engineering curriculum in Computer Science, Mining Technology, Structural Engineering, Thermal Engineering, and Power Systems.',
                'branches'    => ['Computer Science & Engineering', 'Mining Engineering & Safety', 'Structural & Civil Engineering', 'Thermal & Design Engineering'],
                'eligibility' => 'Passed B.E. / B.Tech. in relevant engineering branch with minimum 50% marks (45% for reserved category).'
            ],
        ]
    ],
    [
        'category_name' => 'Sciences & Biosciences Master Degrees',
        'icon'          => 'microscope',
        'programs'      => [
            [
                'title'       => 'M.Sc. in Pure & Applied Sciences',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'CSIR-NET / GATE Prep',
                'desc'        => 'Advanced theoretical and laboratory research in Applied Physics, Chemistry, Applied Mathematics, and Computer Science with high-speed computing and laser equipment.',
                'branches'    => ['Applied Physics (Quantum & Materials)', 'Chemistry (Organic & Coordination)', 'Applied Mathematics (Modeling & MATLAB)', 'Computer Science (AI & Big Data)'],
                'eligibility' => 'B.Sc. with respective subject as Major / Honours / Core with at least 50% aggregate marks (45% for SC/ST/OBC).'
            ],
            [
                'title'       => 'M.Sc. in Life Sciences & Biotechnology',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Biosciences Thrust',
                'desc'        => 'Integrative biological sciences covering recombinant DNA technology, microbial genetics, clinical biochemistry, plant tissue culture, and animal physiology.',
                'branches'    => ['M.Sc. Biotechnology', 'M.Sc. Microbiology', 'M.Sc. Zoology', 'M.Sc. Botany', 'M.Sc. Biochemistry', 'M.Sc. Environmental Science'],
                'eligibility' => 'B.Sc. in Biological Sciences / Life Sciences / Biotech / Micro / Botany / Zoology with minimum 50% aggregate marks.'
            ],
        ]
    ],
    [
        'category_name' => 'Law, Commerce, Humanities & Media',
        'icon'          => 'landmark',
        'programs'      => [
            [
                'title'       => 'Master of Laws (LL.M.)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'BCI Recognized',
                'desc'        => 'Postgraduate jurisprudence in Constitutional Law, Corporate & Commercial Laws, Criminal Law, Cyber Law, and Comparative Constitutionalism.',
                'branches'    => ['Constitutional & Administrative Law', 'Corporate & Commercial Law', 'Criminal Law & Criminology', 'Intellectual Property Rights'],
                'eligibility' => 'Passed LL.B. (3 Years) or Integrated 5-Year Law Degree (BA LL.B / BBA LL.B) from a recognized University with at least 50% marks (45% for SC/ST).'
            ],
            [
                'title'       => 'Master of Commerce (M.Com)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Corporate Finance & Tax',
                'desc'        => 'Advanced corporate accounting, international financial reporting standards (IFRS), corporate taxation, financial modeling, and security portfolio analytics.',
                'branches'    => ['Corporate Financial Accounting', 'Direct & Indirect Tax Laws (GST)', 'Security Analysis & Valuation', 'International Trade & Forex'],
                'eligibility' => 'Passed B.Com / B.Com (Hons) / BBA with minimum 50% aggregate marks (45% for reserved category).'
            ],
            [
                'title'       => 'Master of Arts (M.A. in Humanities)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Civil Services Alignment',
                'desc'        => 'Postgraduate literary criticism, political thought, international relations, econometrics, world history, geography GIS mapping, and sociology.',
                'branches'    => ['M.A. English Literature', 'M.A. Political Science', 'M.A. Economics', 'M.A. History', 'M.A. Geography', 'M.A. Sociology', 'M.A. Education'],
                'eligibility' => 'Graduation in respective subject or any discipline with minimum 50% aggregate marks (45% for SC/ST).'
            ],
            [
                'title'       => 'M.A. in Journalism & Mass Communication (MA-JMC)',
                'duration'    => '2 Years · 4 Semesters',
                'badge'       => 'Media Leadership',
                'desc'        => 'Television production, investigative journalism, digital media strategy, advertising campaign design, and corporate communication in 4K studios.',
                'branches'    => ['Electronic Media & Broadcast TV', 'Investigative & Development Journalism', 'Digital Media Strategy & PR', 'Communication Research'],
                'eligibility' => 'Bachelor’s Degree in any discipline from a recognized University with at least 50% marks (45% for SC/ST/OBC).'
            ],
            [
                'title'       => 'Master of Library & Information Science (M.Lib / M.Lib.I.Sc)',
                'duration'    => '1 Year · 2 Semesters',
                'badge'       => '1-Yr Fast-Track LIS',
                'desc'        => 'Digital library architecture, DSpace repositories, knowledge management, metadata standards, and automated Koha ILS operations.',
                'branches'    => ['Digital Libraries & Repositories', 'Information Retrieval & Metadata', 'Research Methodologies & Scientometrics', 'Advanced Library Automation'],
                'eligibility' => 'Passed B.Lib.I.Sc / B.Lib with at least 50% marks from a recognized University.'
            ],
        ]
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
      <span class="text-white/90">Postgraduate Programs (PG)</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Postgraduate <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Degrees (PG)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Advance your career into executive leadership, technical innovation, and scholarly excellence through 2-year Master of Business Administration, Computer Application, Engineering, Sciences, Law, and Humanities programs.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('award') ?> 30+ Master's Degrees
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> Corporate Placements &amp; Internships
      </span>
      <span class="hero-pill">
        <?= lucide_icon('microscope') ?> Research &amp; Dissertation Support
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> UGC &amp; Statutory Regulatory Approvals
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
            <span>Apply PG</span>
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
                    <span>Advanced Specializations:</span>
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

              <!-- Footer -->
              <div class="rkdf-prog-footer">
                <span class="rkdf-accred-badge">
                  <?= lucide_icon('shield-check', 'w-4 h-4 text-emerald-600') ?>
                  Admissions Open
                </span>
                <a href="<?= url('admissions/') ?>" class="rkdf-apply-btn">
                  <span>Apply Online</span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
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
