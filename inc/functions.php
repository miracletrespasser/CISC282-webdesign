<?php
define("INPUTID", "Inputid");
define("INPUTNAME", "Inputname");
/***************************************************************************/
/* print_head(...) */
/***************************************************************************/
function print_head($page_title, $include_MP_validation=false) { ?>
<head>
	<title>CISC 282 |<?= $page_title?></title>
	<meta charset="utf-8"/>
	<meta name="author" content="Sarah-Jane Whittaker"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="css/icons.css"> 	
	<link rel="stylesheet" href="css/style.css"> 	
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/header-slideshow.js"></script>
	<?php if ($include_MP_validation) : ?>
    <link rel="stylesheet" href="css/magnific-popup.css">
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/thumbnail-gallery.js"></script>	
	<?php endif; ?>
</head>
<?php
}

