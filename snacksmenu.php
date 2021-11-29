
<!doctype html>
<html lang="en">
  <head>
  <style>
  #ex4 .p1[data-count]:after{
  position:absolute;
  right:10%;
  top:8%;
  content: attr(data-count);
  font-size:40%;
  padding:.2em;
  border-radius:50%;
  line-height:1em;
  color: white;
  background:rgba(255,0,0,.85);
  text-align:center;
  min-width: 1em;
  //font-weight:bold;
}
  </style>
    <title>My Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b4c69b4cd5.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="style1.css"  type="text/css">
</head>
  <body>
    <header>
		<div class="social-icons" style='text-align:right'>
           <button onclick="snacksmenu.php"class="btn icon-right-btn"> <i class="fab fa-facebook-square"></i>
            <button onclick="snacksmenu.php"class="btn icon-right-btn"><i class="fab fa-instagram"></i></button>
            <button onclick="snacksmenu.php"class="btn icon-right-btn"><i class ="fab fa-google-plus"></i></button>
            <button onclick="snacksmenu.php"class="btn icon-right-btn"><i class ="fab fa-twitter"></i></button>
<?php
include"connect.php";
$sql="select count('Product_Name') from cart";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
//echo "$row[0]";
echo'<a href="addtoc.php"><button class="btn icon-right-btn"><div id="ex4"><span class="p1 fa-stack fa-2x has-badge" data-count="'.$row[0].'">
<i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse" data-count="'.$row[0].'"></i></span></div></button>
</a>';
?>
</div>
			
			
			
		<nav class="navbar navbar-expand-lg navbar-light">
		<a href="a" class="navbar-brand ml-3"> Indian Spice </a>
        
        <button onclick="snacksmenu.php"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" 
        aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle Navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
        <div class="collapse navbar-collapse"></div>
		<div class="collapse navbar-collapse" id="navbarMenu">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a href="#" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">About Us</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Contact US</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Help</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Login</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Logout</a>
				</li>
			</ul>
		</div>
    </nav>
</header>
<body>
<div class="container">    
    <div class="row">
	<?php
		$que="select * from snacks";
		$res=mysqli_query($con,$que);
		while($row=mysqli_fetch_array($res))
		{
		?>
		<div class="col-lg-3 col-md-3 col-sm-6 ">	   
			<div class="card-deck">
				<div class="card p-1">
					<img src="<?php echo $row['Product_Image'];?>"class="card-img-top">
				<div class="card-body p-1">
				<h4 class="card-title text-center text-info"><?php echo $row['Product_Name'];?></h4>
				<h5 class="card-text text-center teaxt-danger"><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $row['Product_Cost']; ?></h5>
				
				</div>
			<div class="card-footer p-1">
			<form class="form-submit" method="POST" action="snack2.php?action=add&id=<?php echo $row['Product_ID'];?>">
				<input type="hidden" name="product_id" value="<?php echo $row['Product_ID'];?>">
				<input type="hidden" name="product_name" value="<?php echo $row['Product_Name'];?>">
				<input type="hidden" name="product_image" value="<?php echo $row['Product_Image'];?>">
				<input type="hidden" name="product_cost" value="<?php echo $row['Product_Cost'];?>">
				<INPUT TYPE="NUMBER" name="pqty" MIN="0" MAX="10" VALUE="1"><label style="font-size:20px">Qty</label>
				<center><input type="submit" class="btn btn-info  addTocart" name="add_to_cart" value="Add to Cart"></center>
			</form>
			</div>
			</div>
		</div>
		</div>
		<?php
		}?>
	</div>
</div>	
	</body>
</html>