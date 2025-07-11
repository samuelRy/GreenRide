<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    include("loading.php");
    ?>
<header>
        <div id="logo">
            <img src="icon/logo.svg" alt="GreenRide Logo" id="logo-icon">
            <div id="wrapper-scooter"><img src="icon/scooter-flyer.svg" alt="GreenRide Logo scooter" id="logo-scooter"></div>
        </div>
        <div id="header-content">
            <nav>
                <a href="home" id="<?= $currentPage == "home.php" ? 'actual': ''?>">Home</a>
                <a href="about" id="<?= $currentPage == "about.php" ? 'actual': ''?>">About</a>
                <a href="services" id="<?= $currentPage == "services.php" ? 'actual': ''?>">Services</a>
                <a href="contact" id="<?= $currentPage == "contact.php" ? 'actual': ''?>">Contact</a>
            </nav>
                <button class="book-now">
                    Book Now
                </button>
        </div>
        
    
    </header>