<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/functions.php';
$page_title = 'University Academic Council | ' . SITE_NAME;
$page_meta_desc = 'Meet the Academic Council members of RKDF University Ranchi, with their designations and institutional affiliations.';
$members = require dirname(__DIR__) . '/data/boards/academic_council.php';
// Preserve the names and designations published in the official source.
$members[3]['organization'] = 'Indian Institute of Management, Ranchi';
$members[6]['role'] = 'Dean Student’s Welfare';
$members[7]['role'] = 'Controller of Examinations';
$members[12]['name'] = 'Dr. Fedelic Ashish Topoo';
require_once dirname(__DIR__) . '/includes/header.php';
?>
<style>
  .uac-hero { background:linear-gradient(135deg,#071524,#142d50); color:#fff; padding:4rem 1.5rem; text-align:center; }
  .uac-wrap { max-width:1200px; margin:0 auto; }
  .uac-breadcrumb { display:flex; flex-wrap:wrap; justify-content:center; align-items:center; gap:.6rem; font-size:.75rem; color:#e99a2b; margin-bottom:1.5rem; }
  .uac-hero h1 { font-size:clamp(2.4rem,5vw,4.5rem); line-height:1.15; font-weight:400; margin:0 0 1.25rem; }
  .uac-hero h1 em { color:#ed9827; }
  .uac-hero p { max-width:620px; margin:0 auto; color:#d6dfeb; line-height:1.7; }
  .uac-actions { display:flex; flex-wrap:wrap; justify-content:center; gap:.75rem; margin-top:1.75rem; }
  .uac-link { display:inline-flex; align-items:center; justify-content:center; gap:.6rem; padding:.8rem 1.2rem; border-radius:30px; background:#ed9827; color:#08192c; font-size:.8rem; font-weight:700; text-decoration:none; }
  .uac-link-secondary { background:transparent; border:1px solid #617087; color:white; }
  .uac-main { padding:3rem 1.5rem; background:#faf8f4; }
  .uac-heading { display:flex; justify-content:space-between; align-items:end; gap:1rem; margin-bottom:1.5rem; }
  .uac-eyebrow { color:#b66510; font-size:.7rem; font-weight:700; letter-spacing:.15em; text-transform:uppercase; margin-bottom:.6rem; }
  .uac-heading h2 { font-size:2.25rem; line-height:1.2; font-weight:400; margin:0; color:#102239; }
  .uac-count { flex-shrink:0; padding:.6rem 1rem; border:1px solid #e4d6c3; border-radius:30px; font-size:.8rem; color:#61421d; }
  .uac-grid { display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:1rem; }
  .uac-member { min-width:0; background:white; border:1px solid #e0e6ed; border-radius:18px; padding:1.5rem; box-shadow:0 4px 18px #142d5005; }
  .uac-member-top { display:flex; justify-content:space-between; align-items:center; margin-bottom:1.25rem; }
  .uac-icon { display:flex; align-items:center; justify-content:center; width:40px; height:40px; border-radius:12px; background:#edf2f8; color:#bb7118; }
  .uac-number { font-size:.75rem; color:#7b8794; }
  .uac-member h3 { font-size:1.4rem; line-height:1.3; font-weight:400; color:#102239; margin:0 0 .6rem; }
  .uac-role { color:#17377b; font-size:.85rem; line-height:1.6; margin:0; }
  .uac-organization { border-top:1px solid #edf0f3; padding-top:1rem; margin:1rem 0 0; color:#64748b; font-size:.8rem; line-height:1.6; overflow-wrap:anywhere; }
  .uac-source { margin-top:1.5rem; font-size:.8rem; line-height:1.7; color:#64748b; }
  .uac-source a { color:#17377b; text-decoration:underline; text-underline-offset:3px; }
  .uac-link:focus-visible,.uac-source a:focus-visible { outline:3px solid #ed9827; outline-offset:4px; }
  @media(max-width:1023px) { .uac-grid { grid-template-columns:repeat(2,minmax(0,1fr)); } }
  @media(max-width:640px) {
    .uac-hero { padding:2.5rem 1.25rem; }
    .uac-breadcrumb span { flex-basis:100%; line-height:1.5; }
    .uac-main { padding:2rem 1.25rem; }
    .uac-heading { align-items:flex-start; flex-direction:column; }
    .uac-heading h2 { font-size:1.85rem; }
    .uac-grid { grid-template-columns:minmax(0,1fr); }
    .uac-member { padding:1.25rem; }
    .uac-actions { flex-direction:column; }
  }
</style>
<section class="uac-hero">
  <div class="uac-wrap">
    <nav class="uac-breadcrumb" aria-label="Breadcrumb">
      <a href="<?= url('/') ?>">Home</a><span aria-hidden="true" style="flex-basis:auto">/</span>
      <a href="<?= url('committees/') ?>">Committees</a><span aria-hidden="true" style="flex-basis:auto">/</span>
      <span aria-current="page">University Academic Council</span>
    </nav>
    <h1 class="font-serif">University Academic <em>Council</em></h1>
    <p>Meet the university leaders, academic experts, and institutional representatives who make up the Academic Council of RKDF University Ranchi.</p>
    <div class="uac-actions">
      <a class="uac-link" href="#council-members">Explore the members <?= lucide_icon('arrow-down', 'w-4 h-4') ?></a>
      <a class="uac-link uac-link-secondary" href="<?= url('about/board-of-governors.php') ?>">Board of Governors <?= lucide_icon('arrow-right', 'w-4 h-4') ?></a>
    </div>
  </div>
</section>
<main class="uac-main" id="council-members">
  <div class="uac-wrap">
    <div class="uac-heading">
      <div><div class="uac-eyebrow">Academic leadership</div><h2 class="font-serif">Members of the Council</h2></div>
      <span class="uac-count"><?= count($members) ?> council members</span>
    </div>
    <div class="uac-grid">
      <?php foreach ($members as $index => $member): ?>
      <article class="uac-member">
        <div class="uac-member-top"><span class="uac-icon" aria-hidden="true"><?= lucide_icon($member['icon'], 'w-5 h-5') ?></span><span class="uac-number"><?= sprintf('%02d', $index + 1) ?></span></div>
        <h3 class="font-serif"><?= e($member['name']) ?></h3>
        <p class="uac-role"><?= e($member['role']) ?></p>
        <p class="uac-organization"><?= e($member['organization']) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
