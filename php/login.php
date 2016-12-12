<?php 

require 'error_reporting.php';
require 'orm_functions.php';


if (isset($_POST['login']) && trim($_POST['login']) != "") {
	if(isset($_POST['username']) && isset($_POST['password']) && trim($_POST['username']) != "" && trim($_POST['password']) != "") {

		$username = escape_quotes($_POST['username']);
		$password = escape_quotes(hash("sha512", $_POST['password']));

		$user = get_all_info("SELECT * FROM Login WHERE username= '$username'");

		$userArray = $user->fetch_assoc();

		if(count($userArray) <=0) {
			die("That username doesn't exist! Try making a username today by going to <a href='loging.php'>Sign up Page</a>");
		}
		if ($userArray['password'] != $password){
			die("Incorrect pasword, please type the password again at the <a href='loging.php'>Sign up Page</a>");
	}

	$salt = hash("sha512", rand() . rand() . rand());

	setcookie("c_user", hash("sha512", $username), time() + 24 * 60 * 60, "/");
	setcookie("c_salt", $salt, time() + 24 * 60 * 60, "/");

	$userID = $userArray['id'];
	insert_or_update_info("UPDATE Login SET Salt='$salt' WHERE id='$userID'");

	die("You are now logged in as $username.Please go back <a href='../index.php'>Home Page</a> to see the full site!");

	echo "It Worked!";

	} else {

		echo "Please enter a username and password.";
			
	}
}


	
?>
<!DOCTYPE html>
<html>
	<style>
	</style>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/style.css"/>		
	</head>
	<body>
		<?php include "header.php" ?>
		<div id="container">
			<div class="header">
				<nav class="nav_menu">
					<a href="../index.php"style="word-spacing: 2px;">About Us</a>  
					<a href="../php/headlines.php"> Headlines</a>  
					<a href="#"> Rankings</a> 
					<a href="register.php"> Registry</a>
					<a href="#"style="word-spacing: 2px;">Hall of Fame</a> 
					<a href="#">Forum</a> 
					<a href="#">Locate</a> 
					<a href="Contact.php">Contact</a>
					<a class="thechosenOne"  style="color: yellow;word-spacing: 4px;" href="Contact.php">Login</a> 
					<a href="update.php">Update</a>
				</nav> 
			</div>
			<br>
			<div class="contact" style="color:black">
				<h1 >Login</h1>
				<form method="post" action="">
					<ul>
						<li>
							<label for="username">Username</label>
							<input id="username" type="text"name="username" value="" />
						</li>
						<li>
							<label for="password">Password</label>
							<input id="password" type="password" name="password" value="" />
						</li>
						<li>
							<input type="submit" name="login" value="login">
						</li>
					</ul>
				</form>
				<form method="post" action="logout.php">
				
				
				<input type="submit" name="logout" value="Logout">
				
				
           		 </form>
			</div>
		</div>
		<?php include "footer.php" ?>
		<script src="js/jquery-2.2.3.min.js"></script>
		<script src="js/script.js"></script>

	</body>
	</html>