<?php
	
	session_start();

	$First_Name = "";
	$Last_Name = "";
	$Email_Phone_Number = "";
	$Password = "";
	$errors = array();
	$verifyEPN = "";
	$signupp = array();
	$ETH = "";
	$Privacy = "";

	// connect to the database
	$db = mysqli_connect("localhost", "root", "ELDrris4PMA","lldb");

	// Library Create a new group 	
	 if (isset($_POST["create"])) {
		 $Privacy = mysqli_real_escape_string($db, $_POST['privacy']);
		 $ETH = mysqli_real_escape_string($db, $_POST['ETH']);
		 $Email_Phone_Number = $_SESSION['Email_Phone_Number'];
		 $sql = "INSERT INTO library (Title, Privacy, Bio, User_iD)
			VALUES ('$ETH', '$Privacy', 'testbio', (SELECT User_iD FROM logstart WHERE Email_Phone_Number='$Email_Phone_Number'))";
		 $result= mysqli_query($db, $sql);
	}
	
	
	// signup procedure
	if (isset($_POST["signup"])) {
		$First_Name = $_POST['First_Name'];
		$Last_Name = $_POST['Last_Name'];
		$Email_Phone_Number = $_POST['Email_Phone_Number'];
		$Password = $_POST['Password'];
		
		// if the signup button is clicked
		if (empty($First_Name)) {
			array_push($errors, "First Name is required");
		}
		if (empty($Last_Name)) {
			array_push($errors, "Last Name is required");
		}
		if (empty($Email_Phone_Number)) {
			array_push($errors, "Email or Phone Number is required");
		}
		if (empty($Password)) {
			array_push($errors, "Password is required");
		}
		// check to see if email or phone number is already in database
		$query = "SELECT Email_Phone_Number FROM logstart WHERE Email_Phone_Number='$Email_Phone_Number'";
		$checkEmailPhoneNumber = mysqli_query($db, $query);
		if (mysqli_num_rows($checkEmailPhoneNumber) > 0) {
			array_push($errors, "Email/Phone number is already taken");	
		}
		if (count($errors) === 0) {
			$_SESSION['First_Name'] = $First_Name;
			$_SESSION['Last_Name'] = $Last_Name;
			$_SESSION['Email_Phone_Number'] = $Email_Phone_Number;
			$_SESSION['Password'] = $Password;
			if (is_numeric($Email_Phone_Number)) {
				header('location: ../../signupStart/HTML.php/signupOP'); // redirect to phone verification page
			} else {
				header('location: ../../signupStart/HTML.php/signupOE'); // redirect to email verification page
				}
		 } 
	}
	// Verifiction procedure

	if (isset($_POST["vEPNb"])) {
		$First_Name = mysqli_real_escape_string($db, $_SESSION['First_Name']);
		$Last_Name = mysqli_real_escape_string($db, $_SESSION['Last_Name']);
		$Email_Phone_Number = mysqli_real_escape_string($db, $_SESSION['Email_Phone_Number']);
		$Password = mysqli_real_escape_string($db, $_SESSION['Password']);
		$verifyEPN = $_POST['vEPNi'];
		if (empty($verifyEPN)) {
			array_push($errors, "Verification code is required");
		}
		if ($verifyEPN == 4312) {
			if (count($errors) == 0) {
				
				$sql = "INSERT INTO logstart (First_Name, Last_Name, Email_Phone_Number, Password) 
					VALUES ('$First_Name', '$Last_Name', '$Email_Phone_Number', '$Password')";
				mysqli_query($db, $sql);
				header('location: Orientation/orientationPage.php'); // redirect to
				}
		} else {
			array_push($errors, "wrong");
		}
		mysqli_close($db);				
	}
	
	// login procedure
	 if (isset($_POST["login"])) {
		$Email_Phone_Number = mysqli_real_escape_string($db, $_POST['Email_Phone_Number']);
		$Password = mysqli_real_escape_string($db, $_POST['Password']);
		
		// if the login button is clicked
		if (empty($Email_Phone_Number)) {
			array_push($errors, "Email or Phone Number is required");
		}
		if (empty($Password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) === 0) {
			// $Password = md5($Password); encrypt password before comparing with that from database.
			$query = "SELECT Email_Phone_Number, Password, First_Name FROM logstart WHERE Email_Phone_Number='$Email_Phone_Number' AND Password='$Password'";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_row($result); 
			$First_Name = $row[2];	
				
			if (mysqli_num_rows($result) > 0) {

				// log user in
				$_SESSION['First_Name'] = $First_Name;
				$_SESSION['Email_Phone_Number'] = $Email_Phone_Number;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../../HomePage\HTML.php/index.php'); // redirect to home page					
							
			} else {
				array_push($errors, "wrong username/password combo");				
				}
		}
		mysqli_close($db);
	 }

	
	

	// logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['First_Name']);
		header('location: welcomePHP.php');
		
	 }

// check database connection

//	if (isset($db) && $db === false) {
//   		echo 'did not connect';
// 	} else {
// 		  echo 'this did connect';                
// 		} 







?>