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
						<!-- Sidebar End -->
							
						<div class="col-lg-3 col-md-12">
							<div class="checkout-side">
							
								<div class="booking-short">
									<img src="assets/img/ind/3.jpg" class="img-fluid" alt="" />
									<h4><?php echo $payment_customer['name']; ?></h4>
									<span><?php echo date('d-m-Y',strtotime($payment_customer['created'])); ?></span>
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
														<!-- <li><?php echo date('d-m-y') ?></li> -->
														<!-- <li>Tour Days<span>5 Days</span></li> -->
														<li><?php echo $payment_customer['name']; ?></li>
														<li><?php echo $payment_customer['sub_sub_category']['name']; ?></li>
													</ul>
												</div>
											</div>
										</div>
										<input type="hidden" name="customer_id" value="<?php echo $payment_customer['customer_id']; ?>">
										
										<!--   
										  <div class="card">
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
																		<li>Sub Total<span>₹<?php echo $payment_customer['price']; ?></span></li>
																		<!-- <li>Extra Price<span>₹70</span></li>
																		<li>Tax<span>₹20</span></li> -->
																		<li><b>Paid Amount</b><span>₹<?php echo $payment_customer['price']; ?></span></li>
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

						<div class="col-lg-9 col-md-12 form-submit">
							<div class="checkout-wrap">
								
								<div class="checkout-head">
									<div class="success-message">
										<span class="thumb-check"><i class="ti-check"></i></span>
										<h4>Thank you, recieved your payment. </h4>
										<p>Consultant will call you shortly.</p>
									</div>
								</div>
								
								<div class="checkout-body">
									
									
									<div class="row">
										<div class="col-md-12 col-lg-12">
										
											<ul class="booking-detail-list">
												<li>Booking ID/Num.<span><?php echo $booking_id; ?></span></li>
												<li>Name<span><?php echo $payment_customer['name']; ?></span></li>
												<li>Phone<span><?php echo $payment_customer['price']; ?></span></li>
												<li>Address<span><?php echo $payment_customer['address']; ?></span></li>
											</ul>
											<hr>
											
											<h4>Payment Detail</h4>
											<p>Payment Recieved</p>
											
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- =================== Sidebar Search ==================== -->