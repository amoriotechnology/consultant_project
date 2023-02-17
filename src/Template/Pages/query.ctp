<!-- ============================ Property Header Info Start================================== -->
<section class="bg-title">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-12">
					
							<div class="property_block_wrap style-4">
								<div class="prt-detail-title-desc">
									<h3 class="text-light">Post your queries here</h3>
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
                                <h4 class="text-center" style="text-transform: none; color: #fff; font-family: 'Calibri Light';">Post your queries here</h4>
                                <?php echo $this->Flash->render(); ?>
							</div>
							<div class="details-sidebar">
							
								<!-- Agent Detail -->
								<div class="sides-widget">
                                    <?= $this->Form->create($customerQuery,['novalidate' => true ]) ?>
									<div class="sides-widget-body simple-form">
										<div class="form-group">
											<!-- <label>Description</label> -->
											<textarea class="form-control area_view" name="message" placeholder="Start typing here..."></textarea>
										</div>
                                        <br>

										<div class="form-group">
												<input id="visit_consultation" class="checkbox-custom" name="consultation" type="checkbox" value="Audio Consultation">
									            <label for="visit_consultation" class="checkbox-custom-label text-white">Audio Consultation</label>
											</div>

											<div class="form-group">
												<input id="other_location" class="checkbox-custom" name="consultation" type="checkbox" value="Video Consultation">
									            <label for="other_location" class="checkbox-custom-label text-white">Video Consultation</label>
											</div>
                                      
                            
                                        <div class="form-check-inline icon_view" style="float: right;">
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </div>
                                        <br><br>
										<div class="sidebar_featured_property">
										
										<!-- List Sibar Property -->
                                        <h4 style="color: #fff; font-family: 'Calibri Light';">Confirm your Consultant</h4>
                                        <br>
                                        <div class="right_view">
                                            <h4 class="text-white" style="font-size: 18px;">Rs.<?php echo $get_cutomer['price']; ?>/-</h4>
                                        </div>
                                       
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src="<?php echo $this->Url->build('/webroot/uploads/customers/'.$get_cutomer['image']); ?>" alt="">
											</div>
                                    
											<div class="sides_list_property_detail">
												<h4 class="new_view" style="font-family: 'Calibri Light'; font-size: 22px;font-weight: bold; display: flex; justify-content: center;"><?php echo $get_cutomer['name']; ?>, <?php echo $get_cutomer['qualification']; ?></h4>
												<br>
												<div class="fr-grid-info view_info" style="display: flex;justify-content: center;">
												<ul>
													
													<li>
														<div class="fr-can-rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
															
														</div>
													</li>
												</ul>
											</div>
                                            <p class="text-center para_mob" style="font-size: 16px;font-family: 'Calibri Light';"><?php echo $get_cutomer['profession']; ?>&nbsp;<?php echo $get_cutomer['experience']; ?>&nbsp;Years Experience&nbsp;<?php echo $get_cutomer['address']; ?></p>
												
												<div class="lists_property_price">
													<div class="lists_property_types">
														<!-- <div class="property_types_vlix">For Rent</div> -->
													</div>
													<div class="lists_property_price_value img_view_mob">
                                                        <img src="<?php echo $this->Url->build('/frontend/assets/img/verify.png'); ?>" width="50" alt="">
													</div>
												</div>
												<input type="hidden" name="customer_id" value="<?php echo $get_cutomer['customer_id']; ?>">
											</div>
										</div>
                                        <p class="text-white" style="font-family: 'Calibri Light';">The Consultant will dial to you shortly.</p>
										<p class="text-white" style="font-family: 'Calibri Light';">Free follow-up call within 24 hours.</p>

                                        <br>

                                        <h4 style="font-family: 'Calibri Light'; color: #fff;">Enter Name</h4>
                                        <div class="form-group">
											<input type="text" class="form-control" name="name" placeholder="Enter your Name" required>
										</div>
                                        
                                        <div class="form-group">
											<input type="tel" id="txtPhone" name="mobile" class="form-control view_width" />
										</div>
									</div>
                                    <center><a href="<?php echo $this->Url->build('/pages/payment/'.$get_cutomer['customer_id']); ?>"><button class="btn btn-black btn-md rounded" type="submit">Submit</button></center>
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

.sides_list_property_thumb img{
	height: 250px !important;
}

.view_width{
	width: 1252px;
}

@media only screen and (max-width: 480px)and (orientation: portrait){
	#txtPhone{
		width: 344px !important;
	}

	.new_view{
		position: relative !important;
        top: 23px !important;
        font-size: 14px !important;
	}

	.view_info{
		position: relative !important;
        top: 12px !important;
	}

	.para_mob{
		font-size: 13px !important;
	}

	.img_view_mob{
		position: relative;
		top: 36px;
		left: 5px;
	}

	.icon_view{
		position: relative;
        top: 48px;
	}

	.area_view{
		height: 100px !important;
	}
}
</style>            