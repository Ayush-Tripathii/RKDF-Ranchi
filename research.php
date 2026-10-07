<?php
/**
 * RKDF University — Research Page
 */
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_title     = 'Research & Innovation — ' . SITE_NAME;
$page_meta_desc = 'Explore cutting-edge research at RKDF University — 18 centres of excellence, ₹120Cr+ funding, 1400+ indexed publications and 85 patents.';

require_once __DIR__ . '/includes/header.php';

$centres = [
    ['icon'=>'cpu',        'name'=>'Centre for Renewable Energy',         'focus'=>'Perovskite solar cells, clean hydrogen, and energy storage systems.'],
    ['icon'=>'microscope', 'name'=>'AI & Cognitive Sciences Centre',       'focus'=>'Machine learning, NLP, computer vision, and cognitive neural modeling.'],
    ['icon'=>'heart-pulse','name'=>'Centre for Genomics & Medicine',      'focus'=>'Genomic sequencing, targeted drug discovery, and precision medicine.'],
    ['icon'=>'landmark',   'name'=>'Advanced Robotics & Manufacturing',   'focus'=>'Industry 4.0 automation, IoT smart devices, and precision fabrication.'],
    ['icon'=>'globe',      'name'=>'Environmental Sustainability Centre', 'focus'=>'Climate resilience, ecological preservation, and sustainable water solutions.'],
    ['icon'=>'scale',      'name'=>'Cybersecurity & Digital Governance',   'focus'=>'Cryptography, network defense systems, and digital ethics policy.'],
];
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
      <span class="text-white/90">Research &amp; Innovation</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Research that moves the world <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">forward</em>.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      18 Centres of Excellence, ₹120 Cr+ in active funding, and groundbreaking discoveries published in top journals.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('microscope', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> 18 Centres of Excellence
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('lightbulb', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> 85 Patents Filed
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('book-open', 'w-3.5 h-3.5 text-gold shrink-0') ?> 1,400+ Publications
      </span>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/sections/research.php'; ?>

<!-- Centres of Excellence -->
<section class="py-24 bg-surface border-t border-border" id="centres">
  <div class="mx-auto max-w-7xl px-6">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Centres of Excellence</div>
      <h2 class="font-serif text-4xl md:text-5xl mt-3 font-normal text-foreground">18 world-class research facilities.</h2>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <?php foreach ($centres as $c): ?>
        <div class="rounded-2xl border border-border bg-card p-8 shadow-sm hover:border-brand transition">
          <span class="grid h-12 w-12 place-items-center rounded-xl bg-secondary text-brand mb-6">
            <?= lucide_icon($c['icon'], 'w-6 h-6') ?>
          </span>
          <h3 class="font-serif text-xl font-normal text-foreground"><?= e($c['name']) ?></h3>
          <p class="mt-3 text-sm text-muted-foreground leading-relaxed"><?= e($c['focus']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
<!-- Conferences & Symposia -->
<section class="py-20 bg-background border-t border-border" id="conferences">
  <div class="mx-auto max-w-7xl px-6 space-y-12">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
      <div>
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-gold/15 text-gold border border-gold/30 mb-3">
          <?= lucide_icon('calendar', 'w-3.5 h-3.5') ?> Flagship Academic Summits
        </span>
        <h2 class="font-serif text-3xl sm:text-4xl text-foreground font-semibold">National Conferences &amp; Symposia</h2>
      </div>
      <p class="text-muted-foreground text-sm max-w-md">
        Annual international and national scientific conferences fostering multidisciplinary dialogue, peer-reviewed paper presentations, and research partnerships.
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
      <!-- Symbiosphere 2025 -->
      <div class="group rounded-3xl bg-card border border-border p-8 shadow-sm hover:shadow-xl hover:border-gold/50 transition duration-300 flex flex-col justify-between">
        <div class="space-y-4">
          <div class="flex items-center justify-between">
            <span class="px-3 py-1 rounded-full bg-brand/10 text-brand text-xs font-bold">Annual Flagship Summit</span>
            <span class="text-xs text-muted-foreground">March 2025</span>
          </div>
          <h3 class="font-serif text-2xl text-foreground font-semibold group-hover:text-brand transition">
            Symbiosphere 2025: International Bioscience &amp; Healthcare Summit
          </h3>
          <p class="text-sm text-muted-foreground leading-relaxed">
            Organized by the Faculty of Life Sciences and Pharmacy, bringing together global bio-technologists, microbiologists, and clinical researchers to present breakthrough discoveries.
          </p>
          <div class="space-y-2 pt-2 text-xs text-muted-foreground">
            <p class="flex items-center gap-2"><?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-500') ?> Keynote addresses by eminent CSIR &amp; ICMR scientists</p>
            <p class="flex items-center gap-2"><?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-500') ?> Peer-reviewed proceedings indexed in UGC-CARE journals</p>
          </div>
        </div>

        <div class="mt-8 pt-6 border-t border-border flex flex-wrap items-center gap-4">
          <a href="<?= url('documents/SybiosSphere-2025-Brochure.pdf') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full bg-brand text-brand-foreground px-5 py-2.5 text-xs font-bold uppercase tracking-wider hover:bg-gold hover:text-brand transition shadow">
            <?= lucide_icon('download', 'w-4 h-4') ?> Download Brochure
          </a>
          <a href="<?= url('documents/Notice-regarding-SymbioSphere-2024-Registration.pdf') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-bold text-muted-foreground hover:text-foreground transition">
            <?= lucide_icon('file-text', 'w-4 h-4') ?> Registration Guidelines
          </a>
        </div>
      </div>

      <!-- EAIMCP-2024 -->
      <div class="group rounded-3xl bg-card border border-border p-8 shadow-sm hover:shadow-xl hover:border-gold/50 transition duration-300 flex flex-col justify-between">
        <div class="space-y-4">
          <div class="flex items-center justify-between">
            <span class="px-3 py-1 rounded-full bg-gold/15 text-gold text-xs font-bold">National Conference</span>
            <span class="text-xs text-muted-foreground">Engineering &amp; IT</span>
          </div>
          <h3 class="font-serif text-2xl text-foreground font-semibold group-hover:text-brand transition">
            National Conference on EAIMCP-2024
          </h3>
          <p class="text-sm text-muted-foreground leading-relaxed">
            Emerging Applications of Artificial Intelligence, Mining Automation, and Clean Power Systems. Co-hosted by Faculty of Engineering &amp; Technology.
          </p>
          <div class="space-y-2 pt-2 text-xs text-muted-foreground">
            <p class="flex items-center gap-2"><?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-500') ?> Technical tracks on AI, Smart Mining &amp; EV Technology</p>
            <p class="flex items-center gap-2"><?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-500') ?> Industry delegates from Tata Steel, CMPDI &amp; CIL</p>
          </div>
        </div>

        <div class="mt-8 pt-6 border-t border-border flex items-center justify-between">
          <a href="<?= url('documents/EAIMCP-2024.pdf') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full bg-brand text-brand-foreground px-5 py-2.5 text-xs font-bold uppercase tracking-wider hover:bg-gold hover:text-brand transition shadow">
            <?= lucide_icon('download', 'w-4 h-4') ?> Download EAIMCP PDF
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/sections/cta.php'; ?>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
