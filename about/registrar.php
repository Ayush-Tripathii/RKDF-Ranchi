<?php
$page_title = "Registrar's Message | Administration — RKDF University Ranchi";
$page_meta_desc = "Message from the Registrar of RKDF University Ranchi, focusing on transparent, student-centric administration, statutory compliance, and institutional excellence.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('scroll', 'w-4 h-4 text-gold') ?>
      <span>Principal Administrative Officer</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Registrar's Message</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      “Your education is the foundation of your future; we are here to ensure every stone is placed with precision, integrity, and support.”
    </p>
  </div>
</div>

<section class="py-12 md:py-16 bg-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      
      <div class="lg:col-span-3 space-y-8">
        <div class="bg-card border border-border rounded-2xl p-6 sm:p-10 shadow-sm">
          
          <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 mb-8 pb-6 border-b border-border">
            <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-brand to-slate-900 text-gold flex items-center justify-center font-serif text-4xl font-bold shadow-md shrink-0">
              RO
            </div>
            <div class="text-center sm:text-left">
              <span class="inline-block px-3 py-1 rounded-full bg-gold/15 text-gold text-xs font-semibold uppercase tracking-wider mb-2">Office of Registrar</span>
              <h2 class="text-2xl font-bold text-foreground">Dr. Amit Kumar Pandey / Dr. Nibha Rani</h2>
              <p class="text-sm text-brand font-medium">Registrar / Registrar In-charge</p>
              <p class="text-xs text-muted-foreground mt-1">RKDF University Ranchi</p>
            </div>
          </div>

          <div class="prose prose-slate max-w-none text-muted-foreground leading-relaxed space-y-4 text-sm sm:text-base">
            <p>
              It is a great honor and privilege to serve RKDF University Ranchi. The University has been established with a vision of providing quality higher education, promoting knowledge, research, innovation, and creating transformative opportunities for the academic and professional development of students.
            </p>
            <p>
              I firmly believe that the Registrar’s Office has a pivotal role in translating this vision into effective institutional governance and sustainable growth. Our foremost priorities are transparency, efficiency, accountability, academic excellence, and student-centric administration.
            </p>
            <p>
              Our students are at the heart of everything we do. We must ensure that they receive not only quality education but also the right academic environment, mentorship, opportunities, and ethical values required to become responsible professionals and nation-builders.
            </p>
            <p>
              I assure the entire University community of our commitment to fairness, accessibility, responsive administration, and continuous improvement. Together, with commitment, integrity, and teamwork, we will take RKDF University Ranchi to newer heights.
            </p>
          </div>

          <div class="mt-8 pt-6 border-t border-border flex flex-wrap items-center justify-between gap-4 text-xs text-muted-foreground">
            <span class="inline-flex items-center gap-1.5"><?= lucide_icon('mail', 'w-4 h-4 text-gold') ?> registrar@rkdfuniversity.org / info@rkdfuniversity.org</span>
            <span class="inline-flex items-center gap-1.5"><?= lucide_icon('phone', 'w-4 h-4 text-gold') ?> +91 7091168777</span>
          </div>

        </div>
      </div>

      <!-- Right Sidebar -->
      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">Officers</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="<?= url('about/vice-chancellor.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Vice Chancellor</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/registrar.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold"><span>Registrar</span><?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?></a></li>
            <li><a href="<?= url('about/controller-of-examination.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Controller of Examination</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/finance-officer.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Finance Officer</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/ombudsperson.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Ombudsperson</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
