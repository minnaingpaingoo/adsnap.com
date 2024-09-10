<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<!--Processing data in form when form is submitted-->
<?php
if(isset($_POST["submit"])){ 
    $cn=mysqli_connect("localhost","root","","adsnap");
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $sql="insert into contact(Name,Email,Message) values('" . $name."','" . $email . "','".$message."')";
    mysqli_query($cn,$sql);
    mysqli_close($cn);
    echo "<script>alert('Your Message is sent successfully!!');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap - Contact Page</title>
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
            <h3 class="text-white display-3 mb-4">Contact Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white">Contact</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Contact Us</h5>
                <h1 class="mb-0">Contact For Any Query</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-white rounded p-4">
                        <div class="text-center mb-4">
                            <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                            <h4 class="text-primary">
                                <Address></Address>
                            </h4>
                            <p class="mb-0">No-135, Gwat Street, Ward 14, <br> UCSTT , THATON</p>
                        </div>
                        <div class="text-center mb-4">
                            <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Mobile</h4>
                            <p class="mb-0">+95 979-130-1124</p>
                            <p class="mb-0">+95 979-066-3667</p>
                        </div>

                        <div class="text-center">
                            <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Email</h4>
                            <p class="mb-0">info@adsnap.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h3 class="mb-2">Send us a message</h3>
                    <form method="post">
                        <div class="row g-3">
                        <?php 
                        if($_SESSION['login']){
                            $email = $_SESSION['login'];
                            $cn = mysqli_connect("localhost", "root", "", "adsnap");
                            $sql = "SELECT * from customer WHERE Email='" . $email . "'";
                            $result = mysqli_query($cn, $sql);
                            $r = mysqli_num_rows($result);
                            while ($data = mysqli_fetch_array($result)) { 
                            ?>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" value="<?php echo $data[1]; ?>" readonly="true" class="form-control border-0" name="name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" value="<?php echo $data[2]; ?>" readonly="true" class="form-control border-0" name="email" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                        <?php
                            }
                        }else{
                        ?>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="name" name="name" required placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" name="email" required placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" name="message" required placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3" name="submit" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <div class="rounded">
                        <iframe class="rounded w-100" style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.7353797915225!2d97.38362267381645!3d16.88897981697453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c2e971af8489db%3A0x77befc77b793c6f1!2sUniversity%20of%20Computer%20Studies%20(%20Thaton%20)!5e0!3m2!1sen!2smm!4v1707721535334!5m2!1sen!2smm" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
    </div>
    <!-- Contact End -->

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