<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if (strlen($_SESSION['login']==0)) 
{
  header('location:index.php');
}else{
    // for cancel uploaded ads by user
    if(isset($_REQUEST['adid']))
    {
        $adid=intval($_GET['adid']);
        $status=2;
        $cancelby='u';
        $cn=mysqli_connect("localhost","root","","adsnap");
        $sql = "UPDATE advertising SET Status='".$status."',CancelBy='".$cancelby."' WHERE  AdId='".$adid."'";
        $result=mysqli_query($cn,$sql);
        if ($result) 
        {
            echo '<script>alert("Ads Cancelled successfully by yourself!!")</script>';
        }else{
            echo '<script>alert("Something Went Wrong. Please try again")</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap- Ads History</title>
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
    <div class="container-fluid bg-breadcrumb mb-3">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Ads History</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Ads History</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Ads History Start -->
    <div class="container mb-3">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">My Ads History</h3>
        <form method="post" action="#" enctype="multipart/form-data">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Ads Id</th>
                        <th>Ads Title</th>
                        <th>Company Name</th>
                        <th>Upload Date</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Action</th>
                        <th>Payment</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if($_SESSION['login'])
                {
                    $cn=mysqli_connect("localhost","root","","adsnap");
                    $email=$_SESSION['login'];
                    $sql="SELECT advertising.AdId,advertising.AdId,advertising.AdTitle,advertising.CompanyName,advertising.UploadDate,advertising.Status,advertising.CancelBy,advertising.UpdationDate FROM advertising,category,customer where advertising.CategoryId=category.CategoryId AND advertising.CustomerId=customer.CustomerId AND customer.Email='".$email."';";
                    $result=mysqli_query($cn,$sql);
                    $r=mysqli_num_rows($result);
                    $cnt=1;
                    while($data=mysqli_fetch_array($result))
                    {
                ?>
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td>Ad-<?php echo $data[1];?></td>
                        <td><?php echo $data[2];?></td>
                        <td><?php echo $data[3];?></td>
                        <td><?php echo $data[4];?></td>

                        <!-- For Stuatus-->
                        <td>
                        <?php 
                        if($data[5]==0)
                        {
                            echo "<small>Pending</small>";
                        }
                        if($data[5]==1)
                        {
                        echo "<small>Confirmed</small>";
                        }
                        if($data[5]==2 and  $data[6]=='u')
                        {
                        echo "<small>Cancelled by you at " .$data[7].". </small>";
                        } 
                        if($data[5]==2 and $data[6]=='a')
                        {
                        echo "<small>Cancelled by agency team at " .$data[7].".</small>";
                        }
                        ?>
                        </td>
                        <!-- For Cancel Button Action -->
                        <?php 
                        if($data[5]==2)
                        {
                        ?>
                        <td><small>Cancelled</small></td>
                        <?php 
                        }elseif($data[5]==1)
                        {
                        ?>
                        <td><small>Confirmed</small></td>
                        <?php
                        }else{
                        ?>
                        <td class="text-center"><a href="ads_history.php?adid=<?php echo $data[0];?>" onclick="return confirm('Do you really want to cancel ads?')"><button type="button" class="btn btn-primary btn-sm">Cancel</button></a></td>
                        <?php 
                        }
                        ?>
                        <!-- For Edit Button Action-->
                        <?php 
                        if($data[5]==2)
                        {
                        ?>
                        <td><small>Cancelled</small></td>
                        <?php 
                        }elseif($data[5]==1)
                        {
                        ?>
                        <td><small>Confirmed</small></td>
                        <?php
                        }else{
                        ?>
                        <td class="text-center"><a href="update_ads.php?id=<?php echo $data[0];?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a></td>
                        <?php 
                        }
                        ?>
                        <?php
                        if($data[5]==2)
                        {
                        ?>
                            <td><small>Cancelled</small></td> 
                        <?php
                        }elseif($data[5]==1){
                        ?>
                        <td class="text-center"><small>Done</small></td>
                        <?php
                        }else{
                        ?>
                        <td class="text-center"><a href="payment.php?id=<?php echo $data[0];?>"><button type="button" class="btn btn-primary btn-sm">View</button></a></td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
                $cnt=$cnt+1;
                    }
                    
                }
                ?>
                </tbody>
            </table>
        </form>
    </div>
    <!-- Ads History End -->


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