<!-- Brief:
	Write a PHP program that displays the multiplication table of
	a given number using a for loop. -->

<h1>Challenge 03 - For Loop</h1>

input a number
<form>
	<label for="user_number">Multiplicand:</label>
	<input type="number" name="user_number"><br><br>

	<input type="submit" value="Calculate">
</form>

<?php

	$user_number = $_REQUEST['user_number'];

	echo "Multiplication table of $user_number:";

	for ($i = 1; $i <= 10; $i++) {
		$product = $user_number * $i;
		echo "
			<ul>
				<li>$user_number * $i = $product</li>
			</ul>
			";
	}

?>