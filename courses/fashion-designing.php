<?php
$page_title = "Fashion & Interior Designing Programs 2026-27 | RKDF University Ranchi";
$page_description = "Explore B.Sc, M.Sc, MBA & Diploma in Fashion & Interior Designing at RKDF University Ranchi. Juki industrial ateliers, 3D CAD modeling, and runway exhibitions.";
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="inner-page-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs md:text-sm text-gray-300 mb-4" aria-label="Breadcrumb">
                <a href="<?php echo $base_url; ?>index.php" class="hover:text-white transition-colors flex items-center gap-1">
                    <?php echo lucide_icon('home', ['class' => 'w-3.5 h-3.5']); ?>
                    <span>Home</span>
                </a>
                <span class="text-gray-400">/</span>
                <a href="<?php echo $base_url; ?>courses/index.php" class="hover:text-white transition-colors">Courses</a>
                <span class="text-gray-400">/</span>
                <span class="text-amber-400 font-medium">Fashion & Interior Designing</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('scissors', ['class' => 'w-3.5 h-3.5']); ?>
                Faculty of Fashion & Interior Designing • UG, PG & Diploma
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                Fashion & Interior Design Programs
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                Creative couture, apparel engineering, residential spatial planning, sustainable textiles, and 3D architectural interior design with live runway showcases.
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="<?php echo $base_url; ?>admissions/index.php" class="btn-gold inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                    <?php echo lucide_icon('graduation-cap', ['class' => 'w-4 h-4']); ?>
                    <span>Apply for Design 2026-27</span>
                </a>
                <a href="<?php echo $base_url; ?>departments/school-of-fashion-and-interior-designing.php" class="btn-outline-white inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium transition-all">
                    <?php echo lucide_icon('building', ['class' => 'w-4 h-4']); ?>
                    <span>Explore Design Faculty</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sub Navigation -->
<?php require_once __DIR__ . '/../includes/courses_nav_tabs.php'; ?>

<!-- Main Content Area -->
<main class="py-14 sm:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Key Program Specs -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 mb-12">
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Undergraduate Degrees</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">B.Sc. FD / ID (3-Yr)</span>
                <span class="text-[11px] text-primary-700 mt-1 block font-medium">NEP 4-Yr Option</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Postgraduate Degrees</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">M.Sc. & MBA (2-Yr)</span>
                <span class="text-[11px] text-emerald-700 mt-1 block font-medium">Design Business & Luxury</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Professional Diplomas</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">1-Year PGD / Diploma</span>
                <span class="text-[11px] text-gray-500 mt-1 block">Skill Certified</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Studios & Ateliers</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">Juki & 3D CAD</span>
                <span class="text-[11px] text-amber-700 mt-1 block font-medium">Live Annual Runway</span>
            </div>
        </div>

        <!-- Programs Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-rose-50 text-rose-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('scissors', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">B.Sc. in Fashion Designing</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Garment construction, haute couture draping, surface ornamentation, sustainable textiles, and Adobe Illustrator CAD.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('layout', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">B.Sc. in Interior Designing</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Spatial planning, lighting acoustics, AutoCAD, 3ds Max rendering, materials selection, and residential/commercial architecture.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('briefcase', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">MBA in Fashion & Retail Management</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Luxury brand management, fashion merchandising, supply chain logistics, e-commerce retail, and buying forecasting.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('sparkles', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">M.Sc. in Fashion / Interior Design</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Advanced design philosophy, ergonomic interior research, sustainable material engineering, and runway portfolio defense.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('award', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">Diploma in Fashion Designing (1-Yr)</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Fast-track professional certificate covering pattern drafting, machine stitching, fabric rendering, and boutique styling.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-teal-50 text-teal-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('home', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">Diploma in Interior Designing (1-Yr)</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Essential interior drafting, color theory, 2D floor plans, modular furniture aesthetics, and client renovation pitching.</p>
            </div>
        </div>

        <!-- Admission CTA -->
        <div class="rkdf-admission-banner">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
                <div class="text-center md:text-left">
                    <span class="inline-block px-3 py-1 bg-amber-400/20 text-amber-300 text-xs font-semibold rounded-full mb-2">Design Admissions 2026-27</span>
                    <h3 class="text-2xl sm:text-3xl font-serif text-white font-normal">Unleash Your Creative Potential</h3>
                    <p class="text-gray-300 text-sm mt-1 max-w-xl">
                        Apply for Fashion & Interior Designing courses at RKDF University Ranchi.
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <a href="<?php echo $base_url; ?>admissions/index.php" class="btn-gold px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                        Apply Online Now
                    </a>
                </div>
            </div>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
