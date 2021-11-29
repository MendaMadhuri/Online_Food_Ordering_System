<?php
include('connect.php');
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_image=$_POST['product_image'];
$product_cost=$_POST['product_cost'];

$session=$_POST['session'];
$query="UPDATE `$session` set product_id='".$product_id."',product_name='".$product_name."',product_image='".$product_image."',product_cost='".$product_cost."'";
$execute=mysqli_query($con,$query);
echo '<script> alert("success");</script>';
header("Refresh:1;url=updation.php");
$con->close();
?>
