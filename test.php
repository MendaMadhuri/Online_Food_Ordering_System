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
mysqli_close($con);
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

<main>
	<div class="section-1">
        <div class="container text-center">
            <h1 class="heading-1">Snacks Menu</h1>
            <h1 class="heading-2">Our specials</h1>
            <div class="row justify-content-center text-center">
<?php 
	include "connect.php";
	$query = "SELECT * FROM snacks WHERE 1";
	$results=mysql_query($query);
	while ($row_users = mysql_fetch_array($results)) {
?>
<!--------------------------------------------------------------------------------------------------------------------------->          
<div class="mt-5 col-md-4">
	<form action="snacksmenu.php" method="POST">
		<div class="card-embed-responsive embed-responsive-21by9 border border-dark" >
            <img src="<?php $row['Product_Image'] ?>" alt="Image" class="card-img-top embed-responsive-item">
                <div class="card-body">
					<!--------------------------------------------------------------------->
                    <input type="hidden" value="<?php $row['Product'] ?>"  name="Product"/>
					<input type="hidden" value="<?php $row['Product_Image'] ?>"  name="Product_Image"/>
					<input type="hidden" value="<?php $row['Product_Cost'] ?>"  name="Product_cost"/>
					<!--------------------------------------------------------------------->
					<h3 class="card-title"><?php $row['Product'] ?></h3>
                    <h4 class="card-text fa fa-inr" style="float: center;color: black;"><?php $row['Product_Cost'] ?></h4>
                    <!--------------------------------------------------------------------->
                </div>
                <div class="card-footer text-center" style="margin-top: 5%;">
                    <input name="Submit" type="Submit" value=" Add to cart" class="btn btn-primary btn-sm border border-dark float-center" style="color:blanchedalmond;"/>  
                </div>       
         </div>
	</form>
</div>
<!--------------------------------------------------------------------------------------------------------------------------->
<?php
}
?>
</div></div></div>	
		<!------------------------------------------------------------------------>

</main>
</body>
</html>