<?php session_start(); ?>
<?php if (!isset($CRUD)) {$CRUD = FALSE;} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MK Time - <?php echo $pageTitle ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

  <style></style>

</head>
<body>

<!-- HEADER -->
<header class="p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="./index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img class="me-2" width="124" height="32" src="./Logos/MK_T_logo.png" />
      </a>

      <?php
        if (!$CRUD) {
          echo '
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="./index.php" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="./products.php" class="nav-link px-2 text-white">Products</a></li>
            <li><a href="./about.php" class="nav-link px-2 text-white">About</a></li>
          </ul>
          ';
        }

        else {
          echo '
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="./CRUD_create.php" class="nav-link px-2 text-white">Create</a></li>
            <li><a href="./CRUD_home.php" class="nav-link px-2 text-white">Read</a></li>
          </ul>';
        }
      ?>

      <div class="text-end">
        <?php
          if (!isset($_SESSION['user_id'])) {
            echo '<a class="btn btn-outline-light me-2" href="./USER_login.php" role="button">Login</a>
            <a class="btn btn-warning" href="./USER_register.php">Sign-up</a>';
          }
          else {
            echo '<a class="btn btn-outline-light me-2" href="./includes/USER_logout.inc.php" role="button">Logout</a>
            <a class="btn btn-warning" href="./basket.php">Basket</a>';
          }
        ?>
      </div>
    </div>
  </div>
</header>
<!-- HEADER END -->