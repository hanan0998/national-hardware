<?php
include_once("config.php");
include_once("functions.php");
include_once("require.php");
feedbackFunction();
include "includes/header.php";
?>



      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black mb-0">National<br><span class="text-primary">Hardwares</span> </a></h1>
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


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3"></h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">

			<form method="POST" action="" >
			 <h2 class="h4 text-black mb-5 mt-5">Feedback Form</h2> 

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label>
				   <textarea cols="30" rows="7" name="message" class="form-control rounded-0" required placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>
			  
              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" name="feedback" class="btn btn-black rounded-0 py-3 px-4">Send Feedback</button>
				  
                </div>
              </div>
			  
			</form>

          </div>
        
        </div>
        
      </div>
    </div>

      </div>
 

  </div> <!-- .site-wrap -->
<?php
include "includes/footer.php";