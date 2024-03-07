<!-- 
<?php
session_start();
include 'php/config.php';
if (isset($_POST['logmeout'])) {

  header("Location: index.php");
  session_unset();
  session_destroy();
  $_SESSION['login'] = false;
}
$id = $_SESSION['id'];
// echo $id;exit;
$sql = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_num_rows($sql);
if ($row > 0) {
  while ($row = mysqli_fetch_array($sql)) {

?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rotary International</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- libs CSS Files -->
    <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/libs/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- <link href="assets/libs/quill/quill.snow.css" rel="stylesheet"> -->
    <!-- <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet"> -->
    <link href="assets/libs/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/libs/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/libs/data-table/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="assets/libs/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <!-- <link href="assets/css/dash.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./assets/css/adminlte.css">

    <!-- =======================================================
  * Template Name: Rotery Internation Dashboard
  * Author: Ashraf K.
  ======================================================== -->
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="./assets/img/lbg.jpg" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="dashboard.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="post" class="dropdown-item d-flex align-items-center">
                        <button type="submit" class="logout_btn btn btn-sm btn-danger" name="logmeout">
                            <i class="bi bi-box-arrow-right"></i>
                            Sign Out
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link d-flex justify-content-space-between align-items-center py-1">
                <img src="./assets/img/images.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <div class="w-75 ">
                    <span class="brand-text font-weight-light">Rotary club</span>
                    <span class="brand-text font-weight-light">
                        <h6>Sai Pali</h6>
                    </span>

                </div>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-1 mb-3 d-flex">
                    <div class="image">
                        <img src="./assets/img/pf1.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="profile.php" class="d-block">Ashraf K.</a>
                    </div>
                </div>
                <!-- ===========================End user panel section====================== -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="members.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Members
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="projects.php" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Projects
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                    <span class="badge badge-info right">6</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tickets.php" class="nav-link">
                                <i class="nav-icon fas fa-ticket"></i>
                                <p>
                                    Tickets
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="trasurery.php" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Trasurery
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Others
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Events</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Attendance Table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vistore Table</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- ===========================End side nav menu section====================== -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Rotary <span>Details</span></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- ==========End of content-header ============= -->


            <!-- ===========card board section=================== -->
            <div class="card-body pt-3" bis_skin_checked="1">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
      
                  <li class="nav-item" role="presentation">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#overview" aria-selected="true" role="tab">Overview</button>
                  </li>
      
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#attendance" aria-selected="false" tabindex="-1" role="tab">Attendance</button>
                  </li>
      
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#registor_new_member" aria-selected="false" tabindex="-1" role="tab">Registor New Member</button>
                  </li>
      
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#settings" aria-selected="false" tabindex="-1" role="tab">Settings</button>
                  </li>
      
              </ul>
              <!-- ========================================End of button section================================= -->
              <div class="tab-content pt-2" bis_skin_checked="1">
      
                <div class="tab-pane fade show active profile-overview" id="overview" role="tabpanel" bis_skin_checked="1">
                    <!-- over veiw section -->

                </div>
                <!-- ===========================End overview section=========================================== -->
                <div class="tab-pane fade profile-edit pt-3" id="attendance" role="tabpanel" bis_skin_checked="1">

                </div>
                <!-- ===========================End attendence section=========================================== -->
                <div class="tab-pane fade pt-3" id="registor_new_member" role="tabpanel" bis_skin_checked="1">
    
                    <!-- Registratiion Form -->
                    <!-- ===========================End registration Form=========================================== -->
    
                </div>
                <!-- ===========================End registration section=========================================== -->
                <div class="tab-pane fade pt-3" id="settings" role="tabpanel" bis_skin_checked="1">
                    <!-- settings -->
                    <!-- End settings -->
    
                </div>
      
              </div>
              <!-- ============================================End Bordered Tabs========================================== -->
      
            </div>
          <!-- ==============end of card board section ============= -->
        </div>
        <!-- =========End Of the content-wrapper ============ -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- <?php

        }
        } ?> -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023-2027 <a href="#">Rotary International</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Designed by</b> Ashraf K.
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/data-table/jquery-3.5.1.js"></script>
    <script src="assets/libs/data-table/dataTables.bootstrap5.min.js"></script>
    <script src="assets/libs/data-table/jquery.dataTables.min.js"></script>
    <script src="assets/libs/data-table/datatables.min.js"></script>
    <script src="assets/libs/chart/apexchart/apexcharts.min.js"></script>
    <script src="assets/libs/chart/apexchart/chart-data.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/dash.js"></script>
    <script src="./assets/js/adminlte.js"></script>
    <script>
        // datatables
        $('#example').DataTable();
    </script>

</body>

</html>