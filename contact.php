<?php
/**
 * RKDF University — Contact Page
 */
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$page_title     = 'Contact Us — ' . SITE_NAME;
$page_meta_desc = 'Contact RKDF University Ranchi — address, phone, email, and online inquiry form.';

$contact_success = false;
$contact_error   = '';
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['contact_submit'])) {
    $c_name    = trim(filter_input(INPUT_POST, 'c_name',    FILTER_SANITIZE_SPECIAL_CHARS));
    $c_email   = filter_input(INPUT_POST, 'c_email',   FILTER_VALIDATE_EMAIL);
    $c_subject = trim(filter_input(INPUT_POST, 'c_subject', FILTER_SANITIZE_SPECIAL_CHARS));
    $c_message = trim(filter_input(INPUT_POST, 'c_message', FILTER_SANITIZE_SPECIAL_CHARS));
    if ($c_name && $c_email && $c_subject && $c_message) {
        $contact_success = true;
    } else {
        $contact_error = 'Please fill in all required fields.';
    }
}

require_once __DIR__ . '/includes/header.php';
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
      <span class="text-white/90">Contact Us</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      We'd love to hear <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">from you</em>.
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      Whether you have a question about admissions, programs, research, or visiting campus — our team is here to help.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('map-pin', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> Ranchi Campus
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('phone-call', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> +91-7091168777
      </span>
      <span class="hero-pill px-4 py-2 rounded-full">
        <?= lucide_icon('mail', 'w-3.5 h-3.5 text-gold shrink-0') ?> ️ info@rkdfuniversity.org
      </span>
    </div>
  </div>
</section>

<!-- Contact Info & Form -->
<section class="py-24 bg-surface" id="contact">
  <div class="mx-auto max-w-7xl px-6">
    <div class="grid lg:grid-cols-12 gap-12 items-start">
      <!-- Left Info -->
      <div class="lg:col-span-5">
        <div class="text-xs tracking-[0.2em] uppercase text-gold font-medium">Get in Touch</div>
        <h2 class="font-serif text-4xl md:text-5xl mt-3 font-normal text-foreground">Reach our campus offices.</h2>
        <p class="mt-4 text-muted-foreground leading-relaxed">
          Our administrative and admissions offices are open Monday through Saturday from 9:00 AM to 5:00 PM IST.
        </p>

        <div class="mt-8 space-y-6">
          <div class="flex items-start gap-4">
            <span class="grid h-10 w-10 place-items-center rounded-xl bg-brand/10 text-brand shrink-0">
              <?= lucide_icon('map-pin', 'w-5 h-5') ?>
            </span>
            <div>
              <div class="font-semibold text-foreground text-sm">Main Campus</div>
              <div class="text-xs text-muted-foreground mt-1"><?= SITE_ADDRESS ?></div>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <span class="grid h-10 w-10 place-items-center rounded-xl bg-brand/10 text-brand shrink-0">
              <?= lucide_icon('phone', 'w-5 h-5') ?>
            </span>
            <div>
              <div class="font-semibold text-foreground text-sm">Phone Helpline</div>
              <div class="text-xs text-muted-foreground mt-1"><a href="tel:<?= SITE_PHONE ?>" class="hover:text-brand transition"><?= SITE_PHONE ?></a></div>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <span class="grid h-10 w-10 place-items-center rounded-xl bg-brand/10 text-brand shrink-0">
              <?= lucide_icon('mail', 'w-5 h-5') ?>
            </span>
            <div>
              <div class="font-semibold text-foreground text-sm">Email Address</div>
              <div class="text-xs text-muted-foreground mt-1"><a href="mailto:<?= SITE_EMAIL ?>" class="hover:text-brand transition"><?= SITE_EMAIL ?></a></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Form -->
      <div class="lg:col-span-7">
        <div class="rkdf-form-card">
          <?php if ($contact_success): ?>
            <div class="rounded-2xl bg-emerald-50 border border-emerald-200 p-8 text-center space-y-3">
              <div class="w-14 h-14 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center mx-auto shadow-sm">
                <?= lucide_icon('check-circle-2', 'w-8 h-8') ?>
              </div>
              <h3 class="font-serif text-2xl sm:text-3xl text-emerald-900 font-normal">Message Sent Successfully!</h3>
              <p class="text-sm text-emerald-800 max-w-md mx-auto leading-relaxed">
                Thank you, <strong class="font-semibold"><?= e($c_name) ?></strong>. Our university administration will reply to <span class="font-semibold text-emerald-950"><?= e($c_email) ?></span> within 24 hours.
              </p>
            </div>
          <?php else: ?>
            <?php if ($contact_error): ?>
              <div class="mb-6 rounded-2xl bg-red-50 border border-red-200 p-4 text-red-700 text-sm flex items-center gap-3">
                <?= lucide_icon('alert-circle', 'w-5 h-5 shrink-0 text-red-600') ?>
                <span><?= e($contact_error) ?></span>
              </div>
            <?php endif; ?>

            <form method="POST" action="contact.php#contact" class="space-y-6">
              <div class="grid sm:grid-cols-2 gap-5">
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
                      name="c_name" 
                      required 
                      placeholder="e.g. John Doe" 
                      class="rkdf-form-input" 
                      value="<?= e($_POST['c_name'] ?? '') ?>" 
                    />
                  </div>
                </div>

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
                      name="c_email" 
                      required 
                      placeholder="e.g. john@example.com" 
                      class="rkdf-form-input" 
                      value="<?= e($_POST['c_email'] ?? '') ?>" 
                    />
                  </div>
                </div>
              </div>

              <div>
                <label class="rkdf-form-label">
                  Subject <span class="req">*</span>
                </label>
                <div class="rkdf-input-wrap">
                  <span class="rkdf-input-icon">
                    <?= lucide_icon('file-text') ?>
                  </span>
                  <input 
                    type="text" 
                    name="c_subject" 
                    required 
                    placeholder="e.g. Admissions Inquiry / General Query" 
                    class="rkdf-form-input" 
                    value="<?= e($_POST['c_subject'] ?? '') ?>" 
                  />
                </div>
              </div>

              <div>
                <label class="rkdf-form-label">
                  Message <span class="req">*</span>
                </label>
                <div class="rkdf-input-wrap rkdf-textarea-wrap">
                  <span class="rkdf-input-icon">
                    <?= lucide_icon('message-square') ?>
                  </span>
                  <textarea 
                    name="c_message" 
                    required 
                    rows="4" 
                    placeholder="How can our university team assist you?" 
                    class="rkdf-form-textarea" 
                  ><?= e($_POST['c_message'] ?? '') ?></textarea>
                </div>
              </div>

              <button 
                type="submit" 
                name="contact_submit" 
                class="rkdf-form-btn"
              >
                <span>Send Message</span>
                <?= lucide_icon('arrow-right') ?>
              </button>
            </form>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
