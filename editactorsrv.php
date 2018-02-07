<?php
require 'dbconnect.php';

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$byear = $_REQUEST['byear'];
$id = $_REQUEST['id'];
$sql = "UPDATE Actors SET firstName='$fname', lastName='$lname', birthYear='$byear' WHERE id = $id";

// debugging
echo $sql

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
window.location = 'actorlisting.php';
</script>
