<?php

/* Brief:
	Create a PHP program that takes two numbers and outputs the result of
	adding, subtracting, multiplying, and dividing them.
	The program should also concatenate the two numbers into a string.
*/

	echo '<h1>Challenge 01 - b - Strings, Numbers and Maths</h1>';

	$number_1 = 10;
	$number_2 = 5;
	
	$add = $number_1 + $number_2;
	$subtr = $number_1 - $number_2;
	$mult = $number_1 * $number_2;
	$div = $number_1 / $number_2;
	$str = $number_1 . $number_2;
	
	echo 'Take two numbers, 10 and 5. <br>';
	echo 'Results of Addition, Subtraction, Multiplication and Division are as follows: <br>';
	echo $add . '<br>' . $subtr . '<br>' . $mult . '<br>' . $div;
	echo '<br>Concatenation: ' . $str;
	
?>