<? php

$mysqli = new mysqli('127.0.0.1', 'kevino26_reg_use', 'SomePW526', 'kevino26_movies');

if ($mysqli->connect_errno) {

    echo "Sorry, this website is experiencing problems.";

    echo "Error: Failed to make a MySQL connection, here is why: </br>";
    echo "Errno: " . $mysqli->connect_errno . "</br>";
    echo "Error: " . $mysqli->connect_error . "</br>";

    exit;
}

$sql = "SELECT * FROM Actors";
if (!$result = $mysqli->query($sql)) {

    echo "Sorry, the website is experiencing problems.";

    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}


?>
