<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/hmpg.css">
</head>
<body background="imgs/bck.jpg">
<div class="div2">
	<marquee scrollamount="15" behavior="alternate"><h3 class="mrq"> "THE BEST AND MOST FRESH PRODUCTS !! ORDER TODAY" </h3></marquee>
	<a href="php/basket.php" style="text-decoration:none"><img class="symbol" src="imgs/symbol3.png" align="right"></a>
	<a href="" style="text-decoration:none"><img class="symbol1" src="imgs/symbol2.png" align="left"></a>
	<a href="" style="text-decoration:none"><h1 class="heading"> BasketAll </h1></a>
	<h3 class="tag"> ! BUY IT HERE OR DON'T BUY AT ALL !</h3>
	</div> 
    <br>
<div class="div1">
	<ul>
   <li style="float:right"><a href="php/basket.php" class="active" >Basket</a></li>
  <li style="float:right"><a href="html/signup.html" class="active">Signup</a></li>
  <?php if(!isset($_SESSION['username'])){echo "<li style='float:right'><a href='html/login.html' class='active'>Login</a></li>";}    
    else {echo "<li style='float:right'><a href='php/logout.php' class='active'>Logout</a></li>";} ?>
  <li style="float:right"><a href="php/fruits.php" class="active" >Fruits</a></li>
  <li style="float:right"><a href="php/vegetables.php" class="active" >Vegetables</a></li>
  <li style="float:right"><a href="php/mandb.php" class="active" >Milk and Bread</a></li>
</ul>
</div>

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="imgs/slide1.jpg" style="width:100%">
  <div class="text">Vegetables so fresh you can't wait to eat them.</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="imgs/slide2.jpg" style="width:100%">
  <div class="text">Fruits sweeter than sugar</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="imgs/slide3.jpg" style="width:100%">
  <div class="text">Milk whiter than white</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
       slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); 
}
</script>
<div class="aboutus">
	<h2>About us</h2>
	<p>This site is created by rohit,vatsal and samidha.</p>
</div>
</body>
</html>
