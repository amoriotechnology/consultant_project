<nav id="navigation" class="navigation navigation-landscape mobile_pop">
						<div class="nav-header">
							<a class="nav-brand" href="<?php echo $this->Url->build('/') ?>">
								<!-- <img src="assets/img/logo.png" class="logo" alt="" /> -->
								<img src="<?php echo $this->Url->build('/frontend/assets/img/logo-1.png'); ?>" width="120px">
								<!-- <h4 style="margin-top: 10px; font-family: berlin sans; font-size: 25px; text-transform: none;">buildial</h4> -->
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu" style="position: relative;left: 10px;">

								<li class="active"><a href="<?php echo $this->Url->build('/'); ?>">Home<span class="submenu-indicator"></span></a>
								</li>
                            
								<li><a href="<?php echo $this->Url->build('/about-us'); ?>">About Us<span class="submenu-indicator"></span></a></li>
                                <?php foreach ($view_categories as $key => $view_category) { ?>
								<li><a href="JavaScript:Void(0);"><?php echo $view_category['name']; ?><span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
                                       <?php foreach ($view_category['sub_categories'] as $key => $sub_category) { ?>
										<li><a href="JavaScript:Void(0);"><?php echo $sub_category['name']; ?><span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
                                            <?php foreach ($sub_category['sub_sub_categories'] as $key => $sub_sub_category) { ?>
												<li><a href="<?php echo $this->Url->build('/pages/profession/'.$sub_sub_category['id']); ?>"><?php echo $sub_sub_category['name']; ?></a></li>   
                                                <?php } ?>                               
											</ul>
										</li>
                                        <?php } ?>
									</ul>
								</li>
                                <?php } ?>
                                <li><a href="<?php echo $this->Url->build('/book-appointment'); ?>">Book an Appointment<span class="submenu-indicator"></span></a></li>	
                                <li>
                                	<?php if( empty( $this->request->getSession()->read('Auth.Users') )){ ?>
                                	<a href="<?php echo $this->Url->build('/users/login'); ?>"><i class="fa fa-user mr-2" aria-hidden="true"></i>Login / Register</a>
                                	<?php }else{ ?>
                                	<a href="<?php echo $this->Url->build('/users/logout'); ?>"><i class="ti ti-share-alt mr-2" aria-hidden="true"></i>Logout</a>

                                	<!-- <a href="<?php echo $this->Url->build('/users/dashboard'); ?>"><i class="ti ti-dashboard mr-2" aria-hidden="true"></i>My Account</a>	 -->
                                	<?php } ?>
									<!-- <a id="login_mob" data-toggle="modal" data-target="#login_form" style="cursor: pointer;" class="text-primary"><i class="fa fa-user mr-2" aria-hidden="true"></i>Login</a><span style="color: #fff; position: relative; top: 2px;">/</span><a data-toggle="modal" data-target="#register_form" style="cursor: pointer;" class="text-primary"> Register</a> -->
								</li>
							</ul>

							
							<!-- <ul class="nav-menu nav-menu-social align-to-right">
								
								<li>
									<a data-toggle="modal" data-target="#login_form" style="cursor: pointer;" class="text-primary"><i class="fa fa-user mr-2" aria-hidden="true"></i>Login</a>
								</li>
								<li><a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</a></li>
								<li class="add-listing">
									<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><img src="assets/img/user-light.svg" width="12" alt="" class="mr-2" />Sign In</a>
								</li>
							</ul> -->
						</div>
					</nav>