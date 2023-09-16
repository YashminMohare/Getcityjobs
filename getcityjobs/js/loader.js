// Get the loader container element
const loaderContainer = document.getElementById("loader-container");
// Get the loader box element
const loaderBox = document.getElementById("loader-box");
// Define an array of pre-defined colors
const colors = ["#10b610;", "blue", "yellow"];
// Set the initial color index to 0
let colorIndex = 0;

// Show the loader when the page is loading
window.addEventListener("load", () => {
  loaderContainer.style.display = "none";
});

// Change the border top color every 2 seconds
setInterval(() => {
  // Get the current color from the colors array based on the color index
  const currentColor = colors[colorIndex];
  // Set the border top color of the loader box to the current color
  loaderBox.style.borderTopColor = currentColor;
  // Increment the color index or reset it to 0 if it reaches the end of the array
  colorIndex = (colorIndex + 1) % colors.length;
}, 2000);
