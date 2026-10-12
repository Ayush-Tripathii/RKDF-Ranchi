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
    <!-- Breadcrumbs -->
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <a href="<?= url('about/') ?>" class="hover:text-white transition">About</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Statutory Committees</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Statutory <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Committees &amp; Cells</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Constituted as per UGC regulations and State Statutory Acts to uphold transparency, quality assurance, student welfare, gender equality, and institutional discipline.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('shield-check', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> 18 Statutory Councils &amp; Cells
      </span>
      <span class="hero-pill">
        <?= lucide_icon('scale', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> UGC &amp; State Mandated
      </span>
      <span class="hero-pill">
        <?= lucide_icon('heart-handshake', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Transparent Redressal
      </span>
    </div>
  </div>
</section>

<!-- Committees Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/committees_nav_tabs.php'; ?>

<!-- ==================== COMMITTEES DIRECTORY SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">
    
    <!-- Statutory Authority Spotlight Banner -->
    <div class="gov-spotlight-card mb-16 section-block">
      <!-- Ambient Glow -->
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-4 text-left">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('shield', 'w-4 h-4 text-gold') ?> Institutional Oversight &amp; Redressal
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Commitment to Excellence, Integrity &amp; Equity
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed max-w-2xl font-normal">
            In accordance with statutory mandates of the University Grants Commission (UGC) and state regulations, RKDF University maintains dedicated standing committees and grievance monitoring cells to safeguard student welfare, foster gender equity, enforce academic integrity, and maintain zero tolerance for ragging.
          </p>

          <!-- Authority Highlights -->
          <div class="spotlight-pill-list">
            <span class="spotlight-pill">
              <?= lucide_icon('shield-alert') ?>
              <span>Anti-Ragging Squad</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>IQAC Quality Cell</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('heart-pulse') ?>
              <span>ICC &amp; Gender Equity</span>
            </span>
          </div>
        </div>

        <div class="gazette-seal-inner space-y-4 text-left">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5 text-gold') ?> Statutory Compliance
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('scale', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Zero Tolerance Policy</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Immediate grievance submission, confidential redressal, and unbiased statutory committee hearings for students and staff.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 flex items-center justify-between text-xs">
            <span class="text-gold font-semibold flex items-center gap-1.5">
              <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-400') ?> Active Redressal Cells
            </span>
            <a href="<?= url('committees/anti-ragging-committee.php') ?>" class="inline-flex items-center gap-1 text-white hover:text-gold transition font-semibold text-[11px] uppercase tracking-wider">
              <span>Anti-Ragging</span>
              <?= lucide_icon('arrow-right', 'w-3 h-3') ?>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 18 Statutory Committees Grid -->
    <div class="mb-16 section-block space-y-8 text-left">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Statutory Governance &amp; Oversight</div>
        <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">Official Statutory Committees &amp; Cells</h3>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($committees as $slug => $c): 
          $raw_desc = !empty($c['content'][0]) ? trim($c['content'][0]) : 'Constituted as per statutory mandate to oversee, regulate, and uphold institutional discipline and student welfare.';
          $words = preg_split('/\s+/', $raw_desc);
          if (count($words) > 28) {
              $desc_text = implode(' ', array_slice($words, 0, 28)) . '...';
          } else {
              $desc_text = $raw_desc;
          }
        ?>
          <div class="recognition-card">
            <div class="space-y-4">
              <div class="flex items-center justify-between gap-4">
                <div class="recognition-icon-box">
                  <?= lucide_icon($c['icon'] ?? 'users', 'w-6 h-6') ?>
                </div>
                <span class="recognition-tag">
                  <?= !empty($c['members_count']) && $c['members_count'] > 0 ? ($c['members_count'] . ' Members') : 'Statutory Mandate' ?>
                </span>
              </div>

              <div>
                <h3 class="recognition-title">
                  <?= htmlspecialchars($c['title']) ?>
                </h3>
                <p class="recognition-desc line-clamp-3">
                  <?= htmlspecialchars($desc_text) ?>
                </p>
              </div>
            </div>

            <div class="recognition-footer">
              <span class="text-xs text-slate-400 font-medium">Statutory Cell</span>
              <a href="<?= url('committees/' . $slug . '.php') ?>" class="recognition-btn group">
                <span>View Committee</span>
                <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>

