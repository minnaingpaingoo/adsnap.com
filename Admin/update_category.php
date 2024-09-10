<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<?php
if ($_SESSION['loginstatus'] == "") {
    header("location:loginform.php");
}
$catid = intval($_GET['catid']); //category id from manage_category.php
?>
<?php
if (isset($_POST["smbt"])) {

    $cn = mysqli_connect("localhost", "root", "", "adsnap");
    $target_dir = "categoryimages/";
    $productimage1 = $_FILES["productimage1"]["name"];
    $target_file = $target_dir . basename($productimage1);
    move_uploaded_file($_FILES["productimage1"]["tmp_name"], "categoryimages/" . $_FILES["productimage1"]["name"]);

    if (empty($_FILES["productimage1"]["name"])) {
        $sql = "update category set CategoryName='" . $_POST["category_name"] . "', Fee='" . $_POST["category_fee"] . "' where CategoryId='".$catid."'";
    } else {
        $sql = "update category set CategoryName='" . $_POST["category_name"] . "', Fee='" . $_POST["category_fee"] . "', Picture='" . basename($productimage1) . "' where CategoryId='".$catid."'";
    }
        mysqli_query($cn, $sql);
        mysqli_close($cn);
        echo "<script>alert('Record Save');</script>";
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - Update Category</title>
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
            <?php
            $cn = mysqli_connect("localhost", "root", "", "adsnap");
            //$catid=intval($_GET['catid']);
            $sql = "select * from category where CategoryId='" . $catid . "'";
            $result = mysqli_query($cn, $sql);
            $r = mysqli_num_rows($result);
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <!-- Form Start -->
                <div class="container-fluid pt-4 px-4">
                    <h1 class="h3 mb-4 text-gray-800">Category</h1>
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h5 class="mb-4">Update Category</h5>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="categoryName" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" id="categoryName" value="<?php echo $data[1]; ?>" name="category_name" placeholder="Enter Category Name" required minlength="4" maxlength="20" title="Enter only character between 4 and 20">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fee" class="form-label">Fee</label>
                                        <input type="text" class="form-control" id="fee" name="category_fee" value="<?php echo $data[2]; ?>" placeholder="Enter Category Fee" required pattern="[0-9]{4,10}" title="Enter only digit between 4 and 10">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fee" class="form-label">Current Image</label><br>
                                        <?php
                                        echo "<IMG src='categoryimages/$data[3]' style='height:150PX; width:150PX;' /> ";
                                        ?>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label class="form-label">New Image</label>
                                        <input type="file" name="productimage1" id="productimage1" accept=".png,.jpg,.jpeg,.gif" class="file-upload-default">
                                    </div>
                                <?php
                            }
                                ?>
                                <button type="submit" name="smbt" class="btn btn-primary me-2">Create</button>
                                <button type="reset" class="btn btn-primary">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form End -->
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
</body>

</html>