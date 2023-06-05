<?php
  # Open database connection.
  include ( './connect_db.php' );

  if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ;    
    $sql = "DELETE FROM items_view WHERE item_id='$id'";
  if ($conn->query($sql) === TRUE) {
    header("Location: ../CRUD_home.php");
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  # Close database connection.
  mysqli_close($conn);