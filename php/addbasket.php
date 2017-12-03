<?php
session_start();

$quan = $_POST['quantity'];
$id = $_REQUEST['id'];

$conn = mysqli_connect('localhost', 'root' , '', 'basketall');
if(!$conn)
  die("error!");
$sql = "select * from products where p_id='$id' ";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

$usr=$_SESSION['username'];
$pname = $row['p_name'];
$img = $row['img_name'];
$cost= $row['p_cost'] * $quan ;

$sql = "insert into basket values('$usr' , '$id', '$pname', '$img', '$quan', '$cost') ";
$result = mysqli_query($conn,$sql);
header("location:basket.php");

?>