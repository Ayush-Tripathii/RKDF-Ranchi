<?php
$page_title = "DigiLocker NAD & Academic Bank of Credits (ABC) | RKDF University Ranchi";
$page_description = "Step-by-step guide for RKDF University Ranchi students to create their Academic Bank of Credits (ABC ID / APAAR ID) on DigiLocker National Academic Depository (NAD).";
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
                <span class="text-amber-400 font-medium">DigiLocker & ABC Portal</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('binary', ['class' => 'w-3.5 h-3.5']); ?>
                National Academic Depository (NAD) • NEP 2020 Mandate
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                Academic Bank of Credits (ABC) & DigiLocker
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                Seamless digital credit repository allowing students to securely accumulate, transfer, and verify their academic credentials and degrees across Indian higher education institutions.
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="https://www.abc.gov.in/" target="_blank" rel="noopener noreferrer" class="btn-gold inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                    <?php echo lucide_icon('globe', ['class' => 'w-4 h-4']); ?>
                    <span>Create Your ABC ID on abc.gov.in</span>
                </a>
                <a href="https://nad.digilocker.gov.in/students" target="_blank" rel="noopener noreferrer" class="btn-outline-white inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium transition-all">
                    <?php echo lucide_icon('shield-check', ['class' => 'w-4 h-4']); ?>
                    <span>DigiLocker NAD Portal</span>
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
        
        <!-- ABC Overview Spotlight -->
        <div class="bg-white rounded-2xl p-6 sm:p-10 shadow-sm border border-gray-100 mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8">
                    <span class="text-xs font-bold uppercase tracking-widest text-primary-700 bg-primary-50 px-3 py-1 rounded-full">
                        Digital India Initiative
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-serif text-slate-900 font-normal mt-3 mb-4">
                        What is Academic Bank of Credits (ABC)?
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed mb-4">
                        The Academic Bank of Credits (ABC) is a virtual storehouse created by the Ministry of Education and UGC under the National Education Policy (NEP 2020). It digitally deposits and stores academic credits earned by individual students from recognized Higher Education Institutions.
                    </p>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                        At RKDF University Ranchi, all semester grade sheets, credit points, and provisional degrees are directly deposited into the DigiLocker NAD platform, ensuring instantaneous verification and smooth inter-university student mobility.
                    </p>
                </div>
                <div class="lg:col-span-4 bg-gradient-to-br from-primary-900 to-slate-900 text-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-serif text-amber-300 font-normal mb-3 flex items-center gap-2">
                        <?php echo lucide_icon('sparkles', ['class' => 'w-5 h-5']); ?>
                        Key ABC Benefits
                    </h3>
                    <ul class="space-y-3 text-xs sm:text-sm text-gray-200">
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Unique 12-Digit APAAR / ABC ID</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Credit Transfer for Multiple Entry & Exit</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Instant Legally Valid Digital Degrees</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Zero Risk of Physical Marksheet Loss</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 4 Steps to Generate ABC ID -->
        <div class="mb-16">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-widest text-primary-700 bg-primary-50 px-3 py-1 rounded-full">
                    Registration Guide
                </span>
                <h2 class="text-2xl sm:text-3xl font-serif text-slate-900 font-normal mt-3">
                    How to Create Your ABC ID in 4 Easy Steps
                </h2>
                <p class="text-gray-600 text-sm mt-2">Mandatory for all enrolled RKDF University students.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                    <span class="text-xs font-bold text-primary-800 uppercase bg-primary-50 px-2 py-0.5 rounded">Step 1</span>
                    <h4 class="text-base font-serif text-slate-900 font-normal mt-3 mb-2">Login to DigiLocker</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Visit <a href="https://www.digilocker.gov.in/" target="_blank" rel="noopener noreferrer" class="text-primary-900 underline font-medium">digilocker.gov.in</a> or open the DigiLocker Mobile App and sign in using your Aadhaar-linked mobile number.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                    <span class="text-xs font-bold text-emerald-800 uppercase bg-emerald-50 px-2 py-0.5 rounded">Step 2</span>
                    <h4 class="text-base font-serif text-slate-900 font-normal mt-3 mb-2">Search Academic Bank of Credits</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Under the "Search Documents" section, search for <strong>Academic Bank of Credits</strong> or <strong>ABC ID Card</strong>.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                    <span class="text-xs font-bold text-purple-800 uppercase bg-purple-50 px-2 py-0.5 rounded">Step 3</span>
                    <h4 class="text-base font-serif text-slate-900 font-normal mt-3 mb-2">Select RKDF University</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Select Institution Type as "University" and search/select <strong>RKDF University, Ranchi (Jharkhand)</strong> with your Admission/Roll Number.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                    <span class="text-xs font-bold text-amber-800 uppercase bg-amber-50 px-2 py-0.5 rounded">Step 4</span>
                    <h4 class="text-base font-serif text-slate-900 font-normal mt-3 mb-2">Generate & Submit ABC ID</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Click "Get Document". Your 12-digit ABC ID will be created. Submit this ID to your respective department coordinator or ERP portal.
                    </p>
                </div>

            </div>
        </div>

        <!-- Official Gateways Banner -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16">
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs flex items-center justify-between">
                <div>
                    <h4 class="text-base font-serif text-slate-900 font-normal">Official ABC Gov Portal</h4>
                    <p class="text-xs text-gray-500 mt-1">Ministry of Education National Academic Depository.</p>
                </div>
                <a href="https://www.abc.gov.in/" target="_blank" rel="noopener noreferrer" class="btn-primary shrink-0 px-4 py-2 rounded-lg text-xs font-semibold">
                    Visit abc.gov.in &rarr;
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs flex items-center justify-between">
                <div>
                    <h4 class="text-base font-serif text-slate-900 font-normal">DigiLocker NAD Students</h4>
                    <p class="text-xs text-gray-500 mt-1">Access issued degrees and grade transcripts.</p>
                </div>
                <a href="https://nad.digilocker.gov.in/students" target="_blank" rel="noopener noreferrer" class="btn-primary shrink-0 px-4 py-2 rounded-lg text-xs font-semibold">
                    Visit NAD Portal &rarr;
                </a>
            </div>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
