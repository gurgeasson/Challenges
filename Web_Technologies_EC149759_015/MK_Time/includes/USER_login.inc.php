<?php # PROCESS LOGIN ATTEMPT.
# Check form submitted.
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  # Open database connection.
  require ('./connect_db.php');

  # Get connection, load, and validate functions.
  require ('./USER_login_tools.inc.php');

  # Check login.
  list ($check, $data) = validate ($conn, $_POST['email'], $_POST['passwd']);

  # On success set session data and display logged in page.
  if ($check) {
    # Access session.
    session_start();
    $_SESSION['user_id'] = $data['user_id'];
    $_SESSION['first_name'] = $data['first_name'];
    $_SESSION['last_name'] = $data['last_name'];
    load ('../index.php');
    exit();
  }
  # Or on failure set errors.
  else { $errors = $data; } 

  # Close database connection.
  mysqli_close( $conn ) ; 
}

# Continue to display login page on failure.
include ( '../USER_login.php' ) ;

?>