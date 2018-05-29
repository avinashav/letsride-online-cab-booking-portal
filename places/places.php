<?php
session_start();


echo ' <!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:500" rel="stylesheet">
<title>Oustation</title>
    <style>
        body{
            background-color: white;
        }
        h1{text-align: center;
            font-style: bold;
            font-family: "Do Hyeon", sans-serif;
        }
        p{  margin: auto;
            padding: inherit;
            text-align: center;
            font-family: "Ubuntu", sans-serif;
        }
        h2{
            font-style: bold;
        }
        
        .flex-container {
            display: flex;
            flex-wrap: wrap;
        }
        .flex-container > div {
            width: auto;
            height: auto;
            margin: 8px;
            text-align: center;
        }
</style>
    
    
    <!-- Fonts Loader from _fonts.css (HTML5 LocalStorage) -->
	<script>!function(){function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))a(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(a(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var c=document.createElement("link");c.href=o,c.rel="stylesheet",c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),document.cookie="font_css_cache"}}function a(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o="_fonts.css";window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();</script>
	
	<!-- Load CSS Compilled without JS -->
	<noscript><link rel="stylesheet" href="compiled.min.css"></noscript>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<link rel="stylesheet" href="_fonts.css">
    
</head>
<body>
    
    <!-- header -->
        <!-- header -->
        <header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
				<div class="logo" ><a href="../index.php">LetsRide</a></div>
					<nav class="taxi-options">
                        <a href="../index.php">Home</a>
						<a href="../login.php">Book a Ride</a>
						<a href="../Fare.php">Fare Details</a>
						<a href="../aboutus.php">About Us</a>
                        
					</nav>
                    </div>				
			</div>
		</div>
	</header>
    
<h1>Nearby Outstation Destinations</h1>
<h2>Ooty</h2>
    <div class="flex-container">
        <div border-style: solid; border-color: coral;><img src= "ooty1.jpeg" alt= "O0ty" width="350" height="250"></div>
        <div><img src= "./ooty2.jpeg" alt = "Ooty" width="350" height="250"></div>
        <div><img src = "ooty3.jpeg" alt = "Ooty" width="350" height="250"></div>
        <div><img src = "ooty4.jpeg" alt = "Ooty" width="350" height="250"></div>
        </div>
<p> Ooty is a hill station located in North West Tamil Nadu. A town filled with a plethora of parks, nature reserves and safari routes, Ooty is a popular tourist destination during the summer because of the pleasant climate and wonderful scenery. 
        </p></div>
     
                
        <h2>Coorg</h2>
   <div class="flex-container">
        <div><img src= "coorg1.jpeg" alt= "Coorg" width="350" height="250"></div>
        <div><img src = "coorg2.jpeg" alt = "Coorg" width="350" height="250"></div>
        <div><img src= "coorg3.jpeg" alt= "Coorg" width="350" height="250"></div>
        <div><img src = "coorg4.jpeg" alt = "Coorg" width="350" height="250"></div>
<p>Coorg, also known as the Scotland of India, is a district in South West Karnataka. Known for its vast acres of plantations and winding roads like those of hills, Coorg is a popular tourist destination. Some of the most visited tourist spots include The Monastery, Tadiandamol hill, etc.</p>
   </div>
            
<h2>Bangalore</h2>
    <div class="flex-container">    
        <div><img src = "Ban1.jpeg" alt = "Bangalore" width="350" height="250"></div>
        <div><img src = "Ban2.jpeg" alt = "Bangalore" width="350" height="250"></div>
        <div><img src = "Ban3.jpeg" alt = "Bangalore" width="350" height="250"></div>
        <div><img src = "Ban4.jpeg" alt = "Bangalore" width="350" height="250"></div>
        
<p>Bangalore, also known as the Garden City, is the capital of Karnataka. Known for its vast recreational as well as industrial nature, Bangalore is home to people not only from all over the country but also from all corners of the world. Bangalore is also called the Silicon Valley of India. </p>
 </div>
           
<h2>Bandipur</h2>
<div class="flex-container"> 
        <div><img src= "Band1.jpeg" alt= "Bandipur" width="350" height="250"></div>
        <div><img src= "Band2.jpeg" alt = "Bandipur" width="350" height="250"></div>
        <div><img src = "Band3.jpeg" alt = "Bandipur" width="350" height="250"></div>
        <div><img src = "Band4.jpeg" alt = "Bandipur" width="350" height="250"></div>
<p>Bandipur is a forest reserve located in southern Karnataka. It is home to some of the most rare species of animals. A drive through Bandipur National Park can offer you views of animals like Elephants, Deer, Tigers, Peacocks, etc.  </p>
<br>
    </div>
    
    
        <h2>Wayanad</h2>
<div class="flex-container">
<div><img src= "Way1.jpeg" alt= "Wayanad" width="350" height="250"></div>
<div><img src= "Way2.jpeg" alt = "Wayanad" width="350" height="250"></div>
<div><img src = "Way3.jpeg" alt = "Wayanad" width="350" height="250"></div>
<div><img src = "Way4.jpeg" alt = "Wayanad" width="350" height="250"></div>
    <p>Wayanad is a town located in Kerala. Known for its beauty, people travel to Wayanad to look at the lovely coastal countryside. The backwaters of Wayanad are a sight hard to miss.  </p>
    <br>
<br>
    
    
    
    <!-- Load CSS -->
	<script>
		function loadCSS(hf)
        {
			var ms=document.createElement("link");
            ms.rel="stylesheet";
			ms.href=hf;
            document.getElementsByTagName("head")[0].appendChild(ms);
		}
        
		loadCSS("../libs/bootstrap/css/bootstrap.min.css");
		loadCSS("../fonts/flaticons/font/flaticon.css");
		loadCSS("../_header.css");              //Header Styles (compress & paste to header after release)
		loadCSS("../_main.css");                //User Styles: Main
		loadCSS("../_media.css");               //User Styles: Media
	</script>

	<!-- Load CSS compiled without Bootstrap & Header styles (after release) -->
	<script>var ms=document.createElement("link");
        ms.rel="stylesheet";
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