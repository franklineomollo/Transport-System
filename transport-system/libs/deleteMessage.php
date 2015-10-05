<?php
require 'connect.php';


$id= $_POST['id'];
$deleteQuery = "DELETE FROM `contactus` WHERE `id` = '$id'";

if($statement_query = mysql_query($deleteQuery))
		{

			
			header('Location: /final/adminPage.php?msg=messagedeleted');
		}		
		else{
			echo "Record not deleted";
			}
		





?>