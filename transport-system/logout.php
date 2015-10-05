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
	 <link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<a href="#" class="navbar-brand">Transport System Reservation</a>
		<button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
			
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
		</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="index.php">Home</a></li>
				<li><a href="help.php">Help</a></li>
			</ul>
		</div>
	</div>

	</div>
	<!--end of navigation bar-->

<?php

			if ($username && $userid) {
				session_destroy();
				$formSignedOut = "<div class='container'>
					<div class='row'>
					<div class='col-sm-6 col-md-4 col-md-offset-4'>
						<div class='well'>
						
							<p align='center'><i class= 'fa fa-user fa-4x'></i></p>
							<form class='form-signin' method='post'>
                        
								You have been logged out. <a href = './adminSignIn.php.'>Log back in</a>.
                        </form>
						</div>
            
						</div>
					</div>
					</div>";

                  echo "$formSignedOut";
				
				
			}
			else
			$formNotSignedIn = "<div class='container'>
					<div class='row'>
					<div class='col-sm-6 col-md-4 col-md-offset-4'>
						<div class='well'>
						
							<p align='center'><i class= 'fa fa-user fa-4x'></i></p>
							<form class='form-signin' method='post'>
                        
								You are not logged in.
                        </form>
						</div>
            
						</div>
					</div>
					</div>";

                  echo "$formNotSignedIn";
				
?>

<!--page footer-->

<div class="navbar navbar-default navbar-fixed-bottom">
	<div class="container">
		<p class="navbar-text"> Copyright@ 2014 by Frankline Omollo. All Rights Reserved.</p>
	</div>
</div>

<div class= "modal fade" id="contact" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
		<form class="form-horizontal">
			<div class="modal-header">
				<h4>Contact Transport System</h4>

			</div>
			<div class="modal-body">
				<div class="form-group">
				
					<label for="contact-name" class="col-lg-2 control-label" >Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="contact-name" placeholder="Full Name">
						</div>
				</div>

				<div class="form-group">
				
					<label for="contact-email" class="col-lg-2 control-label" >Email:</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="contact-email" placeholder="you@example.com">
						</div>
				</div>

				<div class="form-group">
				
					<label for="contact-msg" class="col-lg-2 control-label" >Message:</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="8"></textarea>
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