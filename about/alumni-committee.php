<?php
$page_title = "Alumni Association & Committee | RKDF University Ranchi";
$page_description = "Connect with the RKDF University Ranchi Alumni Association: Global network of graduates, mentorship programs, annual reunions, career networking & alumni registration.";
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
                <span class="text-amber-400 font-medium">Alumni Committee</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('users', ['class' => 'w-3.5 h-3.5']); ?>
                Global Graduate Network & Mentorship
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                RKDF University Ranchi Alumni Association
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                Fostering lifelong bonds between the university and our distinguished alumni thriving across global corporations, public administration, entrepreneurship, and academia.
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="<?php echo $base_url; ?>documents/RKDF-Alumni-Form-2025.pdf" target="_blank" class="btn-gold inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                    <?php echo lucide_icon('download', ['class' => 'w-4 h-4']); ?>
                    <span>Download Alumni Registration Form</span>
                </a>
                <a href="#initiatives" class="btn-outline-white inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium transition-all">
                    <?php echo lucide_icon('sparkles', ['class' => 'w-4 h-4']); ?>
                    <span>Alumni Initiatives</span>
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
        
        <!-- Spotlight Card -->
        <div class="bg-white rounded-2xl p-6 sm:p-10 shadow-sm border border-gray-100 mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8">
                    <span class="text-xs font-bold uppercase tracking-widest text-primary-700 bg-primary-50 px-3 py-1 rounded-full">
                        Alumni Relations
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-serif text-slate-900 font-normal mt-3 mb-4">
                        Lifelong Connection, Mentorship & Pride
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed mb-4">
                        The RKDF University Alumni Association acts as an active conduit uniting our graduates across batches and disciplines. Our alumni hold prestigious leadership positions in Fortune 500 tech companies, pharmaceutical giants, leading law firms, financial institutions, and government services.
                    </p>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                        Through interactive masterclasses, guest lectures, hiring referrals, and student project mentoring, our alumni community plays an integral role in shaping the next generation of RKDF graduates.
                    </p>
                </div>
                <div class="lg:col-span-4 bg-gradient-to-br from-primary-900 to-slate-900 text-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-serif text-amber-300 font-normal mb-3 flex items-center gap-2">
                        <?php echo lucide_icon('award', ['class' => 'w-5 h-5']); ?>
                        Key Alumni Privileges
                    </h3>
                    <ul class="space-y-3 text-xs sm:text-sm text-gray-200">
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Lifelong Library & Research Access</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Annual Global Alumni Reunion Meet</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Exclusive Executive Job Portal & Referrals</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Campus Incubation & Startup Mentorship</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Initiatives Grid -->
        <div id="initiatives" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('compass', ['class' => 'w-5 h-5']); ?>
                </div>
                <h3 class="text-lg font-serif text-slate-900 font-normal mb-2">Alumni-Student Mentorship</h3>
                <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                    Senior alumni conduct one-on-one virtual mentoring sessions guiding final-year students on interview preparation, industry expectations, and portfolio development.
                </p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('briefcase', ['class' => 'w-5 h-5']); ?>
                </div>
                <h3 class="text-lg font-serif text-slate-900 font-normal mb-2">Corporate Placement Drives</h3>
                <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                    Alumni in senior talent acquisition roles frequently facilitate on-campus and virtual hiring drives for RKDF freshers across corporate domains.
                </p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-xs">
                <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-700 flex items-center justify-center mb-3">
                    <?php echo lucide_icon('sparkles', ['class' => 'w-5 h-5']); ?>
                </div>
                <h3 class="text-lg font-serif text-slate-900 font-normal mb-2">Annual Convocation & Reunion</h3>
                <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                    Relive cherished memories, reconnect with beloved professors, and celebrate distinguished alumni achievements during the grand annual gathering in Ranchi.
                </p>
            </div>
        </div>

        <!-- Download & Register CTA -->
        <div class="rkdf-admission-banner">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
                <div class="text-center md:text-left">
                    <span class="inline-block px-3 py-1 bg-amber-400/20 text-amber-300 text-xs font-semibold rounded-full mb-2">Stay Connected</span>
                    <h3 class="text-2xl sm:text-3xl font-serif text-white font-normal">Register in the Alumni Directory</h3>
                    <p class="text-gray-300 text-sm mt-1 max-w-xl">
                        Download the official alumni registration form and submit your updated details to the Alumni Cell: <a href="mailto:info@rkdfuniversity.org" class="underline hover:text-white">info@rkdfuniversity.org</a>
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <a href="<?php echo $base_url; ?>documents/RKDF-Alumni-Form-2025.pdf" target="_blank" class="btn-gold px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                        Download Registration Form (PDF)
                    </a>
                </div>
            </div>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
