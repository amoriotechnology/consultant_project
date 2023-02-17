<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Change Password</h4>
                  <?php echo $this->Flash->render(); ?>
                  <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                  <?= $this->Form->create('changePassword',['novalidate' => true ]) ?>
                    <div class="form-group">
                      <label>Old Password</label>
                      <?php echo $this->Form->control('old_password',[ 'placeholder' => 'Old Password' , 'class' => 'form-control' , 'label' => false, 'type' => 'password', 'required']); ?>
                    </div>

                    <div class="form-group">
                      <label>New Password</label>
                      <?php echo $this->Form->control('password',[ 'placeholder' => 'New Password' , 'class' => 'form-control' , 'label' => false, 'type' => 'password', 'required']); ?>
                    </div>

                    <div class="form-group">
                      <label>Confirm Password</label>
                      <?php echo $this->Form->control('confirm_password',[ 'placeholder' => 'Confirm Password' , 'class' => 'form-control' , 'label' => false, 'type' => 'password', 'required']); ?>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Change Password</button>
                    <a href="<?php echo $this->Url->build('/'); ?>"><button class="btn btn-light">Cancel</button></a>
                    <?= $this->Form->end() ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php echo $this->element('back_end/footer'); ?> 
        <!-- partial -->
      </div>