<?php
$login=0;
$invalid=0;

if ($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];



$sql="SELECT * FROM registration WHERE username= '$username' AND  password='$password' ";

$result = mysqli_query($con,$sql);
if($result){
        $num= mysqli_num_rows($result);
if($num>0){
      $login=1;
      session_start();
      $_SESSION['username']=$username;
      $_SESSION['password']=$password;
      header('location: home.php');
      
}else{
    $invalid=1;
}}};
        /*
// $sql="INSERT INTO registration (username,password) VALUES ('$username','$password')";
// $result = mysqli_query($con,$sql);
// if($result){
//        // echo "<br> signup  sucess";
//        $success=1;
//     }else{
//         die(mysqli_error($con));
//         }
//         }            
// }}
*/

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title> login page </title>
  </head>
  <body>
  <?php
if($login){
    echo'<div class="alert alert-succsses alert-dismissible fade show" role="alert">
    <strong>succsses</strong> you are succsses login.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}

    ?>

<?php
if($invalid){
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>succsses</strong> invalid credentials.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}

    ?>



    <h1 class="text-center">login to our website</h1>
 <div class="continner m-5">
 <form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" name="username"  placeholder= "enter your name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="enter your password" name="password" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary w-100">login</button>
</form>

 </div>
  </body>
</html>