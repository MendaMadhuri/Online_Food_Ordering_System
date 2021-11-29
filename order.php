<html>
<head><style>body{background-color:#f6f2ff}</style></head>
<body>
<?php
include("connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$mobno=$_POST['mobno'];
$address=$_POST['address'];

$que="insert into orderss values('$name','$email','$mobno','$address')";
$sq=mysqli_query($con,$que);
$froms="From: mendamadhuri54@gmail.com";
if($sq & mail($email,$name,"hi
Thank You!
Your Order Placed Successfull!
",$froms))

{
	?>
	<div class="text-align:center">
	<h1 class="display-4 mt-4 " style='color:green;text-align:center'><b>Thank You!</b></h1>
	<h2 class="text-success" style='color:red;text-align:center'>Your Order Placed Successfull!</h2>
	<h4 style='color:black;text-align:center' >Name:<?php echo $name; ?></h4>
	<h4 style='color:black;text-align:center'>Email:<?php echo $email; ?></h4>
	<h4 style='color:black;text-align:center'>Mobile_Number:<?php echo $mobno; ?></h4>
	<h4 style='color:black;text-align:center'>Address:<?php echo $address; ?></h4>
	<h4 style='color:black;text-align:center'>Total Price Of Items:<?php $TOTAL_PRICE=$_POST['TOTAL_PRICE'];echo $TOTAL_PRICE;?></h4>
	
	</div>
<?php
}
?>
</body>
</html>