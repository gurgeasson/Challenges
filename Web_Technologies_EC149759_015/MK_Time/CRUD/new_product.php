<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK Time - CRUD - Create</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <style></style>

</head>
<body>

    <?php include('./header.php') ?>

        <div class="container my-5">
            <h1>Create New Product</h1>
            <form method="POST" >
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="item_name" class="form-control" placeholder="Item Name">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" name="item_desc" class="form-control" placeholder="Item Description">
                </div>
                <div class="form-group">
                    <label>Image:</label>
                    <input type="text" name="item_image" class="form-control" placeholder="Item Image">
                </div>
                <div class="form-group">
                    <label>Price:</label>
                    <input type="text" name="item_price" class="form-control" placeholder="Item Price">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>

        <?php include('./_create.php') ?>
        
        </div>

    <?php include('../footer.php') ?>
    
</body>
</html>