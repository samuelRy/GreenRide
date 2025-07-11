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
    
    <div id="main-content">
        <div id="filters">
            <button class="filter-button">Bike</button>
            <button class="filter-button">Scooter</button>
            <button class="filter-button">Accessories</button>
        </div>
        <div id="productsS">
            <div>
                <img src="images/bike-2.png" alt="a bike">
                <h4>EcoBike Urban</h4>
                <p>
                    Perfect for city commutes
                </p>
            </div>
            <div>
                <img src="images/scooter-2.png" alt="a scooter">
                <h4>SpeedyScout Pro</h4>
                <p>
                    Fast and efficient for quick trips
                </p>
            </div>
            <div>
                <img src="images/helmet.png" alt="helmet">
                <h4>Safety Helmet</h4>
                <p>
                    Essential for safe riding
                </p>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>