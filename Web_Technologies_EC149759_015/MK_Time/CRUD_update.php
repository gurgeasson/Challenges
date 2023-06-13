<?php
  # Connect to the database.
  include ('./includes/connect_db.php');

  $id = $_GET['id'];
  $sql = "SELECT * FROM items_view WHERE item_id = $id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  # Close database connection.
  mysqli_close($conn);
?>

  <?php
    $CRUD = TRUE;
    $pageTitle = 'CRUD Update';
    include('./header.php');
  ?>

  <div class="container my-5">
    <h1>Update Product</h1>
    <form method="POST">
      <div class="form-group mb-3">
        <label>Update Item ID</label>
        <input type="text" name="item_id" class="form-control" value="<?php if (isset($_GET['id'])) echo $_GET['id']; ?>" readonly> 
      </div>
      <div class="form-group mb-3">
        <label>Update Item Name</label>
        <input type="text" name="item_name" class="form-control" required value="<?php echo $row['item_name']; ?>">
      </div>
      <div class="form-group mb-3">
        <label>Update Item Description</label>
        <input type="text" name="item_desc" class="form-control" required value="<?php echo $row['item_desc']; ?>">
      </div>
      <div class="form-group mb-3">
        <label>Update Item Image</label>
        <input type="text" name="item_image" class="form-control" required value="<?php echo $row['item_img']; ?>">
      </div>
      <div class="form-group mb-3">
        <label>Update Item Price</label>
        <input type="text" name="item_price" class="form-control" required value="<?php echo $row['item_price']; ?>">
      </div>
      <div class="form-group mb-3 d-grid gap-2">
        <input class="btn btn-primary" type="submit" value="Update Record"></p>
      </div>
    </form>
    <?php include('./includes/CRUD_update.inc.php') ?>
  </div> 
      
  <?php include('./footer.php') ?>