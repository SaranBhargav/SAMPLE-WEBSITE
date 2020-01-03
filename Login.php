<?php
session_start();
include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$Email = mysqli_real_escape_string($db,$_POST['Email']);

$mypassword = mysqli_real_escape_string($db,$_POST['mypassword']); 

 $query = "SELECT * FROM sample_user WHERE `email`='$Email' AND  `password`='$mypassword'";
		$response = @mysqli_query($db, $query);

if($response->num_rows > 0)
{ 
   while($row = mysqli_fetch_array($response))
   

{
	
     $_SESSION['Email'] = $row['email'];
    
     echo "sucessful login with email =<b>". $_SESSION['Email']."</b>";

header( "refresh:1; url=Userdetails_ajax.php" ); 
}

} else {

echo 'Invalid Username or Password. Please <a href = "Login.html"> LOGIN </a> again.<br />';

echo mysqli_error($db);

}

}
 else{
 	echo "error";
echo mysqli_error($db);}
// Close connection to the database
mysqli_close($db);

?>
