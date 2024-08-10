<?php
include_once("config.php");

include_once("require.php");
if(isset($_POST['submit'])){

@extract($_POST);

$image=$_FILES['image']['name'];


      $sql ="INSERT INTO `toys`(`Tname`, `Price`, `Tinfo`, `Tpic`) VALUES ('".$tname."','".$price."','".$tinfo."','".$image."')"; 
	  
		$query =  mysqli_query($conn, $sql);
		if($query)
		{

  move_uploaded_file($_FILES["image"]["tmp_name"],"productimages/".$image);

            echo '<script>alert("Toy Added Successfull"); location.href="Product_add.php";</script>';	
		}
    	else 
    	{
          echo '<script>alert("Whoops..!something went wrong"); location.href="Product_add.php";</script>';
 
   	}

  
  
  
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kool Kids</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black mb-0">Kool Kids<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="product_add.php" class="nav-link">Add Toys</a></li>
                <li><a href="session.php" class="nav-link">Log Out</a></li>
				
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title"></h3>
            <h2 class="section-title mb-3">ADD New Toys</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">
              <h2 class="h4 text-black mb-5"></h2> 
			  
			  
			  
			  
			<form action="" method="Post" enctype="multipart/form-data">
             
					<div class="row form-group">
					<div class="col-md-12">
					 <label class="text-black" for="tname">Toy Name</label> 
					 <input type="text" name="tname" class="form-control rounded-0" required maxlength="30">
					</div>
					</div>
					
					<div class="row form-group">
					<div class="col-md-12">
					 <label class="text-black" for="tname">Price</label> 
					 <input type="text" name="price" class="form-control rounded-0" required maxlength="30">
					</div>
					</div>
					
					<div class="row form-group">
					<div class="col-md-12">
					 <label class="text-black" for="tinfo">Toy Information</label> 
					 <input type="text" name="tinfo" class="form-control rounded-0" required maxlength="30">
					</div>
					</div>


              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="image">Toy Picture</label> 
				   <input type="file" name="image" id="image" class="form-control rounded-0" required>
                </div>
              </div>
			  
              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" name="submit" class="btn btn-black rounded-0 py-3 px-4">Add Toy</button>
                </div>
              </div>
				</form>
 
          </div>
        
        </div>
        
      </div>
    </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>