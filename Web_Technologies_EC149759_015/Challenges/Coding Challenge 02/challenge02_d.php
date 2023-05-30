<h1>Challenge 02 - d - else Statements</h1>

<form>
	<label for="age">Your Age:</label>
	<input type="number" name="age"><br><br>

	<input type="submit" value="Calculate">
</form>

<?php

/* Brief:
    In this challenge, create a variable $age is set the value.
    Next create a script that checks the value of $age and
    displays a message based on the age group it falls into:

    If the value of $age is less than 13, it displays "You are a child."
    If the value of $age is between 13 and 17, it displays "You are a teenager."
    If the value of $age is between 18 and 64, it displays "You are an adult."
    If none of the above conditions are met, it displays "You are a senior citizen."
*/

    $age = $_REQUEST['age'];

	if ($age < 13 ) {
        echo "You are a child.";
    }
    elseif (($age >= 13) && ($age <= 17)) {
        echo "You are a teenager.";
    }
    elseif (($age > 17) && ($age < 64)) {
        echo "You are an adult.";
    }
    else {
        echo "You are a senior citizen.";
    }
?>