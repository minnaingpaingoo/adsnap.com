<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
  $adid=intval($_GET['adid']);
  $cn=mysqli_connect("localhost","root","","adsnap");
  $sql = "Delete from advertising where AdId='".$adid."'";
  mysqli_query($cn,$sql);
  mysqli_close($cn);
  echo "<script>alert('Record Delete');</script>";
  echo("<script>window.location.href='manage_ads.php';</script>");
?>