<?php 
	session_start();

	// variable declaration
	$fname = "";
	$lname = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('127.0.0.1', 'root', '', 'busbook');

	// REGISTER USER
	if (isset($_POST['confirm'])) {
		// receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$Gender = mysqli_real_escape_string($db, $_POST['Gender']);
		$date = mysqli_real_escape_string($db, $_POST['date']);
        $Start = mysqli_real_escape_string($db, $_POST['Start']);
        $End = mysqli_real_escape_string($db, $_POST['End']);
        $CompanyName= mysqli_real_escape_string($db, $_POST['CompanyName']);
        $CoachType= mysqli_real_escape_string($db, $_POST['CoachType']);
        

		// form validation: ensure that the form is correctly filled
		if (empty($fname)) { array_push($errors, "First name is required"); }
		if (empty($lname)) { array_push($errors, "last name is required"); }
		if (empty($Gender)) { array_push($errors, "Gender is required"); }
		if (empty($date)) { array_push($errors, "Date is required"); }
        if (empty($Start)) { array_push($errors, "Start is required"); }
        if (empty($End)) { array_push($errors, "End is required"); }
        if (empty($CompanyName)) { array_push($errors, "Company name is required"); }
        if (empty($CoachType)) { array_push($errors, "Coach type is required"); }
		

		/*if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}*/

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO ticket (fname,lname,Gender, date,Start,End,CompanyName,CoachType) 
					  VALUES('$fname', '$lname','$Gender', '$date','$date','$Start','$End','$CompanyName','$CoachType')";
			mysqli_query($db, $query);

			//$_SESSION['username'] = $username;
			//$_SESSION['success'] = "You are now logged in";
			header('location: E-ticketing1.php');
		}
    }