<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK Time - CRUD - Read</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <style></style>
    
</head>
<body>

    <?php include('./header.php') ?>

    <div class="container my-5">
        <h1>Products List</h1>
        <a class="btn btn-primary" href="./new_product.php" role="button">Create new Product</a>
        <table class="table table-striped align-middle">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th></th>
            </tr>

        <?php include('./_read.php') ?>
        </table>
    </div>

    <?php include('../footer.php') ?>

</body>
</html>