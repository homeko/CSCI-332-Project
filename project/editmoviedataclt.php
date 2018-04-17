<?php
  require 'dbconnect.php';

  $sql = "SELECT * FROM MovieData WHERE MovieDataID = " . $_REQUEST['id'];

  if (!$result = $mysqli->query($sql)) {
      echo "Error: Our query failed to execute and here is why: </br>";
      echo "Query: " . $sql . "</br>";
      echo "Errno: " . $mysqli->errno . "</br>";
      echo "Error: " . $mysqli->error . "</br>";
      exit;
  }
  $row = $result->fetch_assoc();
  $title = $_REQUEST['title'];
  $genre = $_REQUEST['genre'];
  $rating = $_REQUEST['rating'];
  $awards = $_REQUEST['awards'];
  $id = $row['MovieDataID'];
?>

<!-- form to edit actors here -->
<form action="editmoviedatasrv.php">

  <input type="hidden" name="id" value="<?php echo $id?>" />
  Title: <input name="title" value="<?php echo $title?>" /></br>
  Genre: <input name="genre"value="<?php echo $genre?>" /></br>
  Rating: <input name="rating" value="<?php echo $rating?>" /></br>
  Awards: <input name="awards" value="<?php echo $awards?>" /></br>
  <input type="submit" value="Save"/>

</form>
