<?php
$page_title = "Vice Chancellor's Message | Leadership — RKDF University Ranchi";
$page_meta_desc = "Message from Prof. (Dr.) Shuchitangshu Chatterjee, Vice Chancellor of RKDF University Ranchi, highlighting academic excellence, research thrust, and holistic student growth.";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="inner-page-hero">
  <div class="mx-auto max-w-5xl">
    <div class="hero-pill mb-4">
      <?= lucide_icon('graduation-cap', 'w-4 h-4 text-gold') ?>
      <span>Academic Leadership</span>
    </div>
    <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4 tracking-tight">Vice Chancellor's Message</h1>
    <p class="text-base md:text-lg text-white/80 max-w-2xl mx-auto">
      “The foundation of every state is the education of its youth.”
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
              SC
            </div>
            <div class="text-center sm:text-left">
              <span class="inline-block px-3 py-1 rounded-full bg-gold/15 text-gold text-xs font-semibold uppercase tracking-wider mb-2">Vice Chancellor</span>
              <h2 class="text-2xl font-bold text-foreground">Prof. (Dr.) Shuchitangshu Chatterjee</h2>
              <p class="text-sm text-brand font-medium">Ph.D in Physics from IIT Kharagpur, WB, India</p>
              <p class="text-xs text-muted-foreground mt-1">Vice Chancellor, RKDF University Ranchi</p>
            </div>
          </div>

          <div class="prose prose-slate max-w-none text-muted-foreground leading-relaxed space-y-4 text-sm sm:text-base">
            <p>
              It is my distinct pleasure to welcome you all to our vibrant RKDF University, Ranchi. The University has made significant strides in imparting quality higher education to students from across India and abroad, preparing them to be globally competitive, innovative, and socially responsible citizens with intrinsic values.
            </p>
            <p>
              We take pride in saying that our University is dedicated to the cause of excellence in Higher Education through Knowledge, Research, and Teaching. We place great thrust on empirical research, interdisciplinary collaborations, and extension activities with an emphasis on practical application that caters to emerging societal needs.
            </p>
            <p>
              At RKDF University Ranchi, we offer contemporary, industry-vetted courses in Engineering &amp; Technology, Management, Computer Sciences, Basic &amp; Applied Sciences, Arts &amp; Humanities, Commerce, Law, and Pharmaceutical Sciences of high quality that consistently meet global benchmarks.
            </p>
            <p>
              RKDF University believes in the philosophy of <em>"Contain Multitudes"</em>—fostering diverse worldviews, cultures, and innovative pathways for problem solving. We welcome all students, faculty members, and researchers irrespective of background, creed, or region. I wish you all the very best for your bright career and promising future!
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
            <li><a href="<?= url('about/vice-chancellor.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl bg-brand/10 text-brand font-semibold"><span>Vice Chancellor</span><?= lucide_icon('chevron-right', 'w-4 h-4 text-gold') ?></a></li>
            <li><a href="<?= url('about/pro-vice-chancellor.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Pro Vice Chancellor</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
            <li><a href="<?= url('about/registrar.php') ?>" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-muted text-muted-foreground hover:text-foreground transition"><span>Registrar</span><?= lucide_icon('chevron-right', 'w-4 h-4') ?></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
