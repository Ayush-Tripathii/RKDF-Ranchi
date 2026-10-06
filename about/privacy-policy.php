<?php
$page_title = "Privacy Policy | RKDF University Ranchi";
$page_description = "Privacy Policy of RKDF University Ranchi: Information collection, data usage, student record security, cookie policy, and compliance with Indian digital data protection standards.";
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
                <span class="text-amber-400 font-medium">Privacy Policy</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('shield-check', ['class' => 'w-3.5 h-3.5']); ?>
                Data Protection & Privacy
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                Privacy Policy
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                Our policy details how RKDF University Ranchi collects, utilizes, safeguards, and respects the confidential personal and academic data of our students, applicants, and visitors.
            </p>
        </div>
    </div>
</section>

<!-- Main Content Area -->
<main class="py-14 sm:py-20 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-2xl p-6 sm:p-10 shadow-sm border border-gray-100 space-y-8 text-gray-700 text-sm leading-relaxed">
            
            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">1. Introduction</h2>
                <p>
                    RKDF University Ranchi ("we", "us", or "our") is dedicated to protecting your privacy. This Privacy Policy governs the manner in which RKDF University collects, uses, maintains, and discloses information gathered from users ("Users" or "Students") of our official portal (<a href="<?php echo $base_url; ?>index.php" class="text-primary-900 underline font-medium">www.rkdfuniversity.org</a>) and associated admission application portals.
                </p>
            </div>

            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">2. Information We Collect</h2>
                <p class="mb-2">We may collect personal identification information from Users in a variety of ways, including, but not limited to:</p>
                <ul class="list-disc list-inside space-y-1 text-gray-600 pl-2">
                    <li>Contact Information: Name, email address, telephone numbers, and residential address.</li>
                    <li>Academic Credentials: Past school/college transcripts, entrance exam scores, marksheets, and caste/domicile certificates for scholarship processing.</li>
                    <li>Technical Information: Browser type, IP address, device specifications, and page visit analytics for portal optimization.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">3. How We Use Collected Information</h2>
                <p class="mb-2">RKDF University Ranchi utilizes collected student data for the following lawful institutional purposes:</p>
                <ul class="list-disc list-inside space-y-1 text-gray-600 pl-2">
                    <li>Processing academic admissions, enrollment verification, and ID generation.</li>
                    <li>Facilitating university examination registration and grade transcript generation.</li>
                    <li>Submitting statutory data to the UGC, AIU, DigiLocker NAD, and State Government portals.</li>
                    <li>Communicating critical examination dates, event notices, placement drive schedules, and fee receipts.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">4. Data Security & Confidentiality</h2>
                <p>
                    We adopt industry-standard data collection, storage, and processing practices and security measures (including SSL encryption and secure database controls) to protect against unauthorized access, alteration, disclosure, or destruction of your personal data, transaction information, and academic records.
                </p>
            </div>

            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">5. Sharing of Information</h2>
                <p>
                    We do not sell, trade, or rent Users' personal identification information to third parties. We may share generic aggregated demographic data not linked to any personal identification information with regulatory bodies (UGC, AICTE, PCI, BCI, Govt. of Jharkhand) and approved academic verification agencies.
                </p>
            </div>

            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">6. Contacting Us Regarding Privacy</h2>
                <p>
                    If you have any questions about this Privacy Policy or the practices of this site, please contact our administrative desk:
                </p>
                <div class="mt-3 p-4 bg-slate-50 rounded-xl border border-gray-100 text-xs text-gray-600 space-y-1">
                    <p><strong>Registrar Office, RKDF University Ranchi</strong></p>
                    <p>Argora-Kathal More Road, Opp. Water Tank, Dhipatoli, Pundag, Ranchi, Jharkhand - 834004</p>
                    <p>Email: <a href="mailto:info@rkdfuniversity.org" class="text-primary-900 underline font-semibold">info@rkdfuniversity.org</a> | Phone: <a href="tel:+917091168777" class="text-primary-900 underline font-semibold">7091168777</a></p>
                </div>
            </div>

        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
