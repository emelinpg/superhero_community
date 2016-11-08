<?php
	$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
	<style>
	</style>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/style.css"/>
			<script src="js/jquery-2.2.3.min.js"></script>
			<script src="js/script.js"></script>

	</head>
	<body>
	<?php echo include "header.php" ?>
	<div id="container">
		<div class="header">
			<nav class="nav_menu">
				<a href="../index.php"style="word-spacing: 2px;">About Us</a>  
				<a href="../php/headlines.php"> Headlines</a>  
				<a href="#"> Rankings</a> 
				<a href="#"> Registry</a>
				<a href="#"style="word-spacing: 2px;">Hall of Fame</a> 
				<a href="#">Forum</a> 
				<a href="#">Locate</a> 
				<a class="thechosenOne"  style="color: yellow;word-spacing: 4px;" href="Contact.php">Contact</a> 
			</nav> 
		</div>
		<br>
		<div class="contact" style="color:black">
			<h1 >Contact Us</h1>
			<p>Feel free to contact us with any questions or comments! We will reply just as fast as <b><i>The Flash</i></b> would!</p>
		
			   <form method="post" action="?">  
			   Name: <input type="text" name="name" placeholder="Alias" />
  			   <span class="error">* <?php echo $nameErr;?></span>
  			<br>
  			<br>
  				E-mail: <input type="text" name="email" placeholder="email!">
  				<span class="error">* <?php echo $emailErr;?></span>
  			<br>
  			<br>
  				Topic:<br>
  				<select id="topic" name="topic">
                <option value="Joining">Intrested in Joining</option>
                <option value="Report">Report a Villian</option>
                <option value="Other">Other</option>
              </select>
             <br>
             <br>
  				<textarea id="message" name="message" col="42" rows="9"></textarea>
  			<br>
  			<br>
  
  			<input type="submit" name="submit" value="Submit">  

		</div>




	</div>
	<footer>