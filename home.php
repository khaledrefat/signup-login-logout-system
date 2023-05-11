<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");  
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  </head>
  <body>
<h1 class="text-center text-warning mt-5"></h1>welcome
<?php echo $_SESSION ['username']; ?> </h1>

<div class="container">
    <a href="logout.php" class="btn btn-primary">logout</a>
</div>

  </body>
</html>