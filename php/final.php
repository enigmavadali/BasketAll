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
$sql = "select * from users where uname='$usr' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_array($result);
	echo "<div class='div1'><h3 class='tag' style='margin-left: 400px;'>".$row['name']." , Thank You for placing your order with us </h1></div><br>";
	echo "<div class='div1'><h3 class='tag' style='margin-left: 400px;'>Your items will be delivered to &nbsp".$row['addr']."</h3></div>";
}
?>
</body>
</html>