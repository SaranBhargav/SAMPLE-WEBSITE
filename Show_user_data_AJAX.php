
<?php


//
include 'config.php';

$sqlselect = "SELECT * FROM sample_user";

$result = mysqli_query($db,$sqlselect);

$json_array=array();
echo "
	<table>
	<tr>
			<th> ID</th>
			<th>  First Name</th>
			<th> Middle Name</th>
			<th> Last Name</th>
			<th> Email</th>
			<th> mobile number</th>
			
		</tr>";
 while( $row = mysqli_fetch_assoc( $result)){
	$json_array[0]=$row['ID'];
	$json_array[1]=$row['fname'];
	$json_array[2]=$row['mname'];
	$json_array[3]=$row['lname'];
	$json_array[4]=$row['email'];
	$json_array[5]=$row['phonenum'];
	

	
	
		echo "
	<tr><td>$json_array[0]</td>
	<td>$json_array[1]</td>
	<td>$json_array[2]</td>
	<td>$json_array[3]</td>
	<td>$json_array[4]</td>
	<td>$json_array[5]</td></tr></table>"
	;
	
	}
	

mysqli_close($db);

?>
