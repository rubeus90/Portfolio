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
		$destination = 'nghongngoc90@gmail.com';
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
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hong Ngoc Nguyen</title>
	<meta charset="utf-8" />
	<meta name="description" content="I'm Nguyen Hong Ngoc, a Computer Science student at ESIEE Paris engineering school and an Android developer">
    <meta name="author" content="Nguyen Hong Ngoc">
    <meta name="keywords" content="nguyen hong ngoc, nguyen, hong, ngoc, ESIEE, etudiant, etudiante, student, developer, developpeur, android, mobile, portfolio, projects, slatch, wondercom, wondershop, wonderrss">
    <meta name="geo.placename" content="Noisy, France, Paris">

    <link href="portfolio.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width" />
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
</head>

<body>		
	<nav>			
		<ul>
			<li><a href="#projects">Portfolio</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="#more">More</a></li>
		</ul>	
		<a class="logo" href="#intro">Nguyen Hong Ngoc</a>

	</nav>
	
	<div class="centered">
		<div id="intro">
			<img src="img/ngocky.png" alt="avatar">
			<p class="name">Nguyen Hong Ngoc</p>
			<img class="line" src="img/line.png" alt="line">
			<p class="description">Computer Science student at ESIEE Paris, Android developer</p>
		</div>
	</div>				

	<section id="projects">
		<h1>Portfolio</h1>
		<img class="line" src="img/line-alternative.png" alt="line">
		<div class="centered">
			<article>
				<a href="http://slatch.alwaysdata.net/">
					<div class="hidden">
						<h3>Slatch</h3>
						<p>A 2D turn-by-turn based stategy game developed for both PC and Android platform</p>
					</div>
					<img src="img/slatch.jpg" alt="slatch">					
				</a>
			</article>
			<article>
				<a href="https://github.com/rubeus90/WonderRSS">
					<img src="img/wonderrss.png" alt="wonderrss">
					<div class="hidden">
						<h3>WonderRSS</h3>
						<p>An Android RSS reader with adaptative layout for phones and tablets</p>
					</div>
				</a>
			</article>
			<article>
				<a href="https://github.com/rubeus90/WonderCom">
					<img src="img/wondercom.png" alt="wondercom">
					<div class="hidden">
						<h3>WonderCom</h3>
						<p>An Android chat and collaborative application using Wifi-Direct</p>
					</div>
				</a>
			</article>
			<article>
				<a href="https://github.com/rubeus90/WonderShop">
					<img src="img/wondershop.jpg" alt="wondershop">
					<div class="hidden">
						<h3>WonderShop</h3>
						<p>A music store with modern, intuitive and adaptative design</p>
					</div>
				</a>
			</article>
			<article>
				<a href="https://github.com/rubeus90/WonderBudget">
					<img src="img/wonderbudget.jpg" alt="wonderbudget">
					<div class="hidden">
						<h3>WonderBudget</h3>
						<p>An Android budget manager with simple and modern design</p>
					</div>
				</a>
			</article>
		</div>		
	</section>	

	<section id="about">
		<h1>About me</h1>
		<img class="line" src="img/line.png" alt="line">
		<div class="centered">
			<article>
				<p>I study Computer Science at ESIEE Paris, a French engineering school. I've just finished my 4th year and I've done my internship at Nanyang Polytechnic, Singapore.</p>
				<p>I have good skills in Android programing, Java, C, C++ and C#. I've done several projects with Java J2EE, PHP and MySQL.</p>
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
		<img class="line" src="img/line-alternative.png" alt="line">
		<div class="centered">
			<form action="index.php" method="post">
				<input type="text" name="name" placeholder="Name" required>
				<input type="email" name="email" placeholder="Email address" required>
				<textarea rows="5" name="message" placeholder="Message" required></textarea>
				<button name="send" value="send" type="submit">Send</button>
			</form>	
		</div>		
	</section>

	<div id="more">
		<div class="centered">
			<article>
				<h2>Find me on Github</h2>
				<a href="https://github.com/rubeus90"><img src="img/github.png" alt="github"></a>
			</article>
			<article>
				<h2>Download my CV</h2>
				<a href="cv.pdf"><img src="img/cv.png" alt="cv"></a>
			</article>
		</div>
	</div>

	<footer>Nguyen Hong Ngoc © 2014</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">var word="";document.addEventListener("keypress",function(e){word+=String.fromCharCode(e.keyCode),"ngocky"==word&&alert("hey")},!1),$('a[href^="#"]').on("click",function(e){var t=$($(this).attr("href"));t.length&&(e.preventDefault(),$("html, body").animate({scrollTop:t.offset().top},600))});</script>
</body>

</html>