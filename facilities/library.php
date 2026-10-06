<?php
/**
 * RKDF University — Central Library & Digital Knowledge Repository
 * Content Source: https://rkdfuniversity.org/facilities/central-library/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Central Library & Digital Knowledge Repository | ' . SITE_NAME;
$page_meta_desc = 'Explore the Central Library at RKDF University Ranchi: 1,00,000+ volumes, 20,000+ unique titles, Koha computerized ILS, NDLI portal access, print journals & open-shelf reading halls.';

$library_sections = [
    [
        'title'       => 'Print Stack & Book Bank',
        'badge'       => 'Core Circulation Unit',
        'icon'        => 'book',
        'desc'        => 'Expansive physical holdings covering engineering, law, pharmacy, commerce, science, humanities, and agriculture authored by eminent global authorities.',
        'features'    => [
            '1,00,000+ Physical Books & 20,000+ Unique Titles',
            'Semester Book Bank Scheme for All Enrolled Scholars',
            'Rare Reference Compendiums & Technical Handbooks',
            'Multi-Copy Availability of Core Prescribed Syllabi'
        ],
        'stats'       => [
            ['lbl' => 'Circulation', 'val' => 'Open-Shelf System'],
            ['lbl' => 'Titles', 'val' => '20,000+ Unique Titles']
        ],
        'btn_label'   => 'Catalog Search (OPAC)',
        'btn_url'     => 'https://ndl.iitkgp.ac.in/'
    ],
    [
        'title'       => 'Digital Library & NDLI Portal',
        'badge'       => 'Electronic Learning Hub',
        'icon'        => 'globe',
        'desc'        => 'Connected to the National Digital Library of India (NDLI) and global academic repositories, offering high-throughput terminals for digital research.',
        'features'    => [
            'National Digital Library of India (NDLI) Institutional Node',
            'Direct Access to Millions of E-Books & Open Journals',
            'Dedicated Core i7 High-Speed Internet Terminals',
            'Remote 24/7 Digital Knowledge Base Access'
        ],
        'stats'       => [
            ['lbl' => 'Digital Node', 'val' => 'NDLI Integrated'],
            ['lbl' => 'E-Access', 'val' => '24/7 Remote Gateway']
        ],
        'btn_label'   => 'Access NDLI Digital Portal',
        'btn_url'     => 'https://ndl.iitkgp.ac.in/'
    ],
    [
        'title'       => 'Periodicals & Documentation Unit',
        'badge'       => 'Current Research & Media',
        'icon'        => 'newspaper',
        'desc'        => 'Subscriptions to leading national dailies, international research journals, industry magazines, and curated audio-visual educational documentary archives.',
        'features'    => [
            'National Daily Newspapers in Hindi & English',
            'Peer-Reviewed National & Global Print Journals',
            'Specialized Research Feature Files by Documentation Unit',
            'Curated Audio-Visual Film & Educational Media Archive'
        ],
        'stats'       => [
            ['lbl' => 'Periodicals', 'val' => '50+ Subscribed Journals'],
            ['lbl' => 'Newspapers', 'val' => 'All Leading Dailies']
        ],
        'btn_label'   => 'View Journal Stack',
        'btn_url'     => url('research.php')
    ],
    [
        'title'       => 'Open-Shelf Reading Arenas',
        'badge'       => '365 Days Operation',
        'icon'        => 'library',
        'desc'        => 'Spacious, well-illuminated, and peaceful reading halls with open access to stacks, dedicated research carrels, and holiday opening hours for exams.',
        'features'    => [
            'Open-Shelf Browsing for Instant Research Discovery',
            'Quiet Individual Study Carrels & Group Work Areas',
            'Open on Sundays & Academic Holidays for Exam Prep',
            'Comfortable Ergonomic Seating with Natural Lighting'
        ],
        'stats'       => [
            ['lbl' => 'Schedule', 'val' => 'Open on Holidays'],
            ['lbl' => 'Capacity', 'val' => '300+ Seating Capacity']
        ],
        'btn_label'   => 'Library Hours & Rules',
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
      <a href="<?= url('facilities/') ?>" class="hover:text-white transition">Facilities</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Central Library</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Central Library &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Knowledge Hub</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      A modern citadel of inquiry boasting over 1,00,000 print books, 20,000+ unique titles, Koha computerized ILS, NDLI digital portal integration, and open-shelf study arenas.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('book-open') ?> 1,00,000+ Print Books
      </span>
      <span class="hero-pill">
        <?= lucide_icon('globe') ?> National Digital Library (NDLI) Node
      </span>
      <span class="hero-pill">
        <?= lucide_icon('clock') ?> Open on Holidays &amp; Sundays
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> Koha Computerized Cataloging
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Facilities -->
<?php require_once dirname(__DIR__) . '/includes/facilities_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Key Metrics Banner -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">1,00,000+</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Books &amp; Bound Volumes</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">20,000+</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Unique Specialized Titles</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">100%</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Computerized OPAC System</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">365 Days</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Open Access Support</span>
      </div>
    </div>

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('book-open', 'w-4 h-4 text-gold') ?> Knowledge Repository Directorate
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            An Open-Shelf Academic Citadel for Research &amp; Scholarly Pursuit
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            Libraries are centrally situated across all collegiate faculties at RKDF University Ranchi. Featuring over one lakh books authored by renowned Indian and international scholars, the library fosters critical inquiry with open-shelf access, rich print archives, and high-speed digital research networks.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check') ?>
              <span>Open-Shelf Immediate Access</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('globe') ?>
              <span>National Digital Library (NDLI) Node</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Automated Barcoded Circulation</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Digital Gateway
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Koha ILS &amp; NDLI</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Standardized classification with computerized OPAC terminals and direct integration into national academic consortia.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">20,000+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Unique Titles</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">300+ Seats</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Quiet Reading Hall</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== LIBRARY SECTIONS DIRECTORY ==================== -->
    <div class="section-block" id="library-sections">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Knowledge Divisions
          </span>
          <h3 class="rkdf-section-title">Central Library Infrastructure &amp; Services</h3>
          <p class="rkdf-section-desc">Comprehensive collections, digital catalogs, reading chambers, and research documentation facilities.</p>
        </div>
        <div class="flex flex-wrap items-center gap-3 shrink-0">
          <?php if (file_exists(dirname(__DIR__) . '/documents/Library-Membership-Form.pdf')): ?>
            <a href="<?= url('documents/Library-Membership-Form.pdf') ?>" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-emerald-700 text-white font-bold text-xs uppercase tracking-wider hover:bg-brand transition shadow-sm">
              <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-gold') ?>
              <span>Library Membership Form (PDF)</span>
              <?= lucide_icon('download', 'w-3.5 h-3.5') ?>
            </a>
          <?php endif; ?>
          <a href="https://ndl.iitkgp.ac.in/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm">
            <span>Access NDLI Portal</span>
            <?= lucide_icon('arrow-up-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($library_sections as $sec): ?>
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

                <a href="<?= e($sec['btn_url']) ?>" <?= str_starts_with($sec['btn_url'], 'http') ? 'target="_blank" rel="noopener noreferrer"' : '' ?> class="prog-spec-btn">
                  <span><?= e($sec['btn_label']) ?></span>
                  <?= lucide_icon(str_starts_with($sec['btn_url'], 'http') ? 'arrow-up-right' : 'arrow-right', 'w-3.5 h-3.5') ?>
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
          <span>Digital Knowledge Gateway</span>
        </div>
        <h3 class="rkdf-admission-title">
          Explore Millions of Academic Resources on NDLI
        </h3>
        <p class="rkdf-admission-desc">
          Enrolled RKDF University scholars enjoy institutional member privileges on the National Digital Library of India (NDLI) portal with 24×7 remote access.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="https://ndl.iitkgp.ac.in/" target="_blank" rel="noopener noreferrer" class="rkdf-admission-primary-btn">
          <span>Launch NDLI Portal</span>
          <?= lucide_icon('arrow-up-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Library Advisory Desk</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
