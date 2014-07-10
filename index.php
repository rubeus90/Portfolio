<?php
if(isset($_POST['send'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$regex_mail = '/^[\w.-_]+@[\w._-]+\.[a-z]{2,4}$/i';
	if(!preg_match($regex_mail, $email)){
		echo "<script>alert('Your entered email address is not valid')</script>";
	}
	else{
		$destination = 'rubeus90@gmail.com';
		$msg = 'Message from your portfolio page:'."\r\n\r\n";
		$msg .= 'Sender: '.$name."\r\n\r\n";
		$msg .= 'Email: '.$email."\r\n\r\n";
		$msg .= 'Message:'."\r\n".$message;

		$headers = 'From: '.$name.' at '.$email."\r\n\r\n";

		if(mail($destination, 'Contact from nguyen-hong-ngoc.com', $msg, $headers)){
			echo "<script>alert('Your message has been sent successfully')</script>";
		}
		else{
			echo "<script>alert('Message sending failed: please try again!')</script>";
		}
		unset($_POST['send']);
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hong Ngoc Nguyen</title>
	<meta charset="utf-8" />
	<meta name="description" content="I'm Nguyen Hong Ngoc, a Computer Science student at ESIEE and an Android developer">
    <meta name="author" content="Nguyen Hong Ngoc">
    <meta name="keywords" content="nguyen hong ngoc, nguyen, hong, ngoc, ESIEE, etudiant, student, developer, developpeur, android, mobile">
    <meta name="geo.placename" content="Noisy, France, Paris">

    <link href="portfolio.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
</head>

<body>		
	<nav>			
		<ul>
			<li><a href="#projects">Portfolio</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>	
		<a class="logo" href="#intro">Nguyen Hong Ngoc</a>

	</nav>
	
	<div class="centered">
		<section id="intro">
			<img src="./img/ngocky.png">
			<p class="name">Nguyen Hong Ngoc</p>
			<hr class="line">
			<p class="description">Computer Science student at ESIEE Paris, Android developer</p>
		</section>
	</div>				

	<section id="projects">
		<h1>Portfolio</h1>
		<hr class="line-alternative">
		<div class="centered">
			<article>
				<img src="img/slatch.jpg">
			</article>
			<article>
				<img src="img/slatch.jpg">
			</article>
			<article>
				<img src="img/slatch.jpg">
			</article>
			<article>
				<img src="img/slatch.jpg">
			</article>
		</div>		
	</section>	

	<section id="about">
		<h1>About me</h1>
		<hr class="line">
		<div class="centered">
			<article>
				<p>I study Computer Science at ESIEE Paris, a French engineering school. I've just finished my 4th year and I've done my internship at Nanyang Polytechnic, Singapore.</p>
				<p>I have good skills in Android programing, Java, C and C++. I've done several projects with Java JSP, PHP and MySQL.</p>
			</article>
			<article>
				<p>I want to become an Android developer at the end of my studies.</p>
				<p>I love Android</p>
				<p>I love Sci-fi and Fantasy. I love reading and watching series. I love travelling and eating good food wherever I go.</p>
			</article>
		</div>		
	</section>

	<section id="contact">
		<h1>Contact me</h1>
		<hr class="line-alternative">	
		<div class="centered">
			<form action="index.php" method="post">
				<input type="text" name="name" placeholder="Name" required>
				<input type="email" name="email" placeholder="Email address" required>
				<textarea rows="5" name="message" placeholder="Message" required></textarea>
				<button name="send" value="send" type="submit">Send</button>
			</form>	
		</div>		
	</section>

	<footer>Nguyen Hong Ngoc © 2014</p>
	</footer>
</body>

</html>