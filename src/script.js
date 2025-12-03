const logo = document.querySelector('#logo-scooter');
const wrapper = document.querySelector('#wrapper-scooter');
let xx = 0;


window.addEventListener('scroll', () => {
   const y = (scrollY + Math.sin(scrollY * 0.01) * 20);
   const x = ((3 * Math.sin((y - 1.5) * 0.015) + 3) / (window.innerWidth / 2500) * 100
      + Math.cos(y * 0.002) * 30) * ((scrollY / scrollY) ? (scrollY / 100 <= 1 ? scrollY / 100 : 1) : 0);

   if ((xx - x < 0) && !logo.classList.contains('animation-logo-left')) {
      logo.classList.add('animation-logo-left');
      logo.classList.remove('animation-logo-right');
   } else if ((xx - x > 0) && !logo.classList.contains('animation-logo-right')) {
      logo.classList.add('animation-logo-right');
      logo.classList.remove('animation-logo-left');
   }

   xx = x;
   wrapper.style.transform = `translate(${x}px, ${y}px)`;
   if (x === 0 && y === 0) {
      logo.classList.remove('animation-logo-left', 'animation-logo-right');
      logo.style.transform = 'rotateY(0deg) rotateX(0deg)';
   }
   console.log(`Logo position - X: ${x}, Y: ${y}`);
   console.log(`Logo position - X: ${getComputedStyle(logo).left}`);
});

const scooter = document.getElementById("logo-scooter-E");

let angle = 0;
let start = null;

function bounce(time) {
   if (!start) start = time;
   const elapsed = time - start;

   // angle increases over time
   angle = elapsed / 10;
   // simulate bounce using sine wave for vertical displacement
   const amplitude = 40; // max height
   const frequency = 0.02; // how fast the bounce is
   //const y = Math.abs(Math.sin(angle * frequency)) * amplitude;
   // simulate rotation bounce
   const rotation = Math.sin(angle * frequency) * 30; // degrees

   // Apply transforms
   scooter.style.transform = `rotate(${rotation}deg)`;

   requestAnimationFrame(bounce);
}

setTimeout(() => {
   requestAnimationFrame(bounce);
}, 2000);
const sc = document.querySelector('#logo-scooter-L');
