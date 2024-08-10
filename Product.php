<?php

include_once("config.php");

include_once("require.php");


$result= mysqli_query($conn, "SELECT * FROM toys");
include "includes/header.php";
?>



      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black mb-0">National<br><span class="text-primary">Hardware</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="session.php" class="nav-link">Log Out</a></li>
				
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    <div class="site-section mt-5" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title mt-5">Popular Toys</h3>
            <h2 class="section-title mb-3">Our Toys</h2>
          </div>
        </div>
		
						  <?php  while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item" style=" border: 1px solid gray; ">
              <figure>
               <img src="images/screws-1052508.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><?php  echo $row['Tname']; ?></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> RS.<?php  echo $row['Price']; ?></span>
                </div>
                <p class="mb-4"><?php  echo $row['Tinfo']; ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item" style=" border: 1px solid gray; ">
              <figure>
               <img src="images/mitchell-luo-G5i9LQ7sPOw-unsplash.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><?php  echo $row['Tname']; ?></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> RS.<?php  echo $row['Price']; ?></span>
                </div>
                <p class="mb-4"><?php  echo $row['Tinfo']; ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item" style=" border: 1px solid gray; ">
              <figure>
               <img src="images/tools-4088531.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><?php  echo $row['Tname']; ?></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> RS.<?php  echo $row['Price']; ?></span>
                </div>
                <p class="mb-4"><?php  echo $row['Tinfo']; ?></p>
              </div>
            </div>
          </div>

          
        </div>
		
					  <?php } ?>
      </div>
    </div>
    
      </div>
    </footer>

  </div> <!-- .site-wrap -->

<?php
include "includes/footer.php";