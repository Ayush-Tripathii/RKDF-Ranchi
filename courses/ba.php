<?php
$page_title = "Bachelor of Arts (B.A. Hons) 2026-27 | RKDF University Ranchi";
$page_description = "Pursue 3-Year B.A. Honours degrees in English, Political Science, History, Economics, Geography, Sociology, Hindi & Psychology with Civil Services orientation at RKDF University Ranchi.";
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
                <span class="text-amber-400 font-medium">B.A.</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('book-open', ['class' => 'w-3.5 h-3.5']); ?>
                Faculty of Arts & Humanities • 3 Years (6 Semesters)
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                Bachelor of Arts (B.A. Honours)
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                Comprehensive humanities education offering 8 honours majors, civil services foundational mentoring, GIS cartography laboratories, and language fluency training.
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="<?php echo $base_url; ?>admissions/index.php" class="btn-gold inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                    <?php echo lucide_icon('graduation-cap', ['class' => 'w-4 h-4']); ?>
                    <span>Apply for B.A. 2026-27</span>
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
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">3 Years (6 Sems)</span>
                <span class="text-[11px] text-primary-700 mt-1 block font-medium">NEP 4-Yr Research Option</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Eligibility</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">10+2 Any Stream</span>
                <span class="text-[11px] text-gray-500 mt-1 block">Min. 45% (40% Reserved)</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Honours Streams</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">8 Core Majors</span>
                <span class="text-[11px] text-emerald-700 mt-1 block font-medium">Eng, Pol Sci, Hist, Eco, etc.</span>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <span class="text-xs text-gray-500 font-medium block">Special Advantage</span>
                <span class="text-lg sm:text-xl font-serif text-slate-900 font-normal mt-1 block">Civil Services Guidance</span>
                <span class="text-[11px] text-amber-700 mt-1 block font-medium">UPSC / JPSC Orientation</span>
            </div>
        </div>

        <!-- Specializations Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">B.A. (Hons) English</h4>
                <p class="text-xs text-gray-500 leading-relaxed">British, American & Post-Colonial Literature, Literary Theory, Digital Content & Phonetics.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">B.A. (Hons) Political Science</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Political theory, Indian Constitution, Public Administration & International Geopolitics.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">B.A. (Hons) History</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Ancient, Medieval & Modern Indian History, Archaeology, Historiography & Tribal Heritage.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">B.A. (Hons) Economics</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Micro/Macro Economics, Econometrics, Indian Economy, Public Finance & Statistical Methods.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">B.A. (Hons) Geography</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Geomorphology, Climatology, Remote Sensing, GIS Mapping & Regional Development.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">B.A. (Hons) Sociology</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Social structure, Indian Society, Rural Sociology, Gender Studies & Social Research.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">B.A. (Hons) Psychology</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Cognitive psychology, Clinical psychometrics, Counseling methodologies & Behavioral labs.</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-xs">
                <h4 class="text-base font-serif text-slate-900 font-normal mb-1">B.A. (Hons) Hindi</h4>
                <p class="text-xs text-gray-500 leading-relaxed">Hindi Sahitya Ka Itihas, Kavyashastra, Natak, Anuvad Vigyan & Bhasha Shikshan.</p>
            </div>
        </div>

        <!-- Admission CTA -->
        <div class="rkdf-admission-banner">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
                <div class="text-center md:text-left">
                    <span class="inline-block px-3 py-1 bg-amber-400/20 text-amber-300 text-xs font-semibold rounded-full mb-2">Humanities Admissions 2026-27</span>
                    <h3 class="text-2xl sm:text-3xl font-serif text-white font-normal">Pursue B.A. Honours at RKDF Ranchi</h3>
                    <p class="text-gray-300 text-sm mt-1 max-w-xl">
                        Benefit from E-Kalyan scholarships, civil services cell, and expert humanities mentors.
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
