<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Payment List</h4>
              <br><br>
              <span><?php echo $this->Flash->render(); ?></span>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Customer Name</th>
                            <th>Payment Date</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Created</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $status_type = [0 =>'Initiated', 1 => 'Processing', 2 => 'Success', 3 => 'Payment Failed']; ?>
                        <?php $i = 1; foreach ($paymentPages as $key => $payment) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $payment['customer_id']; ?></td>
                            <td><?php echo $payment['payment_date']; ?></td>
                            <td><?php echo $payment['total_amount']; ?></td>
                            <td>
                                <?php if($payment['status'] == 0){ ?>
                                    <label class="badge badge-success &status=0"><?php echo $status_type[$payment['status']]; ?></label>
                                <?php } else { ?>
                                    <label class="badge badge-danger &status=2"><?php echo $status_type[$payment['status']]; ?></label>
                                <?php } ?>
                            </td> 
                            <td><?php echo date('d-m-Y',strtotime($payment['created'])); ?></td>
                            <!-- <td>
                            <div class="btn-group">
                                <a href="<?php echo $this->Url->build('/admin/siteSettings/edit/'.$siteSetting->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-edit"></i>
                                </a>
                            </div>
                            &nbsp;
                            <div class="btn-group">
                                <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'),['action' => 'delete', $siteSetting->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
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