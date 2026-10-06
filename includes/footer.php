<?php
/**
 * RKDF University — Footer Include
 */
$footer_sections = [
    'Academics & Courses' => [
        ['label' => 'Academic Faculties',       'href' => 'departments/'],
        ['label' => 'Under Graduate (UG)',      'href' => 'courses/under-graduate-programs.php'],
        ['label' => 'Post Graduate (PG)',       'href' => 'courses/post-graduate-programs.php'],
        ['label' => 'Diploma Programs',         'href' => 'courses/diploma-programs.php'],
        ['label' => 'Doctoral (Ph.D.)',         'href' => 'courses/doctoral-programs.php'],
        ['label' => 'Common Foundation Courses','href' => 'courses/common-courses-for-all.php'],
        ['label' => 'Engineering (B.Tech)',    'href' => 'courses/b-tech.php'],
        ['label' => 'Pharmacy (B.Pharm)',       'href' => 'courses/pharmacy.php'],
    ],
    'Admissions & Aid' => [
        ['label' => 'Admission Procedure',      'href' => 'admissions/'],
        ['label' => 'Scholarships & Aid',       'href' => 'admissions/scholarship.php'],
        ['label' => 'Academic Collaborations',  'href' => 'admissions/academic-collaborations.php'],
        ['label' => 'Examination Cell & Forms', 'href' => 'admissions/examination-forms.php'],
        ['label' => 'Study in India (SII)',     'href' => 'admissions/study-in-india.php'],
        ['label' => 'International Admissions', 'href' => 'admissions/international-students.php'],
        ['label' => 'Anti-Ragging Squad',       'href' => 'admissions/anti-ragging.php'],
        ['label' => 'Training & Placements',    'href' => 'placements/'],
    ],
    'Campus Facilities' => [
        ['label' => 'Campus Infrastructure',    'href' => 'facilities/'],
        ['label' => 'Central Library',          'href' => 'facilities/library.php'],
        ['label' => 'Student Hostels & Mess',   'href' => 'facilities/hostel.php'],
        ['label' => 'Sports & Athletics',       'href' => 'facilities/sports.php'],
        ['label' => 'Health & Medical Care',    'href' => 'facilities/health.php'],
        ['label' => 'Bus Fleet Transport',      'href' => 'facilities/transport.php'],
        ['label' => 'Differently-Abled Support','href' => 'facilities/differently-abled.php'],
        ['label' => 'Photo Gallery',            'href' => 'media/gallery.php'],
    ],
    'Governance & Links' => [
        ['label' => 'Career @ RKDF',            'href' => 'about/career.php'],
        ['label' => 'Alumni Association',       'href' => 'about/alumni-committee.php'],
        ['label' => 'ABC / DigiLocker',         'href' => 'about/digilocker.php'],
        ['label' => 'RTI Proactive Cell',       'href' => 'about/rti.php'],
        ['label' => 'Annual Audit Reports',     'href' => 'about/annual-reports.php'],
        ['label' => 'Sushrut Medical Magazine', 'href' => 'media/sushrut-magazine.php'],
        ['label' => 'University Leadership',    'href' => 'governance/chancellor.php'],
        ['label' => 'Contact & Helpdesk',       'href' => 'contact.php'],
    ],
];

$social_icons = [
    ['icon' => 'facebook',  'href' => 'https://facebook.com'],
    ['icon' => 'twitter',   'href' => 'https://twitter.com'],
    ['icon' => 'instagram', 'href' => 'https://instagram.com'],
    ['icon' => 'linkedin',  'href' => 'https://linkedin.com'],
    ['icon' => 'youtube',   'href' => 'https://youtube.com'],
];
?>
<footer class="bg-brand text-brand-foreground">
  <div class="mx-auto max-w-7xl px-6 pt-20 pb-10">
    <!-- Newsletter Card -->
    <div class="mb-16 grid items-center gap-8 rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur lg:grid-cols-[1.5fr_1fr] lg:p-12">
      <div>
        <h3 class="font-serif text-3xl lg:text-4xl font-normal">Stay in the loop with RKDF University.</h3>
        <p class="mt-3 max-w-xl text-sm text-brand-foreground/75">
          Admissions updates, research highlights, events, and notices — straight to your inbox.
        </p>
      </div>
      <form class="flex flex-col gap-3 sm:flex-row" onsubmit="event.preventDefault(); alert('Thank you for subscribing!');">
        <input
          type="email"
          required
          placeholder="you@email.com"
          aria-label="Email address"
          class="h-12 w-full rounded-xl border border-white/20 bg-white/10 px-3 text-sm text-brand-foreground placeholder:text-brand-foreground/50 focus:outline-none focus:ring-1 focus:ring-gold"
        />
        <button
          type="submit"
          class="h-12 rounded-md bg-gold px-6 text-sm font-medium text-primary-foreground hover:opacity-90 transition shrink-0"
        >
          Subscribe
        </button>
      </form>
    </div>

    <!-- Main Footer Links Grid -->
    <div class="grid gap-12 lg:grid-cols-[1.4fr_repeat(4,1fr)]">
      <div>
        <a href="<?= url('/') ?>" class="flex items-center gap-3">
          <img src="<?= img('logo.png') ?>" alt="RKDF University" class="h-11 w-auto object-contain" />
          <span class="font-serif text-xl font-normal">RKDF University</span>
        </a>
        <p class="mt-5 max-w-sm text-sm text-brand-foreground/75">
          A multidisciplinary research university committed to academic excellence, innovation and shaping leaders for a global future.
        </p>
        <div class="mt-6 space-y-2 text-sm text-brand-foreground/80">
          <p class="flex items-start gap-2">
            <?= lucide_icon('map-pin', 'mt-0.5 h-4 w-4 shrink-0') ?>
            <?= SITE_ADDRESS ?>
          </p>
          <p class="flex items-center gap-2">
            <?= lucide_icon('phone', 'h-4 w-4 shrink-0') ?>
            <?= SITE_PHONE ?>
          </p>
          <p class="flex items-center gap-2">
            <?= lucide_icon('mail', 'h-4 w-4 shrink-0') ?>
            <?= SITE_EMAIL ?>
          </p>
        </div>
        <div class="mt-6 flex gap-2">
          <?php foreach ($social_icons as $soc): ?>
            <a href="<?= e($soc['href']) ?>" target="_blank" rel="noopener" aria-label="Social link" class="grid h-9 w-9 place-items-center rounded-full border border-white/15 transition hover:bg-gold hover:text-primary-foreground">
              <?= lucide_icon($soc['icon'], 'h-4 w-4') ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <?php foreach ($footer_sections as $title => $links): ?>
        <div>
          <h4 class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-gold"><?= e($title) ?></h4>
          <ul class="space-y-2.5 text-sm text-brand-foreground/80">
            <?php foreach ($links as $link): ?>
              <li>
                <a href="<?= url($link['href']) ?>" class="transition hover:text-gold"><?= e($link['label']) ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Copyright & Legal -->
    <div class="mt-16 flex flex-col items-start justify-between gap-4 border-t border-white/10 pt-8 text-xs text-brand-foreground/60 sm:flex-row sm:items-center">
      <p>© <?= date('Y') ?> RKDF University. All rights reserved.</p>
      <div class="flex flex-wrap gap-5">
        <a href="<?= url('about/privacy-policy.php') ?>" class="hover:text-gold transition">Privacy Policy</a>
        <a href="<?= url('about/terms-conditions.php') ?>" class="hover:text-gold transition">Terms of Service</a>
        <a href="<?= url('about/rti.php') ?>" class="hover:text-gold transition">RTI Cell</a>
        <a href="<?= url('contact.php') ?>" class="hover:text-gold transition">Contact & Helpline</a>
      </div>
    </div>
  </div>
</footer>

<script src="<?= asset('script.js') ?>"></script>
</body>
</html>
