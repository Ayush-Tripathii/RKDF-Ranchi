const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

const blueShadeIconCSS = `    /* Soft Cool Blue Shade Icon Badge */
    .nav-nested-icon,
    .nav-faculty-icon {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      width: 38px !important;
      height: 38px !important;
      border-radius: 12px !important;
      background: #f0f4f9 !important;
      color: #0f172a !important;
      box-shadow: 0 2px 6px rgba(15, 27, 45, 0.06), 0 1px 2px rgba(15, 27, 45, 0.04) !important;
      border: 1px solid rgba(219, 229, 242, 0.8) !important;
      flex-shrink: 0 !important;
      transition: all 0.18s ease !important;
    }
    .nav-nested-icon svg,
    .nav-faculty-icon svg {
      color: #0f172a !important;
      stroke: #0f172a !important;
      width: 18px !important;
      height: 18px !important;
    }
    .nav-nested-item-group:hover .nav-nested-icon,
    .nav-faculty-card:hover .nav-faculty-icon {
      background: #0f1b2d !important;
      color: #e58525 !important;
      border-color: #0f1b2d !important;
      box-shadow: 0 4px 12px rgba(15, 27, 45, 0.22) !important;
    }
    .nav-nested-item-group:hover .nav-nested-icon svg,
    .nav-faculty-card:hover .nav-faculty-icon svg {
      color: #e58525 !important;
      stroke: #e58525 !important;
    }`;

// Replace the previous icon definition
content = content.replace(/\/\* Dark Slate Icon on Soft Light Badge \*\/[\s\S]*?stroke: #e58525 !important;\s*\}/, blueShadeIconCSS);

fs.writeFileSync('includes/header.php', content, 'utf8');
console.log('SUCCESS: Updated icon background with soft blue shade and shadow');
