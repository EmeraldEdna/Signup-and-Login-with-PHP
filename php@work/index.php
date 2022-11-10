<?php
    session_start();
    $_SESSION;
    //include("login.php");
    
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Page</title>
  </head>
  <body
    style="
      background-color: rgb(234, 176, 236);
      background-image: url(Images/afro.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    "
  >
    <a href="logout.php"> <b>Logout</b> </a>

    <br />
    <h2 style="color: rgb(255, 255, 255);">
      Hello
      <?php echo $_SESSION ['user_name'];?>Welcome to the Front Page
    </h2>
  </body>
</html>
