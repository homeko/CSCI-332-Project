<?php
  require 'dbconnect.php';

  // using countAwards function, returns # of awards the actor has won
  $sql = "SELECT * FROM Directors ORDER BY lastName";

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
    echo "<a href='deldirectorsrv.php?id=" . $s["DirectorID"] . "'>DEL</a> ";
    echo "<a href='editdirectorclt.php?id=" . $s["DirectorID"] . "'>EDT</a>";
    echo "</td>";
    echo "</tr>";
  }

  echo "</table>";
?>

<a href='adddirectorclt.htm'>Add new director</a><br />
<a href='welcome.php'>Back home</a>
