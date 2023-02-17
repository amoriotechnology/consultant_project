<!-- ============================ Page Title Start================================== -->
<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title text-center">Professions</h2>
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
									<form method="GET">
									<div class="row">
									
										<!-- <div class="col-lg-4 col-md-4 col-sm-12 b-r">
											<div class="form-group">
												<div class="choose-propert-type">
													<ul>
														<li>
															<input id="cp-1" class="checkbox-custom" name="cpt" type="radio" checked="">
															<label for="cp-1" class="checkbox-custom-label">Buy</label>
														</li>
														<li>
															<input id="cp-2" class="checkbox-custom" name="cpt" type="radio">
															<label for="cp-2" class="checkbox-custom-label">Rent</label>
														</li>
														<li>
															<input id="cp-3" class="checkbox-custom" name="cpt" type="radio">
															<label for="cp-3" class="checkbox-custom-label">Sold</label>
														</li>
													</ul>
												</div>
											</div>
										</div> -->
										
										<div class="col-lg-10 col-md-5 col-sm-12">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" id="value" class="form-control" placeholder="Search for legal consultant name" value="">
													<!-- <?php echo $this->Form->control('query',[ 'placeholder' => 'Search for legal consultant name' , 'class' => 'form-control' , 'label' => false, 'value' =>$this->request->query('query')]); ?> -->
													<img src="<?php echo $this->Url->build('/frontend/assets/img/search.png'); ?>" width="20">
												</div>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-3 col-sm-12">
											<div class="form-group">
												<!-- <a href="#" class="btn search-btn black">Search</a> -->
												<button type="submit" class="btn search-btn black">Search</button>
											</div>
										</div>
                                        
                                        <div id="search_result"></div>

												
									</div>
									</form>
								
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
			</section>
			<!-- ============================ Search Form End ================================== -->
			
			<!-- ============================ Agent List Start ================================== -->
			<section class="gray-simple">
			
				<div class="container">
					<div class="row">
					<h2 class="text-white mb-4" style="text-transform: none;"><span>Ask</span> our panel of All Consultants</h2>
					<div class="col-lg-12 col-md-5 col-sm-12">
						<div class="form-group">
							<div class="input-with-icon" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; border-radius: 10px;">
								<h2 style="font-size: 20px; text-align: center; color: #fff;">All Consultants</h2>
								<!-- <p style="margin-left: 20px; text-align: center;"><?php echo $category['name']; ?></p></input/> -->
							</div>
						</div>
					</div>
					 <!-- <div id="none">Sorry No Results Founds</div> -->
					 <div id="elemtId" style="display:none">Sorry No Results Found</div>
						<!-- Single Agent -->
                        <?php foreach ($all_consultants as $key => $consultant) { ?>
						<div class="col-lg-4 col-md-6 col-sm-12 profile">
							<div class="agents-grid">
								
								<div class="agents-grid-wrap">
									
									<div class="fr-grid-thumb">
										<!-- <a href="index.php"> -->
											<img src="<?php echo $this->Url->build('/webroot/uploads/customers/'.$consultant['image']); ?>" class="img-fluid mx-auto" alt="" />
										<!-- </a> -->
									</div>
									
									<div class="fr-grid-deatil">
										<div class="fr-grid-deatil-flex">
											<h5 class="fr-can-name text-center"><a href="#" class="text-white view_name" style="font-family: 'Calibri Light'; font-size: 22px;font-weight: bold;"><?php echo $consultant['name']; ?>, <?php echo $consultant['qualification']; ?></a></h5>
											<!-- <span class="agent-property"><?php echo $customer['qualification']; ?></span> -->
											<br>
											<div class="fr-grid-info" style="display: flex;justify-content: center;">
												<ul>
													
													<li>
														<div class="fr-can-rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
															<!-- <span class="reviews_text">(42 Reviews)</span> -->
														</div>
													</li>
												</ul>
											</div>
											<p class="text-white text-center" style="font-size: 16px;font-family: 'Calibri Light';"><?php echo $consultant['profession']; ?>&nbsp;<?php echo $consultant['experience']; ?>&nbsp;Years Experience&nbsp;<?php echo $consultant['address']; ?></p>
                                            <!-- <p><b><?php echo $customer['experience']; ?></b>&nbsp;Years Experience</p>
											<p><b><?php echo $customer['address']; ?></b></p> -->
										</div>
										<!-- <div class="fr-grid-deatil-flex-right">
											<div class="agent-email"><a href="#"><i class="ti-email"></i></a></div>
										</div> -->
									</div>
									
								</div>
								
								<div class="fr-grid-footer" style="border-top: none !important;">
									<div class="fr-grid-footer-flex">
										<a href="<?php echo $this->Url->build('/pages/payment/'.$consultant['customer_id']); ?>" style="color: #fff;"><button style="border-radius: 20px; padding: 8px 30px; font-weight: bold; font-family: 'Calibri Light'; font-size: 15px;" class="btn btn-primary btn-sm"><i class="fa fa-rupee"></i>&nbsp;Rs.<?php echo $consultant['price']; ?></button></a>
									</div>
									<div class="fr-grid-footer-flex-right">
										<a href="<?php echo $this->Url->build('/pages/query/'.$consultant['customer_id']); ?>" style="color: #fff;"><button style="border-radius: 20px; padding: 8px 30px; font-weight: bold; font-family: 'Calibri Light'; font-size: 15px;" class="btn btn-primary btn-sm"><i class="fa fa-headphones" aria-hidden="true"></i>&nbsp; Connect</button></a>
									</div>
								</div>
								
							</div>
						</div>
                        <?php } ?>
					</div>
					
					<!-- <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="listings-list-with-sidebar.html" class="btn btn-theme-light-2 rounded">Load More Agents</a>
						</div>
					</div> -->
					
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
</style> 
