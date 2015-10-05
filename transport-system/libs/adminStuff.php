
<?php

include 'connect.php';
$getCustomerMessages = "SELECT * FROM contactus LIMIT 0,30";
$custRecord = mysql_query($getCustomerMessages);



	while ($customer = mysql_fetch_assoc($custRecord))
	 {
						
		echo "<tr>.";
		echo "<td>".$customer['id']."</td>.";
		echo "<td>".$customer['name']."</td>.";
		echo "<td>".$customer['email']."</td>.";
		echo "<td>".$customer['message']."</td>.";
		echo "</tr>";
	}


?>