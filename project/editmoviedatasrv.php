<?php
require 'dbconnect.php';

$title = $_REQUEST['title'];
$genre = $_REQUEST['genre'];
$rating = $_REQUEST['rating'];
$awards = $_REQUEST['awards'];
$id = $_REQUEST['id'];

$sql = "UPDATE MovieData SET Title='$title', Genre='$genre', Rating='$rating', WHERE MovieDataID=$id";

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
window.location = 'moviedatalisting.php';
</script>
