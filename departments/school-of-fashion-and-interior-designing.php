<?php
/**
 * RKDF University — Faculty of Fashion & Interior Designing
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-fashion-and-interior-designing/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Fashion & Interior Designing — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Fashion & Interior Designing at RKDF University Ranchi. Comprehensive B.Sc, B.A, M.Sc, MBA & PG Diplomas in Fashion Design & Interior Design with advanced garment ateliers, 3D CAD suites, and spatial styling studios.';

$programs = [
    [
        'category'    => 'Undergraduate Degrees (UG)',
        'title'       => 'B.Sc. / B.A. in Fashion Design',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Haute Couture & Apparel',
        'icon'        => 'palette',
        'description' => 'Foundational and advanced design principles, fashion illustration, garment construction, pattern drafting, textile science, draping, and fashion forecasting.',
        'branches'    => [
            ['name' => 'Fashion Illustration & Conceptual Sketching', 'tag' => 'Manual & Digital'],
            ['name' => 'Pattern Drafting & Garment Construction', 'tag' => 'Industrial Machines'],
            ['name' => 'Textile Science & Surface Ornamentation', 'tag' => 'Dyeing & Printing'],
            ['name' => 'Fashion Merchandising & Runway Curation', 'tag' => 'Brand Marketing'],
        ],
        'eligibility' => 'Passed 10+2 examination in any stream (Arts / Science / Commerce) with at least 45% aggregate marks (40% for SC/ST/OBC category).'
    ],
    [
        'category'    => 'Undergraduate Degrees (UG)',
        'title'       => 'B.Sc. in Interior Design',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Spatial Architecture & Styling',
        'icon'        => 'building',
        'description' => 'Spatial planning, architectural drawing, residential & commercial interiors, building materials, 3D CAD modeling, lighting design, and ergonomic furniture fabrication.',
        'branches'    => [
            ['name' => 'Architectural Drafting & 3D Spatial CAD', 'tag' => 'AutoCAD & 3ds Max'],
            ['name' => 'Residential & Commercial Space Planning', 'tag' => 'Floor Plan Styling'],
            ['name' => 'Lighting & Acoustic Environmental Design', 'tag' => 'Lumen Calculations'],
            ['name' => 'Furniture Design & Material Specifications', 'tag' => 'Joinery & Finishes'],
        ],
        'eligibility' => 'Passed 10+2 in any stream from a recognized board with minimum 45% aggregate marks (40% for reserved categories).'
    ],
    [
        'category'    => 'Postgraduate Degrees (PG)',
        'title'       => 'M.Sc. / M.A. in Fashion Design',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Advanced Fashion Atelier',
        'icon'        => 'scissors',
        'description' => 'Mastery in avant-garde couture, luxury brand management, sustainable textile innovations, collection development, and global supply chain operations.',
        'branches'    => [
            ['name' => 'Couture Collection Development', 'tag' => 'Runway Portfolio'],
            ['name' => 'Sustainable Textiles & Circular Fashion', 'tag' => 'Eco-Innovations'],
            ['name' => 'Fashion Brand Management & Luxury Retail', 'tag' => 'Merchandising'],
            ['name' => 'Advanced 3D Virtual Fitting & CLO 3D', 'tag' => 'Virtual Prototyping'],
        ],
        'eligibility' => 'Graduation in Fashion Design / Fine Arts / Allied discipline or any Bachelor’s Degree with at least 50% aggregate marks.'
    ],
    [
        'category'    => 'Postgraduate Degrees (PG)',
        'title'       => 'M.Sc. in Interior Design',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Commercial & Urban Interiors',
        'icon'        => 'layers',
        'description' => 'Advanced architectural interior design, hospitality & retail space planning, environmental ergonomics, building automation, and project management.',
        'branches'    => [
            ['name' => 'Hospitality, Corporate & Retail Interiors', 'tag' => 'Mega Projects'],
            ['name' => 'Building Information Modeling (BIM) & Revit', 'tag' => 'Architectural Tech'],
            ['name' => 'Sustainable Spatial Architecture & Green Norms', 'tag' => 'LEED Standards'],
            ['name' => 'Contract Management & Project Cost Estimation', 'tag' => 'Turnkey Execution'],
        ],
        'eligibility' => 'Graduation in Interior Design / Architecture / Civil / Fine Arts or Bachelor’s Degree with at least 50% aggregate marks.'
    ],
    [
        'category'    => 'Management Specialization (MBA)',
        'title'       => 'MBA in Fashion / Interior Design Management',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Executive Design Management',
        'icon'        => 'briefcase',
        'description' => 'Dual competency program merging creative design aesthetics with corporate business management, luxury brand marketing, and international retail trade operations.',
        'branches'    => [
            ['name' => 'Luxury Brand Strategy & Global Marketing', 'tag' => 'Haute Couture Mgmt'],
            ['name' => 'Fashion & Real Estate Merchandising', 'tag' => 'Retail Buying'],
            ['name' => 'Supply Chain & International Sourcing', 'tag' => 'Vendor Operations'],
            ['name' => 'Design Entrepreneurship & E-Commerce', 'tag' => 'Venture Incubation'],
        ],
        'eligibility' => 'Bachelor’s Degree in any discipline with minimum 50% aggregate marks (45% for SC/ST/OBC category).'
    ],
    [
        'category'    => 'Postgraduate Diplomas',
        'title'       => 'P.G. Diploma in Fashion / Interior Design',
        'duration'    => '1 Year · 2 Semesters',
        'badge'       => 'Accelerated Professional Track',
        'icon'        => 'award',
        'description' => 'Fast-track professional diploma for graduates seeking rapid transition into apparel styling, boutique curation, home staging, or interior styling.',
        'branches'    => [
            ['name' => 'Hands-on Design Studio & Styling', 'tag' => 'Commercial Projects'],
            ['name' => 'CAD Modeling & 3D Photorealistic Rendering', 'tag' => 'Digital Portfolios'],
            ['name' => 'Material Sourcing & Client Pitch Decks', 'tag' => 'Vendor Management'],
            ['name' => 'Professional Live Portfolio Development', 'tag' => 'Industry Ready'],
        ],
        'eligibility' => 'Graduation in any stream from a recognized University with minimum 45% aggregate marks.'
    ],
];

$labs = [
    [
        'name'        => 'Garment Construction & Draping Atelier',
        'desc'        => 'Equipped with industrial motorized sewing machines, overlockers, professional dress forms (UK/US sizing), pattern cutting tables, and vacuum pressing irons.',
        'icon'        => 'palette',
        'specs'       => 'Juki High-Speed Industrial Stitchers, Professional Female/Male Dress Forms, Draping Pods.'
    ],
    [
        'name'        => 'Computer-Aided Design (CAD) & 3D Studio',
        'desc'        => 'High-performance design workstations configured with AutoCAD, 3ds Max, V-Ray, Adobe Illustrator, Photoshop, and CLO 3D virtual garment modeling software.',
        'icon'        => 'laptop',
        'specs'       => 'AutoCAD, 3ds Max, CLO 3D Garment Simulation, Wacom Drawing Tablets.'
    ],
    [
        'name'        => 'Textile Science & Surface Ornamentation Lab',
        'desc'        => 'Dyeing vats, screen printing tables, block printing stations, embroidery frames, fabric tensile testing apparatus, and yarn counting tools.',
        'icon'        => 'layers',
        'specs'       => 'Screen Printing Tables, Chemical Dyeing Vats, Fiber Testing Microscopes, Weaving Looms.'
    ],
    [
        'name'        => 'Interior Spatial & Lighting Model Lab',
        'desc'        => 'Architectural model making workshop with laser cutters, acoustic material sample libraries, architectural lighting testing rigs, and woodwork benches.',
        'icon'        => 'building',
        'specs'       => 'Architectural Laser Cutters, Material Samples Bank, Lighting Simulation Domes.'
    ],
];

$design_partners = [
    'Raymond', 'Aditya Birla Fashion', 'Arvind Mills', 'Fabindia', 'Livspace', 
    'Homelane', 'Asian Paints', 'Pantaloons', 'Shoppers Stop', 'Godrej Interio'
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
      <span class="text-white/90">Fashion &amp; Interior Design</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of Fashion &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Interior Designing</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Fusing artistic imagination with technical engineering. Offering industry-integrated degrees across haute couture apparel design, 3D CAD modeling, residential &amp; commercial interiors, and luxury brand management.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('palette') ?> Garment Construction Ateliers
      </span>
      <span class="hero-pill">
        <?= lucide_icon('building') ?> 3D CAD &amp; Spatial Labs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> B.Sc / M.Sc / MBA / PG Diploma
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 100% Portfolio &amp; Runway Mentorship
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
            <?= lucide_icon('palette', 'w-4 h-4 text-gold') ?> Design Atelier &amp; Spatial Innovation
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Crafting the Future of Fashion &amp; Architectural Spaces
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            Design is the harmonious convergence of aesthetics, functionality, material science, and human experience. The Faculty of Fashion &amp; Interior Designing at RKDF University Ranchi provides an inspiring creative incubator equipped with industrial sewing lines, pattern tables, 3D CAD modeling software, and spatial illumination rigs.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            From haute couture collections showcased on university runways to turnkey architectural interior models, our students receive mentorship that transforms creative passion into thriving commercial design enterprises.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>CLO 3D &amp; CAD Workstations</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>Annual Runway &amp; Design Expo</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Luxury Brand Alliances</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Design Directorate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Excellence in Creative Design</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Equipping designers with live portfolio development, textile manipulation, 3D spatial drafting, and design brand management skills.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">10+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Degree Programs</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Atelier Practical Training</div>
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
          <p class="rkdf-section-desc">Undergraduate, postgraduate, MBA, and professional diploma programs in fashion technology and interior architecture.</p>
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

    <!-- ==================== DESIGN STUDIOS & ATELIERS ==================== -->
    <div class="section-block" id="laboratories">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Creative Infrastructure</span>
          <h3 class="rkdf-section-title">Design Studios &amp; Garment Ateliers</h3>
          <p class="rkdf-section-desc">Commercial garment production lines, digital CAD modeling labs, textile dyeing labs, and interior spatial prototype workshops.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('palette', 'w-3.5 h-3.5 text-gold') ?>
          <span>Industrial Juki Ateliers</span>
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

    <!-- ==================== APPAREL & INTERIOR BRAND RECRUITERS ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('briefcase', 'w-4 h-4 text-gold') ?> Industry Placements &amp; Design Brands
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Apparel Brands, Interior Firms &amp; Retail Alliances
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Our Central Placement Cell connects design graduates with top apparel retail conglomerates, couture fashion labels, interior architecture firms, and luxury furniture brands.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Placement &amp; Portfolio Support</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">50+</div>
              <div class="rkdf-corporate-stat-lbl">Fashion &amp; Interior Partners</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">₹8.5 LPA</div>
              <div class="rkdf-corporate-stat-lbl">Highest Design Package</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Top Design Recruiters</span>
            <span class="text-[10px] text-white/70 uppercase">Apparel &amp; Interior Giants</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($design_partners as $partner): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($partner) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
              <span>Explore Complete Design Placements</span>
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
          Unleash Your Creative Potential in Fashion &amp; Interior Design
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for B.Sc, B.A, M.Sc, MBA, and PG Diploma programs in Fashion and Interior Design. Dedicated atelier access, runway show participation, and talent scholarships available.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Direct Online Application
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Design Portfolio Counseling
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Talent Scholarship Assistance
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
