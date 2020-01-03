<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Password change PG</title>
<script type="text/javascript" src="Validation.js"></script>
<link rel="stylesheet" type="text/css" href="Layout.css">
<style type="text/css">
label {
	
	text-align: right;
	float: left;
	width:700px;
	margin-bottom: 10px;
}
a{ padding: 10px;

	background-color: red;
}

li {
    margin-bottom: 40px;
}

</style>
</head>
<body> 
	<header>
		User Credential System - Sample website
		<a href="Login.html" style="float: right; color:white; font-size: 20;" > Logout</a>
	</header>
	<nav>
		<ul>
			<li>
				<a href="login.html" style="color:white;"> Login</a>
			</li>
			<li>
				<a href="Registration.html" style="color:white;"> Registration</a>
			</li>
			<li>
				<a href="Userdetails_ajax.php" style="color:white;"> User details</a>
			</li>
		</ul>
	</nav>
<form  action="passwordchange.php" method=post>

<label for="pwd"><b> Password</b>
<input id="pwds" type="password" name="pwd" required></label>

<label for="cnfpwd"><b>Confirm Password</b>
<input id="cnfpwds" type="password" name="cnfpwd"required onchange="validatePwd()"></label>

 <label for="button">
<button id="btn1" type="submit" name="button" >Password Change</button></label>

<?php
include 'config.php';
 session_start();

        $email = $_SESSION['Email'];

  if($_SERVER["REQUEST_METHOD"] == "POST") 
{

$password=mysqli_real_escape_string($db,$_POST['pwd']);
$query = "UPDATE `sample_user` SET   `password`='$password' WHERE  `email`='$email' ";
$response = @mysqli_query($db, $query);
}

?>


</form>
</body>
</html>