<?php
/**
 * RKDF University — Undergraduate (UG) Academic Programs
 * Content Source: https://rkdfuniversity.org/courses/under-graduate-programs/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Undergraduate (UG) Programs — ' . SITE_NAME;
$page_meta_desc = 'Explore Undergraduate (UG) degrees at RKDF University Ranchi. B.Tech, BCA, BBA, B.Pharm, BA LLB, B.Sc (Hons), B.Com, B.A. (Hons) programs with industry internships and modern laboratories.';

$ug_categories = [
    [
        'category_name' => 'Engineering & Computing',
        'icon'          => 'cpu',
        'programs'      => [
            [
                'title'       => 'Bachelor of Technology (B.Tech)',
                'duration'    => '4 Years · 8 Semesters',
                'badge'       => 'AICTE Approved',
                'desc'        => 'High-demand engineering degree offering specializations in Computer Science & Engineering, Mining Engineering, Civil Engineering, Mechanical Engineering, and Electrical & Electronics Engineering.',
                'branches'    => ['Computer Science & Engineering', 'Mining Engineering', 'Civil Engineering', 'Mechanical Engineering', 'Electrical & Electronics (EEE)'],
                'eligibility' => 'Passed 10+2 examination with Physics, Mathematics as compulsory subjects along with Chemistry/Biotech/Biology/Technical Vocational with at least 45% marks (40% for SC/ST/OBC).'
            ],
            [
                'title'       => 'Bachelor of Computer Application (BCA)',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Flagship Computing',
                'desc'        => 'Foundational computing degree covering software development, full-stack web engineering, database architecture, Python, Java, and modern mobile app design.',
                'branches'    => ['Full-Stack Web Development', 'Database & Cloud Architecture', 'AI & Python Programming', 'Cyber Security Basics'],
                'eligibility' => 'Passed 10+2 with Mathematics / Computer Science / IT as one of the subjects with at least 45% aggregate marks (40% for reserved category).'
            ],
            [
                'title'       => 'BCA Corporate (Industry Integrated)',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Corporate Track',
                'desc'        => 'Co-engineered with leading IT corporate partners, featuring live full-stack coding bootcamps, sprint simulations, DevOps workflows, and fast-track hiring drives.',
                'branches'    => ['DevOps & CI/CD Pipelines', 'MERN Full-Stack Specialization', 'Agile & Jira Simulations', 'Corporate Readiness Bootcamps'],
                'eligibility' => 'Passed 10+2 with minimum 50% marks (45% for SC/ST/OBC) with Mathematics/Computer Science/IT.'
            ],
            [
                'title'       => 'B.Sc. Information Technology (B.Sc IT)',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Applied Computing',
                'desc'        => 'Applied IT systems, object-oriented programming, network administration, database management, and cloud architecture.',
                'branches'    => ['Software Architecture', 'Network Security & Protocols', 'RDBMS & Data Systems', 'Web Scripting & APIs'],
                'eligibility' => 'Passed 10+2 with Science stream (Math/Physics/CS) with minimum 45% aggregate marks.'
            ],
        ]
    ],
    [
        'category_name' => 'Business, Commerce & Management',
        'icon'          => 'briefcase',
        'programs'      => [
            [
                'title'       => 'Bachelor of Business Administration (BBA)',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Management Core',
                'desc'        => 'Comprehensive business curriculum developing leadership in corporate marketing, human resources, financial management, business analytics, and entrepreneurship.',
                'branches'    => ['Marketing Management', 'Financial Management', 'Human Resource (HR)', 'Business Analytics & ERP'],
                'eligibility' => 'Passed 10+2 in any stream (Commerce, Science, Arts) from a recognized board with at least 45% aggregate marks (40% for reserved categories).'
            ],
            [
                'title'       => 'BBA in Logistics & Supply Chain Management',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Logistics Track',
                'desc'        => 'Specialized industry degree in freight forwarding, warehouse automation, EXIM procedures, supply chain analytics, and e-commerce distribution.',
                'branches'    => ['Supply Chain Strategy', 'Warehouse & Inventory Control', 'EXIM & Port Logistics', 'E-Commerce Fulfillment'],
                'eligibility' => 'Passed 10+2 from a recognized board in any stream with minimum 45% aggregate marks.'
            ],
            [
                'title'       => 'Bachelor of Commerce (B.Com / B.Com Corporate)',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Accounting & GST',
                'desc'        => 'Corporate accounting, income tax laws, GST filing, corporate auditing, company law, and computerized Tally Prime accounting.',
                'branches'    => ['Corporate Financial Accounting', 'GST & Income Tax Laws', 'Tally Prime ERP Systems', 'Auditing & Governance'],
                'eligibility' => 'Passed 10+2 examination with Commerce or allied subjects with at least 45% marks (40% for SC/ST/OBC).'
            ],
        ]
    ],
    [
        'category_name' => 'Pharmaceutical & Legal Studies',
        'icon'          => 'scale',
        'programs'      => [
            [
                'title'       => 'Bachelor of Pharmacy (B.Pharm)',
                'duration'    => '4 Years · 8 Semesters',
                'badge'       => 'PCI Approved',
                'desc'        => 'Professional pharmaceutical curriculum in medicinal chemistry, pharmacology, pharmaceutics, pharmacognosy, and pharmaceutical industrial analysis.',
                'branches'    => ['Pharmaceutics & Formulation', 'Pharmacology & Toxicology', 'Pharmaceutical Chemistry', 'Quality Assurance & Regulatory'],
                'eligibility' => 'Passed 10+2 examination with Physics and Chemistry as compulsory subjects along with Mathematics or Biology with at least 45% marks (40% for SC/ST).'
            ],
            [
                'title'       => 'B.A. LL.B. (5-Year Integrated Honours)',
                'duration'    => '5 Years · 10 Semesters',
                'badge'       => 'BCI Approved',
                'desc'        => 'Dual degree integrating liberal arts disciplines (Political Science, Sociology, History) with comprehensive legal jurisprudence, constitutional law, and moot court advocacy.',
                'branches'    => ['Constitutional Law', 'Criminal Jurisprudence', 'Corporate & Commercial Law', 'Moot Court Advocacy & Drafting'],
                'eligibility' => 'Passed 10+2 examination from a recognized Board with minimum 45% aggregate marks (42% for OBC, 40% for SC/ST).'
            ],
            [
                'title'       => 'BBA LL.B. (5-Year Integrated Honours)',
                'duration'    => '5 Years · 10 Semesters',
                'badge'       => 'BCI Approved',
                'desc'        => 'Integrated professional law degree blending corporate business administration, finance, and marketing with corporate law, mergers & acquisitions, and IPR.',
                'branches'    => ['Corporate Mergers & Acquisitions', 'Intellectual Property Rights (IPR)', 'Taxation & Banking Laws', 'International Commercial Arbitration'],
                'eligibility' => 'Passed 10+2 examination with at least 45% aggregate marks (42% for OBC, 40% for SC/ST).'
            ],
            [
                'title'       => 'Bachelor of Laws (LL.B. - 3 Years)',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'BCI Approved',
                'desc'        => 'Post-graduate professional law program designed for graduates aiming to enter judicial practice, corporate legal advisory, litigation, and public service.',
                'branches'    => ['Civil & Criminal Procedural Codes', 'Constitutional Law', 'Corporate Governance', 'Legal Aid & Trial Advocacy'],
                'eligibility' => 'Bachelor’s Degree in any discipline from a recognized University with at least 45% aggregate marks (42% for OBC, 40% for SC/ST).'
            ],
        ]
    ],
    [
        'category_name' => 'Pure, Applied & Life Sciences',
        'icon'          => 'microscope',
        'programs'      => [
            [
                'title'       => 'B.Sc. (Hons.) in Pure Sciences',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Physics · Chem · Math',
                'desc'        => 'Deep foundational study in Physics, Chemistry, and Mathematics structured for research excellence and national competitive exams.',
                'branches'    => ['Physics (Hons) with Laser Labs', 'Chemistry (Hons) with Synthesis Labs', 'Mathematics (Hons) with MATLAB', 'Computer Science (Hons)'],
                'eligibility' => 'Passed 10+2 with PCM (Physics, Chemistry, Math) with minimum 45% aggregate marks (40% for SC/ST).'
            ],
            [
                'title'       => 'B.Sc. (Hons.) in Life Sciences',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Biotech · Micro · Botany · Zoology',
                'desc'        => 'Hands-on biosciences degree covering recombinant DNA, microbiology, plant tissue culture, and animal physiology in sterile laboratories.',
                'branches'    => ['Biotechnology (Hons)', 'Microbiology (Hons)', 'Zoology (Hons)', 'Botany (Hons)'],
                'eligibility' => 'Passed 10+2 with Biology and Chemistry/Physics with minimum 45% marks (40% for SC/ST).'
            ],
        ]
    ],
    [
        'category_name' => 'Humanities, Media & Creative Design',
        'icon'          => 'palette',
        'programs'      => [
            [
                'title'       => 'B.A. (Hons.) in Humanities & Social Sciences',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Civil Services Track',
                'desc'        => 'Rigorous bachelor degrees in English Literature, Political Science, Economics, History, Geography, Sociology, Hindi, and Sanskrit.',
                'branches'    => ['English & Digital Phonetics', 'Political Science & Governance', 'Economics & Applied Policy', 'History, Geography & Sociology'],
                'eligibility' => 'Passed 10+2 examination in any stream from a recognized board with minimum 45% aggregate marks.'
            ],
            [
                'title'       => 'B.A. in Journalism & Mass Communication (BA-JMC)',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Broadcast & Media',
                'desc'        => 'Print reporting, TV news anchoring, digital video editing, radio broadcasting, advertising, and PR in commercial studios.',
                'branches'    => ['TV News Anchoring & Production', 'Digital Cinematography & Video Editing', 'Print & Web Journalism', 'Advertising & Public Relations'],
                'eligibility' => 'Passed 10+2 from a recognized board with at least 45% aggregate marks.'
            ],
            [
                'title'       => 'B.Sc. / B.A. in Fashion & Interior Design',
                'duration'    => '3 Years · 6 Semesters',
                'badge'       => 'Apparel & 3D Spatial',
                'desc'        => 'Haute couture garment construction, pattern drafting, residential interior design, 3D CAD modeling, and runway portfolio development.',
                'branches'    => ['Fashion Design & Garment Construction', 'Interior Spatial Design & 3D CAD', 'Textile Science & Printing', 'Fashion Merchandising'],
                'eligibility' => 'Passed 10+2 in any stream with minimum 45% aggregate marks.'
            ],
            [
                'title'       => 'Bachelor of Library Science (B.Lib / B.Lib.I.Sc)',
                'duration'    => '1 Year · 2 Semesters',
                'badge'       => 'Fast-Track Professional',
                'desc'        => 'Professional library classification (DDC 23), cataloging (AACR-2), and computerized Koha ILS automation.',
                'branches'    => ['Library Classification & Cataloging', 'Koha ILS Automation', 'Digital Repositories & DELNET', 'Information Sources'],
                'eligibility' => 'Graduation in any stream from a recognized University with minimum 45% aggregate marks.'
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
      <span class="text-white/90">Undergraduate Programs (UG)</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Undergraduate <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Degrees (UG)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Transform your career foundation through industry-approved bachelor's degrees across engineering, computing, management, law, pharmacy, pure sciences, and humanities.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('graduation-cap') ?> 50+ Bachelor Majors
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> AICTE, BCI &amp; PCI Approved
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> Mandatory Industry Internships
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> Merit Scholarships for 10+2
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN UG CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <?php foreach ($ug_categories as $cat): ?>
      <div class="section-block">
        <div class="rkdf-section-header">
          <div>
            <span class="rkdf-section-tag">
              <?= lucide_icon($cat['icon'], 'w-3.5 h-3.5 text-gold') ?>
              <?= e($cat['category_name']) ?>
            </span>
            <h3 class="rkdf-section-title"><?= e($cat['category_name']) ?> Programs</h3>
          </div>
          <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
            <span>Apply UG</span>
            <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>

        <div class="rkdf-academic-grid">
          <?php foreach ($cat['programs'] as $prog): ?>
            <div class="rkdf-academic-card">
              <div>
                <div class="rkdf-prog-header">
                  <span class="rkdf-prog-badge">
                    <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-amber-600 shrink-0') ?>
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
                    <span>Specialization Disciplines:</span>
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
          Secure Your Seat in RKDF Undergraduate Programs
        </h3>
        <p class="rkdf-admission-desc">
          Direct online applications open for 10+2 science, commerce, and arts students. Avail merit scholarships, hostel accommodation, and campus bus facilities.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply Online Now</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Get Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
