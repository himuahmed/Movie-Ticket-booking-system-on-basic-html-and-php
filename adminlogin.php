<? php
session_start();

?>


<!DOCTYPE html>

<?php
include "dbconfig.php";
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">  
    
  </head>

  <body>

    <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" name="form1" action="" method="post">
    <p><input type="text" placeholder="username" name="email" required=""></p>
    <p><input type="password" placeholder="Password" name="password" required=""></p>
    <p><input type="submit" value="Log in" name="submit1"></p>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <?php
      if(isset($_POST["submit1"]))
      {
        $login=mysqli_query($conn,"SELECT * FROM admins WHERE admin_name= '$_POST[email]' && password='$_POST[password]' ");

        while($row=mysqli_fetch_array($login))
        {
          //$_SESSION["admin"]=$row["email"];
          ?>
          <script type="text/javascript">
          window.location="dashboard_h.php";
          </script>
          <?php
        }
      }
 
?>