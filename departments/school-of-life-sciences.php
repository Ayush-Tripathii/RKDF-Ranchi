<?php
/**
 * RKDF University — Faculty of Life Sciences
 * Pattern: Luxury Comprehensive Faculty Showcase
 * Content Source: https://rkdfuniversity.org/departments/school-of-life-sciences/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Faculty of Life Sciences — ' . SITE_NAME;
$page_meta_desc = 'Faculty of Life Sciences at RKDF University Ranchi. Premier B.Sc (Hons) and M.Sc programs in Biotechnology, Microbiology, Botany, and Zoology with advanced molecular genetics, tissue culture, and bioprocess laboratories.';

$programs = [
    // --- Postgraduate Programs ---
    [
        'category'    => 'Postgraduate Degrees (M.Sc)',
        'title'       => 'M.Sc. Biotechnology',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'High-Demand Bioscience',
        'icon'        => 'dna',
        'description' => 'Recombinant DNA technology, genetic engineering, bioprocess engineering, immunology, plant & animal biotechnology, genomics, and computational bioinformatics.',
        'branches'    => [
            ['name' => 'Recombinant DNA & Gene Cloning', 'tag' => 'PCR & Vectors'],
            ['name' => 'Bioprocess & Industrial Fermentation', 'tag' => 'Bioreactor Design'],
            ['name' => 'Genomics, Proteomics & Bioinformatics', 'tag' => 'Sequence Analytics'],
            ['name' => 'Immunotechnology & Molecular Diagnostics', 'tag' => 'ELISA & Monoclonals'],
        ],
        'eligibility' => 'Passed B.Sc. in Biotechnology, Microbiology, Life Sciences, Botany, Zoology, Biochemistry or allied biological sciences with at least 50% aggregate marks (45% for SC/ST/OBC).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.Sc)',
        'title'       => 'M.Sc. Microbiology',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Clinical & Industrial Micro',
        'icon'        => 'microscope',
        'description' => 'Advanced study in medical microbiology, microbial genetics, virology, immunology, food & dairy microbiology, and industrial bioproduct development.',
        'branches'    => [
            ['name' => 'Medical Virology & Pathogenic Bacteriology', 'tag' => 'Clinical Diagnostics'],
            ['name' => 'Microbial Genetics & Molecular Biology', 'tag' => 'Gene Regulation'],
            ['name' => 'Food, Dairy & Industrial Microbiology', 'tag' => 'Fermentation Tech'],
            ['name' => 'Immunology & Clinical Serology', 'tag' => 'Vaccine Development'],
        ],
        'eligibility' => 'Passed B.Sc. in Microbiology, Biotechnology, Life Sciences, Botany, Zoology or allied biological sciences with minimum 50% marks (45% for reserved category).'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.Sc)',
        'title'       => 'M.Sc. in Zoology',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Animal Sciences & Physiology',
        'icon'        => 'heart-pulse',
        'description' => 'Comparative animal physiology, cell biology, genetics, developmental biology, animal ecology, ethology, entomology, and fisheries aquaculture.',
        'branches'    => [
            ['name' => 'Animal Physiology & Endocrinology', 'tag' => 'Systemic Mechanisms'],
            ['name' => 'Cytogenetics & Evolutionary Biology', 'tag' => 'Chromosomal Studies'],
            ['name' => 'Applied Entomology & Pest Management', 'tag' => 'Vector Control'],
            ['name' => 'Aquaculture & Fisheries Management', 'tag' => 'Commercial Fish Tech'],
        ],
        'eligibility' => 'Passed B.Sc. with Zoology as a Major / Honours / Core subject with at least 50% aggregate marks (45% for reserved categories) from a recognized University.'
    ],
    [
        'category'    => 'Postgraduate Degrees (M.Sc)',
        'title'       => 'M.Sc. Botany',
        'duration'    => '2 Years · 4 Semesters',
        'badge'       => 'Plant Biology & Agro-Tech',
        'icon'        => 'leaf',
        'description' => 'Plant physiology, biochemistry, plant taxonomy, cryptogams, phanerogams, plant tissue culture, ethnobotany, and medicinal plant secondary metabolites.',
        'branches'    => [
            ['name' => 'Plant Tissue Culture & Micropropagation', 'tag' => 'Aseptic Culture'],
            ['name' => 'Medicinal Plants & Ethnobotany', 'tag' => 'Phytochemistry'],
            ['name' => 'Plant Pathology & Fungal Biotechnology', 'tag' => 'Disease Diagnosis'],
            ['name' => 'Plant Physiology & Molecular Breeding', 'tag' => 'Crop Genetics'],
        ],
        'eligibility' => 'Passed B.Sc. with Botany as a Major / Honours / Core subject with at least 50% aggregate marks (45% for reserved categories).'
    ],

    // --- Undergraduate Programs ---
    [
        'category'    => 'Undergraduate Degrees (B.Sc Hons)',
        'title'       => 'B.Sc. (Hons.) in Biotechnology',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Applied Bioscience',
        'icon'        => 'dna',
        'description' => 'Foundational biology, biochemistry, molecular genetics, microbiology, cell biology, genetic manipulation, and bio-analytical laboratory techniques.',
        'branches'    => [
            ['name' => 'Cell Biology & Biomolecules', 'tag' => 'Structural Biochemistry'],
            ['name' => 'Fundamentals of Molecular Genetics', 'tag' => 'DNA/RNA Mechanisms'],
            ['name' => 'Introductory Genetic Engineering', 'tag' => 'Vector Recombination'],
            ['name' => 'Applied Bioprocess Techniques', 'tag' => 'Laboratory Culture'],
        ],
        'eligibility' => 'Passed 10+2 with Biology, Chemistry, and Physics / Mathematics with minimum 45% aggregate marks (40% for SC/ST/OBC).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.Sc Hons)',
        'title'       => 'B.Sc. (Hons.) in Microbiology',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Microbial Sciences',
        'icon'        => 'microscope',
        'description' => 'The microbial world, bacteriology, virology, mycology, microbial physiology, immunology, microbial genetics, and environmental microbiology.',
        'branches'    => [
            ['name' => 'Bacteriology & Virology Systems', 'tag' => 'Staining & Isolation'],
            ['name' => 'Microbial Physiology & Metabolism', 'tag' => 'Culture Media'],
            ['name' => 'Fundamentals of Immunology', 'tag' => 'Antigen-Antibody Assays'],
            ['name' => 'Environmental & Agricultural Micro', 'tag' => 'Biofertilizers'],
        ],
        'eligibility' => 'Passed 10+2 with Biology and Chemistry with minimum 45% aggregate marks (40% for SC/ST/OBC).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.Sc Hons)',
        'title'       => 'B.Sc. (Hons.) in Zoology',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Zoological Sciences',
        'icon'        => 'heart-pulse',
        'description' => 'Non-chordates, chordate diversity, animal physiology, biochemistry, cell biology, developmental biology, genetics, and wildlife conservation.',
        'branches'    => [
            ['name' => 'Non-Chordates & Chordata Diversity', 'tag' => 'Comparative Anatomy'],
            ['name' => 'Animal Physiology & Histology', 'tag' => 'Organ Systems'],
            ['name' => 'Cell & Developmental Biology', 'tag' => 'Embryology'],
            ['name' => 'Ecology & Wildlife Conservation', 'tag' => 'Biodiversity Fieldwork'],
        ],
        'eligibility' => 'Passed 10+2 in Science stream with Biology as a core subject with minimum 45% marks (40% for SC/ST).'
    ],
    [
        'category'    => 'Undergraduate Degrees (B.Sc Hons)',
        'title'       => 'B.Sc. (Hons.) in Botany',
        'duration'    => '3 Years · 6 Semesters',
        'badge'       => 'Botanical Sciences',
        'icon'        => 'leaf',
        'description' => 'Algae, fungi, bryophytes, pteridophytes, gymnosperms, angiosperm taxonomy, plant anatomy, plant physiology, and economic botany.',
        'branches'    => [
            ['name' => 'Cryptogamic & Phanerogamic Botany', 'tag' => 'Plant Diversity'],
            ['name' => 'Plant Anatomy & Embryology', 'tag' => 'Tissue Systems'],
            ['name' => 'Plant Physiology & Metabolism', 'tag' => 'Photosynthesis & Enzymes'],
            ['name' => 'Angiosperm Taxonomy & Herbarium', 'tag' => 'Floral Morphology'],
        ],
        'eligibility' => 'Passed 10+2 in Science stream with Biology as a core subject with minimum 45% marks (40% for SC/ST).'
    ],
];

$labs = [
    [
        'name'        => 'Molecular Biology & Genetic Engineering Lab',
        'desc'        => 'Sterile containment facility equipped with Thermal Cyclers (PCR), horizontal/vertical gel electrophoresis units, UV transilluminators, and gel documentation systems.',
        'icon'        => 'dna',
        'specs'       => 'Thermal Cyclers (PCR), UV Gel Doc System, -20°C Deep Freezers, Micro-Centrifuges.'
    ],
    [
        'name'        => 'Microbial Culture & Fermentation Suite',
        'desc'        => 'Equipped with digital autoclave units, BOD incubators, orbital shaking incubators, phase-contrast research microscopes, and benchtop fermenters.',
        'icon'        => 'microscope',
        'specs'       => 'BOD Incubators, Class II Type A2 Biosafety Cabinets, Rotary Shakers, Fermenters.'
    ],
    [
        'name'        => 'Plant Tissue Culture & Botanical Herbarium',
        'desc'        => 'Environmentally regulated photoperiodic growth chambers for explant culture, callogenesis, micropropagation, hardening chambers, and state herbarium.',
        'icon'        => 'leaf',
        'specs'       => 'Photoperiodic Growth Chambers, Laminar Media Units, Hardening Greenhouse.'
    ],
    [
        'name'        => 'Animal Physiology & Histology Lab',
        'desc'        => 'Equipped with precision rotary microtomes, histological tissue staining stations, binocular research microscopes, and hematological test suites.',
        'icon'        => 'heart-pulse',
        'specs'       => 'Rotary Microtomes, Binocular Digital Microscopes, Hematology Units, Centrifuges.'
    ],
    [
        'name'        => 'Immunology & Clinical Diagnostics Lab',
        'desc'        => 'Specialized testing suites for ELISA diagnostic assays, serological testing, blood grouping, antibody titration, and immunoelectrophoresis.',
        'icon'        => 'shield-check',
        'specs'       => 'Microplate ELISA Readers, Vortex Mixers, Refrigerated Centrifuges, Serology Kits.'
    ],
    [
        'name'        => 'Bioinformatics & Computational Genomics Cell',
        'desc'        => 'Dedicated workstation cluster configured with NCBI BLAST, ClustalW, PyMOL, AutoDock, and biological sequence analysis tools.',
        'icon'        => 'cpu',
        'specs'       => 'High-Speed Workstations, Biological Sequence Databases, Molecular Docking Suites.'
    ],
];

$biopharma_partners = [
    'Biocon', 'Serum Institute', 'Dr. Reddy\'s', 'Lupin Pharma', 'Bharat Biotech', 
    'Sun Pharma', 'Cipla', 'Patanjali Bioscience', 'CSIR-CDRI', 'ICAR'
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
      <span class="text-white/90">Life Sciences</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Faculty of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Life Sciences</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Exploring the frontiers of biotechnology, molecular genetics, microbiology, botany, and zoological systems through state-of-the-art wet laboratories and experiential scientific inquiry.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('dna') ?> Recombinant DNA &amp; Genetics
      </span>
      <span class="hero-pill">
        <?= lucide_icon('microscope') ?> 6+ Bioscience Laboratories
      </span>
      <span class="hero-pill">
        <?= lucide_icon('leaf') ?> B.Sc (Hons) &amp; M.Sc Degrees
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> 100% Sterile Practical Training
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
            <?= lucide_icon('leaf', 'w-4 h-4 text-gold') ?> Center of Biological Excellence &amp; Genetic Innovation
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Deciphering Biological Complexity &amp; Life Mechanisms
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            Understanding biology and its intricate cellular procedures is key to unraveling nature's ingenuity. The insights acquired enable researchers to understand diverse living organisms at molecular, cellular, physiological, and ecological tiers—answering vital challenges in human healthcare, agricultural resilience, disease diagnostics, and environmental sustainability.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Our mission is to stand as a centre of excellence in biological education and research, offering an effective interdisciplinary learning atmosphere across all fields of modern biosciences interfacing with biopharma, clinical pathology, and agro-biotechnology.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('layers') ?>
              <span>Molecular &amp; Cellular Biology</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>CSIR / UGC-NET Bioscience Prep</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Biopharma &amp; R&amp;D Internships</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> Bioscience Directorate
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('award', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Excellence in Bioscience</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Equipping students with sterile cell culture proficiency, genomic assay skills, and direct paths to biopharma careers and research fellowships.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">8+</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">UG &amp; PG Degree Majors</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Aseptic Lab Training</div>
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
          <p class="rkdf-section-desc">UGC and NEP-aligned undergraduate and postgraduate degree programs in biotechnology, microbiology, botany, and zoology.</p>
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

    <!-- ==================== BIOSCIENCE LABORATORIES ==================== -->
    <div class="section-block" id="laboratories">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Bioscience Infrastructure</span>
          <h3 class="rkdf-section-title">Specialized Bioscience Laboratories</h3>
          <p class="rkdf-section-desc">Aseptic cell culture suites, molecular genomics centers, plant micropropagation facilities, and histology workstations.</p>
        </div>
        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-slate-700 font-semibold text-xs border border-border shadow-xs shrink-0">
          <?= lucide_icon('flask-conical', 'w-3.5 h-3.5 text-gold') ?>
          <span>Sterile Biosafety Suites</span>
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
                <span>Key Instrumentation &amp; Setups:</span>
              </div>
              <p class="rkdf-lab-specs-text"><?= e($lab['specs']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== BIOPHARMA LINKAGES & RECRUITERS ==================== -->
    <div class="rkdf-corporate-banner section-block">
      <div class="absolute -right-24 -top-24 w-96 h-96 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-brand/50 rounded-full blur-3xl pointer-events-none"></div>

      <div class="rkdf-corporate-grid">
        <!-- Left Narrative & Stats -->
        <div>
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold mb-3">
            <?= lucide_icon('dna', 'w-4 h-4 text-gold') ?> Biopharma Linkages &amp; Career Pathways
          </div>
          <h3 class="font-serif text-3xl sm:text-4xl font-normal text-white leading-tight">
            Biopharma Alliances &amp; Research Fellowships
          </h3>
          <p class="text-white/80 text-sm leading-relaxed mt-3">
            Our Central Training &amp; Placement Cell connects life science scholars with leading biotechnology companies, clinical research organizations (CROs), diagnostics laboratories, and national research institutes.
          </p>

          <!-- 3 Stat Metrics -->
          <div class="rkdf-corporate-stats">
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">100%</div>
              <div class="rkdf-corporate-stat-lbl">Placement &amp; Project Support</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">CSIR</div>
              <div class="rkdf-corporate-stat-lbl">JRF / NET Mentorship</div>
            </div>
            <div class="rkdf-corporate-stat-item">
              <div class="rkdf-corporate-stat-num">50+</div>
              <div class="rkdf-corporate-stat-lbl">Bio-R&amp;D Collaborations</div>
            </div>
          </div>
        </div>

        <!-- Right Recruiter Grid Box -->
        <div class="rkdf-recruiter-box">
          <div class="flex items-center justify-between pb-3 border-b border-white/15">
            <span class="text-xs uppercase tracking-widest text-gold font-bold">Biopharma &amp; R&amp;D Recruiters</span>
            <span class="text-[10px] text-white/70 uppercase">Biotech MNCs &amp; CROs</span>
          </div>
          <div class="rkdf-recruiter-grid">
            <?php foreach ($biopharma_partners as $partner): ?>
              <div class="rkdf-recruiter-tile">
                <?= e($partner) ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4 pt-3 border-t border-white/10 text-center">
            <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-1.5 text-xs text-gold hover:text-white font-semibold uppercase tracking-wider transition">
              <span>Explore Life Sciences Research Programs</span>
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
          Build Your Future in Biotechnology &amp; Biosciences
        </h3>
        <p class="rkdf-admission-desc">
          Apply online for B.Sc (Hons) and M.Sc degree programs in Biotechnology, Microbiology, Botany, and Zoology. Merit scholarships, direct lab project mentorship, and fee installment plans available.
        </p>
        <div class="rkdf-admission-pills">
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Direct Online Application
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Bioscience Faculty Counseling
          </span>
          <span class="rkdf-admission-pill-item">
            <?= lucide_icon('check-circle', 'w-3.5 h-3.5 text-emerald-600') ?> Merit Scholarship Assistance
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
