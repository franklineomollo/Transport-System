<?php
require $_SERVER['DOCUMENT_ROOT'].'/final/libs/connect.php';

$id = $_POST['id'];
$from =$_POST['from'];
$to= $_POST['to'];
$fare = $_POST['fare'];




$updateQuery = "UPDATE `routes` SET `from`='$from',`to` = '$to',
`fare`='$fare' WHERE `route_id` ='$id'";

if($statement = mysql_query($updateQuery)){

		header('Location: /final/adminPage.php?msg=routeupdated');
	}else { 
	
	echo "Error updating";
	header('Location: /final/adminPage.php');
	}





?>