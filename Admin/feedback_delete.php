<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
  $cn = mysqli_connect("localhost", "root", "", "adsnap");
  $id=intval($_GET['id']);
  $sql = "Delete from contact where ContactId='".$id."'";
  mysqli_query($cn,$sql);
  mysqli_close($cn);
  echo "<script>alert('Record Deleted');</script>";
  echo("<script>window.location.href='feedback.php';</script>");
?>
