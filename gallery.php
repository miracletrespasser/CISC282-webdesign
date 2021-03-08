<!DOCTYPE html>
<html lang="en">
<?php 
include_once "inc/functions.php"; 
?>
<head>
	<title>CISC 282 | Assignment4 | Gallery</title>
	<meta charset="utf-8"/>
	<meta name="author" content="James Wang/Sarah Wittaker"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="css/icons.css"> 	
	<link rel="stylesheet" href="css/style.css"> 	
	<link rel="stylesheet" href="css/responsive.css"> 
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/headeranimation.js"></script>
    <script src="js/over.js"></script>
    <!-- Magnific Popup core JS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <script src="js/jquery.magnific-popup.js"></script>
    
</head>

<body>

	<header>
	    <img id="wordmark" src="img/queens-wordmark.png" alt="Queen's University"/>
        <div id="hero-container" class="bee">
            <div id="overlay"></div>
            <img id="logo" src="img/queens-logo.png" alt="Queen's University Coat of Arms"/>
            <div id="site-title">
                <a href="index.html">Department of Agriculture</a>
            </div>
            <nav>
                <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="programs.html">Programs</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                </ul>
            </nav>
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com/QueensComputing">
                        <i class="icon-facebook-square" aria-hidden="true" title="Facebook"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/queenscomputing">
                        <i class="icon-twitter-square" aria-hidden="true" title="Twitter"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                </li>
            </ul>
        </div>
	</header>
	
	<main>
        <h1>Gallery<h1>
        <div class="thumbnail-gallery">
            <figure>
                <a href="img/grapes.jpg">
                    <img src="img/grapes.jpg"
                     alt="A farmer holding grapes"/>
                </a>
                
            </figure>            
            <figure>
                <a href="img/orange-juice.jpg">
                    <img src="img/orange-juice.jpg"
                     alt="A glass of orange juice"/>
                </a>
            </figure>            
            <figure>
                <a href="img/single-leaf.jpg">
                    <img src="img/single-leaf.jpg"
                     alt="A single leaf"/>
                </a>
            </figure>
            <figure>
                <a href="img/single-cherry.jpg">
                    <img src="img/single-cherry.jpg"
                     alt="A single cherry"/>
                </a>
            </figure>
            <figure>
                <a href="img/cardamom-buns.jpg">
                    <img src="img/cardamom-buns.jpg"
                     alt="Dinner rolls spiced with cardamom"/>
                </a>
            </figure>        
            <figure>
                <a href="img/dew-on-grass.jpg">
                    <img src="img/dew-on-grass.jpg"
                     alt="Dew drops on blades of grass"/>
                </a>
            </figure>
        </div>
    </main>

	<footer>
	    <img id="unit-signature"  src="img/unit-signature.png" alt="Queen's University Department of Agriculture"/>
	    <div id="address">
	        MacGillivray-Brown Hall<br/>
	        218 Barrie St.<br/>
	        Kingston, ON<br/>
	        K7L 3K3<br/>
	    </div>
	    <ul id="phone-and-email">
	        <li>
	            <i class="icon-envelope" aria-hidden="true"></i>
	            <a href="mailto:agriculture@queensu.ca">Email Us</a>
	        </li>
	        <li>
	            <i class="icon-phone-square" aria-hidden="true"></i>
	            <a href="tel:+1-613-555-5555">613-555-5555</a>
	        </li>
	    </ul>
        <div id="copyright">&copy; 2019 Queen's University Department of Agriculture. All Rights Reserved.</div>
	</footer>
	
</body>
</html>