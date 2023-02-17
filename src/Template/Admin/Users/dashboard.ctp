<div class="main-panel">
        <div class="content-wrapper">
        <?php echo $this->Flash->render(); ?>
          <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="font-weight-light mb-4"><?php echo count($total_sub_sub_categories); ?></h1>
                  <div class="d-flex flex-wrap align-items-center">
                    <div>
                      <h4 class="font-weight-normal"><a href="<?php echo $this->Url->build('/admin/sub-sub-categories'); ?>">Total Sub Sub Categories</a></h4>
                      <!-- <p class="text-muted mb-0 font-weight-light">800 New customers</p> -->
                    </div>
                    <i class="mdi  mdi-chevron-double-down icon-lg text-primary ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="font-weight-light mb-4"><?php echo count($total_customers); ?></h1>
                  <div class="d-flex flex-wrap align-items-center">
                    <div>
                      <h4 class="font-weight-normal"><a href="<?php echo $this->Url->build('/admin/customers'); ?>">Total Consultant</a></h4>
                      <!-- <p class="text-muted mb-0 font-weight-light">1600 Daily orders</p> -->
                    </div>
                    <i class="mdi mdi-account-multiple icon-lg text-danger ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="font-weight-light mb-4"><?php echo count($total_appointments); ?></h1>
                  <div class="d-flex flex-wrap align-items-center">
                    <div>
                      <h4 class="font-weight-normal"><a href="<?php echo $this->Url->build('/admin/bookAppointments'); ?>">Total Appointments</a></h4>
                      <!-- <p class="text-muted mb-0 font-weight-light">760 New items</p> -->
                    </div>
                    <i class="mdi mdi-calendar-clock icon-lg text-info ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="font-weight-light mb-4"><?php echo count($total_queries); ?></h1>
                  <div class="d-flex flex-wrap align-items-center">
                    <div>
                      <h4 class="font-weight-normal"><a href="<?php echo $this->Url->build('/admin/customerQueries'); ?>">Total Customers Queries</a></h4>
                      <!-- <p class="text-muted mb-0 font-weight-light">540 Verified users</p> -->
                    </div>
                    <i class="mdi mdi-verified icon-lg text-success ml-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <h4 class="card-title">Statistics</h4>
                    <div class="dropdown">
                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        11 May 2018
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate">
                        <a class="dropdown-item" href="#">12 May 2018</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">13 May 2018</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">14 May 2018</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">15 May 2018</a>
                      </div>
                    </div>
                  </div>
                  <div id="statistics-legend" class="chartjs-legend mt-2 mb-4"></div>
                  <canvas id="statistics-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-start justify-content-between">
                    <h4 class="card-title">Traffic types</h4>
                    <div class="dropdown">
                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuTraffic" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Yearly
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTraffic">
                        <a class="dropdown-item" href="#">Monthly</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Weekly</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Daily</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Hourly</a>
                      </div>
                    </div>
                  </div>
                  <canvas id="traffic-chart" class="mt-2"></canvas>
                  <div class="d-flex mt-5 align-items-center">
                    <div id="traffic-legend" class="chartjs-legend traffic-legend mr-4"></div>
                    <h3 class="mb-0 font-weight-normal">43909</h3>
                  </div>
                  <p class="mb-0 mt-4 font-weight-light">
                    There is no denying the fact that the success of an advertisement lies mostly 
                    in the headline. The headline should attract the reader and make him read the 
                    rest.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Book Appointments</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Customer Name</th>
                          <th>Profession</th>
                          <th>Location</th>
                          <th>Mobile Number</th>
                          <th>Created</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php if(!empty($appointments)) { $i = 1; foreach ($appointments as $key => $value) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $value['name']; ?></td>
                          <td><?php echo $value['profession']; ?></td>
                          <td><?php echo $value['location']; ?></td>
                          <td><?php echo $value['mobile_number']; ?></td>
                          <td><?php echo date('d-m-Y',strtotime($value['created'])); ?></td>
                        </tr>
                      
                      <?php $i++; } } else{echo '<tr><td colspan="6" class="text-center">No data available in table</td></tr>'; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Customer Queries</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Consultation</th>
                          <th>Message</th>
                          <th>Mobile Number</th>
                          <th>Created</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php if(!empty($queries)) { $i = 1; foreach ($queries as $key => $query) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $query['name']; ?></td>
                          <td><?php echo $query['consultation']; ?></td>
                          <td><?php echo $query['message']; ?></td>
                          <td><?php echo $query['mobile']; ?></td>
                          <td><?php echo date('d-m-Y',strtotime($query['created'])); ?></td>
                        </tr>
                       <?php $i++; } } else{echo '<tr><td colspan="6" class="text-center">No data available in table</td></tr>'; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php echo $this->element('back_end/footer'); ?> 
        <!-- partial -->
      </div>


<style type="text/css">
  .table-hover tbody tr:hover{
    background-color: none !important;
  }
</style>      