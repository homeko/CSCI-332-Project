<?php
require 'dbconnect.php';

$sql = "SELECT * FROM Movies WHERE MovieID = " . $_REQUEST['id'];

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$row = $result->fetch_assoc();
$title = $row['title'];
$year = $row['year'];
$length = $row['length'];
$id = $row['MovieID'];

?>

<!-- form to edit actors here -->
<form action="editmoviesrv.php">
  <input type="hidden" name="id" value="<?php echo $id?>" />
  Movie title:<input name="title" value="<?php echo $title?>" /></br>
  Release year:<input name="year"value="<?php echo $year?>" /></br>
  Movie length: <input name="length" value="<?php echo $length?>" /></br>
  <input type="submit" value="Save"/>
</form>
