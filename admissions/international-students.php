<?php
/**
 * RKDF University — Admission Procedure for International Students
 * Content Source: https://rkdfuniversity.org/admissions/international-students/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'International Students Admission Procedure | ' . SITE_NAME;
$page_meta_desc = 'Step-by-step admission guidelines for foreign students at RKDF University Ranchi: Eligibility, AIU Equivalence certificate, provisional admission letter, student visa & FRRO registration.';

$international_steps = [
    [
        'step'        => '01',
        'title'       => 'Online Application & Document Submission',
        'badge'       => 'Initial Assessment',
        'icon'        => 'file-text',
        'desc'        => 'Submit attested copies of secondary/higher secondary school transcripts, degree certificates, valid passport biometric page, and Statement of Purpose (SOP) to admission@rkdfuniversity.org.',
        'action_note' => 'Email to: admission@rkdfuniversity.org',
        'timeline'    => '1–2 Working Days'
    ],
    [
        'step'        => '02',
        'title'       => 'AIU Equivalence Evaluation',
        'badge'       => 'Academic Validation',
        'icon'        => 'award',
        'desc'        => 'The Association of Indian Universities (AIU) evaluates foreign qualifications. Our International Student Cell assists candidates in obtaining the mandatory official AIU Equivalence Certificate.',
        'action_note' => 'AIU Equivalence Portal Assistance',
        'timeline'    => '3–5 Working Days'
    ],
    [
        'step'        => '03',
        'title'       => 'Provisional Admission Letter (PAL)',
        'badge'       => 'Visa Requisition',
        'icon'        => 'file-check',
        'desc'        => 'Upon academic verification and initial tuition fee deposit, the university issues an official Provisional Admission Letter required by the Indian Embassy/Consulate for Student Visa processing.',
        'action_note' => 'Official University PAL Document',
        'timeline'    => '24–48 Hours Post Deposit'
    ],
    [
        'step'        => '04',
        'title'       => 'Student Visa & Travel to India',
        'badge'       => 'Consular Processing',
        'icon'        => 'globe',
        'desc'        => 'Apply for a multiple-entry Student Visa endorsed for RKDF University Ranchi with the Indian Diplomatic Mission in your home country. Share flight details for airport reception in Ranchi.',
        'action_note' => 'Airport Reception & Campus Escort',
        'timeline'    => 'As per Embassy Timelines'
    ],
    [
        'step'        => '05',
        'title'       => 'FRRO Registration & Campus Check-in',
        'badge'       => 'Campus Orientation',
        'icon'        => 'shield-check',
        'desc'        => 'Within 14 days of arrival in India, our International Desk coordinates mandatory e-FRRO registration, medical checkup, biometric hostel room allotment, and academic induction.',
        'action_note' => 'Single-Window FRRO Clearance',
        'timeline'    => 'Within 14 Days of Arrival'
    ],
];

$document_categories = [
    [
        'category'    => 'Academic Transcripts & Equivalence',
        'badge'       => 'Dossier Section 01',
        'icon'        => 'graduation-cap',
        'desc'        => 'Original and officially attested educational records required for degree eligibility validation and AIU equivalence confirmation.',
        'items'       => [
            [
                'title'    => 'Secondary & Higher Secondary Marksheets',
                'desc'     => 'Original & attested copies of High School (10th) & Senior Secondary (12th) level graduation certificates.',
                'doc_type' => 'Original + 3 Attested'
            ],
            [
                'title'    => 'Bachelor’s Degree & Consolidated Transcripts',
                'desc'     => 'Official degree completion certificate and semester-wise transcripts (mandatory for PG and Ph.D. applicants).',
                'doc_type' => 'Degree + Marksheets'
            ],
            [
                'title'    => 'AIU Equivalence Certificate',
                'desc'     => 'Association of Indian Universities certification confirming foreign qualification equivalence (facilitated by university).',
                'doc_type' => 'AIU Validation'
            ],
            [
                'title'    => 'Home Country Ministry NOC',
                'desc'     => 'No Objection Certificate / sponsorship recommendation letter from the Ministry of Education of home country.',
                'doc_type' => 'Ministry Endorsed'
            ]
        ],
        'stats'       => [
            ['lbl' => 'Attestation', 'val' => 'Ministry / Notary Endorsed'],
            ['lbl' => 'Language', 'val' => 'English Translated Copies']
        ],
        'btn_label'   => 'Submit Academic Dossier'
    ],
    [
        'category'    => 'Immigration, Health & Financial Solvency',
        'badge'       => 'Dossier Section 02',
        'icon'        => 'shield-check',
        'desc'        => 'Statutory legal identity, consular verification, health clearances, and financial solvency proof for Visa & FRRO compliance.',
        'items'       => [
            [
                'title'    => 'Valid International Passport',
                'desc'     => 'Clear biometric identity pages and international travel history with at least 18 months of remaining validity.',
                'doc_type' => '18+ Months Validity'
            ],
            [
                'title'    => 'Medical Fitness & Vaccination Records',
                'desc'     => 'Authorized government medical fitness certificate including Yellow Fever / WHO prescribed immunizations where applicable.',
                'doc_type' => 'Medical Clearance'
            ],
            [
                'title'    => 'Financial Solvency & Sponsorship Letter',
                'desc'     => 'Official bank balance statements or authorized institutional sponsor guarantee covering living and tuition expenses.',
                'doc_type' => 'Bank Certified Proof'
            ],
            [
                'title'    => 'Recent Passport-Size Photographs',
                'desc'     => '5 recent color photographs (3.5cm x 4.5cm) with plain white background, sharp focus, and neutral expression.',
                'doc_type' => '5 Physical Copies'
            ]
        ],
        'stats'       => [
            ['lbl' => 'Submission', 'val' => 'Prior to PAL Issuance'],
            ['lbl' => 'Verification', 'val' => 'Single-Window ISC Desk']
        ],
        'btn_label'   => 'Submit Consular Dossier'
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
      <span class="text-white/90">International Students</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      International Student <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Admission Guide</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      A transparent 5-step admission procedure for foreign nationals, NRI candidates, and PIO scholars seeking globally recognized degrees at RKDF University Ranchi.
    </p>

    <!-- Key Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('compass') ?> 5-Step Streamlined Admission Flow
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> AIU Equivalence Guidance Desk
      </span>
      <span class="hero-pill">
        <?= lucide_icon('shield-check') ?> e-FRRO &amp; Student Visa Facilitation
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
            <?= lucide_icon('globe', 'w-4 h-4 text-gold') ?> International Student Cell (ISC)
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Seamless Onboarding for Global Scholars
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed font-normal">
            The International Student Cell (ISC) at RKDF University Ranchi serves as a dedicated single-window support mechanism for all foreign applicants. From initial transcript evaluation to visa clearance and hostel check-in, our officers provide hands-on guidance at every stage.
          </p>
          <p class="text-white/75 text-xs sm:text-sm leading-relaxed font-normal">
            Degrees awarded by RKDF University Ranchi are recognized by the University Grants Commission (UGC) and the Association of Indian Universities (AIU), ensuring smooth career progression worldwide.
          </p>

          <div class="spotlight-pill-list pt-2">
            <span class="spotlight-pill">
              <?= lucide_icon('check-circle') ?>
              <span>Single-Window Visa Clearance</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('award') ?>
              <span>English Proficiency Support</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('briefcase') ?>
              <span>Airport Reception &amp; Escort</span>
            </span>
          </div>
        </div>

        <!-- Metric Seal Box -->
        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> ISC Desk
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('globe', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Admission Cell</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Email inquiries: admission@rkdfuniversity.org with subject "International Admission 2026-27".
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3 text-xs">
            <div>
              <div class="font-serif text-xl text-gold">5 Steps</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">Clear Procedure</div>
            </div>
            <div>
              <div class="font-serif text-xl text-gold">100%</div>
              <div class="text-[10px] uppercase tracking-wider text-white/70">FRRO Support</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== 5-STEP ROADMAP ==================== -->
    <div class="section-block" id="steps">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">Step-by-Step Flow</span>
          <h3 class="rkdf-section-title">5 Steps to Join RKDF University</h3>
          <p class="rkdf-section-desc">Follow this structured roadmap for timely admission and visa issuance.</p>
        </div>
        <a href="mailto:admission@rkdfuniversity.org" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gold text-brand font-bold text-xs uppercase tracking-wider hover:bg-brand hover:text-white transition shadow-sm shrink-0">
          <span>Email International Desk</span>
          <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($international_steps as $step): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('compass', 'w-3 h-3') ?>
                  <span>Step <?= e($step['step']) ?> • <?= e($step['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($step['title']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($step['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($step['desc']) ?></p>
              </div>

              <!-- Stats & Info -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Key Action</span>
                    <span class="prog-spec-stat-val text-brand text-xs"><?= e($step['action_note']) ?></span>
                  </div>
                  <div class="prog-spec-stat-box">
                    <span class="prog-spec-stat-lbl">Timeline</span>
                    <span class="prog-spec-stat-val text-emerald-700"><?= e($step['timeline']) ?></span>
                  </div>
                </div>

                <a href="mailto:admission@rkdfuniversity.org" class="prog-spec-btn">
                  <span>Start Step <?= e($step['step']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ==================== REQUIRED DOCUMENTS CHECKLIST ==================== -->
    <div class="section-block" id="mandatory-documents">
      <div class="rkdf-section-header">
        <div>
          <span class="rkdf-section-tag">
            <?= lucide_icon('file-text', 'w-3.5 h-3.5') ?> Verification Portfolio
          </span>
          <h3 class="rkdf-section-title">Mandatory Documents for Verification</h3>
          <p class="rkdf-section-desc">Keep scanned original copies ready for academic eligibility validation, visa issuance, and FRRO registration.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($document_categories as $dossier): ?>
          <div class="prog-spec-card">
            <!-- Dark Navy Header Banner -->
            <div class="prog-spec-header">
              <div>
                <span class="prog-spec-badge">
                  <?= lucide_icon('layers', 'w-3 h-3') ?>
                  <span><?= e($dossier['badge']) ?></span>
                </span>
                <h4 class="prog-spec-title"><?= e($dossier['category']) ?></h4>
              </div>
              <div class="prog-spec-iconbox">
                <?= lucide_icon($dossier['icon'], 'w-6 h-6') ?>
              </div>
            </div>

            <!-- Body Content -->
            <div class="prog-spec-body">
              <div class="space-y-4">
                <p class="prog-spec-desc"><?= e($dossier['desc']) ?></p>

                <!-- Document Items Feature List -->
                <ul class="prog-spec-feature-list space-y-3.5">
                  <?php foreach ($dossier['items'] as $item): ?>
                    <li class="prog-spec-feature-item" style="align-items: flex-start !important; gap: 0.75rem !important;">
                      <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 shrink-0 mt-0.5">
                        <?= lucide_icon('check', 'w-3 h-3 text-emerald-700') ?>
                      </span>
                      <div class="min-w-0 flex-1 text-left">
                        <div class="flex items-center justify-between gap-2 flex-wrap">
                          <span class="font-semibold text-slate-900 text-xs sm:text-sm"><?= e($item['title']) ?></span>
                          <span class="text-[10px] font-bold text-emerald-800 bg-emerald-50 border border-emerald-200/80 px-2 py-0.5 rounded-md uppercase tracking-wider shrink-0">
                            <?= e($item['doc_type']) ?>
                          </span>
                        </div>
                        <p class="text-xs text-slate-500 mt-0.5 leading-relaxed"><?= e($item['desc']) ?></p>
                      </div>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <!-- Stats & CTA -->
              <div class="space-y-4">
                <div class="prog-spec-stats-grid">
                  <?php foreach ($dossier['stats'] as $st): ?>
                    <div class="prog-spec-stat-box">
                      <span class="prog-spec-stat-lbl"><?= e($st['lbl']) ?></span>
                      <span class="prog-spec-stat-val text-brand"><?= e($st['val']) ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <a href="mailto:admission@rkdfuniversity.org" class="prog-spec-btn">
                  <span><?= e($dossier['btn_label']) ?></span>
                  <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>
                </a>
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
          <span>Direct International Support</span>
        </div>
        <h3 class="rkdf-admission-title">
          Ready to Start Your Application?
        </h3>
        <p class="rkdf-admission-desc">
          Email your documents directly to our International Admissions Director at <a href="mailto:admission@rkdfuniversity.org" class="underline text-gold font-medium">admission@rkdfuniversity.org</a>.
        </p>
      </div>
      <div class="rkdf-admission-actions">
        <a href="mailto:admission@rkdfuniversity.org" class="rkdf-admission-primary-btn">
          <span>Email Application</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
        <a href="<?= url('admissions/study-in-india.php') ?>" class="rkdf-admission-secondary-btn">
          <span>Study in India Portal</span>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
