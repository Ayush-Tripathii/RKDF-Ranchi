const fs = require('fs');

// 1. Update includes/header.php
let headerContent = fs.readFileSync('includes/header.php', 'utf8');

const globalOverflowFix = `    /* ==================== GLOBAL OVERFLOW & SCROLLBAR FIX ==================== */
    html {
      overflow-x: hidden !important;
      max-width: 100vw !important;
      width: 100% !important;
    }
    body {
      overflow-x: hidden !important;
      max-width: 100vw !important;
      width: 100% !important;
      position: relative !important;
    }
    #mobile-drawer {
      overflow: hidden !important;
    }
`;

if (!headerContent.includes('GLOBAL OVERFLOW & SCROLLBAR FIX')) {
  headerContent = headerContent.replace('<style>', '<style>\n' + globalOverflowFix);
  fs.writeFileSync('includes/header.php', headerContent, 'utf8');
  console.log('SUCCESS: Injected global overflow-x fix into header.php');
}

// 2. Update includes/navbar.php to ensure #mobile-drawer has overflow-hidden
let navbarContent = fs.readFileSync('includes/navbar.php', 'utf8');
navbarContent = navbarContent.replace(
  'id="mobile-drawer" class="fixed inset-0 z-50 pointer-events-none opacity-0 transition-opacity duration-300 lg:hidden"',
  'id="mobile-drawer" class="fixed inset-0 z-50 pointer-events-none opacity-0 transition-opacity duration-300 overflow-hidden lg:hidden"'
);
fs.writeFileSync('includes/navbar.php', navbarContent, 'utf8');
console.log('SUCCESS: Added overflow-hidden to mobile-drawer in navbar.php');
