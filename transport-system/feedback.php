<!DOCTYPE html>
<html>
<head>
	<title>Your ticket</title>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
	
</head>
<body>

<!--main navigation bar-->
<div class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<a href="index.php" class="navbar-brand">Transport System Reservation</a>
		<button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
			
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
		</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="index.php">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#contact" data-toggle= "modal">Contact Us</a></li>
				<li><a href="adminSignIn.php">Administrator</a></li>
				<li><a href="help.php">Help</a></li>
			</ul>
		</div>
	</div>

</div>

<!--middle jumbotron-->
    <div class="container">
		<div class="jumbotron" id="middlejumbotronDetails">

			<div class="container">
				
					<div class="well" style="background-color: gray;">
						
						
						<h2>RESERVATION SUCCESSFUL</h2>
						<h4>Below are your reservation details. Print this screen and present upon boarding the bus</h4>

					</div>
			</div>
				
			
			<div class="container">
						<?php
						
						require 'libs/feedback.php';?>
						
						<table class="table table-striped table-bordered" id="admin_table" width="600" height="255" 
							 style = "margin-top:10px;" border="1" cellpadding="1" cellspacing="1">
								<tr>
								<td></td>
								<th id = "ticketHeader" colspan = "2"><h3>Transport System Company</h3><th>
								</tr>
								<tr>
									<td><b>First Name:</b></td>
									<td><?php echo $_SESSION['firstname']?></td>
									<td><b>Last Name:</b></td>
									<td><?php echo $_SESSION['lastname']?></td>
								</tr>
								<tr>
															
									<td><b>From:</b></td>
									<td><?php echo $_SESSION['from']?></td>
									<td><b>To:</b></td>
									<td><?php echo $_SESSION['to']?></td>
								</tr>
								<tr>
									<td><b>Number of seat(s):</b></td>
									<td><?php echo $_SESSION['seats']?></td>
									<td><b>Reserved seat(s):</b></td>
									<td> <?php 
									echo $_SESSION['seatnumbers'];?></td>
								</tr>
								<tr>
									<td>Bus ID</td>
									<td><?php echo $_SESSION['bus_id']; ?></td>
									<td><b>Total Fare Paid:</b></td>
									<td><?php echo $_SESSION['fare']?></td>
									
								</tr>
								
							</table>
						
						
							
			</div>
					<div class="container">
						<form action="convertToPdfTrial.php" class="col-lg-4">
								
						</form>
							<label class="col-lg-4"></label>
						<form action="/final/index.php" class="col-lg-4">
								<button type = "submit" class = "btn btn-primary pull-right" id="btnPrintTicket" style="height: 50px; width:200px;" >New Reservation</button>
						</form>	
					</div>
					
				
		
							
							
							

		</div>
	</div>
</div>

<!--page footer-->
<div class="container">
<div class="navbar navbar-default navbar-static-bottom">
	<div class="container">
		<p class="navbar-text"> Copyright@ 2014 by Frankline Omollo. All Rights Reserved.</p>
	</div>
</div>
</div>

<div class= "modal fade" id="contact" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
		<form class="form-horizontal" method="post" action="contactMoyaleRaha.php">
			<div class="modal-header">
				<h4>Contact Transport System</h4>

			</div>
			<div class="modal-body">
				<div class="form-group">
				
					<label for="contact-name" class="col-lg-2 control-label" >Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="contact-name" placeholder="Full Name" name="name">
						</div>
				</div>

				<div class="form-group">
				
					<label for="contact-email" class="col-lg-2 control-label" >Email:</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" name="email" id="contact-email" placeholder="you@example.com">
						</div>
				</div>

				<div class="form-group">
				
					<label for="contact-msg" class="col-lg-2 control-label" >Message:</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="8" name="message"></textarea>
						</div>
				</div>

				


			</div>



			<div class="modal-footer">
				<a class="btn btn-default" data-dismiss="modal"> Cancel</a>
				<button class="btn btn-primary" type="submit">Send</button>
			</div>
			</form>
		</div>
	</div> 
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>