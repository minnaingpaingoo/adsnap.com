<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap</title>
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

<body id="home">

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <!-- Navbar start -->
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-2 py-lg-0">
            <?php include('includes/navbar.php'); ?>
        </nav>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/slider1.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Unleash Your Potential</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Discover Exclusive Offers & Irresistible Deals!</h1>
                                <p class="mb-5 fs-5">Welcome to the ultimate destination for exclusive offers and irresistible deals! Get ready to embark on a journey filled with savings and exciting opportunities.
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="services.php">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider2.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Advertise Smart, Save More</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Check Out Our Special Offers!</h1>
                                <p class="mb-5 fs-5">Welcome to the smart way to advertise! At AdSnap, we believe in helping you maximize your advertising budget while achieving outstanding results. Explore our special offers tailored to boost your marketing efforts and save you money.
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="services.php">Check Out Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider3.jpeg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Upgrade Your Style</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Explore Our Trendy Selection!</h1>
                                <p class="mb-5 fs-5">Don't settle for ordinary when you can upgrade your style with our trendy selection. Explore our collection today and discover the perfect pieces to express your unique sense of fashion and style.
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="services.php">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-fluid about bg-info bg-opacity-25 py-5">
        <div class="mx-auto text-center mb-3" style="max-width: 900px;">
            <h2 class="section-title px-3">About Us</h2>
        </div>
        <div class="container card shadow-lg py-3">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                        <img src="img/about-us.jpg" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8));">
                    <h1 class="mb-4">Welcome to <span class="text-primary">AdSnap</span></h1>
                    <p class="mb-4">At AdSnap, we are passionate about empowering businesses of all sizes to reach their advertising goals effectively. Our platform provides a user-friendly solution for uploading and managing advertisements, ensuring seamless campaigns and impactful results.</p>
                    <h4 class="mb-4"><span class="text-primary">Our Mission</span></h4>
                    <p class="mb-4">Our mission is simple: to revolutionize the advertising experience by offering a streamlined platform that empowers businesses to connect with their target audience in meaningful ways. We are committed to delivering innovative solutions that drive success and exceed expectations.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>What We Offer</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Why Choose Us?</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>User Friendly</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Easy reach to the customers</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Cheap Cost</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="about.php">See More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid bg-light service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Services</h5>
                <h1 class="mb-0">Our Services</h1>
            </div>
            <div class="row g-2">
                <div class="col-6">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                        <div class="service-content text-end">
                            <h5 class="mb-4">Targeted Advertising Campaigns</h5>
                            <p class="mb-0" style="align-items: left;">Reach your ideal audience with precision-targeted advertising campaigns tailored to your unique goals and objectives. Utilize advanced demographic and behavioral targeting to ensure your message resonates with the right audience segments.
                            </p>
                        </div>
                        <div class="service-icon p-4">
                            <i class="fa-solid fa-users-viewfinder fa-4x text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                        <div class="service-icon p-4">
                            <i class="fa-solid fa-gear fa-4x text-primary"></i>
                        </div>
                        <div class="service-content">
                            <h5 class="mb-4">Ad Management and Optimization</h5>
                            <p class="mb-0">Maximize the performance of your advertising with expert ad management and optimization services. Monitor campaign metrics in real-time and achieve your advertising goals. Our ad specialists will continually optimize your ads to ensure they're delivering maximum results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="text-center">
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="services.php">Service More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Explore Tour Start -->
    <div class="container-fluid ExploreTour py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Advertising Category</h5>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4 mb-3">
                            <?php
                            $cn = mysqli_connect("localhost", "root", "", "adsnap");
                            // Define the number of records per page
                            $recordsPerPage = 6;

                            // Get the current page number
                            if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                                $currentPage = $_GET['page'];
                            } else {
                                $currentPage = 1;
                            }

                            // Calculate the starting record for the current page
                            $startFrom = ($currentPage - 1) * $recordsPerPage;

                            
                            $sql = "SELECT * FROM category Order By CategoryName ASC LIMIT $startFrom, $recordsPerPage";
                            $result = mysqli_query($cn, $sql);
                            $r = mysqli_num_rows($result);
                            //$n=0;
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="Admin/categoryimages/<?php echo $data[3]; ?>" style="height:230px;" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo $data[1]; ?></h5>
                                                <a href="advertisements.php?id=<?php echo $data[0]; ?>" class="btn-hover text-white">View Detail <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="national-plus-icon">
                                            <a href="advertisements.php?id=<?php echo $data[0]; ?>" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <?php
                        // Pagination links
                        $cn = mysqli_connect("localhost", "root", "", "adsnap");
                        $sql = "SELECT COUNT(CategoryId) AS total FROM category";
                        $result = $cn->query($sql);
                        $row = $result->fetch_assoc();
                        $totalRecords = $row['total'];
                        $totalPages = ceil($totalRecords / $recordsPerPage);

                        echo '<nav aria-label="Page navigation"><ul class="pagination">';
                        if ($currentPage > 1) {
                            echo '<li class="page-item"><a class="page-link" href="?page=' . ($currentPage - 1) . '">Previous</a></li>';
                        }
                        for ($i = 1; $i <= $totalPages; $i++) {
                            echo '<li class="page-item ' . ($i == $currentPage ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($currentPage < $totalPages) {
                            echo '<li class="page-item"><a class="page-link" href="?page=' . ($currentPage + 1) . '">Next</a></li>';
                        }
                        echo '</ul></nav>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Tour Start -->

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