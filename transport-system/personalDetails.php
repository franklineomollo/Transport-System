<!DOCTYPE html>
<html>
<head>
	<title>Personal Details</title>
	
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">

	<link href="styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="jumbotron.css">

	<script type="text/javascript">
				function validateForm()
				{
				var x=document.forms["detailsform"]["firstname"].value;
				if (x==null || x=="")
				  {
				  alert("First Name must be filled out");
				  return false;
				  }
				var y=document.forms["detailsform"]["lastname"].value;
				if (y==null || y=="")
				  {
				  alert("Last Name must be filled out");
				  return false;
				  }
				var a=document.forms["detailsform"]["gender"].value;
				if (a==null || a=="")
				  {
				  alert("Gender must be filled out");
				  return false;
				  }
				var b=document.forms["detailsform"]["phonenumber"].value;
				if (b==null || b=="")
				  {
				  alert("Contact Number must be filled out");
				  return false;
				  }
				  var c=document.forms["detailsform"]["email"].value;
				if (c==null || c=="")
				  {
				  alert("Email must be filled out");
				  return false;
				  }

				}
		</script>

</head>

<body>
<!--navbar main-->
<div class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<a href="index.html" class="navbar-brand">Transport System Reservation</a>
		<button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
			
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
		</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			
			<ul class="nav navbar-nav navbar-right">
				
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="#contact" data-toggle= "modal">Contact Us</a></li>
				<li><a href="adminSignIn.php">Administrator</a></li>
				<li><a href="help.php">Help</a></li>
			</ul>
		</div>
	</div>

</div>

 <!-- Main jumbotron -->
 <div class="container" >
    <div class="jumbotron" id="topjumbotron">
      <div class="container">
        <h1>Transport System</h1>
        <p>Your one stop online bus reservation service.</p>
      </div>
    </div>
    </div>



<!--personal details form-->
<div class="container" id="Personal_details">
			<div class="jumbotron" id="jumbotroncustomerDetails">
				<div class="container" >
				<div class="col-lg-6" id="Personal_details">
					<div class="container">	
							<h4><b><u>Confirm your reservation details</u></b></h4>
<?php
	if(isset($_POST['seats']))
	{	
		session_start();
		$_SESSION['seats'] = $_POST['seats'];
		$_SESSION['fare'] =  $_SESSION['seats'] * $_SESSION['fare'];
	}
	
?>
					</div>

					<div class="container">
							<table class="table table-striped table-bordered" id="admin_table" width="600" height="255" 
							 style = "margin-top:10px;" border="1" cellpadding="1" cellspacing="1">
														
								<tr>
															
									<td>From:</td>
									<td><?php echo $_SESSION['from'];?></td>
								</tr>
								<tr>
															
									<td>To:</td>
									<td><?php echo $_SESSION['to'];?></td>
								</tr>
								<tr>
															
									<td>Date:</td>
									<td><?php echo $_SESSION['departure_date'];?></td>
								</tr>						
								<tr>						
									<td>Number of seats:</td>
									<td><?php echo $_SESSION['seats'];?></td>
								</tr>
								
								<tr>						
									<td>Total Fare:</td>
									<td><?php echo $_SESSION['fare'];?></td>
								</tr>

								
							</table>
							
								<form action="seatsPage.php" method="post">
								
									<input type="submit" class="btn btn-primary btn-md col-lg-4" role="button" 
										id="submitAndProceed" value="Change seats"/>
									</form>
								
								<form  action="index.php">
										<input type="submit" class="btn btn-primary btn-md col-lg-4 pull-right" role="button" id="submitAndProceed" value="Back to home page"/>
								</form>
							
								
					</div>
				</div>
						<div class="col-lg-6">
								<div class="container">
								<h4><b><u>Please fill in your personal Details</u></b></h4>
								</div>
								<form class="form-horizontal" id="detailsform" method="post" action="paymentsPage.php" onsubmit="return validateForm()">
									<div class="form-group">
									
										<label for="contact-name" class="col-lg-3 control-label" >First Name:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" id = "firstname" name="firstname" placeholder="First Name" style="width: 250px; height:35px">
											</div>
										</div>
									<div class="form-group">
									
										<label for="contact-name" class="col-lg-3 control-label" >Last Name:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" style="width: 250px; height:35px">
											</div>
									</div>

									<div class="form-group">

												<label for="seat-number" class="col-lg-3 control-label" >Gender:</label>
													<div class="col-lg-9" >
														<select class="form-control col-lg-3" id = "gender" style="width: 150px; height:35px" name="gender">
																  <option>Male</option>
																  <option>Female</option>
																  
														</select>
													</div>
											</div>

									<div class="form-group">
											
															
												<label for="departure-date" class="col-lg-3 control-label" >Phone Number:</label>
										
													<div class="col-lg-9">
															<input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="+254" style="width: 150px; height:35px">
														</div>
													</div>

									<div class="form-group">
									
										<label for="contact-name" class="col-lg-3 control-label" >Email:</label>
											<div class="col-lg-9">
												<input type="email" class="form-control" id ="email" name="email" placeholder="you@example.com" style="width: 250px; height:35px">
											</div>
									</div>

									<div class="form-group" >
											<label for="source" class="col-lg-3 control-label"></label>
												<div class="col-lg-9">
														<p>
															<input type="submit" class="btn btn-primary btn-md" role="button" 
															 id="submitAndProceed" value="Proceed to payment &raquo;" />
														</p>
													
												</div>
									</div>	
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

<!--Contact us modal with a fill-in form-->

<div class= "modal fade" id="contact" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
		<form class="form-horizontal" method="post" action="create.php">
			<div class="modal-header">
				<h4>Contact Transport System</h4>

			</div>
			<div class="modal-body">
				<div class="form-group">
				
					<label for="contact-name" class="col-lg-2 control-label" >Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="name" placeholder="Full Name">
						</div>
				</div>

				<div class="form-group">
				
					<label for="contact-email" class="col-lg-2 control-label" >Email:</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="contact-email" name="email" placeholder="you@example.com">
						</div>
				</div>

				<div class="form-group">
				
					<label for="contact-msg" class="col-lg-2 control-label" >Message:</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="8" name="message"></textarea>
						</div>
				</div>

			</div>

	            <div class="modal-footer" id="modalfooter">
					<a class="btn btn-default" data-dismiss="modal"> Cancel</a>
					<button class="btn btn-primary" type="submit">Send</button>
				</div>
			</form>
		</div>
	</div> 
</div>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/code.js"></script>
</body>
</html>