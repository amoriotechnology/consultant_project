<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Home Page List</h4>
              <a href="<?php echo $this->Url->build('/admin/homePages/add'); ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Add Home Image</button></a>
              <br><br>
              <span><?php echo $this->Flash->render(); ?></span>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach ($homePages as $key => $homepage) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td class="text-center"><img src="<?php echo $this->Url->build('/uploads/home_banner/'.$homepage->image); ?>" height="400"></td>
                            <td><?php echo $homepage['title']; ?></td>
                            <td>
                            <div class="btn-group">
                                <a href="<?php echo $this->Url->build('/admin/homePages/edit/'.$homepage->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-edit"></i>
                                </a>
                            </div>
                            &nbsp;
                            <div class="btn-group">
                                <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'),['action' => 'delete', $homepage->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
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