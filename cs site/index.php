<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="sources/styles.css">
		<link rel="stylesheet" type="text/css" href="sources/gallery.css">
		<link rel="stylesheet" type="text/css" href="sources/navbar.css">
		<script src="sources/index.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
	</head>
	<body>

		<?php include 'cs-header.html'?>

		<div id="welcome">
			<h1><span class="mono">Computer Science</span> &nbsp;at the University of St. Francis</h1><br>
			As a Catholic university rooted in the liberal arts, we are a welcoming community of learners 
			challenged by Franciscan values and charism, engaged in a continuous pursuit of knowledge, faith, 
			wisdom, and justice, and ever mindful of a tradition that emphasizes reverence for creation, 
			compassion and peacemaking. We strive for academic excellence in all programs, preparing women 
			and men to contribute to the world through service and leadership.
		</div>
		
		<div id="quick-facts">
		<!-- possibly add facts/other info here-->
		</div>

		<!--slideshow gallery-->
		<div id = "gallery">
			<!--slides-->
			<!--Images and captions are place holders-->
			<!--Slideshow is also scalable-->
			<!--Image names do not impact functionality-->
			<div class="slides">
				<img src="images/1.jpg" width="50%">
				<div class="caption">Basilica of Sainte-Thérèse</div>
			</div>
			<div class="slides">
				<img src="images/2.jpg" width="50%">
				<div class="caption">Bayeux Cathedral</div>
			</div>
			<div class="slides">
				<img src="images/3.jpg" width="50%">
				<div class="caption">Sacré-Cœur Basilica</div>
			</div>
			<!--prev and next buttons-->
			<div class="center">
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
		</div>

		<!--displays first slide after all pictures have been loaded-->
		<script>showSlides(1)</script>

		<div id="footer">
		<!--The footer will go here-->
		</div>
	</body>
</html>
