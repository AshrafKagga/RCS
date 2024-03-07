<!-- 
<?php
session_start();
include 'php/config.php';
if(isset($_POST['logmeout'])){
    header('location: index.php');
    session_unset();
    session_destroy();
    $_SESSION['login']= false;
}
$id = $_SESSION['id'];
// echo $id;exit;
$sql = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
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
    <link href="assets/libs/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/libs/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/libs/data-table/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="assets/libs/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
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
                <div class="user-panel mt-3 pb-1 mb-3 d-flex active">
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
                            <a href="events.php" class="nav-link">
                                <i class="nav-icon bi bi-calendar-event"></i>
                                <p>
                                    Events
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                    <span class="badge badge-info right">2</span>
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
                                    <i class="fas fa-angle-left right"></i>
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
                                    <a href="events.php" class="nav-link">
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
                        <h1>Profile</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item">Users</li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </nav>
                        <!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <main id="main" class="main container">
                <section class="section profile">
                    <div class="row">
                        <div class="col-xl-4">

                            <div class="card">
                                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                    <img src="<?php echo $row['profilepic'];?>" alt="Profile"
                                        class="rounded-circle">
                                    <h2><?php echo $row['name']; ?></h2>
                                    <h3><?php echo $row['position']; ?></h3>
                                    <div class="social-links mt-2">
                                        <a href="<?php echo $row['twitter']; ?>" class="twitter"><i
                                                class="bi bi-twitter"></i></a>
                                        <a href="<?php echo $row['facebook']; ?>" class="facebook"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="<?php echo $row['Instagram']; ?>" class="instagram"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="<?php echo $row['linkedin']; ?>" class="linkedin"><i
                                                class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-8">

                            <div class="card">
                                <div class="card-body pt-3">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">

                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#profile-overview">Overview</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                                Profile</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab"
                                                data-bs-target="#profile-settings">Settings</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab"
                                                data-bs-target="#profile-change-password">Change Password</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content pt-2">

                                        <div class="tab-pane fade show active rprofile-overview" id="profile-overview">
                                            <h5 class="cards-title">About</h5>
                                            <p class="small fst-italic"><?php echo $row['about']; ?></p>

                                            <h5 class="cards-title">Profile Details</h5>

                                            <div class="row my-2">
                                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                                <div class="col-lg-9 col-md-8"><?php echo $row['name']; ?></div>
                                            </div>

                                            <div class="row my-2">
                                                <div class="col-lg-3 col-md-4 label">Company</div>
                                                <div class="col-lg-9 col-md-8" disabled>Professional Recruitment Company</div>
                                            </div>

                                            <div class="row my-2">
                                                <div class="col-lg-3 col-md-4 label">Position</div>
                                                <div class="col-lg-9 col-md-8"><?php echo $row['position']; ?></div>
                                            </div>

                                            <div class="row my-2">
                                                <div class="col-lg-3 col-md-4 label">Country</div>
                                                <div class="col-lg-9 col-md-8"><?php echo $row['country']; ?></div>
                                            </div>

                                            <div class="row my-2">
                                                <div class="col-lg-3 col-md-4 label">Address</div>
                                                <div class="col-lg-9 col-md-8"><?php echo $row['address']; ?></div>
                                            </div>

                                            <div class="row my-2">
                                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                                <div class="col-lg-9 col-md-8"><?php echo $row['contact']; ?></div>
                                            </div>

                                            <div class="row my-2">
                                                <div class="col-lg-3 col-md-4 label">Email</div>
                                                <div class="col-lg-9 col-md-8"><?php echo $row['email']; ?></div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                            <!-- php section -->
                                            <!-- End of php section -->
                                                <div class="row mb-3">
                                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                                        Image</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <img src="<?php echo $row['profilepic'];?>"
                                                            alt="Profile">
                                                        <div class="pt-2">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal" title="Upload new profile image">
                                                                <i class="bi bi-upload"></i>
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                <form method="POST" enctype="multipart/form-data">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                                Change Profile Picture</h1>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <input type="hidden" name="oldpic" value="<?php echo $row['profilepic']; ?>">
                                                                            <div class="form-group">
                                                                            <img src="<?php echo $row['profilepic'];?>" width="120" height="120" alt="">
                                                                            </div>
                                                                            <div class="form-group">
                                                                            <input type="file" class="form-control" name="profilepic"  required="true">
                                                                            <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary" name="img">Save
                                                                                changes</button>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="btn btn-danger btn-sm"
                                                                title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full
                                                        Name</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="name" type="text" class="form-control" id="fullName"
                                                            value="<?php echo $row['name'];?>" require="true">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="about" class="form-control" id="about"
                                                            value="<?php echo $row['about'];?>">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="company"
                                                        class="col-md-4 col-lg-3 col-form-label">Company</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="company" type="text" class="form-control" id="company"
                                                            value="Professional Recruitment Company" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Position</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="position" type="text" class="form-control" id="Job"
                                                            value="<?php echo $row['position'];?>" required="true">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Country"
                                                        class="col-md-4 col-lg-3 col-form-label">Country</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="country" type="text" class="form-control" id="Country"
                                                            value="<?php echo $row['country'];?>" required="true">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Address"
                                                        class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="address" type="text" class="form-control" id="Address"
                                                            value="<?php echo $row['address'];?>" required="true">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="contact" type="text" class="form-control" id="Phone"
                                                            value="<?php echo $row['contact'];?>" required="true"
                                                            maxlength="10">
                                                        <!-- <input name="contact" type="text" class="form-control" id="Phone" value="<?php echo $row['contact'];?>" required="true"  maxlength="10" pattern="[0-9]+"> -->
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="email" type="email" class="form-control" id="Email"
                                                            value="<?php echo $row['email'];?>" required="true">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter
                                                        Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="twitter" type="text" class="form-control" id="Twitter"
                                                            value="<?php echo $row['twitter'];?>" required="true">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook
                                                        Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="facebook" type="text" class="form-control" id="Facebook"
                                                            value="<?php echo $row['facebook'];?>" required="true">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram
                                                        Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="Instagram" type="text" class="form-control" id="Instagram"
                                                            value="<?php echo $row['Instagram'];?>" required="true">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin
                                                        Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="linkedin" type="text" class="form-control" id="Linkedin"
                                                            value="<?php echo $row['linkedin'];?>" required="true">
                                                    </div>
                                                </div>


                                                <div class="text-center">
                                                    <button type="submit" name="update" class="btn btn-primary">Save
                                                        Changes</button>
                                                </div>
                                            </form><!-- End Profile Edit Form -->

                                        </div>

                                        <div class="tab-pane fade pt-3" id="profile-settings">

                                            <!-- Settings Form -->
                                            <form action="php/profile.php" method="post">

                                                <div class="row mb-3">
                                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                                        Notifications</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="changesMade"
                                                                checked>
                                                            <label class="form-check-label" for="changesMade">
                                                                Changes made to your account
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="newProducts"
                                                                checked>
                                                            <label class="form-check-label" for="newProducts">
                                                                Information on new products and services
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="proOffers">
                                                            <label class="form-check-label" for="proOffers">
                                                                Marketing and promo offers
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="securityNotify"
                                                                checked disabled>
                                                            <label class="form-check-label" for="securityNotify">
                                                                Security alerts
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="changes" name="update" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form><!-- End settings Form -->

                                        </div>

                                        <div class="tab-pane fade pt-3" id="profile-change-password">
                                            <!-- Change Password Form -->
                                            <form method=post action=php/password.php>

                                                <div class="row mb-3">
                                                    <label for="currentPassword"
                                                        class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="currentpassword" type="password" class="form-control"
                                                            id="currentPassword" required=true>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                        Password</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="npassword" type="password" class="form-control"
                                                            id="newPassword" required=true>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                        New Password</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="cpassword" type="password" class="form-control"
                                                            id="renewPassword" required=true>
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="changep" class="btn btn-primary" name="changep">Change
                                                        Password</button>
                                                </div>
                                            </form><!-- End Change Password Form -->

                                        </div>

                                    </div><!-- End Bordered Tabs -->

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </main><!-- End #main -->
            
            <!-- ======================End Of Main Section ============================ -->
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
            <strong>Copyright &copy; 2023-2027 Rotary International.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Designed by</b><a href="#"> Ashraf K.</a>
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