<!DOCTYPE html>
<html>
<head>
	<title>Pay</title>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body>


<div class="container">
	<h4><b><u>Fill in details to make a donation</u></b></h4>
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
						<div class="form-group">
									
							<label for="contact-name" class="col-lg-3 control-label" >Amount:</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" id = "amount" name="amount" placeholder="Amount to donate" 
									style="width: 250px; height:35px">
											</div>
						</div>

									<div class="form-group" >
											<label for="source" class="col-lg-3 control-label"></label>
												<div class="col-lg-9">
														<p>
															<input type="submit" class="btn btn-primary btn-md" role="button" 
															 id="submitAndProceed" value="Donate &raquo;" />
														</p>
													
												</div>
									</div>	
							</form>
					</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>