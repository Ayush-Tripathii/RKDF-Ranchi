<?php
/**
 * RKDF University — Faculty of Journalism & Mass Communication
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-journalism-and-mass-communication/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Journalism & Mass Communication — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Journalism & Mass Communication at RKDF University Ranchi. Premier BA-JMC, BMC & Video Production, and MA-JMC programs with 4K broadcast studios, DaVinci editing suites, podcasting labs, and digital newsrooms.';

$programs = [
    [
        'category'    => 'Postgraduate Degrees (PG)',
        'title'       => 'M.A. in Journalism & Mass Communication (MA-JMC)',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Advanced Media Master’s',
        'icon'        => 'radio',
        'description' => 'Comprehensive master’s program designed for media leaders, investigative reporters, television producers, corporate communication heads, and digital media strategists.',
        'branches'    => [
            ['name' => 'Investigative & Development Journalism', 'tag' => 'Field Reporting'],
            ['name' => 'Electronic Media & Broadcast TV Production', 'tag' => 'Multi-Cam Studio'],
            ['name' => 'Digital Media Marketing & Corporate PR', 'tag' => 'Brand Strategy'],
            ['name' => 'Media Ethics, Law & Communication Research', 'tag' => 'Regulatory Norms'],
        ],
        'eligibility' => 'Bachelor’s Degree in any discipline (BA, B.Sc, B.Com, BBA, BCA, B.Tech) from a recognized University with at least 50% aggregate marks (45% for SC/ST/OBC category).'
    ],
    [
        'category'    => 'Production Specialization UG',
        'title'       => 'Bachelor of Mass Communication & Video Production (BMC & VP)',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Cinematography & Editing Track',
        'icon'        => 'camera',
        'description' => 'Specialized production degree focusing on digital cinematography, multi-camera television studio direction, audio engineering, non-linear video editing, and documentary filmmaking.',
        'branches'    => [
            ['name' => 'Digital Cinematography & Studio Lighting', 'tag' => '4K Cinema Cams'],
            ['name' => 'Non-Linear Video Editing & Color Grading', 'tag' => 'Premiere & DaVinci'],
            ['name' => 'Acoustic Sound Design & Foley Engineering', 'tag' => 'Pro Tools DAW'],
            ['name' => 'Documentary & Short Film Direction', 'tag' => 'Screenplay to Screen'],
        ],
        'eligibility' => 'Passed 10+2 examination in any stream (Arts / Science / Commerce) from a recognized Board with minimum 45% aggregate marks (40% for reserved categories).'
    ],
    [
        'category'    => 'Undergraduate Degrees (UG)',
        'title'       => 'B.A. in Journalism & Mass Communication (BA-JMC)',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Flagship Media Degree',
        'icon'        => 'file-text',
        'description' => 'Core journalism curriculum combining print reporting, news editing, television anchoring, photojournalism, radio broadcasting, advertising campaigns, and public relations.',
        'branches'    => [
            ['name' => 'Print & Digital Web News Reporting', 'tag' => 'Newsroom Desk'],
            ['name' => 'TV News Anchoring, Debates & Bulletins', 'tag' => 'Teleprompter Live'],
            ['name' => 'Radio Broadcasting & Podcasting Production', 'tag' => 'RJ & Audio Tech'],
            ['name' => 'Advertising Campaigns & Public Relations', 'tag' => 'Media Buying & Ads'],
        ],
        'eligibility' => 'Passed 10+2 examination from a recognized board with at least 45% aggregate marks (40% for SC/ST/OBC candidates) in any stream.'
    ],

    [
        'category'    => 'Doctoral Programs (Ph.D.)',
        'title'       => 'Doctor of Philosophy (Ph.D. in Journalism & Mass Media)',
        'duration'    => 'Min. 3 Years',
        'badge'       => 'UGC-NET / RET Track',
        'icon'        => 'microscope',
        'description' => 'Pioneering media research in digital communication ethics, AI in newsrooms, broadcast journalism impact, public opinion formation, and developmental journalism.',
        'branches'    => [
            ['name' => 'Ph.D. in Digital Journalism & New Media', 'tag' => 'Social Media & Fact-Checking'],
            ['name' => 'Ph.D. in Broadcast & Visual Communication', 'tag' => 'Television & Documentary'],
        ],
        'eligibility' => 'Master’s Degree (M.A. JMC / MJMC / M.Sc. Mass Comm) with minimum 55% aggregate marks (50% for SC/ST/OBC) and qualifying in University RET / UGC-NET.'
    ],
];

$labs = [
    [
        'name'        => 'HD Television Studio & Chroma Floor',
        'desc'        => 'Equipped with Sony 4K broadcast studio cameras, motorized teleprompters, green screen chroma walls, professional cool-light grids, and multi-channel video switchers.',
        'icon'        => 'camera',
        'specs'       => 'Sony 4K Studio Cameras, Blackmagic ATEM Switchers, Motorized Teleprompters.'
    ],
    [
        'name'        => 'Digital Video Editing & Non-Linear Suite',
        'desc'        => 'Post-production workstations powered by Apple Mac Studio and high-performance PC systems running Adobe Premiere Pro, After Effects, DaVinci Resolve Studio, and Final Cut Pro.',
        'icon'        => 'laptop',
        'specs'       => 'Apple Mac Studio M2 Max Workstations, Dual 4K Color-Accurate Monitors.'
    ],
    [
        'name'        => 'Acoustic Sound Recording & Radio Podcasting Lab',
        'desc'        => 'Soundproof audio isolation booths fitted with Shure broadcast dynamic microphones, multi-track digital audio workstations (DAW), Pro Tools, and sound design consoles.',
        'icon'        => 'radio',
        'specs'       => 'Soundcraft Digital Mixers, Shure SM7B Microphones, Avid Pro Tools Suites.'
    ],
    [
        'name'        => 'Print Journalism & Digital Newsroom Cell',
        'desc'        => 'Live newsroom layout equipped with Adobe InDesign, QuarkXPress, and live wire news feeds for designing daily broadsheet newspapers, magazines, and digital news portals.',
        'icon'        => 'file-text',
        'specs'       => 'Adobe Creative Cloud Suite, Broadsheet Layout Stations, Wire Feeds.'
    ],
];

$media_partners = [
    'Aaj Tak', 'NDTV', 'Zee Media', 'ABP News', 'Times of India', 
    'Hindustan Times', 'Dainik Jagran', 'Prabhat Khabar', 'Radio Mirchi', 'Ogilvy'
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
      <a href="<?= url('departments/') ?>" class="hover:text-white transition">Faculties</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Journalism &amp; Mass Comm</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of Journalism &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Mass Communication</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Shaping articulate, ethical, and versatile media professionals through immersive training in broadcast television anchoring, digital filmmaking, audio podcasting, and multimedia journalism.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('camera') ?> 4K Multi-Camera TV Studio
      </span>
      <span class="hero-pill">
        <?= lucide_icon('radio') ?> Radio &amp; Podcast Suites
      </span>
      <span class="hero-pill">
        <?= lucide_icon('briefcase') ?> BA-JMC / BMC-VP / MA-JMC
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 100% Studio Practical Production
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Schools -->
<?php require_once dirname(__DIR__) . '/includes/schools_nav_tabs.php'; ?>

<!-- ==================== FACULTY SPOTLIGHT OVERVIEW ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Executive Faculty Vision Spotlight -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('radio', 'w-4 h-4 text-gold') ?> Broadcast Excellence &amp; Digital Journalism
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Empowering Modern Storytellers &amp; Media Leaders
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The Fourth Estate plays an indispensable role in a vibrant democracy. The Faculty of Journalism &amp; Mass Communication at RKDF University Ranchi provides an experiential learning ecosystem equipped with commercial-grade broadcast TV studios, podcast booths, news desks, and digital editing consoles.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Our curriculum blends rigorous journalistic ethics with cutting-edge production technology—ensuring our graduates step confidently into television newsrooms, film production houses, advertising agencies, and digital media platforms.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>4K Multi-Camera Production</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Media Industry Internships</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Documentary &amp; News Portfolios</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Media Directorate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Excellence in Mass Media</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Equipping students with real-world news anchoring, field reporting, video editing, and digital media campaign skills.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">3+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Flagship Degree Tracks</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Studio Lab Practical</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== ACADEMIC PROGRAMS & COURSES ==================== -->
    <div class="section-block" id="programs">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Curriculum Framework</span>
          <h3 class="rkdf-section-title">Academic Programs Offered</h3>
          <p class="rkdf-section-desc">Industry-aligned undergraduate and postgraduate degrees in media studies, journalism, and video production.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="rkdf-academic-grid">
        <?php foreach ($programs as $prog): ?>
          <div class="rkdf-academic-card">
            <div>
              <!-- Card Header -->
              <div class="rkdf-prog-header">
                <span class="rkdf-prog-badge">
                  <?= lucide_icon($prog['icon'], 'w-3.5 h-3.5 text-amber-600 shrink-0') ?>
                  <?= e($prog['category']) ?>
                </span>
                <span class="rkdf-duration-badge">
                  <?= lucide_icon('clock', 'w-3.5 h-3.5 text-gold shrink-0') ?>
                  <?= e($prog['duration']) ?>
                </span>
              </div>

              <h4 class="rkdf-prog-title">
                <?= e($prog['title']) ?>
              </h4>

              <p class="rkdf-prog-desc">
                <?= e($prog['description']) ?>
              </p>

              <!-- Specializations List -->
              <div class="mb-5">
                <div class="rkdf-spec-section-title">
                  <?= lucide_icon('layers', 'w-3.5 h-3.5 text-gold') ?>
                  <span>Core Curriculum Modules:</span>
                </div>
                <div class="rkdf-spec-grid">
                  <?php foreach ($prog['branches'] as $b): ?>
                    <div class="rkdf-spec-item">
                      <span class="rkdf-spec-name">
                        <span class="rkdf-spec-dot"></span>
                        <?= e($b['name']) ?>
                      </span>
                      <span class="rkdf-spec-tag">
                        <?= e($b['tag']) ?>
                      </span>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>

              <!-- Eligibility Box -->
              <div class="rkdf-eligibility-card">
                <div class="rkdf-eligibility-header">
                  <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-amber-700') ?>
                  <span>Eligibility &amp; Admission:</span>
                </div>
                <p class="rkdf-eligibility-text"><?= e($prog['eligibility']) ?></p>
              </div>
            </div>

            <!-- Card Action Footer -->
            <div class="rkdf-prog-footer">
              <span class="rkdf-accred-badge">
                <?= lucide_icon('shield-check', 'w-4 h-4 text-emerald-600') ?>
                <?= e($prog['badge']) ?>
              </span>
              <a href="<?= url('admissions/') ?>" class="rkdf-apply-btn">
                <span>Apply Now</span>
                <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== BROADCAST STUDIOS & LABS ==================== -->
    <div class="section-block" id="laboratories">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Media Infrastructure</span>
          <h3 class="rkdf-section-title">Commercial Broadcast Studios &amp; Suites</h3>
          <p class="rkdf-section-desc">Broadcast-grade television studios, multi-camera chroma floors, acoustic podcast booths, and non-linear video editing workstations.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('camera', 'w-3.5 h-3.5 text-gold') ?>
          <span>4K Broadcast Production</span>
        </span>
      </div>

      <div class="rkdf-lab-grid">
        <?php foreach ($labs as $idx => $lab): ?>
          <div class="rkdf-lab-card">
            <div>
              <div class="rkdf-lab-card-top">
                <div class="rkdf-lab-icon-box">
                  <?= lucide_icon($lab['icon'], 'w-5 h-5') ?>
                </div>
                <span class="rkdf-lab-index-tag">Lab 0<?= $idx + 1 ?></span>
              </div>
              <h4 class="rkdf-lab-title"><?= e($lab['name']) ?></h4>
              <p class="rkdf-lab-desc"><?= e($lab['desc']) ?></p>
            </div>
            <div class="rkdf-lab-specs-box">
              <div class="rkdf-lab-specs-header">
                <?= lucide_icon('sparkles', 'w-3 h-3 text-gold shrink-0') ?>
                <span>Technical Specifications:</span>
              </div>
              <p class="rkdf-lab-specs-text"><?= e($lab['specs']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== MEDIA HOUSES & RECRUITERS ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('radio', 'w-4 h-4 text-gold') ?> Industry Placements &amp; Broadcast Alliances
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Media Houses, TV Networks &amp; Digital Alliances
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Our Central Placement Cell connects journalism graduates with leading television news channels, print daily broadsheets, radio FM stations, and digital advertising networks.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Placement Support</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">50+</div>
              <div class="rkdf-corporate-stat-lbl">Media House Partners</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">₹7.5 LPA</div>
              <div class="rkdf-corporate-stat-lbl">Highest Media Package</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Top Media Recruiters</span>
            <span class="text-[10px] text-white/70 uppercase">TV, Print &amp; Digital Giants</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($media_partners as $partner): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($partner) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
              <span>Explore Complete Media Placement Record</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== FINAL ADMISSION CALLOUT BANNER ==================== -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Admissions Open for 2026–27 Academic Session</span>
        </div>
        <h3 class="rkdf-admission-title">
          Ignite Your Creative Career in Journalism &amp; Media
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for BA-JMC, BMC &amp; Video Production, and MA-JMC programs. Direct broadcast studio access, media portfolio mentorship, and scholarship assistance available.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Direct Online Application
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Media Faculty Counseling
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Creative Talent Scholarships
          </span>
        </div>
      </div>

      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply Online Now</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Campus Visit</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
