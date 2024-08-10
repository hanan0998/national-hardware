<?php

include_once("config.php");
include_once("require.php");

include "includes/header.php";

?>


      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black mb-0">National  <span class="text-primary">Hardwares</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="Product.php" class="nav-link">Product</a></li>
                <li><a href="feedback.php" class="nav-link">Feedback</a></li>
                <li><a href="register.php" class="nav-link">Register</a></li>
                <li><a href="session.php" class="nav-link">Log Out</a></li>

				
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/tools-4088531.jpg); background-attachment: fixed;" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row align-items-center justify-content-center mb-4">
              <div class="col-md-7">
                <h1 style="font-size: 60px; text-align: center;">Shop in Quality</h1>
                <p class="mb-5 lead text-center">Here the hardware world begin with the best quality delivery product accross the country we are ranking on 1. Happy Shoping !</p>
                <div class="d-flex justify-content-center align-items-center">
                  <a href="Product.php" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block mx-1">View Items</a>
                  <a href="Feedback.php" class="btn btn-white py-3 px-5 rounded-0 d-block d-sm-inline-block">Feedback</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
    

  </div> <!-- .site-wrap -->

<?php 

include "includes/footer.php";

?>