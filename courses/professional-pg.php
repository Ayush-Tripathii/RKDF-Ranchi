<?php
/**
 * RKDF University — Post Graduate Professional Programs
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Post Graduate (PG) Professional Programs — ' . SITE_NAME;
$page_meta_desc = 'Explore professional master degrees at RKDF University Ranchi: MCA, MBA Dual Specialization, MMS, LL.M, M.Lib.I.Sc, MSW, and MHA with high-tier placement support.';

$professional_pg = [
    [
        'title'       => 'Master of Computer Application (MCA)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Advanced Computing',
        'icon'        => 'laptop',
        'desc'        => 'Advanced algorithms, AI & Machine Learning, cloud computing, enterprise software architectures, microservices, and big data systems.',
        'eligibility' => 'Passed BCA/B.Sc (CS/IT)/B.Tech or any Bachelor’s degree with Mathematics with at least 50% marks (45% for SC/ST/OBC).',
        'link'        => 'courses/mca.php'
    ],
    [
        'title'       => 'Master of Business Administration (MBA Dual Spec)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Industry Flagship',
        'icon'        => 'briefcase',
        'desc'        => 'Dual specialization in Marketing, Finance, HR, Construction Management, Logistics & Supply Chain, and Hotel Management.',
        'eligibility' => 'Bachelor’s degree in any discipline with minimum 50% aggregate marks (45% for reserved category).',
        'link'        => 'courses/mba.php'
    ],
    [
        'title'       => 'Master in Management Studies (MMS)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Executive Track',
        'icon'        => 'trending-up',
        'desc'        => 'Strategic management, corporate governance, organizational leadership, financial analysis, and business consulting practice.',
        'eligibility' => 'Graduation in any discipline with minimum 50% marks.',
        'link'        => 'departments/school-management.php'
    ],
    [
        'title'       => 'Master of Laws (LL.M)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'BCI Approved',
        'icon'        => 'scale',
        'desc'        => 'Advanced legal scholarship in Corporate Law, Constitutional Jurisprudence, Criminal Law, and Intellectual Property Rights.',
        'eligibility' => 'LL.B. (3-Year or 5-Year Integrated) degree from a BCI recognized university with at least 50% marks.',
        'link'        => 'courses/law.php'
    ],
    [
        'title'       => 'Master of Social Work (MSW)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Social Impact',
        'icon'        => 'heart-handshake',
        'desc'        => 'Community organization, rural development, child & women welfare, public health intervention, and CSR program administration.',
        'eligibility' => 'Bachelor’s degree in any stream with minimum 45% marks.',
        'link'        => 'courses/social-work.php'
    ],
    [
        'title'       => 'Master of Library & Information Science (M.Lib.I.Sc)',
        'duration'    => '1 Year · 2 Semesters',
        'badge'       => 'Digital Library',
        'icon'        => 'book-open',
        'desc'        => 'Digital repository management, metadata ontologies, institutional archiving, and information retrieval networks.',
        'eligibility' => 'B.Lib.I.Sc degree from a recognized university with minimum 45% aggregate marks.',
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
      <span class="text-white/90">PG Professional</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      PG <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Professional</em> Programs
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Advanced postgraduate professional degrees designed to accelerate leadership careers in technology, management, law, and social enterprise.
    </p>

    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill"><?= lucide_icon('laptop') ?> MCA &amp; IT</span>
      <span class="hero-pill"><?= lucide_icon('briefcase') ?> MBA &amp; MMS</span>
      <span class="hero-pill"><?= lucide_icon('scale') ?> LL.M Master of Laws</span>
      <span class="hero-pill"><?= lucide_icon('heart-handshake') ?> MSW &amp; M.Lib</span>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($professional_pg as $p): ?>
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
