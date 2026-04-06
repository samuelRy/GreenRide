/**
 * script.js — Scroll-driven scooter animation
 *
 * Animates the scooter icon (#logo-scooter / #wrapper-scooter) in the
 * header as the user scrolls down the page. The scooter follows a
 * curved path derived from a combination of sine and cosine functions,
 * giving it a natural, wave-like motion.
 *
 * The animation is frozen once the user nears the bottom of the page
 * (within 250px of the end) to prevent awkward overlap with the footer.
 *
 * Elements:
 *   #logo-scooter    — the <img> that receives tilt CSS classes
 *   #wrapper-scooter — the absolutely-positioned container that is
 *                      translated across the viewport
 *
 * CSS classes toggled:
 *   .animation-logo-left  — right-tilt keyframe (roRight)
 *   .animation-logo-right — left-tilt  keyframe (roLeft)
 */

const logo    = document.querySelector('#logo-scooter');
const wrapper = document.querySelector('#wrapper-scooter');

/* Tracks the previous horizontal position to detect direction changes */
let xx = 0;

window.addEventListener('scroll', () => {

  /* ── Boundary check ─────────────────────────────────────────────
     Stop the animation 250px before the very bottom so the scooter
     doesn't fly into the footer area.                              */
  const maxScroll = document.documentElement.scrollHeight - window.innerHeight - 250;

  if (window.scrollY >= maxScroll) {
    /* Reset wrapper transform and remove any tilt classes */
    wrapper.style.transform = '';
    logo.classList.remove('animation-logo-left', 'animation-logo-right');
    return;
  }

  /* ── Position calculation ───────────────────────────────────────
     y: vertical offset — base scroll position with a small sine wobble
     x: horizontal offset — sinusoidal wave scaled to the viewport width,
        blended with a slow cosine drift, and eased in during the first
        100px of scroll (scrollY/100 clamped to 1).                 */
  const y = (scrollY + Math.sin(scrollY * 0.01) * 20);
  const x = (
    (3 * Math.sin((y - 1.5) * 0.015) + 3) / (window.innerWidth / 2500) * 100
    + Math.cos(y * 0.002) * 30
  ) * ((scrollY / scrollY) ? (scrollY / 100 <= 1 ? scrollY / 100 : 1) : 0);

  /* Apply the computed translation to the scooter wrapper */
  wrapper.style.transform = `translate(${x}px, ${y}px)`;

  /* ── Reset state when back at origin ────────────────────────────
     When both x and y are 0 (top of page), clear all transforms
     and tilt classes so the scooter returns to its resting pose.   */
  if (x === 0 && y === 0) {
    logo.classList.remove('animation-logo-left', 'animation-logo-right');
    logo.style.transform = 'rotateY(0deg) rotateX(0deg)';
  }
});
