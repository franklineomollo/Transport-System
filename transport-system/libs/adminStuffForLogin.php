<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>
<?php
if ($username && $userid) 
		{
		echo "Welcome <b>$username</b>, <a href = './logout.php'>log out</a>";
								
		}
		else
			echo "Please Login to access this page. <a href='adminSignin.php'>Log in</a>";


?>