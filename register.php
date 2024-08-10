<?php

include_once("functions.php");
registerFunction();
include "includes/header.php";
?>


      
      
    </header>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">SIGN UP</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">

            

              
              <h2 class="h4 text-black mb-5">Register</h2> 
			<form method="POST" action="">
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
				   <input type="text" name="fname" class="form-control rounded-0" required maxlength="30">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
				   <input type="text" name="lname" class="form-control rounded-0" required maxlength="30">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
				   <input type="email"name="email" class="form-control rounded-0" required maxlength="30">
                </div>
              </div>

              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Gender</label>
				  <Select class="form-control rounded-0" name="gender" required> selected
				  <option type="text" id="email" class="form-control rounded-0" selected value="">Select</Option>
                  <option type="text" id="email" class="form-control rounded-0" value="Male">Male</Option>
                  <option type="text" id="email" class="form-control rounded-0" value="Famel">Female</Option>
				  </Select>
                </div>
              </div>

              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Contact Number</label>
					<input type="text" name="cont" class="form-control rounded-0" required maxlength="30">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Address</label>
					<input type="text" name="addrs" class="form-control rounded-0" required maxlength="30">
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
                  <button type="submit" name="register" class="btn btn-black rounded-0 py-3 px-4">SIGN UP</button>
				  <a href="login.php" class="btn btn-success rounded-0 py-3 px-4 py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">LOG IN</a>
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

<?php

include "includes/footer.php"; 