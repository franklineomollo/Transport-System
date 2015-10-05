<?php
session_start();
require 'connect.php';
$update = "UPDATE `booking` SET `booked` = 1 WHERE `pass_id` = {$_SESSION['pass_id']}";
if(mysql_query($update))
{
	$seats_ = null;

	for($i =1; $i <=$_SESSION['seats']; $i++)
	{
		$seats_ .= $_SESSION['booked_seats']+$i.", ";
	}
	$_SESSION['seatnumbers'] = $seats_;
	
}
?>