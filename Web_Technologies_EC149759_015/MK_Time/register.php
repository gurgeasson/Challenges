<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MK Time - Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <style></style>

</head>

<body>

  <?php include('header.php') ?>

  <main>

    <div class="container my-5">
      <div class="row">
        <div class="col">
        </div>
        <div class="col">
          <h1>Register</h1>
          <form>
            <div class="mb-3">
              <label for="fname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="fname">
            </div>
            <div class="mb-3">
              <label for="lname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lname">
            </div>
            <div class="mb-3">
              <label for="InputEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="InputEmail">
            </div>
            <div class="mb-3">
              <label for="InputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="InputPassword">
            </div>
            <div class="mb-3">
              <label for="ConfirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="ConfirmPassword">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
        </div>
        <div class="col">
        </div>
      </div>
    </div>

  </main>

  <?php include('footer.php') ?>

</body>

</html>