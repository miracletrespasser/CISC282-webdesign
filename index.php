<!DOCTYPE html>
<?php 
include_once "inc/functions.php"; 
?>
<html lang="en">
<!--- Author: James Wang student number 20119632-->
<?php print_head('In-Class Example | Week 13 | Forms: HTML'); ?>

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
        <h1>Sustain and Secure</h1>
        
        <p>The purpose and focus of the Department of Agriculture is to provide education and research that promote food security and sustainability. This discipline approaches these challenges from three perspectives:</p>
        <ol>
            <li>economic,</li>
            <li>environmental and</li>
            <li>social.</li>
        </ol>
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