<?php
/**
 * RKDF University — Undergraduate Professional Programs
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Undergraduate (UG) Professional Programs — ' . SITE_NAME;
$page_meta_desc = 'Explore professional undergraduate degrees at RKDF University Ranchi: BCA, BCA Corporate, B.Pharm, BA LL.B, BBA LL.B, B.Lib.I.Sc, and B.Sc IT with top industry training and placement.';

$professional_ug = [
    [
        'title'       => 'Bachelor of Computer Application (BCA / BCA Corporate)',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Flagship Computing',
        'icon'        => 'laptop',
        'desc'        => 'Software development, full-stack web engineering, database architecture, Python, Java, DevOps, and cloud systems with corporate internships.',
        'eligibility' => '10+2 with Mathematics / Computer Science / IT with at least 45% aggregate (40% for SC/ST/OBC).',
        'link'        => 'departments/school-of-information-technology.php'
    ],
    [
        'title'       => 'Bachelor of Pharmacy (B.Pharm)',
        'duration'    => '4 Years · 8 Semesters',
        'badge'       => 'PCI Approved',
        'icon'        => 'heart-pulse',
        'desc'        => 'Medicinal chemistry, pharmacology, pharmaceutical technology, formulations, and regulatory QA in high-end pharmaceutical labs.',
        'eligibility' => '10+2 with Physics, Chemistry and Biology/Maths (45%+ aggregate).',
        'link'        => 'courses/pharmacy.php'
    ],
    [
        'title'       => 'B.A. LL.B. (5-Year Integrated Honours)',
        'duration'    => '5 Years · 10 Semesters',
        'badge'       => 'BCI Approved',
        'icon'        => 'scale',
        'desc'        => 'Integrated law degree blending political science, sociology, constitutional jurisprudence, corporate law, and moot court advocacy.',
        'eligibility' => '10+2 in any stream from a recognized board (45%+ for Gen, 42% OBC, 40% SC/ST).',
        'link'        => 'courses/law.php'
    ],
    [
        'title'       => 'BBA LL.B. (5-Year Integrated Honours)',
        'duration'    => '5 Years · 10 Semesters',
        'badge'       => 'BCI Approved',
        'icon'        => 'briefcase',
        'desc'        => 'Corporate management, finance, taxation, mergers & acquisitions, and international commercial arbitration.',
        'eligibility' => '10+2 with at least 45% aggregate marks (42% OBC, 40% SC/ST).',
        'link'        => 'courses/law.php'
    ],
    [
        'title'       => 'B.Sc. in Fashion & Interior Designing',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Creative Studio Track',
        'icon'        => 'palette',
        'desc'        => 'Apparel design, textile technology, space planning, AutoCAD, 3D modeling, and runway showcase presentations.',
        'eligibility' => '10+2 in any stream with creative aptitude.',
        'link'        => 'courses/fashion-designing.php'
    ],
    [
        'title'       => 'Bachelor of Library & Information Science (B.Lib.I.Sc)',
        'duration'    => '1 Year · 2 Semesters',
        'badge'       => 'Professional Library',
        'icon'        => 'book-open',
        'desc'        => 'Digital cataloguing, metadata architecture, automated library systems (KOHA), and scientific archival methods.',
        'eligibility' => 'Bachelor’s degree in any discipline with minimum 45% marks.',
        'link'        => 'departments/school-of-library-science.php'
    ],
];

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('courses/') ?>" class="hover:text-white transition">Courses</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">UG Professional</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      UG <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Professional</em> Programs
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Career-focused undergraduate professional degrees regulated by apex statutory councils (PCI, BCI) and technology industry leaders.
    </p>

    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill"><?= lucide_icon('laptop') ?> IT &amp; Computing</span>
      <span class="hero-pill"><?= lucide_icon('heart-pulse') ?> Pharmacy (PCI)</span>
      <span class="hero-pill"><?= lucide_icon('scale') ?> Law (BCI)</span>
      <span class="hero-pill"><?= lucide_icon('palette') ?> Design &amp; Library</span>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($professional_ug as $p): ?>
        <div class="group rounded-3xl bg-card border border-border p-8 shadow-sm hover:shadow-xl hover:border-gold/50 transition duration-300 flex flex-col justify-between">
          <div class="space-y-5">
            <div class="flex items-center justify-between">
              <div class="w-12 h-12 rounded-2xl bg-brand/10 text-brand flex items-center justify-center group-hover:bg-brand group-hover:text-gold transition">
                <?= lucide_icon($p['icon'], 'w-6 h-6') ?>
              </div>
              <span class="text-xs px-3 py-1 rounded-full bg-gold/15 text-gold border border-gold/30 font-semibold">
                <?= htmlspecialchars($p['badge']) ?>
              </span>
            </div>

            <div>
              <h3 class="font-serif text-2xl text-foreground font-semibold group-hover:text-brand transition leading-snug">
                <?= htmlspecialchars($p['title']) ?>
              </h3>
              <p class="text-xs font-semibold text-gold mt-1"><?= htmlspecialchars($p['duration']) ?></p>
            </div>

            <p class="text-sm text-muted-foreground leading-relaxed">
              <?= htmlspecialchars($p['desc']) ?>
            </p>

            <div class="p-4 rounded-2xl bg-muted/50 border border-border text-xs text-muted-foreground space-y-1">
              <span class="font-bold text-foreground block">Eligibility:</span>
              <p><?= htmlspecialchars($p['eligibility']) ?></p>
            </div>
          </div>

          <div class="mt-8 pt-4 border-t border-border flex items-center justify-between">
            <a href="<?= url($p['link']) ?>" class="inline-flex items-center gap-2 text-xs font-bold text-brand hover:text-gold transition">
              <span>View Department &amp; Syllabus</span>
              <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
