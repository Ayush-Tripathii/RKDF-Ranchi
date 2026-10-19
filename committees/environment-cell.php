<?php
/**
 * RKDF University Ranchi — Environment Cell
 * Standardized to University Apex Governance Layout
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Environment Cell | " . SITE_NAME;
$page_meta_desc = "Official statutory cell page for Environment Cell at RKDF University Ranchi. Learn about the Green Lungs Initiative, afforestation drives, sustainability policies, appointed council members, and eco-campus programs.";

$allCommittees = require dirname(__DIR__) . '/data/committees/committees_list.php';
$committee     = $allCommittees['environment-cell'] ?? null;

// Official Statutory Environment Cell Panel
$environment_panel = [
    [
        'name'        => 'Dr. Rajeev Ranjan',
        'designation' => 'Dean – Faculty of Engineering',
        'role'        => 'Chairman (Green Campus Lead)',
    ],
    [
        'name'        => 'Dr. Sheetal Topno',
        'designation' => 'Dean of Academics',
        'role'        => 'Member',
    ],
    [
        'name'        => 'Dr. Fedelic Ashish Toppo',
        'designation' => 'Principal, Institute of Pharmaceutical Sciences',
        'role'        => 'Member',
    ],
    [
        'name'        => 'Mr. Harshit Prasad',
        'designation' => 'Assistant Professor, Dept. of Mining Engineering',
        'role'        => 'Member (Field Coordinator)',
    ],
    [
        'name'        => 'Mr. Vikash Rai',
        'designation' => 'Head – Transportation & Campus Logistics',
        'role'        => 'Member Secretary',
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
      <span class="text-white/90">Environment Cell</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Environment <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Cell</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Championing sustainable campus ecology, biodiversity conservation, the Green Lungs Initiative, and proactive environmental stewardship across RKDF University Ranchi.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('leaf') ?> Green Campus Body
      </span>
      <span class="hero-pill">
        <?= lucide_icon('sparkles') ?> Green Lungs Initiative
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> <?= count($environment_panel) ?> Council Officers
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> Sustainable Ecology
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
    $spotlight_badge = 'Ecological Sustainability & Green Campus Mandate';
    $spotlight_title = 'University Environment Cell';
    $spotlight_desc  = 'The Environment Cell leads RKDF University Ranchi\'s commitment to ecological responsibility and sustainable development. Centered on the university\'s signature Green Lungs Initiative, the cell oversees campus afforestation in riparian zones, rainwater harvesting systems, solar energy transitions, plastic elimination drives, and multi-disciplinary environmental research and community awareness campaigns.';
    $spotlight_pills = [
        ['icon' => 'leaf',     'text' => 'Green Lungs Afforestation & Riparian Recovery'],
        ['icon' => 'sparkles', 'text' => 'Rainwater Harvesting & Renewable Solar Adoption'],
        ['icon' => 'recycle',  'text' => 'Zero-Single-Use-Plastic & Sustainable Waste Management'],
    ];
    $seal_header     = 'Ecology Directorate';
    $seal_title      = 'Environment Council';
    $seal_desc       = 'Chaired by Dr. Rajeev Ranjan (Dean of Engineering) with Pharmacy, Mining, and Logistics leadership.';
    $seal_footer_tag = 'Statutory Cell';
    $seal_count      = count($environment_panel) . ' Council Officers';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Strategic Focus Areas & Helplines Grid -->
    <div class="space-y-8">
      <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Climate Action &amp; Campus Sustainability</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">
            Green Initiatives &amp; Ecological Secretariats
          </h3>
        </div>
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-bold uppercase tracking-wider shadow-sm">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Active Green Campus</span>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Green Lungs & Afforestation -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('leaf') ?>
              </div>
              <span class="recognition-tag">
                Afforestation
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Carbon Offset</span>
              <h3 class="recognition-title">
                Green Lungs Initiative
              </h3>
              <p class="recognition-desc">
                Planting indigenous trees and vegetation across campus riparian zones to absorb greenhouse gases, enhance biodiversity, and create natural green corridors.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">Eco Projects</span>
            <a href="mailto:info@rkdfuniversity.org" class="approval-action-btn group">
              <span>Volunteer Drives</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 2: Renewable Energy & Water Conservation -->
        <div class="recognition-card">
          <div class="space-y-4">
            <div class="flex items-center justify-between gap-4">
              <div class="recognition-icon-box">
                <?= lucide_icon('recycle') ?>
              </div>
              <span class="recognition-tag">
                Clean Tech
              </span>
            </div>

            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-slate-400">Resource Stewardship</span>
              <h3 class="recognition-title">
                Solar &amp; Water Harvesting
              </h3>
              <p class="recognition-desc">
                Implementing rooftop solar photovoltaic energy, campus rainwater recharge pits, LED lighting retrofits, and biological sewage treatment facilities.
              </p>
            </div>
          </div>

          <div class="recognition-footer">
            <span class="text-xs text-slate-400 font-medium">All Cells</span>
            <a href="<?= url('committees/') ?>" class="approval-action-btn group">
              <span>All Committees</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>

        <!-- Card 3: Environment Directorate Desk -->
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
                Environment Directorate Desk
              </h3>
              <div class="space-y-2 mt-3">
                <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100/80 transition">
                  <div>
                    <div class="text-xs font-semibold text-slate-900 leading-tight">Dr. Rajeev Ranjan</div>
                    <div class="text-[11px] text-slate-500 font-medium">Chairman — Dean, Faculty of Engineering</div>
                  </div>
                  <span class="text-[11px] font-semibold text-gold font-mono px-2.5 py-1 rounded-lg bg-white border border-slate-200 shadow-xs">
                    Chairman
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
              <span>Contact Cell</span>
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
            Appointed Officers of the Environment Cell
          </h3>
        </div>
        <div class="text-xs text-muted-foreground font-semibold uppercase tracking-wider bg-white px-4 py-2 rounded-full border border-border shadow-sm flex items-center gap-1.5">
          <?= lucide_icon('users', 'w-3.5 h-3.5 text-gold') ?>
          <span><?= count($environment_panel) ?> Official Officers</span>
        </div>
      </div>

      <div class="gov-table-wrap">
        <table class="gov-table">
          <thead>
            <tr>
              <th style="width: 70px;">#</th>
              <th>Member Name</th>
              <th>Designation / Academic Role</th>
              <th style="width: 250px;">Committee Position</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($environment_panel as $idx => $m): 
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
          <?= lucide_icon('leaf', 'w-5 h-5') ?>
        </div>
        <div>
          <h3 class="font-serif text-2xl font-bold text-foreground">Key Functions &amp; Ecological Responsibilities</h3>
          <p class="text-xs text-muted-foreground">Responsibilities defined under University Green Campus &amp; Sustainability Policy</p>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-muted-foreground">
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Executing the Green Lungs afforestation project to expand campus tree cover and offset carbon footprint.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Overseeing water conservation, rainwater harvesting infrastructure, and ground-water recharge mechanisms.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Enforcing single-use plastic prohibition, organic solid waste composting, and clean electronic waste recycling.</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 border border-border">
          <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0 mt-0.5') ?>
          <span>Conducting climate change workshops, eco-pledge campaigns, and community environmental outreach programs.</span>
        </div>
      </div>
    </div>

    <!-- Governance Callout Notice -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('shield-alert', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Statutory Campus Governance</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Anti-Ragging Committee
        </h3>
        <p class="text-white/80 text-sm max-w-2xl text-left">
          Explore the statutory council ensuring zero tolerance, 24/7 squads, and strict UGC compliance to protect every student on campus.
        </p>
      </div>
      <div class="shrink-0 flex items-center gap-3">
        <a href="<?= url('committees/anti-ragging-committee.php') ?>" class="gov-callout-btn">
          <span>Explore Anti-Ragging</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
