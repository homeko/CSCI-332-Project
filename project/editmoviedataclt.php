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
    Title: <input name="title" /></br>
    <!-- Genre: <input name="genre" required/></br> -->
    Genre:
      <select id="genre" name="genre">
        <option value="0">--Select Genre--</option>
        <option value="Action">Action</option>
        <option value="Drama">Drama</option>
        <option value="Comedy">Comedy</option>
        <option value="Animated">Animated</option>
        <option value="Adventure">Adventure</option>
        <option value="Thriller">Thriller</option>
        <option value="Horror">Horror</option>
        <option value="Sci-Fi">Sci-Fi</option>
        <option value="Romance">Romance</option>
        <option value="Documentary">Documentary</option>
      </select><br />
    RT Rating: <input name="rating" placeholder="Integers only" required /></br>
    Awards: <input name="awards" placeholder="Integers only" required /><br />
  <input type="submit" value="Save"/>

</form>
