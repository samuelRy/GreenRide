<!DOCTYPE html>
<html lang="en">
<?php
    include("head.php");
    ?>
<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    include("header.php");
    ?>
    <hr>
    <div id="main-content" style="margin-top: 2em;">
        <h2>Book Your Eco-Friendly Ride</h2>

        <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <input type="date" name="date" id="date" placeholder="Select Date" required>
            <select name="product" id="product" required>
                <option value="">Select Date</option>
            </select>
            <input type="submit" value="Send">
        </form>
        <p>Thank you for your booking request! We will contact you shortly to confirm your reservation.</p>

        <div id="map">
            <img src="images/map.png" alt="a map">
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>