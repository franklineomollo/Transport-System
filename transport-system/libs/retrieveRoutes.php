<?php
require 'connect.php';

$selectQuery = "SELECT * FROM `routes`";
$routeRecord = mysql_query($selectQuery);

	while ($routes = mysql_fetch_assoc($routeRecord))
	 {
						
		echo "<tr>.";
		echo "<td>".$routes['route_id']."</td>.";
		echo "<td>".$routes['from']."</td>.";
		echo "<td>".$routes['to']."</td>.";
		echo "<td>".$routes['fare']."</td>.";
		echo "</tr>";
	}





?>