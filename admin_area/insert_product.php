<?php
 include("includes/db.php");
 ?>



<html>
<head>
<title>Insert New Product </title>
</head>
<body>

<form action="insert_product.php" method="post" enctype="multipart/form-data">
<table align="center" border="2" bgcolor="orange" >
<thead ><th>Product Entry</th>
</thead>
<tbody>
<tr>
<td >Product title:</td>
<td ><input type="text" name="product_title" required/></td></br>
</tr>
<tr>
<td >Product category:</td>
<td ><select name="product_cat">
<option value="">---SELECT CATEGORY---</option>
<?php
global $con;

$get_cats="select * from categories";

$run_cats=mysqli_query($con,$get_cats);

while($row_cats=mysqli_fetch_array($run_cats))
{

$cat_id=$row_cats['cat_id'];
$cat_title=$row_cats['cat_title'];


echo "<option>$cat_title</option>";
}
 ?>
</select></td></br>
</tr>
<tr>
<td>Product brand:</td>
<td><select name="product_brand">
<option value="">---SELECT BRAND---</option>
<?php
global $con;

$get_brands="select * from brands";

$run_brands=mysqli_query($con,$get_brands);

while($row_brands=mysqli_fetch_array($run_brands))
{

$brand_id=$row_brands['brand_id'];
$brand_title=$row_brands['brand_title'];


echo "<option>$brand_title</option>";
}
 ?>

</select></td></br>
</tr>
<tr>
<td>Image:</td>
<td><input type="file" name="product_image" id="file" required /></td><br/>
</tr>
<tr>
<td >Price:</td>
<td><input type="text" name="product_price" id="pcost" required/></td><br/>
</tr>
<tr>
<td>Description:</td>
<td><textarea cols="20" rows="10" name="product_desc"></textarea></td></br>
</tr>
<tr>
<td ><input type="submit" value="Insert Now" name="insert_post"></td>
 </tr>
</table>
 </form>
 </body>
 </html>
 
 <?php
 if(isset($_POST['insert_post']))
 {
	 $product_title=$_POST['product_title'];
	 $product_cat=$_POST['product_cat'];
	 $product_brand=$_POST['product_brand'];
	 $product_price=$_POST['product_price'];
	 $product_desc=$_POST['product_desc'];
	 $product_image = $_FILES['product_image']['name'];
	
	 
	 
	 
	 $insert_product="insert into products values('','$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image')";
	 
	 
	 $insert_pro=mysqli_query($con,$insert_product);
	 
	 if(!$insert_pro)
	 {
		
		 die(mysqli_error($con));
	 }
	 else
	 {
		 // echo "<script> alert('Product inserted')</script>";
		 //echo "<script>window.open ('insert_product.php','_self') </script>";
	 }
	 move_uploaded_file($_FILES['product_image']['tmp_name'],"product_images/".$_FILES['product_image']['name']);
	 }

 ?>