<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/products.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body background="../imgs/bck.jpg">
<div class="div2">
    <marquee scrollamount="15" behavior="alternate"><h3 class="mrq"> "THE BEST AND MOST FRESH PRODUCTS !! ORDER TODAY" </h3></marquee>
    <a href="basket.php" style="text-decoration:none"><img class="symbol" src="../imgs/symbol3.png" align="right"></a>
    <a href="../index.php" style="text-decoration:none"><img class="symbol1" src="../imgs/symbol2.png" align="left"></a>
    <a href="../index.php" style="text-decoration:none"><h1 class="heading"> BasketAll </h1></a>
    <h3 class="tag"> ! BUY IT HERE OR DON'T BUY AT ALL !</h3>
    </div> 
    <br>
<div class="div1">
    <ul class="ul1">
  <li style="float:right" class="links"><a href="basket.php" class="active"   >Basket</a></li>
  <li style="float:right" class="links"><a href="../html/signup.html" class="active"  >Signup</a></li>
  <?php if(!isset($_SESSION['username'])){echo "<li style='float:right' class='links'><a href='../html/login.html' class='active'>Login</a></li>";} 
    else {echo "<li style='float:right' class='links'><a href='logout.php' class='active'>Logout</a></li>";} ?>
  <li style="float:right" class="links"><a href="fruits.php" class="active" >Fruits</a></li>
  <li style="float:right" class="links"><a href="vegetables.php" class="active"  >Vegetables</a></li>
  <li style="float:right" class="links"><a href="mandb.php" class="active" >Milk and Bread</a></li>
</ul>
</div>    
<?php
$conn = mysqli_connect('localhost', 'root' , '', 'basketall');
if(!$conn)
  die("error!");
$sql = "select * from products where p_type='fruits' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    echo " <div class='columns'>
    <form action='addbasket.php?id=".$row['p_id']."' method='post'>
  <ul class='price'>
    <li class='header'>".$row['p_name']."/Rs.".$row['p_cost']."</li>
  <li class='img'><img src='../imgs/".$row['img_name']."' height = 200px width=65%;></li>
    <li class='grey'>".$row['p_des']."</li>
    <li><input type='number' name='quantity' placeholder='Quantity' class='quantity'></li>
    <li class='grey'><input type='submit' value='Add To Basket' class='button'></li>
  </ul>
  </form>
</div> " ;
  }
}
?>
</body>
</html>