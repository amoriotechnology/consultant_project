
      <!-- ============================ Page Title Start================================== -->
      <div class="page-title">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              
              <h2 class="ipt-title text-center">Users Login</h2>
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
            <div class="col-lg-6 col-md-12 form-submit">
              
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
                
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <?php echo $this->Flash->render(); ?>
                      <p class="para_hover text-center" style="color: #fff; font-weight: bold; cursor: pointer; font-size: 17px;">Ask your construction queries to the top professionals in the field</p>
                      <p class="text-white text-center">Hello, Welcome to your account.</p>
                      <?= $this->Form->create('login') ?>
                        <div class="form-group">
                            <label class="mb-2">Email Address <span style="color: red;">*</span></label>
                              <input type="email" name="email" class="form-control" placeholder="Enter your Email Address" required>
                        </div>

                        <div class="form-group">
                            <label class="mb-2">Password <span style="color: red;">*</span></label>
                              <input type="password" name="password" class="form-control" placeholder="Enter your Password" required>
                        </div>
                        <button class="btn btn-primary full-width"  type="submit">Login</button>
                        <br><br>
                         <div class="form-group col-lg-12 col-md-12">
                          <p class="text-white text-center">Not a member? <a href="<?php echo $this->Url->build('/users/register') ?>" class="text-white para_hover">Register Now</a></p>
                        </div>
                      <?= $this->form->end() ?>
                    </div>
                    
                  </div>

                </div>
                
              </div>
              
              
            </div>
            <!-- Sidebar End -->
              
          </div>
        </div>
      </section>
      <!-- =================== Sidebar Search ==================== -->

<style type="text/css">
  .para_hover:hover{
    color: #947b2a !important;
  }
</style>      