/**
 * script_rotate.js — Scooter rotation animation
 *
 * Used on the 404 error page and the loading overlay to bring the
 * scooter icon (#logo-scooter-E) to life with a gentle pendulum swing.
 *
 * The animation starts after a 2-second delay (to let the page settle)
 * and then runs indefinitely via requestAnimationFrame.
 *
 * How it works:
 *   - `rotate()` is called on every animation frame.
 *   - `elapsed` time (ms since first frame) drives a linear `angle`.
 *   - A sine wave converts that angle into a rotation in degrees,
 *     producing a smooth back-and-forth swing (±30°).
 *
 * NOTE: The outer guard condition below is preserved exactly as
 * written in the original source. Its intent is to check whether
 * #logo-scooter-E exists in the DOM before running; if the element
 * is absent (e.g. on pages that don't include it) the block is skipped.
 */

if (typeof scooter === "undefined") {

  /* Target element: the large scooter displayed on 404 / loading screens */
  const scooter = document.getElementById("logo-scooter-E");

  /**
   * rotate — rAF callback that applies a sinusoidal rotation to the scooter.
  *
  * @param {DOMHighResTimeStamp} time - timestamp provided by requestAnimationFrame
  */

  let angle = 0;
  let start = null;
  function rotate(time) {

    /* Capture the timestamp of the very first frame */
    if (!start) start = time;

    const elapsed = time - start;

    /* Increase angle linearly with elapsed time */
    angle = elapsed / 10;

    /* Animation tuning constants */
    const frequency = 0.013; // controls how fast the pendulum swings

    /* Commented-out vertical rotate variant (original code preserved):
       const y = Math.abs(Math.sin(angle * frequency)) * amplitude; */

    /* Current effect: horizontal pendulum swing (±30 degrees) */
    const rotation = Math.sin(angle * frequency) * 40;

    /* Apply the rotation transform to the scooter element */
    scooter.style.transform = `rotate(${rotation}deg)`;

    /* Schedule the next frame */
    requestAnimationFrame(rotate);
  }

  /* Delay the start of the animation by 2 seconds */
  setTimeout(() => {
    requestAnimationFrame(rotate);
  }, 2000);

}
