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
	$id=$row['id'];	
	$name = $row['name'];
	$fname = $row['father_name'];
	$dob = $row['dob'];
	$mobno = $row['mobile'];
	$email=$row['email'];
	$branch = $row['branch'];
	$year = $row['year'];		
	$rno = $row['room'];
	
	    $sql = " update student_entries set name='".$name."', fname='".$fname."', dob='".$dob."',mobno='".$mobno."',email='".$email."',branch='".$branch."', year='".$year."', rno='".$rno."' where id='".$id."'";
        $res = mysqli_query($con,$sql);
		if($res)
        {
            header("location:fetch.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    
 header("location:fetch.php");   
	
?>