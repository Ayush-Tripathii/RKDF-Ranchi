<?php
/**
 * RKDF University — Board of Studies (9 Faculties)
 * Pattern: Modular MVC (Controller / View / Data Separation)
 * Content Source: https://rkdfuniversity.org/about/board-of-studies/
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = "Board of Studies | " . SITE_NAME;
$page_meta_desc = "The Departmental Boards of Studies at RKDF University Ranchi — formulating academic syllabi, curriculum innovation, and academic standards across all 9 faculties.";

// Load Data
$faculties = require dirname(__DIR__) . '/data/boards/board_of_studies.php';

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
      <span class="text-white/90">Board of Studies</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Board of <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Studies</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      The academic bodies responsible for syllabus formulation, curriculum modernization, and teaching-learning excellence across 9 university faculties.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('book-open') ?> 9 Academic Faculties
      </span>
      <span class="hero-pill">
        <?= lucide_icon('users') ?> Internal &amp; External Academicians
      </span>
      <span class="hero-pill">
        <?= lucide_icon('award') ?> Industry Advisory Integration
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Bar -->
<?php require_once dirname(__DIR__) . '/includes/boards_nav_tabs.php'; ?>

<!-- ==================== MAIN CONTENT SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-16">

    <!-- Statutory Authority Spotlight Banner Component -->
    <?php
    $spotlight_badge = 'Curriculum Governance';
    $spotlight_title = 'Departmental Boards of Studies';
    $spotlight_desc  = 'Each academic department constitutes a dedicated Board of Studies comprising internal senior educators, external university scholars, and seasoned industry experts to design outcome-based curricula aligned with national accreditation frameworks.';
    $spotlight_pills = [
        ['icon' => 'book-open', 'text' => 'Syllabus Modernization'],
        ['icon' => 'briefcase', 'text' => 'Industry Advisory Boards'],
        ['icon' => 'award',     'text' => 'NEP 2020 Compliance'],
    ];
    $seal_header     = 'Academic Structure';
    $seal_title      = 'Curriculum Council';
    $seal_desc       = 'Formulating cutting-edge course structures, laboratory protocols, and continuous evaluation systems.';
    $seal_footer_tag = '9 Constituent Faculties';
    $seal_count      = 'Comprehensive Syllabi';
    require dirname(__DIR__) . '/sections/boards/spotlight_card.php';
    ?>

    <!-- Quick Jump Faculty Buttons -->
    <div class="space-y-4">
      <div class="flex items-center justify-between flex-wrap gap-4">
        <div>
          <div class="text-xs tracking-[0.2em] uppercase text-gold font-bold">Fast Navigation</div>
          <h3 class="font-serif text-2xl sm:text-3xl font-normal text-slate-900 mt-1">Select Faculty Board</h3>
        </div>
        <span class="text-xs text-muted-foreground bg-white px-3.5 py-1.5 rounded-full border border-border">9 Departmental Councils</span>
      </div>

      <div class="flex flex-wrap gap-2.5 pt-2">
        <?php foreach ($faculties as $idx => $fac): ?>
          <a href="#<?= $fac['id'] ?>" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl text-xs font-semibold bg-white hover:bg-brand hover:text-white text-slate-700 border border-slate-200 shadow-sm transition">
            <?= lucide_icon($fac['icon'], 'w-3.5 h-3.5 text-gold') ?>
            <span><?= $idx + 1 ?>. <?= e($fac['short_title']) ?></span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- 9 Faculty Boards Directory Tables -->
    <div class="space-y-16">
      <?php foreach ($faculties as $idx => $fac): ?>
        <div id="<?= $fac['id'] ?>" class="scroll-mt-28 section-block space-y-6">
          <div class="flex items-center justify-between flex-wrap gap-4 border-b border-slate-200/80 pb-4">
            <div class="flex items-center gap-3.5">
              <div class="w-12 h-12 rounded-2xl bg-brand text-gold flex items-center justify-center font-serif text-lg font-bold shadow-md">
                <?= sprintf('%02d', $idx + 1) ?>
              </div>
              <div>
                <span class="text-[11px] uppercase tracking-widest text-gold font-bold">Board of Studies</span>
                <h3 class="font-serif text-2xl sm:text-3xl font-normal text-slate-900">
                  <?= e($fac['title']) ?>
                </h3>
              </div>
            </div>
            <div class="text-xs text-slate-500 bg-white px-3.5 py-1.5 rounded-full border border-slate-200 font-medium flex items-center gap-1.5">
              <?= lucide_icon('users', 'w-3.5 h-3.5 text-gold') ?>
              <span><?= count($fac['members']) ?> Members</span>
            </div>
          </div>

          <div class="gov-table-wrap">
            <table class="gov-table">
              <thead>
                <tr>
                  <th style="width: 70px;">#</th>
                  <th>Member Name</th>
                  <th>Designation / Role</th>
                  <th style="text-align: right;">Capacity</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($fac['members'] as $mIdx => $member): 
                  $isChair = stripos($member['designation'], 'Chairperson') !== false;
                  $isExternal = stripos($member['designation'], 'External') !== false;
                  $isIndustry = stripos($member['designation'], 'Industry') !== false;
                ?>
                  <tr class="<?= $isChair ? 'bg-amber-50/40' : '' ?>">
                    <td style="font-weight: 700; color: #94a3b8;"><?= sprintf('%02d', $mIdx + 1) ?></td>
                    <td>
                      <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl <?= $isChair ? 'bg-gold/20 text-gold border border-gold/40' : 'bg-slate-100 border border-slate-200 text-brand' ?> flex items-center justify-center shrink-0">
                          <?= lucide_icon($isChair ? 'award' : ($isExternal ? 'user-check' : ($isIndustry ? 'briefcase' : 'user')), 'w-4 h-4 ' . ($isChair ? 'text-amber-700' : 'text-gold')) ?>
                        </div>
                        <div>
                          <div class="font-semibold text-slate-900 text-sm sm:text-base flex items-center gap-2">
                            <span><?= e($member['name']) ?></span>
                            <?php if ($isChair): ?>
                              <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-amber-100 text-amber-900 border border-amber-300">Chairperson</span>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold <?= $isChair ? 'bg-brand text-white' : ($isExternal ? 'bg-sky-100 text-sky-900 border border-sky-200' : ($isIndustry ? 'bg-emerald-100 text-emerald-900 border border-emerald-200' : 'bg-slate-100 text-slate-800 border border-slate-200')) ?>">
                        <?= e($member['designation']) ?>
                      </span>
                    </td>
                    <td style="text-align: right;">
                      <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[11px] font-medium <?= $isExternal ? 'bg-sky-50 text-sky-800 border border-sky-200' : ($isIndustry ? 'bg-emerald-50 text-emerald-800 border border-emerald-200' : 'bg-slate-100 text-slate-700 border border-slate-200/80') ?>">
                        <?= e($member['category']) ?>
                      </span>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Academic Council Callout Notice -->
    <div class="rounded-3xl bg-brand text-brand-foreground p-8 sm:p-10 shadow-xl border border-gold/30 flex flex-col md:flex-row items-center justify-between gap-6 text-left">
      <div class="space-y-2 text-left flex-1">
        <div class="text-xs uppercase font-bold tracking-widest text-gold flex items-center justify-start gap-2 text-left">
          <?= lucide_icon('shield-check', 'w-4 h-4 text-gold shrink-0') ?>
          <span>Apex Academic Body</span>
        </div>
        <h3 class="font-serif text-2xl sm:text-3xl font-normal text-white text-left">
          Academic Council
        </h3>
        <p class="text-xs sm:text-sm text-white/80 max-w-2xl text-left leading-relaxed">
          The recommendations from each Board of Studies are presented to the statutory Academic Council for final institutional ratification and enactment.
        </p>
      </div>

      <div class="flex items-center justify-center shrink-0 self-center my-auto gap-3">
        <a href="<?= url('boards/academic-council-members.php') ?>" class="inline-flex items-center gap-2 rounded-full bg-gold text-brand px-6 py-3 text-xs font-bold uppercase tracking-wider hover:bg-white transition shadow-lg">
          <span>Academic Council</span>
          <?= lucide_icon('arrow-right', 'w-4 h-4') ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
