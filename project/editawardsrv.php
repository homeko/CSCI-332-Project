<?php
require 'dbconnect.php';

$aname = $_REQUEST['aname'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$yearw = $_REQUEST['yearw'];
$id = $_REQUEST['id'];
$sql = "UPDATE Awards SET awardName='$aname', firstName='$fname', lastName='$lname', yearw='$yearw' WHERE AwardID=$id";

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
