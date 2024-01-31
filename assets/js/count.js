
// Function to animate number counting
function animateNumberCount() {
  const numElements = document.querySelectorAll('.num');
  numElements.forEach(element => {
    const finalValue = parseInt(element.getAttribute('data-val'));
    let currentValue = 0;
    const increment = Math.ceil(finalValue / 100);
    const animationDuration = 2000; // Adjust the animation duration (in milliseconds) as desired
    const interval = animationDuration / increment;

    const timer = setInterval(() => {
      currentValue += increment;
      if (currentValue >= finalValue) {
        clearInterval(timer);
        currentValue = finalValue;
      }
      element.textContent = currentValue.toLocaleString();
    }, interval);
  });
}

// Call the function when the page is fully loaded
window.addEventListener('load', animateNumberCount);
