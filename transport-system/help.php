<!DOCTYPE html>
<html>
<head>
	<title>Help</title>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">


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
				
				<li><a href="index.php">Home</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="#contact" data-toggle= "modal">Contact Us</a></li>
				<li><a href="adminSignIn.php">Administrator</a></li>
				<li class="active"><a href="help.php">Help</a></li>
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

    <!--middle jumbotron-->
 <div class="container">
<div class="jumbotron" id="middlejumbotronDetails">
<div><h4><u><b>Pick a topic by scrolling below</b></u></h4></div>
<div id="accordion">
  <h3>Getting started</h3>
  <div>
    <ol>
			<li>
				<p>
					From the main reservation page, specify the following:<br/>
					Specify where you are travelling from by clicking on the field labelled 'From'. <img src="images/help/from.jpg"><br/>
					From the list of destinations click on your desired choice.
				</p>
			
			</li>
			<li>
				<p>
					Specify where you are travelling to by clicking on the field labelled 'To'. <img src="images/help/to.jpg"><br/>
					From the list of destinations click on your desired choice.
				<p>
			</li>
			<li>
				<p>
					Pick your date of travel by clicking on the field labelled 'Date of Departure' <img src="images/help/date.jpg"><br/>
				The calender shown below will pop up. Click on a date.<br/><img src="images/help/calender.jpg"><br/>
				<p>
			
			
			</li>
			<li>
				<p>
						Specify whether your trip is a one-way or a two-way trip. 
						A two-way trip costs twice as much as a one-way. <br/><img src="images/help/triptype.jpg"><br/>
				<p>
			</li>
			<li>
				<p>
					View the amount of fare charged for your selections so far. <img src="images/help/fareperseat.jpg"><br/>	
				<p>
			</li>
			<li>
				<p>
					Click on the button labelled 'Check seat availability' to proceed. <img src="images/help/checkbtn.jpg"><br/>
				<p>
			</li>
	</ol>
  </div>
  <h3>Seat selection</h3>
  <div>
    <p>
    <ol>
		<li>
			<p>
			After clicking on the button labelled 'Check seat availability' you will be taken to the seats page. The light blue strip
			at the top of the page shows the number of seats available and the bus that you are going to be booked into. The strip is shown below <br/>
			<img src="images/help/strip.jpg"/>
			</p>
		</li>
		
		<li>
			<p>
				Below this strip to the left is a layout representing seat arrangement inside the bus. Use this layout to know the number of seats that have already been booked and those that are available. Please note that you cannot interact with this layout directly. The seats layout looks like this:
				<img src="images/help/seatLayout.jpg"/>
			</p>
		</li>
		<li>
			<p>
				To the right of the seats layout there are two seat images that enable you differentiate between reserved seats and available seats using different colors.Below this is a field labelled 'No.of seats' where you will specify the number of seats you'd like to reserve. You can only reserve a maximum of four seats at a time.<br/>
				<img src="images/help/seatSepcs.jpg"/>
			</p>
		</li>
		<li>
			<p>
				Based on the number of seats you have chosen the light blue box below the 'No.of seats' field will display total fare payable.
			</p>
		</li>
		<li>
			<p>
				Once done click on the button labelled 'Proceed to personal details' to proceed to the next stage or click on 'Cancel and start over' to go back to the home page and start again.
			</p>
		</li>
		
	
	<ol>
    </p>
  </div>
  <h3>Confirmation and personal details</h3>
  <div>
		<ol>
			<li>
				<p>
					Choosing to proceed will find you in the personal details page. The left side of the page shows a table which summarises your reservation specifications. The table looks like this:<br/>
					<img src="images/help/confirm.jpg"/>
				</p>
			
			</li>
			<li>
				<p>
					Should you wish to make changes click on the button labelled 'Change seats' to go back to the seats page.
				<p>
			</li>
			<li>
				<p>
					To the right of the confirmation table you will find a form where you will be required to fill in your personal details. Once you are done filling in this form click on the button below it labelled 'Proceed to payment' to proceed to the payments page. The form looks like this:<br/>
					<img src ="images/help/formPay.jpg"/>
				<p>
			</li>
			
	</ol>
  </div>
  <h3>payment and feedback</h3>
  <div>
    <p>
	The payment page will be displayed after you have clicked the 'Proceed to payment' button.
    Payment for your reservation will be processed through m-pesa. Please ensure you have sufficient amount of money in your m-pesa account for your reservation to be successful.
    </p>
    <p>
    Instructions on how to go about payment will be displayed on this page. Follow the instructions shown. The page is shown below:<br/>
	<img src ="images/help/pesapal.jpg"/>
    </p>
	<p>
	On payment confirmation the page below will be displayed. The page contains a ticket showing seat numbers allocated, the bus you have been booked into
	along with other information. Press Ctrl+P to print this page directly and present it at the booking office.<br/>
	<img src = "images/help/feedback.jpg"/>
	Click on the button labelled 'New reservation' to make a new reservation.
	</p>
  </div>
  
  <h3>Contacting the administration</h3>
  <div>
    <p>
    Should you have any enquiries, complaints or compliments click on the 'Contact Us' menu on the top most bar from any page.
    </p>
    <p>
    Within the form that pops up fill your name, email and message. Click on the button labelled 'Send' to send your message.
    </p>
  </div>
  
  <h3>Where to find information about Moyale Raha Bus Services</h3>
  <div>
    <p>
    To find more information about Moyale Raha Bus Services, click on 'About Us' menu on the top most bar from any page that you might be on.
    </p>
    
  </div>
</div>


<div class="container">
<div class="container" >
			
			

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
		<form class="form-horizontal" action="create.php" method="post">
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

<div class="modal-footer">
				<a class="btn btn-default" data-dismiss="modal"> Cancel</a>
				<button class="btn btn-primary" type="submit" name="submit">Send</button>
			</div>
			</form>
		</div>
	</div> 
</div>



<script src="js/jquery.js"></script>
<script src="js/code.js"></script>2
<script src="js/jquery-ui/jquery-ui.min.js"></script>
<script src="js/bootstrap.js"></script>





</body>
</html>