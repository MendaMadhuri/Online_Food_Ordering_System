<?php
include("connect.php");
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_image=mysqli_real_escape_string($con,$_POST['product_image']);
$product_cost=$_POST['product_cost'];
$Qty=$_POST['pqty'];
$total=$product_cost * $Qty;
//echo $total;
			
$stm="select Product_Name from cart where Product_Name='$product_name'";
$que=mysqli_query($con,$stm);
$res=mysqli_fetch_array($que);
$code=isset($res['Product_Name']);

			

if(!$code){
	$query="insert into cart(Product_ID,Product_Name,Product_Image,Product_Cost,Quantity,Total_Price) values('$product_id','$product_name','$product_image','$product_cost','$Qty','$total')";
	$execute=mysqli_query($con,$query);
	echo '<script>alert("inserted");</script>';
	header("Refresh:1;url=snacksmenu.php");
}
else{
	echo '<script>alert("Item already present check in cart");</script>';
	header("Refresh:0;url=snacksmenu.php");
}
?>
