<?php
include('connect.php');
$product_id=$_POST['Product_ID'];
$session=$_POST['session'];
$query="delete from $session where Product_ID='$product_id'";
$execute=mysqli_query($con,$query);
echo '<script> alert("deleted");</script>';
header("Refresh:1;deletealter.php");
$con->close();
?>
