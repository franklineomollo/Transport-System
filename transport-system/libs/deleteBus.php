<?php

require 'connect.php';

$id = $_POST['id'];

$deleteQuery = "DELETE FROM`buses` WHERE `bus_id` = '$id'";

if($statement_query = mysql_query($deleteQuery)){

		header('Location: /final/adminPage.php?msg=success');
	}
	else{
		echo "Record not deleted";
	}
			
?>