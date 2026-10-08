const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

const navNestedCSS = `    /* ==================== 6-CATEGORY NESTED FLYOUT DROPDOWN MENU ==================== */
    .nav-nested-parent-wrapper {
      position: relative;
      display: flex;
      align-items: center;
      height: 100%;
    }
    .nav-top-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 8px 12px;
      border-radius: 8px;
      color: rgba(15, 23, 42, 0.85);
      font-size: 14px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
    }
    .nav-top-link:hover,
    .nav-nested-parent-wrapper:hover .nav-top-link {
      color: #0f172a;
      background: #f1f5f9;
    }
    .nav-top-chevron {
      transition: transform 0.2s ease;
      opacity: 0.6;
    }
    .nav-nested-parent-wrapper:hover .nav-top-chevron {
      transform: rotate(180deg);
      opacity: 1;
    }

    /* Parent Category Menu (330px) */
    .nav-nested-parent-menu {
      position: absolute;
      top: 100%;
      left: 0;
      width: 330px !important;
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
    }
    .nav-nested-parent-wrapper:hover > .nav-nested-parent-menu {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateY(0) scale(1) !important;
      pointer-events: auto !important;
    }

    /* Category Item Group (Contains Parent Item + Flyout) */
    .nav-nested-item-group {
      position: relative;
    }

    /* Category Parent Item */
    .nav-nested-item {
      display: flex !important;
      align-items: center !important;
      gap: 12px !important;
      padding: 10px 12px !important;
      border-radius: 12px !important;
      background: transparent !important;
      border: 1px solid transparent !important;
      text-decoration: none !important;
      transition: all 0.18s ease !important;
      box-sizing: border-box !important;
      cursor: pointer;
    }
    .nav-nested-item-group:hover > .nav-nested-item {
      background: #f8fafc !important;
      border-color: #e2e8f0 !important;
      transform: translateY(-1px) !important;
    }

    /* Dark Icon Badge with Warm Gold Icon on Hover */
    .nav-nested-icon {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      width: 38px !important;
      height: 38px !important;
      border-radius: 10px !important;
      background: #f1f5f9 !important;
      color: #0f1b2d !important;
      flex-shrink: 0 !important;
      transition: all 0.18s ease !important;
    }
    .nav-nested-item-group:hover .nav-nested-icon {
      background: #0f1b2d !important;
      color: #e58525 !important;
      box-shadow: 0 4px 10px rgba(15, 27, 45, 0.18) !important;
    }

    /* Category Info Container */
    .nav-nested-info {
      flex: 1 1 auto !important;
      min-width: 0 !important;
    }
    .nav-nested-title {
      font-size: 13.5px !important;
      font-weight: 600 !important;
      color: #0f172a !important;
      line-height: 1.3 !important;
      margin: 0 0 2px 0 !important;
    }
    .nav-nested-item-group:hover .nav-nested-title {
      color: #0f1b2d !important;
    }
    .nav-nested-desc {
      font-size: 11px !important;
      color: #64748b !important;
      line-height: 1.35 !important;
      margin: 0 !important;
      white-space: normal !important;
      display: -webkit-box !important;
      -webkit-line-clamp: 1 !important;
      -webkit-box-orient: vertical !important;
      overflow: hidden !important;
    }

    /* Right Arrow Indicator */
    .nav-nested-arrow {
      color: #94a3b8 !important;
      flex-shrink: 0 !important;
      transition: transform 0.2s ease, color 0.2s ease !important;
    }
    .nav-nested-item-group:hover .nav-nested-arrow {
      color: #e58525 !important;
      transform: translateX(3px) !important;
    }

    /* Flyout Submenu Container (Opens to the right of parent menu) */
    .nav-nested-flyout {
      position: absolute;
      top: 0;
      left: calc(100% + 6px);
      width: 290px !important;
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 16px !important;
      box-shadow: 0 20px 40px -10px rgba(15, 27, 45, 0.22), 0 0 0 1px rgba(0, 0, 0, 0.05) !important;
      padding: 10px !important;
      z-index: 99999 !important;
      opacity: 0;
      visibility: hidden;
      transform: translateX(8px);
      transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
      pointer-events: none;
    }
    /* Invisible hover bridge to prevent cursor gap drop */
    .nav-nested-flyout::before {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      left: -12px;
      width: 12px;
    }
    .nav-nested-item-group:hover > .nav-nested-flyout {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateX(0) !important;
      pointer-events: auto !important;
    }

    /* 2-Column Wide Flyout for Committees (560px) */
    .nav-nested-flyout.two-col-grid {
      width: 560px !important;
      max-width: 560px !important;
    }

    /* Flyout Header */
    .nav-flyout-header {
      padding: 6px 10px 8px 10px;
      border-bottom: 1px solid #f1f5f9;
      margin-bottom: 6px;
    }
    .nav-flyout-header-title {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: #94a3b8;
    }

    /* Submenu Grid (1-Column or 2-Columns) */
    .nav-submenu-grid.two-columns {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 4px 8px !important;
    }
    .nav-submenu-grid.single-column {
      display: flex !important;
      flex-direction: column !important;
      gap: 3px !important;
    }

    /* Sublink Links */
    .nav-sublink-item {
      display: flex !important;
      align-items: center !important;
      gap: 8px !important;
      padding: 7px 10px !important;
      border-radius: 8px !important;
      text-decoration: none !important;
      color: #334155 !important;
      font-size: 12.5px !important;
      font-weight: 500 !important;
      line-height: 1.35 !important;
      transition: all 0.15s ease !important;
      border: 1px solid transparent !important;
    }
    .nav-sublink-bullet {
      width: 5px !important;
      height: 5px !important;
      border-radius: 50% !important;
      background: #cbd5e1 !important;
      flex-shrink: 0 !important;
      transition: all 0.15s ease !important;
    }
    .nav-sublink-item:hover {
      background: #f8fafc !important;
      border-color: #e2e8f0 !important;
      color: #0f1b2d !important;
      font-weight: 600 !important;
      padding-left: 12px !important;
    }
    .nav-sublink-item:hover .nav-sublink-bullet {
      background: #e58525 !important;
      transform: scale(1.4) !important;
    }`;

const regex = /\/\* ==================== BULLETPROOF DROPDOWN MENU ==================== \*\/[\s\S]*?(?=\/\* ==================== INNER PAGE HERO ==================== \*\/)/;

if (regex.test(content)) {
  content = content.replace(regex, navNestedCSS + '\n\n    ');
  fs.writeFileSync('includes/header.php', content, 'utf8');
  console.log('SUCCESS: Injected nav-nested CSS into header.php');
} else {
  console.error('FAILED: regex did not match');
}
