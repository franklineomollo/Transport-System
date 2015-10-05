<?php
include 'connect.php';

$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];


	$sendMessage = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
	
	
	if($statement = mysql_query($sendMessage)){
		
			header('Location: index.php?msg=messagesent');
	
		}else{ echo "Failed to send message";}
?>