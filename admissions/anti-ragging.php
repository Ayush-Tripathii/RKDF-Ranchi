<?php
/**
 * RKDF University — Anti-Ragging Committee & UGC Compliance
 * Content Source: https://rkdfuniversity.org/committees/anti-ragging-committee/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Anti-Ragging Committee & 24x7 Helplines | ' . SITE_NAME;
$page_meta_desc = 'Anti-Ragging Committee, Squad, Policy, 24x7 Toll-Free Helpline and Supreme Court/UGC Compliance at RKDF University Ranchi.';

$anti_ragging_pillars = [
    [
        'title'       => 'Statutory Zero-Tolerance Policy',
        'badge'       => 'UGC Compliance',
        'icon'        => 'shield-alert',
        'desc'        => 'Strict adherence to UGC Regulations on Curbing the Menace of Ragging in Higher Educational Institutions, 2009 and Supreme Court directives.',
        'features'    => [
            'Mandatory Student & Parent Anti-Ragging Affidavits',
            'Immediate Suspension & Legal Action on Violations',
            'Regular Anti-Ragging Awareness & Induction Workshops'
        ],
        'status'      => 'Zero-Tolerance',
        'scope'       => 'All Campus & Hostels'
    ],
    [
        'title'       => 'Anti-Ragging Squad & Flying Vigilance',
        'badge'       => '24x7 Monitoring',
        'icon'        => 'users',
        'desc'        => 'Dedicated squad conducting surprise inspections across academic blocks, laboratories, student hostels, dining mess, and campus transit points.',
        'features'    => [
            '24/7 Random Vigilance in Boys & Girls Hostels',
            'Confidential Complaint Dropboxes across Blocks',
            'Prompt Verification & Departmental Inquiry Desk'
        ],
        'status'      => 'Active Squad',
        'scope'       => '24/7 Campus Coverage'
    ],
    [
        'title'       => 'Legal Aid & Psychological Counseling',
        'badge'       => 'Student Support',
        'icon'        => 'heart-handshake',
        'desc'        => 'Comprehensive emotional counseling, mental wellness support, mentor-mentee mapping, and legal aid cell support for all fresher students.',
        'features'    => [
            'Confidential Professional Counseling Sessions',
            'Faculty Proctor & Mentor-Mentee Allocation',
            'Single-Window Grievance Redressal Mechanism'
        ],
        'status'      => 'Full Support',
        'scope'       => 'All Enrolled Students'
    ],
];

$emergency_helplines = [
    [
        'title'       => 'UGC 24×7 Anti-Ragging Desk',
        'authority'   => 'Ministry of Education, Govt. of India',
        'badge'       => 'National Statutory Helpline',
        'icon'        => 'phone-call',
        'desc'        => 'National round-the-clock statutory anti-ragging helpline and central complaint tracking system operating under UGC regulations.',
        'features'    => [
            'National Toll-Free Phone: 1800-180-5522 (24×7 Active)',
            'Official Helpdesk Email: helpline@antiragging.in',
            'Central Complaint Portal: www.antiragging.in | www.c4yindia.org',
            'Direct statutory coordination with District Authorities'
        ],
        'stats'       => [
            ['lbl' => 'Helpline Mode', 'val' => '1800-180-5522 (Toll Free)'],
            ['lbl' => 'Availability', 'val' => '24×7 Immediate Action']
        ],
        'btn_label'   => 'Call National Helpline (1800-180-5522)',
        'btn_url'     => 'tel:18001805522',
        'btn_icon'    => 'phone'
    ],
    [
        'title'       => 'Campus Proctorial Officers',
        'authority'   => 'RKDF University Proctorial Board',
        'badge'       => 'University Nodal Authorities',
        'icon'        => 'shield-check',
        'desc'        => 'Designated university proctorial heads and academic nodal officers stationed on campus for immediate student safety and rapid redressal.',
        'features'    => [
            'Dr. Rajeev Ranjan (Dean Academics): +91 9798715609 · deanacademics@rkdfuniversity.org',
            'Dr. Abhishek Waibhaw (HOD Economics): +91 9334813710 · hod.economics@rkdfuniversity.org',
            '24×7 Quick Reaction Team & Hostel Vigilance Patrols',
            'Guaranteed Confidentiality & Zero-Tolerance Enforcement'
        ],
        'stats'       => [
            ['lbl' => 'Proctorial Head', 'val' => '+91 9798715609'],
            ['lbl' => 'Enforcement', 'val' => 'Zero-Tolerance Policy']
        ],
        'btn_label'   => 'Contact Campus Proctor (+91 9798715609)',
        'btn_url'     => 'tel:09798715609',
        'btn_icon'    => 'phone-call'
    ]
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
      <a href="<?= url('admissions/') ?>" class="hover:text-white transition">Admissions</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Anti-Ragging Committee</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Zero Tolerance Against <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Ragging</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Ensuring a safe, respectful, and inclusive campus environment for every student as per University Grants Commission (UGC) and Hon'ble Supreme Court mandates.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('shield-alert') ?> 24x7 National Toll-Free: 1800-180-5522
      </span>
      <span class="hero-pill">
        <?= lucide_icon('file-text') ?> UGC Regulation Compliant
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> Dedicated Flying Squad
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Admissions -->
<?php require_once dirname(__DIR__) . '/includes/admissions_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('shield-check', 'w-4 h-4 text-gold') ?> Statutory Mandate
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Strict Prevention, Rapid Redressal &amp; Absolute Safety
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            Ragging in any form—physical, verbal, or psychological—is strictly prohibited at RKDF University Ranchi. The Anti-Ragging Committee and Squad enforce proactive vigilance, display helpline boards across campus, and secure signed affidavits from all students and parents.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Any act of ragging is treated as a severe disciplinary violation entailing immediate suspension, academic expulsion, and mandatory reporting to law enforcement under statutory state and national regulations.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>Mandatory Online Affidavits</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Anonymous Complaint Dropboxes</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>24/7 CCTV &amp; Flying Squad</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Helpline
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-alert', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">24×7 Toll-Free</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              National UGC Anti-Ragging Helpline available around the clock.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">1800-180-5522</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">National Toll-Free</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Zero Tolerance</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== PILLARS GRID ==================== -->
    <div class="section-block" id="framework">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Campus Safeguards</span>
          <h3 class="rkdf-section-title">Institutional Safety Framework</h3>
          <p class="rkdf-section-desc">Comprehensive mechanisms designed to prevent, detect, and penalize ragging conduct.</p>
        </div>
        <a href="<?= url('documents/Anti-Ragging-Annexure.pdf') ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Download UGC Affidavit</span>
          <?= lucide_icon('download', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($anti_ragging_pillars as $pillar): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('shield-check', 'w-3 h-3') ?>
                  <span><?= e($pillar['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($pillar['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($pillar['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($pillar['desc']) ?></p>

                <ul class="prog-spec-feature-list">
                  <?php foreach ($pillar['features'] as $ft): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                      <span><?= e($ft) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & Info -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Policy Stance</span>
                    <span class="prog-spec-stat-val text-brand"><?= e($pillar['status']) ?></span>
                  </div>
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Jurisdiction</span>
                    <span class="prog-spec-stat-val text-emerald-700"><?= e($pillar['scope']) ?></span>
                  </div>
                </div>

                <a href="tel:18001805522" class="prog-spec-btn">
                  <span>Helpline: 1800-180-5522</span>
                  <?= lucide_icon('phone-call', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== EMERGENCY CONTACTS & NODAL OFFICERS ==================== -->
    <div class="section-block" id="emergency-helplines">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('phone-call', 'w-3.5 h-3.5') ?> Immediate Redressal
          </span>
          <h3 class="rkdf-section-title">24x7 Anti-Ragging Nodal Officers</h3>
          <p class="rkdf-section-desc">Direct contact numbers of designated university authorities and national statutory bodies for immediate reporting.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($emergency_helplines as $channel): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('shield-check', 'w-3 h-3') ?>
                  <span><?= e($channel['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($channel['title']) ?></h4>
                <span class="text-xs text-white/70 block mt-1"><?= e($channel['authority']) ?></span>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($channel['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($channel['desc']) ?></p>

                <!-- Feature Items List -->
                <ul class="prog-spec-feature-list space-y-2.5">
                  <?php foreach ($channel['features'] as $feat): ?>
                    <li class="prog-spec-feature-item" style="align-items: flex-start !important; gap: 0.65rem !important;">
                      <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 shrink-0 mt-0.5">
                        <?= lucide_icon('check', 'w-3 h-3 text-emerald-700') ?>
                      </span>
                      <span class="text-xs text-slate-700 leading-relaxed"><?= e($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & CTA -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <?php foreach ($channel['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <a href="<?= e($channel['btn_url']) ?>" class="prog-spec-btn">
                  <span><?= e($channel['btn_label']) ?></span>
                  <?= lucide_icon($channel['btn_icon'], 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Safe &amp; Inclusive Campus 2026–27</span>
        </div>
        <h3 class="rkdf-admission-title">
          Experience a Dignified &amp; Welcoming Academic Life
        </h3>
        <p class="rkdf-admission-desc">
          Every scholar at RKDF University Ranchi is entitled to an inspiring, respectful, and safe campus environment.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('documents/Anti-Ragging-Annexure.pdf') ?>" target="_blank" rel="noopener" class="rkdf-admission-primary-btn">
          <span>Download Affidavit</span>
          <?= lucide_icon('download', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Campus Security Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
