<?php
  include "./includes/connect_db.php";
  $sql = "SELECT * FROM items_view";
  $result = @mysqli_query ($conn, $sql);
  if (mysqli_num_rows($result) != 0 )

  while($row = mysqli_fetch_assoc($result)) {
    echo '<tr>
    <th scope="row">'.$row['item_id'].' </td>
    <td>'.$row['item_name'].' </td>
    <td>'.$row['item_desc'].'</td>
    <td><img src="./images/'.$row['item_img'].'" class="img-thumbnail" alt="'.$row['item_name'].'" width="150px" height="150px"></td>
    <td>'.$row['item_price'].'</td>
    <td><a class="btn btn-danger" href="./includes/CRUD_delete.inc.php?id='.$row['item_id'].'" role="button">Delete</a>
      <a class="btn btn-primary" href="./CRUD_update.php?id='.$row['item_id'].'" role="button">Update</a>
    </td>
    ';
  }

  # Close database connection.
  mysqli_close($conn);