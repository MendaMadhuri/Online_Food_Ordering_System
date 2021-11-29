<?php
	session_start();
	include 'connect.php';
?>
<!doctype html>
<html lang="en">
<head>
 <script src="https://kit.fontawesome.com/b4c69b4cd5.js" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	
</head>
<body>

<div class='snacks'>
		<?php
				
		$rwcnt=mysqli_query($con,'SELECT * FROM breakfast');
		$sq=mysqli_num_rows($rwcnt)+1;
		
		$sql = "SELECT Product_ID,Product_Name,Product_Image,Product_Cost FROM snacks";
		$result = $con->query($sql);
		echo"<table border='3'>
		<tr>
		<th>Product_Image:</th>
		<th>Product_ID</th>
		<th>Product_Name</th>
		<th>Product_Cost</th>
		<th>Delete Item</th>
		<th rowspan='".$sq."'>AddItem <button type='submit' style='border:white;background-color:white'><a href='addition.php' target='right2'>
		<i class='fas fa-plus'></i></a>
		</tr>";
		
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {

				echo (
				"<tr><form action='delitem_database.php' method='POST'>
				<td><img src='".$row["Product_Image"]."'height='80px' width='100px'/></td>"
				."<td><input type='hidden' value='".$row["Product_ID"]."' name='Product_ID'/>".$row["Product_ID"]."</td>"
				."<td>".$row["Product_Name"]."</td>"
				."<td><input type='hidden' value='snacks' name='session'/>".$row["Product_Cost"]."</td>

				<td><button type='submit' style='border:white;background-color:white'><i class='fas fa-trash'></i></button></td>
				</form></tr>");
			}
		} else {
			echo "0 results";
		}
		?>
</div>


<?php
	if(isset($_POST['Logout'])){session_destroy();header("location:admin_login.php");}
?>
</body>
</html>