<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('127.0.0.1', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['create'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($phonenumber)) { array_push($errors, "Phone number is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($password_2)) { array_push($errors, "Password is required"); }
		

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email,phonenumber, password) 
					  VALUES('$username', '$email','$phonenumber', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: E-ticketing1.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
			//alert('Username is required');
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: E-ticketing1.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:E-ticketing1.php');
	}

?>