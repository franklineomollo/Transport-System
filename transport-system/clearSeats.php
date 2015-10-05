<?php
session_start();
require 'libs/check_availability.php';
require 'libs/booking.php';
?>
<?php

	$_SESSION['fare'] = $_SESSION['fare'] / $_SESSION['seats'];
	header('Location: seatsPage.php');
	


?>