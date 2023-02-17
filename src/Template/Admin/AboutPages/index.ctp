<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Customers List</h4>
              <a href="<?php echo $this->Url->build('/admin/aboutPages/add'); ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Add Aboutus Content</button></a>
              <br><br>
              <span><?php echo $this->Flash->render(); ?></span>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach ($aboutPages as $key => $aboutpage) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $aboutpage['title']; ?></td>
                            <td><?php echo $aboutpage['description']; ?></td>
                            <td class="text-center"><img src="<?php echo $this->Url->build('/uploads/about-us/'.$aboutpage->image); ?>" height="100"></td>
                            <td><?php echo date('d-m-Y',strtotime($aboutpage['created'])); ?></td>
                            <td>
                            <div class="btn-group">
                                <a href="<?php echo $this->Url->build('/admin/aboutPages/edit/'.$aboutpage->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-edit"></i>
                                </a>
                            </div>
                            &nbsp;
                            <div class="btn-group">
                                <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'),['action' => 'delete', $aboutpage->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
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

<style>
  table.dataTable td, table.dataTable th {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    width: 200px;
}
</style>      