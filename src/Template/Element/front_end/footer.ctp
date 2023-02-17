<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer">
				<div>
					<div class="container">
						<div class="row">
							
							<div class="col-lg-4 col-md-4">
								<div class="footer-widget">
									<!-- <img src="assets/img/logo-light.png" class="img-footer" alt="" /> -->
									<a class="nav-brand" href="<?php echo $this->Url->build('/') ?>">
									<img src="<?php echo $this->Url->build('/frontend/assets/img/logo-1.png'); ?>" width="100px">
								<!-- <h4 style="font-family: berlin sans; font-size: 25px; text-transform: none;">buildial</h4> -->
							</a>
							<br><br>
									<div class="footer-add">
										<p>Buildial is an online platform that connects commoners with experts in the field of construction that includes Architects, Civil Engineers, Interior designers, Structural Engineers, Vastu consultants and other top professionals.</p>
										<!-- <p>+1 246-345-0695</p>
										<p>info@example.com</p> -->
									</div>
									
								</div>
							</div>		
							<div class="col-lg-4 col-md-4">
								<div class="footer-widget" style="display: flex; justify-content: center;">
									<h4 class="widget-title"></h4>
									<ul class="footer-menu">
										<li><a href="<?php echo $this->Url->build('/pages/aboutUs'); ?>">About us</a></li>
										<li><a href="<?php echo $this->Url->build('/pages/getOnboard'); ?>">Get Onboard</a></li>
										<li><a href="<?php echo $this->Url->build('/pages/blog'); ?>">Blog</a></li>
										<li><a href="<?php echo $this->Url->build('/pages/termsUse'); ?>">Terms of use</a></li>
										<li><a href="<?php echo $this->Url->build('/pages/privacyPolicy'); ?>">Privacy Policy</a></li>
										<li><a href="<?php echo $this->Url->build('/pages/getTouch'); ?>">Get in touch</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-4">
								<div class="footer-widget change_mobile" style="float: right;">
									<h4 class="widget-title"></h4>
									<ul class="footer-bottom-social">
										<li><a href="<?php echo $get_social_links['facebook_link']; ?>" target="_blank"><i class="ti-facebook"></i></a></li>
										<li><a href="<?php echo $get_social_links['twitter_link']; ?>" target="_blank"><i class="ti-twitter"></i></a></li>
										<li><a href="<?php echo $get_social_links['instagram_link']; ?>" target="_blank"><i class="ti-instagram"></i></a></li>
										<li><a href="<?php echo $get_social_links['linkedin_link']; ?>" target="_blank"><i class="ti-linkedin"></i></a></li>
								  </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-12 col-md-12">
								<p class="mb-0 text-center">© <?php echo date('Y'); ?> Designd By <a href="https://amoriotech.com/" target="_blank">AmorioTechnologies</a></p>
							</div>
							
							<!-- <div class="col-lg-6 col-md-6 text-right">
								<ul class="footer-bottom-social">
									<li><a href="<?php echo $get_social_links['facebook_link']; ?>" target="_blank"><i class="ti-facebook"></i></a></li>
									<li><a href="<?php echo $get_social_links['twitter_link']; ?>" target="_blank"><i class="ti-twitter"></i></a></li>
									<li><a href="<?php echo $get_social_links['instagram_link']; ?>" target="_blank"><i class="ti-instagram"></i></a></li>
									<li><a href="<?php echo $get_social_links['linkedin_link']; ?>" target="_blank"><i class="ti-linkedin"></i></a></li>
								</ul>
							</div> -->
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log In</h4>
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<label>User Name</label>
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Username">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Login</button>
									</div>
								
								</form>
							</div>
							<div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
									<li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
								</ul>
							</div>
							<div class="text-center">
								<p class="mt-5"><a href="#" class="link">Forgot password?</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Sign Up Modal -->
			<div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="sign-up">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<!-- <h4 class="modal-header-title">Sign Up</h4> -->
							<div class="login-form">
								<form>
									
									<div class="row">
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<div class="input-with-icon">
													<img src="<?php echo $this->Url->build('/frontend/login/images/bg_1.jpg'); ?>" width="200px">
												</div>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Sign Up</button>
									</div>
								
								</form>
							</div>
							<div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
									<li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
								</ul>
							</div>
							<div class="text-center">
								<p class="mt-5"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">Go For LogIn</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="<?php echo $this->Url->build('/frontend/assets/js/jquery.min.js'); ?>"></script>
		<script src="<?php echo $this->Url->build('/frontend/assets/js/popper.min.js'); ?>"></script>
		<script src="<?php echo $this->Url->build('/frontend/assets/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo $this->Url->build('/frontend/assets/js/rangeslider.js'); ?>"></script>
		<script src="<?php echo $this->Url->build('/frontend/assets/js/select2.min.js'); ?>"></script>
		<script src="<?php echo $this->Url->build('/frontend/assets/js/jquery.magnific-popup.min.js'); ?>"></script>
		<script src="<?php echo $this->Url->build('/frontend/assets/js/slick.js'); ?>"></script>
		<script src="<?php echo $this->Url->build('/frontend/assets/js/slider-bg.js'); ?>"></script>
		<script src="<?php echo $this->Url->build('/frontend/assets/js/lightbox.js'); ?>"></script> 
		<script src="<?php echo $this->Url->build('/frontend/assets/js/imagesloaded.js'); ?>"></script>
		 
		<script src="<?php echo $this->Url->build('/frontend/assets/js/custom.js'); ?>"></script>
		<script src="<?php echo $this->Url->build('/frontend/assets/js/dropzone.js'); ?>"></script>
		<!-- <script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script> -->

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Metro UI -->
    <!-- <script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script> -->
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

		<script>
			function openFilterSearch() {
				document.getElementById("filter_search").style.display = "block";
			}
			function closeFilterSearch() {
				document.getElementById("filter_search").style.display = "none";
			}
		</script>
		
		<script>
			  $(document).ready(function(){
				$("#showbutton").click(function(){
				$("#showing").slideToggle("slow");
			  });
			  });
		</script>

	</body>
</html>



<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Enter card details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <form class="form-inline">
        <div class="modal-body">
				    <div class="form-group">
				      <label>Card number</label>
				      <input type="text" class="form-control" id="email" placeholder="Enter Card number" name="Card number">
				    </div>
				    <div class="form-group">
				      <label>Name on card</label>
				      <input type="text" class="form-control" id="pwd" placeholder="Enter Name Card" name="pwd">
				    </div>
				     <div class="form-group">
				      <label>Expiry Date</label>
				      <div class="row">
				      	 <div class="col-md-6">
				      	 	  <input type="date" class="form-control" name="pwd">
				      	 </div>
				      	 <div class="col-md-6">
				      	 	  <input type="number" class="form-control" placeholder="CCV" min="1" max="3">
				      	 </div>
				      </div>
				    </div>
				 
        </div>
        
        
        <div class="modal-footer">
        	<button type="button" class="btn btn-primary" data-dismiss="modal">Enter card details</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
        
      </div>
    </div>
  </div>



<!-- Property Buyers Popup Start -->

<!-- The Modal -->
  <div class="modal fade" id="property_buyers">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg">
      <div class="modal-content zoom_view">
        <!-- Modal body -->
        <div class="modal-body">
        	<button style="float: right; background-color: transparent;border: none;font-size: 16px;color: #fff;" class="close" data-dismiss="modal">X</button>
        	<h4 class="text-white text-center" style="font-family: 'Calibri Light';"><center>Property Buyers & Sellers</center></h4>
        	<p class="para_view" style="color: #fff; font-size: 16px; font-family: 'Calibri Light';">Welcome Property buyers and Sellers! Here is our list of consultants ready to assist you on your queries. </p>
        	<h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Design releated queries</h4>

            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">|&nbsp;<a style="text-decoration: underline;" id='1' class="text-white property_view size_text" href="<?php echo $this->Url->build('/pages/profession/1'); ?>"> Architectural Design </a>&nbsp;|<a style="text-decoration: underline;" id='2' class="text-white property_view size_text"  href="<?php echo $this->Url->build('/pages/profession/2'); ?>"> Civil </a> |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/3'); ?>"> Interior Design </a> |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/4'); ?>"> Structural Design </a> | <a style="text-decoration: underline;" class="text-white" href="<?php echo $this->Url->build('/pages/profession/5'); ?>"> Vastu </a>|<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/71'); ?>"> Survey </a>|</p>

           <h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Documentation and Legal</h4>
            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">|<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/6'); ?>"> Approval & Building Rules </a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/7'); ?>"> Documentation & Registration </a> | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/8'); ?>"> Property Loan </a> | <br> <center class="font_view item size_text" style="color: #fff; font-size: 16px; font-family: 'Calibri Light';">| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/60'); ?>"> Property Valuer </a> |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/9'); ?>"> Legal Consultation </a> |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/10'); ?>"> NRI </a> |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/11'); ?>">Tax Consultation |</a> </center></p>

            <h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Services</h4>
            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">|<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/12'); ?>"> Electrical </a> |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/13'); ?>"> Plumbing |</a></p>
        </div>
    
      </div>
    </div>
  </div>

<style type="text/css">
	.modal-content{
		background-color: #423e3b !important;
	}

	.modal-header{
		border-bottom: none !important;
		justify-content: flex-end !important;
	}
</style>

<!-- Property Buyers Popup End -->


<!-- New Ongoing Construction Start -->

<!-- The Modal -->
  <div class="modal fade" id="new_ongoing">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg">
      <div class="modal-content zoom_view">
        <!-- Modal body -->
        <div class="modal-body">
        	<button style="float: right; background-color: transparent;border: none;font-size: 16px;color: #fff;" class="close" data-dismiss="modal">X</button>
        	<h4 class="text-white text-center" style="font-family: 'Calibri Light';"><center>New / Ongoing Construction</center></h4>
        	<p class="para_view" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">Congratulations on your new build Reach us to bring your dreams to reality!</p>
        	<h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Design related queries</h4>

            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">|  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/14'); ?>"> Architectural Design</a> |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/15'); ?>"> Civil</a>  |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/61'); ?>"> Demolition </a>  |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/62'); ?>"> GFRG</a>  |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/16'); ?>"> Interior Design </a> &nbsp; | &nbsp;<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/17'); ?>"> Landscape Design</a>  | <center class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; "> |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/63'); ?>"> Lighting Design </a>  |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/64'); ?>"> PEB</a>  |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/18'); ?>"> Structural Design </a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/19'); ?>"> Vastu </a>| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/65'); ?>"> Vernacular </a> |</center></p>

           <h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Documentation and Legal</h4>
            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/20'); ?>"> Approval & Building Rules </a> | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/22'); ?>"> Documentation & Registration </a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/21'); ?>"> Property Loan</a> | <br> <center class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light';">| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/60'); ?>"> Property Valuer </a> |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/23'); ?>"> Legal Consultation </a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/24'); ?>"> Tax Consultation </a> |</center></p>

            <h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Safety Consultation</h4>
            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">|<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/66'); ?>"> Automation </a>|<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/25'); ?>"> CCTV </a>| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/26'); ?>"> Fire & Safety </a> |</p>

            <h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Services Consultation</h4>
            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/27'); ?>"> Electrical </a> | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/28'); ?>"> HVAC </a>  |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/29'); ?>"> Plumbing </a> | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/30'); ?>"> Termite Treatment </a> | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/31'); ?>"> Waterproofing & Damproofing </a> |</p>

            <h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Allied Services</h4>
            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/68'); ?>"> Concealed piped gas </a> |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/32'); ?>"> Rain Water Harvesting </a>  |&nbsp; <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/69'); ?>"> Water and waste water management </a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/34'); ?>"> Soil test </a>  | <center class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light';">| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/35'); ?>"> Solar power </a>  |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/70'); ?>"> Water divining </a> |</center></p>
        </div>
    
      </div>
    </div>
  </div>

<style type="text/css">
	.modal-content{
		background-color: #423e3b !important;
	}

	.modal-header{
		border-bottom: none !important;
		justify-content: flex-end !important;
	}
</style>

<!-- New Ongoing Construction End -->

<!-- RENOVATION & REFURBISHMENT Start -->

<!-- The Modal -->
  <div class="modal fade" id="renovation">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg">
      <div class="modal-content zoom_view">
        <!-- Modal body -->
        <div class="modal-body">
        	<button style="float: right; background-color: transparent;border: none;font-size: 16px;color: #fff;" class="close" data-dismiss="modal">X</button>
        	<h4 class="text-white text-center" style="font-family: 'Calibri Light';"><center>Renovation & Refurbishment</center></h4>
        	<p class="para_view" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">Congratulations on your new build Reach us to bring your dreams to reality!</p>
        	<h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Design related queries</h4>

            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">|&nbsp; <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/37'); ?>"> Architectural Design </a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/38'); ?>"> Civil</a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/73'); ?>"> Demolition </a>  |  <a style="text-decoration: underline;" class="text-white" href="<?php echo $this->Url->build('/pages/profession/74'); ?>"> GFRG </a>  |  <a style="text-decoration: underline;" class="text-white" href="<?php echo $this->Url->build('/pages/profession/39'); ?>"> Interior Design</a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/40'); ?>">  Landscape Design </a>  | <center class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light';"> | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/75'); ?>"> Lighting Design</a>  | <a style="text-decoration: underline;" class="text-white" href="<?php echo $this->Url->build('/pages/profession/76'); ?>"> PEB </a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/41'); ?>"> Structural Design </a>  |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/42'); ?>"> Vastu </a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/77'); ?>"> Vernacular</a>  |</center></p>

           <h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Documentation and Legal</h4>
            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/43'); ?>"> Approval & Building Rules</a>  |  <a style="text-decoration: underline;" class="text-white" href="<?php echo $this->Url->build('/pages/profession/45'); ?>"> Documentation & Registration</a> |  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/44'); ?>"> Property Loan</a> | <br> <center class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light';">|  <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/60'); ?>"> Property Valuer</a> |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/46'); ?>"> Legal Consultation</a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/47'); ?>"> Tax Consultation</a> |</center></p>

            <h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Safety Consultation</h4>
            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/78'); ?>"> Automation </a>| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/48'); ?>"> CCTV</a>  | <a style="text-decoration: underline;" class="text-white" href="<?php echo $this->Url->build('/pages/profession/49'); ?>"> Fire & Safety</a>|</p>

            <h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Services Consultation</h4>
            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">|<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/50'); ?>"> Electrical</a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/51'); ?>"> HVAC</a>  | <a style="text-decoration: underline;" class="text-white" href="<?php echo $this->Url->build('/pages/profession/52'); ?>"> Plumbing</a>  | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/53'); ?>"> Termite Treatment</a> | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/54'); ?>"> Waterproofing & Damproofing </a> |</p>

            <h4 class="text-center" style="font-family: 'Calibri Light'; color: #947b2a;">Allied Services</h4>
            <p class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light'; display: flex; justify-content: center;">| <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/79'); ?>"> Concealed piped gas</a>  |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/55'); ?>"> Rain Water Harvesting</a>| <a style="text-decoration: underline;" class="text-white" href="<?php echo $this->Url->build('/pages/profession/80'); ?>">Water and waste water management</a> |<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/57'); ?>"> Soil test</a> | <center class="font_view item" style="color: #fff; font-size: 16px; font-family: 'Calibri Light';">|<a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/58'); ?>"> Solar power</a> | <a style="text-decoration: underline;" class="text-white size_text" href="<?php echo $this->Url->build('/pages/profession/81'); ?>"> Water divining </a> |</center></p>
        </div>
    
      </div>
    </div>
  </div>


<!--- Login Modal Form Start--->
    <div class="modal fade" id="login_form">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-sm">
      <div class="modal-content zoom_view">
        <!-- Modal body -->
        <div class="modal-body">
        	<button style="float: right; background-color: transparent;border: none;font-size: 1px;color: #fff;" class="close" data-dismiss="modal">X</button>
        	<h4 class="text-white text-center" style="font-family: 'Calibri Light'; text-decoration: underline;"><center>Ask your construction queries from the top professionals in the field</center></h4>
          <br>
           <?= $this->Form->create('login') ?>
        		<div class="form-group">
							<!-- <label class="mb-2">Email Address</label> -->
							<input type="email" name="email" class="form-control" placeholder=" Enter Email address" required>
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" maxlength="10" placeholder="Enter Password" required>
						</div>
						<div class="form-group">
							<button class="btn btn-primary full-width" type="submit">Submit</button>
						</div>
						<div class="modal-footer d-flex justify-content-center">
			        <div class="signup-section text-white" style="font-family: 'Calibri Light';">Not a member? <a data-toggle="modal" data-target="#register_form" style="cursor: pointer;" class="text-white reg_user">Register</a><br>
			        	<a href="#a" class="text-white"><center>Forgot Password?</center></a></div>
			      </div>
			      <?= $this->form->end() ?>
        </div>
      </div>
    </div>
  </div>

<!--- Login Modal Form End --->


  <!--- Register Modal Form Start--->

    <div class="modal fade" id="register_form">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
      <div class="modal-content zoom_view">
        <!-- Modal body -->
        <div class="modal-body">
        	<button style="float: right; background-color: transparent;border: none;font-size: 19px;color: #fff;" class="close" data-dismiss="modal">X</button>
        	<h4 class="text-white text-center" style="font-family: 'Calibri Light'; text-decoration: underline;"><center>Ask your construction queries from the top professionals in the field</center></h4>
          <br>
          <!-- <?php echo $this->Flash->render(); ?> -->
        	 <?= $this->Form->create('register',['url' => '/users/register']) ?>
        	 <!-- <form> -->
        	  <div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
						</div>
        		<div class="form-group">
							<!-- <label class="mb-2">Email Address</label> -->
							<input type="email" name="email" class="form-control" placeholder=" Enter Email address" required>
						</div>
						<div class="form-group">
							<!-- <label class="mb-2">Email Address</label> -->
							<input type="text" name="mobile" class="form-control" maxlength="10" placeholder="Enter Mobile Number" required>
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" maxlength="10" placeholder="Enter Password" required>
						</div>
						<div class="form-group">
							<button class="btn btn-primary full-width" id="register_btn" type="submit">Submit</button>
						</div>
				  <!-- </form> -->
        	<?= $this->form->end() ?>
        </div>
      </div>
    </div>
  </div>

<!--- Register Modal Form End --->





<style type="text/css">
	.modal-content{
		background-color: #423e3b !important;
	}

	.modal-header{
		border-bottom: none !important;
		justify-content: flex-end !important;
	}

	.full-width{
		width:100%;
	}

	.btn-primary{
    background: #1b1e1b !important;
    border: 1px solid #1b1e1b !important;
	}

	@media only screen and (max-width: 480px){

    .font_view{
		font-size: 8px !important; 
		font-weight: bold;
		letter-spacing: 0.4px;
	}

	.para_view{
		font-size: 15px !important;
		text-align: center;
	}

	/*.zoom_view:hover {
  -ms-transform: scale(1.2); 
  -webkit-transform: scale(1.2); 
  transform: scale(1.2); 
  overflow: hidden; 
}*/

.navigation-portrait .nav-menu > li > a{
	width: 82% !important;
}
  .nav-dropdown > li > a{
  	width: 82% !important;
  	border-bottom: none !important;
  }

  .navigation-portrait .submenu-indicator{
  	margin-top: 8px !important;
  }

	}

	.modal.fade .modal-dialog.modal-dialog-zoom {-webkit-transform: translate(0,0)scale(.5);transform: translate(0,0)scale(.5);}
.modal.show .modal-dialog.modal-dialog-zoom {-webkit-transform: translate(0,0)scale(1);transform: translate(0,0)scale(1);}
</style>

<!-- RENOVATION & REFURBISHMENT End -->



<script>
	$(function() {
  $("#country").change(function() {
    let countryCode = $(this).find('option:selected').data('country-code');
    let value = "+" + $(this).val();
    $('#txtPhone').val(value).intlTelInput("setCountry", countryCode);
  });
  
  var code = "+91 ";
  $('#txtPhone').val(code).intlTelInput();
});


$("#other_location").click(function(){
	if ($('input#other_location').is(':checked')) {
    $('#add_input').show();
	}else{
		$('#add_input').hide();
	}
});

$("#visit_consultation").click(function(){
	if ($('input#visit_consultation').is(':checked')) {
    $("#other_location").attr("disabled", true);
    $('#location_dis').hide();
	}else{
		$("#other_location").attr("disabled", false);
		$('#location_dis').show();
	}
});

$(".reg_user").click(function(){
  $('#login_form').hide();
});

// document.getElementById("value").addEventListener("keyup", filterSearch);
// function filterSearch(){
//    var value,view_name,profile,i;
//    value = document.getElementById('value').value.toUpperCase();
//    profile = document.getElementsByClassName('profile');
//   for(i=0;profile.length;i++){
//     view_name = profile[i].getElementsByClassName('view_name');
//     if(view_name[0].innerHTML.toUpperCase().indexOf(value) > -1){
//       profile[i].style.display ="flex";
//       document.getElementById('elemtId').style.display = 'none';
//     }else{
// 			profile[i].style.display = "none";
// 			document.getElementById('elemtId').style.display = 'block';
//     }
//   }  
// }

// Search Data In Json

$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
 	if(document.getElementById('search').value == ""){
 		result.style.display = "none";
 	}else{
 		result.style.display = "block";
 	}
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  var image_url = ('<?php echo $this->Url->build('/webroot/uploads/customers/') ?>');
  $.getJSON('<?php echo $this->Url->build('/pages/searchData'); ?>', function(data) {
   $.each(data, function(key, value){
    if (value.name.search(expression) != -1 || value.location.search(expression) != -1)
    {
     $('#result').append('<li class="list-group-item link-class"><img src="'+image_url+'/'+value.image+'" height="40" width="40" class="img-thumbnail" /> &nbsp; <span class="text-bold">'+value.name+', '+value.qualification+'</span> &nbsp; |&nbsp; <span class="text-muted">'+value.profession+', '+value.experience+' '+value.address+'</span></li>');
    }
   });   
  });

 });

 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").html('');
 });
});



$("#jodSel").on('change',function(){
  var id = $(this).children(":selected").attr("id");
   console.log(id);
  if (id == "1" || id == "2" || id == "3" || id == "4" || id == "5"){
  	$('#location_dis').hide();
  }
  else if (id == "6" || id == "7" || id == "8" || id == "9" || id == "10" || id == "11" || id == "12" || id == "13" || id == "14" || id == "15" || id == "16"){
  	$('#vis_cons').hide();
  }
  else{
   $('#vis_cons').show();
   $('#location_dis').show();
  }
});




$("#login_mob").click(function(){ 
  if ($(window).width() < 768) {
  $('.mobile_pop').hide(); 
}else{
	 $('.mobile_pop').show(); 
}
}); 


// $("#register_btn").click(function(event){
//   event.preventDefault();
//   $.ajax({
//   	method: 'post',
//     url: '<?php echo $this->Url->build('/users/register'); ?>',
//     success: function(data){
//       // console.log(data);
//     }
//   })
// });


// $("#btn_sub").click(function(){
//   $('#register_form').hide();
//   $('#otp_form').modal("show");
// });


// $("#login_btn").click(function(){
//   $('#login_form').hide();
//   $('#loginotp_form').modal("show");
// });

</script> 



<!-- <script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function () {
		$('#login_form').modal('show');
	}, 3000);

	})
</script> -->

<!-- <script type="text/javascript">
$(document).on('click', '.property_view', function () {
    var id = $(this).attr('id');
   
    $.ajax({
    	method: 'post',
    	url: '<?php echo $this->Url->build('/pages/viewData'); ?>',
      data: {id:id},
      success: function(data) {
        console.log(id);
      }
    })
});
</script>   -->

<style type="text/css">
  
  #result {
/*   position: absolute;*/
   width: 100%;
/*   max-width:870px;*/
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }

  
  .size_text{
  	padding: 0px 1px;
  }
 
	@media (max-width: 576px) {
		.nav-dropdown > li > a {
			color: #fff;
		}

	}

	@media only screen and (min-width:321px) and (max-width:992px) and (orientation: portrait){
		.navigation-portrait .nav-menus-wrapper{
      width: 92% !important;
      font-size: 14px;
    }

    section {
		  padding: 30px 0 80px !important;
		}

		.text-bold{
			font-family: 'Calibri Light' !important;
      font-weight: bold !important;
		}

		.text-muted{
			font-family: 'Calibri Light' !important;
		}

		#result{
			max-height: 351px !important;
			width: 382px !important;
/*			margin-top: 5px;*/
			margin-left: -10px;
		}

	  .font_view{
			font-size: 6px !important; 
			font-weight: bold;
			letter-spacing: 0.5px;
		}

		.modal-body {
    min-height: 400px;
    overflow-y: auto;
  }

  .footer-widget{
  	display: block !important;
  }
  .change_mobile{
  	float: left !important;
  }

	}

	@media only screen and (max-width: 992px)and (orientation: landscape){
		.para_view{
			font-size: 15px !important;
			text-align: center;
	  }
	  .font_view{
			font-size: 11px !important; 
			font-weight: bold;
			letter-spacing: 0.5px;
		}
	}	
</style>
