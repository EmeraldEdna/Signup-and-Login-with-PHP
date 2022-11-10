<?php 
// session_start();

include("connection.php");
// include("functions.php");


if ($_SERVER['REQUEST_METHOD']=="POST") {
    # code...something was posted
    $user_name = $_POST['username'];
    $password = $_POST['password'];{

if(!empty($user_name)&& !empty($password)){
      //save to database
      $user_id = random_num(20);
      $query= "SELECT * FROM users where 'USER_NAME' = '$user_name' limit 1"; 
   
      $result = mysqli_query($con,$query);
if($result){
	if ($result && mysqli_num_rows($result)>0)
	 {
		$user_data = mysqli_fetch_assoc($result);

		if ($user_data['password']=== $password) {

			$_SESSION['user_id']= $user_data['user_id'];
			header ("location: index.php");
			die;
		}
	 }
}

}
else {
    echo "Wrong username or password";
}}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="background-image:url(Images/h.jpg)">
<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
    <div id ="box" style="height:400px; margin-top:20px">
        <form method="post" action="index.php">
            <div style="font-size: 20px; margin: 10px; color: white">Login</div>
            <input id= "text" type="text" name="username"><br><br>
            <input id ="text" type="password" name="password"><br><br><br>
            <input id = "button" type="submit" value ="Login "><br><br>
            <a href="signup.php">Sign Up Instead</a>
        </form>
    </div>
</body>
</html>