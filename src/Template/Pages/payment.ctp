
			<!-- ============================ Page Title Start================================== -->
			<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Make Payment</h2>
							<!-- <span class="ipn-subtitle">Pay your payment</span> -->
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->

			<!-- =================== Sidebar Search ==================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-12 form-submit">
							
							<!-- 2st Step Checkout -->
							<div class="checkout-wrap">
								
								<div class="checkout-head">
									<ul>
										<li></li>
										<li class="active"><span>2</span>Payment Information</li>
										<li></li>
									</ul>
								</div>
								 <!-- <?php echo $this->Flash->render(); ?> -->
								
								<div class="checkout-body">
									<div class="row mb-5">
								
										<div class="col-lg-12 col-md-12 col-sm-12">
											<h4 class="mb-3">Payment Information</h4>
										</div>
										
										<!-- <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="switchbtn paying">
												<input id="pay-2" class="switchbtn-checkbox" type="radio" value="2" name="pay-2" checked>
												<label class="switchbtn-label" for="pay-2">
													Pay with Credit card
												</label>
											</div>
										</div> -->
										
										<!-- <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="switchbtn paying">
												<input id="pay-3" class="switchbtn-checkbox" type="radio" value="2" name="pay-2">
												<label class="switchbtn-label" for="pay-3">
													Pay with PayPal
												</label>
											</div>
										</div> -->
									</div>

									
									<div class="row">
										<!-- <?= $this->Form->create($paymentPage,['novalidate' => true ]) ?> -->
									
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>UPI</label>
												<select class="form-control">
													<option>Select Payment</option>
													<option>GPay</option>
													<option>PhonePe</option>
													<option>Paytm</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Net Banking</label>
												<input type="number" name="payment_date" class="form-control">
											</div>
										</div>
										
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label>Credit card / Debit card</label><br><br>
												<img src="<?php echo $this->Url->build('/uploads/pay.png'); ?>" data-toggle="modal" data-target="#myModal">
												
											</div>
										</div>									
									
										<!-- <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label>Bank Name</label>
												<input type="text" name="bank_name" class="form-control">
											</div>
										</div> -->
										
										<!-- <div class="col-lg-12 col-md-12 col-sm-6">
											<div class="form-group">
												<label>Details</label>
												<input type="text" name="details" class="form-control">
											</div>
										</div> -->
							
										<input type="hidden" name="customer_id" value="<?php echo $get_cutomer['customer_id']; ?>">

										<input type="hidden" name="total_amount" value="<?php echo $get_cutomer['price']; ?>">

										<!-- <input type="hidden" name="payment_id" value="<?php echo $get_cutomer['payment_id']; ?>">										 -->
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group text-center">
												<!-- <button type="button" class="btn btn-black black full-width mt-2">Confirm Booking</button> -->
												<button class="btn btn-black btn-md rounded" type="submit"><a href="<?php echo $this->Url->build('/pages/payment_success/'.$get_cutomer['customer_id']); ?>" class="text-white">Pay</a></button>

												<!-- <button class="btn btn-black btn-md rounded" type="submit">Confirm Booking</button> -->
											</div>
										</div>
									
									<!-- <?= $this->Form->end() ?>    -->
										
									</div>
								</div>
								
							</div>
							
							
						</div>
						<!-- Sidebar End -->
							
						<div class="col-lg-3 col-md-12">
							<div class="checkout-side">
							
								<div class="booking-short">
									<img src="assets/img/ind/3.jpg" class="img-fluid" alt="" />
									<h4><?php echo $get_cutomer['name']; ?></h4>
									<span><?php echo date('d-m-Y',strtotime($get_cutomer['created'])); ?></span>
								</div>
								
								<div class="booking-short-side">
									<div class="accordion" id="accordionExample">
										<div class="card">
											<div class="card-header" id="bookinDet">
											  <h2 class="mb-0">
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#bookinSer" aria-expanded="true" aria-controls="bookinSer">
												  Booking Detail
												</button>
											  </h2>
											</div>

											<div id="bookinSer" class="collapse show" aria-labelledby="bookinDet" data-parent="#accordionExample">
												<div class="card-body">
													<ul class="booking-detail-list">
														<!-- <li><?php echo date('Y/m/d') ?></li> -->
														<!-- <li>Tour Days<span>5 Days</span></li> -->
														<li><?php echo $get_cutomer['name']; ?></li>
														<li><?php echo $get_cutomer['sub_sub_category']['name']; ?></li>
													</ul>
												</div>
											</div>
										</div>
										
										<!-- <div class="card">
											<div class="card-header" id="extraFeat">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#extraSer" aria-expanded="false" aria-controls="extraSer">
												  Extra Features
												</button>
											  </h2>
											</div>
											<div id="extraSer" class="collapse" aria-labelledby="extraFeat" data-parent="#accordionExample">
												<div class="card-body">
													<ul class="booking-detail-list">
														<li>Breakfast</li>
														<li>Rooms Service</li>
														<li>Wifi Free</li>
														<li>Car Driving</li>
													</ul>
												</div>
											</div>
										  </div> -->
										  
										 <!--  <div class="card">
											<div class="card-header" id="CouponCode">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#couponcd" aria-expanded="false" aria-controls="couponcd">
												  Coupon Code
												</button>
											  </h2>
											</div>
											<div id="couponcd" class="collapse show" aria-labelledby="CouponCode" data-parent="#accordionExample">
												<div class="card-body">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Code">
														<button type="button" class="btn btn-black black full-width mt-2">Apply</button>
													</div>
												</div>
											</div>
										</div> -->
										
										<div class="card">
											<div class="property_block_wrap style-2">
								
												<div class="property_block_wrap_header">
													<a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Payment</h4></a>
												</div>
												<div id="clTwo" class="panel-collapse collapse show">
													<div class="block-body">
														<div class="card-body">
																	<ul class="booking-detail-list">
																		<li>Sub Total<span>₹<?php echo $get_cutomer['price']; ?></span></li>
																		<!-- <li>Extra Price<span>₹70</span></li>
																		<li>Tax<span>₹20</span></li> -->
																		<li><b>Pay Amount</b><span>₹<?php echo $get_cutomer['price']; ?></span></li>
																	</ul>
																</div>
													</div>
												</div>
											</div>
				
											
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- =================== Sidebar Search ==================== -->