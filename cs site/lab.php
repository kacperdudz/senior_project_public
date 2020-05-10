<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="sources/styles.css">
		<link rel="stylesheet" type="text/css" href="sources/navbar.css">
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	</head>

	<style>
		body {
			/*Creates a background image*/
			/*The placeholder image may be misproportioned*/
			background-image: url("images/lab.png");
			background-repeat: no-repeat;
			background-position: top;
			background-size: 100%;
		}

	</style>

	<body>
		<!--reads in navbar and scrolling slideshow-->
		<?php include 'cs-header.html';?>

		<!--Short message about the computer lab-->
		<div id="welcome">
			<h1>Joan Ramuta Computer Lab</h1>
			Named in honor of the founder of Computer Science at the University of St. Francis, 
			the Joan Ramuta Computer Lab is open to all majors in the Math and Computer Science 
			Department. Due to the Covid-19 pandemic, this year's seniors are unable to complete 
			their project intended to allow for remote access to the lab. The lab will also become 
			the home to the department's 3D printer in next few years.
		</div>

		<!--More stuff can be added if so desired-->
		<!--<div id="highlights"></div>-->

	</body>
</html>
