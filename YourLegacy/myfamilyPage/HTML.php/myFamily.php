<!-- connect to database here -->
<?php include("../../database/database.php"); 
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
		<link rel='stylesheet' href='../CSS/myFamstyle.css' type='text/css'>
		<script src='https://code.jquery.com/jquery-3.2.1.js'></script>
		<script src='../Javascript/HomePage.js'></script>
		<script src='../Javascript/jquery.menu-aim.js'></script>
	</head>

	<body>
		<span id="react-root">
			<section class="mfd">
				<header class="fixedNB">   
					<div class="shnbg headNavBar">
							<section class="ssHBN">
								<ul class="headll">
									<li  class="h1"><a id="actsideBar" class="h1c">Clickable scroll bar </a></li>
									<li class="h1"><a class="h1c" href="../../HomePage\HTML.php/index.php">MyStory</a></li>
									<li class="h1"><a class="h1c">Search Bar </a></li>
								</ul>
							</section>
							<section class="nprmHBN">
								<ul class="headll">
									<?php if (isset($_SESSION['First_Name'])): ?>
										<li class="h1"><a id="myName" class="h1c h1cN"> <strong><?php echo $_SESSION['First_Name']; ?> </strong></a>
											<div id="myNameSub"class="dropNameSub">
												<div class="dSubH">
													<h3><a href="#" class="h1dSc"> MyStory</a></h3>
												</div>
												<div style="margin-left: 15px;">
													<div>
														<p><a href="../../ProfilePage\HTML.php/Profile.php" class="h1dSc"> Profile </a></p>
													</div>
													<div>
														<p><a href="#" class="h1dSc"> Settings/Privacy</a></p>
													</div>
													<div>
														<p><a href="#" class="h1dSc"> Help Center</a></p>
													</div>
													<div>
														<p><a class="h1dSc" href="../../welcome_Page/HTML.php/welcomePHP.php?logout='1'">Logout</a></p>
													</div>
												</div>
											</div>
										</li>
									<?php endif ?>
									<!-- <div class="vertical"> </div> -->
									<li class="h1"><a id="myNoti" class="h1c">Notification</a>
										<div class="dropSub" id="myNotiSub">
											<div class="dSubH">
												<h3><a href="#" class="h1dSc"> Notifications inbox </a></h3>
											</div>
											<div>
												<div>
													<p> You currently have no notifications </p>
												</div>
												<div>
													<p> Request to follow your friends and family members so you can be updated when something new has been posted. </p>
												</div>
											</div>
										</div>
									</li>
									<li class="h1"><a id="myRequ" class="h1c">View request</a>
										<div class="dropSub" id="myRequSub">
											<div class="dSubH">
												<h3><a href="#" class="h1dSc"> Request inbox </a></h3>
											</div>
											<div>
												<div>
													<p> You currently have no request </p>
												</div>
												<div>
													<p> Build your story and invite friends and family. </p>
												</div>
											</div>
										</div>
									</li>
									<li class="h1"><a id="myMess" class="h1c">Messages</a>
										<div class="dropSub" id="myMessSub">
											<div class="dSubH">
												<h3><a href="#" class="h1dSc"> Message inbox </a></h3>
											</div>
											<div>
												<div>
													<p> Your messages will appear hear. </p>
												</div>
												<div>
													<p> Message people that have requested to follow your story. </p>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</section>
					</div>
				</header>
				<main id="main" class= "sma smauk" role="main">
					<article class= "artd">
						<div id="sideBar" class= "dropBoxCSB dropBoxCSB1">
							<div class="dropBoxCSBP">
							<div class="dbsb1">
								<a id="myfCSB" class="h1c h2c" href="../../myfamilyPage\HTML.php/myFamily.php"> MyFamily </a>
							</div>
							<div class="horizontal"> </div>
							<div class="dbsb1">
								<a id="subCSB" class="h1c h2c" href="../../subscriptionPage\HTML.php/subscriptions.php"> Subscriptions </a>
							</div>
							<div class="horizontal"> </div>
							<div class="dbsb1"><a id="libCSB" class="h1c h2c"> Library </a>
								<div id="libCSBSM" class="csbsbSubMenu">
									<div class="dSubH">
										<h3 class="h1dSc"> Created Groups </h3>
										<div class="libaddGP"> 
											<a href="../../libraryPage\HTML.php/library.php"> &#10133; </a>
										</div>
									</div>
									<div>
										<a> Insert created group of profiles </a>
									</div>
									<div>
										<a> Insert created group of family </a>
									</div>
									<div>
										<a> Insert created group of any combonation</a>
									</div>
								</div>
							</div>
							<div class="horizontal"> </div>
							<div class="dbsb1">
								<a id="hisCSB" class="h1c h2c"> History </a>
									<div id="hisCSBSM" class= "csbsbSubMenu">
										<div class="dSubH">
											<h3 class="h1dSc"> Recently Watched </h3>
										</div>
										<div>
											<a> Insert previsouly viewed family </a>
										</div>
										<div>
											<a> Insert previsouly viewed profile </a>
										</div>
									</div>
				 			</div>
							</div>
						</div>
						<div id="sideBarL"class= "dropBoxCSBL"></div>
						<div id="mainFeedBig" class= "mainFeedBig">
							<div class="mfbSmall">
								<div>
									<p> Main Content </p>
								</div>
								<div>
									<p> Main Content </p>
								</div>
							</div>
						</div>
						<!-- <div>
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
						</div> -->
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