<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $h_password= password_hash($password, PASSWORD_DEFAULT);
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  elseif(strlen(trim($password) )< 2){
    echo "<script> alert('Password must have atleast 8 characters.'); </script>";
   }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$h_password')";
      mysqli_query($conn, $query);
      echo"Registration Successful";
      header("Location: login.php");
    
    
  }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style4.css">
    <title>Registration</title>
  </head>"
  <body>
  <div class="wrapper">
      <div class="p1"> <p> Register</p></div>
    <form class="" action="" method="post" autocomplete="off">
     <div> <label for="name">Name  </label></div>
      <div> <input type="text" name="name" id = "name" required value=""> </div>
      <br>
      <div>  <label for="username">Username </label></div>
      <div>  <input type="text" name="username" id = "username" required value=""> </div>
      <br>
      <div>  <label for="email">Email </label></div>
      <div>  <input type="email" name="email" id = "email" required value=""></div>
       <br>
      <div> <label for="password">Password  </label></div>
      <div>  <input type="password" name="password" id = "password" required value=""></div>
       <br>
      <div> <label for="confirmpassword">Confirm Password  </label></div>
      <div>  <input type="password" name="confirmpassword" id = "confirmpassword" required value=""></div> 
      <br>
      <div class="reg-button">
      <button type="submit" name="submit">Sign-Up</button>
       </div>
    <p>Already have an account? <a href="login.php">Login</a></p>
  
    </form>
</div>
  
  </body>
</html>
