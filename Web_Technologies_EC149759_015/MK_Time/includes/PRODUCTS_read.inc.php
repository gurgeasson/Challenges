<?php
  include "./includes/connect_db.php";
  $sql = "SELECT * FROM items_view";
  $result = @mysqli_query ($conn, $sql);
  if (mysqli_num_rows($result) != 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo '
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">'.$row['item_name'].'</h4>
            </div>
            <div class="card-body">
              <img src="./images/'.$row['item_img'].'" alt="" style="width:128px;height:128px;">
              <h1 class="card-title pricing-card-title">&pound'.$row['item_price'].'</h1>
              <p class="card-text">'.$row['item_desc'].'</p>
              <a class="w-100 btn btn-lg btn-outline-primary" href="./basket_add.php?id='.$row['item_id'].'" role="button">Add to Basket</a>
            </div>
          </div>
        </div>
        ';
    }
  }

  # Close database connection.
  mysqli_close($conn);