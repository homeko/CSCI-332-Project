<?php
  require 'dbconnect.php';

  $sql = "SELECT * FROM Awards ORDER BY awardName";
  // Oscar awards

  if (!$result = $mysqli->query($sql)) {
      echo "Error: Our query failed to execute and here is why: </br>";
      echo "Query: " . $sql . "</br>";
      echo "Errno: " . $mysqli->errno . "</br>";
      echo "Error: " . $mysqli->error . "</br>";
      exit;
  }

  echo "<table border=1>";
  echo "<tr><th>Award Name</th><th>First Name</th><th>Last Name</th><th>Movie</th><th>Year Won</th></tr>";

  while ($s = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $s["awardName"] . "</td>";
    echo "<td>" . $s["firstName"] . "</td>";
    echo "<td>" . $s["lastName"] . "</td>";
    echo "<td>" . $s["Movie"] . "</td>";
    echo "<td>" . $s["yearWon"] . "</td>";
    echo "<td>";
    echo "<a href='delawardsrv.php?id=" . $s["AwardID"] . "'>DEL</a> ";
    echo "<a href='editawardclt.php?id=" . $s["AwardID"] . "'>EDT</a>";
    echo "</td>";
    echo "</tr>";
  }

  echo "</table>";
?>

<br />
<br />
<a href='addawardclt.htm'>Add New Award</a><br />
<a href='welcome.php'>Back home</a>
