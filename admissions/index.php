<?php
/**
 * RKDF University — Admissions Page
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Admissions 2026–27 — ' . SITE_NAME;
$page_meta_desc = 'Apply to RKDF University Ranchi for 2026–27. Explore scholarships, fee structure, eligibility, and application process.';

$form_success = false;
$form_error   = '';
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['apply_submit'])) {
    $name    = trim(filter_input(INPUT_POST, 'name',    FILTER_SANITIZE_SPECIAL_CHARS));
    $email   = filter_input(INPUT_POST, 'email',   FILTER_VALIDATE_EMAIL);
    $phone   = trim(filter_input(INPUT_POST, 'phone',   FILTER_SANITIZE_SPECIAL_CHARS));
    $program = trim(filter_input(INPUT_POST, 'program', FILTER_SANITIZE_SPECIAL_CHARS));
    if ($name && $email && $phone && $program) {
        $form_success = true;
    } else {
        $form_error = 'Please fill in all required fields with valid information.';
    }
}

require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ==================== ELEVATED INNER PAGE HERO ==================== -->
<section class="inner-page-hero">
  <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand/30 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 w-80 h-80 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-6 text-center">
    <!-- Breadcrumb Badge -->
    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 backdrop-blur px-4 py-1.5 text-xs tracking-wider uppercase text-gold font-medium mb-6">
      <a href="<?= url('/') ?>" class="hover:text-white transition">Home</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Admissions 2026–27</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Your journey begins <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">here</em>.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Applications close on July 31, 2026. Merit and means-based scholarships available for all eligible candidates.
    </p>

    <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
      <a href="#apply-form" class="inline-flex items-center justify-center gap-2 rounded-full bg-gold text-[#071322] font-bold text-sm px-6 py-3 h-12 shadow-lg shadow-gold/25 hover:bg-white hover:!text-[#071322] transition-all transform hover:-translate-y-0.5 group">
        <span class="text-[#071322] group-hover:!text-[#071322]">Apply Online</span>
        <?= lucide_icon('arrow-right', 'w-4 h-4 text-[#071322] group-hover:!text-[#071322]') ?>
      </a>
      <a href="#process" class="inline-flex items-center justify-center gap-2 rounded-full border border-white/25 bg-white/10 backdrop-blur text-white font-semibold text-sm px-6 py-3 h-12 hover:bg-white/20 hover:border-white/40 hover:text-white transition-all transform hover:-translate-y-0.5">
        <span>Admission Process</span>
      </a>
    </div>
</section>

<!-- Sub-Navigation Tabs for Admissions -->
<?php require_once dirname(__DIR__) . '/includes/admissions_nav_tabs.php'; ?>

<!-- ==================== ADMISSION STEPS (HOW TO APPLY) ==================== -->
<section class="py-20 md:py-24 bg-surface border-b border-border relative overflow-hidden" id="process">
  <!-- Subtle decorative ambient glows -->
  <div class="absolute -top-32 right-1/4 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-32 left-1/4 w-96 h-96 bg-brand/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="mx-auto max-w-7xl px-4 sm:px-6 relative z-10">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="rkdf-section-tag">
        <?= lucide_icon('compass') ?>
        <span>Admission Roadmap 2026–27</span>
      </span>
      <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-slate-900 leading-tight">
        Simple. Transparent. <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 via-amber-500 to-[#071322]">100% Online.</span>
      </h2>
      <p class="mt-4 text-slate-600 text-sm sm:text-base leading-relaxed">
        Follow our seamless 6-stage admissions pipeline to secure your seat at RKDF University Ranchi with verified merit assessment and scholarship evaluation.
      </p>
    </div>

    <!-- 6-Stage Process Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">
      <?php
      $steps = [
        [
          'step'        => '01',
          'icon'        => 'user-check',
          'tag'         => 'Stage 1 · Portal Signup',
          'title'       => 'Register Online',
          'desc'        => 'Create your verified applicant account on our official admissions portal using an active email ID and mobile number.',
          'hint'        => 'Instant OTP Verification',
          'action_text' => 'Start Registration',
          'action_url'  => 'admissions/apply.php',
        ],
        [
          'step'        => '02',
          'icon'        => 'file-text',
          'tag'         => 'Stage 2 · Course Choice',
          'title'       => 'Fill Application',
          'desc'        => 'Complete the digital application form with your academic records, program selection, personal info, and parent contacts.',
          'hint'        => 'Auto-Save Enabled',
          'action_text' => 'Apply Online',
          'action_url'  => 'admissions/apply.php',
        ],
        [
          'step'        => '03',
          'icon'        => 'file-search',
          'tag'         => 'Stage 3 · Verification',
          'title'       => 'Upload Documents',
          'desc'        => 'Upload clear digital scans of marksheets (10th/12th/Graduation), government ID, passport photograph, and category certificate.',
          'hint'        => 'PDF & JPG Accepted',
          'action_text' => 'Document Checklist',
          'action_url'  => 'admissions/admission-procedure.php',
        ],
        [
          'step'        => '04',
          'icon'        => 'receipt',
          'tag'         => 'Stage 4 · Registration',
          'title'       => 'Pay Application Fee',
          'desc'        => 'Pay the nominal one-time application fee securely via integrated UPI, Net Banking, Debit Card, or Credit Card.',
          'hint'        => 'Instant Digital Receipt',
          'action_text' => 'Fee Structure',
          'action_url'  => 'documents/RKDF-FEE-STRUCTURE.pdf',
        ],
        [
          'step'        => '05',
          'icon'        => 'award',
          'tag'         => 'Stage 5 · Merit Assessment',
          'title'       => 'Entrance & Merit List',
          'desc'        => 'Appear for the university entrance test (where applicable) or get evaluated on your qualifying exam scores and scholarship aid.',
          'hint'        => 'Up to 100% Scholarships',
          'action_text' => 'Scholarship Info',
          'action_url'  => 'admissions/scholarship.php',
        ],
        [
          'step'        => '06',
          'icon'        => 'graduation-cap',
          'tag'         => 'Stage 6 · Final Enrollment',
          'title'       => 'Admission Confirmed',
          'desc'        => 'Receive your provisional admission offer letter, submit the first semester tuition fee installment, and collect your student ID kit.',
          'hint'        => 'Official Roll Issued',
          'action_text' => 'Admission Desk',
          'action_url'  => 'admissions/admission-procedure.php',
        ],
      ];
      foreach ($steps as $s): ?>
        <div class="rkdf-step-card group">
          <!-- Top Subtle Accent Gradient -->
          <div class="rkdf-step-accent"></div>

          <div>
            <!-- Top Row: Big Serif Number & Icon Box -->
            <div class="rkdf-step-top">
              <span class="rkdf-step-num"><?= $s['step'] ?></span>
              <div class="rkdf-step-icon">
                <?= lucide_icon($s['icon']) ?>
              </div>
            </div>

            <!-- Stage Tag -->
            <span class="rkdf-step-tag">
              <?= e($s['tag']) ?>
            </span>

            <!-- Step Title -->
            <h3 class="rkdf-step-title">
              <?= e($s['title']) ?>
            </h3>

            <!-- Step Description -->
            <p class="rkdf-step-desc">
              <?= e($s['desc']) ?>
            </p>
          </div>

          <!-- Step Footer -->
          <div class="rkdf-step-footer">
            <span class="rkdf-step-hint">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 inline-block shrink-0"></span>
              <span><?= e($s['hint']) ?></span>
            </span>
            <a href="<?= url($s['action_url']) ?>" class="rkdf-step-link">
              <span><?= e($s['action_text']) ?></span>
              <?= lucide_icon('arrow-right') ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom Quick Help Bar -->
    <div class="rkdf-help-banner">
      <div class="rkdf-help-banner-left">
        <div class="rkdf-help-banner-icon">
          <?= lucide_icon('phone-call') ?>
        </div>
        <div>
          <h4 class="rkdf-help-banner-title">Need help with the application process?</h4>
          <p class="rkdf-help-banner-desc">Our dedicated Admissions Counseling Desk is available Mon–Sat (9 AM – 6 PM) to assist you.</p>
        </div>
      </div>
      <div class="rkdf-help-banner-actions">
        <a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>" class="rkdf-help-banner-phone">
          <?= lucide_icon('phone') ?>
          <span><?= SITE_PHONE ?></span>
        </a>
        <a href="<?= url('admissions/apply.php') ?>" class="rkdf-help-banner-apply">
          <span>Apply Online 2026–27</span>
          <?= lucide_icon('arrow-right') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- ==================== SCHOLARSHIPS & FINANCIAL AID ==================== -->
<section class="py-20 md:py-24 bg-white border-b border-border relative overflow-hidden" id="scholarships">
  <!-- Subtle ambient decorative glow -->
  <div class="absolute -top-32 left-1/3 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="mx-auto max-w-7xl px-4 sm:px-6 relative z-10">
    <!-- Section Header with Direct Action -->
    <div class="rkdf-scholarship-header-bar">
      <div>
        <div class="rkdf-scholarship-eyebrow">
          <?= lucide_icon('award') ?>
          <span>Financial Aid</span>
        </div>
        <h2 class="rkdf-scholarship-main-title">
          Scholarships &amp; Fee Waivers <span>2026–27</span>
        </h2>
        <p class="rkdf-scholarship-subtitle">
          Over ₹2.5 Crore awarded annually in institutional tuition waivers, state welfare stipends, and athletic achievement grants.
        </p>
      </div>
      <a href="<?= url('admissions/scholarship.php') ?>" class="rkdf-scholarship-header-cta">
        <span>Explore All Schemes</span>
        <?= lucide_icon('arrow-right') ?>
      </a>
    </div>

    <!-- 4 Scholarship Schemes Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $scholarships = [
        [
          'name'     => 'Merit Scholarship',
          'amount'   => 'Up to 100% Waiver',
          'badge'    => 'Merit Excellence',
          'icon'     => 'trophy',
          'criteria' => 'Top 1% in qualifying exam / 95%+ in Class XII',
          'desc'     => 'Awarded to top performers securing top percentile in 10+2 board examinations or national/state entrance tests.',
          'perk'     => '100% Tuition Fee Coverage',
          'status'   => 'Direct Merit Quota',
          'url'      => 'admissions/scholarship.php#merit',
        ],
        [
          'name'     => 'Means-Based Grant',
          'amount'   => 'Up to 60% Waiver',
          'badge'    => 'Need-Based Aid',
          'icon'     => 'heart-handshake',
          'criteria' => 'Family annual income below ₹5 Lakh',
          'desc'     => 'Dedicated financial concession for deserving candidates from economically weaker sections.',
          'perk'     => 'Income Proof Certificate',
          'status'   => 'Need-Based Concession',
          'url'      => 'admissions/scholarship.php#means',
        ],
        [
          'name'     => 'Sports Excellence',
          'amount'   => 'Up to 50% Waiver',
          'badge'    => 'Athletic Talent',
          'icon'     => 'dumbbell',
          'criteria' => 'National / State level sports representation',
          'desc'     => 'State & National level medalists, Khelo India participants, and recognized sports achievers across disciplines.',
          'perk'     => 'Attendance Flex & Training Aid',
          'status'   => 'Trial Assessment',
          'url'      => 'admissions/scholarship.php#sports',
        ],
        [
          'name'     => 'Special Category Grant',
          'amount'   => 'Govt Norms & DBT',
          'badge'    => 'Govt Welfare',
          'icon'     => 'landmark',
          'criteria' => 'Valid SC/ST/OBC category certificate',
          'desc'     => 'Comprehensive tuition reimbursement facilitated through Central DBT and Jharkhand E-Kalyan official portal.',
          'perk'     => 'E-Kalyan Facilitation Desk',
          'status'   => 'Post-Matric Subsidy',
          'url'      => 'admissions/scholarship.php#special',
        ],
      ];
      foreach ($scholarships as $sc): ?>
        <div class="rkdf-scholarship-card group">
          <!-- Top Accent Line -->
          <div class="rkdf-scholarship-accent"></div>

          <div>
            <!-- Top Header: Badge & Icon Box -->
            <div class="rkdf-scholarship-header">
              <span class="rkdf-scholarship-badge">
                <?= e($sc['badge']) ?>
              </span>
              <div class="rkdf-scholarship-icon">
                <?= lucide_icon($sc['icon']) ?>
              </div>
            </div>

            <!-- Amount & Title -->
            <div class="rkdf-scholarship-amount">
              <?= e($sc['amount']) ?>
            </div>
            <h3 class="rkdf-scholarship-title">
              <?= e($sc['name']) ?>
            </h3>

            <!-- Eligibility Benchmark Criteria -->
            <div class="rkdf-scholarship-criteria">
              <?= lucide_icon('sparkles') ?>
              <span><?= e($sc['criteria']) ?></span>
            </div>

            <!-- Description -->
            <p class="rkdf-scholarship-desc">
              <?= e($sc['desc']) ?>
            </p>

            <!-- Perk Pill -->
            <div class="rkdf-scholarship-perk">
              <?= lucide_icon('check-circle-2') ?>
              <span><?= e($sc['perk']) ?></span>
            </div>
          </div>

          <!-- Card Footer -->
          <div class="rkdf-scholarship-footer">
            <span class="rkdf-scholarship-status">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 inline-block shrink-0"></span>
              <span><?= e($sc['status']) ?></span>
            </span>
            <a href="<?= url($sc['url']) ?>" class="rkdf-scholarship-link">
              <span>Guidelines</span>
              <?= lucide_icon('arrow-right') ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Statutory Quota Callout Strip -->
    <div class="mt-10 p-5 rounded-2xl bg-amber-500/10 border border-amber-500/25 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
      <div class="flex items-start gap-3">
        <div class="w-9 h-9 rounded-xl bg-amber-500 text-white flex items-center justify-center shrink-0 mt-0.5">
          <?= lucide_icon('shield-check', 'w-5 h-5 text-white') ?>
        </div>
        <div>
          <strong class="text-xs sm:text-sm text-slate-900 font-bold block">कल्याणकारी शुल्क छूट एवं ई-कल्याण छात्रवृत्ति सुविधा</strong>
          <span class="text-xs text-slate-700 leading-relaxed block mt-0.5">
            अनुसूचित जाति (SC), अनुसूचित जनजाति (ST), अन्य पिछड़ा वर्ग (OBC) एवं अल्पसंख्यक कोटे के अन्तर्गत छात्र-छात्राओं के प्रवेश में नियमानुसार विशेष शुल्क छूट प्रदान की जाती है।
          </span>
        </div>
      </div>
      <a href="<?= url('admissions/scholarship.php') ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-800 hover:text-amber-950 uppercase tracking-wider shrink-0 underline decoration-amber-500 decoration-1 underline-offset-4">
        <span>Detailed Guidelines</span>
        <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
      </a>
    </div>

  </div>
</section>

<!-- ==================== OFFICIAL ADMISSION DOWNLOADS ==================== -->
<section class="py-20 bg-slate-50 border-y border-border" id="downloads">
  <div class="mx-auto max-w-7xl px-6">
    <div class="rkdf-section-header">
      <div>
        <span class="rkdf-section-tag">
          <?= lucide_icon('file-text', 'w-3.5 h-3.5') ?> Statutory &amp; Academic Docs
        </span>
        <h3 class="rkdf-section-title">Official Prospectus &amp; Admission Downloads</h3>
        <p class="rkdf-section-desc">Download authentic university prospectuses, verified program fee breakdowns, and offline enrollment application forms.</p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1: Prospectus -->
      <div class="prog-spec-card">
        <div class="prog-spec-header">
          <div>
            <span class="prog-spec-badge">
              <?= lucide_icon('book-open', 'w-3 h-3') ?>
              <span>Official Brochure • PDF</span>
            </span>
            <h4 class="prog-spec-title">University Prospectus 2026–27</h4>
          </div>
          <div class="prog-spec-iconbox">
            <?= lucide_icon('file-text', 'w-6 h-6') ?>
          </div>
        </div>
        <div class="prog-spec-body">
          <p class="prog-spec-desc">Comprehensive guide detailing academic programs, infrastructure, research laboratories, faculty credentials, and campus life.</p>
          <ul class="prog-spec-feature-list">
            <li class="prog-spec-feature-item">
              <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
              <span>Complete Course Directory &amp; Eligibility</span>
            </li>
            <li class="prog-spec-feature-item">
              <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
              <span>Campus Facilities &amp; Research Centers</span>
            </li>
          </ul>
          <a href="<?= url('documents/RKDF-PROSPECTUS.pdf') ?>" target="_blank" class="prog-spec-btn">
            <?= lucide_icon('download', 'w-4 h-4') ?>
            <span>Download Prospectus (PDF)</span>
          </a>
        </div>
      </div>

      <!-- Card 2: Fee Structure -->
      <div class="prog-spec-card">
        <div class="prog-spec-header">
          <div>
            <span class="prog-spec-badge">
              <?= lucide_icon('coins', 'w-3 h-3') ?>
              <span>Fee Policy • PDF</span>
            </span>
            <h4 class="prog-spec-title">Academic Fee Structure</h4>
          </div>
          <div class="prog-spec-iconbox">
            <?= lucide_icon('receipt', 'w-6 h-6') ?>
          </div>
        </div>
        <div class="prog-spec-body">
          <p class="prog-spec-desc">Transparent program-wise tuition schedules, examination fee details, hostel room charges, and bus transit tariffs.</p>
          <ul class="prog-spec-feature-list">
            <li class="prog-spec-feature-item">
              <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
              <span>Semester-Wise Tuition Breakdowns</span>
            </li>
            <li class="prog-spec-feature-item">
              <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
              <span>Installment &amp; Scholarship Provisions</span>
            </li>
          </ul>
          <a href="<?= url('documents/RKDF-FEE-STRUCTURE.pdf') ?>" target="_blank" class="prog-spec-btn">
            <?= lucide_icon('download', 'w-4 h-4') ?>
            <span>Download Fee Schedule (PDF)</span>
          </a>
        </div>
      </div>

      <!-- Card 3: Offline Registration Form -->
      <div class="prog-spec-card">
        <div class="prog-spec-header">
          <div>
            <span class="prog-spec-badge">
              <?= lucide_icon('clipboard', 'w-3 h-3') ?>
              <span>Application Form • PDF</span>
            </span>
            <h4 class="prog-spec-title">University Registration Form</h4>
          </div>
          <div class="prog-spec-iconbox">
            <?= lucide_icon('file-check', 'w-6 h-6') ?>
          </div>
        </div>
        <div class="prog-spec-body">
          <p class="prog-spec-desc">Printable offline registration application for walk-in admissions, document submission, and counter enrollment at campus.</p>
          <ul class="prog-spec-feature-list">
            <li class="prog-spec-feature-item">
              <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
              <span>Official Verification Proforma</span>
            </li>
            <li class="prog-spec-feature-item">
              <?= lucide_icon('check', 'w-3.5 h-3.5') ?>
              <span>Checklist of Mandatory Enclosures</span>
            </li>
          </ul>
          <a href="<?= url('documents/University-Registration-Form.pdf') ?>" target="_blank" class="prog-spec-btn">
            <?= lucide_icon('download', 'w-4 h-4') ?>
            <span>Download Admission Form (PDF)</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Application Form Section -->
<section class="py-24 bg-gradient-to-b from-surface via-slate-50/50 to-surface border-t border-border relative overflow-hidden" id="apply-form">
  <!-- Ambient Soft Accents -->
  <div class="absolute top-1/4 -left-20 w-80 h-80 bg-gold/5 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-1/4 -right-20 w-80 h-80 bg-brand/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative mx-auto max-w-3xl px-6">
    <!-- Header with Generous Spacing -->
    <div class="text-center" style="margin-bottom: 3.5rem;">
      <div class="inline-flex items-center gap-2 rounded-full border border-gold/30 bg-gold/10 px-4 py-1.5 text-xs font-semibold tracking-[0.2em] uppercase text-gold" style="margin-bottom: 1.25rem;">
        <?= lucide_icon('sparkles', 'w-3.5 h-3.5 text-gold') ?>
        <span>Admissions 2026–27</span>
      </div>
      <h2 class="font-serif text-4xl sm:text-5xl md:text-6xl font-normal text-slate-900 leading-tight" style="margin-top: 0.5rem; margin-bottom: 1.25rem;">
        Start your <em class="italic-serif text-gold underline decoration-gold/50 decoration-2 underline-offset-8">application</em>
      </h2>
      <p class="text-slate-600 text-sm sm:text-base max-w-xl mx-auto leading-relaxed" style="margin-top: 1.25rem;">
        Fill in your details below and our senior admissions counseling team will get in touch within 48 hours.
      </p>
    </div>

    <!-- Main Form Card -->
    <div class="rkdf-form-card">
      <?php if ($form_success): ?>
        <div class="rounded-2xl bg-emerald-50 border border-emerald-200 p-8 text-center space-y-3">
          <div class="w-14 h-14 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center mx-auto shadow-sm">
            <?= lucide_icon('check-circle-2', 'w-8 h-8') ?>
          </div>
          <h3 class="font-serif text-2xl sm:text-3xl text-emerald-900 font-normal">Application Received!</h3>
          <p class="text-sm text-emerald-800 max-w-md mx-auto leading-relaxed">
            Thank you, <strong class="font-semibold"><?= e($name) ?></strong>. Our dedicated admissions counselor will reach out to you shortly at <span class="font-semibold text-emerald-950"><?= e($phone) ?></span> or <span class="font-semibold text-emerald-950"><?= e($email) ?></span>.
          </p>
          <div class="pt-4">
            <a href="admissions.php#apply-form" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-emerald-700 text-white text-xs font-bold uppercase tracking-wider hover:bg-emerald-800 transition shadow">
              <?= lucide_icon('plus-circle', 'w-3.5 h-3.5') ?>
              <span>Submit Another Application</span>
            </a>
          </div>
        </div>
      <?php else: ?>
        <?php if ($form_error): ?>
          <div class="mb-6 rounded-2xl bg-red-50 border border-red-200 p-4 text-red-700 text-sm flex items-center gap-3">
            <?= lucide_icon('alert-circle', 'w-5 h-5 shrink-0 text-red-600') ?>
            <span><?= e($form_error) ?></span>
          </div>
        <?php endif; ?>

        <form method="POST" action="admissions.php#apply-form" class="space-y-6">
          <div class="grid sm:grid-cols-2 gap-5">
            <!-- Full Name -->
            <div>
              <label class="rkdf-form-label">
                Full Name <span class="req">*</span>
              </label>
              <div class="rkdf-input-wrap">
                <span class="rkdf-input-icon">
                  <?= lucide_icon('user') ?>
                </span>
                <input 
                  type="text" 
                  name="name" 
                  required 
                  placeholder="e.g. John Doe" 
                  class="rkdf-form-input" 
                  value="<?= e($_POST['name'] ?? '') ?>" 
                />
              </div>
            </div>

            <!-- Email Address -->
            <div>
              <label class="rkdf-form-label">
                Email Address <span class="req">*</span>
              </label>
              <div class="rkdf-input-wrap">
                <span class="rkdf-input-icon">
                  <?= lucide_icon('mail') ?>
                </span>
                <input 
                  type="email" 
                  name="email" 
                  required 
                  placeholder="e.g. john@example.com" 
                  class="rkdf-form-input" 
                  value="<?= e($_POST['email'] ?? '') ?>" 
                />
              </div>
            </div>
          </div>

          <div class="grid sm:grid-cols-2 gap-5">
            <!-- Mobile Number -->
            <div>
              <label class="rkdf-form-label">
                Mobile Number <span class="req">*</span>
              </label>
              <div class="rkdf-input-wrap">
                <span class="rkdf-input-icon">
                  <?= lucide_icon('phone') ?>
                </span>
                <input 
                  type="tel" 
                  name="phone" 
                  required 
                  placeholder="+91 98765 43210" 
                  class="rkdf-form-input" 
                  value="<?= e($_POST['phone'] ?? '') ?>" 
                />
              </div>
            </div>

            <!-- Program of Interest -->
            <div>
              <label class="rkdf-form-label">
                Program of Interest <span class="req">*</span>
              </label>
              <div class="rkdf-input-wrap">
                <span class="rkdf-input-icon">
                  <?= lucide_icon('graduation-cap') ?>
                </span>
                <select 
                  name="program" 
                  required 
                  class="rkdf-form-select"
                >
                  <option value="">Select a Program</option>
                  <option value="B.Tech Computer Science" <?= (($_POST['program'] ?? '') === 'B.Tech Computer Science') ? 'selected' : '' ?>>B.Tech Computer Science &amp; Engineering</option>
                  <option value="B.Tech Civil / Mechanical" <?= (($_POST['program'] ?? '') === 'B.Tech Civil / Mechanical') ? 'selected' : '' ?>>B.Tech Civil / Mechanical / Electrical</option>
                  <option value="Pharmacy (D.Pharm / B.Pharm)" <?= (($_POST['program'] ?? '') === 'Pharmacy (D.Pharm / B.Pharm)') ? 'selected' : '' ?>>Faculty of Pharmacy (D.Pharm / B.Pharm)</option>
                  <option value="Law (BA LL.B / BBA LL.B / LL.M)" <?= (($_POST['program'] ?? '') === 'Law (BA LL.B / BBA LL.B / LL.M)') ? 'selected' : '' ?>>Faculty of Law (BA LL.B / BBA LL.B / LL.M)</option>
                  <option value="Management (BBA / MBA)" <?= (($_POST['program'] ?? '') === 'Management (BBA / MBA)') ? 'selected' : '' ?>>Management Studies (BBA / MBA)</option>
                  <option value="Sciences (B.Sc / M.Sc / Biotech)" <?= (($_POST['program'] ?? '') === 'Sciences (B.Sc / M.Sc / Biotech)') ? 'selected' : '' ?>>Basic &amp; Applied Sciences (B.Sc / M.Sc / Biotech)</option>
                  <option value="Arts & Humanities (BA / MA)" <?= (($_POST['program'] ?? '') === 'Arts & Humanities (BA / MA)') ? 'selected' : '' ?>>Arts &amp; Humanities (BA / MA)</option>
                  <option value="Education (B.Ed / M.Ed)" <?= (($_POST['program'] ?? '') === 'Education (B.Ed / M.Ed)') ? 'selected' : '' ?>>Faculty of Education (B.Ed / M.Ed)</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Questions / Notes -->
          <div>
            <label class="rkdf-form-label">
              Questions / Notes <span class="text-slate-400 font-normal lowercase">(optional)</span>
            </label>
            <div class="rkdf-input-wrap rkdf-textarea-wrap">
              <span class="rkdf-input-icon">
                <?= lucide_icon('message-square') ?>
              </span>
              <textarea 
                name="message" 
                rows="3" 
                placeholder="Tell us about your educational background or any specific questions..." 
                class="rkdf-form-textarea"
              ><?= e($_POST['message'] ?? '') ?></textarea>
            </div>
          </div>

          <!-- Submit Button -->
          <button 
            type="submit" 
            name="apply_submit" 
            class="rkdf-form-btn"
          >
            <span>Submit Application</span>
            <?= lucide_icon('arrow-right') ?>
          </button>

          <!-- Trust Badges Footer -->
          <div class="rkdf-trust-bar">
            <span class="rkdf-trust-item">
              <?= lucide_icon('shield-check', 'w-4 h-4 text-emerald-600') ?>
              <span>100% Privacy Protected</span>
            </span>
            <span class="rkdf-trust-item">
              <?= lucide_icon('clock', 'w-4 h-4 text-gold') ?>
              <span>48-Hour Callback</span>
            </span>
            <span class="rkdf-trust-item">
              <?= lucide_icon('award', 'w-4 h-4 text-brand') ?>
              <span>Free Career Counseling</span>
            </span>
          </div>
        </form>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
