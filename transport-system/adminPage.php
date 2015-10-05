<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!--validate forms-->
	<script type="text/javascript">
				function validateMessagesForm()
				{
				
				var x=document.forms["deleteMessageForm"]["custname"].value;
				if (x==null || x=="")
				  {
				  alert("Please fill out a customer ID from the table to delete");
					if(isNaN(x)==true){
					alert("Customer ID must be a number");
					}
				  
				  return false;
					
				  }
				 
				}
				function validateUpdatebusForm(){
					var x=document.forms["updateBusForm"]["id"].value;
				if (x==null || x=="")
				  {
				  alert("Bus ID must be filled out");
				  return false;
				  }
				var y=document.forms["updateBusForm"]["regno"].value;
				if (y==null || y=="")
				  {
				  alert("Bus registration number must be filled out");
				  return false;
				  }
				var a=document.forms["updateBusForm"]["departuretime"].value;
				if (a==null || a=="")
				  {
				  alert("Departure time must be filled out");
				  return false;
				  }
				var b=document.forms["updateBusForm"]["capacity"].value;
				if (b==null || b=="")
				  {
				  alert("Capacity must be filled out");
				  return false;
				  }
				  var c=document.forms["updateBusForm"]["driver"].value;
				if (c==null || c=="")
				  {
				  alert("Driver name must be filled out");
				  return false;
				  }
				
				}
				
				function validateAddBusForm(){
					var y=document.forms["addBusForm"]["regno"].value;
				if (y==null || y=="")
				  {
				  alert("Bus registration number must be filled out");
				  return false;
				  }
				var a=document.forms["addBusForm"]["departuretime"].value;
				if (a==null || a=="")
				  {
				  alert("Departure time must be filled out");
				  return false;
				  }
				var b=document.forms["addBusForm"]["capacity"].value;
				if (b==null || b=="")
				  {
				  alert("Capacity must be filled out");
				  return false;
				  }
				  var c=document.forms["addBusForm"]["driver"].value;
				if (c==null || c=="")
				  {
				  alert("Driver name must be filled out");
				  return false;
				  }
				
				}
				function validateDeleteBusForm()
				{
				var x=document.forms["deleteBusForm"]["id"].value;
				if (x==null || x=="")
				  {
				  alert("Please fill out Bus ID to delete");
				  return false;
				  }
				 
				}
				function validateDeleteRouteForm()
				{
				var x=document.forms["deleteRouteForm"]["id"].value;
				if (x==null || x=="")
				  {
				  alert("Please fill out Route ID to delete");
				  return false;
				  }
				 
				}
				function validateAddRouteForm(){
					var y=document.forms["addRouteForm"]["from"].value;
				if (y==null || y=="")
				  {
				  alert("The field 'from' must be filled out");
				  return false;
				  }
				var a=document.forms["addRouteForm"]["to"].value;
				if (a==null || a=="")
				  {
				  alert("The field 'to' must be filled out");
				  return false;
				  }
				var b=document.forms["addRouteForm"]["fare"].value;
				if (b==null || b=="")
				  {
				  alert("Route fare must be filled out");
				  return false;
				  }
				}
				
				function validateUpdateRouteForm(){
					var x=document.forms["updateRouteForm"]["id"].value;
				if (x==null || x=="")
				  {
				  alert("Route ID must be filled out");
				  return false;
				  }
				var y=document.forms["updateRouteForm"]["from"].value;
				if (y==null || y=="")
				  {
				  alert("The field 'From'must be filled out");
				  return false;
				  }
				var a=document.forms["updateRouteForm"]["to"].value;
				if (a==null || a=="")
				  {
				  alert("The field 'To' must be filled out");
				  return false;
				  }
				var b=document.forms["updateRouteForm"]["fare"].value;
				if (b==null || b=="")
				  {
				  alert("Route fare must be filled out");
				  return false;
				  }
				}
		</script>
		<script>
			<?php if(isset($_GET['msg'])){
				$msg = $_GET['msg'];
				if($msg == 'success'){
					echo "alert('Bus detail deleted successfully');";
				}
			}
			?>
		</script>
		<script>
			<?php if(isset($_GET['msg'])){
				$msg = $_GET['msg'];
				if($msg == 'routedeleted'){
					echo "alert('Route deleted successfully');";
				}
			}
			
			if(isset($_GET['msg'])){
				$msg = $_GET['msg'];
				if($msg == 'messagedeleted'){
					echo "alert('Message deleted successfully');";
				}
			}
			if(isset($_GET['msg'])){
				$msg = $_GET['msg'];
				if($msg == 'busupdated'){
					echo "alert('Bus detail updated successfully');";
				}
			}
			if(isset($_GET['msg'])){
				$msg = $_GET['msg'];
				if($msg == 'busadded'){
					echo "alert('Bus detail added successfully');";
				}
			}
			if(isset($_GET['msg'])){
				$msg = $_GET['msg'];
				if($msg == 'routeupdated'){
					echo "alert('Route updated successfully');";
				}
			}
			if(isset($_GET['msg'])){
				$msg = $_GET['msg'];
				if($msg == 'routeadded'){
					echo "alert('Route added successfully');";
				}
			}
			?>
			
		</script>
		
</head>
<body>

<div class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<a href="index.php" class="navbar-brand">Transport Systems Reservation</a>
		<button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
			
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
		</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="#">Administrator</a></li>
			</ul>
		</div>
	</div>
	</div>
<!--end of navigation bar-->
<!--admin notification at the top of the page-->
<div class="container" id="admin_notification" style="color:black;">
				<?php

				require 'libs/adminStuffForlogin.php';
				?>
</div>

<!--middle jumbotron-->
 <div class="container">
			<div class="jumbotron" id="middlejumbotronDetails">
				<div class="container">
					
					<ul class= "nav nav-tabs">
						<li class = "active">
								<a data-toggle="tab" href="#viewmessages" >View Messages</a>
								
						
						</li>
						<li>
								<a data-toggle="tab" href="#viewbuses"  >View Buses</a>
								
						
						</li>
						<li>
								<a data-toggle="tab" href="#viewroutes"  >View Routes</a>
								
						
						</li>
						
					
					
					</ul>

					<div class="tab-content">

						<div id="viewmessages" class="tab-pane fade in active" >

							
							<table class="table table-striped table-bordered" id="admin_table" width="600" border="1" cellpadding="1" cellspacing="1">
										<tr>
											<th>Message ID</th>
											<th>Name</th>
											<th>Email</th>
											<th>Message</th>


										</tr>
										<?php require 'libs/adminStuff.php';?>

							</table>
							<div class="well" style="background-color:gray; height:80px;">
								<form method="post" action="libs/deleteMessage.php" id="deleteMessageForm" onsubmit = "return validateMessagesForm()">
									<div class = "container">
										<div class="form-group col-lg-6">
											<input type="text" class ="form-control" name="id" id="custname" placeholder="Enter Message ID to delete" >
										</div>
										<div class="form-group">
											<input type = "submit" class="btn btn-primary btn-md col-lg-4 pull-right" name="deletebtn" value="Delete message" 
											onclick="return confirm('Are you sure you want to delete this record?');">
										
										</div>
									</div>
									
								</form>
							</div>
						

						</div>
						<div  id="viewbuses" class="tab-pane fade" >

							<table class="table table-striped table-bordered" id="admin_table" width="600" border="1" cellpadding="1" cellspacing="1">
										<tr>
											<th>Bus ID</th>
											<th>Bus Registration Number</th>
											<th>Departure Time</th>
											<th>Capacity</th>
											<th>Driver Name</th>


										</tr>
										<?php require 'libs/adminBusView.php';?>

							</table>
							<div class="well" style="background-color:gray; height:80px;">
								<form method="post" action="libs/updatebus.php" id="updateBusForm" onsubmit= "return validateUpdatebusForm()">
									<div class = "container">
										<div class="form-group col-lg-10">
											<input type="text" id="id" class ="form-control col-lg-4" name="id" placeholder="ID" style="width: 50px;" >
											<input type="text" id="regno" class ="form-control col-lg-4" name="regno" placeholder="Bus Reg.No" style="width: 150px;" >
											<input type="text" id="departuretime" class ="form-control col-lg-4" name="departuretime" placeholder="Departure time" style="width: 150px;" >
											<input type="text" id="capacity"class ="form-control col-lg-4" name="capacity" placeholder="Capacity" style="width: 150px;" >
											<input type="text" id="driver" class ="form-control col-lg-4" name="driver" placeholder="Driver name" style="width: 150px;" >
											
										</div>
										<div class="form-group">
											<input type = "submit" class="btn btn-primary btn-md col-lg-2 pull-right" name="updatebus" value="Update Bus"
											>
										
										</div>
									</div>
									
								</form>
							</div>
							<div class="well" style="background-color:gray; height:80px;">
								<form method="post" action="libs/addbus.php" id="addBusForm" onsubmit="return validateAddBusForm()">
									<div class = "container">
										<div class="form-group col-lg-10">
											
											<input type="text" id="regno" class ="form-control col-lg-4" name="regno" placeholder="Bus Reg.No" style="width: 124px;" >
											<input type="text" id="departuretime" class ="form-control col-lg-4" name="departuretime" placeholder="Departure time" style="width: 175px;" >
											<input type="text" id="capacity" class ="form-control col-lg-4" name="capacity" placeholder="Capacity" style="width: 175px;" >
											<input type="text" id="driver" class ="form-control col-lg-4" name="driver" placeholder="Driver name" style="width: 175px;" >
											
										</div>
										<div class="form-group">
											<input type = "submit" class="btn btn-primary btn-md col-lg-2 pull-right" name="updatebus" value="Add Bus">
										
										</div>
									</div>
									
								</form>
							</div>
							<div class="well" style="background-color:gray; height:80px;">
								<form method="post" action="libs/deleteBus.php" id="deleteBusForm" onsubmit ="return validateDeleteBusForm()">
									<div class = "container">
										<div class="form-group col-lg-8">
											<input type="text" class ="form-control" id ="id" name="id" placeholder="Enter Bus ID to delete" style="width:649px" >
										</div>
										<div class="form-group">
											<input type = "submit" class="btn btn-primary btn-md col-lg-2 pull-right" name="deletebtn" value="Delete Bus" 
											onclick="return confirm('Are you sure you want to delete this record?');">
										
										</div>
									</div>
									
								</form>
							</div>
							
							
						

						</div>
						<div  id="viewroutes" class="tab-pane fade" >

							<table class="table table-striped table-bordered" id="admin_table" width="600" border="1" cellpadding="1" cellspacing="1">
										<tr>
											<th>Route ID</th>
											<th>From</th>
											<th>To</th>
											<th>Fare</th>
						
										</tr>
										<?php require 'libs/retrieveRoutes.php';?>

							</table>
							<div class="well" style="background-color:gray; height:80px;">
								<form method="post" action="libs/adminStuff/updateRoute.php" id="updateRouteForm" onsubmit= "return validateUpdateRouteForm()">
									<div class = "container">
										<div class="form-group col-lg-10">
											<input type="text" id="id" class ="form-control col-lg-4" name="id" placeholder="ID" style="width: 75px;" >
											<input type="text" id="from" class ="form-control col-lg-4" name="from" placeholder="From" style="width: 150px;" >
											<input type="text" id="to" class ="form-control col-lg-4" name="to" placeholder="To" style="width: 150px;" >
											<input type="text" id="fare"class ="form-control col-lg-4" name="fare" placeholder="Fare" style="width: 150px;" >
											
											
										</div>
										<div class="form-group">
											<input type = "submit" class="btn btn-primary btn-md col-lg-2 pull-right" name="updatebus" value="Update Route">
										
										</div>
									</div>
									
								</form>
							</div>
							<div class="well" style="background-color:gray; height:80px;">
								<form method="post" action="libs/adminStuff/addRoute.php" id="addRouteForm" onsubmit= "return validateAddRouteForm()">
									<div class = "container">
										<div class="form-group col-lg-10">
											
											<input type="text" id="from" class ="form-control col-lg-4" name="from" placeholder="From" style="width: 175px;" >
											<input type="text" id="to" class ="form-control col-lg-4" name="to" placeholder="To" style="width: 175px;" >
											<input type="text" id="fare"class ="form-control col-lg-4" name="fare" placeholder="Fare" style="width: 175px;" >
											
											
										</div>
										<div class="form-group">
											<input type = "submit" class="btn btn-primary btn-md col-lg-2 pull-right" name="updatebus" value="Add Route">
										
										</div>
									</div>
									
								</form>
							</div>
							<div class="well" style="background-color:gray; height:80px;">
								<form method="post" action="libs/adminStuff/deleteRoute.php" id="deleteRouteForm" onsubmit ="return validateDeleteRouteForm()">
									<div class = "container">
										<div class="form-group col-lg-8">
											<input type="text" class ="form-control" id ="id" name="id" placeholder="Enter Route ID to delete" style="width:525px" >
										</div>
										<div class="form-group">
											<input type = "submit" class="btn btn-primary btn-md col-lg-2 pull-right" name="deletebtn" value="Delete Route" 
											onclick="return confirm('Are you sure you want to delete this route?');">
										
										</div>
									</div>
									
								</form>
							</div>
						

						</div>
						
						
					</div>

					<script type="text/javascript">
							jQuery(document).ready(function($){
							$('#tabs').tab();
							});
					</script>
							
							
				</div>
		</div>
</div>




<!--page footer-->
<div class="container">
		<div class="navbar navbar-default navbar-static-bottom">
			<div class="container">
				<p class="navbar-text"> Copyright@ 2014 by Transport System. All Rights Reserved.</p>
			</div>
		</div>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>