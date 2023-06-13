  <?php
    $pageTitle = 'Login';
    include('header.php');
  ?>

  <main>

    <div class="container my-5">
      <div class="row">
        <div class="col"></div>
        <div class="col">
          <h1>Sign in</h1>
          <form action="./includes/USER_login.inc.php" method="post">
            <div class="form-group mb-3">
              <label for="inputEmail" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="inputEmail" required>
            </div>
            <div class="form-group mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" name="passwd" class="form-control" id="inputPassword" required>
            </div>
            <div class="form-group mb-3 d-grid gap-2">
              <input type="submit" class="btn btn-primary" value="Login">
            </div>
          </form>
        </div>
        <div class="col"></div>
      </div>
    </div>

  </main>

  <?php include('./footer.php') ?>