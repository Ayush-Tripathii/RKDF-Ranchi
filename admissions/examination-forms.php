<?php
/**
 * RKDF University — Examination Forms & Student Services
 * Content Source: https://rkdfuniversity.org/admissions/examination-forms/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Download Examination Forms & Services | COE Desk — ' . SITE_NAME;
$page_meta_desc = 'Download official RKDF University Ranchi Examination Forms: End-Semester Exam Form, Backlog / ATKT Form, Transcript Application, Re-evaluation & Convocation Registration Forms.';

$exam_forms = [
    [
        'title'       => 'Examination Rules & Regulations Handbook',
        'badge'       => 'Official Policy • PDF',
        'icon'        => 'file-text',
        'desc'        => 'Detailed evaluation norms, 10-point CGPA grading scales, minimum attendance criteria, internal assessment framework, and disciplinary examination conduct.',
        'format'      => 'PDF Document',
        'action_type' => 'pdf',
        'url'         => 'documents/Exam-Rules-Regulations.pdf',
        'btn_text'    => 'Download PDF'
    ],
    [
        'title'       => 'Re-Evaluation & Answer Script Verification Form',
        'badge'       => 'COE Redressal • PDF',
        'icon'        => 'refresh-cw',
        'desc'        => 'Formal application for re-totaling, re-evaluation, and certified photocopy inspection of end-semester theory answer scripts.',
        'format'      => 'PDF Form',
        'action_type' => 'pdf',
        'url'         => 'documents/Re-evaluation-Form.pdf',
        'btn_text'    => 'Download Form'
    ],
    [
        'title'       => 'Reappearing / Backlog (ATKT) Exam Form',
        'badge'       => 'Backlog Registration • PDF',
        'icon'        => 'clipboard',
        'desc'        => 'Application form for registering backlog papers, ex-student exam appearances, and ATKT supplementary examination slots.',
        'format'      => 'PDF Form',
        'action_type' => 'pdf',
        'url'         => 'documents/Examination-Form-reappearing-form.pdf',
        'btn_text'    => 'Download Form'
    ],
    [
        'title'       => 'Semester Registration Form',
        'badge'       => 'Academic Enrollment • PDF',
        'icon'        => 'check-circle-2',
        'desc'        => 'Mandatory semester registration form for branch elective selection, laboratory assignment allotment, and tuition clearance verification.',
        'format'      => 'PDF Document',
        'action_type' => 'pdf',
        'url'         => 'documents/Semester-Registration-Form.pdf',
        'btn_text'    => 'Download Form'
    ],
    [
        'title'       => 'University Clearance / No-Dues Certificate',
        'badge'       => 'Institutional Clearance • PDF',
        'icon'        => 'shield-check',
        'desc'        => 'Official No-Dues proforma covering department library, laboratory equipment, hostel inventory, and account clearance for passing out scholars.',
        'format'      => 'PDF Document',
        'action_type' => 'pdf',
        'url'         => 'documents/NO-DUES-FORM.pdf',
        'btn_text'    => 'Download Proforma'
    ],
    [
        'title'       => 'Requirements for Issuing Degree / Certificates',
        'badge'       => 'Statutory Guidelines • PDF',
        'icon'        => 'file-check',
        'desc'        => 'Document verification checklist and protocols for obtaining provisional certificates, migration certificates, and duplicate grade sheets.',
        'format'      => 'PDF Checklist',
        'action_type' => 'pdf',
        'url'         => 'documents/Requirememnts-for-Issuing-Certificates.pdf',
        'btn_text'    => 'Download Checklist'
    ],
    [
        'title'       => 'Convocation & Degree Registration Form',
        'badge'       => 'Graduation Ceremony • PDF',
        'icon'        => 'award',
        'desc'        => 'Official registration form for receiving degree certificates in person at the annual convocation or in absentia via registered post.',
        'format'      => 'PDF Document',
        'action_type' => 'pdf',
        'url'         => 'documents/Convocation-Form-RKDF-2025.pdf',
        'btn_text'    => 'Download Form'
    ],
    [
        'title'       => 'Academic Calendar 2026–27',
        'badge'       => 'Schedule • PDF',
        'icon'        => 'calendar',
        'desc'        => 'Comprehensive semester timelines, mid-term assessment slots, practical lab exams, end-semester theory exam schedules, and university holidays.',
        'format'      => 'PDF Document',
        'action_type' => 'pdf',
        'url'         => 'documents/Academic-Calendar-2026-27.pdf',
        'btn_text'    => 'Download Calendar'
    ]
];

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
      <span class="text-white/90">Examination Forms</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Examination Forms &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Student Services</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Official statutory forms, evaluation guidelines, re-checking protocols, transcript requisitions, and convocation registration procedures.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('file-text') ?> Office of the Controller of Examinations
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> DigiLocker &amp; NAD Integrated
      </span>
      <span class="hero-pill">
        <?= lucide_icon('download') ?> Verified Statutory PDF Downloads
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Admissions -->
<?php require_once dirname(__DIR__) . '/includes/admissions_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Framework Spotlight Card -->
    <div class="gov-spotlight-card section-block">
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-5">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('file-text', 'w-4 h-4 text-gold') ?> Examination Directorate
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Transparent, Digitized &amp; Timely Academic Assessment
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The Office of the Controller of Examinations (COE) ensures academic integrity, seamless examination administration, and swift transcript dispatch. All grades are calculated under UGC 10-point Choice-Based Credit System (CBCS) and NEP 2020 frameworks.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Students can digitally access marksheets, verify degrees via DigiLocker National Academic Depository (NAD), and submit examination applications via the university ERP portal.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>UGC 10-Point Grading System</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>DigiLocker NAD Digital Verification</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Online Transcript Processing</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> COE Desk
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('file-text', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Examination Cell</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Standardized examination rules, question paper moderation, centralized evaluation, and prompt grievance redressal.
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Digitized NAD Sync</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">UGC Aligned</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">CBCS Regulations</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== FORMS GRID ==================== -->
    <div class="section-block" id="forms-list">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Statutory Downloads</span>
          <h3 class="rkdf-section-title">Official Forms &amp; Regulations</h3>
          <p class="rkdf-section-desc">Download authentic PDF forms or navigate to the digital ERP portal for student examination services.</p>
        </div>
        <a href="<?= url('governance/controller-of-examination.php') ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Controller of Examinations Desk</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($exam_forms as $form): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('file-text', 'w-3 h-3') ?>
                  <span><?= e($form['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($form['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($form['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($form['desc']) ?></p>
              </div>

              <!-- Action Button -->
              <div class="space-y-4">
                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/80 flex items-center justify-between text-xs text-slate-600">
                  <span class="font-medium">Service Format:</span>
                  <span class="font-bold text-brand"><?= e($form['format']) ?></span>
                </div>

                <?php if ($form['action_type'] === 'external'): ?>
                  <a href="<?= e($form['url']) ?>" target="_blank" rel="noopener noreferrer" class="prog-spec-btn">
                    <span><?= e($form['btn_text']) ?></span>
                    <?= lucide_icon('arrow-up-right', 'w-3.5 h-3.5') ?>
                  </a>
                <?php else: ?>
                  <a href="<?= url($form['url']) ?>" target="_blank" rel="noopener" class="prog-spec-btn">
                    <span><?= e($form['btn_text']) ?></span>
                    <?= lucide_icon('download', 'w-3.5 h-3.5') ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Final CTA Banner -->
    <div class="rkdf-admission-banner section-block">
      <div class="rkdf-admission-content space-y-2">
        <div class="rkdf-admission-tag">
          <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
          <span>Student Examination Assistance</span>
        </div>
        <h3 class="rkdf-admission-title">
          Need Guidance Regarding Examination Forms?
        </h3>
        <p class="rkdf-admission-desc">
          Contact the COE Administrative Helpdesk directly for backlog fee assistance, transcript verification, and degree certificate issuance.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="<?= url('contact.php') ?>" class="rkdf-admission-primary-btn">
          <span>Contact COE Cell</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="https://erp.rkdfuniversity.org/" target="_blank" rel="noopener noreferrer" class="rkdf-admission-secondary-btn">
          <span>Access ERP Portal</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
