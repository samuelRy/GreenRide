<?php
/**
 * services.php — Services / Product catalogue page
 *
 * Displays the available rental products with filter buttons.
 * Filter buttons (Bike, Scooter, Accessories) are currently
 * presentational only — filtering logic can be wired up via JS.
 *
 * Sections:
 *   1. Filter bar   — category filter buttons
 *   2. Product grid — product cards (image, name, description)
 */
?>
<!DOCTYPE html>
<html lang="en">

<?php
/* Shared <head> partial: charset, viewport, stylesheet, favicon, title */
include("head.php");
?>

<body>

    <?php
    /* Shared header: logo, navigation, Book Now button */
    $currentPage = basename($_SERVER['PHP_SELF']);
    include("header.php");
    ?>

    <hr>

    <!-- ═══════════════════════════════════════════════════════════
         Main content wrapper
         Initially hidden; revealed by the loader teardown in footer.php
    ═══════════════════════════════════════════════════════════════ -->
    <div id="main-content">

        <!-- ── 1. FILTER BAR ────────────────────────────────────── -->
        <!-- Category toggle buttons; filtering logic to be implemented in JS -->
        <div id="filters">
            <button class="filter-button">Bike</button>
            <button class="filter-button">Scooter</button>
            <button class="filter-button">Accessories</button>
        </div>

        <!-- ── 2. PRODUCT GRID ──────────────────────────────────── -->
        <!-- Each card: product image, name (h4), short description -->
        <div id="productsS">

            <div>
                <img src="images/bike-2.png"    alt="a bike">
                <h4>EcoBike Urban</h4>
                <p>Perfect for city commutes</p>
            </div>

            <div>
                <img src="images/scooter-2.png" alt="a scooter">
                <h4>SpeedyScout Pro</h4>
                <p>Fast and efficient for quick trips</p>
            </div>

            <div>
                <img src="images/helmet.png"    alt="helmet">
                <h4>Safety Helmet</h4>
                <p>Essential for safe riding</p>
            </div>

        </div><!-- /#productsS -->

    </div><!-- /#main-content -->

    <?php
    /* Shared footer: nav links, social icons, copyright, scripts */
    include("footer.php");
    ?>

</body>
</html>
