<?php
/**
 * RKDF University — Header Include
 */
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/functions.php';

$page_title     = $page_title     ?? (defined('SITE_NAME') ? SITE_NAME . ' — ' . SITE_TAGLINE : 'RKDF University');
$page_meta_desc = $page_meta_desc ?? (defined('DEFAULT_META_DESC') ? DEFAULT_META_DESC : 'RKDF University Ranchi');
$body_class     = $body_class     ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $page_title ?></title>
  <meta name="description" content="<?= e($page_meta_desc) ?>" />

  <!-- Open Graph -->
  <meta property="og:title" content="<?= $page_title ?>" />
  <meta property="og:description" content="<?= e($page_meta_desc) ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= SITE_URL ?>" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:wght@400;500;600;700&display=swap" />

  <!-- Site Stylesheet (Tailwind CSS exact bundle) -->
  <link rel="stylesheet" href="<?= asset('style.css') ?>" />

  <!-- Custom Design Enhancements & Dropdown Support -->
  <style>
    /* ==================== BULLETPROOF DROPDOWN MENU ==================== */
    .nav-dropdown-wrapper {
      position: relative;
      display: flex;
      align-items: center;
      height: 100%;
    }
    .nav-dropdown-wrapper:hover > .nav-dropdown-menu,
    .nav-dropdown-wrapper:focus-within > .nav-dropdown-menu,
    .nav-dropdown-wrapper.active-menu > .nav-dropdown-menu {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateY(0) scale(1) !important;
      pointer-events: auto !important;
    }
    .nav-dropdown-wrapper:hover .dropdown-chevron,
    .nav-dropdown-wrapper.active-menu .dropdown-chevron {
      transform: rotate(180deg);
    }
    .nav-dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      width: 540px !important;
      min-width: 540px !important;
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 16px !important;
      box-shadow: 0 20px 40px -10px rgba(15, 27, 45, 0.22), 0 0 0 1px rgba(0, 0, 0, 0.05) !important;
      padding: 12px !important;
      z-index: 99999 !important;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px) scale(0.98);
      transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
      pointer-events: none;
    }
    .nav-dropdown-menu.align-right {
      left: auto !important;
      right: 0 !important;
    }
    .nav-dropdown-menu.mega-menu {
      width: 580px !important;
      min-width: 580px !important;
    }
    .nav-dropdown-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 6px !important;
      width: 100% !important;
    }
    .nav-dropdown-grid.single-col {
      grid-template-columns: 1fr !important;
      width: 300px !important;
    }
    .nav-dropdown-item {
      display: flex !important;
      align-items: flex-start !important;
      gap: 12px !important;
      padding: 10px 12px !important;
      border-radius: 12px !important;
      background: transparent !important;
      border: 1px solid transparent !important;
      text-decoration: none !important;
      transition: all 0.15s ease !important;
      box-sizing: border-box !important;
    }
    .nav-dropdown-item:hover {
      background: #f8fafc !important;
      border-color: #e2e8f0 !important;
      transform: translateY(-1px) !important;
    }
    .nav-dropdown-icon {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      width: 36px !important;
      height: 36px !important;
      border-radius: 10px !important;
      background: #f1f5f9 !important;
      color: #0f1b2d !important;
      flex-shrink: 0 !important;
      transition: all 0.15s ease !important;
    }
    .nav-dropdown-item:hover .nav-dropdown-icon {
      background: #0f1b2d !important;
      color: #e58525 !important;
    }
    .nav-dropdown-info {
      flex: 1 1 auto !important;
      min-width: 0 !important;
    }
    .nav-dropdown-title {
      font-size: 13px !important;
      font-weight: 600 !important;
      color: #0f172a !important;
      line-height: 1.3 !important;
      margin: 0 !important;
    }
    .nav-dropdown-item:hover .nav-dropdown-title {
      color: #0f1b2d !important;
    }
    .nav-dropdown-desc {
      font-size: 11px !important;
      color: #64748b !important;
      line-height: 1.35 !important;
      margin-top: 2px !important;
      white-space: normal !important;
      display: -webkit-box !important;
      -webkit-line-clamp: 1 !important;
      -webkit-box-orient: vertical !important;
      overflow: hidden !important;
    }

    /* ==================== INNER PAGE HERO ==================== */
    .inner-page-hero {
      position: relative;
      background: linear-gradient(180deg, #071322 0%, #0c1e36 45%, #132a4a 100%) !important;
      color: #ffffff !important;
      padding: 5rem 1.5rem 6rem;
      overflow: hidden;
      text-align: center;
    }
    .inner-page-hero h1 {
      color: #ffffff !important;
      font-family: 'Instrument Serif', Georgia, serif;
      letter-spacing: -0.02em;
    }
    .inner-page-hero p {
      color: rgba(255, 255, 255, 0.85) !important;
    }
    .inner-page-hero .hero-pill,
    .hero-pill {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 0.5rem !important;
      height: 36px !important;
      min-height: 36px !important;
      max-height: 36px !important;
      line-height: 1 !important;
      padding: 0 1.125rem !important;
      border-radius: 9999px !important;
      background: rgba(255, 255, 255, 0.1) !important;
      border: 1px solid rgba(255, 255, 255, 0.2) !important;
      backdrop-filter: blur(12px) !important;
      -webkit-backdrop-filter: blur(12px) !important;
      color: rgba(255, 255, 255, 0.95) !important;
      font-size: 0.8125rem !important;
      font-weight: 500 !important;
      white-space: nowrap !important;
      vertical-align: middle !important;
      box-sizing: border-box !important;
    }
    .inner-page-hero .hero-pill svg,
    .hero-pill svg {
      width: 15px !important;
      height: 15px !important;
      min-width: 15px !important;
      max-width: 15px !important;
      color: #e58525 !important;
      stroke: currentColor !important;
      display: inline-block !important;
      flex-shrink: 0 !important;
      margin: 0 !important;
    }


    /* ==================== RICH CONTENT FORMATTING ==================== */
    .prose-rkdf p {
      color: #334155;
      line-height: 1.8;
      font-size: 1.05rem;
      margin-bottom: 1.25rem;
    }
    .dark .prose-rkdf p {
      color: #cbd5e1;
    }
    .feature-box-lift {
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .feature-box-lift:hover {
      transform: translateY(-4px);
      box-shadow: 0 16px 32px -8px rgba(15, 27, 45, 0.12);
      border-color: var(--gold, #e58525);
    }
    .insignia-box {
      background: linear-gradient(135deg, #071322 0%, #0f2444 60%, #152f55 100%) !important;
      border: 1px solid rgba(229, 133, 37, 0.3) !important;
      box-shadow: 0 20px 40px -10px rgba(7, 19, 34, 0.4) !important;
    }
    .insignia-grid {
      display: grid !important;
      grid-template-columns: 320px 1fr !important;
      gap: 2.5rem !important;
      align-items: center !important;
    }
    @media (max-width: 860px) {
      .insignia-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
      }
    }
    /* ==================== VISION & MISSION CARDS ==================== */
    .about-vision-grid {
      display: grid !important;
      grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
      gap: 2rem !important;
    }
    @media (max-width: 900px) {
      .about-vision-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
      }
    }
    .vm-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      padding: 2.25rem !important;
      box-shadow: 0 10px 30px -10px rgba(15, 27, 45, 0.06) !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .vm-card:hover {
      transform: translateY(-4px) !important;
      box-shadow: 0 20px 40px -12px rgba(15, 27, 45, 0.12) !important;
      border-color: rgba(229, 133, 37, 0.4) !important;
    }
    .vm-icon-box {
      width: 52px !important;
      height: 52px !important;
      min-width: 52px !important;
      border-radius: 14px !important;
      background: #071322 !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 4px 12px rgba(7, 19, 34, 0.2) !important;
    }
    .vm-item {
      display: flex !important;
      align-items: flex-start !important;
      gap: 1rem !important;
      padding: 1.15rem 1.25rem !important;
      border-radius: 16px !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      transition: all 0.2s ease !important;
    }
    .vm-item:hover {
      background: #ffffff !important;
      border-color: #cbd5e1 !important;
      box-shadow: 0 6px 16px -4px rgba(15, 27, 45, 0.08) !important;
      transform: translateX(3px) !important;
    }
    .vm-badge {
      width: 28px !important;
      height: 28px !important;
      min-width: 28px !important;
      border-radius: 8px !important;
      background: #071322 !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      font-size: 0.8125rem !important;
      font-weight: 700 !important;
      font-family: 'Inter', sans-serif !important;
      margin-top: 2px !important;
      flex-shrink: 0 !important;
    }
    /* ==================== PHILOSOPHY QUOTE BANNER ==================== */
    .quote-philosophy-banner {
      position: relative !important;
      overflow: hidden !important;
      border-radius: 28px !important;
      background: linear-gradient(135deg, #071322 0%, #0c1e36 50%, #132a4a 100%) !important;
      border: 1px solid rgba(229, 133, 37, 0.35) !important;
      box-shadow: 0 20px 40px -12px rgba(7, 19, 34, 0.35) !important;
      padding: 3.5rem 2.5rem !important;
      color: #ffffff !important;
      text-align: center !important;
    }
    .quote-philosophy-banner blockquote {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 2.25rem !important;
      line-height: 1.4 !important;
      color: #ffffff !important;
      font-weight: 400 !important;
      max-width: 860px !important;
      margin: 0 auto !important;
    }
    @media (max-width: 768px) {
      .quote-philosophy-banner {
        padding: 2.5rem 1.5rem !important;
      }
      .quote-philosophy-banner blockquote {
        font-size: 1.6rem !important;
        line-height: 1.35 !important;
      }
    }
    /* ==================== PILLARS OF EXCELLENCE ==================== */
    .pillars-container {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 28px !important;
      padding: 3.5rem 2.5rem !important;
      box-shadow: 0 10px 30px -10px rgba(15, 27, 45, 0.06) !important;
    }
    .pillars-header {
      text-align: center !important;
      max-width: 42rem !important;
      margin: 0 auto 3rem auto !important;
    }
    .pillars-header-tag {
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.2em !important;
      color: #e58525 !important;
      margin-bottom: 0.75rem !important;
      display: inline-block !important;
    }
    .pillars-header-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 2.5rem !important;
      font-weight: 400 !important;
      color: #0f1b2d !important;
      line-height: 1.25 !important;
      margin: 0 !important;
    }
    @media (min-width: 640px) {
      .pillars-header-title {
        font-size: 2.75rem !important;
      }
    }
    .pillars-grid {
      display: grid !important;
      grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
      gap: 1.5rem !important;
      margin-top: 3rem !important;
    }
    @media (max-width: 1024px) {
      .pillars-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
      }
    }
    @media (max-width: 640px) {
      .pillars-grid {
        grid-template-columns: 1fr !important;
      }
    }
    .pillar-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 20px !important;
      padding: 2.25rem 1.5rem !important;
      text-align: center !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
      position: relative !important;
      box-shadow: 0 4px 12px -2px rgba(15, 27, 45, 0.04) !important;
    }
    .pillar-card:hover {
      background: #ffffff !important;
      transform: translateY(-8px) !important;
      box-shadow: 0 20px 40px -10px rgba(15, 27, 45, 0.12), 0 0 0 1.5px rgba(229, 133, 37, 0.35) !important;
      border-color: rgba(229, 133, 37, 0.6) !important;
    }
    .pillar-icon-box {
      width: 60px !important;
      height: 60px !important;
      min-width: 60px !important;
      border-radius: 18px !important;
      background: #071322 !important;
      border: 1px solid rgba(229, 133, 37, 0.25) !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      margin-bottom: 1.25rem !important;
      box-shadow: 0 8px 20px -4px rgba(7, 19, 34, 0.35) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .pillar-icon-box svg {
      color: #e58525 !important;
      stroke: #e58525 !important;
      width: 28px !important;
      height: 28px !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .pillar-card:hover .pillar-icon-box {
      background: linear-gradient(135deg, #e58525 0%, #c96e16 100%) !important;
      border-color: rgba(255, 255, 255, 0.4) !important;
      transform: scale(1.1) rotate(3deg) !important;
      box-shadow: 0 12px 28px -4px rgba(229, 133, 37, 0.5) !important;
    }
    .pillar-card:hover .pillar-icon-box svg {
      color: #ffffff !important;
      stroke: #ffffff !important;
      filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.25)) !important;
    }
    .pillar-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.5rem !important;
      font-weight: 500 !important;
      color: #0f1b2d !important;
      margin-bottom: 0.5rem !important;
      line-height: 1.3 !important;
    }
    /* ==================== BULLETPROOF 2-COLUMN HERO/OVERVIEW GRIDS ==================== */
    .about-foundation-grid {
      display: grid !important;
      grid-template-columns: 1fr 420px !important;
      gap: 3rem !important;
      align-items: center !important;
      width: 100% !important;
    }
    @media (max-width: 1024px) {
      .about-foundation-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
      }
    }
    .gov-spotlight-card {
      background: linear-gradient(135deg, #071322 0%, #0c1e36 45%, #132a4a 100%) !important;
      border: 1px solid rgba(229, 133, 37, 0.35) !important;
      border-radius: 28px !important;
      padding: 2.5rem 3rem !important;
      color: #ffffff !important;
      box-shadow: 0 20px 40px -10px rgba(7, 19, 34, 0.35) !important;
      position: relative !important;
      overflow: hidden !important;
    }
    @media (max-width: 960px) {
      .gov-spotlight-card {
        padding: 1.75rem 1.5rem !important;
      }
    }
    .gov-spotlight-grid {
      display: grid !important;
      grid-template-columns: 1fr 340px !important;
      gap: 2.5rem !important;
      align-items: center !important;
      position: relative !important;
      z-index: 1 !important;
    }
    @media (max-width: 960px) {
      .gov-spotlight-grid {
        grid-template-columns: 1fr !important;
        gap: 1.75rem !important;
      }
    }
    .gazette-seal-inner {
      background: rgba(255, 255, 255, 0.08) !important;
      border: 1px solid rgba(229, 133, 37, 0.35) !important;
      border-radius: 20px !important;
      padding: 1.65rem 1.75rem !important;
      backdrop-filter: blur(12px) !important;
      -webkit-backdrop-filter: blur(12px) !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2) !important;
    }
    .spotlight-pill-list {
      display: flex !important;
      flex-wrap: wrap !important;
      align-items: center !important;
      gap: 0.75rem !important;
      margin-top: 0.5rem !important;
    }
    .spotlight-pill {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.45rem !important;
      padding: 0.4rem 0.95rem !important;
      border-radius: 9999px !important;
      background: rgba(255, 255, 255, 0.1) !important;
      border: 1px solid rgba(255, 255, 255, 0.22) !important;
      backdrop-filter: blur(12px) !important;
      -webkit-backdrop-filter: blur(12px) !important;
      color: rgba(255, 255, 255, 0.95) !important;
      font-size: 0.75rem !important;
      font-weight: 600 !important;
      white-space: nowrap !important;
      transition: all 0.2s ease !important;
    }
    .spotlight-pill:hover {
      background: rgba(255, 255, 255, 0.18) !important;
      border-color: rgba(229, 133, 37, 0.6) !important;
      transform: translateY(-1px) !important;
    }
    .spotlight-pill svg {
      width: 14px !important;
      height: 14px !important;
      min-width: 14px !important;
      color: #e58525 !important;
      stroke: currentColor !important;
      stroke-width: 2px !important;
      flex-shrink: 0 !important;
      margin: 0 !important;
    }


    /* ==================== ACADEMIC PROGRAM LUXURY CARDS ==================== */
    .rkdf-section-header {
      display: flex !important;
      align-items: flex-end !important;
      justify-content: space-between !important;
      flex-wrap: wrap !important;
      gap: 1.5rem !important;
      padding-bottom: 2rem !important;
      margin-bottom: 3.5rem !important;
      border-bottom: 1px solid #e2e8f0 !important;
    }
    .rkdf-section-tag {
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.25em !important;
      color: #e58525 !important;
      margin-bottom: 1rem !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 0.5rem !important;
    }
    .faculty-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      overflow: hidden !important;
      display: flex !important;
      flex-direction: column !important;
      box-shadow: 0 4px 14px -3px rgba(15, 27, 45, 0.06) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .faculty-card:hover {
      transform: translateY(-8px) !important;
      border-color: rgba(229, 133, 37, 0.55) !important;
      box-shadow: 0 24px 45px -12px rgba(15, 27, 45, 0.14), 0 0 0 1px rgba(229, 133, 37, 0.35) !important;
    }
    .faculty-header-banner {
      background: linear-gradient(135deg, #071322 0%, #0c1e36 50%, #132a4a 100%) !important;
      color: #ffffff !important;
      position: relative !important;
      padding: 1.75rem 1.75rem 1.5rem 1.75rem !important;
      border-bottom: 1px solid rgba(229, 133, 37, 0.25) !important;
    }
    .faculty-header-banner h3 {
      color: #ffffff !important;
      transition: color 0.3s ease !important;
    }
    .faculty-card:hover .faculty-header-banner h3 {
      color: #e58525 !important;
    }
    .faculty-card-body {
      padding: 1.75rem !important;
      display: flex !important;
      flex-direction: column !important;
      flex: 1 !important;
      justify-content: space-between !important;
      background: #ffffff !important;
    }
    .faculty-desc {
      font-size: 0.875rem !important;
      line-height: 1.65 !important;
      color: #475569 !important;
      margin-bottom: 1.25rem !important;
      min-height: 4.8rem !important;
    }
    .faculty-programs-title {
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      color: #0f1b2d !important;
      margin-bottom: 0.65rem !important;
      display: flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
    }
    .faculty-tags-wrap {
      display: flex !important;
      flex-wrap: wrap !important;
      gap: 0.45rem !important;
      margin-bottom: 1.25rem !important;
    }
    .faculty-tag {
      display: inline-block !important;
      padding: 0.35rem 0.75rem !important;
      font-size: 0.75rem !important;
      font-weight: 500 !important;
      color: #334155 !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 8px !important;
      transition: all 0.2s ease !important;
    }
    .faculty-card:hover .faculty-tag {
      background: #ffffff !important;
      border-color: #cbd5e1 !important;
    }
    .faculty-stats-row {
      padding-top: 1rem !important;
      border-top: 1px solid #f1f5f9 !important;
      margin-bottom: 1.25rem !important;
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 0.75rem !important;
      font-size: 0.75rem !important;
      color: #64748b !important;
      align-items: center !important;
    }
    .faculty-stat-item {
      display: flex !important;
      align-items: center !important;
      gap: 0.4rem !important;
      line-height: 1.3 !important;
    }
    .faculty-btn {
      width: 100% !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 0.5rem !important;
      padding: 0.85rem 1.25rem !important;
      border-radius: 14px !important;
      background: #f1f5f9 !important;
      border: 1px solid #e2e8f0 !important;
      color: #0f1b2d !important;
      font-weight: 700 !important;
      font-size: 0.8rem !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      box-shadow: 0 2px 4px rgba(15, 27, 45, 0.04) !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
      text-decoration: none !important;
      cursor: pointer !important;
    }
    .faculty-btn span {
      color: #0f1b2d !important;
      transition: color 0.3s ease !important;
    }
    .faculty-btn svg {
      color: #e58525 !important;
      stroke: #e58525 !important;
      transition: all 0.3s ease !important;
    }
    .faculty-card:hover .faculty-btn,
    .faculty-btn:hover {
      background: linear-gradient(135deg, #071322 0%, #132a4a 100%) !important;
      border-color: #071322 !important;
      box-shadow: 0 8px 20px -4px rgba(7, 19, 34, 0.35) !important;
    }
    .faculty-card:hover .faculty-btn span,
    .faculty-btn:hover span {
      color: #ffffff !important;
    }
    .faculty-card:hover .faculty-btn svg,
    .faculty-btn:hover svg {
      color: #e58525 !important;
      stroke: #e58525 !important;
      transform: translateX(4px) !important;
    }
    .rkdf-section-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 2.5rem !important;
      font-weight: 400 !important;
      color: #0f1b2d !important;
      line-height: 1.25 !important;
      margin: 0.5rem 0 1rem 0 !important;
    }
    @media (min-width: 640px) {
      .rkdf-section-title {
        font-size: 3rem !important;
      }
    }
    .rkdf-section-desc {
      font-size: 1rem !important;
      color: #64748b !important;
      line-height: 1.7 !important;
      margin: 0.85rem auto 0 !important;
      max-width: 48rem !important;
    }
    .rkdf-academic-grid {
      display: grid !important;
      grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
      gap: 2.5rem !important;
      margin-top: 3rem !important;
    }
    @media (max-width: 1024px) {
      .rkdf-academic-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
      }
    }
    /* ==================== ACADEMIC DEGREE LEVEL CATEGORY CARDS ==================== */
    .course-category-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      overflow: hidden !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      box-shadow: 0 4px 16px -2px rgba(15, 27, 45, 0.06) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .course-category-card:hover {
      transform: translateY(-6px) !important;
      border-color: rgba(229, 133, 37, 0.5) !important;
      box-shadow: 0 20px 40px -10px rgba(15, 27, 45, 0.14) !important;
    }
    .course-cat-header {
      background: linear-gradient(135deg, #071322 0%, #0c1e36 55%, #132a4a 100%) !important;
      color: #ffffff !important;
      padding: 1.75rem 2rem !important;
      border-bottom: 1px solid rgba(229, 133, 37, 0.25) !important;
      display: flex !important;
      align-items: flex-start !important;
      justify-content: space-between !important;
      gap: 1rem !important;
      position: relative !important;
    }
    .course-cat-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      padding: 0.3rem 0.85rem !important;
      border-radius: 9999px !important;
      background: rgba(229, 133, 37, 0.18) !important;
      border: 1px solid rgba(229, 133, 37, 0.45) !important;
      color: #f59e0b !important;
      font-size: 0.72rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
    }
    .course-cat-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.85rem !important;
      font-weight: 500 !important;
      color: #ffffff !important;
      line-height: 1.25 !important;
      margin: 0.6rem 0 0.35rem 0 !important;
      transition: color 0.25s ease !important;
    }
    .course-category-card:hover .course-cat-title {
      color: #e58525 !important;
    }
    .course-cat-duration {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.45rem !important;
      font-size: 0.78rem !important;
      font-weight: 500 !important;
      color: rgba(255, 255, 255, 0.85) !important;
      margin-top: 0.25rem !important;
    }
    .course-cat-duration svg {
      width: 14px !important;
      height: 14px !important;
      color: #e58525 !important;
      stroke: currentColor !important;
      flex-shrink: 0 !important;
    }
    .course-cat-iconbox {
      width: 50px !important;
      height: 50px !important;
      min-width: 50px !important;
      border-radius: 14px !important;
      background: rgba(255, 255, 255, 0.1) !important;
      border: 1px solid rgba(255, 255, 255, 0.2) !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
      transition: all 0.3s ease !important;
    }
    .course-category-card:hover .course-cat-iconbox {
      background: #e58525 !important;
      color: #071322 !important;
      transform: scale(1.08) !important;
    }
    .course-cat-body {
      padding: 2rem !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      flex: 1 1 auto !important;
      background: #ffffff !important;
      gap: 1.5rem !important;
    }
    .course-cat-desc {
      font-size: 0.925rem !important;
      line-height: 1.65 !important;
      color: #475569 !important;
      margin: 0 !important;
    }
    .course-cat-tracks-label {
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      color: #0f1b2d !important;
      margin-bottom: 0.75rem !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
    }
    .course-cat-tracks-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 0.6rem !important;
    }
    @media (max-width: 640px) {
      .course-cat-tracks-grid {
        grid-template-columns: 1fr !important;
      }
    }
    .course-cat-chip {
      display: flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
      padding: 0.65rem 0.85rem !important;
      border-radius: 10px !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      font-size: 0.8125rem !important;
      font-weight: 500 !important;
      color: #334155 !important;
      transition: all 0.2s ease !important;
    }
    .course-cat-chip:hover {
      background: #ffffff !important;
      border-color: #cbd5e1 !important;
      color: #0f1b2d !important;
      transform: translateX(2px) !important;
    }
    .course-cat-chip-dot {
      width: 6px !important;
      height: 6px !important;
      border-radius: 9999px !important;
      background: #e58525 !important;
      flex-shrink: 0 !important;
    }
    .course-cat-action-btn {
      width: 100% !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      padding: 0.9rem 1.5rem !important;
      border-radius: 14px !important;
      background: #071322 !important;
      border: 1px solid #071322 !important;
      color: #ffffff !important;
      font-weight: 700 !important;
      font-size: 0.8125rem !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      text-decoration: none !important;
      box-shadow: 0 4px 12px rgba(7, 19, 34, 0.15) !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
      cursor: pointer !important;
    }
    .course-cat-action-btn:hover {
      background: linear-gradient(135deg, #071322 0%, #152f55 100%) !important;
      border-color: #e58525 !important;
      box-shadow: 0 8px 24px rgba(7, 19, 34, 0.25) !important;
    }
    .course-cat-action-btn span {
      color: #ffffff !important;
    }
    .course-cat-action-btn svg {
      width: 16px !important;
      height: 16px !important;
      color: #e58525 !important;
      stroke: currentColor !important;
      transition: transform 0.25s ease !important;
    }
    .course-cat-action-btn:hover svg {
      transform: translateX(4px) !important;
    }
    /* ==================== PH.D. FACULTY RESEARCH CARDS REDESIGN ==================== */
    .phd-research-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      overflow: hidden !important;
      display: flex !important;
      flex-direction: column !important;
      box-shadow: 0 4px 20px -4px rgba(15, 27, 45, 0.06) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .phd-research-card:hover {
      transform: translateY(-6px) !important;
      border-color: rgba(229, 133, 37, 0.5) !important;
      box-shadow: 0 24px 48px -12px rgba(15, 27, 45, 0.14), 0 0 0 1px rgba(229, 133, 37, 0.35) !important;
    }
    .phd-card-header {
      background: linear-gradient(135deg, #071322 0%, #0c1e36 55%, #132a4a 100%) !important;
      position: relative !important;
      padding: 1.75rem 2rem !important;
      border-bottom: 1px solid rgba(229, 133, 37, 0.25) !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 1.25rem !important;
    }
    .phd-header-left {
      display: flex !important;
      flex-direction: column !important;
      gap: 0.35rem !important;
    }
    .phd-header-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      padding: 0.25rem 0.75rem !important;
      border-radius: 9999px !important;
      background: rgba(229, 133, 37, 0.18) !important;
      border: 1px solid rgba(229, 133, 37, 0.4) !important;
      color: #f59e0b !important;
      font-size: 0.7rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      width: fit-content !important;
    }
    .phd-card-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.65rem !important;
      font-weight: 500 !important;
      color: #ffffff !important;
      line-height: 1.25 !important;
      margin: 0.25rem 0 0 0 !important;
      transition: color 0.25s ease !important;
    }
    .phd-research-card:hover .phd-card-title {
      color: #e58525 !important;
    }
    .phd-header-iconbox {
      width: 52px !important;
      height: 52px !important;
      min-width: 52px !important;
      border-radius: 16px !important;
      background: rgba(255, 255, 255, 0.1) !important;
      border: 1px solid rgba(255, 255, 255, 0.2) !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
      transition: all 0.3s ease !important;
    }
    .phd-header-iconbox svg {
      width: 26px !important;
      height: 26px !important;
      color: #e58525 !important;
      stroke: #e58525 !important;
    }
    .phd-research-card:hover .phd-header-iconbox {
      background: #e58525 !important;
      border-color: #e58525 !important;
      transform: scale(1.08) rotate(3deg) !important;
    }
    .phd-research-card:hover .phd-header-iconbox svg {
      color: #071322 !important;
      stroke: #071322 !important;
    }
    .phd-card-body {
      padding: 1.85rem 2rem 2rem 2rem !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      flex: 1 1 auto !important;
      gap: 1.5rem !important;
      background: #ffffff !important;
    }
    .phd-section-label {
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      color: #0f1b2d !important;
      margin-bottom: 0.85rem !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
    }
    .phd-thrust-count {
      font-size: 0.7rem !important;
      font-weight: 700 !important;
      color: #e58525 !important;
      background: #fff7ed !important;
      border: 1px solid #ffedd5 !important;
      padding: 0.2rem 0.6rem !important;
      border-radius: 9999px !important;
      letter-spacing: 0.04em !important;
    }
    .phd-thrust-grid {
      display: flex !important;
      flex-wrap: wrap !important;
      gap: 0.55rem !important;
    }
    .phd-thrust-chip {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
      padding: 0.55rem 0.85rem !important;
      border-radius: 10px !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      font-size: 0.8125rem !important;
      font-weight: 500 !important;
      color: #334155 !important;
      line-height: 1.35 !important;
      transition: all 0.2s ease !important;
    }
    .phd-thrust-chip:hover {
      background: #ffffff !important;
      border-color: #cbd5e1 !important;
      color: #0f1b2d !important;
      transform: translateY(-1px) !important;
      box-shadow: 0 2px 6px rgba(15, 27, 45, 0.06) !important;
    }
    .phd-thrust-dot {
      width: 6px !important;
      height: 6px !important;
      border-radius: 9999px !important;
      background: #e58525 !important;
      flex-shrink: 0 !important;
    }
    .phd-eligibility-box {
      background: linear-gradient(135deg, #fffdfa 0%, #fef8ee 100%) !important;
      border: 1px solid rgba(229, 133, 37, 0.25) !important;
      border-left: 4px solid #e58525 !important;
      border-radius: 14px !important;
      padding: 1.15rem 1.25rem !important;
      box-shadow: 0 2px 8px rgba(229, 133, 37, 0.04) !important;
      margin-top: 1.5rem !important;
    }
    .phd-eligibility-header {
      display: flex !important;
      align-items: center !important;
      gap: 0.45rem !important;
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.06em !important;
      color: #b45309 !important;
      margin-bottom: 0.45rem !important;
    }
    .phd-eligibility-text {
      font-size: 0.8125rem !important;
      line-height: 1.6 !important;
      color: #475569 !important;
      margin: 0 !important;
    }
    .phd-apply-btn {
      width: 100% !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 0.6rem !important;
      padding: 0.95rem 1.5rem !important;
      border-radius: 14px !important;
      background: #f1f5f9 !important;
      border: 1px solid #e2e8f0 !important;
      color: #0f1b2d !important;
      font-weight: 700 !important;
      font-size: 0.8125rem !important;
      text-transform: uppercase !important;
      letter-spacing: 0.06em !important;
      box-shadow: 0 2px 4px rgba(15, 27, 45, 0.04) !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
      text-decoration: none !important;
      cursor: pointer !important;
    }
    .phd-apply-btn span {
      color: #0f1b2d !important;
      transition: color 0.3s ease !important;
    }
    .phd-apply-btn svg {
      color: #e58525 !important;
      stroke: #e58525 !important;
      transition: all 0.3s ease !important;
    }
    .phd-research-card:hover .phd-apply-btn,
    .phd-apply-btn:hover {
      background: linear-gradient(135deg, #071322 0%, #132a4a 100%) !important;
      border-color: #071322 !important;
      box-shadow: 0 8px 20px -4px rgba(7, 19, 34, 0.35) !important;
    }
    .phd-research-card:hover .phd-apply-btn span,
    .phd-apply-btn:hover span {
      color: #ffffff !important;
    }
    .phd-research-card:hover .phd-apply-btn svg,
    .phd-apply-btn:hover svg {
      color: #e58525 !important;
      stroke: #e58525 !important;
      transform: translateX(4px) !important;
    }
    /* ==================== NEP COMMON COURSES CARDS ==================== */
    .nep-course-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 20px !important;
      padding: 1.75rem !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      box-shadow: 0 4px 14px -3px rgba(15, 27, 45, 0.06) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .nep-course-card:hover {
      transform: translateY(-6px) !important;
      border-color: rgba(229, 133, 37, 0.5) !important;
      box-shadow: 0 20px 35px -10px rgba(15, 27, 45, 0.12), 0 0 0 1px rgba(229, 133, 37, 0.3) !important;
    }
    .nep-card-icon-wrap {
      width: 52px !important;
      height: 52px !important;
      min-width: 52px !important;
      border-radius: 14px !important;
      background: #071322 !important;
      border: 1px solid rgba(229, 133, 37, 0.25) !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      margin-bottom: 1.25rem !important;
      box-shadow: 0 6px 16px -3px rgba(7, 19, 34, 0.25) !important;
      transition: all 0.3s ease !important;
    }
    .nep-card-icon-wrap svg {
      width: 26px !important;
      height: 26px !important;
      color: #e58525 !important;
      stroke: #e58525 !important;
    }
    .nep-course-card:hover .nep-card-icon-wrap {
      background: linear-gradient(135deg, #e58525 0%, #c96e16 100%) !important;
      border-color: rgba(255, 255, 255, 0.4) !important;
      transform: scale(1.08) rotate(3deg) !important;
      box-shadow: 0 10px 24px -4px rgba(229, 133, 37, 0.45) !important;
    }
    .nep-course-card:hover .nep-card-icon-wrap svg {
      color: #ffffff !important;
      stroke: #ffffff !important;
    }
    .nep-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      padding: 0.25rem 0.65rem !important;
      border-radius: 6px !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      color: #0f1b2d !important;
      font-size: 0.7rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.06em !important;
      margin-bottom: 0.75rem !important;
    }
    .nep-badge.nep-badge-gold {
      background: rgba(229, 133, 37, 0.12) !important;
      border-color: rgba(229, 133, 37, 0.35) !important;
      color: #b45309 !important;
    }
    .nep-course-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.35rem !important;
      font-weight: 500 !important;
      color: #0f1b2d !important;
      line-height: 1.3 !important;
      margin-bottom: 0.75rem !important;
      transition: color 0.25s ease !important;
    }
    .nep-course-card:hover .nep-course-title {
      color: #e58525 !important;
    }
    .nep-course-desc {
      font-size: 0.8125rem !important;
      line-height: 1.6 !important;
      color: #475569 !important;
      margin-bottom: 1.25rem !important;
    }
    .nep-card-footer {
      padding-top: 0.85rem !important;
      border-top: 1px solid #f1f5f9 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      font-size: 0.75rem !important;
      color: #64748b !important;
    }
    .nep-card-footer-pill {
      font-weight: 600 !important;
      color: #0f1b2d !important;
    }
    /* ==================== INDIVIDUAL COURSE PROGRAM CARDS ==================== */
    .prog-spec-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      overflow: hidden !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      box-shadow: 0 4px 16px -4px rgba(15, 27, 45, 0.06) !important;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .prog-spec-card:hover {
      transform: translateY(-6px) !important;
      border-color: rgba(229, 133, 37, 0.5) !important;
      box-shadow: 0 24px 45px -12px rgba(15, 27, 45, 0.14), 0 0 0 1px rgba(229, 133, 37, 0.35) !important;
    }
    .prog-spec-header {
      background: linear-gradient(135deg, #071322 0%, #0c1e36 55%, #132a4a 100%) !important;
      padding: 1.65rem 1.75rem !important;
      border-bottom: 1px solid rgba(229, 133, 37, 0.25) !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 1rem !important;
    }
    .prog-spec-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      padding: 0.25rem 0.75rem !important;
      border-radius: 9999px !important;
      background: rgba(229, 133, 37, 0.18) !important;
      border: 1px solid rgba(229, 133, 37, 0.4) !important;
      color: #f59e0b !important;
      font-size: 0.7rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      width: fit-content !important;
    }
    .prog-spec-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.5rem !important;
      font-weight: 500 !important;
      color: #ffffff !important;
      line-height: 1.25 !important;
      margin: 0.35rem 0 0 0 !important;
      transition: color 0.25s ease !important;
    }
    .prog-spec-card:hover .prog-spec-title {
      color: #e58525 !important;
    }
    .prog-spec-iconbox {
      width: 48px !important;
      height: 48px !important;
      min-width: 48px !important;
      border-radius: 14px !important;
      background: rgba(255, 255, 255, 0.1) !important;
      border: 1px solid rgba(255, 255, 255, 0.2) !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      transition: all 0.3s ease !important;
    }
    .prog-spec-iconbox svg {
      width: 24px !important;
      height: 24px !important;
      color: #e58525 !important;
      stroke: #e58525 !important;
    }
    .prog-spec-card:hover .prog-spec-iconbox {
      background: #e58525 !important;
      border-color: #e58525 !important;
      transform: scale(1.08) rotate(3deg) !important;
    }
    .prog-spec-card:hover .prog-spec-iconbox svg {
      color: #071322 !important;
      stroke: #071322 !important;
    }
    .prog-spec-body {
      padding: 1.75rem !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      flex: 1 1 auto !important;
      gap: 1.25rem !important;
      background: #ffffff !important;
    }
    .prog-spec-desc {
      font-size: 0.8125rem !important;
      line-height: 1.65 !important;
      color: #475569 !important;
      margin: 0 !important;
    }
    .prog-spec-feature-list {
      list-style: none !important;
      padding: 0 !important;
      margin: 0 !important;
      display: flex !important;
      flex-direction: column !important;
      gap: 0.5rem !important;
    }
    .prog-spec-feature-item {
      display: flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
      font-size: 0.775rem !important;
      color: #334155 !important;
      line-height: 1.4 !important;
    }
    .prog-spec-feature-item svg {
      width: 14px !important;
      height: 14px !important;
      color: #16a34a !important;
      stroke: #16a34a !important;
      flex-shrink: 0 !important;
    }
    .prog-spec-stats-grid {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 0.75rem !important;
      padding-top: 1rem !important;
      margin-top: 0.5rem !important;
      border-top: 1px solid #f1f5f9 !important;
    }
    .prog-spec-stat-box {
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 12px !important;
      padding: 0.75rem 0.85rem !important;
    }
    .prog-spec-stat-lbl {
      font-size: 0.675rem !important;
      text-transform: uppercase !important;
      letter-spacing: 0.06em !important;
      color: #64748b !important;
      font-weight: 600 !important;
      display: block !important;
    }
    .prog-spec-stat-val {
      font-size: 0.8125rem !important;
      font-weight: 700 !important;
      color: #0f1b2d !important;
      margin-top: 0.2rem !important;
      display: block !important;
    }
    .prog-spec-btn {
      width: 100% !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 0.5rem !important;
      padding: 0.9rem 1.25rem !important;
      margin-top: 1rem !important;
      border-radius: 12px !important;
      background: #f1f5f9 !important;
      border: 1px solid #e2e8f0 !important;
      color: #0f1b2d !important;
      font-weight: 700 !important;
      font-size: 0.8rem !important;
      text-transform: uppercase !important;
      letter-spacing: 0.06em !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
      text-decoration: none !important;
      cursor: pointer !important;
    }
    .prog-spec-card:hover .prog-spec-btn,
    .prog-spec-btn:hover {
      background: linear-gradient(135deg, #071322 0%, #132a4a 100%) !important;
      border-color: #071322 !important;
      color: #ffffff !important;
      box-shadow: 0 8px 18px -4px rgba(7, 19, 34, 0.3) !important;
    }
    .prog-spec-card:hover .prog-spec-btn svg,
    .prog-spec-btn:hover svg {
      color: #e58525 !important;
      stroke: #e58525 !important;
      transform: translateX(4px) !important;
    }
    .rkdf-academic-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 28px !important;
      padding: 2.25rem 2.5rem !important;
      box-shadow: 0 10px 30px -10px rgba(15, 27, 45, 0.06) !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      position: relative !important;
      overflow: hidden !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    @media (max-width: 640px) {
      .rkdf-academic-card {
        padding: 1.5rem 1.25rem !important;
      }
    }
    .rkdf-academic-card::before {
      content: '' !important;
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      height: 4px !important;
      background: linear-gradient(90deg, #e58525 0%, #f59e0b 50%, #071322 100%) !important;
    }
    .rkdf-academic-card:hover {
      transform: translateY(-4px) !important;
      border-color: rgba(229, 133, 37, 0.4) !important;
      box-shadow: 0 20px 40px -15px rgba(7, 19, 34, 0.12) !important;
    }
    .rkdf-prog-header {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      flex-wrap: wrap !important;
      gap: 0.75rem !important;
      margin-bottom: 1.25rem !important;
    }
    .rkdf-prog-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.4rem !important;
      padding: 0.35rem 0.85rem !important;
      border-radius: 9999px !important;
      background: rgba(229, 133, 37, 0.12) !important;
      border: 1px solid rgba(229, 133, 37, 0.3) !important;
      color: #b45309 !important;
      font-size: 0.72rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
    }
    .rkdf-duration-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.4rem !important;
      padding: 0.35rem 0.85rem !important;
      border-radius: 9999px !important;
      background: #071322 !important;
      color: #ffffff !important;
      font-size: 0.75rem !important;
      font-weight: 600 !important;
      letter-spacing: 0.02em !important;
    }
    .rkdf-prog-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 2rem !important;
      font-weight: 500 !important;
      color: #0f1b2d !important;
      line-height: 1.25 !important;
      margin-bottom: 0.75rem !important;
    }
    .rkdf-prog-desc {
      font-size: 0.875rem !important;
      color: #475569 !important;
      line-height: 1.65 !important;
      margin-bottom: 1.5rem !important;
    }
    .rkdf-spec-section-title {
      font-size: 0.72rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.1em !important;
      color: #0f1b2d !important;
      margin-bottom: 0.85rem !important;
      display: flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
    }
    .rkdf-spec-grid {
      display: flex !important;
      flex-direction: column !important;
      gap: 0.6rem !important;
      margin-bottom: 1.5rem !important;
    }
    .rkdf-spec-item {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      padding: 0.7rem 0.95rem !important;
      border-radius: 14px !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      transition: all 0.2s ease !important;
    }
    .rkdf-spec-item:hover {
      background: #ffffff !important;
      border-color: rgba(229, 133, 37, 0.45) !important;
      box-shadow: 0 4px 12px rgba(15, 27, 45, 0.04) !important;
    }
    .rkdf-spec-name {
      font-size: 0.8125rem !important;
      font-weight: 600 !important;
      color: #1e293b !important;
      display: flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
    }
    .rkdf-spec-dot {
      width: 6px !important;
      height: 6px !important;
      border-radius: 50% !important;
      background: #e58525 !important;
      flex-shrink: 0 !important;
    }
    .rkdf-spec-tag {
      font-size: 0.68rem !important;
      font-weight: 600 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.05em !important;
      color: #e58525 !important;
      background: rgba(229, 133, 37, 0.08) !important;
      border: 1px solid rgba(229, 133, 37, 0.22) !important;
      padding: 0.2rem 0.6rem !important;
      border-radius: 8px !important;
      white-space: nowrap !important;
    }
    .rkdf-eligibility-card {
      background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%) !important;
      border: 1px solid rgba(245, 158, 11, 0.35) !important;
      border-radius: 16px !important;
      padding: 1.15rem 1.35rem !important;
      margin-top: 1.5rem !important;
      margin-bottom: 1.5rem !important;
    }
    .rkdf-eligibility-header {
      font-size: 0.72rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      color: #92400e !important;
      margin-bottom: 0.35rem !important;
      display: flex !important;
      align-items: center !important;
      gap: 0.4rem !important;
    }
    .rkdf-eligibility-text {
      font-size: 0.775rem !important;
      color: #78350f !important;
      line-height: 1.55 !important;
      margin: 0 !important;
    }
    .rkdf-prog-footer {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 1rem !important;
      padding-top: 1.25rem !important;
      border-top: 1px solid #f1f5f9 !important;
      margin-top: auto !important;
    }
    .rkdf-accred-badge {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.4rem !important;
      font-size: 0.75rem !important;
      font-weight: 600 !important;
      color: #059669 !important;
    }
    .rkdf-apply-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
      padding: 0.65rem 1.25rem !important;
      border-radius: 12px !important;
      background: #071322 !important;
      color: #ffffff !important;
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.05em !important;
      transition: all 0.25s ease !important;
      text-decoration: none !important;
      box-shadow: 0 4px 12px rgba(7, 19, 34, 0.15) !important;
    }
    .rkdf-apply-btn:hover {
      background: #e58525 !important;
      color: #ffffff !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 6px 16px rgba(229, 133, 37, 0.35) !important;
    }

    /* ==================== SPECIALIZED LABS / INFRASTRUCTURE LUXURY CARDS ==================== */
    .rkdf-lab-grid {
      display: grid !important;
      grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
      gap: 1.75rem !important;
    }
    @media (max-width: 1200px) {
      .rkdf-lab-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 1.5rem !important;
      }
    }
    @media (max-width: 640px) {
      .rkdf-lab-grid {
        grid-template-columns: 1fr !important;
        gap: 1.25rem !important;
      }
    }
    .rkdf-lab-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      padding: 1.85rem 1.65rem !important;
      box-shadow: 0 10px 25px -8px rgba(15, 27, 45, 0.05) !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      position: relative !important;
      overflow: hidden !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .rkdf-lab-card::before {
      content: '' !important;
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      height: 3px !important;
      background: linear-gradient(90deg, #e58525 0%, #f59e0b 50%, #071322 100%) !important;
      opacity: 0.8 !important;
      transition: height 0.2s ease !important;
    }
    .rkdf-lab-card:hover {
      transform: translateY(-5px) !important;
      border-color: rgba(229, 133, 37, 0.5) !important;
      box-shadow: 0 20px 35px -12px rgba(7, 19, 34, 0.12) !important;
    }
    .rkdf-lab-card:hover::before {
      height: 4px !important;
    }
    .rkdf-lab-card-top {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      margin-bottom: 1.25rem !important;
    }
    .rkdf-lab-icon-box {
      width: 48px !important;
      height: 48px !important;
      border-radius: 16px !important;
      background: linear-gradient(135deg, rgba(229, 133, 37, 0.15) 0%, rgba(229, 133, 37, 0.05) 100%) !important;
      border: 1px solid rgba(229, 133, 37, 0.3) !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      color: #b45309 !important;
      transition: all 0.3s ease !important;
    }
    .rkdf-lab-card:hover .rkdf-lab-icon-box {
      background: #071322 !important;
      border-color: #e58525 !important;
      color: #e58525 !important;
      transform: scale(1.05) !important;
    }
    .rkdf-lab-icon-box svg {
      width: 22px !important;
      height: 22px !important;
    }
    .rkdf-lab-index-tag {
      font-size: 0.7rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.1em !important;
      color: #94a3b8 !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      padding: 0.2rem 0.6rem !important;
      border-radius: 8px !important;
    }
    .rkdf-lab-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.45rem !important;
      font-weight: 500 !important;
      color: #0f1b2d !important;
      line-height: 1.3 !important;
      margin-bottom: 0.6rem !important;
    }
    .rkdf-lab-desc {
      font-size: 0.8125rem !important;
      color: #475569 !important;
      line-height: 1.55 !important;
      margin-bottom: 1.25rem !important;
    }
    .rkdf-lab-specs-box {
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 14px !important;
      padding: 0.85rem 1rem !important;
      margin-top: auto !important;
      transition: all 0.2s ease !important;
    }
    .rkdf-lab-card:hover .rkdf-lab-specs-box {
      background: #fffbeb !important;
      border-color: rgba(245, 158, 11, 0.35) !important;
    }
    .rkdf-lab-specs-header {
      font-size: 0.68rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      color: #64748b !important;
      margin-bottom: 0.25rem !important;
      display: flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
    }
    .rkdf-lab-card:hover .rkdf-lab-specs-header {
      color: #92400e !important;
    }
    .rkdf-lab-specs-text {
      font-size: 0.75rem !important;
      color: #334155 !important;
      line-height: 1.45 !important;
      margin: 0 !important;
    }

    /* ==================== CORPORATE ALLIANCES & PLACEMENT CARD ==================== */
    .rkdf-corporate-banner {
      background: linear-gradient(135deg, #071322 0%, #0c1e36 50%, #11284a 100%) !important;
      border: 1px solid rgba(229, 133, 37, 0.4) !important;
      border-radius: 28px !important;
      padding: 3rem 2.75rem !important;
      color: #ffffff !important;
      position: relative !important;
      overflow: hidden !important;
      box-shadow: 0 20px 40px -15px rgba(7, 19, 34, 0.35) !important;
    }
    @media (max-width: 768px) {
      .rkdf-corporate-banner {
        padding: 2rem 1.5rem !important;
      }
    }
    .rkdf-corporate-grid {
      display: grid !important;
      grid-template-columns: 1.15fr 1fr !important;
      gap: 3rem !important;
      align-items: center !important;
      position: relative !important;
      z-index: 1 !important;
    }
    @media (max-width: 1024px) {
      .rkdf-corporate-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
      }
    }
    .rkdf-corporate-stats {
      display: grid !important;
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 1rem !important;
      margin-top: 1.75rem !important;
      padding-top: 1.5rem !important;
      border-top: 1px solid rgba(255, 255, 255, 0.12) !important;
    }
    .rkdf-corporate-stat-item {
      text-align: left !important;
    }
    .rkdf-corporate-stat-num {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.75rem !important;
      font-weight: 500 !important;
      color: #e58525 !important;
      line-height: 1 !important;
    }
    .rkdf-corporate-stat-lbl {
      font-size: 0.68rem !important;
      font-weight: 600 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.05em !important;
      color: rgba(255, 255, 255, 0.75) !important;
      margin-top: 0.25rem !important;
    }
    .rkdf-recruiter-box {
      background: rgba(255, 255, 255, 0.07) !important;
      border: 1px solid rgba(229, 133, 37, 0.3) !important;
      border-radius: 20px !important;
      padding: 1.75rem !important;
      backdrop-filter: blur(12px) !important;
      -webkit-backdrop-filter: blur(12px) !important;
    }
    .rkdf-recruiter-grid {
      display: grid !important;
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 0.75rem !important;
      margin-top: 1rem !important;
    }
    @media (max-width: 640px) {
      .rkdf-recruiter-grid {
        grid-template-columns: repeat(2, 1fr) !important;
      }
    }
    .rkdf-recruiter-tile {
      background: rgba(255, 255, 255, 0.95) !important;
      color: #0f1b2d !important;
      border-radius: 12px !important;
      padding: 0.75rem 0.6rem !important;
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      text-align: center !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15) !important;
      transition: all 0.25s ease !important;
    }
    .rkdf-recruiter-tile:hover {
      background: #e58525 !important;
      color: #ffffff !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 4px 14px rgba(229, 133, 37, 0.4) !important;
    }

    /* ==================== ADMISSION ACTION BANNER ==================== */
    .rkdf-admission-banner {
      background: linear-gradient(135deg, #ffffff 0%, #fffdf8 50%, #fef8eb 100%) !important;
      border: 1px solid rgba(229, 133, 37, 0.35) !important;
      border-radius: 28px !important;
      padding: 2.75rem 3rem !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      flex-wrap: wrap !important;
      gap: 2rem !important;
      box-shadow: 0 15px 35px -10px rgba(15, 27, 45, 0.08) !important;
      position: relative !important;
      overflow: hidden !important;
    }
    @media (max-width: 768px) {
      .rkdf-admission-banner {
        padding: 2rem 1.5rem !important;
      }
    }
    .rkdf-admission-banner::before {
      content: '' !important;
      position: absolute !important;
      left: 0 !important;
      top: 0 !important;
      bottom: 0 !important;
      width: 5px !important;
      background: linear-gradient(180deg, #e58525 0%, #d97706 100%) !important;
    }
    .rkdf-admission-content {
      max-width: 44rem !important;
    }
    .rkdf-admission-tag {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.4rem !important;
      font-size: 0.72rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.12em !important;
      color: #b45309 !important;
      margin-bottom: 0.5rem !important;
    }
    .rkdf-admission-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 2.15rem !important;
      font-weight: 400 !important;
      color: #0f1b2d !important;
      line-height: 1.25 !important;
      margin: 0 0 0.6rem 0 !important;
    }
    @media (min-width: 640px) {
      .rkdf-admission-title {
        font-size: 2.5rem !important;
      }
    }
    .rkdf-admission-desc {
      font-size: 0.875rem !important;
      color: #475569 !important;
      line-height: 1.6 !important;
      margin: 0 0 1rem 0 !important;
    }
    .rkdf-admission-pills {
      display: flex !important;
      flex-wrap: wrap !important;
      align-items: center !important;
      gap: 0.5rem !important;
    }
    .rkdf-admission-pill-item {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      font-size: 0.72rem !important;
      font-weight: 600 !important;
      color: #0f1b2d !important;
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      padding: 0.25rem 0.75rem !important;
      border-radius: 9999px !important;
    }
    .rkdf-admission-actions {
      display: flex !important;
      align-items: center !important;
      gap: 1rem !important;
      flex-wrap: wrap !important;
    }
    .rkdf-admission-primary-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
      padding: 0.85rem 1.75rem !important;
      border-radius: 9999px !important;
      background: #e58525 !important;
      color: #071322 !important;
      font-size: 0.8125rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.06em !important;
      box-shadow: 0 6px 20px rgba(229, 133, 37, 0.35) !important;
      transition: all 0.25s ease !important;
      text-decoration: none !important;
    }
    .rkdf-admission-primary-btn:hover {
      background: #071322 !important;
      color: #ffffff !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 8px 24px rgba(7, 19, 34, 0.25) !important;
    }
    .rkdf-admission-secondary-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
      padding: 0.85rem 1.5rem !important;
      border-radius: 9999px !important;
      background: #ffffff !important;
      border: 1px solid #cbd5e1 !important;
      color: #0f1b2d !important;
      font-size: 0.8125rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.06em !important;
      transition: all 0.25s ease !important;
      text-decoration: none !important;
    }
    .rkdf-admission-secondary-btn:hover {
      border-color: #071322 !important;
      background: #f8fafc !important;
      transform: translateY(-2px) !important;
    }

    /* ==================== RTI / APPLICATION STEPS ==================== */
    .rti-steps-container {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 28px !important;
      padding: 3.5rem 2.5rem !important;
      box-shadow: 0 10px 30px -10px rgba(15, 27, 45, 0.06) !important;
    }
    .rti-steps-grid {
      display: grid !important;
      grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
      gap: 1.5rem !important;
    }
    @media (max-width: 1024px) {
      .rti-steps-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
      }
    }
    @media (max-width: 640px) {
      .rti-steps-grid {
        grid-template-columns: 1fr !important;
      }
    }
    .rti-step-card {
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 20px !important;
      padding: 1.75rem 1.5rem !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
      position: relative !important;
    }
    .rti-step-card:hover {
      background: #ffffff !important;
      transform: translateY(-5px) !important;
      box-shadow: 0 16px 32px -8px rgba(15, 27, 45, 0.12) !important;
      border-color: rgba(229, 133, 37, 0.5) !important;
    }
    .rti-step-badge {
      font-size: 0.6875rem !important;
      font-weight: 700 !important;
      letter-spacing: 0.12em !important;
      text-transform: uppercase !important;
      color: #e58525 !important;
      background: rgba(229, 133, 37, 0.1) !important;
      border: 1px solid rgba(229, 133, 37, 0.25) !important;
      padding: 0.25rem 0.65rem !important;
      border-radius: 9999px !important;
    }
    .rti-step-icon {
      width: 44px !important;
      height: 44px !important;
      min-width: 44px !important;
      border-radius: 12px !important;
      background: #071322 !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 4px 12px rgba(7, 19, 34, 0.2) !important;
      transition: all 0.3s ease !important;
    }
    .rti-step-card:hover .rti-step-icon {
      background: #e58525 !important;
      color: #ffffff !important;
      transform: scale(1.05) !important;
    }
    .rti-step-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.45rem !important;
      font-weight: 500 !important;
      color: #0f1b2d !important;
      line-height: 1.3 !important;
      margin-top: 1rem !important;
      margin-bottom: 0.5rem !important;
    }
    .rti-step-desc {
      font-size: 0.8125rem !important;
      color: #64748b !important;
      line-height: 1.6 !important;
    }
    /* ==================== GOVERNMENT RECOGNITIONS & ACCREDITATIONS ==================== */
    .recognition-grid {
      display: grid !important;
      grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
      gap: 1.5rem !important;
    }
    @media (max-width: 860px) {
      .recognition-grid {
        grid-template-columns: 1fr !important;
      }
    }
    /* ==================== BULLETPROOF LEADERSHIP & EXECUTIVE PROFILES ==================== */
    .leadership-layout-grid {
      display: grid !important;
      grid-template-columns: 360px minmax(0, 1fr) !important;
      gap: 2.5rem !important;
      align-items: start !important;
      width: 100% !important;
    }
    @media (max-width: 1024px) {
      .leadership-layout-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
      }
    }
    .leadership-sidebar {
      position: sticky !important;
      top: 140px !important;
      width: 100% !important;
    }
    .leadership-profile-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 28px !important;
      padding: 2rem 1.75rem !important;
      box-shadow: 0 14px 36px -10px rgba(15, 27, 45, 0.09) !important;
      position: relative !important;
      overflow: hidden !important;
      text-align: center !important;
    }
    .leadership-img-frame {
      position: relative !important;
      margin: 0.5rem auto 1.25rem !important;
      width: 210px !important;
      height: 220px !important;
      border-radius: 24px !important;
      overflow: hidden !important;
      border: 4px solid #ffffff !important;
      box-shadow: 0 16px 32px -8px rgba(15, 27, 45, 0.22), 0 0 0 1px rgba(229, 133, 37, 0.3) !important;
      background: #f8fafc !important;
    }
    .leadership-img-frame img {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover !important;
      object-position: top center !important;
      display: block !important;
    }
    .leadership-badge-pill {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      padding: 0.35rem 1rem !important;
      border-radius: 9999px !important;
      background: rgba(229, 133, 37, 0.1) !important;
      color: #e58525 !important;
      border: 1px solid rgba(229, 133, 37, 0.3) !important;
      font-size: 0.6875rem !important;
      font-weight: 700 !important;
      letter-spacing: 0.14em !important;
      text-transform: uppercase !important;
    }
    .leadership-stat-list {
      display: flex !important;
      flex-direction: column !important;
      gap: 0.75rem !important;
      margin-top: 1.5rem !important;
      padding-top: 1.5rem !important;
      border-top: 1px solid #e2e8f0 !important;
      text-align: left !important;
    }
    .leadership-stat-item {
      display: flex !important;
      align-items: center !important;
      gap: 0.875rem !important;
      padding: 0.65rem 0.875rem !important;
      border-radius: 14px !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      transition: all 0.2s ease !important;
    }
    .leadership-stat-item:hover {
      background: #ffffff !important;
      border-color: rgba(229, 133, 37, 0.4) !important;
      box-shadow: 0 4px 12px -2px rgba(15, 27, 45, 0.06) !important;
    }
    .leadership-stat-icon {
      width: 32px !important;
      height: 32px !important;
      min-width: 32px !important;
      max-width: 32px !important;
      border-radius: 10px !important;
      background: #071322 !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
    }
    .leadership-stat-icon svg {
      width: 16px !important;
      height: 16px !important;
      stroke: currentColor !important;
      stroke-width: 2px !important;
    }
    .leadership-stat-text {
      font-size: 0.8125rem !important;
      font-weight: 500 !important;
      color: #334155 !important;
      line-height: 1.35 !important;
    }
    .leadership-content-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 28px !important;
      padding: 2.5rem !important;
      box-shadow: 0 10px 30px -10px rgba(15, 27, 45, 0.06) !important;
    }
    @media (max-width: 640px) {
      .leadership-content-card {
        padding: 1.5rem !important;
      }
    }

    /* ==================== OFFICER CARD / DESIGNATED AUTHORITIES ==================== */
    .officer-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      padding: 2.25rem !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      box-shadow: 0 10px 30px -10px rgba(15, 27, 45, 0.06) !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
      position: relative !important;
    }
    .officer-card:hover {
      transform: translateY(-5px) !important;
      box-shadow: 0 16px 32px -8px rgba(15, 27, 45, 0.12) !important;
      border-color: rgba(229, 133, 37, 0.5) !important;
    }
    .officer-header-wrap {
      display: flex !important;
      align-items: flex-start !important;
      gap: 1.25rem !important;
    }
    .officer-avatar-box {
      width: 54px !important;
      height: 54px !important;
      min-width: 54px !important;
      border-radius: 16px !important;
      background: #071322 !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 6px 16px -2px rgba(7, 19, 34, 0.25) !important;
      transition: all 0.3s ease !important;
    }
    .officer-card:hover .officer-avatar-box {
      background: #e58525 !important;
      color: #ffffff !important;
      transform: scale(1.06) !important;
    }
    .officer-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.75rem !important;
      font-weight: 500 !important;
      color: #0f1b2d !important;
      line-height: 1.25 !important;
      margin-top: 0.25rem !important;
    }
    .officer-contact-panel {
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 18px !important;
      padding: 1.25rem 1.5rem !important;
      margin-top: 1.5rem !important;
      display: flex !important;
      flex-direction: column !important;
      gap: 0.85rem !important;
    }
    .officer-contact-item {
      display: flex !important;
      align-items: flex-start !important;
      gap: 0.75rem !important;
      font-size: 0.85rem !important;
      color: #475569 !important;
      line-height: 1.5 !important;
    }
    .officer-contact-item svg {
      width: 16px !important;
      height: 16px !important;
      min-width: 16px !important;
      color: #e58525 !important;
      stroke: currentColor !important;
      margin-top: 3px !important;
    }
    .officer-statutory-note {
      background: rgba(229, 133, 37, 0.08) !important;
      border: 1px solid rgba(229, 133, 37, 0.22) !important;
      border-radius: 14px !important;
      padding: 0.75rem 1rem !important;
      font-size: 0.75rem !important;
      color: #92400e !important;
      display: flex !important;
      align-items: center !important;
      gap: 0.6rem !important;
      margin-top: 1.5rem !important;
      font-weight: 500 !important;
    }
    .recognition-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      padding: 2rem !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      box-shadow: 0 8px 24px -6px rgba(15, 27, 45, 0.05) !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .recognition-card:hover {
      transform: translateY(-4px) !important;
      box-shadow: 0 16px 32px -8px rgba(15, 27, 45, 0.12) !important;
      border-color: rgba(229, 133, 37, 0.5) !important;
    }
    .recognition-icon-box {
      width: 48px !important;
      height: 48px !important;
      min-width: 48px !important;
      border-radius: 14px !important;
      background: #071322 !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 4px 12px rgba(7, 19, 34, 0.2) !important;
    }
    .recognition-icon-box svg,
    .pillar-icon-box svg,
    .vm-icon-box svg,
    .approval-icon-box svg,
    .insignia-box svg {
      width: 22px !important;
      height: 22px !important;
      stroke: currentColor !important;
      stroke-width: 2px !important;
      display: inline-block !important;
    }
    .recognition-tag {
      font-size: 0.6875rem !important;
      font-weight: 700 !important;
      letter-spacing: 0.12em !important;
      text-transform: uppercase !important;
      color: #e58525 !important;
      background: rgba(229, 133, 37, 0.1) !important;
      border: 1px solid rgba(229, 133, 37, 0.25) !important;
      padding: 0.35rem 0.85rem !important;
      border-radius: 9999px !important;
    }
    .recognition-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.65rem !important;
      font-weight: 500 !important;
      color: #0f1b2d !important;
      margin-top: 0.75rem !important;
      line-height: 1.3 !important;
    }
    .recognition-desc {
      font-size: 0.9rem !important;
      color: #64748b !important;
      line-height: 1.6 !important;
      margin-top: 0.5rem !important;
    }
    .recognition-footer {
      margin-top: 1.75rem !important;
      padding-top: 1rem !important;
      border-top: 1px solid #f1f5f9 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
    }
    .recognition-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.4rem !important;
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      letter-spacing: 0.05em !important;
      text-transform: uppercase !important;
      color: #071322 !important;
      transition: all 0.2s ease !important;
      text-decoration: none !important;
    }
    .recognition-btn:hover {
      color: #e58525 !important;
      transform: translateX(2px) !important;
    }

    /* ==================== FACULTY / DEANS DIRECTORY CARDS ==================== */
    .faculty-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      padding: 1.75rem !important;
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
      height: 100% !important;
      box-shadow: 0 4px 20px -4px rgba(15, 27, 45, 0.05) !important;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
      position: relative !important;
    }
    .faculty-card:hover {
      transform: translateY(-5px) !important;
      border-color: rgba(229, 133, 37, 0.5) !important;
      box-shadow: 0 20px 35px -10px rgba(15, 27, 45, 0.12), 0 0 0 1px rgba(229, 133, 37, 0.2) !important;
    }
    .faculty-icon-box {
      width: 48px !important;
      height: 48px !important;
      min-width: 48px !important;
      border-radius: 14px !important;
      background: #071322 !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 4px 12px rgba(7, 19, 34, 0.2) !important;
      transition: all 0.3s ease !important;
    }
    .faculty-card:hover .faculty-icon-box {
      background: #e58525 !important;
      color: #071322 !important;
      transform: scale(1.06) !important;
    }
    .faculty-icon-box svg {
      width: 22px !important;
      height: 22px !important;
      stroke: currentColor !important;
      stroke-width: 2px !important;
    }
    .faculty-badge {
      font-size: 0.6875rem !important;
      font-weight: 700 !important;
      letter-spacing: 0.08em !important;
      text-transform: uppercase !important;
      color: #92400e !important;
      background: rgba(229, 133, 37, 0.1) !important;
      border: 1px solid rgba(229, 133, 37, 0.25) !important;
      padding: 0.35rem 0.75rem !important;
      border-radius: 9999px !important;
      white-space: nowrap !important;
    }
    .faculty-title {
      font-family: 'Instrument Serif', Georgia, serif !important;
      font-size: 1.55rem !important;
      font-weight: 500 !important;
      color: #0f1b2d !important;
      line-height: 1.25 !important;
      margin-top: 0.85rem !important;
      transition: color 0.2s ease !important;
    }
    .faculty-card:hover .faculty-title {
      color: #071322 !important;
    }
    .faculty-role-chip {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.4rem !important;
      font-size: 0.75rem !important;
      font-weight: 600 !important;
      color: #0f1b2d !important;
      background: #f1f5f9 !important;
      border: 1px solid #e2e8f0 !important;
      padding: 0.35rem 0.75rem !important;
      border-radius: 10px !important;
      margin-top: 0.6rem !important;
    }
    .faculty-role-chip svg {
      width: 13px !important;
      height: 13px !important;
      color: #e58525 !important;
      stroke: currentColor !important;
      stroke-width: 2.2px !important;
      flex-shrink: 0 !important;
    }
    .faculty-desc {
      font-size: 0.8125rem !important;
      color: #64748b !important;
      line-height: 1.6 !important;
      margin-top: 0.75rem !important;
    }
    .faculty-footer {
      margin-top: 1.25rem !important;
      padding-top: 1rem !important;
      border-top: 1px solid #f1f5f9 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      gap: 0.75rem !important;
    }
    .faculty-mail-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.4rem !important;
      font-size: 0.75rem !important;
      font-weight: 500 !important;
      color: #475569 !important;
      text-decoration: none !important;
      transition: all 0.2s ease !important;
      max-width: 65% !important;
      overflow: hidden !important;
      text-overflow: ellipsis !important;
      white-space: nowrap !important;
    }
    .faculty-mail-btn:hover {
      color: #e58525 !important;
    }
    .faculty-mail-btn svg {
      width: 14px !important;
      height: 14px !important;
      color: #e58525 !important;
      stroke: currentColor !important;
      flex-shrink: 0 !important;
    }
    .faculty-explore-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      letter-spacing: 0.04em !important;
      text-transform: uppercase !important;
      color: #071322 !important;
      background: #f8fafc !important;
      border: 1px solid #e2e8f0 !important;
      padding: 0.4rem 0.85rem !important;
      border-radius: 9999px !important;
      text-decoration: none !important;
      transition: all 0.2s ease !important;
      flex-shrink: 0 !important;
    }
    .faculty-explore-btn:hover {
      background: #071322 !important;
      color: #ffffff !important;
      border-color: #071322 !important;
      box-shadow: 0 4px 12px rgba(7, 19, 34, 0.2) !important;
    }
    .faculty-explore-btn svg {
      width: 12px !important;
      height: 12px !important;
      stroke: currentColor !important;
      stroke-width: 2.2px !important;
      transition: transform 0.2s ease !important;
    }
    .faculty-explore-btn:hover svg {
      transform: translateX(3px) !important;
      color: #e58525 !important;
    }


    /* ==================== STATUTORY APPROVALS TABLE ==================== */
    .gov-table-wrap {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 24px !important;
      overflow: hidden !important;
      box-shadow: 0 10px 30px -10px rgba(15, 27, 45, 0.06) !important;
      width: 100% !important;
    }
    .gov-table {
      width: 100% !important;
      border-collapse: collapse !important;
      text-align: left !important;
    }
    .gov-table th {
      background: #f8fafc !important;
      color: #475569 !important;
      font-weight: 700 !important;
      font-size: 0.75rem !important;
      text-transform: uppercase !important;
      letter-spacing: 0.1em !important;
      padding: 1.25rem 2rem !important;
      border-bottom: 1px solid #e2e8f0 !important;
    }
    .gov-table td {
      padding: 1.5rem 2rem !important;
      border-bottom: 1px solid #f1f5f9 !important;
      vertical-align: middle !important;
      background: #ffffff !important;
    }
    .gov-table tr:hover td {
      background: #fbfcfe !important;
    }
    .approval-flex {
      display: flex !important;
      align-items: center !important;
      gap: 1.25rem !important;
      flex-wrap: nowrap !important;
    }
    .approval-icon-box {
      width: 44px !important;
      height: 44px !important;
      min-width: 44px !important;
      max-width: 44px !important;
      flex-shrink: 0 !important;
      border-radius: 12px !important;
      background: #071322 !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      box-shadow: 0 4px 10px rgba(7, 19, 34, 0.2) !important;
    }
    .approval-title {
      font-size: 1.05rem !important;
      font-weight: 600 !important;
      color: #0f1b2d !important;
      margin: 0 !important;
      line-height: 1.3 !important;
    }
    .approval-desc {
      font-size: 0.8125rem !important;
      color: #64748b !important;
      margin-top: 0.25rem !important;
      line-height: 1.4 !important;
    }
    .approval-year-badge {
      display: inline-flex !important;
      align-items: center !important;
      padding: 0.35rem 0.85rem !important;
      border-radius: 9999px !important;
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      background: #f1f5f9 !important;
      border: 1px solid #cbd5e1 !important;
      color: #1e293b !important;
      letter-spacing: 0.03em !important;
    }
    .approval-action-btn {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
      padding: 0.6rem 1.25rem !important;
      border-radius: 12px !important;
      background: #071322 !important;
      color: #ffffff !important;
      font-size: 0.8125rem !important;
      font-weight: 600 !important;
      text-decoration: none !important;
      box-shadow: 0 4px 12px rgba(7, 19, 34, 0.2) !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .approval-action-btn:hover {
      background: #e58525 !important;
      color: #ffffff !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 6px 16px rgba(229, 133, 37, 0.35) !important;
    }
    /* ==================== GLOBAL SPACING & VERTICAL RHYTHM ==================== */
    .space-y-20 > * + *,
    .space-y-20 > :not([hidden]) ~ :not([hidden]) {
      margin-top: 5rem !important;
    }
    .space-y-16 > * + *,
    .space-y-16 > :not([hidden]) ~ :not([hidden]) {
      margin-top: 4rem !important;
    }
    .space-y-12 > * + *,
    .space-y-12 > :not([hidden]) ~ :not([hidden]) {
      margin-top: 3rem !important;
    }
    .space-y-8 > * + *,
    .space-y-8 > :not([hidden]) ~ :not([hidden]) {
      margin-top: 2rem !important;
    }
    .space-y-6 > * + *,
    .space-y-6 > :not([hidden]) ~ :not([hidden]) {
      margin-top: 1.5rem !important;
    }
    .about-block-gap {
      margin-top: 4.5rem !important;
    }
    .section-block {
      margin-bottom: 4.5rem !important;
    }
    /* ==================== CONTENT PADDING & SPACING FIX ==================== */
    .py-20 {
      padding-top: 5rem !important;
      padding-bottom: 6rem !important;
    }
    .py-16 {
      padding-top: 4rem !important;
      padding-bottom: 4rem !important;
    }
    .py-24 {
      padding-top: 6rem !important;
      padding-bottom: 6rem !important;
    }
    /* ==================== SUB-NAVIGATION BAR ==================== */
    .about-subnav-bar,
    .about-subnav-wrapper {
      position: sticky;
      top: 80px;
      z-index: 40;
      background: #ffffff !important;
      border-top: 1px solid rgba(15, 27, 45, 0.08) !important;
      border-bottom: 1px solid #e2e8f0 !important;
      box-shadow: 0 4px 16px -2px rgba(15, 27, 45, 0.06) !important;
      padding: 0.875rem 0 !important;
      transition: all 0.2s ease;
    }
    .about-subnav-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.55rem 1.15rem;
      border-radius: 9999px;
      font-size: 0.8125rem;
      font-weight: 600;
      white-space: nowrap;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
      text-decoration: none;
    }
    .about-subnav-pill.active {
      background: #071322 !important;
      color: #ffffff !important;
      box-shadow: 0 4px 12px rgba(7, 19, 34, 0.25) !important;
      border: 1px solid rgba(229, 133, 37, 0.6) !important;
    }
    .about-subnav-pill.inactive {
      background: #f8fafc !important;
      color: #334155 !important;
      border: 1px solid #e2e8f0 !important;
    }
    .about-subnav-pill.inactive:hover {
      background: #f1f5f9 !important;
      color: #071322 !important;
      border-color: #cbd5e1 !important;
      transform: translateY(-1px);
    }
    .subnav-wrapper,
    .subnav-outer-container {
      position: relative !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      width: 100% !important;
      gap: 0.5rem !important;
    }
    .subnav-scroll-track {
      flex: 1 1 auto !important;
      min-width: 0 !important;
      display: flex !important;
      align-items: center !important;
      gap: 0.5rem !important;
      overflow-x: auto !important;
      scroll-behavior: smooth !important;
      -webkit-overflow-scrolling: touch !important;
      scrollbar-width: none !important;
      -ms-overflow-style: none !important;
      padding: 0.25rem 0.25rem !important;
    }
    .subnav-scroll-track::-webkit-scrollbar {
      display: none;
    }
    .subnav-arrow-btn {
      width: 34px !important;
      height: 34px !important;
      min-width: 34px !important;
      max-width: 34px !important;
      border-radius: 9999px !important;
      background: #ffffff !important;
      border: 1px solid #cbd5e1 !important;
      color: #071322 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      cursor: pointer !important;
      flex-shrink: 0 !important;
      box-shadow: 0 2px 8px rgba(15, 27, 45, 0.08) !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
      padding: 0 !important;
      z-index: 10 !important;
    }
    .subnav-arrow-btn:hover {
      background: #071322 !important;
      color: #e58525 !important;
      border-color: #071322 !important;
      transform: scale(1.08) !important;
      box-shadow: 0 4px 14px rgba(7, 19, 34, 0.22) !important;
    }
    .subnav-arrow-btn:active {
      transform: scale(0.95) !important;
    }
    .subnav-arrow-btn svg {
      width: 16px !important;
      height: 16px !important;
      stroke: currentColor !important;
      stroke-width: 2.2px !important;
    }

    /* ==================== RKDF LUXURY APPLICATION & CONTACT FORMS ==================== */
    .rkdf-form-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 28px !important;
      padding: 2.75rem 2.5rem !important;
      box-shadow: 0 25px 50px -12px rgba(7, 19, 34, 0.08) !important;
      position: relative !important;
      overflow: hidden !important;
    }
    @media (max-width: 640px) {
      .rkdf-form-card {
        padding: 2rem 1.25rem !important;
        border-radius: 20px !important;
      }
    }
    .rkdf-form-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #e58525 0%, #f59e0b 50%, #071322 100%);
    }
    .rkdf-form-label {
      display: block !important;
      font-size: 0.75rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.08em !important;
      color: #334155 !important;
      margin-bottom: 0.5rem !important;
      line-height: 1 !important;
    }
    .rkdf-form-label .req {
      color: #ef4444 !important;
      margin-left: 2px !important;
    }
    .rkdf-input-wrap {
      position: relative !important;
      width: 100% !important;
      display: block !important;
    }
    .rkdf-input-icon {
      position: absolute !important;
      left: 1rem !important;
      top: 50% !important;
      transform: translateY(-50%) !important;
      color: #94a3b8 !important;
      pointer-events: none !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      z-index: 2 !important;
    }
    .rkdf-input-icon svg {
      width: 18px !important;
      height: 18px !important;
      stroke: currentColor !important;
    }
    .rkdf-textarea-wrap .rkdf-input-icon {
      top: 1.125rem !important;
      transform: none !important;
    }
    .rkdf-form-input,
    .rkdf-form-select,
    .rkdf-form-textarea {
      width: 100% !important;
      height: 50px !important;
      padding-left: 3rem !important;
      padding-right: 1rem !important;
      border-radius: 14px !important;
      border: 1px solid #cbd5e1 !important;
      background-color: #f8fafc !important;
      color: #0f172a !important;
      font-size: 0.875rem !important;
      font-weight: 500 !important;
      transition: all 0.2s ease !important;
      outline: none !important;
      box-sizing: border-box !important;
      line-height: 1.5 !important;
    }
    .rkdf-form-input:hover,
    .rkdf-form-select:hover,
    .rkdf-form-textarea:hover {
      background-color: #ffffff !important;
      border-color: #94a3b8 !important;
    }
    .rkdf-form-input:focus,
    .rkdf-form-select:focus,
    .rkdf-form-textarea:focus {
      background-color: #ffffff !important;
      border-color: #e58525 !important;
      box-shadow: 0 0 0 4px rgba(229, 133, 37, 0.15) !important;
    }
    .rkdf-form-input::placeholder,
    .rkdf-form-textarea::placeholder {
      color: #94a3b8 !important;
      font-weight: 400 !important;
    }
    .rkdf-form-select {
      cursor: pointer !important;
      appearance: none !important;
      -webkit-appearance: none !important;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%2364748b' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E") !important;
      background-repeat: no-repeat !important;
      background-position: right 1rem center !important;
      background-size: 16px !important;
      padding-right: 2.75rem !important;
    }
    .rkdf-form-textarea {
      height: auto !important;
      min-height: 110px !important;
      padding-top: 0.875rem !important;
      padding-bottom: 0.875rem !important;
      resize: vertical !important;
    }
    .rkdf-form-btn {
      width: 100% !important;
      height: 54px !important;
      border-radius: 14px !important;
      background: #e58525 !important;
      color: #ffffff !important;
      font-size: 0.9375rem !important;
      font-weight: 700 !important;
      letter-spacing: 0.06em !important;
      text-transform: uppercase !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 0.6rem !important;
      border: none !important;
      cursor: pointer !important;
      box-shadow: 0 10px 25px -5px rgba(229, 133, 37, 0.4) !important;
      transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .rkdf-form-btn:hover {
      background: #cf7118 !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 14px 28px -6px rgba(229, 133, 37, 0.5) !important;
    }
    .rkdf-form-btn:active {
      transform: translateY(0) !important;
    }
    .rkdf-form-btn svg {
      width: 18px !important;
      height: 18px !important;
      stroke: #ffffff !important;
      transition: transform 0.2s ease !important;
    }
    .rkdf-form-btn:hover svg {
      transform: translateX(3px) !important;
    }
    .rkdf-trust-bar {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      flex-wrap: wrap !important;
      gap: 0.75rem !important;
      padding-top: 1.25rem !important;
      margin-top: 1.25rem !important;
      border-top: 1px solid #f1f5f9 !important;
      font-size: 0.75rem !important;
      color: #64748b !important;
    }
    .rkdf-trust-item {
      display: inline-flex !important;
      align-items: center !important;
      gap: 0.45rem !important;
      font-weight: 500 !important;
    }
    .rkdf-trust-item svg {
      width: 15px !important;
      height: 15px !important;
      flex-shrink: 0 !important;
    }

    /* ==================== STATUTORY QUOTA CALLOUT CARD ==================== */
    .statutory-quota-card {
      display: flex !important;
      align-items: flex-start !important;
      gap: 1.125rem !important;
      padding: 1.125rem 1.25rem !important;
      border-radius: 14px !important;
      background: rgba(229, 133, 37, 0.07) !important;
      border: 1px solid rgba(229, 133, 37, 0.22) !important;
      box-sizing: border-box !important;
      margin-top: 1.25rem !important;
      margin-bottom: 0.5rem !important;
    }
    .statutory-quota-icon {
      width: 40px !important;
      height: 40px !important;
      min-width: 40px !important;
      max-width: 40px !important;
      border-radius: 10px !important;
      background: rgba(229, 133, 37, 0.12) !important;
      border: 1px solid rgba(229, 133, 37, 0.28) !important;
      color: #e58525 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important;
      margin-top: 2px !important;
      box-sizing: border-box !important;
    }
    .statutory-quota-icon svg {
      width: 20px !important;
      height: 20px !important;
      min-width: 20px !important;
      color: #e58525 !important;
      stroke: #e58525 !important;
      stroke-width: 2px !important;
      margin: 0 !important;
    }
    .statutory-quota-content {
      flex: 1 1 0% !important;
      min-width: 0 !important;
      text-align: left !important;
    }
    .statutory-quota-header {
      font-size: 0.6875rem !important;
      font-weight: 700 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.1em !important;
      color: #e58525 !important;
      margin-bottom: 0.35rem !important;
      display: flex !important;
      align-items: center !important;
      flex-wrap: wrap !important;
      gap: 0.5rem !important;
      line-height: 1.3 !important;
    }
    .statutory-quota-body {
      font-size: 0.8125rem !important;
      line-height: 1.65 !important;
      color: rgba(255, 255, 255, 0.9) !important;
      margin: 0 !important;
      font-weight: 400 !important;
    }
  </style>
  <script>
    function scrollSubNav(trackId, amount) {
      const el = document.getElementById(trackId);
      if (el) {
        el.scrollBy({ left: amount, behavior: 'smooth' });
      }
    }
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.subnav-scroll-track').forEach(function(track) {
        const activeTab = track.querySelector('.about-subnav-pill.active, [data-active="true"]');
        if (activeTab) {
          setTimeout(function() {
            const trackRect = track.getBoundingClientRect();
            const tabRect = activeTab.getBoundingClientRect();
            const scrollOffset = (tabRect.left - trackRect.left) - (trackRect.width / 2) + (tabRect.width / 2);
            track.scrollBy({ left: scrollOffset, behavior: 'smooth' });
          }, 120);
        }
      });
    });
  </script>
</head>

<body class="min-h-screen bg-background text-foreground font-sans antialiased <?= e($body_class) ?>">

<!-- ==================== TOP UTILITY BAR ==================== -->
<div class="bg-brand text-brand-foreground text-xs">
  <div class="mx-auto max-w-7xl px-6 py-2.5 flex items-center justify-between gap-4">
    <div class="flex items-center gap-5">
      <span class="inline-flex items-center gap-1.5">
        <?= lucide_icon('phone', 'w-3.5 h-3.5') ?>
        <?= SITE_PHONE ?>
      </span>
      <span class="inline-flex items-center gap-1.5">
        <?= lucide_icon('mail', 'w-3.5 h-3.5') ?>
        <?= SITE_EMAIL ?>
      </span>
      <span class="hidden md:inline opacity-80">NAAC Accredited · UGC Recognized</span>
    </div>
    <div class="hidden md:flex items-center gap-5 opacity-90">
      <a href="<?= url('admissions/scholarship.php') ?>" class="hover:text-gold transition">Scholarships</a>
      <a href="<?= url('admissions/examination-forms.php') ?>" class="hover:text-gold transition">Examinations</a>
      <a href="<?= url('about/digilocker.php') ?>" class="hover:text-gold transition">DigiLocker / ABC</a>
      <a href="<?= url('placements/') ?>" class="hover:text-gold transition">Placements</a>
      <a href="<?= url('about/career.php') ?>" class="hover:text-gold transition">Careers</a>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/navbar.php'; ?>
