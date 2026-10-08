const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

const facultyCSS = `
    /* Faculty 2-Column Mega Menu (580px width) */
    .nav-faculty-menu {
      position: absolute;
      top: 100%;
      left: 0;
      width: 580px !important;
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 16px !important;
      box-shadow: 0 20px 40px -10px rgba(15, 27, 45, 0.22), 0 0 0 1px rgba(0, 0, 0, 0.05) !important;
      padding: 12px !important;
      z-index: 99999 !important;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px) scale(0.98);
      transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
      pointer-events: none;
    }
    .nav-nested-parent-wrapper:hover > .nav-faculty-menu {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateY(0) scale(1) !important;
      pointer-events: auto !important;
    }
    .nav-faculty-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 4px 6px !important;
      width: 100% !important;
    }
`;

if (!content.includes('.nav-faculty-menu')) {
  content = content.replace('.nav-nested-flyout.two-col-grid {', facultyCSS + '\n    .nav-nested-flyout.two-col-grid {');
  fs.writeFileSync('includes/header.php', content, 'utf8');
  console.log('SUCCESS: Added nav-faculty-menu CSS to header.php');
} else {
  console.log('Already exists in header.php');
}
