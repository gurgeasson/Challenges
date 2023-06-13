  <?php
    $pageTitle = 'Register';
    include('header.php');
  ?>

  <main>

    <div class="container my-5">
      <div class="row">
        <div class="col"></div>
        <div class="col">
          <h1>Register</h1>
          <form action="./includes/USER_register.inc.php" method="POST">
            <div class="form-group mb-3">
              <label for="firstName">First Name *</label>
              <input type="text" name="first_name" class="form-control" id="firstName" required placeholder="First Name">
            </div>
            <div class="form-group mb-3">
              <label for="lastName">Last Name *</label>
              <input type="text" name="last_name" class="form-control" id="lastNname" required placeholder="Last Name">
            </div>
            <div class="form-group mb-3">
              <label for="email">Email address *</label>
              <input type="email" name="email" class="form-control" id="email" required placeholder="email@example.co.uk">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mb-3">
              <label for="newPassword">Create New Password *</label>
              <input type="password" name="newPasswd" class="form-control" id="newPassword" required placeholder="Create New Password">
            </div>
            <div class="form-group mb-3">
              <label for="confPassword">Confirm Password *</label>
              <input type="password" name="confPasswd" class="form-control" id="confPassword" required placeholder="Confirm Password">
            </div>
            <small id="T&CHelp" class="form-text text-muted">By creating an account, you agree to our <a href="#">terms of use</a> and <a href="#">privacy policy.</a><br></small>
            <div class="form-group mb-3 d-grid gap-2">
              <button type="submit" class="btn btn-primary">Create Account Now</button>
            </div>
          </form>
        </div>
        <div class="col"></div>
      </div>

      <?php # include('./includes/USER_register.inc.php') ?>

    </div>

  </main>

  <?php include('./footer.php') ?>