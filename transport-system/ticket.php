<?php 


$ticket = "<table class='table table-striped table-bordered' id='admin_table' width='600' height='255' 
							 style = 'margin-top:10px;' border='1' cellpadding='1' cellspacing='1'>
								<tr>
								<td></td>
								<th id = 'ticketHeader' colspan = '2'><h3>Moyale Raha Bus Company</h3><th>
								</tr>
								<tr>
									<?php require 'libs/feedback.php';?>
									<td>First Name:</td>
									<td> </td>
									<td>Last Name:</td>
									<td>(last name should be in here)</td>
								</tr>
								<tr>
															
									<td>From:</td>
									<td>(From in here)</td>
									<td>To:</td>
									<td>(To in here)</td>
								</tr>
								<tr>
															
									<td>Date:</td>
									<td></td>
									<td>Bus Registration Number:</td>
									<td></td>
								</tr>						
								<tr>
									<td>Number of seat(s):</td>
									<td></td>
									<td>Reserved seat(s):</td>
									<td></td>
								</tr>
								<tr>						
									<td colspan ='3' ><b>Total Fare Paid:</b></td>
									<td></td>
								</tr>
								
							</table>";
		echo $ticket;



?>


