<?php
  require 'dbconnect.php';

  // using addmovieclt, to add movies to table
  $title = $_REQUEST['title'];
  $year = $_REQUEST['year'];
  $length = $_REQUEST['length'];
  $sql = "INSERT INTO Movies (Title,ReleaseYear,MovieLength) VALUES ('$title','$year','$length')";

  if (!$result = $mysqli->query($sql)) {
      echo "Error: Our query failed to execute and here is why: </br>";
      echo "Query: " . $sql . "</br>";
      echo "Errno: " . $mysqli->errno . "</br>";
      echo "Error: " . $mysqli->error . "</br>";
      exit;
  }
?>

<!-- java script here -->
<script>
window.location = 'movielisting.php';
</script>
