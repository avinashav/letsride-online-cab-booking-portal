<?php
session_start();


if(isset($_SESSION["var"]))
{
    echo ' <!DOCTYPE html>
<head>
    
        <title>E-Cab Services </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        
        <!-- Fonts Loader from _fonts.css (HTML5 LocalStorage) -->
	
	
	<!-- Load CSS Compilled without JS -->
	<noscript><link rel="stylesheet" href="compiled.min.css"></noscript>
	<link rel="stylesheet" href="_fonts.css">
        <!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
        
        
        
        
<script type ="text/javascript">
    function confirmbooking(s,d)
        {
            var ss=s;
            var dd=d;
            
            if(ss == dd)
                {
                    alert("Source and Destination Cannot be Same. !! Choose Appropriate Drop.")
                }
            else
                {
                    alert("Cab booked from " + ss + " to " + dd +"!!  ThankYou");
                }
        }
        
</script>
        
    </head>
    
    
    <body>
    
        <!-- header -->
        <header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
				<div class="logo" ><a href="index.php">LetsRide</a></div>
					<nav class="taxi-options">
                        <a href="./places/places.php">Nearby Places</a>
						<a href="Fare.php">Rates</a>
						<a href="aboutus.php">About Us</a>
                        
					</nav>
				</div>
                <div>
                   <nav class="nav nav-tabs navbar-right">
                       <a href="disconnect.php">SIGN OUT</a>
                    </nav>
				</div>
			</div>
		</div>
	</header>


 <center>
<div class="container" style="background-color:lightblue">
  
<div class="form-group">
 <span class="agileits_grid">
  <h2>Source Place:</h2>       
  <form action="">
     <select class="form-control" name="source">
        <option value="Ooty" >Ooty</option>
        <option value="Coorg" >Coorg</option>
        <option value="Wayand" >Wayanad</option>
        <option value="Railway_Station" >Railway Station</option>
        <option value="Airport" >Airport</option>
      </select>
      <hr></br>
  </span>
</div>
    
    <div class="form-group">
        <span class="agileits_grid">
        <h2>Destination Place:</h2>   
        <select class="form-control" name="destination">
            <option value="Ooty" >Ooty</option>
            <option value="Coorg" >Coorg</option>
            <option value="Wayand" >Wayanad</option>
            <option value="Railway_Station" >Railway Station</option>
            <option value="Airport" >Airport</option>
 
        </select>
        </span>
    </div>
    </br> <hr> </br>
    
            <h2>Number of Seats:</h2>
             <label><input type="radio" name="seats" value="1" checked="checked"/>1</label>&ensp;
    <label> <input type="radio" name="seats" value="2">2 </label>&ensp;
     <label> <input type="radio" name="seats" value="3">3 </label>&ensp;
       <label> <input type="radio" name="seats" value="4">4 </label></br><hr>
          
             <h2>Cars:</h2>



    <div class="form-group">
        <span class="agileits_grid">
        <select class="form-control" name="car">

            <option value="sedan" class="form-control">Sedan</option>
            <option value="xuv" >xuv</option>
            <option value="mini" >mini</option>
            <option value="macro" >macro</option>
        </select>
        </span>
    </div>
   </br> <hr>  <input type="submit" class="btn btn-success" value="Book Now" onclick = confirmbooking(source.value,destination.value);>


</div>

 </center>
        
        </form>


	<!-- Load CSS -->
	<script>
		function loadCSS(hf) {
			var ms=document.createElement("link");ms.rel="stylesheet";
			ms.href=hf;document.getElementsByTagName("head")[0].appendChild(ms);
		}
		loadCSS("libs/bootstrap/css/bootstrap.min.css");
		loadCSS("fonts/flaticons/font/flaticon.css");
		loadCSS("_header.css");              //Header Styles (compress & paste to header after release)
		loadCSS("_main.css");                //User Styles: Main
		loadCSS("_media.css");               //User Styles: Media
	</script>

	<!-- Load CSS compiled without Bootstrap & Header styles (after release) -->
	<script>var ms=document.createElement("link");ms.rel="stylesheet";
		// ms.href="compiled.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
	</script>

      <br>
              <br>
    
     <footer>
		<div class="container" style="margin-left:15px">
			<a href="#" target="blank">Contact</a> | <a href="#" target="blank">LinkedIn</a> | <a href="#" target="blank">Twitter</a> | <a href="#" target="blank">Google+</a>

                <div class="pull-right">
                        <p>Copyrights &copy; NIE - ISE 2018</p>  
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
else
{
    echo "You must be logged in to see this page";
    header("location: login.php");
    exit;
}
?>