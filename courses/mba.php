<?php
$page_title = "MBA Programs | Master of Business Administration 2026-27 | RKDF University Ranchi";
$page_description = "Elevate your career with the 2-Year MBA program at RKDF University Ranchi. Dual specializations in Marketing, Finance, HR, IT, Agribusiness & Operations with corporate CXO lectures.";
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
                <a href="<?php echo $base_url; ?>courses/post-graduate-programs.php" class="hover:text-white transition-colors">Post Graduate</a>
                <span class="text-gray-400">/</span>
                <span class="text-amber-400 font-medium">MBA</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('briefcase', ['class' => 'w-3.5 h-3.5']); ?>
                Faculty of Management • 2 Years (4 Semesters)
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                Master of Business Administration (MBA)
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                A flagship postgraduate management program offering dual specializations, Harvard business case pedagogy, C-Suite corporate lectures, and top-tier placement support.
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="<?php echo $base_url; ?>admissions/index.php" class="btn-gold inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                    <?php echo lucide_icon('graduation-cap', ['class' => 'w-4 h-4']); ?>
                    <span>Apply for MBA 2026-27</span>
                </a>
                <a href="<?php echo $base_url; ?>departments/school-management.php" class="btn-outline-white inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium transition-all">
                    <?php echo lucide_icon('building', ['class' => 'w-4 h-4']); ?>
                    <span>Explore Management Faculty</span>
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
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">2 Years (4 Sems)</span>
                <span class="text-[11px] text-primary-700 mt-1 block font-medium">Full-Time Master</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Eligibility</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">Graduation (50%+)</span>
                <span class="text-[11px] text-gray-500 mt-1 block">45% for SC/ST/OBC</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Specialization Model</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">Dual Major</span>
                <span class="text-[11px] text-emerald-700 mt-1 block font-medium">Finance + Mktg / HR / IT</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Internship (SIP)</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">8-Week Corporate SIP</span>
                <span class="text-[11px] text-amber-700 mt-1 block font-medium">Live Industry Mentors</span>
            </div>
        </div>

        <!-- Specializations Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('trending-up', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">MBA in Financial Management</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Derivatives, corporate valuation, mergers & acquisitions, wealth management, and algorithmic trading.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('target', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">MBA in Marketing Management</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Brand management, digital marketing matrices, retail chain strategy, B2B marketing & neuromarketing.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('users', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">MBA in Human Resource Management</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Strategic HRM, compensation management, industrial dispute settlement, HR analytics & leadership coaching.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('binary', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">MBA in Information Technology & Analytics</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Enterprise Resource Planning (ERP), business intelligence, big data analytics & digital transformation.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-teal-50 text-teal-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('compass', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">MBA in Operations & Supply Chain</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Logistics optimization, Total Quality Management (TQM), Lean Six Sigma, procurement & warehouse tech.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-rose-50 text-rose-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('globe', ['class' => 'w-5 h-5']); ?>
                </div>
                <h4 class="text-lg font-serif text-slate-900 font-normal mb-1">MBA in Agribusiness & Rural Management</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Agri-commodity trading, farm-to-fork supply chains, micro-finance and rural distribution channels.</p>
            </div>
        </div>

        <!-- Admission CTA -->
        <div class="rkdf-admission-banner">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
                <div class="text-center md:text-left">
                    <span class="inline-block px-3 py-1 bg-amber-400/20 text-amber-300 text-xs font-semibold rounded-full mb-2">MBA Admissions 2026-27</span>
                    <h3 class="text-2xl sm:text-3xl font-serif text-white font-normal">Fast-Track Your Corporate Career</h3>
                    <p class="text-gray-300 text-sm mt-1 max-w-xl">
                        Apply online for MBA with dual specializations at RKDF University Ranchi.
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
