<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">SubCategory List</h4>
              <a href="<?php echo $this->Url->build('/admin/subCategories/add'); ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Add Subcategory</button></a>
              <br><br>
              <span><?php echo $this->Flash->render(); ?></span>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>SubCategory Name</th>
                            <th>Main Category</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach ($subCategories as $key => $subCategory) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $subCategory['name']; ?></td>
                            <td><?php echo $subCategory['Categories']['name']; ?></td>
                            <td><?php echo date('d-m-Y',strtotime($subCategory['created'])); ?></td>
                            <td>
                            <div class="btn-group">
                                <a href="<?php echo $this->Url->build('/admin/subCategories/edit/'.$subCategory->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-edit"></i>
                                </a>
                            </div>
                            &nbsp;
                            <div class="btn-group">
                                <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'),['action' => 'delete', $subCategory->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
                            </div>
                            </td>
                        </tr>
                        <?php $i++; } ?>
                      </tbody>
                    </table>
                  </div>
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