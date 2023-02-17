<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Consultant List</h4>
              <a href="<?php echo $this->Url->build('/admin/customers/add'); ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Add Consultant</button></a>
              <br><br>
              <span><?php echo $this->Flash->render(); ?></span>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Sub Sub Category</th>
                            <th>Customer Name</th>
                            <th>Qualification</th>
                            <th>Profession</th>
                            <th>Experience</th>
                            <th>Address</th>
                            <th>Price ₹</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach ($customers as $key => $customer) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $customer['sub_sub_category_id']; ?>_(<?php echo $customer['SubSubCategories']['name']; ?>)</td>
                            <td><?php echo $customer['name']; ?></td>
                            <td><?php echo $customer['qualification']; ?></td>
                            <td><?php echo $customer['profession']; ?></td>
                            <td><?php echo $customer['experience']; ?></td>
                            <td><?php echo $customer['address']; ?></td>
                            <td><?php echo $customer['price']; ?></td>
                            <td class="text-center"><img src="<?php echo $this->Url->build('/uploads/customers/'.$customer->image); ?>" height="100"></td>
                            <td>
                            <div class="btn-group">
                                <a href="<?php echo $this->Url->build('/admin/customers/edit/'.$customer->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-edit"></i>
                                </a>
                            </div>
                            &nbsp;
                            <div class="btn-group">
                                <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'),['action' => 'delete', $customer->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
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