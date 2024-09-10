<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php

if (strlen($_SESSION['login']==0)) 
{
  header('location:index.php');
}else{
    if(isset($_POST["submit"]))
    {
        $cn=mysqli_connect("localhost","root","","adsnap");
        $f1=0;
        $f2=0;
        $target_dir = "productimages/";

        //For New Picture-1
        $target_file = $target_dir.basename($_FILES["new_pic1"]["name"]);
        $uploadok = 1;
        $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);    
    
        //check file size
        if($_FILES["new_pic1"]["size"]>10000000){
            echo "<script>alert('Sorry, your first upload file is too large.');</script>";
            $uploadok=0;
        }
        else{
            if(move_uploaded_file($_FILES["new_pic1"]["tmp_name"], $target_file)){
                $f1=1;
            } 
        }

        //For New Picture-2
        $target_file = $target_dir.basename($_FILES["new_pic2"]["name"]);
        $uploadok = 1;
        $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
    
        //check file size
        if($_FILES["new_pic2"]["size"]>10000000){
            echo "<script>alert('Sorry, your second upload file is too large.');</script>";
            $uploadok=0;
        }   
        else{
            if(move_uploaded_file($_FILES["new_pic2"]["tmp_name"], $target_file)){
                $f2=1;
             } 
        }

        $id=intval($_GET['id']);
        $ad_title=$_POST["ads_title"];
        $company_name=$_POST["company_name"];
        $ads_description=$_POST["ads_description"];
        $pic1=basename($_FILES["new_pic1"]["name"]);
        $pic2=basename($_FILES["new_pic2"]["name"]);

        if (empty($_FILES["new_pic1"]["name"]) && empty($_FILES["new_pic2"]["name"])){
            $s="update advertising set AdTitle='" . $ad_title ."',CompanyName='" . $company_name . "',AdDescription='" . $ads_description . "' where AdId='".$id."'";
        }
        elseif (empty($_FILES["new_pic1"]["name"])){
            $s="update advertising set AdTitle='" . $ad_title ."',CompanyName='" . $company_name . "',AdDescription='" . $ads_description . "', Picture2='".$pic2."' where AdId='".$id."'";
        }
        else{
            $s="update advertising set AdTitle='" . $ad_title ."',CompanyName='" . $company_name . "',AdDescription='" . $ads_description . "', Picture1='".$pic1."' where AdId='".$id."'";
        }
        mysqli_query($cn,$s);      
        mysqli_close($cn);
        echo "<script>alert('Record Update');</script>";  
    }  
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdSnap- Update Ads</title>
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
            <h3 class="text-white display-3 mb-4">Update Ads</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Update Ads</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Upload post Start -->
    <div class="container-fluid about bg-light-subtle bg-opacity-25 py-2 mt-2">
        <div class="container card shadow-lg py-3 w-50">
            <div class="row">
                <!-- Datatables -->
                <!-- DataTable with Hover -->
                <div class="col-lg-12">
                    <div class=" mb-4 rounded p-4">
                        <div class=" py-3 d-flex flex-row align-items-center justify-content-between">
                            <h3 class="mb-0 text-gray-800">Update Ads Form</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data">
                                <?php
                                $id=intval($_GET['id']);
                                $cn=mysqli_connect("localhost","root","","adsnap");
                                $sql = "SELECT advertising.AdId,advertising.AdTitle,advertising.CompanyName,advertising.AdDescription,advertising.Picture1,advertising.Picture2 FROM advertising,customer,category where advertising.CustomerId=customer.CustomerId AND advertising.CategoryId=category.CategoryId AND advertising.AdId='".$id."';";
                                $result=mysqli_query($cn,$sql);
                                while($data=mysqli_fetch_array($result))
                                {
                                ?>
                                <div class="control-group mb-3">
                                    <label class="control-label mb-1" for="basicinput1">Ads Title</label>
                                    <div class="col-6 w-100">
                                        <input type="text" class="form-control" id="basicinput1" name="ads_title" value="<?php echo $data[1];?>" class="span6 tip" required minlength="5" maxlength="30" placeholder="Enter Your Ads Title" title="Ads title can contain between 5 and 30">
                                    </div>
                                </div>
                                <div class="control-group mb-3">
                                    <label class="control-label mb-1" for="basicinput2">Company Name</label>
                                    <div class="col-6 w-100">
                                        <input type="text" class="form-control" id="basicinput2" value="<?php echo $data[2];?>" name="company_name" class="span6 tip" required minlength="5" maxlength="20" placeholder="Enter Your Company Name" title="Company Name can contain between 5 and 20">
                                    </div>
                                </div>

                                <div class="control-group mb-3">
                                    <label class="control-label mb-1" for="basicinput3">Ads Description</label>
                                    <div class=" col-6 form-floating w-100">
                                        <textarea class="form-control" placeholder="Leave a comment here" name="ads_description" id="basicinput3" style="height: 100px" required><?php echo $data[3];?></textarea>
                                        <label for="floatingTextarea2">Description</label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Current Picture-1</label>
                                    <div class="col-6">
                                        <img class="mt-3"  src="productimages/<?php  echo $data[4];?>" width="100px" height="100px">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">Current Picture-2</label>
                                    <div class="col-6">
                                        <img class="mt-3"  src="productimages/<?php  echo $data[5];?>" width="100px" height="100px">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1">New Picture-1</label>
                                    <div class="col-6">
                                        <input type="file" name="new_pic1" id="productimage1" accept=".png,.jpg,.jpeg,.gif" class="file-upload-default">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-1">New Picture2</label>
                                    <div class="col-6">
                                        <input type="file" name="new_pic2" id="productimage2" accept=".png,.jpg,.jpeg,.gif" class="file-upload-default">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary rounded-pill " name="submit">
                                            <i class="fa fa-plus"></i> Update
                                        </button>
                                        <button type="reset" class="btn btn-primary rounded-pill me-2">
                                            <i class="fa fa-cancel"></i> Cancel
                                        </button>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Upload post End -->


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