<?php
require 'config.php';
if(empty($_SESSION["id"])){
  header("Location:login.php");
}
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style4.css">
    <title>Home</title>
  </head>
  <body>
    <div class="home"> 
    <h1>Welcome <?php echo $row["name"]; ?></h1>
    <p>This is our Home page</p>
    <div class="reg-button">
    <a class="a1" href="logout.php">Logout</a>
    </div>
</div> 


  </body>
</html>
