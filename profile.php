<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if (strlen($_SESSION['login']==0)) 
{
  header('location:index.php');
}else{

if(isset($_POST['submit']))
{
  $id=$_POST['customerId'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
 
    $cn1=mysqli_connect("localhost","root","","adsnap");
    $s="update customer set Name='".$name."' , Email='".$email."' , Phone='".$phone."' where CustomerId='".$id."'";
    mysqli_query($cn1,$s);
    mysqli_close($cn1);
    echo '<script>alert("Profile is updated successful.")</script>';

}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap - My Profile</title>
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
                    <li class="breadcrumb-item active text-white">My Profile</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Profile Start -->
    <div class="container-fluid about bg-light-subtle bg-opacity-25 py-2">
        <div class="container card shadow-lg py-3 w-75">
            <form action="#" class="bg-info rounded" method="post" enctype="multipart/form-data">
            <?php
                $email=$_SESSION['login'];
                $cn = mysqli_connect("localhost", "root", "", "adsnap");
                $s="select * from customer where Email='".$email."'";
                $result=mysqli_query($cn,$s);
                $r=mysqli_num_rows($result);
                while($data=mysqli_fetch_array($result))
                { 
            ?>
                <div class="row g-2 align-items-center">
                    <div class="col-lg-6">
                        <div class="ms-4 mt-4 d-flex flex-row align-items-center justify-content-between">
                            <h3 class="mb-0 text-gray-800">Update Profile</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <?php 
                            if($data[5]=="avatar15.jpg")
                            { 
                        ?>
                            <img class="rounded-circle mt-5" src="img/avatar15.jpg"  width="90">
                        <?php 
                            } else { 
                        ?>
                            <img class="rounded-circle mt-5"  src="profileimages/<?php  echo $data[5];?>" width="90">
                        <?php 
                            } 
                        ?>
                       
                            <span class="font-weight-bold mt-3 mb-1"><?php  echo $data[2];?></span>
                            <span>+95&nbsp;<?php  echo $data[3];?></span>
                            <div class="mt-3">
                                <a href="update_image.php?cid=<?php echo $data[0];?>">Edit Image</a>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-lg-6">
                        <div class="p-3 py-3">
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <label class="form-group mb-1">Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php  echo $data[1];?>" required='true' pattern="[A-Za-z ]{4,20}" title="Please Enter between 4 and 20 characters only!!">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <label class="form-group mb-1">Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php  echo $data[2];?>" required title="Enter Your Email">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <label class="form-group mb-1">Phone No</label>
                                    <input type="text" class="form-control" id="txtphone" name="phone" value="0<?php  echo $data[3];?>" required minlength="8" maxlength="11">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <label class="form-group mb-1">Reg Date</label>
                                    <input type="text" class="form-control" value="<?php  echo $data[6];?>" readonly="true">
                                </div>
                            </div>
                            <!-- Hidden Customer ID -->
                            <input type="hidden" name="customerId" value="<?php  echo $data[0];?>" > 
                            <!-- /Hidden Customer ID -->
                        </div>
                        <div class="ms-2">
                            <button class="btn btn-primary profile-button mb-4" type="submit" name="submit">Update Profile</button>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </form>
        </div>
    </div>
    <!-- Profile End -->


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