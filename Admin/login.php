<?php
include_once("config.php");
/*print_r($_SESSION);
session_destroy();

die; */

if(isset($_POST['btnSubmit'])){
	$email=$_POST["email"];
	$password=$_POST["pas"];
	
		$sql = "SELECT * FROM `usrdetailes` WHERE email = '".$email."' AND password ='".$password."' LIMIT 1";
		$query =  mysqli_query($conn, $sql);
		$rows = mysqli_num_rows($query);
		if($rows>0)
		{
			$data = mysqli_fetch_assoc($query);
				
				$_SESSION['is_login'] = 'Yes';
				$_SESSION['user_id'] = $data['ID'];
				$_SESSION["Username"] = $data['name'];
				$_SESSION["email"] = $data['email'];
				$_SESSION["password"] = $data['password'];			
			
				echo "<script> window.location.href=\"index.php\";</script>";
		}
		else
		{
			echo "<script>alert('Invalid Email or Password'); window.location.href =\"login.php\";</script>";
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

      
      
    </header>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">LOG IN</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">

            

            <form method="POST" action="" id="loginForm">

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
				   <input type="email"name="email" class="form-control rounded-0" required maxlength="30">
                </div>
              </div>

			  
              <div class="row form-group">
                
                <div class="col-md-12">
                 <label class="text-black" for="email">Password</label> 
					<input type="Password" name="pas" class="form-control rounded-0" required maxlength="30">
                </div>
              </div>
			  
              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" name="btnSubmit" class="btn btn-success rounded-0 py-3 px-4">LOG IN</button>
                  <a href="register.php" class="btn btn-black rounded-0 py-3 px-4 py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">SIGN UP</a>
				  
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