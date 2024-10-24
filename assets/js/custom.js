// Script for glowing cursor
const body = document.querySelector('body');

// Update glow when mouse moves
document.addEventListener('mousemove', function (e) {
  const x = e.clientX;
  const y = e.clientY;

  body.style.setProperty('--cursor-x', `${x}px`);
  body.style.setProperty('--cursor-y', `${y}px`);

  // Make sure the glow is visible when the cursor is inside the window
  body.style.setProperty('--glow-opacity', `1`);
});

// // Hide glow when cursor leaves the browser window
// document.addEventListener('mouseleave', function () {
//   body.style.setProperty('--glow-opacity', `0`);
// });

//     // Show glow again when cursor enters the browser window
// document.addEventListener('mouseenter', function () {
//   body.style.setProperty('--glow-opacity', `1`);
// });