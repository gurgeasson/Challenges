<?php
  # Check form submitted.
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    # Connect to the database.
    require_once ('./connect_db.php');

    # Initialize an error array.
    $errors = array();

    # Check for name.
    if (empty($_POST['first_name'])) {
      $errors[] = 'Enter first name.';
    } else {
      $first_name = mysqli_real_escape_string($conn, trim($_POST['first_name']));
    }

    # Check for last name.
    if (empty($_POST['last_name'])) {
      $errors[] = 'Enter last name.';
    } else {
      $last_name = mysqli_real_escape_string($conn, trim($_POST['last_name']));
    }

    # Check for email.
    if (empty($_POST['email'])) {
      $errors[] = 'Enter email address';
    } else {
      $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    }

    # Check for a password and matching input passwords.
    if (!empty($_POST['newPasswd'])) {
      if ($_POST['newPasswd'] != $_POST['confPasswd']) {
        $errors[] = 'Passwords do not match.';
      }
      else {
        $password = mysqli_real_escape_string($conn, trim($_POST['newPasswd']));
      }
    }
    else {
      $errors[] = 'Enter your password.';
    }
      
    # Check if email address already registered.
    if (empty($errors)) {
      $sql = "SELECT user_id FROM users_view WHERE email='$email'" ;
      $result = @mysqli_query ($conn, $sql) ;
      if (mysqli_num_rows($result) != 0) $errors[] = 'Email address already registered. <a class="alert-link" href="login.php">Sign In Now</a>' ;
    }

    # On success data into items on database.
    if (empty($errors)) {
      $sql = "INSERT INTO users_view (first_name, last_name, email, passwd, reg_date)
      VALUES ('$first_name','$last_name','$email', SHA2('$password',256), NOW() )";
      $result = @mysqli_query($conn, $sql);
      if ($result) {
        echo '<div class="container my-5">
            <p>New User created successfully</p>
            <button class="btn btn-primary" name="Go Back" onclick="history.back()">Go Back</button>
          </div>';
      }

      # Close database connection.
      mysqli_close($conn);
    }

    # Or report errors.
    else {
      echo '<div class="container my-5">
          <p>The following error(s) occurred:</p>';
      foreach ($errors as $msg) {
      echo "$msg<br>";}
      echo '<p>Please try again.</p>
          <button class="btn btn-primary" name="Go Back" onclick="history.back()">Go Back</button>
        </div>';
      # Close database connection.
      mysqli_close($conn);
    }
  }