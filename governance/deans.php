<?php
/**
 * RKDF University — Deans & Heads of Departments (Academic Leadership)
 * Live Source: https://rkdfuniversity.org/deans/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Deans & Heads of Departments (HoD) | " . SITE_NAME;
$page_meta_desc = "Directory of Deans and Heads of Departments across all 12 faculties and academic schools at RKDF University Ranchi, Jharkhand.";

$faculties = [
    [
        'school' => 'Faculty of Engineering & Technology',
        'icon'   => 'cpu',
        'role'   => 'Dean & HoD, Engineering Sciences',
        'desc'   => 'B.Tech in Computer Science, Civil, Mechanical, Electrical & Electronics, and Polytechnic Diploma programs.',
        'email'  => 'engineering@rkdfuniversity.org',
        'link'   => 'school-engineering.php',
        'badge'  => 'AICTE Standard Labs'
    ],
    [
        'school' => 'Faculty of Information & Technology',
        'icon'   => 'laptop',
        'role'   => 'Dean & HoD, Information Technology',
        'desc'   => 'BCA, MCA, Cyber Security, Artificial Intelligence, Cloud Computing, and Data Science programs.',
        'email'  => 'it@rkdfuniversity.org',
        'link'   => 'schools.php',
        'badge'  => 'Advanced AI & Coding Labs'
    ],
    [
        'school' => 'Institute of Pharmaceutical Sciences',
        'icon'   => 'heart-pulse',
        'role'   => 'Principal & Dean of Pharmacy',
        'desc'   => 'PCI-approved D.Pharm, B.Pharm, and B.Pharm Lateral Entry programs with specialized pharmacology laboratories.',
        'email'  => 'Pharmacy@rkdfuniversity.org',
        'link'   => 'school-pharmacy.php',
        'badge'  => 'PCI Approved'
    ],
    [
        'school' => 'Faculty of Management',
        'icon'   => 'briefcase',
        'role'   => 'Dean & HoD, Management Studies',
        'desc'   => 'BBA, MBA (Marketing, Finance, HR, Operations), and Executive Management development programs.',
        'email'  => 'management@rkdfuniversity.org',
        'link'   => 'school-management.php',
        'badge'  => 'Industry Corporate Tie-ups'
    ],
    [
        'school' => 'Faculty of Law',
        'icon'   => 'scale',
        'role'   => 'Dean & HoD, Legal Studies',
        'desc'   => 'BCI-approved BA LL.B (5 Yrs), BBA LL.B (5 Yrs), LL.B (3 Yrs), and LL.M with Moot Court training.',
        'email'  => 'law@rkdfuniversity.org',
        'link'   => 'school-law.php',
        'badge'  => 'Bar Council of India Approved'
    ],
    [
        'school' => 'Faculty of Life Sciences',
        'icon'   => 'microscope',
        'role'   => 'Dean & HoD, Life Sciences',
        'desc'   => 'B.Sc and M.Sc programs in Biotechnology, Microbiology, Biochemistry, Botany, and Zoology.',
        'email'  => 'lifesciences@rkdfuniversity.org',
        'link'   => 'schools.php',
        'badge'  => 'Bio-Diversity Research Wing'
    ],
    [
        'school' => 'Faculty of Basic and Applied Sciences',
        'icon'   => 'flask-conical',
        'role'   => 'Dean & HoD, Applied Sciences',
        'desc'   => 'Undergraduate and postgraduate degrees in Physics, Chemistry, Mathematics, and Statistics.',
        'email'  => 'science@rkdfuniversity.org',
        'link'   => 'schools.php',
        'badge'  => 'Advanced Research Labs'
    ],
    [
        'school' => 'Faculty of Commerce',
        'icon'   => 'landmark',
        'role'   => 'Dean & HoD, Commerce',
        'desc'   => 'B.Com (Hons), M.Com, Taxation, Banking & Insurance, and Corporate Accounting studies.',
        'email'  => 'commerce@rkdfuniversity.org',
        'link'   => 'schools.php',
        'badge'  => 'Fintech & Tally Certification'
    ],
    [
        'school' => 'Faculty of Journalism & Mass Communication',
        'icon'   => 'radio',
        'role'   => 'Dean & HoD, Mass Communication',
        'desc'   => 'BA-JMC, MA-JMC, Electronic Media, Print Journalism, Digital Content Creation, and PR.',
        'email'  => 'journalism@rkdfuniversity.org',
        'link'   => 'schools.php',
        'badge'  => 'Media Studio & Audio Suite'
    ],
    [
        'school' => 'Faculty of Arts and Humanities',
        'icon'   => 'book-open',
        'role'   => 'Dean & HoD, Humanities',
        'desc'   => 'BA and MA in English Literature, History, Political Science, Sociology, and Economics.',
        'email'  => 'arts@rkdfuniversity.org',
        'link'   => 'schools.php',
        'badge'  => 'Social Research Center'
    ],
    [
        'school' => 'Faculty of Library Science',
        'icon'   => 'library',
        'role'   => 'Dean & HoD, Library Sciences',
        'desc'   => 'Bachelor of Library and Information Science (B.Lib.I.Sc) and Master of Library Science (M.Lib.I.Sc).',
        'email'  => 'library@rkdfuniversity.org',
        'link'   => 'schools.php',
        'badge'  => 'Digital Cataloguing Hub'
    ],
    [
        'school' => 'Faculty of Fashion & Interior Designing',
        'icon'   => 'sparkles',
        'role'   => 'Dean & HoD, Design Studies',
        'desc'   => 'B.Des in Fashion Design, Interior Architecture, Apparel Merchandising, and CAD Design Studios.',
        'email'  => 'design@rkdfuniversity.org',
        'link'   => 'schools.php',
        'badge'  => 'Fashion Ramp & CAD Studio'
    ],
];

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <!-- Breadcrumbs -->
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('about/') ?>" class="hover:text-white transition">About</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Deans &amp; HoD</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Deans &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Heads of Departments</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Academic leaders and departmental heads driving pedagogical excellence across all 12 faculties at RKDF University Ranchi.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> 12 Academic Faculties
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('user-check', 'w-3.5 h-3.5 text-gold shrink-0') ?> 82+ Dedicated Faculty Members
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> 90+ Multidisciplinary Programs
      </span>
    </div>
  </div>
</section>

<!-- Leadership Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/leadership_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Introduction Header -->
    <div class="max-w-3xl space-y-3">
      <div class="text-xs font-bold uppercase tracking-[0.2em] text-gold">Faculty Leadership Directory</div>
      <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-foreground font-normal">
        Academic Deans &amp; Heads of Departments
      </h2>
      <p class="text-muted-foreground text-sm sm:text-base leading-relaxed">
        The faculty deans and department heads are responsible for curriculum design, industry alignment, research supervision, laboratory infrastructure, and student academic welfare.
      </p>
    </div>

    <!-- 12 Faculties Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($faculties as $fac): ?>
        <div class="faculty-card group">
          <div>
            <!-- Header with Icon & Badge -->
            <div class="flex items-start justify-between gap-3">
              <div class="faculty-icon-box">
                <?= lucide_icon($fac['icon']) ?>
              </div>
              <span class="faculty-badge">
                <?= e($fac['badge']) ?>
              </span>
            </div>

            <!-- Titles & Role Chip -->
            <div class="mt-4">
              <h3 class="faculty-title">
                <?= e($fac['school']) ?>
              </h3>
              <div>
                <span class="faculty-role-chip">
                  <?= lucide_icon('user') ?>
                  <span><?= e($fac['role']) ?></span>
                </span>
              </div>
            </div>

            <!-- Description -->
            <p class="faculty-desc">
              <?= e($fac['desc']) ?>
            </p>
          </div>

          <!-- Footer Actions & Email -->
          <div class="faculty-footer">
            <a href="mailto:<?= e($fac['email']) ?>" class="faculty-mail-btn" title="<?= e($fac['email']) ?>">
              <?= lucide_icon('mail') ?>
              <span><?= e($fac['email']) ?></span>
            </a>

            <a href="<?= e($fac['link']) ?>" class="faculty-explore-btn">
              <span>Explore</span>
              <?= lucide_icon('chevron-right') ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>


    <!-- Academic Council Notice Callout -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('award', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Academic Council</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Board of Studies &amp; Academic Governance
        </h3>
        <p class="text-xs sm:text-sm text-white/80 max-w-2xl text-left leading-relaxed">
          All academic programs and curricula are vetted by statutory Boards of Studies and approved by the Academic Council under UGC guidelines.
        </p>
      </div>

      <div class="flex items-center justify-center shrink-0 self-center my-auto">
        <a href="<?= url('departments/') ?>" class="inline-flex items-center gap-2 rounded-full bg-gold text-brand px-6 py-3 text-xs font-bold uppercase tracking-wider hover:bg-white transition shadow-lg">
          <span>All Schools &amp; Courses</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>



  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
