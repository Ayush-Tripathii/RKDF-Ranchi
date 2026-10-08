/* ============================================================
   RKDF University — JavaScript
   Navbar scroll, mobile menu, scroll reveal, gallery filter
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

  /* ---- Sticky Navbar Shadow on Scroll ---- */
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 40) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  /* ---- Mobile Drawer Open & Close ---- */
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileDrawer = document.getElementById('mobile-drawer');
  const mobileDrawerClose = document.getElementById('mobile-drawer-close');
  const mobileDrawerBackdrop = document.getElementById('mobile-drawer-backdrop');

  if (mobileMenuBtn && mobileDrawer) {
    mobileMenuBtn.addEventListener('click', function () {
      mobileDrawer.classList.add('open');
      document.body.style.overflow = 'hidden';
    });
  }

  function closeMobileDrawer() {
    if (mobileDrawer) {
      mobileDrawer.classList.remove('open');
      document.body.style.overflow = '';
    }
  }

  if (mobileDrawerClose) {
    mobileDrawerClose.addEventListener('click', closeMobileDrawer);
  }

  if (mobileDrawerBackdrop) {
    mobileDrawerBackdrop.addEventListener('click', closeMobileDrawer);
  }

  /* ---- Dropdown Click Toggle & Outside Click ---- */
  const dropdownParents = document.querySelectorAll('.nav-dropdown-wrapper');
  dropdownParents.forEach(function (dp) {
    const trigger = dp.querySelector('a, button');
    if (trigger) {
      trigger.addEventListener('click', function (e) {
        if (window.innerWidth < 1024 || dp.querySelector('.nav-dropdown-menu')) {
          const wasActive = dp.classList.contains('active-menu');
          dropdownParents.forEach(function (other) { other.classList.remove('active-menu'); });
          if (!wasActive) {
            dp.classList.add('active-menu');
          }
        }
      });
    }
  });

  document.addEventListener('click', function (e) {
    if (!e.target.closest('.nav-dropdown-wrapper')) {
      dropdownParents.forEach(function (dp) { dp.classList.remove('active-menu'); });
    }
  });

  /* ---- Close mobile nav on link click ---- */
  navLinks.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
      navLinks.classList.remove('mobile-open');
    });
  });

  /* ---- Scroll Reveal Animation ---- */
  const revealEls = document.querySelectorAll(
    '.about-content, .about-image, ' +
    '.school-card, .r-stat-card, .research-content, ' +
    '.news-card, .notice-item, .event-card, ' +
    '.alumni-card, .gallery-item, .p-stat'
  );
  revealEls.forEach(function (el) { el.classList.add('reveal'); });

  const observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12 }
  );
  revealEls.forEach(function (el) { observer.observe(el); });

  /* ---- Stagger school cards ---- */
  document.querySelectorAll('.school-card').forEach(function (card, i) {
    card.style.transitionDelay = (i * 0.06) + 's';
  });

  /* ---- Newsletter form ---- */
  const newsletterForm = document.getElementById('newsletter-form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const emailInput = document.getElementById('newsletter-email');
      const btn = document.getElementById('newsletter-submit');
      if (emailInput.value) {
        btn.textContent = 'Subscribed! ✓';
        btn.style.background = '#16a34a';
        emailInput.value = '';
        setTimeout(function () {
          btn.innerHTML = 'Subscribe <i class="fa-solid fa-arrow-right"></i>';
          btn.style.background = '';
        }, 3000);
      }
    });
  }

  /* ---- Active nav link on scroll ---- */
  const sections = document.querySelectorAll('section[id]');
  const navItems = document.querySelectorAll('.nav-links a');

  window.addEventListener('scroll', function () {
    let current = '';
    sections.forEach(function (section) {
      const sectionTop = section.offsetTop - 120;
      if (window.scrollY >= sectionTop) {
        current = section.getAttribute('id');
      }
    });
    navItems.forEach(function (link) {
      link.style.color = '';
      link.style.fontWeight = '';
      const href = link.getAttribute('href');
      if (href && href.includes('#' + current)) {
        link.style.color = 'var(--blue-primary)';
        link.style.fontWeight = '700';
      }
    });
  });

  /* ---- Counter animation for stats ---- */
  function animateCounter(el) {
    const target = parseFloat(el.dataset.target);
    const prefix = el.dataset.prefix || '';
    const suffix = el.dataset.suffix || '';
    const duration = 1800;
    const step = 16;
    const steps = duration / step;
    const increment = target / steps;
    let current = 0;

    const timer = setInterval(function () {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      const display = Number.isInteger(target)
        ? Math.floor(current).toLocaleString('en-IN')
        : current.toFixed(1);
      el.textContent = prefix + display + suffix;
    }, step);
  }

  /* ---- Trigger counters when hero stats are visible ---- */
  const heroStats = document.querySelector('.hero-stats');
  if (heroStats) {
    const statObserver = new IntersectionObserver(function (entries) {
      if (entries[0].isIntersecting) {
        statObserver.disconnect();
        document.querySelectorAll('.stat-num[data-target]').forEach(animateCounter);
      }
    }, { threshold: 0.5 });
    statObserver.observe(heroStats);
  }

  /* ---- Gallery Filter (gallery.php) ---- */
  var gfTabs = document.querySelectorAll('.gf-tab');
  var fgItems = document.querySelectorAll('.fg-item');
  if (gfTabs.length) {
    gfTabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        gfTabs.forEach(function (t) { t.classList.remove('active'); });
        tab.classList.add('active');
        var filter = tab.dataset.filter;
        fgItems.forEach(function (item) {
          if (filter === 'all' || item.dataset.cat === filter) {
            item.classList.remove('hidden');
          } else {
            item.classList.add('hidden');
          }
        });
      });
    });
  }

});

/* ---- Mobile nav styles added via JS ---- */
(function () {
  const style = document.createElement('style');
  style.textContent = `
    @media (max-width: 900px) {
      .nav-links.mobile-open {
        display: flex !important;
        flex-direction: column;
        position: absolute;
        top: var(--nav-h);
        left: 0; right: 0;
        background: var(--white);
        border-bottom: 1px solid var(--border);
        box-shadow: var(--shadow-lg);
        padding: 12px 24px 20px;
        gap: 4px;
        z-index: 998;
      }
      .nav-links.mobile-open .dropdown {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        box-shadow: none;
        border: none;
        background: var(--gray-light);
        margin-top: 4px;
      }
    }
  `;
  document.head.appendChild(style);
})();
