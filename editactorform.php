<?php
require 'dbconnect.php';

$sql = "SELECT * from Actors where id = " . $_REQUEST['id'];

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}
$row = $result->fetch_assoc();
$fname = $row['firstName'];
$lname = $row['lastName'];
$email = $row['birthYear'];
$id = $row['id'];

?>

<!-- form to edit actors here -->
<form action="editactor.php">
  <input type="hidden" name="id" value="<?php echo $id?>" />
  First Name:<input name="fname" value="<?php echo $fname?>" /></br>
  Last Name:<input name="lname"value="<?php echo $lname?>" /></br>
  Email: <input name="bYear" value="<?php echo $byear?>" /></br>
  <input type="submit" value="Save"/>
</form>
