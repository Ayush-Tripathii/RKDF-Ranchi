<?php
/**
 * RKDF University — Sushrut University Magazine
 * Content Source: https://rkdfuniversity.org/magazine/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Sushrut University Magazine | Creative Literature & Research | ' . SITE_NAME;
$page_meta_desc = 'Explore "Sushrut", the official annual university magazine of RKDF University Ranchi: Student essays, poetry, faculty research highlights, art galleries & campus retrospectives.';

$magazine_sections = [
    [
        'title'       => 'Creative Literature, Essays & Poetry',
        'badge'       => 'Literary Section',
        'icon'        => 'feather',
        'desc'        => 'A diverse multilingual collection of original Hindi, English, and regional poetry, reflective prose, short stories, and cultural commentaries.',
        'features'    => [
            'Original Hindi, English & Regional Language Poems',
            'Contemporary Socio-Cultural & Philosophical Essays',
            'Creative Short Stories & Campus Life Chronicles',
            'Annual Best Literary Contribution Awards'
        ],
        'stats'       => [
            ['lbl' => 'Languages', 'val' => 'Hindi & English'],
            ['lbl' => 'Submissions', 'val' => 'Students & Faculty']
        ],
        'btn_label'   => 'Read Literary Works',
        'btn_url'     => url('contact.php')
    ],
    [
        'title'       => 'Faculty Research & Innovations',
        'badge'       => 'Academic Section',
        'icon'        => 'microscope',
        'desc'        => 'Curated summaries of groundbreaking faculty research, student patent filings, conference presentations, and emerging technological perspectives.',
        'features'    => [
            'Faculty Research Breakthroughs & Patent Summaries',
            'Emerging Technology Reviews in AI, Pharma & Law',
            'Scholarly Articles on Sustainable Agriculture & Green Tech',
            'Interdisciplinary Science Perspectives & Case Studies'
        ],
        'stats'       => [
            ['lbl' => 'Research', 'val' => 'Peer-Reviewed Briefs'],
            ['lbl' => 'Coverage', 'val' => 'All Faculties']
        ],
        'btn_label'   => 'Explore Research',
        'btn_url'     => url('research.php')
    ],
    [
        'title'       => 'Visual Arts & Photography Gallery',
        'badge'       => 'Fine Arts Section',
        'icon'        => 'palette',
        'desc'        => 'Full-color showcase of fine student paintings, digital illustrations, architectural sketches, and photojournalistic campus life essays.',
        'features'    => [
            'Student Oil, Acrylic & Watercolor Art Portfolios',
            'Botanical & Natural Flora Photography of Campus',
            'Photo Essays of Convocation & Cultural Fests',
            'Annual University Art Competition Showcase'
        ],
        'stats'       => [
            ['lbl' => 'Visual Arts', 'val' => 'Paintings & Sketches'],
            ['lbl' => 'Photography', 'val' => 'Campus Life Essays']
        ],
        'btn_label'   => 'View Campus Gallery',
        'btn_url'     => url('media/gallery.php')
    ],
    [
        'title'       => 'Editorial Board & Submissions',
        'badge'       => 'Publishing Protocol',
        'icon'        => 'book-open',
        'desc'        => 'Governed by a distinguished faculty editorial board and student sub-editors ensuring rigorous review, literary polish, and originality.',
        'features'    => [
            'Distinguished Faculty Chief Editors & Sub-Editors',
            'Blind Peer Review Process for All Submitted Entries',
            'Annual Open Call for Student & Scholar Contributions',
            'Free Digital E-Magazine Edition for Global Readership'
        ],
        'stats'       => [
            ['lbl' => 'Format', 'val' => 'Print + Digital PDF'],
            ['lbl' => 'Review', 'val' => 'Faculty Editorial Board']
        ],
        'btn_label'   => 'Submit Your Manuscript',
        'btn_url'     => url('contact.php')
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
      <a href="<?= url('media/events.php') ?>" class="hover:text-white transition">Media</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Sushrut Magazine</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Sushrut — <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">University Magazine</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      A vibrant anthology celebrating literary imagination, scientific discovery, fine arts, poetry, and cultural achievements published annually by the scholars and faculty of RKDF University Ranchi.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('book-open') ?> Annual Literary &amp; Academic Publication
      </span>
      <span class="hero-pill">
        <?= lucide_icon('feather') ?> Multilingual Poetry &amp; Prose
      </span>
      <span class="hero-pill">
        <?= lucide_icon('microscope') ?> Faculty &amp; Student Research
      </span>
      <span class="hero-pill">
        <?= lucide_icon('palette') ?> Fine Arts &amp; Photo Essays
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Media -->
<?php require_once dirname(__DIR__) . '/includes/media_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Key Metrics Banner -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">Annual</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Flagship Publication</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">3+ Lang</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Hindi, English &amp; Regional</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">100+</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Scholarly Entries</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">Free</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Print &amp; Digital Access</span>
      </div>
    </div>

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('book-open', 'w-4 h-4 text-gold') ?> Literary &amp; Academic Publishing Directorate
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Voice of Imagination, Research &amp; Cultural Heritage
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            Named in honor of ancient India’s legendary surgeon and scholar <em>Maharshi Sushruta</em>, our annual publication <strong>"Sushrut"</strong> reflects the cutting-edge spirit, artistic brilliance, and philosophical depth of the university community across disciplines.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check') ?>
              <span>Peer-Reviewed Submissions</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('feather') ?>
              <span>Creative Literature &amp; Poetry</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('shield-check') ?>
              <span>Faculty Editorial Oversight</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Editorial Board
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Annual Anthology</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Published annually with full ISBN registration, print distribution, and global digital PDF archiving.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">Annual</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Print Edition</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">Open</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">To All Scholars</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== MAGAZINE SECTIONS DIRECTORY ==================== -->
    <div class="section-block" id="magazine-sections">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Publication Structure
          </span>
          <h3 class="rkdf-section-title">Sushrut Magazine Sections</h3>
          <p class="rkdf-section-desc">Comprehensive literary, scientific, artistic, and retrospective sections published in each annual edition.</p>
        </div>
        <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Submit Manuscript</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($magazine_sections as $sec): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($sec['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($sec['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($sec['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($sec['desc']) ?></p>

                <!-- Feature List -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($sec['features'] as $feat): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
                      <span><?= e($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & CTA -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <?php foreach ($sec['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <a href="<?= e($sec['btn_url']) ?>" class="prog-spec-btn">
                  <span><?= e($sec['btn_label']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Call for Contributions 2026–27</span>
        </div>
        <h3 class="rkdf-admission-title">
          Contribute Your Creative Writing or Research Article
        </h3>
        <p class="rkdf-admission-desc">
          Students, researchers, and faculty members are invited to submit poems, research essays, short stories, and artwork for the upcoming annual edition of Sushrut.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-primary-btn">
          <span>Submit for Next Edition</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('media/gallery.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Campus Photo Gallery</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
