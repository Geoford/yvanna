<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yskah Creation - Home</title>
    <link rel="stylesheet" href="css\bootstrap.min.css" />
    <script defer src="js\bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container">
      <div class="wrapper bg-white">
        <h2 class="mb-4">Log in</h2>
        <form action="login.php" method="post">
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control"
              id="username"
              name="username"
              placeholder="password"
            />
            <label for="username" class="form-label text-secondary"
              >Username</label
            >
          </div>
          <div class="form-floating mb-3">
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              placeholder="password"
            />
            <label for="password" class="form-label text-secondary"
              >Password</label
            >
          </div>

          <div
            class="d-flex flex-row justify-content-between align-items-center"
          >
            <div class="">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
            <div class="">
              <h6 class="text-secondary">
                Don't have an account?
                <a class="text-decoration-none" href="registration_form.php">Sign up</a>
              </h6>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>