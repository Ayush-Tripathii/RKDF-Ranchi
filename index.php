<?php
/**
 * RKDF University Ranchi — Homepage
 */
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

// Page-specific meta
$page_title     = SITE_NAME . ' — ' . SITE_TAGLINE;
$page_meta_desc = DEFAULT_META_DESC;

require_once __DIR__ . '/includes/header.php';
?>

<?php require_once __DIR__ . '/sections/hero.php'; ?>
<?php require_once __DIR__ . '/sections/about.php'; ?>
<?php require_once __DIR__ . '/sections/schools.php'; ?>
<?php require_once __DIR__ . '/sections/research.php'; ?>
<?php require_once __DIR__ . '/sections/placements.php'; ?>
<?php require_once __DIR__ . '/sections/news.php'; ?>
<?php require_once __DIR__ . '/sections/events.php'; ?>
<?php require_once __DIR__ . '/sections/campus_life.php'; ?>
<?php require_once __DIR__ . '/sections/alumni.php'; ?>
<?php require_once __DIR__ . '/sections/gallery.php'; ?>
<?php require_once __DIR__ . '/sections/cta.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
