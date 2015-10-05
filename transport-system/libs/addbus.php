<?php
	require 'connect.php';
	

	$regno =$_POST['regno'];
	$departuretime = $_POST['departuretime'];
	$capacity = $_POST['capacity'];
	$driver = $_POST['driver'];
	
	$insertQuery = "INSERT INTO `buses` VALUES (NULL,'$regno','$departuretime', '$capacity','$driver')";
	
	if($statement = mysql_query($insertQuery)){
		
			header('Location: /final/adminPage.php?msg=busadded');
	
		}else{ echo "Failed to add new bus";}


?>