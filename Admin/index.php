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


            <!-- Total list Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa-solid fa-table-list fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Ads</p>
                                <?php
                                $cn=mysqli_connect("localhost","root","","adsnap"); 
                                $sql1 = "SELECT AdId from advertising where Status=1";
                                $q1=mysqli_query($cn,$sql1);
                                $r1=mysqli_num_rows($q1);
                                $data=mysqli_fetch_array($q1);
                                mysqli_close($cn);
                                ?>
                                <h6 class="mb-0"><?php  echo htmlentities($r1);?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Category</p>
                                <?php
                                $cn=mysqli_connect("localhost","root","","adsnap"); 
                                $sql2 = "SELECT CategoryId from category";
                                $q2=mysqli_query($cn,$sql2);
                                $r2=mysqli_num_rows($q2);
                                $data=mysqli_fetch_array($q2);
                                mysqli_close($cn);
                                ?>
                                <h6 class="mb-0"><?php  echo htmlentities($r2);?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Users</p>
                                <?php
                                $cn=mysqli_connect("localhost","root","","adsnap"); 
                                $sql3 = "SELECT CustomerId from customer";
                                $q3=mysqli_query($cn,$sql3);
                                $r3=mysqli_num_rows($q3);
                                $data=mysqli_fetch_array($q3);
                                mysqli_close($cn);
                                ?>
                                <h6 class="mb-0"><?php  echo htmlentities($r3);?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa-solid fa-user-tie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Admin</p>
                                <?php
                                $cn=mysqli_connect("localhost","root","","adsnap"); 
                                $sql4 = "SELECT AdminId from admin";
                                $q4=mysqli_query($cn,$sql4);
                                $r4=mysqli_num_rows($q4);
                                $data=mysqli_fetch_array($q4);
                                mysqli_close($cn);
                                ?>
                                <h6 class="mb-0"><?php  echo htmlentities($r4);?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total List End -->


            <!-- Widgets Start -->
            <div class="row mt-4 ms-2 me-2">
                <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Portfolio</h6>
                            <div class="owl-carousel testimonial-carousel">
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="../img/tha.jpg" style="width: 100px; height: 100px;">
                                    <h5 class="mb-1">Than Htet Aung</h5>
                                    <p>Art Director</p>
                                    <p class="mb-0">Responsible for visualizing and executing the artistic vision of advertising campaigns.</p>
                                </div>
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="../img/mnpo1.jpg" style="width: 100px; height: 100px;">
                                    <h5 class="mb-1">Naing Paing Oo</h5>
                                    <p>Project Manager</p>
                                    <p class="mb-0"> Coordinates and manages advertising projects from inception to completion, ensuring that they are delivered on time, within budget, and according to client specifications. </p>
                                </div>
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="../img/kht.jpg" style="width: 100px; height: 100px;">
                                    <h5 class="mb-1">Kaung Hsu Thar</h5>
                                    <p>Production Manager</p>
                                    <p class="mb-0">Coordinates the production process for advertising materials such as print ads, TV commercials, and digital content.</p>
                                </div>
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="../img/apk.jpg" style="width: 100px; height: 100px;">
                                    <h5 class="mb-1">Aung Phyo Kyaw</h5>
                                    <p>Creative Director</p>
                                    <p class="mb-0">Leads the creative team in developing innovative and impactful advertising concepts and campaigns. </p>
                                </div>
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="../img/nlo.jpg" style="width: 100px; height: 100px;">
                                    <h5 class="mb-1">Nyam Lin Oo</h5>
                                    <p>Copywriter</p>
                                    <p class="mb-0"> Creates compelling and persuasive copy for advertising campaigns across various media channels. </p>
                                </div>
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="../img/pph.jpg" style="width: 100px; height: 100px;">
                                    <h5 class="mb-1">Pyae Phyo Hlyan</h5>
                                    <p>Market Research Analyst</p>
                                    <p class="mb-0">Conducts market research to gather insights into consumer behavior, market trends, and competitor activities. </p>
                                </div>
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="../img/pkkk.jpg" style="width: 100px; height: 100px;">
                                    <h5 class="mb-1">Phyo Ko Ko Kyaw</h5>
                                    <p>Account Executive</p>
                                    <p class="mb-0">Responsible for managing client accounts, building relationships, and overseeing the execution of advertising campaigns.</p>
                                </div>
                            </div>
                        </div>
                </div>       
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary rounded h-100 p-4">
                        <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.7353797915225!2d97.38362267381645!3d16.88897981697453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c2e971af8489db%3A0x77befc77b793c6f1!2sUniversity%20of%20Computer%20Studies%20(%20Thaton%20)!5e0!3m2!1sen!2smm!4v1707642313479!5m2!1sen!2smm" 
                            style="filter: grayscale(60%); border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            
            <!-- Widget End -->

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

