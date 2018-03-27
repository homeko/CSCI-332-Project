<?php
   include('session.php');
?>
<html>

   <head>
      <title>Welcome!</title>
   </head>

   <body>
      <h1>Welcome <?php echo $login_session; ?></h1>
      <h2><a href = "logout.php">Sign Out</a></h2>

      <a href="/project/actorlisting.php">Actors</a></br>
      <a href="/project/movielisting.php">Movies</a></br>
      <a href="/project/directorlisting.php">Directors</a></br><br /><br />
      <a href="/project/genrelisting.php">Genres</a></br></br>

   </body>

</html>
