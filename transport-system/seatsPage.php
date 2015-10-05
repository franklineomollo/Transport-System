<!DOCTYPE html>
<html>
<head>
	<title>Select your Seats</title>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="js/jquery.js"></script>	
</head>
<body>


 

<!--navbar main-->
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
				
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="#contact" data-toggle= "modal">Contact Us</a></li>
				<li><a href="adminSignIn.php">Administrator</a></li>
				<li><a href="help.php">Help</a></li>
			</ul>
		</div>
	</div>

</div>
<!--main navbar-->

<!-- Main jumbotron -->
 <div class="container" >
    <div class="jumbotron" id="topjumbotron">
      <div class="container">
        <h1>Transport System</h1>
        <p>Your one stop online bus reservation service.</p>
      </div>
    </div>
    </div> <!--jumbotron ends here-->

    <!--bus seats-->
 <div class="container">
<div class="jumbotron" id="middlejumbotronDetails">
<?php require 'libs/booking.php';?>
<?php
if(isset($_GET['m']) && isset($_GET['s']))
{
	$m = $_GET['m'];
	$s = (integer)$_GET['s'];
	if(is_integer($s))
	{
		echo "<div class =\"container\"><div class =\"container\"><div class=\"alert alert-info\" style =\"width:670px;\">{$m}</div></div></div>";
	}
}
?>
<script>
$(document).ready(function()
{
	var reserved = <?php echo $_GET['s']; ?>;
	$('#seatstable tr td').each(function()
	{
		xyz = $(this).find('img');
		seat_pos = xyz.attr('class');
		if(seat_pos <= reserved)
		{
			xyz.attr('src', 'images/seatsLayout/seat_booked.png');
		}
	});
});
</script>
<div class="container">
	<div class="col-sm-8">
			<div class="well" id="bus_seats_layout" >
					<table class="table table-striped table-bordered" cellspacing = "1" id="seatstable">

						<tr>
								<td colspan="2" rowspan="3" >Driver<img id = "driverimg" src="images/seatsLayout/steering.png"></td>
								<td>6<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="6"></td>
								<td>9<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="9"></td>
								<td>14<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="14"></td>
								<td>19<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="19"></td>
								<td>24<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="24"></td>
								<td>29<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="24"></td>
								<td>34<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="34"></td>
								<td>39<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="39"></td>
								<td>44<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="44"></td>
								<td>49<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="49"></td>
								<td>54<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="54"></td>
								<td>60<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="60"></td>
						</tr>
						<tr>
								<td>5<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="5"></td>
								<td>8<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="8"></td>
								<td>13<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="13"></td>
								<td>18<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="18"></td>
								<td>23<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="23"></td>
								<td>28<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="28"></td>
								<td>33<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="33"></td>
								<td>38<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="38"></td>
								<td>43<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="43"></td>
								<td>49<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="49"></td>
								<td>54<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="54"></td>
								<td>59<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="59"></td>
						
						</tr>

						<tr>
								<td>4<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="4"></td>
								<td>7<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="7"></td>
								<td>12<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="12"></td>
								<td>17<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="17"></td>
								<td>22<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="22"></td>
								<td>27<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="27"></td>
								<td>32<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="32"></td>
								<td>37<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="37"></td>
								<td>42<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="42"></td>
								<td>47<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="47"></td>
								<td>52<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="52"></td>
								<td>58<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="58"></td>
						</tr>
						<tr>
								<td colspan="13" rowspan="2"></td>
								<td rowspan="2">57<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="57"></td>
						</tr>
						<tr>
						
						</tr>
						<tr>
								<td></td>
								<td>3<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="3"></td>
								<td colspan="2" rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Door</td>
								<td>11<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="11"></td>
								<td>16<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="16"></td>
								<td>21<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="21"></td>
								<td>26<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="26"></td>
								<td>31<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="31"></td>
								<td>36<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="36"></td>
								<td>41<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="41"></td>
								<td>46<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="46"></td>
								<td>51<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="51"></td>
								<td>56<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="56"></td>
						</tr>

						<tr>
								<td>1<img id = "seatimg" src="images/seatsLayout/seat_available.png" class ="1"></td>
								<td>2<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="2"></td>
								<td>10<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="10"></td>
								<td>15<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="15"></td>
								<td>20<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="20"></td>
								<td>25<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="25"></td>
								<td>30<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="30"></td>
								<td>35<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="35"></td>
								<td>40<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="40"></td>
								<td>45<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="45"></td>
								<td>50<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="50"></td>
								<td>55<img id = "seatimg" src="images/seatsLayout/seat_available.png" class="55"></td>
						</tr>
					</table>

					
			</div>

		
	</div>
	<div class="col-sm-4">
			<div class="container">
			<div class="well" id="custSpecsContainer">
			<table cellpadding="5" cellspacing="5">
						
					<tr>
						
						<td><img src="images/seatsLayout/seat_available.png"></td>
						<td>&nbsp;Available &nbsp;seat.</td>
						<td>&nbsp;&nbsp;</td>
						<td><img src="images/seatsLayout/seat_booked.png"></td>
						<td>&nbsp;Reserved &nbsp;seat.</td>
					</tr>
			</table>
			<div class ="well"><span>Use the layout on the left to view seats.</span>
			</div>
		
			
			<form class="form-horizontal" id="detailsform" method="post" action="personalDetails.php" >
				<div class="form-group">
					<label for="contact-name" class="col-sm-3 control-label" >No.of seats:</label>
				
						<div class="col-sm-9">
							<select class="form-control" id="numberOfSeats" name="seats" style="width:200px; height:35px" fare="<?php echo $_SESSION['fare'];?>">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
									</select>
						</div>
				</div>
				<div class="form-group">
					<div class="container">
					<div class="alert alert-info" style ="margin-bottom: 2px!important;">Computed Fare: <span class="fare"  ><?php echo $_SESSION['fare'];?></span></div>
					</div>
				</div>
				<div class="form-group" >
					<div class="container">		
						<input type="submit" class="btn btn-primary btn-md pull-right" role="button" 
						id="submitAndProceed" style ="width: 277px;" value="Proceed to personal details &raquo;"/>
									
					</div>								
						
				</div>	
				
			</form>

			<form action="index.php">
					<p>
						<input type="submit" class="btn btn-primary btn-md pull-right" role="button" 
						id="Startover" style ="width: 277px; margin-top:2px!important;"value="Cancel and start over"/>
					</p>
			</form>
				
			</div>


			
	</div>

</div>
		
			</div>
			</div>

 
 <!--page footer-->

<div class="navbar navbar-default navbar-static-bottom">
	<div class="container">
		<p class="navbar-text"> Copyright@ 2014 by Frankline Omollo. All Rights Reserved.</p>
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
							<input type="text" class="form-control" id="contact-name" name="name" placeholder="Full Name">
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
					<button class="btn btn-primary" type="submit" name="submit">Send</button>
				</div>
			</form>
		</div>
	</div> 
</div>
<script src="js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/code.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>