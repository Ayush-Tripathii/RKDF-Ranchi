<?php
/**
 * RKDF University — Transport & Bus Transit Fleet
 * Content Source: https://rkdfuniversity.org/facilities/transport/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Transport & Bus Transit Fleet | ' . SITE_NAME;
$page_meta_desc = 'Explore university transport facilities at RKDF University Ranchi: Fleet of 8 buses connecting all major points across Ranchi city, GPS tracked, punctual, safe & highly subsidized.';

$transport_services = [
    [
        'title'       => 'Citywide Route Network & Timing',
        'badge'       => 'Strategic Connectivity',
        'icon'        => 'bus',
        'desc'        => 'Comprehensive daily morning and evening transit lines connecting prominent residential sectors and transit junctions across Ranchi.',
        'features'    => [
            'Daily Routes: Ratu Road, Doranda, Lalpur & Kanke',
            'Transit Hub Connections: Ranchi Railway Station & Bus Stands',
            'Punctual Synchronized Timings with Academic Class Shifts',
            'Pick-Up & Drop-Off at Designated Safe Roadside Stops'
        ],
        'stats'       => [
            ['lbl' => 'Fleet Size', 'val' => '08 Owned Heavy Buses'],
            ['lbl' => 'Coverage', 'val' => 'All Major Ranchi Corridors']
        ],
        'btn_label'   => 'View Route Schedule',
        'btn_url'     => url('contact.php')
    ],
    [
        'title'       => 'GPS Tracking & Passenger Safety',
        'badge'       => 'Safe Transit Protocol',
        'icon'        => 'shield-check',
        'desc'        => 'Every bus is fitted with real-time GPS tracking, speed regulators, first-aid kits, and operated by verified experienced drivers.',
        'features'    => [
            'Real-Time GPS Vehicle Tracking & Speed Regulators',
            'Licensed, Police-Verified & Highly Experienced Drivers',
            'On-Board Fire Extinguishers & First-Aid Emergency Kits',
            'Strict Adherence to Transport Department Safety Norms'
        ],
        'stats'       => [
            ['lbl' => 'Telematics', 'val' => '100% GPS Enabled'],
            ['lbl' => 'Drivers', 'val' => 'Verified & Licensed']
        ],
        'btn_label'   => 'Safety Guidelines',
        'btn_url'     => url('facilities/health.php')
    ],
    [
        'title'       => 'Subsidized Student Commuter Passes',
        'badge'       => 'Affordable Mobility',
        'icon'        => 'coins',
        'desc'        => 'Nominal semester-wise bus pass options designed to keep daily higher education commuting affordable and completely stress-free.',
        'features'    => [
            'Highly Subsidized Semester-Wise Fee Structure',
            'Hassle-Free Online / Counter Bus Pass Issuance',
            'Guaranteed Seated Travel for Pass Holders',
            'Dedicated Transit Desk for Lost Pass & Route Assistance'
        ],
        'stats'       => [
            ['lbl' => 'Pass Type', 'val' => 'Semester Subsidized'],
            ['lbl' => 'Issuance', 'val' => 'Single-Window Counter']
        ],
        'btn_label'   => 'Apply for Bus Pass',
        'btn_url'     => url('admissions/')
    ],
    [
        'title'       => 'Industrial & Field Excursion Transit',
        'badge'       => 'Academic Tours',
        'icon'        => 'compass',
        'desc'        => 'Deployment of university buses for educational field studies, industrial manufacturing plant visits, and state sports tournaments.',
        'features'    => [
            'Specialized Transport for Industrial Plant & Mine Visits',
            'Ecological Botanical Expeditions for Agriculture Scholars',
            'Inter-University Sports Tournament Transit Fleet',
            'Dedicated Faculty Proctors Accompanying All Excursions'
        ],
        'stats'       => [
            ['lbl' => 'Excursions', 'val' => 'Statewide Coverage'],
            ['lbl' => 'Escort', 'val' => 'Faculty Proctored']
        ],
        'btn_label'   => 'View Academic Tours',
        'btn_url'     => url('about/index.php')
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
      <span class="text-white/90">Transport Fleet</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Bus Transit Fleet &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">City Connectivity</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Connecting students and faculty from every major locality of Ranchi to the campus daily with a dedicated fleet of 08 GPS-enabled buses at subsidized pass rates.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('bus') ?> 08 Owned Heavy Transit Buses
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 100% GPS Real-Time Tracked
      </span>
      <span class="hero-pill">
        <?= lucide_icon('map-pin') ?> Major Ranchi Corridors Covered
      </span>
      <span class="hero-pill">
        <?= lucide_icon('coins') ?> Subsidized Student Passes
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
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">08 Buses</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Owned Transit Fleet</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">100%</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">GPS Telematics Tracked</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">Nominal</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Subsidized Bus Pass</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">Excursions</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Study &amp; Industry Tours</span>
      </div>
    </div>

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('bus', 'w-4 h-4 text-gold') ?> Campus Transit &amp; Mobility Directorate
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Punctual, Safe &amp; Comprehensive Transit Across Ranchi
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The university maintains its own fleet of 08 heavy passenger buses bringing students and faculty from different corners of Ranchi to the campus and hostels at nominal cost, ensuring maximum safety, punctuality, and convenience.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check') ?>
              <span>Synchronized Class Shift Timings</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('shield-check') ?>
              <span>Speed Governors &amp; GPS Trackers</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('coins') ?>
              <span>Subsidized Student Pass Rates</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Transit Desk
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('map-pin', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Daily City Routes</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Operating across Ratu Road, Doranda, Lalpur, Booty More, Kathal More, and Railway Stations.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">08 Units</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Bus Fleet</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">GPS Coverage</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== TRANSPORT SERVICES DIRECTORY ==================== -->
    <div class="section-block" id="bus-routes">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Fleet Operations
          </span>
          <h3 class="rkdf-section-title">Bus Routes &amp; Transit Services</h3>
          <p class="rkdf-section-desc">Reliable university transit operations ensuring punctuality, passenger safety, and subsidized travel.</p>
        </div>
        <div class="flex flex-wrap items-center gap-3 shrink-0">
          <?php if (file_exists(dirname(__DIR__) . '/documents/Bus-Registration-Form.pdf')): ?>
            <a href="<?= url('documents/Bus-Registration-Form.pdf') ?>" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-emerald-700 text-white font-bold text-xs uppercase tracking-wider hover:bg-brand transition shadow-sm">
              <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-gold') ?>
              <span>Bus Registration Form (PDF)</span>
              <?= lucide_icon('download', 'w-3.5 h-3.5') ?>
            </a>
          <?php endif; ?>
          <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm">
            <span>Route &amp; Stop Details</span>
            <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($transport_services as $svc): ?>
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
          <span>Bus Pass Enrollment 2026–27</span>
        </div>
        <h3 class="rkdf-admission-title">
          Apply for Your Subsidized Bus Commuter Pass
        </h3>
        <p class="rkdf-admission-desc">
          Enroll for the university bus route nearest to your residence during academic registration to secure guaranteed daily seating.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for Bus Pass</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Transport Helpdesk</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
