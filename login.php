<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login-Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

  <div class="login py-5">
    <div class="container">
      <div class="row">
        <div class="d-flex justify-content-center align-items-center vh-100">
          <div class="col-6">
            <div class="card border-0">
              <div class="card-header bg-secondary">
                <h3 class="text-center mb-4">Login</h3>
              </div>
              <div class="card-body">
                <form action="login" method="post">
                  <div class="mb-3">
                    <label for="email" class="form-label text-dark">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label text-dark">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input text-dark" id="remember" name="remember">
                    <label class="form-check-label text-dark" for="remember">Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-dark px-4 my-3">Login</button>
                </form>
              </div>
              <div class="card-footer bg-secondary">
                <p class="mt-3">Don't have an account? <a href="/register.php" class="text-white">Register Here</a></p>
              </div>
            </div>
            <div class="home-page text-center mt-3">
              <a class="text-decoration-none" href="/index.php">
                <i class="bi bi-arrow-left"></i> Back to Home
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>