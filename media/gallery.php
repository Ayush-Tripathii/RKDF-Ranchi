<?php
/**
 * RKDF University — Comprehensive Campus Gallery Page
 */
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';

$page_title     = 'Campus Gallery & Visual Archives — ' . SITE_NAME;
$page_meta_desc = 'Explore high-definition photos of RKDF University Ranchi: 2nd Convocation 2025, Annual Sports Meets, Laboratories, Healthcare Center, and vibrant campus life.';

$categories = [
    'all' => 'All Archives',
    'convocation' => 'Convocations & Ceremonies',
    'sports' => 'Sports & Athletics',
    'labs' => 'Laboratories & Research',
    'health' => 'Healthcare & Amenities',
    'campus' => 'Campus & Architecture'
];

$all_photos = [
    // Convocations
    ['cat' => 'convocation', 'src' => '2nd-Convocation-2025-RKDF-University.jpg', 'title' => '2nd Annual Convocation 2025', 'desc' => 'Graduation ceremony celebrating academic distinction.'],
    ['cat' => 'convocation', 'src' => 'gallery_1.jpg', 'title' => 'Procession of Dignitaries', 'desc' => 'Academic council leading the convocation ceremony.'],
    ['cat' => 'convocation', 'src' => 'gallery_2.jpg', 'title' => 'Founder\'s Address', 'desc' => 'Inspirational message to the graduating batch.'],
    ['cat' => 'convocation', 'src' => 'gallery_3.jpg', 'title' => 'Chhau Cultural Heritage', 'desc' => 'Traditional Jharkhand tribal dance presentation.'],
    ['cat' => 'convocation', 'src' => 'gallery_4.jpg', 'title' => 'Ceremonial Pipe Band', 'desc' => 'Band performance during formal ceremonial march.'],
    ['cat' => 'convocation', 'src' => 'gallery_5.jpg', 'title' => 'Guard of Honour March', 'desc' => 'Cadet salute to chief guests and chancellor.'],
    ['cat' => 'convocation', 'src' => 'gallery_6.jpg', 'title' => 'Chancellor\'s Keynote', 'desc' => 'Address outlining vision for innovation and research.'],

    // Sports
    ['cat' => 'sports', 'src' => 'Sports-rkdf-1.jpg', 'title' => 'Annual Cricket Tournament', 'desc' => 'Inter-departmental turf league match.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-2.jpg', 'title' => 'Volleyball Championship', 'desc' => 'Fierce match at the campus volleyball court.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-3.jpg', 'title' => 'Athletic Track Races', 'desc' => '100m sprint finals at university grounds.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-4.jpg', 'title' => 'Kabaddi League Finals', 'desc' => 'Traditional kabaddi championship match.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-5.jpg', 'title' => 'Trophy Presentation', 'desc' => 'Honoring winning departmental sports teams.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-6.jpg', 'title' => 'Football Championship', 'desc' => 'Annual varsity football tournament finals.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-7.jpg', 'title' => 'Badminton Arena Matches', 'desc' => 'Indoor wooden court badminton games.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-8.jpg', 'title' => 'Table Tennis Championship', 'desc' => 'Indoor recreation center finals.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-9.jpg', 'title' => 'Chess & Mind Sports', 'desc' => 'Strategy tournament at indoor hall.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-10.jpg', 'title' => 'Medal Distribution Ceremony', 'desc' => 'Rewarding student athlete accomplishments.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-11.jpg', 'title' => 'March Past by Athletes', 'desc' => 'Opening sports ceremony contingents.'],
    ['cat' => 'sports', 'src' => 'Sports-rkdf-12.jpg', 'title' => 'Faculty vs Student Match', 'desc' => 'Friendly exhibition cricket match.'],

    // Labs
    ['cat' => 'labs', 'src' => 'research_lab.jpg', 'title' => 'Central Research Laboratory', 'desc' => 'Advanced analytical testing and instrumentation.'],
    ['cat' => 'labs', 'src' => 'lab.jpg', 'title' => 'Pharmaceutical Chemistry Lab', 'desc' => 'Formulation testing and chemical synthesis.'],
    ['cat' => 'labs', 'src' => 'computer.jpg', 'title' => 'High-Performance Computing Center', 'desc' => 'Equipped with gigabit internet and modern workstations.'],
    ['cat' => 'labs', 'src' => 'practical.jpg', 'title' => 'Engineering Workshop', 'desc' => 'Mechanical fabrication and hands-on tooling.'],
    ['cat' => 'labs', 'src' => 'solar_research.jpg', 'title' => 'Renewable Energy Testbed', 'desc' => 'Photovoltaic and sustainable power experimentation.'],

    // Health
    ['cat' => 'health', 'src' => 'health-1.jpg', 'title' => 'Medical Dispensary & OPD', 'desc' => 'Primary healthcare and observation unit.'],
    ['cat' => 'health', 'src' => 'health-2.jpg', 'title' => 'Physician Consultation Chamber', 'desc' => 'Visiting medical practitioner care.'],
    ['cat' => 'health', 'src' => 'health-3.jpg', 'title' => 'Campus Health Screening Camp', 'desc' => 'Annual comprehensive student health checkup.'],
    ['cat' => 'health', 'src' => 'health-4.jpg', 'title' => 'Emergency Diagnostic Equipment', 'desc' => 'Vital monitors, BP & emergency medicine.'],
    ['cat' => 'health', 'src' => 'health-6.jpg', 'title' => 'Counseling & Wellness Cell', 'desc' => 'Confidential psychological consultation.'],

    // Campus
    ['cat' => 'campus', 'src' => 'campus_building.jpg', 'title' => 'University Administrative Block', 'desc' => 'Central administrative and academic pavilion.'],
    ['cat' => 'campus', 'src' => 'lush-green-campus.jpg', 'title' => 'Lush Green Ecological Campus', 'desc' => 'Pollution-free serene learning atmosphere.'],
    ['cat' => 'campus', 'src' => 'campus_students.jpg', 'title' => 'Vibrant Student Community', 'desc' => 'Scholars collaborating across open courtyards.'],
    ['cat' => 'campus', 'src' => 'campus-library.jpg', 'title' => 'Central Library Knowledge Stacks', 'desc' => '1,00,000+ volumes and research journals.']
];

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
      <a href="<?= url('media/news.php') ?>" class="hover:text-white transition">Media</a>
      <?= lucide_icon('chevron-right', 'w-3 h-3') ?>
      <span class="text-white/90">Campus Gallery</span>
    </div>

    <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl font-normal leading-tight tracking-tight text-white max-w-4xl mx-auto">
      Visual Archives &amp; <em class="italic-serif text-gold underline decoration-gold/60 decoration-2 underline-offset-8">Campus Moments</em>
    </h1>

    <p class="mt-6 text-white/85 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed font-normal">
      High-resolution glimpses into academic milestones, convocations, national sports meets, scientific laboratories, and vibrant student life across RKDF University Ranchi.
    </p>

    <!-- Badges -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-3 text-xs">
      <span class="hero-pill">
        <?= lucide_icon('award') ?> 2nd Convocation 2025
      </span>
      <span class="hero-pill">
        <?= lucide_icon('trophy') ?> Sports Meets &amp; Tournaments
      </span>
      <span class="hero-pill">
        <?= lucide_icon('flask-conical') ?> High-Tech Research Labs
      </span>
      <span class="hero-pill">
        <?= lucide_icon('sparkles') ?> Cultural &amp; Student Events
      </span>
    </div>
  </div>
</section>

<!-- Sub-Navigation Tabs for Media -->
<?php require_once dirname(__DIR__) . '/includes/media_nav_tabs.php'; ?>

<!-- ==================== MAIN GALLERY SECTION ==================== -->
<section class="py-20 bg-surface">
  <div class="mx-auto max-w-7xl px-6 space-y-12">

    <!-- Filter Buttons (Pure CSS / JS) -->
    <div class="flex flex-wrap items-center justify-center gap-2 pb-6 border-b border-border">
      <?php foreach ($categories as $catKey => $catLabel): ?>
        <button 
          type="button" 
          onclick="filterGallery('<?= $catKey ?>')" 
          id="tab-btn-<?= $catKey ?>"
          class="gallery-filter-btn px-5 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all <?= $catKey === 'all' ? 'bg-brand text-white shadow-sm' : 'bg-white text-slate-700 border border-slate-200/80 hover:bg-slate-50' ?>"
        >
          <?= e($catLabel) ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Photo Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="gallery-grid">
      <?php foreach ($all_photos as $photo): ?>
        <div class="gallery-card group relative rounded-2xl overflow-hidden bg-slate-900 border border-slate-200/80 shadow-xs aspect-4/3 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-cat="<?= $photo['cat'] ?>">
          <img 
            src="<?= url('images/' . $photo['src']) ?>" 
            alt="<?= e($photo['title']) ?>" 
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
            <span class="text-[10px] font-bold uppercase tracking-wider text-gold flex items-center gap-1">
              <?= lucide_icon('camera', 'w-3 h-3') ?>
              <span><?= e($categories[$photo['cat']] ?? 'Campus') ?></span>
            </span>
            <h4 class="text-white text-sm font-semibold mt-1 leading-snug"><?= e($photo['title']) ?></h4>
            <p class="text-white/80 text-xs mt-0.5 line-clamp-2 leading-relaxed"><?= e($photo['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<script>
function filterGallery(category) {
  const cards = document.querySelectorAll('.gallery-card');
  const buttons = document.querySelectorAll('.gallery-filter-btn');

  // Update button active state
  buttons.forEach(btn => {
    btn.classList.remove('bg-brand', 'text-white', 'shadow-sm');
    btn.classList.add('bg-white', 'text-slate-700', 'border', 'border-slate-200/80');
  });

  const activeBtn = document.getElementById('tab-btn-' + category);
  if (activeBtn) {
    activeBtn.classList.remove('bg-white', 'text-slate-700', 'border', 'border-slate-200/80');
    activeBtn.classList.add('bg-brand', 'text-white', 'shadow-sm');
  }

  // Filter cards
  cards.forEach(card => {
    const cardCat = card.getAttribute('data-cat');
    if (category === 'all' || cardCat === category) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });
}
</script>

<?php require_once dirname(__DIR__) . '/sections/cta.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
