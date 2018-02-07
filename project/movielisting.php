<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Movies ORDER BY Title";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<table border=1>";
echo "<tr><th>Title</th><th>Release Year</th><th>Rating</th><th>Length (minutes)</th></tr>";

while ($s = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $s["Title"] . "</td>";
  echo "<td>" . $s["ReleaseYear"] . "</td>";
  echo "<td>" . $s["Genre"] . "</td>";
  echo "<td>" . $s["Rating"] . "</td>";
  echo "<td>" . $s["MovieLength"] . "</td>";
  echo "<td>";
  echo "<a href='delmoviesrv.php?id=" . $s["MovieID"] . "'>DEL</a> ";
  echo "<a href='editmovieclt.php?id=" . $s["MovieID"] . "'>EDT</a>";
  echo "</td>";
  echo "</tr>";
}

echo "</table>";
?>

<a href='addmovieclt.htm'>Add New Movie</a>
