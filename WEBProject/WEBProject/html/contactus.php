<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="../css/contactus.css">
    <link rel="stylesheet" type="text/css" href="../css/homepage.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
    <?php 
     include "./header.php";
    ?>

	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<form action="" method="POST" class="right">
				<h2>Contact Us</h2>
				<input name='name' type="text" class="field" placeholder="Your Name">
				<input name='email' type="text" class="field" placeholder="Your Email">
				<textarea name='message' placeholder="Message" class="field"></textarea>
				<button name='submit' type="submit">Send Message</button>
			</form>
		</div>
	</div>
    <?php 
     include "./footer.php";
    ?>
</body>
</html>

<?php

include_once '../repositories/contact-us.php';


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

	$contactusRepository = new ContactUsRepository();

	$contactusRepository->insertMessage($name, $email, $message);

    header("location:index.php");
}
?>