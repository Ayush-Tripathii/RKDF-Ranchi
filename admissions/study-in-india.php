<?php
/**
 * RKDF University — Study in India (SII) Program
 * Content Source: https://rkdfuniversity.org/admissions/study-in-india/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Study in India (SII) | International Admissions — ' . SITE_NAME;
$page_meta_desc = 'Welcome global scholars to RKDF University Ranchi through the Government of India Study in India program. World-class education, AIU equivalence, secure hostels & dedicated FRRO cell.';

$study_in_india_faculties = [
    [
        'title'       => 'Engineering & Technology',
        'badge'       => '4-Year B.Tech / 2-Year M.Tech',
        'icon'        => 'cpu',
        'desc'        => 'Programs in Computer Science, Mining, Civil, Mechanical, and Electrical Engineering with modern NABL-standard laboratories.',
        'features'    => [
            'High-Performance GPU Computing & AI Sandbox',
            'Practical Coal & Mineral Field Visits in Jharkhand',
            'Full Accidental & Life Insurance for Trainees'
        ],
        'medium'      => 'English Medium',
        'intake'      => 'Fall & Spring Cycle'
    ],
    [
        'title'       => 'Pharmaceutical Sciences',
        'badge'       => '4-Year B.Pharm / 2-Year D.Pharm',
        'icon'        => 'flask-round',
        'desc'        => 'PCI-approved pharmaceutical education combining modern drug formulation, pharmacology, clinical toxicology, and hospital training.',
        'features'    => [
            'GLP Compliant Formulations & QC Laboratories',
            '150-Hour Hospital & Clinical Internship',
            'State Pharmacy Council Licensure Eligibility'
        ],
        'medium'      => 'English Medium',
        'intake'      => 'Annual July Cycle'
    ],
    [
        'title'       => 'Management & Business Studies',
        'badge'       => '3-Year BBA / 2-Year MBA',
        'icon'        => 'briefcase',
        'desc'        => 'Corporate leadership, financial analytics, digital marketing strategy, and entrepreneurship with mandatory summer internships.',
        'features'    => [
            'Dual Specialization in Finance, Marketing & HR',
            '8-Week Corporate Summer Internship Program',
            '150+ Corporate Recruitment Partnerships'
        ],
        'medium'      => 'English Medium',
        'intake'      => 'Fall & Spring Cycle'
    ],
    [
        'title'       => 'Basic, Applied & Life Sciences',
        'badge'       => '3-Year B.Sc. / 2-Year M.Sc.',
        'icon'        => 'atom',
        'desc'        => 'Scientific discovery across Physics, Chemistry, Mathematics, Biotechnology, Zoology, and Botany backed by 12 precision labs.',
        'features'    => [
            '12 Dedicated Precision Research Laboratories',
            'PCR Bio-Imaging & UV-Vis Spectrophotometry',
            'NEP 2020 4-Year Research Honours Option'
        ],
        'medium'      => 'English Medium',
        'intake'      => 'Fall July Cycle'
    ],
    [
        'title'       => 'Legal Studies & Advocacy',
        'badge'       => '5-Yr Integrated / 3-Yr LL.B',
        'icon'        => 'scale',
        'desc'        => 'BCI-approved law degrees in B.A. LL.B, BBA LL.B, and LL.B with high-tech moot court advocacy and human rights clinics.',
        'features'    => [
            'Air-Conditioned High-Tech Replica Moot Court',
            'Senior Advocate High Court Chamber Clerkships',
            'Free Legal Aid & Lok Adalat Clinic Postings'
        ],
        'medium'      => 'English Medium',
        'intake'      => 'Annual July Cycle'
    ],
    [
        'title'       => 'Arts, Humanities & Social Work',
        'badge'       => '3-Year BA/BSW / 2-Year MA/MSW',
        'icon'        => 'heart',
        'desc'        => 'Liberal arts, developmental economics, English literature, public policy, and professional social work with rural immersion camps.',
        'features'    => [
            'Concurrent Fieldwork (2 Days/Week) with NGOs',
            'Tribal Heritage & Regional Livelihood Projects',
            'CSR Foundation & Public Health Postings'
        ],
        'medium'      => 'English Medium',
        'intake'      => 'Fall July Cycle'
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
      <a href="<?= url('admissions/') ?>" class="hover:text-white transition">Admissions</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Study in India</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Study in India at <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">RKDF University</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      A premier higher education destination in Jharkhand, welcoming international scholars from SAARC, African, Middle Eastern, and ASEAN nations for globally recognized degrees.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('globe') ?> Govt. of India Study in India Partner
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> AIU &amp; UGC Global Equivalence
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> Dedicated FRRO &amp; Visa Advisory Desk
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Admissions -->
<?php require_once dirname(__DIR__) . '/includes/admissions_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('globe', 'w-4 h-4 text-gold') ?> International Relations Cell
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            A Warm, Secure &amp; Culturally Enriching Academic Home
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            RKDF University Ranchi is an esteemed university established under Jharkhand State Legislature Act No. 12 of 2018 and recognized by the University Grants Commission (UGC). As a member of the Association of Indian Universities (AIU), our degrees carry full international recognition.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            We provide international students with complete English-medium instruction, secure on-campus residential hostels, single-window FRRO registration, and personalized academic mentoring.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>100% English Medium Pedagogy</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Guaranteed On-Campus Hostels</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>FRRO Visa Facilitation Desk</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> SII Partner
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('globe', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Global Recognition</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Equivalence evaluated under AIU norms for worldwide employment and higher academic progression.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">AIU</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Global Equivalence</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">24×7</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Hostel Security</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== FACULTIES FOR INTERNATIONAL STUDENTS ==================== -->
    <div class="section-block" id="faculties">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Academic Disciplines</span>
          <h3 class="rkdf-section-title">Faculties Open for International Admissions</h3>
          <p class="rkdf-section-desc">Choose from diverse undergraduate and postgraduate programs with international student intake.</p>
        </div>
        <a href="<?= url('admissions/international-students.php') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>International Admission Guide</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($study_in_india_faculties as $fac): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($fac['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($fac['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($fac['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($fac['desc']) ?></p>

                <ul class="prog-spec-feature-list">
                  <?php foreach ($fac['features'] as $ft): ?>
                    <li class="prog-spec-feature-item">
                      <?= lucide_icon('check-circle', 'w-4 h-4 text-emerald-600 shrink-0') ?>
                      <span><?= e($ft) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & CTA -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Instruction</span>
                    <span class="prog-spec-stat-val"><?= e($fac['medium']) ?></span>
                  </div>
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Intake Cycle</span>
                    <span class="prog-spec-stat-val text-emerald-700"><?= e($fac['intake']) ?></span>
                  </div>
                </div>

                <a href="<?= url('admissions/international-students.php') ?>" class="prog-spec-btn">
                  <span>Apply for <?= e($fac['title']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== INTERNATIONAL ADVANTAGE PILLARS ==================== -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Campus Living</span>
          <h3 class="rkdf-section-title">The International Experience at RKDF</h3>
          <p class="rkdf-section-desc">Dedicated infrastructure ensuring safety, cultural ease, and academic triumph.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('shield-check') ?>
          </div>
          <h4 class="pillar-title">Safe Residential Campus</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            24/7 guarded residential compound with biometric access, continuous CCTV surveillance, resident wardens, and medical dispensary backup.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('globe') ?>
          </div>
          <h4 class="pillar-title">Single-Window FRRO Support</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Personal guidance with Foreigners Regional Registration Office (FRRO) police verification, visa extensions, and local SIM/banking setups.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('heart') ?>
          </div>
          <h4 class="pillar-title">Affordable Global Education</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Highly competitive international fee structure with subsidized hostel accommodation and transparent annual tuition schedules.
          </p>
        </div>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Global Admissions Open for 2026–27 Cycle</span>
        </div>
        <h3 class="rkdf-admission-title">
          Begin Your International Application
        </h3>
        <p class="rkdf-admission-desc">
          Email our International Student Advisory Desk directly at <a href="mailto:admission@rkdfuniversity.org" class="underline text-gold font-medium">admission@rkdfuniversity.org</a> for preliminary eligibility evaluation.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/international-students.php') ?>" class="rkdf-admission-primary-btn">
          <span>View 5-Step Process</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Contact International Cell</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
