<?php
/**
 * RKDF University — RTI Corner
 * Content Source: https://rkdfuniversity.org/rti-corner/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'RTI Corner — ' . SITE_NAME;
$page_meta_desc = 'Right to Information (RTI) Cell, Public Information Officers and Appellate Authority of RKDF University Ranchi.';

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
      <a href="<?= url('about/') ?>" class="hover:text-white transition">About</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">RTI Corner</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Right to information <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">mandate</em> &amp; cell.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Statutory disclosure, designated Public Information Officers, and institutional accountability under the RTI Act, 2005.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('scale', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> RTI Act 2005
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> First Appellate Authority
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('clipboard-check', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Public Information Officer
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('search', 'w-3.5 h-3.5 text-gold shrink-0') ?> Transparent Governance
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/about_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Statutory Mandate Spotlight Banner -->
    <div class="gov-spotlight-card mb-16 section-block">
      <!-- Ambient Golden Glow -->
      <div class="absolute -right-20 -top-20 w-80 h-80 bg-gold/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-brand/40 rounded-full blur-3xl pointer-events-none"></div>

      <div class="gov-spotlight-grid">
        <div class="space-y-4">
          <div class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-gold font-bold">
            <?= lucide_icon('scale', 'w-4 h-4 text-gold') ?> Statutory Disclosure &amp; Transparency
          </div>
          <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-white leading-tight">
            Right to Information Act, 2005
          </h2>
          <p class="text-white/85 text-sm sm:text-base leading-relaxed max-w-2xl font-normal">
            The Right to Information Act, 2005 mandates timely response to citizen requests for university records and administrative information. RKDF University Ranchi has established a dedicated RTI Cell to promote transparency and accountability in its functioning.
          </p>

          <!-- Highlights -->
          <div class="spotlight-pill-list">
            <span class="spotlight-pill">
              <?= lucide_icon('scale') ?>
              <span>RTI Act 2005 Mandate</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('landmark') ?>
              <span>Nodal RTI Cell</span>
            </span>
            <span class="spotlight-pill">
              <?= lucide_icon('shield-check') ?>
              <span>First Appellate Authority</span>
            </span>
          </div>
        </div>

        <div class="gazette-seal-inner space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-[11px] uppercase tracking-widest text-gold font-bold flex items-center gap-1.5">
              <?= lucide_icon('landmark', 'w-3.5 h-3.5 text-gold') ?> RTI Secretariat
            </span>
            <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-gold/20 text-gold border border-gold/30">
              <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>
            </span>
          </div>
          <div>
            <div class="font-serif text-2xl text-white font-normal">Nodal RTI Cell</div>
            <p class="text-xs text-white/80 mt-1.5 leading-relaxed">
              Administrative Block, RKDF University Campus, Kathal More - Argora Road, Ranchi - 834004
            </p>
          </div>
          <div class="pt-3 border-t border-white/15 space-y-2">
            <a href="tel:+917091168777" class="text-xs text-gold flex items-center gap-2 font-semibold hover:text-white transition">
              <?= lucide_icon('phone', 'w-3.5 h-3.5 shrink-0') ?> <span>+91-7091168777</span>
            </a>
            <a href="mailto:info@rkdfuniversity.org" class="text-xs text-white/80 flex items-center gap-2 hover:text-white transition">
              <?= lucide_icon('mail', 'w-3.5 h-3.5 shrink-0') ?> <span>info@rkdfuniversity.org</span>
            </a>
          </div>
        </div>
      </div>
    </div>


    <!-- RTI Designated Officers Grid -->
    <div class="mb-16 section-block space-y-8">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Designated Authorities</div>
        <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">RTI Officers &amp; Appellate Authorities</h3>
      </div>

      <div class="recognition-grid">
        <!-- First Appellate Authority -->
        <div class="officer-card">
          <div>
            <div class="officer-header-wrap">
              <div class="officer-avatar-box">
                <?= lucide_icon('landmark', 'w-6 h-6') ?>
              </div>
              <div>
                <div class="text-[11px] font-bold uppercase tracking-widest text-gold">Appellate Authority</div>
                <h4 class="officer-title">First Appellate Authority</h4>
                <div class="text-sm font-semibold text-slate-900 mt-1">
                  The Registrar &bull; <span class="text-slate-500 font-normal">RKDF University, Ranchi</span>
                </div>
              </div>
            </div>

            <div class="officer-contact-panel">
              <div class="officer-contact-item">
                <?= lucide_icon('map-pin') ?>
                <span>RKDF Campus, Kathal More - Argora - Ranchi Rd, Pundag, Ranchi, Jharkhand - 834004</span>
              </div>
              <div class="officer-contact-item">
                <?= lucide_icon('mail') ?>
                <a href="mailto:info@rkdfuniversity.org" class="text-brand font-semibold hover:text-gold transition">info@rkdfuniversity.org</a>
              </div>
            </div>
          </div>

          <div class="officer-statutory-note">
            <?= lucide_icon('info', 'w-4 h-4 text-gold shrink-0') ?>
            <span>Appeals against PIO decision can be filed within 30 days of response.</span>
          </div>
        </div>

        <!-- Public Information Officer (PIO) -->
        <div class="officer-card">
          <div>
            <div class="officer-header-wrap">
              <div class="officer-avatar-box">
                <?= lucide_icon('user-check', 'w-6 h-6') ?>
              </div>
              <div>
                <div class="text-[11px] font-bold uppercase tracking-widest text-gold">Public Information</div>
                <h4 class="officer-title">Public Information Officer (PIO)</h4>
                <div class="text-sm font-semibold text-slate-900 mt-1">
                  Nodal RTI Officer &bull; <span class="text-slate-500 font-normal">RKDF University, Ranchi</span>
                </div>
              </div>
            </div>

            <div class="officer-contact-panel">
              <div class="officer-contact-item">
                <?= lucide_icon('map-pin') ?>
                <span>Administrative Block, RKDF University, Ranchi, Jharkhand - 834004</span>
              </div>
              <div class="officer-contact-item">
                <?= lucide_icon('phone') ?>
                <a href="tel:+917091168777" class="text-brand font-semibold hover:text-gold transition">+91-7091168777</a>
              </div>
            </div>
          </div>

          <div class="officer-statutory-note">
            <?= lucide_icon('info', 'w-4 h-4 text-gold shrink-0') ?>
            <span>Initial RTI requests must be addressed directly to the Public Information Officer.</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Application Procedure & Guidelines -->
    <div class="rti-steps-container space-y-8">
      <div>
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">How to Apply</div>
        <h3 class="font-serif text-3xl sm:text-4xl font-normal text-slate-900 mt-1">Procedure for Submitting RTI Application</h3>
      </div>

      <div class="rti-steps-grid">
        <!-- Step 1 -->
        <div class="rti-step-card">
          <div>
            <div class="flex items-center justify-between">
              <span class="rti-step-badge">Step 01</span>
              <div class="rti-step-icon">
                <?= lucide_icon('landmark', 'w-5 h-5') ?>
              </div>
            </div>
            <h4 class="rti-step-title">Application Address</h4>
            <p class="rti-step-desc">
              The application should be formally addressed to the <strong>Public Information Officer (PIO)</strong>, RKDF University, Ranchi.
            </p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="rti-step-card">
          <div>
            <div class="flex items-center justify-between">
              <span class="rti-step-badge">Step 02</span>
              <div class="rti-step-icon">
                <?= lucide_icon('file-text', 'w-5 h-5') ?>
              </div>
            </div>
            <h4 class="rti-step-title">Particulars of Info</h4>
            <p class="rti-step-desc">
              The application must specify clear particulars of information required, along with the applicant's complete postal address and contact details.
            </p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="rti-step-card">
          <div>
            <div class="flex items-center justify-between">
              <span class="rti-step-badge">Step 03</span>
              <div class="rti-step-icon">
                <?= lucide_icon('award', 'w-5 h-5') ?>
              </div>
            </div>
            <h4 class="rti-step-title">Application Fee</h4>
            <p class="rti-step-desc">
              Fee payable via Demand Draft, IPO, or Banker's Cheque favoring <em>RKDF University, Ranchi</em> payable at Ranchi, or cash at the university counter.
            </p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="rti-step-card">
          <div>
            <div class="flex items-center justify-between">
              <span class="rti-step-badge">Step 04</span>
              <div class="rti-step-icon">
                <?= lucide_icon('send', 'w-5 h-5') ?>
              </div>
            </div>
            <h4 class="rti-step-title">Mode of Submission</h4>
            <p class="rti-step-desc">
              Applications can be dispatched by Registered / Speed Post or submitted in person at the University RTI Cell during official working hours.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
