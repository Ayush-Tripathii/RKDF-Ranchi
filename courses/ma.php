<?php
$page_title = "Master of Arts (M.A.) Programs 2026-27 | RKDF University Ranchi";
$page_description = "Pursue 2-Year M.A. postgraduate programs in English, Political Science, History, Economics, Geography, Sociology, Hindi & Psychology at RKDF University Ranchi.";
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
                <span class="text-amber-400 font-medium">M.A.</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('book-open', ['class' => 'w-3.5 h-3.5']); ?>
                Faculty of Arts & Humanities • 2 Years (4 Semesters)
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                Master of Arts (M.A.)
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                Postgraduate humanities and social science disciplines designed to foster critical scholarship, public policy analysis, and advanced research competence.
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="<?php echo $base_url; ?>admissions/index.php" class="btn-gold inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                    <?php echo lucide_icon('graduation-cap', ['class' => 'w-4 h-4']); ?>
                    <span>Apply for M.A. 2026-27</span>
                </a>
                <a href="<?php echo $base_url; ?>departments/school-of-arts-and-humanities.php" class="btn-outline-white inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium transition-all">
                    <?php echo lucide_icon('building', ['class' => 'w-4 h-4']); ?>
                    <span>Explore Humanities Faculty</span>
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
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">Bachelor's Degree</span>
                <span class="text-[11px] text-gray-500 mt-1 block">Min. 45% (40% Reserved)</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Available Majors</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">8 Core Majors</span>
                <span class="text-[11px] text-emerald-700 mt-1 block font-medium">Eng, Pol Sci, Hist, Eco...</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">UGC-NET / JRF</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">NET Mentorship Cell</span>
                <span class="text-[11px] text-amber-700 mt-1 block font-medium">Ph.D. Bridge Support</span>
            </div>
        </div>

        <!-- M.A. Majors Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">M.A. English</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Contemporary Critical Theory, Postmodern Fiction, Translation Studies & Digital Humanities.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">M.A. Political Science</h4>
                <p class="text-xs text-gray-500 leading-relaxed">International Relations Theory, Indian Foreign Policy, Comparative Governance & Political Sociology.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">M.A. History</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Agrarian & Socio-Economic History of India, Historiographical Methods, Subaltern Studies & Archives.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">M.A. Economics</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Advanced Econometric Models, Development Economics, Monetary Policy, Trade Theory & Data Science.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">M.A. Geography</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Urban GIS, Environmental Geopolitics, Quantitative Spatial Analysis & Sustainable Regional Planning.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">M.A. Sociology</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Sociological Theories, Tribal Transformations in Jharkhand, Industrial Relations & Social Policy.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">M.A. Psychology</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Advanced Psychodiagnostics, Neuropsychology, Cognitive Behavioral Interventions & Health Psychology.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">M.A. Hindi</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Prachin evam Madhyakalin Kavya, Adhunik Sahitya Siddhant, Prayojanmoolak Hindi & Natyashastra.</p>
            </div>
        </div>

        <!-- Admission CTA -->
        <div class="rkdf-admission-banner">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
                <div class="text-center md:text-left">
                    <span class="inline-block px-3 py-1 bg-amber-400/20 text-amber-300 text-xs font-semibold rounded-full mb-2">PG Admissions 2026-27</span>
                    <h3 class="text-2xl sm:text-3xl font-serif text-white font-normal">Advance Your Intellectual Career with M.A.</h3>
                    <p class="text-gray-300 text-sm mt-1 max-w-xl">
                        Apply online for M.A. programs with E-Kalyan state scholarship eligibility at RKDF Ranchi.
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
