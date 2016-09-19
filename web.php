
<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors',1);
	error_reporting(E_ALL);
	$data=array(
		array(
			'name' => 'Grinders',
			'sub_name' => 'coffee Co.',
			'info' => 'Grinders is a landing page and menu that utilizes media queries so that it can be seen optimally on any device. this webpage features custom HTML and CSS with that is standards compliant and pixel perfect compared to its original design',
			'href' => 'http://alejandro-londono.github.io/grinder-coffee/',
			'img' => 'images/grinders.png'
			),
		array(
			'name' => 'Moga',
			'sub_name' =>'Yoga for men',
			'info' => "Moga is a landing page created to communicate the overall brand of Moga and to attract participants at Tulaa yoga studio. Moga.com will eventually feature a blog written about the instructor's experience with yoga over a 15 year period. Logo was also designed by me.",
			'href' => 'http://alejandro-londono.github.io/MOGA/',
			'img' => 'images/moga.png'
			),
		array(
			'name' => 'The Gallery',
			'sub_name' => 'Salon and Barbershop',
			'info' =>'The gallery is a webpage aimed to widen the online prescence of a local barber shop in the tristate area. The gallery contains small responsive features as well as communicates a user friendly, quality experience using flat design. The gallery is still under development.',
			'href' =>'http://alejandro-londono.github.io/Gallery',
			'img' =>'images/Gallery.png'
			),
		array(
			'name'=>'Todd Breitling',
			'sub_name'=>'Photography',
			'info' => 'This UX proposal was designed to feel light and clear to not distract from the photography being presented on the website',
			'href' => 'http://alejandro-londono.github.io/breitling/',
			'img' => 'images/todd-photo.png'
			),
		array(
			'name' => 'List-maker',
			'sub_name' => '',
			'info' => 'A List making App that is built entirely on jQuery',
			'href' => 'http://alejandro-londono.github.io/listmaker',
			'img' => 'images/listmaker.png'
			), 
		array(
			'name' => 'Space-Escape',
			'sub_name' => '',
			'info' =>'An asteroid like video game made by utilizing the html5 canvas and pure javascript',
			'href' => 'http://alejandro-londono.github.io/Space-escape/',
			'img' => 'images/space-escape.png'
			),
		array(
			'name' =>'Perpetual Drafting',
			'sub_name' => 'A drafting company in the Bahamas',
			'info' => 'This page, when implemented, will serve as an online calling card to indirectly increase revenue for Perpetual Drafting. The brand strategy aims to communicate a modern, forward thinking team of computer drafters that provide renderered imagery and other services in the field of architecture.',
			'href' => 'http://alejandro-londono.github.io/perpetual-drafting/',
			'img' => 'images/perpetual-drafting.png'
			)
	);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handro The Web Developer</title>
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/normalize.css">
	<meta width="device">	
	<script src="http://use.edgefonts.net/open-sans;six-caps.js"></script>
</head>
<body>
	<?php include 'header.php' ?> 
	<section class="web avoid-header">
		<!-- <h1 class="title no-relative zindexzero">Web</h1> -->
			<?php foreach ($data as $web){ ?>
		<div class="web-card">
			<a href="<?php echo $web['href'] ?>"><img src="<?php echo $web['img'] ?>" alt=""></a>
			<h2><?php echo $web['name'] ?><br><span class="sub-heading"><?php echo $web['sub_name'] ?></span></h2>
			<p><?php echo $web['info'] ?></p>
		</div>
			<?php } ?>
	</section>
	<?php include 'footer.php' ?>
	<script>
		page = 'web';
	</script>
	<script src="js/master.js"></script>
	
</body>
</html>