<?php

  session_start();
  require_once "connection.php";

  $role = "";

  if(isset($_POST["btnLogin"]))
  {


  	$username = $_POST["username"];
  	$password = md5($_POST["password"]);

    $query = "SELECT * FROM logintb WHERE Name='$username' AND Password='$password'";

    $results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) > 0) 
  	{
  		while($row = mysqli_fetch_assoc($results))
  		{
  			if ($row['Role'] == 'Admin')
  			{
  				$_SESSION['LoginUser'] = $row['Name'];
          $_SESSION['role'] = $row['Role'];
          $_SESSION['loggedina'] = TRUE;
  				header('location: signin.php');
  			}
  			else
  			{
  				$_SESSION['LoginUser'] = $row['Name'];
          $_SESSION['role'] = $row['Role'];
          $_SESSION['loggedin'] = TRUE;
  				header('location: rvu.php');
  			}
  		}
      
  	}
  	else
  	{
  		echo "<script type='text/javascript'>alert('Invalid User Name or Password');</script>";
  	}
  }
?>