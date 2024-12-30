<!DOCTYPE html>
<html lang="en" dir="">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>Categories | Travel Booking</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
  <link href="/assets/css/themes/lite-purple.min.css" rel="stylesheet" />
  <link href="/assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
</head>

<body class="text-left">
  <div class="app-admin-wrap layout-sidebar-large">
    <!-- header -->
    <?php require_once '../../header.php'; ?>

    <!-- sidebar -->
    <?php require_once '../../sidebar.php'; ?>

    <div class="main-content-wrap sidenav-open d-flex flex-column">
      <div class="main-content">
        <div class="breadcrumb">
          <h1 class="mr-2">Admin</h1>
          <ul>
            <li>Listings</li>
            <li>Category</li>
            <li>Edit</li>
          </ul>

          <a href="/admin/listing/type/create.php"></a>
        </div>

        <div class="separator-breadcrumb border-top"></div>

        <div class="card">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="firstName1">First name</label>
                  <input class="form-control" id="firstName1" type="text" placeholder="Enter your first name" />
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="lastName1">Last name</label>
                  <input class="form-control" id="lastName1" type="text" placeholder="Enter your last name" />
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="exampleInputEmail1">Email address</label>
                  <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Enter email" />
                  <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="phone">Phone</label>
                  <input class="form-control" id="phone" placeholder="Enter phone" />
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="credit1">Cradit card number</label>
                  <input class="form-control" id="credit1" placeholder="Card" />
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="website">Website</label>
                  <input class="form-control" id="website" placeholder="Web address" />
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="picker2">Birth date</label>
                  <input class="form-control" id="picker2" placeholder="yyyy-mm-dd" name="dp" />
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="picker1">Select</label>
                  <select class="form-control">
                    <option>Option 1</option>
                    <option>Option 1</option>
                    <option>Option 1</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="flex-grow-1"></div>

      <!-- footer -->
      <?php require_once '../../footer.php'; ?>

    </div>
  </div>

  <!-- search -->
  <?php require_once '../../search.php'; ?>

  <script src="/assets/js/plugins/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/plugins/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/js/scripts/script.min.js"></script>
  <script src="/assets/js/scripts/sidebar.large.script.min.js"></script>
  <script src="/assets/js/plugins/echarts.min.js"></script>
  <script src="/assets/js/scripts/echart.options.min.js"></script>
  <script src="/assets/js/scripts/dashboard.v1.script.min.js"></script>
</body>

</html>