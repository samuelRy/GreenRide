if (! typeof scooter === "undefined") {
   const scooter = document.getElementById("logo-scooter-E");
   function bounce(time) {
      let angle = 0;
      let start = null;
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
   
}

