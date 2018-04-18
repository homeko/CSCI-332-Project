<?php
require 'dbconnect.php';

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$byear = $_REQUEST['byear'];

$sql = "INSERT INTO Directors (firstName,lastName,birthYear) VALUES ('$fname','$lname','$byear')";

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
window.location = 'directorlisting.php';
</script>
