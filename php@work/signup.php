
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body style="background-color: rgb(100, 100, 99);">
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
		background-color: red;
		border: none;
	}

	#box{

		background-color: lightblue;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
    <div id ="box" style="margin-top:20px; height: 400px; padding-top: 12px;">
        <form method="post" action="query.php" autocomplete ="off">
            <div style="font-size: 20px; margin: 10px; color: white">Sign Up</div>
            <input id= "text" type="text" name="username"><br><br>
            <input id ="text" type="password" name="password"><br><br><br><br>
            <input id = "button" type="submit" value ="Sign Up "><br><br>
        
           Have an Account Already? <a href="login.php">Login</a>
        </form>
    </div>
</body>
</html>
