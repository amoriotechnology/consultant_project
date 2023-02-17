<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Book Appointment List</h4>
              <br><br>
              <span><?php echo $this->Flash->render(); ?></span>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Appointment</th>
                            <th>Consultant Name</th>
                            <th>Profession</th>
                            <th>Location</th>
                            <th>Specify Address</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Mobile Number</th>
                            <th>Created</th>
                            <!-- <th>Actions</th> -->
                        </tr>
                      </thead>
                      <tbody>

                        <?php $i = 1; foreach ($bookAppointments as $key=> $value) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo date('d-m-Y / h:ia',strtotime($value['visiting_hours'])); ?></td>
                            <td><?php echo $value['consultant_name']; ?></td>
                            <td><?php echo $value['profession']; ?></td>
                            <td><?php echo $value['location']; ?></td>
                            <td><?php echo $value['specify_address']; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['mobile_number']; ?></td>
                            <td><?php echo date('d-m-Y',strtotime($value['created'])); ?></td>
                            <!-- <td>
                            <div class="btn-group">
                                <a href="<?php echo $this->Url->build('/admin/categories/edit/'.$category->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-edit"></i>
                                </a>
                            </div>
                            &nbsp;
                            <div class="btn-group">
                                <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'),['action' => 'delete', $category->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
                            </div>
                            </td> -->
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