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
 <div id="shopping_cart">
<span style="float:right; font-size:18px;padding:5px;line-height:40px;">
welcome User
<a href="cart.php" style="color:yellow;">Go to cart</a>
</span>
</div>

    
<div id="products_box">
<form action="ecommerce/cart.php" method="post" enctype="multipart/form-data">
<table align="center" width="700" bgcolor="skyblue">
<tr align="center">
<td colspan="5"><h2>Update your cart</h2></td><br>
</tr>
<tr align="center">
<th> Remove</th>
<th>Product</th>
<th>Total price</th>
</tr>
<?php 
$total=0;
global $con;
$ip=getIp();
$sel_price="select * from cart where ip_add='$ip'";
$run_price=mysqli_query($con,$sel_price);
while($p_price=mysqli_fetch_array($run_price))
{
	
$pro_id=$p_price['p_id'];
$pro_price="Select * from products where product_id='$pro_id'";
$run_pro_price=mysqli_query($con,$pro_price);

while($pp_price=mysqli_fetch_array($run_pro_price))
{
	$product_price=array($pp_price['product_price']);
	$product_title = $pp_price['product_title'];
	$product_image=$pp_price['product_image'];
	$single_price=$pp_price['product_price'];
	
	//$values=array_sum($product_price);
	//$total+=$values;
	



echo"
<tr align='center'>
<td><input type='checkbox' name='remove[]'/></td>
<td>". $product_title."<br></td>
<td>Total price</td>
<td></td>
</tr>"


}
 ?>
</table>
</div>
    
<div id="footer">



</div>





</div>



</center>
</body>
</html>