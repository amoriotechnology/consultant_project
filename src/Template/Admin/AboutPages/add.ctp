<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Aboutus Content</h4>
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
                      <input type="file" name="image" class="dropify" />
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