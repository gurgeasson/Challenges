<?php

/* Brief:
	Create a program that your age
	and then displays the number of days, hours, and minutes you have been alive.
	The program should use variables to store the user's age
	and the number of days, hours, and minutes you have been alive.
*/
	echo '<h1>Challenge 03</h1>';

	$birth_date = '13.03.1986';
	$birth_date_to_epoch = strtotime($birth_date); //convert my birth date to unix epoch

	$curent_time = time(); //the current time in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
	
	$age_in_secs = $curent_time - $birth_date_to_epoch;
//	$age_whole_days = $age_in_secs / 86400;
	$age_whole_days = floor(($age_in_secs / 86400));
	$age_whole_hours = floor(($age_in_secs % 86400) / 3600);
	$age_whole_minutes = floor((($age_in_secs % 86400) % 3600) / 60);
	$age_whole_seconds = floor((($age_in_secs % 86400) % 3600) % 60);

	echo 'current time stamp: ' . $curent_time . '<br>';
	echo 'my age in unix epoch time: ' . $birth_date_to_epoch . '<br>';
	echo 'age in seconds total: ' . $age_in_secs . '<br>';
	echo 'you are ' . $age_whole_days . ' days, ' . $age_whole_hours . ' hours, ' . $age_whole_minutes . ' minutes, and ' . $age_whole_seconds . ' seconds'; 
	
?>