<?php
	$cookie_name = "request";
	if(!isset($_COOKIE[$cookie_name])) {

		//HTTP request
		$url = 'https://api.bls.gov/publicAPI/v1/timeseries/data/';
		$method = 'POST';
		$query = array(
			'seriesid'  => array('LEU0254477200', 'LEU0257861000'),
			'startyear' => '2010',
			'endyear'   => '2020'
		);
		$pd = json_encode($query);
		$contentType = 'Content-Type: application/json';
		$contentLength = 'Content-Length: ' . strlen($pd);
		$result = file_get_contents(
			$url, null, stream_context_create(
				array(
					'http' => array(
						'method' => $method,
						'header' => $contentType . "\r\n" . $contentLength . "\r\n",
						'content' => $pd
					),
				)
			)
		);

		//setting cookies to reduce HTTP requests
		$cookie_value = $result;
		setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 24 hours
		$_COOKIE[$cookie_name] = $cookie_value; // taken from https://stackoverflow.com/questions/3230133/accessing-cookie-immediately-after-setcookie
	}
?>

<script>
if (<?php echo isset($_COOKIE[$cookie_name]); ?>){

	//converting JSON-styled cookie to a JavaScript object
	var myJSON = <?php echo json_encode($_COOKIE[$cookie_name]); ?>;
	var myObj = JSON.parse(myJSON);

	//creating data array that will be used for charts
	var data = new Array();
	for (i = 0; i < 2; i++) {
		var temp = new Array();
		data.push(temp);
	}

	//filling the array with information from cookie (from BLS call)
	for (j = 0; j < 2; j++){
		for (i = 0; i < parseInt(myObj.Results.series[j].data.length); i++){
			data[j].push(new Object());
			var d = new Date(); //use of Date() method since it comes in that way from BLS
			d.setFullYear(parseInt(myObj.Results.series[j].data[i].year));
			data[j][i].x = d; // "x-axis data point"
			data[j][i].y = parseInt(myObj.Results.series[j].data[i].value); // "y-axis data point"
		}
	}

	//onload function will run first on client-side, meaning charts will be created and loaded
	window.onload = function () {

	CanvasJS.addColorSet("grayShades",["#222831","#30475e","#f2a365"]); //setting bar colors

	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		exportEnabled: false,
		backgroundColor: "#dbdbdb",
		colorSet: "grayShades",
		 axisX:{
			 title: "year",
		   interval: 1,
		   intervalType: "year",
		 },
		axisY: [
		{
			title: "amount of employees (in thousands)",
			gridColor: "#b0b4b8",
		}
		],
		title:{
			text: "Amount of Software Developers (U.S., in thousands) per year",
			fontFamily: "verdana",
		},
		data: [{
			type: "column", //change type to bar, line, area, pie, etc
			indexLabel: "{y}", //Shows y value on all Data Points
			indexLabelFontColor: "#5A5757",
			indexLabelPlacement: "outside",
			dataPoints: data[0]
		}],
		interactivityEnabled: false
	});
	chart.render();

	//chart 2
	var chart2 = new CanvasJS.Chart("chartContainer2", {
		animationEnabled: true,
		exportEnabled: false,
		backgroundColor: "#dbdbdb",
		colorSet: "grayShades",
		 axisX:{
			 title: "year",
			 interval: 1,
			 intervalType: "year",
		 },
		axisY: [
		{
			title: "amount of employees (in thousands)",
			gridColor: "#b0b4b8",
		}
		],
		title:{
			text: "Amount of I.T. Security Analysts (U.S., in thousands) per year",
			fontFamily: "verdana",
		},
		data: [{
			type: "column", //change type to bar, line, area, pie, etc
			indexLabel: "{y}", //Shows y value on all Data Points
			indexLabelFontColor: "#5A5757",
			indexLabelPlacement: "outside",
			dataPoints: data[1]
		}],
		interactivityEnabled: false
	});
	chart2.render();

	}
}
</script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<!-- <div id="chartContainer" style="height: 500px; width: 100%;"></div> --> <!-- use to place chart -->
