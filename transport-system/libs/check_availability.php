<?php
	$buses = "SELECT * FROM `buses` ORDER BY `bus_id` ASC";
	if($buses_run = mysql_query($buses))
	{
		$buses_returned = mysql_num_rows($buses_run);
		$statement= "SELECT `bus_id`, SUM(`seats`) AS `booked_seats` FROM `booking` WHERE `booked` = 1 GROUP BY `bus_id`"; 
		if($statement_query = mysql_query($statement))
		{
			if(mysql_num_rows($statement_query) > 0 )
			{
				while($row = mysql_fetch_array($statement_query))
				{
						$bus_id = $row['bus_id'];
						$booked_seats = $row['booked_seats'];
						if($booked_seats < 60){
							$booked_seats = $row['booked_seats'];
							break;
						}
						$bus_id = $bus_id+1;
						
						if($bus_id == $buses_returned+1){
							echo "<script>alert('There are no Available Buses. Please Come Again');</script>";
							header('Location: index.php');
						}
				}
				$_SESSION['bus_id'] = $bus_id;
				$available_seats = 60 - $booked_seats;
				$_SESSION['booked_seats'] = $booked_seats;
				$message = "{$available_seats} Available Seats in Bus {$bus_id}";
				header("Location: seatsPage.php?m={$message}&s={$booked_seats}");
			}else{
				$_SESSION['bus_id'] = 1;
				$_SESSION['booked_seats'] = 0;
			}
		}
	}
?>