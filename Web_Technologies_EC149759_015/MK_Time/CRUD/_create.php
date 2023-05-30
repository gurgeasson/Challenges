<?php
  # Check form submitted.
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # Connect to the database.
    include('../connect_db.php');

    # Initialize an error array.
    $errors = array();

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

    # On success data into items on database.
    if (empty($errors)) {
      $sql = "INSERT INTO items (item_name, item_desc, item_img, item_price)
      VALUES ('$item_name','$item_desc','$item_image', '$item_price')";
      $result = @mysqli_query($link, $sql);
      if ($result) {
        echo '<p>New record created successfully</p>';
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