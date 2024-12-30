<!DOCTYPE html>
<html lang="en" dir="">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>Dashboard | Travel Booking</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
  <link href="/assets/css/themes/lite-purple.min.css" rel="stylesheet" />
  <link href="/assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
</head>

<body class="text-left">
  <div class="app-admin-wrap layout-sidebar-large">
    <!-- header -->
    <?php require_once 'header.php'; ?>

    <!-- sidebar -->
    <?php require_once 'sidebar.php'; ?>

    <div class="main-content-wrap sidenav-open d-flex flex-column">
      <div class="main-content">
        <div class="breadcrumb">
          <h1 class="mr-2">Admin</h1>
          <ul>
            <li>Dashboard</li>
            <li>Version 1</li>
          </ul>
        </div>

        <div class="separator-breadcrumb border-top"></div>

        <div class="card">
          <div class="card-body">
            <h2>Site settings</h2>
          </div>
        </div>
      </div>

      <div class="flex-grow-1"></div>

      <!-- footer -->
      <?php require_once 'footer.php'; ?>

    </div>
  </div>

  <!-- search -->
  <?php require_once 'search.php'; ?>

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