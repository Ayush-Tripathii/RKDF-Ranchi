<?php
/**
 * RKDF University — Undergraduate (UG) Academic Programs Directory
 * Content Source: https://rkdfuniversity.org/courses/under-graduate-programs/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Undergraduate (UG) Degree Programs (All Disciplines) — ' . SITE_NAME;
$page_meta_desc = 'Explore all ${totalUgCourses} Undergraduate (UG) bachelor degree programs at RKDF University Ranchi. BBA, B.Tech, BCA, B.Sc (Hons), B.Com, B.A. (Hons), B.Pharm, and Law with detailed fees, syllabus, and admission criteria.';

$ug_categories_json = <<<'JSON'
${JSON.stringify(ugCategories, null, 2)}
JSON;

$ug_categories = json_decode($ug_categories_json, true);

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
            <div class="bg-card border border-border rounded-2xl p-6 shadow-sm hover:border-gold hover:shadow-md transition flex flex-col justify-between group">
              <div>
                <div class="flex items-start justify-between gap-3 mb-3">
                  <span class="text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full bg-brand/10 text-brand">
                    <?= e($c['badge']) ?>
                  </span>
                  <span class="text-xs font-semibold text-muted-foreground flex items-center gap-1 shrink-0">
                    <?= lucide_icon('clock', 'w-3.5 h-3.5 text-gold') ?>
                    <?= e($c['duration']) ?>
                  </span>
                </div>

                <h3 class="font-bold text-foreground text-lg mb-2 leading-snug group-hover:text-brand transition">
                  <a href="<?= url($c['href']) ?>"><?= e($c['name']) ?></a>
                </h3>

                <p class="text-xs text-muted-foreground leading-relaxed mb-4">
                  <?= e($c['desc']) ?>
                </p>
              </div>

              <div class="pt-4 border-t border-border flex items-center justify-between mt-auto">
                <span class="text-xs font-semibold text-emerald-600 dark:text-emerald-400">Admissions Open 2026–27</span>
                <a href="<?= url($c['href']) ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand group-hover:text-gold transition">
                  <span>View Details</span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
