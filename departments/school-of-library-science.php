<?php
/**
 * RKDF University — Faculty of Library Science
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-library-science/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Library Science — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Library Science at RKDF University Ranchi. Professional 1-Year Bachelor of Library Science (B.Lib) and Master of Library Science (M.Lib) with automated Koha ILS & DSpace digital library laboratories.';

$programs = [
    [
        'category'    => 'Postgraduate Professional Degree',
        'title'       => 'Master of Library & Information Science (M.Lib / M.Lib.I.Sc)',
        'duration'    => '1 Year · 2 Semesters',
        'badge'       => 'Advanced Information Management',
        'icon'        => 'library',
        'description' => 'Advanced professional credential covering information architecture, digital library systems (DSpace, EPrints), knowledge management, research methodologies, metadata standards (MARC 21, Dublin Core), and university library administration.',
        'branches'    => [
            ['name' => 'Digital Libraries & Institutional Repositories', 'tag' => 'DSpace & EPrints'],
            ['name' => 'Information Retrieval Systems & Search Indexing', 'tag' => 'MARC 21 & Dublin Core'],
            ['name' => 'Research Methodology & Scientometrics', 'tag' => 'Citation Analytics'],
            ['name' => 'Advanced Library Automation & Networking', 'tag' => 'Z39.50 & Protocols'],
        ],
        'eligibility' => 'Passed Bachelor of Library Science (B.Lib / B.Lib.I.Sc.) or equivalent degree from a recognized University with at least 50% aggregate marks (45% for SC/ST/OBC category).'
    ],
    [
        'category'    => 'Undergraduate Professional Degree',
        'title'       => 'Bachelor of Library & Information Science (B.Lib / B.Lib.I.Sc)',
        'duration'    => '1 Year · 2 Semesters',
        'badge'       => 'Professional LIS Foundation',
        'icon'        => 'book-open',
        'description' => 'Foundational professional degree covering library classification systems (Dewey Decimal Classification - DDC, Universal Decimal Classification - UDC), cataloging rules (AACR-2), library administration, reference services, and computerized library software (Koha).',
        'branches'    => [
            ['name' => 'Library Classification Theory & Practice', 'tag' => 'DDC 23rd Ed. & UDC'],
            ['name' => 'Library Cataloging & Metadata Standards', 'tag' => 'AACR-2 & CCC Codes'],
            ['name' => 'Library Automation & Koha ILS Software', 'tag' => 'Open-Source ILS'],
            ['name' => 'Reference, E-Resources & Information Sources', 'tag' => 'DELNET & NDLI'],
        ],
        'eligibility' => 'Bachelor’s Degree (B.A., B.Sc., B.Com., BBA, BCA, B.Tech) in any discipline from a recognized University with minimum 45% aggregate marks (40% for reserved categories).'
    ],
];

$labs = [
    [
        'name'        => 'Automated Digital Library & ILS Lab',
        'desc'        => 'Equipped with Koha Integrated Library System, DSpace digital repository server, RFID circulation systems, and barcode cataloging scanners for hands-on automated circulation.',
        'icon'        => 'laptop',
        'specs'       => 'Koha ILS Dedicated Server, DSpace Institutional Repository, RFID Scanners, Barcode Printers.'
    ],
    [
        'name'        => 'Cataloging & Classification Practical Cell',
        'desc'        => 'Hands-on practice stations with latest editions of Dewey Decimal Classification (DDC 23rd Ed.), UDC tables, Sears List of Subject Headings, and AACR-2 manuals.',
        'icon'        => 'file-text',
        'specs'       => 'Complete DDC 23rd Edition Sets, AACR-2 Codebooks, Sears Subject Heading Stacks.'
    ],
    [
        'name'        => 'E-Resource & Informatics Research Node',
        'desc'        => 'High-speed internet terminals providing access to DELNET, National Digital Library of India (NDLI), INFLIBNET e-ShodhSindhu, and scholarly open access research databases.',
        'icon'        => 'globe',
        'specs'       => 'DELNET Institutional Membership, NDLI Node, INFLIBNET E-Journals Gateway.'
    ],
    [
        'name'        => 'Preservation, Binding & Document Archiving Lab',
        'desc'        => 'Specialized tools for paper deacidification, archival binding, lamination, document restoration, and micro-filming digital preservation.',
        'icon'        => 'wrench',
        'specs'       => 'Archival Heat Binding Presses, Document Lamination Stations, Restoration Materials.'
    ],
];

$library_networks = [
    'National Library of India', 'DELNET Network', 'INFLIBNET Centre', 'KVS Libraries', 'NVS Libraries', 
    'Central Secretariat Library', 'IIT & NIT Libraries', 'Judicial High Court Libraries', 'CSIR Research Libraries', 'State Central Libraries'
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
      <span class="text-white/90">Library Science</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Library Science</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Pioneering professional education in information management, knowledge organization, automated digital repositories, and archival preservation through accelerated 1-year professional degrees.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('laptop') ?> Koha ILS &amp; DSpace Digital Systems
      </span>
      <span class="hero-pill">
        <?= lucide_icon('book-open') ?> DDC 23 &amp; AACR-2 Classification
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> B.Lib &amp; M.Lib 1-Year Fast Track
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 100% University &amp; Govt Placements
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
            <?= lucide_icon('library', 'w-4 h-4 text-gold') ?> Information Architecture &amp; Digital Archiving
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Curating, Organizing &amp; Preserving Global Knowledge
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            In an era defined by information explosion, the role of library and information science professionals has evolved from traditional custodianship to sophisticated information architecture, digital institutional repositories, and automated knowledge discovery.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            The Faculty of Library Science at RKDF University Ranchi provides hands-on mastery in modern library automation software (Koha), digital metadata indexing (MARC 21, Dublin Core), institutional repositories (DSpace), and standard classification schemes (DDC 23rd Edition).
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>Koha ILS &amp; RFID Systems</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>UGC-NET (LIS) Mentorship</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Govt &amp; Academic Placements</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> LIS Directorate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Excellence in Library Science</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Fast-track 1-year credentials opening career opportunities across universities, judicial courts, research institutes, and central government bodies.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">1-Year</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Professional Fast-Track</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Automation Practical</div>
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
          <h3 class="rkdf-section-title">Professional Degree Programs</h3>
          <p class="rkdf-section-desc">UGC-recognized 1-year professional degree programs in library and information science.</p>
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

    <!-- ==================== DIGITAL LABS & PRACTICAL CELLS ==================== -->
    <div class="section-block" id="laboratories">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Library Infrastructure</span>
          <h3 class="rkdf-section-title">Digital Library Labs &amp; Classification Cells</h3>
          <p class="rkdf-section-desc">Automated Koha ILS servers, DSpace digital repository nodes, standard DDC 23rd edition classification cells, and preservation suites.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('laptop', 'w-3.5 h-3.5 text-gold') ?>
          <span>Koha &amp; DSpace Servers</span>
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

    <!-- ==================== LIBRARY NETWORKS & EMPLOYERS ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('library', 'w-4 h-4 text-gold') ?> Career Pathways &amp; Employer Networks
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Institutional Alliances &amp; Government Placements
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Our Central Placement Cell connects library science graduates with universities, central schools (KVS/NVS), judicial courts, defense libraries, and state government research documentation centers.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Placement &amp; Exam Support</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">50,000+</div>
              <div class="rkdf-corporate-stat-lbl">Central Library Volumes</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">DELNET</div>
              <div class="rkdf-corporate-stat-lbl">Resource Sharing Node</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Top Employer Sectors</span>
            <span class="text-[10px] text-white/70 uppercase">Govt, Academic &amp; Judicial</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($library_networks as $net): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($net) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
              <span>Explore Complete LIS Opportunities</span>
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
          Launch a Respected Career in Library &amp; Information Science
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for B.Lib and M.Lib 1-year professional degree programs. Hands-on Koha software training, direct cataloging practicals, and installment fee plans available.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Direct Online Application
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> LIS Faculty Counseling
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> UGC-NET Mentorship Assistance
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
