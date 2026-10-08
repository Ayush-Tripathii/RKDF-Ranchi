<?php
/**
 * RKDF University — Master Navigation Header with Categorized Dropdowns & Mobile Drawer
 */
$nav_items = [
    [
        'label' => 'About',
        'href'  => 'about/',
        'align' => '',
        'footer_text' => 'Established under Jharkhand Act 07, 2018 · UGC Recognized',
        'sections' => [
            [
                'heading' => 'University & Approvals',
                'icon'    => 'landmark',
                'links'   => [
                    ['label' => 'About University',         'desc' => 'Legacy, campus, vision & leadership',     'href' => 'about/',                          'icon' => 'landmark'],
                    ['label' => 'Vision & Mission',         'desc' => 'Core philosophy & guiding principles',    'href' => 'about/vision-and-mission.php',     'icon' => 'globe'],
                    ['label' => 'Government Recognitions', 'desc' => 'UGC, AICTE, PCI & BCI approvals',        'href' => 'about/government-recognition.php', 'icon' => 'scale'],
                    ['label' => 'Accreditations & NAAC',    'desc' => 'NAAC grade, ISO & quality standards',    'href' => 'about/accreditations.php',       'icon' => 'award'],
                    ['label' => 'DigiLocker & ABC ID',       'desc' => 'Academic Bank of Credits digital portal','href' => 'about/digilocker.php',            'icon' => 'shield-check'],
                ]
            ],
            [
                'heading' => 'Leadership & Governance',
                'icon'    => 'shield-check',
                'links'   => [
                    ['label' => "Chancellor's Message",     'desc' => 'Visionary address from leadership',       'href' => 'about/chancellor.php',            'icon' => 'user-check'],
                    ['label' => 'University Deans & Officers','desc' => 'Academic deans & faculty leadership',   'href' => 'deans/',                        'icon' => 'users'],
                    ['label' => 'Statutory Committees (18)','desc' => 'IQAC, Anti-Ragging, ICC & Cells',        'href' => 'committees/',                   'icon' => 'shield-check'],
                    ['label' => 'Mandatory UGC Disclosure', 'desc' => 'Public notices, compliance & RTI',       'href' => 'about/mandatory-disclosure.php',   'icon' => 'file-text'],
                    ['label' => 'Careers @ RKDF',           'desc' => 'Faculty & administrative job openings',  'href' => 'about/career.php',                'icon' => 'briefcase'],
                ]
            ],
        ]
    ],
    [
        'label' => 'Academics',
        'href'  => 'departments/',
        'align' => '',
        'footer_text' => '12 Specialized Schools & Faculties across Science, Law, Engg & Mgmt',
        'sections' => [
            [
                'heading' => 'Engineering, IT & Sciences',
                'icon'    => 'cpu',
                'links'   => [
                    ['label' => 'Faculty of Engineering & Tech', 'desc' => 'B.Tech, M.Tech & Polytechnic Diplomas', 'href' => 'departments/school-engineering.php',                     'icon' => 'cpu'],
                    ['label' => 'Computer Science & IT',         'desc' => 'BCA, MCA, B.Sc IT & Data Science',    'href' => 'departments/school-of-information-technology.php',     'icon' => 'laptop'],
                    ['label' => 'Basic & Applied Sciences',      'desc' => 'Physics, Chemistry, Maths & B.Sc',     'href' => 'departments/school-of-basic-and-applied-sciences.php',  'icon' => 'atom'],
                    ['label' => 'Life Sciences & Biotechnology',  'desc' => 'Botany, Zoology & Biotechnology',      'href' => 'departments/school-of-life-sciences.php',              'icon' => 'leaf'],
                    ['label' => 'Institute of Pharmacy (PCI)',   'desc' => 'B.Pharm, D.Pharm & Master of Health',  'href' => 'departments/school-pharmacy.php',                        'icon' => 'pill'],
                ]
            ],
            [
                'heading' => 'Management, Law & Arts',
                'icon'    => 'briefcase',
                'links'   => [
                    ['label' => 'Faculty of Management Studies', 'desc' => 'MBA Dual Spec, BBA, BMS & Logistics', 'href' => 'departments/school-management.php',                      'icon' => 'briefcase'],
                    ['label' => 'Faculty of Commerce',           'desc' => 'B.Com, M.Com & Corporate Finance',     'href' => 'departments/school-of-commerce.php',                   'icon' => 'coins'],
                    ['label' => 'Faculty of Law & Legal Studies', 'desc' => 'BA LL.B, BBA LL.B, LL.B & LL.M',       'href' => 'departments/school-law.php',                             'icon' => 'scale'],
                    ['label' => 'Arts & Humanities',             'desc' => 'B.A., M.A. in English, Pol Sci & Hist', 'href' => 'departments/school-of-arts-and-humanities.php',        'icon' => 'book-open'],
                    ['label' => 'Journalism & Design',           'desc' => 'BJMC Mass Comm, Fashion & Interiors',  'href' => 'departments/school-of-journalism-and-mass-communication.php','icon' => 'palette'],
                ]
            ],
        ]
    ],
    [
        'label' => 'Courses',
        'href'  => 'courses/',
        'align' => '',
        'footer_text' => '106+ Degree, Master & Diploma Programs for Academic Year 2026–27',
        'sections' => [
            [
                'heading' => 'Browse by Level (106+ Programs)',
                'icon'    => 'layers',
                'links'   => [
                    ['label' => 'Master Course Directory',        'desc' => 'Search & filter all 106+ degrees',        'href' => 'courses/',                            'icon' => 'layers'],
                    ['label' => 'Undergraduate Degrees (UG)',   'desc' => 'B.Tech, BCA, BBA, B.Sc, B.Pharm, LL.B',    'href' => 'courses/under-graduate-programs.php',  'icon' => 'graduation-cap'],
                    ['label' => 'Postgraduate Degrees (PG)',    'desc' => 'MBA, MCA, M.Tech, M.Sc, M.Com, LL.M',      'href' => 'courses/post-graduate-programs.php',   'icon' => 'award'],
                    ['label' => 'Polytechnic & Diplomas',        'desc' => '3-Year Polytechnic & Professional Dips',   'href' => 'courses/diploma-programs.php',         'icon' => 'wrench'],
                    ['label' => 'Doctoral (Ph.D.) Research',     'desc' => 'Ph.D. Fellowships across all domains',      'href' => 'courses/doctoral-programs.php',        'icon' => 'microscope'],
                ]
            ],
            [
                'heading' => 'Popular Degree Tracks',
                'icon'    => 'sparkles',
                'links'   => [
                    ['label' => 'B.Tech (CSE, Mining, Civil, ME)', 'desc' => 'Core & Emerging Engineering Tracks',       'href' => 'courses/b-tech.php',               'icon' => 'cpu'],
                    ['label' => 'Management (MBA & BBA)',        'desc' => 'Marketing, Finance, HR & Logistics',       'href' => 'courses/mba.php',                  'icon' => 'briefcase'],
                    ['label' => 'Computer Apps (BCA & MCA)',     'desc' => 'AI, Cloud, Fullstack & Cyber Security',    'href' => 'courses/mca.php',                  'icon' => 'laptop'],
                    ['label' => 'Pharmacy (B.Pharm / D.Pharm)',  'desc' => 'PCI-approved 4-Yr & 2-Yr programs',         'href' => 'courses/pharmacy.php',             'icon' => 'pill'],
                    ['label' => 'Law (LL.B, BA LL.B, LL.M)',      'desc' => '5-Yr Integrated & 3-Yr Professional',       'href' => 'courses/law.php',                  'icon' => 'scale'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Admissions',
        'href'  => 'admissions/',
        'align' => 'align-center',
        'footer_text' => 'Direct Admission & Counseling Desk: +91 7091168777',
        'sections' => [
            [
                'heading' => 'Admission & Aid 2026–27',
                'icon'    => 'sparkles',
                'links'   => [
                    ['label' => 'Admissions Overview',           'desc' => 'Eligibility, fee structures & prospectus', 'href' => 'admissions/',                             'icon' => 'sparkles'],
                    ['label' => 'Step-by-Step Procedure',        'desc' => 'Online application & counseling guide',    'href' => 'admissions/admission-procedure.php',      'icon' => 'clipboard-check'],
                    ['label' => 'Scholarships & E-Kalyan Aid',   'desc' => 'Govt schemes, merit aid & waivers',        'href' => 'admissions/scholarship.php',              'icon' => 'award'],
                    ['label' => 'Education Loan Facility',       'desc' => 'Easy student financing with partner banks','href' => 'academics/financial-aid-loan-facility.php', 'icon' => 'landmark'],
                    ['label' => 'Examination Cell & Forms',      'desc' => 'Admit cards, timetables & exam notices',   'href' => 'admissions/examination-forms.php',       'icon' => 'file-text'],
                ]
            ],
            [
                'heading' => 'Outreach & Student Welfare',
                'icon'    => 'globe',
                'links'   => [
                    ['label' => 'Study in India (SII Portal)',   'desc' => 'International student desk & guidelines',  'href' => 'study-in-india/',                         'icon' => 'globe'],
                    ['label' => 'Students from Jharkhand',       'desc' => 'Special aid for all 13 Jharkhand districts','href' => 'students-from-jharkhand/',       'icon' => 'map-pin'],
                    ['label' => 'Academic Collaborations & MoUs','desc' => 'National & global university tie-ups',     'href' => 'academic-collaborations.php',             'icon' => 'handshake'],
                    ['label' => 'Anti-Ragging Compliance Cell',  'desc' => 'UGC zero-tolerance anti-ragging squad',    'href' => 'admissions/anti-ragging.php',             'icon' => 'shield-check'],
                    ['label' => 'Student Hostels & Living',      'desc' => 'Secure on-campus boys & girls hostels',    'href' => 'academics/hostel.php',                   'icon' => 'home'],
                ]
            ]
        ]
    ],
    [
        'label' => 'Facilities',
        'href'  => 'facilities/',
        'align' => 'align-right',
        'footer_text' => 'Lush Green Smart Campus on Argora Bypass Road, Ranchi',
        'sections' => [
            [
                'heading' => 'Campus & Infrastructure',
                'icon'    => 'landmark',
                'links'   => [
                    ['label' => 'Campus Infrastructure',         'desc' => 'Smart classrooms, auditorium & labs',      'href' => 'academics/infrastructure-resources.php',  'icon' => 'landmark'],
                    ['label' => 'Central Library & E-Journals',  'desc' => '50,000+ volumes, DELNET & digital hub',    'href' => 'academics/library.php',                  'icon' => 'book-open'],
                    ['label' => 'Student Hostels',               'desc' => 'Wi-Fi enabled secure hostel amenities',     'href' => 'academics/hostel.php',                   'icon' => 'home'],
                    ['label' => 'Transport Fleet',               'desc' => 'GPS-enabled campus buses across Ranchi',   'href' => 'academics/transport.php',                'icon' => 'bus'],
                ]
            ],
            [
                'heading' => 'Health & Sports Welfare',
                'icon'    => 'heart-pulse',
                'links'   => [
                    ['label' => '24x7 Health Center & Medical',  'desc' => 'Doctor on call, first aid & ambulance',    'href' => 'academics/health-facilities.php',         'icon' => 'heart-pulse'],
                    ['label' => 'Sports Complex & Gymnasium',     'desc' => 'Cricket ground, football, courts & gym',   'href' => 'academics/sports-facilities.php',         'icon' => 'trophy'],
                    ['label' => 'Differently-Abled Facilities',   'desc' => 'Ramps, accessible lifts & tactile paths',  'href' => 'academics/facilities-for-differently-abled.php','icon' => 'accessibility'],
                    ['label' => 'Green Eco-Campus',              'desc' => 'Solar power, lush gardens & clean energy', 'href' => 'facilities/',                             'icon' => 'leaf'],
                ]
            ]
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
        'footer_text' => 'Stay connected with RKDF University life, events & circulars',
        'sections' => [
            [
                'heading' => 'Campus Happenings',
                'icon'    => 'newspaper',
                'links'   => [
                    ['label' => 'University News & Circulars',   'desc' => 'Latest notifications & press releases',     'href' => 'media/news.php',                          'icon' => 'newspaper'],
                    ['label' => 'Events & Convocations',         'desc' => 'National seminars, festivals & summits',    'href' => 'media/events.php',                        'icon' => 'calendar'],
                    ['label' => 'Photo & Video Gallery',         'desc' => 'High-res photos of university life',       'href' => 'media/gallery.php',                       'icon' => 'camera'],
                    ['label' => 'Sushrut Medical Magazine',      'desc' => 'University scientific & health journal',    'href' => 'media/sushrut-magazine.php',              'icon' => 'book-open'],
                ]
            ],
            [
                'heading' => 'Research & Portals',
                'icon'    => 'microscope',
                'links'   => [
                    ['label' => 'Research & Innovation Cell',     'desc' => 'Patents, publications & funded projects',  'href' => 'research.php',                            'icon' => 'microscope'],
                    ['label' => 'ABC Video Guides & Help',       'desc' => 'Step-by-step ABC ID account setup tutorials','href' => 'academics/academic-bank-of-credits-abc-videos.php', 'icon' => 'video'],
                    ['label' => 'Alumni Network Association',    'desc' => 'Global alumni connect & registrations',    'href' => 'about/alumni-committee.php',              'icon' => 'users'],
                ]
            ]
        ]
    ],
];
?>

<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-xs">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
    <!-- Official High-Resolution University Brand Logo -->
    <a href="<?= url('/') ?>" class="flex items-center shrink-0 group py-1">
      <img
        src="<?= img('RKDF-LOGO.jpg') ?>"
        alt="RKDF University Ranchi"
        class="h-12 md:h-13 lg:h-14 w-auto object-contain transition group-hover:opacity-95"
      />
    </a>

    <!-- Desktop Navigation Links with Categorized Flyout Dropdowns -->
    <nav class="hidden lg:flex items-center gap-5 xl:gap-7 text-[14px] font-semibold">
      <?php foreach ($nav_items as $item): ?>
        <?php if (!empty($item['sections'])): ?>
          <!-- Categorized Mega Dropdown Parent -->
          <div class="nav-dropdown-wrapper py-6">
            <a href="<?= url($item['href']) ?>" class="text-slate-800 hover:text-amber-600 inline-flex items-center gap-1 transition py-1 text-[14px] font-semibold<?= nav_class($item['href']) ?>">
              <span><?= e($item['label']) ?></span>
              <span class="dropdown-chevron transition-transform duration-200 opacity-70">
                <?= lucide_icon('chevron-down', 'w-3.5 h-3.5') ?>
              </span>
            </a>

            <!-- Categorized Dropdown Card -->
            <div class="nav-dropdown-menu <?= $item['align'] ?? '' ?>">
              <div class="nav-cat-grid">
                <?php foreach ($item['sections'] as $sec): ?>
                  <div class="nav-cat-column">
                    <div class="nav-cat-header">
                      <?= lucide_icon($sec['icon'] ?? 'layers', 'w-3 h-3 text-amber-600 shrink-0') ?>
                      <span><?= e($sec['heading']) ?></span>
                    </div>
                    <?php foreach ($sec['links'] as $sub): ?>
                      <a href="<?= url($sub['href']) ?>" class="nav-dropdown-item group/item">
                        <span class="nav-dropdown-icon">
                          <?= lucide_icon($sub['icon'] ?? 'chevron-right', 'w-3.5 h-3.5') ?>
                        </span>
                        <div class="nav-dropdown-info">
                          <div class="nav-dropdown-title"><?= e($sub['label']) ?></div>
                          <div class="nav-dropdown-desc"><?= e($sub['desc']) ?></div>
                        </div>
                      </a>
                    <?php endforeach; ?>
                  </div>
                <?php endforeach; ?>
              </div>

              <!-- Dropdown Footer Strip -->
              <?php if (!empty($item['footer_text'])): ?>
                <div class="mt-3 pt-2.5 border-t border-slate-100 flex items-center justify-between text-[11px] font-medium text-slate-500 bg-slate-50/80 -mx-4 -mb-4 px-4 py-2.5 rounded-b-[17px]">
                  <span class="truncate pr-2"><?= e($item['footer_text']) ?></span>
                  <a href="<?= url($item['href']) ?>" class="text-amber-600 hover:text-amber-700 font-bold shrink-0 inline-flex items-center gap-0.5">
                    Explore &rarr;
                  </a>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php else: ?>
          <!-- Regular Single Link (e.g. Placements) -->
          <a href="<?= url($item['href']) ?>" class="text-slate-800 hover:text-amber-600 inline-flex items-center gap-1 transition py-1 text-[14px] font-semibold<?= nav_class($item['href']) ?>">
            <?= e($item['label']) ?>
          </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>

    <!-- Header Action Buttons (Contact Button + Apply Now CTA + Mobile Hamburger) -->
    <div class="flex items-center gap-2.5 sm:gap-3 shrink-0">
      <a href="<?= url('contact.php') ?>" class="inline-flex items-center gap-1.5 rounded-full border border-slate-300 bg-slate-50 hover:bg-slate-100 hover:border-amber-500 text-slate-800 hover:text-amber-700 px-3.5 sm:px-4 py-2 text-xs font-bold transition shadow-xs">
        <?= lucide_icon('phone', 'w-3.5 h-3.5 text-amber-600 shrink-0') ?>
        <span>Contact</span>
      </a>
      <a href="<?= url('admissions/') ?>" class="inline-flex items-center gap-1.5 rounded-full bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-extrabold px-4 sm:px-5 py-2 text-xs sm:text-sm hover:shadow-md transition shadow-xs">
        <span>Apply Now</span>
        <?= lucide_icon('arrow-right', 'w-3.5 h-3.5 text-slate-950 shrink-0') ?>
      </a>
      <!-- Mobile Menu Hamburger Button (Hidden on Laptops and Big Screens) -->
      <button
        type="button"
        id="rkdf-mobile-menu-btn"
        aria-label="Toggle Navigation Menu"
        class="lg:hidden inline-flex items-center justify-center p-2 rounded-xl text-slate-800 hover:bg-slate-100 transition"
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
    <!-- Drawer Header with Official Logo -->
    <div class="p-4 border-b border-slate-200 flex items-center justify-between bg-slate-50">
      <a href="<?= url('/') ?>" class="flex items-center">
        <img src="<?= img('RKDF-LOGO.jpg') ?>" alt="RKDF University" class="h-10 w-auto object-contain" />
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
      <a href="<?= url('admissions/') ?>" class="flex-1 text-center py-2.5 px-4 rounded-xl bg-amber-500 text-slate-950 text-xs font-extrabold uppercase tracking-wider hover:bg-amber-400 transition shadow-sm">
        Apply Now 2026–27
      </a>
      <a href="<?= url('contact.php') ?>" class="p-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white transition flex items-center justify-center" aria-label="Contact">
        <?= lucide_icon('phone', 'w-4 h-4 text-amber-400') ?>
      </a>
    </div>

    <!-- Drawer Navigation Links (Scrollable Accordion) -->
    <div class="flex-1 overflow-y-auto p-4 space-y-1 divide-y divide-slate-100">
      <?php foreach ($nav_items as $index => $item): ?>
        <div class="py-2">
          <?php if (!empty($item['sections'])): ?>
            <details class="group">
              <summary class="flex items-center justify-between py-2 text-sm font-semibold text-slate-900 cursor-pointer list-none select-none hover:text-amber-600 transition">
                <span><?= e($item['label']) ?></span>
                <span class="transform transition-transform duration-200 group-open:rotate-180 text-slate-400">
                  <?= lucide_icon('chevron-down', 'w-4 h-4') ?>
                </span>
              </summary>
              <div class="mt-2 pl-2 space-y-3 border-l-2 border-slate-200 ml-1">
                <a href="<?= url($item['href']) ?>" class="block py-1.5 px-2 text-xs font-bold text-amber-600 hover:bg-amber-50 rounded-lg transition">
                  <?= e($item['label']) ?> Overview &rarr;
                </a>
                <?php foreach ($item['sections'] as $sec): ?>
                  <div class="space-y-1">
                    <div class="text-[10px] font-bold uppercase tracking-wider text-slate-400 px-2 pt-1 pb-0.5 flex items-center gap-1">
                      <?= lucide_icon($sec['icon'] ?? 'chevron-right', 'w-3 h-3 text-amber-600 shrink-0') ?>
                      <span><?= e($sec['heading']) ?></span>
                    </div>
                    <?php foreach ($sec['links'] as $sub): ?>
                      <a href="<?= url($sub['href']) ?>" class="flex items-start gap-2 py-1.5 px-2 text-xs text-slate-700 hover:text-slate-900 hover:bg-slate-100 rounded-lg transition">
                        <span class="text-amber-600 shrink-0 mt-0.5">
                          <?= lucide_icon($sub['icon'] ?? 'chevron-right', 'w-3.5 h-3.5') ?>
                        </span>
                        <div>
                          <div class="font-medium text-slate-800"><?= e($sub['label']) ?></div>
                          <div class="text-[10px] text-slate-500 leading-tight"><?= e($sub['desc']) ?></div>
                        </div>
                      </a>
                    <?php endforeach; ?>
                  </div>
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
        <a href="<?= url('contact.php') ?>" class="hover:text-amber-600 transition">Contact Us</a>
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
