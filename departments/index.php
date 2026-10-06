<?php
/**
 * RKDF University Ranchi — Academic Faculties & Schools Directory
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Schools & Faculties — RKDF University Ranchi';
$page_meta_desc = 'Explore 12 Academic Faculties and 90+ multidisciplinary programs at RKDF University Ranchi. Engineering, Law, Pharmacy, Management, IT, Sciences, Commerce, Arts and more.';
$body_class     = 'page-departments';

$faculties = [
    [
        'id'        => 'school-engineering',
        'slug'      => 'school-of-engineering-technology.php',
        'title'     => 'Faculty of Engineering & Technology',
        'badge'     => 'AICTE & UGC Aligned',
        'tag'       => 'Engineering, Mining & Polytechnic',
        'icon'      => 'cpu',
        'desc'      => 'Educating engineers who facilitate the passage from design to product, from innovation to enterprise. Offering B.Tech in CSE, Mining, Civil, Mechanical, EEE, and 3-Year Polytechnic Diplomas.',
        'programs'  => ['B.Tech CSE', 'B.Tech Mining', 'B.Tech Civil', 'B.Tech Mech', 'Polytechnic Diplomas'],
        'dean'      => 'Dean & Faculty Council',
        'stat'      => '22+ Labs & Workshops',
        'grad_count'=> '1,200+ Alumni Placed',
    ],
    [
        'id'        => 'school-law',
        'slug'      => 'school-of-law.php',
        'title'     => 'Faculty of Law',
        'badge'     => 'BCI Approved',
        'tag'       => 'Constitutional & Corporate Jurisprudence',
        'icon'      => 'scale',
        'desc'      => 'Disseminating rigorous legal knowledge for national development and justice. Professional degrees in integrated law, graduate LLB, and LLM with specialized Moot Court clinical training.',
        'programs'  => ['BA LL.B (5 Yr)', 'BBA LL.B (5 Yr)', 'LL.B (3 Yr)', 'Master of Laws (LL.M)'],
        'dean'      => 'Prof. (Dr.) A. K. Pandey',
        'stat'      => 'High Court Moot Court',
        'grad_count'=> 'Legal Aid Clinic',
    ],
    [
        'id'        => 'school-management',
        'slug'      => 'school-of-management.php',
        'title'     => 'Faculty of Management',
        'badge'     => 'UGC & Corporate Accredited',
        'tag'       => 'Business, Leadership & Strategy',
        'icon'      => 'briefcase',
        'desc'      => 'Developing strategic leadership, analytical acumen, and entrepreneurial mastery. Comprehensive BBA, BBA Corporate, Dual Specialization MBA, and Master in Management Studies (MMS).',
        'programs'  => ['BBA General', 'BBA Corporate', 'MBA Dual Spec', 'MBA Logistics', 'MMS Studies'],
        'dean'      => 'Prof. (Dr.) S. K. Roy',
        'stat'      => 'Bloomberg & Case Lab',
        'grad_count'=> '98% Placement Rate',
    ],
    [
        'id'        => 'school-it',
        'slug'      => 'school-of-information-technology.php',
        'title'     => 'Faculty of Information & Technology',
        'badge'     => 'Center of Computing Excellence',
        'tag'       => 'Software, Cloud & AI Systems',
        'icon'      => 'laptop',
        'desc'      => 'Exclusive institute for Computer Applications and Information Technology promoting excellence in software engineering, dependable computing, cyber security, and advanced MCA/BCA curricula.',
        'programs'  => ['BCA Professional', 'BCA Corporate', 'MCA 2-Year', 'PGDCA Post-Grad'],
        'dean'      => 'Computing Faculty Council',
        'stat'      => 'Cloud & AI Computing Hub',
        'grad_count'=> '100% Industry Projects',
    ],
    [
        'id'        => 'school-pharmacy',
        'slug'      => 'school-of-pharmacy.php',
        'title'     => 'Institute of Pharmaceutical Sciences',
        'badge'     => 'PCI Approved',
        'tag'       => 'Clinical, Industrial & Hospital Pharmacy',
        'icon'      => 'heart-pulse',
        'desc'      => 'Premier center for pharmaceutical discovery, drug formulation, clinical research, and hospital practice. Offering PCI-recognized Bachelor of Pharmacy (B.Pharm) and Diploma (D.Pharm).',
        'programs'  => ['Bachelor of Pharmacy (B.Pharm)', 'Diploma in Pharmacy (D.Pharm)'],
        'dean'      => 'Prof. (Dr.) S. Mukherjee',
        'stat'      => '14 NABL Aligned Labs',
        'grad_count'=> 'Medicinal Herbal Garden',
    ],
    [
        'id'        => 'school-basic-sciences',
        'slug'      => 'school-of-basic-and-applied-sciences.php',
        'title'     => 'Faculty of Basic & Applied Sciences',
        'badge'     => 'Research & Innovation Wing',
        'tag'       => 'Pure Sciences, IT & Mathematics',
        'icon'      => 'microscope',
        'desc'      => 'Devoted to the fundamental principles of physical, chemical, and computational sciences. B.Sc (Hons) and M.Sc programs in Physics, Chemistry, Applied Math, IT, Multimedia, and Biochemistry.',
        'programs'  => ['B.Sc IT', 'B.Sc (Hons) Physics/Chem/Math', 'B.Sc Multimedia', 'M.Sc Applied Sciences'],
        'dean'      => 'Science Faculty Council',
        'stat'      => 'Advanced Optical & Spectroscopy Labs',
        'grad_count'=> 'DST & UGC Projects',
    ],
    [
        'id'        => 'school-life-sciences',
        'slug'      => 'school-of-life-sciences.php',
        'title'     => 'Faculty of Life Sciences',
        'badge'     => 'Biosciences & Genomics Center',
        'tag'       => 'Biotechnology, Microbiology, Botany & Zoology',
        'icon'      => 'leaf',
        'desc'      => 'Centre of excellence in biological research, cell biology, genetics, and molecular pathophysiology. Offering undergraduate and postgraduate degrees in Biotech, Microbiology, Botany, and Zoology.',
        'programs'  => ['B.Sc (Hons) Biotechnology', 'B.Sc Microbiology', 'M.Sc Biotech', 'M.Sc Zoology / Botany'],
        'dean'      => 'Biosciences Council',
        'stat'      => 'Genomics & Tissue Culture Lab',
        'grad_count'=> 'Bio-Incubation Center',
    ],
    [
        'id'        => 'school-commerce',
        'slug'      => 'school-of-commerce.php',
        'title'     => 'Faculty of Commerce',
        'badge'     => 'Finance & Trade Consortium',
        'tag'       => 'Accounting, Taxation & Global Trade',
        'icon'      => 'coins',
        'desc'      => 'Fostering financial acumen, corporate accounting, banking systems, and international trade analytics. Offering structured B.Com, B.Com Corporate, and Master of Commerce (M.Com) degrees.',
        'programs'  => ['Bachelor of Commerce (B.Com)', 'B.Com Corporate', 'Master of Commerce (M.Com)'],
        'dean'      => 'Commerce Faculty Council',
        'stat'      => 'Tally Prime & FinTech Lab',
        'grad_count'=> 'Big-4 & Banking Tie-ups',
    ],
    [
        'id'        => 'school-arts',
        'slug'      => 'school-of-arts-and-humanities.php',
        'title'     => 'Faculty of Arts & Humanities',
        'badge'     => 'Liberal Arts & Languages',
        'tag'       => 'Social Sciences, Literature & Philosophy',
        'icon'      => 'book-open',
        'desc'      => 'Examining human culture, history, language, and social structures. Undergraduate and postgraduate degree programs in English, Hindi, Sanskrit, Bengali, Economics, History, Sociology, and Political Science.',
        'programs'  => ['BA (Hons) 10+ Majors', 'Master of Arts (MA) English/Hindi/Eco/Pol Sci/Sociology'],
        'dean'      => 'Humanities Council',
        'stat'      => 'Language Lab & Cultural Archives',
        'grad_count'=> 'UPSC / Civil Services Cell',
    ],
    [
        'id'        => 'school-journalism',
        'slug'      => 'school-of-journalism-and-mass-communication.php',
        'title'     => 'Faculty of Journalism & Mass Communication',
        'badge'     => 'Media Studio & Broadcast Wing',
        'tag'       => 'Broadcast, Print, Digital & Video Production',
        'icon'      => 'radio',
        'desc'      => 'Professional training in news reporting, digital media production, investigative journalism, public relations, and video editing. Complete hands-on broadcast media studio training.',
        'programs'  => ['BA Mass Communication', 'BMC & Video Production', 'MA Journalism & Mass Comm'],
        'dean'      => 'Media Studies Council',
        'stat'      => 'Acoustic Sound & Video Studio',
        'grad_count'=> 'National News Media Tie-ups',
    ],
    [
        'id'        => 'school-fashion',
        'slug'      => 'school-of-fashion-and-interior-designing.php',
        'title'     => 'Faculty of Fashion & Interior Designing',
        'badge'     => 'Design Studio & Atelier',
        'tag'       => 'Haute Couture, Spatial Design & Styling',
        'icon'      => 'palette',
        'desc'      => 'Creative education in apparel design, garment manufacturing, architectural interior spaces, and lifestyle styling. B.A., B.Sc., M.Sc., MBA, and PG Diplomas in Fashion and Interior Design.',
        'programs'  => ['B.A./B.Sc Fashion Design', 'B.Sc Interior Design', 'M.Sc/MBA Fashion & Interior Design'],
        'dean'      => 'Design Atelier Council',
        'stat'      => 'Garment Construction & CAD Labs',
        'grad_count'=> 'Annual Runway & Expo',
    ],
    [
        'id'        => 'school-library',
        'slug'      => 'school-of-library-science.php',
        'title'     => 'Faculty of Library Science',
        'badge'     => 'Information & Archival Science',
        'tag'       => 'Digital Archiving, Cataloging & Informatics',
        'icon'      => 'library',
        'desc'      => 'Specialized education in information retrieval, cataloging, digital preservation, library management, and informatics. Professional Bachelor of Library Science (B.Lib) and Master (M.Lib).',
        'programs'  => ['Bachelor of Library Science (B.Lib)', 'Master of Library Science (M.Lib)'],
        'dean'      => 'Informatics Council',
        'stat'      => 'Automated Digital Repository',
        'grad_count'=> '100% University Placement',
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
      <span class="text-white/90">Academics</span>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Faculties &amp; Schools</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Academic Faculties &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Schools of Excellence</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      RKDF University Ranchi delivers holistic multidisciplinary education across 12 distinct faculties and 90+ career-defining degree programs. Built upon UGC guidelines, AICTE model curricula, and statutory council approvals.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('landmark') ?> 12 Academic Faculties
      </span>
      <span class="hero-pill">
        <?= lucide_icon('graduation-cap') ?> 90+ Degree Programs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> 100% Council Approved
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> 500+ Placement Partners
      </span>
    </div>
  </div>
</section>

<!-- 2. Sub-Navigation Tabs for Schools -->
<?php require_once dirname(__DIR__) . '/includes/schools_nav_tabs.php'; ?>

<!-- 3. Faculties Showcase Grid -->
<main class="py-20 lg:py-28 bg-slate-50">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
      <div class="rkdf-section-tag mb-3 inline-flex items-center justify-center">
        <?= lucide_icon('award', 'w-4 h-4') ?>
        Centers of Learning
      </div>
      <h2 class="rkdf-section-title mt-2 mb-4">
        Explore Our 12 Academic Faculties
      </h2>
      <p class="rkdf-section-desc mt-4">
        Select a faculty to explore specialized programs, semester curricula, eligibility requirements, advanced laboratories, and industry career pathways.
      </p>
    </div>

    <!-- 12 Faculties Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pt-4">
      <?php foreach ($faculties as $fac): ?>
        <article class="faculty-card group">
          <!-- Card Header Banner -->
          <div class="faculty-header-banner">
            <div class="flex items-center justify-between gap-2 mb-3">
              <span class="inline-flex items-center gap-1.5 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full bg-gold/20 text-gold border border-gold/30">
                <?= e($fac['badge']) ?>
              </span>
              <div class="w-10 h-10 rounded-xl bg-white/10 border border-white/15 flex items-center justify-center text-gold group-hover:scale-110 transition shrink-0">
                <?= lucide_icon($fac['icon'], 'w-5 h-5') ?>
              </div>
            </div>
            <h3 class="font-serif text-xl font-normal text-white group-hover:text-gold transition line-clamp-2">
              <?= e($fac['title']) ?>
            </h3>
            <div class="text-xs text-slate-300 tracking-wide mt-1">
              <?= e($fac['tag']) ?>
            </div>
          </div>

          <!-- Card Body Content -->
          <div class="faculty-card-body">
            <p class="faculty-desc">
              <?= e($fac['desc']) ?>
            </p>

            <!-- Key Programs Pill Tag list -->
            <div>
              <div class="faculty-programs-title">
                <?= lucide_icon('graduation-cap', 'w-4 h-4 text-gold') ?>
                <span>Key Degrees &amp; Programs</span>
              </div>
              <div class="faculty-tags-wrap">
                <?php foreach ($fac['programs'] as $prog): ?>
                  <span class="faculty-tag">
                    <?= e($prog) ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Stats Bar -->
            <div class="faculty-stats-row">
              <span class="faculty-stat-item">
                <?= lucide_icon('wrench', 'w-3.5 h-3.5 text-gold shrink-0') ?>
                <span><?= e($fac['stat']) ?></span>
              </span>
              <span class="faculty-stat-item font-semibold text-brand">
                <?= lucide_icon('users-2', 'w-3.5 h-3.5 text-gold shrink-0') ?>
                <span><?= e($fac['grad_count']) ?></span>
              </span>
            </div>

            <!-- Action Button -->
            <a href="<?= url('departments/' . $fac['slug']) ?>" class="faculty-btn">
              <span>View Faculty Programs</span>
              <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<!-- 4. Academic Council & Statutory Endorsements -->
<section class="py-20 bg-slate-50/80 border-t border-slate-200">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Feature 1 -->
      <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-gold/50 transition-all duration-300 flex flex-col">
        <div class="w-12 h-12 rounded-2xl bg-brand text-gold flex items-center justify-center mb-5 shadow-sm shrink-0">
          <?= lucide_icon('scale', 'w-6 h-6') ?>
        </div>
        <h3 class="font-serif text-2xl font-normal text-slate-900 leading-snug">
          Statutory Accreditations
        </h3>
        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
          Approved by the UGC under Section 2(f), Bar Council of India (BCI), Pharmacy Council of India (PCI), and Association of Indian Universities (AIU).
        </p>
      </div>

      <!-- Feature 2 -->
      <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-gold/50 transition-all duration-300 flex flex-col">
        <div class="w-12 h-12 rounded-2xl bg-brand text-gold flex items-center justify-center mb-5 shadow-sm shrink-0">
          <?= lucide_icon('layers', 'w-6 h-6') ?>
        </div>
        <h3 class="font-serif text-2xl font-normal text-slate-900 leading-snug">
          Model Curricula &amp; CBCS System
        </h3>
        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
          All programs follow the Choice-Based Credit System (CBCS) aligned with the National Education Policy (NEP 2020) guidelines and practical industry apprenticeships.
        </p>
      </div>

      <!-- Feature 3 -->
      <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-gold/50 transition-all duration-300 flex flex-col">
        <div class="w-12 h-12 rounded-2xl bg-brand text-gold flex items-center justify-center mb-5 shadow-sm shrink-0">
          <?= lucide_icon('briefcase', 'w-6 h-6') ?>
        </div>
        <h3 class="font-serif text-2xl font-normal text-slate-900 leading-snug">
          Pan-India Placement Consortium
        </h3>
        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
          Over 500+ corporate recruiters, global MNCs, research laboratories, and law chambers actively hire graduates through central on-campus placement drives.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- 5. CTA Section -->
<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
