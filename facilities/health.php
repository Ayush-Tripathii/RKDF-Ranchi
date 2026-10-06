<?php
/**
 * RKDF University — Healthcare & Medical Facilities
 * Content Source: https://rkdfuniversity.org/facilities/health/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Healthcare & Medical Facilities | ' . SITE_NAME;
$page_meta_desc = 'Discover on-campus healthcare facilities at RKDF University Ranchi: First-aid dispensary, visiting physicians, emergency ambulance, psychological counselling & hospital tie-ups.';

$health_services = [
    [
        'title'       => 'Primary Care & First-Aid Dispensary',
        'badge'       => '24/7 Medical Care',
        'icon'        => 'heart-pulse',
        'desc'        => 'Well-equipped on-campus medical dispensary providing prompt first-aid treatment, routine health checks, and essential emergency medicines.',
        'features'    => [
            '24×7 Available Basic First-Aid & Emergency Medicines',
            'Full-Time Trained Medical Nursing Staff on Campus',
            'Essential Medical Gear: Oxygen, BP & Blood Sugar Kits',
            'Separate Rest & Observation Beds for Unwell Scholars'
        ],
        'stats'       => [
            ['lbl' => 'Dispensary', 'val' => '24×7 On-Campus Unit'],
            ['lbl' => 'Staffing', 'val' => 'Trained Medical Nurses']
        ],
        'btn_label'   => 'Emergency Contact Desk',
        'btn_url'     => url('contact.php')
    ],
    [
        'title'       => 'Doctor Consultations & Health Camps',
        'badge'       => 'Physician Care',
        'icon'        => 'user-check',
        'desc'        => 'Scheduled on-campus consultations with experienced visiting medical practitioners along with periodic wellness checkup camps.',
        'features'    => [
            'Visiting General Physicians for Outpatient Consultations',
            'Annual Comprehensive Health Screening for All Freshers',
            'Specialized Dental, Eye & Orthopedic Screening Drives',
            'Voluntary Blood Donation & Preventive Health Camps'
        ],
        'stats'       => [
            ['lbl' => 'Doctor Visits', 'val' => 'Weekly Scheduled OPD'],
            ['lbl' => 'Health Drives', 'val' => 'Annual Screenings']
        ],
        'btn_label'   => 'Doctor Schedule & Timings',
        'btn_url'     => url('contact.php')
    ],
    [
        'title'       => 'Emergency Ambulance & Hospital Tie-Ups',
        'badge'       => 'Rapid Hospital Network',
        'icon'        => 'truck',
        'desc'        => 'A dedicated university ambulance on standby 24×7, backed by formal tie-ups with Ranchi’s leading multispecialty hospitals for advanced trauma care.',
        'features'    => [
            '24×7 Dedicated Ambulance Vehicle Stationed on Campus',
            'Formal Priority Admission Tie-ups with City Hospitals',
            'Rapid Response Transport for Critical Medical Needs',
            'Designated Faculty Proctor Medical Escort Protocol'
        ],
        'stats'       => [
            ['lbl' => 'Ambulance', 'val' => '24×7 Standby on Campus'],
            ['lbl' => 'Tie-Up Network', 'val' => 'Premier Ranchi Hospitals']
        ],
        'btn_label'   => 'View Hospital Network',
        'btn_url'     => url('contact.php')
    ],
    [
        'title'       => 'Mental Wellness & Counseling Cell',
        'badge'       => 'Psychological Wellbeing',
        'icon'        => 'heart',
        'desc'        => 'Confidential, professional mental health guidance helping scholars manage examination anxiety, emotional distress, and career dilemmas.',
        'features'    => [
            '100% Confidential One-on-One Counseling Sessions',
            'Dedicated Faculty Mentor-Mentee Psychological Mapping',
            'Stress Management & Cognitive Wellness Seminars',
            'Peer Support Groups & Safe Campus Listening Circles'
        ],
        'stats'       => [
            ['lbl' => 'Confidentiality', 'val' => '100% Private Records'],
            ['lbl' => 'Counseling', 'val' => 'Professional Sessions']
        ],
        'btn_label'   => 'Book Counseling Session',
        'btn_url'     => url('contact.php')
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
      <a href="<?= url('facilities/') ?>" class="hover:text-white transition">Facilities</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Health Facilities</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Healthcare, Safety &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Medical Care</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Ensuring comprehensive physical, emotional, and psychological wellbeing across campus through on-site primary care dispensaries, visiting physicians, emergency ambulance transit, and mental wellness counseling.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('heart-pulse') ?> 24/7 First-Aid Dispensary
      </span>
      <span class="hero-pill">
        <?= lucide_icon('user-check') ?> Visiting Doctor Consultations
      </span>
      <span class="hero-pill">
        <?= lucide_icon('truck') ?> Dedicated Emergency Ambulance
      </span>
      <span class="hero-pill">
        <?= lucide_icon('heart') ?> Confidential Mental Counseling
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Facilities -->
<?php require_once dirname(__DIR__) . '/includes/facilities_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Key Metrics Banner -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">24/7</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">First-Aid Medical Unit</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">Visiting</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Physicians &amp; OPD</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">Ambulance</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">On-Campus Transit</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">Counselor</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Confidential Wellness</span>
      </div>
    </div>

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('heart-pulse', 'w-4 h-4 text-gold') ?> Campus Wellness &amp; Medical Safety
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Nurturing a Safe, Healthy &amp; Mindful Campus Community
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            At RKDF University Ranchi, student and staff health is our utmost priority. The university ensures prompt access to medical first-aid, physician consultations, specialized screening camps, and emergency ambulance transport in partnership with city hospitals.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check') ?>
              <span>24/7 First-Aid Dispensary</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('truck') ?>
              <span>Dedicated Emergency Ambulance</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('heart') ?>
              <span>Confidential Psychological Support</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Emergency Desk
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Dispensary Unit</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Centrally stationed on campus with resident medical staff and direct ambulance dispatch capability.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">24×7</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Emergency Care</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">Immediate</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Ambulance Transit</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== HEALTHCARE SERVICES DIRECTORY ==================== -->
    <div class="section-block" id="healthcare-services">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Medical Care Framework
          </span>
          <h3 class="rkdf-section-title">Healthcare &amp; Wellness Services</h3>
          <p class="rkdf-section-desc">Comprehensive medical amenities ensuring physical health, psychological balance, and rapid emergency intervention.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($health_services as $svc): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($svc['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($svc['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($svc['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($svc['desc']) ?></p>

                <!-- Feature List -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($svc['features'] as $feat): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
                      <span><?= e($feat) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & CTA -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <?php foreach ($svc['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <a href="<?= e($svc['btn_url']) ?>" class="prog-spec-btn">
                  <span><?= e($svc['btn_label']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
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
          <span>24×7 Medical Emergency Hotline</span>
        </div>
        <h3 class="rkdf-admission-title">
          Need Immediate Medical or First-Aid Assistance?
        </h3>
        <p class="rkdf-admission-desc">
          Contact the university medical cell or proctorial emergency desk for immediate on-campus first-aid dispatch or hospital referral.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-primary-btn">
          <span>Medical Emergency Contacts</span>
          <?= lucide_icon('phone-call', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('facilities/hostel.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Hostel Medical Protocol</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
