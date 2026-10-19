<?php
ob_start();
require 'courses/under-graduate-programs.php';
$html = ob_get_clean();
file_put_contents('scratch/rendered_ug.html', $html);
echo 'Rendered ' . strlen($html) . " bytes\n";
