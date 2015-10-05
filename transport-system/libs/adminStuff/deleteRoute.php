<?php

require $_SERVER['DOCUMENT_ROOT'].'/final/libs/connect.php';

$id = $_POST['id'];

$deleteQuery = "DELETE FROM `moyaleraha`.`routes` WHERE `routes`.`route_id` = '$id'";

if($statement_query = mysql_query($deleteQuery)){

	
	header('Location: /final/adminPage.php?msg=routedeleted');
		
		}
		else{
		echo "Record not deleted";
		//header('Location: /final/adminPage.php');
	}
			


?>