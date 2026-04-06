<?php
/**
 * 404.php — Custom "Page Not Found" error page
 *
 * Served automatically by Apache when a requested URL cannot be
 * resolved, as configured in .htaccess:
 *   ErrorDocument 404 /404.php
 *
 * Note: this page intentionally does NOT include the shared
 * header/footer partials to keep it lightweight and self-contained.
 * script_rotate.js is loaded directly to animate the scooter icon.
 */
?>
<!DOCTYPE html>
<html lang="en">

<?php
/* Shared <head> partial: charset, viewport, stylesheet, favicon, title */
include("head.php");
?>

<body>

    <!-- ── Error content ─────────────────────────────────────────── -->
    <!--
        #main-error-content styles are defined in style.css.
        The scooter (#logo-scooter-E) is animated by script_rotate.js.
    -->
    <div id="main-error-content">
        <img src="icon/logo.svg" alt="GreenRide Logo"  id="logo-icon">
        <h2>404 - Page Not Found</h2>
        <p>Sorry, the page you are looking for does not exist.</p>
        <img src="icon/scooter-flyer.svg" alt="Scooter Flyer" id="logo-scooter-E">
    </div>

    <!-- Scooter rotation animation (no full script.js needed here) -->
    <script src="./script_rotate.js"></script>

</body>
</html>
