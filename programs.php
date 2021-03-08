<!DOCTYPE html>
<html lang="en">
<?php 
include_once "inc/functions.php"; 
?>
<head>
	<title>CISC 282 | Assignment4 | Programs</title>
    <!--- based on the sample solution--->
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
                <a href="index.php">Department of Agriculture</a>
            </div>
            <nav>
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="programs.php">Programs</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
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
	
	<article>
        <h1>Programs</h1>
        
        <div class="column-container">
            <section class="column">
                <h2>Crop Science</h2>
                
                <p>Students in Crop Science study not only crop production and management, but the plants themselves.</p>
            </section>
            
            <section class="column">
                <h2>Food Science</h2>
                
                <p>Students in Food Science study the development, safety and supply of food.</p>
            </section>
        </div>
        
        <section>
            <h2>Common First Year</h2>
            
            <p>If you enrol in Agriculture, there is no need to declare a plan/major immediately. Both Crop Science and Food Science have a common first year; you can make your choice <em>after</em> you've been introduced to both topics.</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Department</th>
                        <th>Course Code</th>
                        <th>Name</th>
                        <th>Units</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mathematics</td>
                        <td>MATH 121</td>
                        <td>Differential and Integral Calculus</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>Chemistry</td>
                        <td>CHEM 112</td>
                        <td>General Chemistry</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Biology</td>
                        <td>BIOL 102</td>
                        <td>Introductory Biology of Cells</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BIOL 103</td>
                        <td>Introductory Biology of Organisms</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Agriculture</td>
                        <td>AGRI 105</td>
                        <td>Fundamentals of Crop Science</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>AGRI 106</td>
                        <td>Fundamentals of Food Science</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td colspan="3">Elective(s)</td>
                        <td>6</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total Units</th>
                        <th>30</th>
                    </tr>
                </tfoot>
            </table>
    
            <p>The Faculty of Arts and Science requires students to <a href="https://www.queensu.ca/artsci/undergrad-students/plan-selection">declare a plan/major</a> once they have completed 24 units (or more). This typically occurs at the end of their first year.</p>         
        </section>
    </article>

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