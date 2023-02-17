
      <!-- ============================ Page Title Start================================== -->
      <div class="page-title">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              
              <h2 class="ipt-title text-center">Users Registration</h2>
              <!-- <span class="ipn-subtitle">Pay your payment</span> -->
              
            </div>
          </div>
        </div>
      </div>
      <!-- ============================ Page Title End ================================== -->

      <!-- =================== Sidebar Search ==================== -->
      <section class="gray" style="padding: 50px 0 40px !important;">
        <div class="container">
          <div class="row" style="display: flex; justify-content: center;">
              
            <div class="col-lg-6 col-md-12">
               <div class="checkout-wrap">
                
                <!-- <div class="checkout-head">
                  <ul>
                    <li></li>
                    <li class="active text-center"><h4>Sign in</h4></li>
                    <p>Hello, Welcome to your account.</p>
                  </ul>
                </div> -->
                
                <div class="checkout-body">
                  <div class="row mb-5">
                    <?php echo $this->Flash->render(); ?>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                       <p class="para_hover text-center" style="color: #fff; font-weight: bold; cursor: pointer; font-size: 17px;">Ask your construction queries to the top professionals in the field</p>
                      <p class="text-white text-center">Create Your New Account</p>
                      <?= $this->Form->create('register',['url' => '/users/register']) ?>
                        <div class="form-group">
                            <label class="mb-2">Email Address <span style="color: red;">*</span></label>
                              <input type="email" name="email" class="form-control" placeholder="Enter your Email Address" required>
                        </div>

                        <div class="form-group">
                            <label class="mb-2">Name <span style="color: red;">*</span></label>
                              <input type="text" name="name" class="form-control" placeholder="Enter your Name" required>
                        </div>

                        <div class="form-group">
                            <label class="mb-2">Mobile Number <span style="color: red;">*</span></label>
                              <input type="number" name="mobile" class="form-control" maxlength="10" placeholder="Enter your Mobile Number" required>
                        </div>

                        <div class="form-group">
                            <label class="mb-2">Password <span style="color: red;">*</span></label>
                              <input type="password" name="password" class="form-control" placeholder="Enter your Password" required>
                        </div>
                        <button class="btn btn-primary full-width"  type="submit">Register</button>
                      <?= $this->form->end() ?>
                    </div>
                    
                  </div>

                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- =================== Sidebar Search ==================== -->

<style type="text/css">
  .para_hover:hover{
    color: #947b2a !important;
  }
</style>      