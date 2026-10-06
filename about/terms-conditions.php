<?php
$page_title = "Terms & Conditions | RKDF University Ranchi";
$page_description = "Official Terms and Conditions for use of the RKDF University Ranchi website, digital fee payment portals, examination rules, and admission guidelines.";
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
                <span class="text-amber-400 font-medium">Terms & Conditions</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('scale', ['class' => 'w-3.5 h-3.5']); ?>
                Legal & Institutional Governance
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                Terms & Conditions
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                Guidelines governing digital access, online fee transactions, academic integrity, and student conduct at RKDF University Ranchi.
            </p>
        </div>
    </div>
</section>

<!-- Main Content Area -->
<main class="py-14 sm:py-20 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-2xl p-6 sm:p-10 shadow-sm border border-gray-100 space-y-8 text-gray-700 text-sm leading-relaxed">
            
            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">1. Acceptance of Terms</h2>
                <p>
                    By accessing and using this website (<a href="<?php echo $base_url; ?>index.php" class="text-primary-900 underline font-medium">www.rkdfuniversity.org</a>), you agree to comply with and be bound by the following terms and conditions of use, alongside our Privacy Policy and official university statutory regulations.
                </p>
            </div>

            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">2. Intellectual Property Rights</h2>
                <p>
                    All content, logos, insignia, course curricula, research articles, images, and software on this website are the intellectual property of RKDF University Ranchi or licensed to us. Unauthorized reproduction, dissemination, or modification without written permission from the Registrar is strictly prohibited.
                </p>
            </div>

            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">3. Admission & Fee Payment Terms</h2>
                <ul class="list-disc list-inside space-y-1 text-gray-600 pl-2">
                    <li>Submission of an online admission application does not automatically guarantee admission. Final admission is subject to physical verification of original marksheets and eligibility criteria fulfillment.</li>
                    <li>All online fee transactions (application fees, semester tuition, hostel deposits) processed via official payment gateways are governed by university financial ordinances.</li>
                    <li>In case of duplicate transaction debits due to network interruptions, refund reconciliation is processed through banking channels within standard settlement windows.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">4. Examination Rules & Discipline</h2>
                <p>
                    Students enrolled at RKDF University Ranchi are bound by the University Examination Ordinances and Statutes. Any act of unfair means, proxy attendance, or disruption in academic sessions is subject to disciplinary action by the Proctorial Board and Unfair Means Committee.
                </p>
            </div>

            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">5. Jurisdiction & Dispute Resolution</h2>
                <p>
                    All legal matters, disputes, and claims arising out of admission, academic enrollment, or website transactions are subject to the exclusive jurisdiction of the competent courts in Ranchi, Jharkhand only.
                </p>
            </div>

            <div>
                <h2 class="text-xl font-serif text-slate-900 font-normal mb-3">6. Official Inquiries</h2>
                <div class="mt-3 p-4 bg-slate-50 rounded-xl border border-gray-100 text-xs text-gray-600 space-y-1">
                    <p><strong>Office of the Registrar, RKDF University Ranchi</strong></p>
                    <p>Argora-Kathal More Road, Opp. Water Tank, Dhipatoli, Pundag, Ranchi, Jharkhand - 834004</p>
                    <p>Email: <a href="mailto:info@rkdfuniversity.org" class="text-primary-900 underline font-semibold">info@rkdfuniversity.org</a> | Phone: <a href="tel:+917091168777" class="text-primary-900 underline font-semibold">7091168777</a></p>
                </div>
            </div>

        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
