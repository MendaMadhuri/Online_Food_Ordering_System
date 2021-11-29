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
	$id=$_POST['id'];
    $name=$_POST['name'];
    $father_name=$_POST['fname'];
	$dob=$_POST['dob'];
	$mobno=$_POST['mobno'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$branch=$_POST['branch'];
	$year=$_POST['year'];
	
	    $sql = " update orders set name='".$name."',father_name='".$fname."',dob='".$dob."',mobno='".$mobno."',email='".$email."',pass='".$pass."',branch='".$branch."',year='".$year."' where id='".$id."'";
        $res = mysqli_query($con,$sql);
		if($res)
        {
			echo "<script>alert('Updated Successfully')</script>";
			header("location:admin_page.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    
 header("location:admin_page.php");   
	
?>