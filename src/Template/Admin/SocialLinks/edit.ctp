<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Social Links</h4>
                  <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                  <?= $this->Form->create($socialLink,['novalidate' => true ]) ?>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Facebook Link</label>
                      <?php echo $this->Form->control('facebook_link',[ 'placeholder' => 'Facebook Link' , 'class' => 'form-control' , 'label' => false]); ?>
                      <!-- <textarea class="form-control" name="meta_description" value="<?php echo $siteSetting['meta_description']; ?>"></textarea> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Twitter Link</label>
                      <?php echo $this->Form->control('twitter_link',[ 'placeholder' => 'Twitter Link' , 'class' => 'form-control' , 'label' => false]); ?>
                      <!-- <textarea class="form-control" name="meta_title"></textarea> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Instagram Link</label>
                      <?php echo $this->Form->control('instagram_link',[ 'placeholder' => 'Instagram Link' , 'class' => 'form-control' , 'label' => false]); ?>
                      <!-- <textarea class="form-control" name="meta_keyword"></textarea> -->
                    </div>
                     <div class="form-group">
                      <label for="exampleInputUsername1">Linkedin Link</label>
                      <?php echo $this->Form->control('linkedin_link',[ 'placeholder' => 'Linkedin Link' , 'class' => 'form-control' , 'label' => false]); ?>
                      <!-- <textarea class="form-control" name="meta_keyword"></textarea> -->
                    </div>
                     <div class="form-group">
                      <label for="exampleInputUsername1">Youtube Link</label>
                      <?php echo $this->Form->control('youtube_link',[ 'placeholder' => 'Youtube Link' , 'class' => 'form-control' , 'label' => false]); ?>
                      <!-- <textarea class="form-control" name="meta_keyword"></textarea> -->
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?php echo $this->Url->build('/admin/socialLinks'); ?>"><button class="btn btn-light">Cancel</button></a>
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