<?php
/**
 * RKDF University — Doctoral (Ph.D.) Research Programs
 * Content Source: https://rkdfuniversity.org/courses/doctoral-programs/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Doctoral Programs (Ph.D.) — ' . SITE_NAME;
$page_meta_desc = 'Doctoral (Ph.D.) Research Programs at RKDF University Ranchi. Ph.D. in Engineering, Management, Pure & Applied Sciences, Life Sciences, Law, Humanities & Commerce aligned with UGC Minimum Standards Regulations.';

$phd_disciplines = [
    [
        'faculty'     => 'Faculty of Engineering & Technology',
        'icon'        => 'cpu',
        'subjects'    => ['Computer Science & Engineering', 'Mining Engineering & Sustainable Extraction', 'Civil & Structural Engineering', 'Mechanical & Thermal Engineering', 'Electrical & Power Systems'],
        'eligibility' => 'M.E. / M.Tech. or equivalent degree in relevant discipline with at least 55% aggregate marks (50% for SC/ST/OBC candidates).'
    ],
    [
        'faculty'     => 'Faculty of Management & Business Studies',
        'icon'        => 'briefcase',
        'subjects'    => ['Finance & Corporate Governance', 'Marketing Strategy & Digital Transformation', 'Human Resource Management & Organizational Behaviour', 'Supply Chain Analytics & Agri-Business'],
        'eligibility' => 'MBA / M.Com. / MMS or equivalent postgraduate master’s degree with minimum 55% aggregate marks (50% for reserved categories).'
    ],
    [
        'faculty'     => 'Faculty of Pure, Applied & Life Sciences',
        'icon'        => 'microscope',
        'subjects'    => ['Physics (Optics & Condensed Matter)', 'Chemistry (Organic Synthesis & Coordination)', 'Mathematics (Numerical Modeling & Cryptography)', 'Biotechnology & Recombinant Systems', 'Microbiology & Clinical Pathogens', 'Botany & Plant Genetics', 'Zoology & Animal Physiology'],
        'eligibility' => 'M.Sc. in relevant scientific discipline with at least 55% aggregate marks (50% for SC/ST/OBC).'
    ],
    [
        'faculty'     => 'Faculty of Law & Legal Studies',
        'icon'        => 'scale',
        'subjects'    => ['Constitutional Law & Comparative Jurisprudence', 'Corporate & Commercial Law', 'Criminal Law & Human Rights', 'Cyber Law & Intellectual Property Rights (IPR)'],
        'eligibility' => 'LL.M. degree from a recognized University with minimum 55% aggregate marks (50% for SC/ST/OBC).'
    ],
    [
        'faculty'     => 'Faculty of Arts, Humanities & Social Sciences',
        'icon'        => 'book-open',
        'subjects'    => ['English Literature & Cultural Studies', 'Political Science & Public Policy', 'Economics & Development Paradigms', 'History & Regional Tribal Heritage', 'Geography & Spatial Analytics', 'Sociology & Social Stratification'],
        'eligibility' => 'M.A. in relevant subject with at least 55% aggregate marks (50% for SC/ST/OBC).'
    ],
    [
        'faculty'     => 'Faculty of Commerce',
        'icon'        => 'coins',
        'subjects'    => ['Corporate Financial Accounting & Ind AS', 'Direct & Indirect Taxation Reforms', 'Banking Operations & Risk Management', 'Financial Markets & FinTech Innovations'],
        'eligibility' => 'M.Com. / MBA (Finance) with minimum 55% aggregate marks (50% for SC/ST/OBC).'
    ],
];

$phd_process_steps = [
    [
        'step' => '01',
        'title' => 'Research Entrance Test (RET)',
        'desc' => 'University-level Research Entrance Test comprising Paper-1 (Research Methodology) & Paper-2 (Subject Domain). UGC-NET / CSIR-NET / GATE / SLET qualified candidates are exempt from written test.'
    ],
    [
        'step' => '02',
        'title' => 'Personal Research Interview',
        'desc' => 'Presentation of preliminary Research Proposal before Departmental Research Committee (DRC) evaluating research acumen and candidate domain clarity.'
    ],
    [
        'step' => '03',
        'title' => 'Mandatory Course Work (6 Months)',
        'desc' => 'UGC-mandated coursework covering Advanced Research Methodology, Quantitative Tools (SPSS/R/Python), and Research & Publication Ethics (RPE).'
    ],
    [
        'step' => '04',
        'title' => 'Topic Registration & RAC Reviews',
        'desc' => 'Official research title registration and periodic 6-monthly progress presentations before Research Advisory Committee (RAC).'
    ],
    [
        'step' => '05',
        'title' => 'Publications & Pre-Submission',
        'desc' => 'Mandatory publication of 2 research papers in UGC-CARE / Scopus / Web of Science indexed journals and pre-synopsis defense.'
    ],
    [
        'step' => '06',
        'title' => 'Thesis Evaluation & Viva-Voce',
        'desc' => 'External evaluation by designated national subject examiners followed by Open Defense and Doctoral Degree Conferment.'
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
      <a href="<?= url('courses/') ?>" class="hover:text-white transition">Courses</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Doctoral Programs (Ph.D.)</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Doctoral Programs <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">(Ph.D.)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Pursue high-impact academic research and scientific inquiry under distinguished research guides across engineering, management, sciences, law, and humanities.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('microscope') ?> UGC Standards (Minimum Regulations)
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> UGC-NET / CSIR-NET Exemptions
      </span>
      <span class="hero-pill">
        <?= lucide_icon('book-open') ?> 6-Month Coursework &amp; Ethics
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> Scopus &amp; UGC-CARE Publications
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

<!-- ==================== MAIN PH.D. CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Research Framework Overview -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('microscope', 'w-4 h-4 text-gold') ?> University Research Directorate
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Advancing Original Research &amp; Scholarly Innovation
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The Doctoral Program at RKDF University Ranchi is formulated strictly adhering to the University Grants Commission (UGC) Minimum Standards and Procedure for Award of Ph.D. Degree Regulations. Our research framework is crafted to nurture independent scientific inquiry, critical methodology, and intellectual leadership.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Research scholars have access to modern research instrumentation laboratories, digital scientific library nodes (DELNET, INFLIBNET), high-performance computing clusters, and the university's peer-reviewed international journal—International Journal of Humanities, Engineering, Science &amp; Management (IJHESM).
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>Full-Time &amp; Part-Time Tracks</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>IJHESM Journal Publishing</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Interdisciplinary Research</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Ph.D. Cell
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Doctoral Standards</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Supervised by approved research guides with verified Scopus / WoS publication records and national research citations.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">Min 3 Yrs</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Program Duration</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">UGC Compliance</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== PH.D. DISCIPLINES ==================== -->
    <div class="section-block" id="disciplines">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Research Faculties</span>
          <h3 class="rkdf-section-title">Ph.D. Disciplines Offered</h3>
          <p class="rkdf-section-desc">Doctoral programs available across engineering, sciences, law, management, commerce, and humanities.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for Ph.D. 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($phd_disciplines as $disc): ?>
          <div class="phd-research-card">
            <!-- Luxury Midnight Navy Header Banner -->
            <div class="phd-card-header">
              <div class="phd-header-left">
                <span class="phd-header-badge">
                  <?= lucide_icon('award', 'w-3 h-3') ?>
                  <span>Ph.D. Research Wing</span>
                </span>
                <h4 class="phd-card-title"><?= e($disc['faculty']) ?></h4>
              </div>
              <div class="phd-header-iconbox">
                <?= lucide_icon($disc['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Card Body Content -->
            <div class="phd-card-body">
              <div class="space-y-5">
                <!-- Research Thrust Areas -->
                <div>
                  <div class="phd-section-label">
                    <span class="flex items-center gap-1.5">
                      <?= lucide_icon('sparkles', 'w-3.5 h-3.5 text-gold') ?>
                      Approved Research Thrust Areas:
                    </span>
                    <span class="phd-thrust-count"><?= count($disc['subjects']) ?> Domains</span>
                  </div>
                  <div class="phd-thrust-grid">
                    <?php foreach ($disc['subjects'] as $sub): ?>
                      <div class="phd-thrust-chip">
                        <span class="phd-thrust-dot"></span>
                        <span><?= e($sub) ?></span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>

                <!-- Eligibility Criteria Callout -->
                <div class="phd-eligibility-box">
                  <div class="phd-eligibility-header">
                    <?= lucide_icon('clipboard-check', 'w-3.5 h-3.5') ?>
                    <span>Eligibility Criteria</span>
                  </div>
                  <p class="phd-eligibility-text">
                    <?= e($disc['eligibility']) ?>
                  </p>
                </div>
              </div>

              <!-- Action Footer -->
              <div class="pt-2">
                <a href="<?= url('admissions/') ?>" class="phd-apply-btn">
                  <span>Apply for Ph.D. in <?= e($disc['faculty']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== ADMISSION & RESEARCH WORKFLOW ==================== -->
    <div class="section-block" id="workflow">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Methodology Roadmap</span>
          <h3 class="rkdf-section-title">Ph.D. Scholar Progression Roadmap</h3>
          <p class="rkdf-section-desc">Six-stage roadmap ensuring quality, academic rigor, and timely completion of doctoral degrees.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($phd_process_steps as $st): ?>
          <div class="p-6 rounded-2xl bg-white border border-slate-200 hover:border-gold/50 transition space-y-3 shadow-xs">
            <span class="text-xs font-mono font-bold text-gold px-2.5 py-0.5 rounded-full bg-brand/5 border border-gold/30">
              STEP <?= e($st['step']) ?>
            </span>
            <h4 class="font-serif text-lg text-brand font-normal"><?= e($st['title']) ?></h4>
            <p class="text-xs text-slate-600 leading-relaxed"><?= e($st['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Ph.D. Admissions Open for 2026–27 Cycle</span>
        </div>
        <h3 class="rkdf-admission-title">
          Apply for the RKDF Research Entrance Test (RET)
        </h3>
        <p class="rkdf-admission-desc">
          Submit your research outline and online application. Direct exemptions available for CSIR-NET / UGC-NET / GATE qualified scholars.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for Ph.D. RET</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Research Cell Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
