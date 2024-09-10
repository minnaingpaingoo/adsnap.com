<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if($_SESSION['loginstatus']=="")
{
    header("location:loginform.php");
}
?>
<?php
// for cancel ads by admin
if(isset($_REQUEST['adid1']))
{
  $adid1=intval($_GET['adid1']);
  $status=2;
  $cancelby='a';
  $cn=mysqli_connect("localhost","root","","adsnap");
  $sql = "UPDATE advertising SET Status='".$status."',CancelBy='".$cancelby."' WHERE  AdId='".$adid1."'";
  $result=mysqli_query($cn,$sql);
  if ($result) {
   echo '<script>alert("Ads is Cancelled successfully")</script>';
 }else{
  echo '<script>alert("Something Went Wrong. Please try again")</script>';
}
}

//For Confirm Ads by Admin
if(isset($_REQUEST['adid2']))
{
  $adid2=intval($_GET['adid2']);
  $status=1;
  $cn=mysqli_connect("localhost","root","","adsnap");
  $sql = "UPDATE advertising SET Status='".$status."' WHERE AdId='".$adid2."'";
  $result=mysqli_query($cn,$sql);
  if ($result) {
    echo '<script>alert("Ads is Confirmed successfully")</script>';
  }else{
    echo '<script>alert("Something Went Wrong. Please try again")</script>';
  }
  mysqli_close($cn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - Manage Ads</title>
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

            <!-- manage category Start -->
            <div class="container-fluid pt-4 px-4">
                <h1 class="h3 mb-4 text-gray-800">Advertisings</h1>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h5 class="mb-4">Manage Advertising</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTableHover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Ads Id</th>
                                            <th>Ads Title</th>
                                            <th>Company Name</th>
                                            <th>Category</th>
                                            <th>Fee</th>
                                            <th>Customer Name</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>Upload Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $cn = mysqli_connect("localhost", "root", "", "adsnap");
                                        $sql = "SELECT AdId,AdTitle,CategoryName,Fee,Name,Email,Phone,UploadDate,Status,CancelBy,UpdationDate,CompanyName FROM advertising,customer,category WHERE advertising.CustomerId=customer.CustomerId && advertising.CategoryId=category.CategoryId Order by advertising.UploadTime DESC;";
                                        $result = mysqli_query($cn, $sql);
                                        $r = mysqli_num_rows($result);
                                        $cnt = 1;
                                        while ($data = mysqli_fetch_array($result)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $cnt; ?> </td>
                                                <td>AD-<?php echo $data[0]; ?></td>
                                                <td><?php echo $data[1]; ?></td>
                                                <td><?php echo $data[11]; ?></td>
                                                <td><?php echo $data[2]; ?></td>
                                                <td><?php echo $data[3]; ?></td>
                                                <td><?php echo $data[4]; ?></td>
                                                <td><?php echo $data[5]; ?></td>
                                                <td>0<?php echo $data[6]; ?></td>
                                                <td><?php echo $data[7]; ?></td>
                                                <td><?php if ($data[8] == 0) {
                                                        echo "Pending";
                                                    }
                                                    if ($data[8] == 1) {
                                                        echo "Confirmed";
                                                    }
                                                    if ($data[8] == 2 && $data[9] == 'a') {
                                                        echo "Cancelled by you at " . $data[10] . ".";
                                                    }
                                                    if ($data[8] == 2 && $data[9] == 'u') {
                                                        echo "Cancelled by User at " . $data[10] . ".";
                                                    }
                                                    ?></td>

                                                <?php
                                                if ($data[8] == 2) {
                                                ?>
                                                    <td class="text-center">Cancelled</td>
                                                <?php
                                                } elseif ($data[8] == 1) {
                                                ?>
                                                    <td class="text-center">Confirmed</td>
                                                <?php
                                                } else {
                                                ?>
                                                    <td>
                                                        <div class="d-flex">
                                                        <a href="manage_ads.php?adid1=<?php echo $data[0];?>" class="me-3" onclick="return confirm('Do you really want to cancel ads?')"><button type="button" class="btn btn-primary btn-sm">Cancel</button></a>
                                                        <a href="manage_ads.php?adid2=<?php echo $data[0];?>" onclick="return confirm('Do you really want to confirm ads?')"><button type="button" class="btn btn-primary btn-sm">Confirm</button></a>
                                                        </div>
                                                    </td>
                                                <?php
                                                } ?>                                             
                                            </tr>
                                        <?php
                                            $cnt = $cnt + 1;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- manage category End -->

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