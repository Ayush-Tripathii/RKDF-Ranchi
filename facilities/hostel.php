<?php
/**
 * RKDF University — Hostel Facilities & Student Housing
 * Content Source: https://rkdfuniversity.org/facilities/hostel/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Hostel Facilities & Student Housing | ' . SITE_NAME;
$page_meta_desc = 'Explore separate secure Boys and Girls Hostels at RKDF University Ranchi: furnished rooms, RO purified water, recreational lounges, 24/7 wardens, hygienic mess & visiting physician.';

$hostel_amenities = [
    [
        'title'       => 'Furnished Living Quarters',
        'badge'       => 'Spacious Student Rooms',
        'icon'        => 'bed',
        'desc'        => 'Comfortable, well-ventilated residential rooms designed for focused study and sound rest, fully equipped with essential furnishings.',
        'features'    => [
            'Individual Ergonomic Wooden Beds with Storage',
            'Dedicated Study Table, Chair & Bookshelf Units',
            'Spacious Ventilated Windows with Natural Lighting',
            'High-Speed Wi-Fi Connectivity on Every Floor'
        ],
        'stats'       => [
            ['lbl' => 'Accommodation', 'val' => 'Twin & Triple Sharing'],
            ['lbl' => 'Furnishing', 'val' => 'Fully Furnished Units']
        ],
        'btn_label'   => 'Apply for Hostel Seat',
        'btn_url'     => url('admissions/')
    ],
    [
        'title'       => 'Nutritious Mess & Dining',
        'badge'       => 'Hygienic Culinary Care',
        'icon'        => 'utensils',
        'desc'        => 'Wholesome, balanced multi-cuisine breakfast, lunch, snacks, and dinner prepared in stainless-steel automated kitchens under strict hygiene oversight.',
        'features'    => [
            'Nutritious 4-Course Daily Meal Schedule',
            'Strictly Monitored Cleanliness & Food Quality Audits',
            'Spacious, Clean Dining Hall with Dedicated Seating',
            'Special Festive & Weekend Menu Rotations'
        ],
        'stats'       => [
            ['lbl' => 'Meals', 'val' => 'Breakfast, Lunch & Dinner'],
            ['lbl' => 'Hygiene', 'val' => 'Daily Sanitized Kitchen']
        ],
        'btn_label'   => 'View Dining Protocols',
        'btn_url'     => url('facilities/health.php')
    ],
    [
        'title'       => 'Recreation & Student Lounges',
        'badge'       => 'Community Life',
        'icon'        => 'coffee',
        'desc'        => 'Vibrant communal halls equipped with entertainment systems, indoor recreation games, daily newspapers, and quiet collaboration zones.',
        'features'    => [
            'Large-Screen Television & Entertainment Setups',
            'Indoor Games: Table Tennis, Carrom, Chess & Snooker',
            'Daily Regional & National Newspapers in English & Hindi',
            'Comfortable Lounge Seating for Peer Discussions'
        ],
        'stats'       => [
            ['lbl' => 'Recreation', 'val' => 'Indoor Sports & TV'],
            ['lbl' => 'Ambience', 'val' => 'Collaborative & Friendly']
        ],
        'btn_label'   => 'Campus Life Overview',
        'btn_url'     => url('facilities/sports.php')
    ],
    [
        'title'       => 'Health, Hygiene & 24/7 Security',
        'badge'       => 'Safety & Wellbeing',
        'icon'        => 'shield-check',
        'desc'        => 'Comprehensive round-the-clock security protocols, multi-stage RO water purification on all floors, and routine visiting physician checkups.',
        'features'    => [
            '24/7 Gated Security & Multi-Angle CCTV Vigilance',
            'Multi-Stage Commercial RO Drinking Water Systems',
            'Resident Wardens & Emergency Quick Response Squad',
            'Visiting Physician Consultations & First-Aid Dispensary'
        ],
        'stats'       => [
            ['lbl' => 'Surveillance', 'val' => '24/7 CCTV & Wardens'],
            ['lbl' => 'Drinking Water', 'val' => 'Multi-Stage Commercial RO']
        ],
        'btn_label'   => 'Safety Guidelines',
        'btn_url'     => url('admissions/anti-ragging.php')
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
      <span class="text-white/90">Hostel Facilities</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Separate Boys &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Girls Hostels</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      A home away from home providing outstation scholars with secure, hygienic, fully furnished living quarters, nutritious dining mess, and 24/7 resident warden care.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('home') ?> Separate Boys &amp; Girls Hostels
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 24/7 CCTV &amp; Resident Wardens
      </span>
      <span class="hero-pill">
        <?= lucide_icon('utensils') ?> Nutritious Balanced Mess
      </span>
      <span class="hero-pill">
        <?= lucide_icon('heart-pulse') ?> Visiting Physician on Campus
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
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">Separate</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Boys &amp; Girls Wings</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">24/7</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">CCTV &amp; Warden Security</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">RO Pure</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Multi-Stage Water Units</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">Visiting</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Doctor Consultations</span>
      </div>
    </div>

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('home', 'w-4 h-4 text-gold') ?> Student Housing Administration
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Safe, Comfortable &amp; Academic Residential Ecosystem
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            Separate hostel facilities are provided for boys and girls at RKDF University Ranchi. Featuring spacious, well-ventilated rooms with individual study tables, storage wardrobes, recreational lounges, RO drinking water, and hygienic dining mess, students enjoy an inspiring home away from home.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check') ?>
              <span>Fully Furnished Rooms</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('utensils') ?>
              <span>Fresh Multi-Cuisine Mess</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('shield-check') ?>
              <span>Zero-Tolerance Safety Protocol</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Residential Desk
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Warden Oversight</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Full-time resident wardens, security guard deployment, and biometric entry controls ensure student safety at all hours.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">24/7</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Warden Presence</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Power Backup</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== HOSTEL AMENITIES DIRECTORY ==================== -->
    <div class="section-block" id="hostel-amenities">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Residential Life
          </span>
          <h3 class="rkdf-section-title">Hostel Infrastructure &amp; Amenities</h3>
          <p class="rkdf-section-desc">Every essential amenity designed to make student living comfortable, safe, and academically productive.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for Hostel Seat</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($hostel_amenities as $amenity): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($amenity['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($amenity['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($amenity['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($amenity['desc']) ?></p>

                <!-- Feature List -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($amenity['features'] as $feat): ?>
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
                  <?php foreach ($amenity['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <a href="<?= e($amenity['btn_url']) ?>" class="prog-spec-btn">
                  <span><?= e($amenity['btn_label']) ?></span>
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
          <span>Hostel Admissions 2026–27</span>
        </div>
        <h3 class="rkdf-admission-title">
          Reserve Your Hostel Accommodation Early
        </h3>
        <p class="rkdf-admission-desc">
          Hostel allotments are processed on a first-come, first-served basis during academic admission registration. Apply online to secure your room.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for Hostel</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Hostel Warden Helpdesk</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
