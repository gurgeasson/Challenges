<?php
  $pageTitle = 'Add to Basket';
  include('./header.php');
?>


<main>

  <div class="container my-5">
    <div class="row">
      <div class="col"></div>
      <div class="col">
        <?php

          if (isset($_GET['id'])) { $id = $_GET['id']; }

          require ('./includes/connect_db.php');

          $sql = "SELECT * FROM items_view WHERE item_id = $id";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if (isset($SESSION['basket'][$id])) {
              $_SESSION['basket'][$id]['quantity']++;
              echo ($row["item_name"] . ' ' . 'has been added');
            }
            else {
              $_SESSION['basket'][$id] = array ('quantity' => 1, 'price');
              echo ($row["item_name"] . ' ' . 'has been added');
            }
          }

            // echo '<div class="container">' . $_SESSION['user_id'] . ' ' . $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] . '</div>';

          mysqli_close($conn);

        ?>
      </div>
      <div class="col"></div>
    </div>
  </div>

</main>

<?php include('./footer.php'); ?>