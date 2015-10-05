<?php
require 'connect.php';

$id = $_POST['id'];
$regno =$_POST['regno'];
$departuretime = $_POST['departuretime'];
$capacity = $_POST['capacity'];
$driver = $_POST['driver'];



$updateQuery = "UPDATE `buses` SET `bus_reg_no` = '$regno', `departure_time`='$departuretime',`capacity` = '$capacity',
`driver_name`='$driver' WHERE `bus_id` ='$id'";

if($statement = mysql_query($updateQuery)){
		header('Location: /final/adminPage.php?msg=busupdated');

		}else 
	{ echo 
	"Error updating";
	}





?>