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
        <div class="d-flex justify-content-between align-items-center">
          <div class="breadcrumb">
            <h1 class="mr-2">Admin</h1>
            <ul>
              <li>Listings</li>
              <li>Categories</li>
              <li>All</li>
            </ul>
          </div>
          <a href="/admin/listing/category/create.php" class="btn btn-primary d-flex align-items-center">
            <span class="mr-2">Add new</span>
            <i class="i-Add"></i>
          </a>
        </div>

        <div class="separator-breadcrumb border-top"></div>

        <div class="table-responsive">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Date</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Watch</td>
                <td>12-10-2019</td>
                <td>$30</td>
                <td><span class="badge badge-success">Delivered</span></td>
                <td><a class="text-success mr-2" href="#"><i
                      class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i
                      class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Iphone</td>
                <td>23-10-2019</td>
                <td>$300</td>
                <td><span class="badge badge-info">Pending</span></td>
                <td><a class="text-success mr-2" href="#"><i
                      class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i
                      class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Watch</td>
                <td>12-10-2019</td>
                <td>$30</td>
                <td><span class="badge badge-warning">Not Delivered</span></td>
                <td><a class="text-success mr-2" href="#"><i
                      class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i
                      class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
              </tr>
            </tbody>
          </table>
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