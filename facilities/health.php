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
    <div class="rkdf-stat-grid">
      <!-- 24/7 First-Aid -->
      <div class="rkdf-stat-card">
        <div class="rkdf-stat-top">
          <div class="rkdf-stat-iconbox">
            <?= lucide_icon('heart-pulse') ?>
          </div>
          <span class="rkdf-stat-badge">Medical Post</span>
        </div>
        <div class="rkdf-stat-num-row">
          <span class="rkdf-stat-number">24/7</span>
          <span class="rkdf-stat-suffix">First-Aid</span>
        </div>
        <div class="rkdf-stat-label">Primary Medical Dispensary</div>
        <p class="rkdf-stat-desc">Immediate medical care, diagnostic kits &amp; trained nursing staff</p>
      </div>

      <!-- OPD Consults -->
      <div class="rkdf-stat-card">
        <div class="rkdf-stat-top">
          <div class="rkdf-stat-iconbox">
            <?= lucide_icon('user-check') ?>
          </div>
          <span class="rkdf-stat-badge">Clinical Care</span>
        </div>
        <div class="rkdf-stat-num-row">
          <span class="rkdf-stat-number">OPD</span>
          <span class="rkdf-stat-suffix">Consults</span>
        </div>
        <div class="rkdf-stat-label">Visiting Medical Specialists</div>
        <p class="rkdf-stat-desc">Scheduled doctor consultations and seasonal health check-ups</p>
      </div>

      <!-- Ambulance Transit -->
      <div class="rkdf-stat-card">
        <div class="rkdf-stat-top">
          <div class="rkdf-stat-iconbox">
            <?= lucide_icon('truck') ?>
          </div>
          <span class="rkdf-stat-badge">Emergency Transit</span>
        </div>
        <div class="rkdf-stat-num-row">
          <span class="rkdf-stat-number">Rapid</span>
          <span class="rkdf-stat-suffix">Transit</span>
        </div>
        <div class="rkdf-stat-label">On-Campus Ambulance Link</div>
        <p class="rkdf-stat-desc">Swift transit linkage to nearby partner hospitals &amp; trauma centers</p>
      </div>

      <!-- Confidential Counseling -->
      <div class="rkdf-stat-card">
        <div class="rkdf-stat-top">
          <div class="rkdf-stat-iconbox">
            <?= lucide_icon('heart-handshake') ?>
          </div>
          <span class="rkdf-stat-badge">Mental Wellness</span>
        </div>
        <div class="rkdf-stat-num-row">
          <span class="rkdf-stat-number">1-on-1</span>
          <span class="rkdf-stat-suffix">Care</span>
        </div>
        <div class="rkdf-stat-label">Confidential Counseling</div>
        <p class="rkdf-stat-desc">Professional stress management, mental health &amp; life guidance</p>
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

    <!-- ==================== HEALTHCARE VISUAL GALLERY & TREE AMBULANCE ==================== -->
    <div class="section-block" id="health-gallery">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('camera', 'w-3.5 h-3.5') ?> Medical Infrastructure &amp; Clinical Care
          </span>
          <h3 class="rkdf-section-title">On-Campus Dispensary &amp; Care Facilities</h3>
          <p class="rkdf-section-desc">Visual overview of our on-site medical dispensary, first-aid examination units, nursing care staff, and environmental health initiatives.</p>
        </div>
        <?php if (file_exists(dirname(__DIR__) . '/documents/Tree-Ambulance.pdf')): ?>
          <a href="<?= url('documents/Tree-Ambulance.pdf') ?>" target="_blank" class="rkdf-doc-dl-btn shrink-0">
            <?= lucide_icon('file-text') ?>
            <span>Tree Ambulance Dossier (PDF)</span>
            <?= lucide_icon('download') ?>
          </a>
        <?php endif; ?>
      </div>

      <?php
      $medical_cards = [
          [
              'img'          => 'health-1.jpg',
              'badge'        => 'Free Medical Camp',
              'badge_icon'   => 'heart-pulse',
              'title'        => 'Annual Free Health Check-Up Camp',
              'desc'         => 'Organized under IQAC with medical specialists conducting general health examinations, vital diagnostics, and consultations.',
              'footer_icon'  => 'user-check',
              'footer_left'  => 'Dr. Subhashini Toppo &amp; Specialists',
              'footer_right' => 'Annual IQAC Camp',
          ],
          [
              'img'          => 'health-2.jpg',
              'badge'        => 'Physical Wellness',
              'badge_icon'   => 'sparkles',
              'title'        => 'Yoga, Ergonomics &amp; Stress Relief',
              'desc'         => 'Campus-wide guided posture ergonomics, yogic pranayama, and mental health rejuvenation sessions for scholars.',
              'footer_icon'  => 'sparkles',
              'footer_left'  => 'Holistic Student Rejuvenation',
              'footer_right' => 'Weekly Activity',
          ],
          [
              'img'          => 'health-3.jpg',
              'badge'        => 'Clinical Examination',
              'badge_icon'   => 'user-check',
              'title'        => 'Doctor Examination &amp; Vital Diagnostics',
              'desc'         => 'Dedicated clinical consulting room for preliminary patient screening, blood pressure evaluation, and prescriptions.',
              'footer_icon'  => 'heart-pulse',
              'footer_left'  => 'Physician Consulting Desk',
              'footer_right' => 'Daily OPD Schedule',
          ],
          [
              'img'          => 'health-4.jpg',
              'badge'        => 'First-Aid Unit',
              'badge_icon'   => 'shield-check',
              'title'        => 'Dispensary &amp; Patient Recovery Ward',
              'desc'         => 'Furnished patient recovery beds, essential pharmaceuticals, first-aid dressing kits, and trained attendant nursing care.',
              'footer_icon'  => 'shield-check',
              'footer_left'  => '24×7 Emergency First-Aid',
              'footer_right' => 'On-Campus Dispensary',
          ],
          [
              'img'          => 'health-6.jpg',
              'badge'        => 'Preventive Advisory',
              'badge_icon'   => 'award',
              'title'        => 'Student Counseling &amp; Hygiene Care',
              'desc'         => 'Seasonal immunization advisories, nutritional lifestyle counseling, and personal health hygiene support.',
              'footer_icon'  => 'award',
              'footer_left'  => 'Preventive Wellness Cell',
              'footer_right' => 'Student Health Desk',
          ],
      ];
      ?>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <!-- Card 1: Medical Camp -->
        <article class="group relative rounded-2xl overflow-hidden bg-white border border-slate-200/80 shadow-xs hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between">
          <div>
            <div class="relative h-52 sm:h-56 overflow-hidden bg-slate-900">
              <img 
                src="<?= url('images/' . $medical_cards[0]['img']) ?>" 
                alt="<?= e($medical_cards[0]['title']) ?>" 
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                loading="lazy"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>
              <div class="absolute top-3 left-3">
                <span class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-white/95 text-slate-800 shadow-xs backdrop-blur-xs">
                  <?= lucide_icon($medical_cards[0]['badge_icon'], 'w-3 h-3 text-emerald-600') ?>
                  <?= e($medical_cards[0]['badge']) ?>
                </span>
              </div>
            </div>
            <div class="p-6">
              <h4 class="font-serif text-xl font-normal text-slate-900 group-hover:text-brand transition-colors line-clamp-1">
                <?= e($medical_cards[0]['title']) ?>
              </h4>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
                <?= e($medical_cards[0]['desc']) ?>
              </p>
            </div>
          </div>
          <div class="px-6 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-medium">
            <span class="flex items-center gap-1.5 text-slate-700">
              <?= lucide_icon($medical_cards[0]['footer_icon'], 'w-3.5 h-3.5 text-emerald-600') ?>
              <span><?= $medical_cards[0]['footer_left'] ?></span>
            </span>
            <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold"><?= e($medical_cards[0]['footer_right']) ?></span>
          </div>
        </article>

        <!-- Card 2: Yoga & Wellness -->
        <article class="group relative rounded-2xl overflow-hidden bg-white border border-slate-200/80 shadow-xs hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between">
          <div>
            <div class="relative h-52 sm:h-56 overflow-hidden bg-slate-900">
              <img 
                src="<?= url('images/' . $medical_cards[1]['img']) ?>" 
                alt="<?= e($medical_cards[1]['title']) ?>" 
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                loading="lazy"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>
              <div class="absolute top-3 left-3">
                <span class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-white/95 text-slate-800 shadow-xs backdrop-blur-xs">
                  <?= lucide_icon($medical_cards[1]['badge_icon'], 'w-3 h-3 text-gold') ?>
                  <?= e($medical_cards[1]['badge']) ?>
                </span>
              </div>
            </div>
            <div class="p-6">
              <h4 class="font-serif text-xl font-normal text-slate-900 group-hover:text-brand transition-colors line-clamp-1">
                <?= e($medical_cards[1]['title']) ?>
              </h4>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
                <?= e($medical_cards[1]['desc']) ?>
              </p>
            </div>
          </div>
          <div class="px-6 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-medium">
            <span class="flex items-center gap-1.5 text-slate-700">
              <?= lucide_icon($medical_cards[1]['footer_icon'], 'w-3.5 h-3.5 text-gold') ?>
              <span><?= e($medical_cards[1]['footer_left']) ?></span>
            </span>
            <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold"><?= e($medical_cards[1]['footer_right']) ?></span>
          </div>
        </article>

        <!-- Card 3: Featured Tree Ambulance Initiative Spotlight -->
        <article class="bg-gradient-to-br from-[#061a13] via-[#0d2a20] to-[#081812] text-white rounded-2xl p-6 sm:p-7 border border-emerald-500/30 shadow-md relative overflow-hidden flex flex-col justify-between group hover:-translate-y-1.5 hover:shadow-xl transition-all duration-300">
          <div class="absolute -right-12 -top-12 w-44 h-44 bg-emerald-500/15 rounded-full blur-2xl pointer-events-none"></div>
          <div class="absolute -left-12 -bottom-12 w-44 h-44 bg-gold/10 rounded-full blur-2xl pointer-events-none"></div>

          <div class="relative z-10 space-y-4">
            <div class="flex items-center justify-between gap-3">
              <div class="w-10 h-10 rounded-xl bg-emerald-500/20 border border-emerald-500/40 flex items-center justify-center text-emerald-400 shadow-inner">
                <?= lucide_icon('leaf', 'w-5 h-5') ?>
              </div>
              <span class="text-[10px] font-bold uppercase tracking-widest px-2.5 py-1 rounded-full bg-emerald-400/15 text-emerald-300 border border-emerald-400/30">
                Eco-Health Breakthrough
              </span>
            </div>

            <div>
              <div class="text-[10px] font-bold text-gold uppercase tracking-widest">Pioneered 22 August 2020</div>
              <h4 class="font-serif text-2xl font-normal text-white mt-1 leading-snug">
                Tree Ambulance Initiative
              </h4>
              <p class="text-xs sm:text-sm text-white/80 leading-relaxed mt-2.5">
                Pioneered by RKDF University Ranchi for dedicated medical diagnosis, tree surgery, and revival of damaged urban flora across Ranchi.
              </p>
            </div>

            <div class="space-y-2 pt-1 text-xs text-white/85">
              <div class="flex items-center gap-2">
                <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-400 shrink-0') ?>
                <span>First Tree Ambulance in Eastern India</span>
              </div>
              <div class="flex items-center gap-2">
                <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-400 shrink-0') ?>
                <span>On-Site Tree Surgery &amp; Botanical Care</span>
              </div>
              <div class="flex items-center gap-2">
                <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-400 shrink-0') ?>
                <span>Free Civic Service by Botany Specialists</span>
              </div>
            </div>
          </div>

          <?php if (file_exists(dirname(__DIR__) . '/documents/Tree-Ambulance.pdf')): ?>
            <div class="relative z-10 pt-5 mt-4 border-t border-white/10">
              <a href="<?= url('documents/Tree-Ambulance.pdf') ?>" target="_blank" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-semibold text-xs tracking-wider uppercase shadow-md hover:shadow-lg transition-all duration-200">
                <?= lucide_icon('file-text', 'w-3.5 h-3.5') ?>
                <span>Download Official Report (PDF)</span>
                <?= lucide_icon('download', 'w-3.5 h-3.5') ?>
              </a>
            </div>
          <?php endif; ?>
        </article>

        <!-- Card 4: Clinical Consultation -->
        <article class="group relative rounded-2xl overflow-hidden bg-white border border-slate-200/80 shadow-xs hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between">
          <div>
            <div class="relative h-52 sm:h-56 overflow-hidden bg-slate-900">
              <img 
                src="<?= url('images/' . $medical_cards[2]['img']) ?>" 
                alt="<?= e($medical_cards[2]['title']) ?>" 
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                loading="lazy"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>
              <div class="absolute top-3 left-3">
                <span class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-white/95 text-slate-800 shadow-xs backdrop-blur-xs">
                  <?= lucide_icon($medical_cards[2]['badge_icon'], 'w-3 h-3 text-brand') ?>
                  <?= e($medical_cards[2]['badge']) ?>
                </span>
              </div>
            </div>
            <div class="p-6">
              <h4 class="font-serif text-xl font-normal text-slate-900 group-hover:text-brand transition-colors line-clamp-1">
                <?= e($medical_cards[2]['title']) ?>
              </h4>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
                <?= e($medical_cards[2]['desc']) ?>
              </p>
            </div>
          </div>
          <div class="px-6 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-medium">
            <span class="flex items-center gap-1.5 text-slate-700">
              <?= lucide_icon($medical_cards[2]['footer_icon'], 'w-3.5 h-3.5 text-brand') ?>
              <span><?= e($medical_cards[2]['footer_left']) ?></span>
            </span>
            <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold"><?= e($medical_cards[2]['footer_right']) ?></span>
          </div>
        </article>

        <!-- Card 5: Dispensary & Ward -->
        <article class="group relative rounded-2xl overflow-hidden bg-white border border-slate-200/80 shadow-xs hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between">
          <div>
            <div class="relative h-52 sm:h-56 overflow-hidden bg-slate-900">
              <img 
                src="<?= url('images/' . $medical_cards[3]['img']) ?>" 
                alt="<?= e($medical_cards[3]['title']) ?>" 
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                loading="lazy"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>
              <div class="absolute top-3 left-3">
                <span class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-white/95 text-slate-800 shadow-xs backdrop-blur-xs">
                  <?= lucide_icon($medical_cards[3]['badge_icon'], 'w-3 h-3 text-emerald-600') ?>
                  <?= e($medical_cards[3]['badge']) ?>
                </span>
              </div>
            </div>
            <div class="p-6">
              <h4 class="font-serif text-xl font-normal text-slate-900 group-hover:text-brand transition-colors line-clamp-1">
                <?= e($medical_cards[3]['title']) ?>
              </h4>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
                <?= e($medical_cards[3]['desc']) ?>
              </p>
            </div>
          </div>
          <div class="px-6 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-medium">
            <span class="flex items-center gap-1.5 text-slate-700">
              <?= lucide_icon($medical_cards[3]['footer_icon'], 'w-3.5 h-3.5 text-emerald-600') ?>
              <span><?= e($medical_cards[3]['footer_left']) ?></span>
            </span>
            <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold"><?= e($medical_cards[3]['footer_right']) ?></span>
          </div>
        </article>

        <!-- Card 6: Counseling & Preventive Health -->
        <article class="group relative rounded-2xl overflow-hidden bg-white border border-slate-200/80 shadow-xs hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between">
          <div>
            <div class="relative h-52 sm:h-56 overflow-hidden bg-slate-900">
              <img 
                src="<?= url('images/' . $medical_cards[4]['img']) ?>" 
                alt="<?= e($medical_cards[4]['title']) ?>" 
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                loading="lazy"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>
              <div class="absolute top-3 left-3">
                <span class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-white/95 text-slate-800 shadow-xs backdrop-blur-xs">
                  <?= lucide_icon($medical_cards[4]['badge_icon'], 'w-3 h-3 text-gold') ?>
                  <?= e($medical_cards[4]['badge']) ?>
                </span>
              </div>
            </div>
            <div class="p-6">
              <h4 class="font-serif text-xl font-normal text-slate-900 group-hover:text-brand transition-colors line-clamp-1">
                <?= e($medical_cards[4]['title']) ?>
              </h4>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-2.5">
                <?= e($medical_cards[4]['desc']) ?>
              </p>
            </div>
          </div>
          <div class="px-6 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-medium">
            <span class="flex items-center gap-1.5 text-slate-700">
              <?= lucide_icon($medical_cards[4]['footer_icon'], 'w-3.5 h-3.5 text-gold') ?>
              <span><?= e($medical_cards[4]['footer_left']) ?></span>
            </span>
            <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold"><?= e($medical_cards[4]['footer_right']) ?></span>
          </div>
        </article>
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
