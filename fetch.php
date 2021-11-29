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
	
	$sql1 = "SET @autoid:=0";
	mysqli_query($con,$sql1);
	$sql2 = "UPDATE orders SET User_ID=@autoid:=(@autoid+1)";
	mysqli_query($con,$sql2);
	$sql3 = "ALTER TABLE orders AUTO_INCREMENT=1";
	mysqli_query($con,$sql3);
	$sql="select * from orders";
	$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <title>View Details</title>
</head>
<body class="bg-dark">
 <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td>User_ID</td>
								<td> First Name </td>
                                <td> Last Name </td>
                                <td> Mobile Number </td>
                                <td>Email ID</td>
								<td>Password</td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                     while($row=mysqli_fetch_assoc($res))
                                    {
										$UserID=$row['User_ID'];
										$fname = $row['fname'];
                                        $lname = $row['lname'];
                                        $mobno = $row['mobno'];
                                        $emailid = $row['emailid'];
										$password = $row['password'];
                            ?>
                                    <tr>                                        
										<td><?php echo $UserID ?></td>
										<td><?php echo $fname ?></td>
                                        <td><?php echo $lname ?></td>
                                        <td><?php echo $mobno ?></td>
                                        <td><?php echo $emailid?></td>
										<td><?php echo $password?></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID ?>" class="btn btn-pencil">Edit</a></td>
										  <td><a href="delete.php?Del=<?php echo $UserID ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
		 <div class="container-fluid p-0 ">
            <div class="site-content ">
               <div class="d-flex justify-content-center">  
                   <div class="d-flex flex-column">
						<h1 class="site-title"></h1>
                         <div class="d-flex flex-row">
                            
                        
                           <a href="deleteall.php" class="btn btn-danger" style="margin-right: 30px">Delete All</a><a href="register.html" class="btn btn-primary">Insert New</a>
                            
                        </div>
                   </div>
               </div>


            </div>
        </div>
	</body>
</html>