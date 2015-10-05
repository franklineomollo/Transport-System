<?php include 'connect.php';?>
<?php
session_start();
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];

$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;


if( ($firstname != "") && ($lastname!="") && ($gender!="") && ($phonenumber!="") && ($email!=""))
{
	$enterDetails =  "INSERT INTO `passenger` VALUES(NULL,'$firstname','$lastname','$gender','$phonenumber','$email')";
	if($cust_details_query = mysql_query($enterDetails))
	{
		
		$_SESSION['pass_id'] = mysql_insert_id();
		$booking = "INSERT INTO `booking` VALUES (NULL,{$_SESSION['bus_id']},{$_SESSION['pass_id']},'{$_SESSION['departure_date']}','{$_SESSION['to']}','{$_SESSION['from']}','{$_SESSION['seats']}',0,{$_SESSION['fare']},'{$_SESSION['trip_type']}')";
		
		
		
		
		if($booking_query = mysql_query($booking))
		{
			
			require 'pesapal/iframe.php';
		}
	}else{
		echo "fail!";
	}
}else{
	echo "error";
}
?>