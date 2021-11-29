<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,"project1"))
	{
		echo 'data base not selected';
	}
	
	
	$id = $_GET['GETid'];
    $sql = " select * from student_entries where id='".$id."'";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res))
    {
		$id=$row['id'];	
		$name = $row['name'];
		$fname = $row['father_name'];
		$dob = $row['dob'];
		$mobno = $row['mobile'];
		$email=$row['email'];
		$branch = $row['branch'];
		$year = $row['year'];		
		$rno = $row['room'];
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
    <header>
        
		
    </header>
    
       
      


		
    <div class="section-2">
        <div class="container text-center">   
            <div class="log-popup text-center">
                <div class="sign-popup-wrapper brd-rd5">
                    <div class="sign-popup-inner brd-rd5">
                        <a class="log-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                        <div class="sign-popup-title text-center">
                            <h4 itemprop="headline">UPDATE HERE</h4>
                            
                        </div>
                        
                        
                        <form  action="update.php?ID=<?php echo $id ?>" method="POST"  class="sign-form">
                            <div class="row mrg20">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Name <sup>*</sup></label>
                                    <input class="brd-rd3" type="text" name="name" value="<?php echo $name ?>">
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Father's Name <sup>*</sup></label>
                                    <input class="brd-rd3" type="text" name="fname" value="<?php echo $fname ?>">
                                </div>
								<div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Date Of Birth <sup>*</sup></label>
                                    <input class="brd-rd3" type="int" name="dob" value="<?php echo $dob ?>">
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Mobile Number <sup>*</sup></label>
                                    <input class="brd-rd3" type="int" name="mobno" value="<?php echo $mobno ?>">
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Email <sup>*</sup></label>
                                    <input class="brd-rd3" type="email" name="email" value="<?php echo $email ?>">
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label>Branch <sup>*</sup></label>
									 <input class="brd-rd3" type="text" name="branch" value="<?php echo $branch ?>">
								</div>
								<div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Year <sup>*</sup></label>
                                    <input class="brd-rd3" type="int" name="year" value="<?php echo $year ?>">
								 </div>
								 <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Room Number <sup>*</sup></label>
                                    <input class="brd-rd3" type="int" name="rno" value="<?php echo $rno ?>">
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button  type="submit" value="submit" class="btn btn-primary px-4 py-2">Update </button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
            
            
        </div>
    </div>
        
    </main>
    <footer>
        <h4 style="margin-top:5%;"></h4>

    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>