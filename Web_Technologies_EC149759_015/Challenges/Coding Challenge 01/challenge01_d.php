<?php

/* Brief:
	Create and initialise an array variable using
	a suitable variable name to display the following names of the days:
*/
	echo '<h1>Challenge 01 - d - Numeric Arrays</h1>';

	# Create and initialise an array variable.
	$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
	
	echo"<h1>Days of the Week</h1>";
	# Display the value in all elements as a bulleted list.
	foreach($days as $value) {
		echo "
			<ul>
				<li>$value</li>
			</ul>
			";
	} 
	
?>