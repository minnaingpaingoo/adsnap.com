<?php  if(!isset($_SESSION)) { session_start(); } ?>
<?php
if($_SESSION['loginstatus']=="")
{
    header("location:loginform.php");
}

?>
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
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a> 
           
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <?php 
                        if($data[6]=="avatar15.jpg")
                        { 
                    ?>
                            <img class="rounded-circle me-lg-2" src="img/avatar15.jpg" alt="" style="width: 40px; height: 40px;" >
                    <?php 
                        } else { 
                        ?>
                            <img class="img-profile rounded-circle" src="profileimages/<?php  echo $data[6];?>" style="width: 40px; height: 40px;"> 
                         <?php 
                        } ?>
                            <span class="d-none d-lg-inline-flex"><?php  echo $data[1];?></span>
                        </a>
                        <?php
                        }
                        ?>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            <a href="change_password.php" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item" onclick="return confirm('Do you really want to logout?')" onclick="javascript:window.open('logout.php','_self')">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>