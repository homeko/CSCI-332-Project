<?php
  require 'dbconnect.php';

  $sql = "SELECT * FROM Awards WHERE AwardID = " . $_REQUEST['id'];

  if (!$result = $mysqli->query($sql)) {
      echo "Error: Our query failed to execute and here is why: </br>";
      echo "Query: " . $sql . "</br>";
      echo "Errno: " . $mysqli->errno . "</br>";
      echo "Error: " . $mysqli->error . "</br>";
      exit;
  }
  $row = $result->fetch_assoc();
  $aname = $row['awardName'];
  $fname = $row['firstName'];
  $lname = $row['lastName'];
  $byear = $row['yearWon'];
  $id = $row['AwardID'];
?>

<!-- form to edit actors here -->
<form action="editawardsrv.php">

  <input type="hidden" name="id" value="<?php echo $id?>" />
  Award name:<input name="aname" value="<?php echo $aname?>" /></br>
  First Name:<input name="fname" value="<?php echo $fname?>" /></br>
  Last Name:<input name="lname"value="<?php echo $lname?>" /></br>
  Year won: <input name="yearw" value="<?php echo $yearw?>" /></br>
  <input type="submit" value="Save"/>
  
</form>
