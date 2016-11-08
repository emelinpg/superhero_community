<!DOCTYPE html>
<html>
	<style>
	</style>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css"/>
			<script src="js/jquery-2.2.3.min.js"></script>
			<script src="js/script.js"></script>
		
	</head>
	<body>
	<?php echo include "php/header.php" ?>
		
	<div id="container">
		<div class="header">
			<nav class="nav_menu">
				<a class="thechosenOne"  style="color: yellow;word-spacing: 4px;" href="index.php" style="word-spacing: 2px;">About Us</a>  
				<a href="php/headlines.php">Headlines</a>
				<a href="php/ranking.php"> Rankings</a> 
				<a href="#"> Registry</a>
				<a href="#" style="word-spacing: 2px;">Hall of Fame</a> 
				<a href="#">Forum</a> 
				<a href="#">Locate</a> 
				<a href="php/Contact.php">Contact</a> 
			</nav> 
		</div>
		<br>
			<div class="found">
					<h1>Founder</h1>
					<img src="img/aboutus.jpg">
					<img src="img/localsuperhero.jpg" width="300" height="210">
					<p>  Since she can remember, Emelin has always wanted to be a superhero. Growing up she would run around wearing a cape and mask. As she grew up up she knew that she wanted to help people out as best as she could. She thought about becoming a doctor or nurse but school wasn't for her. As she was pondering about her future and what she could do she saw an older lady trying to get her cat out of a tree. This is where the idea of having a superhero handy came to her.  Since then she has been wearing her cape and mask along with other local superheroes, and helping out her community!Emelin now goes by CodeGirl.</p>
			</div>
			<br>
			<div class="pic_container">
				<div class="pic left_pic">
						<h1>Superhero Community</h1>
						<img src="img/herocommunity.jpg">
						<p> The Superhero Community came together in 2015 under the leadership of CodeGirl and the 	help of a few https://azusapd.org/press-releases/critical-missing-child-esteban-chaveztrusted companions. The Community stands together under one banner, vowing to uphold all the things that separate us from the bad guys. Righteousness, Courage, Benevolence, Respect, Sincerity, Honor, Loyalty, Self-Control, these are just some of the values we all hold near and dear to our hearts, the values that keep us and bring us together.</p>
				</div>
				
				<div class="pic right_pic">
					<h1>Want to join?</h1>
					<img class="join"src="img/joinNOW.png">
					<p> We take all applications under consideration. After scrupulous evaluation, our lead members will determine if you are indeed Community material. Good Luck!</p>
					<button class="change" >enter</button>
					<br><br>
				</div>	
			</div>
		</div>

		<footer>
			<?php echo include "php/footer.php" ?>
		</footer>

	</body>
</html>