<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
error_reporting(0);
if (strlen($_SESSION['login']==0)) 
{
  header('location:index.php');
}else{

  if(isset($_POST['submit']))
  {
    $cn=mysqli_connect("localhost","root","","adsnap");
    $email=$_SESSION['login'];
    $cpassword=$_POST['current_password'];
    $current_password=md5($cpassword);

    $newpassword=$_POST['new_password'];
    $new_password=md5($newpassword);

    $sql ="SELECT * FROM customer WHERE Email='".$email."' and Password='".$current_password."'";
    $result=mysqli_query($cn,$sql);
    $r=mysqli_num_rows($result);
    if($r > 0)
    {
        while($data=mysqli_fetch_array($result)){
            $customerId=$data[0];
            $cn1=mysqli_connect("localhost","root","","adsnap");
            $con="update customer set Password='".$new_password."' where CustomerId='".$customerId."'";
            mysqli_query($cn1,$con);
            mysqli_close($cn1);
        }
      echo '<script>alert("Your password successully changed")</script>';
    } else {
      echo '<script>alert("Your current password is wrong")</script>';

    }mysqli_close($cn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap- Account Setting</title>
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
            <h3 class="text-white display-3 mb-4">Change Password</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Account Setting</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Account Setting Start -->
    <div class="container-fluid about bg-light-subtle bg-opacity-25 py-2 mb-3">
        <div class="container card shadow-lg py-3 w-75">
            <div class="row">
                <!-- Datatables -->
                <!-- DataTable with Hover -->
                <div class="col-lg-12">
                    <div class=" mb-3 rounded p-4">
                        <div class=" py-3 d-flex flex-row align-items-center justify-content-between">
                            <h3 class="mb-0 text-gray-800">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data" onsubmit="return checkpass();" name="changepassword">
                                <div class="control-group">
                                    <label class="control-label mb-2" for="basicinput1">Current Password</label>
                                    <div class="col-6">
                                        <input type="password" class="form-control" id="basicinput1" name="current_password" class="span6 tip" required minlength="8" maxlength="20" placeholder="Enter Your Current Password" title="Password can contain between 8 and 20">
                                    </div>
                                </div>
                                <br>
                                <div class="control-group">
                                    <label class="control-label mb-2" for="basicinput2">New Password</label>
                                    <div class="col-6">
                                        <input type="password" class="form-control" id="basicinput2" name="new_password" class="span6 tip" required minlength="8" maxlength="20" placeholder="Enter Your New Password" title="Password can contain between 8 and 20">
                                    </div>
                                </div>
                                <br>
                                <div class="control-group">
                                    <label class="control-label mb-2" for="basicinput3">Confirm New Password</label>
                                    <div class="col-6">
                                        <input type="password" class="form-control" id="basicinput3" name="confirm_password" class="span6 tip" required minlength="8" maxlength="20" placeholder="Enter Your Confirm New Password" title="Password can contain between 8 and 20">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="reset" class="btn btn-primary rounded-pill me-2">
                                            <i class="fa fa-cancel"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary rounded-pill " name="submit">
                                            <i class="fa fa-plus"></i> Change
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Setting End -->


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
    
    <script type="text/javascript">
        function checkpass()
        {
        if(document.changepassword.new_password.value!=document.changepassword.confirm_password.value)
        {
            alert('New Password and Confirm Password field does not match');
            document.changepassword.confirm_password.focus();
            return false;
        }
        return true;
     }   
  </script>
</body>

</html>