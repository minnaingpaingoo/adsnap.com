<?php 
if (!isset($_SESSION)) {
    session_start();
} 
error_reporting(0);
if (strlen($_SESSION['login']==0)) 
{
  header('location:index.php');
}else{

$id = intval($_GET['cid']); //Customer ID from profile.php

if (isset($_POST['submit'])) {
    $cn = mysqli_connect("localhost", "root", "", "adsnap");

    $target_dir = "profileimages/";
    $productimage1 = $_FILES["productimage1"]["name"];
    $target_file = $target_dir . basename($productimage1);

    move_uploaded_file($_FILES["productimage1"]["tmp_name"], "profileimages/" . $_FILES["productimage1"]["name"]);
    $sql = "update customer set Picture='" . basename($productimage1) . "' where CustomerId='" . $id . "'";
    mysqli_query($cn, $sql);
    
    echo "<script>alert('Photo Update');</script>";

    mysqli_close($cn); 
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap- Update Profile Image</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <!-- Navbar start -->
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-2 py-lg-0">
            <?php include('includes/navbar.php'); ?>
        </nav>
        <!-- Navbar End -->
    </div>
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">My Profile</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Update Image</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Upadate Image Start -->
    <div class="container-fluid about bg-light-subtle bg-opacity-25 py-4">
        <div class="container card shadow-lg py-3 w-75">
            <form action="#" class="rounded p-4" method="post" enctype="multipart/form-data">
            <?php
                $cid = intval($_GET['cid']); //Customer ID from profile.php
                $cn = mysqli_connect("localhost", "root", "", "adsnap");
                $s = "select * from customer where CustomerId='" . $cid . "'";
                $result = mysqli_query($cn, $s);
                $r = mysqli_num_rows($result);
                while ($data = mysqli_fetch_array($result)) 
                {
            ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mb-3 text-primary">Update Profile Image</h3>
                        <div class="control-group mt-1">
                            <label class="control-label mb-2" for="basicinput">Name</label>
                            <div class="col-6">
                                <input type="text" class="form-control" name="name" readonly value="<?php echo $data[1]; ?>" class="span6 tip" required>
                            </div>
                        </div>
                        <br>
                        <div class="control-group mb-4">
                            <label class="control-label mb-2" for="basicinput">Current Image</label>
                            <div class="controls">
                            <?php
                                if ($data[5] == "avatar15.jpg") {
                            ?>
                                <img class="" src="img/avatar15.jpg" alt="" width="100" height="100">
                            <?php
                                 } else {
                            ?>
                                <img src="profileimages/<?php echo $data[5]; ?>" width="170" height="150">
                                <input type="hidden" name="old_pic" value="profileimages/<?php echo $data[5]; ?>">
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>New Image</label>
                            <input type="file" name="productimage1" id="productimage1" accept=".png,.jpg,.jpeg,.gif" class="file-upload-default" required="">
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary " name="submit">
                                    <i class="fa fa-plus "></i> Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </form>
        </div>
    </div>
    <!-- Updage Image End -->


    <!-- Footer Start -->
    <?php include('includes/footer.php'); ?>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <?php include('includes/copyright.php'); ?>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>