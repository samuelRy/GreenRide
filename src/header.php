<?php
/**
 * header.php — Shared site header / navigation partial
 *
 * Included at the top of every page (after <body>).
 * Expects $currentPage to be set by the caller before include,
 * but also sets it here as a fallback via basename().
 *
 * Responsibilities:
 *  - Renders the loading overlay (loading.php)
 *  - Displays the GreenRide logo + animated scooter
 *  - Renders the main navigation with active-link highlighting
 *  - Renders the "Book Now" CTA button
 */

/* Determine the current page filename for active-nav highlighting */
$currentPage = basename($_SERVER['PHP_SELF']);
include("loading.php");
?>

<header>

    <!-- ── Logo block ─────────────────────────────────────────── -->
    <div id="logo">
        <!-- Static wordmark / emblem -->
        <img src="icon/logo.svg" alt="GreenRide Logo" id="logo-icon">

        <!-- Scooter icon: positioned absolutely and animated via script.js -->
        <div id="wrapper-scooter">
            <img src="icon/scooter-flyer.svg" alt="GreenRide Logo scooter" id="logo-scooter">
        </div>
    </div>

    <!-- ── Navigation + CTA ────────────────────────────────────── -->
    <div id="header-content">
        <nav>
            <!-- Each link receives id="actual" when it matches the current page,
                 which applies the green highlight colour defined in style.css -->
            <a href="home"     id="<?= $currentPage == "home.php"     ? 'actual' : '' ?>">Home</a>
            <a href="about"    id="<?= $currentPage == "about.php"    ? 'actual' : '' ?>">About</a>
            <a href="services" id="<?= $currentPage == "services.php" ? 'actual' : '' ?>">Services</a>
            <a href="contact"  id="<?= $currentPage == "contact.php"  ? 'actual' : '' ?>">Contact</a>
        </nav>

        <!-- Primary CTA — opens the booking flow -->
        <button class="book-now">
            Book Now
        </button>
    </div>

</header>
