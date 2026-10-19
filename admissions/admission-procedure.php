<?php
/**
 * RKDF University — Admission Procedure 2026-27
 * Content Source: https://rkdfuniversity.org/academics/admission-procedure/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Admission Procedure 2026-27 — ' . SITE_NAME;
$page_meta_desc = 'Official Admission Procedure 2026-27 for RKDF University Ranchi. Documents required, application process, and guidelines.';

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
      <a href="<?= url('admissions/') ?>" class="hover:text-white transition">Admissions</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Admission Procedure</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Admission procedure <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">2026–27</em>.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      A transparent, student-centric application process for diploma, undergraduate, postgraduate, and doctoral degrees.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('file-text', 'w-3.5 h-3.5 text-gold shrink-0') ?> Online &amp; Offline Modes
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('clipboard-check', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Verified Checklist
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Merit Scholarships Available
      </span>
    </div>
</section>

<!-- Sub-Navigation Tabs for Admissions -->
<?php require_once dirname(__DIR__) . '/includes/admissions_nav_tabs.php'; ?>

<!-- Content Area -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-5xl px-4 sm:px-6 rkdf-proc-container">

    <!-- ==================== BOX 1: ADMISSION PROCESS & GUIDELINES ==================== -->
    <div class="rkdf-proc-box">
      <div class="rkdf-proc-box-header">
        <span class="rkdf-section-tag">
          <?= lucide_icon('compass') ?>
          <span>Guidelines &amp; Modes</span>
        </span>
        <h2 class="rkdf-proc-box-title">Admission Process 2026–27</h2>
        <p class="rkdf-proc-box-desc">
          To apply for admission at RKDF University, Ranchi, candidates can choose between our seamless 100% online portal or walk in directly to our university counseling desk. Please ensure fulfillment of minimum eligibility criteria before submission.
        </p>
      </div>

      <!-- Dual Mode Selection Grid -->
      <div class="rkdf-mode-grid">
        <!-- Mode 1: Online -->
        <div class="rkdf-mode-card">
          <div>
            <span class="rkdf-mode-badge">
              <?= lucide_icon('globe', 'w-3 h-3 text-gold') ?>
              <span>Mode A · 100% Online</span>
            </span>
            <h3 class="rkdf-mode-title">
              Online Admission Portal
            </h3>
            <p class="rkdf-mode-desc">
              Submit your digital application, upload scanned certificates, and pay nominal application fees securely via UPI, Net Banking, or Debit/Credit Card.
            </p>
            <ul class="rkdf-mode-features">
              <li><?= lucide_icon('check-circle-2') ?> <span>Instant OTP authentication &amp; digital receipt</span></li>
              <li><?= lucide_icon('check-circle-2') ?> <span>Auto-save application draft feature</span></li>
              <li><?= lucide_icon('check-circle-2') ?> <span>Direct merit and fee waiver evaluation</span></li>
            </ul>
          </div>
          <a href="<?= url('admissions/apply.php') ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-700 hover:text-amber-900 uppercase tracking-wider transition">
            <span>Apply Online Now</span>
            <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>

        <!-- Mode 2: Offline / Campus -->
        <div class="rkdf-mode-card">
          <div>
            <span class="rkdf-mode-badge" style="background:rgba(7,19,34,0.06);color:#071322;border-color:rgba(7,19,34,0.15);">
              <?= lucide_icon('map-pin', 'w-3 h-3 text-brand') ?>
              <span>Mode B · On-Campus Desk</span>
            </span>
            <h3 class="rkdf-mode-title">
              In-Person Walk-In Counseling
            </h3>
            <p class="rkdf-mode-desc">
              Visit our dedicated Admissions Office at Ranchi Campus for one-on-one academic counseling, campus facility tour, and spot verification.
            </p>
            <ul class="rkdf-mode-features">
              <li><?= lucide_icon('check-circle-2') ?> <span>Direct interaction with department deans</span></li>
              <li><?= lucide_icon('check-circle-2') ?> <span>Spot physical certificate verification</span></li>
              <li><?= lucide_icon('check-circle-2') ?> <span>Immediate hostel and transport booking</span></li>
            </ul>
          </div>
          <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-800 hover:text-brand uppercase tracking-wider transition">
            <span>Campus Location &amp; Timing</span>
            <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
          </a>
        </div>
      </div>

      <!-- Statutory Callout Note -->
      <div class="rkdf-notice-callout">
        <div class="rkdf-notice-icon">
          <?= lucide_icon('shield-alert') ?>
        </div>
        <div>
          <div class="rkdf-notice-title">Important Verification Notice:</div>
          <p class="rkdf-notice-text">
            Photocopy and Original certificates are both mandatory at the time of admission. Photocopies of all required certificates must be submitted along with the application form, and originals must be produced for physical verification.
          </p>
        </div>
      </div>
    </div>

    <!-- ==================== BOX 2: REQUIRED DOCUMENTS CHECKLIST ==================== -->
    <div class="rkdf-proc-box">
      <div class="rkdf-proc-box-header">
        <span class="rkdf-section-tag">
          <?= lucide_icon('clipboard-check') ?>
          <span>Mandatory Checklist</span>
        </span>
        <h2 class="rkdf-proc-box-title">Required Documents at Time of Admission</h2>
        <p class="rkdf-proc-box-desc">
          Ensure all official transcripts and identification records are kept ready in original and self-attested copies to ensure rapid, hassle-free seat confirmation.
        </p>
      </div>

      <?php
      $doc_checklist = [
        [
          'scope' => 'Secondary / Matriculation',
          'set'   => 'Original + 3 Copies',
          'icon'  => 'award',
          'title' => '10th Marksheet & Passing Certificate',
          'req'   => 'Issued by CBSE, ICSE, JAC, or state boards as official proof of Date of Birth (DOB) and basic eligibility.'
        ],
        [
          'scope' => 'Higher Secondary (10+2)',
          'set'   => 'Original + 3 Copies',
          'icon'  => 'graduation-cap',
          'title' => '12th / Intermediate Marksheet',
          'req'   => 'Qualifying marksheet and admit card validating subject requirements for undergraduate enrollment.'
        ],
        [
          'scope' => 'Undergraduate Degree',
          'set'   => 'Original + 3 Copies',
          'icon'  => 'book-open',
          'title' => 'Graduation Marksheets (For PG Programs)',
          'req'   => 'All semester/annual marksheets along with degree certificate or provisional certificate for postgraduate admissions.'
        ],
        [
          'scope' => 'Institution Clearance',
          'set'   => 'Original Mandatory',
          'icon'  => 'arrow-right-left',
          'title' => 'Transfer (TC) & Migration Certificate',
          'req'   => 'Original College/School Leaving Certificate and Migration Certificate from the institution/board last attended.'
        ],
        [
          'scope' => 'Quota & Concession',
          'set'   => 'Original + 3 Copies',
          'icon'  => 'shield-check',
          'title' => 'Caste / Category Certificate',
          'req'   => 'Valid SC/ST/OBC/EWS certificate issued by competent revenue authority (CO/SDO) for reserved category benefits.'
        ],
        [
          'scope' => 'Identity & Photographs',
          'set'   => '6 Photos + 1 ID Proof',
          'icon'  => 'camera',
          'title' => 'Passport Size Photographs & Govt ID',
          'req'   => '6 recent colored passport-size photographs against white background and self-attested Aadhaar / Voter ID copy.'
        ],
      ];
      ?>

      <!-- 6 Elevated Document Cards Grid -->
      <div class="rkdf-doc-grid">
        <?php foreach ($doc_checklist as $doc): ?>
          <div class="rkdf-doc-card">
            <div class="rkdf-doc-iconbox">
              <?= lucide_icon($doc['icon']) ?>
            </div>
            <div class="rkdf-doc-content">
              <div class="rkdf-doc-header-row">
                <span class="rkdf-doc-scope"><?= e($doc['scope']) ?></span>
                <span class="rkdf-doc-set-badge"><?= e($doc['set']) ?></span>
              </div>
              <h4 class="rkdf-doc-title"><?= e($doc['title']) ?></h4>
              <p class="rkdf-doc-req"><?= e($doc['req']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Assistance & Direct Application Footer -->
      <div class="rkdf-doc-footer">
        <div class="rkdf-doc-footer-info">
          <strong>Need assistance with your admission documentation?</strong>
          <span>Contact Admission Helpline: <a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>" class="text-amber-700 font-bold hover:underline"><?= SITE_PHONE ?></a> · <a href="mailto:<?= SITE_EMAIL ?>" class="hover:underline"><?= SITE_EMAIL ?></a></span>
        </div>
        <a href="<?= url('admissions/apply.php') ?>" class="rkdf-doc-footer-cta">
          <span>Fill Online Application</span>
          <?= lucide_icon('arrow-right') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
