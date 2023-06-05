  <?php include('./CRUD_header.php') ?>

  <main>

    <div class="container my-5">
      <div class="row">
        <!-- <div class="col"></div> -->
        <div class="col">
          <h1>Create New Product</h1>
          <form action="./includes/CRUD_create.inc.php" method="POST">
            <div class="form-group mb-3">
              <label for="it_name">Name</label>
              <input type="text" name="item_name" class="form-control" id="it_name" required placeholder="Item Name">
            </div>
            <div class="form-group mb-3">
              <label for="it_desc">Description</label>
              <input type="text" name="item_desc" class="form-control" id="it_desc" required placeholder="Item Description">
            </div>
            <div class="form-group mb-3">
              <label for="it_img">Image</label>
              <input type="text" name="item_image" class="form-control" id="it_img" required placeholder="Item Image">
            </div>
            <div class="form-group mb-3">
              <label for="it_price">Price</label>
              <input type="number" step="0.01" name="item_price" class="form-control" id="it_price" required placeholder="Item Price">
            </div>
            <div class="form-group mb-3 d-grid gap-2">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          </form>
        </div>
        <!-- <div class="col"></div> -->
      </div>

    <?php # include('./includes/_create.php') ?>
    
    </div>

  </main>

  <?php include('./footer.php') ?>