<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if($_SESSION['loginstatus']=="")
{
    header("location:loginform.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap</title>
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
<?php
      $cn=mysqli_connect("localhost","root","","adsnap");
      $aid=$_SESSION['aid'];
      $s="select * from admin where AdminId='".$aid."'";
      $result=mysqli_query($cn,$s);
      $r=mysqli_num_rows($result);
      //echo $r;

      while($data=mysqli_fetch_array($result))
      {
    ?>
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">   
                    <h3 class="text-primary"><i class="fa-solid fa-rectangle-ad me-2"></i>AdSnap</h3>
                </a>
                <div class="d-flex align-items-center ms-3 mb-4">
                    <div class="position-relative">
                    <?php 
                        if($data[6]=="avatar15.jpg")
                        { 
                    ?>
                        <img class="rounded-circle" src="img/avatar15.jpg" alt="" style="width: 40px; height: 40px;">
                    <?php 
                        } else { 
                        ?>
                            <img class="img-profile rounded-circle" src="profileimages/<?php  echo $data[6];?>" style="width: 40px; height: 40px;"> 
                         <?php 
                        } ?>
                           
           
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-2">
                        <h6 class="mb-0"><?php  echo $data[1];?></h6>
        <?php
            }
        ?>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">    
                    <a href="index.php" class="nav-item nav-link active"><i class="fa-solid fa-house me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Category</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="create_category.php" class="dropdown-item mb-1">Create Category</a>
                            <a href="manage_category.php" class="dropdown-item">Manage Category</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-brands fa-adversal me-2"></i>Advertisings</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="view_ads.php" class="dropdown-item mb-1">View Advertising</a>
                            <a href="manage_ads.php" class="dropdown-item">Manage Advertising</a>
                        </div>
                    </div>
                   <!-- <a href="manage_ads.php" class="nav-item nav-link"><i class="fa-brands fa-adversal me-2"></i>Ads Management</a>-->
                    <a href="customers.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Customers</a>
                    <a href="total_income.php" class="nav-item nav-link"><i class="fa-solid fa-wallet me-2"></i>Total Income</a>
                    <a href="feedback.php" class="nav-item nav-link"><i class="fa-regular fa-comments me-2"></i>Feedback</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-user me-2"></i>Admin</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="admin_register.php" class="dropdown-item mb-1">Admin Register</a>
                            <a href="view_admin.php" class="dropdown-item">View Admin</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
</body>
</html>