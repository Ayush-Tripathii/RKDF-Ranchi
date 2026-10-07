<?php
$page_title = "Academic Bank of Credits (ABC / APAAR ID) | RKDF University Ranchi";
$page_meta_desc = "Step-by-step video guide and instructions for creating APAAR ID and Academic Bank of Credits (ABC ID) on DigiLocker as per UGC guidelines.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('video', 'w-4 h-4 text-gold') ?>
      <span>NEP 2020 Digital Initiative</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Academic Bank of Credits (ABC)</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Official guide and tutorials for generating your APAAR ID and linking academic credits seamlessly with DigiLocker.
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="max-w-3xl mx-auto space-y-6">
      <div class="bg-card border border-border rounded-2xl p-6 sm:p-8 shadow-sm">
        <h2 class="text-xl font-bold text-foreground mb-4">How to create ABC ID / APAAR ID?</h2>
        <ol class="space-y-4 text-sm text-muted-foreground list-decimal list-inside">
          <li>Visit <a href="https://www.abc.gov.in" target="_blank" rel="noopener" class="text-brand font-semibold underline">www.abc.gov.in</a> or download the <strong>DigiLocker App</strong>.</li>
          <li>Log in using your mobile number linked with Aadhaar.</li>
          <li>Search for <strong>"Academic Bank of Credits"</strong> under education services.</li>
          <li>Select <strong>RKDF University, Ranchi</strong> as your University / Institution.</li>
          <li>Enter your Admission / Roll Number to generate your unique 12-digit ABC / APAAR ID.</li>
        </ol>
        <div class="mt-6 pt-6 border-t border-border flex items-center justify-between">
          <a href="<?= url('about/digilocker.php') ?>" class="inline-flex items-center gap-2 text-brand font-semibold text-sm hover:underline">
            <span>Learn more about DigiLocker Integration</span>
            <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
