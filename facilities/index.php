<?php
/**
 * RKDF University — Campus Infrastructure & Resources Overview
 * Content Source: https://rkdfuniversity.org/facilities/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Campus Infrastructure & Resources | ' . SITE_NAME;
$page_meta_desc = 'Discover world-class campus infrastructure at RKDF University Ranchi: Smart audio-visual classrooms, 1,00,000+ volume Central Library, residential hostels, transit fleet, sports grounds & Wi-Fi research labs.';

$facilities_directory = [
    [
        'title'       => 'Smart Audio-Visual Classrooms',
        'badge'       => 'Interactive Pedagogy',
        'icon'        => 'layout',
        'desc'        => 'Equipped with digital podiums, interactive projection arrays, high-fidelity audio acoustics, and ergonomic executive seating for immersive lecture engagement.',
        'features'    => [
            'Interactive Projection & Smart Board Arrays',
            'Digital Podiums with Multi-Device Connectivity',
            'Acoustically Treated Ergonomic Lecture Halls',
            'High-Speed Wi-Fi & Power Outlets for Laptops'
        ],
        'stats'       => [
            ['lbl' => 'Technology', 'val' => 'Digital Smart Class'],
            ['lbl' => 'Capacity', 'val' => '60–120 Students / Hall']
        ],
        'btn_label'   => 'Learn More',
        'btn_url'     => url('about/index.php')
    ],
    [
        'title'       => 'Central Knowledge Repository',
        'badge'       => 'Digital & Print Library',
        'icon'        => 'book-open',
        'desc'        => 'A multi-storey citadel of knowledge housing over 1,00,000 physical volumes, 20,000+ unique titles, Koha computerized OPAC cataloging, and national digital subscriptions.',
        'features'    => [
            '1,00,000+ Books & 20,000+ Unique Titles',
            'Koha Computerized Library Management (OPAC)',
            'NDLI (National Digital Library) Direct Access',
            'Open-Shelf Reading Arenas Open 365 Days'
        ],
        'stats'       => [
            ['lbl' => 'Collection', 'val' => '1,00,000+ Volumes'],
            ['lbl' => 'Access', 'val' => 'Open 365 Days / Year']
        ],
        'btn_label'   => 'Explore Central Library',
        'btn_url'     => url('facilities/library.php')
    ],
    [
        'title'       => 'Residential Boys & Girls Hostels',
        'badge'       => 'Secure Campus Living',
        'icon'        => 'home',
        'desc'        => 'Separate, round-the-clock secure hostels for male and female scholars featuring furnished living quarters, recreation lounges, RO drinking water, and hygienic dining mess.',
        'features'    => [
            'Separate Gated Boys & Girls Residential Blocks',
            '24/7 CCTV Surveillance & Resident Wardens',
            'Multi-Stage RO Purified Drinking Water Units',
            'Nutritious Balanced Mess Dining & Wi-Fi'
        ],
        'stats'       => [
            ['lbl' => 'Security', 'val' => '24×7 Active Surveillance'],
            ['lbl' => 'Medical', 'val' => 'Visiting Physician on Call']
        ],
        'btn_label'   => 'Explore Hostels',
        'btn_url'     => url('facilities/hostel.php')
    ],
    [
        'title'       => 'University Transit Fleet',
        'badge'       => 'Citywide Connectivity',
        'icon'        => 'bus',
        'desc'        => 'A dedicated fleet of 08 GPS-enabled university buses operating across all prominent Ranchi routes, providing punctual, safe, and subsidized daily student commute.',
        'features'    => [
            '08 University-Owned Heavy Passenger Buses',
            'GPS Tracked Real-Time Fleet Fleet Operations',
            'Subsidized Monthly Student Commuter Passes',
            'Regular Industrial & Field Excursion Transit'
        ],
        'stats'       => [
            ['lbl' => 'Fleet Size', 'val' => '08 Owned Transit Buses'],
            ['lbl' => 'Coverage', 'val' => 'All Major Ranchi Hubs']
        ],
        'btn_label'   => 'View Bus Routes',
        'btn_url'     => url('facilities/transport.php')
    ],
    [
        'title'       => 'Sports & Athletics Complex',
        'badge'       => 'Holistic Wellness',
        'icon'        => 'trophy',
        'desc'        => 'Expansive lush green sports arenas for Cricket, Football, and Volleyball along with a specialized indoor tournament complex for Table Tennis, Badminton, and Chess.',
        'features'    => [
            'Full-Sized Cricket & Football Sporting Turf',
            'Dedicated Volleyball & Kabaddi Courts',
            'Indoor Badminton, Table Tennis & Chess Hall',
            'Annual Inter-Collegiate Sports Olympiad'
        ],
        'stats'       => [
            ['lbl' => 'Outdoor Grounds', 'val' => 'Cricket & Football Turf'],
            ['lbl' => 'Indoor Complex', 'val' => 'Badminton & Table Tennis']
        ],
        'btn_label'   => 'Explore Sports Complex',
        'btn_url'     => url('facilities/sports.php')
    ],
    [
        'title'       => 'Healthcare & Primary Dispensary',
        'badge'       => 'Medical Emergency Unit',
        'icon'        => 'heart-pulse',
        'desc'        => 'On-campus first-aid health clinic, qualified medical nurses, visiting physician consultations, emergency ambulance transit, and dedicated psychological counseling.',
        'features'    => [
            '24/7 First-Aid Clinic & Primary Dispensary',
            'Qualified Nurses & Visiting Doctor Consultations',
            'Emergency Ambulance Vehicle Stationed on Campus',
            'Confidential Student Psychological Counseling'
        ],
        'stats'       => [
            ['lbl' => 'First-Aid Unit', 'val' => '24×7 Immediate Care'],
            ['lbl' => 'Network', 'val' => 'City Hospital Tie-Ups']
        ],
        'btn_label'   => 'Explore Healthcare',
        'btn_url'     => url('facilities/health.php')
    ],
    [
        'title'       => 'High-Throughput IT & Computing Labs',
        'badge'       => 'Next-Gen Research',
        'icon'        => 'cpu',
        'desc'        => 'State-of-the-art computer centers powered by Intel Core i7 workstations, gigabit fiber optic network backbones, AI/ML development toolchains, and cloud access.',
        'features'    => [
            'Latest Intel Core i7 High-Performance Terminals',
            'High-Speed Campus-Wide Gigabit Optical Fiber',
            'Specialized Linux, Python, MATLAB & CAD Toolsets',
            '24/7 Power Backup & Cloud Computing Nodes'
        ],
        'stats'       => [
            ['lbl' => 'Hardware', 'val' => 'Core i7 Workstations'],
            ['lbl' => 'Bandwidth', 'val' => 'Gigabit Fiber Backbone']
        ],
        'btn_label'   => 'View Academic Labs',
        'btn_url'     => url('departments/index.php')
    ],
    [
        'title'       => 'Differently-Abled Accessibility Care',
        'badge'       => 'RPwD Act 2016 Compliant',
        'icon'        => 'accessibility',
        'desc'        => 'An inclusive, barrier-free campus engineered with tactile entrance ramps, wheelchair-accessible corridors, adapted restrooms, exam scribes, and Equal Opportunity desk.',
        'features'    => [
            'Barrier-Free Entrance Ramps & Wide Corridors',
            'Wheelchair Accessible Dedicated Restroom Facilities',
            'Examination Scribes & Compensatory Extra Time',
            'Dedicated Equal Opportunity Advisory Cell'
        ],
        'stats'       => [
            ['lbl' => 'Compliance', 'val' => 'RPwD Act 2016 Certified'],
            ['lbl' => 'Support', 'val' => 'Equal Opportunity Cell']
        ],
        'btn_label'   => 'Explore Support Measures',
        'btn_url'     => url('facilities/differently-abled.php')
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
      <span class="text-white/90">Campus Infrastructure</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      World-Class Campus <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Infrastructure</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      A 20-acre lush green academic sanctuary combining cutting-edge digital laboratories, smart lecture halls, a 1,00,000+ volume central library, and vibrant residential student housing.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('building') ?> 20-Acre Lush Green Campus
      </span>
      <span class="hero-pill">
        <?= lucide_icon('book-open') ?> 1,00,000+ Books Central Library
      </span>
      <span class="hero-pill">
        <?= lucide_icon('bus') ?> 08-Bus Dedicated Transit Fleet
      </span>
      <span class="hero-pill">
        <?= lucide_icon('wifi') ?> High-Speed Gigabit Wi-Fi
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
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">20+ Acres</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Lush Green Campus</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">1,00,000+</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Library Volumes</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">08 Buses</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Transit Network Fleet</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">100%</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Wi-Fi & CCTV Enabled</span>
      </div>
    </div>

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('building', 'w-4 h-4 text-gold') ?> Campus Master Ecosystem
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Designed for Intellectual Innovation &amp; Student Wellness
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            Located strategically along Argora-Kathal More Road in Ranchi, RKDF University provides a serene, pollution-free campus engineered for focused academic rigor, interdisciplinary research, and vibrant residential community life.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check') ?>
              <span>Smart Multimedia Classrooms</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('wifi') ?>
              <span>Campus-Wide Gigabit Wi-Fi</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('shield-check') ?>
              <span>24/7 Monitored Campus &amp; Hostels</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Location &amp; Reach
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('map-pin', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Argora-Kathal More Road</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Prime Ranchi suburban educational corridor with direct public transport and dedicated university shuttle connectivity.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">20 Acres</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Campus Area</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">24×7</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Power &amp; RO Water</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== COMPREHENSIVE FACILITIES DIRECTORY ==================== -->
    <div class="section-block" id="facility-directory">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('grid', 'w-3.5 h-3.5') ?> Infrastructure Directory
          </span>
          <h3 class="rkdf-section-title">Campus Facilities at a Glance</h3>
          <p class="rkdf-section-desc">Every academic, residential, sports, and transit amenity engineered for maximum student convenience, safety, and academic transformation.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($facilities_directory as $facility): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($facility['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($facility['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($facility['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($facility['desc']) ?></p>

                <!-- Feature List -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($facility['features'] as $feat): ?>
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
                  <?php foreach ($facility['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <a href="<?= e($facility['btn_url']) ?>" class="prog-spec-btn">
                  <span><?= e($facility['btn_label']) ?></span>
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
          <span>Schedule an In-Person Campus Tour</span>
        </div>
        <h3 class="rkdf-admission-title">
          Experience the RKDF University Campus First-Hand
        </h3>
        <p class="rkdf-admission-desc">
          Schedule a guided campus walk to inspect our advanced laboratories, digital libraries, sports grounds, and student residence blocks.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-primary-btn">
          <span>Book Campus Tour</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-secondary-btn">
          <span>Admissions 2026–27</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
