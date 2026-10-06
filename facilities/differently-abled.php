<?php
/**
 * RKDF University — Facilities for Differently-Abled & RPwD Compliance
 * Content Source: https://rkdfuniversity.org/facilities/differently-abled/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Facilities for Differently-Abled | RPwD Act Compliance | ' . SITE_NAME;
$page_meta_desc = 'Discover inclusive, barrier-free campus facilities for differently-abled students at RKDF University Ranchi: Ramps, handrails, accessible restrooms, exam scribes & Equal Opportunity Cell.';

$accessibility_pillars = [
    [
        'title'       => 'Physical Architecture & Barrier-Free Access',
        'badge'       => 'Campus Mobility',
        'icon'        => 'accessibility',
        'desc'        => 'Non-slip gentle-gradient entrance ramps, tactile walkways, wide corridor clearances, and handrails across all academic blocks.',
        'features'    => [
            'Smooth Non-Slip Ramps at all Entry & Exit Portals',
            'Continuous Ergonomic Handrails on Staircases',
            'Wheelchair-Accessible Dedicated Restroom Facilities',
            'Ground-Floor Academic Allotment for Mobility-Challenged'
        ],
        'stats'       => [
            ['lbl' => 'Access', 'val' => '100% Barrier-Free'],
            ['lbl' => 'Compliance', 'val' => 'RPwD Act 2016']
        ],
        'btn_label'   => 'View Campus Infrastructure',
        'btn_url'     => url('facilities/')
    ],
    [
        'title'       => 'Examination Accommodations & Scribes',
        'badge'       => 'Academic Equity',
        'icon'        => 'clipboard-check',
        'desc'        => 'Special statutory evaluation accommodations ensuring students with visual, locomotor, or cognitive challenges are assessed fairly.',
        'features'    => [
            'Official Scribe Facility Provided by University',
            'Compensatory Extra Exam Time (20 mins per hour)',
            'Ground-Floor Accessible Examination Seating Arrays',
            'Magnified Print Question Papers on Formal Request'
        ],
        'stats'       => [
            ['lbl' => 'Scribe Desk', 'val' => 'Single-Window Allotment'],
            ['lbl' => 'Extra Time', 'val' => '+20 Mins / Hour']
        ],
        'btn_label'   => 'Examination Rules',
        'btn_url'     => url('admissions/examination-forms.php')
    ],
    [
        'title'       => 'Assistive Learning & Digital Access',
        'badge'       => 'Assistive Tech',
        'icon'        => 'laptop',
        'desc'        => 'Screen reading software, adaptive hardware accessories, and dedicated assistive digital tools in the central library and labs.',
        'features'    => [
            'Screen-Reader Enabled Digital Library Terminals',
            'Audio-Visual Learning Subtitles & High-Contrast Displays',
            'Accessible Digital Courseware via Institutional LMS',
            'Peer Buddy Academic Assistance Program for Note-Taking'
        ],
        'stats'       => [
            ['lbl' => 'Digital Library', 'val' => 'Screen-Reader Ready'],
            ['lbl' => 'Peer Support', 'val' => 'Buddy Program']
        ],
        'btn_label'   => 'Digital Library Access',
        'btn_url'     => url('facilities/library.php')
    ],
    [
        'title'       => 'Equal Opportunity Cell & Counseling',
        'badge'       => 'Statutory Directorate',
        'icon'        => 'heart-handshake',
        'desc'        => 'A dedicated statutory committee monitoring student welfare, grievance redressal, fee concession schemes, and career mentoring.',
        'features'    => [
            'Dedicated Equal Opportunity Cell Nodal Officers',
            'Confidential Grievance Redressal & Support Desk',
            'Assistance with Central / State Govt. Welfare Grants',
            'Inclusive Placement Coaching & Career Counseling'
        ],
        'stats'       => [
            ['lbl' => 'Committee', 'val' => 'Equal Opportunity Cell'],
            ['lbl' => 'Counseling', 'val' => 'Confidential & Free']
        ],
        'btn_label'   => 'Contact Equal Opportunity Cell',
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
      <span class="text-white/90">Differently-Abled Support</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Care &amp; Facilities for <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Differently-Abled</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Fostering an equitable, inclusive, and barrier-free academic ecosystem where all learners thrive with dignity, independence, and confidence under the RPwD Act 2016.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> RPwD Act 2016 Compliant
      </span>
      <span class="hero-pill">
        <?= lucide_icon('accessibility') ?> 100% Barrier-Free Ramps &amp; Toilets
      </span>
      <span class="hero-pill">
        <?= lucide_icon('clipboard-check') ?> Scribe &amp; Extra Exam Time
      </span>
      <span class="hero-pill">
        <?= lucide_icon('heart-handshake') ?> Equal Opportunity Cell
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
        <span class="text-3xl sm:text-4xl font-serif text-emerald-700 font-normal block">RPwD 2016</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Statutory Compliance</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-brand font-normal block">100%</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Barrier-Free Ramps</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-gold font-normal block">Scribe Desk</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Exam Accommodations</span>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs text-center">
        <span class="text-3xl sm:text-4xl font-serif text-purple-700 font-normal block">EOC Cell</span>
        <span class="text-xs sm:text-sm text-slate-600 mt-1 block font-medium">Equal Opportunity Support</span>
      </div>
    </div>

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('heart-handshake', 'w-4 h-4 text-gold') ?> Equal Opportunity Directorate
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            An Inclusive, Barrier-Free Sanctuary for Every Learner
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            RKDF University Ranchi is committed to providing an inclusive environment for students with physical, visual, auditory, or neurodiverse learning challenges. In strict compliance with the Rights of Persons with Disabilities (RPwD) Act 2016 and UGC mandates, we ensure physical accessibility, exam accommodations, and empathetic support.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check') ?>
              <span>Ramps at All Academic Blocks</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('clipboard-check') ?>
              <span>Exam Scribes &amp; Compensatory Time</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('heart-handshake') ?>
              <span>Dedicated Equal Opportunity Cell</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Statutory Mandate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">RPwD Act 2016</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Full statutory adherence ensuring barrier-free infrastructure, academic equity, and dignity.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Ramp Coverage</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">+20 Min</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Per Exam Hour</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== ACCESSIBILITY FRAMEWORK DIRECTORY ==================== -->
    <div class="section-block" id="accessibility-pillars">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('layers', 'w-3.5 h-3.5') ?> Inclusion Architecture
          </span>
          <h3 class="rkdf-section-title">Inclusion &amp; Accessibility Services</h3>
          <p class="rkdf-section-desc">Comprehensive physical, academic, assistive, and counseling provisions ensuring equal opportunities for every scholar.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($accessibility_pillars as $pillar): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
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

                <!-- Feature List -->
                <ul class="prog-spec-feature-list">
                  <?php foreach ($pillar['features'] as $feat): ?>
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
                  <?php foreach ($pillar['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <a href="<?= e($pillar['btn_url']) ?>" class="prog-spec-btn">
                  <span><?= e($pillar['btn_label']) ?></span>
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
          <span>Equal Opportunity Admissions 2026–27</span>
        </div>
        <h3 class="rkdf-admission-title">
          Apply with Confidence &amp; Full Institutional Support
        </h3>
        <p class="rkdf-admission-desc">
          Differently-abled candidates receive statutory fee concessions, reservation benefits, priority hostel room allotment, and customized academic mentoring.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply Online Now</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Equal Opportunity Cell</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
