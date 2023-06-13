<?php
  require ('connect_db.php');


  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
      foreach ($_POST['qty'] as $item_id => $item_qty)
    {
      $id = (int) $item_id;
      $qty = (int) $item_qty;
      if ( $qty == 0 ) { unset ($_SESSION['basket'][$id]); } 
      elseif ( $qty > 0 ) { $_SESSION['basket'][$id]['quantity'] = $qty; }
    }
  }
  $total = 0;

  if (!empty($_SESSION['basket'])) {
    require ('connect_db.php');
    // $sql = "SELECT * FROM items_view WHERE item_id IN (1,2,3) ORDER BY item_id ASC;"
    $sql = "SELECT * FROM items_view WHERE item_id IN (";
      foreach ($_SESSION['basket'] as $id => $value) {
        $sql .= $id . ",";
      }
      $sql = substr($sql, 0, -1) . ") ORDER BY item_id ASC";
    $result = mysqli_query ($conn, $sql);

    echo '<form action="basket.php" method="post">
      <table class="table">
        <thead>
          <tr><th>Items in your basket</th></tr>
        </thead>
        <tbody>
          <tr>';
            while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
              $subtotal=$_SESSION['basket'][$row['item_id']]['quantity'] * $row['item_price'];
              // $_SESSION['basket'][$row['item_id']]['price'];
              $total += $subtotal;
              echo "<tr>  
                <td> {$row['item_name']} </td> 
                <td> <input type=\"text\" size=\"3\" name=\"qty[{$row['item_id']}]\" value=\"{$_SESSION['basket'][$row['item_id']]['quantity']}\"> </td>
                <td>@ {$row['item_price']} = </td> 
                <td> &pound ".number_format ($subtotal, 2)."</td>
              </tr>";
            }
          mysqli_close($conn);
          echo '<tr><td>Total = &pound '.number_format($total,2).'</td></tr>
          <tr><td><input type="submit" name="submit" value="Update My Basket"></td></tr>
          <td><a href="checkout.php?total='.$total.' ">Checkout Now</a></td>
    </table>Update
    </form>';
  }
  else { echo '<p>Your basket is currently empty.</p>'; }

?>