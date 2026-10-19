<?php
/**
 * RKDF University — Undergraduate (UG) Academic Programs Directory
 * Content Source: https://rkdfuniversity.org/courses/under-graduate-programs/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Undergraduate (UG) Degree Programs (All Disciplines) — ' . SITE_NAME;
$page_meta_desc = 'Explore all Undergraduate (UG) bachelor degree programs at RKDF University Ranchi. BBA, B.Tech, BCA, B.Sc (Hons), B.Com, B.A. (Hons), B.Pharm, and Law with detailed fees, syllabus, and admission criteria.';

$ug_categories = [
    [
        'category_name' => 'Engineering & Technology (B.Tech Degrees)',
        'tag'           => 'Faculty of Engineering & Technology',
        'icon'          => 'cpu',
        'courses'       => [
            [
                'name'     => 'B.Tech in Computer Science & Engineering (CSE)',
                'href'     => 'courses/b-tech-computer-science-engineering.php',
                'badge'    => 'AICTE Approved',
                'duration' => '4 Years · 8 Semesters',
                'desc'     => 'Comprehensive computer science covering algorithms, cloud computing, artificial intelligence, and full-stack software development.'
            ],
            [
                'name'     => 'B.Tech in Civil Engineering',
                'href'     => 'courses/b-tech-civil-engineering.php',
                'badge'    => 'AICTE Approved',
                'duration' => '4 Years · 8 Semesters',
                'desc'     => 'Structural engineering, transportation systems, geotechnical surveying, and sustainable civil infrastructure planning.'
            ],
            [
                'name'     => 'B.Tech in Mechanical Engineering',
                'href'     => 'courses/b-tech-mechanical-engineering.php',
                'badge'    => 'AICTE Approved',
                'duration' => '4 Years · 8 Semesters',
                'desc'     => 'Thermodynamics, fluid mechanics, CNC robotics, CAD/CAM design, and modern automotive manufacturing systems.'
            ],
            [
                'name'     => 'B.Tech in Electrical & Electronics Engineering (EEE)',
                'href'     => 'courses/b-tech-electrical-electronics-engineering.php',
                'badge'    => 'AICTE Approved',
                'duration' => '4 Years · 8 Semesters',
                'desc'     => 'Power generation and transmission, smart microgrids, industrial control systems, and embedded hardware.'
            ],
            [
                'name'     => 'B.Tech in Mining Engineering',
                'href'     => 'courses/b-tech-mining-engineering.php',
                'badge'    => 'AICTE Approved',
                'duration' => '4 Years · 8 Semesters',
                'desc'     => 'Opencast and underground mining methods, mineral exploration, mine ventilation safety, and DGMS standards.'
            ],
        ]
    ],
    [
        'category_name' => 'Computer Applications & Information Technology',
        'tag'           => 'Faculty of Information Technology',
        'icon'          => 'laptop',
        'courses'       => [
            [
                'name'     => 'Bachelor of Computer Application (BCA)',
                'href'     => 'courses/bachelor-of-computer-application.php',
                'badge'    => 'UGC Aligned',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => 'Foundational computer applications, database management systems, full-stack web tech, and programming languages.'
            ],
            [
                'name'     => 'BCA (Corporate Specialization)',
                'href'     => 'courses/bca-corporate.php',
                'badge'    => 'Industry Aligned',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => 'Corporate-mentored software tracks, live enterprise apprenticeships, agile development, and emerging frameworks.'
            ],
            [
                'name'     => 'B.Sc. in Information Technology (B.Sc. IT)',
                'href'     => 'courses/under-graduate-programs/b-sc/bsc-information-technology-rkdf-university-ranchi.php',
                'badge'    => 'IT Excellence',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Networking engineering, cloud virtualization, enterprise systems administration, and cyber security principles.'
            ],
            [
                'name'     => 'B.Sc. in Multimedia & Animation',
                'href'     => 'courses/b-sc-multimedia.php',
                'badge'    => 'Creative Media',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => '3D digital animation, visual effects (VFX), video game asset art, digital compositing, and dynamic motion graphics.'
            ],
        ]
    ],
    [
        'category_name' => 'Management & Commerce',
        'tag'           => 'Faculty of Management & Commerce',
        'icon'          => 'briefcase',
        'courses'       => [
            [
                'name'     => 'Bachelor of Business Administration (BBA)',
                'href'     => 'courses/bba.php',
                'badge'    => 'UGC Recognized',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => 'Core management principles, business analytics, organizational behavior, marketing strategies, and managerial accounting.'
            ],
            [
                'name'     => 'BBA (Corporate Specialization)',
                'href'     => 'courses/bba-in-corporate.php',
                'badge'    => 'Corporate Track',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => 'Intensive corporate grooming, business communication, live industry internships, and leadership case competitions.'
            ],
            [
                'name'     => 'BBA in Hotel Management',
                'href'     => 'courses/bba-hotel-management.php',
                'badge'    => 'Hospitality & Tourism',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => 'Hospitality operations, guest relations, food & beverage services, culinary arts, and international tourism marketing.'
            ],
            [
                'name'     => 'Bachelor of Management Studies (BMS)',
                'href'     => 'courses/bachelor-of-management-studies-bms.php',
                'badge'    => 'Strategic Leadership',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => 'Strategic business modeling, quantitative managerial economics, corporate project appraisal, and supply chains.'
            ],
            [
                'name'     => 'Bachelor of Commerce (B.Com General)',
                'href'     => 'courses/b-com.php',
                'badge'    => 'UGC Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Financial accounting, corporate taxation laws, auditing practices, mercantile jurisprudence, and banking institutions.'
            ],
            [
                'name'     => 'B.Com (Corporate Specialization)',
                'href'     => 'courses/under-graduate-programs/b-com/b-com-corporate.php',
                'badge'    => 'Corporate Accounting',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Corporate compliance, managerial accounting, financial reporting standards (IFRS), and taxation software.'
            ],
        ]
    ],
    [
        'category_name' => 'Pharmacy & Healthcare Sciences',
        'tag'           => 'School of Pharmaceutical Sciences',
        'icon'          => 'pill',
        'courses'       => [
            [
                'name'     => 'Bachelor of Pharmacy (B.Pharm)',
                'href'     => 'courses/bachelor-of-pharmacy-b-pharma.php',
                'badge'    => 'PCI Approved',
                'duration' => '4 Years · 8 Semesters',
                'desc'     => 'Pharmaceutics, medicinal chemistry, pharmacology, pharmacognosy, quality assurance, and hospital clinical pharmacy.'
            ],
        ]
    ],
    [
        'category_name' => 'Law & Legal Studies',
        'tag'           => 'School of Law & Legal Studies',
        'icon'          => 'scale',
        'courses'       => [
            [
                'name'     => 'B.A. LL.B (5-Year Integrated Honors)',
                'href'     => 'courses/llb-ba.php',
                'badge'    => 'BCI Approved',
                'duration' => '5 Years · 10 Semesters',
                'desc'     => 'Integrated arts and legal curriculum covering constitutional, criminal, corporate, intellectual property, and international law.'
            ],
            [
                'name'     => 'BBA LL.B (5-Year Integrated Honors)',
                'href'     => 'courses/bba-llb.php',
                'badge'    => 'BCI Approved',
                'duration' => '5 Years · 10 Semesters',
                'desc'     => 'Corporate jurisprudence combining business management with commercial arbitration, cyber law, and trade regulations.'
            ],
            [
                'name'     => 'Bachelor of Laws (LL.B 3-Year)',
                'href'     => 'courses/bachelor-of-laws-llb.php',
                'badge'    => 'BCI Approved',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => 'Professional graduate law degree featuring simulated moot court competitions, legal aid clinics, and bar council training.'
            ],
        ]
    ],
    [
        'category_name' => 'Basic & Applied Sciences (B.Sc. Honors)',
        'tag'           => 'School of Basic & Applied Sciences',
        'icon'          => 'flask-conical',
        'courses'       => [
            [
                'name'     => 'B.Sc. (Hons) in Physics',
                'href'     => 'courses/under-graduate-programs/b-sc/b-sc-hons.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Classical mechanics, quantum electrodynamics, solid-state materials, mathematical physics, and optics laboratory.'
            ],
            [
                'name'     => 'B.Sc. (Hons) in Chemistry',
                'href'     => 'courses/under-graduate-programs/b-sc/b-sc-in-ranchi-fees-admission-2026-rkdf-university.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Organic synthesis, inorganic coordination chemistry, spectroscopy, kinetics, and advanced analytical chromatography.'
            ],
            [
                'name'     => 'B.Sc. (Hons) in Mathematics',
                'href'     => 'courses/under-graduate-programs/b-sc/b-sc-in-ranchi-fees-admission-2026-rkdf-university-2.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Abstract algebra, real and complex analysis, differential equations, calculus, and computational mathematical modeling.'
            ],
            [
                'name'     => 'B.Sc. (Hons) in Botany',
                'href'     => 'courses/under-graduate-programs/b-sc/b-sc-in-ranchi-fees-admission-2026-rkdf-university-3.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Plant physiology, angiosperm taxonomy, phytochemistry, plant genetics, agricultural biotechnology, and ecology.'
            ],
            [
                'name'     => 'B.Sc. (Hons) in Zoology & Animal Science',
                'href'     => 'courses/under-graduate-programs/b-sc/b-sc-hons-in-zoology.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Animal physiology, comparative vertebrate anatomy, evolutionary biology, immunology, and wildlife conservation.'
            ],
            [
                'name'     => 'B.Sc. (Hons) in Biotechnology',
                'href'     => 'courses/under-graduate-programs/b-sc/b-sc-hons-in-biotechnology.php',
                'badge'    => 'Research Focused',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Recombinant DNA technology, genetic engineering, industrial fermentation, molecular biology, and bioinformatics.'
            ],
            [
                'name'     => 'B.Sc. (Hons) in Microbiology',
                'href'     => 'courses/under-graduate-programs/b-sc/b-sc-hons-in-microbiology.php',
                'badge'    => 'Lab Oriented',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Bacteriology, medical virology, industrial microbial enzymology, microbial genetics, and pathogen diagnostics.'
            ],
            [
                'name'     => 'B.Sc. (Hons) in Biochemistry',
                'href'     => 'courses/under-graduate-programs/b-sc/b-sc-biochemistry-in-ranchi-admission-2026-rkdf-university.php',
                'badge'    => 'Lab Oriented',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Clinical enzymology, metabolic pathways, cellular bioenergetics, biomolecules, and biochemical assay instrumentation.'
            ],
            [
                'name'     => 'B.Sc. in Life Sciences (General)',
                'href'     => 'courses/b-sc.php',
                'badge'    => 'General Sciences',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Broad multidisciplinary foundational life sciences curriculum adhering to NEP 2020 flexible credit choice standards.'
            ],
        ]
    ],
    [
        'category_name' => 'Arts, Humanities & Social Sciences',
        'tag'           => 'School of Arts & Humanities',
        'icon'          => 'book-open',
        'courses'       => [
            [
                'name'     => 'Bachelor of Arts (B.A. General)',
                'href'     => 'courses/ba-bachelor-of-arts.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Multidisciplinary liberal arts studies covering Indian society, philosophy, global literature, and contemporary history.'
            ],
            [
                'name'     => 'B.A. (Hons) in English',
                'href'     => 'courses/ba-hons-in-english.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'British and postcolonial English literature, phonetics, literary criticism, rhetoric, and creative writing.'
            ],
            [
                'name'     => 'B.A. (Hons) in Hindi',
                'href'     => 'courses/ba-hons-in-hindi.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Classical and modern Hindi prose, poetry, philology, translation methodologies, and media communication.'
            ],
            [
                'name'     => 'B.A. (Hons) in History',
                'href'     => 'courses/ba-hons-in-history.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Ancient, medieval, and modern Indian historical narrative, archaeological research, and world civilizations.'
            ],
            [
                'name'     => 'B.A. (Hons) in Political Science',
                'href'     => 'courses/ba-hons-in-political-science.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Political theory, constitutional governance, international geopolitics, comparative politics, and public administration.'
            ],
            [
                'name'     => 'B.A. (Hons) in Economics',
                'href'     => 'courses/ba-hons-in-economics.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Microeconomics, macroeconomic models, quantitative econometrics, public finance, and Indian economic policy.'
            ],
            [
                'name'     => 'B.A. (Hons) in Sociology',
                'href'     => 'courses/ba-hons-in-sociology.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Sociological theories, social stratification, tribal sociology in Jharkhand, research methods, and social development.'
            ],
            [
                'name'     => 'B.A. (Hons) in Geography',
                'href'     => 'courses/ba-hons-in-geography.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Physical geography, geomorphology, cartographic projection, GIS computer mapping, and human demographic geography.'
            ],
            [
                'name'     => 'B.A. (Hons) in Education',
                'href'     => 'courses/ba-hons-in-education.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Educational psychology, philosophical foundations of pedagogy, curriculum evaluation, and student counseling.'
            ],
            [
                'name'     => 'B.A. (Hons) in Bengali',
                'href'     => 'courses/ba-hons-in-bengali.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Bengali literature classics, Rabindranath Tagore studies, modern linguistics, theatrical drama, and poetry.'
            ],
            [
                'name'     => 'B.A. (Hons) in Sanskrit',
                'href'     => 'courses/ba-hons-sanskrit.php',
                'badge'    => 'NEP Aligned',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Vedic and classical Sanskrit literature, Paninian grammar, ancient poetics, and Indian philosophical systems.'
            ],
            [
                'name'     => 'Bachelor of Social Work (BSW)',
                'href'     => 'courses/bachelor-of-social-work-b-s-w.php',
                'badge'    => 'Community Practice',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => 'Community development, rural welfare fieldwork, NGO management, human rights protection, and counseling casework.'
            ],
        ]
    ],
    [
        'category_name' => 'Design, Media & Library Sciences',
        'tag'           => 'Design, Media & Library Studies',
        'icon'          => 'palette',
        'courses'       => [
            [
                'name'     => 'B.A. / B.Sc. in Fashion Design',
                'href'     => 'courses/ba-fashion-design.php',
                'badge'    => 'Creative Arts',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Garment construction, textile science, fashion illustration, digital CAD apparel design, and runway portfolio work.'
            ],
            [
                'name'     => 'B.Sc. in Interior Design',
                'href'     => 'courses/b-sc-interior-design-in-ranchi-admission-2026-rkdf-university.php',
                'badge'    => 'Space Design',
                'duration' => '3 / 4 Years (NEP)',
                'desc'     => 'Architectural interior spaces, 3D AutoCAD modeling, lighting, furniture ergonomics, and residential acoustics.'
            ],
            [
                'name'     => 'BA in Journalism & Mass Communication (BJMC)',
                'href'     => 'courses/ba-in-journalism-mass-communication.php',
                'badge'    => 'Media & Broadcast',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => 'Print journalism, television broadcast reporting, electronic newsroom editing, media law ethics, and digital PR.'
            ],
            [
                'name'     => 'Bachelor of Mass Communication & Video Production',
                'href'     => 'courses/bachelor-of-mass-communication-and-video-production.php',
                'badge'    => 'Broadcasting & Film',
                'duration' => '3 Years · 6 Semesters',
                'desc'     => 'Camera cinematography, audio design, documentary film production, video editing suites, and digital streaming.'
            ],
            [
                'name'     => 'Bachelor of Library & Information Science (B.Lib.I.Sc.)',
                'href'     => 'courses/bachelor-of-library-science-b-lib.php',
                'badge'    => 'Informatics & Archival',
                'duration' => '1 Year · 2 Semesters',
                'desc'     => 'Digital cataloging, automated repository indexing, archive preservation, metadata schemas, and informatics systems.'
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

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Explore all <?= count($ug_categories) ?> academic discipline faculties and <?= array_sum(array_map(function($c) { return count($c['courses']); }, $ug_categories)) ?> industry-aligned bachelor degree specializations with modern laboratories, corporate internships, and complete placement assistance.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('graduation-cap', 'w-4 h-4 text-gold') ?> <?= array_sum(array_map(function($c) { return count($c['courses']); }, $ug_categories)) ?> Bachelor Programs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award', 'w-4 h-4 text-gold') ?> AICTE, BCI &amp; PCI Approved
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase', 'w-4 h-4 text-gold') ?> Mandatory Industry Internships
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check', 'w-4 h-4 text-gold') ?> 100% Placement Support
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN UG CONTENT ==================== -->
<section class="py-16 md:py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 space-y-16">

    <?php foreach ($ug_categories as $cat): ?>
      <div class="section-block">
        <div class="ug-cat-header">
          <div class="ug-cat-header-left">
            <div class="ug-cat-iconbox">
              <?= lucide_icon($cat['icon']) ?>
            </div>
            <div class="ug-cat-content">
              <div class="ug-cat-meta">
                <span class="ug-cat-tag">
                  <?= e($cat['tag']) ?>
                </span>
                <span class="ug-cat-count">
                  <?= count($cat['courses']) ?> Programs
                </span>
              </div>
              <h2 class="ug-cat-title">
                <?= e($cat['category_name']) ?>
              </h2>
            </div>
          </div>
          <a href="<?= url('admissions/') ?>" class="ug-cat-apply-btn">
            <span>Apply Now</span>
            <?= lucide_icon('arrow-right') ?>
          </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach ($cat['courses'] as $c): ?>
            <a href="<?= url($c['href']) ?>" class="ug-course-card group">
              <!-- Top Subtle Accent Gradient Line -->
              <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-500 via-amber-400 to-[#071322] opacity-75 group-hover:opacity-100 transition-opacity"></div>

              <div>
                <!-- Top Badge & Duration Row -->
                <div class="flex items-center justify-between gap-2">
                  <span class="ug-card-badge">
                    <?= lucide_icon('award') ?>
                    <span><?= e($c['badge']) ?></span>
                  </span>
                  <span class="ug-card-duration">
                    <?= lucide_icon('clock') ?>
                    <span><?= e($c['duration']) ?></span>
                  </span>
                </div>

                <!-- Course Title & Description -->
                <h3 class="ug-card-title line-clamp-2">
                  <?= e($c['name']) ?>
                </h3>
                <p class="ug-card-desc line-clamp-3">
                  <?= e($c['desc']) ?>
                </p>
              </div>

              <!-- Card Footer Action Bar -->
              <div class="ug-card-footer">
                <span class="ug-card-status">
                  <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 inline-block shrink-0"></span>
                  <span>Admissions Open 2026–27</span>
                </span>
                <span class="ug-card-btn">
                  <span>View Details</span>
                  <?= lucide_icon('arrow-right') ?>
                </span>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
