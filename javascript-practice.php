<?php
  $marks = 75;

  if ($marks >= 80) {
      // Runs if marks are 80 or more
      echo "<h1>Excellent! You got an A.</h1>";
  } elseif ($marks >= 50) {
      // Runs if marks are between 50 and 79
      echo "<h1>Good job! You passed.</h1>";
  } else {
      // Runs if marks are less than 50
      echo "<h1>Sorry, you failed. Work harder!</h1>";
  }
?>