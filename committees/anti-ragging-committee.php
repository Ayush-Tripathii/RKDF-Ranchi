<?php
/**
 * RKDF University Ranchi — Anti-Ragging Committee & Squad
 * Standardized to University Apex Governance Layout
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Anti-Ragging Committee & Squad | " . SITE_NAME;
$page_meta_desc = "Official statutory committee page for Anti-Ragging Committee & Squad at RKDF University Ranchi. Learn about zero tolerance policies, 24x7 emergency helpline, appointed members, and UGC compliance.";

$allCommittees = require dirname(__DIR__) . '/data/committees/committees_list.php';
$committee     = $allCommittees['anti-ragging-committee'] ?? null;
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
      <span class="text-white/90">Anti-Ragging Committee</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Anti-Ragging <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Committee &amp; Squad</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Constituted under UGC Regulations and Hon’ble Supreme Court directives to maintain a 100% ragging-free, secure, and disciplined campus environment with zero tolerance.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('shield-alert') ?> Zero Tolerance Policy
      </span>
      <span class="hero-pill">
        <?= lucide_icon('phone-call') ?> 24×7 Toll-Free: 1800-180-5522
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> <?= count($members) ?> Appointed Members
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
    $spotlight_badge = 'Zero-Tolerance Statutory Mandate';
    $spotlight_title = 'Anti-Ragging Committee & Vigilance Squad';
    $spotlight_desc  = 'In accordance with Supreme Court directives and UGC Regulations on Curbing the Menace of Ragging in Higher Educational Institutions, RKDF University maintains an active standing committee and surveillance squad ensuring complete safety, confidentiality, and institutional discipline.';
    $spotlight_pills = [
        ['icon' => 'shield-alert', 'text' => 'Zero Tolerance Enforcement'],
        ['icon' => 'phone-call',   'text' => '24×7 National Toll Free'],
        ['icon' => 'eye',          'text' => 'Vigilance Squad Patrols'],
    ];
    $seal_header     = 'Anti-Ragging Cell';
    $seal_title      = 'Zero Tolerance';
    $seal_desc       = 'Strict prohibition of any conduct causing teasing, humiliation, or hardship to students with immediate disciplinary actions.';
    $seal_footer_tag = 'Statutory Body';
    $seal_count      = count($members) . ' Council Members';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- 24x7 Helplines & Emergency Contacts Grid -->
    <div class="space-y-8">
      <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Immediate Assistance &amp; Reporting</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">
            24×7 Emergency Helplines &amp; Squad Desk
          </h3>
        </div>
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-bold uppercase tracking-wider shadow-sm">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Round-The-Clock Active Support</span>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: National Toll-Free -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('phone-call') ?>
              </div>
              <span class="recognition-tag">
                24×7 Toll-Free
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">National Call Center</span>
              <h3 class="recognition-title">
                1800-180-5522
              </h3>
              <p class="recognition-desc">
                Round-the-clock national anti-ragging call center operated under UGC regulations for confidential, immediate reporting.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Free Helpline</span>
            <a href="tel:18001805522" class="approval-action-btn group">
              <span>Call Toll-Free</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 2: National Portal -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('globe') ?>
              </div>
              <span class="recognition-tag">
                UGC Portal
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Central Monitoring Cell</span>
              <h3 class="recognition-title truncate" title="helpline@antiragging.in">
                helpline@antiragging.in
              </h3>
              <p class="recognition-desc">
                Centre for Youth (C4Y) monitoring agency: antiragging@c4yindia.org and central web portal for online complaints.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Web Portal</span>
            <a href="https://www.antiragging.in" target="_blank" rel="noopener noreferrer" class="approval-action-btn group">
              <span>Visit Portal</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 3: University Squad Nodal Officers -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('shield-check') ?>
              </div>
              <span class="recognition-tag">
                Vigilance Squad
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Campus Nodal Desk</span>
              <h3 class="recognition-title">
                Campus Squad
              </h3>
              <div class="space-y-2 mt-3">
                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Dr. Rajeev Ranjan</div>
                    <div class="text-[11px] text-slate-500 font-medium">Dean, Faculty of Engg</div>
                  </div>
                  <a href="tel:09798715609" class="text-xs font-mono font-bold text-brand hover:text-gold transition px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-xs">
                    09798715609
                  </a>
                </div>

                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Dr. Abhishek Waibhaw</div>
                    <div class="text-[11px] text-slate-500 font-medium">HOD, Dept. of Economics</div>
                  </div>
                  <a href="tel:09334813710" class="text-xs font-mono font-bold text-brand hover:text-gold transition px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-xs">
                    09334813710
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Squad Email</span>
            <a href="mailto:deanacademics@rkdfuniversity.org" class="approval-action-btn group">
              <span>Email Desk</span>
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
            Appointed Members of the Anti-Ragging Committee
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
          <h3 class="font-serif text-2xl font-bold text-foreground">Key Functions &amp; Statutory Responsibilities</h3>
          <p class="text-xs text-muted-foreground">Mandated protocols defined under UGC Regulations 2009 and Supreme Court directives</p>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-muted-foreground">
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Strict prohibition and zero tolerance for any physical, verbal, mental, or electronic ragging across campus, hostels, and transit.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Continuous surprise vigilance patrols and squad rounds across academic corridors, cafeterias, hostels, and sports grounds.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Immediate confidential inquiry within 24 hours of receiving any petition, ensuring full whistleblower protection.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Mandatory collection of statutory anti-ragging affidavits (Annexure-I) from all newly admitted students and parents annually.</span>
        </div>
      </div>
    </div>

    <!-- Governance Callout Notice -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('file-text', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Statutory Compliance &amp; Affidavit</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          UGC Mandatory Anti-Ragging Undertaking (Annexure-I)
        </h3>
        <p class="text-white/80 text-sm max-w-2xl text-left">
          Download the official statutory undertaking format to be submitted by students and parents during enrollment, or lodge complaints confidentially.
        </p>
      </div>
      <div class="shrink-0 flex items-center gap-3">
        <a href="https://www.antiragging.in/assets/pdf/annexure/Annexure-I.pdf" target="_blank" rel="noopener noreferrer" class="gov-callout-btn">
          <span>Download Annexure-I</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
