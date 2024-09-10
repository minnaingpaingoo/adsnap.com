<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
error_reporting(0);
if (strlen($_SESSION['loginstatus']==0)) 
{
  header('location:logout.php');
} 
else
{
  if(isset($_POST['smbt']))
  {
    $cn=mysqli_connect("localhost","root","","adsnap");
    $username=$_POST['username'];
    $email=$_POST['email'];

    $newpassword=$_POST['new_password'];
    $new_password=md5($newpassword);

    $sql ="SELECT * FROM admin WHERE Username='".$username."' and Email='".$email."'";
    $result=mysqli_query($cn,$sql);
    $r=mysqli_num_rows($result);
    
    if($r > 0)
    {
        $cn1=mysqli_connect("localhost","root","","adsnap");
        $con="update admin set Password='".$new_password."' where Username='".$username."' and Email='".$email."'";
        mysqli_query($cn1,$con);
        mysqli_close($cn1);

      echo '<script>alert("Your password successully changed")</script>';
      echo("<script>window.location.href='loginform.php';</script>");
    } else {
      echo '<script>alert("Your Username or Email is wrong. Please try again!!!")</script>';

    }mysqli_close($cn);
  }
}
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap - Admin Forgot Password</title>
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


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <h3 class="text-primary text-center"><i class="fa-solid fa-rectangle-ad me-2"></i>AdSnap</h3>
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="text-primary">Forgot Password?</h3>
                        </div>
                        <form action="#" method="post" enctype="multipart/form-data" onsubmit="return checkpass();" name="resetpassword">
                            <div class="form-floating mb-3">
                                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" required>
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@gmail.com" required>
                                <label for="floatingEmail">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="new_password" class="form-control" id="floatingInput" placeholder="New Passord" required minlength="4" maxlength="20" placeholder="Enter Your New Password" title="Password can contain between 4 and 20">
                                <label for="floatingInput">New Password</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="confirm_password" class="form-control" id="floatingEmail" placeholder="Comfirm Password" required minlength="4" maxlength="20" placeholder="Enter Your Confirm New Password" title="Password can contain between 4 and 20">
                                <label for="floatingEmail">Confirm New Password</label>
                            </div>
                            <a href="loginform.php">Back</a>
                            <div class="form-group row mt-3">
                                <div class="col-12">
                                    <button type="reset" class="btn btn-primary">
                                        <i class="fa fa-cancel"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary " name="smbt">
                                        <i class="fa fa-plus"></i> Save
                                    </button>
                                </div>
                            </div>                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
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
    <script type="text/javascript">
        function checkpass()
        {
        if(document.resetpassword.new_password.value!=document.resetpassword.confirm_password.value)
        {
            alert('New Password and Confirm Password field does not match');
            document.resetpassword.confirm_password.focus();
            return false;
        }
        return true;
        } 
    </script>  
</body>

</html>