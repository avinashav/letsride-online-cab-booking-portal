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
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Here</title>
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
	</style>
    
    
    <script type="text/javascript">
    function passformat(str)
        {
            if(str.length >5 && str.length<16)
                {
                    
                }
            else{
                alert("Insert Password between 6 to 15 characters");
            }
        }
        
    </script>
    
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
				  <h1><strong>LetsRide Login</strong></h1>
				  </center>
			  </div>
		</div><hr>

		<div class="row">
            <div class="col-sm-2">
		  <br>

		  <br>
			<!--<div class="well bs-sidebar affix" id="sidebar" style="background-color:#fff">-->
			<div class="well bs-sidebar" id="sidebar" style="background-color:#fff">
			  <ul class="nav nav-pills nav-stacked">
				<li><a href="index.php">Home</a></li>
                  <li><a href="Fare.php">Cab Rates</a></li>
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
    <h3>Login</h3>
    <form action="submit.php" method="POST" enctype="multipart/form-data">
        <div class="form-group has-error">
          <!-- Username -->
          <label class="control-label"  for="{{ form.username.id_for_label }}">Username</label>
          <div class="controls">

              <input class = "form-control" type="text" id="username" name="username" placeholder="" class="input-xlarge">
    
          </div>
        </div>

        <div class="form-group has-error">
          <!-- Password-->
          <label class="control-label" for="{{ form.password.id_for_label }}">Password</label>
          <div class="controls">
            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
            <span class = "help-block"><span>
          </div>
        </div>
        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success"  onclick = passformat(password.value);>Login</button>
          </div>
        </div>
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