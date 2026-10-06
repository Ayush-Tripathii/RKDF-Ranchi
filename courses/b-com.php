<?php
$page_title = "Bachelor of Commerce (B.Com / B.Com Hons) 2026-27 | RKDF University Ranchi";
$page_description = "Join the 3-Year B.Com Honours program at RKDF University Ranchi. Learn Advanced Accounting, GST filing, Corporate Finance, Tally Prime, Auditing & Financial Analytics.";
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
                <a href="<?php echo $base_url; ?>courses/under-graduate-programs.php" class="hover:text-white transition-colors">Under Graduate</a>
                <span class="text-gray-400">/</span>
                <span class="text-amber-400 font-medium">B.Com</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('calculator', ['class' => 'w-3.5 h-3.5']); ?>
                Faculty of Commerce • 3 Years (6 Semesters)
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                Bachelor of Commerce (B.Com Honours)
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                Professional commerce degree integrating Corporate Accounting, Taxation, GST E-Filing, Tally Prime & Fintech sandboxes with ICAI / ICMAI alignment.
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="<?php echo $base_url; ?>admissions/index.php" class="btn-gold inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                    <?php echo lucide_icon('graduation-cap', ['class' => 'w-4 h-4']); ?>
                    <span>Apply for B.Com 2026-27</span>
                </a>
                <a href="<?php echo $base_url; ?>departments/school-of-commerce.php" class="btn-outline-white inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium transition-all">
                    <?php echo lucide_icon('building', ['class' => 'w-4 h-4']); ?>
                    <span>Explore Commerce Faculty</span>
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
                <span class="text-xs text-gray-500 font-medium block">Duration</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">3 Years (6 Sems)</span>
                <span class="text-[11px] text-primary-700 mt-1 block font-medium">NEP 4-Yr Option Available</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Eligibility</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">10+2 (Commerce/Sci/Arts)</span>
                <span class="text-[11px] text-gray-500 mt-1 block">Min. 45% (40% Reserved)</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Certifications</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">Tally Prime & GST</span>
                <span class="text-[11px] text-emerald-700 mt-1 block font-medium">Advanced Excel Modeling</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Career Pathways</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">CA/CS/CMA/Banking</span>
                <span class="text-[11px] text-amber-700 mt-1 block font-medium">Corporate Finance Roles</span>
            </div>
        </div>

        <!-- Structure -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center mb-4">
                    <?php echo lucide_icon('calculator', ['class' => 'w-5 h-5']); ?>
                </div>
                <h3 class="text-lg font-serif text-slate-900 font-normal mb-2">Accounting & Auditing</h3>
                <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-4">
                    Corporate accounts, cost accounting, international financial reporting standards (IFRS), statutory audit norms, and forensic accounting principles.
                </p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center mb-4">
                    <?php echo lucide_icon('shield-check', ['class' => 'w-5 h-5']); ?>
                </div>
                <h3 class="text-lg font-serif text-slate-900 font-normal mb-2">Taxation & Corporate Law</h3>
                <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-4">
                    Direct taxes, Income Tax filing, Indirect taxes, GST returns, Companies Act 2013, contract law, and securities market regulations.
                </p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-700 flex items-center justify-center mb-4">
                    <?php echo lucide_icon('binary', ['class' => 'w-5 h-5']); ?>
                </div>
                <h3 class="text-lg font-serif text-slate-900 font-normal mb-2">Fintech & Banking Sandboxes</h3>
                <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-4">
                    Digital banking, investment portfolios, insurance analytics, Excel financial modeling, and microfinance credit management.
                </p>
            </div>
        </div>

        <!-- Admission CTA -->
        <div class="rkdf-admission-banner">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
                <div class="text-center md:text-left">
                    <span class="inline-block px-3 py-1 bg-amber-400/20 text-amber-300 text-xs font-semibold rounded-full mb-2">Commerce Admissions 2026-27</span>
                    <h3 class="text-2xl sm:text-3xl font-serif text-white font-normal">Accelerate Your Financial Career</h3>
                    <p class="text-gray-300 text-sm mt-1 max-w-xl">
                        Join RKDF University Ranchi B.Com Honours with industry-certified accounting tools.
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
