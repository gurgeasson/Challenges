<?php
  # Check form submitted.
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # Connect to the database.
    include('./connect_db.php');

    # Initialize an error array.
    $errors = array();

    # Check for name.
    if (empty($_POST['item_name'])) {
      $errors[] = 'Enter item name.';
    } else {
      $item_name = mysqli_real_escape_string($conn, trim($_POST['item_name']));
    }

    # Check for description.
    if (empty($_POST['item_desc'])) {
      $errors[] = 'Enter item description.';
    } else {
      $item_desc = mysqli_real_escape_string($conn, trim($_POST['item_desc']));
    }

    # Check for image.
    if (empty($_POST['item_image'])) {
      $errors[] = 'item image';
    } else {
      $item_image = mysqli_real_escape_string($conn, trim($_POST['item_image']));
    }

    # Check for price.
    if (empty($_POST['item_price'])) {
      $errors[] = 'item price';
    } else {
      $item_price = mysqli_real_escape_string($conn, trim($_POST['item_price']));
    }

    # On success data into items on database.
    if (empty($errors)) {
      $sql = "INSERT INTO items_view (item_name, item_desc, item_img, item_price)
      VALUES ('$item_name','$item_desc','$item_image', '$item_price')";
      $result = @mysqli_query($conn, $sql);
      if ($result) {
        header('location: ../CRUD_home.php');
        // echo '<div class="container my-5">
        //     <p>New record created successfully</p>
        //     <button class="btn btn-primary" name="Go Back" onclick="history.back()">Go Back</button>
        //   </div>';
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