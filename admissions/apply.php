<?php
$selected_course = isset($_GET['course']) ? trim($_GET['course']) : '';
$action_mode     = isset($_GET['action']) ? trim($_GET['action']) : 'apply';
$cand_name       = isset($_GET['name']) ? trim($_GET['name']) : '';
$cand_phone      = isset($_GET['phone']) ? trim($_GET['phone']) : '';
$cand_email      = isset($_GET['email']) ? trim($_GET['email']) : '';
$cand_city       = isset($_GET['city']) ? trim($_GET['city']) : '';

$page_title     = ($selected_course ? "Apply for {$selected_course} — " : "Online Admission Application 2026–27 — ") . "RKDF University Ranchi";
$page_meta_desc = "Submit your direct admission application or enquiry for RKDF University Ranchi. UGC Recognized, NAAC Accredited, NEP 2020 aligned with up to 100% scholarships.";

require_once __DIR__ . '/../includes/header.php';
?>

<!-- ==================== HERO SECTION ==================== -->
<section class="inner-page-hero">
  <div class="mx-auto max-w-4xl relative z-10 text-center">
    <div class="hero-pill mb-4">
      <?= lucide_icon('sparkles', 'w-4 h-4 text-gold') ?>
      <span>Admissions Open Session 2026–27</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold text-white mb-4">
      <?= $selected_course ? 'Apply for ' . e($selected_course) : 'Online Admission Application' ?>
    </h1>
    <p class="text-sm md:text-base text-white/80 max-w-2xl mx-auto leading-relaxed">
      Take the first step towards an extraordinary career. Complete the form below for fast-track counseling, fee scholarship assessment, and provisional admission confirmation.
    </p>
  </div>
</section>

<!-- Sub-Navigation Tabs for Admissions -->
<?php require_once dirname(__DIR__) . '/includes/admissions_nav_tabs.php'; ?>

<!-- ==================== APPLICATION FORM CONTAINER ==================== -->
<section class="rkdf-portal-section bg-surface">
  <div class="mx-auto max-w-4xl px-4 sm:px-6">
    <div class="rkdf-portal-card">
      
      <!-- Top Banner Strip -->
      <div class="rkdf-portal-topbar">
        <div class="rkdf-portal-top-left">
          <div class="rkdf-portal-top-icon">
            <?= lucide_icon('graduation-cap') ?>
          </div>
          <div>
            <span class="rkdf-portal-eyebrow">Official Admission Portal</span>
            <strong class="rkdf-portal-top-title">Session 2026–27 Direct Merit Quota</strong>
          </div>
        </div>
        <div class="rkdf-portal-accreditation">
          <?= lucide_icon('shield-check') ?>
          <span>UGC · AICTE · BCI · PCI Approved</span>
        </div>
      </div>

      <div class="rkdf-portal-body">
        
        <?php if (isset($_GET['submitted'])): ?>
          <!-- Success State -->
          <div class="text-center py-10 space-y-4">
            <div class="w-16 h-16 rounded-full bg-emerald-500/15 text-emerald-600 flex items-center justify-center mx-auto mb-4" style="width:64px;height:64px;border-radius:9999px;background:rgba(16,185,129,0.15);color:#059669;margin:0 auto 1rem auto;display:flex;align-items:center;justify-content:center;">
              <?= lucide_icon('check-circle', 'w-8 h-8') ?>
            </div>
            <h2 class="text-2xl font-bold text-slate-900 font-serif" style="font-size:1.75rem;font-weight:700;color:#0f1b2d;">Application Successfully Submitted!</h2>
            <p class="text-sm text-slate-600 max-w-md mx-auto" style="font-size:0.875rem;color:#64748b;max-width:480px;margin:0 auto;line-height:1.6;">
              Thank you, <strong style="color:#0f1b2d;"><?= e($cand_name ?: 'Candidate') ?></strong>. Our Admission Counseling Desk will review your application for <strong style="color:#e58525;"><?= e($selected_course ?: 'your chosen program') ?></strong> and contact you within 24 hours.
            </p>
            <div class="pt-6 flex flex-wrap justify-center gap-4" style="display:flex;align-items:center;justify-content:center;gap:1rem;margin-top:1.5rem;">
              <a href="<?= url('courses/') ?>" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-xs transition" style="padding:0.75rem 1.4rem;border-radius:12px;background:#f1f5f9;color:#0f1b2d;font-weight:700;font-size:0.75rem;text-transform:uppercase;letter-spacing:0.05em;text-decoration:none;">
                Browse More Courses
              </a>
              <a href="https://wa.me/917091168777?text=<?= urlencode('Hello, I have submitted an admission inquiry for ' . ($selected_course ?: 'RKDF University')) ?>" target="_blank" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs transition flex items-center gap-2" style="padding:0.75rem 1.4rem;border-radius:12px;background:#059669;color:#ffffff;font-weight:700;font-size:0.75rem;text-transform:uppercase;letter-spacing:0.05em;text-decoration:none;display:inline-flex;align-items:center;gap:0.5rem;">
                <?= lucide_icon('message-circle', 'w-4 h-4') ?>
                <span>Chat on WhatsApp</span>
              </a>
            </div>
          </div>

        <?php else: ?>

          <!-- Application Form -->
          <form action="<?= url('admissions/apply.php') ?>" method="GET">
            <input type="hidden" name="submitted" value="1" />
            
            <div class="rkdf-form-grid">
              
              <!-- Program Selection -->
              <div class="rkdf-form-full">
                <label for="course_field" class="rkdf-label">
                  Target Program / Course <span class="req">*</span>
                </label>
                <input
                  id="course_field"
                  type="text"
                  name="course"
                  required
                  value="<?= e($selected_course) ?>"
                  placeholder="e.g. B.Tech CSE, MBA, MCA, B.Sc Nursing, B.Pharm, LLB"
                  class="rkdf-input"
                />

                <!-- Popular course quick suggestions -->
                <div class="rkdf-course-pills">
                  <span class="rkdf-course-pill-label">Popular:</span>
                  <button type="button" class="rkdf-course-pill" onclick="selectCourse('B.Tech CSE')">B.Tech CSE</button>
                  <button type="button" class="rkdf-course-pill" onclick="selectCourse('MBA')">MBA</button>
                  <button type="button" class="rkdf-course-pill" onclick="selectCourse('MCA')">MCA</button>
                  <button type="button" class="rkdf-course-pill" onclick="selectCourse('BCA')">BCA</button>
                  <button type="button" class="rkdf-course-pill" onclick="selectCourse('B.Sc Nursing')">B.Sc Nursing</button>
                  <button type="button" class="rkdf-course-pill" onclick="selectCourse('B.Pharm')">B.Pharm</button>
                  <button type="button" class="rkdf-course-pill" onclick="selectCourse('LLB')">LLB</button>
                  <button type="button" class="rkdf-course-pill" onclick="selectCourse('B.Com (Hons)')">B.Com</button>
                </div>
              </div>

              <!-- Candidate Name -->
              <div>
                <label for="name_field" class="rkdf-label">
                  Candidate Full Name <span class="req">*</span>
                </label>
                <input
                  id="name_field"
                  type="text"
                  name="name"
                  required
                  value="<?= e($cand_name) ?>"
                  placeholder="Enter full name"
                  class="rkdf-input"
                />
              </div>

              <!-- Mobile Number -->
              <div>
                <label for="phone_field" class="rkdf-label">
                  Mobile / WhatsApp Number <span class="req">*</span>
                </label>
                <input
                  id="phone_field"
                  type="tel"
                  name="phone"
                  required
                  value="<?= e($cand_phone) ?>"
                  placeholder="+91 9876543210"
                  class="rkdf-input"
                />
              </div>

              <!-- Email Address -->
              <div>
                <label for="email_field" class="rkdf-label">
                  Email Address
                </label>
                <input
                  id="email_field"
                  type="email"
                  name="email"
                  value="<?= e($cand_email) ?>"
                  placeholder="name@example.com"
                  class="rkdf-input"
                />
              </div>

              <!-- City / District -->
              <div>
                <label for="city_field" class="rkdf-label">
                  City / State
                </label>
                <input
                  id="city_field"
                  type="text"
                  name="city"
                  value="<?= e($cand_city) ?>"
                  placeholder="e.g. Ranchi, Jamshedpur, Patna"
                  class="rkdf-input"
                />
              </div>

            </div>

            <!-- Scholarship Checkbox Note -->
            <div class="rkdf-portal-note">
              <div class="rkdf-portal-note-icon">
                <?= lucide_icon('award') ?>
              </div>
              <p class="rkdf-portal-note-text">
                <strong>Scholarship Eligibility:</strong> State / National board toppers receive up to <strong>100% Chancellor Tuition Fee Waiver</strong>. E-Kalyan state government welfare scholarship is applicable for SC/ST/OBC students of Jharkhand.
              </p>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="rkdf-portal-submit-btn">
              <?= lucide_icon('send') ?>
              <span>Submit Application / Request Counseling</span>
            </button>

            <!-- Trust Highlights -->
            <div class="rkdf-portal-trust-row">
              <div class="rkdf-portal-trust-item">
                <?= lucide_icon('clock') ?>
                <span>Counseling Response Within 24h</span>
              </div>
              <div class="rkdf-portal-trust-item">
                <?= lucide_icon('shield-check') ?>
                <span>100% Verified University Portal</span>
              </div>
              <div class="rkdf-portal-trust-item">
                <?= lucide_icon('badge-check') ?>
                <span>Merit &amp; E-Kalyan Assistance</span>
              </div>
            </div>

          </form>

          <script>
            function selectCourse(name) {
              const input = document.getElementById('course_field');
              if (input) {
                input.value = name;
                input.focus();
              }
            }
          </script>

        <?php endif; ?>

      </div>

      <!-- Footer Helpline Strip -->
      <div class="rkdf-portal-footer">
        <div class="rkdf-portal-footer-phone">
          <?= lucide_icon('phone-call') ?>
          <span>Need Direct Help? Call Helpline: <strong><a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>"><?= SITE_PHONE ?></a></strong></span>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../sections/cta.php'; ?>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
