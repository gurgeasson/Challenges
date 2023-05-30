<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
	<!-- Brief:
	Create a simple calculator program that takes two numbers as input
	and performs basic arithmetic operations on them using PHP operators.
	The program should display the results of each operation. -->


	<h1>Challenge 02 - Calculator</h1>

	<form method="post">
		<label for="num1">Number 1:</label>
		<input type="number" name="num1"><br><br>

		<label for="num2">Number 2:</label>
		<input type="number" name="num2"><br><br>
	
		<input type="radio" id="add" name="operator" value="add">
		<label for="add">Addition</label><br>
		<input type="radio" id="sub" name="operator" value="sub">
		<label for="sub">Subtraction</label><br>
		<input type="radio" id="mul" name="operator" value="mul">
		<label for="mul">Multiplication</label><br>
		<input type="radio" id="div" name="operator" value="div">
		<label for="div">Division</label><br><br>
		
		<input type="submit" value="Calculate">
	</form>
	
	<?php
		// Get the values submitted via the form, using $_REQUEST
		$var1 = $_REQUEST['num1'];
		$var2 = $_REQUEST['num2'];
		$operator = $_REQUEST["operator"];
		
		function calculator($num1, $num2, $oprtr) {
			switch ($oprtr) {
				case "add" :
					return $num1 + $num2;
				case "sub" :
					return $num1 - $num2;
				case "mul" :
					return $num1 * $num2;
				case "div" :
					if ($num2 != 0) {
						return $num1 / $num2;
					} else {
						return "Error: Division by zero.";
					}
				default:
					return false;
			}
		}
	
		echo "Output: " . calculator($var1, $var2, $operator);
	?>


</body>
</html>