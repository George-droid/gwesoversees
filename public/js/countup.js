
  // Initialize count-up animation
  const countUp = new CountUp('element-id', 0, 100);

  // Check if CountUp.js initialization was successful
  if (!countUp.error) {
    // Start the count-up animation
    countUp.start();
  }
   else {
    console.error(countUp.error);
  }

