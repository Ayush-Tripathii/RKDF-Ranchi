<?php
/**
 * RKDF University — Academic Collaborations & Industry MoUs
 * Content Source: https://rkdfuniversity.org/admissions/academic-collaborations/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Academic Collaborations & Industry MoUs | ' . SITE_NAME;
$page_meta_desc = 'Discover strategic academic alliances, industry partnerships, and institutional MoUs at RKDF University Ranchi fostering research, internships, and global student exchange.';

$collaborations = [
    [
        'title'       => 'Technology & Cloud Alliances',
        'badge'       => 'IT & Engineering',
        'icon'        => 'cpu',
        'desc'        => 'Industry-aligned cloud computing tracks, AI & full-stack development sandboxes, certified curriculum delivery, and student hackathons with technology leaders.',
        'features'    => [
            'AWS Cloud & AI/ML Curriculum Integration',
            'Full-Stack Developer Bootcamps & Sandboxes',
            'Annual Corporate Hackathons & Project Mentorship'
        ],
        'domain'      => 'Computer Science & IT',
        'impact'      => 'Industry Ready Engineers'
    ],
    [
        'title'       => 'Pharma & Healthcare Linkages',
        'badge'       => 'Pharmacy & Life Sciences',
        'icon'        => 'flask-round',
        'desc'        => 'Clinical trial observational postings, drug formulation workshops, hospital clinical pharmacy rotations, and quality control apprenticeships with pharmaceutical MNCs.',
        'features'    => [
            'Clinical Hospital Training Attachments',
            'Industrial GLP & Formulation Residencies',
            'Placement Pipelines with Lupin, Cipla & Alkem'
        ],
        'domain'      => 'Pharmaceutical Sciences',
        'impact'      => 'Licensed Clinical Pharmacists'
    ],
    [
        'title'       => 'Mining & Mineral Extraction MoUs',
        'badge'       => 'Mining & Core Engineering',
        'icon'        => 'compass',
        'desc'        => 'Direct operational field postings across coal and mineral extraction sites with full trainee insurance coverage and DGMS certified guide supervision.',
        'features'    => [
            'Underground & Surface Coal Mine Attachments',
            'Full Accidental & Life Insurance Coverage',
            'Campus Placement by Regional Mining Corporates'
        ],
        'domain'      => 'Mining Engineering',
        'impact'      => 'DGMS Certified Trainees'
    ],
    [
        'title'       => 'Banking, Finance & FinTech MoUs',
        'badge'       => 'Management & Commerce',
        'icon'        => 'trending-up',
        'desc'        => 'Financial modeling in Excel, corporate accounting certifications, stock market trading simulations, and guaranteed Summer Internship Programs (SIP).',
        'features'    => [
            'Live Stock Trading & Portfolio Analysis Sandboxes',
            '8-Week Stipendiary Summer Internship Program',
            'Campus Hiring Drives by National Private Banks'
        ],
        'domain'      => 'Faculty of Management',
        'impact'      => 'Corporate Managers'
    ],
    [
        'title'       => 'Judicial & Bar Council Linkages',
        'badge'       => 'Legal Studies & Advocacy',
        'icon'        => 'scale',
        'desc'        => 'Mandatory clerkships with senior advocates of High Courts and Supreme Court, District Legal Aid Lok Adalats, and corporate law firm internships.',
        'features'    => [
            'Senior Advocate Court Chamber Attachments',
            'Pro-Bono Legal Aid Camp Facilitation',
            'ADR & Commercial Arbitration Workshops'
        ],
        'domain'      => 'School of Law',
        'impact'      => 'Practicing Advocates'
    ],
    [
        'title'       => 'Biotechnology & Agriscience MoUs',
        'badge'       => 'Applied & Life Sciences',
        'icon'        => 'dna',
        'desc'        => 'Joint research in tissue culture, plant pathology, bio-fertilizers, and microbiology pathology with national R&D institutions and state nurseries.',
        'features'    => [
            'Collaborative Research Grants & Publications',
            'Plant Tissue Culture & Poly-house Residencies',
            'Regional Bio-fertilizer Field Initiatives'
        ],
        'domain'      => 'Life & Applied Sciences',
        'impact'      => 'Scientific Researchers'
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
      <span class="text-white/90">Academic Collaborations</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Academic Collaborations &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Industry MoUs</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Fostering interdisciplinary research, industrial apprenticeships, joint curriculum modules, and career pathways through partnerships with premier enterprises and academia.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('building') ?> 150+ Corporate &amp; Industrial Partners
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> AIU, UGC, BCI &amp; PCI Statutory Accreditations
      </span>
      <span class="hero-pill">
        <?= lucide_icon('globe') ?> Global Knowledge &amp; Research Exchange
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
            <?= lucide_icon('globe', 'w-4 h-4 text-gold') ?> Strategic Partnerships Cell
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Bridging Academic Rigor with Industrial Practice
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            RKDF University Ranchi recognizes that impactful higher education requires active collaboration with corporate leaders, technological ecosystems, and national research centers.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Through formalized Memorandums of Understanding (MoUs), our students access industry sandboxes, live corporate projects, specialized certifications, joint research co-authorship, and assured internship pipelines.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>Co-Designed Industry Curriculum</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Joint Research Publications</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Guaranteed Summer Internships</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Alliances
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Corporate Network</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Multi-sectoral alliances spanning IT, core engineering, pharmaceuticals, banking, and legal advocacy.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">150+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Industry Partners</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Internship Assistance</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== COLLABORATION VERTICALS GRID ==================== -->
    <div class="section-block" id="collaborations-grid">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Partner Ecosystem</span>
          <h3 class="rkdf-section-title">Active Collaboration Verticals</h3>
          <p class="rkdf-section-desc">Strategic alliances delivering tangible academic enrichment and career placement advantages.</p>
        </div>
        <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Apply for Admission 2026–27</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($collaborations as $collab): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('building', 'w-3 h-3') ?>
                  <span><?= e($collab['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($collab['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($collab['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($collab['desc']) ?></p>

                <ul class="prog-spec-feature-list">
                  <?php foreach ($collab['features'] as $ft): ?>
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
                    <span class="prog-spec-stat-lbl">Focus Domain</span>
                    <span class="prog-spec-stat-val"><?= e($collab['domain']) ?></span>
                  </div>
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Target Outcome</span>
                    <span class="prog-spec-stat-val text-emerald-700"><?= e($collab['impact']) ?></span>
                  </div>
                </div>

                <a href="<?= url('admissions/') ?>" class="prog-spec-btn">
                  <span>Explore <?= e($collab['domain']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== STATUTORY ACCREDITATIONS ==================== -->
    <div class="section-block">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Apex Recognition</span>
          <h3 class="rkdf-section-title">Institutional Accreditations &amp; Memberships</h3>
          <p class="rkdf-section-desc">Statutory recognitions ensuring national credibility and global degree equivalence.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('award') ?>
          </div>
          <h4 class="pillar-title">UGC 2(f) Recognized</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Established by Jharkhand State Legislature Act No. 12 of 2018 and fully empowered to confer degrees under Section 2(f) of the UGC Act 1956.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('globe') ?>
          </div>
          <h4 class="pillar-title">AIU Global Membership</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Member of the Association of Indian Universities (AIU), ensuring seamless acceptance of degrees for higher education and civil services globally.
          </p>
        </div>

        <div class="pillar-card">
          <div class="pillar-icon-box">
            <?= lucide_icon('shield-check') ?>
          </div>
          <h4 class="pillar-title">BCI &amp; PCI Statutory Approvals</h4>
          <p class="text-xs text-slate-600 leading-relaxed">
            Professional regulatory clearances from the Bar Council of India for law degrees and Pharmacy Council of India for pharmaceutical courses.
          </p>
        </div>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Industry Integrated Education 2026–27</span>
        </div>
        <h3 class="rkdf-admission-title">
          Ready to Learn from Industry Leaders?
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for undergraduate and postgraduate degree programs powered by corporate partnerships at RKDF University Ranchi.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('admissions/') ?>" class="rkdf-admission-primary-btn">
          <span>Apply Online Now</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Partnership Advisory</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
