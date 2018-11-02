<!-- connect to database here -->
<?php include("../../../database/database.php"); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>MyStory</title>
		<meta name="robots" content="noimageindex">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="#ffd700>
		<meta name="viewport" id="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="Create an account or log in to CastleCore- A simple, fun &amp; creative way to capture, edit &amp; share you life journey with family or friends.">
		<link rel='stylesheet' href='../../CSS/signupstyle.css' type='text/css'>
		<script src='https://code.jquery.com/jquery-3.2.1.js'></script>
	</head>

	<body>
		<span id="react-root">
			<section class="mfd">
				<header class="fixedNB">   
					<div class="shnbg headNavBar hNBz">
							<section class= "nameHNB nameHNBx">
								<h1>MyStory</h1>
							</section>
							<section class= "logoHNB logoHNBx">
								<img src='http://www.jdr-websites.co.uk/gallery/images/1160/image/new-morris-logo.jpg' height="40px;" width="80px;"/>
							</section>
					</div>
				</header>
				<main class= "sma smauk" role="main">
					<article class= "artd" style="align-items: center;">
						<div class="opStart">	
							<div class="textStart">
								 <div class="txtstrt1">
									<?php if (isset($_SESSION['success'])): ?>
										<div class="error success">
											<h3>
												<?php
												echo $_SESSION['success'];
												unset($_SESSION['success']);
												?>
											</h3>
										</div>
									<?php endif ?>
									<?php if (isset($_SESSION['First_Name'])): ?>
										<h2 class=""><strong>We are more than honored to have you here, <?php echo $_SESSION['First_Name']; ?>.</strong></h2>
									<?php endif ?>
										
								 </div>
								<div class="txtstrt2">
									<p> MyStory is a private network that allows you to </br> view, create, edit, and share your history </br> with the people you love the most.</p>
									<p> Everybody has a story, tell the people that you love the important journey that you have witnessed while living the special--one and only--life that you have lived.</p>
								</div>
								<div class="txtstrt2">
									<span>
										<a class="chtsih" href="../../../HomePage\HTML.php/index.php">Click here to start</a>
									</span>
								</div>
							</div>
							<div class="picStart">
								<div>
									<p> Insert photo </p>
								</div>
								<div>
									<p> Insert photo </p>
								</div>
								<div>
									<p> Insert photo </p>
								</div>
								<div>
									<p> Insert photo </p>
								</div>
							</div>
						</div>				
					</article>
				</main>
				<footer class= "wpf" role="contentinfo">
					<div class= "fnl fnluk" style="max-width: 935px;">
						<nav class="nbw" role="navigation">
							<ul class= "bottomWelcome">
								<li class="Fl"><a href="#">About us</a></li>
								<li class="Fl"><a href="#">Help</a></li>
								<li class="Fl"><a href="#">Terms</a></li>
								<li class="Fl"><a href="#">Privacy</a></li>
								<li class="Fl"><a href="#">Directory</a></li>
							</ul>
						</nav>
						<span class="cycc"> 2017 CastleCore</span>
					</div>
				</footer>
			</section>
		</span>
	</body>
</html>