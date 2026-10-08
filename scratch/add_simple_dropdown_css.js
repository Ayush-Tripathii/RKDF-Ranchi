const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

const simpleDropdownCSS = `    /* Simple Dropdown Menu for Alumni (280px Width) */
    .nav-simple-dropdown {
      position: absolute;
      top: 100%;
      left: 0;
      width: 280px !important;
      min-width: 280px !important;
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 16px !important;
      box-shadow: 0 20px 40px -10px rgba(15, 27, 45, 0.22), 0 0 0 1px rgba(0, 0, 0, 0.05) !important;
      padding: 10px !important;
      z-index: 99999 !important;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px) scale(0.98);
      transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
      pointer-events: none;
      box-sizing: border-box !important;
    }
    .nav-nested-parent-wrapper:hover > .nav-simple-dropdown {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateY(0) scale(1) !important;
      pointer-events: auto !important;
    }
`;

if (!content.includes('.nav-simple-dropdown')) {
  content = content.replace('.nav-nested-flyout.two-col-grid {', simpleDropdownCSS + '\n    .nav-nested-flyout.two-col-grid {');
  fs.writeFileSync('includes/header.php', content, 'utf8');
  console.log('SUCCESS: Added nav-simple-dropdown CSS to header.php');
} else {
  console.log('Already exists');
}
