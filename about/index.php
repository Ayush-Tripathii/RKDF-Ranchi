<?php
/**
 * RKDF University — About Us (Main Executive Page)
 * Content Source: https://rkdfuniversity.org/about/rkdf-university/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'About RKDF University Ranchi — Legacy, Vision & Excellence';
$page_meta_desc = 'Discover the legacy of RKDF University Ranchi — established under Jharkhand Govt Act & UGC 2(f), part of the prestigious Ayushmati Education network with 162+ institutions & 6 universities.';

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero relative overflow-hidden">
  <!-- Subtle Ambient Glow Orbs -->
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <!-- Breadcrumb & Badge -->
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

    <!-- 2. Heritage & Foundation Story (Two Column Presentation) -->
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
            It was in the year <strong>2018</strong> that the visionary founder decided to fulfil his noble dream of establishing a benchmark seat of higher learning in Jharkhand. Through the <strong>“Ayushmati Education And Social Society”</strong> trust, RKDF University was founded at the sacred <em>karmabhoomi</em> of the legendary freedom fighter and tribal icon <strong>Bhagwan Birsa Munda</strong>, striving to make Ranchi a nationally acclaimed educational hub.
          </p>

          <p>
            The RKDF Group has been actively involved with societal welfare since its inception in <strong>1994</strong>, when it established the <strong>1st private engineering college in Bhopal, Madhya Pradesh</strong>. Over three decades of relentless dedication, the Group has expanded into an immense academic network comprising <strong>162+ institutions and 6 premier universities</strong> across Madhya Pradesh and Jharkhand.
          </p>

          <p>
            RKDF University Ranchi is a prestigious, state-approved university established under the <strong>Jharkhand Government Act</strong> and registered under <strong>Section 2(f) of the UGC Act 1956</strong>. It is also an active institutional member of the <strong>Association of Indian Universities (AIU)</strong>, attracting learners from across India and neighbouring nations.
          </p>

          <p>
            In a short span, the University has forged high-value <strong>MoUs with leading corporations and academic bodies</strong> for research, faculty enrichment, and student exchange programs. Committed to ecological preservation, RKDF University launched its historic <strong>“Tree Ambulance”</strong> initiative on <strong>22nd August 2020</strong> for the medical care and treatment of trees across Ranchi — a civic breakthrough widely acclaimed by environmentalists.
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

    <!-- 3. Four Core Pillars of Institutional Excellence -->
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
        <!-- Pillar 1 -->
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('book-open', 'w-7 h-7') ?>
          </div>
          <h3 class="pillar-title">Academic Rigour</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Curricula structured according to NEP 2020 guidelines, Choice-Based Credit System (CBCS), and hands-on skill development.
          </p>
          <div class="mt-4 pt-3 border-t border-slate-200/80 text-[11px] font-bold text-gold uppercase tracking-wider">
            Outcome-Based Learning
          </div>
        </div>

        <!-- Pillar 2 -->
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('flask-conical', 'w-7 h-7') ?>
          </div>
          <h3 class="pillar-title">Research &amp; MoUs</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Collaborative industry MoUs, faculty research grants, international symposiums, and student innovation incubators.
          </p>
          <div class="mt-4 pt-3 border-t border-slate-200/80 text-[11px] font-bold text-gold uppercase tracking-wider">
            Industry Collaboration
          </div>
        </div>

        <!-- Pillar 3 -->
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('leaf', 'w-7 h-7') ?>
          </div>
          <h3 class="pillar-title">Eco-Stewardship</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Pioneers of the Tree Ambulance initiative launched in 2020 for the preservation, healing, and enrichment of regional flora.
          </p>
          <div class="mt-4 pt-3 border-t border-slate-200/80 text-[11px] font-bold text-gold uppercase tracking-wider">
            Tree Ambulance 2020
          </div>
        </div>

        <!-- Pillar 4 -->
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('users', 'w-7 h-7') ?>
          </div>
          <h3 class="pillar-title">Tribal &amp; Youth Focus</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Dedicated scholarship opportunities and professional mentoring empowering the diverse tribal and youth talent of Jharkhand.
          </p>
          <div class="mt-4 pt-3 border-t border-slate-200/80 text-[11px] font-bold text-gold uppercase tracking-wider">
            Inclusive Growth
          </div>
        </div>
      </div>
    </div>

    <!-- 4. 6 Universities Consortium of Ayushmati Education Trust -->
    <div class="rounded-3xl border border-border bg-card p-8 md:p-12 shadow-sm space-y-8 section-block">
      <div class="flex items-center justify-between flex-wrap gap-4">
        <div>
          <div class="text-xs tracking-[0.25em] uppercase text-gold font-bold">Ayushmati Group Network</div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-foreground mt-1">
            6 Universities Established by the Group
          </h3>
          <p class="text-xs sm:text-sm text-muted-foreground mt-1">
            A pan-India university consortium transforming professional and technical education since 1994.
          </p>
        </div>
        <div class="text-xs text-slate-700 font-semibold uppercase tracking-wider bg-surface px-4 py-2 rounded-full border border-border flex items-center gap-2">
          <?= lucide_icon('globe', 'w-3.5 h-3.5 text-gold') ?> Pan-India Educational Footprint
        </div>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Uni 1 -->
        <div class="p-6 rounded-2xl border border-border bg-surface feature-box-lift flex flex-col justify-between space-y-4">
          <div>
            <div class="flex items-center justify-between">
              <span class="inline-block text-[11px] font-bold text-gold uppercase tracking-wider">Est. 2011 · Bhopal, MP</span>
              <span class="text-[10px] px-2 py-0.5 rounded bg-slate-200 text-slate-700 font-bold">UGC</span>
            </div>
            <h4 class="font-serif text-xl font-normal text-foreground mt-2">RKDF University</h4>
            <p class="text-xs text-muted-foreground mt-1 leading-relaxed">
              Flagship multidisciplinary campus imparting engineering, management, and health sciences.
            </p>
          </div>
          <div class="text-[11px] text-muted-foreground/80 pt-3 border-t border-border flex items-center justify-between">
            <span>Ayushmati Education Trust</span>
            <span class="text-gold font-semibold">Madhya Pradesh</span>
          </div>
        </div>

        <!-- Uni 2 -->
        <div class="p-6 rounded-2xl border border-border bg-surface feature-box-lift flex flex-col justify-between space-y-4">
          <div>
            <div class="flex items-center justify-between">
              <span class="inline-block text-[11px] font-bold text-gold uppercase tracking-wider">Est. 2014 · Sehore, MP</span>
              <span class="text-[10px] px-2 py-0.5 rounded bg-slate-200 text-slate-700 font-bold">UGC</span>
            </div>
            <h4 class="font-serif text-xl font-normal text-foreground mt-2">Sri Satya Sai University</h4>
            <p class="text-xs text-muted-foreground mt-1 leading-relaxed">
              State private university with technology, medical sciences, dental, and paramedical faculties.
            </p>
          </div>
          <div class="text-[11px] text-muted-foreground/80 pt-3 border-t border-border flex items-center justify-between">
            <span>Ayushmati Education Trust</span>
            <span class="text-gold font-semibold">Madhya Pradesh</span>
          </div>
        </div>

        <!-- Uni 3 -->
        <div class="p-6 rounded-2xl border border-border bg-surface feature-box-lift flex flex-col justify-between space-y-4">
          <div>
            <div class="flex items-center justify-between">
              <span class="inline-block text-[11px] font-bold text-gold uppercase tracking-wider">Est. 2015 · Bhopal, MP</span>
              <span class="text-[10px] px-2 py-0.5 rounded bg-slate-200 text-slate-700 font-bold">UGC</span>
            </div>
            <h4 class="font-serif text-xl font-normal text-foreground mt-2">Sarvepalli Radhakrishna University</h4>
            <p class="text-xs text-muted-foreground mt-1 leading-relaxed">
              Comprehensive center for higher research, pharmacy, medicine, and applied sciences.
            </p>
          </div>
          <div class="text-[11px] text-muted-foreground/80 pt-3 border-t border-border flex items-center justify-between">
            <span>Ayushmati Education Trust</span>
            <span class="text-gold font-semibold">Madhya Pradesh</span>
          </div>
        </div>

        <!-- Uni 4 -->
        <div class="p-6 rounded-2xl border border-border bg-surface feature-box-lift flex flex-col justify-between space-y-4">
          <div>
            <div class="flex items-center justify-between">
              <span class="inline-block text-[11px] font-bold text-gold uppercase tracking-wider">Est. 2016 · Indore, MP</span>
              <span class="text-[10px] px-2 py-0.5 rounded bg-slate-200 text-slate-700 font-bold">UGC</span>
            </div>
            <h4 class="font-serif text-xl font-normal text-foreground mt-2">Dr. A.P.J. Abdul Kalam University</h4>
            <p class="text-xs text-muted-foreground mt-1 leading-relaxed">
              Engineering, applied technologies, business administration, and computer applications hub.
            </p>
          </div>
          <div class="text-[11px] text-muted-foreground/80 pt-3 border-t border-border flex items-center justify-between">
            <span>Ayushmati Education Trust</span>
            <span class="text-gold font-semibold">Madhya Pradesh</span>
          </div>
        </div>

        <!-- Uni 5 -->
        <div class="p-6 rounded-2xl border border-border bg-surface feature-box-lift flex flex-col justify-between space-y-4">
          <div>
            <div class="flex items-center justify-between">
              <span class="inline-block text-[11px] font-bold text-gold uppercase tracking-wider">Est. 2018 · Bhopal, MP</span>
              <span class="text-[10px] px-2 py-0.5 rounded bg-slate-200 text-slate-700 font-bold">UGC</span>
            </div>
            <h4 class="font-serif text-xl font-normal text-foreground mt-2">Bhabha University</h4>
            <p class="text-xs text-muted-foreground mt-1 leading-relaxed">
              Modern institution dedicated to science, dental college, technology, and applied arts.
            </p>
          </div>
          <div class="text-[11px] text-muted-foreground/80 pt-3 border-t border-border flex items-center justify-between">
            <span>Ayushmati Education Trust</span>
            <span class="text-gold font-semibold">Madhya Pradesh</span>
          </div>
        </div>

        <!-- Uni 6: Ranchi Campus Featured -->
        <div class="p-6 rounded-2xl border-2 border-gold bg-brand text-brand-foreground shadow-xl flex flex-col justify-between space-y-4 relative overflow-hidden">
          <div class="absolute -right-12 -top-12 w-32 h-32 bg-gold/20 rounded-full blur-2xl pointer-events-none"></div>
          <div>
            <div class="flex items-center justify-between">
              <span class="inline-block text-[11px] font-bold text-gold uppercase tracking-wider">Est. 2018 · Ranchi, JH</span>
              <span class="text-[10px] px-2 py-0.5 rounded bg-gold text-brand font-bold">Current Campus</span>
            </div>
            <h4 class="font-serif text-xl font-normal text-white mt-2">RKDF University, Ranchi</h4>
            <p class="text-xs text-white/80 mt-1 leading-relaxed">
              Established under Jharkhand State Act No. 15 and UGC 2(f). Flagship Eastern India campus.
            </p>
          </div>
          <div class="text-[11px] text-gold pt-3 border-t border-white/20 font-semibold flex items-center justify-between">
            <span>Jharkhand Legislature</span>
            <span>UGC &amp; AIU Member</span>
          </div>
        </div>
      </div>
    </div>

    <!-- 5. Royal Emblem & Philosophical Anatomy (Our Logo) -->
    <div class="rounded-3xl insignia-box text-white p-8 md:p-14 shadow-2xl relative overflow-hidden section-block">
      <!-- Ambient corner glow -->
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
            <!-- Part 1: Flames -->
            <div class="p-6 rounded-2xl bg-white/10 border border-white/15 backdrop-blur space-y-2">
              <div class="text-xs uppercase tracking-wider text-gold font-bold flex items-center gap-2">
                <?= lucide_icon('flame', 'w-4.5 h-4.5 text-gold') ?> Three Flames on Top
              </div>
              <p class="text-sm text-white/95 leading-relaxed">
                The three ascending flames on the crest symbolize <strong class="text-gold font-semibold">Enlightenment, Knowledge, and Transformation</strong> — igniting intellectual curiosity and ethical consciousness.
              </p>
            </div>

            <!-- Part 2: Symbols -->
            <div class="p-6 rounded-2xl bg-white/10 border border-white/15 backdrop-blur space-y-2">
              <div class="text-xs uppercase tracking-wider text-gold font-bold flex items-center gap-2">
                <?= lucide_icon('shield-check', 'w-4.5 h-4.5 text-gold') ?> Three Base Symbols
              </div>
              <p class="text-sm text-white/95 leading-relaxed">
                The three foundational symbols anchored below represent <strong class="text-gold font-semibold">Education, Glorification, and Nation</strong> — dedicating academic scholarship to sovereign progress.
              </p>
            </div>
          </div>

          <!-- Motto Quote Frame -->
          <div class="p-5 rounded-2xl bg-black/25 border border-white/15 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gold/20 border border-gold/40 text-gold flex items-center justify-center shrink-0">
              <?= lucide_icon('quote', 'w-5 h-5') ?>
            </div>
            <div class="text-xs sm:text-sm text-white/90">
              <strong class="text-gold">“Education Glorifies Nation”</strong> — The guiding motto of RKDF University that steers every curriculum, laboratory inquiry, and community initiative.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 6. Vision & Mission Preview Cards -->
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
              <p class="vm-text">
                To establish a University of excellence to impart Higher Education through Knowledge, Pioneering Scholarship, Research and Teaching.
              </p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">2</span>
              <p class="vm-text">
                To improve the lives of many students through growth, prosperity and sustainable physical environment through education in the country.
              </p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">3</span>
              <p class="vm-text">
                To Fulfil Commitment of providing Quality Education and empowering Excellence for Better Jharkhand.
              </p>
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
              <p class="vm-text">
                Harmonize Higher Education with excellence in Science and Technological output and contribute to livelihood, security and sustainable societal development.
              </p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">2</span>
              <p class="vm-text">
                To be recognized as a premium National University providing dedicated service for the Socio-Economic Development of the Nation.
              </p>
            </div>
            <div class="vm-item">
              <span class="vm-badge">3</span>
              <p class="vm-text">
                To promote Entrepreneurship in Youth by imparting professional and life skills.
              </p>
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

    <!-- 7. Statutory Approvals & Recognition Bar -->
    <div class="rounded-2xl border border-border bg-card p-6 md:p-8 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6 section-block">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-2xl bg-brand text-gold flex items-center justify-center shrink-0 shadow-md">
          <?= lucide_icon('shield-check', 'w-6 h-6') ?>
        </div>
        <div>
          <h4 class="font-serif text-xl font-normal text-foreground">Accredited &amp; Statutory Approvals</h4>
          <p class="text-xs text-muted-foreground mt-0.5">Recognized under UGC 2(f), AIU Member, and approved by State Government of Jharkhand.</p>
        </div>
      </div>

      <div class="flex items-center gap-3 flex-wrap justify-center">
        <a href="<?= url('about/government-recognition.php') ?>" class="px-4 py-2 rounded-xl bg-surface border border-border text-xs font-semibold text-slate-700 hover:border-gold hover:text-gold transition">
          Govt Recognitions
        </a>
        <a href="<?= url('about/accreditations.php') ?>" class="px-4 py-2 rounded-xl bg-surface border border-border text-xs font-semibold text-slate-700 hover:border-gold hover:text-gold transition">
          Accreditations
        </a>
        <a href="<?= url('about/rti-corner.php') ?>" class="px-4 py-2 rounded-xl bg-surface border border-border text-xs font-semibold text-slate-700 hover:border-gold hover:text-gold transition">
          RTI Disclosures
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
