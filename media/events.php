<?php
/**
 * RKDF University — Events Page
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Events, Symposia & Conferences — ' . SITE_NAME;
$page_meta_desc = 'Upcoming events at RKDF University — 2nd Convocation, SymbioSphere 2025 National Symposium, EAIMCP 2024 International Conference, and campus festivals.';

$conference_docs = [
    [
        'title'    => 'SymbioSphere 2025 National Science Symposium',
        'badge'    => 'Flagship Event • Brochure',
        'icon'     => 'flask-conical',
        'desc'     => 'National level inter-university bio-sciences and applied technology symposium featuring oral presentations, poster sessions, and keynote addresses.',
        'pdf'      => 'documents/SybiosSphere-2025-Brochure.pdf'
    ],
    [
        'title'    => 'EAIMCP 2024 International Conference',
        'badge'    => 'Engineering & Computing',
        'icon'     => 'cpu',
        'desc'     => 'International Conference on Emerging Advances in Mathematics, Computing, and Physics with peer-reviewed research publications.',
        'pdf'      => 'documents/EAIMCP-2024.pdf'
    ],
    [
        'title'    => 'SymbioSphere 2024 Research Proceedings',
        'badge'    => 'Symposium Archives',
        'icon'     => 'book-open',
        'desc'     => 'Full schedule, abstract compendium, and participant guidelines for the annual life sciences research symposium.',
        'pdf'      => 'documents/Final-SymbioSphere-2024.pdf'
    ],
    [
        'title'    => '2nd Annual Convocation Registration Form',
        'badge'    => 'Graduation Ceremony',
        'icon'     => 'award',
        'desc'     => 'Official degree conferment application proforma for receiving bachelor, master, and doctoral certificates.',
        'pdf'      => 'documents/Convocation-Form-RKDF-2025.pdf'
    ]
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
      <a href="<?= url('media/news.php') ?>" class="hover:text-white transition">Media</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Events</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Events, Symposia &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Conferences</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Convocations, national research symposia, international engineering conferences, and student celebrations at RKDF University Ranchi.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('graduation-cap') ?> Annual Convocations
      </span>
      <span class="hero-pill">
        <?= lucide_icon('microscope') ?> SymbioSphere National Symposium
      </span>
      <span class="hero-pill">
        <?= lucide_icon('cpu') ?> International EAIMCP Conference
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Media -->
<?php require_once dirname(__DIR__) . '/includes/media_nav_tabs.php'; ?>

<!-- ==================== MAJOR CONFERENCE & SYMPOSIA BROCHURES ==================== -->
<section class="py-16 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-8">
    <div class="rkdf-section-header">
      <div>
        <span class="rkdf-section-tag">
          <?= lucide_icon('sparkles', 'w-3.5 h-3.5') ?> Academic Conferences
        </span>
        <h3 class="rkdf-section-title">Major Symposia &amp; Conference Brochures</h3>
        <p class="rkdf-section-desc">Download official brochures, call-for-papers schedules, and convocation guidelines.</p>
      </div>
    </div>

    <!-- Compact 4-Column Card Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php foreach ($conference_docs as $doc): ?>
        <div class="group relative flex flex-col justify-between rounded-2xl border border-border/80 bg-white p-6 shadow-sm hover:shadow-xl hover:border-brand/30 transition-all duration-300 hover:-translate-y-1.5 overflow-hidden">
          <!-- Subtle Top Gradient Glow Bar on Hover -->
          <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-brand via-gold to-brand opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

          <div>
            <!-- Header: Category Badge + Icon -->
            <div class="flex items-center justify-between gap-2 mb-4">
              <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-gold/10 text-amber-900 border border-gold/30">
                <?= lucide_icon('layers', 'w-3 h-3 text-gold shrink-0') ?>
                <span class="truncate"><?= e($doc['badge']) ?></span>
              </span>
              <div class="w-9 h-9 rounded-xl bg-brand/5 text-brand flex items-center justify-center shrink-0 group-hover:bg-brand group-hover:text-white transition-all duration-300 shadow-xs group-hover:scale-105">
                <?= lucide_icon($doc['icon'], 'w-4 h-4') ?>
              </div>
            </div>

            <!-- Title -->
            <h4 class="font-serif text-lg text-foreground font-normal leading-snug line-clamp-2 mb-2.5 group-hover:text-brand transition-colors">
              <?= e($doc['title']) ?>
            </h4>

            <!-- Description -->
            <p class="text-xs text-muted-foreground leading-relaxed line-clamp-3 mb-6">
              <?= e($doc['desc']) ?>
            </p>
          </div>

          <!-- Bottom Action: Download Button with high contrast -->
          <div class="pt-4 border-t border-border/60">
            <a href="<?= url($doc['pdf']) ?>" target="_blank" class="inline-flex items-center justify-center gap-2 w-full py-2.5 px-4 rounded-xl bg-brand text-white text-xs font-semibold hover:bg-gold hover:text-foreground transition-all duration-200 shadow-xs hover:shadow group/btn">
              <?= lucide_icon('download', 'w-3.5 h-3.5 text-gold group-hover/btn:text-foreground transition-colors') ?>
              <span>Download PDF</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5 opacity-60 group-hover/btn:translate-x-0.5 group-hover/btn:opacity-100 transition-all') ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/events.php'; ?>
<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
