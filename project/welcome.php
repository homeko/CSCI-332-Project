<?php
   include('session.php');
?>
<html>
   <head>
      <title>Welcome!</title>
   </head>

   <body>
      <h1>Welcome <?php echo $login_session; ?></h1>
      <h4><a href = "logout.php">Sign Out</a></h4>

      <a href="/project/actorlisting.php">Actors</a><br>
      <a href="/project/movielisting.php">Movies</a><br>
      <a href="/project/directorlisting.php">Directors</a><br>
      <a href="/project/genrelisting.php">Genres</a><br>
      <a href="/project/moviedatalisting.php">Additional Movie Data</a><br />
      <a href="/project/awardlisting.php">Awards</a><br /><br />
      <a href="/project/viewratings.php">View top rated movies</a><br>
   </body>
</html>
