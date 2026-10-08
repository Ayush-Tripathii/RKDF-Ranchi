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

<!-- ==================== APPLICATION FORM CONTAINER ==================== -->
<section class="py-14 bg-slate-50 dark:bg-slate-950">
  <div class="mx-auto max-w-4xl px-4 sm:px-6">
    <div class="bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 shadow-xl overflow-hidden">
      
      <!-- Top Banner Strip -->
      <div class="bg-gradient-to-r from-brand via-brand/90 to-brand text-white px-6 py-4 flex flex-wrap items-center justify-between gap-3 border-b border-white/10">
        <div class="flex items-center gap-2.5">
          <div class="w-8 h-8 rounded-lg bg-gold/20 text-gold flex items-center justify-center font-bold">
            <?= lucide_icon('graduation-cap', 'w-4 h-4') ?>
          </div>
          <div>
            <span class="text-xs text-gold uppercase font-bold tracking-wider block">Official Application Portal</span>
            <strong class="text-sm text-white">Session 2026–27 Direct Merit Quota</strong>
          </div>
        </div>
        <div class="flex items-center gap-2 text-xs text-white/80">
          <?= lucide_icon('shield-check', 'w-4 h-4 text-emerald-400') ?>
          <span>UGC · AICTE · BCI · PCI Approved</span>
        </div>
      </div>

      <div class="p-6 md:p-10">
        
        <?php if (isset($_GET['submitted'])): ?>
          <!-- Success State -->
          <div class="text-center py-10 space-y-4">
            <div class="w-16 h-16 rounded-full bg-emerald-500/15 text-emerald-600 flex items-center justify-center mx-auto mb-4">
              <?= lucide_icon('check-circle', 'w-8 h-8') ?>
            </div>
            <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Application Successfully Submitted!</h2>
            <p class="text-sm text-slate-600 dark:text-slate-300 max-w-md mx-auto">
              Thank you, <strong><?= e($cand_name ?: 'Candidate') ?></strong>. Our Admission Counseling Desk will review your application for <strong><?= e($selected_course ?: 'your chosen program') ?></strong> and contact you within 24 hours.
            </p>
            <div class="pt-4 flex flex-wrap justify-center gap-4">
              <a href="<?= url('courses/') ?>" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-xs transition">
                Browse More Courses
              </a>
              <a href="https://wa.me/917091168777?text=<?= urlencode('Hello, I have submitted an admission inquiry for ' . ($selected_course ?: 'RKDF University')) ?>" target="_blank" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs transition flex items-center gap-2">
                <?= lucide_icon('message-circle', 'w-4 h-4') ?>
                <span>Chat on WhatsApp</span>
              </a>
            </div>
          </div>

        <?php else: ?>

          <!-- Application Form -->
          <form action="<?= url('admissions/apply.php') ?>" method="GET" class="space-y-6">
            <input type="hidden" name="submitted" value="1" />
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              
              <!-- Program Selection -->
              <div class="md:col-span-2">
                <label for="course_field" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                  Target Program / Course *
                </label>
                <div class="relative">
                  <input
                    id="course_field"
                    type="text"
                    name="course"
                    required
                    value="<?= e($selected_course) ?>"
                    placeholder="e.g. B.A. (Hons) in Bengali, B.Tech CSE, MBA, LLB"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none transition font-medium"
                  />
                  <div class="absolute right-3.5 top-3.5 text-slate-400">
                    <?= lucide_icon('book-open', 'w-4 h-4') ?>
                  </div>
                </div>
              </div>

              <!-- Candidate Name -->
              <div>
                <label for="name_field" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                  Candidate Full Name *
                </label>
                <input
                  id="name_field"
                  type="text"
                  name="name"
                  required
                  value="<?= e($cand_name) ?>"
                  placeholder="Enter full name"
                  class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none transition"
                />
              </div>

              <!-- Mobile Number -->
              <div>
                <label for="phone_field" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                  Mobile / WhatsApp Number *
                </label>
                <input
                  id="phone_field"
                  type="tel"
                  name="phone"
                  required
                  value="<?= e($cand_phone) ?>"
                  placeholder="+91 9876543210"
                  class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none transition"
                />
              </div>

              <!-- Email Address -->
              <div>
                <label for="email_field" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                  Email Address
                </label>
                <input
                  id="email_field"
                  type="email"
                  name="email"
                  value="<?= e($cand_email) ?>"
                  placeholder="name@example.com"
                  class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none transition"
                />
              </div>

              <!-- City / District -->
              <div>
                <label for="city_field" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                  City / State
                </label>
                <input
                  id="city_field"
                  type="text"
                  name="city"
                  value="<?= e($cand_city) ?>"
                  placeholder="e.g. Ranchi, Jamshedpur, Patna"
                  class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none transition"
                />
              </div>

            </div>

            <!-- Scholarship Checkbox Note -->
            <div class="p-4 rounded-xl bg-amber-50 dark:bg-amber-950/30 border border-amber-200 dark:border-amber-800/40 text-xs text-amber-900 dark:text-amber-200 flex items-start gap-2.5">
              <?= lucide_icon('award', 'w-4 h-4 text-gold shrink-0 mt-0.5') ?>
              <span>
                <strong>Scholarship Eligibility:</strong> State / National board toppers receive up to <strong>100% Chancellor Tuition Fee Waiver</strong>. E-Kalyan state government welfare scholarship is applicable for SC/ST/OBC students of Jharkhand.
              </span>
            </div>

            <!-- Submit Button -->
            <button
              type="submit"
              class="w-full py-3.5 px-6 rounded-xl bg-gradient-to-r from-gold via-amber-500 to-gold text-brand font-bold text-sm uppercase tracking-wider hover:opacity-95 shadow-lg shadow-gold/20 transition flex items-center justify-center gap-2"
            >
              <?= lucide_icon('send', 'w-4 h-4') ?>
              <span>Submit Application / Request Counseling</span>
            </button>

          </form>

        <?php endif; ?>

      </div>

      <!-- Footer Helpline Strip -->
      <div class="bg-slate-100 dark:bg-slate-800/60 px-6 py-4 border-t border-slate-200 dark:border-slate-800 flex flex-wrap items-center justify-between gap-4 text-xs">
        <div class="flex items-center gap-2 text-slate-600 dark:text-slate-300">
          <?= lucide_icon('phone-call', 'w-4 h-4 text-gold') ?>
          <span>Need Direct Help? Call Helpline: <strong class="text-slate-900 dark:text-white"><?= SITE_PHONE ?></strong></span>
        </div>
        <div class="flex items-center gap-4">
          <a href="https://rkdfuniversity.org" target="_blank" rel="noopener" class="text-brand dark:text-gold font-semibold hover:underline inline-flex items-center gap-1">
            <span>Official University Live Site</span>
            <?= lucide_icon('external-link', 'w-3 h-3') ?>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../sections/cta.php'; ?>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
