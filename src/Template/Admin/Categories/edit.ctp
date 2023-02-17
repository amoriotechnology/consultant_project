<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Categories</h4>
                  <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                  <?= $this->Form->create($category,['novalidate' => true ]) ?>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Category</label>
                      <?php echo $this->Form->control('name',[ 'placeholder' => 'Category' , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?php echo $this->Url->build('/admin/categories'); ?>"><button class="btn btn-light">Cancel</button></a>
                  </form>
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