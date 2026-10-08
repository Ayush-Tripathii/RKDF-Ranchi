const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

const distinctBlueIconCSS = `    /* Pristine Soft Sky-Blue Shade Icon Badge */
    .nav-nested-icon,
    .nav-faculty-icon {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      width: 38px !important;
      height: 38px !important;
      border-radius: 12px !important;
      background: #e8f1fc !important;
      color: #0f284e !important;
      box-shadow: 0 2px 6px rgba(24, 76, 140, 0.08), 0 1px 2px rgba(24, 76, 140, 0.04) !important;
      border: 1px solid #cce0f8 !important;
      flex-shrink: 0 !important;
      transition: all 0.18s ease !important;
    }
    .nav-nested-icon svg,
    .nav-faculty-icon svg {
      color: #0f284e !important;
      stroke: #0f284e !important;
      width: 18px !important;
      height: 18px !important;
    }
    .nav-nested-item-group:hover .nav-nested-icon,
    .nav-faculty-card:hover .nav-faculty-icon {
      background: #0f284e !important;
      color: #e58525 !important;
      border-color: #0f284e !important;
      box-shadow: 0 4px 12px rgba(15, 40, 78, 0.28) !important;
    }
    .nav-nested-item-group:hover .nav-nested-icon svg,
    .nav-faculty-card:hover .nav-faculty-icon svg {
      color: #e58525 !important;
      stroke: #e58525 !important;
    }`;

// Replace the previous icon definition cleanly
content = content.replace(/\/\* Soft Cool Blue Shade Icon Badge \*\/[\s\S]*?stroke: #e58525 !important;\s*\}/, distinctBlueIconCSS);

fs.writeFileSync('includes/header.php', content, 'utf8');
console.log('SUCCESS: Updated icon badge to rich pristine soft sky-blue');
