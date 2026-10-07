<?php
/**
 * Script to generate high quality, rich PHP pages for all 18 Statutory Committees
 */

require_once dirname(__DIR__) . '/config/config.php';
$committees = require dirname(__DIR__) . '/data/committees/committees_list.php';
$committeesWebDir = dirname(__DIR__) . '/committees';

if (!is_dir($committeesWebDir)) {
    mkdir($committeesWebDir, 0777, true);
}

// 1. Create includes/committees_nav_tabs.php
$navTabsContent = '<?php
/**
 * Statutory Committees Sub-Navigation Tabs
 */
$current_page = basename($_SERVER[\'PHP_SELF\']);
$active_slug = str_replace(\'.php\', \'\', $current_page);
?>
<div class="sticky top-16 z-30 bg-surface/95 backdrop-blur-md border-b border-border shadow-sm">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="flex items-center gap-2 overflow-x-auto py-3 no-scrollbar text-xs font-medium uppercase tracking-wider">
      <a href="<?= url(\'committees/\') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === \'index\' ? \'bg-brand text-brand-foreground font-bold shadow\' : \'text-muted-foreground hover:text-foreground hover:bg-muted\' ?>">
        All Committees
      </a>
      <a href="<?= url(\'committees/anti-ragging-committee.php\') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === \'anti-ragging-committee\' ? \'bg-brand text-brand-foreground font-bold shadow\' : \'text-muted-foreground hover:text-foreground hover:bg-muted\' ?>">
        Anti-Ragging
      </a>
      <a href="<?= url(\'committees/internal-quality-assurance-cell.php\') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === \'internal-quality-assurance-cell\' ? \'bg-brand text-brand-foreground font-bold shadow\' : \'text-muted-foreground hover:text-foreground hover:bg-muted\' ?>">
        IQAC
      </a>
      <a href="<?= url(\'committees/anti-sexual-harassment.php\') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === \'anti-sexual-harassment\' ? \'bg-brand text-brand-foreground font-bold shadow\' : \'text-muted-foreground hover:text-foreground hover:bg-muted\' ?>">
        Anti-Sexual Harassment
      </a>
      <a href="<?= url(\'committees/grievance-redressal-committee.php\') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === \'grievance-redressal-committee\' ? \'bg-brand text-brand-foreground font-bold shadow\' : \'text-muted-foreground hover:text-foreground hover:bg-muted\' ?>">
        Grievance Redressal
      </a>
      <a href="<?= url(\'committees/internal-complaint-committee.php\') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === \'internal-complaint-committee\' ? \'bg-brand text-brand-foreground font-bold shadow\' : \'text-muted-foreground hover:text-foreground hover:bg-muted\' ?>">
        ICC
      </a>
      <a href="<?= url(\'committees/equal-opportunity-committee.php\') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === \'equal-opportunity-committee\' ? \'bg-brand text-brand-foreground font-bold shadow\' : \'text-muted-foreground hover:text-foreground hover:bg-muted\' ?>">
        Equal Opportunity
      </a>
      <a href="<?= url(\'committees/finance-committee.php\') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === \'finance-committee\' ? \'bg-brand text-brand-foreground font-bold shadow\' : \'text-muted-foreground hover:text-foreground hover:bg-muted\' ?>">
        Finance
      </a>
      <a href="<?= url(\'committees/women-development-cell.php\') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === \'women-development-cell\' ? \'bg-brand text-brand-foreground font-bold shadow\' : \'text-muted-foreground hover:text-foreground hover:bg-muted\' ?>">
        Women Development
      </a>
      <a href="<?= url(\'committees/cultural-committee.php\') ?>" class="shrink-0 px-4 py-2 rounded-full transition <?= $active_slug === \'cultural-committee\' ? \'bg-brand text-brand-foreground font-bold shadow\' : \'text-muted-foreground hover:text-foreground hover:bg-muted\' ?>">
        Cultural
      </a>
    </div>
  </div>
</div>
';
file_put_contents(dirname(__DIR__) . '/includes/committees_nav_tabs.php', $navTabsContent);

// 2. Generate committees/index.php (Hub page)
$hubCode = '<?php
/**
 * RKDF University Ranchi — Statutory Committees Directory Hub
 */
require_once dirname(__DIR__) . \'/config/config.php\';
require_once dirname(__DIR__) . \'/includes/functions.php\';

$page_title     = "Statutory Committees & Cells | " . SITE_NAME;
$page_meta_desc = "Explore the statutory committees, quality assurance cells, and grievance councils ensuring equity, welfare, and excellence at RKDF University Ranchi.";

$committees = require dirname(__DIR__) . \'/data/committees/committees_list.php\';

require_once dirname(__DIR__) . \'/includes/header.php\';
?>

<!-- ==================== INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url(\'/\') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon(\'chevron-right\', \'w-3 h-3\') ?>
      <span class="text-white/90">Governance</span>
      <?= lucide_icon(\'chevron-right\', \'w-3 h-3\') ?>
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
        <?= lucide_icon(\'shield-check\') ?> 18 Statutory Councils &amp; Cells
      </span>
      <span class="hero-pill">
        <?= lucide_icon(\'scale\') ?> UGC &amp; State Mandated
      </span>
      <span class="hero-pill">
        <?= lucide_icon(\'heart-handshake\') ?> Transparent Redressal
      </span>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . \'/includes/committees_nav_tabs.php\'; ?>

<!-- ==================== COMMITTEES DIRECTORY GRID ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">
    
    <!-- Intro Banner -->
    <div class="rounded-3xl bg-card border border-border p-8 md:p-10 shadow-sm flex flex-col md:flex-row items-center justify-between gap-8">
      <div class="space-y-3 flex-1 text-left">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-gold/15 text-gold border border-gold/30">
          <?= lucide_icon(\'shield\', \'w-3.5 h-3.5\') ?> Institutional Oversight
        </span>
        <h2 class="font-serif text-2xl sm:text-3xl text-foreground">
          Commitment to Excellence, Integrity &amp; Equity
        </h2>
        <p class="text-muted-foreground text-sm leading-relaxed max-w-3xl">
          RKDF University has established dedicated standing committees and grievance monitoring cells to safeguard student rights, foster gender equity, enforce academic integrity, and maintain benchmark standards in higher education.
        </p>
      </div>
      <div class="shrink-0 flex flex-wrap gap-3">
        <a href="<?= url(\'admissions/anti-ragging.php\') ?>" class="inline-flex items-center gap-2 rounded-full bg-red-600 text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider hover:bg-red-700 transition shadow">
          <?= lucide_icon(\'shield-alert\', \'w-4 h-4\') ?> Anti-Ragging Cell
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
                <?= lucide_icon($c[\'icon\'] ?? \'users\', \'w-6 h-6\') ?>
              </div>
              <span class="text-xs px-2.5 py-1 rounded-full bg-muted text-muted-foreground font-medium">
                <?= $c[\'members_count\'] > 0 ? ($c[\'members_count\'] . \' Members\') : \'Statutory Cell\' ?>
              </span>
            </div>

            <h3 class="font-serif text-xl text-foreground font-semibold group-hover:text-brand transition">
              <?= htmlspecialchars($c[\'title\']) ?>
            </h3>

            <p class="text-xs text-muted-foreground leading-relaxed line-clamp-3">
              <?= !empty($c[\'content\']) ? htmlspecialchars($c[\'content\'][0]) : \'Constituted to oversee and maintain statutory standards and ensure prompt administrative actions.\' ?>
            </p>
          </div>

          <div class="mt-6 pt-4 border-t border-border flex items-center justify-between">
            <span class="text-xs text-brand font-semibold group-hover:underline">
              View Committee &amp; Members
            </span>
            <a href="<?= url(\'committees/\' . $slug . \'.php\') ?>" class="w-8 h-8 rounded-full bg-muted flex items-center justify-center text-foreground group-hover:bg-gold group-hover:text-brand transition" aria-label="View Details">
              <?= lucide_icon(\'arrow-right\', \'w-4 h-4\') ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . \'/sections/cta.php\'; ?>
<?php require_once dirname(__DIR__) . \'/includes/footer.php\'; ?>
';
file_put_contents($committeesWebDir . '/index.php', $hubCode);
echo "Created committees/index.php\n";

// 3. Generate individual committee pages
foreach ($committees as $slug => $c) {
    $title = $c['title'];
    $icon = $c['icon'];
    $membersCount = $c['members_count'];
    $members = $c['members'];
    $content = $c['content'];

    $code = '<?php
/**
 * RKDF University Ranchi — ' . addslashes($title) . '
 */
require_once dirname(__DIR__) . \'/config/config.php\';
require_once dirname(__DIR__) . \'/includes/functions.php\';

$page_title     = "' . addslashes($title) . ' | " . SITE_NAME;
$page_meta_desc = "Official statutory committee page for ' . addslashes($title) . ' at RKDF University Ranchi, including committee objectives, member details, and grievance channels.";

$allCommittees = require dirname(__DIR__) . \'/data/committees/committees_list.php\';
$committee     = $allCommittees[\'' . $slug . '\'] ?? null;

require_once dirname(__DIR__) . \'/includes/header.php\';
?>

<!-- ==================== INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url(\'/\') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon(\'chevron-right\', \'w-3 h-3\') ?>
      <a href="<?= url(\'committees/\') ?>" class="hover:text-white transition">Committees</a>
      <?= lucide_icon(\'chevron-right\', \'w-3 h-3\') ?>
      <span class="text-white/90">' . htmlspecialchars($title) . '</span>
    </div>

    <h1 class="font-serif text-3xl sm:text-4xl md:text-6xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      ' . htmlspecialchars($title) . '
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Constituted under statutory guidelines to ensure institutional compliance, transparent governance, and student-faculty welfare.
    </p>

    <div class="mt-8 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon(\'' . $icon . '\') ?> Statutory Body
      </span>
      <span class="hero-pill">
        <?= lucide_icon(\'users\') ?> ' . ($membersCount > 0 ? ($membersCount . ' Appointed Members') : 'Institutional Council') . '
      </span>
      <span class="hero-pill">
        <?= lucide_icon(\'shield-check\') ?> UGC &amp; State Mandated
      </span>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . \'/includes/committees_nav_tabs.php\'; ?>

<!-- ==================== COMMITTEE DETAILS & ROSTER ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Objective Spotlight -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="lg:col-span-2 rounded-3xl bg-card border border-border p-8 sm:p-10 shadow-sm space-y-6">
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 rounded-2xl bg-brand/10 text-brand flex items-center justify-center">
            <?= lucide_icon(\'' . $icon . '\', \'w-6 h-6\') ?>
          </div>
          <div>
            <span class="text-xs uppercase font-bold tracking-widest text-gold">Statutory Mandate &amp; Role</span>
            <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-semibold">About the Committee</h2>
          </div>
        </div>

        <div class="space-y-4 text-muted-foreground text-sm sm:text-base leading-relaxed">
';

    if (!empty($content)) {
        foreach ($content as $p) {
            $code .= '          <p>' . nl2br(htmlspecialchars($p)) . '</p>' . "\n";
        }
    } else {
        $code .= '          <p>The ' . htmlspecialchars($title) . ' operates as an apex administrative and regulatory body to oversee designated functions, resolve grievances, formulate policy guidelines, and ensure absolute adherence to state and national educational norms.</p>' . "\n";
    }

    $code .= '        </div>

        <!-- Quick Help Alert if applicable -->
        <div class="rounded-2xl bg-brand/5 border border-brand/20 p-5 flex items-start gap-4">
          <div class="text-brand shrink-0 mt-0.5">
            <?= lucide_icon(\'info\', \'w-5 h-5\') ?>
          </div>
          <div class="text-xs sm:text-sm text-muted-foreground space-y-1">
            <p class="font-bold text-foreground">Confidential &amp; Prompt Grievance Redressal</p>
            <p>All petitions and complaints submitted to the committee are processed with strict confidentiality and in accordance with prescribed time-bound statutory norms.</p>
          </div>
        </div>
      </div>

      <!-- Quick Action / Helpline Sidebar -->
      <div class="space-y-6">
        <div class="rounded-3xl bg-brand text-brand-foreground p-6 sm:p-8 shadow-xl border border-gold/30 space-y-6">
          <div class="space-y-2">
            <span class="text-xs uppercase font-bold tracking-widest text-gold flex items-center gap-1.5">
              <?= lucide_icon(\'phone-call\', \'w-4 h-4\') ?> Direct Assistance
            </span>
            <h3 class="font-serif text-xl font-normal text-white">University Secretariat</h3>
            <p class="text-xs text-white/80 leading-relaxed">For urgent submissions, notifications, or formal representations to this committee:</p>
          </div>

          <div class="space-y-3 text-xs">
            <div class="flex items-center gap-3 bg-white/10 p-3 rounded-xl backdrop-blur">
              <?= lucide_icon(\'mail\', \'w-4 h-4 text-gold shrink-0\') ?>
              <span class="text-white/90">info@rkdfuniversity.org</span>
            </div>
            <div class="flex items-center gap-3 bg-white/10 p-3 rounded-xl backdrop-blur">
              <?= lucide_icon(\'phone\', \'w-4 h-4 text-gold shrink-0\') ?>
              <span class="text-white/90">+91 7091168777</span>
            </div>
            <div class="flex items-center gap-3 bg-white/10 p-3 rounded-xl backdrop-blur">
              <?= lucide_icon(\'map-pin\', \'w-4 h-4 text-gold shrink-0\') ?>
              <span class="text-white/90">RKDF University, Ranchi Campus</span>
            </div>
          </div>

          <a href="<?= url(\'about/rti-corner.php\') ?>" class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-gold text-brand py-3 text-xs font-bold uppercase tracking-wider hover:bg-white transition shadow">
            <span>RTI &amp; Statutory Compliance</span>
            <?= lucide_icon(\'arrow-right\', \'w-4 h-4\') ?>
          </a>
        </div>

        <div class="rounded-2xl bg-card border border-border p-5 space-y-3">
          <div class="text-xs font-bold uppercase tracking-wider text-muted-foreground flex items-center gap-1.5">
            <?= lucide_icon(\'layers\', \'w-3.5 h-3.5 text-gold\') ?> Quick Navigation
          </div>
          <div class="flex flex-col gap-2 text-xs">
            <a href="<?= url(\'committees/\') ?>" class="text-foreground hover:text-brand transition flex items-center justify-between py-1">
              <span>All 18 Statutory Committees</span>
              <?= lucide_icon(\'chevron-right\', \'w-3.5 h-3.5\') ?>
            </a>
            <a href="<?= url(\'boards/board-of-governors.php\') ?>" class="text-foreground hover:text-brand transition flex items-center justify-between py-1">
              <span>Board of Governors</span>
              <?= lucide_icon(\'chevron-right\', \'w-3.5 h-3.5\') ?>
            </a>
            <a href="<?= url(\'governance/deans.php\') ?>" class="text-foreground hover:text-brand transition flex items-center justify-between py-1">
              <span>Deans &amp; Academic Heads</span>
              <?= lucide_icon(\'chevron-right\', \'w-3.5 h-3.5\') ?>
            </a>
          </div>
        </div>
      </div>
    </div>
';

    if (!empty($members)) {
        $code .= '
    <!-- Members Directory Table -->
    <div class="space-y-6">
      <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-gold/15 text-gold border border-gold/30">
            <?= lucide_icon(\'users\', \'w-3.5 h-3.5\') ?> Official Composition
          </span>
          <h2 class="font-serif text-2xl sm:text-3xl text-foreground font-semibold mt-2">
            Appointed Members of the Committee
          </h2>
        </div>
        <span class="text-xs px-3 py-1.5 rounded-full bg-brand/10 text-brand font-bold">
          ' . count($members) . ' Members
        </span>
      </div>

      <div class="overflow-hidden rounded-2xl border border-border bg-card shadow-sm">
        <div class="overflow-x-auto">
          <table class="w-full text-left text-sm text-muted-foreground">
            <thead class="bg-muted/50 text-xs uppercase text-foreground font-semibold border-b border-border">
              <tr>
                <th scope="col" class="px-6 py-4 w-16">Sl.</th>
                <th scope="col" class="px-6 py-4">Name of the Member</th>
                <th scope="col" class="px-6 py-4">Designation / Role</th>
                <th scope="col" class="px-6 py-4">Committee Position</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-border">';

        $idx = 1;
        foreach ($members as $m) {
            $code .= '
              <tr class="hover:bg-muted/30 transition">
                <td class="px-6 py-4 font-mono text-xs font-semibold text-foreground">' . $idx++ . '</td>
                <td class="px-6 py-4 font-medium text-foreground">' . htmlspecialchars($m['name']) . '</td>
                <td class="px-6 py-4 text-xs">' . htmlspecialchars($m['designation']) . '</td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold ' . (stripos($m['role'], 'chair') !== false ? 'bg-gold/20 text-gold-dark font-bold' : 'bg-brand/10 text-brand') . '">
                    ' . htmlspecialchars($m['role']) . '
                  </span>
                </td>
              </tr>';
        }

        $code .= '
            </tbody>
          </table>
        </div>
      </div>
    </div>';
    }

    $code .= '

  </div>
</section>

<?php require_once dirname(__DIR__) . \'/sections/cta.php\'; ?>
<?php require_once dirname(__DIR__) . \'/includes/footer.php\'; ?>
';

    file_put_contents($committeesWebDir . '/' . $slug . '.php', $code);
    echo "Generated committees/" . $slug . ".php\n";
}

echo "All committee pages created successfully!\n";
