<?php
  require 'dbconnect.php';

  $sql = "SELECT * FROM Genres";

  if (!$result = $mysqli->query($sql)) {
      echo "Error: Our query failed to execute and here is why: </br>";
      echo "Query: " . $sql . "</br>";
      echo "Errno: " . $mysqli->errno . "</br>";
      echo "Error: " . $mysqli->error . "</br>";
      exit;
  }

  echo "<table border=1>";
  echo "<tr><th>Genre</th></tr>";

  while ($s = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $s["firstName"] . "</td>";
    echo "<td>";
    echo "<a href='delgenresrv.php?id=" . $s["ActorID"] . "'>DEL</a> ";
    echo "<a href='editgenreclt.php?id=" . $s["ActorID"] . "'>EDT</a>";
    echo "</td>";
    echo "</tr>";
  }

  echo "</table>";
?>

<br />
<br />
<a href='addgenreclt.htm'>Add new genre</a><br />
<a href='welcome.php'>Back home</a>
