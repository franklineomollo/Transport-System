<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">
  <!--<link href="css/custom.css" rel="stylesheet">-->
  <link href="css/login.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
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
        <li><a href="help.php">Help</a></li>
      </ul>
    </div>
  </div>


</div>

  <!--login functions-->
  <?php
    if ($username && $userid) {
	
	$formAlreadySignedin = "<div class='container'>
					<div class='row'>
					<div class='col-sm-6 col-md-4 col-md-offset-4'>
						<div class='well'>
						
							<p align='center'><i class= 'fa fa-user fa-4x'></i></p>
							<form class='form-signin' method='post'>
                        
								You are already logged in as <b>$username</b>. <a href = './adminPage.php'>Click here</a> to 
								go to the Administrator page.
                        </form>
						</div>
            
						</div>
					</div>
					</div>";

                  echo "$formAlreadySignedin";
     
        
    }
    else{
  
 

  $form = "<div class='container'>
        <div class='row'>
        <div class='col-sm-6 col-md-4 col-md-offset-4'>
            
              
            <div class='well'>
                  <p align='center'><i class= 'fa fa-user fa-4x'></i></p>
                      <form class='form-signin' method='post'>
                            <input type='text' class='form-control' name ='user' placeholder='Username' autofocus>
                                <input type='password' class='form-control'  name='password' placeholder='Password'>
                                <button class='btn btn-lg btn-primary btn-block' type='submit' name='loginbtn' value ='Login'>
                                Sign in</button>

                            </form>
            </div>
            
      </div>
</div>
</div>";

  if ($_POST['loginbtn']) {
    
    $user = $_POST['user'];
    $password=$_POST['password'];

    if ($user) {
      
          if ($password) {
            
           require("connect.php");

           //$password = md5(md5("kjsflfjsl".$password."dsfdsf"));
           //make sure login info is correct

           $query = mysql_query("SELECT * FROM admin WHERE username='$user'");
           $numrows = mysql_num_rows($query);
           if ($numrows==1) {

            $row = mysql_fetch_assoc($query);
            $dbid = $row['id'];
            $dbuser = $row['username'];
            $dbpass = $row['password'];
            $dbactive = $row['active'];

            if ($password == $dbpass) {
                if ($dbactive==1) {

                  //set session info
                  $_SESSION['userid'] = $dbid;
                  $_SESSION['username'] = $dbuser;
				  
				  $formSignedin = "<div class='container'>
					<div class='row'>
					<div class='col-sm-6 col-md-4 col-md-offset-4'>
						<div class='well'>
						
							<p align='center'><i class= 'fa fa-user fa-4x'></i></p>
							<form class='form-signin' method='post'>
                        
								You have been logged in as <b>$dbuser</b>. <a href = './adminPage.php'>Click here</a> to 
										go to the administration page.
                        </form>
						</div>
            
						</div>
					</div>
					</div>";

                  echo "$formSignedin";
                 
                }
                else
                  echo "You must activate your account to login. $form";
            }else
                  echo "You did not enter the correct password. $form";


             
           }
           else
                echo "The username you entered was not found. $form";

           
           $query = mysql_query("");
           mysql_close();
          }
          else
            echo "You must enter your password.$form";
    } else
    echo "You must enter your Username. $form";

  }else
        echo "$form";
}

  ?>

  

<!--Admin login form-->


  
  
  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
