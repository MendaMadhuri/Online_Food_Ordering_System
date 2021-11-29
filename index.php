<!doctype html>
<html lang="en">
  <head>
    <title>My Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b4c69b4cd5.js" crossorigin="anonymous"></script>
	
    <link rel="stylesheet" href="style1.css"  type="text/css">
</head>
  <body>
    <header>
		<div class="social-icons" style='text-align:right'>
           <button class="btn icon-right-btn"> <i class="fab fa-facebook-square"></i>
            <button class="btn icon-right-btn"><i class="fab fa-instagram"></i></button>
            <button class="btn icon-right-btn"><i class ="fab fa-google-plus"></i></button>
            <button class="btn icon-right-btn"><i class ="fab fa-twitter"></i></button>
			
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
					<a href="admin_login.php" class="nav-link">Login</a>
				</li>
				<li class="nav-item">
					<a href="logout.php" class="nav-link">Logout</a>
				</li>
			</ul>

            <form class="form-inline my-2 my-lg-0" action="register.php">
				<button class="btn menu-right-btn border" type="submit">
					Register
				</button>
			</form>
		</div>
    </nav>
</header>

<main>
    <div class="container-fluid p-0">
        <div class="site-content">
            <div class="d-flex justify-content-center">
                <div class="d-flex flex-column">
                    <h1 class="site-title">Online Food Ordering System</h1>
                     <div class="d-flex flex-row">
                        <input  type="button" value="Reserve" class="btn site-btn px-4 py-3 mr-150 btn-dark">
                     </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-1">
        <div class="container text-container">
            <h1 class="heading" style="text-align: center;">Menu Cards</h1>
		<div class="row justify-content text-center">
<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<script type="text/javascript">
        var d = new Date();
		var n = d.getHours();
		//document.write(n);
		if(n<11){
			document.write("<style>.card:hover{width:380px;}</style><div class='col-md-4'><a href='breakfastmenu.php'><div class='card' style='width:10rcm'><img src='breakfast.jpg' class='card-img-top'><div class='card-body'><h4 class='card-title'>BreakFast</h4></div></div></a></div>");
			document.write("<div class='col-md-4'><div class='card' style='width:10rcm'><img src='carousel9.jpg' style='opacity: 0.1;' class='card-img-top'><div class='card-body'><h4 class='card-title' style='opacity:0.1';>Lunch</h4><h3>Not Available Now</h3></div></div></div>");
			document.write("<div class='col-md-4'><div class='card' style='width:10rcm'><img src='carousel6.jpg' style='opacity: 0.1;'class='card-img-top'><div class='card-body'><h4 class='card-title' style='opacity: 0.1';>Snacks</h4><h3>Not Available Now</h3></div></div></div>");
		}else if(11<n && n<15){
			document.write("<style>.card:hover{width:380px;}</style><div class='col-md-4'><div class='card' style='width:10rcm'><img src='carousel7.jpg' style='opacity: 0.1;'class='card-img-top'><div class='card-body'><h4 class='card-title' style='opacity:0.1';>BreakFast</h4><h3>Not Available Now</h3></div></div></div>");
			document.write("<div class='col-md-4'><a href='lunchmenu.php'><div class='card' style='width:10rcm'><img src='carousel9.jpg' class='card-img-top'><div class='card-body'><h4 class='card-title'>Lunch</h4></div></div></a></div>");
			document.write("<div class='col-md-4'><div class='card' style='width:10rcm'><img src='carousel6.jpg' style='opacity: 0.1;' class='card-img-top'><div class='card-body'><h4 class='card-title' style='opacity:0.1';>Snacks</h4><h3>Not Available Now</h3></div></div></div>");
		}
		else{
			document.write("<style>.card:hover{position:relative;width:380px;}</style><div class='col-md-4'><div class='card' style='width:10rcm'><img src='carousel7.jpg' style='opacity: 0.1;'class='card-img-top'><div class='card-body'><h4 class='card-title'style='opacity: 0.1';>BreakFast</h4><h3>Not Available Now</h3></div></div></div>");
			document.write("<div class='col-md-4'><div class='card' style='width:10rcm'><img src='carousel9.jpg' style='opacity: 0.1;' class='card-img-top'><div class='card-body'><h4 class='card-title'style='opacity: 0.1';>Lunch</h4><h3>Not Available Now</h3></div></div></div>");
			document.write("<div class='col-md-4'><a href='snacksmenu.php'><div class='card' style='width:10rcm'><img src='carousel6.jpg' class='card-img-top'><div class='card-body'><h4 class='card-title' >Snacks</h4></div></div></a></div>");
			}
</script>
<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
	
	<!--	<div class="col-md-4"><div class="card" style="width:10rcm"><img src="carousel9.jpg" class="card-img-top"><div class="card-body"><h4 class="card-title">Lunch</h4></div></div></div>
            <div class="col-md-4"><div class="card" style="width:10rcm"><img src="carousel6.jpg" class="card-img-top"><div class="card-body"><h4 class="card-title">Snacks</h4></div></div></div>
    -->
	</div>

</main>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>