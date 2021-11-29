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
				
				
				
                                            
                            <div class="mt-5 col-md-4">
							<form action="snacksmenu.php" method="POST">
                        <div class="card-embed-responsive embed-responsive-21by9 border border-dark" >
                            <img src="s.jpg" alt="Image1" class="card-img-top embed-responsive-item">
                            <div class="card-body">
								
                                <input type="hidden" value="samosa"  name="samosa"/>
								<input type="hidden" value="s.jpg"  name="samosa_image"/>
								<input type="hidden" value="20"  name="samosa_cost"/>
								
								<h3 class="card-title">Samosa</h3>
                                <h4 class="card-text fa fa-inr" style="float: center;color: black;">20/-</h4>
                                
                            </div>
                            <div class="card-footer text-center" style="margin-top: 5%;">
							
                                <input name="Submit1" type="Submit" value=" Add to cart" class="btn btn-primary btn-sm border border-dark float-center" style="color:blanchedalmond;"/>
                                 
                            
                            
                        </div>       
                        </div>
						</div>
						 </form>
						 
     
					<div class="mt-5 col-md-4">
					<form action="snacksmenu.php" method="POST">
					
                        <div class="card-embed-responsive embed-responsive-21by9 border border-dark" >
                            <img src="pp.jpg" alt="Image1" class="card-img-top embed-responsive-item">
                            <div class="card-body">
								
                                <input type="hidden" value="panipuri"  name="panipuri"/>
								<input type="hidden" value="pp.jpg"  name="panipuri_image"/>
								<input type="hidden" value="30"  name="noodles_cost"/>
								
								<h3 class="card-title">Pani Puri</h3>
                                <h4 class="card-text fa fa-inr" style="float: center;color: black;">30/-</h4>
                                
                            </div>
                            <div class="card-footer text-center" style="margin-top: 5%;">
							
                                <input name="Submit2" type="Submit" value=" Add to cart" class="btn btn-primary btn-sm border border-dark float-center" style="color:blanchedalmond;"/>
                                 
                            
                            
                        </div>       
                        </div>
						</div>
						 </form>
						 
						
						<div class="mt-5 col-md-4">
						<form action="snacksmenu.php" method="POST">
                        <div class="card-embed-responsive embed-responsive-21by9 border border-dark" >
                            <img src="dp.jpg" alt="Image1" class="card-img-top embed-responsive-item">
                            <div class="card-body">
								
                                <input type="hidden" value="dahipuri"  name="dahipuri"/>
								<input type="hidden" value="dp.jpg"  name="dahipuri_image"/>
								<input type="hidden" value="40"  name="dahipuri_cost"/>
								
								<h3 class="card-title">Dahi Puri</h3>
                                <h4 class="card-text fa fa-inr" style="float: center;color: black;">40/-</h4>
                                
                            </div>
                            <div class="card-footer text-center" style="margin-top: 5%;">
							
                                <input name="Submit3" type="Submit" value=" Add to cart" class="btn btn-primary btn-sm border border-dark float-center" style="color:blanchedalmond;"/>
                                 
                            
                            
                        </div>       
                        </div>
						</div>
						 </form>
						 
						
						<div class="mt-5 col-md-4">
						<form action="snacksmenu.php" method="POST">
                        <div class="card-embed-responsive embed-responsive-21by9 border border-dark" >
                            <img src="pi.jpg" alt="Image1" class="card-img-top embed-responsive-item">
                            <div class="card-body">
								
                                <input type="hidden" value="pizza"  name="pizza"/>
								<input type="hidden" value="pi.jpg"  name="pizza_image"/>
								<input type="hidden" value="150"  name="pizza_cost"/>
								
								<h3 class="card-title">Pizza</h3>
                                <h4 class="card-text fa fa-inr" style="float: center;color: black;">150/-</h4>
                                
                            </div>
                            <div class="card-footer text-center" style="margin-top: 5%;">
							
                                <input name="Submit4" type="Submit" value=" Add to cart" class="btn btn-primary btn-sm border border-dark float-center" style="color:blanchedalmond;"/>
                                 
                            
                            
                        </div>       
                        </div>
						</div>
						 </form>
						 

						<div class="mt-5 col-md-4">
						<form action="snacksmenu.php" method="POST">
                        <div class="card-embed-responsive embed-responsive-21by9 border border-dark" >
                            <img src="cake.jpg" alt="Image1" class="card-img-top embed-responsive-item">
                            <div class="card-body">
								
                                <input type="hidden" value="cake"  name="cake"/>
								<input type="hidden" value="cake.jpg"  name="cake_image"/>
								<input type="hidden" value="80"  name="cake_cost"/>
								
								<h3 class="card-title">Cake</h3>
                                <h4 class="card-text fa fa-inr" style="float: center;color: black;">80/-</h4>
                                
                            </div>
                            <div class="card-footer text-center" style="margin-top: 5%;">
							
                                <input name="Submit5"  type="Submit" value=" Add to cart" class="btn btn-primary btn-sm border border-dark float-center" style="color:blanchedalmond;"/>
                                 
                            
                            
                        </div>       
                        </div>
						</div>
						 </form>
						 
						<!------------------------------------------------------------------------------------>
						
						
						
						<div class="mt-5 col-md-4">
						<form action="snacksmenu.php" method="POST">
                        <div class="card-embed-responsive embed-responsive-21by9 border border-dark" >
                            <img src="n.jpg" alt="Image1" class="card-img-top embed-responsive-item">
                            <div class="card-body">
								<form action="snacksmenu.php" method="POST">
                                <input type="hidden" value="noodles"  name="noodles"/>
								<input type="hidden" value="n.jpg"  name="noodles_image"/>
								<input type="hidden" value="100"  name="noodles_cost"/>
								
								<h3 class="card-title">Noodles</h3>
                                <h4 class="card-text fa fa-inr" style="float: center;color: black;">100/-</h4>
                                
                            </div>
                            <div class="card-footer text-center" style="margin-top: 5%;">
							
                                <input name="Submit6" type="Submit" value=" Add to cart" class="btn btn-primary btn-sm border border-dark float-center" style="color:blanchedalmond;"/>
                                 
                            
                            
                        </div>       
                        </div>
						</div>
						 </form>
						 
						 <!------------------------------------------------------------------------------------>
						<div class="mt-5 col-md-4">
						<form action="snacksmenu.php" method="POST">
                        <div class="card-embed-responsive embed-responsive-21by9 border border-dark" >
                            <img src="ff.jpg" alt="Image1" class="card-img-top embed-responsive-item">
                            <div class="card-body">
								<form action="snacksmenu.php" method="POST">
                                <input type="hidden" value="frenchfries" name="frenchfries"/>
								<input type="hidden" value="ff.jpg"  name="frenchfries_image"/>
								<input type="hidden" value="120"  name="frenchfries_cost"/>
								
								<h3 class="card-title">French Fries</h3>
                                <h4 class="card-text fa fa-inr" style="float: center;color: black;">120/-</h4>
                                
                            </div>
                            <div class="card-footer text-center" style="margin-top: 5%;">
							
                                <input name="Submit7" type="Submit" value=" Add to cart" class="btn btn-primary btn-sm border border-dark float-center" style="color:blanchedalmond;"/>
                                 
                            
                            
                        </div>       
                        </div>
						</div>
						 </form>
						 
						 
						<div class="mt-5 col-md-4">
						<form action="snacksmenu.php" method="POST">
                        <div class="card-embed-responsive embed-responsive-21by9 border border-dark" >
                            <img src="pbh.jpg" alt="Image1" class="card-img-top embed-responsive-item">
                            <div class="card-body">
								<form action="snacksmenu.php" method="POST">
                                <input type="hidden" value="pavbhaji"  name="pavbhaji"/>
								<input type="hidden" value="pbh.jpg"  name="pavbhaji_image"/>
								<input type="hidden" value="60"  name="pavbhaji_cost"/>
								
								<h3 class="card-title">Pav Bhaji</h3>
                                <h4 class="card-text fa fa-inr" style="float: center;color: black;">60/-</h4>
                                
                            </div>
                            <div class="card-footer text-center" style="margin-top: 5%;">
							
                                <input name="Submit8" type="Submit" value=" Add to cart" class="btn btn-primary btn-sm border border-dark float-center" style="color:blanchedalmond;"/>
                                 
                            
                            
                        </div>       
                        </div>
						</div>
						 </form>
						 

                    </div>
                </div>
            </div>

             
        </div>
		
		<!------------------------------------------------------------------------>
<?php
include"connect.php";


if(isset($_POST["Submit1"])){
$Product_Name=$_POST['samosa'];$Product_Image=$_POST['samosa_image'];$Product_cost=$_POST['samosa_cost'];
$sql="INSERT INTO cart(Product_Name,Product_Image,Product_cost) VALUES ('$Product_Name','$Product_Image','$Product_cost')";
if(!mysqli_query($con,$sql)){echo 'Not Registered';}
else{echo '<script>alert("Registered")</script>';}
//----------------------------------------------------------------------------------------------------------
}else if(isset($_POST["Submit2"])){
$Product_Name=$_POST['panipuri'];$Product_Image=$_POST['panipuri_image'];$Product_cost=$_POST['panipuri_cost'];
$sql="INSERT INTO cart(Product_Name,Product_Image,Product_cost) VALUES ('$Product_Name','$Product_Image','$Product_cost')";
if(!mysqli_query($con,$sql)){echo 'Not Registered';}
else{echo '<script>alert("Registered")</script>';}
//----------------------------------------------------------------------------------------------------------
}else if(isset($_POST["Submit3"])){
$Product_Name=$_POST['dahipuri'];$Product_Image=$_POST['dahipuri_image'];$Product_cost=$_POST['dahipuri_cost'];
$sql="INSERT INTO cart(Product_Name,Product_Image,Product_cost) VALUES ('$Product_Name','$Product_Image','$Product_cost')";
if(!mysqli_query($con,$sql)){echo 'Not Registered';}
else{echo '<script>alert("Registered")</script>';}
//----------------------------------------------------------------------------------------------------------
}else if(isset($_POST["Submit4"])){
$Product_Name=$_POST['pizza'];$Product_Image=$_POST['pizza_image'];$Product_cost=$_POST['pizza_cost'];
$sql="INSERT INTO cart(Product_Name,Product_Image,Product_cost) VALUES ('$Product_Name','$Product_Image','$Product_cost')";
if(!mysqli_query($con,$sql)){echo 'Not Registered';}
else{echo '<script>alert("Registered")</script>';}
//----------------------------------------------------------------------------------------------------------
}else if(isset($_POST["Submit5"])){
$Product_Name=$_POST['cake'];$Product_Image=$_POST['cake_image'];$Product_cost=$_POST['cake_cost'];
$sql="INSERT INTO cart(Product_Name,Product_Image,Product_cost) VALUES ('$Product_Name','$Product_Image','$Product_cost')";
if(!mysqli_query($con,$sql)){echo 'Not Registered';}
else{echo '<script>alert("Registered")</script>';}
//----------------------------------------------------------------------------------------------------------
}else if(isset($_POST["Submit6"])){
$Product_Name=$_POST['noodles_cost'];$Product_Image=$_POST['noodles_image'];$Product_cost=$_POST['noodles_cost'];
$sql="INSERT INTO cart(Product_Name,Product_Image,Product_cost) VALUES ('$Product_Name','$Product_Image','$Product_cost')";
if(!mysqli_query($con,$sql)){echo 'Not Registered';}
else{echo '<script>alert("Registered")</script>';}
//----------------------------------------------------------------------------------------------------------
}else if(isset($_POST["Submit7"])){
$Product_Name=$_POST['frenchfries'];$Product_Image=$_POST['frenchfries_image'];$Product_cost=$_POST['frenchfries_cost'];
$sql="INSERT INTO cart(Product_Name,Product_Image,Product_cost) VALUES ('$Product_Name','$Product_Image','$Product_cost')";
if(!mysqli_query($con,$sql)){echo 'Not Registered';}
else{echo '<script>alert("Registered")</script>';}
//----------------------------------------------------------------------------------------------------------
}else if(isset($_POST["Submit8"])){
$Product_Name=$_POST['pavbhaji'];$Product_Image=$_POST['pavbhaji_image'];$Product_cost=$_POST['pavbhaji_cost'];
$sql="INSERT INTO cart(Product_Name,Product_Image,Product_cost) VALUES ('$Product_Name','$Product_Image','$Product_cost')";
if(!mysqli_query($con,$sql)){echo 'Not Registered';}
else{echo '<script>alert("Registered")</script>';}
//----------------------------------------------------------------------------------------------------------
}else{}
?>
<script>

</script>

    </main>
	
	
	</body>
</html>