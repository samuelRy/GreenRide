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
        <div id="hero">
            <img src="images/Image_People_Riders.png" alt="people on a ride" id="hero-img" style="width: 95%; height: auto; filter: opacity(75%);"/>
            <h1>Our Impact</h1>
            <p>GreenRide is committed to a sustainable future for Cotonou. 
                We're not just a rental service; we're a movement towards a greener, healthier city.</p>
            <button class="learn-more">
                Learn More
            </button>
        </div>

        <div id="sustainability">
            <h2>Our Sustainability Initiatives</h2>
            <div id="sus-div">
                <div id="icons">
                    <img src="icon/leaf-icon.svg" alt="leaf icon">
                    <img src="icon/recycling-icon.svg" alt="recycle icon">
                    <img src="icon/tree-icon.svg" alt="tree icon">
                </div>
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
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>