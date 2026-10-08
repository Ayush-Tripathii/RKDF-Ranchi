const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

const facultyCSS = `    /* ==================== FACULTY 2-COLUMN MEGA MENU (640px Width, Zero Overflow) ==================== */
    .nav-faculty-menu {
      position: absolute;
      top: 100%;
      left: 0;
      width: 650px !important;
      min-width: 650px !important;
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 16px !important;
      box-shadow: 0 20px 40px -10px rgba(15, 27, 45, 0.22), 0 0 0 1px rgba(0, 0, 0, 0.05) !important;
      padding: 14px 16px !important;
      z-index: 99999 !important;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px) scale(0.98);
      transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
      pointer-events: none;
      box-sizing: border-box !important;
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
      gap: 6px 12px !important;
      width: 100% !important;
      box-sizing: border-box !important;
    }
    .nav-faculty-card {
      display: flex !important;
      align-items: center !important;
      gap: 12px !important;
      padding: 8px 10px !important;
      border-radius: 12px !important;
      background: transparent !important;
      border: 1px solid transparent !important;
      text-decoration: none !important;
      transition: all 0.18s ease !important;
      box-sizing: border-box !important;
      overflow: hidden;
    }
    .nav-faculty-card:hover {
      background: #f8fafc !important;
      border-color: #e2e8f0 !important;
      transform: translateY(-1px) !important;
    }
    .nav-faculty-icon {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      width: 36px !important;
      height: 36px !important;
      border-radius: 10px !important;
      background: #fff7ed !important;
      color: #ea580c !important;
      flex-shrink: 0 !important;
      transition: all 0.18s ease !important;
    }
    .nav-faculty-card:hover .nav-faculty-icon {
      background: #0f1b2d !important;
      color: #e58525 !important;
      box-shadow: 0 4px 10px rgba(15, 27, 45, 0.18) !important;
    }
    .nav-faculty-info {
      flex: 1 1 auto !important;
      min-width: 0 !important;
      overflow: hidden;
    }
    .nav-faculty-title {
      font-size: 13px !important;
      font-weight: 600 !important;
      color: #0f172a !important;
      line-height: 1.3 !important;
      margin: 0 0 2px 0 !important;
      white-space: nowrap !important;
      overflow: hidden !important;
      text-overflow: ellipsis !important;
    }
    .nav-faculty-card:hover .nav-faculty-title {
      color: #0f1b2d !important;
    }
    .nav-faculty-desc {
      font-size: 11px !important;
      color: #64748b !important;
      line-height: 1.35 !important;
      margin: 0 !important;
      white-space: nowrap !important;
      overflow: hidden !important;
      text-overflow: ellipsis !important;
    }`;

// Replace any previous nav-faculty-menu CSS block
const oldPattern = /\/\* Faculty 2-Column Mega Menu[\s\S]*?width: 100% !important;\s*\}/;
if (oldPattern.test(content)) {
  content = content.replace(oldPattern, facultyCSS);
} else {
  content = content.replace('.nav-nested-flyout.two-col-grid {', facultyCSS + '\n\n    .nav-nested-flyout.two-col-grid {');
}

fs.writeFileSync('includes/header.php', content, 'utf8');
console.log('SUCCESS: Updated header.php faculty CSS');
