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
	
	
	$sql1 = "DROP TABLE orders";
    
	
	$res=mysqli_query($con,$sql1);
	if($res)
	{
		header("location:fetch.php");
	}
	else
	{
		echo 'please check the query';
	}
header("location:fetch.php")
?>