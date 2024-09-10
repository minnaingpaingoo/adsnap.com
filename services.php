<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap - Service</title>
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
            <h3 class="text-white display-3 mb-4">Our Services</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white">Services</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
    <!-- Services Start -->
    <div class="container-fluid bg-light service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Services</h5>
                <h1 class="mb-0">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
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
                        <div class="col-12">
                            <div class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">🔥 Creative Excellence</h5>
                                    <p class="mb-0">Stand out from the crowd with our creative brilliance. We don't just create ads; we craft compelling stories that resonate with your audience, leaving a lasting impression.
                                    </p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-hotel fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">🤝 Client-Centric Approach </h5>
                                    <p class="mb-0">Your success is our priority. We work closely with you to understand your goals, challenges, and aspirations, ensuring a collaborative partnership that delivers tangible results.
                                    </p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-user fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
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
                        <div class="col-12">
                            <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-hotel fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">🚀Boost Your Ads Business Role</h5>
                                    <p class="mb-0">Are you ready to take your business to new heights? Look no further! Our cutting-edge advertising services are tailored to elevate your brand, capture attention, and drive results.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-user fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">🎯 Targeted Strategies</h5>
                                    <p class="mb-0">We don't believe in one-size-fits-all solutions. Our expert team crafts personalized advertising strategies to reach your specific audience, ensuring maximum impact and engagement.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3 p-3">
                <ul>
                    <li>Brand Development: Establish a powerful brand presence that leaves a lasting impression on your audience.</li>
                    <li>Digital Advertising: Dominate the online landscape with targeted digital campaigns that drive engagement and conversions.</li>
                    <li>Social Media Mastery: Leverage the full potential of social platforms with creative and impactful social media strategies.</li>
                    <li>Campaign Management: Let us handle the intricacies of campaign execution, monitoring, and optimization, so you can focus on your core business.</li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Services End -->




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