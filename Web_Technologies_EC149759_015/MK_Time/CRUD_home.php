  <?php
    $CRUD = TRUE;
    $pageTitle = 'CRUD Home';
    include('./header.php');
  ?>

  <div class="container my-5">
    <h1>Products List</h1>
    <a class="btn btn-primary" href="./CRUD_create.php" role="button">Create new Product</a>
    <table class="table table-striped align-middle">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Price</th>
        <th></th>
      </tr>

    <?php include('./includes/CRUD_read.inc.php'); ?>
    </table>
  </div>

  <?php include('./footer.php'); ?>