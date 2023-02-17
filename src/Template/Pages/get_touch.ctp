<!-- ============================ Property Header Info Start================================== -->
<section class="bg-title">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-12">
					
							<div class="property_block_wrap style-4">
								<div class="prt-detail-title-desc">
									<h3 class="text-light">Get in Touch</h3>
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
                        <div class="col-lg-12 col-md-12 col-sm-12">
							
							<!-- Like And Share -->
							<!-- <div class="like_share_wrap b-0">
                                <h4 class="text-center" style="text-transform: none; color: #fff; font-family: 'Calibri Light';">Get Onboard</h4>
							</div> -->
							<?php echo $this->Flash->render(); ?>

							<div class="details-sidebar">
							
								<!-- Agent Detail -->
								<div class="sides-widget">
									<?= $this->Form->create('getTouch',['url' => '/Pages/getTouch']) ?>
										<div class="sides-widget-body simple-form">
	                                      
											<div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													<div class="form-group">
			                                        	<label class="mb-2">Name</label>
														<input type="text" name="name" class="form-control" placeholder="Enter your Name" required>
													</div>
												</div>
											</div>
											

											<div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													<div class="form-group">
			                                        	<label class="mb-2">Email Address</label>
														<input type="email" name="email_address" class="form-control" placeholder="Enter your EmailAddress" required>
													</div>
												</div>
											</div>

											<div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													 <div class="form-group">
													 	<label class="mb-2">Mobile Number</label>
														<input type="tel" id="txtPhone" name="mobile_number" placeholder="Enter Your Mobile Number" class="form-control view_width" />
													</div>
												</div>
											</div>

											<div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													 <div class="form-group">
													 	<label class="mb-2">Message</label>
														<textarea class="form-control" name="message" placeholder="Enter Your Message" rows="4" cols="50"></textarea>
													</div>
												</div>
											</div>
	                                        
										
                                    <center><button class="btn btn-black btn-md rounded" name="touch_submit" type="submit">Submit</button></center>  
								</div>
							<?= $this->Form->end() ?>   
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Property Detail End ================================== -->
<style>
    .sides_list_property_thumb {
    width: 300px;
    height: auto;
    border-radius: 4px;
    overflow: hidden;
}

.right_view{
    color: #fff;
    float: right;
    background-color: #1c1e1b;
    position: relative;
    top: 34px;
}

.btn-black {
    background: #47b2ff;
    color: #ffffff;
    border: 1px solid #47b2ff;
    padding: 6px 40px;
}

.badge-primary {
    background-color: #47b2ff;
}

.hero-search-content.side-form label, label {
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    font-family: 'Calibri Light';
}
.view_width{
	width: 613px;
}

@media only screen and (max-width: 480px)and (orientation: portrait){
	#txtPhone{
		width: 290px !important;
	}
}

@media only screen and (max-width: 992px)and (orientation: landscape){
	#txtPhone{
		width: 314px !important;
	}
}
</style>            