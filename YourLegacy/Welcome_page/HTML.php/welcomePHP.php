<!-- connect to database here -->
<?php include("../../database/database.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Storyly</title>
		<meta name="robots" content="noimageindex">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="#ffd700>
		<meta name="viewport" id="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="Create an account or log in to CastleCore- A simple, fun &amp; creative way to capture, edit &amp; share you life journey with family or friends.">
		<link rel='stylesheet' href='../CSS/welcomestyle.css' type='text/css'>
		<script src='https://code.jquery.com/jquery-3.2.1.js'></script>
		<script src='../Javascript/welcome.js'></script>
	</head>

	<body>
		<span id="react-root">
			<section class="mfd">
				<header class="fixedNB">
					<div class="shnbg headNavBar">
							<section class="ssHBN">
								<ul class="headll">
									<li class="h1"><a class="h1c" href="#">Storyly</a></li>
								</ul>
							</section>
							<section class= "suBH">
								<span class="libH">
									<button id="libH" class="bc1 bc2 bc3 bc4"> log in </button>
								</span>
								<span>
									<button id="SubH" class="bc1 bc2 bc3 bc4"> Sign Up </button>
								</span>
							</section>

					</div>
				</header>
				<main class= "sma smauk" role="main">
					<article class= "artd">
						<div class="bigPic">
						<div class= "storyArt tellArt">
							<div>
								<h1> Storyly  </h1>
							</div>
							<div style= "margin-top: -25px;">
								<!-- <p> You and your families story has never been easier to share! </p> -->
							</div>
						</div>
						<div class= "logStart">
							<div class= "LiCh">
								<div class= "dChtlmp">
									<form class="chtlm" method="post" action="welcomePHP.php" name="form1">
										<!-- display validation errors here -->
										<?php include("../../error/errors.php"); ?>
										<div id="lsFill">
											<div class="fillSpace">
												<span class="gbc2">
													<a class="bc1 bc2 bc3 bc4 bc5lI" id="logIn"> Log in</a>
												</span>
											</div>
											<div class="logStartFill">
												<div class="inputDiv">
													<input placeholder="Email or Phone Number" type="text" name="Email_Phone_Number">
												</div>
												<div class="inputDiv">
													<input name="Password" aria-required="true" aria-label="Password" type="text" max-legth="30" placeholder="Password">
													<div class="fppDiv">
														<a class="fpp" href="#"> Forgot? </a>
													</div>
												</div>
												<span class="gbc2 inputDiv">
													<button class="bc1 bc2 bc3 bc4" type="submit" name="login"> Log in </button>
												</span>
											</div>
										</div>
									</form>
									<form class="chtlm" method="post" action="welcomePHP.php" name="form2">
										<div id="">
											<div class="fillSpace">
												<span>
													<a class="bc1 bc2 bc3 bc4 bc5sU" id="signUp"> Sign up</a>
												</span>
											</div>
											<div class="signUpFill">
													<div class="inputDiv">
														<input placeholder="First Name" type="text" name="First_Name" value="<?php echo $First_Name; ?>">
													</div>
													<div class="inputDiv">
														<input placeholder="Last Name" type="text" name="Last_Name" value="<?php echo $Last_Name; ?>">
													</div>
													<div class="inputDiv">
														<input placeholder="Email or Phone Number" type="text" name="Email_Phone_Number">
													</div>
													<div class="inputDiv">
														<input placeholder="Password" type="text" name="Password">
													</div>
													<span class="gbc2 inputDiv">
														<button class="bc1 bc2 bc3s bc4" type="submit" name="signup"> Sign up </button>
													</span>
											</div>
										</div>
									<div style="top: 80px;">
										<div class= "WICC1">
											<h1> What is Storyly? </h1>
										</div>
										<div>
											<span class="gbc2">
												<a id="chtlmbs" class="bc1 bc2 bc4 bc5CH"> Click Here to learn more</a>
											</span>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
						</div
					</article>
					<article id="headho" class="chtlmInfo1">

						<div class="chtlmpic1">
							<div>
								<img src='http://www.jdr-websites.co.uk/gallery/images/1160/image/new-morris-logo.jpg' height="257px;" width="300px;"/>
							</div>
						</div>
						<div class="chtlmTXT">
							<div style="order: 1;">
						<!--	<p> Every family has a story, but as time goes on many of our loved ones stories are soon forgotten. <br/> Storyly is a simple tool  used to track and follow your families personal experiences and histories in life. <br/> This allows us to better understand where we come from, who we are, and who our elders were. </p> -->
							</div>
							<div style="order: 0;">
						<!--	<h2> Storyly is the new way to keep your legacy alive </h2> -->
							</div>
						</div>

					</article>

					<article class="qbfview">
						<div class="section3hdiw">
							<div>
								<h1 class="hdiw"> How Does Storyly Work? </h1>
							</div>
							<div class="hdiwp1">
								<div>
								<!--    <p class="hdiwp"> Storyly allows you to create a personal family experience <br/> by customizing your own Family Function. <br/> Whether you're the first person or the last person in your family,<br/> the story begins with you!  </p> -->
								</div>
								<div>
									<img class="IIhdmw IIhdmw1" src='C:\Users\Chris Morris\Pictures\yourlegacy/kenProf.PNG'/>
								</div>
							</div>
							<div class="hdiwp1">
								<div>
									<p class="IIhdmw"> (Insert image) </p>
								</div>
								<div>
							<!--    <p class="hdiwp"> Expand the family funtion by adding family members! <br/> Whats the fun of having this if you're whole family is not apart of this! </p> -->
							  </div>
							</div>
							<div class="hdiwp1">
								<div>
								<!-- <p class="hdiwp"> Add biographies to the people within your family function <br/> so that your future knows who,<br/> and what the family was like. </p> -->
								</div>
								<div>
									<p class="IIhdmw"> (Insert Image) </p>
								</div>
								<div>
								<!--	<p class="hdiwp"> As more family members join Your family function <br/> they can edit their personal bio's <br/> and add to the family function. </p> -->
								</div>

							</div>
						</div>

					</article>
					<article>
							<div class= "storyArt tellArt">
								<div>
									<h2> Now that you have learned about Storyly <br/> its time to join in and share your story. </h2>
								</div>
							</div>
							<div class="chsls">
								<span class="gbc2">
									<a href="#" class="bc1 bc2 bc4 bc5CH"> Click here to get started</a>
								</span>
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
						<span class="cycc"> &#169; 2017 CastleCore</span>
					</div>
				</footer>
			</section>
		</span>
	</body>
</html>
