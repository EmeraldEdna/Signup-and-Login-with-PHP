<?php
session_start();

include("connection.php");
include("functions.php");




// if ($_SERVER['REQUEST_METHOD']=="POST") {
    # code...something was posted
    $user_name = $_POST['username'];
    $password = $_POST['password'];

if(!empty($user_name)&& !empty($password)){
      //save to database
      $user_id = random_num(20);
 
      $query= "INSERT INTO `users`(`USER_ID`, `USER_NAME`, `USER_PASS`) VALUES ('$user_id','$user_name','$password')";
      
     
     $query2 = mysqli_query($con,$query);
    
    
// header("location: login.php");
// die;

}
else {
    echo "Invalid credentials";

}

include("login.php");
?>
