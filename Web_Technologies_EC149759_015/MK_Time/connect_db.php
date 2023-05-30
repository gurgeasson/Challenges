<?php
    # Connect  on 'localhost' for user to database.
    $link = mysqli_connect('localhost','root','','MK_Time'); 
    if (!$link) { 
        # Otherwise fail gracefully and explain the error. 
        die('Could not connect to MySQL: ' . mysqli_error()); 
    } 
// echo 'Connected to the database successfully!';  
?>