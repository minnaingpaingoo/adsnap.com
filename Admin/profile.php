<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if($_SESSION['loginstatus']=="")
{
    header("location:loginform.php");
}
?>
<?php

if(isset($_POST['submit']))
{
  $aid=$_SESSION['aid'];
  $username=$_POST['username'];
  $adminName=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
 
    $cn1=mysqli_connect("localhost","root","","adsnap");
    $s="update admin set Username='".$username."' , Name='".$adminName."' , Email='".$email."' , Phone='".$phone."' where AdminId='".$aid."'";
    mysqli_query($cn1,$s);
    mysqli_close($cn1);
    echo '<script>alert("Profile is updated successful.")</script>';

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - My Profile</title>
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

    <!-- DataTable search and look entries -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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

        <?php include('includes/sidebar.php'); ?>

        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->

            <?php include('includes/navbar.php'); ?>

            <!-- Navbar End -->

            <!-- Admin Profile Start -->
            <div class="container-fluid pt-4 px-4">   
            <!-- Row -->
            <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4 bg-secondary rounded h-100 p-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="mb-0 text-gray-800">Update Admin Profile</h3>
                </div>
                <div class="card-body">
                  <form method="post">
                    <?php
                    $aid=$_SESSION['aid'];
                    $cn = mysqli_connect("localhost", "root", "", "adsnap");
                    $s="select * from admin where AdminId='".$aid."'";
                    $result=mysqli_query($cn,$s);
                    $r=mysqli_num_rows($result);
                     while($data=mysqli_fetch_array($result))
                     { 
                        ?>
                        <div class="container rounded bg-secondary mt-0">
                          <div class="row">
                            <div class="col-md-4 border-right">
                              <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                               <?php 
                               if($data[6]=="avatar15.jpg"){ ?>
                                <img class="rounded-circle mt-5" src="img/avatar15.jpg"  width="90">
                                <?php 
                              } else { ?>
                                <img class="rounded-circle mt-5"  src="profileimages/<?php  echo $data[6];?>" width="90">
                                <?php 
                              } ?><span class="font-weight-bold mt-3 mb-1"><?php  echo $data[2];?></span>
                                    <span>+95&nbsp;<?php  echo $data[3];?></span>
                              <div class="mt-3">
                                <a href="update_adminimage.php?id=<?php echo $aid;?>">Edit Image</a>
                              </div>
                              </div>
                            </div>
                            <div class="col-md-8">
                            <div class="p-3 py-3">
                              <div class="row mt-2">
                                <div class="col-md-6">
                                    <label for="admin_name" class="form-group mb-1">Admin Name</label>
                                    <input type="text" id="admin_name" class="form-control" name="name" value="<?php  echo $data[1];?>" required='true' pattern="[A-Za-z ]{4,20}" title="Please Enter between 4 and 20 characters only!!">
                                </div>
                                <div class="col-md-6">
                                    <label for="admin_email" class="form-group mb-1">Email</label>
                                    <input type="email" id="admin_email" class="form-control" name="email" value="<?php  echo $data[2];?>" required title="Enter Your Email">
                                </div>
                              </div>
                              <div class="row mt-3">
                                  <div class="col-md-6">
                                  <label for="phoneno" class="form-group mb-1">Phone No</label>
                                  <input type="text" id="phoneno" class="form-control" id="txtphone" name="phone" value="0<?php  echo $data[3];?>" pattern="[0-9]{8,11}" title="Enter only digit between 8 and 11"  required minlength="8" maxlength="11">
                                </div>
                                <div class="col-md-6">
                                  <label for="uname" class="form-group mb-1">Username</label>
                                  <input type="text" id="uname" class="form-control" name="username" value="<?php  echo $data[4];?>" required pattern="[a-z0-9]{4,20}" title="Please Enter between 4 and 20 small letters only without space and followed by number is allowed!">
                                </div>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                     <label for="regdate" class="form-group mb-1">Reg Date</label>
                                     <input type="text" id="regdate" class="form-control bg-dark"  value="<?php  echo $data[7];?>" readonly="true">
                                </div>
                              </div>
                              <div class="mt-5 text-right">
                                <button class="btn btn-primary profile-button" type="submit" name="submit">Update Profile</button>
                              </div>
                            </div>
                            </div>
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
            <!--Row-->
            </div> 
            <!-- Admin Profile End -->

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


    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

<script src="js/EventUtil.js"></script>
    <script type="text/javascript">
        (function() {
            var textbox = document.getElementById("txtphone");
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