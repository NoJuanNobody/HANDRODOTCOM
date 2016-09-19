<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$from = 'contact page';
	$to = 'alejandro@han-dro.com';
	$subject = 'hello';
	$human = $_POST['human'];

	$body = "From: $name\n Email: $email\n message: $message\n";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handro The Web Developer</title>
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/normalize.css">
	<script src="http://use.edgefonts.net/open-sans;six-caps.js"></script>
</head>
<body>
	<?php include 'header.php' ?>
	<section class="contact avoid-header">
		<!-- <h1 class="title no-relative zindexzero">Contact Me</h1> -->
		<form method="post" action="contact.php">
			<label for="name"></label>
			<input name="name" type="name" placeholder="Name">
			<label for="email"></label>
			<input name="email" type="email" placeholder='Email'>
			<label for="message"></label>
			<textarea name="message" id="" cols="30" rows="10" placeholder="write your message here"></textarea>
			<label>*What is 2+2? (Anti-spam)</label>
			<input name="human" placeholder="Type Here">
			<button id="submit" name="submit" type="submit" value="Submit">submit</button>
		</form>
		<?php 
			if ($_POST['submit']){
				if (mail($to, $subject, $body, $from) && $human == '4'){
					echo '<p class="notification-success">Your message has been sent!</p>';
				}else{
					echo '<p class="notification-error">Something went wrong, try again! </p>';
				}
			}
 		?>
	</section>

	<?php include 'footer.php' ?>
	<script>
		var page = 'contact';
	</script>
	<script src="js/master.js"></script>

</body>
</html>
