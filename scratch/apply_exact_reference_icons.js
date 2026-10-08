const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

const exactReferenceIconCSS = `    /* ==================== EXACT LIGHT BLUE BADGE & CRISP NAVY ICON ==================== */
    .nav-nested-icon,
    .nav-faculty-icon {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      width: 40px !important;
      height: 40px !important;
      border-radius: 13px !important;
      background: #ebf3fe !important;
      color: #0b1e3b !important;
      border: 1.5px solid #cce2ff !important;
      box-shadow: 0 2px 8px rgba(37, 99, 235, 0.08), 0 1px 2px rgba(15, 23, 42, 0.03) !important;
      flex-shrink: 0 !important;
      transition: all 0.2s ease !important;
    }
    .nav-nested-icon svg,
    .nav-faculty-icon svg {
      color: #0b1e3b !important;
      stroke: #0b1e3b !important;
      width: 20px !important;
      height: 20px !important;
      stroke-width: 2.2px !important;
      display: block !important;
    }
    .nav-nested-item-group:hover .nav-nested-icon,
    .nav-faculty-card:hover .nav-faculty-icon {
      background: #0b1e3b !important;
      color: #e58525 !important;
      border-color: #0b1e3b !important;
      box-shadow: 0 4px 14px rgba(11, 30, 59, 0.28) !important;
      transform: scale(1.03) !important;
    }
    .nav-nested-item-group:hover .nav-nested-icon svg,
    .nav-faculty-card:hover .nav-faculty-icon svg {
      color: #e58525 !important;
      stroke: #e58525 !important;
    }`;

// Replace the icon CSS block
content = content.replace(/\/\* Pristine Soft Sky-Blue Shade Icon Badge \*\/[\s\S]*?stroke: #e58525 !important;\s*\}/, exactReferenceIconCSS);

fs.writeFileSync('includes/header.php', content, 'utf8');
console.log('SUCCESS: Updated icon badges to exact reference light blue style & bold navy icon');
