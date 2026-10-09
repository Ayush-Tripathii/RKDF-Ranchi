<?php
$page_title = 'Diploma in Electrical & Electronics Engineering Admission, Fees, Eligibility — RKDF University Ranchi';
$page_meta_desc = 'Diploma in Electrical & Electronics Engineering at RKDF University Ranchi. Duration: 3 Years (6 Semesters), Eligibility: 10th / Matriculation passed with Science & Mathematics (Min 35% marks).. UGC Recognized with scholarships, modern labs, hostel, and 100% placement support.';
require_once __DIR__ . '/../includes/header.php';
?>

<!-- ==================== LUXURY COURSE DETAIL HERO ==================== -->
<section class="course-detail-hero">
  <div class="course-container">
    
    <!-- Breadcrumb Navigation -->
    <div class="course-breadcrumb">
      <a href="<?= url('/') ?>">
        <?= lucide_icon('home', 'w-3.5 h-3.5') ?>        <span>Home</span>
      </a>
      <span class="separator">/</span>
      <a href="<?= url('courses/') ?>">
        <span>Courses</span>
      </a>
      <span class="separator">/</span>
      <a href="<?= url('courses/under-graduate-programs.php') ?>">
        <span>Diploma</span>
      </a>
      <span class="separator">/</span>
      <span class="current">Diploma in Electrical &amp; Electronics Engineering</span>
    </div>

    <!-- Badges Strip (Strict Single Line, Uniform Baseline) -->
    <div class="course-hero-badge-strip">
      <span class="course-hero-badge school-badge">
        <?= lucide_icon('graduation-cap', 'w-3.5 h-3.5 text-gold') ?>        <span>Faculty of Engineering &amp; Technology</span>
      </span>
      <span class="course-hero-badge level-badge">
        <span>Diploma</span>
      </span>
      <span class="course-hero-badge level-badge">
        <?= lucide_icon('clock', 'w-3.5 h-3.5 text-gold') ?>        <span>3 Years (6 Semesters)</span>
      </span>
      <span class="course-hero-badge nep-badge">
        <?= lucide_icon('shield-check', 'w-3.5 h-3.5') ?>        <span>NEP 2020 Aligned</span>
      </span>
    </div>

    <!-- Title & Subtitle -->
    <h1 class="course-hero-title">Diploma in Electrical &amp; Electronics Engineering</h1>
    <p class="course-hero-lead">Industry-aligned curriculum with cutting-edge laboratories, distinguished faculty, and comprehensive career placement support.</p>

    <!-- Action Buttons -->
    <div class="course-hero-actions">
      <a href="#admission-enquiry" class="course-btn-primary">
        <?= lucide_icon('sparkles', 'w-4 h-4') ?>        <span>Apply Online 2026–27</span>
      </a>
      <a href="<?= url('documents/Diploma-EEE.pdf') ?>" target="_blank" class="course-btn-secondary">
        <?= lucide_icon('file-down', 'w-4 h-4 text-gold') ?>        <span>Download Syllabus (PDF)</span>
      </a>
      <a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>" class="course-btn-call">
        <?= lucide_icon('phone-call', 'w-4 h-4') ?>        <span>Helpline: <?= SITE_PHONE ?></span>
      </a>
    </div>

  </div>
</section>

<!-- ==================== MAIN CONTENT & SIDEBAR ==================== -->
<section class="py-12 md:py-16 bg-background">
  <div class="course-container">
    <div class="course-detail-layout">
      
      <!-- Left Main Content Area -->
      <div class="course-main-content">
        
        <!-- About Program Section -->
        <div id="about" class="course-section-card">
          <div class="course-section-header">
            <div class="course-section-icon">
              <?= lucide_icon('book-open-check', 'w-5 h-5') ?>            </div>
            <h2 class="course-section-title">About the Programme</h2>
          </div>
          <div class="prose prose-slate max-w-none text-sm leading-relaxed text-muted-foreground space-y-3">
            <p>Diploma in Electrical &amp;amp; Electronics Engineering at RKDF University Ranchi provides an advanced, industry-aligned curriculum combining strong theoretical foundations with intensive practical laboratories, live projects, and experienced faculty mentorship.Designed strictly adhering to the National Education Policy (NEP 2020) framework, the course emphasizes Choice Based Credit System (CBCS), interdisciplinary electives, research methodologies, skill enhancements, and mandatory corporate internships.</p>
            <p>The curriculum is designed under NEP 2020 framework incorporating Choice Based Credit System (CBCS), interdisciplinary electives, research projects, and industry internship modules.</p>
          </div>
        </div>

        <!-- Eligibility Criteria Section -->
        <div id="eligibility" class="course-section-card">
          <div class="course-section-header">
            <div class="course-section-icon">
              <?= lucide_icon('check-circle', 'w-5 h-5 text-emerald-500') ?>            </div>
            <h2 class="course-section-title">Eligibility &amp; Admission Criteria</h2>
          </div>
          <div class="space-y-3 text-sm text-muted-foreground">
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <strong class="text-foreground block mb-1">Academic Qualification:</strong>
              <span>10th / Matriculation passed with Science &amp; Mathematics (Min 35% marks).</span>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <strong class="text-foreground block mb-1">Entrance Examination &amp; Merit:</strong>
              <span>Direct admission based on qualifying merit. Students with valid CUET score will be given preference in merit. 5% relaxation for SC/ST/OBC categories.</span>
            </div>
          </div>
        </div>

        <!-- Scholarships Section -->
        <div id="scholarships" class="course-section-card">
          <div class="course-section-header">
            <div class="course-section-icon">
              <?= lucide_icon('award', 'w-5 h-5') ?>            </div>
            <h2 class="course-section-title">Scholarship Schemes Available</h2>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="course-scholarship-card p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <div class="w-8 h-8 rounded-lg bg-gold/15 text-gold flex items-center justify-center mb-3">
                <?= lucide_icon('award', 'w-4 h-4') ?>              </div>
              <strong class="text-foreground text-sm block mb-1">Chancellor Merit Aid</strong>
              <p class="text-xs text-muted-foreground">Up to 100% tuition waiver for State/Board toppers.</p>
            </div>
            <div class="course-scholarship-card p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <div class="w-8 h-8 rounded-lg bg-emerald-500/15 text-emerald-600 flex items-center justify-center mb-3">
                <?= lucide_icon('sparkles', 'w-4 h-4') ?>              </div>
              <strong class="text-foreground text-sm block mb-1">E-Kalyan Jharkhand</strong>
              <p class="text-xs text-muted-foreground">Full reimbursement scheme for SC/ST/OBC students of Jharkhand.</p>
            </div>
            <div class="course-scholarship-card p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <div class="w-8 h-8 rounded-lg bg-brand/10 text-brand flex items-center justify-center mb-3">
                <?= lucide_icon('heart', 'w-4 h-4') ?>              </div>
              <strong class="text-foreground text-sm block mb-1">Women &amp; Sports Quota</strong>
              <p class="text-xs text-muted-foreground">Special fee concessions for meritorious girl students and athletes.</p>
            </div>
          </div>
        </div>

        <!-- Advantages Section -->
        <div id="advantages" class="course-section-card">
          <div class="course-section-header">
            <div class="course-section-icon">
              <?= lucide_icon('trophy', 'w-5 h-5') ?>            </div>
            <h2 class="course-section-title">Why Study at RKDF University Ranchi?</h2>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-sm">
            <div class="flex items-center gap-2.5 p-3 rounded-xl bg-slate-50 dark:bg-slate-900/40 border border-border">
              <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500 shrink-0') ?>              <span>100% Placement &amp; Internship Assistance</span>
            </div>
            <div class="flex items-center gap-2.5 p-3 rounded-xl bg-slate-50 dark:bg-slate-900/40 border border-border">
              <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500 shrink-0') ?>              <span>Free Uniform Set &amp; Academic Bag Kit</span>
            </div>
            <div class="flex items-center gap-2.5 p-3 rounded-xl bg-slate-50 dark:bg-slate-900/40 border border-border">
              <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500 shrink-0') ?>              <span>1 Free Industry Skill Certification Course</span>
            </div>
            <div class="flex items-center gap-2.5 p-3 rounded-xl bg-slate-50 dark:bg-slate-900/40 border border-border">
              <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500 shrink-0') ?>              <span>Free Daily Bus Transport Across Ranchi City</span>
            </div>
            <div class="flex items-center gap-2.5 p-3 rounded-xl bg-slate-50 dark:bg-slate-900/40 border border-border">
              <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500 shrink-0') ?>              <span>0% Interest Education Loan Facilitation Desk</span>
            </div>
            <div class="flex items-center gap-2.5 p-3 rounded-xl bg-slate-50 dark:bg-slate-900/40 border border-border">
              <?= lucide_icon('check-circle-2', 'w-4 h-4 text-emerald-500 shrink-0') ?>              <span>Affordable Semester-wise Fee Installments</span>
            </div>
          </div>
        </div>

        <!-- Fee Structure Section -->
        <div id="fees" class="course-section-card">
          <div class="course-section-header">
            <div class="course-section-icon">
              <?= lucide_icon('receipt', 'w-5 h-5') ?>            </div>
            <h2 class="course-section-title">Detailed Fee Structure (2026–27)</h2>
          </div>
          <div class="overflow-x-auto">
            <table class="w-full text-left text-sm border-collapse">
              
      <thead>
        <tr>
          <th>Fee Component</th>
          <th>Amount / Frequency</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="fee-component">Tuition Fee</td>
          <td class="fee-amount">Rs. 18,000/- Per Semester</td>
        </tr>
        <tr>
          <td class="fee-component">Admission Fee (One-time, Non-refundable)</td>
          <td>Rs. 10,000/-</td>
        </tr>
        <tr>
          <td class="fee-component">Caution Deposit (Refundable)</td>
          <td>Rs. 5,000/-</td>
        </tr>
        <tr>
          <td class="fee-component">Hostel &amp; Mess Facility (Optional)</td>
          <td>Rs. 18,000/- Per Semester (Lodging Only)</td>
        </tr>
      </tbody>            </table>
          </div>
          <p class="text-xs text-muted-foreground mt-5 italic flex items-start gap-2.5">
            <?= lucide_icon('info', 'w-3.5 h-3.5 text-gold shrink-0 mt-0.5') ?>
            <span>*Note: SC/ST/OBC students eligible for E-Kalyan Government Scholarship will receive fee adjustments as per State Government welfare guidelines.</span>
          </p>
        </div>

        <!-- Syllabus Section -->
        <div id="syllabus" class="course-section-card">
          <div class="course-section-header">
            <div class="course-section-icon">
              <?= lucide_icon('file-text', 'w-5 h-5') ?>            </div>
            <h2 class="course-section-title">Program Structure &amp; Curriculum Modules</h2>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <div class="flex items-center gap-2 font-bold text-foreground text-sm mb-1.5">
                <?= lucide_icon('layers', 'w-4 h-4 text-gold') ?>                <span>Foundational Core Modules</span>
              </div>
              <p class="text-xs text-muted-foreground leading-relaxed">Fundamental domain principles, theoretical foundations, laboratory experiments, and core disciplinary skills.</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-border">
              <div class="flex items-center gap-2 font-bold text-foreground text-sm mb-1.5">
                <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>                <span>Advanced &amp; Industry Electives</span>
              </div>
              <p class="text-xs text-muted-foreground leading-relaxed">Specialized modern electives, industry software tools, capstone project work, and summer internship modules.</p>
            </div>
          </div>
          <div class="p-5 rounded-2xl bg-slate-50 dark:bg-slate-900/80 border border-border flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3.5">
              <div class="w-11 h-11 rounded-xl bg-brand text-gold flex items-center justify-center shrink-0 shadow-sm">
                <?= lucide_icon('file-down', 'w-5 h-5') ?>              </div>
              <div>
                <strong class="text-foreground text-sm block font-bold">Download Full Syllabus PDF</strong>
                <span class="text-xs text-muted-foreground">Complete semester-wise course outline and credit distribution</span>
              </div>
            </div>
            <a href="<?= url('documents/Diploma-EEE.pdf') ?>" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-brand text-white hover:bg-gold hover:text-slate-950 font-bold text-xs whitespace-nowrap transition duration-200 shadow-sm">
              <span>Download Syllabus (PDF)</span>
              <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>            </a>
          </div>
        </div>

        <!-- FAQ Section (Interactive Accordion) -->
        <div id="faq" class="course-section-card">
          <div class="course-section-header">
            <div class="course-section-icon">
              <?= lucide_icon('help-circle', 'w-5 h-5') ?>            </div>
            <h2 class="course-section-title">Frequently Asked Questions</h2>
          </div>
          <div class="course-faq-list">
            <div class="course-faq-card">
              <div class="course-faq-q">
                <span>What career opportunities are available after completing this program?</span>
                <span class="faq-accordion-toggle"><?= lucide_icon('chevron-down', 'w-4 h-4') ?></span>
              </div>
              <p class="course-faq-a">Graduates have diverse employment avenues in top corporate firms, government sector jobs, civil service exams (UPSC/JPSC), public sector undertakings, and advanced higher research programs worldwide.</p>
            </div>
            <div class="course-faq-card">
              <div class="course-faq-q">
                <span>How can I apply for direct admission for session 2026–27?</span>
                <span class="faq-accordion-toggle"><?= lucide_icon('chevron-down', 'w-4 h-4') ?></span>
              </div>
              <p class="course-faq-a">You can apply online via the admission application portal or visit the Admission Counseling Office at the Ranchi campus with your academic marksheets and ID proofs.</p>
            </div>
            <div class="course-faq-card">
              <div class="course-faq-q">
                <span>Is hostel accommodation and bus transport provided?</span>
                <span class="faq-accordion-toggle"><?= lucide_icon('chevron-down', 'w-4 h-4') ?></span>
              </div>
              <p class="course-faq-a">Yes, separate secure hostels for boys and girls with hygienic mess facilities are available on campus. Free bus transport operates daily connecting key pick-up points across Ranchi.</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Right Column (Sidebar with Fast Admission Form) -->
      <div class="course-sidebar-column">
        <div id="admission-enquiry" class="course-sidebar-form">
          <div class="flex items-center gap-3 mb-5">
            <div class="w-10 h-10 rounded-xl bg-gold/20 text-gold flex items-center justify-center font-bold shrink-0">
              <?= lucide_icon('send', 'w-5 h-5') ?>            </div>
            <div>
              <h3 class="font-bold text-white text-base leading-tight">Apply for Admission</h3>
              <p class="text-xs text-white/70">Session 2026–27 | Quick Counseling</p>
            </div>
          </div>

          <form action="<?= url('admissions/apply.php') ?>" method="POST" class="space-y-4">
            <input type="hidden" name="course_name" value="Diploma in Electrical &amp; Electronics Engineering" />
            <div>
              <label class="block text-xs font-semibold text-white/90 mb-1.5">Candidate Full Name *</label>
              <input type="text" name="full_name" required placeholder="e.g. Rahul Sharma" 
                     class="w-full px-3.5 py-2.5 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/50 text-xs focus:outline-none focus:border-gold focus:bg-white/15 transition" />
            </div>
            <div>
              <label class="block text-xs font-semibold text-white/90 mb-1.5">Mobile Number (WhatsApp) *</label>
              <input type="tel" name="phone" required placeholder="e.g. 9876543210" 
                     class="w-full px-3.5 py-2.5 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/50 text-xs focus:outline-none focus:border-gold focus:bg-white/15 transition" />
            </div>
            <div>
              <label class="block text-xs font-semibold text-white/90 mb-1.5">Email Address *</label>
              <input type="email" name="email" required placeholder="e.g. rahul@example.com" 
                     class="w-full px-3.5 py-2.5 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/50 text-xs focus:outline-none focus:border-gold focus:bg-white/15 transition" />
            </div>
            <div>
              <label class="block text-xs font-semibold text-white/90 mb-1.5">City / District *</label>
              <input type="text" name="city" required placeholder="e.g. Ranchi, Bokaro, Dhanbad" 
                     class="w-full px-3.5 py-2.5 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/50 text-xs focus:outline-none focus:border-gold focus:bg-white/15 transition" />
            </div>

            <button type="submit" class="w-full py-3 px-4 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-lg hover:shadow-xl transition duration-200 flex items-center justify-center gap-2 mt-2">
              <?= lucide_icon('sparkles', 'w-4 h-4') ?>              <span>Submit Application</span>
            </button>

            <p class="text-[10px] text-center text-white/60 mt-3">
              🔒 Your details are secure. Our admission team will contact you within 24 hours.
            </p>
          </form>
        </div>

        <!-- Admission Support Card -->
        <div class="course-sidebar-card">
          <div class="flex items-center gap-3 mb-3.5">
            <div class="w-9 h-9 rounded-xl bg-[#ebf3fe] border border-[#cce2ff] text-[#0b1e3b] flex items-center justify-center shrink-0">
              <?= lucide_icon('headphones', 'w-4 h-4') ?>            </div>
            <div>
              <h4 class="font-bold text-sm text-slate-900 leading-tight">Admission Counseling</h4>
              <p class="text-[11px] text-slate-500 font-medium">Have queries? Talk to our counselors</p>
            </div>
          </div>
          <div class="space-y-2 text-xs">
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-semibold transition border border-slate-200/70">
              <span class="flex items-center gap-2">
                <?= lucide_icon('phone', 'w-3.5 h-3.5 text-[#e58525]') ?>                <span><?= SITE_PHONE ?></span>
              </span>
              <span class="text-[10px] text-slate-500">Call Now</span>
            </a>
            <a href="mailto:<?= SITE_EMAIL ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-semibold transition border border-slate-200/70">
              <span class="flex items-center gap-2">
                <?= lucide_icon('mail', 'w-3.5 h-3.5 text-[#e58525]') ?>                <span class="truncate max-w-[180px]"><?= SITE_EMAIL ?></span>
              </span>
              <span class="text-[10px] text-slate-500">Email</span>
            </a>
          </div>
        </div>

        <!-- Quick Links / Relevant Pages Card -->
        <div class="course-sidebar-card">
          <div class="flex items-center gap-3 mb-3.5">
            <div class="w-9 h-9 rounded-xl bg-[#ebf3fe] border border-[#cce2ff] text-[#0b1e3b] flex items-center justify-center shrink-0">
              <?= lucide_icon('compass', 'w-4 h-4') ?>            </div>
            <div>
              <h4 class="font-bold text-sm text-slate-900 leading-tight">Quick Links</h4>
              <p class="text-[11px] text-slate-500 font-medium">Related &amp; Useful Pages</p>
            </div>
          </div>
          <div class="course-quick-links">
            <a href="<?= url('admissions/admission-procedure.php') ?>" class="quick-link-item">
              <span class="flex items-center gap-2">
                <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>                <span>Admission Procedure 2026–27</span>
              </span>
              <span class="quick-link-tag">Guide</span>
            </a>
            <a href="<?= url('admissions/scholarship.php') ?>" class="quick-link-item">
              <span class="flex items-center gap-2">
                <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>                <span>Scholarships &amp; E-Kalyan Aid</span>
              </span>
              <span class="quick-link-tag">Aid</span>
            </a>
            <a href="<?= url('courses/under-graduate-programs.php') ?>" class="quick-link-item">
              <span class="flex items-center gap-2">
                <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>                <span>Explore All UG Degree Programs</span>
              </span>
              <span class="quick-link-tag">UG</span>
            </a>
            <a href="<?= url('facilities/hostel.php') ?>" class="quick-link-item">
              <span class="flex items-center gap-2">
                <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>                <span>Hostel &amp; Mess Facilities</span>
              </span>
              <span class="quick-link-tag">Campus</span>
            </a>
            <a href="<?= url('facilities/transport.php') ?>" class="quick-link-item">
              <span class="flex items-center gap-2">
                <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>                <span>Free Daily Bus Routes (Ranchi)</span>
              </span>
              <span class="quick-link-tag">Bus</span>
            </a>
            <a href="<?= url('placements/') ?>" class="quick-link-item">
              <span class="flex items-center gap-2">
                <?= lucide_icon('arrow-right', 'w-3.5 h-3.5') ?>                <span>Placements &amp; Top Recruiters</span>
              </span>
              <span class="quick-link-tag">Career</span>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Accordion Interactive JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const faqCards = document.querySelectorAll('.course-faq-card');
  faqCards.forEach(card => {
    const q = card.querySelector('.course-faq-q');
    if (q) {
      q.addEventListener('click', () => {
        const isActive = card.classList.contains('active');
        faqCards.forEach(c => c.classList.remove('active'));
        if (!isActive) {
          card.classList.add('active');
        }
      });
    }
  });
});
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
