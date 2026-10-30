<?php
/**
 * RKDF University — Undergraduate (UG) Academic Programs Directory
 * Content Source: https://rkdfuniversity.org/courses/under-graduate-programs/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Undergraduate (UG) Degree Programs (All Disciplines) — ' . SITE_NAME;
$page_meta_desc = 'Explore all ${totalUgCourses} Undergraduate (UG) bachelor degree programs at RKDF University Ranchi. BBA, B.Tech, BCA, B.Sc (Hons), B.Com, B.A. (Hons), B.Pharm, and Law with detailed fees, syllabus, and admission criteria.';

$ug_categories = [
    [
        'category_name' => 'Engineering & Technology',
        'tag' => 'Future-Ready Engineering',
        'icon' => 'cpu',
        'courses' => [
            ['name' => 'B.Tech Programs', 'badge' => 'UG Degree', 'duration' => '4 Years (NEP)', 'desc' => 'Engineering programs in CSE, Civil, Mechanical, Mining and Electrical disciplines.', 'href' => 'courses/b-tech.php'],
            ['name' => 'B.Tech in Computer Science & Engineering', 'badge' => 'UG Degree', 'duration' => '4 Years', 'desc' => 'Industry-aligned computer science education with practical learning.', 'href' => 'courses/b-tech-computer-science-engineering.php'],
            ['name' => 'B.Tech in Civil Engineering', 'badge' => 'UG Degree', 'duration' => '4 Years', 'desc' => 'Build expertise in infrastructure, construction and sustainable design.', 'href' => 'courses/b-tech-civil-engineering.php'],
        ],
    ],
    [
        'category_name' => 'Management & Commerce',
        'tag' => 'Business Leadership',
        'icon' => 'briefcase',
        'courses' => [
            ['name' => 'Bachelor of Business Administration', 'badge' => 'UG Degree', 'duration' => '3 / 4 Years (NEP)', 'desc' => 'Develop business, entrepreneurship and leadership capabilities.', 'href' => 'courses/bba.php'],
            ['name' => 'Bachelor of Commerce', 'badge' => 'UG Degree', 'duration' => '3 / 4 Years (NEP)', 'desc' => 'A strong foundation in accounting, finance and commerce.', 'href' => 'courses/b-com.php'],
            ['name' => 'Bachelor of Management Studies', 'badge' => 'UG Degree', 'duration' => '3 Years', 'desc' => 'Management education focused on corporate and business analytics.', 'href' => 'courses/bachelor-of-management-studies-bms.php'],
        ],
    ],
    [
        'category_name' => 'Science & Information Technology',
        'tag' => 'Scientific Discovery',
        'icon' => 'flask-conical',
        'courses' => [
            ['name' => 'Bachelor of Computer Applications', 'badge' => 'UG Degree', 'duration' => '3 / 4 Years (NEP)', 'desc' => 'Software, application development and computing foundations.', 'href' => 'courses/bachelor-of-computer-application.php'],
            ['name' => 'B.Sc. (Hons.) Programs', 'badge' => 'UG Degree', 'duration' => '3 / 4 Years (NEP)', 'desc' => 'Science programs with contemporary laboratory learning.', 'href' => 'courses/b-sc.php'],
            ['name' => 'B.Sc. Information Technology', 'badge' => 'UG Degree', 'duration' => '3 / 4 Years (NEP)', 'desc' => 'Information technology skills for the modern digital economy.', 'href' => 'courses/under-graduate-programs/information-technology-under-graduate-programs.php'],
        ],
    ],
    [
        'category_name' => 'Arts, Humanities & Social Sciences',
        'tag' => 'Liberal Studies',
        'icon' => 'book-open',
        'courses' => [
            ['name' => 'Bachelor of Arts', 'badge' => 'UG Degree', 'duration' => '3 / 4 Years (NEP)', 'desc' => 'Broad-based education in humanities and social sciences.', 'href' => 'courses/ba-bachelor-of-arts.php'],
            ['name' => 'B.A. in Journalism & Mass Communication', 'badge' => 'UG Degree', 'duration' => '3 Years', 'desc' => 'Media, reporting and digital communication studies.', 'href' => 'courses/ba-in-journalism-mass-communication.php'],
            ['name' => 'Bachelor of Social Work', 'badge' => 'UG Degree', 'duration' => '3 / 4 Years (NEP)', 'desc' => 'Prepare for impactful community development and welfare practice.', 'href' => 'courses/bachelor-of-social-work-b-s-w.php'],
        ],
    ],
    [
        'category_name' => 'Professional & Regulated Programs',
        'tag' => 'Career-Focused Degrees',
        'icon' => 'graduation-cap',
        'courses' => [
            ['name' => 'Bachelor of Pharmacy', 'badge' => 'UG Degree', 'duration' => '4 Years', 'desc' => 'Pharmaceutical science, clinical practice and healthcare learning.', 'href' => 'courses/bachelor-of-pharmacy-b-pharma.php'],
            ['name' => 'Bachelor of Laws (LL.B.)', 'badge' => 'UG Degree', 'duration' => '3 Years', 'desc' => 'Legal education for litigation, corporate law and public service.', 'href' => 'courses/bachelor-of-laws-llb.php'],
            ['name' => 'Professional Undergraduate Programs', 'badge' => 'UG Degree', 'duration' => '3 / 4 / 5 Years', 'desc' => 'Explore professional programs across technology, law and management.', 'href' => 'courses/professional-ug.php'],
        ],
    ],
];

require_once dirname(__DIR__) . '/includes/header.php';
?>

<style>
  @media (max-width: 1023px) {
    .undergraduate-breadcrumb {
      display: grid !important;
      grid-template-columns: auto auto auto auto !important;
      justify-content: center !important;
      align-items: center !important;
      gap: 0.4rem !important;
      padding: 0.65rem 0.75rem !important;
      border-radius: 16px !important;
      max-width: 100% !important;
      box-sizing: border-box !important;
    }
    .undergraduate-breadcrumb > span:last-child {
      grid-column: 1 / -1 !important;
      text-align: center !important;
      line-height: 1.4 !important;
    }
  }
</style>
<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <div class="undergraduate-breadcrumb inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
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
<style>
  @media (max-width: 640px) {
    .undergraduate-programs-main { padding-bottom: 2rem !important; }
    .undergraduate-programs-main > div > :last-child { margin-bottom: 0 !important; }
  }
</style>
<section class="py-16 md:py-20 bg-surface undergraduate-programs-main">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 space-y-16">

    <?php foreach ($ug_categories as $cat): ?>
      <div class="section-block">
        <div class="rkdf-section-header mb-8">
          <div>
            <span class="rkdf-section-tag flex items-center gap-1.5">
              <?= lucide_icon($cat['icon'], 'w-3.5 h-3.5 text-gold') ?>
              <span><?= e($cat['tag']) ?></span>
            </span>
            <h2 class="rkdf-section-title font-serif text-2xl md:text-3xl font-bold text-foreground mt-1">
              <?= e($cat['category_name']) ?>
            </h2>
          </div>
          <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
            <span>Apply Now</span>
            <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach ($cat['courses'] as $c): ?>
            <a href="<?= url($c['href']) ?>" class="group bg-white border border-slate-200/85 rounded-[22px] p-6 shadow-sm hover:shadow-xl hover:border-amber-400/80 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between gap-2 mb-3.5">
                  <span class="inline-flex items-center px-3.5 py-1 rounded-full text-[11px] font-bold tracking-wide uppercase bg-[#eef2f8] text-[#1e3a8a] border border-[#dbe4f0]/80">
                    <?= e($c['badge']) ?>
                  </span>
                  <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-700">
                    <?= lucide_icon('clock', 'w-4 h-4 text-[#e58525]') ?>
                    <span><?= e($c['duration']) ?></span>
                  </span>
                </div>

                <div class="my-3">
                  <h3 class="font-serif font-bold text-slate-900 text-lg leading-snug group-hover:text-[#e58525] transition-colors line-clamp-2">
                    <?= e($c['name']) ?>
                  </h3>
                  <p class="text-xs text-slate-500 font-normal mt-1.5 line-clamp-2">
                    <?= e($c['desc']) ?>
                  </p>
                </div>
              </div>

              <div class="pt-4 mt-4 border-t border-slate-200/80 flex items-center justify-between gap-2">
                <span class="text-xs font-bold text-[#0f1b2d] tracking-tight">Admissions Open 2026–27</span>
                <span class="inline-flex items-center gap-1 text-xs font-bold text-[#0f1b2d] group-hover:text-[#e58525] transition-colors">
                  <span>View Details</span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform') ?>
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
