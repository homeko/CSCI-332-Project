<?php
require 'dbconnect.php';

$sql = "DELETE FROM Awards WHERE AwardID = " . $_REQUEST['id'];

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>
<script>
window.location = 'awardlisting.php';
</script>
