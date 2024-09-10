<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap - Advertisements</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .blog-grid {
            position: relative;
            box-shadow: 0 1rem 1.75rem 0 rgba(45, 55, 75, 0.1);
            height: 100%;
            border: 0.0625rem solid rgba(220, 224, 229, 0.6);
            border-radius: 0.25rem;
            transition: all .2s ease-in-out;
            height: 100%
        }

        .blog-grid span {
            color: #292dc2
        }

        .blog-grid img {
            width: 100%;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem
        }

        .blog-grid-text {
            position: relative
        }

        .blog-grid-text>span {
            color: #292dc2;
            font-size: 13px;
            padding-right: 5px
        }

        .blog-grid-text h4 {
            line-height: normal;
            margin-bottom: 15px
        }

        .blog-grid-text .meta-style2 {
            border-top: 1px dashed #cee1f8;
            padding-top: 15px
        }

        .blog-grid-text .meta-style2 ul li {
            margin-bottom: 0;
            font-weight: 500
        }

        .blog-grid-text .meta-style2 ul li:last-child {
            margin-right: 0
        }

        .blog-grid-text ul {
            margin: 0;
            padding: 0
        }

        .blog-grid-text ul li {
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            margin: 5px 10px 5px 0
        }

        .blog-grid-text ul li:last-child {
            margin-right: 0
        }

        .blog-grid-text ul li i {
            font-size: 14px;
            font-weight: 600;
            margin-right: 5px
        }

        .blog-grid-text p {
            font-weight: 400;
            padding: 0
        }

        .blog-list-left-heading:after,
        .blog-title-box:after {
            content: '';
            height: 2px
        }

        .blog-grid-simple-content a:hover {
            color: #1d184a
        }

        .blog-grid-simple-content a:hover:after {
            color: #1d184a
        }

        .blog-grid-text {
            position: relative
        }

        .blog-grid-text>span {
            color: #292dc2;
            font-size: 13px;
            padding-right: 5px
        }

        .blog-grid-text h4 {
            line-height: normal;
            margin-bottom: 15px
        }

        .blog-grid-text .meta-style2 {
            border-top: 1px dashed #cee1f8 !important;
            padding-top: 15px
        }

        .blog-grid-text .meta-style2 ul li {
            margin-bottom: 0;
            font-weight: 500
        }

        .blog-grid-text .meta-style2 ul li:last-child {
            margin-right: 0
        }

        .blog-grid-text ul {
            margin: 0;
            padding: 0
        }

        .blog-grid-text ul li {
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            margin: 5px 10px 5px 0
        }

        .blog-grid-text ul li:last-child {
            margin-right: 0
        }

        .blog-grid-text ul li i {
            font-size: 14px;
            font-weight: 600;
            margin-right: 5px
        }

        .blog-grid-text p {
            font-weight: 400;
            padding: 0
        }

        a,
        a:active,
        a:focus {
            color: #575a7b;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
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
            <h3 class="text-white display-3 mb-4">Advertisements</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Advertisements</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <?php
            $catid = intval($_GET['id']);
            $cn = mysqli_connect("localhost", "root", "", "adsnap");
            $sql = "SELECT CategoryName from category WHERE CategoryId='" . $catid . "'";
            $result = mysqli_query($cn, $sql);
            $r = mysqli_num_rows($result);
            while ($data = mysqli_fetch_array($result)) {
            ?>

                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Advertisements</h5>
                    <h1 class="mb-4"><?php echo $data[0]; ?> Collections</h1>
                    </p>
                </div>
            <?php
            }
            ?>
            <div class="row mt-n5 mb-3">
                <?php
                $catid = intval($_GET['id']);
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

                $sql = "SELECT advertising.AdId,advertising.AdTitle,advertising.Picture1,advertising.CompanyName,customer.Name,advertising.UploadDate from customer,advertising WHERE advertising.CustomerId=customer.CustomerId AND advertising.Status=1 and advertising.CategoryId='" . $catid . "' ORDER BY advertising.UploadTime DESC LIMIT $startFrom, $recordsPerPage;";
                $result = mysqli_query($cn, $sql);
                $r = mysqli_num_rows($result);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="blog-grid">
                            <div class="blog-grid-img position-relative"><img alt="img" src="productimages/<?php echo $data[2]; ?>" style="height: 300px;"></div>
                            <div class="blog-grid-text p-4">
                                <h3 class="h5 mb-3 text-center"><?php echo $data[1]; ?></h3>
                                <span class="fs-6 text-dark me-2">Upload by:</span><span class="fs-6 text-dark"><?php echo $data[4]; ?></span> <br>
                                <span class="fs-6 text-dark me-2">Company Name:</span><span class="fs-6 text-dark"><?php echo $data[3]; ?> </span>
                                <div class="text-dark">
                                    <ul>
                                        <li><i class="fas fa-calendar-alt me-2"></i><?php echo $data[5]; ?></li>|
                                        <li><i class="fa fa-thumbs-up me-1 text-primary"></i> <?php echo rand(1, 10); ?>K</li>|
                                        <li><i class="fa-solid fa-star text-warning me-1"></i> <?php echo rand(1, 5); ?></li>
                                    </ul>
                                </div>
                                <a href="detail.php?adid=<?php echo $data[0]; ?>" class="btn btn-primary rounded-pill mt-3 px-4 ">Read More</a>
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
            $sql = "SELECT COUNT(AdId) AS total FROM advertising,category where advertising.CategoryId=category.CategoryId and Status=1 and advertising.CategoryId='".$catid."'";
            $result = $cn->query($sql);
            $row = $result->fetch_assoc();
            $totalRecords = $row['total'];
            $totalPages = ceil($totalRecords / $recordsPerPage);
            //if ($totalRecords > $recordsPerPage) {
                echo '<nav aria-label="Page navigation"><ul class="pagination">';
                if ($currentPage > 1) {
                    echo '<li class="page-item"><a class="page-link" href="?id=' . $catid . '&&page=' . ($currentPage - 1) . '">Previous</a></li>';
                }
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo '<li class="page-item ' . ($i == $currentPage ? 'active' : '') . '"><a class="page-link" href="?id=' . $catid . '&&page=' . $i . '">' . $i . '</a></li>';
                }
                if ($currentPage < $totalPages) {
                    echo '<li class="page-item"><a class="page-link" href="?id=' . $catid . '&&page=' . ($currentPage + 1) . '">Next</a></li>';
                }
                echo '</ul></nav>';
           // }
            ?>

        </div>
    </div>
    <!-- Blog End -->

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