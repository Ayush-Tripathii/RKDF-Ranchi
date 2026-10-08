<?php
/**
 * RKDF University — Navigation Header with Interactive Mega Dropdowns & Mobile Drawer
 */
$nav_items = [
    [
        'label' => 'About',
        'href'  => 'about/',
        'dropdown' => [
            ['label' => 'About RKDF University',    'href' => 'about/',                             'icon' => 'landmark',        'desc' => 'History, foundation, 162 institutes & emblem'],
            ['label' => 'Vision & Mission',         'href' => 'about/vision-and-mission.php',        'icon' => 'globe',           'desc' => 'Guiding purpose, global vision & core values'],
            ['label' => 'Government Recognitions', 'href' => 'about/government-recognition.php',    'icon' => 'scale',           'desc' => 'Gazette 1077, State Act, UGC & AIU recognition'],
            ['label' => 'Accreditations & Approvals','href' => 'about/accreditations.php',          'icon' => 'award',           'desc' => 'PCI, BCI, AISHE & statutory regulatory approvals'],
            ['label' => 'University Leadership',    'href' => 'governance/chancellor.php',           'icon' => 'users',           'desc' => 'Chancellor, Managing Director & Vice Chancellor'],
            ['label' => 'Career @ RKDF',            'href' => 'about/career.php',                   'icon' => 'briefcase',       'desc' => 'Faculty, research & administrative openings'],
            ['label' => 'Alumni Association',       'href' => 'about/alumni-committee.php',          'icon' => 'graduation-cap',  'desc' => 'Global alumni network, registration & committee'],
            ['label' => 'ABC / DigiLocker',         'href' => 'about/digilocker.php',               'icon' => 'shield-check',    'desc' => 'APAAR ID, Academic Bank of Credits & NAD'],
            ['label' => 'Right to Information (RTI)','href' => 'about/rti.php',                     'icon' => 'file-text',       'desc' => 'RTI Act officers & proactive university disclosures'],
            ['label' => 'Annual Audit Reports',     'href' => 'about/annual-reports.php',            'icon' => 'book-open',       'desc' => 'Audit reports (2019–25) & balance sheets'],
        ]
    ],
    [
        'label' => 'Academics',
        'href'  => 'departments/',
        'dropdown' => [
            ['label' => 'Faculties Directory',      'href' => 'departments/',                                               'icon' => 'landmark',    'desc' => '12 academic faculties & 90+ programs'],
            ['label' => 'Faculty of Engineering',   'href' => 'departments/school-engineering.php',                         'icon' => 'cpu',         'desc' => 'B.Tech Mining, CSE, Civil, ME & Polytechnic'],
            ['label' => 'Faculty of IT & Computing','href' => 'departments/school-of-information-technology.php',         'icon' => 'laptop',      'desc' => 'BCA, MCA & PGDCA Computing'],
            ['label' => 'Faculty of Management',    'href' => 'departments/school-management.php',                          'icon' => 'briefcase',   'desc' => 'BBA, MBA Dual Spec & MMS'],
            ['label' => 'Institute of Pharmacy',    'href' => 'departments/school-pharmacy.php',                            'icon' => 'heart-pulse', 'desc' => 'PCI-approved B.Pharm & D.Pharm'],
            ['label' => 'Faculty of Law',           'href' => 'departments/school-law.php',                                 'icon' => 'scale',       'desc' => 'BA LL.B, BBA LL.B, LL.B & LL.M'],
            ['label' => 'Basic & Applied Sciences', 'href' => 'departments/school-of-basic-and-applied-sciences.php',      'icon' => 'microscope',  'desc' => 'B.Sc (Hons), B.Sc IT, M.Sc Physics/Chem/Math'],
            ['label' => 'Faculty of Life Sciences', 'href' => 'departments/school-of-life-sciences.php',                  'icon' => 'leaf',        'desc' => 'Biotech, Microbiology, Botany & Zoology'],
            ['label' => 'Faculty of Commerce',      'href' => 'departments/school-of-commerce.php',                       'icon' => 'coins',       'desc' => 'B.Com, B.Com Corporate & M.Com'],
            ['label' => 'Arts & Humanities',        'href' => 'departments/school-of-arts-and-humanities.php',            'icon' => 'book-open',   'desc' => 'BA (Hons), MA in English, Hindi, Eco, Pol Sci'],
            ['label' => 'Mass Communication',       'href' => 'departments/school-of-journalism-and-mass-communication.php','icon' => 'radio',      'desc' => 'BA, MA in Mass Comm & Journalism'],
            ['label' => 'Fashion & Interior Design','href' => 'departments/school-of-fashion-and-interior-designing.php',  'icon' => 'palette',     'desc' => 'B.Sc, M.Sc & PG Diploma in Design'],
            ['label' => 'Faculty of Library Science','href' => 'departments/school-of-library-science.php',                 'icon' => 'library',     'desc' => 'B.Lib & M.Lib Information Science'],
        ]
    ],
    [
        'label' => 'Courses',
        'href'  => 'courses/',
        'dropdown' => [
            ['label' => 'All Programs Overview',    'href' => 'courses/',                               'icon' => 'grid',            'desc' => 'Explore 90+ UG, PG, Diploma & Ph.D degrees'],
            ['label' => 'Under Graduate (UG)',      'href' => 'courses/under-graduate-programs.php',    'icon' => 'graduation-cap',  'desc' => '4-Year & 3-Year bachelor degree courses'],
            ['label' => 'Post Graduate (PG)',       'href' => 'courses/post-graduate-programs.php',     'icon' => 'book-open',       'desc' => 'Master programs & specialized degrees'],
            ['label' => 'Diploma & Polytechnic',    'href' => 'courses/diploma-programs.php',           'icon' => 'layers',          'desc' => 'Polytechnic Engineering & D.Pharm courses'],
            ['label' => 'Doctoral (Ph.D.) Research','href' => 'courses/doctoral-programs.php',          'icon' => 'sparkles',        'desc' => 'UGC-compliant Ph.D. research fellowships'],
            ['label' => 'Common Courses For All',   'href' => 'courses/common-courses-for-all.php',     'icon' => 'award',           'desc' => 'NEP 2020 foundation & skill enhancement'],
            ['label' => 'B.Tech Engineering',       'href' => 'courses/b-tech.php',                     'icon' => 'cpu',             'desc' => 'CSE, Mining, Civil, Mechanical, Electrical'],
            ['label' => 'Management (BBA & MBA)',   'href' => 'courses/bba.php',                        'icon' => 'briefcase',       'desc' => 'Industry-aligned BBA & MBA leadership'],
            ['label' => 'Sciences (B.Sc & M.Sc)',   'href' => 'courses/b-sc.php',                       'icon' => 'microscope',      'desc' => 'PCM, IT, Biotech & Applied Sciences'],
            ['label' => 'Pharmacy (B.Pharm/D.Pharm)','href' => 'courses/pharmacy.php',                  'icon' => 'heart-pulse',     'desc' => 'PCI approved pharmaceutical degrees'],
            ['label' => 'Legal Studies (LL.B)',     'href' => 'courses/law.php',                        'icon' => 'scale',           'desc' => 'Bar Council of India approved legal degrees'],
            ['label' => 'Master of Social Work',    'href' => 'courses/social-work.php',                 'icon' => 'users',           'desc' => 'Community development & rural social welfare'],
        ]
    ],
    [
        'label' => 'Admissions',
        'href'  => 'admissions/',
        'dropdown' => [
            ['label' => 'Admissions Overview',      'href' => 'admissions/',                            'icon' => 'sparkles',        'desc' => 'Step-by-step process & online application'],
            ['label' => 'Scholarships & Aid',       'href' => 'admissions/scholarship.php',             'icon' => 'award',           'desc' => '100% Merit, E-Kalyan & NSP State schemes'],
            ['label' => 'Examination Cell & Forms', 'href' => 'admissions/examination-forms.php',      'icon' => 'file-text',       'desc' => 'Exam schedules, forms & convocation rules'],
            ['label' => 'Academic Collaborations',  'href' => 'admissions/academic-collaborations.php', 'icon' => 'globe',           'desc' => 'MoUs with research labs & top industries'],
            ['label' => 'Study in India (SII)',     'href' => 'admissions/study-in-india.php',          'icon' => 'landmark',        'desc' => 'Government SII portal for foreign candidates'],
            ['label' => 'International Admissions', 'href' => 'admissions/international-students.php',  'icon' => 'compass',        'desc' => 'NRI / PIO eligibility, visa & global cell'],
            ['label' => 'Anti-Ragging Compliance',  'href' => 'admissions/anti-ragging.php',            'icon' => 'shield-check',    'desc' => 'Zero-tolerance policy & student squad'],
        ]
    ],
    [
        'label' => 'Facilities',
        'href'  => 'facilities/',
        'align' => 'align-right',
        'dropdown' => [
            ['label' => 'Campus Infrastructure',    'href' => 'facilities/',                            'icon' => 'landmark',        'desc' => 'Smart classrooms, Wi-Fi campus & auditoriums'],
            ['label' => 'Central Library',          'href' => 'facilities/library.php',                 'icon' => 'book-open',       'desc' => '50,000+ volumes, DELNET, IEEE & journals'],
            ['label' => 'Student Hostels & Mess',   'href' => 'facilities/hostel.php',                  'icon' => 'home',            'desc' => 'Secure separate boys & girls residences'],
            ['label' => 'Sports & Athletics',       'href' => 'facilities/sports.php',                  'icon' => 'trophy',          'desc' => 'Cricket, football, badminton & gym arenas'],
            ['label' => 'Health & Medical Care',    'href' => 'facilities/health.php',                  'icon' => 'heart-pulse',     'desc' => '24x7 health center, ambulance & doctors'],
            ['label' => 'Transport & Bus Fleet',    'href' => 'facilities/transport.php',               'icon' => 'bus',             'desc' => '08-bus GPS-tracked fleet across Ranchi'],
            ['label' => 'Differently-Abled Support', 'href' => 'facilities/differently-abled.php',      'icon' => 'heart-handshake', 'desc' => 'Ramps, tactile paths & accessible restrooms'],
        ]
    ],
    [
        'label' => 'Placements',
        'href'  => 'placements/',
    ],
    [
        'label' => 'Media & More',
        'href'  => 'media/news.php',
        'align' => 'align-right',
        'dropdown' => [
            ['label' => 'University Events',        'href' => 'media/events.php',                       'icon' => 'calendar',        'desc' => 'Seminars, tech fests, convocation & summits'],
            ['label' => 'Campus Photo Gallery',     'href' => 'media/gallery.php',                      'icon' => 'camera',          'desc' => 'Campus life, labs, sports & ceremonies'],
            ['label' => 'News & Circulars',         'href' => 'media/news.php',                         'icon' => 'newspaper',       'desc' => 'Latest circulars, academic notices & press'],
            ['label' => 'Sushrut Medical Magazine', 'href' => 'media/sushrut-magazine.php',             'icon' => 'book-open',       'desc' => 'Peer-reviewed health & sciences journal'],
            ['label' => 'Research & Innovation',    'href' => 'research.php',                           'icon' => 'microscope',      'desc' => 'Funded research projects, patents & labs'],
            ['label' => 'Contact & Helpline',       'href' => 'contact.php',                            'icon' => 'phone',           'desc' => 'Campus map, admission desk & toll-free info'],
        ]
    ],
];
?>
<header class="sticky top-0 z-50 bg-background/95 backdrop-blur-md border-b border-border shadow-sm">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 h-20 flex items-center justify-between gap-4">
    <!-- Brand Logo -->
    <a href="<?= url('/') ?>" class="flex items-center gap-3 group shrink-0">
      <img src="<?= img('logo.png') ?>" alt="RKDF University" class="h-11 w-auto object-contain transition group-hover:scale-105" />
      <div class="leading-tight">
        <div class="font-serif text-xl text-foreground font-normal tracking-tight">RKDF University</div>
        <div class="text-[10px] tracking-[0.18em] text-muted-foreground uppercase">Education Glorifies Nation</div>
      </div>
    </a>

    <!-- Desktop Nav Links with Interactive Dropdowns (Visible on Desktop) -->
    <nav class="hidden lg:flex items-center gap-4 xl:gap-6 text-sm font-medium">
      <?php foreach ($nav_items as $item): ?>
        <?php if (!empty($item['dropdown'])): ?>
          <!-- Dropdown Parent -->
          <div class="nav-dropdown-wrapper py-6">
            <a href="<?= url($item['href']) ?>" class="text-foreground/85 hover:text-foreground inline-flex items-center gap-1.5 transition py-1<?= nav_class($item['href']) ?>">
              <?= e($item['label']) ?>
              <span class="dropdown-chevron transition-transform duration-200">
                <?= lucide_icon('chevron-down', 'w-3.5 h-3.5 opacity-60') ?>
              </span>
            </a>

            <!-- Dropdown Menu Box -->
            <div class="nav-dropdown-menu <?= $item['align'] ?? '' ?> <?= count($item['dropdown']) > 8 ? 'mega-menu' : '' ?>">
              <div class="nav-dropdown-grid <?= count($item['dropdown']) <= 5 ? 'single-col' : '' ?>">
                <?php foreach ($item['dropdown'] as $sub): ?>
                  <a href="<?= url($sub['href']) ?>" class="nav-dropdown-item">
                    <span class="nav-dropdown-icon">
                      <?= lucide_icon($sub['icon'] ?? 'chevron-right', 'w-4 h-4') ?>
                    </span>
                    <div class="nav-dropdown-info">
                      <div class="nav-dropdown-title"><?= e($sub['label']) ?></div>
                      <div class="nav-dropdown-desc"><?= e($sub['desc']) ?></div>
                    </div>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php else: ?>
          <!-- Regular Link -->
          <a href="<?= url($item['href']) ?>" class="text-foreground/85 hover:text-foreground inline-flex items-center gap-1 transition py-1<?= nav_class($item['href']) ?>">
            <?= e($item['label']) ?>
          </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>

    <!-- Header Actions (Desktop & Mobile) -->
    <div class="flex items-center gap-2 sm:gap-3">
      <a href="<?= url('media/news.php') ?>" aria-label="Search and Notices" class="p-2 rounded-full hover:bg-muted text-foreground transition">
        <?= lucide_icon('search', 'w-4 h-4') ?>
      </a>
      <a href="<?= url('admissions/') ?>" class="hidden sm:inline-flex items-center rounded-full bg-gold text-primary-foreground px-4 lg:px-5 py-2 lg:py-2.5 text-xs lg:text-sm font-medium hover:opacity-90 transition shadow-sm">
        Apply Now
      </a>
      <!-- Mobile Menu Hamburger Button (Only on Mobile and Tablet) -->
      <button
        type="button"
        id="rkdf-mobile-menu-btn"
        aria-label="Toggle Navigation Menu"
        class="lg:hidden inline-flex items-center justify-center p-2 rounded-xl text-foreground hover:bg-muted transition"
      >
        <?= lucide_icon('menu', 'w-6 h-6') ?>
      </button>
    </div>
  </div>
</header>

<!-- ==================== MOBILE NAVIGATION DRAWER (Mobile & Tablet View Only) ==================== -->
<div id="rkdf-mobile-drawer" class="fixed inset-0 z-50 pointer-events-none opacity-0 transition-opacity duration-300 lg:hidden">
  <!-- Overlay Backdrop -->
  <div id="rkdf-mobile-backdrop" class="absolute inset-0 bg-slate-950/60 backdrop-blur-sm"></div>

  <!-- Slide-Over Drawer Content -->
  <div class="absolute inset-y-0 right-0 w-full max-w-sm bg-white shadow-2xl flex flex-col h-full transform translate-x-full transition-transform duration-300 ease-out" id="rkdf-drawer-panel">
    <!-- Drawer Header -->
    <div class="p-5 border-b border-slate-200 flex items-center justify-between bg-slate-50">
      <a href="<?= url('/') ?>" class="flex items-center gap-2.5">
        <img src="<?= img('logo.png') ?>" alt="RKDF University" class="h-9 w-auto object-contain" />
        <div>
          <div class="font-serif text-lg font-bold text-slate-900 leading-none">RKDF University</div>
          <div class="text-[9px] tracking-wider text-slate-500 uppercase mt-0.5">Ranchi, Jharkhand</div>
        </div>
      </a>
      <button
        type="button"
        id="rkdf-mobile-close-btn"
        aria-label="Close Navigation Menu"
        class="p-2 rounded-full text-slate-500 hover:text-slate-900 hover:bg-slate-200 transition"
      >
        <?= lucide_icon('x', 'w-5 h-5') ?>
      </button>
    </div>

    <!-- Quick CTA Header in Drawer -->
    <div class="p-4 bg-gradient-to-r from-slate-900 to-slate-800 text-white flex items-center gap-3">
      <a href="<?= url('admissions/') ?>" class="flex-1 text-center py-2.5 px-4 rounded-xl bg-gold text-slate-950 text-xs font-bold uppercase tracking-wider hover:opacity-90 transition shadow-sm">
        Apply Now 2025–26
      </a>
      <a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>" class="p-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white transition flex items-center justify-center">
        <?= lucide_icon('phone', 'w-4 h-4 text-gold') ?>
      </a>
    </div>

    <!-- Drawer Navigation Links (Scrollable Accordion) -->
    <div class="flex-1 overflow-y-auto p-4 space-y-1 divide-y divide-slate-100">
      <?php foreach ($nav_items as $index => $item): ?>
        <div class="py-2">
          <?php if (!empty($item['dropdown'])): ?>
            <details class="group">
              <summary class="flex items-center justify-between py-2 text-sm font-semibold text-slate-900 cursor-pointer list-none select-none hover:text-amber-600 transition">
                <span><?= e($item['label']) ?></span>
                <span class="transform transition-transform duration-200 group-open:rotate-180 text-slate-400">
                  <?= lucide_icon('chevron-down', 'w-4 h-4') ?>
                </span>
              </summary>
              <div class="mt-2 pl-2 space-y-1 border-l-2 border-slate-200 ml-1">
                <a href="<?= url($item['href']) ?>" class="block py-1.5 px-2 text-xs font-bold text-amber-600 hover:bg-amber-50 rounded-lg transition">
                  <?= e($item['label']) ?> Overview &rarr;
                </a>
                <?php foreach ($item['dropdown'] as $sub): ?>
                  <a href="<?= url($sub['href']) ?>" class="flex items-center gap-2 py-2 px-2 text-xs text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-lg transition">
                    <span class="text-amber-600 shrink-0">
                      <?= lucide_icon($sub['icon'] ?? 'chevron-right', 'w-3.5 h-3.5') ?>
                    </span>
                    <span class="truncate"><?= e($sub['label']) ?></span>
                  </a>
                <?php endforeach; ?>
              </div>
            </details>
          <?php else: ?>
            <a href="<?= url($item['href']) ?>" class="flex items-center gap-2.5 py-2 text-sm font-semibold text-slate-900 hover:text-amber-600 transition"<?= !empty($item['is_icon']) ? ' target="_blank"' : '' ?>>
              <?php if (!empty($item['icon'])): ?>
                <?= lucide_icon($item['icon'], 'w-4 h-4 text-amber-600 shrink-0') ?>
              <?php endif; ?>
              <span><?= !empty($item['label']) ? e($item['label']) : (!empty($item['title']) ? e($item['title']) : 'Email Webmail') ?></span>
            </a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Drawer Footer Links -->
    <div class="p-4 border-t border-slate-200 bg-slate-50 text-xs text-slate-600 space-y-2">
      <div class="flex items-center justify-between text-slate-500">
        <a href="<?= url('about/digilocker.php') ?>" class="hover:text-amber-600 transition">DigiLocker / ABC</a>
        <span>·</span>
        <a href="<?= url('admissions/scholarship.php') ?>" class="hover:text-amber-600 transition">Scholarships</a>
        <span>·</span>
        <a href="<?= url('contact.php') ?>" class="hover:text-amber-600 font-semibold transition">Contact Us</a>
      </div>
      <div class="text-center text-[11px] text-slate-400 pt-1">
        Toll Free: <?= SITE_PHONE ?>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const menuBtn = document.getElementById('rkdf-mobile-menu-btn');
  const closeBtn = document.getElementById('rkdf-mobile-close-btn');
  const drawer = document.getElementById('rkdf-mobile-drawer');
  const backdrop = document.getElementById('rkdf-mobile-backdrop');
  const panel = document.getElementById('rkdf-drawer-panel');

  function openDrawer() {
    if (!drawer) return;
    drawer.classList.remove('pointer-events-none', 'opacity-0');
    drawer.classList.add('pointer-events-auto', 'opacity-100');
    if (panel) {
      panel.classList.remove('translate-x-full');
      panel.classList.add('translate-x-0');
    }
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    if (!drawer) return;
    drawer.classList.remove('pointer-events-auto', 'opacity-100');
    drawer.classList.add('pointer-events-none', 'opacity-0');
    if (panel) {
      panel.classList.remove('translate-x-0');
      panel.classList.add('translate-x-full');
    }
    document.body.style.overflow = '';
  }

  if (menuBtn) menuBtn.addEventListener('click', openDrawer);
  if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
  if (backdrop) backdrop.addEventListener('click', closeDrawer);
});
</script>
