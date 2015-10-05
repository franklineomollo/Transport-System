<?php
include 'connect.php';
$getBusDetails = "SELECT * FROM buses";
$busRecord = mysql_query($getBusDetails);



	while ($bus = mysql_fetch_assoc($busRecord))
	 {
						
		echo "<tr>.";
		echo "<td>".$bus['bus_id']."</td>.";
		echo "<td>".$bus['bus_reg_no']."</td>.";
		echo "<td>".$bus['departure_time']."</td>.";
		echo "<td>".$bus['capacity']."</td>.";
		echo "<td>".$bus['driver_name']."</td>.";
		echo "</tr>";
	}


?>