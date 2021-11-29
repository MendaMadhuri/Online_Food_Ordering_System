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
	$First_Name=$_POST['fname'];
    $Last_Name=$_POST['lname'];
    $Mobile_Number=$_POST['mobno'];
	$Email_ID=$_POST['emailid'];
	$Password=$_POST['password'];
	
	$sql="INSERT INTO orders(fname,lname,mobno,emailid,password) VALUES ('$First_Name','$Last_Name','$Mobile_Number','$Email_ID','$Password')";
	
	if(!mysqli_query($con,$sql)) 
	{
		echo 'Not Registered';
	}
	else
	{
		echo 'Registered';
	}
	
	
?>
		




