<?php
include 'connect.php';

$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];


	mysql_query("INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')");
	header('Location: index.php');

?>