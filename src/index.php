<?php
/**
 * index.php — Entry point
 *
 * Redirects visitors from the root URL to the home page.
 * Apache .htaccess handles clean URLs (e.g. /home → home.php),
 * so this file simply forwards traffic to that route.
 */
header("Location: home/");
?>
