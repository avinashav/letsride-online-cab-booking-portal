<?php
session_start();


if(isset($_SESSION["var"]))
    {
       header("location: secured.php");
        exit;
    }
else
{
    
echo ' <!DOCTYPE html>
<html lang="en">

<head>
	<title>SignUp Here</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css" type = "text/css"/>
	<meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		html,
		body {
		  height:100%;
		}
        #textgap{
            padding-top: 5px;
        }
	</style> 

</head>
<body class="body" style="background-color:#f6f6f6">
	<div class="container-fluid" style="min-height:95%; ">
		<div class="row">
			  <div class="col-sm-2">
				  <br>
				 
			  </div>
			  <div class="col-sm-10">
				  <br>
				  <center>
				  <h1><strong>LetsRide SignUp</strong></h1>
				  </center>
			  </div>
		</div><hr>

		<div class="row">
		  <div class="col-sm-2">
		  <br>

		  <br>
		   <!-- Great, til you resize .affix will fix the side so it stays as you scroll but next one doesn"t -->
			<!--<div class="well bs-sidebar affix" id="sidebar" style="background-color:#fff">-->
			<div class="well bs-sidebar" id="sidebar" style="background-color:#fff">
			  <ul class="nav nav-pills nav-stacked">
				<li><a href="index.php">Home</a></li>
                  <li><a href="fare.php">Cab Fare</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			  </ul>
			</div> <!--well bs-sidebar affix-->
		  </div> <!--col-sm-2-->
		  <div class="col-sm-10">

			<div class="container-fluid">
			<br><br>
			   

<div class = "col-sm-6 col-sm-offset-3">
<form action="addtodb.php" method="POST" enctype="multipart/form-data">

<div class="form-row">
    <div class="col">
        <label>NAME <input type="text" class="form-control" name="fname" placeholder="First name"> </label>
    </div>
    <div class="col" id="textgap">
         <input type="text" class="form-control" name="lname" placeholder="Last name">
    </div>
    
    <div class="col" id="textgap">
        <label>MOBILE <input type="text" class="form-control" name="mob" placeholder="+91"> </label>
    </div>
  </div>
    
    <div class="form-group" id="textgap">
        <label for="exampleInputEmail1">E-Mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
         <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small>
    </div>

     <div class="form-group">
        <label for="formGroupExampleInput">UserName</label>
         <input type="text"  name="username1" class="form-control" id="formGroupExampleInput" placeholder="USERNAME">
      </div>

  
   <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Min 6 max 15 char">
   </div>            
      
  <button type="submit" class="btn btn-success" onclick="redirectTo("secured.php")">Sign Up</button>
    <button type="reset" class="btn">Reset</button>
  </form>
</div>
</div>
</div>
</div>
</div>
     <footer>
		<div class="container" style="margin-left:15px">
			<a href="#" target="blank">Contact</a> | <a href="#" target="blank">LinkedIn</a> | <a href="#" target="blank">Twitter</a> | <a href="#" target="blank">Google+</a>

                <div class="pull-right">
                        Made with <span class="glyphicon glyphicon-heart"></span> in NIE, Mysore |
                        ©
            <script>
                document.write(new Date().getFullYear())
            </script>
            Web programming Project
        </div>
    </div>
	</footer>
</body>

</html>';
    
}


?>
               