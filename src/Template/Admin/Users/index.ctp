<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Users List</h4>
              <br><br>
              <span><?php echo $this->Flash->render(); ?></span>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>User Role</th>
                            <th>Status</th>
                            <th>Created</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $status_type = [0 =>'Not Activated', 1 => 'Activated']; ?>
                        <?php $i = 1; foreach ($users as $key => $user) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['mobile']; ?></td>
                            <td><?php echo $user['user_role']['role_name']; ?></td>
                            <td>
                                <?php if($user['status'] == 1){ ?>
                                    <label class="badge badge-success &status=0"><?php echo $status_type[$user['status']]; ?></label>
                                <?php } else { ?>
                                    <label class="badge badge-danger &status=1"><?php echo $status_type[$user['status']]; ?></label>
                                <?php } ?>
                            </td> 
                            <td><?php echo date('d-m-Y',strtotime($user['created'])); ?></td>
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