<!DOCTYPE html>
<html lang="en">
<?php 
include_once "inc/functions.php"; 
?>
<head>
	<title>CISC 282 | Assignment4 | About</title>
    <!--- based on A3 sample solution--->
	<meta charset="utf-8"/>
	<meta name="author" content="James Wang/Sarah Whittaker"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/icons.css"> 	
	<link rel="stylesheet" href="css/style.css"> 	
	<link rel="stylesheet" href="css/responsive.css"> 	
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/headeranimation.js"></script>
    <script src="js/over.js"></script>
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
        <h1>About</h1>
            
        <p>Agriculture is a highly multi-disciplinary field; students can expect to study mathematics, biology, chemistry, economics and sociology. It is vital to understand all of the factors that affect food sustainability and ensure or threaten food security.</p>
            
        <blockquote>
        Agricultural production systems are facing increasing competition from other sectors for limited natural resources. The availability of these resources and their quality are also being affected by unsustainable management practices and changing climatic and weather conditions. To respond to this situation, the agriculture sectors must improve their sustainability performance and adapt to the impacts of climate change in ways that do not compromise global efforts to ensure food security for all. These challenges are intimately and inextricably related, and need to be addressed simultaneously.
        
        <div class="quote-source">--- Climate Smart Agriculture Sourcebook, Section A1 - 1</em>, <a href="http://www.fao.org">The Food and Agriculture Organization of the United Nations</a></div>
        </blockquote>
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