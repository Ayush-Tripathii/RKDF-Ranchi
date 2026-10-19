<?php
/**
 * RKDF University Ranchi — Students Grievance Redressal Committee (SGRC)
 * Standardized to University Apex Governance Layout
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Students Grievance Redressal Committee (SGRC) | " . SITE_NAME;
$page_meta_desc = "Official statutory committee page for Students Grievance Redressal Committee (SGRC) at RKDF University Ranchi. Learn about student rights, online Google Form grievance lodging, Ombudsperson hearings, and time-bound redressal.";

$allCommittees = require dirname(__DIR__) . '/data/committees/committees_list.php';
$committee     = $allCommittees['students-grievance-redressal-committee'] ?? null;

// Official Statutory SGRC Panel
$sgrc_panel = [
    [
        'name'        => 'Prof. (Dr.) Taposh Ghoshal',
        'designation' => 'Principal Mentor, Astra Knowledge Foundation, Ranchi',
        'role'        => 'University Ombudsperson',
    ],
    [
        'name'        => 'Dr. Pankaj Chatterjee',
        'designation' => 'Dean of Students Welfare (DSW)',
        'role'        => 'Chairperson / Convener',
    ],
    [
        'name'        => 'Dr. Rajeev Ranjan',
        'designation' => 'Dean – Faculty of Engineering',
        'role'        => 'Senior Faculty Member',
    ],
    [
        'name'        => 'Dr. Anita Kumari',
        'designation' => 'Controller of Examinations',
        'role'        => 'Special Invitee / Member',
    ],
    [
        'name'        => 'Student Representative (Nominated)',
        'designation' => 'Post-Graduate Academic Scholar',
        'role'        => 'Student Representative',
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
      <a href="<?= url('committees/') ?>" class="hover:text-white transition">Committees</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Students Grievance Redressal</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Students Grievance <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Redressal Committee</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Constituted pursuant to UGC (Redressal of Grievances of Students) Regulations to ensure a responsive, transparent, and sympathetic mechanism for resolving all academic and campus concerns.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('scale') ?> Statutory UGC Council
      </span>
      <span class="hero-pill">
        <?= lucide_icon('file-text') ?> Online Complaint Form
      </span>
      <span class="hero-pill">
        <?= lucide_icon('user-check') ?> Independent Ombudsperson
      </span>
      <span class="hero-pill">
        <?= lucide_icon('clock') ?> Time-Bound Resolution
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
    $spotlight_badge = 'UGC Student Rights & Redressal Mandate';
    $spotlight_title = 'Students Grievance Redressal Committee (SGRC)';
    $spotlight_desc  = 'Constituted under the UGC (Redressal of Grievances of Students) Regulations, 2023, SGRC provides an independent, sympathetic, and structured forum for all enrolled students to voice grievances concerning academic evaluations, classroom teaching, hostel amenities, fees, or administrative delays without fear of victimization.';
    $spotlight_pills = [
        ['icon' => 'file-text',  'text' => 'Direct Google Forms Online Redressal Portal'],
        ['icon' => 'scale',      'text' => 'Independent University Ombudsperson Hearings'],
        ['icon' => 'lock',       'text' => 'Guaranteed Confidentiality & Zero Victimization'],
    ];
    $seal_header     = 'Student Rights Directorate';
    $seal_title      = 'SGRC Council';
    $seal_desc       = 'Led by the independent University Ombudsperson Prof. (Dr.) Taposh Ghoshal and Dean of Students Welfare (DSW).';
    $seal_footer_tag = 'Statutory Body';
    $seal_count      = 'Statutory Council Panel';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Strategic Focus Areas & Helplines Grid -->
    <div class="space-y-8">
      <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Student Welfare &amp; Protected Channels</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">
            Redressal Platforms &amp; Ombudsperson Desks
          </h3>
        </div>
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-bold uppercase tracking-wider shadow-sm">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Online Redressal Active</span>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Online Grievance Submission -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('file-text') ?>
              </div>
              <span class="recognition-tag">
                Digital Form
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Direct Online Portal</span>
              <h3 class="recognition-title">
                Lodge Grievance Online
              </h3>
              <p class="recognition-desc">
                Submit academic, evaluation, hostel, or fee concerns directly through the official University Google Forms Grievance Portal for time-bound examination.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Google Form</span>
            <a href="https://forms.gle/WqKVzA1fqRwFtajQ6" target="_blank" rel="noopener noreferrer" class="approval-action-btn group">
              <span>Open Complaint Form</span>
              <?= lucide_icon('external-link', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 2: Independent Ombudsperson Desk -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('scale') ?>
              </div>
              <span class="recognition-tag">
                Appeals
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Independent Authority</span>
              <h3 class="recognition-title">
                University Ombudsperson
              </h3>
              <p class="recognition-desc">
                Appointed pursuant to UGC regulations to hear second-stage appeals and ensure impartial natural justice for aggrieved students across all schools.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Ombudsperson</span>
            <a href="mailto:sgrc@rkdfuniversity.org" class="approval-action-btn group">
              <span>Email Ombudsperson</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 3: SGRC Secretariat Desk -->
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
                SGRC Executive Secretariat
              </h3>
              <div class="space-y-2 mt-3">
                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Prof. (Dr.) Taposh Ghoshal</div>
                    <div class="text-[11px] text-slate-500 font-medium">Ombudsperson — Astra Knowledge Foundation</div>
                  </div>
                  <span class="text-[11px] font-semibold text-gold font-mono px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-xs">
                    Ombuds
                  </span>
                </div>

                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Dr. Pankaj Chatterjee</div>
                    <div class="text-[11px] text-slate-500 font-medium">Convener — Dean of Students Welfare (DSW)</div>
                  </div>
                  <span class="text-[11px] font-semibold text-brand font-mono px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-xs">
                    Convener
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">University Help</span>
            <a href="tel:09431105185" class="approval-action-btn group">
              <span>Contact SGRC</span>
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
            Statutory Council Panel of the SGRC
          </h3>
        </div>
        <div class="text-xs text-muted-foreground font-semibold uppercase tracking-wider bg-white px-4 py-2 rounded-full border border-border shadow-sm flex items-center gap-1.5">
          <?= lucide_icon('users', 'w-3.5 h-3.5 text-gold') ?>
          <span><?= count($sgrc_panel) ?> Council Members</span>
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
            <?php foreach ($sgrc_panel as $idx => $m): 
              $isChair = stripos($m['role'] ?? '', 'Ombuds') !== false || stripos($m['role'] ?? '', 'Chair') !== false;
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
          <?= lucide_icon('scale', 'w-5 h-5') ?>
        </div>
        <div>
          <h3 class="font-serif text-2xl font-bold text-foreground">Key Functions &amp; Redressal Responsibilities</h3>
          <p class="text-xs text-muted-foreground">Responsibilities defined under UGC (Redressal of Grievances of Students) Regulations 2023</p>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-muted-foreground">
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Providing a fair, transparent, and sympathetic platform to address grievances regarding teaching, exams, and amenities.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Convening regular and emergency inquiry hearings within prescribed 15-day statutory time-frames.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Facilitating independent appeal hearings before the University Ombudsperson adhering to natural justice.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Ensuring strict confidentiality and protecting student complainants from bias, discrimination, or victimization.</span>
        </div>
      </div>
    </div>

    <!-- Governance Callout Notice -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('heart-handshake', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Social Justice &amp; Inclusion</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Committee for ST / SC / OBC
        </h3>
        <p class="text-white/80 text-sm max-w-2xl text-left">
          Explore the statutory committee dedicated to protecting the rights, dignity, and affirmative welfare of reserved category students.
        </p>
      </div>
      <div class="shrink-0 flex items-center gap-3">
        <a href="<?= url('committees/committee-for-st-sc-obc.php') ?>" class="gov-callout-btn">
          <span>Explore ST/SC/OBC Cell</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
