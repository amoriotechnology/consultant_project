<!-- ============================ Page Title Start================================== -->
<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title text-center">Account Information</h2>
							<!-- <span class="ipn-subtitle">Lists of our all expert Consultant</span> -->
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Search Form End ================================== -->
			<section class="gray-simple p-0" style="display: none;">
				<div class="container">
					<!-- row Start -->
					<div class="row justify-content-center">
						<div class="col-lg-10 col-md-12">
							<div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard overlio-40">
								<div class="hero-search-content">
									
									<div class="row">
										
										<div class="col-lg-10 col-md-5 col-sm-12">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" id="value" class="form-control" placeholder="Search for legal consultant name" value="">
													<img src="<?php echo $this->Url->build('/frontend/assets/img/search.png'); ?>" width="20">
												</div>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-3 col-sm-12">
											<div class="form-group">
												<a href="#" class="btn search-btn black button_view_mob">Search</a>
											</div>
										</div>
                                        
                                        <!-- <div id="search_result"></div> -->

												
									</div>
								
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
			</section>
			<!-- ============================ Search Form End ================================== -->
			
			<!-- ============================ Agent List Start ================================== -->
			<section class="bg-light">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="filter_search_opt">
								<a href="javascript:void(0);" onclick="openFilterSearch()">Dashboard Navigation<i class="ml-2 ti-menu"></i></a>
							</div>
						</div>
					</div>
								
					<div class="row">
						
						<div class="col-lg-3 col-md-12">
							
							<div class="simple-sidebar sm-sidebar" id="filter_search">
								
								<div class="search-sidebar_header">
									<h4 class="ssh_heading">Close Filter</h4>
									<button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
								</div>
								
								<div class="sidebar-widgets">
									<div class="dashboard-navbar">
										
										<div class="d-user-avater">
											<h3 class="text-white"><?php echo $auth; ?></h3>
											<?php $status_type = [0 =>'Not Activated', 1 => 'Activated']; ?>
											<?php if($Auth_user['status'] == 1){ ?>
			                                    <label class="badge badge-success &status=0"><?php echo $status_type[$Auth_user['status']]; ?></label>
			                                <?php } else { ?>
			                                    <label class="badge badge-danger &status=1"><?php echo $status_type[$Auth_user['status']]; ?></label>
			                                <?php } ?>
										</div>
										
										<div class="d-navigation">
											<ul>
												<li><a href="<?php echo $this->Url->build('/users/dashboard'); ?>"><i class="ti-dashboard"></i>Dashboard</a></li>
												<li class="active"><a href="<?php echo $this->Url->build('/users/edit-account'); ?>"><i class="ti-dashboard"></i>Account Information</a></li>
												<li><a href="<?php echo $this->Url->build('/users/change-password'); ?>"><i class="ti-unlock"></i>Change Password</a></li>
												<li><a href="<?php echo $this->Url->build('/users/logout'); ?>"><i class="ti-power-off"></i>Log Out</a></li>
											</ul>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-12">
							<div class="dashboard-wraper">
							<?php echo $this->Flash->render(); ?>
								<!-- Basic Information -->
								<div class="form-submit">	
									<h4 class="text-center mb-3 text-white">Edit Account</h4>
									<div class="submit-section">
										<?= $this->Form->create($user,['novalidate' => true]) ?>
										<div class="row">
											<div class="form-group col-md-12">
												<?php echo $this->Form->control('name',[ 'placeholder' => 'Your Name' ,  'class' => 'form-control' , 'label' => false]); ?>
											</div>
											
											<div class="form-group col-md-12">
												<?php echo $this->Form->control('email',[ 'placeholder' => 'Your Email' ,  'class' => 'form-control' , 'label' => false , 'value' => $user->email , 'disabled' ]); ?>
											</div>
											
											<div class="form-group col-md-12">
												 <?php echo $this->Form->control('mobile',[ 'placeholder' => 'Your Mobile' ,  'class' => 'form-control' , 'label' => false]); ?>
											</div>
											<div class="form-group col-md-4">
												<button class="btn btn-primary"  type="submit">Update Information</button>
											</div>
										</div>
										<?= $this->Form->end() ?>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Agent List End ================================== -->
			
<style type="text/css">
.btn-primary, .btn-primary.disabled {
    background: #0074d9 !important;
    border: 1px solid #0074d9;
    color: #fff;
}

#elemtId{
	font-size: 20px;
    text-align: center;
    color: #fff;
    font-family: 'Calibri Light';
}


@media only screen and (min-width:321px) and (max-width:768px) and (orientation: portrait){
	.button_view_mob{
      display: none !important;
    }
}
</style> 

