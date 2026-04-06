<!--
    footer.php — Shared site footer partial

    Included at the bottom of every page, before </body>.
    Requires $currentPage to be set by the including page.

    Responsibilities:
      - Contextual footer navigation:
          • On home.php  → smooth-scroll anchor links to page sections
          • On all other pages → generic policy / contact links
      - Social media icon links (Twitter, Facebook, Instagram)
      - Copyright notice
      - Loading overlay teardown (reveals #main-content once page is ready)
      - Loads shared scripts: script.js and script_rotate.js
-->

<footer>

    <!-- ── Contextual navigation ────────────────────────────────── -->
    <div id="footer-nav">
        <?php if ($currentPage == "home.php"): ?>
            <!-- Home page: anchor links to in-page sections -->
            <a href="#hero">Hero</a>
            <a href="#details">Details</a>
            <a href="#showcase">Showcase</a>
            <a href="#contact-us">Contact</a>
        <?php else: ?>
            <!-- All other pages: standard policy / support links -->
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Contact Us</a>
        <?php endif; ?>
    </div>

    <!-- ── Social media icons ───────────────────────────────────── -->
    <div id="social-media">
        <a href="#"> <img src="icon/twitter-icon.svg"   alt="twitter icon">   </a>
        <a href="#"> <img src="icon/facebook-icon.svg"  alt="facebook icon">  </a>
        <a href="#"> <img src="icon/instagram-icon.svg" alt="instagram icon"> </a>
    </div>

    <!-- ── Copyright ────────────────────────────────────────────── -->
    <div id="copyright">
        &copy; 2024 GreenRide. All rights reserved.
    </div>

</footer>

<!-- ── Loading overlay teardown ────────────────────────────────── -->
<!--
    Once all page assets have loaded, hide the loading screen and
    reveal #main-content as a centered flex column.
-->
<script>
  window.addEventListener("load", function () {
    const loader  = document.getElementById("loading-content");
    const content = document.getElementById("main-content");

    /* Hide the loading overlay */
    loader.style.display = "none";

    /* Reveal the page content as a centred flex column */
    content.style.display        = "flex";
    content.style.setProperty("flex-direction", "column");
    content.style.setProperty("align-items",    "center");
    content.style.setProperty("gap",            "5em");
  });
</script>

<!-- ── Page-level scripts ───────────────────────────────────────── -->
<!-- script.js        : scroll-driven scooter animation in the header -->
<!-- script_rotate.js : bounce / rotation animation on 404 & loading pages -->
<script src="./script.js"></script>
<script src="./script_rotate.js"></script>
