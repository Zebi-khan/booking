<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home-Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

  <!-- Topbar -->
  <div class="topbar py-3">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <ul class="list-unstyled m-0 d-flex align-items-center">
            <li class="d-flex align-items-center me-4">
              <i class="me-2"><img src="assets/images/map2.png" alt="Location" width="24"></i>
              <p class="m-0 text-white">111 road abc</p>
            </li>
            <li class="d-flex align-items-center me-4">
              <i class="me-2"><img src="assets/images/call2.png" alt="Phone No" width="24"></i>
              <a href="tel:(123) 683-5900" class="text-decoration-none text-white">(123) 683-5900</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="me-2"><img src="assets/images/mail2.png" alt="Email" width="24"></i>
              <a href="email:info@booking.cc" class="text-decoration-none text-white">info@booking.cc</a>
            </li>
          </ul>
        </div>
        <div class="col-4">
          <div class="custom d-flex justify-content-end">
            <a href="/register.php" class="btn btn-light border-0 rounded-0 me-4">Register</a>
            <a href="/login.php" class="btn btn-light border-0 rounded-0 px-3">Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg header">
      <div class="container">
        <img src="/assets/images/logo.png" alt="logo" height="70">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link me-3" href="/">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link me-3" href="hotel.php">Hotels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="#">Restaurants</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="#">Flights</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="#">Car Rentals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="#">Activities</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>