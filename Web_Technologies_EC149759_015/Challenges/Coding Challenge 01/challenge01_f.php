<?php

/* Brief:
	
*/

echo '<h1>Challenge 01 - f - Multi-Dimensional Arrays </h1>';

$results = array( 
	"aarron" => array (
		"Physics" => '74%',
		"English" => '79%',
		"Maths" => '70%'
	),
	"jamie" => array (
		"Physics" => '64%',
		"English" => '79%',
		"Maths" => '69%'
	),
	"harry" => array (
		"Physics" =>'55%',
		"English "=> '52%',
		"Maths" => '57%'
	)
);

# Accessing multi-dimensional array values
echo "Result for Physics for Aarron: ";
echo $results['aarron']['Physics'] . "<br>";

echo "Results for English for Jamie: ";
echo $results['jamie']['English'] . "<br>";

echo "Results for Maths for Harry: ";
echo $results['harry']['Maths'] . "<br>";

?>