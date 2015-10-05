<!DOCTYPE html>
<html>
<head>
	

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="../../assets/ico/favicon.ico">-->

    <title>Transport System | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">

    <!--validate form i.e. date-->
    <script type="text/javascript">
				function validateForm()
				{
						var x=document.forms["booking_details"]["departure-date"].value;
						if (x==null || x=="")
						  {
						 alert("Please fill in your date of travel");
						  return false;
						  }
			
			
				}
		</script>
		<script>
			<?php if(isset($_GET['msg'])){
				$msg = $_GET['msg'];
				if($msg == 'messagesent'){
					echo "alert('Your message has been sent');";
				}
			}
			?>
		</script>



</head>
<body>

<!--Navigation bar and the various menu items-->

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
				
				<li class="active"><a href="#">Home</a></li>
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

<!--travel specifications form-->

<div class="container">
<div class="jumbotron" id="middlejumbotron">

<div class="container">
<div class="container" >
			<div class="container col-sm-12">
			<div class="col-sm-6"></div>
						<form class="form-horizontal col-sm-6" id="booking_details" action="seatsPage.php" method="POST" onsubmit="return validateForm()">
							<div class="form-group">
								<label for="source" class="col-sm-4 control-label" ></label>
								<div class="col-sm-8">
								<label for="source" class="control-label" >From:</label>
									<select class="form-control" id="from" name="from" style="margin-bottom: 1px!important;">
											<option value="nairobi">Nairobi</option>
											<option value="isiolo">Isiolo</option>
											<option value="marsabit">Marsabit</option>
											<option value="sololo">Sololo</option>
											<option value="moyale">Moyale</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="destination" class="col-sm-4 control-label" ></label>
								<div class="col-sm-8">
								<label for="destination" class="control-label" >To:</label>
								<select class="form-control" id="to" name="to">
										<option value="isiolo">Isiolo</option>
										<option value="nairobi">Nairobi</option>
										<option value="marsabit">Marsabit</option>
										<option value="sololo">Sololo</option>
										<option value="moyale">Moyale</option>
								</select>
								</div>
							</div>
							 <div class="form-group">
								<label for="departure-date" class="col-sm-6 control-label" ></label>
									<div class="col-sm-6">
										<div class="input-group date" id="timepicker">
											<span class="input-group-addon"><span class="glyphicon glyphicon-calendar" id="showCalender"></span> </span>
											<input type="text" class="form-control" id="departure-date" name="departure-date" placeholder="Date of departure" />
										</div>
									</div>
							</div>
							<div class="form-group col-sm-12">
										<div class="col-sm-6">
										</div>

										<div class="row">
												<div class="radio col-sm-3">
													<label>
														<input type="radio" name="trip-type" id="one-way" value="1" checked>
															One way
														</label>
												</div>

												<div class=" radio col-sm-3 pull-right ">
													<label>
														<input type="radio" name="trip-type" id="two-way" value="2">
															Two way
													</label>
												</div>
										
										</div>
							</div>

								<div class="form-group" >
										<label for="source" class="col-sm-4 control-label"></label>
												<div class="col-sm-8">
													<div class="well" id="fare-summary">Fare per seat: Ksh. <span class="value">2000</span></div>
													<input type="hidden" name="fare" id="fare-hidden" value="2000"/>
												</div>
								</div>

								<div class="form-group" >
										<label for="source" class="col-sm-4 control-label"></label>
											<div class="col-sm-8">
												<p>
													<input type="submit" class="btn btn-primary btn-sm pull-right" role="button" id="btnCheckSeats" value="Check seats availability"/>
												</p>
													
											</div>
								</div>			
							</form>
							</div>
						</div>

					</div>
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


		<form class="form-horizontal" id="contactUs" method="post" action="create.php">
			<div class="modal-header">
				<h4>Contact Transport System</h4>

			</div>
			<div class="modal-body">
				<div class="form-group">
				
					<label for="contact-name" class="col-lg-2 control-label" >Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="name" id="contact-name" placeholder="Full Name">
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
					<button class="btn btn-primary" type="submit" name="btnsubmit">Send</button>
				</div>

			</form>
			

		</div>
	</div> 
</div>



<script src="js/jquery.js"></script>
<script src="js/code.js"></script>
<script src="js/jquery-ui/jquery-ui.min.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>