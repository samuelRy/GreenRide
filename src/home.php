<?php
/**
 * home.php — Home page
 *
 * The main landing page for GreenRide. Sections:
 *   1. Hero          — full-width banner with tagline + Book Now CTA
 *   2. Details       — brief description of the service
 *   3. Showcase      — feature cards + product cards
 *   4. Why Us        — six value-proposition cards
 *   5. Contact Us    — inline contact form
 *
 * Cache-control headers are set to prevent stale page delivery.
 */

/* Prevent browser / proxy caching of this dynamic page */
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">

<?php
/* Shared <head> partial: charset, viewport, stylesheet, favicon, title */
$currentPage = basename($_SERVER['PHP_SELF']);
include("head.php");
?>

<body>

    <?php
    /* Shared header: logo, animated scooter, navigation, Book Now button */
    $currentPage = basename($_SERVER['PHP_SELF']);
    include("header.php");
    ?>

    <hr>

    <!-- ═══════════════════════════════════════════════════════════
         Main content wrapper
         Initially hidden (display:none); revealed by footer.php JS
         once the page finishes loading.
    ═══════════════════════════════════════════════════════════════ -->
    <div id="main-content">

        <!-- ── 1. HERO ──────────────────────────────────────────── -->
        <!-- Full-width banner with background image (Rider_Image_Resized.png) -->
        <div id="hero">
            <div style="display: flex; flex-direction: column; align-items: center; width: 90%;">
                <h1>Explore Cotonou with GreenRide</h1>
                <p>
                    Discover the city's hidden gems on our eco-friendly bikes and scooters.
                    Experience the freedom of sustainable urban mobility.
                </p>
                <span id="book-button">
                    <button class="book-now">
                        Book Now
                    </button>
                </span>
            </div>
        </div>

        <!-- ── 2–5: Interior sections (padded wrapper) ──────────── -->
        <div id="contentM">

            <!-- ── 2. DETAILS ─────────────────────────────────────── -->
            <!-- Short description of the GreenRide value proposition -->
            <div id="details">
                <h2>Sustainable Urban Mobility</h2>
                <p>
                    GreenRide offers a sustainable and convenient way to navigate Cotonou.
                    Our electric bikes and scooters are perfect for exploring the city's diverse landscapes,
                    from bustling markets to serene coastal paths.
                </p>
            </div>

            <!-- ── 3. SHOWCASE ──────────────────────────────────────── -->
            <div id="showcase">
                <h2>Our Services</h2>

                <!-- Feature icon cards (Eco-Friendly, Explore, Flexible) -->
                <div id="cards-products">
                    <div>
                        <img src="icon/leaf-icon.svg" alt="leaf icon">
                        <h3>Eco-Friendly</h3>
                        <p>Our bikes and scooters are powered by renewable energy, reducing your carbon footprint.</p>
                    </div>
                    <div>
                        <img src="icon/marker-icon.svg" alt="marker icon">
                        <h3>Explore Cotonou</h3>
                        <p>Discover Cotonou's vibrant neighborhoods and hidden gems at your own pace.</p>
                    </div>
                    <div>
                        <img src="icon/clock-icon.svg" alt="clock icon">
                        <h3>Flexible Rentals</h3>
                        <p>Rent by the hour, day, or week. We offer flexible options to fit your schedule.</p>
                    </div>
                </div>

                <!-- Product image cards (Bikes, Scooters, Guided Tours) -->
                <div id="products">
                    <div>
                        <img src="images/bike.png"    alt="a bike"         style="width: 80%; height: auto;">
                        <h3>Bike Rentals</h3>
                        <p>Explore Cotonou on our comfortable and eco-friendly bikes.</p>
                    </div>
                    <div>
                        <img src="images/scooter.png" alt="a scooter"      style="width: 80%; height: auto;">
                        <h4>Scooter Rentals</h4>
                        <p>Zip through the city with ease on our electric scooters.</p>
                    </div>
                    <div>
                        <img src="images/riders.png"  alt="people on bikes" style="width: 80%; height: auto;">
                        <h4>Guided Tours</h4>
                        <p>Join our guided tours to discover the best of Cotonou.</p>
                    </div>
                </div>
            </div>

            <!-- ── 4. WHY US ─────────────────────────────────────────── -->
            <!-- Six value-proposition cards arranged in a 3×2 CSS grid -->
            <div id="why-us">
                <h2>Why choose GreenRide</h2>
                <p>A new way to explore Cotonou in a mindful way</p>

                <div id="cards-about">
                    <div>
                        <h3>Premium Bikes</h3>
                        <span class="feature-icon">🚴‍♂️</span>
                        <p>Modern fleet of electric and classic bikes, maintained daily for your safety and comfort.</p>
                    </div>
                    <div>
                        <h3>Electric Scooters</h3>
                        <span class="feature-icon">🛴</span>
                        <p>Fast and eco-friendly travels with our latest generation scooters, perfect for the city.</p>
                    </div>
                    <div>
                        <h3>Environmental Impact</h3>
                        <span class="feature-icon">🌍</span>
                        <p>Zero emissions, contribution to reforestation and raising awareness about sustainable mobility.</p>
                    </div>
                    <div>
                        <h3>Simple Reservation</h3>
                        <span class="feature-icon">📱</span>
                        <p>Easy online booking system, secure payment, and assistance 7 days a week.</p>
                    </div>
                    <div>
                        <h3>Guaranteed Maintenance</h3>
                        <span class="feature-icon">🔧</span>
                        <p>Equipment always in perfect condition thanks to our on-site maintenance workshop.</p>
                    </div>
                    <div>
                        <h3>Tarifs Abordables</h3>
                        <span class="feature-icon">💰</span>
                        <p>Competitive prices with flexible formulas: rental by the hour, half-day, or full day.</p>
                    </div>
                </div>
            </div>

            <!-- ── 5. CONTACT US ─────────────────────────────────────── -->
            <!-- Simple contact / enquiry form; no server-side handler yet -->
            <div id="contact-us">
                <h2>Contact Us</h2>
                <form action="" method="post" id="contact-form">
                    <label for="name">Name</label>
                    <input type="text"  name="name"    id="name"    placeholder="Your Name">

                    <label for="email">Email</label>
                    <input type="email" name="email"   id="email"   placeholder="Your Email" required>

                    <label for="message">Message</label>
                    <textarea           name="message" id="message" required rows="10" placeholder="Your Message"></textarea>

                    <input type="submit" value="Send"/>
                </form>
            </div>

        </div><!-- /#contentM -->

    </div><!-- /#main-content -->

    <?php
    /* Shared footer: nav links, social icons, copyright, scripts */
    include("footer.php");
    ?>

</body>
</html>
