<?php
$page_title = "RTI Corner | Right to Information Act 2005 | RKDF University Ranchi";
$page_description = "Right to Information (RTI) statutory corner at RKDF University Ranchi: Public Information Officer (PIO), First Appellate Authority, RTI application procedure & guidelines.";
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
                <span class="text-amber-400 font-medium">RTI Corner</span>
            </nav>

            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md mb-4">
                <?php echo lucide_icon('shield-check', ['class' => 'w-3.5 h-3.5']); ?>
                Statutory Transparency • Right to Information Act, 2005
            </span>

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-serif font-normal text-white tracking-tight leading-tight mb-4">
                Right to Information (RTI) Corner
            </h1>
            <p class="text-base sm:text-lg text-gray-200 font-light leading-relaxed mb-6">
                Promoting institutional transparency, democratic accountability, and citizen access to public information in compliance with statutory RTI provisions.
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="#authorities" class="btn-gold inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-semibold transition-all">
                    <?php echo lucide_icon('user', ['class' => 'w-4 h-4']); ?>
                    <span>Designated RTI Authorities</span>
                </a>
                <a href="#procedure" class="btn-outline-white inline-flex items-center gap-2 px-6 py-3 rounded-lg text-sm font-medium transition-all">
                    <?php echo lucide_icon('file-text', ['class' => 'w-4 h-4']); ?>
                    <span>Application Guidelines</span>
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
        
        <!-- Statutory Overview -->
        <div class="bg-white rounded-2xl p-6 sm:p-10 shadow-sm border border-gray-100 mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8">
                    <span class="text-xs font-bold uppercase tracking-widest text-primary-700 bg-primary-50 px-3 py-1 rounded-full">
                        Statutory Framework
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-serif text-slate-900 font-normal mt-3 mb-4">
                        Commitment to Openness & Public Accountability
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed mb-4">
                        RKDF University Ranchi functions with unyielding commitment to transparency, good governance, and public accountability. Under Section 4(1)(b) of the Right to Information Act, 2005, the university proactively discloses vital institutional statutes, ordinances, regulatory approvals, and academic data.
                    </p>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                        Citizens seeking specific information not covered under voluntary public disclosure may submit written applications to the designated Public Information Officer (PIO) following prescribed RTI statutory guidelines.
                    </p>
                </div>
                <div class="lg:col-span-4 bg-gradient-to-br from-primary-900 to-slate-900 text-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-serif text-amber-300 font-normal mb-3 flex items-center gap-2">
                        <?php echo lucide_icon('shield-check', ['class' => 'w-5 h-5']); ?>
                        RTI Principles
                    </h3>
                    <ul class="space-y-3 text-xs sm:text-sm text-gray-200">
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Timely 30-Day Response Compliance</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Designated Public Information Officer (PIO)</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>First Appellate Authority Supervision</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <?php echo lucide_icon('check-circle', ['class' => 'w-4 h-4 text-amber-400 shrink-0']); ?>
                            <span>Mandatory Public Self-Disclosures Online</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Designated Authorities -->
        <div id="authorities" class="mb-16">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-widest text-primary-700 bg-primary-50 px-3 py-1 rounded-full">
                    Statutory Officers
                </span>
                <h2 class="text-2xl sm:text-3xl font-serif text-slate-900 font-normal mt-3">
                    Designated RTI Authorities
                </h2>
                <p class="text-gray-600 text-sm mt-2">Appointed under the Right to Information Act, 2005.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                
                <!-- PIO Card -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-xs">
                    <span class="text-xs font-bold uppercase text-primary-800 bg-primary-50 px-2.5 py-1 rounded">RTI Officer</span>
                    <h3 class="text-xl font-serif text-slate-900 font-normal mt-3 mb-1">Public Information Officer (PIO)</h3>
                    <p class="text-xs text-gray-500 mb-4">Office of the Registrar, RKDF University Ranchi</p>
                    <div class="space-y-2 text-xs text-gray-600 border-t border-gray-100 pt-4">
                        <p><strong>Address:</strong> RKDF University Ranchi, Argora-Kathal More Road, Opp. Water Tank, Dhipatoli, Pundag, Ranchi, Jharkhand - 834004</p>
                        <p><strong>Email:</strong> <a href="mailto:info@rkdfuniversity.org" class="text-primary-900 underline font-medium">info@rkdfuniversity.org</a></p>
                        <p><strong>Helpline:</strong> <a href="tel:+917091168777" class="text-primary-900 underline font-medium">7091168777</a></p>
                    </div>
                </div>

                <!-- Appellate Authority Card -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-xs">
                    <span class="text-xs font-bold uppercase text-emerald-800 bg-emerald-50 px-2.5 py-1 rounded">Appellate Authority</span>
                    <h3 class="text-xl font-serif text-slate-900 font-normal mt-3 mb-1">First Appellate Authority (FAA)</h3>
                    <p class="text-xs text-gray-500 mb-4">Registrar / Vice Chancellor Secretariat, RKDF University Ranchi</p>
                    <div class="space-y-2 text-xs text-gray-600 border-t border-gray-100 pt-4">
                        <p><strong>Address:</strong> Vice Chancellor's Secretariat, RKDF University Campus, Pundag, Ranchi, Jharkhand - 834004</p>
                        <p><strong>Email:</strong> <a href="mailto:registrar@rkdfuniversity.org" class="text-primary-900 underline font-medium">registrar@rkdfuniversity.org</a></p>
                        <p><strong>Official Portal:</strong> <a href="<?php echo $base_url; ?>index.php" class="text-primary-900 underline font-medium">www.rkdfuniversity.org</a></p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Application Guidelines -->
        <div id="procedure" class="bg-white rounded-2xl p-6 sm:p-10 shadow-sm border border-gray-100 mb-16">
            <h3 class="text-xl font-serif text-slate-900 font-normal mb-4">How to Submit an RTI Application</h3>
            <ol class="space-y-3 text-xs sm:text-sm text-gray-600 list-decimal list-inside leading-relaxed">
                <li>Draft a clear, concise application in Hindi or English addressed to the <strong>Public Information Officer (PIO), RKDF University Ranchi</strong>.</li>
                <li>Clearly specify the nature of public information sought, along with relevant reference numbers and academic session details where applicable.</li>
                <li>Attach the prescribed statutory RTI application fee in the form of a Demand Draft / Indian Postal Order (IPO) or cash receipt payable to <em>RKDF University Ranchi</em>.</li>
                <li>Submit the completed application in person or via registered post to the university administrative address.</li>
                <li>If the applicant does not receive a response within 30 days or is dissatisfied with the decision of the PIO, an appeal may be filed before the <strong>First Appellate Authority</strong> within 30 days.</li>
            </ol>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
