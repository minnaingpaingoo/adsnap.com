<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if($_SESSION['loginstatus']=="")
{
    header("location:loginform.php");
} 
?>

<!--Processing data in form when form is submitted-->
<?php
if(isset($_POST["register"])){
    
    if(isset($_POST['agreeCheckbox'])){
    
        if($_POST["password"]==$_POST["confirm_password"]){
            $cn=mysqli_connect("localhost","root","","adsnap");
            $sql="select * from admin where Username='" . $_POST["username"] ."'"; 
            $q=mysqli_query($cn,$sql);
            $r=mysqli_num_rows($q);
            $data=mysqli_fetch_array($q);
            mysqli_close($cn);
    
            if($r>0)
            {
            echo "<script>alert('Username is already exist.');</script>";
            } else{
              $cn1=mysqli_connect("localhost","root","","adsnap");
              $pass=$_POST["password"];
              $password=md5($pass);
              $s="insert into admin(Username,Password,Name,Email,Phone,Picture) values('" . $_POST["username"] ."','" . $password . "','". $_POST["admin_name"] . "','" . $_POST["email"] . "','" . $_POST["phone"] . "','avatar15.jpg')";
              mysqli_query($cn1,$s);
              mysqli_close($cn1);
              echo "<script>alert('Record Save');</script>";
            }

        }else{
            echo "<script>alert('Password and Confirm Password are not matched!');</script>";   
            }    
    }
    else{
        echo "<script>alert('You must check!');</script>";
    }
}
?>
<!-- /Register End   -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - Admin Register</title>
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

        <?php include('includes/sidebar.php');?>

        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->

           <?php include('includes/navbar.php');?>

            <!-- Navbar End -->

            <!-- Sign Up Start -->
            <div class="container-fluid fs-6 pt-4 px-4">
                <h1 class="h3 mb-4">Admin Register</h1>
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary justify-content-start rounded p-2 p-sm-5 my-1 mx-2">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.php" class="">
                                    <h3 class="text-primary"><i class="fa-solid fa-rectangle-ad me-2"></i>AdSnap</h3>
                                </a>
                                <h3>Sign Up</h3>
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input type="text" name="admin_name" class="form-control" required pattern="[a-zA-z ]{4,50}" id="floatingText" placeholder="Enter Your Name" title="Eg: Mg Aung Myo Thu">
                                    <label for="floatingText" class=" lh-1">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" required id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput" class=" lh-1">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="phone" id="txtPhone" class="form-control" required placeholder="eg.09xxxxxxxxx" minlength="8" maxlength="11">
                                    <label for="txtPhone" class=" lh-1">Phone</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="username" required pattern="[a-z]{4,50}" id="floatingText" placeholder="Enter User Name">
                                    <label for="floatingText" class=" lh-1">User Name</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" class="form-control" name="password" required minlength="4" maxlength="20" id="floatingPassword" placeholder="Password" title="Password can contain between 4 and 20">
                                    <label for="floatingPassword" class=" lh-1">Password</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" class="form-control" name="confirm_password" required minlength="4" maxlength="20" id="confirmpass" placeholder="Confirm Password" title="Confirm Password can contain between 4 and 20">
                                    <label for="confirmpass" class=" lh-1">Confirm Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="agreeCheckbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                </div>
                                <button type="submit" name="register" class="btn btn-primary py-2 w-25 mb-4 me-3">Register</button>
                                <button type="reset" class="btn btn-primary py-2 w-25 mb-4">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sign Up End -->
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
    <script src="js/EventUtil.js"></script>
    <script type="text/javascript">
        (function() {
            var textbox = document.getElementById("txtPhone");
            EventUtil.addHandler(textbox, "keypress", function(event) {
                event = EventUtil.getEvent(event);
                var target = EventUtil.getTarget(event);
                var charCode = EventUtil.getCharCode(event);
                if (!/\d/.test(String.fromCharCode(charCode)) && charCode > 9 && !event.ctrlkey) {
                    alert("*Please Enter Number.")
                    EventUtil.preventDefault(event);
                }
            });
        })();
    </script>
</body>
</html>
