<?php
/**
 * about.php — About / Impact page
 *
 * Highlights GreenRide's environmental commitment. Sections:
 *   1. Hero           — mission statement with "Learn More" CTA
 *   2. Sustainability — three initiative tiles with icons
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

        <!-- ── 1. HERO ──────────────────────────────────────────── -->
        <!-- Background image: Image_People_Riders.png (set in style.css #heroA) -->
        <div id="heroA">
            <h1>Our Impact</h1>
            <p>
                GreenRide is committed to a sustainable future for Cotonou.
                We're not just a rental service; we're a movement towards a greener, healthier city.
            </p>
            <button class="learn-more">
                Learn More
            </button>
        </div>

        <!-- ── 2. SUSTAINABILITY INITIATIVES ─────────────────────── -->
        <div id="sustainability">
            <h2>Our Sustainability Initiatives</h2>

            <div id="sus-div">

                <!-- Decorative icon column -->
                <div id="icons">
                    <img src="icon/leaf-icon.svg"      alt="leaf icon">
                    <img src="icon/recycling-icon.svg" alt="recycle icon">
                    <img src="icon/tree-icon.svg"      alt="tree icon">
                </div>

                <!-- Initiative descriptions -->
                <div>
                    <span>
                        <h4>0% Emissions</h4>
                        <p>Our electric bikes and scooters produce zero emissions, contributing to cleaner air in Cotonou.</p>
                    </span>
                    <span>
                        <h4>Recycling Workshops</h4>
                        <p>We organize regular workshops to teach the community about recycling and reducing waste.</p>
                    </span>
                    <span>
                        <h4>Donation for Reforestation</h4>
                        <p>A portion of every rental goes towards reforestation projects in the region.</p>
                    </span>
                </div>

            </div><!-- /#sus-div -->
        </div><!-- /#sustainability -->

    </div><!-- /#main-content -->

    <?php
    /* Shared footer: nav links, social icons, copyright, scripts */
    include("footer.php");
    ?>

</body>
</html>
