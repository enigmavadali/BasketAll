<?php 
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/basket.css">
</head>
<body background="../imgs/bck.jpg">
<div class="div2">
	<marquee scrollamount="15" behavior="alternate"><h3 class="mrq"> "THE BEST AND MOST FRESH PRODUCTS !! ORDER TODAY" </h3></marquee>
	<a href="../php/basket.php" style="text-decoration:none"><img class="symbol" src="../imgs/symbol3.png" align="right"></a>
	<a href="../index.php" style="text-decoration:none"><img class="symbol1" src="../imgs/symbol2.png" align="left"></a>
	<a href="../index.php" style="text-decoration:none"><h1 class="heading"> BasketAll </h1></a>
	<h3 class="tag" style="margin-left: 500px;"> ! BUY IT HERE OR DON'T BUY AT ALL !</h3>
	</div> 
    <br>
<div class="div1">
	<ul class="ul1">
    <li style="float:right;" class="links"><a href="" class="active" >Basket</a></li>
  <li style="float:right;" class="links"><a href="../html/signup.html" class="active"  >Signup</a></li>
  <?php if(!isset($_SESSION['username'])){echo "<li style='float:right' class='links'><a href='../html/login.html' class='active'>Login</a></li>";} 
    else {echo "<li style='float:right' class='links'><a href='logout.php' class='active'>Logout</a></li>";} ?>
  <li style="float:right;" class="links"><a href="fruits.php" class="active" >Fruits</a></li>
  <li style="float:right;" class="links"><a href="vegetables.php" class="active"  >Vegetables</a></li>
  <li style="float:right;" class="links"><a href="mandb.php" class="active">Milk and Bread</a></li>
</ul>
</div>
<?php
$usr = $_SESSION['username'];
$conn = mysqli_connect('localhost', 'root' , '', 'basketall');
if(!$conn)
  die("error!");
$sql = "select * from basket where username='$usr' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
  	echo "<div class='summary' style='overflow:hidden; float:left; margin-top:100px; margin-left:60px; width:50%; color:#00ff80;  border:4px solid #4286f4; text-align: left; border-radius: 15px; background-color: #353535; font-family:Courier New;'>
<img src='../imgs/".$row['imgname']."' style='width:70px; height:70px; border-radius: 15px; margin-top: 5px; margin-left: 10px;' class='sum1'>
<h3 class='sum1' style='color: #00ff80; font-family: Courier New; padding-bottom:10px; '>&nbsp".$row['prod_name']." &nbsp  Quantity:".$row['quantity']." &nbsp  Price:Rs.".$row['cost']."</h3>
<a href='delete.php?id=".$row['prod_id']."'><img src='../imgs/delete.png' style='width:18px; height:18px; float: right; padding-top:32px; padding-right:10px;  ' class='sum1'></a>
</div> ";
	}
}
$sql2 = "select sum(cost) from basket where username='$usr' ";
$res = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($res);
echo " <div style='overflow:hidden; color: #00ff80; height:150px;  margin-top:100px;  margin-left:920px; border:4px solid #4286f4; text-align: center; border-radius: 15px; background-color: #353535; font-family:Courier New; width:27%; ' class='total'>
<form action='final.php'>	
<h2 style='color: #00ff80; font-family: Courier New;  '><u>Total Amount: Rs.".$row2['sum(cost)']."</u></h2>
<input type='submit' value='Proceed to Checkout' class='button'>
</form>
</div>  ";

?>
</body>
</html>