const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

const contactBtnCSS = `    /* Right-End Contact Us Blue Button */
    .header-contact-btn {
      display: none;
      align-items: center;
      gap: 6px;
      padding: 8px 18px !important;
      border-radius: 9999px !important;
      background: #0f284e !important;
      color: #ffffff !important;
      font-size: 13px !important;
      font-weight: 600 !important;
      text-decoration: none !important;
      border: 1px solid #1e3a6a !important;
      box-shadow: 0 2px 8px rgba(15, 40, 78, 0.2) !important;
      transition: all 0.2s ease !important;
    }
    @media (min-width: 768px) {
      .header-contact-btn {
        display: inline-flex !important;
      }
    }
    .header-contact-btn:hover {
      background: #183d73 !important;
      border-color: #2b579a !important;
      color: #ffffff !important;
      box-shadow: 0 4px 14px rgba(15, 40, 78, 0.35) !important;
      transform: translateY(-1px) !important;
    }
    .header-contact-btn svg {
      width: 14px !important;
      height: 14px !important;
      color: #e58525 !important;
      stroke: #e58525 !important;
    }
`;

if (!content.includes('.header-contact-btn')) {
  content = content.replace('/* Simple Dropdown Menu for Alumni (280px Width) */', contactBtnCSS + '\n    /* Simple Dropdown Menu for Alumni (280px Width) */');
  fs.writeFileSync('includes/header.php', content, 'utf8');
  console.log('SUCCESS: Added header-contact-btn CSS to header.php');
} else {
  console.log('Already exists');
}
