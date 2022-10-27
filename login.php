<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

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

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>  -->

<!DOCTYPE html>
<html>
<head>
	
<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
	<title>Login</title>
</head>
<body>



	<div class="box">
		<div class="form">
			<h2> Sign in <h2>
			<form method="post">
            <div class="inputBox">
			    <input id="text" type="text" name="user_name" required="required">
			    <span>Username</span>
                <i></i>
            </div>
			<div class="inputBox">
			    <input id="text" type="password" name="password" required="required">
			    <span>Password</span>
                <i></i>
            </div>
			<div class="links">
                <a href="#">Forgot Password</a>
                <a href="signup.php">Signup</a>
            </div>

			<input id="button" type="submit" value="Login">

			<!-- <div class="login">
			   <a href="signup.php">Click to Login</a>
		
           </div> -->
		 </form>
         </div>
</div>
		
	</div>
</body>
</html>