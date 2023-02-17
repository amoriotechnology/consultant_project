<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Aboutus Content</h4>
                  <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                  <?= $this->Form->create($aboutPage,['novalidate' => true, 'type' => 'file' ]) ?>
                    <div class="form-group">
                      <label>Title</label>
                      <?php echo $this->Form->control('title',[ 'placeholder' => 'Title' , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <?php echo $this->Form->control('description',[ 'placeholder' => 'Description' , 'class' => 'form-control' , 'label' => false]); ?>
                      <!-- <textarea class="form-control" id="summernoteExample"></textarea> -->
                    </div>
                    <div class="form-group">
                      <label>Upload Image</label>
                      <input  type="file" name="image" id="input-file-now" class="dropify"  <?php if($aboutPage->image != ''){ ?>data-default-file="<?php echo $this->Url->build('/uploads/about-us/'.$aboutPage['image']); ?>" <?php } ?>/>
                        <input type="hidden" name="hid_image" value="<?php echo $aboutPage->image; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?php echo $this->Url->build('/admin/aboutPages'); ?>"><button class="btn btn-light">Cancel</button></a>
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