<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap- Payment</title>
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

    <style>
        /* Style for the image slider container */
        .slider-container {
            max-width: 100%;
            margin: auto;
            overflow: hidden;
        }

        /* Style for the image slider */
        .slider {
            display: flex;
            transition: transform 0.2ms ease-in-out;
        }

        /* Style for each slide */
        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }
    </style>

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
                    <li class="breadcrumb-item text-white">Detail</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Detail start -->
    <div class="container card shadow-sm bg-info rounded-1 mt-3 py-2 mb-3" style="height: 100%; width:750px;">
        <?php
        $adid = intval($_GET['adid']);
        $cn = mysqli_connect("localhost", "root", "", "adsnap");
        $sql = "SELECT Adid,Name,CategoryName,CompanyName,Phone,AdTitle,AdDescription,Picture1,Picture2 from advertising,category,customer WHERE advertising.CustomerId=customer.CustomerId AND advertising.CategoryId=category.CategoryId AND advertising.AdId='" . $adid . "'";
        $result = mysqli_query($cn, $sql);
        while ($data = mysqli_fetch_array($result)) {
            $name = $data[1];
            $categoryname = $data[2];
            $companyname = $data[3];
            $phone = $data[4];
            $adtitle = $data[5];
            $addescription = $data[6];
            $pic1 = $data[7];
            $pic2 = $data[8];
        }
        mysqli_close($cn);
        ?>
        <h4 class="text-primary text-center"><i>Detail of Ads</i></h4>
        <table class="mt-1">
            <tr style="height: 50px" ;>
                <td class="fs-5"><i>Upload By:</i></td>
                <td><input type="text" style="height: 40px;" class="rounded form-control" name="" id="" value="<?php echo $name; ?>"></td>
            </tr>
            <tr style="height: 50px" ;>
                <td class="fs-5"><i>Category Name:</i></td>
                <td><input type="text" style="height: 40px;" class="rounded form-control" name="" id="" value="<?php echo $categoryname ?>"></td>
            </tr>
            <tr style="height: 50px" ;>
                <td class="fs-5"><i>Company Name:</i></td>
                <td><input type="text" style="height: 40px;" class="rounded form-control" name="" id="" value="<?php echo $companyname; ?>"></td>
            </tr>
            <tr style="height: 50px" ;>
                <td class="fs-5"><i>Phone:</i></td>
                <td><input type="text" style="height: 40px;" class="rounded form-control" name="" id="" value="0<?php echo $phone; ?>"></td>
            </tr>
            <tr style="height: 50px" ;>
                <td class="fs-5"><i>Ads Title:</i></td>
                <td><input type="text" style="height: 40px;" class="rounded form-control" name="" id="" value="<?php echo $adtitle; ?>"></td>
            </tr>
            <tr style="height: 50px" ;>
                <td class="fs-5"><i>Ads Description:</i></td>
                <td><textarea class="form-control" name="ads_description" id="basicinput3" style="height: 200px"><?php echo $addescription; ?></textarea></td>
            </tr>
        </table>
        <h5 class="text-primary"><i>Photos</i></h5>
        <div class="slider-container">
            <div class="slider align-items-center">
                <div class="slide"><img src="./productimages/<?php echo $pic1; ?>" style="height: 450px; width:700px;" alt="Slide 1"></div>
                <div class="slide"><img src="./productimages/<?php echo $pic2; ?>" style="height: 450px; width:700px;" alt="Slide 2"></div>
                <!-- Add more slides as needed -->
            </div>
        </div>
        <a href="javascript:history.back()" class=" mt-3 mb-3 btn btn-outline-info bg-success w-100">Go Back</a>
    </div>
    <!-- Detail End -->

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

    <script>
        // JavaScript for the image slider with timer
        var currentSlide = 0;
        var slides = document.querySelectorAll('.slide');
        var totalSlides = slides.length;

        function showNextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function updateSlider() {
            var newPosition = -currentSlide * 100 + '%';
            document.querySelector('.slider').style.transform = 'translateX(' + newPosition + ')';
        }

        // Set an interval to change the slide every 3 seconds (adjust as needed)
        var slideInterval = setInterval(showNextSlide, 3000);

        // Stop the automatic sliding when the user hovers over the slider
        document.querySelector('.slider-container').addEventListener('mouseenter', function() {
            clearInterval(slideInterval);
        });

        // Resume automatic sliding when the user leaves the slider
        document.querySelector('.slider-container').addEventListener('mouseleave', function() {
            slideInterval = setInterval(showNextSlide, 3000);
        });
    </script>
    <script>
        // Get all textboxes on the page
        var textboxes = document.querySelectorAll('input[type="text"]');
        var textareas = document.querySelectorAll('textarea');
        // Loop through each textbox and set readOnly attribute to true
        textboxes.forEach(function(textbox) {
            textbox.readOnly = true;
        });
        textareas.forEach(function(textarea) {
            textarea.readOnly = true;
        });
    </script>
</body>

</html>