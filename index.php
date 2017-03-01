<?php
 include("functions/functions.php");
 ?>


<html>
<head>
<title>My Shopping Cart</title>

<link rel="stylesheet" href="styles/style.css" media="all"/>
</head>
<body>
<center>
<div class="main_wrapper">

<div class="header_wrapper">
<img src="images/logo.jpg" height="150px">
<img src="images/adv.jpg" width="805px" height="150px">


</div>
	
<div class="menubar">
<ul id="menu">
<li><a href="">Home</a></li>
<li><a href="">All Products</a></li>
<li><a href="">Sign Up</a></li>
<li><a href="">Contact Us</a></li>
</ul>


</div>


<div class="content_wrapper">

      
<div id="sidebar">

<div id="sidebar_title">Categories</div>

<ul id="cats">
<?php getCats(); ?>
</ul>



<div id="sidebar_title">Brands</div>

<ul id="cats">

<?php getBrands();?>


</ul>
</div>

<div id="content_area">
 <?php cart(); ?>
 
 <div id="shopping_cart">
<span style="float:right; font-size:18px;padding:5px;line-height:40px;">
welcome User<b style="color:yellow">Shopping cart:</b>Total items:<?php total_items();?>Total Price:<?php total_price();?>
<a href="cart.php" style="color:yellow;">Go to cart</a>
</span>
</div>

   
<div id="products_box">
<?php getPro(); ?>
</div>


</div>
    
<div id="footer">



</div>





</div>



</center>
</body>
</html>