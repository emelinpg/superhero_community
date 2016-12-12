<!DOCTYPE html>
<html>
	<style>
	</style>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/style.css"/>
	</head>
	<body>
		<?php echo include "header.php" ?>
	<div id="container">
		<div class="header">
			<nav class="nav_menu">
				<a style="word-spacing: 2px;"href="../index.php">About Us</a>  
				<a href="headlines.php"> Headlines</a>  
				<a class="thechosenOne"  style="color: yellow;"href="ranking.php"> Rankings</a> 
				<a href="register.php"> Registry</a>
				<a href="#"style="word-spacing: 2px;">Hall of Fame</a> 
				<a href="#">Forum</a> 
				<a href="#">Locate</a> 
				<a href="Contact.php">Contact</a>
				<a href="login.php">Login</a> 
			</nav>
		</div>
		<br>
		<div id="stories">
				<h1 style"text-align: center; color:red;"> Your Top Heroes</h1>
				<?php include "RankingOutput.php" ?>
		</div>
	</div>
			<?php echo include "footer.php" ?>
			<script src="../js/jquery-2.2.3.min.js"></script>
			<script src="../js/script.js"></script>
		
	</body>
	</html>