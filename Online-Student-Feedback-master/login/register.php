<?php

	// init connection
	$objConnection = mysqli_connect("localhost","root","","studentfeedback");

	// check connection
	if (mysqli_connect_errno()) {

		// print error
		die( "Failed to connect to MySQL: " . mysqli_connect_error());
	}

	// loop through the submitted data
	foreach ($_POST as $strField => $strValue) {

		// 
		if ($strField == "confirm_password") {

			// do not continue
			continue;
		}
		
		// get the data
		$arFields[] = $strField;
		$arValues[] = $strValue;
	}
	
	$strRoll_No = $_POST['Roll_No'];
	$strPassword = $_POST['Pass'];
	$strConfirmPassword = $_POST['confirm_password'];
	$email = $_POST['email_address'];
	$contact_no = $_POST['contact_no'];

	// for validations..
	// build query
	$strQuery = "SELECT Roll_No FROM user_info WHERE username='$strRoll_No'";
	
	// execute
	if ($hQuery = $objConnection->query($strQuery)) {
		
		// do we have existing data?
		if ($hQuery->num_rows == 1) {
			// redirect
			header("location: registration.php?response=failed&class=alert-danger&message=Username already exists");
			
			exit();
		}
	}
	
	// email is valid?
	 if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	 	// redirect
	 	header("location: registration.php?response=failed&class=alert-danger&message=Invalid email");
		
	 	exit();
	 }
	
	// confirm password didnt match?
	if ($strPassword != $strConfirmPassword) {
		// redirect
		header("location: registration.php?response=failed&class=alert-danger&message=Confirm password didnt match");
		
		exit();
	}
	if (!is_numeric($contact_no)){
		header("location: registration.php?response=failed&class=alert-danger&message=Invalid contact number");
		
		exit();
	}
	// end of validations
  
	// build query
	$strQuery = "INSERT INTO 
					user_info (".implode(",", $arFields).") 
				VALUES 
					('".implode("','",$arValues)."')";

	// execute
	if ($objConnection->query($strQuery)) {

		// get username and pw
		$strRoll_No = $_POST['Roll_No'];
		$strName = $_POST['Name'];
		$strPassword = $_POST['Pass'];


		// build query
		$strLoginQuery = "INSERT INTO 
							student (Roll_No, Name, Pass) 
						  VALUES 
						  	('$strRoll_No', '$strName', '$strPassword')";

		// execute
		$objConnection->query($strLoginQuery);

		// redirect
		header("location: login.php?response=success&class=alert-success&message=Successful");
	}

	echo $objConnection->error;

?>