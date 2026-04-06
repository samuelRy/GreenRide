<?php
/**
 * contact.php — Booking / Contact page
 *
 * Allows users to submit a ride booking request.
 * The form (POST) currently has no server-side handler attached;
 * add form-processing logic or a mailer here when ready.
 *
 * Sections:
 *   1. Booking form  — name, email, date, product selector, submit
 *   2. Confirmation  — static thank-you message shown below the form
 *   3. Map           — static map image of the service area
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
    <div id="main-content" style="margin-top: 2em;">

        <h2>Book Your Eco-Friendly Ride</h2>

        <!-- ── 1. BOOKING FORM ──────────────────────────────────── -->
        <!--
            TODO: add a server-side handler (action URL) or a
            JavaScript fetch() call to process this form.
            The #product <select> is currently empty — populate its
            <option> elements dynamically or via PHP.
        -->
        <form action="" method="post">
            <input type="text"   name="name"    id="name"    placeholder="Your Name"   required>
            <input type="email"  name="email"   id="email"   placeholder="Your Email"  required>
            <input type="date"   name="date"    id="date"    placeholder="Select Date" required>

            <!-- Vehicle / product selector — options to be populated -->
            <select name="product" id="product" required>
                <option value="">Select Date</option>
            </select>

            <input type="submit" value="Send">
        </form>

        <!-- ── 2. CONFIRMATION MESSAGE ──────────────────────────── -->
        <p id="thanks">Thank you for your booking request! We will contact you shortly to confirm your reservation.</p>

        <!-- ── 3. SERVICE AREA MAP ──────────────────────────────── -->
            <img src="images/map.png" alt="a map" id="map">

    </div><!-- /#main-content -->

    <?php
    /* Shared footer: nav links, social icons, copyright, scripts */
    include("footer.php");
    ?>

</body>
</html>
