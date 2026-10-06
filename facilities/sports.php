<?php
/**
 * RKDF University — Sports Facilities & Athletics Complex
 * Content Source: https://rkdfuniversity.org/facilities/sports/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Sports Facilities & Athletics Complex | ' . SITE_NAME;
$page_meta_desc = 'Explore indoor and outdoor sports facilities at RKDF University Ranchi: Cricket pitch, Football ground, Volleyball courts, Kabaddi, Kho-Kho, Badminton arena, Chess & Yoga halls.';

$sports_complex = [
    [
        'title'       => 'Outdoor Sports & Athletic Grounds',
        'badge'       => 'Spacious Turf Arena',
        'icon'        => 'award',
        'desc'        => 'Lush green, well-maintained expansive grounds engineered for competitive outdoor tournaments, league matches, and daily student practice.',
        'features'    => [
            'Full-Sized Cricket Ground with Natural Turf Pitch',
            'Standard Football Field with Goalpost Enclosures',
            'Dedicated Outdoor Volleyball & Basketball Courts',
            'Traditional Kabaddi & Kho-Kho Marked Playfields'
        ],
        'stats'       => [
            ['lbl' => 'Main Ground', 'val' => 'Multi-Sport Turf'],
            ['lbl' => 'Courts', 'val' => 'Volleyball & Kabaddi']
        ],
        'btn_label'   => 'View Outdoor Facilities',
        'btn_url'     => url('about/index.php')
    ],
    [
        'title'       => 'Indoor Sports & Tournament Hall',
        'badge'       => 'Indoor Recreation Complex',
        'icon'        => 'trophy',
        'desc'        => 'Weather-proof, well-lit indoor sports arenas hosting racket sports, tabletop strategy games, and inter-collegiate championships.',
        'features'    => [
            'Wooden-Floor Indoor Badminton Court Complex',
            'Competition-Grade Table Tennis Tables & Equipment',
            'Dedicated Chess, Carrom & Snooker Strategy Lounge',
            'Spectator Seating for Intramural Finals & Events'
        ],
        'stats'       => [
            ['lbl' => 'Racket Sports', 'val' => 'Badminton & TT'],
            ['lbl' => 'Board Games', 'val' => 'Chess & Carrom']
        ],
        'btn_label'   => 'View Indoor Complex',
        'btn_url'     => url('facilities/hostel.php')
    ],
    [
        'title'       => 'Yoga, Fitness & Mindful Wellness',
        'badge'       => 'Holistic Health',
        'icon'        => 'heart-pulse',
        'desc'        => 'Guided yoga instruction, mindfulness workshops, and physical conditioning sessions promoting mental clarity and stamina.',
        'features'    => [
            'Open-Air Serene Yoga & Meditation Pavilion',
            'Certified Instructors Conducting Regular Morning Drills',
            'Annual International Day of Yoga Celebrations',
            'Stress Management & Breathwork Workshops for Scholars'
        ],
        'stats'       => [
            ['lbl' => 'Wellness', 'val' => 'Yoga & Meditation'],
            ['lbl' => 'Guidance', 'val' => 'Certified Instructors']
        ],
        'btn_label'   => 'Wellness Programs',
        'btn_url'     => url('facilities/health.php')
    ],
    [
        'title'       => 'Annual Sports Olympiad & Leagues',
        'badge'       => 'Inter-Varsity Championships',
        'icon'        => 'flame',
        'desc'        => 'High-spirited annual sports festival uniting all academic departments in fierce, friendly athletic competition and state sponsorships.',
        'features'    => [
            'Annual University Inter-Departmental Sports Meet',
            'Trophies, Medals & Cash Awards for Student Athletes',
            'Full University Sponsorship for State & National Events',
            'Specialized Coaching & Pre-Tournament Training Camps'
        ],
        'stats'       => [
            ['lbl' => 'Participation', 'val' => '1,500+ Athletes'],
            ['lbl' => 'Competition', 'val' => 'Annual Trophy Leagues']
        ],
        'btn_label'   => 'Sports Honors & Awards',
        'btn_url'     => url('about/achievements.php')
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
      <span class="text-white/90">Sports Facilities</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Sports &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Athletics Complex</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Promoting physical fitness, sportsmanship, and teamwork through expansive cricket/football grounds, indoor badminton arenas, and guided yoga sessions aligned with NEP 2020.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('award') ?> Cricket &amp; Football Turf
      </span>
      <span class="hero-pill">
        <?= lucide_icon('trophy') ?> Indoor Badminton &amp; TT Complex
      </span>
      <span class="hero-pill">
        <?= lucide_icon('heart-pulse') ?> Yoga &amp; Mindful Fitness
      </span>
      <span class="hero-pill">
        <?= lucide_icon('flame') ?> Annual Sports Olympiad
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
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">Multi-Sport</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Lush Turf Grounds</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">Indoor</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Badminton &amp; TT Arena</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">1,500+</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Olympiad Participants</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">NEP 2020</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Holistic Wellness</span>
      </div>
    </div>

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('trophy', 'w-4 h-4 text-gold') ?> Athletic Culture &amp; Physical Fitness
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Building Champions on the Field and in Professional Life
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            At RKDF University, Ranchi, sports and physical activities are vital components of student life. We provide comprehensive athletic infrastructure, dedicated practice schedules, and expert coaching to nurture physical vigor, leadership resilience, and team spirit.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check') ?>
              <span>Annual Inter-Departmental Sports Meet</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>State &amp; National Championship Sponsorship</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('heart-pulse') ?>
              <span>Daily Guided Morning Yoga</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Sports Directorate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Physical Education Cell</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Supervised athletic tournaments, regular coaching camps, and fitness assessments for university scholars.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">10+ Events</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Indoor &amp; Outdoor</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Equipment Support</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== SPORTS INFRASTRUCTURE DIRECTORY ==================== -->
    <div class="section-block" id="sports-complex">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Athletic Infrastructure
          </span>
          <h3 class="rkdf-section-title">Sports Arenas &amp; Facilities</h3>
          <p class="rkdf-section-desc">Comprehensive indoor and outdoor sports grounds engineered for tournament excellence and daily student recreation.</p>
        </div>
        <a href="<?= url('about/achievements.php') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Sports Honors &amp; Awards</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($sports_complex as $arena): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($arena['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($arena['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($arena['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($arena['desc']) ?></p>

                <!-- Feature List -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($arena['features'] as $feat): ?>
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
                  <?php foreach ($arena['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <a href="<?= e($arena['btn_url']) ?>" class="prog-spec-btn">
                  <span><?= e($arena['btn_label']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== REAL SPORTS PHOTO GALLERY ==================== -->
    <div class="section-block" id="sports-gallery">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('camera', 'w-3.5 h-3.5') ?> Campus Sports Action
          </span>
          <h3 class="rkdf-section-title">Athletic Life &amp; Tournament Gallery</h3>
          <p class="rkdf-section-desc">Snapshots of annual athletic meets, inter-departmental cricket leagues, volleyball tournaments, and active campus sports life.</p>
        </div>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
        <?php for ($i = 1; $i <= 12; $i++): ?>
          <div class="group relative rounded-2xl overflow-hidden bg-slate-900 border border-slate-200/80 shadow-xs aspect-4/3 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <img 
              src="<?= url('images/Sports-rkdf-' . $i . '.jpg') ?>" 
              alt="RKDF Sports Meet & Athletics <?= $i ?>" 
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              loading="lazy"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
              <span class="text-xs text-white font-medium flex items-center gap-1.5">
                <?= lucide_icon('award', 'w-3.5 h-3.5 text-gold') ?>
                <span>Sports Meet &amp; Tournament #<?= $i ?></span>
              </span>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Sports Quota &amp; Admissions 2026–27</span>
        </div>
        <h3 class="rkdf-admission-title">
          Represent RKDF University in State &amp; National Leagues
        </h3>
        <p class="rkdf-admission-desc">
          State and national-level sports champions enjoy special athletic scholarships, fee concessions, and flexible tournament attendance accommodations.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/scholarship.php') ?>" class="rkdf-admission-primary-btn">
          <span>Sports Scholarships</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Athletic Directorate</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
