<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sub SubCategory List</h4>
              <a href="<?php echo $this->Url->build('/admin/subSubCategories/add'); ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Add Sub Subcategory</button></a>
              <br><br>
              <span><?php echo $this->Flash->render(); ?></span>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Sub SubCategory Name</th>
                            <th>Main Category</th>
                            <th>Sub Category</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach ($subSubCategories as $key => $subsubcategory) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $subsubcategory['name']; ?></td>
                            <td><?php echo $subsubcategory['Categories']['name']; ?></td>
                            <td><?php echo $subsubcategory['SubCategories']['name']; ?></td>
                            <td><?php echo date('d-m-Y',strtotime($subsubcategory['created'])); ?></td>
                            <td>
                            <div class="btn-group">
                                <a href="<?php echo $this->Url->build('/admin/subSubCategories/edit/'.$subsubcategory->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-edit"></i>
                                </a>
                            </div>
                            &nbsp;
                            <div class="btn-group">
                                <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'),['action' => 'delete', $subsubcategory->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
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