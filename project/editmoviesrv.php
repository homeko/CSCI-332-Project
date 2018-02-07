<?php
require 'dbconnect.php';

$title = $_REQUEST['title'];
$year = $_REQUEST['year'];
$genre = $_REQUEST['genre'];
$rating = $_REQUEST['rating'];
$length = $_REQUEST['length'];
$id = $_REQUEST['id'];
$sql = "UPDATE Movies SET Title='$title', ReleaseYear='$year', Genre='$genre', Rating='rating', MovieLength='length', WHERE MovieID=$id";


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
