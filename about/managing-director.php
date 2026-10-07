<?php
$page_title = "Managing Director's Message | Leadership — RKDF University Ranchi";
$page_meta_desc = "Message from the Managing Director of RKDF Group of Institutions and University Ranchi regarding educational innovation, campus infrastructure, and student placement.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('building-2', 'w-4 h-4 text-gold') ?>
      <span>Executive Leadership</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Managing Director's Message</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      Bridging academic excellence with industrial competence and technological innovation.
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
              MD
            </div>
            <div class="text-center sm:text-left">
              <span class="inline-block px-3 py-1 rounded-full bg-gold/15 text-gold text-xs font-semibold uppercase tracking-wider mb-2">Executive Management</span>
              <h2 class="text-2xl font-bold text-foreground">Managing Director</h2>
              <p class="text-sm text-muted-foreground mt-1">RKDF Group of Institutions &amp; Universities</p>
            </div>
          </div>

          <div class="prose prose-slate max-w-none text-muted-foreground leading-relaxed space-y-4 text-sm sm:text-base">
            <p>
              RKDF Group has been pioneering professional and higher technical education in India for over two decades. Our journey in Ranchi, Jharkhand, reflects our unwavering commitment to creating accessible, top-tier academic hubs equipped with modern laboratories, digital smart classrooms, robust sports infrastructure, and vibrant student amenities.
            </p>
            <p>
              In today's dynamic global marketplace, industry demands graduates who possess not just theoretical acumen, but real-world problem-solving agility, communication leadership, and hands-on technological proficiency.
            </p>
            <p>
              We have integrated proactive industry tie-ups, corporate internships, live project simulations, and corporate placement drives into every academic curriculum. We welcome all ambitious students to join this vibrant community and embark on a fulfilling educational odyssey.
            </p>
          </div>
        </div>
      </div>

      <!-- Right Sidebar -->
      <div class="space-y-6">
        <div class="bg-card border border-border rounded-2xl p-6 shadow-sm">
          <h3 class="font-bold text-foreground text-sm uppercase tracking-wider mb-4 pb-2 border-b border-border">
            University Officers
          </h3>
          <ul class="space-y-2 text-sm">
            <li><a href="<?= url('about/chancellor.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Chancellor's Message</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/managing-director.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold"><span>Managing Director</span><?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?></a></li>
            <li><a href="<?= url('about/vice-chancellor.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Vice Chancellor</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/registrar.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Registrar</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
