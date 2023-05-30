<?php

/* Brief:
	Create and initialise an array variable using a suitable variable name
	to display the following values for climate in Edinburgh:
		The “hottest” months in Edinburgh are normally July and August.
		During summer, the average low temperatures are 52°F (11°C) and average highs are 66°F (19°C)
		The coldest months of the year are January and February,
		with average lows of 33.8°F (1°C) and highs that rarely exceed 44.6°F (7°C).
*/
	echo '<h1>Challenge 01 - e - Associative Arrays </h1>';
	
	$summer= "July-Aug";
	$winter= "Jan-Feb";
	$temperature = array("summer_low" =>11, "summer_high" =>19, "winter_low" =>1, "winter_high" =>7);
	
	echo "<table  class=\"table table-condensed\">
		<tr>
			<h1>Average Temperature in Edinburgh</h1>
		</tr>
		
		<tr>
			<th>Month</th>
			<th>High</th>
			<th>Low</th>
		</tr>
		
		<tr>
			<th>$summer</th>
			<th>" . $temperature['summer_high'] . " ℃</th>
			<th>" . $temperature['summer_low'] . " ℃</th>
		</tr>
		
		<tr>
			<th>$winter</th>
			<th>" . $temperature['winter_high'] . " ℃</th>
			<th>" . $temperature['winter_low'] . " ℃</th>
		</tr>
	</table>";
?>