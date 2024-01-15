<?php 
include ('code.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<script language="javascript" type="text/javascript">
		window.history.forward();
	</script>
	<title>Multi User Login</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-1.css">
	
</head>
<body>
	<div class="contain row">
		<div class="com-md-6">	
		    <h2 class="text-center">Log In</h2></img>			
			<hr/>		
			<form method="POST" name="log" onSubmit="return Login(log)">
				
				<div class="form-group">
					<label>User Name</label>
					<input type="text" name="username" placeholder="Enter Name" class="form-control"><br>
					<label style="color: red;" class="error" id="lb1"></label>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" class="form-control"><br>
					<label style="color: red;" class="error" id="lb2"></label>
				</div>
				<div class="form-group">
					<input style="margin-left: 60px;" type="submit" name="btnLogin" class="btn btn-primary" value="Login">
					<a style="margin-left: 40px;"  href="signup.php">Create a new account</a>
				</div> 
			</form>
		</div>	
	</div>

	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="log.js"></script>
</body>
</html>
