<!-- ============================ Property Header Info Start================================== -->
<section class="bg-title">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-12">
					
							<div class="property_block_wrap style-4">
								<div class="prt-detail-title-desc">
									<h3 class="text-light">About Us</h3>
								</div>
							</div>
							
						</div>	
					</div>
				</div>
			</section>
			<!-- ============================ Property Header Info Start================================== -->
			
			<!-- ============================ Property Detail Start ================================== -->
			<section class="gray-simple">
				<div class="container">
					<div class="row">
						
						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo" href="javascript:void(0);" aria-expanded="true">
										<h4 class="property_block_title"><?php echo $get_about_pages['title']; ?></h4></a>
										<!-- <h4 class="property_block_title">About Us</h4> -->
								</div>
								<div id="clTwo" class="panel-collapse collapse show">
									<div class="block-body">
										<p><?php echo $get_about_pages['description']; ?></p>
									</div>
								</div>
							</div>
							
						</div>
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							
							<div class="details-sidebar">
							  
							  <img src="<?php echo $this->Url->build('/webroot/uploads/about-us/'.$get_about_pages['image']); ?>" width="400" style="border-radius: 10px;">
							
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Property Detail End ================================== -->
			