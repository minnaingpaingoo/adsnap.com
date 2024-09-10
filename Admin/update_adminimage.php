<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<?php
error_reporting(0);

if (strlen($_SESSION['loginstatus'] == 0)) {
    header('location:logout.php');
} else {
    $id = intval($_GET['id']); // admin id
    if (isset($_POST['submit'])) {
        $cn = mysqli_connect("localhost", "root", "", "adsnap");

        $target_dir = "profileimages/";
        $productimage1 = $_FILES["productimage1"]["name"];
        $target_file = $target_dir . basename($productimage1);


        $adminid = $_SESSION['aid'];
      

        move_uploaded_file($_FILES["productimage1"]["tmp_name"], "profileimages/" . $_FILES["productimage1"]["name"]);
        $sql = "update admin set Picture='" . basename($productimage1) . "' where AdminId='" . $id . "'";
        mysqli_query($cn, $sql);
        mysqli_close($cn);
        echo "<script>alert('Photo Update');</script>";
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Admin - Update Profile Image</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- DataTable search and look entries -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <!-- Sidebar Start -->

            <?php include('includes/sidebar.php'); ?>

            <!-- Sidebar End -->

            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->

                <?php include('includes/navbar.php'); ?>

                <!-- Navbar End -->

                <!-- Admin Profile Start -->
                <div class="container-fluid pt-4 px-4">
                    <!-- Row -->
                    <div class="row">
                        <!-- Datatables -->
                        <!-- DataTable with Hover -->
                        <div class="col-lg-12">
                            <div class="card mb-4 bg-secondary rounded h-100 p-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h3 class="mb-0 text-gray-800">Update Admin Profile Image</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data">
                                        <?php
                                        $aid = $_SESSION['aid'];
                                        $cn = mysqli_connect("localhost", "root", "", "adsnap");
                                        $s = "select * from admin where AdminId='" . $aid . "'";
                                        $result = mysqli_query($cn, $s);
                                        $r = mysqli_num_rows($result);
                                        while ($data = mysqli_fetch_array($result)) {
                                        ?>
                                            <div class="control-group">
                                                <label class="control-label mb-2" for="basicinput">Name</label>
                                                <div class="col-6">
                                                    <input type="text" class="form-control bg-dark" name="name" readonly value="<?php echo $data[1]; ?>" class="span6 tip" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="control-group">
                                                <label class="control-label mb-2" for="basicinput">Current Image</label>
                                                <div class="controls">
                                                    <?php
                                                    if ($data[6] == "avatar15.jpg") {
                                                    ?>
                                                        <img class="" src="img/avatar15.jpg" alt="" width="100" height="100">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <img src="profileimages/<?php echo $data[6]; ?>" width="170" height="150">
                                                    <?php
                                                    } ?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group col-md-6">
                                                <label>New Image</label>
                                                <input type="file" name="productimage1" id="productimage1" accept=".png,.jpg,.jpeg,.gif" class="file-upload-default" required="">
                                            </div>
                                        <?php

                                        } ?>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary " name="submit">
                                                    <i class="fa fa-plus "></i> Update
                                                </button>
                                            </div>
                                        </div>
<?php
}
?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->
                </div>
                <!-- Admin Profile End -->

                <!-- Footer Start -->
                <?php include('includes/footer.php'); ?>
                <!-- Footer End -->

            </div>
            <!-- Content End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable(); // ID From dataTable 
                $('#dataTableHover').DataTable(); // ID From dataTable with Hover
            });
        </script>

    </body>

    </html>