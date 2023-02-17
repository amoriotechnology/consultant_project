<!-- ============================ Property Header Info Start================================== -->
<section class="bg-title">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-12">
					
							<div class="property_block_wrap style-4">
								<div class="prt-detail-title-desc">
									<h3 class="text-light">Book an Appointment</h3>
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
                                <h4 class="text-center" style="text-transform: none; color: #fff; font-family: 'Calibri Light';">Register your details for the visit</h4>
                                <?php echo $this->Flash->render(); ?>
							</div>

							<div class="details-sidebar">
							
								<!-- Agent Detail -->
								<div class="sides-widget">
                                    <?= $this->Form->create($bookAppointment,['novalidate' => true ]) ?>
										<div class="sides-widget-body simple-form">
											<div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													<div class="form-group">
														<label class="mb-2">Choose a best time for the visit</label>
														<!-- <input type="datetime-local" name="visiting_hours" class="form-control" placeholder="Choose a best time for the visit"> -->
														<!-- <input placeholder="Choose a best time for the visit" class="form-control" type="text"onfocus="(this.type='datetime-local')" name="visiting_hours" id="date" /> -->

														  <input placeholder="Choose a best time for the visit" class="form-control" type="datetime-local" name="visiting_hours" id="date">

														<!-- <input type="text" name="visiting_hours" data-role="calendarpicker"> -->
													</div>
												</div>
											</div>
											<div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													<div class="form-group">
														<label class="mb-2">Search by Consultant's Name</label>
														<input type="text" name="consultant_name" class="form-control" placeholder="Search by Consultant's Name">
														
													</div>
												</div>
											</div>

											<span class="mb-2" style="color: #fff; font-family: 'Calibri Light'; font-size: 20px; display: flex;  justify-content: center; font-weight: bold;">(Or)</span>

                                            <div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													<div class="form-group">
													    <label class="mb-2">Search by Profession</label>
														<!-- <select name="profession" class="form-control">
															<?php foreach ($profession as $key => $value) { ?>
																<option><?php echo $value['profession']; ?></option>
															<?php } ?>
															
														</select> -->
														<select name="profession" id="jodSel" class="form-control">
															<option>Search by Profession</option>
															<!--Options Start -->
															<option style="font-weight: bold; font-size: 18px;" disabled>Design Related </option>
															<option value="Architect">Architect</option>
															<option value="Civil Engineer">Civil Engineer</option>
															<option value="Demolition Consultant">Demolition Consultant</option>
															<option value="GFRG Consultant">GFRG Consultant</option>
															<option value="Green building Consultant">Green building Consultant</option>
															<option value="Interior Designer">Interior Designer</option>
															<option value="Landscape Consultant">Landscape Consultant</option>
															<option value="Lighting design Consultant">Lighting design Consultant</option>
															<option value="PEB Consultant">PEB Consultant</option>
															<option value="Structural Engineer">Structural Engineer</option>
															<option value="Vernacular Consultant">Vernacular Consultant</option>
															<option value="Vastu Consultant">Vastu Consultant</option>
															<!--Options End -->

															<!--Visit in consultant’s office Start -->
															<option style="font-weight: bold; font-size: 18px;" disabled>Documentation Related</option>
															<option value="Building Approval" id="1">Building Approval</option>
															<option value="Documentation & Registration" id="2">Documentation & Registration</option>
															<option value="Property Legal" id="3">Property Legal </option>
															<option value="GFRG Consultant" id="4">Property Loan </option>
															<option value="Property Valuer" id="5">Property Valuer</option>
															<!--Visit in consultant’s office End -->

															<!--Options Start -->
															<option style="font-weight: bold; font-size: 18px;" disabled>Safety Related</option>
															<option value="Building Automation">Building Automation</option>
															<option value="CCTV">CCTV</option>
															<option value="Property Legal">Fire & Safety</option>
															<!--Options End -->

															<!--Other Location Start -->
															<option style="font-weight: bold; font-size: 18px;" disabled>Services Related </option>
															<option value="Electrical" id="6">Electrical</option>
															<option value="HVAC" id="7">HVAC</option>
															<option value="Plumbing" id="8">Plumbing</option>
															<option value="Termite Treatment" id="9">Termite Treatment</option>
															<option value="Waterproofing & damp proofing" id="10">Waterproofing & damp proofing</option>
															<!--Other Location End -->

															<!--Other Location Start -->
															<option style="font-weight: bold; font-size: 18px;" disabled>Allied Services</option>
															<option value="Conceal piped gas" id="11">Conceal piped gas</option>
															<option value="Rain water harvest" id="12">Rain water harvest </option>
															<option value="Soil test" id="13">Soil test</option>
															<option value="Solar power" id="14">Solar power</option>
															<option value="Water divining" id="15">Water divining</option>
															<option value="Water and Waste water management" id="16">Water and Waste water management</option>
															<!--Other Location End -->
														</select>
												     </div>
												</div>
											</div>

											<div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													<div class="form-group" id="vis_cons">
														<input id="visit_consultation" class="checkbox-custom" name="location" type="checkbox" value="Visit in Consultant's Office">
											            <label for="visit_consultation" class="checkbox-custom-label">Visit in Consultant's Office</label>
													</div>
													<div class="form-group" id="location_dis">
														<input id="other_location" class="checkbox-custom" name="location" type="checkbox" value="Other Location">
											            <label for="other_location" class="checkbox-custom-label">Other Location</label>
													</div>
                                            
												</div>
											</div>
                                             <div class="row" style="display: flex; justify-content: center; display: none;" id="add_input">
												<div class="col-md-6">
													<div class="form-group">
			                                        	<label>If other location, specify address (within Chennai limit only)</label>
														<input type="text" name="specify_address" class="form-control" placeholder="Enter your Specify address" required>
													</div>
												</div>
											</div>

                                             <br>
											<div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
                                                   <div class="form-group">
														<h5 class="text-white">Consultation Fees &nbsp;&nbsp;&nbsp;<span class="badge badge-primary" style="border-radius: 40px;padding: 5px 15px 5px 15px;"><i class="fa fa-rupee" style="font-size: 12px;"></i> 3,000/-</span></h5>
													</div>
											    </div>
											</div>    		
											
											
                                            <br>
	                                         <h4 class="text-center" style="text-transform: none; color: #fff; font-family: 'Calibri Light';">Enter Your Contact Details</h4>

	                                         <div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													<div class="form-group">
			                                        	<label class="mb-2">Enter Name</label>
														<input type="text" name="name" class="form-control" placeholder="Enter your Name" required>
													</div>
												</div>
											</div>

											 <div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													<div class="form-group">
			                                        	<label class="mb-2">Enter Email Address</label>
														<input type="email" name="email" class="form-control" placeholder="Enter your EmailAddress" required>
													</div>
												</div>
											</div>

											<div class="row" style="display: flex; justify-content: center;">
												<div class="col-md-6">
													 <div class="form-group">
													 	<label class="mb-2">Enter your Mobilenumber</label>
														<input type="tel" id="txtPhone" name="mobile_number" class="form-control view_width" />
													</div>
												</div>
											</div>
	                                        
										
                                    <center><button class="btn btn-black btn-md rounded" type="submit">Book</button></center>
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