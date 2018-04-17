<?php
require 'dbconnect.php';

$aname = $_REQUEST['aname'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$movie = $_REQUEST['movie'];
$yearw = $_REQUEST['yearw'];
$sql = "INSERT INTO Awards (awardName,firstName,lastName,movie,yearWon) VALUES ('aname','$fname','$lname','$movie','$yearw')";

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
window.location = 'awardlisting.php';
</script>
