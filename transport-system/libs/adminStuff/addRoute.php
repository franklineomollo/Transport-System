<?php
	require $_SERVER['DOCUMENT_ROOT'].'/final/libs/connect.php';
	

	
	$from = $_POST['from'];
	$to = $_POST['to'];
	$fare = $_POST['fare'];
	
	$insertQuery = "INSERT INTO `routes` VALUES (NULL,'$from','$to', '$fare')";
	
	if($statement = mysql_query($insertQuery)){
	
			
		
			header('Location: /final/adminPage.php?msg=routeadded');
				
	
		}else{ echo "Failed to add new bus";
			}
			


?>