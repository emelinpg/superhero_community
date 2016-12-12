<?php 
	require 'cookie_login.php';
	if ($logged == true) {
	    echo $userArray['username'] . " is logged in";
	} else {
	    echo "User not logged in";
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
		<?php echo include "header.php" ?>
			<div id="container">
				<div class="header">
					<nav class="nav_menu">
						<a style="word-spacing: 2px;"href="../index.php">About Us</a>  
						<a class="thechosenOne"  style="color: yellow;"href="headlines.php"> Headlines</a>
						<a href="ranking.php"> Rankings</a> 
						<a href="register.php"> Registry</a>
						<a href="#"style="word-spacing: 2px;">Hall of Fame</a> 
						<a href="#">Forum</a> 
						<a href="#">Locate</a> 
						<a href="../php/Contact.php">Contact</a> 
						<a href="login.php">Login</a> 
						<a href="update.php">Update</a> 
					</nav> 
				</div>
				<br>
				<div id="stories">
					<h1 style"text-align: center; color:red;"> Top Stories</h1>
					<div class="cf">
						<div class="story">
							<img src="../img/hero1.jpg">
							<h3 style="color:yellow"><a href="#">Yard Work Hero</a></h3>
							<p>Lorem ipsum dolor sit amet, dicta voluptaria sea ea. Alia liber gubergren est id, ea convenire scribentur vel. Ut usu alii soleat soluta, vim duis dicunt tamquam an, mutat vituperata cu mea. Vis ex putant contentiones, prima copiosae constituto mea et, ea cum habeo regione expetendis. Atqui sonet at qui. </p>
						</div>
						<div class="story">
							<img src="..//img/hero2.jpg">
							<h3 style="color:yellow"><a href="#">Mosquito Fighter</a></h3>
							<p>Lorem ipsum dolor sit amet, dicta voluptaria sea ea. Alia liber gubergren est id, ea 	convenire scribentur vel. Ut usu alii soleat soluta, vim duis dicunt tamquam an, mutat vituperata cu mea. Vis ex putant contentiones, prima copiosae constituto mea et, ea cum habeo regione expetendis. </p>
						</div>
						<div class="story">
							<img src="../img/superhero4.jpg">
							<h3 style="color:yellow"><a href="#">Family League</a></h3>
							<p>Lorem ipsum dolor sit amet, dicta voluptaria sea ea. Alia liber gubergren est id, ea convenire scribentur vel. Ut usu alii soleat soluta, vim duis dicunt tamquam an, mutat vituperata cu mea. </p>
						</div>
					</div>
				</div>
				</br>
				<?php 
						if ($logged) {echo '
				<div class="pic_container">
					<div class="pic left_pic">
						<h1>Featured Hero</h1>
						<img src="../img/hero3.jpg" width="200" height="300">
						<p style="padding-right:20px;padding-left:20px; padding-bottom:20px;">Lorem ipsum dolor sit amet, dicta voluptaria sea ea. Alia liber gubergren est id, ea convenire scribentur vel. Ut usu alii soleat soluta, vim duis dicunt tamquam an, mutat vituperata cu mea. Vis ex putant contentiones, prima copiosae constituto mea et, ea cum habeo regione expetendis. Atqui sonet at qui. Sed enim causae ei, mea sumo etiam disputando at. Usu ut tota intellegat, inermis interesset cum et.</p>
					</div>
					<div class="pic right_pic">
						<h4 style="text-align:center; color:red;"> What movie are you excited about?</h1>
						<ul><label><input type="radio" name="select"> Wonder Woman</label></ul>
						<ul><label><input type="radio" name="select"> the Flash</label></ul>
						<ul><label><input type="radio" name="select"> Suicide Squad</label></ul>
						<ul><label><input type="radio" name="select">Justice League</label></ul>
						<ul><label><input type="radio" name="select"> Gambit</label></ul>
						<ul><label><input type="radio" name="select">Lego Batman</label></ul>
						<br>
					</div>
					';}
					?>
				</div>
			</div>
			<?php include "footer.php" ?>
			<script src="../js/jquery-2.2.3.min.js"></script>
			<script src="../js/script.js"></script>
	</body>
	</html>