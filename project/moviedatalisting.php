<?php
  require 'dbconnect.php';

  $sql = "SELECT * FROM MovieData ORDER BY Title";

  if (!$result = $mysqli->query($sql)) {
      echo "Error: Our query failed to execute and here is why: </br>";
      echo "Query: " . $sql . "</br>";
      echo "Errno: " . $mysqli->errno . "</br>";
      echo "Error: " . $mysqli->error . "</br>";
      exit;
  }

  echo "<table border=1>";
  echo "<tr><th>Title</th><th>Genre</th><th>Rating</th><th>Awards</th><th>Created</th><th>Updated</th></tr>";

  while ($s = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $s["Title"] . "</td>";
    echo "<td>" . $s["Genre"] . "</td>";
    echo "<td>" . $s["Rating"] . "</td>";
    echo "<td>" . $s["Awards"] . "</td>";
    echo "<td>" . $s["Created"] . "</td>";
    echo "<td>" . $s["Updated"] . "</td>";
    echo "<td>";
    echo "<a href='delmoviedatasrv.php?id=" . $s["MovieDataID"] . "'>DEL</a> ";
    echo "<a href='editmoviedataclt.php?id=" . $s["MovieDataID"] . "'>EDT</a>";
    echo "</td>";
    echo "</tr>";
  }

  echo "</table>";
?>

<a href='addactorclt.htm'>Add New Actor</a><br />
<a href='welcome.php'>Back home</a>
