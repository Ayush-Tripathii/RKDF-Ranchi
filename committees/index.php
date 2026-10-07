<?php
/**
 * RKDF University Ranchi — Statutory Committees Directory Hub
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Statutory Committees & Cells | " . SITE_NAME;
$page_meta_desc = "Explore the statutory committees, quality assurance cells, and grievance councils ensuring equity, welfare, and excellence at RKDF University Ranchi.";

$committees = require dirname(__DIR__) . '/data/committees/committees_list.php';

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
      <span class="text-white/90">Governance</span>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Committees &amp; Cells</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Statutory <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Committees</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Constituted as per UGC regulations and State Statutory Acts to uphold transparency, quality assurance, student welfare, gender equality, and institutional discipline.
    </p>

    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 18 Statutory Councils &amp; Cells
      </span>
      <span class="hero-pill">
        <?= lucide_icon('scale') ?> UGC &amp; State Mandated
      </span>
      <span class="hero-pill">
        <?= lucide_icon('heart-handshake') ?> Transparent Redressal
      </span>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/committees_nav_tabs.php'; ?>

<!-- ==================== COMMITTEES DIRECTORY GRID ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">
    
    <!-- Intro Banner -->
    <div class="rounded-3xl bg-card border border-border p-8 md:p-10 shadow-sm flex flex-col md:flex-row items-center justify-between gap-8">
      <div class="space-y-3 flex-1 text-left">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-gold/15 text-gold border border-gold/30">
          <?= lucide_icon('shield', 'w-3.5 h-3.5') ?> Institutional Oversight
        </span>
        <h2 class="font-serif text-2xl sm:text-3xl text-foreground">
          Commitment to Excellence, Integrity &amp; Equity
        </h2>
        <p class="text-muted-foreground text-sm leading-relaxed max-w-3xl">
          RKDF University has established dedicated standing committees and grievance monitoring cells to safeguard student rights, foster gender equity, enforce academic integrity, and maintain benchmark standards in higher education.
        </p>
      </div>
      <div class="shrink-0 flex flex-wrap gap-3">
        <a href="<?= url('admissions/anti-ragging.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-red-600 text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider hover:bg-red-700 transition shadow">
          <?= lucide_icon('shield-alert', 'w-4 h-4') ?> Anti-Ragging Cell
        </a>
      </div>
    </div>

    <!-- Committees Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($committees as $slug => $c): ?>
        <div class="group relative rounded-2xl bg-card border border-border p-6 shadow-sm hover:shadow-md hover:border-gold/50 transition duration-300 flex flex-col justify-between">
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <div class="w-12 h-12 rounded-xl bg-brand/10 text-brand flex items-center justify-center group-hover:bg-brand group-hover:text-gold transition">
                <?= lucide_icon($c['icon'] ?? 'users', 'w-6 h-6') ?>
              </div>
              <span class="text-xs px-2.5 py-1 rounded-full bg-muted text-muted-foreground font-medium">
                <?= $c['members_count'] > 0 ? ($c['members_count'] . ' Members') : 'Statutory Cell' ?>
              </span>
            </div>

            <h3 class="font-serif text-xl text-foreground font-semibold group-hover:text-brand transition">
              <?= htmlspecialchars($c['title']) ?>
            </h3>

            <p class="text-xs text-muted-foreground leading-relaxed line-clamp-3">
              <?= !empty($c['content']) ? htmlspecialchars($c['content'][0]) : 'Constituted to oversee and maintain statutory standards and ensure prompt administrative actions.' ?>
            </p>
          </div>

          <div class="mt-6 pt-4 border-t border-border flex items-center justify-between">
            <span class="text-xs text-brand font-semibold group-hover:underline">
              View Committee &amp; Members
            </span>
            <a href="<?= url('committees/' . $slug . '.php') ?>" class="w-8 h-8 rounded-full bg-muted flex items-center justify-center text-foreground group-hover:bg-gold group-hover:text-brand transition" aria-label="View Details">
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
