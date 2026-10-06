<?php
/**
 * RKDF University — Social Work Programs (BSW & MSW)
 * Content Source: https://rkdfuniversity.org/courses/social-work/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Social Work Programs | BSW & MSW Degrees — ' . SITE_NAME;
$page_meta_desc = 'Pursue BSW & MSW degrees in Social Work at RKDF University Ranchi. Community development, rural field immersion, NGO administration, child & women welfare, and CSR management.';

$social_work_programs = [
    [
        'title'       => 'Bachelor of Social Work (BSW)',
        'badge'       => '3 Years • Undergraduate Degree',
        'icon'        => 'heart',
        'desc'        => 'Foundational study of sociology, human behavior, social legislation, community organization, tribal development, child welfare, and grassroots field work methods.',
        'features'    => [
            'Concurrent Fieldwork (2 Days / Week) with Registered NGOs',
            'Compulsory 10-Day Rural Living Immersion Camp in Jharkhand',
            'Practical Training in Case Work & Community Social Diagnosis'
        ],
        'duration'    => '3 Years (6 Sems)',
        'eligibility' => '10+2 Any Stream (45%+)'
    ],
    [
        'title'       => 'Master of Social Work (MSW)',
        'badge'       => '2 Years • Postgraduate Degree',
        'icon'        => 'users',
        'desc'        => 'Advanced post-graduate leadership program with dual specializations in HRM & Industrial Relations, Medical & Psychiatric Social Work, and Rural Community Development.',
        'features'    => [
            'Clinical Psychiatric Postings & Corporate CSR Internships',
            'Block Field Placement (30 Days) with National & UN Agencies',
            'Research Dissertation in Social Policy & Regional Tribal Welfare'
        ],
        'duration'    => '2 Years (4 Sems)',
        'eligibility' => 'Graduation in Any Stream (45%+)'
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
      <span class="text-white/90">Social Work</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Social Work Programs <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">(BSW &amp; MSW)</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Transform communities, drive rural development, manage NGO initiatives, and lead corporate social responsibility (CSR) programs through immersive grassroots field practice.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('heart') ?> Concurrent Fieldwork (2 Days/Wk)
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> CSR &amp; NGO Leadership Tracks
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> Rural Immersion Camps
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Courses -->
<?php require_once dirname(__DIR__) . '/includes/courses_nav_tabs.php'; ?>

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
            <?= lucide_icon('heart', 'w-4 h-4 text-gold') ?> Department of Social Work
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Empowering Communities Through Action &amp; Advocacy
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The Department of Social Work at RKDF University Ranchi develops committed social professionals prepared for grassroots community transformation, public health advocacy, disaster management, and corporate CSR leadership.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Through weekly concurrent field visits across tribal hamlets in Jharkhand, partnerships with international non-profits, and specialized psychiatric hospital postings, our students bridge social divides with sustainable impact.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>UGC Curriculum Framework</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Tribal Village Adoption</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>CSR &amp; UN NGO Postings</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Quick Specs
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('heart', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Social Work Suite</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Full-time UGC recognized BSW & MSW programs designed for high-impact social and corporate careers.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">2 Days/Wk</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Concurrent Fieldwork</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Field Experience</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== PROGRAMS GRID ==================== -->
    <div class="section-block" id="programs">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Academic Degrees</span>
          <h3 class="rkdf-section-title">Available Social Work Programs</h3>
          <p class="rkdf-section-desc">Choose from undergraduate and postgraduate degrees in professional social work.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for Social Work 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($social_work_programs as $prog): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($prog['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($prog['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($prog['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($prog['desc']) ?></p>
                
                <ul class="prog-spec-feature-list">
                  <?php foreach ($prog['features'] as $ft): ?>
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
                    <span class="prog-spec-stat-lbl">Duration</span>
                    <span class="prog-spec-stat-val"><?= e($prog['duration']) ?></span>
                  </div>
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Eligibility</span>
                    <span class="prog-spec-stat-val"><?= e($prog['eligibility']) ?></span>
                  </div>
                </div>

                <a href="<?= url('admissions/') ?>" class="prog-spec-btn">
                  <span>Apply for <?= e($prog['title']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== SOCIAL WORK ADVANTAGE PILLARS ==================== -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Impact &amp; Outreach</span>
          <h3 class="rkdf-section-title">The Social Work Edge at RKDF</h3>
          <p class="rkdf-section-desc">Why social change makers choose RKDF University Ranchi for professional education.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('heart') ?>
          </div>
          <h4 class="pillar-title">Rural Immersion Camps</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Direct experiential living in adopted rural villages conducting participatory rural appraisals (PRA), health camps, and women empowerment workshops.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('users') ?>
          </div>
          <h4 class="pillar-title">Corporate CSR Foundations</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Partnerships with leading industrial corporate social responsibility (CSR) foundations for block field training and corporate recruitment.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('award') ?>
          </div>
          <h4 class="pillar-title">Global NGO Placements</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Active placement tie-ups with UN agencies, CRY, Oxfam, Pratham, Jharkhand State Livelihood Promotion Society (JSLPS), and welfare ministries.
          </p>
        </div>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Social Work Admissions Open for 2026–27 Cycle</span>
        </div>
        <h3 class="rkdf-admission-title">
          Drive Meaningful Social Transformation
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for BSW and MSW degree programs at RKDF University Ranchi. State scholarship facilities and field travel subsidies available.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply for Social Work</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Department Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
