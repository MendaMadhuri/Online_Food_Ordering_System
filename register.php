<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b4c69b4cd5.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style1.css"  type="text/css">
<style>
  
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  appearance: none;
  margin: 0;
}
</style>
<script type="text/javascript">

function validateForm(){
var fname=document.getElementById("fname").value;
var lname=document.getElementById("lname").value;
var mobno=document.getElementById("mobno").value;
var emailid=document.getElementById("emailid").value;
var password=document.getElementById("password").value;
if( fname== "" || lname=="" || mobno=="" || emailid=="" || password=="" )
{window.alert("No Blank Values");return false;
}
else if(mobno.length!=10 && isNaN(mobno))
{window.alert("check mobile number");return false;}
else if(password.length!=0 && password.length != 8)
{window.alert("check password");return false;}
else{true;}
}


</script>


</head>

<body>
  <header>
		<div class="social-icons" style='text-align:right'>
           <button class="btn icon-right-btn"> <i class="fab fa-facebook-square"></i>
            <button class="btn icon-right-btn"><i class="fab fa-instagram"></i></button>
            <button class="btn icon-right-btn"><i class ="fab fa-google-plus"></i></button>
            <button class="btn icon-right-btn"><i class ="fab fa-twitter"></i></button>
			<button class="btn icon-right-btn"><i class="fas fa-shopping-cart"></i></button>
        </div>
		<nav class="navbar navbar-expand-lg navbar-light">
		<a href="a" class="navbar-brand ml-3"> Indian Spice </a>
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" 
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

  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
</main>  

<ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="resto1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="resto2.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="resto4.jpg" class="d-block w-100">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </div>
<h1 style="text-align:center;">Enter Your Details</h1>

<form onsubmit="return validateForm()" action="validate.php" method="POST">
<table>
 <tr><td> <label for="fname">First Name:</label></td>
 <td> <input type="text" name="fname" id="fname" placeholder= "Enter first name"  required /></td></tr>
                                     
 <tr><td><label for="lname">Last Name:</label></td>
 <td> <input type="text" name="lname" id="lname" placeholder="Enter lastname" required /></td></tr>
  
  <tr><td><label for="mobno">Mobile Number:</label></td>
 <td> <input type="text" name="mobno" id="mobno" placeholder="Enter mobile number" required /></td></tr>
  
 <tr><td> <label for="logid">Email ID:</label></td>
  <td><input type="email" name="emailid" id="emailid" placeholder="Enter email id" required /></td></tr>
  
 <tr><td> <label for="password">Password:</label></td>
  <td><input type="password" name="password" id="password" placeholder="Enter password" required /></td></tr>
  
  <tr><td><button type="submit" id="submit" >Register</button></td></tr>

 </table>
</form>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script
</body>
</html>
