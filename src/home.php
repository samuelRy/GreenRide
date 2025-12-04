<?php 
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
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
            <img src="images/Rider_Image_Resized.png" alt="rider on a bike" id="hero-img"/>
            <h1>Explore Cotonou with GreenRide</h1>
            <p>
                Discover the city's hidden gems on our eco-friendly bikes and scooters. Experience the freedom of sustainable urban mobility.</p>
            <span id="book-button">
                <button class="book-now">
                    Book Now
                </button>
            </span>
        </div>
        <div id="contentM">
            <div id="details">
                <h2>Sustainable Urban Mobility</h2>
                <p>
                    GreenRide offers a sustainable and convenient way to navigate Cotonou. 
                    Our electric bikes and scooters are perfect for exploring the city's diverse landscapes, 
                    from bustling markets to serene coastal paths.
                </p>
            </div>

            <div id="showcase">
                <h2>Our Services</h2>
                <div id="cards-products">
                    <div>
                        <img src="icon/leaf-icon.svg" alt="leaf icon">
                        <h3>Eco-Friendly</h3>
                        <p>
                            Our bikes and scooters are powered by renewable energy, reducing your carbon footprint.
                        </p>
                    </div>
                    <div>
                        <img src="icon/marker-icon.svg" alt="marker icon">
                        <h3>Explore Cotonou</h3>
                        <p>
                            Discover Cotonou's vibrant neighborhoods and hidden gems at your own pace.
                        </p>
                    </div>
                    <div>
                        <img src="icon/clock-icon.svg" alt="clock icon">
                        <h3>Flexible Rentals</h3>
                        <p>
                            Rent by the hour, day, or week. We offer flexible options to fit your schedule.
                        </p>
                    </div>
                </div>

                <div id="products">
                    <div>
                        <img src="images/bike.png" alt="a bike" style="width: 350px; height: auto;">
                        <h3>Bike Rentals</h3>
                        <p>
                            Explore Cotonou on our comfortable and eco-friendly bikes.
                        </p>
                    </div>
                    <div>
                        <img src="images/scooter.png" alt="a scooter" style="width: 350px; height: auto;">
                        <h4>Scooter Rentals</h4>
                        <p>
                            Zip through the city with ease on our electric scooters.
                        </p>
                    </div>
                    <div>
                        <img src="images/riders.png" alt="people on bikes" style="width: 350px; height: auto;">
                        <h4>Guided Tours</h4>
                        <p>
                            Join our guided tours to discover the best of Cotonou.                    
                        </p>
                    </div>
                </div>
            </div>

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

            <div id="contact-us">
                <h2>Contact Us</h2>
                <form action="" method="post" id="contact-form">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name">
                    
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email" required>
                    
                    <label for="message">Message</label>
                    <textarea type="text" name="message" id="message" required rows="10" placeholder="Your Message"></textarea>

                    <input type="submit" value="Send"/>
                </form>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
    <script src="/script.js"></script>
</body>
</html>