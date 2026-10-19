<?php
/**
 * RKDF University Ranchi — Internal Quality Assurance Cell (IQAC)
 * Standardized to University Apex Governance Layout
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Internal Quality Assurance Cell (IQAC) | " . SITE_NAME;
$page_meta_desc = "Official statutory committee page for Internal Quality Assurance Cell (IQAC) at RKDF University Ranchi. Learn about institutional quality frameworks, NAAC compliance, appointed members, and strategic quality benchmarks.";

$allCommittees = require dirname(__DIR__) . '/data/committees/committees_list.php';
$committee     = $allCommittees['internal-quality-assurance-cell'] ?? null;
$members       = $committee['members'] ?? [];

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
      <a href="<?= url('committees/') ?>" class="hover:text-white transition">Committees</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Internal Quality Assurance Cell</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Internal Quality <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Assurance Cell (IQAC)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Constituted under National Assessment and Accreditation Council (NAAC) and UGC guidelines to channelize all institutional measures towards continuous quality enhancement, academic distinction, and systematic performance audits.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('award') ?> NAAC Quality Framework
      </span>
      <span class="hero-pill">
        <?= lucide_icon('trending-up') ?> Continuous Quality Enhancement
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> <?= count($members) ?> Appointed Council Members
      </span>
      <span class="hero-pill">
        <?= lucide_icon('scale') ?> UGC &amp; State Mandated
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/committees_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Statutory Authority Spotlight Banner Component -->
    <?php
    $spotlight_badge = 'NAAC Statutory Mandate';
    $spotlight_title = 'Internal Quality Assurance Cell (IQAC)';
    $spotlight_desc  = 'The Internal Quality Assurance Cell (IQAC) serves as the apex nodal statutory body for developing quality benchmarks across academic curricula, research endeavors, administrative operations, and stakeholder feedback to ensure sustained institutional excellence at RKDF University Ranchi.';
    $spotlight_pills = [
        ['icon' => 'award',        'text' => 'NAAC Quality Benchmarks'],
        ['icon' => 'trending-up',  'text' => 'Outcome-Based Education (OBE)'],
        ['icon' => 'file-text',    'text' => 'Annual Quality Reports (AQAR)'],
    ];
    $seal_header     = 'Quality Directorate';
    $seal_title      = 'Quality Council';
    $seal_desc       = 'Presided by the Vice Chancellor with the Director-IQAC, Registrar, Deans, and Research Directorate representation.';
    $seal_footer_tag = 'Statutory Cell';
    $seal_count      = count($members) . ' Council Members';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Strategic Quality Assurance Pillars Grid -->
    <div class="space-y-8">
      <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Institutional Excellence &amp; Benchmarks</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">
            Strategic Quality Assurance Focus Areas
          </h3>
        </div>
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-bold uppercase tracking-wider shadow-sm">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Active Quality Directorate</span>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Curriculum Audits & OBE -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('book-open') ?>
              </div>
              <span class="recognition-tag">
                Academic Quality
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Curriculum Modernization</span>
              <h3 class="recognition-title">
                Academic &amp; OBE Audits
              </h3>
              <p class="recognition-desc">
                Systematic evaluation of syllabi revisions, outcome-based course attainment, practical laboratory protocols, and continuous student assessments.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Curriculum Hub</span>
            <a href="<?= url('about/board-of-studies.php') ?>" class="approval-action-btn group">
              <span>View Syllabi</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 2: Accreditation & Compliance -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('award') ?>
              </div>
              <span class="recognition-tag">
                Compliance
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Institutional Accreditations</span>
              <h3 class="recognition-title">
                NAAC &amp; UGC Standards
              </h3>
              <p class="recognition-desc">
                Formulation of Annual Quality Assurance Reports (AQAR), Self-Study Reports (SSR), NIRF submissions, and structured stakeholder feedback mechanisms.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Accreditations</span>
            <a href="<?= url('about/accreditations.php') ?>" class="approval-action-btn group">
              <span>View Accreditations</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 3: IQAC Directorate Desk -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('user-check') ?>
              </div>
              <span class="recognition-tag">
                Directorate
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Quality Secretarial Desk</span>
              <h3 class="recognition-title">
                IQAC Directorate
              </h3>
              <div class="space-y-2 mt-3">
                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Dr. Anita Kumari</div>
                    <div class="text-[11px] text-slate-500 font-medium">Director — IQAC</div>
                  </div>
                  <span class="text-[11px] font-semibold text-gold font-mono px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-xs">
                    Director
                  </span>
                </div>

                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Mr. Ankit Prakash</div>
                    <div class="text-[11px] text-slate-500 font-medium">Coordinator — IQAC</div>
                  </div>
                  <span class="text-[11px] font-semibold text-brand font-mono px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-xs">
                    Coordinator
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Official Contact</span>
            <a href="mailto:info@rkdfuniversity.org" class="approval-action-btn group">
              <span>Email IQAC</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Official Statutory Registry Directory Table -->
    <div class="mb-16 section-block space-y-8">
      <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Official Statutory Registry</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">
            Appointed Members of the Internal Quality Assurance Cell
          </h3>
        </div>
        <div class="text-xs text-muted-foreground font-semibold uppercase tracking-wider bg-white px-4 py-2 rounded-full border border-border shadow-sm flex items-center gap-1.5">
          <?= lucide_icon('users', 'w-3.5 h-3.5 text-gold') ?>
          <span><?= count($members) ?> Official Members</span>
        </div>
      </div>

      <div class="gov-table-wrap">
        <table class="gov-table">
          <thead>
            <tr>
              <th style="width: 70px;">#</th>
              <th>Member Name</th>
              <th>Designation / Academic Office</th>
              <th style="width: 200px;">Committee Position</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($members as $idx => $m): 
              $isChair       = stripos($m['role'] ?? '', 'Chair') !== false;
              $isDirector    = stripos($m['designation'] ?? '', 'Director-IQAC') !== false || stripos($m['role'] ?? '', 'Director') !== false;
              $isCoordinator = stripos($m['designation'] ?? '', 'Coordinator-IQAC') !== false;
            ?>
              <tr class="<?= $isChair ? 'bg-amber-50/40' : ($isDirector ? 'bg-slate-50/50' : '') ?>">
                <td style="font-weight: 700; color: #94a3b8;"><?= sprintf('%02d', $idx + 1) ?></td>
                <td>
                  <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl <?= $isChair ? 'bg-gold/20 text-gold border border-gold/40' : ($isDirector ? 'bg-brand/10 text-brand border border-brand/20' : 'bg-slate-100 border border-slate-200 text-brand') ?> flex items-center justify-center shrink-0">
                      <?= lucide_icon($isChair ? 'award' : ($isDirector ? 'shield-check' : 'user'), 'w-4 h-4 ' . ($isChair ? 'text-amber-700' : 'text-gold')) ?>
                    </div>
                    <div>
                      <div class="font-semibold text-slate-900 text-sm sm:text-base">
                        <?= e($m['name']) ?>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="font-semibold text-brand text-sm sm:text-[15px] leading-snug">
                    <?= e($m['designation'] ?? 'Member / Academician') ?>
                  </div>
                </td>
                <td>
                  <div class="text-xs sm:text-sm whitespace-nowrap <?= $isChair ? 'text-amber-700 font-bold' : ($isDirector ? 'text-gold font-bold' : ($isCoordinator ? 'text-brand font-semibold' : 'text-slate-600 font-medium')) ?>">
                    <?= e($isDirector ? 'Director — IQAC' : ($isCoordinator ? 'Coordinator — IQAC' : ($m['role'] ?? 'Member'))) ?>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Key Functions Section (Standard 2x2 Grid) -->
    <div class="rounded-3xl bg-white border border-border p-8 sm:p-10 shadow-sm space-y-6">
      <div class="flex items-center gap-3 pb-4 border-b border-border">
        <div class="w-10 h-10 rounded-xl bg-brand text-gold flex items-center justify-center shrink-0">
          <?= lucide_icon('shield-check', 'w-5 h-5') ?>
        </div>
        <div>
          <h3 class="font-serif text-2xl font-bold text-foreground">Key Functions &amp; Mandate of IQAC</h3>
          <p class="text-xs text-muted-foreground">Core objectives defined in accordance with NAAC Quality Mandate guidelines</p>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-muted-foreground">
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Development and application of quality benchmarks and parameters for diverse academic and administrative activities.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Facilitating the creation of a learner-centric environment conducive to high-quality education and faculty maturation.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Collection and analysis of periodic feedback responses from students, parents, and alumni on institutional processes.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Preparation of the Annual Quality Assurance Report (AQAR) and documentation of university performance programs.</span>
        </div>
      </div>
    </div>

    <!-- Governance Callout Notice -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('shield-check', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Statutory Governance &amp; Approvals</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Government Recognitions &amp; Accreditations
        </h3>
        <p class="text-white/80 text-sm max-w-2xl text-left">
          Review official UGC Section 2(f) recognitions, state statutory legislative acts, AICTE, PCI, and regulatory council gazettes.
        </p>
      </div>
      <div class="shrink-0 flex items-center gap-3">
        <a href="<?= url('about/government-recognition.php') ?>" class="gov-callout-btn">
          <span>View Recognitions</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
