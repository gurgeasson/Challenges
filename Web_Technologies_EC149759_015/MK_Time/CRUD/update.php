<?php
    # Connect to the database.
    include ('../connect_db.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM items WHERE item_id = $id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

    # Close database connection.
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK Time - CRUD - Update</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <style></style>

</head>
<body>

    <?php include('./header.php') ?>
        
        <div class="container my-5">
            <h1>Update Product</h1>
            <form method="POST">
                <div class="form-group">
                    <label>Update Item ID</label>
                    <input type="text" name="item_id" class="form-control" value="<?php if (isset($_GET['id'])) echo $_GET['id']; ?>" readonly> 
                </div>
                <div class="form-group">
                    <label>Update Item Name</label>
                    <input type="text" name="item_name" class="form-control" value="<?php echo $row['item_name']; ?>">
                </div>
                <div class="form-group">
                    <label>Update Item Description</label>
                    <input type="text" name="item_desc" class="form-control" value="<?php echo $row['item_desc']; ?>">
                </div>
                <div class="form-group">
                    <label>Update Item Image</label>
                    <input type="text" name="item_image" class="form-control" value="<?php echo $row['item_img']; ?>">
                </div>
                <div class="form-group">
                    <label>Update Item Price</label>
                    <input type="text" name="item_price" class="form-control" value="<?php echo $row['item_price']; ?>">
                </div>

            <input class="btn btn-primary" type="submit" value="Update Record"></p>
            </form>
            <?php include('./_update.php') ?>
        </div> 
            
        <?php include('../footer.php') ?>
    
</body>
</html>