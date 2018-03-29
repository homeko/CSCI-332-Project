<?php
  require 'dbconnect.php';

  // create view - sort by ratings desc
  // w/ awards column?

  $sql = "SELECT * FROM Top_ratings";

  if (!$result = $mysqli->query($sql)) {
      echo "Error: Our query failed to execute and here is why: </br>";
      echo "Query: " . $sql . "</br>";
      echo "Errno: " . $mysqli->errno . "</br>";
      echo "Error: " . $mysqli->error . "</br>";
      exit;
  }

  echo "<table border=1>";
  echo "<tr><th>Title</th><th>Rating</th>";

  while ($s = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $s["Title"] . "</td>";
    echo "<td>" . $s["Rating"] . "</td>";
    // echo "<td>";
    // echo "<a href='delactorsrv.php?id=" . $s["ActorID"] . "'>DEL</a> ";
    // echo "<a href='editactorclt.php?id=" . $s["ActorID"] . "'>EDT</a>";
    echo "</td>";
    echo "</tr>";
  }

  echo "</table>";


 ?>
