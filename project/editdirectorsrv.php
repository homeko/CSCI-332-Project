<?php
require 'dbconnect.php';

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$byear = $_REQUEST['bYear'];
$id = $_REQUEST['id'];
$sql = "UPDATE Directors SET firstName='$fname', lastName='$lname', birthYear='$byear' WHERE DirectorID=$id";


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
