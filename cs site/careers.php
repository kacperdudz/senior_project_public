<!-- important include: allows cookies to be set, charts to be made,... -->
<?php include 'careers_chart.php';?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="sources/styles.css">
		<link rel="stylesheet" type="text/css" href="sources/navbar.css">
		<link rel="stylesheet" type="text/css" href="sources/career-styles.css">
	</head>
	<body>


	<?php include 'cs-header.html';?>


	<table>
			<!-- row for chart and some words -->
			<tr>
				<td colspan="2" width="66.66%">
					<!-- main div used to display CanvasJS chart -->
					<div id="chartContainer" style="height: 400px; width: 100%;"></div>
				</td>
				<td>
					<p>To the left is some data from the BLS (Burea of Labor Statistics) pertinent to our Computer Science majors.</p>
					<p>The official title for this section of the workforce is "Software Developers, Applications and Systems Software".</p>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<p>Both of these bar graphs represents the growth in total number of employees of their respective profession in thousands nationally.
						The horizontal axes represents a specific year and the vertical axis represents the data for that year: namely, the number of employees of a profession in thousands nationally.</p>
					<p>The workers represented are 16 years or older, not self-employed, and employed full time.</p>

				</td>
			</tr>
			<!-- row for chart and some words -->
			<tr>
				<td width="33.33%">
					<p>To the right is more data from the BLS (Burea of Labor Statistics), this time pertinent to our IT (Information Technology) majors.</p>
					<p>The official title for this section of the workforce is "Information Security Analysts".</p>
				</td>
				<td colspan="2">
					<div id="chartContainer2" style="height: 400px; width: 100%;"></div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
				 <p><b>A couple cautions should be taken when reading this data:</b></p>
				 <p>Firstly, the BLS splits up data is various ways,
					 so it is tough to narrow down a whole profession with just a single graph.
					 The graphs represent a specific set of employment numbers out of many more possible careers
					 options for our majors, therfore they in no way reflect an entire field of study.
					 In other words, the two graphs do not represent the majors they are trying to reflect,
				   but they act as evidence towards an increasing popularity (and possibly a demand) for technology
				 	 workers. </p>
				 <p>Secondly, the occupations highlighted were chosen merely to fit our majors.
					 The "information technology" sector of the workforce is of course more than just "Information Security Analysts".
					 Therefore, based on the data we see, we should be wary of thinking smaller employment amounts mean less work
					 for certain majors. Translating what the BLS puts out to fit our curriculum offered specifically would be difficult,
					 so, again, view these graphs as samples of a much larger picture.</p>
				 <p>Thirdly, and this is less of a caution and more of a tip,: if you are interested in specifics of another occupation or industry,
					 the BLS site has a lot of information. The best way to find specifics may not be by direct navigation of their site (because it is cumbersome),
					 but by trying to lump in your interest with the "BLS" keyword in a google search.
					 Regardless, <a href="https://www.bls.gov/" target="_blank">here</a> is the link to their site
					 and <a href="https://beta.bls.gov/dataQuery/find" target="_blank">here</a> is a link to their
					 data finder, althogh you must be careful in wording your searches.</p>
				</td>
			</tr>
			<!-- start of intro section -->
			<tr id="intro_link">
				<td colspan="3">Below are some more links towards good BLS pages and other job-hunting/job-prep sources:</td>
			</tr>
			<tr id="links">
				<td colspan="2">
					<p>Use USF's site to get help with your resume or other job-related questions.</p>
				</td>
				<td style="text-align:center">
					<p><a href="https://www.stfrancis.edu/" target="_blank">Link to USF main site</a></p>
				</td>
			</tr>
			<tr> <!--dummy row for styling--></tr>
			<tr id="links">
				<td colspan="2">
					<p>"Indeed", a popular job search engine</p>
				</td>
				<td style="text-align:center">
					<p><a href="https://www.indeed.com/" target="_blank">Link to Indeed</a></p>
				</td>
			</tr>
			<tr><!--dummy row for styling--></tr>
			<tr id="links">
				<td colspan="2">
					<p>Info about and list of Computer and Information Technology Occupations from BLS (easy to view)</p>
				</td>
				<td style="text-align:center">
					<p><a href="https://www.bls.gov/ooh/computer-and-information-technology/home.htm" target="_blank">Link to BLS Comp. Sci. & IT list</a></p>
				</td>
			</tr>

	</table>

	</body>


</html>
