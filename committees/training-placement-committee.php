<?php
/**
 * RKDF University Ranchi — Training & Placement Committee
 * Standardized to University Apex Governance Layout
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Training & Placement Committee | " . SITE_NAME;
$page_meta_desc = "Official statutory committee page for Training & Placement Committee at RKDF University Ranchi. Learn about campus placements, industry training bootcamps, corporate relations, appointed council members, and placement support.";

$allCommittees = require dirname(__DIR__) . '/data/committees/committees_list.php';
$committee     = $allCommittees['training-placement-committee'] ?? null;
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
      <span class="text-white/90">Training &amp; Placement</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Training &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Placement Committee</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Constituted under university guidelines to steer career readiness, cultivate high-impact industry alliances, and orchestrate comprehensive on-campus placement drives for graduating scholars.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> Statutory Placement Body
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> Corporate Relations &amp; MoUs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> <?= count($members) ?> Appointed Council Members
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> Career Readiness Cell
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
    $spotlight_badge = 'Corporate Relations & Career Empowerment';
    $spotlight_title = 'Training & Placement Committee (T&P)';
    $spotlight_desc  = 'The Training & Placement Committee functions as the institutional bridge between RKDF University Ranchi and leading national and multinational corporations. It oversees pre-placement skill enhancement bootcamps, technical aptitude workshops, industry internships, corporate MoUs, and campus recruitment drives to ensure graduating scholars secure rewarding career opportunities across engineering, management, pharmacy, legal, and applied science domains.';
    $spotlight_pills = [
        ['icon' => 'briefcase', 'text' => 'Campus Recruitment Drives & Placements'],
        ['icon' => 'award',     'text' => 'Corporate MoUs & Industry Internships'],
        ['icon' => 'sparkles',  'text' => 'Aptitude & Soft-Skill Bootcamps'],
    ];
    $seal_header     = 'Career Directorate';
    $seal_title      = 'T&amp;P Council';
    $seal_desc       = 'Chaired by Mr. Ankit Prakash with Corporate Relations, Engineering, and Law faculty leadership.';
    $seal_footer_tag = 'Statutory Body';
    $seal_count      = count($members) . ' Council Members';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Strategic Focus Areas & Helplines Grid -->
    <div class="space-y-8">
      <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Career Readiness &amp; Corporate Outreach</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">
            Placement Operations &amp; Corporate Desks
          </h3>
        </div>
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-bold uppercase tracking-wider shadow-sm">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Active Placement Cell</span>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Campus Recruitment Drives -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('briefcase') ?>
              </div>
              <span class="recognition-tag">
                Campus Drives
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Recruitment Operations</span>
              <h3 class="recognition-title">
                Campus Placement Drives
              </h3>
              <p class="recognition-desc">
                Organizing on-campus and virtual recruitment drives with Fortune 500 firms, IT conglomerates, pharmaceutical leaders, and research enterprises.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Placement Desk</span>
            <a href="mailto:info@rkdfuniversity.org" class="approval-action-btn group">
              <span>Recruiter Inquiry</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 2: Industry Internships & MoUs -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('award') ?>
              </div>
              <span class="recognition-tag">
                Corporate MoUs
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Industry Alliances</span>
              <h3 class="recognition-title">
                Internships &amp; MoUs
              </h3>
              <p class="recognition-desc">
                Facilitating mandatory summer internships, live industrial projects, and signing strategic corporate MoUs for technology transfer and student hiring.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Academic Hub</span>
            <a href="<?= url('committees/library-committee.php') ?>" class="approval-action-btn group">
              <span>Library Cell</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 3: T&P Directorate Desk -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('user-check') ?>
              </div>
              <span class="recognition-tag">
                Secretariat
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Committee Directorate</span>
              <h3 class="recognition-title">
                Placement Directorate Desk
              </h3>
              <div class="space-y-2 mt-3">
                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Mr. Ankit Prakash</div>
                    <div class="text-[11px] text-slate-500 font-medium">Chairman — Head, Training &amp; Placement</div>
                  </div>
                  <span class="text-[11px] font-semibold text-gold font-mono px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-xs">
                    Chairman
                  </span>
                </div>

                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Ms. Smita Sinha</div>
                    <div class="text-[11px] text-slate-500 font-medium">Member — Placement Officer</div>
                  </div>
                  <span class="text-[11px] font-semibold text-brand font-mono px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-xs">
                    Member
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">University Help</span>
            <a href="tel:07091168777" class="approval-action-btn group">
              <span>Contact T&amp;P Desk</span>
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
            Appointed Members of the Training &amp; Placement Committee
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
              <th>Designation / Academic Role</th>
              <th style="width: 220px;">Committee Position</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($members as $idx => $m): 
              $isChair = stripos($m['role'] ?? '', 'Chair') !== false;
            ?>
              <tr class="<?= $isChair ? 'bg-amber-50/40' : '' ?>">
                <td style="font-weight: 700; color: #94a3b8;"><?= sprintf('%02d', $idx + 1) ?></td>
                <td>
                  <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl <?= $isChair ? 'bg-gold/20 text-gold border border-gold/40' : 'bg-slate-100 border border-slate-200 text-brand' ?> flex items-center justify-center shrink-0">
                      <?= lucide_icon($isChair ? 'award' : 'user', 'w-4 h-4 ' . ($isChair ? 'text-amber-700' : 'text-gold')) ?>
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
                  <div class="text-xs sm:text-sm whitespace-nowrap <?= $isChair ? 'text-amber-700 font-bold' : 'text-slate-600 font-medium' ?>">
                    <?= e($m['role'] ?? 'Member') ?>
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
          <?= lucide_icon('briefcase', 'w-5 h-5') ?>
        </div>
        <div>
          <h3 class="font-serif text-2xl font-bold text-foreground">Key Functions &amp; Placement Responsibilities</h3>
          <p class="text-xs text-muted-foreground">Responsibilities defined under University Career Readiness &amp; Corporate Relations Mandate</p>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-muted-foreground">
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Executing on-campus recruitment cycles, pool campus drives, and coordinating corporate selection procedures.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Conducting pre-placement grooming bootcamps, resume audits, mock interviews, and technical coding rounds.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Partnering with corporate leaders, establishing institutional MoUs, and arranging summer internship stipends.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Maintaining structured placement records, CTC packages data, and facilitating alumni executive mentorship.</span>
        </div>
      </div>
    </div>

    <!-- Governance Callout Notice -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('book-open', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Academic Knowledge Infrastructure</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Library Committee
        </h3>
        <p class="text-white/80 text-sm max-w-2xl text-left">
          Explore the Library Committee managing extensive collections, digital subscriptions, e-journals, and research archives.
        </p>
      </div>
      <div class="shrink-0 flex items-center gap-3">
        <a href="<?= url('committees/library-committee.php') ?>" class="gov-callout-btn">
          <span>Explore Library Committee</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
