<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance login</title>
    <!-- libs CSS Files -->
    <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="assets/libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
    <!-- <link href="assets/libs/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/libs/quill/quill.snow.css" rel="stylesheet"> -->
    <!-- <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet"> -->
    <!-- <link href="assets/libs/remixicon/remixicon.css" rel="stylesheet"> -->
    <!-- <link href="assets/libs/simple-datatables/style.css" rel="stylesheet"> -->
    <!-- <link href="assets/libs/data-table/dataTables.bootstrap5.min.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="lbg">
    <div id="" class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form action="php/login.php" method="POST" id="lg-form" class="border shadow p-3 rounded" style="width: 450px;">
            <div class="text-center">
               <h3 class="text-center">
                <strong> ROTARACT CLUB</strong>
                </h3>
                <h3 class="text-center">
                    Login
                </h3>
            </div>
            <div class="error form-control bg-danger">Error Message</div>
            <div class="mb-2">
                <label for="username" class="form-label text-light">Email</label>
                <input type="email" class="form-control bg-transparent" name="email" id="username">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label text-light">Password</label>
                <input type="password" class="form-control bg-transparent" name="password" id="password">
            </div>
            <button type="submit" name="submit" class="btn">Submit</button>

        </form>
    </div>
    




<!-- libs JS Files -->
<!-- <script src="assets/libs/apexcharts/apexcharts.min.js"></script> -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/libs/chart.js/chart.umd.js"></script> -->
    <!-- <script src="assets/libs/echarts/echarts.min.js"></script> -->
    <!-- <script src="assets/libs/quill/quill.min.js"></script> -->
    <!-- <script src="assets/libs/simple-datatables/simple-datatables.js"></script> -->
    <!-- <script src="assets/libs/tinymce/tinymce.min.js"></script> -->
    <!-- <script src="assets/libs/php-email-form/validate.js"></script> -->
    <!-- <script src="assets/libs/data-table/jquery-3.5.1.js"></script> -->
    <!-- <script src="assets/libs/data-table/dataTables.bootstrap5.min.js"></script> -->
    <!-- <script src="assets/libs/data-table/jquery.dataTables.min.js"></script> -->
    <!-- <script src="assets/libs/data-table/datatables.min.js"></script> -->


    <!-- Template Main JS File -->
    <!-- <script src="assets/js/dash.js"></script> -->
    <!-- <script>
    // datatables
    $('#example').DataTable();
    </script> -->
</body>
</html>