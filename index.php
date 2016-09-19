<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handro The Web Developer</title>
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/normalize.css">
	<script src="http://use.edgefonts.net/open-sans;six-caps;lato.js"></script>
</head>
<body>
	<header id='header'>
		<!-- <p class="logo"> han <br>dro</p> -->
		
		<ul class="menu">
			<li><a href="web.php" class='work'>work</a><li>
			<li><a href="contact.php">contact</a></li>
			
		</ul>
		<div class="logoTwo"></div>
		<h1 class="title">Web Developer</h1>
		<div class="scroll"></div>
	</header>
	<div class="shortended-header header hide">
	<a href="index.php"><div class="headerLogo"></div>	</a>
	<ul class="header-menu">
			<li><a href="web.php" class='work'>work</a><li>
			<li><a href="contact.php">contact</a></li>
		</ul>
	<!-- <div class="overlay"></div> -->
</div>
	<section class="about-me">
		<h2 class="introduction">My Name Is Alejandro, I make Websites</h2>
		<div class="about-wrapper">
			<div class="about-blurb-container">
				<p class="about-blurb">My name is Alejandro Londono, I Have been trained as an engineer and in the field of design for some time, However I also have been making illustrations all my life. Raised in Newark Delaware. This page showcases my work as a designer, illustrator, photographer and webdeveloper.</p>
				<img class="myface" src="images/skills-experience.png" alt="skills and experience">
			</div>
			<div class="about-blurb-container">
				<img class="myface" src="images/headshot.jpeg" alt="headshot of Alejandro Londono">
			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
	<script>
		var page = 'index'
	</script>
	<script src="js/master.js"></script>	
</body>
</html>