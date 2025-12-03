
<footer>
        <div id="footer-nav">
            <?php if ($currentPage == "home.php") {
                echo('<a href="#hero">Hero</a>
            <a href="#details">Details</a>
            <a href="#showcase">Showcase</a>
            <a href="#contact-us">Contact</a>');
            } else {
                echo('<a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Contact Us</a>');
            }
            ?>
        </div>
        <div id="social-media">
            <a href="#"> <img src="icon/twitter-icon.svg" alt="twitter icon"> </a>
            <a href="#"> <img src="icon/facebook-icon.svg" alt="facebook icon"> </a>
            <a href="#"> <img src="icon/instagram-icon.svg" alt="instagram icon"> </a>
        </div>
        <div id="copyright">
            &copy; 2024 GreenRide. All rights reserved.
        </div>
    </footer>
<script>
  window.addEventListener("load", function () {
    const loader = document.getElementById("loading-content");
    const content = document.getElementById("main-content");

    loader.style.display = "none";
    content.style.display = "block";
  });
</script>
