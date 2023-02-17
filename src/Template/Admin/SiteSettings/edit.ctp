<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Meta Tags</h4>
                  <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                  <?= $this->Form->create($siteSetting,['novalidate' => true ]) ?>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Meta Description</label>
                      <?php echo $this->Form->control('meta_description',[ 'placeholder' => 'Meta Description' , 'class' => 'form-control' , 'label' => false]); ?>
                      <!-- <textarea class="form-control" name="meta_description" value="<?php echo $siteSetting['meta_description']; ?>"></textarea> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Meta Title</label>
                      <?php echo $this->Form->control('meta_title',[ 'placeholder' => 'Meta Title' , 'class' => 'form-control' , 'label' => false]); ?>
                      <!-- <textarea class="form-control" name="meta_title"></textarea> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Meta Keywords</label>
                      <?php echo $this->Form->control('meta_keyword',[ 'placeholder' => 'Meta Keyword' , 'class' => 'form-control' , 'label' => false]); ?>
                      <!-- <textarea class="form-control" name="meta_keyword"></textarea> -->
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?php echo $this->Url->build('/admin/siteSettings'); ?>"><button class="btn btn-light">Cancel</button></a>
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