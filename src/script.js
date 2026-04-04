const logo = document.querySelector('#logo-scooter');
const wrapper = document.querySelector('#wrapper-scooter');
let xx = 0;

window.addEventListener('scroll', () => {
   const maxScroll = document.documentElement.scrollHeight - window.innerHeight - 250;

  // Stop animation if we've reached the bottom
  if (window.scrollY >= maxScroll) {
    // Optional: reset or freeze the animation
    wrapper.style.transform = ''; 
    logo.classList.remove('animation-logo-left', 'animation-logo-right');
    return; // exit the handler
  }

   const y = (scrollY + Math.sin(scrollY * 0.01) * 20);
   const x = ((3 * Math.sin((y - 1.5) * 0.015) + 3) / (window.innerWidth / 2500) * 100
      + Math.cos(y * 0.002) * 30) * ((scrollY / scrollY) ? (scrollY / 100 <= 1 ? scrollY / 100 : 1) : 0);
      
   wrapper.style.transform = `translate(${x}px, ${y}px)`;
   if (x === 0 && y === 0) {
      logo.classList.remove('animation-logo-left', 'animation-logo-right');
      logo.style.transform = 'rotateY(0deg) rotateX(0deg)';
   }
});
