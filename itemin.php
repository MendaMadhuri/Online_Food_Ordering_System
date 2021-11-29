<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,"project2"))
	{
		echo 'data base not selected';
	}
	$product_id=$_POST['product_id'];
	$product_name=$_POST['product_name'];
	$product_image=$_POST['product_image'];
	$product_cost=$_POST['product_cost'];
	
	$sql="INSERT INTO `breakfast`(`Product_ID`, `Product_Name`, `Product_Image`, `Product_Cost`) VALUES ('$product_id','$product_name','$product_image','$product_cost')";
	
	if(!mysqli_query($con,$sql)) 
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'inserted';
	}
	
	
?>
		




