<?php
/**
 * RKDF University — About Us (Main Executive Page)
 * Content Source: https://rkdfuniversity.org/about/rkdf-university/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'About RKDF University Ranchi — Legacy, Vision & Excellence';
$page_meta_desc = 'Discover the legacy of RKDF University Ranchi — established under Jharkhand Govt Act & UGC 2(f), part of the prestigious Ayushmati Education network with 162+ institutions & 6 universities.';

// Ayushmati Group University Consortium Data
$universities = [
    [
        'name'     => 'RKDF University',
        'year'     => '2011',
        'location' => 'Bhopal, MP',
        'state'    => 'Madhya Pradesh',
        'focus'    => 'Engineering, Management, Health Sciences',
        'approval' => 'UGC 2(f)',
        'status'   => 'Flagship Campus',
        'featured' => false,
    ],
    [
        'name'     => 'Sri Satya Sai University',
        'year'     => '2014',
        'location' => 'Sehore, MP',
        'state'    => 'Madhya Pradesh',
        'focus'    => 'Technology, Medical, Dental, Paramedical',
        'approval' => 'UGC 2(f)',
        'status'   => 'State Private University',
        'featured' => false,
    ],
    [
        'name'     => 'Sarvepalli Radhakrishna University',
        'year'     => '2015',
        'location' => 'Bhopal, MP',
        'state'    => 'Madhya Pradesh',
        'focus'    => 'Research, Pharmacy, Applied Sciences',
        'approval' => 'UGC 2(f)',
        'status'   => 'State Private University',
        'featured' => false,
    ],
    [
        'name'     => 'Dr. A.P.J. Abdul Kalam University',
        'year'     => '2016',
        'location' => 'Indore, MP',
        'state'    => 'Madhya Pradesh',
        'focus'    => 'Engineering, Business, Computer Applications',
        'approval' => 'UGC 2(f)',
        'status'   => 'State Private University',
        'featured' => false,
    ],
    [
        'name'     => 'Bhabha University',
        'year'     => '2018',
        'location' => 'Bhopal, MP',
        'state'    => 'Madhya Pradesh',
        'focus'    => 'Science, Dental, Technology, Applied Arts',
        'approval' => 'UGC 2(f)',
        'status'   => 'State Private University',
        'featured' => false,
    ],
    [
        'name'     => 'RKDF University, Ranchi',
        'year'     => '2018',
        'location' => 'Ranchi, JH',
        'state'    => 'Jharkhand',
        'focus'    => 'Engineering, Law, Pharmacy, Life Sciences, Management',
        'approval' => 'UGC 2(f) | AIU',
        'status'   => 'Current Campus',
        'featured' => true,
    ],
];

// University Key Facts
$key_facts = [
    ['label' => 'Establishment Year',       'value' => '2018',            'icon' => 'landmark'],
    ['label' => 'Group Founded',             'value' => '1994',            'icon' => 'history'],
    ['label' => 'Group Institutions',        'value' => '162+',            'icon' => 'building'],
    ['label' => 'Universities in Network',   'value' => '6',               'icon' => 'graduation-cap'],
    ['label' => 'Academic Programs',         'value' => '90+',             'icon' => 'book-open'],
    ['label' => 'Alumni Base',               'value' => '50,000+',         'icon' => 'users'],
    ['label' => 'UGC Recognition',           'value' => 'Section 2(f)',    'icon' => 'shield-check'],
    ['label' => 'Statutory Act',             'value' => 'JH Act No. 15',  'icon' => 'scale'],
];

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero relative overflow-hidden">
  <!-- Ambient Glow Orbs -->
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <!-- Breadcrumb Badge -->
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">About RKDF</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      A legacy of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">knowledge</em>, service &amp; distinction.
    </h1>

    <p class="mt-6 text-white/85 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Established under the Jharkhand Government Act &amp; UGC Section 2(f) 1956 at the karmabhoomi of Bhagwan Birsa Munda — fostering transformative higher education since 2018.
    </p>

    <!-- Hero Metric Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Est. 2018 · Ranchi
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> UGC 2(f) Recognized
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('globe', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> AIU Member University
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('sparkles', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> 162+ Group Institutions
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('leaf', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Tree Ambulance Pioneer
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/about_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-24">

    <!-- 1. Executive Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="gov-spotlight-grid">
        <div class="space-y-4">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gold/20 border border-gold/40 text-[11px] font-bold text-gold uppercase tracking-widest">
            <?= lucide_icon('award', 'w-3.5 h-3.5') ?> Statutory University of Jharkhand
          </div>
          <h2 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-normal text-white leading-tight">
            Fulfilling the Dream of Excellence at Ranchi
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed">
            In the year 2018, the visionary leadership of <strong class="text-gold font-semibold">Ayushmati Education and Social Society</strong> initiated the establishment of RKDF University Ranchi to make the holy capital city a premier national destination for knowledge seekers, researchers, and future leaders.
          </p>
          <div class="spotlight-pill-list">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-white/10 text-white/90 text-xs border border-white/15">
              <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-gold') ?> Jharkhand Act No. 15 of 2018
            </span>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-white/10 text-white/90 text-xs border border-white/15">
              <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-gold') ?> UGC 2(f) 1956 Listed
            </span>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-white/10 text-white/90 text-xs border border-white/15">
              <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-gold') ?> AIU Association of Indian Universities
            </span>
          </div>
        </div>

        <!-- Right Quick Stat Box -->
        <div class="gazette-seal-inner text-white space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-xs uppercase tracking-wider text-gold font-bold">Group Milestones</span>
            <span class="text-[10px] text-white/60">1994 – Present</span>
          </div>
          <div class="grid grid-cols-2 gap-3 text-center">
            <div class="p-2.5 rounded-xl bg-white/5 border border-white/10">
              <div class="font-serif text-2xl text-gold font-bold">1994</div>
              <div class="text-[10px] uppercase tracking-wider text-white/80 mt-0.5">Genesis Year</div>
            </div>
            <div class="p-2.5 rounded-xl bg-white/5 border border-white/10">
              <div class="font-serif text-2xl text-gold font-bold">162+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/80 mt-0.5">Institutions</div>
            </div>
            <div class="p-2.5 rounded-xl bg-white/5 border border-white/10">
              <div class="font-serif text-2xl text-gold font-bold">6</div>
              <div class="text-[10px] uppercase tracking-wider text-white/80 mt-0.5">Universities</div>
            </div>
            <div class="p-2.5 rounded-xl bg-white/5 border border-white/10">
              <div class="font-serif text-2xl text-gold font-bold">50K+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/80 mt-0.5">Alumni Base</div>
            </div>
          </div>
          <div class="text-[11px] text-white/70 text-center italic">
            "Empowering students across Central &amp; Eastern India."
          </div>
        </div>
      </div>
    </div>

    <!-- 2. Heritage & Foundation Story -->
    <div class="about-foundation-grid section-block">
      <!-- Left Narrative -->
      <div class="space-y-6">
        <div>
          <div class="text-xs tracking-[0.25em] uppercase text-gold font-bold">Heritage &amp; Foundation</div>
          <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-normal text-foreground mt-2 leading-tight">
            Nurturing Minds in the Land of Bhagwan Birsa Munda
          </h2>
        </div>

        <div class="space-y-4 text-slate-700 leading-relaxed text-sm sm:text-base">
          <p>
            It was in the year <strong>2018</strong> that the visionary founder decided to fulfil his noble dream of establishing a benchmark seat of higher learning in Jharkhand. Through the <strong>"Ayushmati Education And Social Society"</strong> trust, RKDF University was founded at the sacred <em>karmabhoomi</em> of the legendary freedom fighter and tribal icon <strong>Bhagwan Birsa Munda</strong>, striving to make Ranchi a nationally acclaimed educational hub.
          </p>
          <p>
            The RKDF Group has been actively involved with societal welfare since its inception in <strong>1994</strong>, when it established the <strong>1st private engineering college in Bhopal, Madhya Pradesh</strong>. Over three decades of relentless dedication, the Group has expanded into an immense academic network comprising <strong>162+ institutions and 6 premier universities</strong> across Madhya Pradesh and Jharkhand.
          </p>
          <p>
            RKDF University Ranchi is established under the <strong>Jharkhand Government Act</strong> and registered under <strong>Section 2(f) of the UGC Act 1956</strong>. It is also an active institutional member of the <strong>Association of Indian Universities (AIU)</strong>, attracting learners from across India and neighbouring nations.
          </p>
          <p>
            In a short span, the University has forged high-value <strong>MoUs with leading corporations and academic bodies</strong> for research, faculty enrichment, and student exchange programs. Committed to ecological preservation, RKDF University launched its historic <strong>"Tree Ambulance"</strong> initiative on <strong>22nd August 2020</strong> for the medical care and treatment of trees across Ranchi — a civic breakthrough widely acclaimed by environmentalists.
          </p>
        </div>

        <!-- Key Highlights Mini List -->
        <div class="grid sm:grid-cols-2 gap-4 pt-2">
          <div class="p-4 rounded-xl bg-card border border-border shadow-sm flex items-start gap-3">
            <div class="w-8 h-8 rounded-lg bg-gold/15 text-gold flex items-center justify-center shrink-0 mt-0.5">
              <?= lucide_icon('handshake', 'w-4 h-4') ?>
            </div>
            <div>
              <h4 class="text-xs font-bold uppercase tracking-wider text-foreground">Industry MoUs</h4>
              <p class="text-xs text-muted-foreground mt-0.5">Joint research, industrial internships &amp; global exchange.</p>
            </div>
          </div>
          <div class="p-4 rounded-xl bg-card border border-border shadow-sm flex items-start gap-3">
            <div class="w-8 h-8 rounded-lg bg-gold/15 text-gold flex items-center justify-center shrink-0 mt-0.5">
              <?= lucide_icon('leaf', 'w-4 h-4') ?>
            </div>
            <div>
              <h4 class="text-xs font-bold uppercase tracking-wider text-foreground">Tree Ambulance</h4>
              <p class="text-xs text-muted-foreground mt-0.5">Botanical health &amp; green environment initiative since 2020.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Feature Image & Floating Badge -->
      <div class="relative">
        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-border group">
          <img src="<?= img('campus_building.jpg') ?>" alt="RKDF University Ranchi Campus" class="w-full h-[520px] object-cover group-hover:scale-105 transition duration-700" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent"></div>
          <div class="absolute bottom-6 left-6 right-6 text-white space-y-2">
            <div class="inline-block px-3 py-1 rounded-full bg-gold/30 border border-gold/50 text-[10px] uppercase tracking-widest text-gold font-bold">
              Ayushmati Education &amp; Social Society
            </div>
            <div class="font-serif text-2xl text-white font-normal">RKDF University Ranchi Campus</div>
            <div class="text-xs text-white/80 leading-relaxed">
              Empowering youth with cutting-edge academic infrastructure, high-tech labs, and holistic campus life.
            </div>
          </div>
        </div>
        <!-- Floating Badge -->
        <div class="absolute -bottom-6 -left-6 bg-brand text-brand-foreground rounded-2xl p-5 shadow-2xl border border-white/20 hidden sm:block">
          <div class="font-serif text-3xl text-gold font-normal">2018</div>
          <div class="text-[10px] tracking-widest uppercase text-white/90 font-medium mt-0.5">Established in Ranchi</div>
        </div>
      </div>
    </div>

    <!-- 3. University Key Facts Table -->
    <div class="section-block space-y-6">
      <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Institutional Profile</div>
          <h2 class="font-serif text-3xl sm:text-4xl font-normal text-foreground mt-1">
            University at a Glance
          </h2>
          <p class="text-sm text-muted-foreground mt-1">Key facts, statutory recognitions, and group-wide academic milestones.</p>
        </div>
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-bold uppercase tracking-wider shadow-sm shrink-0">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Active University</span>
        </div>
      </div>

      <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 divide-y sm:divide-y-0 sm:divide-x divide-slate-100">
          <?php foreach ($key_facts as $idx => $fact): ?>
            <div class="flex items-center gap-4 p-6 <?= ($idx > 3) ? 'border-t border-slate-100' : '' ?>">
              <div class="w-11 h-11 rounded-xl bg-slate-900 text-gold flex items-center justify-center shrink-0 shadow-sm">
                <?= lucide_icon($fact['icon'], 'w-5 h-5') ?>
              </div>
              <div>
                <div class="text-[11px] uppercase tracking-wider text-slate-500 font-bold"><?= e($fact['label']) ?></div>
                <div class="font-serif text-xl font-semibold text-slate-900 mt-0.5"><?= e($fact['value']) ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- 4. Four Core Pillars of Institutional Excellence -->
    <div class="section-block space-y-8">
      <div class="text-center max-w-3xl mx-auto space-y-3">
        <div class="text-xs tracking-[0.25em] uppercase text-gold font-bold">Our Foundation</div>
        <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-normal text-foreground">
          Core Pillars of Institutional Excellence
        </h2>
        <p class="text-muted-foreground text-sm sm:text-base">
          Guiding principles that define our educational philosophy, research endeavors, and societal responsibilities.
        </p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="pillar-card">
          <div class="pillar-icon-box"><?= lucide_icon('book-open', 'w-7 h-7') ?></div>
          <h3 class="pillar-title">Academic Rigour</h3>
          <p class="text-xs text-slate-600 leading-relaxed">Curricula structured according to NEP 2020 guidelines, CBCS, and hands-on skill development.</p>
          <div class="mt-4 pt-3 border-t border-slate-200/80 text-[11px] font-bold text-gold uppercase tracking-wider">Outcome-Based Learning</div>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon-box"><?= lucide_icon('flask-conical', 'w-7 h-7') ?></div>
          <h3 class="pillar-title">Research &amp; MoUs</h3>
          <p class="text-xs text-slate-600 leading-relaxed">Collaborative industry MoUs, faculty research grants, international symposiums, and innovation incubators.</p>
          <div class="mt-4 pt-3 border-t border-slate-200/80 text-[11px] font-bold text-gold uppercase tracking-wider">Industry Collaboration</div>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon-box"><?= lucide_icon('leaf', 'w-7 h-7') ?></div>
          <h3 class="pillar-title">Eco-Stewardship</h3>
          <p class="text-xs text-slate-600 leading-relaxed">Pioneers of the Tree Ambulance initiative launched in 2020 for preservation and enrichment of regional flora.</p>
          <div class="mt-4 pt-3 border-t border-slate-200/80 text-[11px] font-bold text-gold uppercase tracking-wider">Tree Ambulance 2020</div>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon-box"><?= lucide_icon('users', 'w-7 h-7') ?></div>
          <h3 class="pillar-title">Tribal &amp; Youth Focus</h3>
          <p class="text-xs text-slate-600 leading-relaxed">Dedicated scholarships and professional mentoring empowering the diverse tribal and youth talent of Jharkhand.</p>
          <div class="mt-4 pt-3 border-t border-slate-200/80 text-[11px] font-bold text-gold uppercase tracking-wider">Inclusive Growth</div>
        </div>
      </div>
    </div>

    <!-- 5. 6 Universities – Ayushmati Group Registry Table -->
    <div class="section-block space-y-6">
      <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
        <div>
          <div class="text-xs tracking-[0.25em] uppercase text-gold font-bold">Ayushmati Group Network</div>
          <h2 class="font-serif text-3xl sm:text-4xl font-normal text-foreground mt-1">
            6 Universities Established by the Group
          </h2>
          <p class="text-xs sm:text-sm text-muted-foreground mt-1 max-w-2xl">
            A pan-India university consortium transforming professional and technical education since 1994. All universities are recognized by UGC under Section 2(f) of the UGC Act.
          </p>
        </div>
        <div class="text-xs text-slate-700 font-semibold uppercase tracking-wider bg-surface px-4 py-2 rounded-full border border-border flex items-center gap-2 shrink-0">
          <?= lucide_icon('globe', 'w-3.5 h-3.5 text-gold') ?> Pan-India Educational Footprint
        </div>
      </div>

      <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-slate-50/80 border-b border-slate-200 text-[11px] uppercase tracking-wider text-slate-600 font-bold">
                <th class="py-3.5 px-4 text-center w-12">#</th>
                <th class="py-3.5 px-6">University Name</th>
                <th class="py-3.5 px-6">Location</th>
                <th class="py-3.5 px-6">Est. Year</th>
                <th class="py-3.5 px-6">Academic Focus</th>
                <th class="py-3.5 px-6">Approval</th>
                <th class="py-3.5 px-6 text-right">Status</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
              <?php foreach ($universities as $idx => $uni): ?>
                <tr class="<?= $uni['featured'] ? 'bg-brand/5 hover:bg-brand/10' : 'hover:bg-slate-50/60' ?> transition-colors">
                  <td class="py-4 px-4 text-center">
                    <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg <?= $uni['featured'] ? 'bg-brand text-gold' : 'bg-slate-100 text-slate-500' ?> text-xs font-bold">
                      <?= str_pad((string)($idx + 1), 2, '0', STR_PAD_LEFT) ?>
                    </span>
                  </td>
                  <td class="py-4 px-6">
                    <div class="flex items-center gap-3">
                      <div class="w-2 h-2 rounded-full <?= $uni['featured'] ? 'bg-gold' : 'bg-slate-300' ?> shrink-0"></div>
                      <div>
                        <div class="font-bold text-slate-900 text-sm <?= $uni['featured'] ? 'text-brand' : '' ?>"><?= e($uni['name']) ?></div>
                        <div class="text-[11px] text-slate-400 mt-0.5"><?= e($uni['state']) ?></div>
                      </div>
                    </div>
                  </td>
                  <td class="py-4 px-6">
                    <div class="flex items-center gap-1.5 text-xs text-slate-600">
                      <?= lucide_icon('map-pin', 'w-3.5 h-3.5 text-gold shrink-0') ?>
                      <?= e($uni['location']) ?>
                    </div>
                  </td>
                  <td class="py-4 px-6">
                    <span class="font-serif text-base font-semibold <?= $uni['featured'] ? 'text-brand' : 'text-slate-700' ?>">
                      <?= e($uni['year']) ?>
                    </span>
                  </td>
                  <td class="py-4 px-6">
                    <div class="text-xs text-slate-600 max-w-[220px] leading-relaxed"><?= e($uni['focus']) ?></div>
                  </td>
                  <td class="py-4 px-6">
                    <div class="flex items-center gap-1.5 text-xs font-semibold text-emerald-700">
                      <?= lucide_icon('shield-check', 'w-3.5 h-3.5 text-emerald-600 shrink-0') ?>
                      <?= e($uni['approval']) ?>
                    </div>
                  </td>
                  <td class="py-4 px-6 text-right">
                    <?php if ($uni['featured']): ?>
                      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gold text-brand text-[11px] font-bold uppercase tracking-wider shadow-sm">
                        <?= lucide_icon('star', 'w-3 h-3') ?> <?= e($uni['status']) ?>
                      </span>
                    <?php else: ?>
                      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-100 text-slate-600 text-[11px] font-semibold uppercase tracking-wider">
                        <?= e($uni['status']) ?>
                      </span>
                    <?php endif; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr class="bg-slate-50/60 border-t-2 border-slate-200 text-[11px] text-slate-500">
                <td colspan="7" class="py-3 px-6">
                  <div class="flex items-center gap-6 flex-wrap">
                    <span class="flex items-center gap-1.5"><?= lucide_icon('info', 'w-3.5 h-3.5 text-gold') ?> All 6 universities are approved under Section 2(f) of the UGC Act 1956.</span>
                    <span class="flex items-center gap-1.5"><?= lucide_icon('map-pin', 'w-3.5 h-3.5 text-gold') ?> Campuses in Madhya Pradesh &amp; Jharkhand.</span>
                    <span class="ml-auto font-bold text-slate-700">Total: 6 Universities · 162+ Institutions</span>
                  </div>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>

    <!-- 6. Royal Emblem & Philosophical Anatomy -->
    <div class="rounded-3xl insignia-box text-white p-8 md:p-14 shadow-2xl relative overflow-hidden section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="relative insignia-grid items-center gap-12">
        <!-- Left: Logo Display Frame -->
        <div class="insignia-logo-col text-center">
          <div class="inline-flex flex-col items-center justify-center p-8 rounded-3xl bg-white/10 backdrop-blur border border-white/20 shadow-2xl w-full max-w-[280px]">
            <img src="<?= img('logo.png') ?>" alt="RKDF University Insignia" class="h-36 sm:h-44 w-auto mx-auto object-contain drop-shadow-2xl" />
            <span class="mt-4 inline-block px-4 py-1.5 rounded-full bg-gold/20 border border-gold/40 text-[11px] uppercase tracking-widest text-gold font-bold">
              Official University Seal
            </span>
          </div>
        </div>

        <!-- Right: Meaning & Philosophy -->
        <div class="insignia-content-col space-y-6">
          <div>
            <div class="inline-flex items-center gap-2 text-xs tracking-[0.25em] uppercase text-gold font-bold mb-2">
              <?= lucide_icon('sparkles', 'w-4 h-4') ?> Insignia &amp; Philosophy
            </div>
            <h3 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white">
              Anatomy of the RKDF Emblem
            </h3>
            <p class="text-white/80 text-sm mt-2">
              Every curve, flame, and contour in the official crest embodies our solemn pledge to youth empowerment and nation building.
            </p>
          </div>

          <div class="grid sm:grid-cols-2 gap-5">
            <div class="p-6 rounded-2xl bg-white/10 border border-white/15 backdrop-blur space-y-2">
              <div class="text-xs uppercase tracking-wider text-gold font-bold flex items-center gap-2">
                <?= lucide_icon('flame', 'w-4 h-4 text-gold') ?> Three Flames on Top
              </div>
              <p class="text-sm text-white/95 leading-relaxed">
                The three ascending flames symbolize <strong class="text-gold font-semibold">Enlightenment, Knowledge, and Transformation</strong> — igniting intellectual curiosity and ethical consciousness.
              </p>
            </div>
            <div class="p-6 rounded-2xl bg-white/10 border border-white/15 backdrop-blur space-y-2">
              <div class="text-xs uppercase tracking-wider text-gold font-bold flex items-center gap-2">
                <?= lucide_icon('shield-check', 'w-4 h-4 text-gold') ?> Three Base Symbols
              </div>
              <p class="text-sm text-white/95 leading-relaxed">
                The three foundational symbols represent <strong class="text-gold font-semibold">Education, Glorification, and Nation</strong> — dedicating scholarship to sovereign progress.
              </p>
            </div>
          </div>

          <!-- Motto Quote Frame -->
          <div class="p-5 rounded-2xl bg-black/25 border border-white/15 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gold/20 border border-gold/40 text-gold flex items-center justify-center shrink-0">
              <?= lucide_icon('quote', 'w-5 h-5') ?>
            </div>
            <div class="text-xs sm:text-sm text-white/90">
              <strong class="text-gold">"Education Glorifies Nation"</strong> — The guiding motto of RKDF University that steers every curriculum, laboratory inquiry, and community initiative.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 7. Vision & Mission Preview Cards -->
    <div class="about-vision-grid section-block">
      <!-- Vision Card -->
      <div class="vm-card">
        <div class="space-y-6">
          <div class="flex items-center gap-4">
            <div class="vm-icon-box">
              <?= lucide_icon('globe', 'w-6 h-6') ?>
            </div>
            <div>
              <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Guiding Purpose</div>
              <h3 class="font-serif text-3xl font-normal text-slate-900 mt-0.5">Our Vision</h3>
            </div>
          </div>
          <div class="space-y-3">
            <div class="vm-item">
              <span class="vm-badge">1</span>
              <p class="vm-text">To establish a University of excellence to impart Higher Education through Knowledge, Pioneering Scholarship, Research and Teaching.</p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">2</span>
              <p class="vm-text">To improve the lives of many students through growth, prosperity and sustainable physical environment through education in the country.</p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">3</span>
              <p class="vm-text">To Fulfil Commitment of providing Quality Education and empowering Excellence for Better Jharkhand.</p>
            </div>
          </div>
        </div>
        <div class="mt-8 pt-5 border-t border-slate-200/80 flex items-center justify-between">
          <a href="<?= url('about/vision-and-mission.php') ?>" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-brand hover:text-gold transition group">
            Explore Full Philosophy <span class="group-hover:translate-x-1 transition-transform"><?= lucide_icon('arrow-right', 'w-4 h-4') ?></span>
          </a>
          <span class="text-xs text-slate-400 font-medium">RKDF Vision</span>
        </div>
      </div>

      <!-- Mission Card -->
      <div class="vm-card">
        <div class="space-y-6">
          <div class="flex items-center gap-4">
            <div class="vm-icon-box">
              <?= lucide_icon('trophy', 'w-6 h-6') ?>
            </div>
            <div>
              <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Institutional Mission</div>
              <h3 class="font-serif text-3xl font-normal text-slate-900 mt-0.5">Our Mission</h3>
            </div>
          </div>
          <div class="space-y-3">
            <div class="vm-item">
              <span class="vm-badge">1</span>
              <p class="vm-text">Harmonize Higher Education with excellence in Science and Technological output and contribute to livelihood, security and sustainable societal development.</p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">2</span>
              <p class="vm-text">To be recognized as a premium National University providing dedicated service for the Socio-Economic Development of the Nation.</p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">3</span>
              <p class="vm-text">To promote Entrepreneurship in Youth by imparting professional and life skills.</p>
            </div>
          </div>
        </div>
        <div class="mt-8 pt-5 border-t border-slate-200/80 flex items-center justify-between">
          <a href="<?= url('about/vision-and-mission.php') ?>" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-brand hover:text-gold transition group">
            View Vision &amp; Mission Page <span class="group-hover:translate-x-1 transition-transform"><?= lucide_icon('arrow-right', 'w-4 h-4') ?></span>
          </a>
          <span class="text-xs text-slate-400 font-medium">RKDF Mission</span>
        </div>
      </div>
    </div>

    <!-- 8. Statutory Approvals & Recognition Bar -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left section-block">
      <div class="space-y-2 flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center gap-2">
          <?= lucide_icon('shield-check', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Statutory Recognitions</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white">
          Accredited &amp; Statutory Approvals
        </h3>
        <p class="text-xs sm:text-sm text-white/80 max-w-2xl leading-relaxed">
          Recognized under <strong class="text-gold">UGC 2(f)</strong>, active <strong class="text-gold">AIU</strong> member, approved by <strong class="text-gold">PCI</strong> &amp; <strong class="text-gold">BCI</strong>, and established by <strong class="text-gold">Jharkhand Legislature Act No. 15, 2018</strong>.
        </p>
      </div>
      <div class="flex flex-wrap items-center justify-center gap-3 shrink-0 self-center">
        <a href="<?= url('about/government-recognition.php') ?>" class="gov-callout-btn">
          <span>Govt Recognitions</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('about/accreditations.php') ?>" class="gov-callout-btn-white">
          <span>Accreditations</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
