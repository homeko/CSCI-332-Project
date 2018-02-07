<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Actors";

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
  echo "<a href='delactor.php?id=" . $s["id"] . "'>DEL</a> ";
  echo "<a href='editactor.php?id=" . $s["id"] . "'>EDT</a>";
  echo "</td>";
  echo "</tr>";

}
echo "</table>";
?>

<a href='addactorclt.htm'>Add New Actor</a>
