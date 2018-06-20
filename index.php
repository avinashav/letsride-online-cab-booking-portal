<?php
session_start();


echo ' <!DOCTYPE html>
<html>
    <head>
    
        <title>LetsRide - Online Cab Booking Portal</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        
        <meta name="description" content="">

	<!-- Fonts Loader from _fonts.css (HTML5 LocalStorage) -->
	<script>!function(){function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))a(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(a(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var c=document.createElement("link");c.href=o,c.rel="stylesheet",c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),document.cookie="font_css_cache"}}function a(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o="_fonts.css";window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();</script>
	
	<!-- Load CSS Compilled without JS -->
	<noscript><link rel="stylesheet" href="compiled.min.css"></noscript>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<link rel="stylesheet" href="_fonts.css">
        
        
    </head>
    <body>';
    

    if(isset($_SESSION["var"]))
    {
        echo ' <!DOCTYPE html>
        
        <header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
				<div class="logo" ><a href="index.php">LetsRide</a></div>
					<nav class="taxi-options">
						<a href="login.php">Order a taxi</a>
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
	</header>';
    
    }
    else
    {
        echo ' <!DOCTYPE html>
        <header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
				<div class="logo" ><a href="index.php">LetsRide</a></div>
					<nav class="taxi-options">
						<a href="login.php">Order a taxi</a>
                        <a href="./places/places.php">Nearby Places</a>
						<a href="Fare.php">Rates</a>
						<a href="aboutus.php">About Us</a>
                        
					</nav>
                    </div>
                <div>
                   <nav class="nav nav-tabs navbar-right">
                       <a href="login.php">SIGN IN</a>
                       <a href="register.php">SIGN UP</a>
                    </nav>
				</div>
				
			</div>
		</div>
	</header>';
    }

echo '
<!-- single row -->
                <div class="single-row">
                
                    <!-- col-left -->
                    <div class="col-left">
                    
                        <img src="images/home.jpg" alt="taxi logo">  
                        
                    </div>
                    <!-- col-right -->
                    <div class="col-right">
                    
                        <h1>E-Cab</h1>
                        <p>Available 24 X 7 with the intention of providing round the clock service and being there when it matters.
                        Starting off with vehicle rentals initially with well maintained Superior performance vehicles that are Chauffeur driven. The fleet of brand new vehicles, air-conditioned and Non Air-conditioned models of Cars, includes Brands like Toyota, Ford and Honda. With personal touch to each and every trip, one can be assured of an "Every-time on-time" service with immaculately maintained vehicles.</p>
                        <a href="#" class="btn"> Take A Tour</a>
                        
                    </div>
                <table border="5" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td>
			<p><strong>Destination</strong></p>
			</td>
			<td>
			<p><strong>Distance from Mysore</strong></p>
			</td>
			<td>
			<p><strong>Time Required to Reach</strong></p>
			</td>
		</tr>
		<tr>
			<td>
			<p><a href="./places/places.php">Ooty</a></p>
			</td>
			<td>
			<p class="justify">125 km</p>
			</td>
			<td>
			<p class="justify">3hrs</p>
			</td>
		</tr>
		<tr>
			<td>
			<p><a href="./places/places.php">Coorg</a></p>
			</td>
			<td>
			<p class="justify">129 km</p>
			</td>
			<td>
			<p class="justify">3hrs</p>
			</td>
		</tr>
		<tr>
			<td>
			<p><a href="./places/places.php">Bandipur</a></p>
			</td>
			<td>
			<p class="justify">80 km</p>
			</td>
			<td>
			<p class="justify">1hr 30min</p>
			</td>
		</tr>
		<tr>
			<td>
			<p><a href="./places/places.php">Wayanad</a></p>
			</td>
			<td>
			<p class="justify">119 km</p>
			</td>
			<td>
			<p class="justify">2hrs 30min</p>
			</td>
		</tr>
		<tr>
			<td>
			<p><a href="./places/places.php">Bangalore</a></p>
			</td>
			<td>
			<p class="justify">147 km</p>
			</td>
			<td>
			<p class="justify">3hrs</p>
			</td>
		</tr>
	</tbody>
</table>
                </div>
            
            
            </div>
        
        </header>
        
        <div class="clear-fix"></div>
        
        <!-- seperator -->
        <section>
        
            <!-- main container -->
            <div class="main-container">
            
                <!-- single row -->
                <div class="single-row">
                
                    <!-- col full -->
                    <div>
                    
                        <hr>
                    </div>
                
                
                </div>
            
            </div>
        
        
        </section>
        
        <!-- features -->
        <section>
        
            <!-- main container -->
            <div class="main-container">
            
                <!-- single row -->
                <div class="single-row">
                
                    <!-- col-1 -->
                    <div class="col-1">
                    
                        <h2>OUR PROMISE</h2>
                        <p>Affordability: Our car rental is a dependable company in the industry, and is known for offering best value for money packages for outstation taxi in Mysore.
                            Professional Drivers: Hands on and expert drivers are the strength of our services for outstation cabs in Mysore.
                            Timely Availability: Mysore outstation cabs are always run as per given schedule.
                            Services across India: In addition to outstation taxi in Mysore, Our cabs can be booked in 98 cities in India.
                            Wide Range of Cars: You can select taxi in Mysore from a wide range of model options including Indica, Innova and Honda City etc.</p>
                        <a href="#" class="btn-info">More Info</a>
                    
                    </div>
                    
                    
                     <!-- col-2 -->
                    <div class="col-2">
                    
                        <h2>MOBILE READY</h2>
                        <p>It is our foremost objective to serve our customers with the most economical Mysore cab fare and best of the taxi services. We are clear and simple in our dealings. Total transparency in billing process is maintained by providing fare breakup to customers in advance. We are the best choice for hiring outstation cabs at economical cab fares in Mysore. The associated terms & conditions declared on our website and call center are reasonable. Below is a breakup of the cab fare in Mysore categorized by car type:</p>
                        <a href="#" class="btn-info">More Info</a>
                    
                    </div>
                    
                     <!-- col-3 -->
                    <div class="col-3">
                    
                        <h2>EASY LAYOUT</h2>
                        <p>Car Rentals has a customer focussed approach and is appreciated and cherished across all regions in India. It has the largest operational network and biggest fleet size that enables its customers to choose their favourite car model.
                        Choose any type of vehicle from a range of hatchbacks, sedans or MUV, depending upon your liking, pocket size and number of people travelling. We offer our customers a journey with world class services, trained and polite drivers and well maintained cars when they book an intercity taxi in Mysore through us.
                        The most advantageous aspect is that our’s outstation car rental in Mysore will be price competitive. Experience best in class services via Mysore outstation taxi. To get additional details about outstation taxi service in Mysore, please call us on 090454XXXXX. Our seasoned customer care executive will answer all your queries and provide best packages and offers for Mysore outstation cabs.</p>
                        <a href="#" class="btn-info">More Info</a>
                    
                    </div>
                
                
                </div>
            
            
            </div>
    
  
   
    <div class="clear-fix"></div>
        <!-- footer -->
        <footer>
		<div class="container" style="margin-left:15px">
			<a href="#" target="blank">Contact</a> | <a href="#" target="blank">LinkedIn</a> | <a href="#" target="blank">Twitter</a> | <a href="#" target="blank">Google+</a>
<br>
                <div class="pull-right">
                        <p>Copyrights &copy; NIE - ISE 2018</p>  
            <script>
                document.write(new Date().getFullYear())
            </script>
            Web programming Project
        </div>
    </div>

	</footer>
        
            
            
            
            <!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

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

            
    </body>

</html>';

?>