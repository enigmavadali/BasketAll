<?php
session_start();

$id = $_REQUEST['id'];
$usr = $_SESSION['username'];
$conn = mysqli_connect('localhost', 'root' , '', 'basketall');
if(!$conn)
  die("error!");
$sql = "delete from basket where username='$usr' and prod_id='$id' ";
$res=mysqli_query($conn,$sql);
header("location:basket.php");
?>