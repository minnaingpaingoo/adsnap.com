<?php
error_reporting(0);
session_start();    
?>
<!-- Sign Up Start  -->
<?php
//Processing form data when form is submitted
if(isset($_POST["signup"])){
    
    if(isset($_POST['agreeCheckbox'])){
    
        if($_POST["password"]==$_POST["confirm_password"]){
            $cn=mysqli_connect("localhost","root","","adsnap");
            $sql="select * from customer where Email='" . $_POST["email"] ."'"; 
            $q=mysqli_query($cn,$sql);
            $r=mysqli_num_rows($q);
            $data=mysqli_fetch_array($q);
            mysqli_close($cn);
    
            if($r>0)
            {
            echo "<script>alert('Email is already taken.');</script>";
            } else{
                $pass=$_POST["password"];
                $password=md5($pass);
                $cn1=mysqli_connect("localhost","root","","adsnap");
                $s="insert into customer (Name, Email,Phone,Password,Picture) values('" . $_POST["username"] ."','" . $_POST["email"] . "','" . $_POST["phone"] . "','".$password."','avatar15.jpg')";
                mysqli_query($cn1,$s);
                mysqli_close($cn1);
                echo "<script>alert('Record Save');</script>";
            }
        }else{
            echo "<script>alert('Password and Confirm Password are not matched!');</script>";   
            }    
    }
    else{
        echo "<script>alert('You must agree our term!');</script>";
    }
}
?>
<!-- /Sign UP End   -->

<?php
// Define an array of menu items with their respective links
$menuItems = array(
    'Home' => 'index.php',
    'About' => 'about.php',
    'Services' => 'services.php',
    'Contact' => 'contact.php'
);

// Function to determine if a menu item is active
function isMenuItemActive($currentPage, $menuItem) {
    return ($currentPage === $menuItem) ? 'actives' : '';
}

// Get the current page file name
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <!-- for login  -->
    <link href="./login/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script type="text/javascript" src="./login/EventUtil.js"></script>
    <style>
        .actives {
            background-color: var(--bs-primary);
            color:var(--bs-white) !important;
        }
    </style>
</head>
<body>
     <!-- Navbar start -->
     <?php 
        if($_SESSION['login'])
        {
    ?>
    <a href="index.php" class="navbar-brand p-0">
        <h1 class=" text-primary"><img src="img/ads.png" alt="Logo" class="me-1">AdSnap</h1>
    </a>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
        <?php
        // Loop through menu items and output them
        foreach ($menuItems as $menuItem => $link) {
        // Determine if the current menu item is active
        $isActive = isMenuItemActive($currentPage, $link);
        // Output menu item with active class if active
        echo "<a class='$isActive nav-item nav-link' href='$link'>$menuItem</a>";
        }
        ?> 
            <!-- <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="services.php" class="nav-item nav-link">Services</a> -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Advertisements</a>
                <div class="dropdown-menu m-0">
                <?php
                $cn=mysqli_connect("localhost","root","","adsnap");
                 $sql="SELECT * FROM category order by CategoryName ASC";
                 $result=mysqli_query($cn,$sql);
                 $r=mysqli_num_rows($result);
                 while($data=mysqli_fetch_array($result))
                 {
                    echo "<a href='advertisements.php?id=$data[0]' class='dropdown-item'>$data[1]</a>";
                }
                ?>
                </div>
            </div>
            <!-- <a data-active="contact" href="contact.php" class="nav-item nav-link me-2">Contact</a> -->
        </div>
        <?php
            $cn=mysqli_connect("localhost","root","","adsnap");
            $email=$_SESSION['login'];
            $sql="select * from customer where Email='".$email."'";
            $result=mysqli_query($cn,$sql);
            $r=mysqli_num_rows($result);
            while($data=mysqli_fetch_array($result)){
                if($data[5]=="avatar15.jpg")
                { 
        ?>
        <div class="nav-item dropdown">
            <a href="#" class="dropdown-toggle btn btn-primary py-2" data-bs-toggle="dropdown">
            <small><img class="rounded-circle me-lg-2" src="./img/avatar15.jpg" alt="" style="width: 40px; height: 40px;" >My Dashboard</small></a>
            <div class="dropdown-menu rounded">
                <a href="profile.php" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                <a href="ads_upload.php" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Upload Ads Post</a>
                <a href="ads_history.php" class="dropdown-item"><i class="fas fa-bell me-2"></i> History</a>
                <a href="change_password.php" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                <a href="logout.php" onclick="return confirm('Do you really want to logout?')" onclick="javascript:window.open('logout.php','_self')" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
            </div>
        </div>
        <?php
            }
            else{
        ?>
          <div class="nav-item dropdown">
            <a href="#" class="dropdown-toggle btn btn-primary py-2" data-bs-toggle="dropdown">
            <small><img class="rounded-circle me-lg-2" src="./profileimages/<?php echo $data[5]; ?>" alt="" style="width: 40px; height: 40px;" >My Dashboard</small></a>
            <div class="dropdown-menu rounded">
                <a href="profile.php" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                <a href="ads_upload.php" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Upload Ads Post</a>
                <a href="ads_history.php" class="dropdown-item"><i class="fas fa-bell me-2"></i> History</a>
                <a href="change_password.php" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                <a href="logout.php" onclick="return confirm('Do you really want to logout?')" onclick="javascript:window.open('logout.php','_self')" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
            </div>
        </div>
        <?php
            }          
     }
    ?>
    </div>

    <?php
        }else{
    ?>
    <a href="index.php" class="navbar-brand p-0">
        <h1 class=" text-primary"><img src="img/ads.png" alt="Logo" class="me-1">AdSnap</h1>
    </a>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
        <?php
        // Loop through menu items and output them
        foreach ($menuItems as $menuItem => $link) {
        // Determine if the current menu item is active
        $isActive = isMenuItemActive($currentPage, $link);
        // Output menu item with active class if active
        echo "<a class='$isActive nav-item nav-link' href='$link'>$menuItem</a>";
        }
        ?> 
            <!-- <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="services.php" class="nav-item nav-link">Services</a> -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Advertisements</a>
                <div class="dropdown-menu m-0">
                <?php
                $cn=mysqli_connect("localhost","root","","adsnap");
                 $sql="SELECT * FROM category order by CategoryName ASC";
                 $result=mysqli_query($cn,$sql);
                 $r=mysqli_num_rows($result);
                 while($data=mysqli_fetch_array($result))
                 {
                    echo "<a href='advertisements.php?id=$data[0]' class='dropdown-item'>$data[1]</a>";
                }
                ?>
                </div>
            </div>
            <!-- <a href="contact.php" class="nav-item nav-link me-2">Contact</a> -->
        </div>
        <button class="btn btn-primary me-2 py-3" id="form-open"><i class="fa fa-sign-in-alt me-2"></i>Login</button>
    </div>
    <?php       
        }
    ?>
  
    <!-- Navbar End -->

    <section class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            <!-- Login Form -->
            <div class="form login_form">
                <form action="login.php" method="POST">
                    <h2>Login</h2>

                    <div class="input_box">
                        <input type="email" name="email1" maxlength="30" placeholder="Enter your email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" name="password1" maxlength="20" placeholder="Enter your password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="option_field">
                        <a href="forgotPassword.php" class="forgot_pw">Forgot password?</a>
                    </div>
                    <input type="submit" class="button" name="log" value="Login Now">
                    <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
                </form>
            </div>

            <!-- Signup From -->
            <div class="form signup_form">
                <form action="" method="POST">
                    <h2>Signup</h2>
                    <div class="input_box">
                        <i class="uil uil-user user"></i>
                        <input type="text" maxlength="20" name="username" id="txtname" placeholder="Enter your name" required pattern="[a-zA-z _]{3,50}" title="Please Enter Only Characters between 3 to 50 for your name." />
                    </div>
                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" maxlength="30" name="email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <i class="uil uil-eye-slash pw_hide"></i>
                        <input type="password" placeholder="Create password" minlength="8" maxlength="20" name="password" required pattern="[a-zA-z0-9]{8,20}" title="Please Enter Only Characters and numbers between 8 to 20." />
                        <i class="uil uil-lock password"></i>
                    </div>
                    <div class="input_box">
                        <i class="uil uil-eye-slash pw_hide"></i>
                        <input type="password" placeholder="Confirm password" maxlength="20" name="confirm_password" required pattern="[a-zA-z0-9]{8,20}" title="Please Enter Only Characters and numbers between 8 to 20." />
                        <i class="uil uil-lock password"></i>
                    </div>
                    <div class="input_box">
                        <i class="uil uil-phone phone"></i>
                        <input type="text" placeholder="Enter your phone number" minlength="8" maxlength="11" name="phone" value="" id="txtphone" required pattern="[0-9]{8,11}" title="Please enter only digit between 8 to 11." />
                    </div>
                    <input type="checkbox" id="agreeCheckbox" name="agreeCheckbox"><label for="agreeCheckbox">I agree to the terms and conditions</label>
                    <input type="submit" class="button" name="signup" value="Signup Now">

                    <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
                </form>
            </div>
        </div>
    </section>

    <script src="./login/script.js"></script>
    <!-- <script src="script.js"></script> -->
    <!-- Topbar End -->
    <script type="text/javascript">
(function(){
var textbox=document.getElementById("txtphone");
EventUtil.addHandler(textbox,"keypress",function(event){
    event=EventUtil.getEvent(event);
    var target=EventUtil.getTarget(event);
    var charCode=EventUtil.getCharCode(event);
    if(!/\d/.test(String.fromCharCode(charCode)) && charCode>9 && !event.ctrlKey){
        alert("*Please Enter Number.")
    EventUtil.preventDefault(event);
    }
    });
})();

(function(){
var textbox=document.getElementById("txtname");
EventUtil.addHandler(textbox,"keypress",function(event){
    event=EventUtil.getEvent(event);
    var target=EventUtil.getTarget(event);
    var charCode=EventUtil.getCharCode(event);
    if(/\d/.test(String.fromCharCode(charCode)) && charCode>9 && !event.ctrlKey){
        alert("*Please Enter Only Character.")
    EventUtil.preventDefault(event);
    }
    });
})();
</script>   
</body>
</html>