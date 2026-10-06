<?php
$page_title = "Careers & Faculty Openings 2026-27 | RKDF University Ranchi";
$page_description = "Join the academic and administrative team at RKDF University Ranchi: Openings for Professors, Associate Professors, Assistant Professors, Lab Technicians & Administrative Staff.";
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
                <a href="<?php echo $base_url; ?>about/index.php" class="hover:text-white transition-colors">About</a>
                <span class="text-gray-400">/</span>
                <span class="text-amber-400 font-medium">Careers</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('briefcase', ['class' => 'w-3.5 h-3.5']); ?>
                Human Resources & Faculty Recruitment
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                Work With Us & Shape Tomorrow's Leaders
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                RKDF University Ranchi invites passionate academicians, researchers, and administrative professionals to join our expanding multidisciplinary faculties in Ranchi.
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="#openings" class="btn-gold inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                    <?php echo lucide_icon('search', ['class' => 'w-4 h-4']); ?>
                    <span>View Current Vacancies</span>
                </a>
                <a href="#how-to-apply" class="btn-outline-white inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium transition-all">
                    <?php echo lucide_icon('send', ['class' => 'w-4 h-4']); ?>
                    <span>Application Process</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sub Navigation -->
<?php require_once __DIR__ . '/../includes/about_nav_tabs.php'; ?>

<!-- Main Content Area -->
<main class="py-14 sm:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Institutional Work Culture Card -->
        <div class="bg-white rounded-2xl p-6 sm:p-10 shadow-sm border border-gray-100 mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8">
                    <span class="text-xs font-bold uppercase tracking-widest text-primary-700 bg-primary-50 px-3 py-1 rounded-full">
                        Faculty Excellence
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-serif text-slate-900 font-normal mt-3 mb-4">
                        Why Build Your Academic Career at RKDF Ranchi?
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed mb-4">
                        We offer a vibrant, research-encouraging intellectual environment with state-of-the-art laboratory infrastructure, competitive pay scales as per UGC norms, research publication incentives, and comprehensive medical and housing support.
                    </p>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                        Whether you are an experienced Professor with high-impact Scopus publications or a promising young Ph.D. scholar eager to teach, RKDF provides the platform to pioneer innovative pedagogy.
                    </p>
                </div>
                <div class="lg:col-span-4 bg-gradient-to-br from-primary-900 to-slate-900 text-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-serif text-amber-300 font-normal mb-3 flex items-center gap-2">
                        <?php echo lucide_icon('sparkles', ['class' => 'w-5 h-5']); ?>
                        Faculty Perks & Benefits
                    </h3>
                    <ul class="space-y-3 text-xs sm:text-sm text-gray-200">
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>UGC / AICTE / PCI Aligned Pay Scales</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Research Seed Grants & Conference Travel Grants</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Faculty Housing & Free Transit Bus Facility</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Annual Appraisals & Fast-Track Career Progression</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Current Openings Grid -->
        <div id="openings" class="mb-16">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-widest text-primary-700 bg-primary-50 px-3 py-1 rounded-full">
                    Active Recruitments
                </span>
                <h2 class="text-2xl sm:text-3xl font-serif text-slate-900 font-normal mt-3">
                    Current Academic & Staff Vacancies
                </h2>
                <p class="text-gray-600 text-sm mt-2">Applications invited for full-time regular appointments.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Card 1: CS / IT -->
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] font-bold text-primary-800 uppercase bg-primary-50 px-2 py-0.5 rounded">Faculty Opening</span>
                        <h3 class="text-lg font-serif text-slate-900 font-normal mt-2 mb-1">Professor / Assoc. / Asst. Professor</h3>
                        <p class="text-xs text-primary-900 font-semibold mb-3">School of Information Technology & Computer Science</p>
                        <p class="text-gray-600 text-xs leading-relaxed mb-4">
                            Specializations in AI/ML, Cloud Computing, Full Stack Development, Data Science, and Cybersecurity.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-gray-100 text-xs text-gray-500">
                        Qualification: Ph.D. / M.Tech in CSE / MCA with First Class
                    </div>
                </div>

                <!-- Card 2: Pharmacy -->
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] font-bold text-emerald-800 uppercase bg-emerald-50 px-2 py-0.5 rounded">Faculty Opening</span>
                        <h3 class="text-lg font-serif text-slate-900 font-normal mt-2 mb-1">Professor / Assoc. / Asst. Professor</h3>
                        <p class="text-xs text-emerald-800 font-semibold mb-3">Institute of Pharmaceutical Sciences</p>
                        <p class="text-gray-600 text-xs leading-relaxed mb-4">
                            Specializations in Pharmaceutics, Pharmacology, Pharmaceutical Chemistry, and Pharmacognosy.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-gray-100 text-xs text-gray-500">
                        Qualification: Ph.D. / M.Pharm as per PCI norms
                    </div>
                </div>

                <!-- Card 3: Law -->
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] font-bold text-amber-800 uppercase bg-amber-50 px-2 py-0.5 rounded">Faculty Opening</span>
                        <h3 class="text-lg font-serif text-slate-900 font-normal mt-2 mb-1">Professor / Assoc. / Asst. Professor</h3>
                        <p class="text-xs text-amber-800 font-semibold mb-3">Faculty of Law</p>
                        <p class="text-gray-600 text-xs leading-relaxed mb-4">
                            Specializations in Constitutional Law, Criminal Law, Corporate Law, Cyber Law & IPR.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-gray-100 text-xs text-gray-500">
                        Qualification: LL.M + Ph.D. / UGC-NET in Law (BCI norms)
                    </div>
                </div>

                <!-- Card 4: Management -->
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] font-bold text-purple-800 uppercase bg-purple-50 px-2 py-0.5 rounded">Faculty Opening</span>
                        <h3 class="text-lg font-serif text-slate-900 font-normal mt-2 mb-1">Professor / Assoc. / Asst. Professor</h3>
                        <p class="text-xs text-purple-800 font-semibold mb-3">Faculty of Management & Commerce</p>
                        <p class="text-gray-600 text-xs leading-relaxed mb-4">
                            Specializations in Finance, Business Analytics, Marketing, HR & Operations.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-gray-100 text-xs text-gray-500">
                        Qualification: MBA / M.Com + Ph.D. / UGC-NET
                    </div>
                </div>

                <!-- Card 5: Basic Sciences -->
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] font-bold text-teal-800 uppercase bg-teal-50 px-2 py-0.5 rounded">Faculty Opening</span>
                        <h3 class="text-lg font-serif text-slate-900 font-normal mt-2 mb-1">Assistant Professor / Lecturers</h3>
                        <p class="text-xs text-teal-800 font-semibold mb-3">Basic, Applied & Life Sciences</p>
                        <p class="text-gray-600 text-xs leading-relaxed mb-4">
                            Physics, Chemistry, Mathematics, Biotechnology, Microbiology, Botany & Zoology.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-gray-100 text-xs text-gray-500">
                        Qualification: M.Sc. (55%+) + Ph.D. / CSIR-NET
                    </div>
                </div>

                <!-- Card 6: Admin -->
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] font-bold text-slate-800 uppercase bg-slate-100 px-2 py-0.5 rounded">Staff Opening</span>
                        <h3 class="text-lg font-serif text-slate-900 font-normal mt-2 mb-1">Training & Placement Executive / TPO</h3>
                        <p class="text-xs text-slate-800 font-semibold mb-3">Corporate Relations Directorate</p>
                        <p class="text-gray-600 text-xs leading-relaxed mb-4">
                            Corporate outreach, pool campus coordination, industry networking, and student soft skill mentoring.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-gray-100 text-xs text-gray-500">
                        Qualification: Graduate/MBA with 2-5 yrs corporate liaison exp.
                    </div>
                </div>

            </div>
        </div>

        <!-- How to Apply -->
        <div id="how-to-apply" class="bg-white rounded-2xl p-6 sm:p-10 shadow-sm border border-gray-100 mb-16">
            <h3 class="text-xl font-serif text-slate-900 font-normal mb-4">How to Apply</h3>
            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                Interested candidates fulfilling UGC / AICTE / PCI / BCI criteria may send their detailed Curriculum Vitae (CV) along with copies of educational certificates, research publication summaries, and recent photograph to:
            </p>
            <div class="p-4 bg-slate-50 rounded-xl border border-gray-200 text-slate-800 font-medium text-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div>
                    <span>Email: <a href="mailto:hr@rkdfuniversity.org" class="text-primary-900 underline font-bold">hr@rkdfuniversity.org</a> / <a href="mailto:info@rkdfuniversity.org" class="text-primary-900 underline font-bold">info@rkdfuniversity.org</a></span>
                    <span class="block text-xs text-gray-500 mt-1">Please mention the post and department applied for in the email subject line.</span>
                </div>
                <a href="mailto:hr@rkdfuniversity.org" class="btn-primary shrink-0 px-4 py-2 rounded-lg text-xs font-semibold">
                    Submit Application via Email
                </a>
            </div>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
