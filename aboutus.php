<?php
session_start();
error_reporting(E_ALL);


echo '<!DOCTYPE html>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="utf-8">

	<title>LetsRide - Taxi for people</title>
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
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
				<div class="logo"><a href="index.php">LetsRide</a></div>
					<nav class="taxi-options">
                        <a href="index.php">Home</a>
						<a href="login.php">Order a taxi</a>
                        <a href="./places/places.php">Nearby Places</a>
						<a href="Fare.php">Rates</a>
						<a href="aboutus.php">About Us</a>
                        
					</nav>
				</div>
			</div>
		</div>
	</header>
    
    <section id="about-us" class="about-us container">
			<h2 class="heading">Who are we</h2>
			<article>
				<div class="col-md-5">
					<h3>
						An Online Taxi Booking Portal :<strong> LetsRide</strong>
					</h3>
				</div>
				<div class="col-md-offset-1 col-md-6">
					<p>A team of fellow N.I.E. students built this project. We believe to make transportation easier and comfortable.</p>
					<p>We provide all comfort to passengers, use wi-fi for work and entertainment and pay for the trip with cash/card.</p>
					<p>We dreamt of a modern taxi and created it. For yourself and for you.</p>
					<p>LetsRide is taxi service. Round the clock. Seven days a week.</p>
				</div>
			</article>
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


?>