<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Users detail PG</title>

<script>
function showUser() {
     xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("table").innerHTML = this.responseText.split(",");
               
            }
        };
        xmlhttp.open("GET","Show_user_data_AJAX.php",true);
        xmlhttp.send();
    
}
</script>
<script type="text/javascript" src="Validation.js"></script>

<link rel="stylesheet" type="text/css" href="Layout.css">
<style>

table{ margin-left: 14%; 
	margin-top: 20px; }

th{
	border:2px solid tomato;
	background-color: tomato;
	padding: 20px;

}
td{
	border:2px solid tomato;
	background-color: rgba(255, 99, 71, 0.5);
	padding: 20px;
}

label {
	
	text-align: right;
	float: left;
	width:800px;
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
		User Credential System -Sample website
		<a href="Login.html" style="float: right; color:white; font-size: 20;" > Logout</a>
	</header>
	<!--side nav-->
	<nav>
		<ul>
			<li>
				<a href="Login.html" style="color:white;"> Login</a>
			</li>
			<li>
				<a href="Registration.html" style="color:white;"> Registration</a>
			</li>
			<li>
				<a href="Passwordchange.php" style="color:white;"> Password change</a>
			</li>
		</ul>
	</nav>

<?php
include 'config.php';
?>
	
<!-- AJAX CALL HERE-->	
<table id="table"></table>
<label for="Ajax">Please press this button to view updated user data </label>
<button type="submit" name="Ajax"onclick="showUser();"> User details table</button>

<!-- Get details here-->
<form action="Userdetails_ajax.php" method=get>
<label for="id"><span><b> Get details</b></span>
<input type="text" name="id" required placeholder="Type ID and press ENTER">
</label>
<label for="search">
<input type="submit" id="btn2" value="GET DETAILS" name="btn2" onchange="<?php
if($_SERVER["REQUEST_METHOD"] == "GET") 
{
 
$id = mysqli_real_escape_string($db,$_GET['id']);
$selupd = "SELECT * FROM sample_user WHERE `ID`='$id'";

$result = mysqli_query($db,$selupd);
while($row = mysqli_fetch_assoc($result)){
?>" >
</label>
 </form>

<form class="Register" action="Userdetails_ajax.php" method=post >
<label for="upid"><span><b> User ID</b></span>
<input type="text" name="upid" required value="<?php echo $row['ID']; ?>">
</label>
<label for="upfname"><span><b> First Name</b></span>
<input type="text" name="upfname" required value="<?php echo $row['fname']; ?>">
</label>
<label for="upmname"><b> Middle Name</b>
<input type="text" name="upmname"value="<?php echo $row['mname']; ?>">
</label>
<label for="uplname"><b> Last Name</b>
<input type="text" name="uplname" required value="<?php echo $row['lname']; ?>">
</label>
<label for="upemail" ><b> Email</b>
<input type="email" name="upemail"required value="<?php echo $row['email']; ?>">
</label>
<label for="upnum"><b> mobile number</b>
<input id="num" type="text" name="upnum"  value="<?php echo $row['phonenum']; ?>" onchange="validatePhno()" >
</label>
<?php 
}}
?>

<!-- Update info from get details content--> 
<label for="button">
<span> <button id="btn1" type="submit" name="button" 
	onchange="<?php
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$id = mysqli_real_escape_string($db,$_POST['upid']);
$firstName = mysqli_real_escape_string($db,$_POST['upfname']);

$middleName = mysqli_real_escape_string($db,$_POST['upmname']);
$lastName = mysqli_real_escape_string($db,$_POST['uplname']);
$email=mysqli_real_escape_string($db,$_POST['upemail']);
$phonenum=mysqli_real_escape_string($db,$_POST['upnum']);

$query = "UPDATE `sample_user` SET   `fname`= '$firstName', `mname`= '$middleName',`lname`= '$lastName',
`phonenum`= '$phonenum',`email`= '$email'WHERE ID='$id' ";
$response = @mysqli_query($db, $query);
}

?>" onclick="showUser();">Update Details</button> </span>
	</label>

</form>
<!-- delete fuction -->
<form action="Userdetails_ajax.php" method=get>
<label for="delId"><span><b> DEl details  </b></span>

<input type="text" name="delId"  placeholder="Type ID and press ENTER"   
onchange="
<?php
if($_SERVER["REQUEST_METHOD"] == "GET") 
{
 

$delid =$_GET['delId'];

$del = " DELETE FROM `sample_user` WHERE ID='$delid' ";

$result = mysqli_query($db,$del);
}

mysqli_close($db);
?>" onclick="showUser();">
 </label>
 </form>

</body>
</html>