<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Sub Subcategories</h4>
                  <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                  <?= $this->Form->create($subSubCategory,['novalidate' => true ]) ?>
                    <div class="form-group">
                      <label>Sub Sub Category Name</label>
                      <?php echo $this->Form->control('name',[ 'placeholder' => 'Sub Sub Category' , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>

                    <div class="form-group">
                      <label>Category Name</label>
                      <?php echo $this->Form->control('category_id',['options' => $categories , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>

                    <div class="form-group">
                      <label>Sub Category</label>
                      <?php echo $this->Form->control('sub_category_id',['options' => $subCategories , 'class' => 'form-control' , 'label' => false]); ?>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?php echo $this->Url->build('/admin/sub-categories'); ?>"><button class="btn btn-light">Cancel</button></a>
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