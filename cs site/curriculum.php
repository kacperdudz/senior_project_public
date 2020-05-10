<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="sources/styles.css">
		<link rel="stylesheet" type="text/css" href="sources/navbar.css">
		<link rel="stylesheet" type="text/css" href="sources/curriculum.css">
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
		<script src="sources/curriculum.js"></script>
	</head>

	<body onload="hideAll()">


		<?php include 'cs-header.html';?>


		<!--Content-->
		<div id="welcome" style="text-align: center;">
			<h1>Curriculum</h1><br>
			<!--Combo Box-->
			<!--This is used to choose what program requirements to display-->
			<label for="programList"><h2>Select a program</h2></label><br>
			<select id="programList">
				<option value="cs-major">CS Major</option>
				<option value="cs-minor">CS Minor</option>
				<option value="math-cs">Math & CS</option>
				<option value="it-major">IT Major</option>
				<option value="it-minor">IT Minor</option>
				<option value="it-net">It & Network Specialist</option>
				<option value="web">Web Dev</option>
			</select><br><br>
			<button id="select" onclick="programSelected()">View Requirements</button>
		</div>

		<!--These next few divs use PHP to read and display its respective text file-->
		<!--They are hidden and made visible using JavaScript-->
		<div id="programs">
			<div id="cs-major" class="degree">
				<h2>Computer Science Major</h2>
				<?php
					$fh = fopen('programs/cs-major.txt','r');
					while($line = fgets($fh))
						{
							echo($line) . "<br>";
						}
					fclose($fh);?>
			</div>

			<div id="cs-minor" class="degree">
				<h2>Computer Science Minor</h2>
				<?php
					$fh = fopen('programs/cs-minor.txt','r');
					while($line = fgets($fh))
						{
							echo($line) . "<br>";
						}
					fclose($fh);?>
			</div>

			<div id="math-cs" class="degree">
				<h2>Mathematics and Computer Science</h2>
				<?php
					$fh = fopen('programs/math-cs.txt','r');
					while($line = fgets($fh))
						{
							echo($line) . "<br>";
						}
					fclose($fh);?>
			</div>

			<div id="it-major" class="degree">
				<h2>Information Technology</h2>
				<?php
					$fh = fopen('programs/it-major.txt','r');
					while($line = fgets($fh))
						{
							echo($line) . "<br>";
						}
					fclose($fh);?>
			</div>

			<div id="it-minor" class="degree">
				<h2>Information Technology Minor</h2>
				<?php
					$fh = fopen('programs/it-minor.txt','r');
					while($line = fgets($fh))
						{
							echo($line) . "<br>";
						}
					fclose($fh);?>
			</div>

			<div id="it-net" class="degree">
				<h2>Information Technology & Network Specialist</h2>
				<p style="max-width: 1000px;">Note: This program is designed to complete the A.A.S degree in Computer Information Systems – Network Specialist Option from Joliet Junior College.<br><br>
				<?php
					$fh = fopen('programs/it-net.txt','r');
					while($line = fgets($fh))
					{
						echo($line) . "<br>";
					}
					fclose($fh);?>
			</div>

			<div id="web" class="degree">
				<h2>Web Development Major</h2>
				<?php
					$fh = fopen('programs/web-major.txt','r');
					while($line = fgets($fh))
						{
							echo($line) . "<br>";
						}
					fclose($fh);?>
			</div>
		</div>
		<div id="footer">
		<!--The footer will go here-->
		</div>
	</body>
</html>
