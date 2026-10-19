<?php
/**
 * RKDF University Ranchi — Anti-Sexual Harassment Cell
 * Standardized to University Apex Governance Layout
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Anti-Sexual Harassment Cell | " . SITE_NAME;
$page_meta_desc = "Official statutory committee page for Anti-Sexual Harassment Cell at RKDF University Ranchi. Learn about zero tolerance gender policies, POSH compliance, confidential grievance channels, and appointed members.";

$allCommittees = require dirname(__DIR__) . '/data/committees/committees_list.php';
$committee     = $allCommittees['anti-sexual-harassment'] ?? null;
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
      <span class="text-white/90">Anti-Sexual Harassment Cell</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Anti-Sexual <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Harassment Cell</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Constituted under UGC Regulations and the Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013 to guarantee an inclusive, secure, dignified, and fearless campus environment for all students and staff.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> POSH Act 2013 Mandated
      </span>
      <span class="hero-pill">
        <?= lucide_icon('lock') ?> 100% Confidential Redressal
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> <?= count($members) ?> Appointed Council Members
      </span>
      <span class="hero-pill">
        <?= lucide_icon('scale') ?> Zero Tolerance Gender Policy
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
    $spotlight_badge = 'Statutory POSH Mandate';
    $spotlight_title = 'Anti-Sexual Harassment & Gender Safety Cell';
    $spotlight_desc  = 'RKDF University Ranchi upholds an uncompromising zero-tolerance policy against any form of gender discrimination, sexual harassment, or intimidation. The cell ensures dignified, impartial, and strictly confidential inquiry procedures in compliance with POSH Act 2013 and UGC guidelines.';
    $spotlight_pills = [
        ['icon' => 'shield-check',   'text' => 'POSH Act 2013 Compliance'],
        ['icon' => 'lock',           'text' => 'Whistleblower & Privacy Protection'],
        ['icon' => 'scale',          'text' => 'Time-Bound Statutory Inquiries'],
    ];
    $seal_header     = 'Gender Safety Cell';
    $seal_title      = 'Zero Tolerance';
    $seal_desc       = 'Ensuring total physical, emotional, and intellectual safety for women students, faculty, and administrative staff.';
    $seal_footer_tag = 'Statutory Body';
    $seal_count      = count($members) . ' Council Members';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Strategic Focus Areas & Helplines Grid -->
    <div class="space-y-8">
      <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Gender Equity &amp; Protection</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">
            Redressal Channels &amp; Support Systems
          </h3>
        </div>
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-bold uppercase tracking-wider shadow-sm">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Confidential Redressal Active</span>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Confidential Grievance Desk -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('lock') ?>
              </div>
              <span class="recognition-tag">
                Confidential
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Strict Privacy Protocol</span>
              <h3 class="recognition-title">
                Confidential Reporting
              </h3>
              <p class="recognition-desc">
                Direct and protected submission of grievances with guaranteed non-disclosure of complainant identity and immediate interim protection.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Internal Cell</span>
            <a href="mailto:info@rkdfuniversity.org" class="approval-action-btn group">
              <span>File Petition</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 2: Gender Sensitization & POSH -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('heart-handshake') ?>
              </div>
              <span class="recognition-tag">
                Awareness
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Campus Sensitization</span>
              <h3 class="recognition-title">
                Gender Sensitization
              </h3>
              <p class="recognition-desc">
                Conducting mandatory POSH awareness drives, self-defense workshops, and legal literacy seminars across all university faculties.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Women Cell</span>
            <a href="<?= url('committees/women-development-cell.php') ?>" class="approval-action-btn group">
              <span>Women Cell</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 3: Committee Desk Contacts -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('user-check') ?>
              </div>
              <span class="recognition-tag">
                Inquiry Desk
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Committee Secretariat</span>
              <h3 class="recognition-title">
                Inquiry Committee Desk
              </h3>
              <div class="space-y-2 mt-3">
                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Dr. Anita Kumari</div>
                    <div class="text-[11px] text-slate-500 font-medium">Chairperson — COE / Academician</div>
                  </div>
                  <span class="text-[11px] font-semibold text-gold font-mono px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-xs">
                    Chairperson
                  </span>
                </div>

                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Dr. Sheetal Topno</div>
                    <div class="text-[11px] text-slate-500 font-medium">Member — Dean of Academics</div>
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
              <span>Contact Desk</span>
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
            Appointed Members of the Anti-Sexual Harassment Cell
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
              <th style="width: 200px;">Committee Position</th>
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
          <?= lucide_icon('shield-check', 'w-5 h-5') ?>
        </div>
        <div>
          <h3 class="font-serif text-2xl font-bold text-foreground">Key Functions &amp; Redressal Responsibilities</h3>
          <p class="text-xs text-muted-foreground">Statutory protocols mandated under POSH Act 2013 and UGC Gender Regulations</p>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-muted-foreground">
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Strict prohibition and zero tolerance for all forms of gender harassment, verbal abuse, physical misconduct, or psychological distress.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Conducting prompt, unbiased, and strictly confidential inquiry hearings within the statutory time-frame prescribed under POSH norms.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Ensuring complete whistleblower protection and preventing any academic or professional victimization of aggrieved persons.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Recommending deterrent disciplinary actions and submitting formal inquiry reports to the apex University Governing Body.</span>
        </div>
      </div>
    </div>

    <!-- Governance Callout Notice -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('scale', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Grievance Redressal &amp; Student Welfare</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Students Grievance Redressal Committee (SGRC)
        </h3>
        <p class="text-white/80 text-sm max-w-2xl text-left">
          Explore the official statutory council and online complaint submission platform dedicated to student rights, academic justice, and fair hearing.
        </p>
      </div>
      <div class="shrink-0 flex items-center gap-3">
        <a href="<?= url('committees/students-grievance-redressal-committee.php') ?>" class="gov-callout-btn">
          <span>View SGRC Council</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
