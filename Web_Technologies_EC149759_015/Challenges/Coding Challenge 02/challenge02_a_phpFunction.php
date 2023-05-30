<?php

/* Brief:
	Create a PHP function that takes in a string as an argument
	and returns the string with all vowels replaced with the character "x".
*/
	echo "<h1>Challenge 02 - PHP Function</h1>";
	
	$testString = "Hello World!";
	
	function replaceVowelsWithX($str) {
	$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
	$modified_str = str_replace($vowels,"x",$str);
	return $modified_str;
	}
	
	echo "Input: " . $testString . "</br>";
	echo "Output: " . replaceVowelsWithX($testString);
?>