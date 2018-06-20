<?php
session_start();



echo ' <!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>LetsRide - Fare Details</title>
	<meta name="description" content="">

	<style></style>

	<!-- Fonts Loader from _fonts.css (HTML5 LocalStorage) -->
	<script>!function(){function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))a(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(a(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var c=document.createElement("link");c.href=o,c.rel="stylesheet",c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),document.cookie="font_css_cache"}}function a(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o="_fonts.css";window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();</script>
	
	<!-- Load CSS Compilled without JS -->
	<noscript><link rel="stylesheet" href="compiled.min.css"></noscript>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link rel="stylesheet" href="_fonts.css">
</head>

<body>

    <!-- header -->
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
				
			</div>
		</div>
	</header>
    
    
<section id="prices" class="plans">
			<div class="container">
				<h1 class="heading">Rates</h1>
				<div class="row">
					<div class="table text-center">
						<div class="line first">
							<div class="row">
								<div class="col-sm-5 name">In the city</div>
								<div class="col-sm-4 value">
									<span class="currency">10rs per km</span>
								</div>
								<div class="col-sm-3 meta">
								</div>
							</div>
							<hr>
						</div>
						<div class="line">
							<div class="row">
								<div class="col-sm-5 name">Tourist Places</div>
								<div class="col-sm-4 value">
									<span class="currency">20rs per km</span>
								</div>
								<div class="col-sm-3 meta">
									<strong class="text-danger">Special offer</strong>
								</div>
							</div>
							<hr>
						</div>
						<div class="line">
							<div class="row">
								<div class="col-sm-5 name">Downtime</div>
								<div class="col-sm-4 value">
									<span class="currency">15rs per кm.</span>
								</div>
								<div class="col-sm-3 meta">
								</div>
							</div>
							<hr>
						</div>
						<div class="line last">
							<div class="row">
								<div class="col-sm-5 name">Interstate</div>
								<div class="col-sm-4 value">
									<span class="currency">5000rs for 150km</span>
								</div>
								<div class="col-sm-3">
									<div class="text-gray">
										Included Driver <br>accomodations & food
									</div>
								</div>
							</div>
						</div>
						<div class="line inverse">
							<div class="row">
								<div class="col-sm-5 name">Airport<span> *</span></div>
								<div class="col-sm-4 value">
									<span class="currency">18rs per km</span>

								</div>
								<div class="col-sm-3 meta">
									<div class="text-gray">
										Included first <br>30 km of the trip
                                    </div>
								</div>
							</div>
						</div>
						<p class="description ">Cash or non-cash payment is possible.</p>
					</div>
				</div>
			</div>
		</section>
    
    
    	<div class="hidden"></div>

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
	 <br><br>
    
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


?>