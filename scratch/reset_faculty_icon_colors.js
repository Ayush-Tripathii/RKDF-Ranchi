const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

// Replace nav-faculty-icon background and color
content = content.replace(
  /\.nav-faculty-icon\s*\{[\s\S]*?transition:\s*all\s*0\.18s\s*ease\s*!important;\s*\}/,
  `.nav-faculty-icon {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      width: 36px !important;
      height: 36px !important;
      border-radius: 10px !important;
      background: #f1f5f9 !important;
      color: #0f1b2d !important;
      flex-shrink: 0 !important;
      transition: all 0.18s ease !important;
    }`
);

fs.writeFileSync('includes/header.php', content, 'utf8');
console.log('SUCCESS: Updated nav-faculty-icon colors to normal standard colors');
