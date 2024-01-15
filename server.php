<?php 
	
	session_start();


	// variable declaration
	$username = "";
	$password    = "";
	$errors = array(); 

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'user_login');

	// REGISTER USER
	if (isset($_POST['btnSignin'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password);//encrypt the password before saving in the database
			$query = "INSERT INTO logintb (Name, Password, Role) 
            VALUES('$username', '$password', 'User')";
			mysqli_query($db, $query);
			$_SESSION['LoginUser'] = $username;
			$_SESSION['loggedin'] = TRUE;
			header('location: rvu.php');
		}

	}

	if (isset($_POST['btnAdmin'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password);//encrypt the password before saving in the database
			$query = "INSERT INTO logintb (Name, Password, Role) 
            VALUES('$username', '$password', 'Admin')";
			mysqli_query($db, $query);

			$_SESSION['LoginUser'] = $username;
			$_SESSION['loggedin'] = TRUE;
			header('location: adminpage.php');
		}

	}
	if(isset($_POST['btnremove']))
{
	$name = $_POST["username"];

	$query = "DELETE FROM logintb WHERE Name ='$name'";
	mysqli_query($db, $query);

}

?>