<?php
  $time = "day"; // You can change this to "night" to see the other message

  if ($time == "day") {
      // This part runs if the condition is TRUE
      echo "<h1>Good Morning!</h1>";
      echo "<p>The sun is up.</p>";
  } else {
      // This part runs if the condition is FALSE
      echo "<h1>Good Night!</h1>";
      echo "<p>It is time to sleep.</p>";
  }
?>