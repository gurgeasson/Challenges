<?php
  include "./connect_db.php";
  $sql = "SELECT * FROM items";
  $result = @mysqli_query ($link, $sql);
  // if (mysqli_num_rows($result) != 0 )

  if($result) {
    $row = mysqli_fetch_assoc($result);
    echo $row['item_name'];
  }

// <div class="col">
//   <div class="card mb-4 rounded-3 shadow-sm">
//     <div class="card-header py-3">
//       <h4 class="my-0 fw-normal">Classic Round></h4>
//     </div>
//     <div class="card-body">
//       <img src="./images/joshua-fuller-P3Fh6ya5evI-unsplash-small.jpg" alt="" style="width:128px;height:128px;">
//       <h1 class="card-title pricing-card-title">£600.00<small class="text-muted fw-light"></small></h1>
//       <button type="button" class="w-100 btn btn-lg btn-outline-primary">Enquire Now</button>
//     </div>
//   </div>
// </div>

  // while($row = mysqli_fetch_assoc($result)) {
  //   echo '<tr>
  //   <th scope="row">'.$row['item_id'].' </td>
  //   <td>'.$row['item_name'].' </td>
  //   <td>'.$row['item_desc'].'</td>
  //   <td><img src="../images/'.$row['item_img'].'" class="img-thumbnail" alt="'.$row['item_name'].'" width="150px" height="150px"></td>
  //   <td>'.$row['item_price'].'</td>
  //   <td><a class="btn btn-danger" href="_delete.php?id='.$row['item_id'].'" role="button">Delete</a>
  //     <a class="btn btn-primary" href="update.php?id='.$row['item_id'].'" role="button">Update</a>
  //   </td>
  //   ';
  // }

  # Close database connection.
  mysqli_close($link);
?>