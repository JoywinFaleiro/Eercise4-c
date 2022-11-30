<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location:index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
 
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
  $verify =password_verify($password, $row['password']);
   if ($verify==1) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      header("Location: error.php");
      
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style4.css">
    <title>Login</title>
  </head>
  <body>
  <div class="wrapper">
      <div class="p1"> <p> Login </p></div>
    <form class="" action="" method="post"  autocomplete="off" >
     <div> <label for="usernameemail">Username or Email  </label>
     <div>  <input type="text" name="usernameemail" id = "usernameemail" required value=""> </div> 
       <br>
     <div>  <label for="password">Password  </label> </div> 
     <div>  <input type="password" name="password" id = "password" required value=""> 
     <br>
     <div class="reg-button">
     <button type="submit" name="submit">Login</button>
</div> 
    </form>
    <br>
    <p>Not a User? <a href="registration.php">Sign-Up</a></p>
    <img src="https://cdn-icons-png.flaticon.com/512/5087/5087579.png" width="200" height="200" alt="Login free icon" title="Login free icon">
</div> 

  </body>
</html>
