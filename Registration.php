<?php
include 'config.php';
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
 
$firstName = mysqli_real_escape_string($db,$_POST['fname']);
$middleName = mysqli_real_escape_string($db,$_POST['mname']);
$lastName = mysqli_real_escape_string($db,$_POST['lname']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$phonenum=mysqli_real_escape_string($db,$_POST['num']);
$password=mysqli_real_escape_string($db,$_POST['pwd']);

$query = "INSERT INTO `sample_user` (`fname`, `mname`, `lname`, `phonenum`,
    `email`,`password`) VALUES ( '$firstName','$middleName','$lastName','$phonenum','$email','$password')";
   $response = @mysqli_query($db, $query);
   if($response){
     echo "Success <br>";
    
     echo " <b>User Registered</b><br/> You are being Redirected. Please wait.";
     header( "refresh:2; url=http://localhost/MSR%20cosmos%20job%20assignment/Login.html" ); 
   } else { echo mysqli_error($db);}
 }
 

// Close connection to the database
mysqli_close($db);

?>