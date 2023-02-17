<!-- ============================ Property Header Info Start================================== -->
<section class="bg-title">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-12">
					
							<div class="property_block_wrap style-4">
								<div class="prt-detail-title-desc">
									<h3 class="text-light">Describe your requirement here</h3>
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
							<div class="like_share_wrap b-0">
                                <h4 class="text-center" style="text-transform: none; color: #fff; font-family: 'Calibri Light';">Describe your requirement here!</h4>
                                <?php echo $this->Flash->render(); ?>
							</div>
							<div class="details-sidebar">
							
								<!-- Agent Detail -->
								<div class="sides-widget">
                                   <?= $this->Form->create($enquiry,['novalidate' => true ]) ?>
									<div class="sides-widget-body simple-form">
										<div class="form-group">
											<!-- <label>Description</label> -->
											<textarea class="form-control" name="enquiry" placeholder="Start typing here..."></textarea>
										</div>
                                        <br>
                                          <p class="text-white">The Consultant will dial to you shortly.</p>
                                       
                                        <div class="form-check-inline" style="float: right; margin-top: -34px;">
                                            <i class="fa fa-upload text-white" aria-hidden="true"></i>
                                        </div>
                                        <br><br>
										<div class="sidebar_featured_property">
								
                                        <h4 class="text-white">Enter Name</h4>
                                        <div class="form-group">
											<input type="text" class="form-control" name="name" placeholder="Enter your Name" required>
										</div>
                                        
                                        <div class="form-group">
												<input type="tel" id="txtPhone" name="mobile" class="form-control view_width" />
											</div>
									</div>
                                    <center><button class="btn btn-black btn-md rounded" type="submit">Done</button></center>
                                    <?= $this->Form->end() ?>   
									</div>
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

.view_width{
	width: 1252px;
}
</style>            