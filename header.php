<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FTC 2013-2014 Northern VA Qualifier - December 14th, 2013</title>
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]>
	  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
	  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
	<![endif]-->
	<?php
		$location = "/ftc/location"; $currentpage = $_SERVER['REQUEST_URI'];
		if($location==$currentpage) { ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0bjUUQmiaxPuS11USZgxDC-WLFsTb1lM&v=3.exp&sensor=true&region=US"></script>
		<?php }
		$location = "/location"; $currentpage = $_SERVER['REQUEST_URI'];
		if($location==$currentpage) { ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0bjUUQmiaxPuS11USZgxDC-WLFsTb1lM&v=3.exp&sensor=true&region=US"></script>
		<?php }
	?>
	<script src="js/application.js"></script>
</head>
<body>
<a href="#content" class="sr-only">Skip to Content</a>
<nav>
	<div class="container">
		<a href="challenge">Challenge</a>
		<a href="schedule">Schedule</a>
		<a href="location">Location</a>
		<a href="about">Who We Are</a>
		<a href="lunch">Lunch</a>
		<a href="outreach">Outreach</a>
		<a href="volunteer">Volunteer</a>
	</div>
</nav>
<header style="background:url(img/photo-sm-<?php $random = rand(1,5); echo $random; ?>.jpg);background-position:center;">
	<a href="index">
		<img src="img/ftc-logo-sm.png" width="193" height="256" alt="FTC">
	</a>
	<span>Photo Credit: US FIRST</span>
</header>
<div id="content"></div>