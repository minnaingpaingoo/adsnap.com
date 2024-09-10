<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
  $cid=intval($_GET['cid']);
  $cn=mysqli_connect("localhost","root","","adsnap");
  $sql = "Delete from category where CategoryId='".$cid."'";
  mysqli_query($cn,$sql);
  mysqli_close($cn);
  echo "<script>alert('Record Delete');</script>";
  echo("<script>window.location.href='manage_category.php';</script>");
?>