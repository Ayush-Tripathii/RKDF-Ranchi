<?php
/**
 * RKDF University — Diploma & Polytechnic Academic Programs
 * Content Source: https://rkdfuniversity.org/courses/diploma-programs/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Diploma & Polytechnic Programs — ' . SITE_NAME;
$page_meta_desc = 'Explore 3-Year Polytechnic Engineering Diplomas, D.Pharm (PCI Approved), PGDCA & PG Diplomas at RKDF University Ranchi. Practical workshop training and direct lateral entry options.';

$diploma_categories = [
    [
        'category_name' => 'Polytechnic Engineering Diplomas',
        'icon'          => 'wrench',
        'programs'      => [
            [
                'title'       => 'Diploma in Mining Engineering',
                'duration'    => '3 Years (Lateral Entry: 2 Years)',
                'badge'       => 'AICTE Approved · Heavy Industry',
                'desc'        => 'Hands-on practical training in underground and opencast mining methods, blasting technology, mine ventilation, mineral exploration, mine machinery, and statutory DGMS safety norms.',
                'branches'    => ['Opencast & Underground Mining', 'Mine Ventilation & Safety Gas Testing', 'Drilling, Blasting & Explosives', 'Mineral Surveying & Heavy Machinery'],
                'eligibility' => 'Passed 10th Standard / Matriculation with Science and Mathematics with minimum 35% marks. For Lateral Entry to 2nd Year: 10+2 with Science/Vocational or 2-year ITI.'
            ],
            [
                'title'       => 'Diploma in Civil Engineering',
                'duration'    => '3 Years (Lateral Entry: 2 Years)',
                'badge'       => 'Infrastructure & Construction',
                'desc'        => 'Surveying, building materials, concrete technology, structural drafting in AutoCAD, soil mechanics, and site project estimation.',
                'branches'    => ['Building Construction & Technology', 'Total Station & Land Surveying', 'Hydraulics & Water Engineering', 'AutoCAD Drafting & Estimating'],
                'eligibility' => 'Passed 10th / SSC examination with at least 35% aggregate marks. (Lateral Entry: 10+2 Science/Vocational or ITI 2 Yrs).'
            ],
            [
                'title'       => 'Diploma in Mechanical Engineering',
                'duration'    => '3 Years (Lateral Entry: 2 Years)',
                'badge'       => 'Automotive & Manufacturing',
                'desc'        => 'Machining operations, CNC programming, thermodynamics, fluid machinery, manufacturing processes, and mechanical drafting.',
                'branches'    => ['Workshop Technology & Machine Tools', 'Thermodynamics & Power Engineering', 'Automobile Engineering & Maintenance', 'CNC Programming & CAD/CAM'],
                'eligibility' => 'Passed 10th Standard with minimum 35% marks. (Lateral Entry: 10+2 Vocational/Science or ITI).'
            ],
            [
                'title'       => 'Diploma in Electrical Engineering',
                'duration'    => '3 Years (Lateral Entry: 2 Years)',
                'badge'       => 'Power & Energy Systems',
                'desc'        => 'Electrical machines, power generation, transmission, distribution, switchgear protection, and industrial electrical wiring.',
                'branches'    => ['AC/DC Electrical Machines & Transformers', 'Power Transmission & Substation Ops', 'Control Systems & Switchgear', 'Industrial Electrical Installations'],
                'eligibility' => 'Passed 10th Standard with minimum 35% marks. (Lateral Entry: 10+2 Science or ITI Electrician).'
            ],
            [
                'title'       => 'Diploma in Computer Science & Engineering',
                'duration'    => '3 Years (Lateral Entry: 2 Years)',
                'badge'       => 'Computing & Hardware',
                'desc'        => 'Computer hardware maintenance, networking protocols, programming in C/Python, database operations, and web development.',
                'branches'    => ['Programming in C & Python', 'Computer Hardware & Network Admin', 'Database Management (SQL)', 'Web Technology & Scripting'],
                'eligibility' => 'Passed 10th Standard examination with at least 35% aggregate marks.'
            ],
        ]
    ],
    [
        'category_name' => 'Healthcare & Post-Graduate Diplomas',
        'icon'          => 'heart-pulse',
        'programs'      => [
            [
                'title'       => 'Diploma in Pharmacy (D.Pharm)',
                'duration'    => '2 Years (Annual Examination)',
                'badge'       => 'PCI Approved · Registered Pharmacist',
                'desc'        => 'Statutory PCI-approved diploma preparing candidates for licensed community pharmacy practice, clinical dispensary management, hospital pharmacies, and pharma manufacturing.',
                'branches'    => ['Pharmaceutics & Dispensing Lab', 'Pharmaceutical Chemistry & Analysis', 'Pharmacology & Toxicology', 'Hospital & Clinical Pharmacy'],
                'eligibility' => 'Passed 10+2 examination with Physics, Chemistry as compulsory subjects along with Mathematics or Biology from a recognized board.'
            ],
            [
                'title'       => 'Post Graduate Diploma in Computer Applications (PGDCA)',
                'duration'    => '1 Year · 2 Semesters',
                'badge'       => 'Skill Certification',
                'desc'        => 'Postgraduate computer proficiency program covering database administration, MS Office advanced analytics, programming logic, web scripting, and IT operations.',
                'branches'    => ['Advanced Office Automation & MIS', 'Programming in Python & C++', 'Database Management (RDBMS)', 'Web Designing & Frontend Tools'],
                'eligibility' => 'Graduation in any discipline from a recognized University with minimum 45% aggregate marks (40% for reserved category).'
            ],
            [
                'title'       => 'Post Graduate Diploma in Fashion / Interior Design',
                'duration'    => '1 Year · 2 Semesters',
                'badge'       => 'Creative Fast-Track',
                'desc'        => 'Accelerated professional diploma in apparel styling, garment draping, residential space planning, 3D CAD modeling, and portfolio development.',
                'branches'    => ['Garment Construction & Draping', 'Spatial Interior CAD Modeling', 'Surface Ornamentation & Textiles', 'Commercial Portfolio Development'],
                'eligibility' => 'Bachelor’s Degree in any discipline from a recognized University.'
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
      <span class="text-white/90">Diploma Programs</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Diploma &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Polytechnic Programs</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Practical skill-oriented diploma and professional post-graduate diploma programs designed for rapid entry into core manufacturing, mining, healthcare, IT, and design industries.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('wrench') ?> 3-Year Polytechnic Engineering
      </span>
      <span class="hero-pill">
        <?= lucide_icon('heart-pulse') ?> PCI Approved D.Pharm
      </span>
      <span class="hero-pill">
        <?= lucide_icon('arrow-right') ?> Direct Lateral Entry to 2nd Year
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 100% Workshop &amp; Lab Practical
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN DIPLOMA CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <?php foreach ($diploma_categories as $cat): ?>
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
            <span>Apply Diploma</span>
            <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>

        <div class="rkdf-academic-grid">
          <?php foreach ($cat['programs'] as $prog): ?>
            <div class="rkdf-academic-card">
              <div>
                <div class="rkdf-prog-header">
                  <span class="rkdf-prog-badge">
                    <?= lucide_icon('wrench', 'w-3.5 h-3.5 text-amber-600 shrink-0') ?>
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
                    <span>Key Technical Modules:</span>
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
          Start Your Technical Career with RKDF Polytechnic &amp; Diplomas
        </h3>
        <p class="rkdf-admission-desc">
          Direct applications open for 10th pass, 10+2 science, and ITI holders. Hands-on heavy machinery training, mine safety gas testing, and pharmacy dispensary practicals.
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
