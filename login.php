<?php
if(isset($_POST["log"])){
// Retrieve user input
$email = $_POST['email1'];

$pass = $_POST['password1'];
$password=md5($pass);

// Perform query to check if user exists
$cn=mysqli_connect("localhost","root","","adsnap");
$sql = "SELECT * FROM customer WHERE Email='$email' AND Password='$password'";
$result =mysqli_query($cn,$sql) ;

if (mysqli_num_rows($result) == 1) {  
   while ($row = mysqli_fetch_assoc($result)) {  
   session_start(); 
   $_SESSION['name']=$row["Name"];  
   $_SESSION['login']=$row["Email"];
   $_SESSION['id']=$row["CustomerId"];
   }
   echo"<script>alert('Login successful.');</script>";
   echo "<script type='text/javascript'> document.location = 'index.php'; </script>"; 
} else {
        echo"<script>alert('Incorrect Email or Password!!!');</script>";
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>"; 
    }
}
mysqli_close($cn);