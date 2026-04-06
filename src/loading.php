<!--
    loading.php — Loading overlay partial

    Displayed immediately when the page starts to load.
    Hidden by the JavaScript in footer.php once the window "load"
    event fires, at which point #main-content is revealed.

    IDs used by footer.php JS:
      #loading-content  — the overlay wrapper (set to display:none on load)
      #logo-scooter-E   — animated scooter (rotated by script_rotate.js)
-->
<div id="loading-content">
    <img src="icon/logo.svg"        alt="GreenRide Logo"  id="logo-icon">
    <h2>Loading...</h2>
    <p>Please wait while we load the content.</p>
    <img src="icon/scooter-flyer.svg" alt="Scooter Flyer" id="logo-scooter-E">
</div>
