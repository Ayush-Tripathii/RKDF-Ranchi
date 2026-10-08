const fs = require('fs');
let content = fs.readFileSync('includes/header.php', 'utf8');

const courseCatalogCSS = `    /* ==================== ULTRA-LUXURY COURSES CATALOG & FILTER UI ==================== */
    .course-filter-panel {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      padding: 1.75rem 2rem !important;
      box-shadow: 0 10px 30px -5px rgba(15, 27, 45, 0.06), 0 0 0 1px rgba(0, 0, 0, 0.03) !important;
      margin-bottom: 2.5rem !important;
      transition: all 0.3s ease !important;
    }
    .course-search-wrapper {
      position: relative;
      margin-bottom: 1.5rem;
    }
    .course-search-input {
      width: 100% !important;
      padding: 1rem 1.25rem 1rem 3.25rem !important;
      border-radius: 16px !important;
      border: 1.5px solid #e2e8f0 !important;
      background: #f8fafc !important;
      color: #0f172a !important;
      font-size: 0.95rem !important;
      font-weight: 500 !important;
      outline: none !important;
      transition: all 0.25s ease !important;
      box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.02) !important;
    }
    .course-search-input:focus {
      background: #ffffff !important;
      border-color: #0f284e !important;
      box-shadow: 0 0 0 4px rgba(15, 40, 78, 0.1), 0 4px 12px rgba(15, 27, 45, 0.05) !important;
    }
    .course-search-icon {
      position: absolute;
      left: 1.15rem;
      top: 50%;
      transform: translateY(-50%);
      color: #64748b;
      pointer-events: none;
      transition: color 0.25s ease;
    }
    .course-search-wrapper:focus-within .course-search-icon {
      color: #0f284e;
    }

    .course-filter-group {
      display: flex;
      flex-direction: column;
      gap: 0.65rem;
      margin-top: 1.25rem;
      padding-top: 1.25rem;
      border-top: 1px solid #f1f5f9;
    }
    @media (min-width: 768px) {
      .course-filter-group {
        flex-direction: row;
        align-items: center;
        gap: 1.25rem;
      }
    }
    .course-filter-label {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.75rem !important;
      font-weight: 800 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      color: #475569 !important;
      min-width: 140px;
      flex-shrink: 0;
    }

    /* Filter Pills */
    .filter-btn-pill {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
      padding: 0.45rem 0.95rem !important;
      border-radius: 9999px !important;
      font-size: 0.8125rem !important;
      font-weight: 600 !important;
      color: #334155 !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      cursor: pointer !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
      user-select: none !important;
    }
    .filter-btn-pill:hover {
      background: #ffffff !important;
      border-color: #cbd5e1 !important;
      color: #0f172a !important;
      transform: translateY(-1px) !important;
      box-shadow: 0 3px 8px rgba(15, 27, 45, 0.06) !important;
    }
    .filter-btn-pill.active {
      background: linear-gradient(135deg, #071322 0%, #0f284e 100%) !important;
      color: #ffffff !important;
      border-color: #071322 !important;
      box-shadow: 0 4px 14px rgba(7, 19, 34, 0.25) !important;
      transform: translateY(-1px) !important;
    }
    .filter-btn-pill.active .badge-count {
      background: #e58525 !important;
      color: #071322 !important;
      font-weight: 800 !important;
    }
    .badge-count {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0.15rem 0.45rem;
      border-radius: 9999px;
      font-size: 0.7rem;
      font-weight: 700;
      background: #e2e8f0;
      color: #475569;
      transition: all 0.2s ease;
    }

    /* Course Item Card */
    .course-item-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 20px !important;
      padding: 1.5rem !important;
      box-shadow: 0 4px 16px rgba(15, 27, 45, 0.04) !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      text-decoration: none !important;
      position: relative !important;
      overflow: hidden !important;
    }
    .course-item-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, #0f284e 0%, #e58525 100%);
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .course-item-card:hover {
      transform: translateY(-4px) !important;
      border-color: #cce0f8 !important;
      box-shadow: 0 20px 35px -8px rgba(15, 27, 45, 0.12), 0 0 0 1px rgba(229, 133, 37, 0.25) !important;
    }
    .course-item-card:hover::before {
      opacity: 1;
    }
    .course-card-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 4px !important;
      padding: 0.3rem 0.75rem !important;
      border-radius: 9999px !important;
      font-size: 0.6875rem !important;
      font-weight: 700 !important;
      letter-spacing: 0.06em !important;
      text-transform: uppercase !important;
      background: #ebf3fe !important;
      color: #0b1e3b !important;
      border: 1px solid #cce2ff !important;
    }
    .course-card-duration {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      font-size: 0.75rem !important;
      font-weight: 600 !important;
      color: #64748b !important;
    }
    .course-card-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.35rem !important;
      font-weight: 700 !important;
      color: #071322 !important;
      line-height: 1.25 !important;
      margin: 0.75rem 0 0.35rem 0 !important;
      transition: color 0.2s ease !important;
    }
    .course-item-card:hover .course-card-title {
      color: #e58525 !important;
    }
    .course-card-school {
      font-size: 0.75rem !important;
      color: #64748b !important;
      display: flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      margin-bottom: 0.5rem !important;
    }
    .course-card-meta-pills {
      display: flex;
      flex-wrap: wrap;
      gap: 0.35rem;
      margin-top: 0.75rem;
      margin-bottom: 0.5rem;
    }
    .course-card-pill {
      font-size: 0.6875rem;
      font-weight: 500;
      color: #475569;
      background: #f1f5f9;
      padding: 0.2rem 0.55rem;
      border-radius: 6px;
    }
    .course-card-footer {
      padding-top: 1rem !important;
      margin-top: 1rem !important;
      border-top: 1px solid #f1f5f9 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 0.5rem !important;
    }
    .course-card-status {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.4rem !important;
      font-size: 0.71875rem !important;
      font-weight: 700 !important;
      color: #059669 !important;
    }
    .course-card-status-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #10b981;
      box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
    }
    .course-card-cta {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      color: #0f284e !important;
      transition: all 0.2s ease !important;
    }
    .course-item-card:hover .course-card-cta {
      color: #e58525 !important;
      transform: translateX(3px) !important;
    }
`;

if (!content.includes('ULTRA-LUXURY COURSES CATALOG & FILTER UI')) {
  content = content.replace('/* Right-End Contact Us Blue Button */', courseCatalogCSS + '\n    /* Right-End Contact Us Blue Button */');
  fs.writeFileSync('includes/header.php', content, 'utf8');
  console.log('SUCCESS: Injected Ultra-Luxury Course Catalog CSS into header.php');
} else {
  console.log('Already exists');
}
