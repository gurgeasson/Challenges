<?php
  # Connect to the database.
  include ('../connect_db.php');

  $id = $_GET['id'];
  $sql = "SELECT * FROM items WHERE item_id = $id";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($result);

  # Check form submitted.
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    # Initialize an error array.
    $errors = array();

    # Check for id.
    if (empty($_POST['item_id'])) {
      $errors[] = 'Enter item id.';
    } else {
      $id = mysqli_real_escape_string($link,trim($_POST['item_id']));
    }
    
    # Check for name.
    if (empty($_POST['item_name'])) {
      $errors[] = 'Enter item name.';
    } else {
      $item_name = mysqli_real_escape_string($link, trim($_POST['item_name']));
    }

    # Check for description.
    if (empty($_POST['item_desc'])) {
      $errors[] = 'Enter item description.';
    } else {
      $item_desc = mysqli_real_escape_string($link, trim($_POST['item_desc']));
    }

    # Check for image.
    if (empty($_POST['item_image'])) {
      $errors[] = 'item image';
    } else {
      $item_image = mysqli_real_escape_string($link, trim($_POST['item_image']));
    }

    # Check for price.
    if (empty($_POST['item_price'])) {
      $errors[] = 'item price';
    } else {
      $item_price = mysqli_real_escape_string($link, trim($_POST['item_price']));
    }
    
    # Check for errors, on success update the record in the database    
    if (empty($errors)) {
      $sql = "UPDATE items SET item_id=$id, item_name='$item_name', item_desc='$item_desc', item_img='$item_image', item_price='$item_price'  WHERE item_id=$id";
      $result = @mysqli_query ( $link, $sql ) ;
      if ($result) {
        // echo "Updating record successful";
        header("Location: home.php");
      } else {
        echo "Error updating record: " . $link->error;
      }
    
      # Close database connection.
      mysqli_close($link);
    }

    # Or report errors.
    else {
      echo '<p>The following error(s) occurred:</p>';
      foreach ($errors as $msg) {
      echo "$msg<br>";}
      echo '<p>Please try again.</p></div>';
      # Close database connection.
      mysqli_close($link);
    }
  }
?>