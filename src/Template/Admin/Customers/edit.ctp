<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Customers</h4>
                  <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                  <?= $this->Form->create($customer,['novalidate' => true, 'type' => 'file' ]) ?>
                    <div class="form-group">
                      <label>Customer Name</label>
                      <?php echo $this->Form->control('name',[ 'placeholder' => 'Customername' , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>
                    <div class="form-group">
                      <label>Qualification</label>
                      <?php echo $this->Form->control('qualification',[ 'placeholder' => 'Qualification' , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>
                    <div class="form-group">
                      <label>Profession</label>
                      <?php echo $this->Form->control('profession',[ 'placeholder' => 'Profession' , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>
                    <div class="form-group">
                      <label>Experience</label>
                      <?php echo $this->Form->control('experience',[ 'placeholder' => 'Experience' , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <?php echo $this->Form->control('address',[ 'placeholder' => 'Address' , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>
                    <div class="form-group">
                      <label>Price</label>
                      <?php echo $this->Form->control('price',[ 'placeholder' => 'Price' , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>
                    <div class="form-group">
                      <label>Upload Image</label>
                        <input  type="file" name="image" id="input-file-now" class="dropify"  <?php if($customer->image != ''){ ?>data-default-file="<?php echo $this->Url->build('/uploads/customers/'.$customer['image']); ?>" <?php } ?>/>
                        <input type="hidden" name="hid_image" value="<?php echo $customer->image; ?>">
                    </div>
                     <div class="form-group">
                      <label>Description</label>
                      <?php echo $this->Form->control('banner_description',[ 'placeholder' => 'Description' , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?php echo $this->Url->build('/admin/customers'); ?>"><button class="btn btn-light">Cancel</button></a>
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