<!DOCTYPE html>
<html>
	<head>
		<title>First Name Last Name Baseball Basic</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
		<script src="gallery_slideshow.js"></script>
	</head>
	<body>

		<div class="tech-slideshow">
			<div class="mover-1"></div>
		</div>

		<nav>
			<ul>
				<li><a href="#awards">Awards</a></li>
				<li><a href="#testimonials">Testimonials</a></li>
				<li><a href="#gallery">Gallery</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>

		<table>
			<tr>
				<div id="info_wrapper">
					<img src="images/headshot.png" alt="headshot" height="300px" width="250px"> <br>
					<br>Name <br>
					Short Biography <br>
					(more info can go here) <br>
					(more info can go here) <br>
					(more info can go here) <br> <br>
				</div>
				<h1 style="text-align:center"> Baseball Basics </h1>
				<hr>
				<h2 id="awards" style="margin-left:11.35em;"> Awards and Biography </h2>
				<hr>
				List of accolades and awards:
				<ul id="awards-list">
					<!--<li>1959 - Starting shortstop for Harrison Tech High School for IHSA State championship game.</li>-->
					<li>1961-65 - Lorem ipsum dolor sit amet, errem postulant quaerendum an vix.</li>
					<li>1962-63 - Lorem ipsum dolor sit amet, errem postulant quaerendum an vix.</li>
					<li>1969-71 - Lorem ipsum dolor sit amet, errem postulant quaerendum an vix.</li>
					<li>1972 - Lorem ipsum dolor sit amet, errem postulant quaerendum an vix.</li>
					<li>1972-76 - Lorem ipsum dolor sit amet, errem postulant quaerendum an vix.</li>
					<li>1980-95 - Lorem ipsum dolor sit amet, errem postulant quaerendum an vix.</li>
					<li>1980 - Lorem ipsum dolor sit amet, errem postulant quaerendum an vix.</li>
					<li>1995-2005 - Lorem ipsum dolor sit amet, errem postulant quaerendum an vix.</li>
					<li>2000 - Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea.</li>
					<li>2009 - Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea.</li>
					<li>2009 - Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea.</li>
					<li>2019 - Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea.</li>
				</ul>
				<p> Lorem ipsum dolor sit amet, errem postulant quaerendum an vix. Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea. Lorem ipsum dolor sit amet, errem postulant quaerendum an vix. Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea. </p>
				<p> Lorem ipsum dolor sit amet, errem postulant quaerendum an vix. Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea. Lorem ipsum dolor sit amet, errem postulant quaerendum an vix. Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea. </p>
			</tr>
			<tr>
				<td>
					<hr><h2  id="testimonials"> Testimonials </h2><hr>
					<p>"Lorem ipsum dolor sit amet, errem postulant quaerendum an vix. Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea. Lorem ipsum dolor sit amet, errem postulant quaerendum an vix. Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea."</p>
					<p>"Lorem ipsum dolor sit amet, errem postulant quaerendum an vix. Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea. Lorem ipsum dolor sit amet, errem postulant quaerendum an vix. Habemus appareat eum an, ut eam vero iriure pertinax, sale partem dissentiet eam ea."</p>
					<p>&emsp;-Name Here</p>
				</td>
			</tr>
			<tr>
				<td>
					<hr><h2 id="gallery"> Gallery </h2><hr>
					<br>
					<!-- Slideshow container -->
					<div class="slideshow-container">
						<!-- Full-width images with number and caption text -->
						<div class="mySlides fade">
							<img src="images/slideshow_template.png">
							<div class="text">Example image</div>
						</div>

						<div class="mySlides fade">
							<img src="images/slideshow_template.png">
							<div class="text">Example image</div>
						</div>

						<div class="mySlides fade">
							<img src="images/slideshow_template.png">
							<div class="text">Example image</div>
						</div>

						<div class="mySlides fade">
							<img src="images/slideshow_template.png">
							<div class="text">Example image</div>
						</div>

						<!-- Next and previous buttons -->
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- The dots/circles -->
					<div style="text-align:center">
						<span class="dot" onclick="currentSlide(1)"></span>
						<span class="dot" onclick="currentSlide(2)"></span>
						<span class="dot" onclick="currentSlide(3)"></span>
						<span class="dot" onclick="currentSlide(4)"></span>
					</div>
					<script>
					showSlides(1);
					</script>
				</td>
			</tr>
			<tr>
				<td>
					<hr>
					<h2 id="contact"> Contact Info </h2>
					<hr>
					<p>Call or email for information</p>
					<p>Home Phone: XXX-XXX-XXXX</p>
					<p>Cell Phone: XXX-XXX-XXXX</p>
					<p>Email: some@email.com</p>
				</td>
			</tr>
		</table>
	</body>
</html>
