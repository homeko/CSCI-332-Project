<?php
  require 'dbconnect.php';

  // using countAwards function, returns # of awards the actor has won
  // $sql = "SELECT *, countAwards() as AwardsWon FROM Actors ORDER BY lastName";
  $sql = "SELECT * FROM Actors ORDER BY lastName";

  if (!$result = $mysqli->query($sql)) {
      echo "Error: Our query failed to execute and here is why: </br>";
      echo "Query: " . $sql . "</br>";
      echo "Errno: " . $mysqli->errno . "</br>";
      echo "Error: " . $mysqli->error . "</br>";
      exit;
  }

  echo "<table border=1>";
  echo "<tr><th>First Name</th><th>Last Name</th><th>Birth Year</th></tr>";

  while ($s = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $s["firstName"] . "</td>";
    echo "<td>" . $s["lastName"] . "</td>";
    echo "<td>" . $s["birthYear"] . "</td>";
    echo "<td>";
    echo "<a href='delactorsrv.php?id=" . $s["ActorID"] . "'>DEL</a> ";
    echo "<a href='editactorclt.php?id=" . $s["ActorID"] . "'>EDT</a>";
    echo "</td>";
    echo "</tr>";
  }

  echo "</table>";
?>
<br />
<br />
<a href='addactorclt.htm'>Add New Actor</a><br />
<a href='welcome.php'>Back home</a>
