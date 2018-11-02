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
		<link rel='stylesheet' href='../CSS/libstyle.css' type='text/css'>
		<script src='https://code.jquery.com/jquery-3.2.1.js'></script>
		<script src='../Javascript/Library.js'></script>
		<script type="text/javascript" >
			$(document).ready(function main() { 
				$("#create").click(function() {	
					
					 
					var privacy = $(.select .input).text();						

					$.ajax({
						type: "POST",
   						url: "../../database/database.php",
   						data: privacy.serialize(),	
  						dataType: "html",   
						success: function(data) {
							alert(data);
						}
	
					});
				});
			});
		</script>
	</head>

	<body>
		<span id="react-root">
			<section class="mfd">
				<header class="fixedNB">   
					<div id="headNavBar" class="shnbg headNavBar">
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
											<a href="../../libraryPage\HTML.php/library.php"> <div style="position: absolute; right: 10px; top: -29px;"> <h4 class="plus1"> &#10133; </h4> </div> </a>
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
								<div class="libOpt">
									<p> MyLibrary </p>
								</div>
								<div class="libOpt">
								<form method="post" action="library.php" id="form3">
									<div class="libOptCNG libOpt1"><div style="position: absolute; right:82%;"> <h4 class="plus1"> &#10133; </h4> </div> <h4 class="libOptCon" id="libOptCNG">  Create new group </h4>
										<div  id="libOptCNGB" class="libOptCNGB">  
											<div>
												<h3> Created group title </h3>
											</div>
											<!-- display validation errors here -->
											<?php include("../../error/errors.php"); ?>
											<div class="inputDiv"> 
												<input class="cgtETH" placeholder="Enter title here" type="text" name="ETH">
											 </div>
											<div class="libOptPCS"> 
												<a id="libOptPP" class="select"> 
													<div id="input" class="input" name="Privacy">
													</div>
														<div id="libOptPP2" class="select-options">
															<ul> 
																<li id="pub" value="1"><span>Public</span> (logo) </li>
																<li id="priv" value="2" class="selected"><span>Private</span></li>
															</ul>
														</div>
												</a>
													<div class="libOptCS">
														<span class="bbCL"> 
															<button type="reset" name="Cancel"> Cancel </button>
														</span>
														<span class="bbCT"> 
															<button id="create" type="submit" name="create"> Create </button>
														</span>
													</div>
											</div>
										</div>
									</div>
								</form>
									<div class="libOptDEG libOpt1">
											<h4> Delete existing group</h4>
									</div>
									<div id="libOptAL" class="libOptAL libOpt1"> 
										<h4><div class="inputAL">
										</div></h4> 
											<div id="libOptALDrop" class="select-optionsAL">
												<ul>
													<li class="selectedAL"><span>All list</span></li>
													<li><span>Created List</span></li>
													<li><span>Saved profiles</span></li>
													<li><span>Liked List</span></li>
												</ul>
											</div>
									</div>
								</div>
								<div id="All-list-show" class="libOptALS">
									<div id="CLDshow" class="libOpt">
										<?php 
											$sqlCL = "SELECT * FROM library LIMIT 3";
											$result = mysqli_query($db, $sqlCL);
											if (mysqli_num_rows($result) < 0) {									
												while ($row = mysqli_fetch_assoc($results)) {
												echo "<p>";
												echo $row['Title'];
												echo "<br>";
												echo $row['Bio'];
												echo "</p>";
												}
											} else {
												echo "You have not created A custom library list yet";
												}
										?>
									</div> 
									<div id="SPLshow" class="libOpt">
										<h3>(insert saved profiles from database)</h3>
									</div>
									<div id="LPDshow" class="libOpt">
										<h3>(insert Liked profiles from database)</h3>
									</div>
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