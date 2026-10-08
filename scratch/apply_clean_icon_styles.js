const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

// Ensure nav-nested-icon and nav-faculty-icon have explicit dark icon styling on light slate badge
const iconStyle = `    /* Dark Slate Icon on Soft Light Badge */
    .nav-nested-icon,
    .nav-faculty-icon {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      width: 38px !important;
      height: 38px !important;
      border-radius: 12px !important;
      background: #f1f5f9 !important;
      color: #0f172a !important;
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
      box-shadow: 0 4px 10px rgba(15, 27, 45, 0.18) !important;
    }
    .nav-nested-item-group:hover .nav-nested-icon svg,
    .nav-faculty-card:hover .nav-faculty-icon svg {
      color: #e58525 !important;
      stroke: #e58525 !important;
    }`;

// Replace the old nav-nested-icon and nav-faculty-icon blocks cleanly
content = content.replace(/\/\* Dark Icon Badge with Warm Gold Icon on Hover \*\/[\s\S]*?box-shadow: 0 4px 10px rgba\(15, 27, 45, 0\.18\) !important;\s*\}/, iconStyle);

fs.writeFileSync('includes/header.php', content, 'utf8');
console.log('SUCCESS: Applied clean dark icons on soft light badges');
