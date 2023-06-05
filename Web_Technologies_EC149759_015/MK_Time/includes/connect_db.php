<?php

  $serverName = 'localhost';
  $dBUsername = 'root';
  $dBPassword = '';
  $dBName = 'MK_Time';

  # Connect  on 'localhost' for user to database.
  $conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName); 
  if (!$conn) { 
    # Otherwise fail gracefully and explain the error. 
    die('Connection failed: ' . mysqli_error()); 
  } 
// echo 'Connected to the database successfully!';